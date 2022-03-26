<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Hesap Bilgileri</title>
</head>
<body>
<div class="form-floating mb-3">
                                <input class="form-control" id="ad" type="text" placeholder="isim giriniz..." data-sb-validations="required" />
                                <label for="name">Ad Soyad</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Ad Soyad Gerekli!!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tc" type="text" placeholder="Tc giriniz..." data-sb-validations="required" />
                                <label for="name">Tc Kimlik No </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Kimlik No Gerekli!!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">E-mail Adresi</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Bir e-mail gerekli!</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Geçersiz E-mail!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(500) 666-66-66" data-sb-validations="required" />
                                <label for="phone">Telefon Numarası</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Bir numara gerekli!</div>
                            </div>
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Güncelle</button>
</body>
</html>