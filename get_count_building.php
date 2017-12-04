<!-- Файл для ответа на асинхронный запрос
*@$_POST['street']  название улицы 
**
-->
<?php
$list_of_street = include_once './list_of_street.php';
if(isset($_POST['street'])){
    echo " На улице ".$_POST['street'].""
         . " ".$list_of_street[$_POST['street']]." дом.";
}

