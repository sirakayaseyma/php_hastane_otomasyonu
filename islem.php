<?php

ob_start();
session_start();
include 'baglan.php';
print_r($_POST);

if(isset($_POST['kullanicikayit'])){
	$kullanici_adsoyad =isset($_POST['kadi']) ? $_POST['kadi'] :null;
    $kullanici_mail =isset($_POST['mail']) ? $_POST['mail'] :null;
	$kullanici_tc =	isset($_POST['tc']) ? $_POST['tc'] : null;
	$kullanici_password =	isset($_POST['pw']) ? $_POST['pw'] :null ;

		//veri tabanı ekleme
	$sorgu = $db->prepare('INSERT INTO kullanici SET 
		kullanici_adsoyad = ?,
        kullanici_mail = ?,
		kullanici_tc = ?,
		kullanici_password = ?
		');
	$ekle = $sorgu->execute([
		$kullanici_adsoyad, $kullanici_mail,$kullanici_tc,$kullanici_password
	]);

	if($ekle){
		header('location:giris.php?durum=basarili');
	}else{
		$hata = $sorgu->errorInfo();
		echo 'msql hatası'.$hata[2] ;
	}
}

if(isset($_POST['giris_yap'])){
	$kullanici_tc =$_POST['tc'];
	$kullanici_password=$_POST['password'];

	$kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc and kullanici_password=:kullanici_password");
	$kullanicisor->execute([
		'kullanici_tc'=> $kullanici_tc,
		'kullanici_password'=>$kullanici_password
	]);

	$say = $kullanicisor->rowCount();
	if($say==1){
		$_SESSION['userkullanici_tc']=$kullanici_tc;
		header('location:anasayfa.php?durum=girisbasarili'); //şurda bir sorun olabilir
		exit;
	}else{
		header('location:anasayfa.php?durum=girisbasarisiz');
		exit;
	}
}


if(isset($_POST['randevu_kaydet'])){

	$randevu_tarih =isset($_POST['tarih']) ? $_POST['tarih'] : null;
	$randevu_doktor =isset($_POST['doktor']) ? $_POST['doktor'] : null;
	$randevu_klinik =isset($_POST['klinik']) ? $_POST['klinik'] : null;
	$randevu_hasta_id=isset($_POST['kullanici_id']) ? $_POST['kullanici_id'] : null;

	$kaydet =$db->prepare("INSERT INTO randevu SET 
	   
		randevu_tarih = ?,
		randevu_doktor = ?,
		randevu_klinik = ?,
		randevu_hasta_id = ?
		");

	$insert = $kaydet->execute([
		$randevu_tarih,$randevu_doktor,$randevu_klinik,$randevu_hasta_id
	]);
	if ($insert) {
		header("location:randevu.php?kayitbasarili");
	}else{
		header("location:randevu.php?kayitbasarisiz"); 	
	}

}



if(isset($_POST['randevu_duzenle'])){

	$randevu_tarih =isset($_POST['tarih']) ? $_POST['tarih'] : null;
	$randevu_doktor =isset($_POST['doktor']) ? $_POST['doktor'] : null;
	$randevu_klinik =isset($_POST['klinik']) ? $_POST['klinik'] : null;
	$id=$_POST['randevu_id']; 


	$sorgu = $db -> prepare("UPDATE randevu SET  randevu_tarih = ? ,   randevu_doktor = ? , randevu_klinik = ?  WHERE randevu_id = ?");
	$sorgu->execute([$randevu_tarih,  $randevu_doktor,$randevu_klinik,$id]);

	$gonder="location:randevu.php";
	header($gonder);


}


if(isset($_POST['randevu_sil'])){
	$id=$_POST['randevu_id']; 
	$delete = $db->exec("DELETE FROM randevu WHERE randevu_id = $id");
	header("location:anasayfa.php?kayitbasarili");

}






?>


