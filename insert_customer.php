<?php
require("config.php"); 
echo "Su an bulundugunuz sayfa : insert_customer.php file <br/>";
$id = $_POST["id"];
$firstname = $_POST["isim"];
$lastname = $_POST["soyisim"];
$address = $_POST["adres"];
$email = $_POST["email"];

$sql = "insert into musteri (id,isim, soyisim, adres, email) values ('$id','$firstname','$lastname','$address','$email')";
$result = mysqli_query($dbConn,$sql);

mysqli_close($dbConn);
header("Location:index.php"); 
?>