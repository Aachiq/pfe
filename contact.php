<?php

include 'config.php';

// if(isset($_POST['submitContact']))
// {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Vérifier si les champs sont vides.
    if(empty($nom) || empty($email) || empty($message))
    {                
        if(empty($nom))
        {
            echo "<font color='red'>Le nom est vide.</font><br/>";
        }
        if(empty($email))
        {
            echo "<font color='red'>L'email est vide.</font><br/>";
        }
        
        if(empty($message)) {
            echo "<font color='red'>Le message est vide.</font><br/>";
        }
    }
    else
    {
        //Si tous les champs sont remplis (non-vides), on insère dans la base de données.
        $result = mysqli_query($conn, "INSERT INTO emails(nom, email_from, email_to, message) VALUES('$nom','$email', 'it-school@contact.ma', '$message')");
        
        //Afficher le message de succès.
        header('Location:index.php?msg=ok');
    }
// }
?>
