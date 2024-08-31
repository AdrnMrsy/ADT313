<?php
// $cars = array("Volvo", "BMW", "Toyota");
// echo count($cars);

// $cars2 = array(
//     "ford"=> "mustang",
//     "maserati"=>"unknown",
//     "bmw"=>"m3"
// );
// echo $cars2["bmw"]

$info=array(
"user" => array(
    "first"=> "Adrian",
    "last"=> "Belo"
),
"address"=>array(
    "province"=> "bulacan",
    "municipality"=>"bocaue"
)

);
echo $info["user"]["last"];
$info["user"]["age"]=20;

echo "<pre>";
print_r($info);
echo "<br/>";
var_dump($info);
echo "<pre>";


?>

