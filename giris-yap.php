<?php require("baslik.php");?>


<main class="form-signin w-100 shadow border " style="margin-left:auto;margin-right:auto;margin-top:90px">
    <form action="" method="post">
        <div class="d-flex justify-content-center">
            <img class="mb-4" src="assets/images/logo.png" alt="" width="100">
        </div>

        <div class="form-floating">
            <input type="email" class="form-control" id="eposta" name="eposta" placeholder="E-Posta Adresi">
            <label for="eposta">E-Posta Adresi</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="parola" name="parola" placeholder="Parola">
            <label for="parola">Parola</label>
        </div>
     
        <button  name="giris"class="w-100 btn btn-lg btn-success" type="submit">Giriş Yap</button>

        <div class="mt-3">
            <p>Bir hesaba sahip değil misiniz? <a class="fw-bolder" href="uye-ol.php">Üye Ol</a> </p>
        </div>
    </form>
</main>


<?php 

require("alt.php");?>