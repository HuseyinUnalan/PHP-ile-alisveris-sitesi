<?php require_once 'header.php'; ?>



<?php require_once 'slider.php'; ?>



<!-- kategorilerimiz kısmı başlangıcı  -->

<section class="kategori" id="kategoriler">

  <h1 class="heading"> <span>Geçmiş Siparişler</span> </h1>

  <div class="kutu-icerik">
    <?php
    $kullanici_id = $kullanicicek['kullanici_id'];
    $siparissor = $db->prepare("SELECT * FROM siparis where kullanici_id=:id order by siparis_id DESC");
    $siparissor->execute(array(
      'id' => $kullanici_id
    ));

    while ($sipariscek = $siparissor->fetch(PDO::FETCH_ASSOC)) { ?>

      <div class="kutu">

          <!-- <h3> <?php echo $sipariscek['siparis_id']; ?></h3> -->
          <h3>Sipariş Zamanı : <?php echo $sipariscek['siparis_zaman']; ?></h3>
          <!-- <h3>Sipariş Tutarı : <?php echo $sipariscek['siparis_toplam']; ?> TL </h3> -->
          <h3><a href="gecmis-siparis-detay?siparis_id=<?php echo $sipariscek['siparis_id'] ?>"><button class="btn btn-primary btn-xs">Detay</button></a></h3>

      </div>

    <?php } ?>

  </div>
  <hr>

</section>



<!-- kategoriler bitişi -->


<?php require_once 'footer.php'; ?>