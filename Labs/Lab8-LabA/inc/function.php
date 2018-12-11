<?php  
    function getPetList() 
    {
        include 'dbConnection.php';
        $conn = getDatabaseConnection("pets");
        
        $sql = "SELECT *
                FROM pets";
                
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetchAll(PDO::FETCH_ASSOC); // Expecting only one record
        
        return $record;
    }
?>