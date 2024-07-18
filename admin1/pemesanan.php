<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h3>Hotel Triple R</h3>
        </div>
        <ul class="sidebar-menu">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="pemesanan.php">Laporan Pemesanan</a></li>
            <li><a href="logout.php">keluar</a></li>
        </ul>
    </div>
    <div class="main-content">
       <center><H2> LAPORAN PEMESANAN KAMAR PADA HOTEL TRIPLE R</H2></center>
    <ul class="box-info">
				
				<center>
<table border="1" cellpadding="10" width="1000" >
<tr>
<th bgcolor="brown">No</th>
        <th width="500"height="50"bgcolor="brown">namapemesan</th>
        <th width="500"height="50"bgcolor="brown">email</th>
        <th width="500"height="50"bgcolor="brown">no_handphone</th>
        <th width="500"height="50"bgcolor="brown">Jumlah kamar</th>
		<th width="500"height="50"bgcolor="brown">Tipe kamar</th>
        <th width="500"height="50"bgcolor="brown">Nama Tamu</th>
        <th width="500"height="50"bgcolor="brown">Tanggal Check_in</th> 
		<th width="500"height="50"bgcolor="brown">Tanggal Check_out</th> 
        <th colspan="2" width="20" bgcolor="brown">Aksi</th>
    </tr>

    <?php
    include "koneksii.php";

    $no=1;
    $ambildata = mysqli_query($con,"select * from inihotel");
    while($tampil = mysqli_fetch_array($ambildata)){

        $warna=($no%2==1)?"white":"white";
        echo "
        <tr bgcolor='$warna'  >
            <td><center>$no</td>
            <td>$tampil[namapemesan]</td>
            <td>$tampil[email]</td>
            <td>$tampil[no_handphone]</td>
            <td><center>$tampil[jumlahkamar]</td>
			 <td><center>$tampil[tipekamar]</td>
			 <td>$tampil[namatamu]</td>
			 	 <td>$tampil[tanggalcheck_in]</td>
			   <td>$tampil[tanggalcheck_out]</td>
            
            
            
	         
            <td><a href='hapus.php?kode=$tampil[tanggalcheck_in]'> Hapus </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table></center>	



					
				</li>
			</ul>

    </div>
</body>
</html>