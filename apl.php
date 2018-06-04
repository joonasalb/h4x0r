<?php  
session_start();

if (isset($_SESSION['notify'])) {
	
	echo "(" . $_SESSION['notify'] . ")";

} else {

	echo "";

}