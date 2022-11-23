<?php


require_once 'header.php';

$siparissor = $db->prepare("SELECT * FROM siparis ORDER BY siparis_id DESC");
$siparissor->execute();



?>
<!--End topbar header-->


<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2 mb-2">
      <div class="col-sm-9">

      </div>

    </div>


    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-table"></i>Sipariş Listesi
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sipariş ID</th>
                    <th>Sipariş Zaman</th>
                    <th>Üye</th>
                    <th>Düzenle</th>
                    <th>Üye Detay</th>
                    <th>Sil</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                  <?php
                  $say = 0;
                  while ($sipariscek = $siparissor->fetch(PDO::FETCH_ASSOC)) {
                    $say++ ?>
                    <tr>
                      <td width="20"><?php echo $sipariscek['siparis_id'] ?></td>
                      <td><?php echo $sipariscek['siparis_zaman'] ?></td>
                      <?php
                      $kullanici_id = $sipariscek['kullanici_id'];
                      $kullanicisor = $db->prepare("select * from kullanici where kullanici_id=:kullanici_id");
                      $kullanicisor->execute(array(
                        'kullanici_id' =>  $kullanici_id
                      ));
                      $kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);
                      @$kullanici_id = $kullanicicek['kullanici_id'];
                      ?>
                      <td><?php echo @$kullanicicek['kullanici_adsoyad'] ?></td>


                      <!-- 
                      <td>
                        <center><?php
                                if ($sipariscek['siparis_ilan'] == 1) { ?>
                            <button class="btn btn-success btn-xs">Satışta</button>
                          <?php } else { ?>
                            <button class="btn btn-danger btn-xs">Satışta Değil</button>
                          <?php } ?>
                        </center>
                      </td> -->


                      
                      <td>
                        <center><a href="siparis-detay.php?siparis_id=<?php echo $sipariscek['siparis_id']; ?>"><button class="btn btn-primary btn-xs">Detay</button></a></center>
                      </td>
                        
                      <td>
                        <center> <a class="btn btn-warning" target="_blank" href="kullanici-detay.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>">Üye Gör</a></center>
                      </td>
                      <td>
                        <center><a href="../netting/islem.php?siparis_id=<?php echo $sipariscek['siparis_id']; ?>&siparissil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center>
                      </td>
                    </tr>
                  <?php  }
                  ?>
                </tfoot>
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



<script>
  $(document).ready(function() {
    //Default data table
    $('#default-datatable').DataTable();


    var table = $('#example').DataTable({
      lengthChange: false,
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
    });

    table.buttons().container()
      .appendTo('#example_wrapper .col-md-6:eq(0)');

  });
</script>

</body>

</html>