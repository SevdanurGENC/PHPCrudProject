<html>
<head>
<title>: : Yeni Bir Musteri Ekle : :</title>
</head>
<body>
<form action="insert_customer.php" method="POST">
    <blockquote>
    <p>
    <h3>+ Yeni Bir Musteri Ekle + <br/></h3>
        ID : <input type="text" name="id"/><br/>
        Isim : <input type="text" name="isim"/><br/>
        Soyisim : <input type="text" name="soyisim"/><br/>
        Adres : <br/><textarea name="adres" cols="25" rows="10"/></textarea><br/>
        E-mail : <input type="text" name="email"/><br/>

        <input type="submit" name="submit" value="Kaydet"/>
        <input type="reset" name="reset" value="Temizle"/>
        <input type="button" name="cancel" value="Iptal" onclick="location.href='index.php'"/> 
    </p>
    </blockquote>
</form>
<body>
</html>