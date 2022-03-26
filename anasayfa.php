
<?php
	include 'header.php';
    $kullanicicek=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
    $kullanicicek->execute([
        'kullanici_tc' => $_SESSION['userkullanici_tc']
    ]);
    $kullanicicek=$kullanicicek->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Randevu Kayıt Ekranı </title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>

	<div class="adsoyad">

		<h4>Sn. <?=$kullanicicek['kullanici_adsoyad']?></h4>

	</div>





	<div class="orta_div" id="randevu_div">

		<h3>Randevu Oluştur</h3>

		<form action="islem.php" method="post">

		<input type="date" name="tarih" required>
		<br>
			
			<select name="klinik" class="klinik" id="linik" required>
				<option value="Yapilacak İslem">Klinik Seçin</option>
			<?php	$ks =$db->prepare("SELECT * FROM klinik ");
    $ks->execute([]);
    while ($klinikk = $ks->fetch(PDO::FETCH_ASSOC)) {?>
<option value="<?=$klinikk['id']?>"><?=$klinikk['klinik']?></option>
				
				<?php } ?>

				<br>

			</select>

			<select name="doktor" class="dr" id="doktorlar">
			<option value="Doktor Seçin">Doktor Seçin</option>
				<option value="Uzm.Dr Sezer ATAY" >Uzm.Dr Sezer ATAY</option>
				<option value="Uzm.Dr Serdar GÜDÜL" >Uzm.Dr Serdar GÜDÜL </option>
				<option value="Uzm. Dr. Aykut Ayatan" >Uzm. Dr. Aykut Ayatan</option>
				<option value="Uzm. Dr. Anna Çetiner Baranova" >Uzm. Dr. Anna Çetiner Baranova</option>
				<option value="Dr. Hatice Fidan Onur" >Dr. Hatice Fidan Onur</option>
				<option value="Uzm. Dr. İskender Özalp" >Uzm. Dr. İskender Özalp</option>
				<option value="Uzm. Dr. Bünyamin Özsoy" >Uzm. Dr. Bünyamin Özsoy</option>
				<option value="Dr. Ezgi Aytaç" >Dr. Ezgi Aytaç</option>
				<option value="Dr. Mehmet Ali Çetiner" >Dr. Mehmet Ali Çetiner</option>
				<option value="Uzm. Dr. Aydın Gültekin" >Uzm. Dr. Aydın Gültekin</option>
				<option value="Uzm. Dr. Caner Korkut" >Uzm. Dr. Caner Korkut</option>
				<option value="Uzm. Dr. Durhan Bilici" >Uzm. Dr. Durhan Bilici</option>
				<option value="Uzm. Dr. Celal Sönmez" >Uzm. Dr. Celal Sönmez</option>
				<option value="Uzm. Dr. Aytekin Oral" >Uzm. Dr. Aytekin Oral</option>
				<option value="Op. Dr. Bülent Alper Aygün" >Op. Dr. Bülent Alper Aygün</option>
				<option value="Uzm. Dr. Recep Erdoğan" >Uzm. Dr. Recep Erdoğan</option>
				<option value="Dr. Yasin Yıldız" >Dr. Yasin Yıldız</option>
				<option value="Dr. Selda Aktay" >Dr. Selda Aktay</option>
				<option value="Op. Dr. Derya Karadeniz Kulaç" >Op. Dr. Derya Karadeniz Kulaç</option>
				<option value="Uzm. Dr. Nihat Kırtaç" >Uzm. Dr. Nihat Kırtaç</option>
				<option value="Uzm. Dr. Nilüfer Güneş" >Uzm. Dr. Nilüfer Güneş</option>
				<option value="Uzm. Dr. Mehmet Yılmaz" >Uzm. Dr. Mehmet Yılmaz</option>
				<option value="Uzm. Dr. Murat Uçar" >Uzm. Dr. Murat Uçar</option>
				<option value="Uzm. Dr. Belde Yürümez Bayramoğlu" >Uzm. Dr. Belde Yürümez Bayramoğlu</option>
				<option value="Uzm. Dr. Ziya Şahan">Uzm. Dr. Ziya Şahan</option>
				<option value="Uzm. Dr. Güven Pınar" >Uzm. Dr. Güven Pınar</option>
				<option value="Uzm. Dr. Mustafa Öngel" >Uzm. Dr. Mustafa Öngel</option>
				<option value="Uzm. Dr. Mustafa Karaçöp" >Uzm. Dr. Mustafa Karaçöp</option>
				<option value="Uzm. Dr. Sadi Cahit Yetkili" >Uzm. Dr. Sadi Cahit Yetkili</option>
				<option value="Op. Dr. Taner Küçükçelebi" >Op. Dr. Taner Küçükçelebi</option>
				<option value="Op. Dr. Hüseyin Uysal" >Op. Dr. Hüseyin Uysal</option>
				<option value="Op. Dr. Barbaros Hayrettin Tabak">Op. Dr. Barbaros Hayrettin Tabak</option>
				<option value="Op. Dr. Zekai Akdoğan" >Op. Dr. Zekai Akdoğan</option>
				<option value="Uzm. Dr. Lütfiye Çalışkan" >Uzm. Dr. Lütfiye Çalışkan</option>
				<option value="Uzm. Dr. Aytuğ Karayeğen Şahin" >Uzm. Dr. Aytuğ Karayeğen Şahin</option>
				<option value="Uzm. Dr. Emin Demirpolat" >Uzm. Dr. Emin Demirpolat</option>
				<option value="Uzm. Dr. Hülya Ayyıldız Candar" >Uzm. Dr. Hülya Ayyıldız Candar</option>
				<option value="Uzm. Dr. Sema Kirazlı" >Uzm. Dr. Sema Kirazlı</option>
				<option value="Uzm. Dr. İncilay Barlah" >Uzm. Dr. İncilay Barlah</option>
				<option value="Uzm. Dr. Muharrem Erdem" >Uzm. Dr. Muharrem Erdem</option>
				<option value="Uzm. Dr. Ayşegül Önerbay" >Uzm. Dr. Ayşegül Önerbay</option>
				<option value="Op. Dr. Burhan Yıldırımn" >Op. Dr. Burhan Yıldırım</option>
				<option value="Uzm. Dr. Hanife Işıl Aykıtalp" >Uzm. Dr. Hanife Işıl Aykıtalp</option>
				<option value="Op. Dr. Zeki Dağlıoğlu" >Op. Dr. Zeki Dağlıoğlu</option>
				<option value="Uzm. Dr. Abdullah Şekerci" >Uzm. Dr. Abdullah Şekerci</option>
				<option value="Uzm. Dr. Zülfikar Çelik" >Uzm. Dr. Zülfikar Çelik</option>
				<option value="Dr. Zelıha Öztürk" >Dr. Zelıha Öztürk</option>
				<option value="Dr. Cansu Çetin" >Dr. Cansu Çetin</option>
				<option value="Dr. Ali Kemal Uslubaş" >Dr. Ali Kemal Uslubaş</option>
				<option value="Dr. Burak Omay" >Dr. Burak Omay</option>
				<option value="Dr. Zeynep Ezgi Kurtpınar" >Dr. Zeynep Ezgi Kurtpınar</option>
				<option value="Dr. Yunus Emre Okudan" >Dr. Yunus Emre Okudan</option>
				<option value="Op. Dr. Mustafa Murat Öztürk" >Op. Dr. Mustafa Murat Öztürk</option>
				<option value="Op. Dr. Alper Çelikten" >Op. Dr. Alper Çelikten</option>
				<option value="Op. Dr. Elif Suner" >Op. Dr. Elif Suner</option>
				<option value="Dr. Gizem Coşkun" >Dr. Gizem Coşkun</option>
				<option value="Uzm. Dr. Abdülkerim Yılmaz" >Uzm. Dr. Abdülkerim Yılmaz</option>
				<option value="Dr. Oya Pazarlı Dinçer">Dr. Oya Pazarlı Dinçer</option>
				<option value="Uzm. Dr. Fatma Uçar" >Uzm. Dr. Fatma Uçar</option>
				<option value="Uzm. Dr. Ayla Arıcan" >Uzm. Dr. Ayla Arıcan</option>
				<option value="Dr. Gökçen Gündoğdu" >Dr. Gökçen Gündoğdu</option>

			</select>



			<input type="hidden" name="kullanici_id" value=" <?=$kullanicicek['kullanici_id']?>">



			<button name="randevu_kaydet">Randevu Kaydet</button>



			</form>



	</div>





	






</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$('#linik').change(function (event) {
        var id = $(this).val();  
        //alert(this.id);
        $.ajax({
            type: 'POST',
            url: 'post.php?islem=doktors',  
            data: { id:id}, 
            success: function (result) {
                $('#doktorlar').html(result);
            },
            error: function () {
                alert('Hataa');
            }
        });
    });
</script>
<?php include 'footer.php'; ?>