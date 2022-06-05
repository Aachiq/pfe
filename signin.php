<?php
include 'config.php';
    $email= $_POST['email'];
    $password=$_POST['password'];
    //$crypted_pass = crypt($password, '$12$hrd$reer');;

    //echo $email . $password ;
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['user_id'] = $user['id'];
      header('Location:index.php'); 
    }else{
      header('Location:login6.php'); 
    }



?>