<!--<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cardinal Grid</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />

    <link rel="stylesheet" href="../dist/css/cdl.css">
    <link rel="stylesheet" href="../dist/css/home.css">
</head>
<body>


<div class="ca-container">-->

<section>
    <div class="column">
        <h1>Forms</h1>
        <p>If you add a class of .is-required to a label, the css will automatically add the * to the end of the label as shown in the example below.</p>
    </div>
</section>


<section>
    <div class="column">
        <form class="ca-form">
            <section>
                <div class="column has-field">
                    <input type="text" name="firstname" id="firstname" required>
                    <label for="firstname" class="is-required">First Name</label>
                </div>
                <div class="column has-field">
                    <input type="text" name="lastname" id="lastname" required>
                    <label for="lastname" class="is-required">Last Name</label>
                </div>
            </section>
            <section>
                <div class="column has-field">
                    <textarea id="" name="" rows="4" cols="50" ></textarea>
                    <label for="" class="is-required">Comments</label>
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
                        <option>Please Make a Selection</option>
                        <option value="apples">Apples</option>
                        <option value="bananas">Bananas</option>
                        <option value="grapes">Grapes</option>
                        <option value="oranges">Oranges</option>
                    </select>
                </div>
            </section>
        </form>
    </div>
</section>

<!--</div>





</body>
</html>-->