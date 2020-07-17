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
</head>
<body>

<!-- container -->
<div id="ca-container" class="is-tablet" >
    
    <section class="is-mobile">
        <div class="column is-three-fourths">
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
        <div class="column">
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
        <div class="column">
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
    </section>        
    
    

 
    <!-- form -->
    <section>
        <div class="column">

            <form class="ca-form">
                <section>
                    <div class="column">
                        <label for="" class="is-required">Ridiculus Cras</label>
                        <input type="text" name="" id="" placeholder="Ridiculus Cras"  required>
                    </div>
    
                    <div class="column">
                        <label for="">Ridiculus Cras</label>
                        <input type="text" name="" id="" placeholder="Ridiculus Cras"  required>
                    </div>
                </section>
                <section>
                    <div class="column">
                        <label for="" class="is-required">Ridiculus Cras</label>
                        <textarea id="" name="" rows="4" cols="50" >Comments</textarea>
                    </div>
    
                </section>

                <section>
                    <div class="column">
                        <p>Select Your Options</p>
                        <div class="ca-radio">
                            <input type="radio" id="radioApple" name="radioFruit" value="apple">
                            <label for="radioApple">Apple</label>

                            <input type="radio" id="radioBanana" name="radioFruit" value="banana">
                            <label for="radioBanana">Banana</label>

                            <input type="radio" id="radioOrange" name="radioFruit" value="orange">
                            <label for="radioOrange">Orange</label>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="column">
                        <select class="ca-select">
                            <option>This is a native select element</option>
                            <option>Apples</option>
                            <option>Bananas</option>
                            <option>Grapes</option>
                            <option>Oranges</option>
                        </select>
                    </div>
                </section>
            </form>
    
        </div>
    </section>
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