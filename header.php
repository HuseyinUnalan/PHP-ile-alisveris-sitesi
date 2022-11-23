<?php

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {

  exit("Bu sayfaya erişim yasak");
}

?>


<?php

ob_start();
@session_start();
include 'admin/netting/baglan.php';
require_once 'admin/production/fonksiyon.php';


$ayarsor = $db->prepare("SELECT * FROM ayar where id=:id");
$ayarsor->execute(array(
  'id' => 0
));
$ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);

$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => @$_SESSION['userkullanici_mail']
));
$say = $kullanicisor->rowCount();
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $ayarcek['ayar_title'] ?></title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- font  linki  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Favicon -->
  <link rel="shortcut icon" type="images/x-icon" href="<?php echo $ayarcek['ayar_favicon'] ?>">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $ayarcek['ayar_favicon'] ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ayarcek['ayar_favicon'] ?>">
  <!-- css bağlantısı  -->
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" href="assets/css/iletisim.css">

  <link rel="stylesheet" href="assets/css/sebze.css">

  <link rel="stylesheet" href="assets/css/odeme.css">

  <link rel="stylesheet" href="assets/css/sebze.css">

  <link rel="stylesheet" href="assets/css/sifirla.css">

  <link rel="stylesheet" href="assets/css/kaydol.css">

</head>
<style>
  /* #ff7800 */
  :root {
    --turuncu: <?php echo $ayarcek['ayar_renkbir'] ?>;
    --siyah:  <?php echo $ayarcek['ayar_renkiki'] ?>;
   
  }
</style>

<body>

  <!-- header kısmı başlangıcı  -->

  <header class="header">



    <a href="index" class="logo"> <img src="<?php echo $ayarcek['ayar_logo'] ?>" style="width: 80px; height: 80px;" alt=""> </a>

    <nav class="navbar">
      <a href="index">Anasayfa</a>

      <?php

      $kategorisor = $db->prepare("SELECT * FROM kategori ");
      $kategorisor->execute();

      while ($kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC)) {

      ?>
        <div class="dropdown">
          <a href="kategori-urun-<?= seo($kategoricek['kategori_ad']) . "-" . $kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_ad'] ?></a>
        </div>


      <?php } ?>


    </nav>

    <div class="ikonlar">

      <div class="fas fa-bars" id="menu-btn"></div>
      <div class="fas fa-search" id="arama-btn"></div>



      <?php if (isset($_SESSION['userkullanici_mail'])) { ?>
        <a href="profil">
          <div class="fas fa-user" id="giris-btn"></div>
        </a>
      <?php } else { ?>
        <a href="giris-yap">
          <div class="fas fa-user" id="giris-btn"></div>
        </a>
      <?php } ?>

      <?php if (isset($_SESSION['userkullanici_mail'])) { ?>
        <a href="sepet">
          <div class="fas fa-shopping-cart" id="sepet-btn"></div>
        </a>
        <a href="gecmis-siparisler">
          <div class="fas fa-cart-arrow-down" id="sepet-btn"></div>
        </a>
      <?php } else { ?>
        <a href="kaydol">
          <div class="fas fa-user-plus" id="sepet-btn"></div>
        </a>
      <?php } ?>

      <?php if (isset($_SESSION['userkullanici_mail'])) { ?>
        <a href="cikis-yap">
          <div class="fas fa-sign-out-alt" id="arama-btn"></div>
        </a>
      <?php } else { ?>

      <?php } ?>
    </div>

    <form action="urun-arama" method="POST" class="arama-form">
      <input type="search" id="aramakutusu" name="searchkeyword" placeholder="Burada Aratın">
      <input type="submit" name="searchsayfa" value="Ara">
    </form>


    <?php
    @$kullanici_id = $kullanicicek['kullanici_id'];
    $sepetsor = $db->prepare("SELECT * FROM sepet where kullanici_id=:id");
    $sepetsor->execute(array(
      'id' => $kullanici_id
    ));

    while ($sepetcek = $sepetsor->fetch(PDO::FETCH_ASSOC)) {

      $urun_id = $sepetcek['urun_id'];
      $urunsor = $db->prepare("SELECT * FROM urun where urun_id=:urun_id");
      $urunsor->execute(array(
        'urun_id' => $urun_id
      ));

      $uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);
      // $toplam_fiyat += $uruncek['urun_fiyat'] * $sepetcek['urun_adet'];
    ?>



      <div class="sepet">
        <div class="kutu">
          <i class="fas fa-trash"></i>
          <img src="images/portakal.jpg" alt="">
          <div class="content">
            <h3><?php echo $uruncek['urun_ad'] ?></h3>
            <span class="fiyat">5.99 ₺</span>
            <input type="number" placeholder="Adet:1" min="0" max="99" class="adet">
          </div>
        </div>
        <div class="toplam"> Toplam :5.99 ₺ </div>
        <?php if (!isset($_SESSION['userkullanici_mail'])) { ?>
          <a href="JavaScript:Void(0)" class="btn">Ödeme</a>
        <?php } else { ?>
          <a href="odeme" class="btn">Ödeme</a>

        <?php } ?>

      <?php } ?>

      </div>
      <!-- 
      <form action="admin/netting/islem.php" method="POST" class="giris-form">
        <h3>Giriş Yapın</h3>
        <input name="kullanici_mail" required type="email" placeholder="E-mailiniz" class="kutu">
        <input name="kullanici_password" required type="password" placeholder="Şifreniz" class="kutu">
        <p><a href="sifirla">Şifrenizi mi unuttunuz?</a></p>
        <p><a href="kaydol">Hesap Oluştur</a></p>
        <button type="submit" name="kullanicigiris" class="btn">Giriş Yap</button>
      </form> -->

  </header>

  <!-- header kısmı bitişi -->