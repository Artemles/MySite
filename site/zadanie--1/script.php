<?php

$falename = time().'.json';
$number=" ";
$date=" ";

if(isset($_POST['number'])) {
    $number = $_POST['number'];
}
if (isset($_POST['date'])) { 
    $date = $_POST['date'];
}

// Открываем файл, флаг W означает - файл открыт на запись 
$f_hdl = fopen('applicationform\\'.$falename, 'w');

// Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'
$taskList[] = array('Tel'=>$number, 'date'=>$date); 

// Перекодировать в формат и записать в файл.
file_put_contents('applicationform\\'.$falename,json_encode($taskList));

header("Location: //zadanie--1//Index.php");

?>