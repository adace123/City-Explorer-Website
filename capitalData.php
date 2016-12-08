
<?php 
$content_type_args = explode(';', $_SERVER['CONTENT_TYPE']); 
if ($content_type_args[0] == 'application/json') 
    $_POST = json_decode(file_get_contents('php://input'),true); 
header("Cache-Control: no-cache, no-store, must-revalidate");
var_dump($_POST);

//variables to hold input fields
$city = $_POST['city'];
$country = $_POST['country'];
$continent = $_POST['continent'];
$image = $_POST['image'];
$state = $_POST['state'];

//store inputs in array
$object_data = array(
'city' => $city,
'country' => $country,
'continent' => $continent,
'image' => $image,
'state' => $state
);
//write inputs to JSON database
print_r($object_data);
$capitals = file_get_contents('capitals.json');
$capital_data = json_decode($capitals);	
array_push($capital_data,$object_data);
$jsondata = json_encode($capital_data,JSON_PRETTY_PRINT);	
file_put_contents('capitals.json',$jsondata);

?>
