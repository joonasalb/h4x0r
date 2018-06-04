<?php
/*
if (basename($_SERVER["PHP_SELF"]) == "wosh.funcoes.class.php") {
   
   header('Location: ./');

}
*/
function GetIP(){


	$http_client_ip       = $_SERVER['HTTP_CLIENT_IP'];
	$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote_addr          = $_SERVER['REMOTE_ADDR'];
	 
		if (!empty($http_client_ip)) {
		    $IP = $http_client_ip;
		} elseif (!empty($http_x_forwarded_for)) {
		    $IP = $http_x_forwarded_for;
		} else {
		    $IP = $remote_addr;
		}

	// tira o outro IP depois da , 

	$virg = substr_count($IP, ',');
	if ($virg == "1") {

	    $p = explode(',', $IP);

	    $IP = $p[0];

	}

	$IP = preg_replace('/[^[0-9.]/', '',$IP);
	$IP = substr($IP,0,15);

	$ti = date('Y:m:d h:i:s');
	echo "<div class=\"cmd\"><span class=\"sistema\"><b> root@wosh </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#079;\">Seu Endereço de IP: $IP</span></div>";

}

function ip($IP) {

$http_client_ip       = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr          = $_SERVER['REMOTE_ADDR'];
 
if(!empty($http_client_ip)){
    $IP = $http_client_ip;
} elseif(!empty($http_x_forwarded_for)){
    $IP = $http_x_forwarded_for;
} else {
    $IP = $remote_addr;
}

// tira o outro IP depois da , 

$virg = substr_count($IP, ',');
if($virg == "1"){

    $se = ',';
    $fr = $IP;
    $p = explode($se, $fr);

    $IP = $p[0];

}

$IP = preg_replace('/[^[0-9.]/', '',$IP);
$IP = substr($IP,0,15);

return $IP;

}

function allCmds() {
	echo "<div class=\"all_commands\"><br/>";
	echo "<span class=\"command\">theme  <i>Dark / Light / Girl / Default</i> </span> &bull; Altera o Background<br/>"; 
	echo "<span class=\"command\">meuip</span> &bull; Exibe seu IP <br/>";
	echo "<span class=\"command\">create <i>canal_name</i></span> &bull; Cria um Canal<br/>";
	echo "<span class=\"command\">goin <i>canal_name</i></span> &bull; Entra no Canal Específico <br/>";
	echo "<span class=\"command\">ls</span> &bull; Para saber se você está em algum Canal <br/>";
	echo "<span class=\"command\">users</span> &bull; Lista os usuários online no Canal<br/>";
	echo "<span class=\"command\">quit</span> &bull; Logar com outro <u>nickname</u><br/>";
	echo "<span class=\"command\">exit</span> &bull; Sair do Canal atual <br/>";
	echo "<span class=\"command\">clear</span> &bull; Limpar a Tela </span> <br/>";
	echo "<span class=\"command\">/ping <i>ip / site</i></span> &bull; Saber se um site ou máquina está Online (ping)</span> <br/>";
	echo "<span class=\"command\">port <i>ip -p 80</i></span> &bull; Saber se a porta no determinado IP está aberta</span> <br/>";
	echo "<span class=\"command\">getip <i>-s google.com</i></span> &bull; Pegar o ip de um site</span> <br/>";
	echo "<span class=\"command\">date</span> &bull; Informa a Data atual</span> <br/>";
	echo "<span class=\"command\">time</span> &bull; Informa a Hora atual</span> <br/>";
	echo "<span class=\"command\">anotar nome_nota (valor da nota)</span> &bull; Adionar notas, bloco de códigos, frases e etc</span> <br/>";
	echo "<span class=\"command\">getnote nome_nota</span> &bull; Imprimir o valor da nota</span> </div><br/>";
	echo "</div>";
}


function channelValid($chann) {

	echo '<div class="cmd"><span class="sistema"><b> sistema </b></span> <span class="sep"> ~$ </span> <span class="mss" style="color:#079;">Você entrou no canal [<font color="#84ff0a">'.$chann.'</font>].</span></div>';

}

function channelTry($var) {

	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#f00;\">$var</span></div>";

}
function help_ping($help_ping) {
	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#f00;\">$help_ping</span></div>";
}
function local($chan) {

	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#ffe500;\">Você está no Canal [$chan]</span></div>";

}

function local1() {

	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#ff6100;\">Você não está em nenhum Canal</span></div>";

}

function emptyCreate() {
	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#ff6100;\">Escreva pelomenos 1 caractere para criar um Canal</span></div>";
}

function gettip($getip) {

	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span>";
	echo "<span class=\"mss\" style=\"color:#0ad34d;\">O endereço digitado, retornou para este IP: <b>".gethostbyname($getip);
	echo "</b></span></div>";

}

function scanPort($ip,$port) {
		
		echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#ff6100;\">";

		$conexao =@fsockopen($ip, $port, $erro, $erro, 15); 
		 if ($conexao){
		  echo "a porta <b>$port</b> no ip <b>$ip</b> está <b style=\"color:#00ff2a;\">aberta</b>";  
		 } else {  
		  echo "a porta <b>$port</b> no ip <b>$ip</b> está <b style=\"color:#f00;\">fechada/filtrada</b>";
		}
		echo "</span></div>";
}

function channelInvalid() {

	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#f00;\">Desculpe, mas este canal não existe.</span></div>";

}
function isIP($ip){
	$virg = substr_count($ip, ',');
	
	if($virg == "1"){

	    $p = explode(',', $ip);

	    $ip = $p[0];

	}

	$ip = preg_replace('/[^[0-9.]/', '',$ip);
	$ip = substr($ip,0,15);

	return $ip;

}

function help_theme($help_theme) {

	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#fff;\">$help_theme</span></div>";

}

function color($tamanho = 1, $numeros = true) {
	
	$num = '0123456789';
	$retorno = '';
	$caracteres = '';

	if ($numeros) $caracteres .= $num;
	
		$len = strlen($caracteres);

	for ($n = 1; $n <= $tamanho; $n++) {
		$rand = mt_rand(1, $len);
		$retorno .= $caracteres[$rand-1];
	}
	
	return $retorno;
}

$vs_w = color(1, true);

$cor_w = array('33ff33', 'FFFF00', '00FFFF', 'FFCC00', 'CC33CC', '33CCFF', '70DB93', '70DBDB', '2F4F4F', '7093DB', 'A62A2A', '00FF7F');

$color = $cor_w["$vs_w"];

function cod($tamanho = 7, $maiusculas = true, $numeros = true, $simbolos = false) {
	
	$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$num = '1234567890';
	$retorno = '';
	$caracteres = '';

	if ($maiusculas) $caracteres .= $lmai;
	if ($numeros) $caracteres .= $num;
	if ($simbolos) $caracteres .= $simb;

		$len = strlen($caracteres);

	for ($n = 1; $n <= $tamanho; $n++) {

		$rand = mt_rand(1, $len);
		$retorno .= $caracteres[$rand-1];
	}
		return $retorno;

	}

function decrypt($msg,$strf) {

	$strf = str_replace('«¡‡€9!¹~^•', 'a', $msg);
	$strf = str_replace('þø2ë8&²?', 'A', $strf);
	$strf = str_replace(',-ª´¤÷¬', 'e', $strf);
	$strf = str_replace('ç&£°§>', 'E', $strf);
	$strf = str_replace('@æ¹1•º·_:', 'i', $strf);
	$strf = str_replace('()¡§,', 'I', $strf);
	$strf = str_replace('o¢ô1•¿1', 'o', $strf);
	$strf = str_replace('%1w¿Å!', 'O', $strf);
	$strf = str_replace('0;$¹3º', 'u', $strf);
	$strf = str_replace('£²¡`ð_4', 'U', $strf);
	$strf = str_replace('~¡^¹&¬{d§', 'b', $strf);
	$strf = str_replace('©Òþ¤–ÒA_$¹', 'B', $strf);
	$strf = str_replace('4¶•ÇfÛ', 'm', $strf);
	$strf = str_replace('ïX5•B~', 'M', $strf);
	$strf = str_replace('NÆ³÷³', 'p', $strf);
	$strf = str_replace('¾Âæ4Œ', 'P', $strf);
	$strf = str_replace('Ûœrô•', 'j', $strf);
	$strf = str_replace('î!_ðÇ²', 'J', $strf);
	$strf = str_replace('¡ƒ&•…në', 'c', $strf);
	$strf = str_replace('õ_•¶¢öÄ', 'C', $strf);
	$strf = str_replace('¥•Ú$Ã±', 'q', $strf);
	$strf = str_replace('¤¹¢Ëä', 'Q', $strf);
	$strf = str_replace('ýú¥=Õºr', 'k', $strf);
	$strf = str_replace('±Ø¥cð¹ã¬', 'K', $strf);
	$strf = str_replace('»Döü%ë×ü²', 's', $strf);
	$strf = str_replace('TèE¯’˜', 'S', $strf);
	$strf = str_replace('¾çßƒ±†ÿ•', ' ', $strf);

	return $strf;
}

function verif_users($channel,$users_on) {
	
	return $users_on;
}