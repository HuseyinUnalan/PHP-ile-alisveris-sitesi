<?php 
ob_start();
@session_start();
require_once '../netting/baglan.php';

require_once 'baglan.php';




if (isset($_POST['logoduzenle'])) {
	
	if ($_FILES['ayar_logo']['size']>1048576) {
		
		echo "Bu dosya boyutu çok büyük";

		Header("Location:../production/genel-ayarlar.php?durum=dosyabuyuk");

	}

	$uploads_dir = '../../images/logoresimler';

	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE id=0");
	$update=$duzenle->execute(array(
		'logo' => $refimgyol
	));

	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/genel-ayarlar.php?durum=ok");

	} else {

		Header("Location:../production/genel-ayarlar.php?durum=no");
	}

}



if (isset($_POST['faviconduzenle'])) {

	
	if ($_FILES['ayar_favicon']['size']>1048576) {
		
		echo "Bu dosya boyutu çok büyük";

		Header("Location:../production/genel-ayarlar.php?durum=dosyabuyuk");

	}

	$uploads_dir = '../../images/logoresimler';

	@$tmp_name = $_FILES['ayar_favicon']["tmp_name"];
	@$name = $_FILES['ayar_favicon']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_favicon=:logo
		WHERE id=0");
	$update=$duzenle->execute(array(
		'logo' => $refimgyol
	));

	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/genel-ayarlar.php?durum=ok");

	} else {

		Header("Location:../production/genel-ayarlar.php?durum=no");
	}

}




?>