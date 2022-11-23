<?php


require_once 'header.php';

$kullanicisor = $db->prepare("SELECT * FROM kullanici where  kullanici_yetki='1' ORDER BY kullanici_id DESC   ");
$kullanicisor->execute();

?>
<!--End topbar header-->

<div class="content-wrapper">
  <div class="container-fluid">


    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header"><i class="fa fa-table"></i>Üye Listesi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sıra No</th>
                    <th>Ad Soyad</th>
                    <th>Mail</th>
                    <th>Detay</th>
                    <th>Mail</th>
                    <th>Ara</th>
                    <th>Sil</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $say = 0;
                  while ($kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC)) {
                    $say++ ?>
                    <tr>
                      <td width="20"><?php echo $say ?></td>
                      <td><?php echo $kullanicicek['kullanici_adsoyad'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_mail'] ?></td>



                      <td>
                        <center><a href="kullanici-detay.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>"><button class="btn btn-primary btn-xs">Detay</button></a></center>
                      </td>
                      <td>
                        <center><a href="mailto:<?php echo $kullanicicek['kullanici_mail']; ?>"><button class="btn btn-success btn-xs">Mail Gönder</button></a></center>
                      </td>
                      <td>
                        <center><a href="tel:<?php echo $kullanicicek['kullanici_tel']; ?>"><button class="btn btn-dark btn-xs">Ara</button></a></center>
                      </td>
                      <td>
                        <center><a href="../netting/islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>&kullanicisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center>
                      </td>

                    </tr>



                  <?php  }

                  ?>




                </tbody>
              </table>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Row-->

  </div>
  <!-- End container-fluid-->
  <?php require_once 'footer.php'; ?>
</div>
<!--End content-wrapper-->


<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->


</body>

</html>