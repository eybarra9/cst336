<?php
    
    function play()
    {
            $randomChoice = rand(0,5);
            displayResultImage(${"randomChoice" . $i}, $i);
            displayResult($randomChoice1, $randomChoice2, $randomChoice3,$randomChoice4,$randomChoice5,$randomChoice6);
        
    }
    
    
    function displayResultImage($randomChoice, $pos)
        {
            switch($randomChoice)
            {
                case 0: $symbol = "penalty_saved_left";
                        break;
                case 1: $symbol = "penalty_saved_middle";
                        break;
                case 2: $symbol = "penalty_saved_right";
                        break;
                case 3: $symbol = "penalty_scored_left"; 
                        break;
                case 4: $symbol = "penalty_scored_middle"; 
                        break;
                case 5: $symbol = "penalty_scored_right"; 
                        break;
            }
            echo "<img id = 'reel$pos' src = 'img/$symbol.gif' alt = '$symbol' title ='".ucfirst($symbol) . "' width = '70' >"; 
            
        }
            
            
    function displayResult($randomChoice1, $randomChoice2, $randomChoice3,$randomChoice4,$randomChoice5,$randomChoice6)
        {
            echo "<div id = 'output'>";
            if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3)
            {
                switch ($randomValue1)
                {
                    case 0: $symbol = "penalty_saved_left";
                            echo "<h2>You Missed!</h2>";
                            break;
                    case 1: $symbol = "penalty_saved_middle";
                            echo "<h2>You Missed!</h2>";
                            break;
                    case 2: $symbol = "penalty_saved_right";
                            echo "<h2>You Missed!</h2>";
                            break;
                    case 3: $symbol = "penalty_scored_left";
                            echo "<h2>You Scored!</h2>";
                            echo "<audio src = 'img/goal_scored_sound.mp3' autoplay loop></audio>";
                            break;
                    case 4: $symbol = "penalty_scored_middle";
                            echo "<h2>You Scored!</h2>";
                            echo "<audio src = 'img/goal_scored_sound.mp3' autoplay loop></audio>";
                            break;
                    case 5: $symbol = "penalty_scored_right";
                            echo "<h2>You Scored!</h2>";
                            echo "<audio src = 'img/goal_scored_sound.mp3' autoplay loop></audio>";
                            break; 
                }
            }
            echo "</div>"; 
        }
?>