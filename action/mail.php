<?php 

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$text=$_POST['message'];

$to = "claudie.lesoudard@gmail.com";
$objet = $_POST['objet'];

$message="<html><head></head><body>Nom :".$nom." <br> Prenom :".$prenom."<br> Mail :".$email." <br> Téléphone:".$phone." <br> Objet(s) du mail : ".$objet." <br> Message :".$text."</body></html>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
mail($to, $objet, $message, $headers)
//if(mail($to, $subject, $message, $headers)){
  //  echo "OK";
//}else{
  //  echo "KO";
//}
// phpinfo();

?>