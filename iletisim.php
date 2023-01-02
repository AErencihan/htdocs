<?php require('baslik.php')?>

<div class="anailetisim container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="iletisimform">
                    <div class="mbottom">
                        <h2> İletişim Bilgilerinizi Bırakın </h2>
                        <p> Soru, görüş ve önerileriniz için bilgilerinizi bırakın biz sizi arayalım. </p>
                    </div>
                    <form role="form" action="/tr/iletisim/" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-lg" placeholder="Adınız" required=""
                                        name="isim" id="isim" value="">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-lg" placeholder="Soyadınız" required=""
                                        name="soyisim" id="soyisim" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="E-Posta Adresiniz" required=""
                                        class="form-control input-lg" id="email" value="">
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="tel" placeholder="Telefon" required=""
                                        class="form-control input-lg" id="tel" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="mesaj" class="form-control" rows="8" cols="80"
                                        placeholder="Mesajınız"></textarea>
                                </div>
                            </div>
                        </div><button type="submit" class="btn btn-gonder2 btn-lg" name="gonder">FORMU GÖNDER</button>
                    </form>
                </div>
            </div>
            <div class="col-md-1 text-center aralik1 hidden-xs">
                <img class="img-responsive"
                    src="http://erkankaratas.com.tr/wp-content/themes/drerkan/resimler/aralik1.png" alt="">
            </div>
            <div class="col-md-5 iletisimbilgi">
                <h2> İletişim Bilgilerimiz </h2>
                <table class="mtop">
                    <tbody>
                        <tr>
                            <td><strong> Adres: </strong></td>
                            <td>İstanbul Gelişim Üniversitesi
                            </td>
                        </tr>
                        <tr>
                            <td><strong> Telefon: </strong></td>
                            <td>+90 551 983 82 92 </td>
                        </tr>

                        <tr>
                            <td><strong>E-Mail: </strong></td>
                            <td>hatice.ayva@ogr.gelisim.edu.tr</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- İLETİSİM KISMINA HARİTA DA EKLEMEK İSTEDİM AMA DEFALARCA DENEMEME RAĞMEN ÇALIŞMADI BUNUNLA İKİNCİ DÖNEM İLGİLENECEĞİM AŞAĞIDA YER ALAN KODLAR HARİTA KODLARI -->
<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>

<body>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.2444956417608!2d28.698976!3d40.9980215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa0f5088d375d%3A0xfc55898b29bc7b33!2zxLBTVEFOQlVMIEdFTMSwxZ7EsE0gw5xOxLBWRVJTxLBURVPEsA!5e0!3m2!1str!2str!4v1672485601532!5m2!1str!2str"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <?php require('alt.php')?>