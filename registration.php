<?php
$content_type_args = explode(';', $_SERVER['CONTENT_TYPE']); 
if ($content_type_args[0] == 'application/json') 
  $_POST = json_decode(file_get_contents('php://input'),true);
//gets registration form input, checks if what's typed in the textarea is too short, mails request to my inbox
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

if(strlen($text)<50)
	echo "short";

else{
$subject = "User registration request";
$message = $name." has requested to become an admin on the site. Here is the message: ".wordwrap($text,70);
$message.=" and the email provided is ".$email;
mail("rexforddrive@gmail.com",$subject,$message);
}

?>
