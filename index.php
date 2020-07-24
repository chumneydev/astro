<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cardinal Grid</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/cdl.css">
    <link rel="stylesheet" href="dist/css/home.css">

<style type="text/css">

    /*.column {
        background: #dfe0e3;
        border: 1px solid #009ffe;
    }*/

</style>



</head>
<body>

<!-- container -->
<div id="ca-container" class="is-tablet" >
    <section>
        <div class="column is-half is-acura">
                <p>Column</p>
        </div>
        <div class="column is-half">
        <a href="#" class="btn is-bmw">Hello</a>
        </div>
    </section>




    <!-- grid -->
    <div id="grid">
        <?php include("docs/grid.php"); ?>
    </div>
    <!-- grid -->

    

 
    <!-- form -->
    <div id="forms">
        <?php include("docs/forms.php"); ?>
    </div>
    <!-- form -->




    <!-- buttons -->
    <div id="buttons">
        <h1>Buttons</h1>
        <p>Buttons are simple to set up. Simply add a class of .btn to an anchor element and combine it with one of the following manufacturers to get the desired color.</p>

        <section>
            <div class="column">
                <a href="#" class="btn is-acura">.is-acura</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-audi">.is-audi</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-buick">.is-buick</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-bmw">.is-bmw</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-cadillac">.is-cadillac</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-chevy">.is-chevy</a>
            </div>
        </section>    

        <section>
            <div class="column">
                <a href="#" class="btn is-fiat">.is-fiat</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-ford">.is-ford</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-gmc">.is-gmc</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-honda">.is-honda</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-hyundai">.is-hyundai</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-infiniti">.is-infiniti</a>
            </div>
        </section>
        
        <section>
            <div class="column">
                <a href="#" class="btn is-kia">.is-kia</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-lexus">.is-lexus</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-lincoln">.is-lincoln</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-maserati">.is-maserati</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-mazda">.is-mazda</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-mini">.is-mini</a>
            </div>
        </section>

        <section>
            <div class="column">
                <a href="#" class="btn is-mercedes">.is-mercedes</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-mitsubishi">.is-mitsubishi</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-nissan">.is-nissan</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-subaru">.is-subaru</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-toyota">.is-toyota</a>
            </div>
            <div class="column">
                <a href="#" class="btn is-volvo">.is-volvo</a>
            </div>
        </section>
        
        <section>
            <div class="column is-two">
                <a href="#" class="btn is-vw">.is-vw</a>
            </div>
        </section>
        
        


    </div>
    <!-- form -->




























</div>
<!-- container -->















<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="dist/js/responsive.js"></script>

<script type="text/javascript">
var el = new ElementMediaQuery(document.getElementById('ca-container'), {small: {minWidth:200, maxWidth: 600}, medium: {minWidth:600, maxWidth: 800}});

document.getElementById('ca-container').addEventListener('onWidthChange', function (e) { 
    console.log('Width Changed')
}, false);


</script>


</body>
</html>