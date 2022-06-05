<?php
include 'config.php';
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    // crypt password 
    //$crypted_pass = crypt($password, '$12$hrd$reer');;
    //echo $nom . $email . $password ;
    $sql = "INSERT INTO `users`(`nom`,`email`,`password`) 
    VALUES ('$nom','$email','$password')";
    $result = mysqli_query($conn, $sql);
    
    header('Location:login6.php'); 
?>