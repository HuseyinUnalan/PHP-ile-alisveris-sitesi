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

if (@$_GET['durum'] == "sifredegisti") { ?>


  <div class="alertsuccess">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Şifre Güncelleme!</strong> Şifreniz Başarı İle Güncellendi.</a> 
  </div>



<?php } elseif (@$_GET['durum'] == "sifreleruyusmuyor") { ?>

  <div class="alertdanger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <strong>Hata!</strong> Girdiğniz Şifreler Uyuşmuyor.
  </div>
<?php } elseif (@$_GET['durum'] == "eksiksifre") { ?>
<div class="alertwarning">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <strong>Hata!</strong> Girdiğniz Şifreler 6 Karakter ve üzeri olmalıdır.
</div>
<?php } elseif (@$_GET['durum'] == "no") { ?>
<div class="alertdanger">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <strong>Hata!</strong> Bir Hata İle Karşılaştık.
</div>
<?php }

?>
<section class="kategori" id="kategoriler">
  <h1 class="heading"> <span>Bilgileri Güncelle</span> </h1>
  <div class="kutu-icerik">
    <form action="admin/netting/islem.php" method="POST" role="form">
      <div class="kutu">
        <h3>Eski Şifreniz</h3>
        <input name="kullanici_eskipassword" required type="password" maxlength="20" placeholder="Şifre" class="sifre">

        <h3>Şifreniz</h3>
        <input name="kullanici_passwordone" required type="password" maxlength="20" placeholder="Şifre" class="sifre">

        <h3>Şifre Tekrar</h3>
        <input name="kullanici_passwordtwo" required type="password" maxlength="20" placeholder="Şifre" class="sifre">

        <p></p>
        <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

        <button name="kullanicisifreguncelle" class="btn" type="submit"> Şifreni Güncelle </button>
        <p><a href="profil">Profile Git</a></p>
      </div>
    </form>
</section>


<section class="hizmetler" id="hizmetlerimiz">



  <div class="kutu-icerik">





  </div>

</section>



<?php require_once 'footer.php'; ?>