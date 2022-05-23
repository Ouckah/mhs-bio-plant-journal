<?php
    include_once 'header.php';
?>

<div class="container">
    <div class="plant-form-header">

        <h1>Plant Information Form</h1>

    </div>
</div>

<div class="container">
    <div class="plant-form">

        <form>   
            <label for='plant-common-name'>Common Name</label>
            <input type='text' id='plant-common-name' name='common-name' placeholder="Plant's name...">

            <br>
            
            <label for='plant-scientific-name'>Scientific Name</label>
            <input type='text' id='plant-scientific-name' name='scientific-name' placeholder="Plant's scientific name...">

            <br>

            <input type='checkbox' id='native' name='native'>
            <label for='native'>Native</label>

            <br>

            <input type='checkbox' id='invasive' name='invasive'>
            <label for='invasive'>Invasive</label>

            <br>

            <input type='checkbox' id='naturalized' name='naturalized'>
            <label for='naturalized'>Naturalized</label>

            <br>
            
            <input type='checkbox' id='pollinator' name='pollinator'>
            <label for='pollinator'>Pollinator</label>

            <br>

            <input type='checkbox' id='edible' name='edible'>
            <label for='edible'>Edible</label>

            <br>

            <input type='checkbox' id='poisonous' name='poisonous'>
            <label for='poisonous'>Poisonous</label>

            <br>

            <label for='notes'>Notes / Comments</label>
            <input type='text' cols='40' rows='10' id='notes' name='notes' placeholder="Notes and comments...">

            <br>

            <input type='submit' value='Submit'>
        </form>

    </div>
</div>

<?php
    include_once 'footer.php';
?>