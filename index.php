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

<!-- <div class="alertdanger">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>

<div class="alertsuccess">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>
 -->

 

<?php

if (@$_GET['durum'] == "basarili") { ?>


  <div class="alertsuccess">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Başarılı!</strong> Giriş Başarılı.
  </div>



<?php } elseif (@$_GET['durum'] == "ok") { ?>

  <div class="alertsuccess">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Başarılı!</strong> Sipariş Başarılı.
  </div>

<?php } elseif (@$_GET['durum'] == "kayitbasarili") { ?>


  <div class="alertsuccess">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Başarılı!</strong> Kayıt Başarılı.
  </div>

<?php } elseif (@$_GET['durum'] == "basarisizgiris") { ?>


  <div class="alertdanger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
  </div>

<?php } elseif (@$_GET['durum'] == "exit") { ?>


<div class="alertdanger">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <strong>Çıkış!</strong> Başarıyla Çıkış Yapıldı.
</div>
<?php } elseif (@$_GET['durum'] == "sifretalepbasarili") { ?>


<div class="alertsuccess">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <strong>Talep Başarılı!</strong> Şifre Talebiniz Alınmıştır En Kısa Sürede E-mail Hesabınıza Şifreniz İletilecektir.
</div>
<?php } 

?>



<!-- kategorilerimiz kısmı başlangıcı  -->

<section class="kategori" id="kategoriler">

  <h1 class="baslik"> <span>kategoriler</span> </h1>

  <div class="kutu-icerik">


    <?php

    $kategorisor = $db->prepare("SELECT * FROM kategori ");
    $kategorisor->execute();

    while ($kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC)) {

      $kategori_id = $kategoricek['kategori_id'];
      $kategorifotosor = $db->prepare("SELECT * FROM kategorifoto where kategori_id=:kategori_id order by kategorifoto_sira ASC limit 1 ");
      $kategorifotosor->execute(array(
        'kategori_id' => $kategori_id
      ));

      $kategorifotocek = $kategorifotosor->fetch(PDO::FETCH_ASSOC);

    ?>

      <div class="kutu">
        <a href="kategori-urun-<?= seo($kategoricek['kategori_ad']) . "-" . $kategoricek['kategori_id'] ?>"><img style="width: 140px; height: 180px;" src="<?php echo $kategorifotocek['kategorifoto_resimyol'] ?>" alt=""></a>
        <h3><?php echo $kategoricek['kategori_ad'] ?></h3>
      </div>

    <?php } ?>



  </div>

</section>
<!-- kategoriler bitişi -->

<!-- öne çıkan ürünlerimiz kısmı başlangıcı  -->

<section class="urunler" id="ürünlerimiz">

  <h1 class="baslik"> Öne Çıkan <span>Ürünler</span> </h1>

  <div class="swiper urun-slider">

    <div class="swiper-wrapper">


      <?php
      $urunsor = $db->prepare("SELECT * FROM urun where urun_id  % 2 = 0 and urun_onecikar = '1' and urun_ilan = '1' ");
      $urunsor->execute();
      while ($uruncek = $urunsor->fetch(PDO::FETCH_ASSOC)) {
        $urun_id = $uruncek['urun_id'];
        $urunfotosor = $db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id order by urunfoto_sira ASC limit 1 ");
        $urunfotosor->execute(array(
          'urun_id' => $urun_id
        ));
        $urunfotocek = $urunfotosor->fetch(PDO::FETCH_ASSOC);
      ?>
        <div class="swiper-slide kutu">
          <a href="urun-<?= seo($uruncek['urun_ad']) . "-" . $uruncek['urun_id'] ?>">
            <img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="">

            <h3><?php echo $uruncek['urun_ad'] ?></h3>
            <div style="color: black;" class="fiyat"> <?php echo $uruncek['urun_fiyat'] ?> TL  / <?php echo $uruncek['urun_birim'] ?> </div>
          </a>

          <form action="admin/netting/islem.php" method="POST">
            <input type="number" name="urun_adet" maxlength="20" min="1" max="99" value="1" class="adet">
            <br>

            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
            <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">


            <?php if (isset($_SESSION['userkullanici_mail'])) { ?>
              <button type="submit" name="sepetekle" class="btn">Sepete Ekle</button>
            <?php } else { ?>
              <a href="giris-yap" class="btn">Giriş Yap</a>
            <?php } ?>
          </form>
        </div>

      <?php } ?>


    </div>

  </div>

  <div class="swiper urun-slider">

    <div class="swiper-wrapper">

      <?php
      $urunsor = $db->prepare("SELECT * FROM urun where urun_id  % 2 = 1 and urun_onecikar = '1' and urun_ilan = '1' ");
      $urunsor->execute();
      while ($uruncek = $urunsor->fetch(PDO::FETCH_ASSOC)) {
        $urun_id = $uruncek['urun_id'];
        $urunfotosor = $db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id order by urunfoto_sira ASC limit 1 ");
        $urunfotosor->execute(array(
          'urun_id' => $urun_id
        ));
        $urunfotocek = $urunfotosor->fetch(PDO::FETCH_ASSOC);
      ?>

        <div class="swiper-slide kutu">
          <a href="urun-<?= seo($uruncek['urun_ad']) . "-" . $uruncek['urun_id'] ?>"><img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt=""></a>
          <h3><?php echo $uruncek['urun_ad'] ?></h3>
          <div style="color: black;" class="fiyat"> <?php echo $uruncek['urun_fiyat'] ?> TL  / <?php echo $uruncek['urun_birim'] ?></div>


          <form action="admin/netting/islem.php" method="POST">
            <input type="number" name="urun_adet" maxlength="20" min="1" max="99" value="1" class="adet">
            <br>
            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
            <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">

            <?php if (isset($_SESSION['userkullanici_mail'])) { ?>
             <a href="" target="_blank"> <button  name="sepetekle" class="btn" >Sepete Ekle</button> </a>
            <?php } else { ?>
              <a href="giris-yap" class="btn">Giriş Yap</a>
            <?php } ?>
          </form>


        </div>

      <?php } ?>


    </div>
  </div>


</section>

<!-- öne çıkan ürünlerimiz kısmı bitişi  -->






<!-- hizmetlerimiz kısmı başlangıcı    -->

<section class="hizmetler" id="hizmetlerimiz">

  <h1 class="baslik"> <span>Hizmetlerimiz</span> </h1>

  <div class="kutu-icerik">


    <?php
    $hizmetsor = $db->prepare("SELECT * FROM hizmetler ");
    $hizmetsor->execute();
    while ($hizmetcek = $hizmetsor->fetch(PDO::FETCH_ASSOC)) {
      $hizmet_id = $hizmetcek['hizmet_id'];
      $hizmetfotosor = $db->prepare("SELECT * FROM hizmetfoto where hizmet_id=:hizmet_id order by hizmetfoto_sira ASC limit 1 ");
      $hizmetfotosor->execute(array(
        'hizmet_id' => $hizmet_id
      ));
      $hizmetfotocek = $hizmetfotosor->fetch(PDO::FETCH_ASSOC);
    ?>
      <div class="kutu">
        <img src="<?php echo $hizmetfotocek['hizmetfoto_resimyol'] ?>" alt="">
        <h3><?php echo $hizmetcek['hizmet_ad'] ?></h3>
        <p><?php echo $hizmetcek['hizmet_icerik'] ?></p>

      </div>
    <?php } ?>


  </div>

</section>

<!--  hizmetlirimiz kısmı bitişi  -->

<?php require_once 'footer.php'; ?>