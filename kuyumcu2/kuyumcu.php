

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ac Kuyumcu </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php

$sql_baglantisi = new mysqli("localhost", "root", "", "kuyumcu2");

if ($sql_baglantisi->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $sql_baglantisi->connect_error);
}

echo"
    <div class='topnav'>
        <a class='active' href='anamenü'>Ana Menü</a>
        <a href='#hakkında'>Hakkında</a>
        <a href='#iletişim'>İletişim</a>
        <a href='#Yüzük'>Yüzük</a>
        <a href='#Kolye'>Kolye</a>
        <a href='#Bileklik'>Bileklik</a>
        <a href='#Küpe'>Küpe</a>
        <a href='#Takım'>Takım</a>
      </div>
    <h1 style='color:rgb(250, 122, 3);'><center> Hoşgeldiniz 🎔 </center></h1>
    <p><center>Takılarınız ışıltınızı yansıtsın ✨</center></p>
<hr>
<h2 id='hakkında'>HAKKINDA</h2>
<div class='grid2'>
  <div>
    <p>
    Kuyumculuğa 1980 yılında dededen aile mesleği olarak başlamış olup devri bendeniz Ayşenur devir almıştır. Bir kaç yere daha atolye ve dükkan açarak 
    kendimi geliştirmekte olduğum bu sektörde sizlerin memnuniyeti ve istekleri ile hareket etmekteyiz. Asıl amacımız yukarda da dediğimiz gibi 
    sizin ışıltınızı bulmak. Ana şubemiz Beşiktaş meydanda yer alan Büyük Beşiktaş Çarşısındadır.</p></div>
    <div>Konum:<a href='https://maps.app.goo.gl/4E2GmVoEu2jnWXR99'>Sinanpaşa, Ortabahçe Cd. 10-1, 34353 Beşiktaş/İstanbul</a>
      <br><br>
      <div><img src='image/indir.jpeg'></div>
    </div>
    <div><img src='image/Fatih-Kuyumculuk.jpg'></div>
</div>
<hr>
<h2 id='Yüzük'>Yüzükler</h2>
<p><b>Takılar sizinle parlasın</b>
    <br>
    <u>! Fotoğrafların üstüne gelin !</u>
</p>
<div class='grid'>"
;


echo"
  <div><img src='image/yüzük/28-2.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from yüzük where Y_ID=1";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>

  <div><img src='image/yüzük/0033875_damla-tasli-altin-yuzuk-yz0014.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from yüzük where Y_ID=2";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
      $sonuc[0] ;    
      echo "Cinsi: $sonuc[1] <br>"; 
      echo "Ayarı: $sonuc[2]<br>";   
      echo "Ağırlığı: $sonuc[3]<br>";  
      echo "Fiyatı: $sonuc[4]<br>"; 
  }
      echo"<br>
  </div>

  <div><img src='image/yüzük/0033916_baget-altin-yuzuk-yz0116.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from yüzük where Y_ID=3";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
      $sonuc[0] ;    
      echo "Cinsi: $sonuc[1] <br>"; 
      echo "Ayarı: $sonuc[2]<br>";   
      echo "Ağırlığı: $sonuc[3]<br>";  
      echo "Fiyatı: $sonuc[4]<br>"; 
  }
  echo"<br>
  </div>

  <div><img src='image/yüzük/0033962_baget-yuzuk-yz00263.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from yüzük where Y_ID=4";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
      $sonuc[0] ;    
      echo "Cinsi: $sonuc[1] <br>"; 
      echo "Ayarı: $sonuc[2]<br>";   
      echo "Ağırlığı: $sonuc[3]<br>";  
      echo "Fiyatı: $sonuc[4]<br>"; 
  }
  echo"<br>
  </div>

  <div><img src='image/yüzük/0033984_fantazi-yuzuk-yz00296.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from yüzük where Y_ID=5";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
      $sonuc[0] ;    
      echo "Cinsi: $sonuc[1] <br>"; 
      echo "Ayarı: $sonuc[2]<br>";   
      echo "Ağırlığı: $sonuc[3]<br>";  
      echo "Fiyatı: $sonuc[4]<br>"; 
  }
  echo"<br>
  </div>

  <div><img src='image/yüzük/damla-tas-gumus-tektas-yuzuk-kc7074015-1-7db09c8f836845088b97e01d38c8392a.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from yüzük where Y_ID=6";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
      $sonuc[0] ;    
      echo "Cinsi: $sonuc[1] <br>"; 
      echo "Ayarı: $sonuc[2]<br>";   
      echo "Ağırlığı: $sonuc[3]<br>";  
      echo "Fiyatı: $sonuc[4]<br>"; 
  }  
  echo"<br>
  </div>

  <div><img src='image/yüzük/ibili-kuyumculuk-yuzuk-62.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from yüzük where Y_ID=7";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/yüzük/images.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from yüzük where Y_ID=8";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

</div>
<hr>
<h2 id='Kolye'>Kolyeler</h2>
<p><b>Takılar sizinle parlasın</b>
    <br>
    <u>! Fotoğrafların üstüne gelin !</u>
</p>
<div class='grid'>

  <div><img src='image/Kolye/61m63dJjOxL._AC_UF1000,1000_QL80_.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from kolye where kolye_ID=1";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
     $sonuc[2]; 
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>

  <div><img src='image/Kolye/celik-gold-kuyumcu-isi-kolye-62f21e.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from kolye where kolye_ID=2";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>

  <div><img src='image/Kolye/cicek-zincir-kolye-1.webp'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from kolye where kolye_ID=3";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>

  <div><img src='image/Kolye/download.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from kolye where kolye_ID=4";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>

  <div><img src='image/Kolye/images.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from kolye where kolye_ID=5";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>

  <div><img src='image/Kolye/images (1).jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from kolye where kolye_ID=6";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>

  <div><img src='image/Kolye/kolye1.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from kolye where kolye_ID=7";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>

  <div><img src='image/Kolye/kuyumcu-zinciri-madalyon-kolye-1.webp'></div>  
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from kolye where kolye_ID=8";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>

  <div><img src='image/Kolye/riley-kolye-2.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
$sql="select * from kolye where kolye_ID=15";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}
echo"
    <br>
  </div>
</div>
<hr>

<h2 id='Bileklik'>Bileklikler</h2>
<p><b>Takılar sizinle parlasın</b>
    <br>
    <u>! Fotoğrafların üstüne gelin !</u>
</p>
<div class='grid'>

  <div><img src='image/bileklik/0034214_iki-nazar-boncuklu-bileklik-bl0002.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=1";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/bileklik/10828370280498.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=2";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/bileklik/22-ayar-altin-kaplama-zirkon-tas-dorika-bileklik-kuyumcu-model-hediyelik-bileklik-kcm38924386-1-321dc29376e0460f812d24366ac966f2.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=3";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/bileklik/3-54_min.webp'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=4";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/bileklik/a2.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=5";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/bileklik/bt00015.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=6";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/bileklik/download.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=7";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/bileklik/images.jpg'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=8";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/bileklik/u4_min.webp'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=9";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

  <div><img src='image/bileklik/v1_min.webp'></div>
  <div><br><b>Bilgiler:</b><br><br>";
  $sql_baglantisi->set_charset("utf8");
  $sql="select * from bileklik where B_ID=10";
  $sorgu=mysqli_query($sql_baglantisi,$sql);
  while( $sonuc=mysqli_fetch_row($sorgu) ){
    $sonuc[0] ;    
    echo "Cinsi: $sonuc[1] <br>"; 
    echo "Ayarı: $sonuc[2]<br>";   
    echo "Ağırlığı: $sonuc[3]<br>";  
    echo "Fiyatı: $sonuc[4]<br>"; 
}  
  echo"<br>
  </div>

</div>
<hr>
<h2 id='Küpe'>Küpeler</h2>
<p><b>Takılar sizinle parlasın</b>
    <br>
    <u>! Fotoğrafların üstüne gelin !</u>
</p>
<div class='grid'>
<div><img src='image/küpe/k1.jpg'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from küpe where K_ID=1";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  echo "Ayarı: $sonuc[2]<br>";   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
<div><img src='image/küpe/k2.jpg'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from küpe where K_ID=2";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  echo "Ayarı: $sonuc[2]<br>";   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
<div><img src='image/küpe/k3.jpg'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from küpe where K_ID=3";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  echo "Ayarı: $sonuc[2]<br>";   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
<div><img src='image/küpe/k4.jpg'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from küpe where K_ID=4";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  echo "Ayarı: $sonuc[2]<br>";   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
<div><img src='image/küpe/k5.jpg'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from küpe where K_ID=5";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  echo "Ayarı: $sonuc[2]<br>";   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
</div>

<hr>
<h2 id='Takım'>Takım</h2>
<p><b>Takılar sizinle parlasın</b>
    <br>
    <u>! Fotoğrafların üstüne gelin !</u>
</p>
<div class='grid'>
<div><img src='image/takim/1_org_zoom.webp'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from takim where T_ID=1";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  $sonuc[2];   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
<div><img src='image/takim/Bayanlar-tak-kolye-ve-k-pe-kad-nlar-i-in-kuyumcu-Set-l-ks-tasar-mc.webp'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from takim where T_ID=2";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  $sonuc[2];   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
<div><img src='image/takim/download.jpg'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from takim where T_ID=3";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  $sonuc[2];   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
<div><img src='image/takim/images.jpg'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from takim where T_ID=4";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  echo "Ayarı: $sonuc[2]<br>";   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
<div><img src='image/takim/takim2.jpg'></div>
<div><br><b>Bilgiler:</b><br><br>";
$sql_baglantisi->set_charset("utf8");
$sql="select * from takim where T_ID=5";
$sorgu=mysqli_query($sql_baglantisi,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
  $sonuc[0] ;    
  echo "Cinsi: $sonuc[1] <br>"; 
  echo "Ayarı: $sonuc[2]<br>";   
  echo "Ağırlığı: $sonuc[3]<br>";  
  echo "Fiyatı: $sonuc[4]<br>"; 
}  
echo"<br>
</div>
</div>
<hr>
<h2 id='iletişim'>İLETİŞİM</h2>
<p>

    Telefon:<a href='tel:02124284545'>+90 0212 428 45 45</a>
    <br>
    Gmail:Mail adresi için <a href='mailto:ACKuyumcu@gmail.com'>tıklayın.</a>
    <br>
    <a href='https://wa.me/05469222003'>Whatsapp</a> ile bize ulaşın!
    <br>
    Konum:<a href='https://maps.app.goo.gl/4E2GmVoEu2jnWXR99'>Sinanpaşa, Ortabahçe Cd. 10-1, 34353 Beşiktaş/İstanbul</a>
    <br>
    <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.2026349325038!2d29.005165099999996!3d41.042697600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7a1ff88ef0f%3A0x9d132b4c00f7e5c4!2zU2luYW5wYcWfYSwgT3J0YWJhaMOnZSBDZC4gMTAtMSwgMzQzNTMgQmXFn2lrdGHFny_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1703105230988!5m2!1str!2str'  width='100%' height='400' style='border: 10px;' allowfullscreen='' loading='lazy' referrerpolicy'no-referrer-when-downgrade'></iframe>
<br>
</p>
";


$sql_baglantisi->close();
?>
</body>
</html>

