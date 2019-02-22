<?php
require("config.php"); 
$id = $_GET["id"];
echo "<br/>Su an bulundugunuz sayfa : edit_customer.php <br/>";
$sql = "select * from musteri where id = $id";
$result = mysqli_query($dbConn,$sql);
$row = mysqli_fetch_array($result);
?>

<html>
<head>
<title></title>
</head>
<body>
<form method="POST" action="update_customer.php">
    <blockquote>
    <h3>+ Kayit Duzeltme Ekrani + </h3>
    id : <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly="readonly"><br/>
    Isim : <input type="text" name="isim" value="<?php echo $row["isim"]; ?>"/><br/>
    Soyisim : <input type="text" name="soyisim" value="<?php echo $row["soyisim"]; ?>"/><br/>
    Adres : <br/><textarea name="adres" cols="25" rows="10"/><?php echo $row["adres"]; ?></textarea><br/>
    E-mail : <input type="text" name="email" value="<?php echo $row["email"]; ?>"/><br/>

    <input type="submit" name="submit" value="Kaydet"/>
    <input type="button" name="cancel" value="Iptal" onclick="location.href='index.php'"/>

    </blockquote>
</form>
<body>
</html>

<?php
mysqli_close($dbConn); 
?> 