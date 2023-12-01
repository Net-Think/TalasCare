-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 03:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talascare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `email`, `password`, `verified`) VALUES
(1, 'Admin Fiqih', 'adminfiqih', 'muhammadfiqih953@gmail.com', '$2y$10$LGiXae319CnqyeZVPLzN6OAOr8MgI/GT3fkSugWV0z34pnnPygcAi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_balasan`
--

CREATE TABLE `tbl_balasan` (
  `id_balasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_komentar` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_balasan`
--

INSERT INTO `tbl_balasan` (`id_balasan`, `id_user`, `id_komentar`, `tanggal`, `isi`) VALUES
(1, 8, 4, '0000-00-00', 'tes balasan'),
(2, 8, 9, '0000-00-00', 'tes'),
(3, 8, 6, '0000-00-00', 'wkwkkwwk'),
(4, 8, 6, '0000-00-00', 'kan emnag begitu bejir'),
(5, 9, 10, '2023-11-14', 'ngakak'),
(6, 8, 11, '2023-11-14', 'iya njir'),
(7, 8, 12, '2023-11-14', 'hbubuybyuuyb'),
(8, 8, 13, '2023-11-14', 'wkwkwkwk'),
(9, 8, 14, '2023-11-14', 'wkwkwk'),
(10, 8, 14, '2023-11-14', 'wkwkwkw'),
(11, 8, 14, '2023-11-14', 'heuifeihfuihfihwehfuwehfuewhfhwuehfuwehfuiweufhweuhfuwhefiuhweuifhweufhuwehfuiwehfuwehufihweufhweufhuwehfuwhfuiwehfuiwhfuiwehfuiwehfuihewuifhweuf'),
(12, 8, 15, '2023-11-15', 'heheheh'),
(13, 8, 15, '2023-11-15', 'jijgirjigjirjgir'),
(14, 8, 15, '2023-11-15', 'hjijrijhirjijijhirjihjr'),
(15, 8, 15, '2023-11-15', 'kohtkotohkotkhktoht'),
(16, 8, 21, '2023-11-15', 'wkwkwkk'),
(17, 8, 22, '2023-11-27', 'oh gitu terima kasih');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_blog` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_blog`, `id_admin`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(1, 1, '2023-11-09', 'Manfaat Tanaman Talas bagi Kehidupan Manusia', '<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-5\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV track_paragraph mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-5\">\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Ada banyak sekali jenis tanaman yang ada di dunia ini. Dari sekian jenis tanaman, ada yang berbahaya dan ada juga yang bermanfaat bagi manusia. Salah satu tanaman yang bermanfaat bagi kehidupan manusia adalah talas. Sebutkan pemanfaatan <a class=\"components__StyledLink-sc-il899o-0 ckWUNA _918c86772 enabled\" draggable=\"false\" href=\"https://kumparan.com/topic/tanaman\" data-key=\"636e0e0071da32000c7e48f0-36-6\">tanaman </a>talas! Manfaat yang paling jelas adalah sebagai sumber pangan. </span></div>\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\">&nbsp;</div>\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Talas bisa diolah menjadi berbagai makanan dan minuman yang lezat. Misalnya saja bolu talas dan keripik talas yang memiliki banyak penggemar. Selain lezat dan mengenyangkan, tals juga memiliki segudang manfaat. Apa saja manfaatnya? Simak manfaat talas dalam artikel ini.</span></div>\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\">\r\n<h2 id=\"manfaat-tanaman-talas\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfdefault txwbold txdisplay-small\" data-qa-id=\"story-subtitle\">Manfaat Tanaman Talas</span></h2>\r\n<p><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfdefault txwbold txdisplay-small\" data-qa-id=\"story-subtitle\">Makanan pokok mayoritas masyarakat Indonesia adalah nasi. Bahkan banyak orang Indonesia yang merasa belum makan kalau belum makan nasi. Namun, ada daerah yang menjadikan talas sebagai makanan pokoknya. Seperti yang dijelaskan dalam<em data-key=\"636e0e0071da32000c7e48f0-36-16\"> Pertanian Terpadu untuk Mendukung Kedaulatan Pangan Nasional</em> oleh Sunarminto (2014), di daerah tertentu di Papua, talas dimakan sebagai makanan pokok. Sementara di daerah lain talas dimakan sebagai makanan tambahan dengan cara diolah menjadi berbagai jenis makanan.</span></p>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-19\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV track_paragraph mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-19\">\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Talas memiliki banyak <a class=\"components__StyledLink-sc-il899o-0 ckWUNA _918c86772 enabled\" draggable=\"false\" href=\"https://kumparan.com/topic/manfaat\" data-key=\"636e0e0071da32000c7e48f0-36-20\">manfaat </a>bagi manusia. Berikut ini manfaatnya:</span></div>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-21\">\r\n<div data-qa-id=\"story-page-2\">&nbsp;</div>\r\n<div class=\"sc-5mlv5q-0 duWSXf\">&nbsp;</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-22\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV  mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-22\">\r\n<h3 id=\"menjaga-kadar-gula-darah\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfdefault txwbold txextra-large\" data-qa-id=\"story-minor-subtitle\">Menjaga Kadar Gula Darah</span></h3>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-23\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV track_paragraph mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-23\">\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Kadar gula darah harus dijaga agar tetap stabil. Gula darah yang tinggi bisa menyebabkan penyakit diabetes. Kalian bisa mengonsumsi makanan yang mengandung karbohidrat kompleks dan serat untuk menjaga kadar gula darah. Salah satunya adalah talas. Talas memiliki indeks glikemik rendah sehingga sangat bagus.</span></div>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-24\">\r\n<div data-qa-id=\"story-page-2\">&nbsp;</div>\r\n<div class=\"sc-5mlv5q-0 duWSXf\">&nbsp;</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-25\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV  mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-25\">\r\n<h3 id=\"mencegah-penyakit-jantung\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfdefault txwbold txextra-large\" data-qa-id=\"story-minor-subtitle\">Mencegah Penyakit Jantung</span></h3>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-26\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV track_paragraph mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-26\">\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Talas mengandung serat, kalium, dan antioksidan yang cukup tinggi. Serat yang ada dalam talas berfungsi untuk memastikan kadar kolesterol tetap normal. Kalium dalam talas baik untuk mencegah tekanan darah tinggi. Seperti yang sudah diketahui, kolesterol tinggi dan tekanan darah tinggi berkaitan dengan penyakit jantung.</span></div>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-28\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV  mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-28\">\r\n<h3 id=\"menjaga-berat-badan\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfdefault txwbold txextra-large\" data-qa-id=\"story-minor-subtitle\">Menjaga Berat Badan</span></h3>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-29\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV track_paragraph mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-29\">\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Melihat angka timbangan yang semakin naik akan membuat sebagian orang stres. Jika kalian ingin menjaga berat badan, kalian bisa coba mengkonsumsi talas karena serat dan karbohidrat dalam talas membutuhkan waktu yang lebih lambat untuk dicerna.</span></div>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-32\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV  mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-32\">\r\n<h3 id=\"sebagai-sayuran\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfdefault txwbold txextra-large\" data-qa-id=\"story-minor-subtitle\">Sebagai Sayuran</span></h3>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-33\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV track_paragraph mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-33\">\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Ternyata tidak hanya umbinya saja yang bisa dikonsumsi, daun dan tangkai daun talas yang masih muda bisa dijadikan sebagai sayuran.</span></div>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-35\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV  mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-35\">\r\n<h3 id=\"tips-mengolah-umbi-talas\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfdefault txwbold txextra-large\" data-qa-id=\"story-minor-subtitle\">Tips Mengolah Umbi Talas</span></h3>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-36\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV track_paragraph mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-36\">\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Meskipun rasanya enak dan memiliki banyak manfaat, ternyata getah talas akan membuat kulit gatal. Supaya kulit kalian tidak gatal ketika menyiapkan talas, simak tips berikut ini:</span></div>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-38\">\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-43\">\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-46\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV track_paragraph mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-46\">\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\">\r\n<ol>\r\n<li><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Gunakan sarung tangan. Pertama kalian harus memakai sarung tangan untuk melindungi tangan dari getah talas. Cara ini juga akan membuat tangan lebih bersih.</span></li>\r\n<li>Kupas kulit talas. Selanjutnya, kupas kulit talas. Hati-hati ketika mengupasnya karena getah talas akan keluar. Setelah dikupas, cuci umbi talas dan lumuri permukaannya dengan garam. Gosok hingga getahnya hilang.</li>\r\n<li>Rendam dengan air&nbsp;<a class=\"components__StyledLink-sc-il899o-0 ckWUNA _918c86772 enabled\" draggable=\"false\" href=\"https://kumparan.com/topic/garam\" data-key=\"636e0e0071da32000c7e48f0-36-49\">garam</a>. Jika sudah dicuci tetapi getahnya masih banyak, potong-potong umbi talas sesuai selera lalu rendam dengan air garam. Sebelum diolah, pastikan umbi talas sudah benar-benar bersih.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-40\">\r\n<div class=\"Viewweb__StyledView-sc-b0snvl-0 eBqMbV track_paragraph mt15 mb15\" data-key=\"636e0e0071da32000c7e48f0-36-40\">\r\n<div class=\"TextBoxweb__StyledTextBox-sc-1noultz-0 REikg\"><span class=\"Textweb__StyledText-sc-1ed9ao-0 dlnxkK  c275a64364 txfserif txwregular txextra-large\" data-qa-id=\"story-paragraph\">Itulah manfaat tanaman talas untuk kehidupan manusia. Talas memiliki banyak manfaat namun agak susah untuk disiapkan karena getahnya membuat kulit gatal. (KRIS)</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-7\">&nbsp;</div>\r\n<div class=\"components__NormalWidth-sc-hglo4q-0 ejoxAk\" data-key=\"636e0e0071da32000c7e48f0-36-8\">&nbsp;</div>', 'Blog01.jpg'),
(2, 1, '2023-11-09', 'Talas Beneng salah satu Alternatif Penyangga Ketahanan Pangan Kedepan', '<p><strong>PanganNews.id&nbsp;</strong>Jakarta - Peningkatan emisi gas rumah kaca yang diakibatkan dari emisi karbon yang terus meningkat dari hasil proses pembakaran bahan bakar berbasis fosil atau pun batubara menjadi salah satu penyebab utama terjadinya perbahan iklim. Ketahanan pangan yang merupakan tantangan bagi sektor pertanian merupakan salah satu sektor yang terpengaruh secara langsung dari dampak kejadian perubahan iklim saat ini, disamping terjadinya pandemi covid-19 yang melanda di seluruh dunia.</p>\r\n<p>&nbsp;</p>\r\n<p>FAO melaporkan di tahun 2021 terjadi perburukan kerawanan pangan diberbagai negara. Lebih dari 190 juta orang mengalami kerawanan pangan akut, yang diakibatkan oleh antara lain konflik perang, krisis ekonomi, dan perubahan iklim yang ekstrim. Dalam rangka menghadapi krisis pangan global dan upaya mendorong ketahanan pangan nasional, pemerintah telah melakukan berbagai bauran strategi dan kebijakan, salah satunya pengembangan penganekaragaman pangan dan pengembangan potensi pangan lokal.</p>\r\n<p>&nbsp;</p>\r\n<p>Pangan lokal di setiap daerah memiliki karakter dan jenis yang berbeda-beda seperti di daerah Banten. Potensi pangan lokal di Banten sangatlah tinggi dilihat dari keanekaragaman pangan lokal yang dihasilkan. Pangan lokal di Banten yang sedang digencarkan potensinya yaitu talas beneng. Talas beneng merupakan salah satu bio-diversitas lokal yang banyak tumbuh secara liar di sekitar kawasan Gunung Karang Kabupaten Pandeglang, Provinsi Banten. Talas beneng mempunyai ukuran yang besar dengan kadar protein dan karbohidrat tinggi serta warna kuning yang menarik sehingga berpotensi untuk dikembangkan menjadi aneka produk pangan dalam upaya menunjang ketahanan pangan.</p>\r\n<p>&nbsp;</p>\r\n<p>Tanaman talas beneng ini memiliki umbi yang bisa mencapai berat hingga 20 kg dalam kurun waktu 2 tahun penanaman. Umbi dengan nama latin Xantoshoma undipes k. Koch, ini mempunyai kandungan nutrisi, meliputi kandungan protein 2,01%, karbohidrat 18,30%, lemak 0,27%, pati 15,21% dan kalori sebesar 83,7 kkal. Dengan kandungan gizi yang cukup tinggi ini, maka komoditas ini memiliki potensi besar untuk dijadikan bahan pangan lokal subtitusi beras dan tepung terigu.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Seperti halnya komoditas talas lainnya, talas beneng juga memiliki kandungan asam oksalat yang cukup tinggi, Dalam aspek keamanan pangan, perlu dilakukan proses perlakuan untuk mengurangi atau menghilangkan kandungan asam oksalat. Namun dari segi bisnis, oksalat ini jika dapat dipisahkan dari talas beneng, akan memiliki nilai jual dalam bentuk serbuk. Asam oksalat dapat dipasarkan untuk industry kimia, kosmetik dan farmasi.</p>\r\n<p>&nbsp;</p>\r\n<p>Talas beneng merupakan komoditas pertanian yang bersifat perishable food (mudah mengalami kerusakan) sehingga memerlukan penanganan khusus, salah satu upaya untuk mengatasi kerusakan adalah mengolahnya menjadi tepung. Secara umum permasalahan yang dihadapi dalam mengembangkan usaha pengolahan hasil pertanian yaitu sifat produk pertanian yang mudah rusak, sebagian produk pertanian bersifat musiman dan sangat dipengaruhi oleh iklim serta kualitas produk pertanian yang dihasilkan pada umumnya masih rendah sehingga akan ada kesulitan dalam persaingan pasar baik di dalam negeri maupun di pasar internasional.</p>\r\n<p>&nbsp;</p>\r\n<p>Pada tanggal 22 September 2022 Tenaga Ahli Mentan telah melakukan kunjungan ke Banten dengan tujuan untuk melakukan brainstorming pengembangan hilirisasi produk pertanian khususnya talas beneng. Dengan difasilitasi oleh BPTP Banten, kunjungan kerja tersebut dikemas dengan konsep Gelar Temu Usaha \"Optimalisasi Usahatani Talas Beneng\".&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Temu Usaha dilaksanakan di Kp. Cinyurup Kelurahan Juhut Kec. Karang Tanjung Kab. Pandeglang yang merupakan lokasi sentra budidaya talas beneng. Pertemuan tersebut dihadiri oleh potensial investor, Dinas Pertanian Provinsi Banten, Dinas Ketahanan Pangan Provinsi Banten, Dinas Pertanian dan Ketahanan Pangan Kab. Pandeglang, dan pengusaha lokal Talas Beneng dan petani.</p>\r\n<p>&nbsp;</p>\r\n<p>Pertemuan dibuka oleh, Kepala BPTP Banten Dr. <strong>Ismatul Hidayah</strong>, SP, MP dengan menjelaskan sekilas tentang talas beneng. Talas beneng dapat berkembang karena potensinya yang besar. Semua bagian dari talas beneng dapat dimanfaatkan, tidak hanya terbatas pada umbi dan daun. Pengembangan talas beneng dilakukan bukan pada lahan produktif melainkan di lahan-lahan darat di bawah tegakan sehingga tidak bersaing dengan lahan untuk sawah.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Dinas Pertanian Provinsi Banten menyampaikan bahwa sejak 2020-2022, pihaknya telah mengalokasikan pengembangan Talas Beneng pada lahan seluas 250 ha dengan bantuan berupa saprodi dengan dana yang bersumber dari APBN Pusat. <strong>Dudi Supriyadi,</strong>&nbsp;SP selaku pelaku usaha sekaligus penyuluh pertanian di Kab. Pandeglang menyampaikan bahwa sejak tahun 2009, pihaknya telah memasok kebutuhan tepung untuk usaha bolu talas bogor dengan skala usaha rumah tangga, dan juga penyerap pasar usaha Ibu-ibu rumah tangga dengan produk berupa gaplek yang akan dijadikan tepung talas beneng.</p>\r\n<p>&nbsp;</p>\r\n<p>Tercatat sampai saat ini, sudah 420 kelompok tani talas beneng dari seluruh Indonesia yang tergabung dalam Asosiasi Talas Beneng Indonesia (Astalbenindo). Kegiatan ekspor berbasis talas beneng saat ini dilakukan melalui pelabuhan atau karantina Surabaya, hal ini dikarenakan pengusaha eksportirnya berlokasi di Surabaya. Permintaan ekspor yang masih belum terpenuhi saat ini adalah produk pati talas beneng berjumlah 500 ton/bulan ke Negara Korea Selatan, dan juga tepung talas beneng ke Turki.</p>\r\n<p>&nbsp;</p>\r\n<p>Ibu Hj. <strong>Rully</strong>, pengusaha lokal olahan talas beneng menyampaikan bahwa pihaknya saat ini dapat membuat 17 produk turunan dari talas beneng. Salah satu produknya adalah serat benang talas beneng, dan serat benang tersebut telah diminta oleh Korea dan direncanakan akan siap produknya di awal tahun 2023. Selain tepung, stik, keripik, dan brownies, talas beneng juga dapat diolah menjadi berbagai kreasi seni berupa hiasan dinding, tatakan gelas, nampan yang dapat dibuat dari pelepahnya. Selanjutnya, kulitnya dibuat tepung untuk pakan ternak. Ibu Hj. Rully menjelaskan bahwa saat ini Korea membutuhkan tepung tapioka, serat beneng, frozen food, dan kripik yang berbahan baku talas beneng.</p>\r\n<p>&nbsp;</p>\r\n<p>Berbagai kendala yang dihadapi oleh petani maupun pengusaha lokal talas beneng antara lain adalah: standar produk yang belum seragam, skala usaha yang masih berupa industri rumah tangga, pengerjaan yang masih manual, skala dan kontinuitas bahan baku talas beneng yang masih terbatas, dimana hal ini merupakan akibat dari masih terbatasnya jumlah penangkar benih talas beneng. Tercatat baru ada 4 kelompok penangkar benih talas beneng yang bersertifikat.</p>\r\n<p>&nbsp;</p>\r\n<p>Arahan dari Tenaga Ahli Menteri Pertanian bidang hilirisasi produk pertanian, menyampaikan bahwa sudah menjadi tugas pemerintah atau industri untuk membuat standar produk talas beneng sesuai keinginan pasar, dan talas beneng perlu dikembangkan karena sangat berpotensi sebagai sumber pangan. Pada saat ini semua negara akan mencari bahan pangan alternatif, mengingat krisis pangan global yang siap melanda negara-negara di dunia. Potensi talas beneng ini memiliki pasar yang sangat luas meskipun ketersediaannya belum maksimal. Untuk itu, perlu intervensi pemerintah, salah satunya adalah intervensi inovasi teknologi. Selain itu, dibutuhkan kerjasama dari semua pihak dari hulu hingga hilir, dan diperlukan lahan untuk pengembangan talas beneng ini, terutama dapat memanfaatkan lahan-lahan di bawah tegakan seperti lahan milik Perhutani.</p>', 'Blog02.jpg'),
(3, 1, '2023-11-09', 'Melirik Potensi Talas sebagai Pangan Lokal', '<p><strong>Talas selama ini menjadi icon oleh-oleh dari Kota Bogor. Bahkan di kota hujan tersebut kini berkembang produk olahan pangan berbahan baku talas yakni Lapis Bogor.</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Tanaman umbi-umbian ini mempunyai potensi besar sebagai sumberdaya pangan lokal. Apalagi komoditi ini dapat tumbuh pada semua jenis tanah dengan adaptasi yang tinggi dan produktivitasnya cukup tinggi.</p>\r\n<p>&nbsp;</p>\r\n<p>Tanaman ini dapat tumbuh di tanah berbatu, agroekosistem rawa, lahan berpasir, batu bertanah dan lahan kering. Tumbuhan ini juga toleran terhadap naungan (tempat teduh). Bisa juga ditanam sebagai tumbuhan selingan pada pertanian.</p>\r\n<p>&nbsp;</p>\r\n<p>Sayangnya, sebagai tanaman asli tropis, talas masih dipandang sebelah mata oleh sebagian masyarakat. Di wilayah pedesaan, masyarakat juga enggan membudidayakan tanaman ini, meski hanya di pekarangan rumah.</p>\r\n<p>&nbsp;</p>\r\n<p>Masyarakat sebenarnya bisa memanfaatkan pekarangan sebagai sumberdaya pangan lokal, termasuk dari talas. Dengan demikian akan mengurangi ketergantungan pada pangan yang berasal dari padi. Selain itu tanaman ini tidak mengenal musim.</p>\r\n<p>&nbsp;</p>\r\n<p>Talas merupakan sumber pangan penting. Selain sumber karbohidrat, protein dan lemak, talas juga mengandung beberapa unsur mineral dan vitamin sehingga dapat menjadi bahan obat-obatan. Kadar pati umbi talas 66,8% dengan kadar air sekitar 7,2%.</p>\r\n<p>&nbsp;</p>\r\n<p>Pemanfaatan talas sebagai bahan pangan telah dikenal luas. Saat ini pengolahan talas kebanyakan memanfaatkan umbi segar menjadi berbagai hasil olahan. Paling populer adalah keripik talas dan susu talas. Karena itu talas mempunyai peluang besar dikembangkan.</p>\r\n<p>&nbsp;</p>\r\n<p>Pengembangan talas sebagai sumber pangan lokal akan menjadi sumbangan dalam upaya pemerintah mempercepat penganekaragaman konsumsi pangan. Apalagi ketergantungan masyarakat Indonesia terhadap beras cukup tinggi. Diperkirakan konsumsi beras masyarakat Indonesia mencapai 139,15 kg/kapita/tahun.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Lahan Pekarangan</strong></p>\r\n<p>Salah satu wilayah Indonesia yang berpotensi untuk pengembangan talas adalah Kabupaten Lumajang. Di wilayah tersebut talas tersebar di berbagai agro ekosistem. Mulai dataran rendah atau tinggi. Dari lahan basah sampai kering. Berdasarkan kesesuaian argo ekosistem dijumpai beragam kultivar talas.</p>\r\n<p>&nbsp;</p>\r\n<p>Kantor Ketahanan Pangan Kabupaten Lumajang pernah memunculkan program SI GEMPAL (Aksi Gerakan Kembali ke Pangan Lokal). Program tersebut disambut kelompok wanita tani di perdesaan.</p>', 'Blog03.jpg'),
(4, 1, '2023-11-09', 'Tanaman Talas, Bukan Hanya Milik Bogor', '<p>Pakar botani LIPI Made Sri Prana, seperti dikutip dalam laman biotek.lipi.go.id, menyatakan, &ldquo;Talas merupakan plasma nutfah yang penting karena merupakan salah satu jenis ubi-ubian asli Indonesia dan sudah teruji serta terbukti beradaptasi dengan baik&rdquo;.</p>\r\n<p>&nbsp;</p>\r\n<p>Talas umumnya dijumpai baik liar maupun ditanam hampir di seluruh kepulauan, tanaman ini pun tersebar di tepi pantai sampai pegunungan di atas 1.000m dpl. Talas memiliki berbagai nama unik di seluruh dunia seperti taro, old cocoyam, abalong, taioba, arvi, satoimo, tayoba dan yu-tao. Tidak kalah seperti di luar, di Indonesia talas juga mempunyai penamaan yang berbeda di setiap daerah, seperti eumpeu (Aceh), talo (Nias), bete (Manado dan Ternete), kaladi (Ambon), talak (Tolitoli), paco (Makassar), komo (Tidore) dan masih banyak lagi. Oleh karena itu talas tidak hanya tanaman khas Bogor, namun tanaman ini memang tumbuh dan tersebar hampir di seluruh penjuru Nusantara.</p>\r\n<p>&nbsp;</p>\r\n<p>Tanaman talas (<em>Colocasia esculentum (L) Schott</em>) sangat mudah dibudidayakan di daerah tropik dan sub-tropik, termasuk Indonesia. Umbi talas kaya akan karbohidrat di mana kandungannya mencapai 13-29 persen. Bahkan produksi talas dalam kalori per hektare per hari (46&times;1 juta kalori per ha per hari) relatif lebih tinggi daripada padi (33&times;1 juta kalori per ha per hari). Sedangkan kandungan nutrisi lainnya seperti protein dan vitamin juga tidak kalah dibanding ubi dan singkong. Hal ini yang membuat talas dapat digunakan sebagai sumber energi yang potensial bagi manusia melalui berbagai proses modifikasi.</p>\r\n<p>&nbsp;</p>\r\n<p>Secara morfologi, talas termasuk dalam golongan tanaman monokotil yang berumur tahunan dengan tinggi tanaman sekitar 50-150 cm. Berakar serabut yang dangkal, tersusun dari sekelompok akar adventif. Akar adventif adalah akar yang tumbuh tidak pada tempatnya. Memiliki batang yang pendek dan terbungkus oleh pelepah daun. Batang talas tumbuh dengan arah tegak.</p>\r\n<p>&nbsp;</p>\r\n<p>Tanaman talas mempunyai daun lengkap yang terdiri dari helaian daun, tangkai daun dan pelepah. Jumlah daun 2 sampai 5 helai dan tergolong daun tunggal. Tangkai daun berwarna hijau dan bergaris. Helaian daun berukuran 6 sampai 60 cm dengan lebar 7 sampai 53 cm, berbentuk bulat oval seperti perisai dengan ibu tulang daun yang besar. Daunnya mengandung 23 persen protein (berat kering), kaya kalsium, fosfor, besi, vitamin (C, tiamina, riboflavin, dan niacin).</p>\r\n<p>&nbsp;</p>\r\n<p>Terdapat 4 macam jenis talas yaitu talas pandan, talas ketan, talas banteng dan talas lahun anak (dikutip pada laman&nbsp;<a class=\"vglnk\" href=\"http://faunadanflora.com/\" rel=\"nofollow\">faunadanflora.com</a>). Talas pandan yaitu talas yang apabila sudah direbus memiliki bau seperti pandan wangi, memiliki warna sedikit ungu dan pada bagian pangkal pelepahnya memiliki warna agak merah. Talas ketan, atau yang dijuluki talas Bogor, yaitu talas yang agak lengket seperti ketan yang sudah direbus, memiliki warna hijau muda dan sering membuat anakan sangat banyak.</p>\r\n<p>&nbsp;</p>\r\n<p>Talas banteng yaitu talas yang memiliki ukuran umbi yang besar namun rasanya tidak enak, memiliki tangkai berwarna ungu. Talas lahun anakan yaitu talas yang memiliki banyak anakan namun ukurannya kecil-kecil.</p>\r\n<p>&nbsp;</p>\r\n<p>Tanaman talas selama ini memang menjadi ikon kota Bogor selain julukannya sebagai kota hujan. Pasalnya, tanaman ini sudah terkenal sebagai bahan dalam olahan kue sejenis bolu atau brownis yang kemudian dijual di gerai-gerai oleh-oleh yang biasa dibeli oleh wisatawan jika hendak berkunjung ke Bogor. Adapun talas yang masih mentah banyak dijual dipinggiran jalan. Talas mentah biasa diolah menjadi hidangan cemilan berupa keripik talas atau talas goreng.</p>\r\n<p>&nbsp;</p>\r\n<p>Meski bisa dikonsumsi, namun umumnya talas tidak dapat dikonsumsi secara langsung tanpa diolah terlebih dahulu. Hal ini disebabkan kalsium oksalat yang terkandung di dalamnya dapat menyebabkan rasa gatal pada mulut, lidah dan tenggorokan. Namun, beberapa teknologi pengolahan talas bisa menurunkan kadar asamnya hingga 50 persen.</p>\r\n<p>&nbsp;</p>\r\n<p>Melihat dari manfaat dan tingginya kandungan gizi yang terkandung dalam talas, maka tanaman talas perlu dikembangkan menjadi pangan alternatif nasional selain beras dalam rangka meningkatkan ketahanan pangan nasional.</p>\r\n<p>&nbsp;</p>\r\n<p>Dikutip pada laman biotek.lipi.go.id, Indonesia menjadi daerah terpenting perkembangbiakan talas. Dari kegiatan eksplorasi Kelompok Peneliti Talas Puslit Bioteknologi LIPI di wilayah Lampung, Jawa, Bali, dan Sulawesi Selatan, dibawalah 713 sampel. Hasil studi morfologi dan biokimia (isozymes) menyebutkan, tidak kurang ada 180 morfotipe talas. Berdasarkan penelitian yang telah dilakukan, di Kepulauan Mentawai ada 150 kultivar talas lokal. Hal ini menguatkan dugaan bahwa sekitar 30 tahun yang lalu Indonesia memiliki lebih dari 300 talas berikut variannya.</p>\r\n<p>&nbsp;</p>\r\n<p>Selain itu, tim LIPI pun berhasil memperoleh 20 jenis talas lokal potensial. Uji provenan terhadap 20 talas tersebut didapatkan hasil, antara lain jenis talas Kaliurang (talas LIPI) lebih unggul, produktivitasnya tinggi, dapat ditanam di dataran rendah dan tinggi, tahan serangan hama, umbinya enak dan tahan penyakit atau Taro Leaf Blight (TLB).</p>', 'Blog04.jpg'),
(5, 1, '2023-11-09', 'Ketahui, Potensi Talas Beneng Sebagai Pangan Lokal', '<p>JAKARTA, KOMPAS.com &ndash; Ada komoditas unggulan masyarakat Kabupaten Pandeglang, Banten, yang layak diketahui dan dikonsumsi oleh masyarakat luas, yaitu talas beneng.</p>\r\n<p>&nbsp;</p>\r\n<p>Penyuluh Pertanian Kabupaten Pandeglang Dudi Supriyadi mengungkapkan, tanaman yang juga dikenal dengan nama Xantoshoma undipes K. Koch ini merupakan pangan lokal yang memiliki berbagai macam keunggulan.</p>\r\n<p>&nbsp;</p>\r\n<p>Salah satunya adalah optimalisasi lahan. Mereka bisa ditanam di bawah tegakan tanaman lainnya, seperti cengkeh atau karet. Jadi, penggunaan lahan bisa lebih dimaksimalkan.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Kelebihan talas ini mengoptimalisasi lahan marginal karena di kami, lahan-lahan terbuka untuk pangan lain. Jadi, talas beneng kalau ditanam enggak akan mengganggu program jagung, dan pangan lainnya,&rdquo; ujar dia dalam Bimbingan Teknis &amp; Sosialisasi Propaktani Direktorat Jenderal Tanaman Pangan (Ditjen TP) secara virtual, Kamis (2/6/2022).&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Talas beneng adalah tanaman yang tingginya bisa mencapai lebih dari 2 meter (2m) dengan panjang mencapai 1,2-1,5 m untuk yang siap panen.</p>\r\n<p>&nbsp;</p>\r\n<p>Bobotnya berada pada kisaran 35-5 kilogram (kg) jika dipanen saat berusia dua tahun. Dudi menuturkan, para petani di sana umumnya memanen talas beneng saat mereka berada pada rentan usia enam hingga delapan bulan.</p>\r\n<p>&nbsp;</p>\r\n<p>Adapun pemilihan usia panen ini lantaran rasa yang ditawarkan oleh talas beneng ketika diolah menjadi makanan lain akan lebih nikmat.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Beda dengan talas Bogor yang akan membusuk. Setelah dipanen, rasa talas beneng bisa tahan sampai empat bulan lamanya selama belum dikupas,&rdquo; kata Dudi.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Namun, umur panen yang optimal dengan rasa yang nikmat untuk olahan itu ketika sudah berusia enam sampai delapan bulan,&rdquo; imbuhnya.</p>\r\n<p>&nbsp;</p>\r\n<h2><strong>Potensi yang dimiliki talas beneng</strong></h2>\r\n<h3>Kandungan yang baik untuk manusia</h3>\r\n<p>&nbsp;</p>\r\n<p>Situs resmi Kementerian Pertanian Badan Penelitian dan Pengembangan Pertanian mengungkapkan, talas beneng memiliki kadar protein, mineral, dan serat pangan yang relatif tinggi.</p>\r\n<p>&nbsp;</p>\r\n<p>Namun, mereka juga mengandung 2,01 persen protein, 18,30 persen karbohidrat, 0,27 persen lemak, 15,21 persen pati, dan 83,7 kkal kalori.</p>\r\n<p>&nbsp;</p>\r\n<p>Talas beneng memang memiliki kadar oksalat yang tinggi. Namun, jika direndam dalam garam, kadar oksalat dapat menurun.</p>\r\n<p>&nbsp;</p>\r\n<h3>Bisa diolah menjadi makanan jadi</h3>\r\n<p>Menilik kandungannya, tidak mengherankan jika pangan lokal asli Kabupaten Pandeglang ini dapat diolah menjadi produk makanan lain seperti tepung, beras analog, keripik, bakpao, kue kering, mi, bahkan rokok.</p>\r\n<p>&nbsp;</p>\r\n<p>Umbi talas beneng, ujar Dudi, dapat dilunakkan dengan cara direbus untuk diolah menjadi kue donat talas, chiffon cake, kue marmer dan bubur beneng manis.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;(Juga bisa diolah menjadi) kroket talas beneng, kering atau sambal goreng beneng, talam beneng, dan klapretaart beneng,&rdquo; jelasnya.</p>\r\n<p>&nbsp;</p>\r\n<p>Dudi tidak menampik bahwa talas dapat membuat seseorang gatal jika mutu dan pengolahannya tidak dilakukan dengan baik.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Oleh karena itu, para petani dibina dan dibimbing untuk melakukan proses pencucian yang alami menggunakan larutan garam.</p>\r\n<p>&nbsp;</p>\r\n<p>Talas mentah ini mengandung kalsium oksalat yang menyebabkan rasa gatal di mulut. Terkait pengolahan talas beneng menjadi tepung, Dudi menjelaskan bahwa para petani mengupas, memarut, dan menjemurnya terlebih dulu sebelum dikirim ke Bogor.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Talas yang sudah dijemur dikirim ke Bogor untuk dijadikan tepung. Tepung tersebut bisa digunakan untuk membuat berbagai olahan makanan, seperti brownies dan lain-lain,&rdquo; katanya.</p>\r\n<p>&nbsp;</p>\r\n<h3>Mendongkrak perekonomian warga</h3>\r\n<p>Dudi menceritakan, talas beneng pertama kali ditawarkan oleh Gapoktan Juhut Mandiri ke kalangan pengusaha kue.</p>\r\n<p>&nbsp;</p>\r\n<p>Mulai saat itu, talas beneng pun banyak dipesan, baik dalam kondisi umbi segar maupun tepung. Umumnya, pelanggan berasal dari pegiat kuliner, seperti pengusaha kue, roti, dan keripik.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Dari seputar Jabodetabek, Semarang, Pekanbaru, Lampung, dan Batam. Setelah mulai mencuat hasilnya, pihak Departemen Pertanian melirik potensi usaha ini. Dibantu promosinya ke berbagai pameran di Indonesia,&rdquo; jelas dia.</p>\r\n<p>&nbsp;</p>\r\n<p>Untuk tepung sendiri, para petani talas beneng mampu memproduksi 50 kg tepung talas beneng per bulan pada 2010.</p>\r\n<p>&nbsp;</p>\r\n<p>Jumlahnya kian meningkat menjadi 4 ton tepung per bulan mulai 2013 hingga 2015, sebelum menurun menjadi 3 ton per bulan pada 2016, dan naik kembali menjadi 4 ton per bulan pada 2017-2019.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Penghasilan tepung hingga 4 ton per bulan rutin terjadi, tapi akibat Covid-19 jadi ada penurunan,&rdquo; ucap Dudi.</p>\r\n<p>&nbsp;</p>\r\n<p>Pada 2020, tepatnya saat Covid-19 mulai melanda Indonesia, produksi tepung talas beneng menurun dari 4 ton per bulan menjadi 2 ton per bulan. Angka ini terus berlanjut hingga 2021.<br><br></p>', 'Blog05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(1, 'Apa Ciri-Ciri Tanaman Talas Terkena Hama?', 'Beberapa ciri umum talas terkena hama adalah daun berlubang-lubang, layu, menguning, atau kering, dan umbi membusuk.'),
(2, 'Hama Apa Yang Sering Menyerang Tanaman Talas?', 'Hama yang sering menyerang tanaman talas adalah ulat daun, belalang, kutu daun, penggerek batang, tungau merah, dan ulat grayak. Hama-hama ini dapat menyerang bagian daun, batang, maupun umbi talas.'),
(3, 'Penyakit Apa Yang Sering Menyerang Tanaman Talas?', 'Penyakit yang sering menyerang tanaman talas adalah busuk umbi, hawar daun, dan layu bakteri. Penyakit-penyakit ini dapat menyebabkan kematian tanaman talas.'),
(4, 'Bagaimana Cara Mengendalikan Hama Belalang?', 'Hama belalang dapat dikendalikan dengan cara pengendalian fisik, hayati, atau kimia. Pengendalian fisik dilakukan dengan mengumpulkan dan memusnahkan belalang secara manual. Pengendalian hayati dilakukan dengan memanfaatkan musuh alami belalang, seperti burung, katak, dan capung. Pengendalian kimia dilakukan dengan menggunakan pestisida yang sesuai.'),
(5, 'Berapa Rasio Pupuk Urea Yang Baik Untuk Tanaman Talas?', 'Rasio pupuk urea yang baik untuk tanaman talas adalah 100-150 kg urea/ha. Rasio ini dapat disesuaikan dengan kondisi lahan dan jenis talas yang dibudidayakan.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum`
--

CREATE TABLE `tbl_forum` (
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `image` text DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_forum`
--

INSERT INTO `tbl_forum` (`id_forum`, `id_user`, `isi`, `image`, `tanggal`) VALUES
(38, 8, 'Halo guys, ada yang tau ga ya ini kenapa daunnya seperti ini?', 'talas-lubang.png', '2023-11-16'),
(42, 9, 'Gimana cara nanem talas?', '', '2023-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hama`
--

CREATE TABLE `tbl_hama` (
  `id_hama` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `pencegahan` text NOT NULL,
  `pengobatan` text NOT NULL,
  `gambar` text NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hama`
--

INSERT INTO `tbl_hama` (`id_hama`, `nama`, `deskripsi`, `pencegahan`, `pengobatan`, `gambar`, `jenis`) VALUES
(1, 'Serangga Aphis Gossyipii', 'Aphis gossypii memiliki tubuh kecil dan ramping, berwarna hijau atau hitam. Mereka biasanya ditemukan di bagian bawah daun dan dapat berkembang biak dengan cepat, menyebabkan kerugian pada tanaman talas.', '1. Monitoring Rutin: Periksa tanaman secara rutin untuk mendeteksi tanda-tanda awal serangan kutu daun.\r\n2. Kebersihan Tanaman: Pastikan tanaman talas tetap bersih dari gulma dan serasah, karena ini dapat menjadi tempat persembunyian bagi kutu daun.\r\n3. R', '1. Siram Air: Gunakan air dengan tekanan rendah untuk menyiram tanaman dan membersihkan kutu daun dari daun.\r\n2. Sabun Insektisida: Campurkan sabun insektisida dengan air dan semprotkan pada tanaman. Ini dapat membantu membunuh kutu daun tanpa merusak tan', 'Hama_Serangga Aphis Gossyipii.jpg', 'Hama'),
(2, 'Ulat Heppotion Calerino', 'Ulat Heppotion Calerino merupakan ulat yang biasanya ditemukan di dalam tanah dan merusak akar tanaman. Mereka dapat menyebabkan kerusakan pada sistem perakaran, mengurangi kemampuan tanaman untuk menyerap nutrisi dan air.', '1. Drainase yang Baik: Pastikan tanah memiliki drainase yang baik untuk menghindari kelebihan air, yang dapat menjadi kondisi ideal bagi ulat tanah.\r\n2. Rotasi Tanaman: Praktekkan rotasi tanaman untuk mengurangi risiko serangan hama yang berulang pada tan', '1. Nematoda Parasitoid: Pemanfaatan nematoda parasitoid dapat membantu mengendalikan populasi ulat tanah. Nematoda ini dapat diaplikasikan ke tanah untuk memburu ulat tanah.\r\n2. Insektisida Organik: Penggunaan insektisida organik yang mengandung bahan akt', 'Hama_Ulat Heppotion Calerino.jpg', 'Hama'),
(3, 'Ulat Spodoptera Litura', 'Ulat Spodoptera litura memiliki tubuh yang berwarna coklat atau hijau keabu-abuan dengan garis-garis hitam di punggungnya. Mereka biasanya memakan daun, tunas, dan bunga tanaman, menyebabkan kerusakan serius pada tanaman talas.', '1. Monitoring Rutin: Lakukan pemeriksaan rutin pada tanaman untuk mendeteksi adanya ulat Spodoptera litura secara dini.\r\n2. Kebersihan Tanaman: Jaga kebersihan di sekitar tanaman, termasuk menghilangkan sisa tanaman yang mati, karena ini dapat menjadi tem', '1. Pemangkasan: Pemangkasan bagian tanaman yang terinfestasi dapat membantu mengendalikan populasi ulat.\r\n2. Insektisida Botani: Gunakan insektisida botani seperti neem oil atau ekstrak pyrethrin yang lebih ramah lingkungan.\r\n3. Bakteri Bacillus thuringie', 'Hama_Ulat Spodoptera Litura.jpg', 'Hama'),
(4, 'Serangga Agrius Convolvuli', 'Serangga Agrius convolvuli memiliki sayap yang lebar dan terbang pada malam hari. Larva mereka disebut ulat bulu dan dapat merusak daun dan bagian tanaman lainnya.', '1. Pemantauan Rutin: Lakukan pemantauan rutin pada tanaman untuk mendeteksi adanya serangan ngengat jalur besar secara dini.\r\n2. Pencahayaan: Pasang lampu di sekitar tanaman pada malam hari untuk mengurangi ketertarikan ngengat pada tanaman talas.', '1. Penyemprotan Insektisida: Gunakan insektisida yang sesuai untuk mengendalikan serangan ngengat dan ulatnya.\r\n2. Pengumpulan Larva: Periksa tanaman secara rutin dan kumpulkan larva ngengat secara manual untuk mengurangi populasi.', 'Hama_Serangga Agrius Convolvuli.jpg', 'Hama'),
(5, 'Serangga Bemisia Tabaci', 'Bemisia tabaci adalah serangga kecil yang berukuran sekitar 1-2 mm, berwarna putih atau kuning pucat. Mereka menyerang tanaman dengan cara menghisap cairan tumbuhan, menyebabkan daun menguning, kering, dan kerusakan pada tanaman secara umum.', '1. Pemantauan Rutin: Lakukan pemantauan rutin pada tanaman talas untuk mendeteksi tanda-tanda awal serangan kutu putih.\r\n2. Kebersihan Tanaman: Pastikan tanaman tetap bersih dari sisa-sisa tanaman yang mati atau daun yang terinfestasi.\r\n3. Pengendalian Ha', '1. Siram Air: Gunakan air bertekanan rendah untuk menyiram tanaman dan menghilangkan kutu putih dari daun.\r\n2. Insektisida: Penggunaan insektisida yang sesuai dapat membantu mengendalikan populasi kutu putih. Pastikan untuk memilih insektisida yang efekti', 'Hama_Serangga Bemisia Tabaci.jpg', 'Hama'),
(6, 'Hawar Daun Talas', 'Hawar daun pada tanaman talas biasanya ditandai oleh munculnya bercak-bercak pada daun, yang bisa berwarna coklat, hitam, atau bahkan kuning. Bercak ini dapat berkembang menjadi lesi besar dan menyebabkan kerugian pada tanaman, terutama jika tidak ditangani dengan baik.', '1. Rotasi Tanaman: Praktekkan rotasi tanaman untuk mencegah penyebaran patogen yang dapat menyebabkan hawar daun.\r\n2. Pengelolaan Air: Hindari penyiraman yang berlebihan dan pastikan tanah memiliki drainase yang baik untuk mengurangi kelembaban yang dapat', '1. Insektisida dan Fungisida: Gunakan insektisida atau fungisida yang sesuai untuk mengatasi hawar daun. Pastikan untuk memilih produk yang efektif terhadap penyebab hawar daun yang spesifik.\r\n2. Pemotongan Daun Terinfestasi: Potong daun atau bagian tanam', 'Penyakit_Hawar Daun Talas.png', 'Penyakit'),
(7, 'Busuk Pangkal Batang', 'Penyakit busuk pangkal batang pada tanaman talas biasanya ditandai dengan gejala busuk pada bagian pangkal batang. Gejala ini dapat melibatkan perubahan warna, kelembaban berlebih, dan terkadang munculnya bau busuk. Infeksi yang parah dapat menyebabkan kolapsnya pangkal batang dan kematian tanaman.', '1. Drainase yang Baik: Pastikan tanah memiliki sistem drainase yang baik untuk mencegah genangan air di sekitar pangkal batang.\r\n2. Rotasi Tanaman: Praktekkan rotasi tanaman untuk mencegah penyebaran patogen yang dapat menyebabkan busuk pangkal batang.\r\n3', '1. Pemotongan dan Pembuangan: Potong dan buang bagian tanaman yang terinfestasi untuk mencegah penyebaran penyakit.\r\n2. Fungisida: Gunakan fungisida yang sesuai untuk mengatasi infeksi jamur pada pangkal batang. Pastikan untuk mengikuti petunjuk penggunaa', 'Penyakit_Busuk Pangkal Batang.jpeg', 'Penyakit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_user`, `id_forum`, `tanggal`, `isi`) VALUES
(22, 9, 38, '2023-11-27', 'itu kayanya kena daun karat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like_forum`
--

CREATE TABLE `tbl_like_forum` (
  `id_like` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_like_forum`
--

INSERT INTO `tbl_like_forum` (`id_like`, `id_forum`, `id_user`, `tanggal`, `liked`) VALUES
(59, 4, 8, '2023-11-14', 1),
(91, 9, 8, '2023-11-14', 1),
(93, 8, 8, '2023-11-14', 1),
(96, 6, 8, '2023-11-14', 1),
(97, 11, 8, '2023-11-14', 1),
(100, 25, 8, '2023-11-14', 1),
(101, 20, 8, '2023-11-14', 1),
(102, 34, 8, '2023-11-15', 1),
(103, 37, 9, '2023-11-15', 1),
(106, 39, 9, '2023-11-24', 1),
(111, 42, 9, '2023-11-27', 1),
(112, 43, 8, '2023-11-27', 1),
(114, 38, 8, '2023-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifikasi`
--

CREATE TABLE `tbl_notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `id_user_pengirim` int(11) NOT NULL,
  `id_user_penerima` int(11) NOT NULL,
  `id_forum` int(11) DEFAULT NULL,
  `id_komentar` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `pesan` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notifikasi`
--

INSERT INTO `tbl_notifikasi` (`id_notifikasi`, `id_user_pengirim`, `id_user_penerima`, `id_forum`, `id_komentar`, `tanggal`, `pesan`, `type`) VALUES
(1, 8, 9, 6, NULL, '2023-11-15', 'tes notif', 'komentar'),
(2, 9, 8, 35, NULL, '2023-11-15', 'oh gitu', 'komentar'),
(3, 8, 9, NULL, 21, '2023-11-15', 'wkwkwkk', 'balasan'),
(4, 9, 8, 38, NULL, '2023-11-27', 'itu kayanya kena daun karat', 'komentar'),
(5, 8, 9, NULL, 22, '2023-11-27', 'oh gitu terima kasih', 'balasan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `id_tag` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag_blog`
--

CREATE TABLE `tbl_tag_blog` (
  `id` int(11) NOT NULL,
  `id_tag` int(11) DEFAULT NULL,
  `id_blog` int(11) NOT NULL,
  `id_forum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko`
--

CREATE TABLE `tbl_toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `rating` double NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `lattitude` text NOT NULL,
  `longitude` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `website` varchar(225) DEFAULT NULL,
  `gambar` text NOT NULL,
  `jam_buka` varchar(50) NOT NULL,
  `jam_tutup` varchar(50) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_toko`
--

INSERT INTO `tbl_toko` (`id_toko`, `nama_toko`, `deskripsi`, `rating`, `jenis`, `alamat`, `lattitude`, `longitude`, `no_telp`, `website`, `gambar`, `jam_buka`, `jam_tutup`, `kota`) VALUES
(91, 'Tani Jaya', 'Menjual berbagai keperluan pertanian, benih, pestisida, dan bunga artificial', 4.5, 'Toko Obat', 'Jl. Dewi Sartika No.56, Pabaton, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16121', '-6.5953327', '106.7765743', '081511771456', 'http://localhost/website-talascare-main/business.site', 'Gambar_toko2.jpg', '08:00', '15:30', 'Kota'),
(92, 'Tani Jaya Baru', 'Toko Pertanian', 5, 'Toko Obat Hama', 'Jl. Gedong Sawah No.4 no. 12, Pabaton, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16121', '-6.5931999', '106.791425', '081215799338', '', 'Toko-Pertanian-Terdekat.jpg', '08:30', '16:30', 'Kota'),
(94, 'Sarana Tani', 'Obat untuk hama tanaman\r\n', 4.6, 'Toko pertanian', 'Jl. Veteran No.37, RT.01/RW.02, Kb. Klp., Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16125', '-6.595893652634914', '106.78595441070944', '8118880202', '', 'saranatani.jpg', '07:30', '17:00', 'Kota'),
(95, 'Toko Pertanian Pilar Tani', 'Menyediakan kebutuhan pertanian, mulai dari pupuk, bibit, obat obatan serta peralatan pertanian', 4.8, 'Obat untuk hama tanaman', 'Jl. Raya Semplak No.70-68, RT.08/RW.01, Semplak, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16114', '-6.5591887', '106.7624992', '081215799338', '', 'download.jpeg', '08:30', '16:30', 'Kota'),
(96, 'Bogor Nursery', 'Toko yang menjual berbagai macam tanaman hias, tanaman pelindung, tanaman hutan, tanaman obat, dan tanaman yang sulit didapat, aneka pot, pupuk npk tablet, npk granul, urea, obat obatan tanaman.', 4.7, 'Obat untuk hama tanaman', 'Jl. Kol. Ahmad Syam No.10, Tanah Baru, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16143\r\n', '-6.6044341', '106.8161921', '081318280049', '', 'Bogor_Nursery.jpg', '07:00', '17:00', 'Kabupaten'),
(97, 'Toko Pertanian Duta Tani', 'Toko yang menjual: Pupuk, Benih Sayuran, Pestisida & Sarana Pertanian', 4.8, 'Obat untuk hama tanaman', 'Ps. Induk Kemang Bogor, RT.02/RW.01, Cibadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16166', '-6.5385371', '106.7669305', '81281610372', '', 'duta_tani.jpg', '09:00', '23:00', 'Kabupaten');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ulasan`
--

CREATE TABLE `tbl_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` double NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ulasan`
--

INSERT INTO `tbl_ulasan` (`id_ulasan`, `id_toko`, `id_user`, `rating`, `komentar`, `tanggal`) VALUES
(1, 92, 8, 4.2, 'bagus, lengkap bgt keren deh', '2023-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `status` int(1) NOT NULL,
  `code` varchar(20) NOT NULL,
  `verified` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `no_telepon`, `password`, `email`, `jenis_kelamin`, `avatar`, `alamat`, `tanggal_lahir`, `status`, `code`, `verified`) VALUES
(8, 'Muhammad Fiqih', 'fiqhhh', '085155411077', '$2y$10$LGiXae319CnqyeZVPLzN6OAOr8MgI/GT3fkSugWV0z34pnnPygcAi', 'muhammadfiqih953@gmail.com', 'Laki-laki', 'MoveAir.png', 'Bogor', '1997-02-14', 1, 'gpnfUiYbO4Md', 1),
(9, 'Khaera Umm', 'khaera', '08991208014', '$2y$10$LGiXae319CnqyeZVPLzN6OAOr8MgI/GT3fkSugWV0z34pnnPygcAi', 'khaaeraaummah@apps.ipb.ac.id', 'Perempuan', 'default.png', 'Bogor', '2023-11-15', 1, 'UtkYElWuJd5N', 1),
(10, NULL, 'irna', NULL, '$2y$10$AZX68mZJednSqUaRrnBE7OR.bmD7MmFAbcsnyCUdlzSd3TQUJFKyK', 'auliairna@gmail.com', NULL, 'default.png', NULL, NULL, 0, 'bYawFQtXBJ1M', 0),
(11, NULL, 'Irna Aulia', NULL, '$2y$10$9XIKbfkzJ7k81YFTWU0XN.6Vz1OhzXneE9IRn7NmSeNFxoeuI7X36', '20_aulia.irna@apps.ipb.ac.id', NULL, 'default.png', NULL, NULL, 0, 'el2ZaS3rszUg', 0),
(12, NULL, 'Irnaa', NULL, '$2y$10$SzGm4XuhFmPvq92CYzuJQ.uD9sUtSNm.JXpbN3n7OQOOPXBhXSUfi', 'irnaaulia21@gmai.com', NULL, 'default.png', NULL, NULL, 1, 'm1eaWMn5xXc6', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_balasan`
--
ALTER TABLE `tbl_balasan`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `tbl_hama`
--
ALTER TABLE `tbl_hama`
  ADD PRIMARY KEY (`id_hama`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_like_forum`
--
ALTER TABLE `tbl_like_forum`
  ADD PRIMARY KEY (`id_like`);

--
-- Indexes for table `tbl_notifikasi`
--
ALTER TABLE `tbl_notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tbl_tag_blog`
--
ALTER TABLE `tbl_tag_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_toko` (`id_toko`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_balasan`
--
ALTER TABLE `tbl_balasan`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_forum`
--
ALTER TABLE `tbl_forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_hama`
--
ALTER TABLE `tbl_hama`
  MODIFY `id_hama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_like_forum`
--
ALTER TABLE `tbl_like_forum`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `tbl_notifikasi`
--
ALTER TABLE `tbl_notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tag_blog`
--
ALTER TABLE `tbl_tag_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
