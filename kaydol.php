<?php

require_once 'header.php';

$ilList = $db->query("select * from iller")->fetchAll(PDO::FETCH_ASSOC);



?>

<?php require_once 'slider.php'; ?>
<style>
  .alertdanger {
    padding: 20px;
    background-color: #f44336;
    color: white;
    margin: 40px;
  }

  .alertsuccess {
    padding: 20px;
    background-color: #28a745;
    color: white;
    margin: 40px;
  }

  .alertwarning {
    padding: 20px;
    background-color: #ffc107;
    color: white;
    margin: 40px;
  }

  .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
  }

  .closebtn:hover {
    color: black;
  }
</style>


<?php

if (@$_GET['durum'] == "kayitlihesap") { ?>
  <div class="alertwarning">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Kayıtlı E-mail!</strong> Bu E-mail İle Daha Önceden Kayıt Olunmuş Eğer Şifrenizi Unuttuysanız <a href="sifirla">Buraya Tıklayınız.</a> 
  </div>
<?php } elseif (@$_GET['durum'] == "basarisiz") { ?>

  <div class="alertdanger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Hata!</strong> Kayıt Başarısız Oldu.
  </div>
<?php } 

?>


<!--  KAYIT kısmı BAŞLANGIÇ  -->,
<section class="kategori" id="kategoriler">
    <h1 class="heading"> <span>Hesap Oluşturun</span> </h1>
    <div class="kutu-icerik">
        <form action="admin/netting/islem.php" method="POST">
            <div class="kutu">
                <h3>Ad Soyad</h3>
                <input name="kullanici_adsoyad" required type="text" maxlength="30" placeholder="Ad Soyad " class="ad">
                <h3>E-Mailiniz</h3>
                <input name="kullanici_mail" required type="email" maxlength="35" placeholder="E-mailiniz" class="email">
                <h3>İl Seçiniz</h3>
                <select id="il" name="kullanici_il" required class="ad">
                    <option value="">İl Seçiniz</option>
                    <?php
                    foreach ($ilList as $key => $value) {
                        echo '<option value="' . $value['il_no'] . '" >' . $value['isim'] . '</option>';
                    }
                    ?>
                </select>
                <h3>İlçe Seçiniz</h3>
                <select id="ilce" name="kullanici_ilce" required class="soyad">
                    <option value="">İlçe Seçin</option>
                </select>
                <h3>Adres</h3>
                <input name="kullanici_adres" required type="text" maxlength="45" placeholder="Açık Adres" class="acikadres">
                <h3>Telefon Numarası</h3>
                <input name="kullanici_tel" required type="text" maxlength="45" placeholder="Telefon Numarası" class="acikadres">
                <h3>Şifreniz</h3>
                <input name="kullanici_password" required type="password" maxlength="20" placeholder="Şifre" class="sifre">
                <p></p>
                <button name="kullanicikaydet" class="btn" type="submit"> Kaydol </button>
                <p><a href="giris-yap">Zaten Hesabım Var</a></p>
            </div>
        </form>
</section>

<!-- hizmetlerimiz kısmı başlangıcı    -->

<section class="hizmetler" id="hizmetlerimiz">



    <div class="kutu-icerik">





    </div>

</section>

<!--  hizmetlirimiz kısmı bitişi  -->





<!--  hizmetlirimiz kısmı bitişi  -->

<?php require_once 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"> </script>
<script type="text/javascript">
    $(document).ready(function() {
        // $("#ilce").hide();
        $("#il").change(function() {
            var il_no = $(this).val();
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    "il": il_no
                },
                success: function(e) {
                    $("#ilce").show();
                    $("#ilce").html(e);
                }
            });
        })
    });
</script>