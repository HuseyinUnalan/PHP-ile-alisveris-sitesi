<?php

require_once 'header.php';

$ilList = $db->query("select * from iller")->fetchAll(PDO::FETCH_ASSOC);




?>

<?php require_once 'slider.php'; ?>



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

if (@$_GET['durum'] == "ok") { ?>


  <div class="alertsuccess">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Güncelleme!</strong> Profil bilgileriniz başarı ile güncellendi. 
  </div>



<?php } 



?>


<!--  KAYIT kısmı BAŞLANGIÇ  -->

<section class="kategori" id="kategoriler">
  <h1 class="heading"> <span>Bilgileri Güncelle</span> </h1>
  <div class="kutu-icerik">
    <form action="admin/netting/islem.php" method="POST">
      <div class="kutu">

        <h3>Ad Soyad</h3>
        <input name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" required type="text" maxlength="30" placeholder="Ad Soyad " class="ad">
        <?php
        $kullanici_il = $kullanicicek['kullanici_il'];
        $ilsor = $db->prepare("select * from iller where il_no=:il_no");
        $ilsor->execute(array(
          'il_no' =>  $kullanici_il
        ));
        $ilcek = $ilsor->fetch(PDO::FETCH_ASSOC);
        $il_no = $ilcek['il_no'];
        ?>

        <h3>İl Seçiniz</h3>
        <select id="il" name="kullanici_il" class="ad">
          <option value="<?php echo $kullanicicek['kullanici_il'] ?>"><?php echo $ilcek['isim'] ?></option>

          <?php
          foreach ($ilList as $key => $value) {
            echo '<option value="' . $value['il_no'] . '" >' . $value['isim'] . '</option>';
          }
          ?>
        </select>
        <?php
        $kullanici_ilce = $kullanicicek['kullanici_ilce'];
        $ilcesor = $db->prepare("select * from ilceler where ilce_no=:ilce_no");
        $ilcesor->execute(array(
          'ilce_no' =>  $kullanici_ilce
        ));
        $ilcecek = $ilcesor->fetch(PDO::FETCH_ASSOC);
        $ilce_no = $ilcecek['ilce_no'];
        ?>

        <h3>İlçe Seçiniz</h3>
        <select id="ilce" name="kullanici_ilce" class="soyad">
          <option value="<?php echo $kullanicicek['kullanici_ilce'] ?>"><?php echo $ilcecek['isim'] ?></option>
        </select>

        <h3>Adres</h3>
        <input name="kullanici_adres" value="<?php echo $kullanicicek['kullanici_adres'] ?>" required type="text" maxlength="45" placeholder="Açık Adres" class="acikadres">

        <h3>Telefon Numarası</h3>
        <input name="kullanici_tel" value="<?php echo $kullanicicek['kullanici_tel'] ?>" required type="text" maxlength="45" placeholder="Telefon Numarası" class="acikadres">

        <p></p>
        <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

        <button name="kullanicibilgiguncelle" class="btn" type="submit"> Bilgileri Güncelle </button>

        <p><a href="sifre-guncelle">Şifreni Güncelle</a></p>
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