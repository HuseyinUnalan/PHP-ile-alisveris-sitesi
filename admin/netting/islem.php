<?php

require_once 'baglan.php';


if (isset($_POST['admingiris'])) {

	$kullanici_mail = $_POST['kullanici_mail'];
	$kullanici_password = md5($_POST['kullanici_password']);

	$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password,

	));

	echo $say = $kullanicisor->rowCount();

	if ($say == 1) {

		$_SESSION['kullanici_mail'] = $kullanici_mail;

		header("Location:../production/index");
		exit;
	} else {

		header("Location:../production/login?durum=no");
		exit;
	}
}




if (isset($_POST['kullanicikaydet'])) {
	echo $kullanici_adsoyad = htmlspecialchars($_POST['kullanici_adsoyad']);
	echo "<br>";
	echo $kullanici_mail = htmlspecialchars($_POST['kullanici_mail']);
	echo "<br>";
	echo $kullanici_password = htmlspecialchars($_POST['kullanici_password']);
	echo "<br>";
	$kullanicisor = $db->prepare("select * from kullanici where kullanici_mail=:mail");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail
	));

	$say = $kullanicisor->rowCount();

	if ($say == 0) {
		$kullanici_yetki = 1;
		//Kullanıcı kayıt işlemi yapılıyor...
		$kullanicikaydet = $db->prepare("INSERT INTO kullanici SET
					kullanici_adsoyad=:kullanici_adsoyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password,
					kullanici_il=:kullanici_il,
					kullanici_ilce=:kullanici_ilce,
					kullanici_adres=:kullanici_adres,
					kullanici_tel=:kullanici_tel,
					kullanici_yetki=:kullanici_yetki
					");
		$insert = $kullanicikaydet->execute(array(
			'kullanici_adsoyad' => $kullanici_adsoyad,
			'kullanici_mail' => $kullanici_mail,
			'kullanici_password' => $kullanici_password,
			'kullanici_il' => $_POST['kullanici_il'],
			'kullanici_ilce' => $_POST['kullanici_ilce'],
			'kullanici_adres' => $_POST['kullanici_adres'],
			'kullanici_tel' => $_POST['kullanici_tel'],
			'kullanici_yetki' => $kullanici_yetki
		));

		if ($insert) {

			header("Location:../../index?durum=kayitbasarili");
		} else {

			header("Location:../../kaydol.php?durum=basarisiz");
		}
	} else {
		header("Location:../../kaydol.php?durum=kayitlihesap");
	}
}



if (isset($_POST['kullanicigiris'])) {


	echo $kullanici_mail = htmlspecialchars($_POST['kullanici_mail']);
	echo $kullanici_password = $_POST['kullanici_password'];

	$kullanicisor = $db->prepare("select * from kullanici where kullanici_mail=:mail and kullanici_yetki=:yetki and kullanici_password=:password ");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'yetki' => 1,
		'password' => $kullanici_password,

	));

	$say = $kullanicisor->rowCount();

	if ($say == 1) {

		echo $_SESSION['userkullanici_mail'] = $kullanici_mail;

		header("Location:../../index?durum=basarili");
		exit;
	} else {

		header("Location:../../giris-yap?durum=basarisizgiris");
	}
}





if (isset($_POST['genelayarkaydet'])) {

	//Tablo güncelleme işlemi kodları...
	$ayarkaydet = $db->prepare("UPDATE ayar SET
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_mail=:ayar_mail,
		ayar_adres=:ayar_adres,
		ayar_il=:ayar_il,
		ayar_ilce=:ayar_ilce,
		ayar_mesai=:ayar_mesai,
		ayar_hakkimizda=:ayar_hakkimizda,
		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_youtube=:ayar_youtube,
		ayar_instagram=:ayar_instagram,
		ayar_hakkimizda_baslik=:ayar_hakkimizda_baslik,
		ayar_renkbir=:ayar_renkbir,
		ayar_renkiki=:ayar_renkiki
		WHERE id=0");

	$update = $ayarkaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_mesai' => $_POST['ayar_mesai'],
		'ayar_hakkimizda' => $_POST['ayar_hakkimizda'],
		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_youtube' => $_POST['ayar_youtube'],
		'ayar_instagram' => $_POST['ayar_instagram'],
		'ayar_hakkimizda_baslik' => $_POST['ayar_hakkimizda_baslik'],
		'ayar_renkbir' => $_POST['ayar_renkbir'],
		'ayar_renkiki' => $_POST['ayar_renkiki']
	));


	if ($update) {

		header("Location:../production/genel-ayarlar?durum=ok");
	} else {

		header("Location:../production/genel-ayarlar?durum=no");
	}
}




if (isset($_POST['kategorikaydet'])) {




	$kategoriekle = $db->prepare("INSERT INTO kategori SET
		kategori_ad=:kategori_ad
		
		
		");

	$insert = $kategoriekle->execute(array(
		'kategori_ad' => $_POST['kategori_ad']




	));

	if ($insert) {

		Header("Location:../production/kategori-listesi?durum=ok");
	} else {

		Header("Location:../production/kategori-ekle?durum=no");
	}
}




if (isset($_POST['kategoriduzenle'])) {



	$kategori_id = $_POST['kategori_id'];

	$kaydet = $db->prepare("UPDATE kategori SET
		kategori_ad=:kategori_ad
		
		

		WHERE kategori_id={$_POST['kategori_id']}");
	$update = $kaydet->execute(array(
		'kategori_ad' => $_POST['kategori_ad']


	));

	if ($update) {

		Header("Location:../production/kategori-duzenle?durum=ok&kategori_id=$kategori_id");
	} else {

		Header("Location:../production/kategori-duzenle?durum=no&kategori_id=$kategori_id");
	}
}


if (@$_GET['kategorisil'] == "ok") {



	$sil = $db->prepare("DELETE from kategori where kategori_id=:kategori_id");
	$kontrol = $sil->execute(array(
		'kategori_id' => $_GET['kategori_id']
	));


	if ($kontrol) {


		header("location:../production/kategori-listesi?sil=ok");
	} else {

		header("location:../production/kategori-listesi?sil=no");
	}
}


if (isset($_POST['kategorifotosil'])) {

	$kategori_id = $_POST['kategori_id'];


	$checklist = $_POST['kategorifotosec'];


	foreach ($checklist as $list) {

		$sil = $db->prepare("DELETE from kategorifoto where kategorifoto_id=:kategorifoto_id");
		$kontrol = $sil->execute(array(
			'kategorifoto_id' => $list
		));
	}

	if ($kontrol) {

		Header("Location:../production/kategori-listesi?&durum=ok");
	} else {

		Header("Location:../production/kategori-listesi?&durum=no");
	}
}




if (isset($_POST['urunkaydet'])) {




	$urunekle = $db->prepare("INSERT INTO urun SET
		urun_ad=:urun_ad,
		urun_fiyat=:urun_fiyat,
		urun_aciklama=:urun_aciklama,
		kategori_id=:kategori_id,
		urun_onecikar=:urun_onecikar,
		urun_ilan=:urun_ilan,
		urun_birim=:urun_birim
		
		
		
		
		");

	$insert = $urunekle->execute(array(
		'urun_ad' => $_POST['urun_ad'],
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_aciklama' => $_POST['urun_aciklama'],
		'kategori_id' => $_POST['kategori_id'],
		'urun_onecikar' => $_POST['urun_onecikar'],
		'urun_ilan' => $_POST['urun_ilan'],
		'urun_birim' => $_POST['urun_birim']





	));

	if ($insert) {

		Header("Location:../production/urun-listesi?durum=ok");
	} else {

		Header("Location:../production/urun-ekle?durum=no");
	}
}



if (isset($_POST['urunduzenle'])) {



	$urun_id = $_POST['urun_id'];

	$kaydet = $db->prepare("UPDATE urun SET
  urun_ad=:urun_ad,
	urun_fiyat=:urun_fiyat,
  urun_aciklama=:urun_aciklama,
  kategori_id=:kategori_id,
  urun_onecikar=:urun_onecikar,
  urun_ilan=:urun_ilan,
	urun_birim=:urun_birim
  
  

  WHERE urun_id={$_POST['urun_id']}");
	$update = $kaydet->execute(array(
		'urun_ad' => $_POST['urun_ad'],
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_aciklama' => $_POST['urun_aciklama'],
		'kategori_id' => $_POST['kategori_id'],
		'urun_onecikar' => $_POST['urun_onecikar'],
		'urun_ilan' => $_POST['urun_ilan'],
		'urun_birim' => $_POST['urun_birim']



	));

	if ($update) {

		Header("Location:../production/urun-duzenle?durum=ok&urun_id=$urun_id");
	} else {

		Header("Location:../production/urun-duzenle?durum=no&urun_id=$urun_id");
	}
}




if (@$_GET['urunsil'] == "ok") {



	$sil = $db->prepare("DELETE from urun where urun_id=:urun_id");
	$kontrol = $sil->execute(array(
		'urun_id' => $_GET['urun_id']
	));


	if ($kontrol) {


		header("location:../production/urun-listesi?sil=ok");
	} else {

		header("location:../production/urun-listesi?sil=no");
	}
}



if (isset($_POST['urunfotosil'])) {

	$urun_id = $_POST['urun_id'];


	$checklist = $_POST['urunfotosec'];


	foreach ($checklist as $list) {

		$sil = $db->prepare("DELETE from urunfoto where urunfoto_id=:urunfoto_id");
		$kontrol = $sil->execute(array(
			'urunfoto_id' => $list
		));
	}

	if ($kontrol) {

		Header("Location:../production/urun-listesi?&durum=ok");
	} else {

		Header("Location:../production/urun-listesi?&durum=no");
	}
}






if (isset($_POST['hizmetkaydet'])) {



	$kaydet = $db->prepare("INSERT INTO hizmetler SET
		hizmet_ad=:hizmet_ad,
		hizmet_icerik=:hizmet_icerik

		");
	$insert = $kaydet->execute(array(
		'hizmet_ad' => $_POST['hizmet_ad'],
		'hizmet_icerik' => $_POST['hizmet_icerik']
	));

	if ($insert) {

		Header("Location:../production/hizmet-ekle?durum=ok");
	} else {

		Header("Location:../production/hizmet-ekle?durum=no");
	}
}


if (isset($_POST['hizmetduzenle'])) {


	$duzenle = $db->prepare("UPDATE hizmetler SET
			hizmet_ad=:hizmet_ad,
			hizmet_icerik=:hizmet_icerik
		
	
			WHERE hizmet_id={$_POST['hizmet_id']}");
	$update = $duzenle->execute(array(
		'hizmet_ad' => $_POST['hizmet_ad'],
		'hizmet_icerik' => $_POST['hizmet_icerik']


	));

	$hizmet_id = $_POST['hizmet_id'];

	if ($update) {

		Header("Location:../production/hizmet-duzenle?hizmet_id=$hizmet_id&durum=ok");
	} else {

		Header("Location:../production/hizmet-duzenle?durum=no");
	}
}

if ($_GET['hizmetsil'] == "ok") {


	$sil = $db->prepare("DELETE from hizmetler where hizmet_id=:hizmet_id");
	$kontrol = $sil->execute(array(
		'hizmet_id' => $_GET['hizmet_id']
	));

	if ($kontrol) {



		Header("Location:../production/hizmet-listesi?durum=ok");
	} else {

		Header("Location:../production/hizmet-listesi?durum=no");
	}
}



if ($_GET['sepetsil'] == "ok") {


	$sil = $db->prepare("DELETE from sepet where sepet_id=:sepet_id");
	$kontrol = $sil->execute(array(
		'sepet_id' => $_GET['sepet_id']
	));

	if ($kontrol) {



		Header("Location:../../sepet?durum=ok");
	} else {

		Header("Location:../../sepet?durum=no");
	}
}





if (isset($_POST['hizmetfotosil'])) {

	$id = $_POST['hizmet_id'];


	$checklist = $_POST['hizmetfotosec'];


	foreach ($checklist as $list) {

		$sil = $db->prepare("DELETE from hizmetfoto where hizmetfoto_id=:hizmetfoto_id");
		$kontrol = $sil->execute(array(
			'hizmetfoto_id' => $list
		));
	}

	if ($kontrol) {

		Header("Location:../production/hizmet-listesi?&durum=ok");
	} else {

		Header("Location:../production/hizmet-listesi?&durum=no");
	}
}













if (isset($_POST['mesajkaydet'])) {

	$mesajekle = $db->prepare("INSERT INTO mesaj SET
		mesaj_detay=:mesaj_detay,
		mesaj_mail=:mesaj_mail,
		mesaj_ad=:mesaj_ad
		");

	$insert = $mesajekle->execute(array(
		'mesaj_detay' => $_POST['mesaj_detay'],
		'mesaj_mail' => $_POST['mesaj_mail'],
		'mesaj_ad' => $_POST['mesaj_ad']
	));

	if ($insert) {

		Header("Location:../../iletisim?durum=ok");
	} else {

		Header("Location:../../iletisim?durum=no");
	}
}


if (@$_GET['mesajsil'] == "ok") {



	$sil = $db->prepare("DELETE from mesaj where mesaj_id=:mesaj_id");
	$kontrol = $sil->execute(array(
		'mesaj_id' => $_GET['mesaj_id']
	));


	if ($kontrol) {


		header("location:../production/mesajlar?sil=ok");
	} else {

		header("location:../production/mesajlar?sil=no");
	}
}



if (isset($_POST['sliderkaydet'])) {




	$sliderekle = $db->prepare("INSERT INTO slider SET
		slider_baslik=:slider_baslik,
		slider_icerik=:slider_icerik
		
		
		");

	$insert = $sliderekle->execute(array(
		'slider_baslik' => $_POST['slider_baslik'],
		'slider_icerik' => $_POST['slider_icerik']




	));

	if ($insert) {

		Header("Location:../production/slider-listesi?durum=ok");
	} else {

		Header("Location:../production/slider-ekle?durum=no");
	}
}




if (isset($_POST['sliderduzenle'])) {



	$slider_id = $_POST['slider_id'];

	$kaydet = $db->prepare("UPDATE slider SET
		slider_baslik=:slider_baslik,
		slider_icerik=:slider_icerik
		
		

		WHERE slider_id={$_POST['slider_id']}");
	$update = $kaydet->execute(array(
		'slider_baslik' => $_POST['slider_baslik'],
		'slider_icerik' => $_POST['slider_icerik']


	));

	if ($update) {

		Header("Location:../production/slider-duzenle?durum=ok&slider_id=$slider_id");
	} else {

		Header("Location:../production/slider-duzenle?durum=no&slider_id=$slider_id");
	}
}


if (@$_GET['slidersil'] == "ok") {



	$sil = $db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol = $sil->execute(array(
		'slider_id' => $_GET['slider_id']
	));


	if ($kontrol) {


		header("location:../production/slider-listesi?sil=ok");
	} else {

		header("location:../production/slider-listesi?sil=no");
	}
}


if (isset($_POST['sliderfotosil'])) {

	$slider_id = $_POST['slider_id'];


	$checklist = $_POST['sliderfotosec'];


	foreach ($checklist as $list) {

		$sil = $db->prepare("DELETE from sliderfoto where sliderfoto_id=:sliderfoto_id");
		$kontrol = $sil->execute(array(
			'sliderfoto_id' => $list
		));
	}

	if ($kontrol) {

		Header("Location:../production/slider-listesi?&durum=ok");
	} else {

		Header("Location:../production/slider-listesi?&durum=no");
	}
}


if (@$_GET['sifremiunuttumsil'] == "ok") {


	$sil = $db->prepare("DELETE from sifremiunuttum where sifremiunuttum_id=:sifremiunuttum_id");
	$kontrol = $sil->execute(array(
		'sifremiunuttum_id' => $_GET['sifremiunuttum_id']
	));

	if ($kontrol) {



		Header("Location:../production/sifre-talep?durum=ok");
	} else {

		Header("Location:../production/sifre-talep?durum=no");
	}
}



if (isset($_POST['sifremiunuttum'])) {




	$sifreekle = $db->prepare("INSERT INTO sifremiunuttum SET
		sifremiunuttum_mail=:sifremiunuttum_mail


		");

	$insert = $sifreekle->execute(array(
		'sifremiunuttum_mail' => $_POST['sifremiunuttum_mail']


	));

	if ($insert) {

		Header("Location:../../index?durum=sifretalepbasarili");
	} else {

		Header("Location:../../index?durum=no");
	}
}



if (isset($_POST['sepetekle'])) {


	$ayarekle = $db->prepare("INSERT INTO sepet SET
		urun_adet=:urun_adet,
		kullanici_id=:kullanici_id,
		urun_id=:urun_id	
		
		");

	$insert = $ayarekle->execute(array(
		'urun_adet' => $_POST['urun_adet'],
		'kullanici_id' => $_POST['kullanici_id'],
		'urun_id' => $_POST['urun_id']

	));


	if ($insert) {

		Header("Location:../../sepet?durum=ok");
	} else {

		Header("Location:../../sepet?durum=no");
	}
}




if (isset($_POST['siparisekle'])) {

	$kaydet = $db->prepare("INSERT INTO siparis SET
		kullanici_id=:kullanici_id,
		siparis_toplam=:siparis_toplam
		");
	$insert = $kaydet->execute(array(
		'kullanici_id' => $_POST['kullanici_id'],
		'siparis_toplam' => $_POST['siparis_toplam']
	));

	if ($insert) {
		//Sipariş başarılı kaydedilirse...
		echo $siparis_id = $db->lastInsertId();

		echo "<hr>";
		$kullanici_id = $_POST['kullanici_id'];
		$sepetsor = $db->prepare("SELECT * FROM sepet where kullanici_id=:id");
		$sepetsor->execute(array(
			'id' => $kullanici_id
		));

		while ($sepetcek = $sepetsor->fetch(PDO::FETCH_ASSOC)) {

			$urun_id = $sepetcek['urun_id'];
			$urun_adet = $sepetcek['urun_adet'];

			$urunsor = $db->prepare("SELECT * FROM urun where urun_id=:id");
			$urunsor->execute(array(
				'id' => $urun_id
			));

			$uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);

			echo $urun_fiyat = $uruncek['urun_fiyat'];

			$kaydet = $db->prepare("INSERT INTO siparis_detay SET
				
				siparis_id=:siparis_id,
				urun_id=:urun_id,	
				urun_fiyat=:urun_fiyat,
				urun_adet=:urun_adet
				");
			$insert = $kaydet->execute(array(
				'siparis_id' => $siparis_id,
				'urun_id' => $urun_id,
				'urun_fiyat' => $urun_fiyat,
				'urun_adet' => $urun_adet

			));
		}

		if ($insert) {
			//Sipariş detay kayıtta başarıysa sepeti boşalt

			$sil = $db->prepare("DELETE from sepet where kullanici_id=:kullanici_id");
			$kontrol = $sil->execute(array(
				'kullanici_id' => $kullanici_id
			));

			Header("Location:../../index?durum=ok");
			exit;
		}
	} else {

		echo "başarısız";

		//Header("Location:../production/siparis.php?durum=no");
	}
}



if (isset($_POST['logoduzenle'])) {



	$uploads_dir = '../../images/logoresimler';

	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];

	$benzersizsayi4 = rand(20000, 32000);
	$refimgyol = substr($uploads_dir, 6) . "/" . $benzersizsayi4 . $name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


	$duzenle = $db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");
	$update = $duzenle->execute(array(
		'logo' => $refimgyol
	));



	if ($update) {

		$resimsilunlink = $_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/genel-ayar.php?durum=ok");
	} else {

		Header("Location:../production/genel-ayar.php?durum=no");
	}
}


if ($_GET['siparissil'] == "ok") {


	$sil = $db->prepare("DELETE from siparis where siparis_id=:siparis_id");
	$kontrol = $sil->execute(array(
		'siparis_id' => $_GET['siparis_id']
	));

	if ($kontrol) {



		Header("Location:../production/siparis-listesi?durum=ok");
	} else {

		Header("Location:../production/siparis-listesi?durum=no");
	}
}



if (isset($_POST['kullanicibilgiguncelle'])) {

	$kullanici_id = $_POST['kullanici_id'];

	$ayarkaydet = $db->prepare("UPDATE kullanici SET
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_il=:kullanici_il,
		kullanici_ilce=:kullanici_ilce,
		kullanici_adres=:kullanici_adres,
		kullanici_tel=:kullanici_tel
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update = $ayarkaydet->execute(array(
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_il' => $_POST['kullanici_il'],
		'kullanici_ilce' => $_POST['kullanici_ilce'],
		'kullanici_adres' => $_POST['kullanici_adres'],
		'kullanici_tel' => $_POST['kullanici_tel']

	));


	if ($update) {

		Header("Location:../../profil?durum=ok");
	} else {

		Header("Location:../../profil?durum=no");
	}
}





if (isset($_POST['kullanicisifreguncelle'])) {

	echo $kullanici_eskipassword = trim($_POST['kullanici_eskipassword']);
	echo "<br>";
	echo $kullanici_passwordone = trim($_POST['kullanici_passwordone']);
	echo "<br>";
	echo $kullanici_passwordtwo = trim($_POST['kullanici_passwordtwo']);
	echo "<br>";

	$kullanici_password = $kullanici_eskipassword;


	$kullanicisor = $db->prepare("select * from kullanici where kullanici_password=:password");
	$kullanicisor->execute(array(
		'password' => $kullanici_password
	));

	$say = $kullanicisor->rowCount();

	if ($say == 0) {

		header("Location:../../sifre-guncelle?durum=eskisifrehata");
	} else {


		if ($kullanici_passwordone == $kullanici_passwordtwo) {

			if (strlen($kullanici_passwordone) >= 6) {

				$password = $kullanici_passwordone;

				$kullanici_yetki = 1;

				$kullanicikaydet = $db->prepare("UPDATE kullanici SET
					kullanici_password=:kullanici_password
					WHERE kullanici_id={$_POST['kullanici_id']}");


				$insert = $kullanicikaydet->execute(array(
					'kullanici_password' => $password
				));

				if ($insert) {

					header("Location:../../sifre-guncelle.php?durum=sifredegisti");
				} else {


					header("Location:../../sifre-guncelle.php?durum=no");
				}
			} else {
				header("Location:../../sifre-guncelle.php?durum=eksiksifre");
			}
		} else {
			header("Location:../../sifre-guncelle?durum=sifreleruyusmuyor");

			exit;
		}
	}
	exit;

	if ($update) {

		header("Location:../../sifre-guncelle?durum=ok");
	} else {

		header("Location:../../sifre-guncelle?durum=no");
	}
}


if (@$_GET['kullanicisil'] == "ok") {



	$sil = $db->prepare("DELETE from kullanici where kullanici_id=:kullanici_id");
	$kontrol = $sil->execute(array(
		'kullanici_id' => $_GET['kullanici_id']
	));


	if ($kontrol) {


		header("location:../production/kullanici-listesi?sil=ok");
	} else {

		header("location:../production/kullanici-listesi?sil=no");
	}
}
