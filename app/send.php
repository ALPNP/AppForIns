<?php
$db = mysqli_connect ('localhost', 'writer', 'writer');

mysqli_select_db ($db, 'appforgrey');
$db->set_charset('utf8');

$fio = htmlspecialchars($_POST['fio']);
$adr = htmlspecialchars($_POST['adr']);
$ord = htmlspecialchars($_POST['ord']);
$rew = htmlspecialchars($_POST['rew']);
$src = ($_POST['fotoAdr']);

$foto = substr($src, 0, -1);

$filename = explode("/", $src);

$dest = "ftp/".$filename[1];

rename("".$foto."", "".$dest."");

$delete = "DELETE FROM `filestore` WHERE `filename` = '".$foto."'";

$queryDel = mysqli_query($db, $delete);

$insert = "INSERT INTO `ftp` (`fio`, `adr`, `ord`, `rew`, `foto`)
            VALUES
            ('".$fio."', '".$adr."', '".$ord."', '".$rew."', '".$dest."')";

$queryIns = mysqli_query($db, $insert);

header('Location: setdata.php');
exit;
?>