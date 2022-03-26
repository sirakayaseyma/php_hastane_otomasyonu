<?php

ob_start();
session_start();
include 'baglan.php';

$islem = $_GET['islem'];
if($islem=="doktors"){

    $doktorlar =$db->prepare("SELECT * FROM doktorlar WHERE klinik=:klinik");
    $doktorlar->execute([
        'klinik'=>$_POST['id']
    ]);
    while ($doktor = $doktorlar->fetch(PDO::FETCH_ASSOC)) {?>
<option value="<?=$doktor['id']?>"><?=$doktor['doktor']?></option>
<?php } }?>

