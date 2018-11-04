<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> Soccer Penalty Game</title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        
        <h1>
            Will You Score?
        </h1>
        
        <div id = "main">
            <figure id = "startingPoint">
                <img src = "img/penalty_starting_point.jpg" alt = "Image of a penalty in soccer about to be taken." />
            </figure>
            <p>
                Choose either left, middle or right to attempt to score and win the game
            </p>
            <form action = "results.php">
                <input type = "submit" value = "Left" />
                <input type = "submit" value = "Middle" />
                <input type = "submit" value = "Right" />
            </form>
        </div>
        
        <footer>
            <br /><br />
            <hr style = "width:100%"/>
                CST336 Internet Programming. 2018&copy; Ybarra <br />
                <strong> Disclaimer: </strong> The information in this webpage is factual. <br />
                It is used for academic purposes only.
            <figure id = "csumbLogo">
                <img src = "img/csumb_logo.png" alt = "CSUMB Logo" />
            </figure>
        </footer>
        
    </body>
</html>