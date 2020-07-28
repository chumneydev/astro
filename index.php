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
<div id="docs">
<div id="sidebar">
    <ul>
        <li><a href="#grid">Grid</a></li>
        <li><a href="#forms">Forms</a></li>
        <li><a href="#buttons">Buttons</a></li>
        <li><a href="#backgrounds">Backgrounds</a></li>
        <li><a href="#helpers">Helpers</a></li>
    </ul>
</div>    

<!-- container -->
<div id="ca-container" class="home is-desktop" >
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
        <?php include("docs/buttons.php"); ?>
    </div>
    <!-- buttons -->


    <!-- helpers -->
    <div id="helpers">
        <?php include("docs/helpers.php"); ?>
    </div>
    <!-- helpers -->


 

    <section>
        <div class="column" >
            <div class="inner test" data-image="http://192.168.12.3:8888/internal-projects/cardinal-grid/dist/images/header.png">
                <h3>Background Image Placeholder</h3>
            </div>
        </div>
    </section>
























</div>
<!-- container -->
</div>















<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script type="text/javascript">
var list = document.querySelectorAll("div[data-image]");

for (var i = 0; i < list.length; i++) {
  var url = list[i].getAttribute('data-image');
  list[i].style.backgroundImage="url('" + url + "')";
}

</script>


</body>
</html>