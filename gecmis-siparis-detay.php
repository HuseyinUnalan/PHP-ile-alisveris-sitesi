<?php require_once 'header.php'; ?>



<?php require_once 'slider.php'; ?>



<!-- kategorilerimiz kısmı başlangıcı  -->

<section class="kategori" id="kategoriler">

  <h1 class="heading"> <span>Geçmiş Sipariş Detay</span> </h1>

  <div class="kutu-icerik">
    <?php
    $siparissor = $db->prepare("SELECT urun.*,kullanici.*,siparis.*,siparis_detay.*,urunfoto.*  FROM siparis 
    INNER JOIN siparis_detay ON siparis.siparis_id=siparis_detay.siparis_id 
    INNER JOIN urun ON urun.urun_id=siparis_detay.urun_id 
    INNER JOIN kullanici ON kullanici.kullanici_id=siparis.kullanici_id 
    INNER JOIN urunfoto ON urunfoto.urun_id=urun.urun_id
    where siparis.siparis_id=:siparis_detay_id ");

    $siparissor->execute(array(
      'siparis_detay_id' => $_GET['siparis_id']
    ));

    
    $say = 0;

    while ($sipariscek = $siparissor->fetch(PDO::FETCH_ASSOC)) {
      $say++;


    @$toplam_fiyat += $sipariscek['urun_fiyat'] * $sipariscek['urun_adet'];
    @$zaman = $sipariscek['siparis_zaman'];
        
    ?>
        <div class="kutu">
          <form action="admin/netting/islem.php" method="POST">
            <a href="urun-<?= seo($sipariscek['urun_ad']) . "-" . $sipariscek['urun_id'] ?>"><img src="<?php echo $sipariscek['urunfoto_resimyol'] ?>" alt=""></a>
            <h3><?php echo $sipariscek['urun_ad'] ?></h3>
            <div class="fiyat"> <?php echo $sipariscek['urun_fiyat'] ?> TL </div>
            <input type="number" disabled value="<?php echo $sipariscek['urun_adet'] ?>" class="adet">
            <br>
            <br>
          </form>
        </div>
      <?php } ?>
  </div>
  <hr>
</section>
<section class="kategori" id="kategoriler">
  <div class="kutu-icerik" style="margin-bottom: 35px;">
    <div class="kutu" style="padding: 30px;">

      <h2 style="float: center; font-size: 24px;">Sipariş Toplam Tutar :  <?php echo @$toplam_fiyat ?> TL</h2>
      <h2 style="float: center; font-size: 24px;">Sipariş Tarih :  <?php echo $zaman ?></h2>
    </div>
  </div>
</section>

<!-- kategoriler bitişi -->


<?php require_once 'footer.php'; ?>