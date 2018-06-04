<?php

ini_set('display_errors', 0 );
error_reporting(0);

INCLUDE ("./wosh.conexao.class.php");
INCLUDE ("./wosh.funcoes.class.php");

Go();

// channel = $channel = md5($sha1($sha256($md5($sha1(sha1(sha256(md5($pass))))))));

//$ping = `ping 127.0.0.1 && arp -a`;
//echo nl2br($ping);


//echo md5(sha1(md5(sha1(sha1(md5($passr))))));


//@include ("./encrypt.php");

ini_set('date.timezone', "America/Sao_Paulo");
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

$texto = "este é o texto";
$se	   = strpos($texto, 'testo'); // retorna true

$time = "s&atilde;o: ".date('h')." Horas e ".date('i')." minutos";

$data = strftime('%A, %d de %B de %Y', strtotime('today'));

$date = date('Y-m-d');
$now  = date('h:i:s'); 

// create name_channel
// exit channel
// list_users
// goin

$cc = 111;
$IP = '';

session_start();

if (isset($_SESSION['cor'])) {
	$cc = $_SESSION['cor']; 
}

// headers //

header("Cache-Control: store, cache, no-revalidate");
header("Cache-Control: post-check=1, pre-check=1", false);
header("Pragma: cache");

header("X-XSS-Protection: 1");
header('Content-type: text/html; charset=utf-8');

//ob_start(function($b){return preg_replace(['/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'],['>','<','\\1'],$b);});
?>
<!--

PROJECT H4X0R ~ CREATED BY WOSH, TODOS OS DIREITOS RESERVADOS. CÓPIA INDEVIDA SEM AUTORIZAÇÃO É CRIME!
Direitos autorais reservados. Proíbida sua reprodução, exceto com autorização. Lei: 5988 de 1973; 

-->
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index,follow" />
		<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1.0, maximum-scale=1.5, user-scalable=no" />
		<meta name="copyright" content="&copy; H4x0r.pe.hu &ndash; All rights reserved." />
	
			<title>H4x0r ~ Hacking</title>
			<link rel="canonical" href="http://h4x0r.ueuo.com" />
			<style type="text/css">
			#freewha {
				display: none;
			}
			</style>
	
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="shortcut icon" type="favicon" href="./favicon.png">
</head>
<body onLoad="focus();" bgcolor="#<?=$cc;?>">

<script type="text/javascript">
window.onload = function() {
	document.getElementById('_msg_w').focus();
	
};
</script>

<?php

    header("X-XSS-Protection: 0");
    header('Content-type: text/html; charset=utf-8');
    header('X-Powered-By:');

if (isset($_POST['user'])) {
	
	if (!isset($_SESSION['uss'])) {

	$user = strip_tags(trim(filter_input(INPUT_POST, 'user', FILTER_DEFAULT)));
	$user =	preg_replace("/[^a-zA-Z0-9 @çÇ._ãâàáéêéíìîóòôõúùûÁÉÍÓÚÀÈÌÒÙÂÊÎÔÃÕ]/", "", $user);
 
	$_SESSION['uss'] = $user;
	
	$u = $_SESSION['uss'];

	$IP = ip($IP);
	$key_wosh_user = cod(7, true, true);

	//$VERIFY_ACCOUNT = $mysqli->query("SELECT `ip`, `name`, `key_w`, `active` FROM `uss` WHERE ip = '$IP' AND active = '0' ");

	//if ($VERIFY_ACCOUNT->num_rows == true) { }s

	$u1 = utf8_decode($_SESSION['uss']);

	$mysqli->query("INSERT INTO `uss`(`ip`, `name`, `user_key`, `ult_active`, `active`) VALUES ('$IP', '$u1', '$key_wosh_user', '$now', '1')");

	} else {

		session_regenerate_id();
		$u = $_SESSION['uss'];
	
	}

}

if (!isset($_SESSION['uss'])) {
?>

<br/>
<h1 class="title_"><font color="#ff6600">H</font><font color="#00ffa5"> 4</font><font color="#ff00aa"> x</font><font color="008cff"> 0</font><font color="#00ff0c"> r</font><span> &nbsp; DEVELOPED BY: WOSH</span></h1> <br/>

<img src="./wosh4.png" class="img_copy"> 

<div class="cmd">

<span class="info">v. 1.1 (beta) created by: Wosh Karzai Ozzi</span> <br/>
<span class="new">Criptografia <i>end-to-end</i>. Em breve chat privado!</span> <br/>

<form method="post">
	<div class="cmd"><span class="user" style="color:<?="#".$color;?>;"><b>root@h4x0r</b></span><span class="sep"> ~$</span><input class="msg_" type="text" placeholder="Escolha um nickname público" id="_msg_w" autocomplete="off" name="user"></input></div>
</form>

<script type="text/javascript">
window.onload = function() {
	document.getElementById('_msg_w').focus();
};
</script>

</div>
</div> 
</body>
</html>
<?php
	return false;
}

if (isset($_SESSION['channel'])) {
	
	$chan = $_SESSION['channel'];

}

if (isset($_SESSION['uss'])) {
	if ( strlen($_SESSION['uss']) <= 2 ){
		session_destroy();
		session_unset();
		header('Location: ./');
	}
}

// verificar se tem alguem no mesmo ip
// verificar se a conta esta ativa
// 




/*
   $tempo = time();

   $ip = "192.168.1.1";

   $verifica = mysqli_query("SELECT * FROM online WHERE ip ='$ip'");

   $linhas  = mysqli_num_rows($verifica); 

   if($linhas == 0)
   { 
      $acrescenta = mysql_query("INSERT INTO online (ip, tempo) VALUES ('$ip','$tempo')");
   }
   else
   { 

      $ip = mysql_result($verifica,0,'ip');

      $atualiza = mysql_query("UPDATE online SET tempo ='$tempo' WHERE ip='$ip'"); 
   }

   mysql_query("DELETE FROM online WHERE tempo <'$tempo'".-"40");

   $online = $mysqli->query("SELECT * FROM online"); 

   $agora = mysql_num_rows($online);
   
   if ($agora==1) {

      $online = "Apenas você está online neste Canal";
   } else {

      $online = "Temos ".$agora." usuarios on-line.";
   }


*/













if (isset($_POST['msg'])) {

	if (!empty($_POST['msg'])) {

		unset( $_SESSION['notify'] );

		$msg = utf8_decode(strip_tags(trim(filter_input(INPUT_POST, 'msg', FILTER_DEFAULT))));

		// security 

		$sep = substr_count($msg, ' ');
		
		if($sep >= 0){

	    $c = explode(' ', $msg);

	    $action = $c[0];

		if ( $action === "create" ){
			
			if (!empty($c[1])){
			$channel = preg_replace('/[^[:alnum:]0-9_]/', '',$c[1]);
			
			$VERIFY_CHANNEL = $mysqli->query("SELECT NameChannel FROM channels WHERE NameChannel = '$channel' ");
		
			if ($VERIFY_CHANNEL->num_rows == false) {

				$u = utf8_decode($_SESSION['uss']);

				$str = "0123456789";
				$wosh_key = str_shuffle($str);

				$mysqli->query("INSERT INTO `channels`(`Usernames`, `WoshChannelKey`, `NameChannel`) VALUES ('$u', '$wosh_key', '$channel')");

			} else {

				$var = "Desculpe, mas este canal já existe, escolha outro.";
			
			}

		} else {

			$empty_create = "true";

		}
			

		
		} elseif ( $action === "/all" ){

			$all = "1";
		
		} elseif ( $action === "goin" ){

			if (!empty($c[1])){

			if (!isset($chan)) {

			$nameChannel = preg_replace('/[^[:alnum:]0-9_]/', '',$c[1]);

			$VERIFY_CHANNEL = $mysqli->query("SELECT NameChannel FROM channels WHERE NameChannel = '$nameChannel' ");
		
				if ($VERIFY_CHANNEL->num_rows == true){

					$_SESSION['channel'] = utf8_encode($nameChannel);
					$channel_valid = "true";

					$_SESSION['date'] = $date." ".$now;

					$goined = "true";

			$chan1 = utf8_decode($_SESSION['channel']);
			$us = utf8_decode($_SESSION['uss']);

			$mysqli->query("INSERT INTO msgs(`channel`, `name`, `key_msg`, `time`, `msg`, `color`) VALUES ('$chan1', 'sistema', '1111111', '$date $now', '$us entrou no chat $chan1','0ad34d')");


				} else {

					$channel_invalid = "true";
				
			}

			} else {

				$vgt = "true";

			}
		
		} //empty





		} elseif ( $action === "exit" ){


			$chan1 = utf8_decode($_SESSION['channel']);
			$channel_terminate = $chan1;
			$us = utf8_decode($_SESSION['uss']);
			
			$mysqli->query("INSERT INTO msgs(`channel`, `name`, `key_msg`, `time`, `msg`, `color`, `visible`) VALUES ('$chan1', 'sistema', '1111111', '$date $now', '$us saiu','fe0000', '0')");

			unset( $_SESSION['channel'] );
			unset( $_SESSION['date'] );

			$exited = "true";

			header('Location: ./');

		
		} elseif ( $action === "users" ){

			// listar usuários online
		
		} elseif ( $action === "ls" ){

			$ls = "true";
		
		} elseif ( $action === "meuip" ){

			$not = "1";
		
		} elseif ( $action === "theme" ){

			if(isset($c[1])) {
				$coor = $c[1];
			} else {
				$coor = "";
			}
			if ($coor == "Default") {
				session_start();
				unset( $_SESSION['cor'] );
				$_SESSION['cor'] = "111";
				header('Location: ./');

			}
			elseif ($coor == "Dark") {
	
				unset( $_SESSION['cor'] );
				$_SESSION['cor'] = "000";
				header('Location: ./');

			} elseif ($coor == "Light"){

				unset( $_SESSION['cor'] );
				$_SESSION['cor'] = "FFF";
				header('Location: ./');
			
			} elseif ($coor == "Girl"){

				unset( $_SESSION['cor'] );
				$_SESSION['cor'] = "ff00c3";
				header('Location: ./');
			} else {

				$help_theme = "Command not found, tente escrever theme Default / Dark / Light / Girl";

			}

			} elseif ( $action === "/ping" ){

			if (!empty($c[1])) {
				
				$webPing = $c[1];
			
			} else {

				$help_ping = "Ex: /ping 127.0.0.1";

			} 

			} elseif ( $action === "port" ){

			if ( !empty($c[1]) || !empty($c[2]) || !empty($c[3]) ) {
				
				$port = (int) $c[3];
				$ip = $c[1];
				$ip = isIP($ip);
			
			} else {

				$help_port = "Ex: port 127.0.0.1 -p 80";

			} 

			}elseif ( $action === "getip" ){

			if ( !empty($c[1]) || !empty($c[2])) {
				
				$getip = $c[2];
			
			} else {

				$help_getip = "Ex: getip -s google.com";

			}

		} elseif ( $action === "who" ){

			//$nameChannel = $c[1];
			//echo $nameChannel;

		} elseif ( $action === "version" ){

			//$nameChannel = $c[1];
			//echo $nameChannel;

		} elseif ( $action === "clear" ){

			$_SESSION['clear'] = $date." ".$now;

		} elseif ( $action === "quit" ){

			if (isset($chan)) {
				$chan1 = utf8_decode($_SESSION['channel']);
				$channel_terminate = $chan1;
				$us  = utf8_decode($_SESSION['uss']);

				$mysqli->query("INSERT INTO msgs(`channel`, `name`, `key_msg`, `time`, `msg`, `color`, `visible`) VALUES ('$chan1', 'sistema', '1111111', '$date $now', '$us saiu','fe0000', '0')");
			}
			$IP = '';

			$IP = ip($IP);

			$mysqli->query("DELETE FROM `uss` WHERE ip = '$IP' AND name = '$us' ");

			session_destroy();
			session_unset();
			header('Location: ./');

		} elseif ( $action === "date" ){
			
			//echo $data;
			$ddd = "true";
		
		} elseif ( $action === "time" ){
			
			//echo $time;
			$ttt = "true";
		
		} elseif ( $action === "anote" ){

			//$a = $c[1];

		} else {

			$msg = utf8_decode($mysqli->real_escape_string(htmlspecialchars($_POST['msg'])));

			/*
			$cipher = new Cipher('KEY_WOSH_SECRET');


			$_SESSION['ci'] = $cipher;

			$key_ = file_get_contents("http://localhost/h4x0r/private.txt");

			$array = (array) $cipher;
			

			$encryptedtext = $cipher->encrypt("$msg");
			//echo "Texto Encriptado: $encryptedtext<br />";

			$decryptedtext = $cipher->decrypt($encryptedtext);
			//echo "Texto Desencriptado: $decryptedtext<br />";
			*/

			$strf = str_replace('a', '«¡‡€9!¹~^•', $msg);
			$strf = str_replace('A', 'þø2ë8&²?', $strf);
			$strf = str_replace('e', ',-ª´¤÷¬', $strf);
			$strf = str_replace('E', 'ç&£°§>', $strf);
			$strf = str_replace('i', '@æ¹1•º·_:', $strf);
			$strf = str_replace('I', '()¡§,', $strf);
			$strf = str_replace('o', 'o¢ô1•¿1', $strf);
			$strf = str_replace('O', '%1w¿Å!', $strf);
			$strf = str_replace('u', '0;$¹3º', $strf);
			$strf = str_replace('U', '£²¡`ð_4', $strf);
			$strf = str_replace('b', '~¡^¹&¬{d§', $strf);
			$strf = str_replace('B', '©Òþ¤–ÒA_$¹', $strf);
			$strf = str_replace('m', '4¶•ÇfÛ', $strf);
			$strf = str_replace('M', 'ïX5•B~', $strf);
			$strf = str_replace('p', 'NÆ³÷³', $strf);
			$strf = str_replace('P', '¾Âæ4Œ', $strf);
			$strf = str_replace('j', 'Ûœrô•', $strf);
			$strf = str_replace('J', 'î!_ðÇ²', $strf);
			$strf = str_replace('c', '¡ƒ&•…në', $strf);
			$strf = str_replace('C', 'õ_•¶¢öÄ', $strf);
			$strf = str_replace('q', '¥•Ú$Ã±', $strf);
			$strf = str_replace('Q', '¤¹¢Ëä', $strf);
			$strf = str_replace('k', 'ýú¥=Õºr', $strf);
			$strf = str_replace('K', '±Ø¥cð¹ã¬', $strf);
			$strf = str_replace('s', '»Döü%ë×ü²', $strf);
			$strf = str_replace('S', 'TèE¯’˜', $strf);
			$strf = str_replace(' ', '¾çßƒ±†ÿ•', $strf);


			$us = utf8_decode($_SESSION['uss']);
			$cod_msg  = cod(7, true, true);

			if (isset($chan) && !empty($chan)) {

				$chan1 = utf8_decode($chan);
				
				$mysqli->query("INSERT INTO msgs(`channel`, `name`, `key_msg`, `time`, `msg`, `color`, `visible`) VALUES ('$chan1', '$us', '$cod_msg', '$date $now', '$strf','$color', '1')");
			
			} else {

				echo "<div class=\"cmd\"><span class=\"user\" style=\"color:#fff;\"><b> system </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#079;\">você tem que estar em algum canal para mandar mensagens</span></div>";

			}


		}

		}
	
	}

}

if (!isset($chan)) {

	if(isset($nameChannel)) {
		$chann = $nameChannel;
	}

} else {

	$chann = $_SESSION['channel'];

}







?>
<div class="commands">
<?php




if (isset($_SESSION['date'])) {
	
	$dat = $_SESSION['date'];

} else {

	$dat = "9999-99-99 99-99-99";

}








if (isset($_POST['msg'])) {

	$daf = date('Y-m-d h-i-s');

	if (isset($_SESSION['daf'])) {
		
		unset( $_SESSION['daf'] );

		$_SESSION['daf'] = $daf;
	
	} else {

		$_SESSION['daf'] = $daf;

	}

} else {

	$daf = date('Y-m-d h-i-s');

}



if (isset($_SESSION['clear'])) {

	$d = $_SESSION['clear'];
	
	if (isset($chan)) {


	$SQL = $mysqli->query("SELECT `name`, `time`, `msg`, `color` FROM `msgs` WHERE channel = '$chan' AND time >= '$d' AND time <= '$daf' ");
	

	} else {

		$SQL = $mysqli->query("SELECT `name`, `time`, `msg`, `color` FROM `msgs` LIMIT 0");

	}

} else {

	if (isset($chan)) {

		if (isset($daf)) {

			$SQL = $mysqli->query("SELECT `name`, `time`, `msg`, `color` FROM `msgs` WHERE channel = '$chan' AND time >= '$dat' AND time <= '$daf'");

		} else {

			$SQL = $mysqli->query("SELECT `name`, `time`, `msg`, `color` FROM `msgs` WHERE channel = '$chan' AND time >= '$dat' ");

		}
	
	} else {

		$SQL = $mysqli->query("SELECT `name`, `time`, `msg`, `color` FROM `msgs` LIMIT 0");

	}

}

$strf = '';

if ($SQL->num_rows == true) {

while ($show = mysqli_fetch_array($SQL)) {

	$name  = utf8_encode($show['name']);
	$timer = $show['time'];
	$msg   = $show['msg'];

	$msg = decrypt($msg,$strf);

	$msg = utf8_encode($msg);

	$cor = $show['color'];

	echo "<div class=\"cmd\"><span title=\"$timer\" class=\"user\" style=\"color:#$cor;\"><b> $name </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#$cor;\">$msg</span></div>";

	}

}



























?>

<div class="msgss">H4x0r ~ Hacking Chat [Notify]</div>

<div id="msg"></div>

<script type="text/Javascript" src="./script-main.js"></script>

<script type="text/Javascript">setInterval("wosh()", 900)</script>

<script type="text/javascript" src="./ajax-jquery-1.6.11.js"></script>
<?php

if (isset($channel_invalid)) {

	channelInvalid();

}

if (isset($channel_valid)) {
	
	$chann = utf8_encode($chann);
	channelValid($chann);

}

if (isset($port)) {
	scanPort($ip,$port);
}

if (isset($getip)) {

	gettip($getip);

}
if (isset($ls)) {

	if (isset($chan) && !empty($chan)) {

		local($chan);

	} else {
		
		local1();
	
	} 
}

if (isset($var)) {
	channelTry($var);
}

if (isset($help_theme)) {
	help_theme($help_theme);
}

if (isset($not)) {
	GetIP();
}

if (isset($empty_create)) {
	emptyCreate();
}

if (isset($all)) {
	allCmds();
}

if (isset($help_ping)) {
	help_ping($help_ping);
}

if (isset($vgt)) {
	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span>";
	echo "<span class=\"mss\" style=\"color:#00a9ff;\">Você precisa sair primeiro, para entrar em algum Canal. Digite exit para sair do Canal atual</span></div>";
}

if (isset($ddd)) {
	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span>";
	echo "<span class=\"mss\" style=\"color:#00a9ff;\">" . $data . "</span></div>";
}
if (isset($ttt)) {
	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span>";
	echo "<span class=\"mss\" style=\"color:#00a9ff;\">" . $time . "</span></div>";
}
if (isset($exited)) {
	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span>";
	echo "<span class=\"mss\" style=\"color:#00a9ff;\">Você saiu do Canal <b style=\"color:#26e500;\">[$channel_terminate]</b></span></div>";
}
if (isset($webPing)) {

 	echo "<div class=\"cmd\"><span class=\"sistema\"><b> sistema </b></span> <span class=\"sep\"> ~$ </span> <span class=\"mss\" style=\"color:#00a9ff;\">";


	  $conectado = @ fsockopen($webPing, 80, $numeroDoErro, $stringDoErro, 10); // Este último é o timeout, em segundos
	  
	  if ($conectado) {
	    
	    print 'A máquina ou site está <b style="color:#00ff04;">ONLINE</b> =/';
	  
	  } else {
	    
	    print 'A máquina ou site está <b style="color:#f00;">OFFLINE</b> =)';
	  
	  }

	echo "</span></div>";
}
?>


<form name="frmMsg" method="POST">
	<div class="cmd"><span class="user" style="color:<?="#".$color;?>;"><b><?=$_SESSION['uss'];?></b></span><span class="sep"> ~$</span><input class="msg_" type="text" placeholder="escreva /all para saber todos os comandos" id="_msg_w" autocomplete="off" name="msg"></input></div>
</form>
</div>

<script>
setInterval("scroll()", 100);
</script>

<script type="text/javascript" src="./notify.js"></script>
<script type="text/Javascript">setInterval("notify()", 1000)</script>

</body>
</html>