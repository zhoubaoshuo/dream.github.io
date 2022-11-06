<?php 
	header('Content-type:text/html; charset=utf-8');
	session_start();
 
	if (isset($_POST['login'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if (($username == '') || ($password == '')) {
			header('refresh:3; url=login.html');
			echo "用户名或密码不能为空,系统将在3秒后跳转到登录界面,请重新填写登录信息!";
			exit;
		} elseif (($username != 'zhoubaoshuo') || ($password != '98188729Aa')) {
			header('refresh:3; url=login.html');
			echo "用户名或密码错误,系统将在3秒后跳转到登录界面,请重新填写登录信息!";
			exit;
		} elseif (($username = 'zhoubaoshuo') && ($password = '98188729Aa')) {
			$_SESSION['username'] = $username;
			$_SESSION['islogin'] = 1;
			if ($_POST['remember'] == "yes") {
				setcookie('username', $username, time()+7*24*60*60);
				setcookie('code', md5($username.md5($password)), time()+7*24*60*60);
			} else {
				setcookie('username', '', time()-999);
				setcookie('code', '', time()-999);
			}
			header('location:index.php');
		}
	}
 ?>