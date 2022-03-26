<?php   include 'header.php'?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Randevu Kaydı</title>
</head>
<body>
<div class="form-floating mb-3">
                                <input class="form-control" id="ad" type="text" placeholder="isim giriniz..." data-sb-validations="required" />
                                <label for="name">SN.Ad Soyad</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="randevu" type="text" placeholder="randevu..." data-sb-validations="required" />
                                <form action="islem.php" method="post">
                                <input type="date" name="tarih">
                                <label for="name"> </label>
                                <button class="btn btn-primary btn-xl disabled" id="submitButton" name="kullanicikaydet" type="">Randevu Kaydet</button>
                                </form>
                            </div>
    
</body>
</html>