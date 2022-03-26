<?php



include 'header.php';
if(!$_SESSION['userkullanici_tc']){
	header("Location:index.php");
}


$kullanicirandevu=$db->prepare("SELECT * FROM randevu WHERE randevu_id=:randevu_id");
$kullanicirandevu->execute([
	'randevu_id' => $_GET['id']
]);
$kullanicirandevu=$kullanicirandevu->fetch(PDO::FETCH_ASSOC);

$kullanicicek=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanicicek->execute([
	'kullanici_tc' => $_SESSION['userkullanici_tc']
]);
$kullanicicek=$kullanicicek->fetch(PDO::FETCH_ASSOC); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sağlık Bakanlığı</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    

     <br>

	<div class="adsoyad">
		<h4> Sn. <?=$kullanicicek['kullanici_adsoyad']?></h4>
	</div>


	<div class="orta_div" id="randevu_div">
		<h3>Randevu Güncelle</h3>
       
		
		<br>

		<form action="islem.php" method="post">
			<input type="date" name="tarih" required>

		<br>

			<select name="klinik" class="yapılacak" id="linik">
			<?php	$ks =$db->prepare("SELECT * FROM klinik ");
    $ks->execute([]);
    while ($klinikk = $ks->fetch(PDO::FETCH_ASSOC)) {?>
	<option value="<?=$klinikk['id']?>" <?php if($kullanicirandevu['randevu_klinik']==$klinikk['id']){echo "selected";} ?>><?=$klinikk['klinik']?></option>
				
				<?php } ?>
			<br>
			</select>
			<select name="doktor" class="dr" id="doktorlar">
				<option value="Doktor Seçin">Doktor Seçin</option>
				<option value="Uzm.Dr Sezer ATAY" <?php if($kullanicirandevu['randevu_doktor']=="Uzm.Dr Sezer ATAY"){echo "selected";} ?>>Uzm.Dr Sezer ATAY</option>
				<option value="Uzm.Dr Serdar GÜDÜL" <?php if($kullanicirandevu['randevu_doktor']=="Uzm.Dr Serdar GÜDÜL"){echo "selected";} ?>>Uzm.Dr Serdar GÜDÜL </option>
				<option value="Uzm. Dr. Aykut Ayatan" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Aykut Ayatan"){echo "selected";} ?>>Uzm. Dr. Aykut Ayatan</option>
				<option value="Uzm. Dr. Anna Çetiner Baranova" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Anna Çetiner Baranova"){echo "selected";} ?>>Uzm. Dr. Anna Çetiner Baranova</option>
				<option value="Dr. Hatice Fidan Onur" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Hatice Fidan Onur"){echo "selected";} ?>>Dr. Hatice Fidan Onur</option>
				<option value="Uzm. Dr. İskender Özalp" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. İskender Özalp"){echo "selected";} ?>>Uzm. Dr. İskender Özalp</option>
				<option value="Uzm. Dr. Bünyamin Özsoy" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Bünyamin Özsoy"){echo "selected";} ?>>Uzm. Dr. Bünyamin Özsoy</option>
				<option value="Dr. Ezgi Aytaç" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Ezgi Aytaç"){echo "selected";} ?>>Dr. Ezgi Aytaç</option>
				<option value="Dr. Mehmet Ali Çetiner" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Mehmet Ali Çetiner"){echo "selected";} ?>>Dr. Mehmet Ali Çetiner</option>
				<option value="Uzm. Dr. Aydın Gültekin" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Aydın Gültekin"){echo "selected";} ?>>Uzm. Dr. Aydın Gültekin</option>
				<option value="Uzm. Dr. Caner Korkut" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Caner Korkut"){echo "selected";} ?>>Uzm. Dr. Caner Korkut</option>
				<option value="Uzm. Dr. Durhan Bilici" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Durhan Bilici"){echo "selected";} ?>>Uzm. Dr. Durhan Bilici</option>
				<option value="Uzm. Dr. Celal Sönmez" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Celal Sönmez"){echo "selected";} ?>>Uzm. Dr. Celal Sönmez</option>
				<option value="Uzm. Dr. Aytekin Oral" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Aytekin Oral"){echo "selected";} ?>>Uzm. Dr. Aytekin Oral</option>
				<option value="Op. Dr. Bülent Alper Aygün" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Bülent Alper Aygün"){echo "selected";} ?>>Op. Dr. Bülent Alper Aygün</option>
				<option value="Uzm. Dr. Recep Erdoğan" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Recep Erdoğan"){echo "selected";} ?>>Uzm. Dr. Recep Erdoğan</option>
				<option value="Dr. Yasin Yıldız" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Yasin Yıldız"){echo "selected";} ?>>Dr. Yasin Yıldız</option>
				<option value="Dr. Selda Aktay" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Selda Aktay"){echo "selected";} ?>>Dr. Selda Aktay</option>
				<option value="Op. Dr. Derya Karadeniz Kulaç" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Derya Karadeniz Kulaç"){echo "selected";} ?>>Op. Dr. Derya Karadeniz Kulaç</option>
				<option value="Uzm. Dr. Nihat Kırtaç" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Nihat Kırtaç"){echo "selected";} ?>>Uzm. Dr. Nihat Kırtaç</option>
				<option value="Uzm. Dr. Nilüfer Güneş" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Nilüfer Güneş"){echo "selected";} ?>>Uzm. Dr. Nilüfer Güneş</option>
				<option value="Uzm. Dr. Mehmet Yılmaz" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Mehmet Yılmaz"){echo "selected";} ?>>Uzm. Dr. Mehmet Yılmaz</option>
				<option value="Uzm. Dr. Murat Uçar" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Murat Uçar"){echo "selected";} ?>>Uzm. Dr. Murat Uçar</option>
				<option value="Uzm. Dr. Belde Yürümez Bayramoğlu" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Belde Yürümez Bayramoğlu"){echo "selected";} ?>>Uzm. Dr. Belde Yürümez Bayramoğlu</option>
				<option value="Uzm. Dr. Ziya Şahan" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Ziya Şahan"){echo "selected";} ?>>Uzm. Dr. Ziya Şahan</option>
				<option value="Uzm. Dr. Güven Pınar" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Güven Pınar"){echo "selected";} ?>>Uzm. Dr. Güven Pınar</option>
				<option value="Uzm. Dr. Mustafa Öngel" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Mustafa Öngel"){echo "selected";} ?>>Uzm. Dr. Mustafa Öngel</option>
				<option value="Uzm. Dr. Mustafa Karaçöp" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Mustafa Karaçöp"){echo "selected";} ?>>Uzm. Dr. Mustafa Karaçöp</option>
				<option value="Uzm. Dr. Sadi Cahit Yetkili" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Sadi Cahit Yetkili"){echo "selected";} ?>>Uzm. Dr. Sadi Cahit Yetkili</option>
				<option value="Op. Dr. Taner Küçükçelebi" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Taner Küçükçelebi"){echo "selected";} ?>>Op. Dr. Taner Küçükçelebi</option>
				<option value="Op. Dr. Hüseyin Uysal" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Hüseyin Uysal"){echo "selected";} ?>>Op. Dr. Hüseyin Uysal</option>
				<option value="Op. Dr. Barbaros Hayrettin Tabak" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Barbaros Hayrettin Tabak"){echo "selected";} ?>>Op. Dr. Barbaros Hayrettin Tabak</option>
				<option value="Op. Dr. Zekai Akdoğan" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Zekai Akdoğan"){echo "selected";} ?>>Op. Dr. Zekai Akdoğan</option>
				<option value="Uzm. Dr. Lütfiye Çalışkan" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Lütfiye Çalışkan"){echo "selected";} ?>>Uzm. Dr. Lütfiye Çalışkan</option>
				<option value="Uzm. Dr. Aytuğ Karayeğen Şahin" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Aytuğ Karayeğen Şahin"){echo "selected";} ?>>Uzm. Dr. Aytuğ Karayeğen Şahin</option>
				<option value="Uzm. Dr. Emin Demirpolat" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Emin Demirpolat"){echo "selected";} ?>>Uzm. Dr. Emin Demirpolat</option>
				<option value="Uzm. Dr. Hülya Ayyıldız Candar" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Hülya Ayyıldız Candar"){echo "selected";} ?>>Uzm. Dr. Hülya Ayyıldız Candar</option>
				<option value="Uzm. Dr. Sema Kirazlı" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Sema Kirazlı"){echo "selected";} ?>>Uzm. Dr. Sema Kirazlı</option>
				<option value="Uzm. Dr. İncilay Barlah" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. İncilay Barlah"){echo "selected";} ?>>Uzm. Dr. İncilay Barlah</option>
				<option value="Uzm. Dr. Muharrem Erdem" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Muharrem Erdem"){echo "selected";} ?>>Uzm. Dr. Muharrem Erdem</option>
				<option value="Uzm. Dr. Ayşegül Önerbay" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Ayşegül Önerbay"){echo "selected";} ?>>Uzm. Dr. Ayşegül Önerbay</option>
				<option value="Op. Dr. Burhan Yıldırımn" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Burhan Yıldırım"){echo "selected";} ?>>Op. Dr. Burhan Yıldırım</option>
				<option value="Uzm. Dr. Hanife Işıl Aykıtalp" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Hanife Işıl Aykıtalp"){echo "selected";} ?>>Uzm. Dr. Hanife Işıl Aykıtalp</option>
				<option value="Op. Dr. Zeki Dağlıoğlu" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Zeki Dağlıoğlu"){echo "selected";} ?>>Op. Dr. Zeki Dağlıoğlu</option>
				<option value="Uzm. Dr. Abdullah Şekerci" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Abdullah Şekerci"){echo "selected";} ?>>Uzm. Dr. Abdullah Şekerci</option>
				<option value="Uzm. Dr. Zülfikar Çelik" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Zülfikar Çelik"){echo "selected";} ?>>Uzm. Dr. Zülfikar Çelik</option>
				<option value="Dr. Zelıha Öztürk" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Zelıha Öztürk"){echo "selected";} ?>>Dr. Zelıha Öztürk</option>
				<option value="Dr. Cansu Çetin" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Cansu Çetin"){echo "selected";} ?>>Dr. Cansu Çetin</option>
				<option value="Dr. Ali Kemal Uslubaş" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Ali Kemal Uslubaş"){echo "selected";} ?>>Dr. Ali Kemal Uslubaş</option>
				<option value="Dr. Burak Omay" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Burak Omay"){echo "selected";} ?>>Dr. Burak Omay</option>
				<option value="Dr. Zeynep Ezgi Kurtpınar" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Zeynep Ezgi Kurtpınar"){echo "selected";} ?>>Dr. Zeynep Ezgi Kurtpınar</option>
				<option value="Dr. Yunus Emre Okudan" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Yunus Emre Okudan"){echo "selected";} ?>>Dr. Yunus Emre Okudan</option>
				<option value="Op. Dr. Mustafa Murat Öztürk" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Mustafa Murat Öztürk"){echo "selected";} ?>>Op. Dr. Mustafa Murat Öztürk</option>
				<option value="Op. Dr. Alper Çelikten" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Alper Çelikten"){echo "selected";} ?>>Op. Dr. Alper Çelikten</option>
				<option value="Op. Dr. Elif Suner" <?php if($kullanicirandevu['randevu_doktor']=="Op. Dr. Elif Suner"){echo "selected";} ?>>Op. Dr. Elif Suner</option>
				<option value="Dr. Gizem Coşkun" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Gizem Coşkun"){echo "selected";} ?>>Dr. Gizem Coşkun</option>
				<option value="Uzm. Dr. Abdülkerim Yılmaz" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Abdülkerim Yılmaz"){echo "selected";} ?>>Uzm. Dr. Abdülkerim Yılmaz</option>
				<option value="Dr. Oya Pazarlı Dinçer" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Oya Pazarlı Dinçer"){echo "selected";} ?>>Dr. Oya Pazarlı Dinçer</option>
				<option value="Uzm. Dr. Fatma Uçar" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Fatma Uçar"){echo "selected";} ?>>Uzm. Dr. Fatma Uçar</option>
				<option value="Uzm. Dr. Ayla Arıcan" <?php if($kullanicirandevu['randevu_doktor']=="Uzm. Dr. Ayla Arıcan"){echo "selected";} ?>>Uzm. Dr. Ayla Arıcan</option>
				<option value="Dr. Gökçen Gündoğdu" <?php if($kullanicirandevu['randevu_doktor']=="Dr. Gökçen Gündoğdu"){echo "selected";} ?>>Dr. Gökçen Gündoğdu</option>
			</select>

			<br>
			<input type="hidden" name="randevu_id" value=" <?=$_GET['id']?>">
     <br>
			<button name="randevu_duzenle">Randevu Düzenle</button>

		</form>

	</div>


	<div class="orta_div" id="ailehekimi_div">
		<!-- <h3>Randevu Sil</h3> -->

		<form action="islem.php" method="post">

			<input type="hidden" name="randevu_id" value=" <?=$_GET['id']?>">

			<button name="randevu_sil">Randevu Sil</button>
<br>
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