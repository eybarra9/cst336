<?php
    
    include '../dbConnection.php';
    
    session_start(); 
    
    $conn = getDatabaseConnection("ottermart");
    
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    
    //echo $password
    
    /*
    // following sql does not prevent SQL injection
    $sql = "SELECT *
            FROM om_admin
            WHERE username = '$username'
            AND password = '$password'"; 
    */
    
    // following sql prevents SQL injection by avoiding using single quotes
    $sql = "SELECT *
            FROM om_admin
            WHERE username = :username
            AND password = :password"; 
    
    // $np = named parameters
    $np = array();
    $np[":username"] = $username;
    $np[":password"] = $password;
    
    // $stmt = statement
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); // expecting one single record
    
    if (empty($record))
    {
        $_SESSION['incorrect'] = true;
        header("Location:login.php");
    }
    else
    {
        // echo $record['firstName'] . " " . $record['lastName'];
        $_SESSION['incorrect'] = false;
        $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
        header("Location:admin.php");
    }
    
?>