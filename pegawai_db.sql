-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2025 pada 19.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `deskripsi_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`, `deskripsi_jabatan`) VALUES
(4, 'Teknisi ', 'Melakukan peretasan'),
(5, 'Spesialist', 'Memasang, mengatur, memantau, dan memelihara perangkat keras dan lunak yang digunakan untuk operasional perusahaan'),
(7, 'Deputy General Manager', '-Memimpin dan mengkoordinasi,Mengawasi operasional,Pengembangan bisnis'),
(8, 'General Manager', 'pengelolaan operasional harian, penyusunan dan implementasi strategi bisnis'),
(9, 'Staff Officer', 'Mengelola administrasi harian, seperti pengarsipan dan pemrosesan data'),
(10, 'Manager', 'Mendelegasikan tugas kepada anggota tim,Mengatur struktur dan prosedur kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-11-06-162658', 'App\\Database\\Migrations\\CreateJabatanTable', 'default', 'App', 1762446931, 1),
(2, '2025-11-06-162725', 'App\\Database\\Migrations\\CreatePegawaiTable', 'default', 'App', 1762446932, 1),
(3, '2025-11-10-152436', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1762789423, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jabatan_id` int(100) UNSIGNED NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama_pegawai`, `jabatan_id`, `alamat`, `telepon`) VALUES
(3, 'Djanoe wahyudi', 7, 'Halim', '08978676756'),
(4, 'Muhammad Syaiful ', 5, 'Bandung', '089578674'),
(5, 'Riyadi Wicaksono', 5, 'Halim', '08978937423'),
(6, 'Suerci', 8, 'Halim', '08937846783'),
(7, 'Zandi ramadan', 9, 'Bandung', '082973892'),
(8, 'Brahmawisnu', 5, 'Bandung', '088397836843'),
(9, 'Eko buddy', 10, 'Halim', '0892368612'),
(10, 'Rizal rabi sitomorang', 4, 'Bandung', '0847386234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`) VALUES
(1, 'alukar', 'Jhon doe', 'admin@hpi.com', '$2y$10$weZJCgtaSD96.QADMxXwteedrnzPr0tYyha7bZQ36vhQB2fXY8VNS'),
(2, 'alukar', 'Jhon doe', 'adminalukar@hpi.com', '$2y$10$k9xokZno3CjPhGQezjY2N.i0.xeoY2hQo81JGp3UQvZYRbGPNO1g.'),
(3, 'martis', 'Jhon doe', 'martis@hpi.com', '$2y$10$6efbF5AjBqbCp.19I/WlruRJdp6LJJn2yVSohT5ic9vU5UEcuXHsm'),
(4, 'wangrenhua@kci.co.id', 'wangrenhua', 'wangrenhua@hpi.com', '$2y$10$NUwFewiDD57vAkgrRdAl9eEoqdvhuvimpKKlx5TA1W/JonYGHmX2i'),
(5, 'rabby', 'rabbykalimasada', 'rabi@trading.com', '$2y$10$3DQxQ1P1z0nt6GEVFA0AjeiTYqBuYNogySWhwXXZVEUJsKV9rqbK6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai_jabatan_id_foreign` (`jabatan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
