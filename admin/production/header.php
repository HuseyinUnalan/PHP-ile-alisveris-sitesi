<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../netting/baglan.php';
require_once 'fonksiyon.php';



$ayarsor = $db->prepare("SELECT * FROM ayar where id=:id");
$ayarsor->execute(array(
  'id' => 0
));
$ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);



$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['kullanici_mail']

));

$say = $kullanicisor->rowCount();
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

if ($say == 0) {


  header("Location:login.php?durum=izinsiz");
  exit;
}




?>

<!DOCTYPE html>
<html lang="tr">


<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title> Admin Paneli </title>
  <!--favicon-->
  <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../assets/plugins/summernote/dist/summernote-bs4.css" />

  <!-- jquery steps CSS-->
  <link rel="stylesheet" type="text/css" href="assets/plugins/jquery.steps/css/jquery.steps.css">

  <!-- Dropzone css -->
  <link href="../assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
  <!-- simplebar CSS-->

  <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

  <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="../assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="../assets/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="../assets/css/app-style.css" rel="stylesheet" />


 


</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo mt-2">
        <a href="index">
          <img src="../../<?php echo $ayarcek['ayar_logo'] ?>"  class="logo-icon" alt="logo icon">
          <h5 class="logo-text">Burada</h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header"> </li>
        <li>
          <a href="index" class="waves-effect">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Anasayfa</span> </i>
          </a>

        </li>


    
        </li>

        <li><a href="genel-ayarlar"><i class="zmdi zmdi-star-outline"></i> Genel Ayarlar</a></li>



        <!-- <li><a href="mesajlar"><i class="zmdi zmdi-star-outline"></i> Mesajlar</a></li> -->


        <li><a href="siparis-listesi"><i class="zmdi zmdi-star-outline"></i> Siparişler</a></li>

        <li>
          <a href="javaScript:void();" class="waves-effect">
            <i class="zmdi zmdi-layers"></i>
            <span>Ürün İşlemleri</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">

            <li><a href="urun-ekle"><i class="zmdi zmdi-star-outline"></i> Ürün Ekle</a></li>
            <li><a href="urun-listesi"><i class="zmdi zmdi-star-outline"></i> Ürün Listesi</a></li>

            <li><a href="kategori-ekle"><i class="zmdi zmdi-star-outline"></i> Kategori Ekle</a></li>
            <li><a href="kategori-listesi"><i class="zmdi zmdi-star-outline"></i> Kategori Listesi</a></li>




          </ul>
        </li>


        <li>
          <a href="javaScript:void();" class="waves-effect">
            <i class="zmdi zmdi-layers"></i>
            <span>Hizmet İşlemleri</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">

            <li><a href="hizmet-ekle"><i class="zmdi zmdi-star-outline"></i> Hizmet Ekle</a></li>
            <li><a href="hizmet-listesi"><i class="zmdi zmdi-star-outline"></i> Hizmet Listesi</a></li>

          </ul>
        </li>


        <li>
          <a href="javaScript:void();" class="waves-effect">
            <i class="zmdi zmdi-layers"></i>
            <span>Slider İşlemleri</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">

            <li><a href="slider-ekle"><i class="zmdi zmdi-star-outline"></i> Slider Ekle</a></li>
            <li><a href="slider-listesi"><i class="zmdi zmdi-star-outline"></i> Slider Listesi</a></li>

          </ul>
        </li>

        <li><a href="kullanici-listesi"><i class="zmdi zmdi-star-outline"></i> Kullanıcı Listesi</a></li>

        <li><a href="mesajlar"><i class="zmdi zmdi-star-outline"></i> Mesajlar</a></li>


        <li><a href="sifre-talep"><i class="zmdi zmdi-star-outline"></i> Şifre Talepleri</a></li>


      

        <li><a href="logout"><i class="zmdi zmdi-star-outline"></i> Çıkış Yap</a></li>
      </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
      <nav class="navbar navbar-expand fixed-top bg-white">
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
              <i class="icon-menu menu-icon"></i>
            </a>
          </li>

        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
          <!--
  <li class="nav-item dropdown-lg">
    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-secondary badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          12 Yeni Mesaj
          <span class="badge badge-secondary">12</span>
        </li>
        <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-5.png" alt="user avatar"></div>
             <div class="media-body">
              <h6 class="mt-0 msg-title">Jhon Deo</h6>
              <p class="msg-info">Lorem ipsum dolor sit amet...</p>
              <small>Today, 4:10 PM</small>
            </div>
          </div>
        </a>
      </li>
      <li class="list-group-item">
        <a href="javaScript:void();">
         <div class="media">
           <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-6.png" alt="user avatar"></div>
           <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
          </div>
        </div>
      </a>
    </li>
    <li class="list-group-item">
      <a href="javaScript:void();">
       <div class="media">
         <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-7.png" alt="user avatar"></div>
         <div class="media-body">
          <h6 class="mt-0 msg-title">Dannish Josh</h6>
          <p class="msg-info">Lorem ipsum dolor sit amet...</p>
          <small>5/11/2018, 2:50 PM</small>
        </div>
      </div>
    </a>
  </li>
  <li class="list-group-item">
    <a href="javaScript:void();">
     <div class="media">
       <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-8.png" alt="user avatar"></div>
       <div class="media-body">
        <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
        <p class="msg-info">Lorem ipsum dolor sit amet.</p>
        <small>1/11/2018, 2:50 PM</small>
      </div>
    </div>
  </a>
</li>
<li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
</ul>
</div>
</li>
-->



          <!--
<li class="nav-item dropdown-lg">
  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
    <div class="dropdown-menu dropdown-menu-right">
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
         14 Yeni Bildirim
         <span class="badge badge-info">14</span>
       </li>
       <li class="list-group-item">
        <a href="javaScript:void();">
         <div class="media">
           <i class="zmdi zmdi-accounts fa-2x mr-3 text-primary"></i>
           <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
          </div>
        </div>
      </a>
    </li>
    <li class="list-group-item">
      <a href="javaScript:void();">
       <div class="media">
         <i class="zmdi zmdi-coffee fa-2x mr-3 text-success"></i>
         <div class="media-body">
          <h6 class="mt-0 msg-title">New Received Orders</h6>
          <p class="msg-info">Lorem ipsum dolor sit amet...</p>
        </div>
      </div>
    </a>
  </li>
  <li class="list-group-item">
    <a href="javaScript:void();">
     <div class="media">
       <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-secondary"></i>
       <div class="media-body">
        <h6 class="mt-0 msg-title">New Updates</h6>
        <p class="msg-info">Lorem ipsum dolor sit amet...</p>
      </div>
    </div>
  </a>
</li>
<li class="list-group-item"><a href="javaScript:void();">Tüm Bildirimler</a></li>
</ul>
</div>
</li>
-->
        </ul>
      </nav>
    </header>