<?php 
	header('Content-type:text/html; charset=utf-8');
	
	session_start();
	$username = $_SESSION['username'];  
	$_SESSION = array();
	session_destroy();
	setcookie('username', '', time()-99);
	setcookie('code', '', time()-99);
	echo "欢迎下次光临, ".$username.'<br>';
	echo "<a href='login.html'>重新登录</a>";
 ?>