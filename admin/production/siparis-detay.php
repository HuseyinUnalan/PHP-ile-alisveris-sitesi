<?php

include 'header.php';


// $siparissor = $db->prepare("SELECT * FROM siparis where siparis_id=:siparis_id");
// $siparissor->execute(array(
//   'siparis_id' => $_GET['siparis_id']
// ));

// $sipariscek = $siparissor->fetch(PDO::FETCH_ASSOC);


// $siparisdetaysor = $db->prepare("SELECT * FROM siparis_detay where siparisdetay_id=:siparisdetay_id");
// $siparisdetaysor->execute(array(
//   'siparisdetay_id' => $_GET['siparisdetay_id']
// ));

// $siparisdetaycek = $siparisdetaysor->fetch(PDO::FETCH_ASSOC);




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

      </div>

    </div>
    <!-- End Breadcrumb-->

    <div class="row">


      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
              <li class="nav-item">
                <a href="javascript:void();" data-target="#tab1" data-toggle="pill" class="nav-link active"><i class="icon-note"></i> <span class="hidden-xs">Detay</span></a>
              </li>

            </ul>
            <div class="tab-content p-3">
              <div class="tab-pane active" id="tab1">





                <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" data-parsley-validate>


                  <h5>Üye Bilgileri</h5>
                  <hr>

                  <?php


                  $siparissor = $db->prepare("SELECT urun.*,kullanici.*,siparis.*,siparis_detay.*  FROM siparis 
                        INNER JOIN siparis_detay ON siparis.siparis_id=siparis_detay.siparis_id 
                        INNER JOIN urun ON urun.urun_id=siparis_detay.urun_id 
                        INNER JOIN kullanici 
                        where siparis.siparis_id=:siparis_detay_id ");

                  $siparissor->execute(array(
                    'siparis_detay_id' => $_GET['siparis_id']
                  ));


                  $sipariscek = $siparissor->fetch(PDO::FETCH_ASSOC);


                  $urun_id = $sipariscek['urun_id'];
                  ?>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Sipariş ID</label>
                    <div class="col-lg-9">
                      <input class="form-control" disabled value="<?php echo $sipariscek['siparis_id'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Sipariş Zaman</label>
                    <div class="col-lg-9">
                      <input class="form-control" disabled value="<?php echo $sipariscek['siparis_zaman'] ?>" type="text">
                    </div>
                  </div>


                  <?php
                  $kullanici_id = $sipariscek['kullanici_id'];
                  $kullanicisor = $db->prepare("select * from kullanici where kullanici_id=:kullanici_id");
                  $kullanicisor->execute(array(
                    'kullanici_id' =>  $kullanici_id
                  ));
                  $kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);
                  $kullanici_id = $kullanicicek['kullanici_id'];
                  ?>

                  <?php
                  $kullanici_il = $kullanicicek['kullanici_il'];
                  $ilsor = $db->prepare("select * from iller where il_no=:il_no");
                  $ilsor->execute(array(
                    'il_no' =>  $kullanici_il
                  ));
                  $ilcek = $ilsor->fetch(PDO::FETCH_ASSOC);
                  $il_no = $ilcek['il_no'];
                  ?>


                  <?php
                  $kullanici_ilce = $kullanicicek['kullanici_ilce'];
                  $ilcesor = $db->prepare("select * from ilceler where ilce_no=:ilce_no");
                  $ilcesor->execute(array(
                    'ilce_no' =>  $kullanici_ilce
                  ));
                  $ilcecek = $ilcesor->fetch(PDO::FETCH_ASSOC);
                  $ilce_no = $ilcecek['ilce_no'];
                  ?>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kullanıcı Adı</label>
                    <div class="col-lg-9">
                      <input class="form-control" disabled value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" type="text">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Adres</label>
                    <div class="col-lg-9">
                      <input class="form-control" name="kullanici_zaman" disabled value="<?php echo $ilcek['isim'] ?> / <?php echo $ilcecek['isim'] ?> / <?php echo $kullanicicek['kullanici_adres'] ?>" type="text">
                    </div>
                  </div>

                  <a class="btn btn-warning" target="_blank" href="kullanici-detay.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>">Üye Gör</a>


                  <hr>

                  <h5>Sipariş Bilgileri</h5>
                  <hr>

                  <?php
                  $siparisdetaysor = $db->prepare("select * from siparis_detay where siparis_id=:siparis_id");
                  $siparisdetaysor->execute(array(
                    'siparis_id' =>  $_GET['siparis_id']
                  ));
                  while ($siparisdetaycek = $siparisdetaysor->fetch(PDO::FETCH_ASSOC)) {

                  ?>

                    <?php
                    $urun_id = $siparisdetaycek['urun_id'];
                    $urunsor = $db->prepare("select * from urun where urun_id=:urun_id");
                    $urunsor->execute(array(
                      'urun_id' =>  $urun_id
                    ));
                    $uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);
                    $urun_id = $uruncek['urun_id'];

                    @$toplam_fiyat += $siparisdetaycek['urun_fiyat'] * $siparisdetaycek['urun_adet'];

                    ?>


                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label form-control-label">Ürün Adı / Birim / Fiyat</label>
                      <div class="col-lg-9">
                        <input class="form-control" disabled value="<?php echo $uruncek['urun_ad'] ?> / <?php echo $siparisdetaycek['urun_adet'] ?> <?php echo $uruncek['urun_birim'] ?> / <?php echo $siparisdetaycek['urun_fiyat'] ?>  TL " type="text">
                      </div>
                    </div>




                  <?php } ?>


                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Toplam Fiyat</label>
                    <div class="col-lg-9">
                      <input class="form-control" disabled value="<?php echo @$toplam_fiyat ?> TL" type="text">
                    </div>
                  </div>



                  <input type="hidden" name="siparis_id" value="<?php echo $sipariscek['siparis_id']; ?>">

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
  CKEDITOR.replace('siparis_aciklama');
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
          $selectableSearch = that.$selectableUl.prsiparis(),
          $selectionSearch = that.$selectionUl.prsiparis(),
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