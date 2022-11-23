<?php require_once 'header.php'; ?>



<?php require_once 'slider.php'; ?>



<!-- kategorilerimiz kısmı başlangıcı  -->

<section class="kategori" id="kategoriler">
  <h1 class="heading"> <span>Sepet</span> </h1>
  <div class="kutu-icerik">
    <?php
    $kullanici_id = $kullanicicek['kullanici_id'];
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
      @$toplam_fiyat += $uruncek['urun_fiyat'] * $sepetcek['urun_adet'];
      $urun_id = $uruncek['urun_id'];
      $urunfotosor = $db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id order by urunfoto_sira ASC limit 1 ");
      $urunfotosor->execute(array(
        'urun_id' => $urun_id
      ));
      $urunfotocek = $urunfotosor->fetch(PDO::FETCH_ASSOC);
    ?>
      <div class="kutu">
        <form action="admin/netting/islem.php" method="POST">
          <a href="urun-<?= seo($uruncek['urun_ad']) . "-" . $uruncek['urun_id'] ?>"><img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" alt=""></a>
          <h3><?php echo $uruncek['urun_ad'] ?></h3>
          <div class="fiyat"> <?php echo $uruncek['urun_fiyat'] ?> TL  / <?php echo $uruncek['urun_birim'] ?>  </div>
          <input type="number" disabled value="<?php echo $sepetcek['urun_adet'] ?>" class="adet">
          <br>
          <br>
        </form>
        <a href="admin/netting/islem.php?sepet_id=<?php echo $sepetcek['sepet_id']; ?>&sepetsil=ok"><button class="btn">Sepetten Kaldır</button></a>
      </div>
    <?php } ?>
  </div>
  <hr>
</section>
<section class="kategori" id="kategoriler">
  <div class="kutu-icerik" style="margin-bottom: 35px;">
    <div class="kutu" style="padding: 30px;">

      <h2 style="float: center; font-size: 24px;"> <?php echo @$toplam_fiyat ?> TL</h2>
      <a href="odeme" class="btn">Siparişi Onayla ve Ödeme Yap</a>
    </div>
  </div>
</section>

<!-- kategoriler bitişi -->


<?php require_once 'footer.php'; ?>