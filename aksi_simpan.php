<?php  
	error_reporting(E_ALL^E_NOTICE);
	include "konek.php"; // menyertaakan file koneksi

	// mengeksekusi form upload

	// deklarasi variabel
	$caption 	= $_POST['caption']; // deklarasi variabel yang mendefinisikan method  post nama

	if (isset($_POST['simpan'])) { //jika tombol simpan di klik

		//deklarasi variabel untuk file yang di upload
		$temp 	= $_FILES['image']['tmp_name']; // untuk menyimpn sementara file yang di upload 
		$format = $_FILES['image']['type']; // untuk menentukan format gambar

		//maksud $_FILES['gammbar'] adalag mengambil nilai pada form dengan input yang bernama gambar tadi

		//membuat validasi file yang di upload gambar atau bukan
		if ($format == "image/jpg" || $format == "image/jpeg" || $format == "image/png" || $format == "image/JPG") {
				
				$image 	= $_FILES['image']['name']; // definisi variabel nama gambar
				$dir 	= "dir_gambar/$image"; // definisi direktori atau folder tempat untuk disimpan gambar
                $conn=mysqli_connect("localhost","root","");
				$db=mysqli_select_db( $conn, "instaapp");
				$query_tambah = mysqli_query($conn,"insert into postingan values('','$caption','$image','')"); // karna field id_gambar saya buat Auto Increment. intinya nanti field tersebut akan terisi otomatis

				if($query_tambah){ //jika query benar maka
					move_uploaded_file($temp, $dir); //memindahkan file yang disimpan sementara tadi ke dalam direkori yang sudah kita buat.
					?>
						<script>
							alert("berhasil di simpan");
							location.href="home.php";
						</script>
					<?php
				}

		} else { //pengecualian jika format gambar bukan salah satu yang sudah di validasi
			echo '<script>alert("maaf format file harus : *.jpg  *.jpeg  *.png")</script>';
		}
	}

?>