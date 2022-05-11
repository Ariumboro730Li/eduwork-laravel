<?php
include_once("connect.php");

$query = "SELECT peminjaman.id_pinjam, peminjaman.id_anggota, peminjaman.tgl_pinjam, peminjaman.tgl_kembali, anggota.nama, anggota.username, anggota.password, anggota.sex, anggota.telp, anggota.alamat, anggota.email, anggota.tgl_entry, anggota.role, detail_peminjaman.qty ,buku.judul FROM peminjaman as peminjaman LEFT JOIN anggota as anggota ON peminjaman.id_anggota = anggota.id_anggota left JOIN detail_peminjaman as detail_peminjaman ON peminjaman.id_pinjam = detail_peminjaman.id_pinjam LEFT JOIN buku as buku ON detail_peminjaman.isbn = buku.isbn;";
$peminjam = mysqli_query($mysqli, $query);
?>

<html>

<head>
    <title> Home Pinjam </title>
</head>

<body>

<center class='bg-dark'>
    <a class='btn btn-dark' href="index.php">Buku</a> |
    <a class='btn btn-dark' href="index_penerbit.php">Penerbit</a> |
    <a class='btn btn-dark' href="index_pengarang.php">Pengarang</a> |
    <a class='btn btn-dark' href="index_katalog.php">Katalog</a> |
    <a class='btn btn-dark' href="index_pinjam.php">Pinjam</a>
    <hr>
</center>


    <table class="table" width='80%' border=1>
        <tr>
            <th>Nama Peminjam</th>
            <th>Buku </th>
            <th>Tanggal Pinjam </th>
            <th>Tanggal Kembali </th>
            <th>Aksi </th>
        </tr>
        <?php
        while ($peminjam_data = mysqli_fetch_array($peminjam)) :
        ?>
            <tr>
                <td><?= $peminjam_data['nama'] ?></td>
                <td><?= $peminjam_data['judul'] ?></td>
                <td><?= $peminjam_data['tgl_pinjam'] ?></td>
                <td><?= $peminjam_data['tgl_kembali'] ?></td>
                <td>
                    <a class="btn btn-danger" href="delete_pinjam.php?id_pinjam=<?= $peminjam_data['id_pinjam'] ?>">Hapus</a>
                </td>
            </tr>
        <?php
        endwhile;
        ?>
    </table>

</body>

</html>