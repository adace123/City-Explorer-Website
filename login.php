
<?php
$content_type_args = explode(';', $_SERVER['CONTENT_TYPE']); 
if ($content_type_args[0] == 'application/json') 
  $_POST = json_decode(file_get_contents('php://input'),true);
//checks if username and password are correct
$user = $_POST["username"];
$pass = $_POST["password"];
if($user == "cityuser" && $pass == "citypass"){
	echo "Correct";
}
else if(($user!="cityuser"||$pass!="citypass")&& $user!="" && $pass!=""){
	echo "Incorrect";
}

else echo "Blank";
?>

