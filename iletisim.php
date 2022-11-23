<?php require_once 'header.php'; ?>

<?php require_once 'slider.php'; ?>

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

if (@$_GET['durum'] == "ok") { ?>


  <div class="alertsuccess">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Başarılı!</strong> Mesaj Başarılı Bir Şekilde Gönderildi.
  </div>




<?php } ?>

<!--  KAYIT kısmı BAŞLANGIÇ  -->,
<section class="kategori" id="kategoriler">

  <h1 class="heading"> <span>İletişim Bilgileri</span> </h1>

  <div class="kutu-icerik">


    <a style="color: black;" href="tel:<?php echo $ayarcek['ayar_tel'] ?>" class="link">
      <div class="kutu">
        <h2 style="font-size: 24px; margin-bottom: 8px;">Telefon Numarası</h2>
        <h3> <i class="fas fa-phone"></i> <?php echo $ayarcek['ayar_tel'] ?> </h3>
        <br><br>
      </div>
    </a>


    <a style="color: black;" href="mailto:<?php echo $ayarcek['ayar_mail'] ?>" class="link">
      <div class="kutu">
        <h2 style="font-size: 24px; margin-bottom: 8px;">E-mail</h2>
        <h3> <i class="fas fa-envelope"></i> <?php echo $ayarcek['ayar_mail'] ?> </h3>
        <br><br>
      </div>
    </a>

    <a style="color: black;" href="JavaScrip:Void(0)" class="link">
      <div class="kutu">
        <h2 style="font-size: 24px;">Adres</h2>
        <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $ayarcek['ayar_il'] ?> / <?php echo $ayarcek['ayar_ilce'] ?> / <?php echo $ayarcek['ayar_adres'] ?> </h3>

      </div>
    </a>

</section>


<section class="kategori" id="kategoriler">
  <h1 class="heading"> <span>Mesaj Gönder</span> </h1>
  <div class="kutu-icerik">
    <div class="kutu">

      <form action="admin/netting/islem.php" method="POST">
        <h3>Ad Soyad</h3>
        <input type="text" name="mesaj_ad" maxlength="35" required placeholder="Adınız Soyadınız" class="ad">
        <h3>E-Mailiniz</h3>
        <input type="email" name="mesaj_mail" maxlength="35" required placeholder="E-mailiniz" class="email">
        <h3>Mesajınız</h3>
        <textarea name="mesaj_detay" id="" cols="30" rows="4" required placeholder="Mesajınızı Yazınız" class="bildirim"></textarea>
        <p></p>
        <button name="mesajkaydet" type="submit" class="btn">Mesaj Gönder</button>
      </form>
    </div>
</section>

<!-- hizmetlerimiz kısmı başlangıcı    -->

<section class="hizmetler" id="hizmetlerimiz">



  <div class="kutu-icerik">





  </div>

</section>

<!--  hizmetlirimiz kısmı bitişi  -->





<!--  hizmetlirimiz kısmı bitişi  -->

<!-- footer başlangıcı  -->
<?php require_once 'footer.php'; ?>