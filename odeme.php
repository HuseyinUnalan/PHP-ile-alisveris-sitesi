<?php require_once 'header.php';

$kullanici_id = $kullanicicek['kullanici_id'];
$sepetsor = $db->prepare("SELECT * FROM sepet where kullanici_id=:id");
$sepetsor->execute(array(
    'id' => $kullanici_id
));

$sepetcek = $sepetsor->fetch(PDO::FETCH_ASSOC);

$urunsor = $db->prepare("SELECT * FROM urun where urun_id=:urun_id");
$urunsor->execute(array(
    'urun_id' => $urun_id
));

$uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);
@$toplam_fiyat += $uruncek['urun_fiyat'] * $sepetcek['urun_adet'];


?>

<?php require_once 'slider.php'; ?>

<!--  KAYIT kısmı BAŞLANGIÇ  -->,
<section class="kategori" id="kategoriler">

    <h1 class="heading"> <span>Ödemeyi Gerçekleştirin</span> </h1>

    <div class="kutu-icerik">

        <form action="admin/netting/islem.php" method="POST">

            <div class="kutu">
                <h3>Kart Numarası</h3>
                <input type="text" required maxlength="20"   placeholder="XXXX XXXX XXXX XXXX" class="kartnumara">
                
                <h3>Son Kullanım Tarihi</h3>
                <input type="text" required maxlength="20"   placeholder="XX / XX" class="kartnumara">

                <h3>CVC</h3>
                <input type="text" required maxlength="20"   placeholder="XXX" class="kartnumara">
              
                <p></p>

                <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
                <input type="hidden" name="siparis_toplam" value="<?php echo $toplam_fiyat ?>">

                <button name="siparisekle" class="btn">Ödemeyi Gerçekleştir</button>

            </div>
        </form>

</section>



<section class="hizmetler" id="hizmetlerimiz">

    <div class="kutu-icerik">

    </div>

</section>







<!--  hizmetlirimiz kısmı bitişi  -->

<?php require_once 'footer.php'; ?>