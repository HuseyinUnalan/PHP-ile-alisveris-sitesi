<?php

include 'header.php';


$evsor = $db->prepare("SELECT * FROM ayar where id=:id");
$evsor->execute(array(
  'id' => @$_GET['id']
));

$evcek = $evsor->fetch(PDO::FETCH_ASSOC);



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
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">User Profile</h4>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javaScript:void();">Anasayfa</a></li>
          <li class="breadcrumb-item"><a href="javaScript:void();">Genel Ayarlar</a></li>

        </ol>
      </div>

    </div>
    <!-- End Breadcrumb-->

    <div class="row">


      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
              <li class="nav-item">
                <a href="javascript:void();" data-target="#tab1" data-toggle="pill" class="nav-link active"><i class="icon-note"></i> <span class="hidden-xs">Genel Bilgiler</span></a>
              </li>

            </ul>
            <div class="tab-content p-3">
              <div class="tab-pane active" id="tab1">


                <form action="../netting/adminislem.php" enctype="multipart/form-data" method="POST" data-parsley-validate>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Yüklü Olan</label>
                    <div class="col-lg-9">

                      <?php
                      if (strlen($ayarcek['ayar_logo']) > 0) { ?>

                        <img width="200" src="../../<?php echo $ayarcek['ayar_logo']; ?>">

                      <?php } else { ?>


                        <?php echo "Yok"; ?>


                      <?php } ?>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Resim Seç (180 x 100 Logo)</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_logo" value="<?php echo $ayarcek['ayar_logo'] ?>" type="file">
                    </div>
                  </div>


                  <input class="form-control" name="eski_yol" value="<?php echo $ayarcek['ayar_logo'] ?>" type="hidden">
                  <button class="btn btn-primary" name="logoduzenle" style="float: right;">Logo Güncelle</button>
                </form>
                <br><br><br><br>



                <form action="../netting/adminislem.php" enctype="multipart/form-data" method="POST" data-parsley-validate>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Yüklü Olan</label>
                    <div class="col-lg-9">

                      <?php
                      if (strlen($ayarcek['ayar_favicon']) > 0) { ?>

                        <img width="200" src="../../<?php echo $ayarcek['ayar_favicon']; ?>">

                      <?php } else { ?>


                        <?php echo "Yok"; ?>


                      <?php } ?>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Resim Seç (16 x 16 Favicon)</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_favicon" value="<?php echo $ayarcek['ayar_favicon'] ?>" type="file">
                    </div>
                  </div>


                  <input class="form-control" name="eski_yol" value="<?php echo $ayarcek['ayar_favicon'] ?>" type="hidden">
                  <button class="btn btn-primary" name="faviconduzenle" style="float: right;">Favicon Güncelle</button>
                </form>
                <br><br><br><br>




                <hr>


                <form action="../netting/islem.php" method="POST" data-parsley-validate>


                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Başlık</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_title" value="<?php echo $ayarcek['ayar_title'] ?>" type="text">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Tanım</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_description" value="<?php echo $ayarcek['ayar_description'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Anahtar Kelimeler</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords'] ?>" type="text">
                    </div>
                  </div>




                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Telefon Numarası</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">GSM Numarası</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_gsm" value="<?php echo $ayarcek['ayar_gsm'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Facebook</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Twitter</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Youtube</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_youtube" value="<?php echo $ayarcek['ayar_youtube'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Instagram</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Mail Adresi</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">İl</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_il" value="<?php echo $ayarcek['ayar_il'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">İlçe</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_ilce" value="<?php echo $ayarcek['ayar_ilce'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Adres</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Mesai Saatleri</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_mesai" value="<?php echo $ayarcek['ayar_mesai'] ?>" type="text">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Alt Kısım Açıklama</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_hakkimizda_baslik" value="<?php echo $ayarcek['ayar_hakkimizda_baslik'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Hakkımızda</label>
                    <div class="col-lg-9">
                      <textarea class="form-control" name="ayar_hakkimizda" value="" type="text"><?php echo $ayarcek['ayar_hakkimizda'] ?></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Alt Kısım Açıklama</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_renkbir" value="<?php echo $ayarcek['ayar_renkbir'] ?>" type="color">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Alt Kısım Açıklama</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="ayar_renkiki" value="<?php echo $ayarcek['ayar_renkiki'] ?>" type="color">
                    </div>
                  </div>




                  <input type="hidden" name="id" value="<?php echo $evcek['id']; ?>">
                  <button class="btn btn-primary" name="genelayarkaydet" style="float: right;">Düzenle</button>

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
  CKEDITOR.replace('ayar_hakkimizda');
</script>



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