<?php 
ob_start();
@session_start();

try {



	$db=new PDO("mysql:host=localhost;dbname=meslekiproje;charset=utf8",'root','');

	//echo "veritabanı bağlantısı başarılı";

}



catch (PDOExpception $e) {



	echo $e->getMessage();

}




 ?>