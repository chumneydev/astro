var gulp = require("gulp");
var sass = require("gulp-sass");
var browserSync = require("browser-sync").create();
var autoprefixer = require("autoprefixer");
var rename = require("gulp-rename");
var cssnano = require("cssnano");
var postcss = require("gulp-postcss");
var minify = require("gulp-minify");
//var bourbon = require("bourbon").includePaths;
//var neat = require("bourbon-neat").includePaths;

// Put this after including our dependencies
var paths = {
    styles: {
        // By using styles/**/*.sass we're telling gulp to check all folders for any sass file
        src: "./bundle/src/scss/*.scss",
        // Compiled files will end up in whichever folder it's found in (partials are not compiled)
        dest: "./bundle/dist/css/"
    },
    php: {
        src: './*.php',
    },
    scripts: {
        src: "./bundle/src/js/*.js",
        dest: "./bundle/dist/js/"
    }



    // Easily add additional paths
    // ,html: {
    //  src: '...',
    //  dest: '...'
    // }
};



// ...

function style() {
    return gulp
        .src(paths.styles.src)
        .pipe(sass({
            outputStyle: "expanded"
        }))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(postcss([autoprefixer({
            browsers: ['> 1%', 'last 3 versions', 'Firefox >= 20', 'iOS >=7']
        }), cssnano()]))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream())


}



/*function style() {
    return gulp
        .src(paths.styles.src)
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(autoprefixer())
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream())
}*/
exports.style = style;

function php() {
    return gulp
        .src(paths.php.src)
        .pipe(browserSync.stream())
}
exports.php = php;


function script() {
    return gulp
        .src(paths.scripts.src)
        .pipe(minify({
            noSource: true
        }))
        .pipe(gulp.dest(paths.scripts.dest))
        .pipe(rename({
            suffix: ".min"
        }))

}

exports.script = script;





function watch() {


    browserSync.init({
        // You can tell browserSync to use this directory and serve it as a mini-server
        port: 8181,
        proxy: "http://192.168.12.3:8888/development/projects/cardinal-grid/cardinal-louis"
        // If you are already serving your website locally using something like apache
        // You can use the proxy setting to proxy that instead
        // proxy: "yourlocal.dev"
    });


    //I usually run the compile task when the watch task starts as well
    style();
    script();

    gulp.watch(paths.styles.src, style);
    gulp.watch(paths.scripts.src, script);
    gulp.watch(paths.php.src, php);






}
exports.watch = watch
