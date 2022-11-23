<?php

require_once 'header.php';



?>





<?php require_once 'slider.php'; ?>

<!-- kategorilerimiz kısmı başlangıcı  -->

<section class="kategori" id="kategoriler">

  <h1 class="heading"> <span>Sebzeler</span> </h1>

  <div class="kutu-icerik">



    <?php

    if (isset($_POST['searchsayfa'])) {

      $searchkeyword = $_POST['searchkeyword'];

      $urunsor = $db->prepare("SELECT * FROM urun where urun_ilan = '1' and urun_ad LIKE '%$searchkeyword%' ");
      $urunsor->execute();
      while ($uruncek = $urunsor->fetch(PDO::FETCH_ASSOC)) {
        $urun_id = $uruncek['urun_id'];
        $urunfotosor = $db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id  order by urunfoto_sira ASC limit 1 ");
        $urunfotosor->execute(array(
          'urun_id' => $urun_id
        ));
        $urunfotocek = $urunfotosor->fetch(PDO::FETCH_ASSOC);
    ?>
        <div class="kutu">
          <a href="urun-<?= seo($uruncek['urun_ad']) . "-" . $uruncek['urun_id'] ?>"><img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt=""></a>
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

      <?php } ?>

    <?php }  ?>







  </div>

</section>

<!-- kategoriler bitişi -->




<?php require_once 'footer.php'; ?>