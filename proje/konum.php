<html>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="konumcss.css">
    <head></head>
    <body>
    <div class="container">
      <div class="text"><h1>FİTSSLOVE'a HOŞ GELİDİNİZ</h1></div>
</div>
<div class="cnt">
<iframe id="harita" src="https://www.google.com/maps?output=embed&q=Türkiye" width="40%" height="40%" frameborder="2" style="border:0;margin-bottom:10px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<input class="btn btn-primary" type="submit" value="Doğrula"onClick="konumSorgula()">
</div>
</div>
</div> 
    </body>
    <script>
  /*
    Tarayıcıdan konum bilgisi alma fonksiyonu
    */
function konumSorgula() {
navigator.geolocation.getCurrentPosition(oldu, olmadi);
}
function oldu(pos) {
mapembed = `https://www.google.com/maps?output=embed&z=15&q=${pos.coords.latitude},${pos.coords.longitude}`;
console.log(mapembed);

document.getElementById('harita').setAttribute('src', mapembed);


console.log(pos);
}
function olmadi(hata) {
document.getElementById('durum_mesaj').innerHTML = `
<strong>Hata Kodu</strong> ${hata.code} <br>
<strong>Hata mesajı</strong> ${hata.message}
`;
console.log(hata);
}
</script>
</html>

<?php

?>