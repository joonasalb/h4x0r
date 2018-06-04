<?php

INCLUDE ("./wosh.conexao.class.php");
INCLUDE ("./wosh.funcoes.class.php");
//@include ("./encrypt.php");

Go();

ini_set('date.timezone', "America/Sao_Paulo");

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

$time = "s&atilde;o: ".date('h')." Horas e ".date('i')." minutos";

$data = strftime('%A, %d de %B de %Y', strtotime('today'));

$date = date('Y-m-d');
$now  = date('h:i:s');

$strf = '';

session_start();

if (isset($_SESSION['channel'])) {

	$chan = utf8_encode($_SESSION['channel']);

} else {

	$chan = "";

}



 
if (isset($_SESSION['date'])) {
	
	$dat = $_SESSION['date'];

} else {

	$dat = "9999-99-99 99-99-99";

}


if (isset($_SESSION['daf'])) {

	$daf = $_SESSION['daf'];

} else {

	$daf = "9999-99-99 99-99-99";

}
 

if (isset($_SESSION['clear'])){

	$d = $_SESSION['clear'];
	
	if (isset($chan)){

	$SQL = $mysqli->query("SELECT `name`, `time`, `msg`, `color` FROM `msgs` WHERE channel = '$chan' AND time >= '$d' AND time > '$daf'");

	} else {

		$SQL = $mysqli->query("SELECT `name`, `time`, `msg`, `color` FROM `msgs` LIMIT 0");

	}

} else {

	if(isset($chan)) {

		$SQL = $mysqli->query("SELECT `name`, `time`, `msg`, `color` FROM `msgs` WHERE channel = '$chan' AND time >= '$dat' AND time > '$daf' ");
	
	} else {

		$SQL = $mysqli->query("SELECT `name`, `time`, `msg`, `color` FROM `msgs` LIMIT 0");

	}

}


if ($SQL->num_rows == true) {

$a = 0;

while ($show = mysqli_fetch_array($SQL)) {

	$name  = utf8_encode($show['name']);
	$timer = $show['time'];
	$msg   = $show['msg'];

		/*
		if (isset($_SESSION['ci'])) {
		
			$cipher = $_SESSION['ci'];
		
		} else {
		
			//$cipher	= new Cipher('WOSH');
			$cipher = $_SESSION['cis'];

		} 
		*/
	$msg = decrypt($msg,$strf);

	$msg = utf8_encode($msg);
		
	//$encryptedtext = $cipher->encrypt("$msg");

	//$msg = $cipher->decrypt($msg);

	$cor = $show['color'];

	echo "<div class=\"cmd\"><span title=\"$timer\" class=\"user\" style=\"color:#$cor;\"><b> $name </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#$cor;\">$msg</span></div>";

		if (isset($_SESSION['notify'])) {
		
			unset( $_SESSION['notify'] );

			$a++;
		
			$_SESSION['notify'] = $a;
		
		} else {

			$_SESSION['notify'] = $a;

			$a++;

		}


	}

}