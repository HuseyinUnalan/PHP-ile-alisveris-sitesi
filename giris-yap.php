<?php require_once 'header.php'; ?>
<!-- anasayfa başlangıcı  -->

<?php require_once 'slider.php'; ?>

<!-- anasayfa bitişi -->
<style>
  .alertdanger {
    padding: 20px;
    background-color: #f44336;
    color: white;
    margin: 40px;
  }

  .alertsuccess {
    padding: 20px;
    background-color: #28a745;
    color: white;
    margin: 40px;
  }


  .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
  }

  .closebtn:hover {
    color: black;
  }
</style>


<?php

if (@$_GET['durum'] == "basarisizgiris") { ?>


  <div class="alertdanger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Hata!</strong> Girdiğiniz şifre ile e-mail eşleşmiyor.
  </div>



<?php } 

?>

<!--  KAYIT kısmı BAŞLANGIÇ  -->,
<section class="kategori" id="kategoriler">

  <h1 class="heading"> <span>Giriş Yap</span> </h1>

  <div class="kutu-icerik">

    <div class="kutu">
      <form action="admin/netting/islem.php" method="POST">
        <h3>E-mail</h3>
        <input name="kullanici_mail" required type="email" maxlength="30" placeholder="Mail Adresi " class="ad">
        <h3>Şifreniz</h3>
        <input name="kullanici_password" required type="password" maxlength="20" placeholder="Şifre" class="sifre">
        <p></p>
        <button name="kullanicigiris" class="btn" type="submit"> Giriş Yap </button>
      </form>


      <p><a href="sifirla">Şifrenizi mi unuttunuz?</a></p>
      <p><a href="kaydol">Hesap Oluştur</a></p>
    </div>

</section>

<!-- hizmetlerimiz kısmı başlangıcı    -->

<section class="hizmetler" id="hizmetlerimiz">



  <div class="kutu-icerik">





  </div>

</section>

<!--  hizmetlirimiz kısmı bitişi  -->





<!--  hizmetlirimiz kısmı bitişi  -->

<?php require_once 'footer.php'; ?>