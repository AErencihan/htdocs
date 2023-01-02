<form action="" method="post">
    <label for="kullaniciAdi">Kullanıcı Adı Giriniz</label>
    <input id="kullaniciAdi" name="kullaniciAdi" type="text">
    <br><br>
    <label for="cinsiyet">Cinsiyet Giriniz</label>
    <input id="cinsiyet" name="cinsiyet" type="text">
    <br><br>
    <label for="eposta">E-Posta Adresi Giriniz</label>
    <input id="eposta" name="eposta" type="email">
    <br><br>
    <label for="sifre">İsminizi Giriniz</label>
    <input id="sifre" name="sifre" type="password">
    <br><br>
    <input type="submit" name="gonder">Gönder</input>
</form>



<?php           
$db=new PDO("mysql:host=localhost; dbname=uyelik; charset=utf8","root","");

if(isset($_POST["gonder"]))
{
  $kad = $_POST["kullaniciAdi"];
  $cinsiyet = $_POST["cinsiyet"];
  $email = $_POST["eposta"];
  $sifre = $_POST["sifre"];
  
  if($db)
  {
    $gonder=$db->exec("INSERT INTO kullanicilar (kullanici_adi,cinsiyet,email,sifre) VALUES ('$kad','$cinsiyet','$email','$sifre')");
  }
  else{
    echo "Hata Oluştu";
  }
}
?>