<?php


require_once 'header.php';




$urunsor = $db->prepare("SELECT * FROM urun where urun_id=:urun_id");
$urunsor->execute(array(
  'urun_id' => $_GET['urun_id']
));

$uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);

$urun_id = $uruncek['urun_id'];
$urunfotosor = $db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id order by urunfoto_sira ASC limit 1 ");
$urunfotosor->execute(array(
  'urun_id' => $urun_id
));

$urunfotocek = $urunfotosor->fetch(PDO::FETCH_ASSOC);



?>

<?php require_once 'slider.php'; ?>

<!-- kategorilerimiz kısmı başlangıcı  -->

<section class="kategori" style="margin-bottom: 40px;" id="kategoriler">

  <h1 class="heading"> <span><?php echo $uruncek['urun_ad'] ?></span> </h1>

  <div class="kutu-icerik">

    <div class="kutu">
      <img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt="">
      <h3><?php echo $uruncek['urun_ad'] ?></h3>
      <div class="fiyat"> <?php echo $uruncek['urun_fiyat'] ?> TL  / <?php echo $uruncek['urun_birim'] ?>  </div>
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

    <div class="kutu">
      <p style="color: red;"><?php echo $uruncek['urun_aciklama'] ?></p>
    </div>
  </div>

</section>





<!-- kategoriler bitişi -->

<?php require_once 'footer.php'; ?>