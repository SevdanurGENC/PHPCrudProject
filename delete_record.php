<?php 
require("config.php");  
$id = $_GET['id'];
echo "Su an bulundugunuz sayfa : delete_customer.php ve Kayit No: ".$id;

$sql = "delete from musteri where id=$id";
$result = mysqli_query($dbConn,$sql);

mysqli_close($dbConn); 
header("Location:index.php");
?>

