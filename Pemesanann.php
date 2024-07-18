<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>pemesanan</title>
	<link rel="stylesheet" href="stylepemesanan.css">
</head>
<body>
	

	</head>
	<body>
		
	<div class="home">
	<h1>HOTEL TRIPLE R</h1>
	
<div class="nav">
<ul id="list">
<li><a href="index.html">HOME</a></li>
<li><a href="kamar.html">KAMAR</a></li>
<li><a href="fasilitas.html">FASILITAS</a></li>
</ul>
<div class="box">
<img src="images/deluxe.jpg"width="98%"height="400px"> 	

<center><table cellspacing="0"width="75%" >
<tr>

	<td>TANGGAL CHECK IN</td>
	<td>TANGGAL CHECK OUT</td>
	<td>JUMLAH KAMAR</td>
</tr>
<form action="aksiipesan.php" method="POST">
<tr>
<td><input type="date" name="tanggalcheck_in"></td>
<td><input type="date" name="tanggalcheck_out"></td>
<td><input type="number" name="jumlahkamar"></td>
</table><br>

	<table cellspacing="10" width="70%">
		<tr>
			<td>NAMA PEMESANAN</td>
			<td><input type="text" name="namapemesan"></td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td><input type="Email" name="email"></td>
		</tr>
		<tr>
			<td>NO HANDPHONE</td>
			<td><input type="text" name="no_handphone"></td>
		</tr>
		<tr>
			<td>NAMA TAMU</td>
			<td><input type="text" name="nama_tamu"></td>
		</tr>
		<tr>
			<td>TIPE KAMAR</td>
			<td><select name="tipe_kamar">
	<option value="Superior">SUPERIOR</option>
	<option value="Deluxe">DELUXE</option></select></td>
		</tr>
		</table>
			<br><button type="submit" name="btn">KONFIRMASI PEMESANAN</button></center>
			</div>
		
</form>
	</div>
	</body>
	</html>