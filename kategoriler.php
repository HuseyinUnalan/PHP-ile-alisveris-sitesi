<?php



require_once 'header.php';




?>


<?php require_once 'slider.php'; ?>

<!-- kategorilerimiz kısmı başlangıcı  -->

<section class="kategori" id="kategoriler">

    <h1 class="heading"> <span>Ürünler</span> </h1>

    <div class="kutu-icerik">

        <?php

        if (isset($_GET['kategori_id'])) {

            $sayfada = 100; // sayfada gösterilecek içerik miktarını belirtiyoruz.

            $sorgu = $db->prepare("select * from urun where kategori_id=:kategori_id");
            $sorgu->execute(array(
                'kategori_id' => $_GET['kategori_id']
            ));
            $toplam_icerik = $sorgu->rowCount();
            $toplam_sayfa = ceil($toplam_icerik / $sayfada);
            // eğer sayfa girilmemişse 1 varsayalım.
            $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
            // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
            if ($sayfa < 1) $sayfa = 1;
            // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
            if ($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;
            $limit = ($sayfa - 1) * $sayfada;

            //tüm tablo sütunlarının çekilmesi
            $urunsor = $db->prepare("SELECT urun.*,kategori.* FROM urun INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id WHERE urun_ilan=:urun_ilan and kategori.kategori_id=:kategori_id order by urun_id DESC limit $limit,$sayfada");
            $urunsor->execute(array(
                'urun_ilan' => 1,
                'kategori_id' => $_GET['kategori_id']
            ));

            $say = $sorgu->rowCount();

            if ($say == 0) {
                echo "Bu kategoride ürün Bulunamadı";
            }
        } else {

            $sayfada = 100; // sayfada gösterilecek içerik miktarını belirtiyoruz.
            $sorgu = $db->prepare("select * from urun");
            $sorgu->execute();
            $toplam_icerik = $sorgu->rowCount();
            $toplam_sayfa = ceil($toplam_icerik / $sayfada);
            // eğer sayfa girilmemişse 1 varsayalım.
            $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
            // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
            if ($sayfa < 1) $sayfa = 1;
            // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
            if ($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;
            $limit = ($sayfa - 1) * $sayfada;


            $urunsor = $db->prepare("SELECT urun.urun_ad,urun.urun_id,urun.urun_fiyat,urun.kategori_id,urun.urun_ilan,kategori.kategori_ad FROM urun INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id WHERE urun_ilan=:urun_ilan and urun_onecikar=:urun_onecikar order by urun_id DESC limit $limit,$sayfada");
            $urunsor->execute(array(
                'urun_ilan' => 1

            ));

            $say = $sorgu->rowCount();

            if ($say == 0) {
                echo "Bu kategoride ürün Bulunamadı";
            }
        }

        while ($uruncek = $urunsor->fetch(PDO::FETCH_ASSOC)) {
            $urun_id = $uruncek['urun_id'];
            $urunfotosor = $db->prepare("SELECT * FROM urunfoto where urun_id=:urun_id order by urunfoto_sira ASC limit 1 ");
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


    </div>

</section>

<!-- kategoriler bitişi -->


<?php require_once 'footer.php'; ?>