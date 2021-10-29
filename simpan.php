<?php
include 'koneksi.php';
 

$nama                = $_POST['nama'];
$email               = $_POST['email'];
$gender             = $_POST['gender'];
$comment             = $_POST['comment'];
$website             = $_POST['website'];
 
if($nama=="")
{
  echo "<script>alert('nama Belum diisi');history.go(-1);</script>";
}
 
if($email=="")
{
  echo "<script>alert('email Belum diisi');history.go(-1);</script>";
}
 
if($gender=="")
{
  echo "<script>alert('gender Belum diisi');history.go(-1);</script>";
}
  else
{
 

   $pilih="select * from data where nama='$nama'";
   $cek=mysqli_query($koneksi, $pilih);

 

   $query="INSERT INTO data SET  nama='$nama',email='$email',gender='$gender',comment='$comment',website='$website'";
mysqli_query($koneksi, $query);
 

 
echo "<script>alert('Data yang anda Input sukses');window.location='data_validasi.php'</script>";
    }
?>