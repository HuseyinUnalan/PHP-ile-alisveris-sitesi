<?php


require_once 'header.php';

$mesajsor = $db->prepare("SELECT * FROM mesaj ORDER BY mesaj_id DESC");
$mesajsor->execute();



?>
<!--End topbar header-->


<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h3>Gelen Mesajlar</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javaScript:void();">Anasayfa</a></li>


        </ol>
      </div>

    </div>


    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header"><i class="fa fa-table"></i>Mesaj Listesi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sıra No</th>
                    <th>Ad Soyad</th>
                    <th>Telefon Numarası</th>
                    <th>Mesaj Atılan Tarih</th>
                    <th>Detay</th>
                    <th>Sil</th>


                  </tr>
                </thead>
                <tbody>

                </tbody>


                <tfoot>


                  <?php

                  $say = 0;

                  while ($mesajcek = $mesajsor->fetch(PDO::FETCH_ASSOC)) {
                    $say++ ?>


                    <tr>
                      <td width="20"><?php echo $say ?></td>
                      <td><?php echo $mesajcek['mesaj_ad'] ?></td>
                      <td><?php echo $mesajcek['mesaj_mail'] ?></td>
                      <td><?php echo $mesajcek['mesaj_zaman'] ?></td>


                      <td>
                        <center><a href="mesaj-detay.php?mesaj_id=<?php echo $mesajcek['mesaj_id']; ?>"><button class="btn btn-primary btn-xs">Detay</button></a></center>
                      </td>
                      <td>
                        <center><a href="../netting/islem.php?mesaj_id=<?php echo $mesajcek['mesaj_id']; ?>&mesajsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center>
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