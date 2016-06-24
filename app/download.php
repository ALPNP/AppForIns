<?php
$db = mysqli_connect ('localhost', 'writer', 'writer');

mysqli_select_db ($db, 'appforgrey');
$db->set_charset('utf8');

$foto1 = "filestore/".$_FILES["foto1"]["name"];
$insert1 = "INSERT INTO `filestore` (`filename`) VALUES ('".$foto1."')";
$query1 = mysqli_query($db, $insert1);

if(is_uploaded_file($_FILES["foto1"]["tmp_name"]))
{
    move_uploaded_file($_FILES["foto1"]["tmp_name"],
    "filestore/".$_FILES["foto1"]["name"]);
}

// Жестокий shitcode
if (isset($_FILES["foto2"]["name"]))
{
    if ($_FILES["foto2"]["name"] != "")
    {
        $foto2 = "filestore/".$_FILES["foto2"]["name"];
        $insert2 = "INSERT INTO `filestore` (`filename`) VALUES ('".$foto2."')";
        $query2 = mysqli_query($db, $insert2);
    
            if(is_uploaded_file($_FILES["foto2"]["tmp_name"]))
            {
                move_uploaded_file($_FILES["foto2"]["tmp_name"],
                "filestore/".$_FILES["foto2"]["name"]);
            }
    }
}

if (isset($_FILES["foto3"]["name"]))
{
    if ($_FILES["foto3"]["name"] != "")
    {
        $foto3 = "filestore/".$_FILES["foto3"]["name"];
        $insert3 = "INSERT INTO `filestore` (`filename`) VALUES ('".$foto3."')";
        $query3 = mysqli_query($db, $insert3);
    
            if(is_uploaded_file($_FILES["foto3"]["tmp_name"]))
            {
                move_uploaded_file($_FILES["foto3"]["tmp_name"],
                "filestore/".$_FILES["foto3"]["name"]);
            }
    }
}

if (isset($_FILES["foto4"]["name"]))
{
    if ($_FILES["foto4"]["name"] != "")
    {
        $foto4 = "filestore/".$_FILES["foto4"]["name"];
        $insert4 = "INSERT INTO `filestore` (`filename`) VALUES ('".$foto4."')";
        $query4 = mysqli_query($db, $insert4);
    
            if(is_uploaded_file($_FILES["foto4"]["tmp_name"]))
            {
                move_uploaded_file($_FILES["foto4"]["tmp_name"],
                "filestore/".$_FILES["foto4"]["name"]);
            }
    }
}

if (isset($_FILES["foto5"]["name"]))
{
    if ($_FILES["foto5"]["name"] != "")
    {
        $foto5 = "filestore/".$_FILES["foto5"]["name"];
        $insert5 = "INSERT INTO `filestore` (`filename`) VALUES ('".$foto5."')";
        $query5 = mysqli_query($db, $insert5);
    
            if(is_uploaded_file($_FILES["foto5"]["tmp_name"]))
            {
                move_uploaded_file($_FILES["foto5"]["tmp_name"],
                "filestore/".$_FILES["foto5"]["name"]);
            }
    }
}

header('Location: setdata.php');
exit;
?>