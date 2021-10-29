<?php
include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title></title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
<h1>Belajar Menampilkan Database Mahasiswa</h1>
 
<p>Menampilkan isi database Mahasiswa </p>
 
<a href="validasi.php">Input Data Mahasiswa Baru</a><br>
 
 
<table class="table table-bordered table-striped table-hover">
 
<tr>
  <th>nama</th>
  <th>email</th>
  <th>genderr</th>
  <th>comment</th>
  <th>website</th>
</tr>
 
<?php
 

$query ="select * from data";
$hasil = mysqli_query($koneksi, $query);

 
while($data = mysqli_fetch_array($hasil))
{
 
  echo "<tr>";
  echo "<td>$data[nama]</td>";
  echo "<td>$data[email]</td>";
  echo "<td>$data[gender]</td>";
  echo "<td>$data[comment]</td>";
  echo "<td>$data[website]</td>";
  echo "</tr>";
}
?>
  </table>
  </body>
</html>