CREATE TABLE `users` (
  `id` bigint PRIMARY KEY NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `level` tinyint NOT NULL DEFAULT 0,
  `two_factor_secret` text,
  `two_factor_recovery_codes` text,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint DEFAULT NULL,
  `profile_photo_path` text,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `kategori` (
  `id_kategori` int PRIMARY KEY NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `produk` (
  `id_produk` int PRIMARY KEY NOT NULL,
  `id_kategori` int NOT NULL,
  `kode_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `harga_beli` int NOT NULL,
  `diskon` tinyint NOT NULL DEFAULT 0,
  `harga_jual` int NOT NULL,
  `stok` int NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `member` (
  `id_member` int PRIMARY KEY NOT NULL,
  `kode_member` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text,
  `telepon` varchar(255) NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `supplier` (
  `id_supplier` int PRIMARY KEY NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text,
  `telepon` varchar(255) NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int PRIMARY KEY NOT NULL,
  `deskripsi` text NOT NULL,
  `nominal` int NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `pembelian` (
  `id_pembelian` int PRIMARY KEY NOT NULL,
  `id_supplier` int NOT NULL,
  `total_item` int NOT NULL,
  `total_harga` int NOT NULL,
  `diskon` tinyint NOT NULL DEFAULT 0,
  `bayar` int NOT NULL DEFAULT 0,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `pembelian_detail` (
  `id_pembelian_detail` int PRIMARY KEY NOT NULL,
  `id_pembelian` int NOT NULL,
  `id_produk` int NOT NULL,
  `harga_beli` int NOT NULL,
  `jumlah` int NOT NULL,
  `subtotal` int NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `penjualan` (
  `id_penjualan` int PRIMARY KEY NOT NULL,
  `id_member` int DEFAULT NULL,
  `total_item` int NOT NULL,
  `total_harga` int NOT NULL,
  `diskon` tinyint NOT NULL DEFAULT 0,
  `bayar` int NOT NULL DEFAULT 0,
  `diterima` int NOT NULL DEFAULT 0,
  `id_user` int NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `penjualan_detail` (
  `id_penjualan_detail` int PRIMARY KEY NOT NULL,
  `id_penjualan` int NOT NULL,
  `id_produk` int NOT NULL,
  `harga_jual` int NOT NULL,
  `jumlah` int NOT NULL,
  `diskon` tinyint NOT NULL DEFAULT 0,
  `subtotal` int NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `setting` (
  `id_setting` int PRIMARY KEY NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat` text,
  `telepon` varchar(255) NOT NULL,
  `tipe_nota` tinyint NOT NULL,
  `diskon` smallint NOT NULL DEFAULT 0,
  `path_logo` varchar(255) NOT NULL,
  `path_kartu_member` varchar(255) NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

ALTER TABLE `produk` ADD FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

ALTER TABLE `pembelian` ADD FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

ALTER TABLE `pembelian_detail` ADD FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`);

ALTER TABLE `pembelian_detail` ADD FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

ALTER TABLE `penjualan` ADD FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

ALTER TABLE `penjualan_detail` ADD FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id_penjualan`);

ALTER TABLE `penjualan_detail` ADD FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
