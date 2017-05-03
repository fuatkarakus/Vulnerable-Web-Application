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
                <li onclick="window.location='command.php'" class="selected"><a href="command.php">Komut Enjeksiyonu</a></li>
                <li onclick="window.location='xss.php'" class=""><a href="xss.php">XSS</a></li>
            </ul>



        </div>

    </div>
    <div id="main_body">
        <div class="body_padded">
            <h1>Komut Enjeksiyonu</h1>
            
            <div class="vulnerable_code_area">
             <form action="#" method="GET">
			<p>
				<p id="demo">Klasör Adı Giriniz: </p>
				<input type="text" size="15" name="id">
				<input type="submit" name="Submit" value="Gonder">
			</p>

		</form>
                <?php
                     error_reporting(0); // herhangi bir hata mesajını yazdırmamak için
                    // kullandığımız ide NetBeans olduğu için .filter_input() fonksiyonunu kullandık.
                    if(filter_input(INPUT_GET, 'id')) // herhangi birşey girilip girilmediğini kontrol ettirir.
                    {
                       $s = filter_input(INPUT_GET, 'id'); // girilen text ti s değişkenine atar.
                       system('md ' .$s ); // klasörü oluşturuyoruz. 
                       echo 'Dosya oluşturuldu'; //klasörün oluşturulduğunu bildiriyoruz.
                    }

                 /*
                  * http://localhost/Vulnerable/command.php?id=asd+%26%26+net+users&Submit=Gonder
                  * ipconfig 
                  * whoami
                  * ///////////////////////////////////////////
                SAVUNMASIZ
                   error_reporting(0); // herhangi bir hata mesajını yazdırmamak için
                    // kullandığımız ide NetBeans olduğu için .filter_input() fonksiyonunu kullandık.
                    if(filter_input(INPUT_GET, 'id')) // herhangi birşey girilip girilmediğini kontrol ettirir.
                    {
                       $s = filter_input(INPUT_GET, 'id'); // girilen text ti s değişkenine atar.
                       system('md ' .$s ); // klasörü oluşturuyoruz. 
                       echo 'Dosya oluşturuldu'; //klasörün oluşturulduğunu bildiriyoruz.
                    }
                  * /////////////////////////////////////////////
                SAVUNMALI
                  *  
                  error_reporting(0); // herhangi bir hata mesajını yazdırmamak için
                    $flag = TRUE;
                    if(filter_input(INPUT_GET, 'id')) // herhangi birşey girilip girilmediğini kontrol ettirir.
                    {
                        $s = filter_input(INPUT_GET, 'id'); // girilen text ti s değişkenine atar.
                        $ch = str_split($s);
                        for ($a = 0; $a<strlen( $s ); $a++)
                        {
                            if($ch[$a]<= '0' && $ch[$a]>= '9' || $ch[$a]<= 65 && $ch[$a]>= 90 || $ch[$a]<= 97 && $ch[$a]>= 122) // Karakter sadece rakam ve büyük küçük harfe duyarlı
                            {
                                $flag = TRUE;
                            }
                            else
                            {
                                $flag = FALSE;
                            }
                        }
                        if($flag)
                        {
                            system('md ' .$s ); // klasörü oluşturuyoruz. 
                            echo 'Dosya oluşturuldu'; //klasörün oluşturulduğunu bildiriyoruz.
                        }
                        else
                        {
                            echo 'Yalnızca harf ve rakam.';
                        }
                    }
                 */
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
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   <h1>Komut Enjeksiyonu </h1>
    <h2>Açıklama:</h2>
        <p>Komut enjeksiyonu,  saldırganın zafiyet barındıran bir uygulama üzerinden hedef sistemde dilediği komutları çalıştırabilmesine denir.
    Komut ile kastedilen şey Windows'ta CMD ve Linux'ta Terminal pencerelerine girilen sistem komutlarıdır. Literatürde Shell kodlaması diye de geçer. 
    Command Injection saldırısı büyük oranda yetersiz input denetleme mekanizması nedeniyle gerçekleşmektedir. </p>
        
    <h2>Açığa Sebebiyet Veren Kod:</h2>
        <code> &lt;?php <br> </code> 
        <code style="padding-left:2em"> error_reporting(0); // herhangi bir hata mesajını yazdırmamak için <br> </code>
        <code style="padding-left:2em">  // kullandığımız ide NetBeans olduğu için .filter_input() fonksiyonunu kullandık.</br> </code>
        <code style="padding-left:2em"> if(filter_input(INPUT_GET, &#39;id&#39;)) // herhangi birşey girilip girilmediğini kontrol ettirir.</br> </code>
        <code style="padding-left:2em"> { </br> </code>
        <code style="padding-left:4em"> $s = filter_input(INPUT_GET, &#39;id&#39;); // girilen text ti s değişkenine atar.  </br></code>
        <code style="padding-left:4em"> system(&#39;md &#39; .$s ); // klasörü oluşturuyoruz.  </br> </code>
        <code style="padding-left:4em"> echo &#39;Dosya oluşturuldu&#39;; //klasörün oluşturulduğunu bildiriyoruz. </br> </code>
        <code style="padding-left:2em"> } </br> </code>
        <code> ?&gt; <br> </code>
        <p>Herhangi bir şekilde girilen inputun konrtolü sağlanmamış.<br> </p>
        
        <h2>Sömürü:</h2>
            <p> URL : </p><strong> http://localhost/Vulnerable/command.php?id=asd+%26%26+net+users&Submit=Gonder <br></strong>
            <p>URL ile net users komutu çalıştırılmaktadır. <br> </p>
            <p> &quot;example && whoami&quot;  ve ya &quot;example && ipconfig&quot; gibi komutlarla da sömürülebilir.</p>
            
        <h2>Açığı Kapama: </h2>
            <p>Açığı kapamak için PHP kodlarını aşağıdaki kod parçası ile değiştirmek gerekmektedir. <br> </p>
            
            <code> &lt;?php <br> </code> 
            <code style="padding-left:2em">error_reporting(0); // herhangi bir hata mesajını yazdırmamak için </br> </code>
            <code style="padding-left:2em">        $flag = TRUE;</br> </code>
            <code style="padding-left:2em">        if(filter_input(INPUT_GET, &quot;id&quot;)) // herhangi birşey girilip girilmediğini kontrol ettirir.</br> </code>
            <code style="padding-left:2em" >        {</br> </code>
            <code style="padding-left:4em">            $s = filter_input(INPUT_GET, &quot;id&quot;); // girilen text ti s değişkenine atar.</br> </code>
            <code style="padding-left:4em">            $ch = str_split($s); //stringi char dizisine çevirdik. </br> </code>
            <code style="padding-left:4em">            for ($a = 0; $a&lt;strlen( $s ); $a++) // char dizisinin içini dolaşıyoruz. </br> </code>
            <code style="padding-left:4em">            {</br> </code> 
            <code style="padding-left:6em">                if($ch[$a]&lt;= &quot;0&quot; && $ch[$a]&gt;= &quot;9&quot; || $ch[$a]&lt;= 65 && $ch[$a]&gt;= 90 || $ch[$a]&lt;= 97 && $ch[$a]&gt;= 122) // Karakter sadece rakam ve büyük küçük harfe duyarlı </br> </code>
            <code style="padding-left:6em">                {</br> </code>
            <code style="padding-left:8em">                    $flag = TRUE;</br> </code>
            <code style="padding-left:6em">                }</br> </code>
            <code style="padding-left:6em">                else</br> </code>
            <code style="padding-left:6em">                {</br> </code>
            <code style="padding-left:8em">                    $flag = FALSE;</br> </code>
            <code style="padding-left:6em">                }</br> </code>
            <code style="padding-left:4em">            }</br> </code>
            <code style="padding-left:4em">            if($flag) // eğer rakam ve harf girdiyse işlemi yap.</br> </code>
            <code style="padding-left:4em">            {</br> </code>
            <code style="padding-left:6em">                system(&quot;md &quot; .$s ); // klasörü oluşturuyoruz. </br> </code>
            <code style="padding-left:6em">                echo &quot;Dosya oluşturuldu&quot;; //klasörün oluşturulduğunu bildiriyoruz.</br> </code>
            <code style="padding-left:4em">            }</br> </code>
            <code style="padding-left:4em">            else // girmediyse hata ver.</br> </code>
            <code style="padding-left:4em">            {</br> </code>
            <code style="padding-left:6em">                echo &quot;Yalnızca harf ve rakam.&quot;;</br> </code>
            <code style="padding-left:4em">            }</br> </code>
            <code style="padding-left:2em">        }</br> </code>
            <code> ?&gt; <br> </code>
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