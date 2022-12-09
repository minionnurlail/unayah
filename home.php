<?php 
session_start();
if(isset($_SESSION['nama']) && isset($_SESSION['level'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}
?>
<?php if($_SESSION['level']=='2'){
	echo "<center><b>WELHOME ADMIN</b></center><br>";
	?>
<center><a href="tampiluser.php">Menu User</a></center>
<center><a href="tampilbarang.php">Menu Barang</a></center>
<center><a href="tampilkategori.php">Menu kategori</a></center>
<center><a href="tampiltransaksi1.php">Menu Transaksi</a></center>
<center><a href="logout.php">Log Out</a></center>
<?php }else if($_SESSION['level']=='3'){ 
echo "<center><b>WELHOME USER</b></center><br>";
?>
<center><a href="tampiltransaksi">Menu Transaksi</a></center>
<center><a href="logout.php">Log Out</a></center>
<?php } ?>



