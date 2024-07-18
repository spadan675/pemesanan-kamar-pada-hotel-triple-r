
<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="styleadmin.css">
</head>
<body>
	

<?php
// memeriksa formulir telah dikirim ke dengan metode POST
if (isset($_POST['proseslogin'])){	
			// MENGAMBIL DATA PENGGUNA
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	// 
	if($user=="dina" AND $pass=="123"){
		$_SESSION['akses']=$user;
		header("location:dashboard.php");
	}
	else if($user=="tika" AND $pass=="456"){
		$_SESSION['akses']=$user;
		header("location:dashboard.php");
	}
	else if($user=="riza" AND $pass=="789"){
		$_SESSION['akses']=$user;
		header("location:dashboard.php");
	}
	else{
		// MENAMPILKAN PESAN KESALAHAN
		echo"
		<script>
		alert('Maaf,Username dan Password Salah');
		window.location.href='index.php';
		</script>
	";
	}
	}
	else{
		?><br>
		<br>
		<br>
<div class="hero">
		<h1>SELAMAT DATANG DI HOTEL TRIPLE R</h1></div>
<div class="login-box">
	
<h1>Login Here</h1>
<form method="post" action="">
<p>Username</p>
	<input type="text" name="user" placeholder="Masukkan Username" autocomplete="off" autofocus>
<p>Password</p>
<input type="password" name="pass" placeholder="Masukkan Password" autocomplete="off">
		<button type="submit" name="proseslogin">LOGIN</button></center>
			</form>
			</div>
	<?php
	}
	?>
</body>
</html>