-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2018 pada 00.31
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

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
-- Struktur dari tabel `organisasi`
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
  `jml_proposal_awal` int(25) NOT NULL,
  `Jumlah_proposal` int(25) NOT NULL,
  `status_notif_admin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `id_user`, `nama_organisasi`, `tahun_berdiri`, `alamat_organisasi`, `deskripsi`, `foto`, `no_tlp`, `jml_proposal_awal`, `Jumlah_proposal`, `status_notif_admin`) VALUES
(3, 11, 'Karang Taruna Bina Raharja', '1998', 'Desa Sugiharjo, Kecamatan Tuban, Kabupaten Tuban, Jawa Timur', '<p class=\"MsoListParagraph\" style=\"margin-left:18.0pt;mso-para-margin-left:0gd;\r\ntext-align:justify;line-height:150%\">Karang Taruna adalah organisasi kepemudaan di Indonesia. Karang Taruna merupakan wadah pengembangan generasi muda nonpartisan, yang tumbuh atas dasar kesadaran dan rasa tanggung jawab sosial dari, oleh dan untuk masyarakat khususnya generasi muda di wilayah Desa / Kelurahan atau komunitas sosial sederajat, yang terutama bergerak dibidang kesejahteraan sosial. Sebagai organisasi sosial kepemudaan Karang Taruna merupakan wadah pembinaan dan pengembangan serta pemberdayaan dalam upaya mengembangkan kegiatan ekonomis produktif dengan pendayagunaan semua potensi yang tersedia dilingkungan baik sumber daya manusia maupun sumber daya alam yang telah ada.</p><p class=\"MsoListParagraph\" style=\"margin-left:18.0pt;mso-para-margin-left:0gd;\r\ntext-align:justify;line-height:150%\"><br>Sejarah Karang Taruna Bina Raharja Desa Sugiharjo berdiri pada tahun 1998. Karang Taruna Bina Raharja berdiri pada saat desa Sugiharjo Tuban di pimpin oleh kepala desa yang bernama Karso. Dimana kepala desa tersebut terbilang aktif berorganisasi dan menginginkan dibentuknya wadah pengembangan bagi generasi muda khususnya di Desa Sugiharjo. Sehingga pada tahun 1998 diresmikan pembentukan Karang Taruna Bina R aharja.<br><br>Visi<br>Memperat tali persaudaraan antar pemuda untuk meningkatkan partisipasi pemuda dalam kegiatan-kegiatan yang bermanfaat di masyarakat guna meningkatkan peran organisasi kepemudaan </p><p class=\"MsoListParagraph\" style=\"margin-left:18.0pt;mso-para-margin-left:0gd;\r\ntext-align:justify;line-height:150%\"><br>Misi<br>1.&nbsp;&nbsp; &nbsp;Mengembangkan akhlak budi pekerti yang luhur.<br>2.&nbsp;&nbsp; &nbsp;Mempererat tali persaudaran antar pemuda desa Sugiharjo dengan mengadakan pertemuan rutin.<br>3.&nbsp;&nbsp; &nbsp;Mengadakan kegiatan-kegiatan kepemudaan dalam masyarakat. <br>4.&nbsp;&nbsp; &nbsp;Turut serta membantu dalam pengabdian masyarakat.<br>5.&nbsp;&nbsp; &nbsp;Mengembangkan kreativitas dan bakat pemuda melalui pendidikan dan pelatihan kepemudaan. <br>6.&nbsp;&nbsp; &nbsp;Melestarikan nilai-nilai seni dan budaya masyarakat.<br>7.&nbsp;&nbsp; &nbsp;Turut membantu dalam menjaga kebersihan dan keindahan lingkungan di Desa Sugiharjo<br>8.&nbsp;&nbsp; &nbsp;Membentuk usaha-usaha yang tidak bertentangan dengan peraturan perundang-undangan.<br><br></p>', 'karang_taruna.jpg', '085655180038', 0, 0, ''),
(4, 13, 'PSM ITS', '1975', 'Jl. Raya ITS, Keputih, Sukolilo', '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:150%\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:IN\" lang=\"IN\">Sejarah</span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:150%\"><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:IN\" lang=\"IN\">Paduan Suara Mahasiswa Institut Teknologi Sepuluh\r\nNopember (resmi disebut PSM ITS) adalah salah satu jenis organisasi mahasiswa\r\nyang aktif dalam seni dan peningkatan kualitas vokal. Ditemukan pada tahun\r\n1975, diprakarsai oleh Drs. Kresnayana Yahya dan beberapa siswa lain yang\r\nmenginginkan sebuah unit yang menampung siswa yang menikmati seni terutama kegiatan\r\nmenyanyi dan paduan suara.</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:150%\"><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:IN\" lang=\"IN\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:150%\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"font-size:12.0pt;line-height:150%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:IN\" lang=\"IN\">Kegiatan :</span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:150%\"><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:IN\" lang=\"IN\">Mahasiswa ITS Choir aktif dalam acara-acara berikut\r\nyang diselenggarakan oleh ITS, misalnya, peresmian profesor, kelulusan,\r\npenerimaan siswa baru, Hari Jadi, dan acara internal lainnya. Tidak hanya dalam\r\nacara internal, tetapi juga di dunia paduan suara, Mahasiswa ITS Choir telah\r\nmemenangkan banyak gelar di berbagai kompetisi, baik nasional maupun\r\ninternasional. Mahasiswa ITS Choir berpengalaman dalam melakukan berbagai karya\r\nmusik seperti klasik, pop modern, bahkan cerita rakyat.</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:150%\"><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:IN\" lang=\"IN\"><br>\r\n<b style=\"mso-bidi-font-weight:normal\">Beberapa pencapaian :</b></span></p><ol><li style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: 150%;\"><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:IN\" lang=\"IN\">Medali Perak dalam Festival Paduan Suara XXI ITB\r\nKategori Asia Tenggara 2008 Mixed Choir pada tahun 2008</span></li><li style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: 150%;\"><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:IN\" lang=\"IN\">Golden Diplome dalam \"Rimini International Choral\r\nCompetition 2011\" kategori Mixed Voice</span></li><li style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: 150%;\"><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:IN\" lang=\"IN\">Golden Diplome dalam kategori “Folk International\r\nCompetition 2010” dan “Injil Internasional”</span></li><li style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: 150%;\"><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:IN\" lang=\"IN\">Hadiah Ketiga dalam \"Kompetisi Menyanyi\r\nInternasional ke-50 Seghizzi 2015\" Kategori 2 (Folk, Tradisional, Spiritual,\r\nInjil, pop dan Jazz)</span></li><li style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: 150%;\"><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:IN\" lang=\"IN\">Hadiah Ketiga dalam \"Kompetisi Menyanyi\r\nInternasional ke-54 Seghizzi 2015\" Kategori 2A (Pengaturan Kesetaraan Lagu\r\nRakyat dan Tradisional)</span></li><li>\r\n\r\n<span style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IN;mso-fareast-language:\r\nIN;mso-bidi-language:AR-SA\" lang=\"IN\">Hadiah Terbaik untuk \'Puisi dalam Musik\' dalam\r\n“Kompetisi Menyanyi Internasional ke-50 Seghizzi 2015”, </span><span style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:\r\nIN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\" lang=\"IN\">dan lain sebagainya</span></li></ol>', 'psm.jpg', '082125893859', 1, 1, '-'),
(5, 14, 'BEM FTI ITS', '1997', 'Lantai Dasar Theater C, FTI ITS, Sukolilo, Surabaya', '<p>Sejarah BEM FTI ITS : Sejarah awal pergerakan BEM FTI ITS yang dicetuskan oleh Bapak Munadi Herlambang – Teknik Kimia 1997.<br><br>Tujuan Dasar BEM FTI ITS : BEM FTI-ITS bertujuan untuk mewujudkan dan membina sikap kekeluargaan&nbsp; antar civitas akademika, sosial kemasyarakatan , menumbuh kembangkan budaya organisasi FTI ITS dan memperjuangkan keadilan bersama dalam rangka meningkatkan kualitas&nbsp; Sumber daya mahasiswa yang&nbsp; memiliki integritas pribadi, bertakwa kepada Tuhan YME, sikap kepemimpinan, rasa bertanggung jawab terhadap bangsa dan negara.<br><br>Visi :<br>Harmonisasi FTI ITS dalam kolaborasi karya untuk almamater dan bangsa<br>Misi :<br>1.&nbsp;&nbsp; &nbsp;Menciptakan keselarasan antar pengurus BEM FTI ITS demi terwujudnya FTI ITS yang harmonis<br>2.&nbsp;&nbsp; &nbsp;Meningkatkan iklim kolaborasi antar stakeholder guna menciptakan sinergi pergerakann dan kebermanfaatan FTI ITS<br>3.&nbsp;&nbsp; &nbsp;Meningkatkan peran mahasiswa FTI ITS dalam menumbuhkan nilai kepedulian dan tanggung jawab terhadap masyarakat<br>4.&nbsp;&nbsp; &nbsp;Mengoptimalkan pemanfaatan disiplin ilmu FTI dalam menciptakan karya yang bermanfaat bagi almamater dan bangsa</p><p><br>Kegiatan :<br>Salah satu fungsi dari BEM FTI ITS adalah untuk memfasilitasi mahasiwa Fakultas Teknologi Industri dalam pengembangan diri di berbagai bidang. Berbagai program kerja pengembangan mahasiswa yang telah berjalan antara lain LKMM Pra TD yang merupakan pelatihan masal untuk mahasiswa baru FTI dalam manajemen diri. Kegiatan pembimbingan dan kompetisi PKM yang bertujuan untuk turut memeriahkan suasana keilmiahan yang ada di lingkungan FTI serta menunjukkan kontribusi FTI pada ITS yaitu PIMNAS. Kegiatan sosial masyarakat seperti ITS Mengajar. Kegiatan berbasis wirausaha seperti LKMW (Latihan Keterampilan Mahasiswa Wirausaha) untuk meningkatkan keterampilan wirausaha mahasiswa. Kegiatan advance media schooling, meet the technorat, red euporia month dan lain sebagainya.<br></p>', 'fti.png', '+628 3872 1411 47', 1, 1, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
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
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `id_user`, `nama_perusahaan`, `tahun_berdiri`, `alamat_perusahaan`, `deskripsi`, `kategori`, `foto`, `no_tlp`, `jml_proposal_awal`, `jml_proposal_ahir`) VALUES
(5, 8, 'PERTAMINA', '1957', 'Jl. Medan Merdeka Timur 1A, Jakarta 10110', '&lt;p&gt;Visi : Menjadi Perusahaan Energi Nasional Kelas Dunia\r\n\r\n&lt;/p&gt;&lt;p&gt;Misi : Menjalankan Usaha Minyak, Gas, Serta Energi Baru dan Terbarukan Secara Terintegrasi, Berdasarkan Prinsip-Prinsip Komersial Yang Kuat.\r\n&lt;/p&gt;&lt;p&gt;Sejarah\r\nSejak didirikan pada 10 Desember 1957, Pertamina menyelenggarakan usaha minyak dan gas bumi di sektor hulu hingga hilir. Bisnis sektor hulu Pertamina yang dilaksanakan di beberapa wilayah di Indonesia dan luar negeri meliputi kegiatan di bidang-bidang eksplorasi, produksi, serta transmisi minyak dan gas. Pertamina dalam setiap kiprahnya menjalankan peran strategis dalam perekonomian nasional. Aktivitas eksplorasi dan produksi panas bumi oleh Pertamina sepenuhnya dilakukan di dalam negeri dan ditujukan untuk mendukung program pemerintah menyediakan 10.000 Mega Watt (MW) listrik tahap kedua.Sektor hilir Pertamina meliputi kegiatan pengolahan minyak mentah, pemasaran dan niaga produk hasil minyak, gas dan petrokimia, dan bisnis perkapalan terkait untuk pendistribusian produk Perusahaan. Kegiatan pengolahan terdiri dari: RU II (Dumai), RU III (Plaju), RU IV (Cilacap), RU V (Balikpapan), RU VI (Balongan) dan RU VII (Sorong).\r\n\r\n&lt;/p&gt;&lt;p&gt;Anak Perusahaan : \r\n&lt;/p&gt;&lt;p&gt;PT PERTAMINA EP , PT Pertamina Geothermal Energy, PT Pertamina Hulu Energi, PT Pertamina EP Cepu, PT Pertamina EP Cepu ADK, PT Pertamina Drilling Services Indonesia, PT Pertamina Internasional EP dan lainnya.\r\n\r\nKegiatan bisnis yang dilakukan :\r\nKegiatan usaha di bidang penyelenggaraan usaha energi, yaitu minyak dan gas bumi, energi baru dan terbarukan, serta kegiatan lain yang terkait atau menunjang kegiatan usaha di bidang energi, yaitu minyak dan gas bumi, energi baru dan terbarukan tersebut serta pengembangan optimalisasi sumber daya yang dimiliki Perusahaan.&lt;/p&gt;', 'Pendidikan', 'pertamina.jpg', '1 500 000 ', 2, 2),
(6, 9, 'PELINDO III', '1960', 'Jl. Perak Timur No. 610 Surabaya 60165 – Indonesia', '&lt;p&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;Visi\r\nTo be the leader in port business\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;Misi\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;1.	Menciptakan nilai tambah yang berkelanjutan untuk peningkatan kepuasan stakeholder.\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;2.	Memberikan kenyamanan dan kemudahan bagi pelanggan\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;3.	Menciptakan solusi bisnis yang cerdas melalui integrasi dan kerjasama dengan mitra strategis\r\n&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;\r\nSejarah :&amp;nbsp; PT Pelabuhan Indonesia III (Persero) atau lebih dikenal dengan sebutan Pelindo 3 merupakan salah satu Badan Usaha Milik Negara (BUMN) yang bergerak dalam jasa layanan operator terminal pelabuhan. Perusahaan dibentuk berdasarkan Peraturan Pemerintah Republik Indonesia Nomor 58 Tahun 1991 tentang Pengalihan Bentuk Perusahaan Umum (Perum) Pelabuhan III Menjadi Perusahaan Perseroan (Persero). Pelindo 3 mengelola 43 pelabuhan dengan 16 kantor cabang yang tersebar di tujuh propinsi di Indonesia meliputi Jawa Tengah, Jawa Timur, Bali, Nusa Tenggara Barat, Nusa Tenggara Timur, Kalimantan Tengah, dan Kalimantan Selatan. &lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#000000&quot; face=&quot;Times New Roman&quot;&gt;Sebagai perusahaan yang bergerak dalam bidang jasa, mengutamakan kepuasan pelanggan adalah menjadi prioritas. Pelindo 3 menjadi salah satu BUMN besar di Indonesia dengan tingkat jumlah aset yang meningkat setiap tahunnya. Pelindo 3 juga menjadi salah satu BUMN yang memasuki pasar global. Yang membuktikan bahwa Pelindo 3 memiliki daya saing yang tinggi dan menjadi perusahaan berkelas internasional.\r\n\r\nAnak perusahaan :\r\nPT Terminal Petikemas Surabaya (PT TPS), RS Primasatya Husada Citra (RS PHC), PT Berlian Jasa Terminal Indonesia (PT BJTI), PT Portek Indonesia (PORTEK) PT Ambang Barito Nusa Persada (AMBAPERS), PT Pelindo Marine Service (PT PMS) PT Jasamarga Bali Tol (PT JBT), PT Pelindo Daya Sejahtera (PT PDS), PT Terminal Teluk Lamong (PT TTL) Bidang usaha\r\n\r\nBidang usaha \r\nBidang usaha Pelindo III meliputi penyediaan dan pengusahaan :\r\n•	Jasa terminal, kegiatan konsolidasi dan distribusi barang termasuk hewan\r\n•	Pendidikan dan pelatihan yang berkaitan dengan kepelabuhanan\r\n•	Jasa pelayanan kesehatan\r\n•	Jasa transportasi di laut\r\n•	Jasa persewaan fasilitas dan peralatan di bidang kepelabuhahanan\r\n•	Jasa perbaikan fasilitas dan peralatan di bidang kepelabuhanan\r\n•	Properti di daerah lingkungan pelabuhan\r\n•	Kawasan industri di daerah lingkungan pelabuhan\r\n•	Kawasan wisata di daerah lingkungan pelabuhan\r\n•	Depo petikemas\r\n•	Jasa konsultan di bidang kepelabuhanan\r\n•	Jasa komunikasi dan informasi di bidang kepelabuhanan\r\n•	Jasa konstruksi di bidang kepelabuhanan, dan lain sebagainya.&lt;/font&gt;&lt;/p&gt;', 'Pendidikan', 'pelindo.png', '+62 31 3298631-37', 0, 0),
(7, 10, 'UNILEVER', '1933', 'Jalan Cokroaminoto no. 18, Tegalsari', 'Sejarah \r\nUnilever Indonesia, yang berdiri pada 5 Desember 1933, telah tumbuh hingga kini menjadi salah satu perseroan terdepan untuk kategori Fast Moving Consumer Goods di Indonesia. Kami telah hadir menemani perjalanan kehidupan masyarakat Indonesia melalui rangkaian produk Unilever Indonesia mencakup brand-brand ternama dunia seperti Pepsodent, Lux, Lifebuoy, Dove, Sunsilk, Clear, Rexona, Vaseline, Rinso, Molto, Sunlight, Wall’s, Blue Band, Royco, Bango dan lainnya.\r\n\r\nVisi \r\nUntuk meraih rasa cinta dan penghargaan dari Indonesia dengan menyentuh kehidupan setiap orang Indonesia setiap harinya.\r\n\r\nMisi : bekerja untuk menciptakan masa depan yang lebih baik setiap hari.\r\n\r\nKegiatan bisnis :\r\nUnilever adalah perusahaan global yang menjual barang-barang konsumen dengan penjualan cepat. Tujuan Unilever adalah memasyarakatkan kehidupan yang berkelanjutan.', 'Olahraga', 'unilever.jpg', '(031)8438297', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `id_organisasi` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `proposal` varchar(30) NOT NULL,
  `tanggal_pengajuan` varchar(30) NOT NULL,
  `status_notif` varchar(30) NOT NULL,
  `status_notif_admin` varchar(15) NOT NULL,
  `status_proposal` varchar(30) NOT NULL,
  `isi_balasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `id_organisasi`, `id_perusahaan`, `proposal`, `tanggal_pengajuan`, `status_notif`, `status_notif_admin`, `status_proposal`, `isi_balasan`) VALUES
(27, 4, 5, 'CV_habib_14.docx', '13-05-2018', '-', '-', 'Disetujui', '&lt;p&gt;kkjhajshdjas&lt;br&gt;&lt;/p&gt;'),
(28, 5, 5, 'CV_habib_15.docx', '13-05-2018', '-', '-', 'belum disetujui', '&lt;p&gt;jaldk&lt;br&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spj`
--

CREATE TABLE `spj` (
  `id_spj` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `spj` varchar(30) NOT NULL,
  `status_spj` varchar(15) NOT NULL,
  `status_notif` varchar(15) NOT NULL,
  `status_notif_organisasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spj`
--

INSERT INTO `spj` (`id_spj`, `id_proposal`, `spj`, `status_spj`, `status_notif`, `status_notif_organisasi`) VALUES
(12, 27, 'CV_habib_12.docx', 'Cleared', '-', 'Cleared');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `role`, `status`) VALUES
(1, 'habib', 'habib', 'habib@gmail.com', 'admin', 'terverifikasi'),
(8, 'pertamina', 'pertamina', 'pcc@pertamina.com', 'perusahaan', 'terverifikasi'),
(9, 'pelindo', 'pelindo', 'marketing@pelindo.co.id', 'perusahaan', 'terverifikasi'),
(10, 'unilever', 'unilever', 'marketing@unilever.co.id', 'perusahaan', 'terverifikasi'),
(11, 'binaraharja', 'binaraharja', 'binaraharja@gmail.com', 'organisasi', 'terverifikasi'),
(13, 'psmits', 'psmits', 'psmits.itsstudentchoir@gmail.c', 'organisasi', 'terverifikasi'),
(14, 'bemfti', 'bemfti', 'bem_fti@its.ac.id', 'organisasi', 'terverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indeks untuk tabel `spj`
--
ALTER TABLE `spj`
  ADD PRIMARY KEY (`id_spj`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `spj`
--
ALTER TABLE `spj`
  MODIFY `id_spj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
