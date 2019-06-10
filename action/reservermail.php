<?php 

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$text=$_POST['message'];

$to = "claudie.lesoudard@gmail.com";
$objet = "Demande de réservation Woove";

$message="<html><head></head><body><h1>Vous avez reçu une demande de réservation pour l'instrument Electromatic Walnut depuis le site Woove. </h1><br><br><p>Nom : ".$nom."</p> <br><p> Prenom : ".$prenom."</p><br><p> Mail : ".$email."</p> <br><p> Téléphone: ".$phone."</p> <br> <p> Message : ".$text."</p></body></html>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
if(mail($to, $objet, $message, $headers)){
    echo json_encode("ok");
}else{
    echo json_encode("ko");
};

?>