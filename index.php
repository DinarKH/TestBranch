<!DOCTYPE html>

<html>
<head>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<title></title>
	
	<script>
		
  	</script>
</head>
<body>
	<div>

</div>
<table class="menu">
	<tr>
		<td onclick="showInfo()">О нас</td>
		<td onclick="vacansies()">Вакансии</td>
		<td onclick="application()">Оставить резюме</td>
		<td onclick="contact()">Контакты</td>
	</tr>
</table>
<div id="aboutText"> <img src="images/about.png" align="left" class="imgAb"> 
	<p class="theme">
		<?php
			$t = file_get_contents('file.txt');
			$get  = mb_detect_encoding($t, array('utf-8', 'cp1251'));
			echo iconv($get,'UTF-8',$t);
		?>	
	</p></div>
<div id="netVac" class="invis">
	<div class="first ">Сварщик<br><img src="images/1.jpg" class=minImg> </div>
	<div class="first ">Перевозчик <br><img src="images/2.jpg" class=minImg> </div>
	<div class="first ">Сроитель <br><img src="images/3.jpg" class=minImg> </div>
</div>
<div id="formApp" class="invis">
	<form id="form">
		<p>Как к вам обращаться</p>
		<input type="text" name="name" size="40" placeholder="Имя Фамилия" value="Петя Петров" required>
		<p>Почтовый адрес</p>
		<input type="text" name="mail" size="40" placeholder="Почта"  value="example@mail.ru" required><br>
		<textarea name="resume" cols="80" rows="15"></textarea><br>
		<input type="submit" name="" size="40">

	</form>
</div>
<div id="reun" class="invis">Ленина 1 <br>11-11-11<br>example@mail.ru </div>
</html>