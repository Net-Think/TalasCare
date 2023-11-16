-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 12.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `email`, `password`, `verified`) VALUES
(1, 'Muhammad Fiqih', 'adminfiqih', 'muhammadfiqih953@gmail.com', '$2y$10$LGiXae319CnqyeZVPLzN6OAOr8MgI/GT3fkSugWV0z34pnnPygcAi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_balasan`
--

CREATE TABLE `tbl_balasan` (
  `id_balasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_komentar` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_balasan`
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
(16, 8, 21, '2023-11-15', 'wkwkwkk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_blog` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_blog`, `id_admin`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(1, 1, '2023-11-09', 'Manfaat Tanaman Talas bagi Kehidupan Manusia', 'Ada banyak sekali jenis tanaman yang ada di dunia ini. Dari sekian jenis tanaman, ada yang berbahaya dan ada juga yang bermanfaat bagi manusia. Salah satu tanaman yang bermanfaat bagi kehidupan manusia adalah talas. Sebutkan pemanfaatan tanaman talas! Manfaat yang paling jelas adalah sebagai sumber pangan.\r\n\r\nTalas bisa diolah menjadi berbagai makanan dan minuman yang lezat. Misalnya saja bolu talas dan keripik talas yang memiliki banyak penggemar. Selain lezat dan mengenyangkan, tals juga memiliki segudang manfaat. Apa saja manfaatnya? Simak manfaat talas dalam artikel ini.\r\n\r\nManfaat Tanaman Talas\r\nMakanan pokok mayoritas masyarakat Indonesia adalah nasi. Bahkan banyak orang Indonesia yang merasa belum makan kalau belum makan nasi. Namun, ada daerah yang menjadikan talas sebagai makanan pokoknya. Seperti yang dijelaskan dalam Pertanian Terpadu untuk Mendukung Kedaulatan Pangan Nasional oleh Sunarminto (2014), di daerah tertentu di Papua, talas dimakan sebagai makanan pokok. Sementara di daerah lain talas dimakan sebagai makanan tambahan dengan cara diolah menjadi berbagai jenis makanan. Talas memiliki banyak manfaat bagi manusia. Berikut ini manfaatnya:\r\n\r\nMenjaga Kadar Gula Darah\r\nKadar gula darah harus dijaga agar tetap stabil. Gula darah yang tinggi bisa menyebabkan penyakit diabetes. Kalian bisa mengonsumsi makanan yang mengandung karbohidrat kompleks dan serat untuk menjaga kadar gula darah. Salah satunya adalah talas. Talas memiliki indeks glikemik rendah sehingga sangat bagus.\r\n\r\nMencegah Penyakit Jantung\r\nTalas mengandung serat, kalium, dan antioksidan yang cukup tinggi. Serat yang ada dalam talas berfungsi untuk memastikan kadar kolesterol tetap normal. Kalium dalam talas baik untuk mencegah tekanan darah tinggi. Seperti yang sudah diketahui, kolesterol tinggi dan tekanan darah tinggi berkaitan dengan penyakit jantung.\r\n\r\nMenjaga Berat Badan\r\nMelihat angka timbangan yang semakin naik akan membuat sebagian orang stres. Jika kalian ingin menjaga berat badan, kalian bisa coba mengkonsumsi talas karena serat dan karbohidrat dalam talas membutuhkan waktu yang lebih lambat untuk dicerna.\r\n\r\nSebagai Sayuran\r\nTernyata tidak hanya umbinya saja yang bisa dikonsumsi, daun dan tangkai daun talas yang masih muda bisa dijadikan sebagai sayuran.\r\n\r\nTips Mengolah Umbi Talas\r\nMeskipun rasanya enak dan memiliki banyak manfaat, ternyata getah talas akan membuat kulit gatal. Supaya kulit kalian tidak gatal ketika menyiapkan talas, simak tips berikut ini:\r\n1. Gunakan sarung tangan. Pertama kalian harus memakai sarung tangan untuk melindungi tangan dari getah talas. Cara ini juga akan membuat tangan lebih bersih.\r\n2. Kupas kulit talas. Selanjutnya, kupas kulit talas. Hati-hati ketika mengupasnya karena getah talas akan keluar. Setelah dikupas, cuci umbi talas dan lumuri permukaannya dengan garam. Gosok hingga getahnya hilang.\r\n3. Rendam dengan air . Jika sudah dicuci tetapi getahnya masih banyak, potong-potong umbi talas sesuai selera lalu rendam dengan air garam. Sebelum diolah, pastikan umbi talas sudah benar-benar bersih.', 'Blog01.jpg'),
(2, 1, '2023-11-09', 'Talas Beneng salah satu Alternatif Penyangga Ketahanan Pangan Kedepan', 'Peningkatan emisi gas rumah kaca yang diakibatkan dari emisi karbon yang terus meningkat dari hasil proses pembakaran bahan bakar berbasis fosil atau pun batubara menjadi salah satu penyebab utama terjadinya perbahan iklim. Ketahanan pangan yang merupakan tantangan bagi sektor pertanian merupakan salah satu sektor yang terpengaruh secara langsung dari dampak kejadian perubahan iklim saat ini, disamping terjadinya pandemi covid-19 yang melanda di seluruh dunia.\r\n\r\nFAO melaporkan di tahun 2021 terjadi perburukan kerawanan pangan diberbagai negara. Lebih dari 190 juta orang mengalami kerawanan pangan akut, yang diakibatkan oleh antara lain konflik perang, krisis ekonomi, dan perubahan iklim yang ekstrim. Dalam rangka menghadapi krisis pangan global dan upaya mendorong ketahanan pangan nasional, pemerintah telah melakukan berbagai bauran strategi dan kebijakan, salah satunya pengembangan penganekaragaman pangan dan pengembangan potensi pangan lokal.\r\n\r\nPangan lokal di setiap daerah memiliki karakter dan jenis yang berbeda-beda seperti di daerah Banten. Potensi pangan lokal di Banten sangatlah tinggi dilihat dari keanekaragaman pangan lokal yang dihasilkan. Pangan lokal di Banten yang sedang digencarkan potensinya yaitu talas beneng. Talas beneng merupakan salah satu bio-diversitas lokal yang banyak tumbuh secara liar di sekitar kawasan Gunung Karang Kabupaten Pandeglang, Provinsi Banten. Talas beneng mempunyai ukuran yang besar dengan kadar protein dan karbohidrat tinggi serta warna kuning yang menarik sehingga berpotensi untuk dikembangkan menjadi aneka produk pangan dalam upaya menunjang ketahanan pangan.\r\n\r\nTanaman talas beneng ini memiliki umbi yang bisa mencapai berat hingga 20 kg dalam kurun waktu 2 tahun penanaman. Umbi dengan nama latin Xantoshoma undipes k. Koch, ini mempunyai kandungan nutrisi, meliputi kandungan protein 2,01%, karbohidrat 18,30%, lemak 0,27%, pati 15,21% dan kalori sebesar 83,7 kkal. Dengan kandungan gizi yang cukup tinggi ini, maka komoditas ini memiliki potensi besar untuk dijadikan bahan pangan lokal subtitusi beras dan tepung terigu. \r\n\r\nSeperti halnya komoditas talas lainnya, talas beneng juga memiliki kandungan asam oksalat yang cukup tinggi, Dalam aspek keamanan pangan, perlu dilakukan proses perlakuan untuk mengurangi atau menghilangkan kandungan asam oksalat. Namun dari segi bisnis, oksalat ini jika dapat dipisahkan dari talas beneng, akan memiliki nilai jual dalam bentuk serbuk. Asam oksalat dapat dipasarkan untuk industry kimia, kosmetik dan farmasi.\r\n\r\nTalas beneng merupakan komoditas pertanian yang bersifat perishable food (mudah mengalami kerusakan) sehingga memerlukan penanganan khusus, salah satu upaya untuk mengatasi kerusakan adalah mengolahnya menjadi tepung. Secara umum permasalahan yang dihadapi dalam mengembangkan usaha pengolahan hasil pertanian yaitu sifat produk pertanian yang mudah rusak, sebagian produk pertanian bersifat musiman dan sangat dipengaruhi oleh iklim serta kualitas produk pertanian yang dihasilkan pada umumnya masih rendah sehingga akan ada kesulitan dalam persaingan pasar baik di dalam negeri maupun di pasar internasional.\r\n\r\nPada tanggal 22 September 2022 Tenaga Ahli Mentan telah melakukan kunjungan ke Banten dengan tujuan untuk melakukan brainstorming pengembangan hilirisasi produk pertanian khususnya talas beneng. Dengan difasilitasi oleh BPTP Banten, kunjungan kerja tersebut dikemas dengan konsep Gelar Temu Usaha \"Optimalisasi Usahatani Talas Beneng\". \r\n\r\nTemu Usaha dilaksanakan di Kp. Cinyurup Kelurahan Juhut Kec. Karang Tanjung Kab. Pandeglang yang merupakan lokasi sentra budidaya talas beneng. Pertemuan tersebut dihadiri oleh potensial investor, Dinas Pertanian Provinsi Banten, Dinas Ketahanan Pangan Provinsi Banten, Dinas Pertanian dan Ketahanan Pangan Kab. Pandeglang, dan pengusaha lokal Talas Beneng dan petani.\r\n\r\nPertemuan dibuka oleh, Kepala BPTP Banten Dr. Ismatul Hidayah, SP, MP dengan menjelaskan sekilas tentang talas beneng. Talas beneng dapat berkembang karena potensinya yang besar. Semua bagian dari talas beneng dapat dimanfaatkan, tidak hanya terbatas pada umbi dan daun. Pengembangan talas beneng dilakukan bukan pada lahan produktif melainkan di lahan-lahan darat di bawah tegakan sehingga tidak bersaing dengan lahan untuk sawah. \r\n\r\nDinas Pertanian Provinsi Banten menyampaikan bahwa sejak 2020-2022, pihaknya telah mengalokasikan pengembangan Talas Beneng pada lahan seluas 250 ha dengan bantuan berupa saprodi dengan dana yang bersumber dari APBN Pusat. Dudi Supriyadi, SP selaku pelaku usaha sekaligus penyuluh pertanian di Kab. Pandeglang menyampaikan bahwa sejak tahun 2009, pihaknya telah memasok kebutuhan tepung untuk usaha bolu talas bogor dengan skala usaha rumah tangga, dan juga penyerap pasar usaha Ibu-ibu rumah tangga dengan produk berupa gaplek yang akan dijadikan tepung talas beneng.\r\n\r\nTercatat sampai saat ini, sudah 420 kelompok tani talas beneng dari seluruh Indonesia yang tergabung dalam Asosiasi Talas Beneng Indonesia (Astalbenindo). Kegiatan ekspor berbasis talas beneng saat ini dilakukan melalui pelabuhan atau karantina Surabaya, hal ini dikarenakan pengusaha eksportirnya berlokasi di Surabaya. Permintaan ekspor yang masih belum terpenuhi saat ini adalah produk pati talas beneng berjumlah 500 ton/bulan ke Negara Korea Selatan, dan juga tepung talas beneng ke Turki.\r\n\r\nIbu Hj. Rully, pengusaha lokal olahan talas beneng menyampaikan bahwa pihaknya saat ini dapat membuat 17 produk turunan dari talas beneng. Salah satu produknya adalah serat benang talas beneng, dan serat benang tersebut telah diminta oleh Korea dan direncanakan akan siap produknya di awal tahun 2023. Selain tepung, stik, keripik, dan brownies, talas beneng juga dapat diolah menjadi berbagai kreasi seni berupa hiasan dinding, tatakan gelas, nampan yang dapat dibuat dari pelepahnya. Selanjutnya, kulitnya dibuat tepung untuk pakan ternak. Ibu Hj. Rully menjelaskan bahwa saat ini Korea membutuhkan tepung tapioka, serat beneng, frozen food, dan kripik yang berbahan baku talas beneng.\r\n\r\nBerbagai kendala yang dihadapi oleh petani maupun pengusaha lokal talas beneng antara lain adalah: standar produk yang belum seragam, skala usaha yang masih berupa industri rumah tangga, pengerjaan yang masih manual, skala dan kontinuitas bahan baku talas beneng yang masih terbatas, dimana hal ini merupakan akibat dari masih terbatasnya jumlah penangkar benih talas beneng. Tercatat baru ada 4 kelompok penangkar benih talas beneng yang bersertifikat.\r\n\r\nArahan dari Tenaga Ahli Menteri Pertanian bidang hilirisasi produk pertanian, menyampaikan bahwa sudah menjadi tugas pemerintah atau industri untuk membuat standar produk talas beneng sesuai keinginan pasar, dan talas beneng perlu dikembangkan karena sangat berpotensi sebagai sumber pangan. Pada saat ini semua negara akan mencari bahan pangan alternatif, mengingat krisis pangan global yang siap melanda negara-negara di dunia. Potensi talas beneng ini memiliki pasar yang sangat luas meskipun ketersediaannya belum maksimal. Untuk itu, perlu intervensi pemerintah, salah satunya adalah intervensi inovasi teknologi. Selain itu, dibutuhkan kerjasama dari semua pihak dari hulu hingga hilir, dan diperlukan lahan untuk pengembangan talas beneng ini, terutama dapat memanfaatkan lahan-lahan di bawah tegakan seperti lahan milik Perhutani.', 'Blog02.jpg'),
(3, 1, '2023-11-09', 'Melirik Potensi Talas sebagai Pangan Lokal', 'Talas selama ini menjadi icon oleh-oleh dari Kota Bogor. Bahkan di kota hujan tersebut kini berkembang produk olahan pangan berbahan baku talas yakni Lapis Bogor.\r\n\r\nTanaman umbi-umbian ini mempunyai potensi besar sebagai sumberdaya pangan lokal. Apalagi komoditi ini dapat tumbuh pada semua jenis tanah dengan adaptasi yang tinggi dan produktivitasnya cukup tinggi.\r\n\r\nTanaman ini dapat tumbuh di tanah berbatu, agroekosistem rawa, lahan berpasir, batu bertanah dan lahan kering. Tumbuhan ini juga toleran terhadap naungan (tempat teduh). Bisa juga ditanam sebagai tumbuhan selingan pada pertanian.\r\n\r\nSayangnya, sebagai tanaman asli tropis, talas masih dipandang sebelah mata oleh sebagian masyarakat. Di wilayah pedesaan, masyarakat juga enggan membudidayakan tanaman ini, meski hanya di pekarangan rumah.\r\n\r\nMasyarakat sebenarnya bisa memanfaatkan pekarangan sebagai sumberdaya pangan lokal, termasuk dari talas. Dengan demikian akan mengurangi ketergantungan pada pangan yang berasal dari padi. Selain itu tanaman ini tidak mengenal musim.\r\n\r\nTalas merupakan sumber pangan penting. Selain sumber karbohidrat, protein dan lemak, talas juga mengandung beberapa unsur mineral dan vitamin sehingga dapat menjadi bahan obat-obatan. Kadar pati umbi talas 66,8% dengan kadar air sekitar 7,2%.\r\n\r\nPemanfaatan talas sebagai bahan pangan telah dikenal luas. Saat ini pengolahan talas kebanyakan memanfaatkan umbi segar menjadi berbagai hasil olahan. Paling populer adalah keripik talas dan susu talas. Karena itu talas mempunyai peluang besar dikembangkan.\r\n\r\nPengembangan talas sebagai sumber pangan lokal akan menjadi sumbangan dalam upaya pemerintah mempercepat penganekaragaman konsumsi pangan. Apalagi ketergantungan masyarakat Indonesia terhadap beras cukup tinggi. Diperkirakan konsumsi beras masyarakat Indonesia mencapai 139,15 kg/kapita/tahun.\r\n\r\nLahan Pekarangan\r\n\r\nSalah satu wilayah Indonesia yang berpotensi untuk pengembangan talas adalah Kabupaten Lumajang. Di wilayah tersebut talas tersebar di berbagai agro ekosistem. Mulai dataran rendah atau tinggi. Dari lahan basah sampai kering. Berdasarkan kesesuaian argo ekosistem dijumpai beragam kultivar talas.\r\n\r\nKantor Ketahanan Pangan Kabupaten Lumajang pernah memunculkan program SI GEMPAL (Aksi Gerakan Kembali ke Pangan Lokal). Program tersebut disambut kelompok wanita tani di perdesaan.', 'Blog03.jpg'),
(4, 1, '2023-11-09', 'Tanaman Talas, Bukan Hanya Milik Bogor', 'Pakar botani LIPI Made Sri Prana, seperti dikutip dalam laman biotek.lipi.go.id, menyatakan, “Talas merupakan plasma nutfah yang penting karena merupakan salah satu jenis ubi-ubian asli Indonesia dan sudah teruji serta terbukti beradaptasi dengan baik”.\r\n\r\nTalas umumnya dijumpai baik liar maupun ditanam hampir di seluruh kepulauan, tanaman ini pun tersebar di tepi pantai sampai pegunungan di atas 1.000m dpl. Talas memiliki berbagai nama unik di seluruh dunia seperti taro, old cocoyam, abalong, taioba, arvi, satoimo, tayoba dan yu-tao. Tidak kalah seperti di luar, di Indonesia talas juga mempunyai penamaan yang berbeda di setiap daerah, seperti eumpeu (Aceh), talo (Nias), bete (Manado dan Ternete), kaladi (Ambon), talak (Tolitoli), paco (Makassar), komo (Tidore) dan masih banyak lagi. Oleh karena itu talas tidak hanya tanaman khas Bogor, namun tanaman ini memang tumbuh dan tersebar hampir di seluruh penjuru Nusantara.\r\n\r\nTanaman talas (Colocasia esculentum (L) Schott) sangat mudah dibudidayakan di daerah tropik dan sub-tropik, termasuk Indonesia. Umbi talas kaya akan karbohidrat di mana kandungannya mencapai 13-29 persen. Bahkan produksi talas dalam kalori per hektare per hari (46×1 juta kalori per ha per hari) relatif lebih tinggi daripada padi (33×1 juta kalori per ha per hari). Sedangkan kandungan nutrisi lainnya seperti protein dan vitamin juga tidak kalah dibanding ubi dan singkong. Hal ini yang membuat talas dapat digunakan sebagai sumber energi yang potensial bagi manusia melalui berbagai proses modifikasi.\r\n\r\nSecara morfologi, talas termasuk dalam golongan tanaman monokotil yang berumur tahunan dengan tinggi tanaman sekitar 50-150 cm. Berakar serabut yang dangkal, tersusun dari sekelompok akar adventif. Akar adventif adalah akar yang tumbuh tidak pada tempatnya. Memiliki batang yang pendek dan terbungkus oleh pelepah daun. Batang talas tumbuh dengan arah tegak.\r\n\r\nTanaman talas mempunyai daun lengkap yang terdiri dari helaian daun, tangkai daun dan pelepah. Jumlah daun 2 sampai 5 helai dan tergolong daun tunggal. Tangkai daun berwarna hijau dan bergaris. Helaian daun berukuran 6 sampai 60 cm dengan lebar 7 sampai 53 cm, berbentuk bulat oval seperti perisai dengan ibu tulang daun yang besar. Daunnya mengandung 23 persen protein (berat kering), kaya kalsium, fosfor, besi, vitamin (C, tiamina, riboflavin, dan niacin).\r\n\r\nTerdapat 4 macam jenis talas yaitu talas pandan, talas ketan, talas banteng dan talas lahun anak (dikutip pada laman faunadanflora.com). Talas pandan yaitu talas yang apabila sudah direbus memiliki bau seperti pandan wangi, memiliki warna sedikit ungu dan pada bagian pangkal pelepahnya memiliki warna agak merah. Talas ketan, atau yang dijuluki talas Bogor, yaitu talas yang agak lengket seperti ketan yang sudah direbus, memiliki warna hijau muda dan sering membuat anakan sangat banyak.\r\n\r\nTalas banteng yaitu talas yang memiliki ukuran umbi yang besar namun rasanya tidak enak, memiliki tangkai berwarna ungu. Talas lahun anakan yaitu talas yang memiliki banyak anakan namun ukurannya kecil-kecil.\r\n\r\nTanaman talas selama ini memang menjadi ikon kota Bogor selain julukannya sebagai kota hujan. Pasalnya, tanaman ini sudah terkenal sebagai bahan dalam olahan kue sejenis bolu atau brownis yang kemudian dijual di gerai-gerai oleh-oleh yang biasa dibeli oleh wisatawan jika hendak berkunjung ke Bogor. Adapun talas yang masih mentah banyak dijual dipinggiran jalan. Talas mentah biasa diolah menjadi hidangan cemilan berupa keripik talas atau talas goreng.\r\n\r\nMeski bisa dikonsumsi, namun umumnya talas tidak dapat dikonsumsi secara langsung tanpa diolah terlebih dahulu. Hal ini disebabkan kalsium oksalat yang terkandung di dalamnya dapat menyebabkan rasa gatal pada mulut, lidah dan tenggorokan. Namun, beberapa teknologi pengolahan talas bisa menurunkan kadar asamnya hingga 50 persen.\r\n\r\nMelihat dari manfaat dan tingginya kandungan gizi yang terkandung dalam talas, maka tanaman talas perlu dikembangkan menjadi pangan alternatif nasional selain beras dalam rangka meningkatkan ketahanan pangan nasional.\r\n\r\nDikutip pada laman biotek.lipi.go.id, Indonesia menjadi daerah terpenting perkembangbiakan talas. Dari kegiatan eksplorasi Kelompok Peneliti Talas Puslit Bioteknologi LIPI di wilayah Lampung, Jawa, Bali, dan Sulawesi Selatan, dibawalah 713 sampel. Hasil studi morfologi dan biokimia (isozymes) menyebutkan, tidak kurang ada 180 morfotipe talas. Berdasarkan penelitian yang telah dilakukan, di Kepulauan Mentawai ada 150 kultivar talas lokal. Hal ini menguatkan dugaan bahwa sekitar 30 tahun yang lalu Indonesia memiliki lebih dari 300 talas berikut variannya.\r\n\r\nSelain itu, tim LIPI pun berhasil memperoleh 20 jenis talas lokal potensial. Uji provenan terhadap 20 talas tersebut didapatkan hasil, antara lain jenis talas Kaliurang (talas LIPI) lebih unggul, produktivitasnya tinggi, dapat ditanam di dataran rendah dan tinggi, tahan serangan hama, umbinya enak dan tahan penyakit atau Taro Leaf Blight (TLB).', 'Blog04.jpg'),
(5, 1, '2023-11-09', 'Ketahui, Potensi Talas Beneng Sebagai Pangan Lokal', 'Ada komoditas unggulan masyarakat Kabupaten Pandeglang, Banten, yang layak diketahui dan dikonsumsi oleh masyarakat luas, yaitu talas beneng. Penyuluh Pertanian Kabupaten Pandeglang Dudi Supriyadi mengungkapkan, tanaman yang juga dikenal dengan nama Xantoshoma undipes K. Koch ini merupakan pangan lokal yang memiliki berbagai macam keunggulan.\r\n\r\nSalah satunya adalah optimalisasi lahan. Mereka bisa ditanam di bawah tegakan tanaman lainnya, seperti cengkeh atau karet. Jadi, penggunaan lahan bisa lebih dimaksimalkan. \r\n\r\n“Kelebihan talas ini mengoptimalisasi lahan marginal karena di kami, lahan-lahan terbuka untuk pangan lain. Jadi, talas beneng kalau ditanam enggak akan mengganggu program jagung, dan pangan lainnya,” ujar dia dalam Bimbingan Teknis & Sosialisasi Propaktani Direktorat Jenderal Tanaman Pangan (Ditjen TP) secara virtual, Kamis (2/6/2022).\r\n\r\nBobotnya berada pada kisaran 35-5 kilogram (kg) jika dipanen saat berusia dua tahun. Dudi menuturkan, para petani di sana umumnya memanen talas beneng saat mereka berada pada rentan usia enam hingga delapan bulan. Adapun pemilihan usia panen ini lantaran rasa yang ditawarkan oleh talas beneng ketika diolah menjadi makanan lain akan lebih nikmat. \r\n\r\n“Beda dengan talas Bogor yang akan membusuk. Setelah dipanen, rasa talas beneng bisa tahan sampai empat bulan lamanya selama belum dikupas,” kata Dudi. \r\n\r\n“Namun, umur panen yang optimal dengan rasa yang nikmat untuk olahan itu ketika sudah berusia enam sampai delapan bulan,” imbuhnya.', 'Blog05.jpg'),
(6, 1, '2023-11-09', 'Petani Kembangkan Talas Sebagai Ketahanan Pangan', 'Wali Kota Subulussalam H Affan Alfian Bintang SE mendorong masyarakat untuk mengembangkan tanaman talas ( colocasia esculenta ) karena dapat menjadi alternatif ketahanan pangan dan penyangga ekonomi.\r\n\r\nHal itu disampaikan Walkot Affan Bintang di sela-sela panen Talas Bogor atau colocasia esculenta milik Kelompok Tani Bungong Jeumpa, Selasa (5/7/2022) di Desa Lae Oram, Kecamatan Simpang Kiri.\r\n\r\nMenurutnya, Talas Bogor ini sudah banyak dibudidayakan dan digunakan untuk alternatif sumberdaya pangan lokal.\r\n\r\n\"Dari penjelasan petani tadi kita melihat potensi tanaman talas sebagai bagian penyangga ekonomi masyarakat yang lumpuh akibat pandemic covid-19,\" kata Walkota Affan Bintang\r\n\r\nDia pun mendorong masyarakat Subulussalam dapat menanam talas didamping tanaman lain.\r\n\r\nDiakui, masyarakat Subulussalam selama ini mayoritas bertanam kelapa sawit dan jagung. Namun kata Walkot Affan Bintang, tidak ada salahnya untuk menanam talas.\r\n\r\nHal inu karena tanaman talas sangat mudah dikembangkan. Apalagi komoditi ini dapat tumbuh pada semua jenis tanah dengan adaptasi yang tinggi dan produktivitasnya cukup tinggi.\r\n\r\nSelain itu, lanjut Walkot Affan Bintang, talas juga berpotensi dikembangkan lantaran pasarnya jelas baik lokal maupun ekspor.\r\n\r\nHal senada disampaikan Indra, Kepala Dinas Pertanian, Perkebunan, Peternakan dan Perikanan Kota Subulussalam.\r\n\r\nDia mengakui potensi talas dikembangman sebagai solusi sumber pangan lokal masyarakat.\r\n\r\nKecuali itu, Rosihan Indra mengatakan dengan ada beragam komoditas yang dikembangkan makanada alternatif penyangga ekonomi masyarakat ketika produk pertanian lain anjlok.\r\n\r\nDikatakan, potensi talas ini karena anaman tersebut dapat tumbuh di tanah berbatu, agroekosistem rawa, lahan berpasir, batu bertanah dan lahan kering. \r\n\r\nTumbuhan ini juga toleran terhadap naungan (tempat teduh). Bisa juga ditanam sebagai tumbuhan selingan pada pertanian.\r\n\r\nSementara Hakimin perwakilan petani dari kelompok tani bungong Jempa, mengatakan usia panen talas mulai pematangan lahan sekitar setahun.\r\n\r\nAdapun masa panen pascaditanam sekitar 7-9 bulan. Satu pohon talas dapat menghasilkan 5-1500 gram buah siap jual.\r\n\r\nSedangkan pasar, masyarakat tak perlu kuatir lantaran pembeli langsung datang ke Subulussalam.\r\n\r\nMalah dilaporkan jika kebutuhan ekspor talas sangat tinggi sehingga masyarakat sejatinya tak perlu ragu untuk menanam komoditi umbi-umbian itu.\r\n\r\nProses panen talas diikuti Ketua DPR Kota Subulussalam Ade Fadly Pranata Bintang, Kapolres AKBP Muhammad Yanis dan Kajari Mayhardy Indra Putra.\r\n\r\nTampak pula Ketua Dekranasda Kota Subulussalam Ny Hj Mariani Harahap dan Ketua IAD Subulussalam Ny Puspita Mayhardy, Direktur RSUD dr Dewi Sartika Pinem dan Camat Simpang Kiri Rahmayani Sari.', 'Blog06.jpg'),
(7, 1, '2023-11-09', 'Guru Besar IPB Ungkap Banyak Manfaat dari Tumbuhan Talas', 'Talas merupakan salah satu komoditas pangan tradisional. Talas memiliki karakteristik yaitu mudah tumbuh di berbagai tempat. Karena mampu tumbuh baik di kondisi kering maupun basah, talas termasuk dalam golongan tanaman amphibi.\r\n\r\nMelihat potensi talas yang banyak, Guru Besar Departemen Agronomi dan Hortikultura IPB, Prof. Edi Santosa menjelaskan talas sangat adaptif terhadap perubahan iklim. \"Talas mudah ditanam dan cepat tumbuh. Talas ini juga adaptif terhadap perubahan iklim,\" kata Prof. Edi melansir laman IPB, Selasa (14/12/2021). Dia menjelaskan, seluruh bagian tanaman talas dapat dimanfaatkan sebagai produk turunan. Dia menyebut, kulit talas dapat diolah menjadi etanol dan bioplastik. Tidak hanya itu, olahan umbi talas berpotensi menjadi tepung, kentang, dan emulsifier. Prof Edi pun menjelaskan indeks glikemik talas lebih tinggi dibanding beras, kentang, dan glukosa. Sampai saat ini, varietas talas yang populer adalah Talas Pontianak, Talas Papua dan Talas Pratama.\r\n\r\n\"Talas Pontianak sedang naik daun di pasar ekspor. Salah satu upaya untuk mengenalkan budidaya talas adalah petani belajar di Sekolah Talas di Ponorogo, Jawa Timur,\" ucap Prof. Edi yang menjabat sebagai Ketua Departemen Agronomi dan Hortikultura IPB. Dia menerangkan, petani perlu dibimbing untuk bercocok tanam dalam kondisi kering dan basah. Tidak hanya itu, petani juga perlu dibimbing oleh mahasiswa untuk mengamati pertumbuhan talas. Pasalnya, budidaya talas di lahan kering lebih rentan, karena talas berpotensi mengalami busuk daun dan serangan hama. Prof. Edi melanjutkan, riset talas Bogor masih memerlukan penguatan dari segi produksi, bahan dasar dan rantai pasok.\r\n\r\n\"Upaya lain yang dapat mendorong minat mengkonsumsi talas dapat berbentuk agrowisata, seperti festival talas, wisata talas, atau kampung talas,\" tukas dia.', 'Blog07.jpg'),
(8, 1, '2023-11-09', 'Lahan Tak Produktif Disulap Jadi Kebun Talas, Petani Nikmati Juta Rupiah', 'Keterbatasan pemilikan lahan tidak membuat petani di Kabupaten Pinrang, Sulawesi Selatan, kehilangan cara berinovasi untuk menambah sumber-sumber pendapatan. \r\n\r\nDengan memanfaatkan lahan tidak produktif, para petani yang biasanya mengandalkan tanaman padi tersebut berhasil memperoleh penghasilan tambahan dengan bercocok tanam talas. \r\n\r\nDi Dusun Tosulo, Desa Massulowalie, Kecamatan Mattiro Sompe, Kabupaten Pinrang, misalnya, banyak ditemukan sawah tadah hujan dan lahan terbengkalai. \r\n\r\nOleh penduduk setempat, lahan tersebut disulap menjadi kebun talas. Tumbuhan keladi dipilih karena dianggap tidak mengganggu produksi padi karena ditanam di lahan-lahan tak produktif. \r\n\r\nTanaman talas dapat dipanen setiap 4-5 bulan. Talas unggulan mampu menghasilkan satu hingga tiga kilogram talas dengan harga jual Rp 2.000 per kilogram. Setiap kali masa tanam, petani mampu meraup penghasilan puluhan hingga ratusan juta rupiah per hektar. \r\n\r\nTalas produksi petani ini diekspor ke Jepang melalui sebuah perusahaan yang membina petani tersebut. Jepang membuka kuota ratusan ton talas per bulan dari Pinrang. \r\n\r\nUntuk memotivasi petani, perusahaan importir dari Jepang tersebut juga memberikan bibit talas secara cuma-cuma kepada kelompok tani di sana. \r\n\r\nAntusias warga menanam talas di Desa Massulowalie tersebut menginspirasi petani di kecamatan lain. Ketika ada pelatihan penanaman massal talas, para petani dari berbagai daerah datang untuk menimba ilmu bercocok tanam. \r\n\r\nMereka mulai melirik lahan yang semula terbengkalai sebagai sumber pendapatan baru bagi mereka. Anggota Komisi IV DPR RI, Jamaluddin Jafar Jarre, yang memfasilitasi petani dan perusahaan asal Jepang tersebut, berharap agar tanaman keladi ini bisa memberikan nilai tambah bagi petani selain bercocok tanam padi. Selain itu, kegiatan ini dapat mengubah lahan-lahan tidak produktif menjadi bernilai ekonomis. \r\n\r\n\"Kita berharap salah satu upaya gerakan kemandirian pangan nasional dengan bercocok tanam talas di lahan yang tidak produktif ini bisa memberi nilai tambah kepada para petani,\" kata Jamaluddin. Hingga kini, para petani dari Kecamatan Suppa, Mattiro Sompe, Cempa, dan Patampanua di Pinrang tengah mengembangkan tanaman talas di sawah tadah hujan dan lahan tidak produktif di desa mereka.', 'Blog08.jpg'),
(9, 1, '2023-11-09', 'Potensi Talas untuk Mendukung Ketahanan Pangan Indonesia', 'Colocasia esculenta atau dikenal dengan “talas”, merupakan salah satu tanaman pangan yang telah lama dibudidayakan dan dimanfaatkan di kalangan masyarakat Indonesia. Tanaman talas terbagi menjadi dua jenis, yaitu Colocasia esculenta var. esculenta dan Colocasia esculenta var. Antiquorum. Kedua jenis talas tersebut berasal dari kawasan tropis Asia Selatan dan Tenggara, termasuk Indonesia. Jenis esculenta mempunyai umbi tunggal, sedangkan jenis antiquorum atau dikenal dengan talas Jepang, memiliki umbi induk dan umbi-umbi cabang, seperti umbi kimpul atau balitung (Xanthosoma spp.).\r\n\r\nBeberapa kultivar talas yang berkembang di Indonesia adalah kultivar-kultivar yang berkembang di sekitar Bogor (Jawa Barat), yaitu: talas Bentul, Ketan, Pandan, Sutera, dan Lampung. Ivancic et al. (2008) mengungkapkan bahwa terdapat lebih dari 180 kultivar talas yang dapat dibedakan secara morfotipe, dan 20 kultivar yang telah diidentifikasi berpotensi dimanfaatkan pada program pemuliaan talas.\r\n\r\nBalitkabi sebagai balai penelitian yang mendapatkan mandat pada komoditas aneka kacang dan umbi, memiliki koleksi plasma nutfah Colocasia esculenta sebanyak 77 aksesi dari berbagai daerah di Indonesia dan telah dikarakterisasi morfologinya pada tahun 2015-2016 (Tabel 1). Batang dan tangkai daun didominasi warna hijau (70%), diikuti warna ungu dan beberapa warna lainnya (hijau lorek, kuning, dan merah), dan seluruh aksesi memiliki daun berwarna hijau.\r\n\r\nTalas berpeluang besar untuk dikembangkan sebagai bahan baku pangan dan industri di Indonesia serta berpeluang untuk diekspor ke Jepang (Sutardjo 2012). Talas memiliki kandungan karbohidrat tinggi, protein, mineral, vitamin, mengandung granula pati rendah dan mudah dicerna, sehingga baik untuk kesehatan pencernaan dan aman dikonsumsi oleh balita. Protein kolagen talas juga baik untuk kesehatan kulit, sehingga sering dimanfaatkan sebagai bahan dasar pembuatan kosmetik (Temesgen dan Retta 2015; Fitriani et al. 2016).\r\n\r\nPotensi Talas (Colocasia esculenta)\r\n\r\nPotensi Pangan Olahan \r\n\r\nkeripik dan stik talas. tepung.\r\n\r\nTepung talas dapat menjadi cake, bakpao, cookies, kue-kue, bakso lainnya.\r\n\r\nPotensi Pangan Funsional\r\n\r\nEkstrak tepung talas mengandung bioaktif  polisakarida larut air (PLA)  DP4 72,35%dan DP5 HPLC  87,98%   mengatasi penyakit degeneratif \r\n\r\nPotensi Industri\r\n\r\nPati talas  potensial sebagai sumber pati industri,  mengandung 13–29% pati, kadar air 63–85%, dan beberapa residu seperti riboflavin, vitamin C, abu, \r\n\r\nPati talas mempunyai kemampuan mengembang dan viskositas yang tinggi serta dapat membentuk struktur gel halus karena ukuran granul yang kecil\r\n\r\nKandungan karbohidrat talas cukup tinggi, sehingga talas sangat berpotensi sebagai salah satu alternatif untuk bahan baku pembuatan etanol. Sadimo et al. (2016) melaporkan bahwa pati umbi talas yang menghasilkan kadar gula tertinggi diperoleh pada penggunaan rasio asam klorida 15% pati umbi talas 10:1 atas dasar v/b, dengan kadar gula yang diperoleh sebesar 0,651%. Lama waktu hidrolisis untuk menghasilkan kadar gula tertinggi adalah 2,5 jam dengan hasil nilai kadar gula sebesar 0,653%. Hasil penelitian lainnya menunjukkan kadar bioetanol yang dihasilkan pada fermentasi pati umbi talas menggunakan ragi roti selama 5 hari sebesar 7,716%.\r\n\r\nUmbi talas Jepang mengandung senyawa polifenol, vitamin C, vitamin A, monogliserida, besi, tanin, saponin, dan kolagen. Kandungan kolagen berpotensi sebagai anti-aging, digunakan untuk pembuatan kosmetik dan sabun kecantikan, yang mana saat ini mulai banyak menarik perhatian para peneliti untuk mengembangkan formulasi berupa mikroemulsi untuk meningkatkan kemampuan penetrasi ke dalam kulit (Athiyah 2015 dan Nurbaya et al. 2019).', 'Blog09.jpg'),
(10, 1, '2023-11-09', 'Pemanfaatan Tanaman Talas Sebagai Bahan Baku Industri Pangan', 'Pernahkah Anda mempertanyakan bagaimana dunia akan mendapatkan makanan di masa depan? Mungkin Anda membayangkan peternakan vertikal atau makanan cetakan 3D, tetapi bagaimana jika jawabannya ada di bawah kaki kita? Itu benar, jawabannya adalah talas.\r\n\r\nTanaman umbi tropis yang telah menjadi andalan pangan di berbagai belahan dunia. Dalam artikel ini, kita akan mengeksplorasi bagaimana talas, bahan sakti ini, mengubah industri pangan.\r\n\r\nTalas adalah tanaman umbi yang telah menjadi bagian penting dari diet manusia selama ribuan tahun. Talas tumbuh subur di iklim tropis dan subtropis, membuatnya menjadi pilihan ideal untuk petani di daerah tersebut. Namun, baru-baru ini, talas telah menarik perhatian dunia berkat potensinya sebagai bahan baku dalam industri pangan.\r\n\r\nMengapa talas begitu penting? Jawabannya sederhana: talas memiliki kandungan gizi yang tinggi, termasuk karbohidrat, serat, dan berbagai mineral penting. Selain itu, talas juga memiliki potensi besar sebagai bahan baku karena bisa diproses menjadi berbagai produk, mulai dari tepung hingga adonan roti.\r\n\r\nNamun, yang membuat talas menjadi benar-benar revolusioner adalah kemampuannya untuk tumbuh di kondisi tanah yang kurang subur. Di masa depan, ketika perubahan iklim dan kekurangan air semakin menjadi tantangan utama, talas bisa menjadi solusi untuk mencukupi kebutuhan pangan dunia.\r\n\r\nIndustri pangan kini sedang berusaha keras untuk mengenali dan memanfaatkan potensi talas. Beberapa perusahaan telah memulai penelitian dan pengembangan produk berbasis talas, dari makanan pokok seperti roti dan pasta, hingga camilan sehat dan minuman berenergi.\r\n\r\nIni bukanlah pertama kalinya kita melihat perubahan besar dalam industri pangan. Sebelumnya, kita telah melihat bagaimana jagung, kentang, dan kedelai, yang semula hanya dikenal di daerah asalnya, telah menjadi andalan pangan dunia. Dan kini, saatnya talas.\r\n\r\nMengingat potensi luar biasa talas, kita perlu berinvestasi dalam penelitian dan pengembangan lebih lanjut untuk memastikan bahwa kita dapat memanfaatkan tanaman ini secara optimal. Ini bukan hanya tentang mencukupi kebutuhan pangan kita, tetapi juga tentang memastikan keberlanjutan dan ketahanan pangan di masa depan.\r\n\r\nKesimpulannya, talas adalah bahan sakti yang mampu mengubah industri pangan. Dengan investasi yang tepat, talas bisa menjadi jawaban untuk tantangan pangan masa depan. Jadi, mari kita berinvestasi dalam penelitian dan inovasi, dan saksikan bagaimana talas, bahan sakti ini, merubah wajah industri pangan kita.\r\n\r\nInilah fakta-fakta yang membuktikan betapa hebatnya talas. Bahan sakti ini bukan hanya member kan manfaat besar bagi kesehatan kita, tapi juga mampu membantu mengatasi tantangan lingkungan dan krisis pangan global yang kita hadapi saat ini.\r\n\r\nTalas juga memiliki kandungan antioksidan yang tinggi, yang dapat membantu melawan radikal bebas dan mencegah berbagai penyakit kronis. Ini menjadikan talas sebagai pilihan yang sehat untuk diet sehari-hari, sekaligus menjawab kebutuhan konsumen modern yang semakin sadar akan kesehatan.\r\n\r\nPenggunaan talas sebagai bahan baku industri juga membuka peluang baru bagi petani. Dengan permintaan pasar yang meningkat, petani talas dapat meraih pendapatan yang lebih baik. Hal ini bukan hanya berdampak positif pada perekonomian lokal, tetapi juga mendorong pengembangan teknologi pertanian dan inovasi dalam pengolahan pangan.\r\n\r\nNamun, tantangan masih ada. Untuk memanfaatkan sepenuhnya potensi talas, kita perlu melakukan penelitian lebih lanjut dan mengembangkan teknologi yang memungkinkan kita untuk mengolah dan memanfaatkan talas dengan efisien. Kita juga perlu bekerja sama dengan petani, peneliti, dan industri untuk memastikan bahwa talas dapat tumbuh dan dipanen dengan cara yang berkelanjutan.\r\n\r\nJadi, apa yang kita tunggu? Mari kita sambut masa depan industri pangan dengan talas, bahan sakti yang mengubah cara kita makan dan hidup. Mari kita berinvestasi dalam penelitian dan inovasi, dan mari kita kembangkan industri pangan yang lebih berkelanjutan, lebih sehat, dan lebih adil untuk semua orang.\r\n\r\nTalas, bahan sakti yang mengubah industri pangan! Itulah fakta yang tidak bisa kita abaikan. Kini saatnya kita melihat ke bawah, ke tanah tempat talas tumbuh, dan menyadari potensi besar yang ada di dalamnya. Kita memiliki kunci untuk masa depan industri pangan, dan kuncinya adalah talas.\r\n\r\nMari kita lakukan perubahan, dan mari kita mulai dengan talas. Karena, seperti yang telah kita lihat, talas bukan hanya mampu memberi kita makanan, tetapi juga membawa harapan dan solusi untuk masa depan. Sekarang, inilah saatnya untuk talas, bahan sakti yang siap mengubah dunia.', 'Blog10.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_faq`
--

INSERT INTO `tbl_faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(1, 'Apa Ciri-Ciri Tanaman Talas Terkena Hama?', 'Beberapa ciri umum talas terkena hama adalah daun berlubang-lubang, layu, menguning, atau kering, dan umbi membusuk.'),
(2, 'Hama Apa Yang Sering Menyerang Tanaman Talas?', 'Hama yang sering menyerang tanaman talas adalah ulat daun, belalang, kutu daun, penggerek batang, tungau merah, dan ulat grayak. Hama-hama ini dapat menyerang bagian daun, batang, maupun umbi talas.'),
(3, 'Penyakit Apa Yang Sering Menyerang Tanaman Talas?', 'Penyakit yang sering menyerang tanaman talas adalah busuk umbi, hawar daun, dan layu bakteri. Penyakit-penyakit ini dapat menyebabkan kematian tanaman talas.'),
(4, 'Bagaimana Cara Mengendalikan Hama Belalang?', 'Hama belalang dapat dikendalikan dengan cara pengendalian fisik, hayati, atau kimia. Pengendalian fisik dilakukan dengan mengumpulkan dan memusnahkan belalang secara manual. Pengendalian hayati dilakukan dengan memanfaatkan musuh alami belalang, seperti burung, katak, dan capung. Pengendalian kimia dilakukan dengan menggunakan pestisida yang sesuai.'),
(5, 'Berapa Rasio Pupuk Urea Yang Baik Untuk Tanaman Talas?', 'Rasio pupuk urea yang baik untuk tanaman talas adalah 100-150 kg urea/ha. Rasio ini dapat disesuaikan dengan kondisi lahan dan jenis talas yang dibudidayakan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_forum`
--

CREATE TABLE `tbl_forum` (
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `image` text DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_forum`
--

INSERT INTO `tbl_forum` (`id_forum`, `id_user`, `isi`, `image`, `tanggal`) VALUES
(6, 9, 'tes khaera', '', '2023-11-14'),
(37, 9, 'tesedit', 'erd_baru_bgt_drawio.png', '2023-11-15'),
(38, 8, 'Halo guys, ada yang tau ga ya ini kenapa daunnya seperti ini?', 'talas-lubang.png', '2023-11-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hama`
--

CREATE TABLE `tbl_hama` (
  `id_hama` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `pencegahan` text NOT NULL,
  `pengobatan` text NOT NULL,
  `gambar` text NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_hama`
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
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_user`, `id_forum`, `tanggal`, `isi`) VALUES
(8, 8, 6, '0000-00-00', 'tes'),
(9, 8, 6, '2023-11-14', 'tes'),
(13, 8, 6, '2023-11-14', 'ruhfuierhfuiheruifherfherhfuiehrfuiheruifherhferhfuierhfuiherufherhferhfuiehfuierhfui'),
(20, 8, 6, '2023-11-15', 'tes notif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_like_forum`
--

CREATE TABLE `tbl_like_forum` (
  `id_like` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_like_forum`
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
(103, 37, 9, '2023-11-15', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_notifikasi`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_notifikasi`
--

INSERT INTO `tbl_notifikasi` (`id_notifikasi`, `id_user_pengirim`, `id_user_penerima`, `id_forum`, `id_komentar`, `tanggal`, `pesan`, `type`) VALUES
(1, 8, 9, 6, NULL, '2023-11-15', 'tes notif', 'komentar'),
(2, 9, 8, 35, NULL, '2023-11-15', 'oh gitu', 'komentar'),
(3, 8, 9, NULL, 21, '2023-11-15', 'wkwkwkk', 'balasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `id_tag` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tag_blog`
--

CREATE TABLE `tbl_tag_blog` (
  `id` int(11) NOT NULL,
  `id_tag` int(11) DEFAULT NULL,
  `id_blog` int(11) NOT NULL,
  `id_forum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_toko`
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
  `jam_tutup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_toko`
--

INSERT INTO `tbl_toko` (`id_toko`, `nama_toko`, `deskripsi`, `rating`, `jenis`, `alamat`, `lattitude`, `longitude`, `no_telp`, `website`, `gambar`, `jam_buka`, `jam_tutup`) VALUES
(91, 'Tani Jaya', 'Menjual berbagai keperluan pertanian, benih, pestisida, dan bunga artificial', 4.5, 'Toko Obat', 'Jl. Dewi Sartika No.56, Pabaton, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16121', '-7', '107', '081511771456', 'http://localhost/website-talascare-main/business.site', 'Gambar_toko2.jpg', '08:00', '15:30'),
(92, 'Tani Jaya Baru', 'Toko Pertanian', 5, 'Toko Obat Hama', 'Jl. Gedong Sawah No.4 no. 12, Pabaton, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16121', '-7', '107', '081215799338', '', 'Toko-Pertanian-Terdekat.jpg', '08:30', '16:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ulasan`
--

CREATE TABLE `tbl_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` double NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_ulasan`
--

INSERT INTO `tbl_ulasan` (`id_ulasan`, `id_toko`, `id_user`, `rating`, `komentar`, `tanggal`) VALUES
(1, 92, 8, 4.2, 'bagus, lengkap bgt keren deh', '2023-11-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `no_telepon`, `password`, `email`, `jenis_kelamin`, `avatar`, `alamat`, `tanggal_lahir`, `status`, `code`, `verified`) VALUES
(8, 'Jaehyun Kece Badai', 'fiqhhh', '085155411077', '$2y$10$LGiXae319CnqyeZVPLzN6OAOr8MgI/GT3fkSugWV0z34pnnPygcAi', 'muhammadfiqih953@gmail.com', 'Laki-laki', 'maze_screenshot_interaction_(5).jpg', 'Bogor', '1997-02-14', 1, 'gpnfUiYbO4Md', 1),
(9, 'Khaera Umm', 'khaera', '08991208014', '$2y$10$LGiXae319CnqyeZVPLzN6OAOr8MgI/GT3fkSugWV0z34pnnPygcAi', 'khaaeraaummah@apps.ipb.ac.id', 'Perempuan', 'default.png', 'Bogor', '2023-11-15', 0, 'UtkYElWuJd5N', 1),
(10, NULL, 'irna', NULL, '$2y$10$AZX68mZJednSqUaRrnBE7OR.bmD7MmFAbcsnyCUdlzSd3TQUJFKyK', 'auliairna@gmail.com', NULL, 'default.png', NULL, NULL, 0, 'bYawFQtXBJ1M', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_balasan`
--
ALTER TABLE `tbl_balasan`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indeks untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `tbl_forum`
--
ALTER TABLE `tbl_forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indeks untuk tabel `tbl_hama`
--
ALTER TABLE `tbl_hama`
  ADD PRIMARY KEY (`id_hama`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tbl_like_forum`
--
ALTER TABLE `tbl_like_forum`
  ADD PRIMARY KEY (`id_like`);

--
-- Indeks untuk tabel `tbl_notifikasi`
--
ALTER TABLE `tbl_notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indeks untuk tabel `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indeks untuk tabel `tbl_tag_blog`
--
ALTER TABLE `tbl_tag_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_toko` (`id_toko`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_balasan`
--
ALTER TABLE `tbl_balasan`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_forum`
--
ALTER TABLE `tbl_forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tbl_hama`
--
ALTER TABLE `tbl_hama`
  MODIFY `id_hama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_like_forum`
--
ALTER TABLE `tbl_like_forum`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `tbl_notifikasi`
--
ALTER TABLE `tbl_notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_tag_blog`
--
ALTER TABLE `tbl_tag_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
