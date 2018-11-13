<?php

    function errorCheck() 
    {
        if(isset($_POST['submitQuiz'])) 
        { 
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
        
            if (empty($_POST['q1']) || (empty($_POST['q2'])) || (empty($_POST['q3'])) || (empty($_POST['q4'])) || (empty($_POST['q5']))) 
            {
           
                echo "<h2> <span style = 'color: red' > ERROR!!! </span></h2>";
                echo "<h2> <span style = 'color: red' > You must answer the questions to continue </span></h2>";       
                
            }
        }
        
    }
    
    function displayResults()
    {
        if (!empty($_POST['q1']) || (!empty($_POST['q2'])) || (!empty($_POST['q3'])) || (!empty($_POST['q4'])) || (!empty($_POST['q5']))) 
        {
            
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = strtolower($_POST['q5']);
            
            $score = 0;
            
            if($q1 == "eight") {$score++;}
            if($q2 == "Mercury") {$score++;}
            if($q3 == "Jupiter") {$score++;}
            if($q4 == "Neptune") {$score++;}
            if($q5 == "earth") {$score++;}
            
            echo "<div id = 'results' >";
            echo "<h2> Quiz Results </h2>";
            echo "<h3> Hello " . $_POST['txtBox'] . "</h3>";
            echo "<h3> You got $score / 5 correct </h3>";
            echo "</div>";
            
        }

    }
?>