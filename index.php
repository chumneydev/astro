<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cardinal Grid</title>
    <link rel="stylesheet" href="dist/css/cardinal.css">
    <link rel="stylesheet" href="dist/css/home.css">
    <link rel="stylesheet" href="dist/css/default.css">
    <link rel="stylesheet" href="dist/css/monokai.css">



</head>

<body>

    <div id="sidebar">
        <ul>
            <li><a href="#starting">Getting Started</a></li>
            <li><a href="#grid">Grid</a></li>
            <li><a href="#colors">Colors</a></li>
            <li><a href="#updating">Updating</a></li>
        </ul>
    </div>





    <!-- containter -->
    <div id="ca-container" class="small">

        <div id="starting">
            <section>
                <div class="column">
                    <p>Welcome to the new Chumney css grid, "cardinal". It is currently based on flexbox (but will incorporate features of cssgrid in the near future.</p>
                    <p>To get started, all you need is the following css link in your head tag:</p>
                </div>
            </section>

            <section>
                <div class="column">
                    <pre><code data-language="html">&lt;link rel="stylesheet" href="https://theautohost.com/_cardinal/bundle/dist/css/cardinal.min.css"&gt;</code></pre>

                </div>

            </section>


        </div>



        <section>
            <div class="column">
                <p>We tried making the structure of the new grid much easier to follow and write than the previous version. All you currently need to create a row is:</p>

                <p>The code to the right will produce the below</p>
            </div>
        </section>

        <section>
            <div class="column">
                <?php include('examples/section.php'); ?>

            </div>

        </section>




        <section>
            <div class="column">
                <div class="inner demo">
                    <p>Column</p>
                </div>
            </div>

            <div class="column">
                <div class="inner demo">
                    <p>Column</p>
                </div>
            </div>

        </section>


        <section>
            <div class="column">
                <p>This allows us to add as many columns as we want without needing classes for each column size. All columns will auto fill the remaining space making odd numbers possible.</p>
            </div>

        </section>


        <div id="updating">
            <section>
                <div class="column">
                    <p>We have made updating the css as easy as possible as well in this version.</p>
                    <p>All the css has been written in scss.</p>
                    <p>Once you have pushed the changes/updates to the git repository, the files are automatically pushed to the autohost updating the file.</p>
                </div>
            </section>



        </div>





        <!-- containter -->

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="dist/js/rainbow-custom.min.js"></script>
        <script src="dist/js/cardinal-min.js"></script>



</body>
<script type="text/javascript">

</script>

</html>