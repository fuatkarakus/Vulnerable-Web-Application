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
            <ul class="menuBlocks"><li onclick="window.location='index.php'" ><a href="index.php">Anasayfa</a></li>
                <li onclick="window.location='setup.php'" class=""><a href="setup.php">Kurulum Dökümantasyonu</a></li>

            </ul>
            <ul class="menuBlocks">
                <li onclick="window.location='sql.php'" class=""><a href="sql.php">SQL Enjeksiyonu</a></li>
                <li onclick="window.location='command.php'" class=""><a href="command.php">Komut Enjeksiyonu</a></li>
                <li onclick="window.location='.'" class="selected"><a href="#">XSS</a></li>
            </ul>



        </div>

    </div>
    <div id="main_body">
        <div class="body_padded">
            <h1>XSS</h1>
            
            <div class="vulnerable_code_area">
             <form action="#" method="GET">
			<p>
                        <p id="demo">Mesajınızı Yazın: </p>
				<input type="text" size="15" name="text">
				<input type="submit" name="Submit" value="Gonder">
			</p>

		</form>
                <?php
                //<script> document.getElementById("demo").innerHTML = "Naber"; </script>
                //<script>alert("XSS");</script>
                //http://localhost/Vulnerable/xss.php?text=%3Cscript%3E+document.getElementById%28%22demo%22%29.innerHTML+%3D+%22Naber%22%3B+%3C%2Fscript%3E&Submit=Gonder
                error_reporting(0); // herhangi bir hata mesajını yazdırmamak için
                echo '<pre>' . filter_input(INPUT_GET, 'text' ) .' </pre>'; // kullanıcının girdiği text değerini ekrana yazdırmak için
                   
                // echo htmlspecialchars( $_POST[ 'text' ] ); 
                //  echo htmlentities( $_POST[ 'text' ] , ENT_QUOTES , "UTF-8");
                ?>
            
            </div>
            
        </div>
    </div>



    <div class="clear">
        
    </div>
    
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
     <button class="but" id="myBtn">Yardım</button>
    <br /><br />
<!-- The Modal -->
    <div id="myModal" class="modal popup">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>XSS Zaafiyeti </h1>
    <h2>Açıklama:</h2>
        <p>Cross-site scripting (XSS), bir saldırganın başka bir kullanıcının tarayıcısında kötü amaçlı JavaScript kodu çalıştırmasına izin veren bir kod enjeksiyon saldırısıdır.
    XSS saldırıları, bir saldırgan, genellikle bir tarayıcı tarafı komut dosyası biçiminde, farklı bir son kullanıcıya kötü amaçlı kod göndermek için bir web uygulaması kullandığında
    ortaya çıkar. Bu saldırıların başarıyla sonuçlanmasına izin veren kusurlar oldukça yaygındır ve bir web uygulaması, kullanıcının doğrulamasını veya kodlamasını yapmadan ürettiği 
    çıktıdaki girdileri kullandığı her yerde ortaya çıkar. </p>
        
    <h2>Açığa Sebebiyet Veren Kod: </h2>
        <code> &lt;?php <br> </code> 
        <code style="padding-left:2em"> error_reporting(0); // herhangi bir hata mesajını yazdırmamak için <br> </code>
        <code style="padding-left:2em"> echo &#39;&lt;pre&gt;&#39; . &amp;_GET[&#39;text&#39;] .&#39; &lt;&#47;pre&gt;&#39;; // kullanıcının girdiği text değerini ekrana yazdırmak için <br> </code>
        <code> ?&gt; <br> </code>
        <p> Yukarıda görüldüğü gibi her hangi bir kontrol yada süzgeç kullanılmamıştır. Kullanıcı ne yazarsa yazsın onu çalıştıracak bir kod parçasıdır. Bu sebeple açığa sebebiyet vermektedir. <br> </p>
    <h2>Sömürü: </h2>
        <p>Bu açığı kullanmak için aşağıda örnek bir URL adresi verilmiştir. <br> </p>
        <p>http://localhost/Vulnerable/xss.php?text=%3Cscript%3E+document.getElementById%28%22demo%22%29.innerHTML+%3D+%22Naber%22%3B+%3C%2Fscript%3E&Submit=Gonder <br> </p>
        <p>URL &#39;Mesajınızı Yazın:&#39; yazısını &#39;Naber&#39; yapmaktadır. </p>
    <h2>Açığı Kapama:</h2>
        <p>Açığı kapamak için PHP kodlarını aşağıdaki kod parçası ile değiştirmek gerekmektedir. <br> </p>
        <code> &lt;?php <br> </code>
        <code style="padding-left:2em"> error_reporting(0); // herhangi bir hata mesajını yazdırmamak için <br> </code>
        <code style="padding-left:2em"> echo htmlspecialchars( &amp;_POST&#91; &#39;text&#39; &#93; ); // Bu fonksiyon ile HTML e özgü karakterler özelliklerini kaybeder <br> </code>
        <code> ?&gt; <br> </code>
        <p>Ya da <br> </p>
        <code style="padding-left:2em"> error_reporting(0); // herhangi bir hata mesajını yazdırmamak için <br> </code>
        <code style="padding-left:2em"> echo htmlentities( &amp;_POST&#91; &#39;text&#39; &#93; , ENT_QUOTES , &quot;UTF-8&quot;); // Bu fonksiyon ile HTML e özgü karakterler özelliklerini kaybeder <br> </code>
        <code> ?&gt; <br> </code>
        <p>Bu kod yardımıyla girilen özel karakterleri, elementleri ve tagleri işlenmez sadece ekrana yazılır. <br> </p> 
        
        </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> 
  </div>

</div>

    <div id="footer">

        <p>Kocaeli Üniversitesi Mühendislik Fakültesi Bilgisayar Mühendisliği</p>
        <p>Zayıf Web Uygulaması v1.0 </p>   
    </div>

</div>
<script>
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>


</html>