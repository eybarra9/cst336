<?php
    $backgroundImage = "img/sea.jpg";
    
    // API call goes here
    if (isset($_GET['keyword']))
    {
        include 'api/pixabayAPI.php';
        $keyword = $_GET['keyword'];
        $imageURLs = getImageURLs($keyword);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
        
    }
    else if (isset($_GET['category']))
    {
        include 'api/pixabayAPI.php';
        $category = $_GET['category'];
        $imageURLs = getImageURLs($category);
        $backgroundImage = $imageURLs[array_rand($imageURLss)];
    }

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Image Carousel</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            @import url("css/styles.css");
            body {
                background-image: url(<?=$backgroundImage?>);
                background-size: 100%;
            }
        </style>
    </head>
    
    <body>
        
        <br/> <br/>
        <?php
            if(!isset($imageURLs))
            {
                // form has not been submited
                echo "<h2>Type a keyword to display a slideshow with random images from Pixabay<h2>";
            }
            else if(empty($_GET['keyword']))
            {
                echo "<h2> Keyword is empty!!!<h2>";
                echo "<h2> Please type something in the keyword box or choose a category <h2>";
                echo "<h2> In order to show carousel <h2>";
            }
            else
            {
                // form was submitted
                // print_r($imageURLs); // checking that $imageURLs is not null
            

        ?>
        
        <div id = "carousel-example-generic" class ="carousel slide" data-ride="carousel">
    
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                    for ($i = 0; $i < 7; $i++)
                    {
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0)? "class='active'": "";
                        echo "></li>";
                    }
                ?>
            </ol>
            
            <!-- Wrapper for Images -->
            <div class="carousel-inner" role="listbox">  
                <?php
                    // Display Carousel Here
                    for ($i = 0; $i < 7; $i++)
                    {
                        do
                        {
                            $randomIndex = rand(0, count($imageURLs));
                        }while (!isset($imageURLs[$randomIndex]));
            
                        echo '<div class ="carousel-item ';
                        echo ($i == 0)?"active": "";
                        echo '">';
                        echo '<img src="' . $imageURLs[$randomIndex] . '">';
                        echo '</div>';
                        unset($imageURLs[$randomIndex]);
                    }
                ?>
            </div>
        
            <!-- Controls Here -->
            <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            
        </div>
        
        <?php
            }// endElse statement
        ?>
        <br>
        
        <!-- HTML form goes here -->
        <form>
            <input type="text" name="keyword" placeholder="Keyword" value="<?=$_GET['keyword']?>"/>
            <input type = "radio" id = "lhorizontal" name = "layout" value = "horizontal" >
            <label for = "horizontal"></label><label for = "lhorizontal"> Horizontal </label>
            <input type = "radio" id = "lvertical" name = "layout" value = "vertical" >
            <label for = "vertical"></label><label for="lvertical"> Vertical </label>
            <select name = "category">
                <option value = "">Select One</option>
                <option value = "ocean">Sea</option>
                <option value = "forest">Forest</option>
                <option value = "mountain">Mountain</option>
                <option value = "snow">Snow</option>
                <option value = "galaxy">Galaxy</option>
            </select>
            <input type="submit" value="Search" />
        </form>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>