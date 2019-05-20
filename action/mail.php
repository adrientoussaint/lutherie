<?php 

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$text=$_POST['message'];

$to = "adrien-toussaint@hotmail.fr";
$subject = $_POST['subject'];

$message="<html><head></head><body>Jonbour je suis ".$nom." ".$prenom.", voilà mon message :".$text."</body></html>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

if(mail($to, $subject, $message, $headers)){
    echo "OK";
}else{
    echo "KO";
}
// phpinfo();

?>