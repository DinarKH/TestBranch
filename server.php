<?php
	$item=$_POST['mail'];
	if(!preg_match('/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u', $item) ){
		echo "ошибка ввода email";
	}	
	$user='root';
	$pass='';
	$name=$_POST['name'];
	$email=$_POST['mail'];
	$text=$_POST['resume'];
	$dbh=new PDO('mysql:host=localhost; dbname=hr; charset=utf8',$user,$pass);
	$dbh->exec("INSERT INTO resume(name,email,text) values ('".$name."','".$email."','".$text."')");
?>