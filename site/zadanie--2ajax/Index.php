<!DOCTYPE html>
<html>
<head>
	<title>Задание на верстку</title>
	<meta charset="utf-8"> 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="/Css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet/less" href="less/fonts.less">
<link rel="stylesheet/less" href="less/screen1.less">
<link rel="stylesheet" href="/Style.css">

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/less.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/jquery.fancybox.js"></script>

<script src="ajax.js"></script>
</head>
<body> 
    <div class="container col-3">
        <form id="ajax_form" action="" method="POST" class="forms" >
            <div>
                <p>Найти сумму чисел</p>
                <div class="row forms-radio">
                    <p><input name="choice" type="radio" value="even"> Четные</p>
                    <p><input name="choice" type="radio" value="odd"> Нечетные</p>
                    <p><input name="choice" type="radio" value="all" checked> Все</p>
                </div>
            </div>
            <div class="forms-mains">
                <p>Начало интервала</p>
                <input type="number" name="startinterval" min="0" require>
            </div>
            <div class="forms-mains">
                <p>Конец интервала</p>
                <input type="number" name="finishinterval" min="1" require>
            </div>
            <div class="forms-butten">
                <input id="btn" type="submit">
            </div>
        </form>



        <div id="result_form"></div> 
    </div>
</body>
</html>