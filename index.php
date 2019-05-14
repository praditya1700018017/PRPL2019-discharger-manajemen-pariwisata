
<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['username']) || 
    ( isset($_SESSION['username']) && $_SESSION['username'] != 'admin' ) ) {
	header('location:../login');
	exit();
}else{
	header('location:home.php');
}
?>