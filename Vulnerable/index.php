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
            <ul class="menuBlocks"><li onclick="window.location='.'" class="selected"><a href="#">Anasayfa</a></li>
                <li onclick="window.location='setup.php'" class=""><a href="setup.php">Kurulum Dökümantasyonu</a></li>

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
            <h1>Zayıf Web Uygulaması</h1>
            <p> Zayıf Web Uygulaması kasıtlı olarak bırakılmış güvenlik zaafiyerleri içeren PHP/MySQL web uygulamasıdır.
                Kasıtlı olarak bırakılmış güvenlik zafiyetleri (vulnerability) içeren zayıf(vulnerable) web uygulamaları, uygulamalı siber güvenlik eğitimlerinde önemli bir rol oynamaktadır.
                Öğrenciler, yasal olmayan bir şekilde gerçek sistemlere saldırmadan bu tip uygulamalar üzerinde öğrendiklerini tecrübe ederek kendilerini geliştirebilmektedirler.
            </br></p>
            <p> Farklı programlama dillerinde (PHP, ASP, C#, .NET, Node.js, PERL, Ruby on Rails, Pyton, C++ vb.) yazılmış vulnerable web uygulamaları bulunmaktadır.
                Fakat, Türçe yazılmış ve iyi bir şekilde dökümantasyonu yapılmış vulnerable web uygulamaları yok denecek kadar azdır.
                
            <br></p>
            <p>
                Bu projenin amacı ülkemizdeki siber güvenlik derslerinde kullanılabilecek bir düzeyde vulnerable web uygulamaları geliştirmekdir.
                Bunun için sadece üzerinde zaafiyetler bulunan bir web uygulaması geliştirmek yererli değildir, bu uygulamadaki zafiyetlerin neden kaynaklandığının ve 
                bu zafiyetlerin nasıl sömürüleceğinin (exploitation) de açık ve anlaşılır bir şekilde dökümanntasyonu yapılmıştır.
            </p>
            
        </div>
    </div>

    <div class="clear">
    </div>

    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


    <div id="footer">

        <p>Kocaeli Üniversitesi Mühendislik Fakültesi Bilgisayar Mühendisliği <br></p>
        <p>Zayıf Web Uygulaması v1.0 </p>

    </div>

</div>

</body>


</html>