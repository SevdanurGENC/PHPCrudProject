<?PHP
require("config.php"); 
echo "Su an bulundugunuz sayfa : update_customer.php <br/>";
$id = $_POST['id'];
$firstname = $_POST['isim'];
$lastname = $_POST['soyisim'];
$address = $_POST['adres'];
$email = $_POST['email'];

$sql = "update musteri set isim = '$firstname', soyisim = '$lastname', adres = '$address', email = '$email' where id = $id";
$result = mysqli_query($dbConn,$sql);
mysqli_close($dbConn);
header("Location:view_customer.php");
?>