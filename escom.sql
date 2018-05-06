-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 11:43 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escom`
--

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_organisasi` varchar(30) NOT NULL,
  `tahun_berdiri` varchar(5) NOT NULL,
  `alamat_organisasi` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto` varchar(30) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `Jumlah_proposal` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `id_user`, `nama_organisasi`, `tahun_berdiri`, `alamat_organisasi`, `deskripsi`, `foto`, `no_tlp`, `Jumlah_proposal`) VALUES
(3, 11, 'Karang Taruna Bina Raharja', '1998', 'Desa Sugiharjo, Kecamatan Tuban, Kabupaten Tuban, Jawa Timur', 'Visi\r\nMemperat tali persaudaraan antar pemuda untuk meningkatkan partisipasi pemuda dalam kegiatan-kegiatan yang bermanfaat di masyarakat guna meningkatkan peran organisasi kepemudaan \r\n\r\nMisi\r\n1.	Mengembangkan akhlak budi pekerti yang luhur.\r\n2.	Memperer', 'karang_taruna.jpg', '085655180038', 1),
(4, 13, 'PSM ITS', '1975', 'Jl. Raya ITS, Keputih, Sukolilo', 'Mahasiswa ITS Choir aktif dalam acara-acara berikut yang diselenggarakan oleh ITS, misalnya, peresmian profesor, kelulusan, penerimaan siswa baru, Hari Jadi, dan acara internal lainnya. Tidak hanya dalam acara internal, tetapi juga di dunia paduan suara, ', 'psm.jpg', '082125893859', 2),
(5, 14, 'BEM FTI ITS', '1997', 'Lantai Dasar Theater C, FTI ITS, Sukolilo, Surabaya', 'Tujuan Dasar BEM FTI ITS : BEM FTI-ITS bertujuan untuk mewujudkan dan membina sikap kekeluargaan  antar civitas akademika, sosial kemasyarakatan , menumbuh kembangkan budaya organisasi FTI ITS dan memperjuangkan keadilan bersama dalam rangka meningkatkan ', 'fti.png', '+628 3872 1411 47', 2);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `tahun_berdiri` varchar(5) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `jml_proposal_awal` int(11) NOT NULL,
  `jml_proposal_ahir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `id_user`, `nama_perusahaan`, `tahun_berdiri`, `alamat_perusahaan`, `deskripsi`, `kategori`, `foto`, `no_tlp`, `jml_proposal_awal`, `jml_proposal_ahir`) VALUES
(5, 8, 'PERTAMINA', '1957', 'Jl. Medan Merdeka Timur 1A, Jakarta 10110', 'Visi : Menjadi Perusahaan Energi Nasional Kelas Dunia\r\n\r\nMisi : Menjalankan Usaha Minyak, Gas, Serta Energi Baru dan Terbarukan Secara Terintegrasi, Berdasarkan Prinsip-Prinsip Komersial Yang Kuat\r\nSejarah\r\nSejak didirikan pada 10 Desember 1957, Pertamina menyelenggarakan usaha minyak dan gas bumi di sektor hulu hingga hilir. Bisnis sektor hulu Pertamina yang dilaksanakan di beberapa wilayah di Indonesia dan luar negeri meliputi kegiatan di bidang-bidang eksplorasi, produksi, serta transmisi minyak dan gas. Pertamina dalam setiap kiprahnya menjalankan peran strategis dalam perekonomian nasional. Aktivitas eksplorasi dan produksi panas bumi oleh Pertamina sepenuhnya dilakukan di dalam negeri dan ditujukan untuk mendukung program pemerintah menyediakan 10.000 Mega Watt (MW) listrik tahap kedua.Sektor hilir Pertamina meliputi kegiatan pengolahan minyak mentah, pemasaran dan niaga produk hasil minyak, gas dan petrokimia, dan bisnis perkapalan terkait untuk pendistribusian produk Perusahaan. Kegiatan pengolahan terdiri dari: RU II (Dumai), RU III (Plaju), RU IV (Cilacap), RU V (Balikpapan), RU VI (Balongan) dan RU VII (Sorong).\r\n\r\nAnak Perusahaan : \r\nPT PERTAMINA EP , PT Pertamina Geothermal Energy, PT Pertamina Hulu Energi, PT Pertamina EP Cepu, PT Pertamina EP Cepu ADK, PT Pertamina Drilling Services Indonesia, PT Pertamina Internasional EP dan lainnya.\r\n\r\nKegiatan bisnis yang dilakukan :\r\nKegiatan usaha di bidang penyelenggaraan usaha energi, yaitu minyak dan gas bumi, energi baru dan terbarukan, serta kegiatan lain yang terkait atau menunjang kegiatan usaha di bidang energi, yaitu minyak dan gas bumi, energi baru dan terbarukan tersebut serta pengembangan optimalisasi sumber daya yang dimiliki Perusahaan.', '', 'pertamina.jpg', '1 500 000 ', 0, 0),
(6, 9, 'PELINDO III', '1960', 'Jl. Perak Timur No. 610 Surabaya 60165 – Indonesia', '&lt;p&gt;&lt;font color=&quot;#000000&quot;&gt;Visi\r\nTo be the leader in port business\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot;&gt;Misi\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot;&gt;1.	Menciptakan nilai tambah yang berkelanjutan untuk peningkatan kepuasan stakeholder.\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot;&gt;2.	Memberikan kenyamanan dan kemudahan bagi pelanggan\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot;&gt;3.	Menciptakan solusi bisnis yang cerdas melalui integrasi dan kerjasama dengan mitra strategis\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot;&gt;\r\nSejarah :&amp;nbsp; PT Pelabuhan Indonesia III (Persero) atau lebih dikenal dengan sebutan Pelindo 3 merupakan salah satu Badan Usaha Milik Negara (BUMN) yang bergerak dalam jasa layanan operator terminal pelabuhan. Perusahaan dibentuk berdasarkan Peraturan Pemerintah Republik Indonesia Nomor 58 Tahun 1991 tentang Pengalihan Bentuk Perusahaan Umum (Perum) Pelabuhan III Menjadi Perusahaan Perseroan (Persero). Pelindo 3 mengelola 43 pelabuhan dengan 16 kantor cabang yang tersebar di tujuh propinsi di Indonesia meliputi Jawa Tengah, Jawa Timur, Bali, Nusa Tenggara Barat, Nusa Tenggara Timur, Kalimantan Tengah, dan Kalimantan Selatan. &lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot;&gt;Sebagai perusahaan yang bergerak dalam bidang jasa, mengutamakan kepuasan pelanggan adalah menjadi prioritas. Pelindo 3 menjadi salah satu BUMN besar di Indonesia dengan tingkat jumlah aset yang meningkat setiap tahunnya. Pelindo 3 juga menjadi salah satu BUMN yang memasuki pasar global. Yang membuktikan bahwa Pelindo 3 memiliki daya saing yang tinggi dan menjadi perusahaan berkelas internasional.\r\n\r\nAnak perusahaan :\r\nPT Terminal Petikemas Surabaya (PT TPS), RS Primasatya Husada Citra (RS PHC), PT Berlian Jasa Terminal Indonesia (PT BJTI), PT Portek Indonesia (PORTEK) PT Ambang Barito Nusa Persada (AMBAPERS), PT Pelindo Marine Service (PT PMS) PT Jasamarga Bali Tol (PT JBT), PT Pelindo Daya Sejahtera (PT PDS), PT Terminal Teluk Lamong (PT TTL) Bidang usaha\r\n\r\nBidang usaha \r\nBidang usaha Pelindo III meliputi penyediaan dan pengusahaan :\r\n•	Jasa terminal, kegiatan konsolidasi dan distribusi barang termasuk hewan\r\n•	Pendidikan dan pelatihan yang berkaitan dengan kepelabuhanan\r\n•	Jasa pelayanan kesehatan\r\n•	Jasa transportasi di laut\r\n•	Jasa persewaan fasilitas dan peralatan di bidang kepelabuhahanan\r\n•	Jasa perbaikan fasilitas dan peralatan di bidang kepelabuhanan\r\n•	Properti di daerah lingkungan pelabuhan\r\n•	Kawasan industri di daerah lingkungan pelabuhan\r\n•	Kawasan wisata di daerah lingkungan pelabuhan\r\n•	Depo petikemas\r\n•	Jasa konsultan di bidang kepelabuhanan\r\n•	Jasa komunikasi dan informasi di bidang kepelabuhanan\r\n•	Jasa konstruksi di bidang kepelabuhanan, dan lain sebagainya.&lt;/font&gt;&lt;/p&gt;', 'Kesehatan', '', '+62 31 3298631-37 ', 0, 1),
(7, 10, 'UNILEVER', '1933', 'Jalan Cokroaminoto no. 18, Tegalsari', 'Sejarah \r\nUnilever Indonesia, yang berdiri pada 5 Desember 1933, telah tumbuh hingga kini menjadi salah satu perseroan terdepan untuk kategori Fast Moving Consumer Goods di Indonesia. Kami telah hadir menemani perjalanan kehidupan masyarakat Indonesia melalui rangkaian produk Unilever Indonesia mencakup brand-brand ternama dunia seperti Pepsodent, Lux, Lifebuoy, Dove, Sunsilk, Clear, Rexona, Vaseline, Rinso, Molto, Sunlight, Wall’s, Blue Band, Royco, Bango dan lainnya.\r\n\r\nVisi \r\nUntuk meraih rasa cinta dan penghargaan dari Indonesia dengan menyentuh kehidupan setiap orang Indonesia setiap harinya.\r\n\r\nMisi : bekerja untuk menciptakan masa depan yang lebih baik setiap hari.\r\n\r\nKegiatan bisnis :\r\nUnilever adalah perusahaan global yang menjual barang-barang konsumen dengan penjualan cepat. Tujuan Unilever adalah memasyarakatkan kehidupan yang berkelanjutan.', '', 'unilever.jpg', '(031)8438297', 0, 9),
(8, 16, 'nwdjawj', '20158', 'njdanjdaj', 'jnekjsenjks', '', 'house-a-song-of-ice-and-fire-3', '5486', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `id_organisasi` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `proposal` varchar(30) NOT NULL,
  `tanggal_pengajuan` varchar(30) NOT NULL,
  `status_proposal` varchar(30) NOT NULL,
  `isi_balasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `id_organisasi`, `id_perusahaan`, `proposal`, `tanggal_pengajuan`, `status_proposal`, `isi_balasan`) VALUES
(1, 3, 6, 'Proposal_ISE2017.pdf', '58881', 'Disetujui', 'ena2'),
(2, 4, 6, 'auhfau.pdf', '6566', 'Disetujui', 'Mantap Betul'),
(3, 5, 7, 'bybys.pdf', '155165', 'belum disetujui', ''),
(4, 5, 5, 'bybys.pdf', '155165', 'belum disetujui', ''),
(5, 4, 6, 'jnasdjaj.pdf', '256165', 'Belum Disetujui', '');

-- --------------------------------------------------------

--
-- Table structure for table `spj`
--

CREATE TABLE `spj` (
  `id_spj` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `spj` varchar(30) NOT NULL,
  `status_spj` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `role`, `status`) VALUES
(1, 'habib', 'habib', 'habib@gmail.com', 'admin', 'terverifikasi'),
(2, 'rifai', 'rifai', 'rifai@gmail.com', 'perusahaan', 'belum terverifikasi'),
(3, 'ahmad', 'ahmad', 'ahmad@gmail.com', 'organisasi', 'belum terverifikasi'),
(4, 'lala', 'lala', 'lala@gmail.com', 'perusahaan', 'belum terverifikasi'),
(5, 'lele', 'lele', 'lele@gmail.com', 'organisasi', 'belum terverifikasi'),
(6, 'tetot', 'tetot', 'tetot@gmail.com', 'perusahaan', 'belum terverifikasi'),
(7, 'lol', 'lol', 'hsa@gmail.com', 'perusahaan', 'belum terverifikasi'),
(8, 'pertamina', 'pertamina', 'pcc@pertamina.com', 'perusahaan', 'terverifikasi'),
(9, 'pelindo', 'pelindo', 'marketing@pelindo.co.id', 'perusahaan', 'terverifikasi'),
(10, 'unilever', 'unilever', 'marketing@unilever.co.id', 'perusahaan', 'terverifikasi'),
(11, 'binaraharja', 'binaraharja', 'binaraharja@gmail.com', 'organisasi', 'terverifikasi'),
(13, 'psmits', 'psmits', 'psmits.itsstudentchoir@gmail.c', 'organisasi', 'terverifikasi'),
(14, 'bemfti', 'bemfti', 'bem_fti@its.ac.id', 'organisasi', 'terverifikasi'),
(15, 'asdas', 'sadasd', 'das@gmail.com', 'perusahaan', 'belum terverifikasi'),
(16, 'ejdnwei', 'jkadniaiw', 'usisd@sndj.com', 'perusahaan', 'belum terverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `spj`
--
ALTER TABLE `spj`
  ADD PRIMARY KEY (`id_spj`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `spj`
--
ALTER TABLE `spj`
  MODIFY `id_spj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
