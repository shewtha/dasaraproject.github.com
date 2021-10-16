<?php

$server="	sql308.epizy.com";
$username="epiz_30079373";
$password="agBozU7DAi4Hu8a";
$dbname="epiz_30079373_bhavya";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("connection failed:".mysqli_connect_error());

}
?>