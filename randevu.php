<?php
include 'header.php' 

?>
<br>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
	<title>Randevu Kaydı</title>
	<link rel="stylesheet" type="text/css" href="css/ran.css">
</head>
<body>
	<table>
		<tr>
		
			<th>Tarih</th>
			<th>Doktor</th>
			<th>Klinik</th>
			<th>Hasta</th>
			<th></th>
		</tr>

			<?php
			$kullanicicek=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
			$kullanicicek->execute([
				'kullanici_tc' => $_SESSION['userkullanici_tc']
			]);
			$kullanicicek=$kullanicicek->fetch(PDO::FETCH_ASSOC);

				$randevu_sor =$db->prepare("SELECT * FROM randevu WHERE randevu_hasta_id=:randevu_hasta_id");
				$randevu_sor->execute([
					'randevu_hasta_id'=>$kullanicicek['kullanici_id']
				]);
				while ($randevu = $randevu_sor->fetch(PDO::FETCH_ASSOC)) {
					
					$doktor  = $db->prepare("SELECT * FROM doktorlar  where id=? ");
					$doktor-> execute(array($randevu['randevu_doktor']));
					$doktor  = $doktor->fetch(PDO::FETCH_ASSOC);

					$klinikkk  = $db->prepare("SELECT * FROM klinik  where id=? ");
					$klinikkk-> execute(array($randevu['randevu_klinik']));
					$klinikkk  = $klinikkk->fetch(PDO::FETCH_ASSOC);

					$hasta  = $db->prepare("SELECT * FROM kullanici where kullanici_id=? ");
					$hasta-> execute(array($randevu['randevu_hasta_id']));
					$hasta  = $hasta->fetch(PDO::FETCH_ASSOC);

					?>
			

		<tr>
			
			<th><?php echo $randevu['randevu_tarih'];?></th>
			<th><?php echo $doktor['doktor'];?></th>
			<th><?php echo $klinikkk['klinik'];?></th>
			<th><?php echo $hasta['kullanici_adsoyad'];?></th>
			<th><a href="randevuguncelle.php?id=<?=$randevu['randevu_id']?>" >Sil / Güncelle</a></th>
		</tr>
		<?php } ?>
		
	</table>

</body>
</html>

<br>
<br>
<br>

<?php
include 'footer.php' 

?>