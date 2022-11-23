<?php 
include 'header.php';

$kategorifotosor=$db->prepare("select * from kategorifoto where kategori_id=:kategori_id order by kategorifoto_id");
$kategorifotosor->execute(array(
  'kategori_id' => @$_GET['kategori_id']
  ));


  ?>
  <!--End topbar header-->

  <

  <head>

    <!--material datepicker css-->
    <link rel="stylesheet" href="../assets/plugins/material-datepicker/css/bootstrap-material-datetimepicker.min.css">

    <!--Bootstrap Datepicker-->
    <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">

  </head>
  <div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
      

      <div class="row">


        <div class="col-lg-12">
         <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
              <li class="nav-item">
                <a href="javascript:void();" data-target="#tab1" data-toggle="pill" class="nav-link active"><i class="icon-note"></i> <span class="hidden-xs"> Fotoğraflar</span></a>
              </li>

            </ul>
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data">

              <br>
              <a class="btn btn-success" href="kategori-foto-yukle.php?kategori_id=<?php echo $_GET['kategori_id'];?>"><i class="fa fa-plus" aria-hidden="true"></i>  Fotoğraf Yükle</a>

              <button type="submit" name="kategorifotosil"  class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i> Seçilenleri Sil</button>
              <?php  array("kategorifotosec"); ?>
              <div class="tab-content p-3">
                <?php 
                $sorgu=$db->prepare("select * from kategorifoto");
                $sorgu->execute();
                $kategorifotosor=$db->prepare("select * from kategorifoto where kategori_id=:kategori_id");
                $kategorifotosor->execute(array(
                  'kategori_id' => @$_GET['kategori_id']
                  ));

                  while($kategorifotocek=$kategorifotosor->fetch(PDO::FETCH_ASSOC)) { ?>

                  

                  <div class="tab-pane active" id="tab1">








                   
                    <img style="width: 300px; height: 200px; float: left; margin-right: 3px" src="../../<?php echo $kategorifotocek['kategorifoto_resimyol']; ?>" alt="image"/>
                    <hr>
                    <input type="checkbox" class="form-control"   name="kategorifotosec[]"  value="<?php echo $kategorifotocek['kategorifoto_id']; ?>">





                    


                    

                    <input type="hidden" name="kategori_id" value="<?php echo $kategoricek['kategori_id']; ?>"> 

                    <!--/row-->
                  </div>


                  <?php } ?>

                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </div>
    <?php include 'footer.php'; ?>
    <!-- End container-fluid-->
  </div><!--End content-wrapper-->

  <!--Start Back To Top Button-->
  <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
  <!--End Back To Top Button-->

  <!--Start footer-->
  <script src="../assets/plugins/material-datepicker/js/moment.min.js"></script>
  <script src="../assets/plugins/material-datepicker/js/bootstrap-material-datetimepicker.min.js"></script>
  <script src="../assets/plugins/material-datepicker/js/ja.js"></script>

  <script>
    CKEDITOR.replace('kategori_aciklama');
  </script>


  <script>

   $(function () {

          // dat time picker
          $('#date-time-picker').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD HH:mm'
          });

         // only date picker
         $('#date-picker').bootstrapMaterialDatePicker({
          time: false
        });

         // only time picker
         $('#time-picker').bootstrapMaterialDatePicker({
          date: false,
          format: 'HH:mm'
        });


       });

     </script>



     <!--Bootstrap Datepicker Js-->
     <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     <script>
      $('#default-datepicker').datepicker({
        todayHighlight: true
      });
      $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
      });

      $('#inline-datepicker').datepicker({
       todayHighlight: true
     });

      $('#dateragne-picker .input-daterange').datepicker({
      });

    </script>



    <!--Multi Select Js-->
    <script src="../assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="../assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>

    <script>
      $(document).ready(function() {
        $('.single-select').select2();

        $('.multiple-select').select2();

    //multiselect start

    $('#my_multi_select1').multiSelect();
    $('#my_multi_select2').multiSelect({
      selectableOptgroup: true
    });

    $('#my_multi_select3').multiSelect({
      selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
      selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
      afterInit: function (ms) {
        var that = this,
        $selectableSearch = that.$selectableUl.prkategori(),
        $selectionSearch = that.$selectionUl.prkategori(),
        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
        .on('keydown', function (e) {
          if (e.which === 40) {
            that.$selectableUl.focus();
            return false;
          }
        });

        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
        .on('keydown', function (e) {
          if (e.which == 40) {
            that.$selectionUl.focus();
            return false;
          }
        });
      },
      afterSelect: function () {
        this.qs1.cache();
        this.qs2.cache();
      },
      afterDeselect: function () {
        this.qs1.cache();
        this.qs2.cache();
      }
    });

    $('.custom-header').multiSelect({
      selectableHeader: "<div class='custom-header'>Selectable items</div>",
      selectionHeader: "<div class='custom-header'>Selection items</div>",
      selectableFooter: "<div class='custom-header'>Selectable footer</div>",
      selectionFooter: "<div class='custom-header'>Selection footer</div>"
    });



  });

</script>
