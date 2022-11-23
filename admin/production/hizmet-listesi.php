<?php 


include 'header.php'; 

$hizmetsor=$db->prepare("SELECT * FROM hizmetler");
$hizmetsor->execute();


?>
<!--End topbar header-->

<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    


    <div class="row">
      <div class="col-lg-12">
        <div class="card">
        <div class="card-header"><i class="fa fa-table"></i> Liste</div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-bordered">
              <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Başlık</th>
                  <th>Düzenle / Detay Gör</th>
                  <th>Sil</th>
                  <th>Resim Yükle  (1770 x 780)</th>


                </tr>
              </thead>
              <tbody>

              </tbody>


              <tfoot>


               <?php 

               $say=0;

               while($hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC)) { $say++?>


               <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $hizmetcek['hizmet_ad'] ?></td>



                 <td><center><a href="hizmet-duzenle.php?hizmet_id=<?php echo $hizmetcek['hizmet_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                 <td><center><a href="../netting/islem.php?hizmet_id=<?php echo $hizmetcek['hizmet_id']; ?>&hizmetsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                 <td><a href="hizmet-galeri.php?hizmet_id=<?php echo $hizmetcek['hizmet_id'] ?>" class="btn btn-info">Resim Yükle</a></td>
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
</div><!--End content-wrapper-->


<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->


<script>
 $(document).ready(function() {
      //Default data table
      $('#default-datatable').DataTable();


      var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );

      table.buttons().container()
      .appendTo( '#example_wrapper .col-md-6:eq(0)' );

    } );

  </script>

</body>

</html>
