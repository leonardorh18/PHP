<?php

$host="localhost";
$userbd="root";
$pass="";
$banco="vacina";


$con=mysqli_connect($host, $userbd, $pass, $banco);

if(!$con){
 echo "Erro";
}

?>