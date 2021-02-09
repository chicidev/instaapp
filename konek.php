<?php
$host='localhost'; 
$user='root';
$password='';
$db = 'instaapp';
//lakukan koneksi ke MySQL
$konek = mysqli_connect($host,$user,$password,$db);
//Pilih database tempat tabel akan dibuat
//date_default_timezone_set("Asia/Jakarta");
//mysqli_close($konek);

/* if($konek){
     
     echo"berhasil";
 }
else{
    echo"gagal";
}
*/
?>