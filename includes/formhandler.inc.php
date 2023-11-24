<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email)
                    VALUES ($username, $pwd, $email);";
                    
    } catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }
}
else{
    header("Location: ../index.php");
}