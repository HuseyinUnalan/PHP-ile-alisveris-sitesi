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

  <h1 class="heading"> <span>Hakkımızda</span> </h1>

  <div class="kutu-icerik">



    <div class="kutu">
      <p ><?php echo $ayarcek['ayar_hakkimizda'] ?></p>
    </div>
  </div>

</section>





<!-- kategoriler bitişi -->

<?php require_once 'footer.php'; ?>