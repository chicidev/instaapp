<?php  
	error_reporting(E_ALL^E_NOTICE);
	include "konek.php";
     
	$id_posting 	= $_GET['id_posting']; // deklarasi vasriable id dengan nilai yang mengacu pada data yang di pilih
	$conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db( $conn, "instaapp");
	$query_select = mysqli_query($conn,"select * from postingan where id_posting = '$id_posting'"); // menyeleksi gambar untuk menghapus file gambar pada folder dir_gambar
	//$fetch_select = mysqli_fetch_array($query_select);
	//menghapus gambar pada direktori dir_gamabr
	$dir = "dir_gambar/$fetch_select[image]"; // definisi untuk menentukan folder gambar dengan nama file yang akan dihapus
	//unlink($dir); // untuk menghapus file gambar.

	//menghapus data gambar yang berada di database
	$query_hapus = mysqli_query($conn,"delete from instaapp where id_posting ='$id_posting'");

	if($query_hapus){ // jika query berhasil
		?>
			<script>
				alert("Hapus Berhasil !!!");
				location.href = "home.php";
			</script>
		<?php
	} 

?>