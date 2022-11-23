<?php


require_once 'header.php';

$slidersor = $db->prepare("SELECT * FROM slider ORDER BY slider_id DESC");
$slidersor->execute();



?>
<!--End topbar header-->


<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2 mb-2">
      <div class="col-sm-9">
        <h3>slider Listesi</h3>

      </div>

    </div>


    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-table"></i>Slider Listesi
            <a href="slider-ekle" class="btn btn-primary btn-sm" style="float: right;">Yeni Ekle</a>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sıra No</th>
                    <th>Başlık</th>
                    <th>Resim Ekle</th>
                    <th>Düzenle</th>
                    <th>Sil</th>


                  </tr>
                </thead>
                <tbody>

                </tbody>


                <tfoot>


                  <?php

                  $say = 0;

                  while ($slidercek = $slidersor->fetch(PDO::FETCH_ASSOC)) {
                    $say++ ?>


                    <tr>
                      <td width="20"><?php echo $say ?></td>
                      <td>
                       <?php echo $slidercek['slider_baslik'] ?>
                      </td>

                   



                      <td>
                        <a href="slider-galeri.php?slider_id=<?php echo $slidercek['slider_id'] ?>" class="btn btn-info">Resim Yükle</a>
                      </td>

                      <td>
                        <center><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center>
                      </td>
                      <td>
                        <center><a href="../netting/islem.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center>
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