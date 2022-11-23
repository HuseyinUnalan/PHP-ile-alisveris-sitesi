<?php


require_once 'header.php';

$sifremiunuttumsor = $db->prepare("SELECT * FROM sifremiunuttum ORDER BY sifremiunuttum_id  DESC");
$sifremiunuttumsor->execute();



?>
<!--End topbar header-->


<div class="content-wrapper">
  <div class="container-fluid">
 

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header"><i class="fa fa-table"></i>Şifre Talep Listesi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sıra No</th>
                    <th>Mail</th>
                    <th>Talep Zamanı</th>
                    <th>Sil</th>


                  </tr>
                </thead>
                <tbody>

                </tbody>


                <tfoot>


                  <?php

                  $say = 0;

                  while ($sifremiunuttumcek = $sifremiunuttumsor->fetch(PDO::FETCH_ASSOC)) {
                    $say++ ?>


                    <tr>
                      <td width="20"><?php echo $say ?></td>
                      <td><?php echo $sifremiunuttumcek['sifremiunuttum_mail'] ?></td>
                      <td><?php echo $sifremiunuttumcek['sifremiunuttum_zaman'] ?></td>


                      <td>
                        <center><a href="../netting/islem.php?sifremiunuttum_id=<?php echo $sifremiunuttumcek['sifremiunuttum_id']; ?>&sifremiunuttumsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center>
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