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
                <li onclick="window.location='.'" class="selected"><a href="#">SQL Enjeksiyonu</a></li>
                <li onclick="window.location='command.php'" class=""><a href="command.php">Komut Enjeksiyonu</a></li>
                <li onclick="window.location='xss.php'" class=""><a href="xss.php">XSS</a></li>
            </ul>



        </div>

    </div>
    <div id="main_body">
        <div class="body_padded">
            <h1>SQL Enjeksiyonu</h1>
            
                      <div class="vulnerable_code_area">
                        <form action="#" method="GET">
			<p>
				<p id="demo">Öğrenci Numarası: </p>
				<input type="text" size="15" name="id">
				<input type="submit" name="Submit" value="Gonder">
			</p>

                        </form>
                <?php
                include 'connection.php';
                if(filter_input(INPUT_GET, 'id')) // herhangi birşey girilip girilmediğini kontrol ettirir.
                {
                    $s = filter_input(INPUT_GET, 'id'); // girilen text ti s değişkenine atar.
                    $sql = "SELECT name,ort FROM student WHERE num = '$s';" ;
                    foreach ($conn->query($sql) as $row) {
                      echo '<pre> İsim: ' .$row['name'] . '</pre>' ;
                      echo '<pre> Not Ortalaması: ' .$row['ort'] . '<pre>';
                    }
                } 
                // HACK http://localhost/Vulnerable/sql.php?id=1%27+and+1%3D1+union+select+name%2C+password+From+student%23&Submit=Gonder
                // 1' and 1=1 union select name, password  from student#   
              
                /////////////////////////////////////////////////////////////////////// 
                /* SAVUNMASIZ
                  include 'connection.php';
                if(filter_input(INPUT_GET, 'id')) // herhangi birşey girilip girilmediğini kontrol ettirir.
                {
                      $s = filter_input(INPUT_GET, 'id'); // girilen text ti s değişkenine atar.
                      $sql = "SELECT name,ort FROM student WHERE num = '$s';" ;
                      foreach ($conn->query($sql) as $row) {
                        echo '<pre> ' .$row['name'] . '<pre>';
                        echo '<pre> ' .$row['ort'] . '<pre>';
                      }
                } 
                 * ///////////////////////////////////////////////////////////////////////
                SAVUNMALI   
                 * include 'connection.php';
                 
                if(filter_input(INPUT_GET, 'id')) // herhangi birşey girilip girilmediğini kontrol ettirir.
                {
                      $s = filter_input(INPUT_GET, 'id'); // girilen text ti s değişkenine atar.
                      $ch = str_split($s);
                      $flag = FALSE;
                      for ($a = 0; $a<strlen( $s ); $a++)
                        {
                            if($ch[$a]>= '0' && $ch[$a]<= '9') 
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
                            $sql = "SELECT name,ort FROM student WHERE num = '$s';" ;
                            foreach ($conn->query($sql) as $row) {
                                echo '<pre> ' .$row['name'] . '<pre>';
                                echo '<pre> ' .$row['ort'] . '<pre>';
                            }
                        }
                        else
                        {
                            echo 'Geçersiz Öğrenci Numarası';
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
    <h1>SQL Enjeksiyonu </h1>
    <h2>Açıklama </h2>
    <p>SQL Injection, veri tabanına dayalı uygulamalara saldırmak için kullanılan bir atak tekniğidir; burada saldırgan SQL dili özelliklerinden faydalanarak standart uygulama ekranındaki ilgili alana yeni SQL ifadelerini ekler. (Örneğin saldırgan,veritabanı içeriğini kendisine aktarabilir).[1] SQL Injection, uygulamaların yazılımları içindeki bir güvenlik açığından faydalanır,örneğin, uygulamanın kulanıcı giriş bilgileri beklediği kısma SQL ifadeleri gömülür, eğer gelen verinin içeriği uygulama içerisinde filtrelenmiyorsa veya hatalı şekilde filtreleniyorsa, uygulamanın ,içine gömülmüş olan kodla beraber hiçbir hata vermeden çalıştığı görülür.SQL Injection, çoğunlukla web siteleri için kullanılan bir saldırı türü olarak bilinse de SQL veritabanına dayalı tüm uygulamalarda gerçeklenebilir.<br> </p>
    <h2>Açığa Sebebiyet Veren Kod </h2>
    <code> &lt;?php <br> </code>
    <code style="padding-left:2em">             include &#39;connection.php&#39;; <br> </code>
    <code style="padding-left:2em">            if(filter_input(INPUT_GET, &#39;id&#39;)) // herhangi birşey girilip girilmediğini kontrol ettirir. <br> </code>
    <code style="padding-left:2em">            { <br> </code>
    <code style="padding-left:4em">                $s = filter_input(INPUT_GET, &#39;id&#39;); // girilen text ti s değişkenine atar. <br> </code>
    <code style="padding-left:4em">                $sql = &quot;SELECT name,ort,surname FROM student WHERE num = &#39;$s&#39;;&quot; ; <br> </code>
    <code style="padding-left:4em">                foreach ($conn-&gt;query($sql) as $row) { <br> </code>
    <code style="padding-left:6em">                  echo &#39;&lt;pre&gt; İsim: &#39; .$row[&#39;name&#39;] . &#39; Soyisim: '&#39; .$row[&#39;surname&#39;]. &#39;&lt;/pre&gt;&#39; ; <br> </code>
    <code style="padding-left:6em">                  echo &#39;&lt;pre&gt; Not Ortalaması: &#39; .$row[&#39;ort&#39;] . &#39;&lt;pre&gt;&#39;; <br> </code>
    <code style="padding-left:4em">                } <br> </code>
    <code style="padding-left:2em">            }  <br> </code>
    <code> ?&gt; <br> </code>
    <p> Yukarıda ki kodda kullanıcının girdiği text ifadesi hiçbir kontrolden geçirilmeden sorgunun içine yazılmıştır. Kötü amaçlı kullanıcılar aynı anda birden fazla sorgu çalıştırabilir <br> </p>
    <h2>Sömürü </h2>
    <p>URL : </p> <strong> http://localhost/Vulnerable/sql.php?id=1%27+and+1%3D1+union+select+name%2C+password+From+student%23&Submit=Gonder </strong>
    <p> 1' and 1=1 union select name, password from student# </p>
    <h2>Açığı Kapama </h2>
    <p>Açığı kapamak için PHP kodlarını aşağıdaki kod parçası ile değiştirmek gerekmektedir.  </p>
    
    <code> &lt;?php <br> </code>
    <code style="padding-left:2em">             include &#39;connection.php&#39;; <br> </code>
                 
    <code style="padding-left:2em">            if(filter_input(INPUT_GET, &#39;id&#39;)) // herhangi birşey girilip girilmediğini kontrol ettirir. <br> </code>
    <code style="padding-left:2em">            { <br> </code>
    <code style="padding-left:4em">                $s = filter_input(INPUT_GET, &#39;id&#39;); // girilen text ti s değişkenine atar. <br> </code>
    <code style="padding-left:4em">                   $ch = str_split($s);  <br> </code>
    <code style="padding-left:4em">                   $flag = FALSE;  <br> </code>
    <code style="padding-left:4em">                  for ($a = 0; $a&lt;strlen( $s ); $a++)  <br> </code>
    <code style="padding-left:4em">                    {  <br> </code>
    <code style="padding-left:6em">                        if($ch[$a]&gt;= &#39;0&#39; && $ch[$a]&lt;= &#39;9&#39;) // Karakter sadece rakama duyarlı  <br> </code>
    <code style="padding-left:6em">                        {  <br> </code>
    <code style="padding-left:8em">                            $flag = TRUE;  <br> </code>
    <code style="padding-left:6em">                        }  <br> </code> 
    <code style="padding-left:6em">                        else  <br> </code>
    <code style="padding-left:6em">                        {  <br> </code>  
    <code style="padding-left:8em">                            $flag = FALSE;  <br> </code>
    <code style="padding-left:6em">                        }  <br> </code>
    <code style="padding-left:4em">                    }  <br> </code>
    <code style="padding-left:4em">                    if($flag) //girilen text te sadece rakam varsa sorguyu çalıştır. <br> </code> 
    <code style="padding-left:4em">                    {  <br> </code>
    <code style="padding-left:6em">                        $sql = "SELECT name,ort FROM student WHERE num = &#39;$s&#39;;" ;  <br> </code>
    <code style="padding-left:6em">                        foreach ($conn->query($sql) as $row) {  <br> </code>
    <code style="padding-left:8em">                            echo &#39;&lt;pre&gt; &#39; .$row[&#39;name&#39;] . &#39;&lt;pre&gt;&#39;;  <br> </code>
    <code style="padding-left:8em">                            echo &#39;&lt;pre&gt; &#39; .$row[&#39;ort&#39;] . &#39;&lt;pre&gt;&#39;;  <br> </code>
    <code style="padding-left:6em">                        } <br> </code> 
    <code style="padding-left:4em">                    }   <br> </code> 
    <code style="padding-left:4em">                    else  <br> </code> 
    <code style="padding-left:4em">                    {  <br> </code>
    <code style="padding-left:6em">                        echo &#39;Geçersiz Öğrenci Numarası&#39;;  <br> </code>
    <code style="padding-left:4em">                    }  <br> </code>
    <code style="padding-left:2em">            }   <br> </code>
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