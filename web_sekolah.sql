-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Nov 2019 pada 08.59
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `penulis` varchar(225) NOT NULL,
  `tgl_tulis` date NOT NULL,
  `judul` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `penulis`, `tgl_tulis`, `judul`, `isi`, `foto`) VALUES
(1, 'M.Finuary Renggalih', '2019-10-17', 'Maling', '<p>fgdfdg</p>', '2010201908333517102019061836default.jpg'),
(2, 'Andri Priyandi', '2019-10-25', 'Tikus Berdasi', '<p>dfdfgw</p>', '2011201913520503102019054910aa.jpg'),
(3, 'Yogas Destariansyah', '2019-10-26', 'Kuda Lumping', '<p>dfgwww</p>', '201120191350570411201915183730102019023554rpl.jpg'),
(4, 'Taufik Hidayat', '2019-10-10', 'Hacker Kelas Kakap', '<p>adsa</p>', '2010201915565502102019185201a.png'),
(5, 'Muhammad Reza Sianipar', '2019-09-19', 'Tikus BerdasiTak Tahu Diri', '<p>asdad</p>', '2011201913530630102019162414tkr.jpg'),
(9, 'Obos', '2020-01-01', 'AWOKWOK', '<p>awokaowkaowkawokwoakaokawowaokaow</p>', '2811201904490030102019023313rpl.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dashboard`
--

INSERT INTO `dashboard` (`id`, `nama`, `judul`, `keterangan`, `foto`) VALUES
(1, 'SMKN 7 BALEENDAH', 'SMKN 7 BALEENDAH', '<p>SMK Negeri 7 Baleendah adalah sekolah saya.</p>', '24102019053339foto.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `mata_pelajaran` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `mata_pelajaran`, `alamat`, `foto`) VALUES
(5, '123', 'Sugeng', 'Seni Budaya', 'Andir', '1710201905384603102019061556a.png'),
(6, '32111', 'Abdus', 'Matematika', 'Magung', '2811201903324617102019061836default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `keterangan`, `foto`) VALUES
(2, 'Teknik Gambar Bangunan', '<p>Teknik Gambar Bangunan adalah salah satu jurusan di SMKN 7 Baleendah.</p>', '30102019162318tgb.jpg'),
(3, 'Teknik Kendaraan Ringan', '<p>Teknik Kendaraan Ringan adalah salah satu jurusan yang ada di sekolah SMKN 7 Baleendah</p>', '30102019162414tkr.jpg'),
(4, 'Teknik Sepeda Motor', '<p>Teknik Sepeda Motor adalah salah satu jurusan yang ada di sekolah SMKN 7 Baleendah</p>', '30102019162546tsm.jpg'),
(5, 'Teknik Audio Video', '<p>Teknik Audio Video adalah salah satu jurusan yang ada di sekolah SMKN 7 Baleendah</p>', '30102019162636tav.jpg'),
(6, 'Rekayasa Perangkat Lunak', '<p>RPL(Rekayasa Perangkat Lunak) adalah jurusan di sekolah SMKN 7 Baleendah yan saya pilih</p>', '30102019022951rpl.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `web` varchar(225) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `web`, `isi`) VALUES
(4, 'Finu', 'finuary17.com@gmail.com', 'www.jnck.id', 'Hallo'),
(5, 'Finu', 'finuary17.com@gmail.com', 'www.jnck.id', 'Hallo'),
(20, 'a', 'a@gmail.com', 'a', 'a'),
(21, 'a', 'a@gmail.com', 'a', 'a'),
(22, 'a', 'a@gmail.com', 'a', 'x'),
(23, 'a', 'andru@gmail.com', 'a', 'a'),
(24, 'a', 'a@gmail.com', 'a', 'c'),
(25, 's', 'andru@gmail.com', 's', 's'),
(26, 'a', 'andru@gmail.com', 'a', 'aa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `telp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `telp`, `email`, `alamat`) VALUES
(1, '022-87799654 / 089-756867655', 'smkn7.baleendah@yahoo.co.id', '<p>Jalan Siliwangi Km 15 <br />Kec. Baleendah, Kab. Bandung</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `kritik_saran` varchar(225) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritik_saran`
--

INSERT INTO `kritik_saran` (`id`, `nama`, `email`, `kritik_saran`, `komentar`) VALUES
(2, 'Obos', 'obos@gmail.com', 'kritik', 'awok'),
(3, 'Finu', 'finu@gmail.com', 'kritik', 'mantap'),
(4, 'andru', 'andru@gmail.com', 'kritik', 'wow');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `nama_sekolah` varchar(225) NOT NULL,
  `npsn_sekolah` varchar(225) NOT NULL,
  `alamat_sekolah` varchar(225) NOT NULL,
  `telp_sekolah` varchar(225) NOT NULL,
  `email_sekolah` varchar(225) NOT NULL,
  `jurusan_sekolah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`id`, `judul`, `nama_sekolah`, `npsn_sekolah`, `alamat_sekolah`, `telp_sekolah`, `email_sekolah`, `jurusan_sekolah`) VALUES
(1, 'Profil Sekolah', 'SMKN 7 Baleendah', '20229784', 'Jalan Siliwangi Km 15, Kec. Baleendah, Kab. Bandung, Jawa Barat', '022-87799654', 'smkn7.baleendah@yahoo.co.id', '<p>1. Rekayasa Perangkat Lunak (RPL),<br />2. Teknik Gambar Bangunan (TGB),<br />3. Teknik Kendaraan Ringan (TKR),<br />4. Teknik Sepeda Motor (TSM),<br />5. Teknik Audio Video (TAV).</p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `selayang_pandang`
--

CREATE TABLE `selayang_pandang` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `pembuka` varchar(225) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `selayang_pandang`
--

INSERT INTO `selayang_pandang` (`id`, `judul`, `pembuka`, `isi`) VALUES
(1, 'Selayang Pandang', 'Assalamualaikum Wr.Wb.', '<p>&nbsp; &nbsp; &nbsp; &nbsp;Puji dan syukur kami panjatkan kehadirat Allah SWT yang masih melimpahkan berbagai Rahmat dan Nikmat-Nya, terutama nikmat umur, kesehatan serta nikmat kesempatan sehingga kita dapat menjalankan aktifitas kita sehari-hari, khususnya bagi SMKN 7 Baleendah Kec. Ciparay, Kab. Bandung, Jawa Barat masih dapat beraktifitas memajukan peserta didik untuk mencapai tujuan yang diinginkan.</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;SMKN 7 Baleendah terus berupaya untuk meningkatkan pelayanan informasi terhadap seluruh komponen sekolah baik itu pendidik, siswa, maupun masyarakat. Salah satu upaya yang dilakukan sekolah yaitu memilikinya jaringan Internet dan Website dengan tujuan :</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;1. Adanya interaktif internal sekolah (Kepala sekolah, Pendidik, Peserta didik dan Orang tua siswa serta Komite sekolah),<br />&nbsp; &nbsp; &nbsp; &nbsp;2. Terjadinya interaktif eksternal sekolah dengan dunia luar,<br />&nbsp; &nbsp; &nbsp; &nbsp;3. Pemanfaatan teknologi dan informasi yang semakin cepat untuk pengingkatan pembelajaran,<br />&nbsp; &nbsp; &nbsp; &nbsp;4. Penyampaian informasi dari sekolah ke orang tua siswa dan komite ataupun dengan pihak lain yang terkait,<br />&nbsp; &nbsp; &nbsp; &nbsp;5. Mempercepat penyampaian informasi, saran, masukan tanpa harus bertatap muka diantara warga sekolah dan dunia luar.</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Akhirnya kami berharap dengan adanya website ini diharapkan agar warga sekolah dapat mengambil manfaat sebesar-besarnya demi memajukan sekolah dan penigkatan mutu pendidikan.<br />&nbsp; &nbsp; &nbsp; &nbsp;Selamat bergabung di Website SMKN 7 Baleendah, kritik dan saran yang membangun sangat kami harapkan.</p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: right;">Baleendah, 17 Oktober 2019<br />Kepala Sekolah,</p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;"><span style="text-align: start;">Agus Priyatmono Nugroho,S.pd.M.Si</span><br />NIP.989879768768768</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jurusan` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `jenis_kelamin`, `alamat`, `jurusan`, `foto`) VALUES
(16, '123455', 'Adenda Jaya Swara', 'Laki-laki', 'Dayeuhkolot', 'Rekayasa Perangkat Lunak', '2310201914530417102019061836default.jpg'),
(17, '23451', 'Akmal Abdussyukur', 'Laki-laki', 'Baleendah', 'Rekayasa Perangkat Lunak', '2310201914582117102019061906default2.jpg'),
(18, '34512', 'Alfi Algani', 'Laki-laki', 'Ciheulang', 'Rekayasa Perangkat Lunak', '2310201914585717102019061836default.jpg'),
(19, '45123', 'Andri Priyandi', 'Laki-laki', 'Magung', 'Rekayasa Perangkat Lunak', '2310201914593417102019061906default2.jpg'),
(20, '512345', 'Annisa Rachma Gustiyanti', 'Perempuan', 'Ciparay', 'Rekayasa Perangkat Lunak', '2310201915001417102019061836default.jpg'),
(21, '12345', 'Ari Mukti Wibawa', 'Laki-laki', 'Baleendah', 'Rekayasa Perangkat Lunak', '2310201915014017102019061906default2.jpg'),
(22, '23451', 'Awaludin Naufal', 'Laki-laki', 'Banjaran', 'Rekayasa Perangkat Lunak', '2310201915021217102019061836default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_sekolah`
--

CREATE TABLE `tentang_sekolah` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `pembuka` varchar(225) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang_sekolah`
--

INSERT INTO `tentang_sekolah` (`id`, `judul`, `pembuka`, `isi`) VALUES
(1, 'TENTANG SMK NEGERI 7 BALEENDAH', 'Assalamualaikum Wr.Wb.', '<p>SMK Negeri 7 Baleendah adalah sekolah yang unggul dalam prestasi dan mampu bersaing di era globalisasi ini. Menurut Bapak Agus Priyatmono Nugroho,S.pd.M.Si, selaku kepala sekolah SMK Negeri 7 Baleendah "Sekolah ini mempunyai misi diantaranya menghasilkan lulusan yang terdidik, terlatih dan memiliki sikap yang berorientasi pada perkembangan industri dengan strategi pembelajaran yang disiplin, berlatih, berkarya, kreatif, inovatif dan berakhlakul karimah". Beliau juga mengemukakan bahwa persaingan dunia kerja bagi lulusan SMK semakin ketat untuk menyiasati SMK Negeri 7 Baleendah benar-benar memiliki program unggulan adapun program yang diminati siswa-siswi diantaranya jurusan Otomotif, Elektronika, Gambar Bangunan, dan Rekayasa Perangkat Lunak.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `level`, `foto`) VALUES
(4, 'M.Finuary Renggalih', 'finuary17.com@gmail.com', '123', 'Admin', '17102019061836default.jpg'),
(5, 'Sugeng Apik Sidulur', 'sugeng10@gmail.com', '12', 'Guru', '291020191839191710201906253617102019061906default2.jpg'),
(6, 'Ucok Brader', 'ucok12@gmail.com', '1', 'Siswa', '1710201906263703102019061556a.png'),
(7, 'Obos', 'yogas1@gmail.com', '1234', 'Guru', '2711201913045003102019054910aa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selayang_pandang`
--
ALTER TABLE `selayang_pandang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_sekolah`
--
ALTER TABLE `tentang_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `selayang_pandang`
--
ALTER TABLE `selayang_pandang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tentang_sekolah`
--
ALTER TABLE `tentang_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
