<?php

include 'header.php';


$kategorisor = $db->prepare("SELECT * FROM kategori where kategori_id=:kategori_id");
$kategorisor->execute(array(
  'kategori_id' => $_GET['kategori_id']
));

$kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC);



?>
<!--End topbar header-->


<head>

  <!--material datepicker css-->
  <link rel="stylesheet" href="../assets/plugins/material-datepicker/css/bootstrap-material-datetimepicker.min.css">

  <!--Bootstrap Datepicker-->
  <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">

</head>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2 mb-2">
      <div class="col-sm-9">

      <h3>Kategori Ekle</h3>
      </div>

    </div>
    <!-- End Breadcrumb-->

    <div class="row">


      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
              <li class="nav-item">
                <a href="javascript:void();" data-target="#tab1" data-toggle="pill" class="nav-link active"><i class="icon-note"></i> <span class="hidden-xs">Düzenle</span></a>
              </li>

            </ul>
            <div class="tab-content p-3">
              <div class="tab-pane active" id="tab1">





                <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" data-parsley-validate>



                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kategori Ad</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="kategori_ad" value="<?php echo $kategoricek['kategori_ad'] ?>" type="text">
                    </div>
                  </div>


                  <input type="hidden" name="kategori_id" value="<?php echo $kategoricek['kategori_id']; ?>">
                  <button class="btn btn-primary" name="kategoriduzenle" style="float: right;">Düzenle</button>

                </form>
                <!--/row-->
              </div>






            </div>
          </div>
        </div>
      </div>

    </div>
    <?php include 'footer.php'; ?>
  </div>
  <!-- End container-fluid-->
</div>
<!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!--Start footer-->
<script src="../assets/plugins/material-datepicker/js/moment.min.js"></script>
<script src="../assets/plugins/material-datepicker/js/bootstrap-material-datetimepicker.min.js"></script>
<script src="../assets/plugins/material-datepicker/js/ja.js"></script>



<script>
  $(function() {

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

  $('#dateragne-picker .input-daterange').datepicker({});
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
      afterInit: function(ms) {
        var that = this,
          $selectableSearch = that.$selectableUl.prev(),
          $selectionSearch = that.$selectionUl.prev(),
          selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
          selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
          .on('keydown', function(e) {
            if (e.which === 40) {
              that.$selectableUl.focus();
              return false;
            }
          });

        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
          .on('keydown', function(e) {
            if (e.which == 40) {
              that.$selectionUl.focus();
              return false;
            }
          });
      },
      afterSelect: function() {
        this.qs1.cache();
        this.qs2.cache();
      },
      afterDeselect: function() {
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