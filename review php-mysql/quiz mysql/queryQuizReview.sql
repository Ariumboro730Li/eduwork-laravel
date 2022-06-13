SELECT * FROM anggota WHERE ROLE = "admin";
SELECT * FROM anggota WHERE ROLE != "admin";
SELECT * FROM anggota LEFT JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota WHERE peminjaman.id_anggota IS NULL;
SELECT DISTINCT anggota.id_anggota, nama,telp FROM anggota LEFT JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota WHERE peminjaman.id_anggota IS NOT NULL;
SELECT anggota.id_anggota, nama,telp FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota GROUP BY peminjaman.id_anggota having COUNT(*) >1;
SELECT nama,telp,alamat, tgl_pinjam, tgl_kembali FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota;
SELECT nama,telp,alamat, tgl_pinjam, tgl_kembali FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota WHERE MONTH(tgl_kembali) = 6;
SELECT nama,telp,alamat, tgl_pinjam, tgl_kembali FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota WHERE MONTH(tgl_pinjam) = 5;
SELECT nama,telp,alamat, tgl_pinjam, tgl_kembali FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota WHERE MONTH(tgl_pinjam) = 6 && MONTH(tgl_kembali) = 6;
SELECT nama,telp,alamat, tgl_pinjam, tgl_kembali FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota WHERE alamat LIKE '%Bandung%';
SELECT nama,telp,alamat, tgl_pinjam, tgl_kembali FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota WHERE alamat LIKE '%Bandung%' && sex = 'p';
SELECT nama,telp,alamat, tgl_pinjam, tgl_kembali, isbn, qty FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota JOIN detail_peminjaman ON detail_peminjaman.id_pinjam = peminjaman.id_pinjam WHERE qty > 1;
SELECT nama,telp,alamat, tgl_pinjam, tgl_kembali, detail_peminjaman.isbn, qty, harga_pinjam, (qty * harga_pinjam) AS 'total harga' FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota JOIN detail_peminjaman ON detail_peminjaman.id_pinjam = peminjaman.id_pinjam JOIN buku ON buku.isbn = detail_peminjaman.isbn;
SELECT anggota.nama AS 'nama anggota',anggota.telp,anggota.alamat, tgl_pinjam, tgl_kembali, detail_peminjaman.isbn, qty, judul, nama_penerbit, nama_pengarang, katalog.nama AS 'nama katalog' FROM anggota JOIN peminjaman ON peminjaman.id_anggota = anggota.id_anggota JOIN detail_peminjaman ON detail_peminjaman.id_pinjam = peminjaman.id_pinjam JOIN buku ON buku.isbn = detail_peminjaman.isbn JOIN katalog ON katalog.id_katalog = buku.id_katalog JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang;
SELECT katalog.*, buku.judul FROM katalog JOIN buku ON buku.id_katalog = katalog.id_katalog;
SELECT buku.*,nama_penerbit FROM buku LEFT JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit; 
SELECT COUNT( DISTINCT id_pengarang) AS "Jumlah pengarang" FROM buku;
SELECT * FROM buku WHERE harga_pinjam > 10000;
SELECT * FROM buku WHERE id_penerbit = "PN01" && qty_stok > 10;
SELECT * FROM anggota WHERE MONTH(tgl_entry) = 6;