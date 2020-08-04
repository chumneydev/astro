<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cardinal Grid</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />

    <link rel="stylesheet" href="dist/css/cdl.css">
    <link rel="stylesheet" href="dist/css/home.css">
</head>
<body>



<!-- app -->
<div id="app">


    <!-- header -->
    <div id="header">
        <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
    <!-- header -->

    <!-- sidebar -->
    <div id="sidebar">
        <h2>Components</h2>
        <ul>
            <li><a href="#started">Getting Started</a></li>
            <li><a href="#grid">Grid</a></li>
            <li><a href="#forms">Forms</a></li>
            <li><a href="#buttons">Buttons</a></li>
            <li><a href="#backgrounds">Backgrounds</a></li>
            <li><a href="#helpers">Helpers</a></li>
            <li><a href="#overlays">Text Overlays</a></li>
        </ul>
    </div>
    <!-- sidebar -->


    <!-- content -->
    <div id="content" data-simplebar>

        <?php include("docs/docs.php"); ?>






    </div>
    <!-- content -->



</div>
<!-- app -->













<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>


</body>
</html>