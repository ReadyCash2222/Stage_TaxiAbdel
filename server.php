<?php

// if(isset($_POST['submit'])){
//     ini_set( 'display_errors', 1 );
//     error_reporting( E_ALL );

//     $to = "mermozlethug@gmail.com"; // this is your Email address
//     $from = $_POST['email_addr']; // this is the sender's Email address

//     $first_name = $_POST['prenom'];
//     $last_name = $_POST['nom'];
//     $num_secu = $_POST['num_secu'];
//     $adr_dep = $_POST['adr_dep'];
//     $date = $_POST['date'];
//     $adr_des = $_POST['adr_des'];
//     $heure = $_POST['heure'];

//     $subject = "Réservation";
//     $subject2 = "Copie de votre réservation";
//     $message = $first_name . " " . $last_name . " souhaite réserver une course : " . "\n\n" . "- adresse mail : " . $from . "\n" . "- numéro de sécurité social : " . $num_secu . "\n" . "- adresse de départ : " . $adr_dep . "\n" . "- date : " . $date . "\n" . "- adresse de destination : " . $adr_des . "\n" . "- heure : " . $heure;
//     $message2 = "Bonjour " . $first_name .",". "\n\n" . "Merci d'avoir choisi Taxi Abdel pour effectuer une réservation. Voici le récapitulatif de votre réservation :" . "\n\n" . $message . "\n\n" . "Pour plus d'information, n'hésitez pas à contacter le 06 31 75 28 52 ou bien à renvoyer un mail à " . $to . ".";

//     $headers = "De:" . $from;
//     $headers2 = "De:" . $to;


//     mail($to,$subject,$message,$headers);
//     mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//     echo "Réservation envoyée. Merci " . $first_name . ", nous vous contacterons sous peu.";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     }

?>