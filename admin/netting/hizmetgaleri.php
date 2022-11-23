<?php 


ob_start();
session_start();

include 'baglan.php';

if (!empty($_FILES)) {



	$uploads_dir = '../../images/hizmetresimler';
	@$tmp_name = $_FILES['file']["tmp_name"];
	@$name = $_FILES['file']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$id=$_POST['hizmet_id'];

	$kaydet=$db->prepare("INSERT INTO hizmetfoto SET
		hizmetfoto_resimyol=:hizmetfoto_resimyol,
		hizmet_id=:hizmet_id");
	$insert=$kaydet->execute(array(
		'hizmetfoto_resimyol' => $refimgyol,
		'hizmet_id' => $id
		));




}









?>