<?php
    include 'inc/functions.php';
                
    session_start();
    
    if(isset($_POST['q1'])) 
    {
        $_SESSION['q1'] = $_POST['q1'];
    }
    if(isset($_POST['q2'])) 
    {
        $_SESSION['q2'] = $_POST['q2'];
    }
    if(isset($_POST['q3'])) 
    {
        $_SESSION['q3'] = $_POST['q3'];
    }
    if(isset($_POST['q4'])) 
    {
        $_SESSION['q4'] = $_POST['q4'];
    }
    if(isset($_POST['q5'])) 
    {
        $_SESSION['q5'] = $_POST['q5'];
    }
    
    session_destroy(); 
    errorCheck();
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> Solar System Quiz </title>
        <meta charset = "utf-8">
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    
    <body>
        
        <header>
            <h1> Solar System Quiz </h1>
        </header>
        
        <div id = "main">
            <form method = "post">
                <h3>Name:<input type="text" id = "textBox" name="txtBox" placeholder = "Enter Name" value = "<?php echo $_POST['txtBox']; ?>" /></h3>
                
                <h3>1) How many planets are there in our solar system ?<h3>
                <select name = "q1" id = "selectBox">
                    <option value = "">Select One</option>
                    <option <?php if ($_SESSION['q1'] == 'eight') { ?>selected="true" <?php }; ?> value = "eight">Eight</option>
                    <option <?php if ($_SESSION['q1'] == 'nine') { ?>selected="true" <?php }; ?> value = "nine" > Nine</option>
                    <option <?php if ($_SESSION['q1'] == 'ten') { ?>selected="true" <?php }; ?> value = "ten" > Ten</option>
                    <option <?php if ($_SESSION['q1'] == 'twelve') { ?>selected="true" <?php }; ?> value = "twelve" > Twelve</option>
                </select>
                <hr style = "width:50%"/>
                <h3>2) Which planet is closest to the Sun?</h3>
                <input type = "radio" id = "circleChoice" name = "q2" <?php if (isset($_SESSION['q2']) && $_SESSION['q2'] == "Venus") echo 'checked' ; ?> value = "Venus">
                <label for = "Venus"> Venus </label><br>
                <input type = "radio" id = "circleChoice" name = "q2" <?php if (isset($_SESSION['q2']) && $_SESSION['q2'] == "Neptune") echo 'checked' ; ?> value = "Neptune" >
                <label for = "Neptune"> Neptune </label><br>
                <input type = "radio" id = "circleChoice" name = "q2" <?php if (isset($_SESSION['q2']) && $_SESSION['q2'] == "Jupiter") echo 'checked' ; ?> value = "Jupiter" >
                <label for = "Jupiter"> Jupiter </label><br>
                <input type = "radio" id = "circleChoice" name = "q2" <?php if (isset($_SESSION['q2']) && $_SESSION['q2'] == "Mercury") echo 'checked' ; ?> value = "Mercury" >
                <label for = "Mercury"> Mercury </label>
                <hr style = "width:50%"/>
                <h3>3) Which planet is known for having a ring?</h3>
                <input type = "checkbox" id = "checkBox" name = "q3" <?php if (isset($_SESSION['q3']) && $_SESSION['q3'] == "Mercury") echo 'checked' ; ?> value = "Mercury"  >
                <label for = "Mercury"> Mercury </label><br>
                <input type = "checkbox" id = "checkBox" name = "q3" <?php if (isset($_SESSION['q3']) && $_SESSION['q3'] == "Venus") echo 'checked' ; ?> value = "Venus"  >
                <label for = "Venus"> Venus </label><br>
                <input type = "checkbox" id = "checkBox" name = "q3" <?php if (isset($_SESSION['q3']) && $_SESSION['q3'] == "Earth") echo 'checked' ; ?> value = "Earth"  >
                <label for = "Earth"> Earth </label><br>
                <input type = "checkbox" id = "checkBox" name = "q3" <?php if (isset($_SESSION['q3']) && $_SESSION['q3'] == "Mars") echo 'checked' ; ?> value = "Mars"  >
                <label for = "Mars"> Mars </label><br>
                <input type = "checkbox" id = "checkBox" name = "q3" <?php if (isset($_SESSION['q3']) && $_SESSION['q3'] == "Jupiter") echo 'checked' ; ?> value = "Jupiter"  >
                <label for = "Jupiter"> Jupiter </label><br>
                <input type = "checkbox" id = "checkBox" name = "q3" <?php if (isset($_SESSION['q3']) && $_SESSION['q3'] == "Saturn") echo 'checked' ; ?> value = "Saturn"  >
                <label for = "Saturn"> Saturn </label><br>
                <input type = "checkbox" id = "checkBox" name = "q3" <?php if (isset($_SESSION['q3']) && $_SESSION['q3'] == "Uranus") echo 'checked' ; ?> value = "Uranus"  >
                <label for = "Uranus"> Uranus </label><br>
                <input type = "checkbox" id = "checkBox" name = "q3" <?php if (isset($_SESSION['q3']) && $_SESSION['q3'] == "Neptune") echo 'checked' ; ?> value = "Neptune"  >
                <label for = "Neptune"> Neptune </label>
                <hr style = "width:50%"/>
                <h3>4) What planet is this?</h3>
                <img id = "saturn" src = "img/neptune.png" alt = "Picture of the planet Neptune"><br>
                <input type = "radio" id = "circleChoice" name = "q4" <?php if (isset($_SESSION['q4']) && $_SESSION['q4'] == "The Sun") echo 'checked' ; ?> value = "The Sun" >
                <label for = "The Sun"> The Sun </label><br>
                <input type = "radio" id = "circleChoice" name = "q4" <?php if (isset($_SESSION['q4']) && $_SESSION['q4'] == "Neptune") echo 'checked' ; ?> value = "Neptune" >
                <label for = "Neptune"> Neptune </label><br>
                <input type = "radio" id = "circleChoice" name = "q4" <?php if (isset($_SESSION['q4']) && $_SESSION['q4'] == "Jupiter") echo 'checked' ; ?> value = "Jupiter" >
                <label for = "Jupiter"> Jupiter </label><br>
                <input type = "radio" id = "circleChoice" name = "q4" <?php if (isset($_SESSION['q4']) && $_SESSION['q4'] == "Mars") echo 'checked' ; ?> value = "Mars" >
                <label for = "Mars"> Mars </label>
                <hr style = "width:50%"/>
                <h3>5) Which planet do we live on?</h3>
                <input type = "text" id = "textBox" name = "q5" placeholder = "Enter Answer" value = "<?php echo $_SESSION['q5']; ?>" >
                <br><br>
                <input type = "submit" id = "submitButton" name = "submitQuiz" value = "Submit" >
                
            </form>
        </div>

        <?php
            displayResults();
        ?>
        
        <footer>
            <br><br>
            <hr style = "width:100%"/>
                CST336 Internet Programming. 2018&copy; Ybarra <br>
                <strong> Disclaimer: </strong> The information in this webpage may be fictatious. <br>
                It is used for academic purposes only.
            <figure id = "csumbLogo">
                <img src = "img/csumb_logo.png" alt = "CSUMB Logo" />
            </figure>
        </footer>
        
    </body>
</html>