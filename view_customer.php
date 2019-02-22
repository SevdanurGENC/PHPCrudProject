<?php
require("config.php");  
$sql = "select * from musteri";
$result = mysqli_query($dbConn,$sql);
?> 
<html>
<head>
<title>: : Musteriler ile ilgili detaylar : :</title>
</head>
<body>
<blockquote>
<h3>+ Musteriler listesi + </h3> <h3><a href = "index.php"> + Ana Sayfa + </a></h3>
<table border="1">
<?php
echo "Su an bulundugunuz sayfa : view_customer.php";  
    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['isim']."</td>";
        echo "<td>".$row['soyisim']."</td>";
        echo "<td>".$row['adres']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td><a href=\"edit_customer.php?id=".$row['id']."\">+ DUZENLE +</a></td>";
        echo "<td><a href=\"delete_customer.php?id=".$row['id']."\">+ SIL +</a></td>";
        echo "</tr>";
    }
?>
</table>
</blockquote>
<body>
</html>
<?php
mysqli_close($dbConn);
?> 