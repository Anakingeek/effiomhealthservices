<?php
// Traitement des données du formulaire de contact

if (isset($_POST['submit'])){
    session_start(); // Démarrer la session afin de pouvoir en sauvegarder les variables
    extract($_POST);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    if(!empty($message) and !empty($subject) and !empty($email) and !empty($name)) {

        $to = "effiomcharles@hotmail.com";     // Adresse de la personne à qui les données issues du formulaire sont adressées

        $message = htmlspecialchars(htmlentities(trim($message)));
        $subject = htmlspecialchars(htmlentities(trim($subject)));
        $name = htmlspecialchars(htmlentities(trim($name)));
        
        $from = $email;                 // Adresse de l'expéditeur du mail

        $header = "From:\"$name\"<$from>\n";
        $header .= "Reply=To:$from\n";
        $header .= "Content-Type:text/html; charset=\"iso-8859-1\"";

        $_SESSION['alert'] = "";
        $_SESSION['style'] = "";

        if(mail($to, $subject, $message, $header)){
            $_SESSION['alert'] = "Your mail has successfully been sent !!";
            $_SESSION['style'] = "alert alert-success";
            header('Location: index.php#contact');
        }else{
            $_SESSION['alert'] = "Something went wrong ! Please try again !";
            $_SESSION['style'] = "alert alert-danger";
            header('Location: index.php#contact');
        }


    }
}


