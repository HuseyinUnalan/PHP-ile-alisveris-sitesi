<?php

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {

    exit("Bu sayfaya erişim yasak");
}

?>


<!-- footer başlangıcı  -->

<section class="footer">

    <div class="kutu-icerik">

        <div class="kutu">
            <h3> <?php echo $ayarcek['ayar_title'] ?> <i class="fas fa-shopping-basket"></i> </h3>
            <p><?php echo $ayarcek['ayar_hakkimizda_baslik'] ?></p>
            <div class="sosyalmedya">
                <a href="<?php echo $ayarcek['ayar_facebook'] ?>" class="fab fa-facebook-f"></a>
                <a href="<?php echo $ayarcek['ayar_twitter'] ?>" class="fab fa-twitter"></a>
                <a href="<?php echo $ayarcek['ayar_instagram'] ?>" class="fab fa-instagram"></a>
                <a href="<?php echo $ayarcek['ayar_youtube'] ?>" class="fab fa-youtube"></a>
            </div>
        </div>

        <div class="kutu">
            <h3>İletişim</h3>
            <a href="tel:<?php echo $ayarcek['ayar_tel'] ?>" class="link"> <i class="fas fa-phone"></i> <?php echo $ayarcek['ayar_tel'] ?> </a>
            <a href="mailto:<?php echo $ayarcek['ayar_mail'] ?>" class="link"> <i class="fas fa-envelope"></i> <?php echo $ayarcek['ayar_mail'] ?> </a>
            <a href="JavaScrip:Void(0)" class="link"> <i class="fas fa-map-marker-alt"></i> <?php echo $ayarcek['ayar_il'] ?> / <?php echo $ayarcek['ayar_ilce'] ?> / <?php echo $ayarcek['ayar_adres'] ?> </a>

        </div>

        <div class="kutu">
            <h3>Yönlendirmeler</h3>
            <a href="index" class="link"> <i class="fas fa-arrow-right"></i> Anasayfa </a>
            <a href="hakkimizda" class="link"> <i class="fas fa-arrow-right"></i> Hakkımızda </a>
            <a href="iletisim" class="link"> <i class="fas fa-arrow-right"></i> İletişim </a>

            <!-- 
            <?php

            $kategorisor = $db->prepare("SELECT * FROM kategori order by kategori_id ASC limit 4");
            $kategorisor->execute();

            while ($kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC)) {

            ?>
                <div class="dropdown">
                    <a href="kategoriler-<?= seo($kategoricek['kategori_ad']) . "-" . $kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_ad'] ?></a>
                </div>


            <?php } ?> -->

        </div>


    </div>

    <div class="emegigecenler"> <span> Tüm Hakaları Saklıdır © </span>
        <p style="font-size: 12px;"> <a href="https://www.linkedin.com/in/h%C3%BCseyin-%C3%BCnalan-571143234/" target="_blank">Hüseyin Ünalan</a> </p>
    </div>

</section>

<!-- footer bitişi -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- javascript yönlendirmesi -->
<script src="assets/js/script.js"></script>


<!-- GetButton.io widget -->
<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+(90)<?php echo $ayarcek['ayar_tel'] ?>", // WhatsApp number
            call_to_action: "Bize mesaj gönderin", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->


</body>

</html>