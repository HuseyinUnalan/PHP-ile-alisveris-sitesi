<?php 


ob_start();
session_start();

include 'baglan.php';

if (!empty($_FILES)) {



	$uploads_dir = '../../images/kategoriresimler';
	@$tmp_name = $_FILES['file']["tmp_name"];
	@$name = $_FILES['file']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kategori_id=$_POST['kategori_id'];

	$kaydet=$db->prepare("INSERT INTO kategorifoto SET
		kategorifoto_resimyol=:resimyol,
		kategori_id=:kategori_id");
	$insert=$kaydet->execute(array(
		'resimyol' => $refimgyol,
		'kategori_id' => $kategori_id
		));




}









?>