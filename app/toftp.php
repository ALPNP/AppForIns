<?php
$db = mysqli_connect ('localhost', 'writer', 'writer');

mysqli_select_db ($db, 'appforgrey');
$db->set_charset('utf8');

$select = "SELECT * FROM `filestore`";

$count = 0;

if ($result = $db->query($select))
{
    while ($row = $result->fetch_row())
    {
        $form = "<form name='form' role='form' method='POST' action='send.php'>
        <label for='foto'>Фото:</label>
        <p class='foto'><img name='foto' class='img img-responsive' src=".$row[0]." alt=''></p>
        <label for='fio'>ФИО клиента:</label>
        <br>
        <input rows=1 class='form-control' type='text' name='fio'></input>
        
        <label for='adr'>Адрес клиента:</label>
        <p class='text text-danger'><strong>Для автоматического определения местоположения на Вашем мобильном устройсте, включите GPS модуль.</strong></p>
        <input rows=1 class='form-control geo' type='text' name='adr'></input>
        
        <label for='ord'>Номер заказа:</label>
        <br>
        <input rows=1 class='form-control' type='text' name='ord'></input>
        
        <label for='rew'>Отзыв:</label>
        <br>
        <textarea rows=3 class='form-control' type='text' name='rew'></textarea>
        
        <input type='text' name='fotoAdr' hidden value=".$row[0]."/>
        
        <input style='margin-top:15px;' class='btn btn-info' type='submit' value='Отправить'>
        
        <hr>
        </form>";
        
        $div = "<div>".$form."</div>";
        
        echo $div;
    }
};
?>