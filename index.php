<?php 
	header('Content-type:text/html; charset=utf-8');
	session_start();
 
	if (isset($_COOKIE['username'])) {
		$_SESSION['username'] = $_COOKIE['username'];
		$_SESSION['islogin'] = 1;
	}
	if (isset($_SESSION['islogin'])) {
		echo "你好! ".$_SESSION['username'].' ,欢迎来到个人中心!<br>';
        header("location:https://darlinginthefranxx/%E7%AC%AC%E4%B8%80%E8%AF%9D.html");
		echo "<a href='logout.php'>注销</a>";
	} else {
		echo "您还没有登录,请<a href='login.html'>登录</a>";
	}
 ?>