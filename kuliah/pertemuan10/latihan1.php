<?php
//Koneksis ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_1910651107');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data kedalam array
// $row = mysqli_fetch_row($result); untuk menampilkan  numerik
// $row = mysqli_fetch_assoc($result); untuk menampilkan  assosiative(berupa nama folder)
// $row = mysqli_fetch_array($result); untuk keudanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
//var_dump($rows); menampilkan hasil sementara

//  Tampung ke variable mahasiswa
$mahasiswa = $rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
      <td><?= $m['nrp']; ?></td>
      <td><?= $m['nama']; ?></td>
      <td><?= $m['email']; ?></td>
      <td><?= $m['jurusan']; ?></td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>