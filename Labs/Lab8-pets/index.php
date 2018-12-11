<?php
    include 'inc/header.php';
    include 'inc/function.php';
    
    $petList = getPetList();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> CSUMB: Pet Shelter </title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            body {
                text-align: center;
            }
        </style>
   
    </head>
    <body>
        
    <!-- Add Carousel component -->
        <div class="container">
            <div id="carousel-pets" class="carousel slide m-auto" data-ride="carousel" style="width: 300px;">
                <ol class="carousel-indicators">
                    <?php foreach ($petList as $i => $pet) : ?>
                        <li data-target="#carousel-pets" data-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active' : '' ?>"></li>
                    <?php endforeach; ?>
                </ol>
    
                <div class="carousel-inner">
                    <?php foreach ($petList as $i => $pet) : ?>
                        <div class="carousel-item<?= $i == 0 ? ' active' : '' ?>">
                            <img src="img/<?= $pet['pictureURL'] ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carousel-pets" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carousel-pets" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
    
            <br /><br />
            <a class="btn btn-outline-primary" href="pets.php" role="button">Adopt Now!</a>
            <br /><br />
        </div>
    
    
<?php
    include 'inc/footer.php';
?>