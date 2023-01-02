<?php require("../baslik.php");?>
<html>
    <link rel="stylesheet" href="gymlscss.css">
    <title>SPOR SALONLARI</title>
<style>
  thead{
    border-bottom: 1px solid rgb(0,128,0);

  }
  .week:hover{
    transform: scale(1.1);
    transition: 0.5s all ease-in-out;
  }
   .first
  {
    border-bottom: 1px solid #ddd;
  }
  .first:hover{
    transform: scale(1.1);
    transition: 0.5s all ease-in-out;
  }
  .second
  {
    border-bottom: 1px solid #ddd;
  }
  .second:hover
  {
    transform: scale(1.1);
    transition: 0.5s all ease-in-out;
  }
  .third
  {
    border-bottom: 1px solid #ddd;
  }
  .third:hover{
    transform: scale(1.1);
    transition: 0.5s all ease-in-out;
  }
  .four
  {
    border-bottom: 1px solid #ddd;
  }
  .four:hover{
    transform: scale(1.1);
    transition: 0.5s all ease-in-out;
    
  }
  .a{
    text-decoration: none;
  }

</style>
    
    <section class="main">     
    <div class="container py-5">
    <div class="card text-bg-dark">
     <img src="mac.png" width="40%"alt="">
      <div class="card-body">
      <h2 class="card-title">MAC FİT</h2>
    <p class="card-text">Türkiye'nin hemen her yerine var olan şubeleri ve içerisinde sunduğu
      çeşitlilik ile listenin başında MAC FİT geliyor içerisinde sunduğu bir çok avantajlardan birkaçı 
             <ul>
             <li>Diyetisyenlik Uygulamaları</li>
             <li>Özel Ders</li>
             <li>Zumba</li>
             <li>Grup Dersler</li>
            <p>çalışma Saatleri 07:00/23:00 arasıdır</p> 
    </ul> 
    <p class="card-text"><small>Son Günncelleme 2 saat önce</small></p>
  </div>
  <form action="macfit.php">
    <input type="submit" class="btn btn-primary" style="background-color:rgb(0,128,0);" value="Detaylar">
  </form>
    </div>

<div class="card text-bg-dark">
     <img src="bobfit/bobb.jpg" width="28%"alt="">
      <div class="card-body">
      <h2 class="card-title">BOB GYM</h2>
    <p class="card-text">2013 yılında Ankara'da kurulan 3 
      şubesinin ardından. yaklaşık 4 yıl önce Nişantaşı'ndaki 4. şubesi ile. sektörün ilklerine öncülük etmeye başlamıştır.
      içerdiği ilgi çekici konseplerle ilgi odağı olmuş durumda.
             <li>Crossfit</li>
             <li>Fitness</li>
             <li>Özel Personel Eğitimleri</li>
    </ul> 
    <p class="card-text"><small>Son Günncelleme 2 saat önce</small></p>
  </div>
  <form action="bobgym.php">
    <input type="submit" class="btn btn-primary" style="background-color:rgb(0,128,0);" value="Detaylar">
  </form>
    </div>

    </div>


    <div class="container py-5">
    <div class="card text-bg-dark">
     <img src="dans.png" width="30%"alt="">
      <div class="card-body">
      <h2 class="card-title">Dans & Hareket Atölyesi</h2>
    <p class="card-text">İstanbul'un ilk ve tek butik stüdyosu olan Dans & Hareket Atölyesi, dünya çapında başarılar kazanmış alanında uzman eğitmenler ile hizmet vermektedir. 
130 metrekare geniş çalışma alanı bulunan stüdyoda son teknoloji eğitim ekranları ve ses sistemleri yer almaktadır. Salonda 
             <ul>
              <li>Oryantel</li>
             <li>Pilates</li>
             <li>Spinning</li>
             <li>Zumba</li>
            <p>Dans alanında grup çalışmaları yapılmaktadır.
             Sporcard üyeliğiniz ile stüdyoda grup derslerine katılarak farklı dans
              türlerinde deneyim kazanabilirsiniz.</p> 
    </ul> 
    <p class="card-text"><small>Son Günncelleme 2 saat önce</small></p>
  </div>
  <form action="dansatolye.php">
    <input type="submit" class="btn btn-primary" style="background-color:rgb(0,128,0);" value="Detaylar">
  </form>
    </div>
   
    <div class="card text-bg-dark">
     <img src="odadans.jpg" width="28%" alt="">
      <div class="card-body">
      <h2 class="card-title">Oda Dans</h2>
    <p class="card-text">ODADans, Türkiye’de ki dans seviyesini dünya standartlarına ulaştırmayı hedefleyen, sadece dansçı 
        değil “Sanatçı” üreten bir dans okulu olup; yetenekli & yeteneksiz kişilerin profesyonel şekilde eğitim almasına olanak tanıyan bir kurumdur….
             <ul>
             <li>Hip-Ho Dans</li>
             <li>Heels</li>
             <li>Afro</li>
             
            <p> Dans alanında grup çalışmaları yapılmaktadır.
             Sporcard üyeliğiniz ile stüdyoda grup derslerine katılarak farklı dans
              türlerinde deneyim kazanabilirsiniz.</p> 
            </ul> 
    <p class="card-text"><small>Son Günncelleme 2 saat önce</small></p>
  </div>
  <form action="odadans.php">
    <input type="submit" class="btn btn-primary" style="background-color:rgb(0,128,0);" value="Detaylar">
  </form>
    </div>
    </div>

                 <!-- DEĞERLENDİRMELERİ VERİ TABANINA GÖNDERME -->
 
    <div class="border border-success" style="width:auto;margin:10px 5px; box-shadow:rgb(0,128,0) 0 1px 5px;;border-radius: 15px;">
        <div class="container py-5" >
      <form action="" method="post">
    <h5>Anketimize katılmak ister misin</h5>
    <table>
      
   <tr>
    <td> Adınız: </td>
    <td><input type="text" name="isim" class="form"></td>
    </tr>
    
    <tr>
    <td> Soyadınız: </td>
    <td><input type="text" name="surname" class="form"></td>
    </tr>

    <tr>
    <td> Branş Seçimi: </td>
    <td>
      <select name="brans">
	<option value="ft">Fitness</option>
	<option value="dns">Dans</option>
	<option value="hl">Sağlıklı Beslenme</option>
</select>
</td>
</tr>
<tr>
 <td>Görmek istediğiniz <br>spor salonlarını yazabilirsiniz. </td> 
<td><textarea name="dgr" class="form" cols="20" rows="0"></textarea></td>
</tr>
  </table>
  <tr>
<input type="submit" class="btn btn-primary" style="background-color:rgb(0,128,0); text-align:center" name="gonder" value="Gönder" onclick="myalert()">   
 <input type="submit" class="btn btn-primary" style="background-color:rgb(0,128,0); text-align:center" onclick="reset()" value="Temizle">
</form>
</tr>
<img src="star.png" width="25%">
    </div>
    
    </div>
    <div class="card-body">
    </div>
    </section>

   <!-- BAŞLANGIÇ PROGRAMI  -->
    <section class="main">
      <div class="wrapper">
    <h2 class="card-title" style="text-align:center">Haftalık Program</h2>
    </div>
    <div class="container py-5">
<table id="program" role="grid" class="week" style="box-shadow:rgb(0,128,0) 0 5px 30px;;border-radius: 2px;">
  <thead class="days">
  <tr class="row-2 even">
    <th rowspan="1" colspan="1" style="width:334.112px">Pazartesi</th>
    <th rowspan="1" colspan="1" style="width:334.112px">Salı</th>
    <th rowspan="1" colspan="1" style="width:334.112px">Çarşamba</th>
    <th rowspan="1" colspan="1" style="width:334.112px">Cuma</th>
  </tr>
  </thead>
  <tbody class="movements">
    <tr class="row-3 odd">
      <td class="first"><a href="https://youtu.be/GmZXZgLmxhM" target="_blank" style="text-decoration: none;color:black">Lunge</td></a> 
      <td class="second"><a href="https://youtu.be/EI2kwv_jmMY" target="_blank" style="text-decoration: none;color:black">Squat</td></a>
      <td class="third"><a href="https://youtu.be/3jlhsGnAqts" target="_blank" style="text-decoration: none;color:black">Hafif Tempo Yürüyüş</td></a>
      <td class="four"><a href="https://youtu.be/KmcYHaUqf0g" target="_blank" style="text-decoration: none;color:black">Direnç bantlarıyla açma germe</td></a> 
    </tr>
    <tr class="row-4 even">
      <td class="first"><a href="https://youtu.be/EI2kwv_jmMY" target="_blank" style="text-decoration: none;color:black">Squat</td></a>
      <td class="second"><a href="https://youtu.be/NHlMTxMssgA" target="_blank" style="text-decoration: none;color:black"> Deadlift </td></a>
      <td class="third"><a href="https://youtu.be/Bc5uXYbrqQ0" target="_blank" style="text-decoration: none;color:black">Plank</td></a> 
      <td class="four"><a href="https://youtu.be/gVzOW1hhI3o" target="_blank" style="text-decoration: none;color:black">Jumping Jack</td></a> 
    </tr>
    <tr class="row-5 odd">
      <td class="first"><a href="https://youtu.be/C1nnOTzMjcY" target="_blank" style="text-decoration: none;color:black">Bench Press</td></a> 
      <td class="second"><a href="https://youtu.be/QPKXw8XEQiA" target="_blank" style="text-decoration: none;color:black">Cardio</td></a> 
      <td class="third"><a href="https://youtu.be/AdNpljl8tOI" target="_blank" style="text-decoration: none;color:black">Abdominal Crunch</td></a> 
      <td class="four"><a href="https://youtu.be/eLhBRe8vmW0" target="_blank" style="text-decoration: none;color:black">Bentover Row</td></a>
    </tr>   
  </tbody>
</table>
    </div>
</section>
<section class="main">
<div class="container py-5">
<form action="" method="post">
<p class="card-text">
  <ul>
   <li><h6> Başlangıc Seviyesi için hazırlanmış programdır.</h6></li> 
   <li><h6> Hareketler 5*8 şeklinde uygulanmalıdır.</h6></li> 
   <h6>Size en uygun programları öğrenmek için bizimle iletişime geçebilirsiniz</h6>
   </ul>
  </p>
    <input type="submit" class="btn btn-primary" style="background-color:rgb(0,128,0); text-align:center" value="Diyetisyenlerimiz">
  </form>
</div>
  </section>
</html>

             <!-- Uyarı Mesajı  -->
<script>
    function myalert() {
        alert("ANKETİMİZE KATILDIĞINIZ İÇİN TEŞEKKÜR EDERİZ");
       
    }
</script>
<!-- değerlendirme ekleme  -->
<?php           
$db=new PDO("mysql:host=localhost; dbname=ornek; charset=utf8","root","");

if(isset($_POST["gonder"]))
{
  $kad = $_POST["isim"];
  $ksurname = $_POST["surname"];
  $ktur = $_POST["brans"];
  $kdegerlendirme = $_POST["dgr"];

  if($db)
  {
    $gonder=$db->exec("INSERT INTO degerlendirme (ad,soyad,brans,yorumlar) VALUES ('$kad','$ksurname','$ktur','$kdegerlendirme')");
  }
  else{
    echo "Hata Oluştu";
  }
}
/*                            --------------sonuçları listeleme*--------
if(isset($_POST["listele"]))
{
$kdegerlendirme=$_POST["dgr"];
    if($db)
    {
        echo "Veri tabanı bağlantısı gerçekleşti!"."<br>";
        $listele= $db-> query("SELECT * FROM degerlendirme");
	while ($gelenveri = $listele->fetch()) 
	{
      echo $gelenveri["yorumlar"];
	}
    }
}*/

require("../alt.php");
?>