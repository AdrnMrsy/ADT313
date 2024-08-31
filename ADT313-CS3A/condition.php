<h1> Condition </h1>

<?php
$number = 14;

if ($number%2) {
  echo "odd";
}
elseif ($number%3) {
    
  }  else{

    echo "Even";
}

echo "<br/>";
//(condition) ? true:false


$authenticated = true;
$checkAccess = ($authenticated) ? "access granted" : "access denied";
echo $checkAccess;

echo "<br/>";


switch ($color) {
    case 'red':
        break;
    case 'black':
            break;    
    default:
    break;
}
?>