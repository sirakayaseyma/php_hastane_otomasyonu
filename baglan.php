<?php
try{
    $db = new PDO("mysql:host=localhost; dbname=hastaneotomasyonu; charset=utf8", 'root', '');
   // echo 'veritabanı baglantisi basarili';
}
catch (Exception $e) {
    echo $e->getMessage();
}



?>