<?php
    
    include 'inc/header.php';
    include 'inc/function.php';
    
?>

<script>
    $(document).ready( function() {
    
        $(".petLink").click( function() {
            
            //alert($(this).attr('id'));
            $('#petInfoModal').modal("show");
            $("#petInfo").html("<img src='img/loading.gif'>");
            
            $.ajax ({
                type: "GET",
                url: "api/getPetInfo.php",
                dataType: "json",
                data: { "id": $(this).attr('id')},
                success: function(data,status) {
                    
                    console.log(data);
                    $("#petInfo").html(" <img src = 'img/" + data.pictureURL + "'><br>" +
                                         " Age: " + data.age + "<br>" + 
                                         " Breed: " + data.breed + "<br>" +
                                         data.description);
                   
                    $("#petNameModalLabel").html(data.name);
                },
                complete: function(data,status) { //optional, used for debugging puposes
                // alert(status);
                }
            }); //ajax
        }); // .petLink click
    }); // document.ready
</script>

<!-- Modal -->
<div class="modal fade" id="petInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="petNameModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="petInfo"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
    <?php
        
        $pets = getPetList();
        //print_r($pets);
        
        foreach($pets as $pet)
        {
            echo "Name: ";
            echo "<a href='#' class='petLink' id='".$pet['id']."'> ". $pet['name'] . "</a><br>";
            echo "Type: " . $pet['type'] . "<br>";
            echo "<button id='".$pet['id']."' type='button' class='btn btn-primary petLink'>Adopt Me!</button> ";
            echo "<hr><br>";
        }
        
    ?>
</div>

<?php
    include 'inc/footer.php';
?>


