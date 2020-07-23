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
    
    <!-- grid -->
    <div id="grid">
        
        <section>
            <div class="column">
                <h1>Grid</h1>
                <p>The new grid structure should be the easiest grid to implement that we have ever had. We have slimmed down the markup to hopefully be easier to understand. All you need for a simple grid is the following:</p>
            </div>
        </section>

        <pre>
        <code>    
            &lt;section>
                &lt;div class="column">&lt;/div>
            &lt;/section>    
        </code>    
        </pre>

        <section>
            <div class="column">
                <p>To break it down, section is your row and the div "column" is your column. The interesting part of the new grid is that columns will automatically fill the remaining space of the section.</p>
            </div>
        </section>

        <section>
            <div class="column">
                <div class="demo"></div>
            </div>
            <div class="column">
                <div class="demo"></div>
            </div>
        </section>

        <pre>
        <code>    
            &lt;section>
                &lt;div class="column">&lt;/div>
                &lt;div class="column">&lt;/div>
            &lt;/section>    
        </code>    
        </pre>

        <section>
            <div class="column">
                <p>If you need a column to take up a more specific width, we have the following modifiers to use:</p>
                <ul>
                    <li>.is-one-fourth</li>
                    <li>.is-three-fourths</li>
                    <li>.is-one-third</li>
                    <li>.is-two-thirds</li>
                </ul>
                <p>Just add one of the following to your column to achieve the new width. The sibling column will automatically resize to fill the remain space.</p>    
            </div>
        </section>

        <section>
            <div class="column is-three-fourths">
                <div class="demo"></div>
            </div>
            <div class="column">
                <div class="demo"></div>
            </div>
        </section>

        <pre>
        <code>    
            &lt;section>
                &lt;div class="column is-three-fourths">&lt;/div>
                &lt;div class="column">&lt;/div>
            &lt;/section>    
        </code>    
        </pre>

         <section>
            <div class="column">
                <p>Note: Only use one of these modifiers per row.</p>
            </div>
        </section>

      <section>
            <div class="column">
                <p>If you need more granular control over the widths, you can use the following modifiers as well:</p>
                <ul>
                    <li>.is-one</li>
                    <li>.is-two</li>
                    <li>.is-three</li>
                    <li>.is-four</li>
                    <li>.is-five</li>
                    <li>.is-six</li>
                    <li>.is-seven</li>
                    <li>.is-eight</li>
                    <li>.is-nine</li>
                    <li>.is-ten</li>
                    <li>.is-eleven</li>
                    <li>.is-twelve</li>
                </ul>
            </div>
        </section>


     <section>
            <div class="column is-one">
                <div class="demo"></div>
            </div>
        </section>


    </div>
    <!-- grid -->

    

 
    <!-- form -->
    <section id="forms">
        <div class="column">
            <h1>Forms</h1>
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
                        <p>Contact Me By</p>
                        <div class="ca-radio">
           

                            <input type="radio" id="phone" name="contact-method" value="phone">
                            <label for="phone">Phone</label>

                            <input type="radio" id="email" name="contact-method" value="email">
                            <label for="email">Email</label>


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