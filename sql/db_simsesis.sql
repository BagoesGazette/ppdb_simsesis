-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Jan 2021 pada 07.28
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simsesis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(10, '2020_10_19_162900_create_tb_slide_table', 2),
(11, '2020_10_24_202207_create_tb_tamu_table', 3),
(12, '2020_10_26_044028_create_tb_dismen_table', 4),
(13, '2020_10_27_093039_create_tb_sarpras_table', 5),
(16, '2014_10_12_000000_create_login_table', 6),
(17, '2014_10_12_100000_create_password_resets_table', 6),
(18, '2019_08_19_000000_create_failed_jobs_table', 6),
(19, '2020_10_31_033010_create_tb_pendidikan_table', 7),
(20, '2020_10_31_033910_create_tb_pegawai_table', 7),
(21, '2020_10_31_034425_create_tb_data_diri_table', 7),
(22, '2020_11_02_031018_create_tb_ijazah_table', 8),
(23, '2020_11_02_031046_create_tb_sertifikat_table', 8),
(24, '2020_11_02_031056_create_tb_sk_table', 8),
(25, '2020_11_09_014519_create_siswa_table', 9),
(26, '2020_11_09_021425_create_auth_table', 10),
(27, '2020_11_09_091815_create_data_pribadi_table', 11),
(28, '2020_11_13_022801_create_orangtua_table', 12),
(29, '2020_11_13_123616_create_sekolah_table', 13),
(30, '2020_11_18_195353_create_nilai_table', 14),
(31, '2020_12_02_170408_create_dokumen_table', 15),
(32, '2020_12_03_090821_create_status_table', 16),
(33, '2020_12_20_085842_create_excel_table', 17),
(34, '2020_12_21_044330_create_ekstrakulikuler_table', 18),
(35, '2020_12_23_080742_create_proker_table', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_auth`
--

CREATE TABLE `tb_auth` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','siswa','adminKesiswaan','adminEkstra') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_auth`
--

INSERT INTO `tb_auth` (`id`, `nama_lengkap`, `email`, `username`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Sonata Bagus Adji Pamukti', 'bagoesgazette75@gmail.com', 'bagoesgazette', '$2y$10$kfvJ0ghd4bCFf7uR5pXoC.Cumsuk9J80KjjQHMd2.GdA58Xy.jhDK', '6omZ3PVEOPbNvPu2stZHGBgxsICmf7UvSdqcECxtgnsgZdHIo5zwcUqsYxKU', 'admin', '2020-11-08 20:36:55', '2020-11-08 20:36:55'),
(2, 'Dicka Aringga', 'dicka@gmail.com', 'dicka', '$2y$10$CE8Pd5/.8PUXTlkMnxtuLOs/3eghAS9XW4ZKjdX.m106wQU7DNw/a', '7JIiWqXlZqf6YeebtREkxTtwrm6lan9AtcD94dUa5BIehvzlqcODlNj5hrpN', 'siswa', '2020-11-08 20:49:42', '2020-11-08 20:49:42'),
(3, 'Okzanubra Defrin Ardinta', 'okza@gmail.com', 'defrin', '$2y$10$ePMXiclQXYXnkOoiQv7sOu5W52TJbO7cpJ6QePeNMPxzAnJ500JrW', '5ZzQ7vyza7qoqqpWnX6lIpL4wyB42WJb7Ygc72IPrX3S5zQazRzrrF0q58Ex', 'siswa', '2020-11-09 18:21:20', '2020-11-09 18:21:20'),
(4, 'Eradhika Nanda Lestari', 'eradhika@gmail.com', 'eradhika', '$2y$10$KRqQYqebAfqF6UENwGLLjOknW35d.2lng7FHZPVcD1PugBwn3c.Nq', 'J8vJzMwk3kTNXWJvkGmIy1pWsCbldgLVAMaxVnuqKeC8tdmsbg2eFAkuXnEn', 'siswa', '2020-12-03 22:15:54', '2020-12-03 22:15:54'),
(5, 'SMKN 2 TRENGGALEK', 'kesiswaan@gmail.com', 'semkaneda', '$2y$10$kfvJ0ghd4bCFf7uR5pXoC.Cumsuk9J80KjjQHMd2.GdA58Xy.jhDK', 'Q8HHdUITBOurEq5o2bdGp1waipADBFKGKuQAs00OepvodKx61B13dCwe0QBT', 'adminKesiswaan', '2020-12-19 20:23:09', '2020-12-19 20:23:09'),
(7, 'Admin Ekstrakulikuler', 'ekstrakulikuler@gmail.com', 'ekstrakulikuler', '$2y$10$029ofzInZ3lw3NRZtirWm.X/KBIO57a67S6rGvXU.pvR2qah351dO', 'EinyIdyULxiCdE9uCOVP0BcUsGpiI4hvnIpmxz6Of7WSSu2rdzR12AhKCy20', 'adminEkstra', '2020-12-20 16:06:46', '2020-12-20 16:06:46'),
(8, 'Rega Aji', 'rega@gmail.com', 'rega', '$2y$10$BFa6Nn3rV0Xn01LguSTT2OrYKttO8hFP7IwXU2LjYI6zgqjdpF1xK', 'aUzPHSPVj0nPmeffEmxIgRwTmK8ANz57h7RlQeariEDn0pgRSub5gmZE3cHV', 'siswa', '2020-12-22 12:46:51', '2020-12-22 12:46:51'),
(9, 'Dimas Anton', 'dimas@gmail.com', 'dimas', '$2y$10$ptAJDw64mRAh9VWLWgkGEOgcQua/cIRfTNt7iLG4m6y4Uc2cY6CWa', 'E3ogT2UxSZzRvDIjkEkuAuitNfjTI6SDjNkYYXRI4FRaVCveAiTz8rIzUjOo', 'siswa', '2020-12-23 12:55:46', '2020-12-23 12:55:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dataPribadi`
--

CREATE TABLE `tb_dataPribadi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` decimal(11,0) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prestasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_dataPribadi`
--

INSERT INTO `tb_dataPribadi` (`id`, `nik`, `nisn`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `golongan_darah`, `tinggi_badan`, `berat_badan`, `status`, `penyakit`, `hobi`, `prestasi`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `alamat`, `no_hp`, `jurusan`, `image`, `created_at`, `updated_at`) VALUES
(1, '12312312312', '1231231', 'Dicka Aringga', 'Laki-laki', 'Trenggalek', '2001-02-20', 'Islam', NULL, NULL, NULL, 'Anak Kandung', NULL, NULL, NULL, 'Sumberingin', 'Karangan', 'Trenggalek', 'Jawa Timur', 'Sumberingin', '012839812321', 'Desain Permodelan dan Informasi Bangunan', '1604970473.jpeg', '2020-11-09 18:07:53', '2020-11-09 18:07:53'),
(2, '21312312312', '1231231', 'Eradhika Nanda Lestari', 'Perempuan', 'Trenggalek', '2002-02-22', 'Islam', NULL, NULL, NULL, 'Anak Kandung', NULL, NULL, NULL, 'Ngares', 'Trenggalek', 'Trenggalek', 'Jawa Timur', 'ngares trenggalek', '081999294995', 'Akutansi', '1607064755.jpeg', '2020-12-03 23:52:35', '2020-12-03 23:52:35'),
(4, '12312312312', '1231231', 'Okzanubra Defrin Ardinta', 'Perempuan', 'Trenggalek', '2001-10-26', 'Islam', NULL, NULL, NULL, 'Anak Kandung', NULL, NULL, NULL, 'Karangsoko', 'Trenggalek', 'Trenggalek', 'Jawa Timur', 'Sukobanteng Karangsoko Trenggalek', '081999294995', 'Rekayasa Perangkat Lunak', '1607078210.jpeg', '2020-12-04 03:36:50', '2020-12-04 03:36:50'),
(5, '12321231', '12231221', 'Rega Aji', 'Laki-laki', 'Trenggalek', '2001-12-23', 'Islam', NULL, NULL, NULL, 'Anak Kandung', NULL, NULL, NULL, 'Karangan', 'Karangan', 'Trenggalek', 'Jawa Timur', 'karangan trenggalek', '081999294995', 'Rekayasa Perangkat Lunak', '1608666658.jpeg', '2020-12-22 12:50:58', '2020-12-22 12:50:58'),
(6, '233443213', '1231222', 'Dimas Anton', 'Laki-laki', 'Trenggalek', '2001-02-22', 'Islam', NULL, NULL, NULL, 'Anak Kandung', NULL, NULL, NULL, 'Karangsoko', 'Trenggalek', 'Trenggalek', 'Jawa Timur', 'Trenggalek', '081999294995', 'Rekayasa Perangkat Lunak', '1608753620.jpeg', '2020-12-23 13:00:20', '2020-12-23 13:00:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_diri`
--

CREATE TABLE `tb_data_diri` (
  `id_dataDiri` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nuptk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pegawai` enum('PNS','GTT','PTT','MOU') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_gaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_rumah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suami_istri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_data_diri`
--

INSERT INTO `tb_data_diri` (`id_dataDiri`, `image`, `kode_guru`, `nama_lengkap`, `nip`, `nuptk`, `status_pegawai`, `sumber_gaji`, `wilayah_pembayaran`, `no_ktp`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `alamat_rumah`, `email`, `no_hp`, `suami_istri`, `jumlah_anak`, `created_at`, `updated_at`) VALUES
(1, '1604137966.jpeg', '3123123131231', 'Sonata Bagus', '132891831', '129381928397', 'PNS', 'adsa', 'asd', '9120381238', 'Trenggalek', '2001-05-22', 'Laki-laki', 'Islam', 'asda', 'asd', 'ads@gmail.com', '0128398129381', 'adasd', 0, '2020-10-31 02:52:46', '2020-10-31 02:52:46'),
(2, '1604574597.jpeg', '312312312312', 'adasdasdasdas', '12312312312332', '12739172371231', 'PNS', 'asdasdasd', 'asdasd', '1231231232423', 'asdasd', '2020-05-07', 'Laki-laki', 'islam', 'asd', 'asd', 'asda@gmail.com', '012398129312', 'asdas', 2, '2020-11-05 01:29:29', '2020-11-05 04:09:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dispen`
--

CREATE TABLE `tb_dispen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam1` time NOT NULL,
  `jam2` time NOT NULL,
  `keperluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_dispen`
--

INSERT INTO `tb_dispen` (`id`, `nama_siswa`, `tanggal`, `kelas`, `jurusan`, `jam1`, `jam2`, `keperluan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sonata Bagus', '2020-11-07', 'XII', 'RPL', '08:16:00', '09:16:00', 'Mengambil Raport', '5fa4b29816782.png', '2020-11-05 19:19:04', '2020-11-05 19:19:04'),
(2, 'Sonata Bagus', '2020-11-07', 'XII', 'RPL', '08:16:00', '09:16:00', 'Mengambil Raport', '5fa4b2a36c4ae.png', '2020-11-05 19:19:15', '2020-11-05 19:19:15'),
(3, 'Sonata Bagus', '2020-11-07', 'XII', 'RPL', '08:16:00', '09:16:00', 'Mengambil Raport', '5fa4b2d97300e.png', '2020-11-05 19:20:09', '2020-11-05 19:20:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akta_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lainnya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id`, `nama_siswa`, `akta_lahir`, `skl`, `kk`, `raport`, `lainnya`, `created_at`, `updated_at`) VALUES
(1, 'Dicka Aringga', 'Dicka Aringga.pdf', 'Dicka Aringga.pdf', 'Dicka Aringga.pdf', 'Dicka Aringga.pdf', NULL, '2020-12-03 02:15:03', '2020-12-03 02:15:03'),
(3, 'Eradhika Nanda Lestari', 'Eradhika Nanda Lestari.pdf', 'Eradhika Nanda Lestari.pdf', 'Eradhika Nanda Lestari.pdf', 'Eradhika Nanda Lestari.pdf', NULL, '2020-12-04 00:42:18', '2020-12-04 00:42:18'),
(7, 'Rega Aji', 'Rega Aji.pdf', 'Rega Aji.pdf', 'Rega Aji.pdf', 'Rega Aji.pdf', NULL, '2020-12-22 12:56:56', '2020-12-22 12:56:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ekstrakulikuler`
--

CREATE TABLE `tb_ekstrakulikuler` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ekstrakulikuler` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_ekstrakulikuler`
--

INSERT INTO `tb_ekstrakulikuler` (`id`, `nama_ekstrakulikuler`, `nama_guru`, `created_at`, `updated_at`) VALUES
(1, 'Hadroh', 'Alex S.Pd', '2020-12-20 21:48:30', '2020-12-20 21:48:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_excel`
--

CREATE TABLE `tb_excel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prestasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asal_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_sekolah` enum('negeri','swasta') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_excel`
--

INSERT INTO `tb_excel` (`id`, `nik`, `nisn`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `golongan_darah`, `tinggi_badan`, `berat_badan`, `status`, `penyakit`, `hobi`, `prestasi`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `alamat`, `nomor_hp`, `jurusan`, `nama_ayah`, `status_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `status_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `hp_wali`, `asal_sekolah`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `created_at`, `updated_at`) VALUES
(1, '12312312312', '1231231', 'Dicka Aringga', 'Laki-laki', 'Trenggalek', '2001-02-20', 'Islam', NULL, NULL, NULL, 'Anak Kandung', NULL, NULL, NULL, 'Sumberingin', 'Karangan', 'Trenggalek', 'Jawa Timur', 'Sumberingin', '012839812321', 'Desain Permodelan dan Informasi Bangunan', 'Slamet', 'Masih ada', 'SMA/SEDERAJAT', 'Petani', '< 500rb', 'Siti', 'Masih ada', 'SMA/SEDERAJAT', 'Rumah Tangga', '< 500rb', '081999294995', NULL, NULL, NULL, NULL, NULL, 'Sekolah Menengah Pertama (SMP)', 'SMPN 5 TRENGGALEK', 'negeri', 'Jl.Cokrominoto', '2020-12-20 02:27:13', '2020-12-20 02:27:13'),
(2, '21312312312', '1231231', 'Eradhika Nanda Lestari', 'Perempuan', 'Trenggalek', '2002-02-22', 'Islam', NULL, NULL, NULL, 'Anak Kandung', NULL, NULL, NULL, 'Ngares', 'Trenggalek', 'Trenggalek', 'Jawa Timur', 'ngares trenggalek', '081999294995', 'Akutansi', 'nanang', 'Masih ada', 'SMA/SEDERAJAT', 'Petani', '500-1jt', 'Dwi', 'Masih ada', 'SMA/SEDERAJAT', 'Rumah Tangga', '< 500rb', '081999294995', NULL, NULL, NULL, NULL, NULL, 'Sekolah Menengah Pertama (SMP)', 'SMPN 5 TRENGGALEK', 'negeri', 'JL.Pahlawan', '2020-12-20 02:27:38', '2020-12-20 02:27:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ijazah`
--

CREATE TABLE `tb_ijazah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nuptk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_ijazah`
--

INSERT INTO `tb_ijazah` (`id`, `nuptk`, `ijazah`, `created_at`, `updated_at`) VALUES
(2, '129381928397', '1604369798.pdf', '2020-11-02 19:16:38', '2020-11-02 19:16:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_import`
--

CREATE TABLE `tb_import` (
  `id_import` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `on_duty` time NOT NULL,
  `off_duty` time NOT NULL,
  `clock_in` time NOT NULL,
  `clock_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nuptk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `name`, `nuptk`, `password`, `role`, `remember_token`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pamukti', '232131237812', '$2y$10$zZu22fnN.a8/yq48brdfSeKVE1ZZMpIDf8d9g28iD6nsx1fJbHjPy', 'super-admin', 'JBLoM5JMF9UhPcGTT5FrwG3DrCRwwwaGy0pw0p4TfwcfX0puc33iPdZNVgmR', NULL, '2020-10-28 16:56:24', '2020-10-28 16:56:24'),
(2, 'Sonata', '129381928397', '$2y$10$lWrwPEQEpZ3.S79A/87A/.XTxj0dnle.X5j/i66amvudVCq3KJaKa', 'kepegawaian', 'GvOS0h3vVswlfag4r1Vy5AUmwIgVYaqOx5RNIzkKNGS4zL98m4CNBb3oYmRA', '1604137966.jpeg', '2020-10-28 20:04:35', '2020-10-31 02:52:46'),
(5, 'Pamungkas', '162376127319', '$2y$10$lWrwPEQEpZ3.S79A/87A/.XTxj0dnle.X5j/i66amvudVCq3KJaKa', 'adminPegawai', '9TsO4WpbyLYAQmtPrWJXhILQInjKIY1Gp31ZZV8bDH01cDzLwD2NbPzS6xIH', NULL, '2020-10-29 06:22:36', '2020-10-29 06:34:08'),
(7, 'Rudy', '12739172371231', '$2y$10$FzdeCcDFOByksNVlAEPSG.MjuI4Ys536DYY1Um9g8rhWBP5RY4yLS', 'kepegawaian', '4UcW9F3oiKBEBS1Znf5iFHCrwszWwgo2cUaGzdGXk84BzRYSKxrPKOFFrV9U', '1604574597.jpeg', '2020-10-29 20:33:30', '2020-11-05 04:09:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipa` decimal(10,2) NOT NULL,
  `matematika` decimal(10,2) NOT NULL,
  `bahasa_inggris` decimal(10,2) NOT NULL,
  `bahasa_indonesia` decimal(10,2) NOT NULL,
  `semester` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` decimal(10,2) NOT NULL,
  `rata_rata` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `nama_siswa`, `ipa`, `matematika`, `bahasa_inggris`, `bahasa_indonesia`, `semester`, `jumlah`, `rata_rata`, `created_at`, `updated_at`) VALUES
(1, 'Dicka Aringga', '80.50', '90.00', '98.00', '97.00', 'Semester 1', '365.50', '91.38', '2020-11-21 13:04:28', '2020-11-21 13:04:28'),
(2, 'Dicka Aringga', '90.00', '89.50', '77.60', '75.50', 'Semester 2', '332.60', '83.15', '2020-12-01 04:03:39', '2020-12-01 04:03:39'),
(3, 'Dicka Aringga', '80.90', '88.00', '90.00', '91.00', 'Semester 3', '349.90', '87.48', '2020-12-01 04:15:35', '2020-12-01 04:15:35'),
(5, 'Eradhika Nanda Lestari', '90.50', '80.00', '90.00', '90.00', 'Semester 1', '350.50', '87.63', '2020-12-03 23:54:02', '2020-12-03 23:54:02'),
(6, 'Eradhika Nanda Lestari', '90.00', '90.00', '90.00', '90.00', 'Semester 2', '360.00', '90.00', '2020-12-03 23:54:12', '2020-12-03 23:54:12'),
(7, 'Eradhika Nanda Lestari', '89.00', '90.00', '95.00', '89.00', 'Semester 3', '363.00', '90.75', '2020-12-04 00:35:15', '2020-12-04 00:35:15'),
(8, 'Rega Aji', '80.60', '87.00', '88.00', '83.50', 'Semester 1', '339.10', '84.78', '2020-12-22 12:53:43', '2020-12-22 12:53:43'),
(9, 'Rega Aji', '90.00', '80.60', '80.00', '91.00', 'Semester 2', '341.60', '85.40', '2020-12-22 12:54:39', '2020-12-22 12:54:39'),
(10, 'Rega Aji', '89.00', '75.00', '89.00', '90.30', 'Semester 3', '343.30', '85.83', '2020-12-22 12:55:05', '2020-12-22 12:55:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_orangtua`
--

CREATE TABLE `tb_orangtua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_orangtua`
--

INSERT INTO `tb_orangtua` (`id`, `nama_siswa`, `nama_ayah`, `status_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `status_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `hp_wali`, `created_at`, `updated_at`) VALUES
(1, 'Dicka Aringga', 'Slamet', 'Masih ada', 'SMA/SEDERAJAT', 'Petani', '< 500rb', 'Siti', 'Masih ada', 'SMA/SEDERAJAT', 'Rumah Tangga', '< 500rb', '081999294995', NULL, NULL, NULL, NULL, NULL, '2020-11-13 05:32:19', '2020-11-13 05:32:19'),
(2, 'Eradhika Nanda Lestari', 'nanang', 'Masih ada', 'SMA/SEDERAJAT', 'Petani', '500-1jt', 'Dwi', 'Masih ada', 'SMA/SEDERAJAT', 'Rumah Tangga', '< 500rb', '081999294995', NULL, NULL, NULL, NULL, NULL, '2020-12-03 23:53:27', '2020-12-03 23:53:27'),
(3, 'Rega Aji', 'Harianto', 'Masih ada', 'SMA/SEDERAJAT', 'Pedagang', '< 500rb', 'Sri Utami', 'Masih ada', 'SMA/SEDERAJAT', 'Rumah Tangga', '< 500rb', '081999294995', NULL, NULL, NULL, NULL, NULL, '2020-12-22 12:52:18', '2020-12-22 12:52:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `skpd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_hukum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt` date NOT NULL,
  `masa_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `skpd`, `asal_pegawai`, `status_hukum`, `jenis_pegawai`, `pangkat`, `tmt`, `masa_kerja`, `created_at`, `updated_at`) VALUES
(1, 'asdas', 'asda', 'asd', 'asd', 'A', '2020-10-02', '0 tahun 0 bulan dan 29 hari', '2020-10-31 02:52:46', '2020-10-31 02:52:46'),
(2, 'asdsdasda', 'asd', 'asd', 'asd', 'asd', '2020-08-06', '0 tahun 2 bulan dan 30 hari', '2020-11-05 01:29:29', '2020-11-05 04:09:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` bigint(20) UNSIGNED NOT NULL,
  `jenjang` enum('SMP','SMA','D1','D3','S1','S2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `jenjang`, `nama_sekolah`, `jurusan`, `tahun_lulus`, `created_at`, `updated_at`) VALUES
(1, 'S1', 'asd', 'RPL', '2020', '2020-10-31 02:52:46', '2020-10-31 02:52:46'),
(2, 'S2', 'asdasd', 'adsas', '2020', '2020-11-05 01:29:29', '2020-11-05 03:28:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_proker`
--

CREATE TABLE `tb_proker` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_proker`
--

INSERT INTO `tb_proker` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, '1608712465.pdf', '2020-12-23 01:34:25', '2020-12-23 01:34:25'),
(2, '1608722249.xlsx', '2020-12-23 04:17:29', '2020-12-23 04:17:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sarpras`
--

CREATE TABLE `tb_sarpras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `baik` int(11) NOT NULL,
  `perawatan` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_sarpras`
--

INSERT INTO `tb_sarpras` (`id`, `nama`, `jumlah`, `baik`, `perawatan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ruang Kelas', 36, 30, 6, '1603794257.jpeg', '2020-10-27 02:54:40', '2020-10-27 03:24:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_sekolah` enum('Negeri','Swasta') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id`, `nama_siswa`, `asal_sekolah`, `nama_sekolah`, `status_sekolah`, `alamat_sekolah`, `created_at`, `updated_at`) VALUES
(1, 'Dicka Aringga', 'Sekolah Menengah Pertama (SMP)', 'SMPN 5 TRENGGALEK', 'Negeri', 'Jl.Cokrominoto', '2020-11-13 05:59:36', '2020-11-13 05:59:36'),
(2, 'Eradhika Nanda Lestari', 'Sekolah Menengah Pertama (SMP)', 'SMPN 5 TRENGGALEK', 'Negeri', 'JL.Pahlawan', '2020-12-03 23:53:48', '2020-12-03 23:53:48'),
(3, 'Rega Aji', 'Sekolah Menengah Pertama (SMP)', 'SMPN 1 KARANGAN', 'Negeri', 'Jl.pahlawan karangan trenggalek', '2020-12-22 12:53:06', '2020-12-22 12:53:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sertifikat`
--

CREATE TABLE `tb_sertifikat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nuptk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sk`
--

CREATE TABLE `tb_sk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nuptk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slide`
--

CREATE TABLE `tb_slide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_slide`
--

INSERT INTO `tb_slide` (`id`, `image`, `jenis`, `created_at`, `updated_at`) VALUES
(1, '1603192126.jpeg', 'dashboard', '2020-10-19 14:14:38', '2020-10-20 04:10:42'),
(4, '1603168762.jpeg', 'dashboard', '2020-10-19 21:39:22', '2020-10-20 04:08:22'),
(5, '1603310830.jpeg', 'sarana', '2020-10-21 11:40:09', '2020-10-21 13:07:10'),
(6, '1603310568.jpeg', 'sarana', '2020-10-21 13:02:49', '2020-10-21 13:03:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('proses','diterima','ditolak','belum-lengkap') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`id`, `nama_siswa`, `jurusan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dicka Aringga', 'Desain Permodelan dan Informasi Bangunan', 'diterima', '2020-12-03 02:15:03', '2020-12-20 02:21:06'),
(2, 'Okzanubra Defrin Ardinta', 'Rekayasa Perangkat Lunak', 'belum-lengkap', '2020-12-03 22:15:54', '2020-12-04 03:36:50'),
(3, 'Eradhika Nanda Lestari', 'Akutansi', 'diterima', '2020-12-03 22:15:54', '2020-12-20 02:27:38'),
(5, 'Rega Aji', 'Rekayasa Perangkat Lunak', 'ditolak', '2020-12-22 12:46:52', '2020-12-22 12:59:17'),
(6, 'Dimas Anton', 'Rekayasa Perangkat Lunak', 'belum-lengkap', '2020-12-23 12:55:47', '2020-12-23 13:00:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `bertemu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_tamu`
--

INSERT INTO `tb_tamu` (`id`, `nama`, `alamat`, `telepon`, `instansi`, `keperluan`, `jenis_kelamin`, `bertemu`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sonata Bagus Adji Pamukti', 'Sukobanteng Karangsoko Trenggalek', '081999294995', 'SMKN 2 TRENGGALEK', 'Mengambil Ijazah', 'Laki-laki', 'Husbandi', '5f9497164f61f.png', '2020-10-24 14:05:26', '2020-10-24 14:05:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SEMKANEDA', 'smkn2trenggalek@gmail.com', NULL, '$2y$10$a62mqiv9XJXdeK1.XvnOvOVngmwL26DnLa56UWU.nZeT.uY1/Uud6', 'sXtKeYMyf7TBr5wVdNEI65VpZnj3KYwLqDagnJhFVc68pDUFxA76SuPRaJSc', '2020-10-18 13:14:53', '2020-10-18 13:14:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dataPribadi`
--
ALTER TABLE `tb_dataPribadi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_diri`
--
ALTER TABLE `tb_data_diri`
  ADD PRIMARY KEY (`id_dataDiri`);

--
-- Indeks untuk tabel `tb_dispen`
--
ALTER TABLE `tb_dispen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ekstrakulikuler`
--
ALTER TABLE `tb_ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_excel`
--
ALTER TABLE `tb_excel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ijazah`
--
ALTER TABLE `tb_ijazah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_import`
--
ALTER TABLE `tb_import`
  ADD PRIMARY KEY (`id_import`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_login_nuptk_unique` (`nuptk`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `tb_proker`
--
ALTER TABLE `tb_proker`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sarpras`
--
ALTER TABLE `tb_sarpras`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sk`
--
ALTER TABLE `tb_sk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tb_auth`
--
ALTER TABLE `tb_auth`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_dataPribadi`
--
ALTER TABLE `tb_dataPribadi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_data_diri`
--
ALTER TABLE `tb_data_diri`
  MODIFY `id_dataDiri` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_dispen`
--
ALTER TABLE `tb_dispen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_ekstrakulikuler`
--
ALTER TABLE `tb_ekstrakulikuler`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_excel`
--
ALTER TABLE `tb_excel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_ijazah`
--
ALTER TABLE `tb_ijazah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_import`
--
ALTER TABLE `tb_import`
  MODIFY `id_import` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_proker`
--
ALTER TABLE `tb_proker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_sarpras`
--
ALTER TABLE `tb_sarpras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_sk`
--
ALTER TABLE `tb_sk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
