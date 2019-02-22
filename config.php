<?php
 $dbUser = "root";
 $dbPass = "";
 $dbDatabase = "phpcrudproject";
 $dbHost = "localhost";

 $dbConn = mysqli_connect($dbHost,$dbUser,$dbPass);

 if ($dbConn){
    mysqli_select_db($dbConn,$dbDatabase);
    print("<strong>Veri tabanina baglanti basarilidir!</strong>");
 }
 else {
    die("<strong>Hata : </strong>Veri tabanina bir baglanti saglanamadi.");  
 }  
 ?>
