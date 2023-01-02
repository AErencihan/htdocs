<?php require("baslik.php");

?>


<main class="form-signin w-100 shadow rounded-3" style="margin-left:auto;margin-right:auto;margin-top:90px">
    <form action="giris-yap.php" method="post">
        <div class="d-flex justify-content-center">
            <img class="mb-4" src="assets/images/logo.png" alt="" width="100">
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" id="isim" name="isim" placeholder="İsim">
            <label for="isim">İsim</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="soyisim" name="soyisim" placeholder="Soyisim">
            <label for="soyisim">Soyisim</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="eposta" name="eposta" placeholder="E-Posta Adresi">
            <label for="eposta">E-Posta Adresi</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="parola" name="parola" placeholder="Parola">
            <label for="parola">Parola</label>
        </div>
        <button name="kayit"class="w-100 btn btn-lg btn-success" type="submit">Üye Ol</button>
    </form>
</main>
<?php 

$db=new PDO("mysql:host=localhost; dbname=ornek; charset=utf8","root","");

if(isset($_POST["kayit"]))
{
  $kad = $_POST["isim"];
  $ksurname = $_POST["soyisim"];
  $kposta = $_POST["eposta"];
  $kparola = $_POST["parola"];

  if($db)
  {
    $gonder=$db->exec("INSERT INTO kullanicilar (kullanici_adi,kullanici_soyadi,email,parola) VALUES ('$kad','$ksurname','$kposta ','$kparola')");
  }
  else{
    echo "Hata Oluştu";
  }
}

require("alt.php");?>

 

