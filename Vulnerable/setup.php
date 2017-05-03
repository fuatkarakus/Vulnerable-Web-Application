<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="img/logorgb.jpg">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Zayıf Web Uygulaması</title>

    <link rel="stylesheet" type="text/css" href="index.css" />
 

</head>



<body class="home">
<div id="container">

    <div id="header" class="">
        <img src="img/logorgb.png" class="resim" alt="Zayıf Web Uygulamaları" />
    </div>

    <div id="main_menu">

        <div id="main_menu_padded">
            <ul class="menuBlocks"><li onclick="window.location='index.php'" class=""><a href="index.php">Anasayfa</a></li>
                <li onclick="window.location='.'" class="selected"><a href="#">Kurulum Dökümantasyonu</a></li>

            </ul>
            <ul class="menuBlocks">
                <li onclick="window.location='sql.php'" class=""><a href="sql.php">SQL Enjeksiyonu</a></li>
                <li onclick="window.location='command.php'" class=""><a href="command.php">Komut Enjeksiyonu</a></li>
                <li onclick="window.location='xss.php'" class=""><a href="xss.php">XSS</a></li>
            </ul>



        </div>

    </div>
     <div id="main_body">
        <div class="body_padded">
            <h1>Kurulum</h1>
            <h2>Windows + XAMPP </h2>
            
            <p>XAMPP indirin ve kurun : </p> <a href="https://www.apachefriends.org/en/xampp.html" target="_blank"> https://www.apachefriends.org/en/xampp.html <br> </a>
            <p>XAMPP içinde Apache, MySQL, FileZilla, Mercury, Tomcat servislerini barındıran bir paket programdır. </br>  </p>
            <p> C:\xampp\htdocs klasörünün içine indireceğiniz proje dosyalarını kopyalayın. <br> </p>
            <p>XAMPP konrtol panelinden Apache ve MySQL sunucularını başlatın. <br> </p>
            <p>localhost/phpmyadmin  adresine girin. <br> </p>
            <p>İçe Aktar sekmesine tıklayın ve proje klasörü içerisindeki Vulnerable\database\mydb.sql dosyasını içeri aktarın. Böylece veritabanınız hazır olacaktır. <br></p>
            <p>Web tarayıcınızı açın ve adres çubuğuna localhost/Vulnerable yazın. <br> </p>
            <p>Artık hacklemeye hazırsınız.</p>
        </div>
     </div>     
    <div class="clear">
    </div>

    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


    <div id="footer">

        <p >Kocaeli Üniversitesi Mühendislik Fakültesi Bilgisayar Mühendisliği</p>
        <p>Zayıf Web Uygulaması v1.0 </p>
    </div>

</div>

</body>


</html>