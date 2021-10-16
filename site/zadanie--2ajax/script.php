<?php

$startinterval;
$finishinterval;
$choice;
$result=0;
$array=array();


//////Ловлю данные из формы//////

if(isset($_POST['startinterval'])) {
    $startinterval = $_POST['startinterval'];
}
if (isset($_POST['finishinterval'])) { 
    $finishinterval = $_POST['finishinterval'];
}
if (isset($_POST['choice'])) { 
    $choice = $_POST['choice'];
}

//echo $startinterval."<br>".$finishinterval."<br>".$choice."<br>";

/////Основная функция////

$j = 1;
for($i=1; $i<=$finishinterval; $i+=$j) {
$j = $i - $j;
    if($i >= $startinterval){
        echo " [".$startinterval."_".$i."_".$finishinterval."] ";
        $array[]= $i;
        if('even'==$choice){
            if($i%2==0){
                $result=$result+$i;
            }
        }
        elseif('odd'==$choice){
            if($i%2!=0){
                $result=$result+$i;
            }
        }else{
            $result=$result+$i;
        }
    }
}


//echo "<br>".$result."<br>";
var_dump($array);

//Время заполнения формы
$date = date("Y-m-d H:i:s");  
//echo $date."<br>";

$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = "root"; // Пароль БД
$db_base = "mybace"; // Имя БД
$db_table = "mytable"; // Имя Таблицы БД

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base); 

if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);

}


$sql = "INSERT INTO $db_table (daten,startinterval,finishinterval,choice,result) VALUES ('$date','$startinterval','$finishinterval','$choice','$result')";

if ($mysqli->query($sql) === TRUE) {
   //echo "Успешно создана новая запись";
} else {
   echo "Ошибка: " . $sql . "<br>" . $mysqli->error;
}

// Закрыть подключение
$mysqli->close();


//header("Location: //zadanie--2//datepages.php");
require_once 'datepages.php'; // подключаем скрипт

///////////забираем данные из таблицы//////
//////////////////////////////////////////

$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM mytable";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>Дата</th><th> Начало интервала </th><th> Конец интервала </th><th> Выбор </th><th> Результат </th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);


?>