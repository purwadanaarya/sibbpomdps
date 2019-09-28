-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 07:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpom_sibbpomdps`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id_data` int(11) NOT NULL,
  `nama_konsumen` varchar(50) NOT NULL,
  `id_sarana` int(11) NOT NULL,
  `tgl_konsultasi` varchar(20) NOT NULL,
  `id_jeniskonsultasi` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_detail_kategori` int(11) NOT NULL,
  `detail_produk` text NOT NULL,
  `tgl_surat_terima` varchar(12) DEFAULT NULL,
  `tindak_lanjut` varchar(32) DEFAULT NULL,
  `petugas_1` varchar(1) DEFAULT NULL,
  `petugas_2` varchar(11) DEFAULT NULL,
  `tanggal_audit` varchar(12) DEFAULT NULL,
  `tanggal_audit_selesai` varchar(15) NOT NULL,
  `batas_waktu_perbaikan` varchar(12) DEFAULT NULL,
  `tanggal_perbaikan` varchar(12) DEFAULT NULL,
  `keterangan` text,
  `terbit_rekomendasi` varchar(12) DEFAULT NULL,
  `status` varchar(16) NOT NULL,
  `status_dokumen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id_data`, `nama_konsumen`, `id_sarana`, `tgl_konsultasi`, `id_jeniskonsultasi`, `id_kategori`, `id_detail_kategori`, `detail_produk`, `tgl_surat_terima`, `tindak_lanjut`, `petugas_1`, `petugas_2`, `tanggal_audit`, `tanggal_audit_selesai`, `batas_waktu_perbaikan`, `tanggal_perbaikan`, `keterangan`, `terbit_rekomendasi`, `status`, `status_dokumen`) VALUES
(1, 'Varash Indonesia', 1, '2019-09-23 01:09', 4, 3, 7, 'Cairan Obat Luar dan Rajangan', '2018-12-18', 'Audit', '9', '10', '2019-01-03', '2019-01-03', '2019-02-18', '2019-01-14', 'Lengkap', '2019-01-15', 'PSB', 'Terbit'),
(2, 'Herdina', 2, '2019-09-23 02:09', 4, 1, 24, 'Minuman Beralkohol Golongan B', '2019-01-08', 'Audit', '8', '9', '2019-01-14', '', '2019-02-27', '2019-06-10', 'Perpanjangan sampai 17 April 2019.\r\nTanggal perbaikan 22 Februari, 18 Maret, 29 April, 23 April dan 10 Juni 2019.\r\nLengkap', '2019-06-10', 'PSB', 'Terbit'),
(3, 'My Own Farm', 3, '2019-09-23 02:09', 4, 3, 5, 'Cairan Obat Luar', '2019-07-16', 'Audit', '', '17', '2019-08-01', '', '2019-09-11', '2019-09-10', '29 Agustus dan 10 September 2019.\r\nLengkap.', '2019-09-10', 'PSB', 'Terbit'),
(4, 'Lab Medika', 4, '2019-09-23 02:09', 4, 5, 27, 'Obat Lainnya', '2019-01-16', 'Audit', '9', '13', '2019-01-20', '', '', '', 'Lengkap', '2019-02-22', 'PSB', 'Terbit'),
(5, 'Bali Pork Ribs', 5, '2019-09-23 03:09', 4, 1, 18, 'Daging Olahan', '2018-01-09', 'Audit', '2', '21', '2018-01-12', '2018-01-12', '2018-02-02', '2018-01-29', 'Lengkap.', '2018-01-30', 'PSB', 'Terbit'),
(6, 'Arya', 6, '', 4, 5, 27, 'Obat', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_jenis_sarana`
--

CREATE TABLE `tb_detail_jenis_sarana` (
  `id_detail_jenis_sarana` int(11) NOT NULL,
  `id_jenis_sarana` int(11) NOT NULL,
  `detail_jenis_sarana` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_jenis_sarana`
--

INSERT INTO `tb_detail_jenis_sarana` (`id_detail_jenis_sarana`, `id_jenis_sarana`, `detail_jenis_sarana`) VALUES
(1, 1, 'Produksi'),
(2, 1, 'Distribusi'),
(3, 2, 'Produksi'),
(4, 2, 'Distribusi'),
(5, 3, 'Produksi'),
(6, 3, 'Distribusi'),
(7, 4, 'Distribusi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kategori`
--

CREATE TABLE `tb_detail_kategori` (
  `id_detail_kategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `detail_kategori` text NOT NULL,
  `status_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_kategori`
--

INSERT INTO `tb_detail_kategori` (`id_detail_kategori`, `id_kategori`, `detail_kategori`, `status_detail`) VALUES
(3, 2, 'Golongan A', 1),
(4, 2, 'Golongan B', 1),
(5, 3, 'UMOT', 1),
(6, 3, 'UKOT 1', 1),
(7, 3, 'UKOT 2', 1),
(8, 3, 'IOT', 1),
(9, 4, 'PBF Cabang', 1),
(10, 4, 'PBF Pusat', 1),
(11, 1, '01.0 Produk Produk Susu dan Analognya, Kecuali Yang Termasuk Kategori Pangan 02.0', 1),
(12, 1, '02.0 Lemak, Minyak dan Emulsi Minyak', 1),
(13, 1, '03.0 Es Untuk Dimakan (Edible Ice, termasuk sherbet dan sorbet)', 1),
(14, 1, '04.0 Buah dan sayur (termasuk jamur, umbi, kacang termasuk kacang kedelai, dan lidah buaya), rumput laut, biji-bijian', 1),
(15, 1, '05.0 Kembang gula/permen dan cokelat', 1),
(16, 1, '06.0 Serealia dan produk serealia yang merupakan produk turunan dari biji serealia, akar dan umbi, kacang dan empulur (bagian dalam batang tanaman), tidak termasuk produk bakery dari kategori pangan 07.0 dan tidak termasuk kacang dari kategori pangan 04.2.1 dan kategori pangan 04.2.2', 1),
(17, 1, '07.0 Produk bakeri', 1),
(18, 1, '08.0 Daging dan produk daging, termasuk daging unggas dan daging hewan buruan', 1),
(19, 1, '09.0 Ikan dan produk perikanan termasuk molusca, krustase, ekinodermata, serta amfibi dan reptil', 1),
(20, 1, '10.0 Terlur dan produk-produk telur', 1),
(21, 1, '11.0 Pemanis, termasuk madu', 1),
(22, 1, '12.0 Garam, rempah, sup, saus, salad, produk protein', 1),
(23, 1, '13.0 Produk pangan untuk keperluan gizi khusus', 1),
(24, 1, '14.0 Minuman, tidak termasuk produk susu', 1),
(25, 1, '15.0 Makanan ringan siap santap', 1),
(26, 1, '16.0 Pangan campuran (komposit), yaitu pangan yang tidak termasuk dalam kategori pangan 01.0 sampai dengan kategori pangan 15.0', 1),
(27, 5, 'PBF Pusat', 1),
(28, 5, 'PBF Cabang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniskonsultasi`
--

CREATE TABLE `tb_jeniskonsultasi` (
  `id_jeniskonsultasi` int(11) NOT NULL,
  `jeniskonsultasi` varchar(32) NOT NULL,
  `status_konsultasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jeniskonsultasi`
--

INSERT INTO `tb_jeniskonsultasi` (`id_jeniskonsultasi`, `jeniskonsultasi`, `status_konsultasi`) VALUES
(1, 'Layout', 1),
(2, 'SKI', 1),
(3, 'SKE', 1),
(4, 'PSB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_sarana`
--

CREATE TABLE `tb_jenis_sarana` (
  `id_jenis_sarana` int(11) NOT NULL,
  `jenis_sarana` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_sarana`
--

INSERT INTO `tb_jenis_sarana` (`id_jenis_sarana`, `jenis_sarana`) VALUES
(1, 'Pangan Olahan'),
(2, 'Kosmetik'),
(3, 'Obat Tradisional'),
(4, 'Obat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id_kabupaten` tinyint(2) NOT NULL,
  `kabupaten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id_kabupaten`, `kabupaten`) VALUES
(1, 'Badung'),
(2, 'Bangli'),
(3, 'Buleleng'),
(4, 'Gianyar'),
(5, 'Jembrana'),
(6, 'Karangasem'),
(7, 'Klungkung'),
(8, 'Tabanan'),
(9, 'Kota Denpasar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(32) NOT NULL,
  `status_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`, `status_kategori`) VALUES
(1, 'Pangan Olahan', 1),
(2, 'Kosmetik', 1),
(3, 'Obat Tradisional', 1),
(4, 'Suplemen Kesehatan', 1),
(5, 'Obat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Struktural'),
(3, 'Infokom'),
(4, 'Sertifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sarana`
--

CREATE TABLE `tb_sarana` (
  `id_sarana` int(11) NOT NULL,
  `nama_sarana` varchar(64) NOT NULL,
  `alamat_sarana` text NOT NULL,
  `tlp_sarana` varchar(12) NOT NULL,
  `email` varchar(32) NOT NULL,
  `id_jenis_sarana` int(11) NOT NULL,
  `id_detail_jenis_sarana` int(11) NOT NULL,
  `id_kabupaten` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sarana`
--

INSERT INTO `tb_sarana` (`id_sarana`, `nama_sarana`, `alamat_sarana`, `tlp_sarana`, `email`, `id_jenis_sarana`, `id_detail_jenis_sarana`, `id_kabupaten`) VALUES
(1, 'PT. Varash Indonesia Jaya', 'LC. Ir. Soekarno, Br. Tegal Belodan, Desa Dauh Peken, Kec. Tabanan, Kab. Tabanan', '0', 'email@email.com', 3, 5, 0),
(2, 'PT. Herdina Astawara Breweries', 'Jl. labuhan Moding No.8, Kelurahan Celukan Bawang, Kecamatan Gerokgak, Kabupaten Buleleng', '0', 'email@email.com', 1, 1, 0),
(3, 'CV. My Own Farm', 'Jl. Palguna Tukad Bunut No.25, Br. Jaya Kerta, Desa Ketewel, Kecamatan Sukawati, Kabupaten Gianyar', '0', 'email@email.com', 3, 5, 0),
(4, 'PT. Lab Medika', 'Jl. Cargo Sari No.1A, Denpasar', '0', 'email@email.com', 4, 7, 0),
(5, 'Bali Pork Ribs', 'Jl. Tukad Riawadi No.19', '0', 'email@email.com', 1, 1, 0),
(6, 'Arya Crps', 'Jl', '081', 'purwadanarya@gmail.com', 3, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_dokumen`
--

CREATE TABLE `tb_status_dokumen` (
  `id_status_dokumen` int(11) NOT NULL,
  `id_data` int(11) NOT NULL,
  `status_dokumen` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_kategori`
--

CREATE TABLE `tb_status_kategori` (
  `id_status_kategori` int(11) NOT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_kategori`
--

INSERT INTO `tb_status_kategori` (`id_status_kategori`, `status`) VALUES
(0, 'Non Aktif'),
(1, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` text NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `id_role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 1),
(2, 'struktural', '6e5032e4357051baef2bbe6bdc762d88', 'Admin Struktural', 2),
(3, 'infokom', 'ddff6661648d7d30476a0f7ce7434042', 'Infokom', 3),
(4, 'sertifikasi', '7421b42dd9738b8847329a77e0290e5c', 'Sertifikasi', 4),
(7, 'desakketut', 'desakketut', 'Dra. Desak Ketut Andika Andayani, Apt.', 4),
(8, 'luhgede', 'luhgede', 'Luh Gede Ratna Dewi Indrayati, S.Si, Apt.', 4),
(9, 'ayusutrisna', 'ayusutrisna', 'Ayu Sutrisna Dewi, S.Si, Apt.', 4),
(10, 'iwayan', 'iwayan', 'I Wayan Satria, S.TP.', 4),
(11, 'nimade', '066a0eb72a41e6a12aae48fd1ee1a790', 'Ni Made Anggasari, S.Si, Apt.', 4),
(12, 'nikomang', '75fd762fec5c8eb0cdad44ba219e9441', 'Ni Komang Suartini, S.Si.', 4),
(13, 'ninengah', '75e5f13f292b497cc178d0cdeedeaf76', 'Ni Nengah Setiasih, SH.', 4),
(14, 'lilis', 'b4c7848b06d83bbca966b1fd05cfabf8', 'Lilis Purwanti, S.Farm., Apt.', 4),
(15, 'ninyomandarmini', '950850e22ea3afbcc97cb573bda78453', 'Ni Nyoman Darmini, S.Farm., Apt.', 4),
(16, 'nikadek', 'baaf67eae8e8106c84540036dea48add', 'Ni Kadek Darsini, S.Farm., Apt.', 4),
(17, 'ninyomansri', '3d118040ef34bd430b257aa49a1dc7df', 'Ni Nyoman Sri Sukmawati, S.Si.', 4),
(18, 'imadeduana', 'a966c665f4c1a4185dbaabe482a4eb8c', 'I Made Duana, S.TP.', 4),
(19, 'idaayu', 'fae4818ac43af38a97a78bb2197e38bc', 'Ida Ayu Widiani, S.TP.', 4),
(20, 'iwayanbagiarta', 'iwayanbagiarta', 'Drs. I Wayan Bagiarta Negara, Apt., MM.', 4),
(21, 'madeyanthi', 'madeyanthi', 'Made Yanthi Trisnawati, ST.', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tb_detail_jenis_sarana`
--
ALTER TABLE `tb_detail_jenis_sarana`
  ADD PRIMARY KEY (`id_detail_jenis_sarana`);

--
-- Indexes for table `tb_detail_kategori`
--
ALTER TABLE `tb_detail_kategori`
  ADD PRIMARY KEY (`id_detail_kategori`);

--
-- Indexes for table `tb_jeniskonsultasi`
--
ALTER TABLE `tb_jeniskonsultasi`
  ADD PRIMARY KEY (`id_jeniskonsultasi`);

--
-- Indexes for table `tb_jenis_sarana`
--
ALTER TABLE `tb_jenis_sarana`
  ADD PRIMARY KEY (`id_jenis_sarana`);

--
-- Indexes for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_sarana`
--
ALTER TABLE `tb_sarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indexes for table `tb_status_dokumen`
--
ALTER TABLE `tb_status_dokumen`
  ADD PRIMARY KEY (`id_status_dokumen`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_detail_jenis_sarana`
--
ALTER TABLE `tb_detail_jenis_sarana`
  MODIFY `id_detail_jenis_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_detail_kategori`
--
ALTER TABLE `tb_detail_kategori`
  MODIFY `id_detail_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_jeniskonsultasi`
--
ALTER TABLE `tb_jeniskonsultasi`
  MODIFY `id_jeniskonsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jenis_sarana`
--
ALTER TABLE `tb_jenis_sarana`
  MODIFY `id_jenis_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id_kabupaten` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_sarana`
--
ALTER TABLE `tb_sarana`
  MODIFY `id_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_status_dokumen`
--
ALTER TABLE `tb_status_dokumen`
  MODIFY `id_status_dokumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
