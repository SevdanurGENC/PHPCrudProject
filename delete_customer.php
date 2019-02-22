<?PHP
require("config.php"); 
echo "Su an bulundugunuz sayfa : delete_customer.php <br/>";
$id = $_GET['id'];
$sql = "select * from musteri where id = $id";
$result = mysqli_query($dbConn,$sql);
$row = mysqli_fetch_array($result);

echo "<h3> + Silmek istediginiz kayit hakkindaki detaylar asagidadir : + </h3>";
echo "id : <b>".$row['id']."</b><br/>";
echo "Isim : <b>".$row['isim']."</b><br/>";
echo "Soyisim : <b>".$row['soyisim']."</b><br/>";
echo "Adres : <b>".$row['adres']."</b><br/>";
echo "Email : <b>".$row['email']."</b><br/>";

echo "<br/>Bu kaydi silmek istediginizden emin misiniz?";
echo "<a href=\"delete_record.php?id=".$row['id']."\">+ EVET +</a>";
echo "<a href=\"index.php\">+ HAYIR +</a>";

mysqli_close($dbConn); 
?>