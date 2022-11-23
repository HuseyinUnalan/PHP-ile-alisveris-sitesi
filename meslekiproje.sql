-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Kas 2022, 19:01:43
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `meslekiproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `id` int(11) NOT NULL,
  `ayar_title` varchar(255) NOT NULL,
  `ayar_description` varchar(255) NOT NULL,
  `ayar_keywords` varchar(255) NOT NULL,
  `ayar_tel` varchar(50) NOT NULL,
  `ayar_gsm` varchar(50) NOT NULL,
  `ayar_mail` varchar(50) NOT NULL,
  `ayar_adres` varchar(255) NOT NULL,
  `ayar_il` varchar(50) NOT NULL,
  `ayar_ilce` varchar(50) NOT NULL,
  `ayar_mesai` varchar(50) NOT NULL,
  `ayar_hakkimizda` text NOT NULL,
  `ayar_hakkimizda_baslik` text NOT NULL,
  `ayar_facebook` varchar(255) NOT NULL,
  `ayar_twitter` varchar(255) NOT NULL,
  `ayar_youtube` varchar(255) NOT NULL,
  `ayar_instagram` varchar(255) NOT NULL,
  `ayar_logo` text NOT NULL,
  `ayar_favicon` text NOT NULL,
  `ayar_renkbir` varchar(50) NOT NULL,
  `ayar_renkiki` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`id`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_tel`, `ayar_gsm`, `ayar_mail`, `ayar_adres`, `ayar_il`, `ayar_ilce`, `ayar_mesai`, `ayar_hakkimizda`, `ayar_hakkimizda_baslik`, `ayar_facebook`, `ayar_twitter`, `ayar_youtube`, `ayar_instagram`, `ayar_logo`, `ayar_favicon`, `ayar_renkbir`, `ayar_renkiki`) VALUES
(0, 'BURADA', 'BURADA', 'burada, alışveriş, sebze, meyve', '555 668 85 5', '55555555', 'burada@info.com', 'Topkapı No:10 D:8', 'Istanbul-Turkey', 'Fatih-', '8:00 a.m - 9:00 p.m', '<h1>Biz Kimiz?</h1>\r\n\r\n<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>\r\n\r\n<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 'https://www.instagram.com/', 'images/logoresimler/20748logo.png', 'images/logoresimler/27009logobir.png', '#ff7800', '#050505');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetfoto`
--

CREATE TABLE `hizmetfoto` (
  `hizmetfoto_id` int(11) NOT NULL,
  `hizmet_id` int(11) NOT NULL,
  `hizmetfoto_resimyol` text NOT NULL,
  `hizmetfoto_sira` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hizmetfoto`
--

INSERT INTO `hizmetfoto` (`hizmetfoto_id`, `hizmet_id`, `hizmetfoto_resimyol`, `hizmetfoto_sira`) VALUES
(1, 1, 'images/hizmetresimler/2293825295214913068301.jpg', 0),
(2, 2, 'images/hizmetresimler/2878124598215772900902.jpg', 0),
(3, 3, 'images/hizmetresimler/3193727882265572484603.jpg', 0),
(4, 4, 'images/hizmetresimler/27643218993047228840hizmet-2.png', 0),
(5, 6, 'images/hizmetresimler/26062273773094821178hizmet.png', 0),
(6, 5, 'images/hizmetresimler/25271262963080220191hizmet-3.png', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmet_id` int(11) NOT NULL,
  `hizmet_ad` varchar(255) NOT NULL,
  `hizmet_icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmet_id`, `hizmet_ad`, `hizmet_icerik`) VALUES
(4, 'Ücretsiz Ve Hızlı Teslimat', '<p>&Uuml;cretsiz ve Hızlı Bir Şekilde Haftanın 7 g&uuml;n&uuml; İstediğin Saatte Teslim Edelim</p>\r\n'),
(5, 'Kolay Ödeme Yöntemleri', '<p>İstediğiniz Gibi Kapıda veya Kredi Kartı ile Online &Ouml;deme Yapın.</p>\r\n'),
(6, 'Taze Ve Organik', '<p>Birinci sınıf, kaliteli, taze ve organik &uuml;r&uuml;nlerimiz sizi bekliyor.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilceler`
--

CREATE TABLE `ilceler` (
  `ilce_no` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `il_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilceler`
--

INSERT INTO `ilceler` (`ilce_no`, `isim`, `il_no`) VALUES
(1, 'SEYHAN', 1),
(2, 'CEYHAN', 1),
(3, 'FEKE', 1),
(4, 'KARAİSALI', 1),
(5, 'KARATAŞ', 1),
(6, 'KOZAN', 1),
(7, 'POZANTI', 1),
(8, 'SAİMBEYLİ', 1),
(9, 'TUFANBEYLİ', 1),
(10, 'YUMURTALIK', 1),
(11, 'YÜREĞİR', 1),
(12, 'ALADAĞ', 1),
(13, 'İMAMOĞLU', 1),
(14, 'ADIYAMAN MERKEZ', 2),
(15, 'BESNİ', 2),
(16, 'ÇELİKHAN', 2),
(17, 'GERGER', 2),
(18, 'GÖLBAŞI', 2),
(19, 'KAHTA', 2),
(20, 'SAMSAT', 2),
(21, 'SİNCİK', 2),
(22, 'TUT', 2),
(23, 'AFYONMERKEZ', 3),
(24, 'BOLVADİN', 3),
(25, 'ÇAY', 3),
(26, 'DAZKIRI', 3),
(27, 'DİNAR', 3),
(28, 'EMİRDAĞ', 3),
(29, 'İHSANİYE', 3),
(30, 'SANDIKLI', 3),
(31, 'SİNANPAŞA', 3),
(32, 'SULDANDAĞI', 3),
(33, 'ŞUHUT', 3),
(34, 'BAŞMAKÇI', 3),
(35, 'BAYAT', 3),
(36, 'İŞCEHİSAR', 3),
(37, 'ÇOBANLAR', 3),
(38, 'EVCİLER', 3),
(39, 'HOCALAR', 3),
(40, 'KIZILÖREN', 3),
(41, 'AKSARAY MERKEZ', 68),
(42, 'ORTAKÖY', 68),
(43, 'AĞAÇÖREN', 68),
(44, 'GÜZELYURT', 68),
(45, 'SARIYAHŞİ', 68),
(46, 'ESKİL', 68),
(47, 'GÜLAĞAÇ', 68),
(48, 'AMASYA MERKEZ', 5),
(49, 'GÖYNÜÇEK', 5),
(50, 'GÜMÜŞHACIKÖYÜ', 5),
(51, 'MERZİFON', 5),
(52, 'SULUOVA', 5),
(53, 'TAŞOVA', 5),
(54, 'HAMAMÖZÜ', 5),
(55, 'ALTINDAĞ', 6),
(56, 'AYAS', 6),
(57, 'BALA', 6),
(58, 'BEYPAZARI', 6),
(59, 'ÇAMLIDERE', 6),
(60, 'ÇANKAYA', 6),
(61, 'ÇUBUK', 6),
(62, 'ELMADAĞ', 6),
(63, 'GÜDÜL', 6),
(64, 'HAYMANA', 6),
(65, 'KALECİK', 6),
(66, 'KIZILCAHAMAM', 6),
(67, 'NALLIHAN', 6),
(68, 'POLATLI', 6),
(69, 'ŞEREFLİKOÇHİSAR', 6),
(70, 'YENİMAHALLE', 6),
(71, 'GÖLBAŞI', 6),
(72, 'KEÇİÖREN', 6),
(73, 'MAMAK', 6),
(74, 'SİNCAN', 6),
(75, 'KAZAN', 6),
(76, 'AKYURT', 6),
(77, 'ETİMESGUT', 6),
(78, 'EVREN', 6),
(79, 'ANSEKİ', 7),
(80, 'ALANYA', 7),
(81, 'ANTALYA MERKEZİ', 7),
(82, 'ELMALI', 7),
(83, 'FİNİKE', 7),
(84, 'GAZİPAŞA', 7),
(85, 'GÜNDOĞMUŞ', 7),
(86, 'KAŞ', 7),
(87, 'KORKUTELİ', 7),
(88, 'KUMLUCA', 7),
(89, 'MANAVGAT', 7),
(90, 'SERİK', 7),
(91, 'DEMRE', 7),
(92, 'İBRADI', 7),
(93, 'KEMER', 7),
(94, 'ARDAHAN MERKEZ', 75),
(95, 'GÖLE', 75),
(96, 'ÇILDIR', 75),
(97, 'HANAK', 75),
(98, 'POSOF', 75),
(99, 'DAMAL', 75),
(100, 'ARDANUÇ', 8),
(101, 'ARHAVİ', 8),
(102, 'ARTVİN MERKEZ', 8),
(103, 'BORÇKA', 8),
(104, 'HOPA', 8),
(105, 'ŞAVŞAT', 8),
(106, 'YUSUFELİ', 8),
(107, 'MURGUL', 8),
(108, 'AYDIN MERKEZ', 9),
(109, 'BOZDOĞAN', 9),
(110, 'ÇİNE', 9),
(111, 'GERMENCİK', 9),
(112, 'KARACASU', 9),
(113, 'KOÇARLI', 9),
(114, 'KUŞADASI', 9),
(115, 'KUYUCAK', 9),
(116, 'NAZİLLİ', 9),
(117, 'SÖKE', 9),
(118, 'SULTANHİSAR', 9),
(119, 'YENİPAZAR', 9),
(120, 'BUHARKENT', 9),
(121, 'İNCİRLİOVA', 9),
(122, 'KARPUZLU', 9),
(123, 'KÖŞK', 9),
(124, 'DİDİM', 9),
(125, 'AĞRI MERKEZ', 4),
(126, 'DİYADİN', 4),
(127, 'DOĞUBEYAZIT', 4),
(128, 'ELEŞKİRT', 4),
(129, 'HAMUR', 4),
(130, 'PATNOS', 4),
(131, 'TAŞLIÇAY', 4),
(132, 'TUTAK', 4),
(133, 'AYVALIK', 10),
(134, 'BALIKESİR MERKEZ', 10),
(135, 'BALYA', 10),
(136, 'BANDIRMA', 10),
(137, 'BİGADİÇ', 10),
(138, 'BURHANİYE', 10),
(139, 'DURSUNBEY', 10),
(140, 'EDREMİT', 10),
(141, 'ERDEK', 10),
(142, 'GÖNEN', 10),
(143, 'HAVRAN', 10),
(144, 'İVRİNDİ', 10),
(145, 'KEPSUT', 10),
(146, 'MANYAS', 10),
(147, 'SAVAŞTEPE', 10),
(148, 'SINDIRGI', 10),
(149, 'SUSURLUK', 10),
(150, 'MARMARA', 10),
(151, 'GÖMEÇ', 10),
(152, 'BARTIN MERKEZ', 74),
(153, 'KURUCAŞİLE', 74),
(154, 'ULUS', 74),
(155, 'AMASRA', 74),
(156, 'BATMAN MERKEZ', 72),
(157, 'BEŞİRİ', 72),
(158, 'GERCÜŞ', 72),
(159, 'KOZLUK', 72),
(160, 'SASON', 72),
(161, 'HASANKEYF', 72),
(162, 'BAYBURT MERKEZ', 69),
(163, 'AYDINTEPE', 69),
(164, 'DEMİRÖZÜ', 69),
(165, 'BOLU MERKEZ', 14),
(166, 'GEREDE', 14),
(167, 'GÖYNÜK', 14),
(168, 'KIBRISCIK', 14),
(169, 'MENGEN', 14),
(170, 'MUDURNU', 14),
(171, 'SEBEN', 14),
(172, 'DÖRTDİVAN', 14),
(173, 'YENİÇAĞA', 14),
(174, 'AĞLASUN', 15),
(175, 'BUCAK', 15),
(176, 'BURDUR MERKEZ', 15),
(177, 'GÖLHİSAR', 15),
(178, 'TEFENNİ', 15),
(179, 'YEŞİLOVA', 15),
(180, 'KARAMANLI', 15),
(181, 'KEMER', 15),
(182, 'ALTINYAYLA', 15),
(183, 'ÇAVDIR', 15),
(184, 'ÇELTİKÇİ', 15),
(185, 'GEMLİK', 16),
(186, 'İNEGÖL', 16),
(187, 'İZNİK', 16),
(188, 'KARACABEY', 16),
(189, 'KELES', 16),
(190, 'MUDANYA', 16),
(191, 'MUSTAFA K. PAŞA', 16),
(192, 'ORHANELİ', 16),
(193, 'ORHANGAZİ', 16),
(194, 'YENİŞEHİR', 16),
(195, 'BÜYÜK ORHAN', 16),
(196, 'HARMANCIK', 16),
(197, 'NÜLİFER', 16),
(198, 'OSMAN GAZİ', 16),
(199, 'YILDIRIM', 16),
(200, 'GÜRSU', 16),
(201, 'KESTEL', 16),
(202, 'BİLECİK MERKEZ', 11),
(203, 'BOZÜYÜK', 11),
(204, 'GÖLPAZARI', 11),
(205, 'OSMANELİ', 11),
(206, 'PAZARYERİ', 11),
(207, 'SÖĞÜT', 11),
(208, 'YENİPAZAR', 11),
(209, 'İNHİSAR', 11),
(210, 'BİNGÖL MERKEZ', 12),
(211, 'GENÇ', 12),
(212, 'KARLIOVA', 12),
(213, 'KİGI', 12),
(214, 'SOLHAN', 12),
(215, 'ADAKLI', 12),
(216, 'YAYLADERE', 12),
(217, 'YEDİSU', 12),
(218, 'ADİLCEVAZ', 13),
(219, 'AHLAT', 13),
(220, 'BİTLİS MERKEZ', 13),
(221, 'HİZAN', 13),
(222, 'MUTKİ', 13),
(223, 'TATVAN', 13),
(224, 'GÜROYMAK', 13),
(225, 'DENİZLİ MERKEZ', 20),
(226, 'ACIPAYAM', 20),
(227, 'BULDAN', 20),
(228, 'ÇAL', 20),
(229, 'ÇAMELİ', 20),
(230, 'ÇARDAK', 20),
(231, 'ÇİVRİL', 20),
(232, 'GÜNEY', 20),
(233, 'KALE', 20),
(234, 'SARAYKÖY', 20),
(235, 'TAVAS', 20),
(236, 'BABADAĞ', 20),
(237, 'BEKİLLİ', 20),
(238, 'HONAZ', 20),
(239, 'SERİNHİSAR', 20),
(240, 'AKKÖY', 20),
(241, 'BAKLAN', 20),
(242, 'BEYAĞAÇ', 20),
(243, 'BOZKURT', 20),
(244, 'DÜZCE MERKEZ', 81),
(245, 'AKÇAKOCA', 81),
(246, 'YIĞILCA', 81),
(247, 'CUMAYERİ', 81),
(248, 'GÖLYAKA', 81),
(249, 'ÇİLİMLİ', 81),
(250, 'GÜMÜŞOVA', 81),
(251, 'KAYNAŞLI', 81),
(252, 'DİYARBAKIR MERKEZ', 21),
(253, 'BİSMİL', 21),
(254, 'ÇERMİK', 21),
(255, 'ÇINAR', 21),
(256, 'ÇÜNGÜŞ', 21),
(257, 'DİCLE', 21),
(258, 'ERGANİ', 21),
(259, 'HANİ', 21),
(260, 'HAZRO', 21),
(261, 'KULP', 21),
(262, 'LİCE', 21),
(263, 'SİLVAN', 21),
(264, 'EĞİL', 21),
(265, 'KOCAKÖY', 21),
(266, 'EDİRNE MERKEZ', 22),
(267, 'ENEZ', 22),
(268, 'HAVSA', 22),
(269, 'İPSALA', 22),
(270, 'KEŞAN', 22),
(271, 'LALAPAŞA', 22),
(272, 'MERİÇ', 22),
(273, 'UZUNKÖPRÜ', 22),
(274, 'SÜLOĞLU', 22),
(275, 'ELAZIĞ MERKEZ', 23),
(276, 'AĞIN', 23),
(277, 'BASKİL', 23),
(278, 'KARAKOÇAN', 23),
(279, 'KEBAN', 23),
(280, 'MADEN', 23),
(281, 'PALU', 23),
(282, 'SİVRİCE', 23),
(283, 'ARICAK', 23),
(284, 'KOVANCILAR', 23),
(285, 'ALACAKAYA', 23),
(286, 'ERZURUM MERKEZ', 25),
(287, 'PALANDÖKEN', 25),
(288, 'AŞKALE', 25),
(289, 'ÇAT', 25),
(290, 'HINIS', 25),
(291, 'HORASAN', 25),
(292, 'OLTU', 25),
(293, 'İSPİR', 25),
(294, 'KARAYAZI', 25),
(295, 'NARMAN', 25),
(296, 'OLUR', 25),
(297, 'PASİNLER', 25),
(298, 'ŞENKAYA', 25),
(299, 'TEKMAN', 25),
(300, 'TORTUM', 25),
(301, 'KARAÇOBAN', 25),
(302, 'UZUNDERE', 25),
(303, 'PAZARYOLU', 25),
(304, 'ILICA', 25),
(305, 'KÖPRÜKÖY', 25),
(306, 'ÇAYIRLI', 24),
(307, 'ERZİNCAN MERKEZ', 24),
(308, 'İLİÇ', 24),
(309, 'KEMAH', 24),
(310, 'KEMALİYE', 24),
(311, 'REFAHİYE', 24),
(312, 'TERCAN', 24),
(313, 'OTLUKBELİ', 24),
(314, 'ESKİŞEHİR MERKEZ', 26),
(315, 'ÇİFTELER', 26),
(316, 'MAHMUDİYE', 26),
(317, 'MİHALIÇLIK', 26),
(318, 'SARICAKAYA', 26),
(319, 'SEYİTGAZİ', 26),
(320, 'SİVRİHİSAR', 26),
(321, 'ALPU', 26),
(322, 'BEYLİKOVA', 26),
(323, 'İNÖNÜ', 26),
(324, 'GÜNYÜZÜ', 26),
(325, 'HAN', 26),
(326, 'MİHALGAZİ', 26),
(327, 'ARABAN', 27),
(328, 'İSLAHİYE', 27),
(329, 'NİZİP', 27),
(330, 'OĞUZELİ', 27),
(331, 'YAVUZELİ', 27),
(332, 'ŞAHİNBEY', 27),
(333, 'ŞEHİT KAMİL', 27),
(334, 'KARKAMIŞ', 27),
(335, 'NURDAĞI', 27),
(336, 'GÜMÜŞHANE MERKEZ', 29),
(337, 'KELKİT', 29),
(338, 'ŞİRAN', 29),
(339, 'TORUL', 29),
(340, 'KÖSE', 29),
(341, 'KÜRTÜN', 29),
(342, 'ALUCRA', 28),
(343, 'BULANCAK', 28),
(344, 'DERELİ', 28),
(345, 'ESPİYE', 28),
(346, 'EYNESİL', 28),
(347, 'GİRESUN MERKEZ', 28),
(348, 'GÖRELE', 28),
(349, 'KEŞAP', 28),
(350, 'ŞEBİNKARAHİSAR', 28),
(351, 'TİREBOLU', 28),
(352, 'PİPAZİZ', 28),
(353, 'YAĞLIDERE', 28),
(354, 'ÇAMOLUK', 28),
(355, 'ÇANAKÇI', 28),
(356, 'DOĞANKENT', 28),
(357, 'GÜCE', 28),
(358, 'HAKKARİ MERKEZ', 30),
(359, 'ÇUKURCA', 30),
(360, 'ŞEMDİNLİ', 30),
(361, 'YÜKSEKOVA', 30),
(362, 'ALTINÖZÜ', 31),
(363, 'DÖRTYOL', 31),
(364, 'HATAY MERKEZ', 31),
(365, 'HASSA', 31),
(366, 'İSKENDERUN', 31),
(367, 'KIRIKHAN', 31),
(368, 'REYHANLI', 31),
(369, 'SAMANDAĞ', 31),
(370, 'YAYLADAĞ', 31),
(371, 'ERZİN', 31),
(372, 'BELEN', 31),
(373, 'KUMLU', 31),
(374, 'ISPARTA MERKEZ', 32),
(375, 'ATABEY', 32),
(376, 'KEÇİBORLU', 32),
(377, 'EĞİRDİR', 32),
(378, 'GELENDOST', 32),
(379, 'SİNİRKENT', 32),
(380, 'ULUBORLU', 32),
(381, 'YALVAÇ', 32),
(382, 'AKSU', 32),
(383, 'GÖNEN', 32),
(384, 'YENİŞAR BADEMLİ', 32),
(385, 'IĞDIR MERKEZ', 76),
(386, 'ARALIK', 76),
(387, 'TUZLUCA', 76),
(388, 'KARAKOYUNLU', 76),
(389, 'AFŞİN', 46),
(390, 'ANDIRIN', 46),
(391, 'ELBİSTAN', 46),
(392, 'GÖKSUN', 46),
(393, 'KAHRAMANMARAŞ MERKEZ', 46),
(394, 'PAZARCIK', 46),
(395, 'TÜRKOĞLU', 46),
(396, 'ÇAĞLAYANCERİT', 46),
(397, 'EKİNÖZÜ', 46),
(398, 'NURHAK', 46),
(399, 'EFLANİ', 78),
(400, 'ESKİPAZAR', 78),
(401, 'KARABÜK MERKEZ', 78),
(402, 'OVACIK', 78),
(403, 'SAFRANBOLU', 78),
(404, 'YENİCE', 78),
(405, 'ERMENEK', 70),
(406, 'KARAMAN MERKEZ', 70),
(407, 'AYRANCI', 70),
(408, 'KAZIMKARABEKİR', 70),
(409, 'BAŞYAYLA', 70),
(410, 'SARIVELİLER', 70),
(411, 'KARS MERKEZ', 36),
(412, 'ARPAÇAY', 36),
(413, 'DİGOR', 36),
(414, 'KAĞIZMAN', 36),
(415, 'SARIKAMIŞ', 36),
(416, 'SELİM', 36),
(417, 'SUSUZ', 36),
(418, 'AKYAKA', 36),
(419, 'ABANA', 37),
(420, 'KASTAMONU MERKEZ', 37),
(421, 'ARAÇ', 37),
(422, 'AZDAVAY', 37),
(423, 'BOZKURT', 37),
(424, 'CİDE', 37),
(425, 'ÇATALZEYTİN', 37),
(426, 'DADAY', 37),
(427, 'DEVREKANİ', 37),
(428, 'İNEBOLU', 37),
(429, 'KÜRE', 37),
(430, 'TAŞKÖPRÜ', 37),
(431, 'TOSYA', 37),
(432, 'İHSANGAZİ', 37),
(433, 'PINARBAŞI', 37),
(434, 'ŞENPAZAR', 37),
(435, 'AĞLI', 37),
(436, 'DOĞANYURT', 37),
(437, 'HANÖNÜ', 37),
(438, 'SEYDİLER', 37),
(439, 'BÜNYAN', 38),
(440, 'DEVELİ', 38),
(441, 'FELAHİYE', 38),
(442, 'İNCESU', 38),
(443, 'PINARBAŞI', 38),
(444, 'SARIOĞLAN', 38),
(445, 'SARIZ', 38),
(446, 'TOMARZA', 38),
(447, 'YAHYALI', 38),
(448, 'YEŞİLHİSAR', 38),
(449, 'AKKIŞLA', 38),
(450, 'TALAS', 38),
(451, 'KOCASİNAN', 38),
(452, 'MELİKGAZİ', 38),
(453, 'HACILAR', 38),
(454, 'ÖZVATAN', 38),
(455, 'DERİCE', 71),
(456, 'KESKİN', 71),
(457, 'KIRIKKALE MERKEZ', 71),
(458, 'SALAK YURT', 71),
(459, 'BAHŞİLİ', 71),
(460, 'BALIŞEYH', 71),
(461, 'ÇELEBİ', 71),
(462, 'KARAKEÇİLİ', 71),
(463, 'YAHŞİHAN', 71),
(464, 'KIRKKLARELİ MERKEZ', 39),
(465, 'BABAESKİ', 39),
(466, 'DEMİRKÖY', 39),
(467, 'KOFÇAY', 39),
(468, 'LÜLEBURGAZ', 39),
(469, 'VİZE', 39),
(470, 'KIRŞEHİR MERKEZ', 40),
(471, 'ÇİÇEKDAĞI', 40),
(472, 'KAMAN', 40),
(473, 'MUCUR', 40),
(474, 'AKPINAR', 40),
(475, 'AKÇAKENT', 40),
(476, 'BOZTEPE', 40),
(477, 'KOCAELİ MERKEZ', 41),
(478, 'GEBZE', 41),
(479, 'GÖLCÜK', 41),
(480, 'KANDIRA', 41),
(481, 'KARAMÜRSEL', 41),
(482, 'KÖRFEZ', 41),
(483, 'DERİNCE', 41),
(484, 'KONYA MERKEZ', 42),
(485, 'AKŞEHİR', 42),
(486, 'BEYŞEHİR', 42),
(487, 'BOZKIR', 42),
(488, 'CİHANBEYLİ', 42),
(489, 'ÇUMRA', 42),
(490, 'DOĞANHİSAR', 42),
(491, 'EREĞLİ', 42),
(492, 'HADİM', 42),
(493, 'ILGIN', 42),
(494, 'KADINHANI', 42),
(495, 'KARAPINAR', 42),
(496, 'KULU', 42),
(497, 'SARAYÖNÜ', 42),
(498, 'SEYDİŞEHİR', 42),
(499, 'YUNAK', 42),
(500, 'AKÖREN', 42),
(501, 'ALTINEKİN', 42),
(502, 'DEREBUCAK', 42),
(503, 'HÜYÜK', 42),
(504, 'KARATAY', 42),
(505, 'MERAM', 42),
(506, 'SELÇUKLU', 42),
(507, 'TAŞKENT', 42),
(508, 'AHIRLI', 42),
(509, 'ÇELTİK', 42),
(510, 'DERBENT', 42),
(511, 'EMİRGAZİ', 42),
(512, 'GÜNEYSINIR', 42),
(513, 'HALKAPINAR', 42),
(514, 'TUZLUKÇU', 42),
(515, 'YALIHÜYÜK', 42),
(516, 'KÜTAHYA  MERKEZ', 43),
(517, 'ALTINTAŞ', 43),
(518, 'DOMANİÇ', 43),
(519, 'EMET', 43),
(520, 'GEDİZ', 43),
(521, 'SİMAV', 43),
(522, 'TAVŞANLI', 43),
(523, 'ASLANAPA', 43),
(524, 'DUMLUPINAR', 43),
(525, 'HİSARCIK', 43),
(526, 'ŞAPHANE', 43),
(527, 'ÇAVDARHİSAR', 43),
(528, 'PAZARLAR', 43),
(529, 'KİLİS MERKEZ', 79),
(530, 'ELBEYLİ', 79),
(531, 'MUSABEYLİ', 79),
(532, 'POLATELİ', 79),
(533, 'MALATYA MERKEZ', 44),
(534, 'AKÇADAĞ', 44),
(535, 'ARAPGİR', 44),
(536, 'ARGUVAN', 44),
(537, 'DARENDE', 44),
(538, 'DOĞANŞEHİR', 44),
(539, 'HEKİMHAN', 44),
(540, 'PÜTÜRGE', 44),
(541, 'YEŞİLYURT', 44),
(542, 'BATTALGAZİ', 44),
(543, 'DOĞANYOL', 44),
(544, 'KALE', 44),
(545, 'KULUNCAK', 44),
(546, 'YAZIHAN', 44),
(547, 'AKHİSAR', 45),
(548, 'ALAŞEHİR', 45),
(549, 'DEMİRCİ', 45),
(550, 'GÖRDES', 45),
(551, 'KIRKAĞAÇ', 45),
(552, 'KULA', 45),
(553, 'MANİSA MERKEZ', 45),
(554, 'SALİHLİ', 45),
(555, 'SARIGÖL', 45),
(556, 'SARUHANLI', 45),
(557, 'SELENDİ', 45),
(558, 'SOMA', 45),
(559, 'TURGUTLU', 45),
(560, 'AHMETLİ', 45),
(561, 'GÖLMARMARA', 45),
(562, 'KÖPRÜBAŞI', 45),
(563, 'DERİK', 47),
(564, 'KIZILTEPE', 47),
(565, 'MARDİN MERKEZ', 47),
(566, 'MAZIDAĞI', 47),
(567, 'MİDYAT', 47),
(568, 'NUSAYBİN', 47),
(569, 'ÖMERLİ', 47),
(570, 'SAVUR', 47),
(571, 'YEŞİLLİ', 47),
(572, 'MERSİN MERKEZ', 33),
(573, 'ANAMUR', 33),
(574, 'ERDEMLİ', 33),
(575, 'GÜLNAR', 33),
(576, 'MUT', 33),
(577, 'SİLİFKE', 33),
(578, 'TARSUS', 33),
(579, 'AYDINCIK', 33),
(580, 'BOZYAZI', 33),
(581, 'ÇAMLIYAYLA', 33),
(582, 'BODRUM', 48),
(583, 'DATÇA', 48),
(584, 'FETHİYE', 48),
(585, 'KÖYCEĞİZ', 48),
(586, 'MARMARİS', 48),
(587, 'MİLAS', 48),
(588, 'MUĞLA MERKEZ', 48),
(589, 'ULA', 48),
(590, 'YATAĞAN', 48),
(591, 'DALAMAN', 48),
(592, 'KAVAKLI DERE', 48),
(593, 'ORTACA', 48),
(594, 'BULANIK', 49),
(595, 'MALAZGİRT', 49),
(596, 'MUŞ MERKEZ', 49),
(597, 'VARTO', 49),
(598, 'HASKÖY', 49),
(599, 'KORKUT', 49),
(600, 'NEVŞEHİR MERKEZ', 50),
(601, 'AVANOS', 50),
(602, 'DERİNKUYU', 50),
(603, 'GÜLŞEHİR', 50),
(604, 'HACIBEKTAŞ', 50),
(605, 'KOZAKLI', 50),
(606, 'ÜRGÜP', 50),
(607, 'ACIGÖL', 50),
(608, 'NİĞDE MERKEZ', 51),
(609, 'BOR', 51),
(610, 'ÇAMARDI', 51),
(611, 'ULUKIŞLA', 51),
(612, 'ALTUNHİSAR', 51),
(613, 'ÇİFTLİK', 51),
(614, 'AKKUŞ', 52),
(615, 'AYBASTI', 52),
(616, 'FATSA', 52),
(617, 'GÖLKÖY', 52),
(618, 'KORGAN', 52),
(619, 'KUMRU', 52),
(620, 'MESUDİYE', 52),
(621, 'ORDU MERKEZ', 52),
(622, 'PERŞEMBE', 52),
(623, 'ULUBEY', 52),
(624, 'ÜNYE', 52),
(625, 'GÜLYALI', 52),
(626, 'GÜRGENTEPE', 52),
(627, 'ÇAMAŞ', 52),
(628, 'ÇATALPINAR', 52),
(629, 'ÇAYBAŞI', 52),
(630, 'İKİZCE', 52),
(631, 'KABADÜZ', 52),
(632, 'KABATAŞ', 52),
(633, 'BAHÇE', 80),
(634, 'KADİRLİ', 80),
(635, 'OSMANİYE MERKEZ', 80),
(636, 'DÜZİÇİ', 80),
(637, 'HASANBEYLİ', 80),
(638, 'SUMBAŞ', 80),
(639, 'TOPRAKKALE', 80),
(640, 'RİZE MERKEZ', 53),
(641, 'ARDEŞEN', 53),
(642, 'ÇAMLIHEMŞİN', 53),
(643, 'ÇAYELİ', 53),
(644, 'FINDIKLI', 53),
(645, 'İKİZDERE', 53),
(646, 'KALKANDERE', 53),
(647, 'PAZAR', 53),
(648, 'GÜNEYSU', 53),
(649, 'DEREPAZARI', 53),
(650, 'HEMŞİN', 53),
(651, 'İYİDERE', 53),
(652, 'AKYAZI', 54),
(653, 'GEYVE', 54),
(654, 'HENDEK', 54),
(655, 'KARASU', 54),
(656, 'KAYNARCA', 54),
(657, 'SAKARYA MERKEZ', 54),
(658, 'PAMUKOVA', 54),
(659, 'TARAKLI', 54),
(660, 'FERİZLİ', 54),
(661, 'KARAPÜRÇEK', 54),
(662, 'SÖĞÜTLÜ', 54),
(663, 'ALAÇAM', 55),
(664, 'BAFRA', 55),
(665, 'ÇARŞAMBA', 55),
(666, 'HAVZA', 55),
(667, 'KAVAK', 55),
(668, 'LADİK', 55),
(669, 'SAMSUN MERKEZ', 55),
(670, 'TERME', 55),
(671, 'VEZİRKÖPRÜ', 55),
(672, 'ASARCIK', 55),
(673, 'ONDOKUZMAYIS', 55),
(674, 'SALIPAZARI', 55),
(675, 'TEKKEKÖY', 55),
(676, 'AYVACIK', 55),
(677, 'YAKAKENT', 55),
(678, 'AYANCIK', 57),
(679, 'BOYABAT', 57),
(680, 'SİNOP MERKEZ', 57),
(681, 'DURAĞAN', 57),
(682, 'ERGELEK', 57),
(683, 'GERZE', 57),
(684, 'TÜRKELİ', 57),
(685, 'DİKMEN', 57),
(686, 'SARAYDÜZÜ', 57),
(687, 'DİVRİĞİ', 58),
(688, 'GEMEREK', 58),
(689, 'GÜRÜN', 58),
(690, 'HAFİK', 58),
(691, 'İMRANLI', 58),
(692, 'KANGAL', 58),
(693, 'KOYUL HİSAR', 58),
(694, 'SİVAS MERKEZ', 58),
(695, 'SU ŞEHRİ', 58),
(696, 'ŞARKIŞLA', 58),
(697, 'YILDIZELİ', 58),
(698, 'ZARA', 58),
(699, 'AKINCILAR', 58),
(700, 'ALTINYAYLA', 58),
(701, 'DOĞANŞAR', 58),
(702, 'GÜLOVA', 58),
(703, 'ULAŞ', 58),
(704, 'BAYKAN', 56),
(705, 'ERUH', 56),
(706, 'KURTALAN', 56),
(707, 'PERVARİ', 56),
(708, 'SİİRT MERKEZ', 56),
(709, 'ŞİRVARİ', 56),
(710, 'AYDINLAR', 56),
(711, 'TEKİRDAĞ MERKEZ', 59),
(712, 'ÇERKEZKÖY', 59),
(713, 'ÇORLU', 59),
(714, 'HAYRABOLU', 59),
(715, 'MALKARA', 59),
(716, 'MURATLI', 59),
(717, 'SARAY', 59),
(718, 'ŞARKÖY', 59),
(719, 'MARAMARAEREĞLİSİ', 59),
(720, 'ALMUS', 60),
(721, 'ARTOVA', 60),
(722, 'TOKAT MERKEZ', 60),
(723, 'ERBAA', 60),
(724, 'NİKSAR', 60),
(725, 'REŞADİYE', 60),
(726, 'TURHAL', 60),
(727, 'ZİLE', 60),
(728, 'PAZAR', 60),
(729, 'YEŞİLYURT', 60),
(730, 'BAŞÇİFTLİK', 60),
(731, 'SULUSARAY', 60),
(732, 'TRABZON MERKEZ', 61),
(733, 'AKÇAABAT', 61),
(734, 'ARAKLI', 61),
(735, 'ARŞİN', 61),
(736, 'ÇAYKARA', 61),
(737, 'MAÇKA', 61),
(738, 'OF', 61),
(739, 'SÜRMENE', 61),
(740, 'TONYA', 61),
(741, 'VAKFIKEBİR', 61),
(742, 'YOMRA', 61),
(743, 'BEŞİKDÜZÜ', 61),
(744, 'ŞALPAZARI', 61),
(745, 'ÇARŞIBAŞI', 61),
(746, 'DERNEKPAZARI', 61),
(747, 'DÜZKÖY', 61),
(748, 'HAYRAT', 61),
(749, 'KÖPRÜBAŞI', 61),
(750, 'TUNCELİ MERKEZ', 62),
(751, 'ÇEMİŞGEZEK', 62),
(752, 'HOZAT', 62),
(753, 'MAZGİRT', 62),
(754, 'NAZİMİYE', 62),
(755, 'OVACIK', 62),
(756, 'PERTEK', 62),
(757, 'PÜLÜMÜR', 62),
(758, 'BANAZ', 64),
(759, 'EŞME', 64),
(760, 'KARAHALLI', 64),
(761, 'SİVASLI', 64),
(762, 'ULUBEY', 64),
(763, 'UŞAK MERKEZ', 64),
(764, 'BAŞKALE', 65),
(765, 'VAN MERKEZ', 65),
(766, 'EDREMİT', 65),
(767, 'ÇATAK', 65),
(768, 'ERCİŞ', 65),
(769, 'GEVAŞ', 65),
(770, 'GÜRPINAR', 65),
(771, 'MURADİYE', 65),
(772, 'ÖZALP', 65),
(773, 'BAHÇESARAY', 65),
(774, 'ÇALDIRAN', 65),
(775, 'SARAY', 65),
(776, 'YALOVA MERKEZ', 77),
(777, 'ALTINOVA', 77),
(778, 'ARMUTLU', 77),
(779, 'ÇINARCIK', 77),
(780, 'ÇİFTLİKKÖY', 77),
(781, 'TERMAL', 77),
(782, 'AKDAĞMADENİ', 66),
(783, 'BOĞAZLIYAN', 66),
(784, 'YOZGAT MERKEZ', 66),
(785, 'ÇAYIRALAN', 66),
(786, 'ÇEKEREK', 66),
(787, 'SARIKAYA', 66),
(788, 'SORGUN', 66),
(789, 'ŞEFAATLI', 66),
(790, 'YERKÖY', 66),
(791, 'KADIŞEHRİ', 66),
(792, 'SARAYKENT', 66),
(793, 'YENİFAKILI', 66),
(794, 'ÇAYCUMA', 67),
(795, 'DEVREK', 67),
(796, 'ZONGULDAK MERKEZ', 67),
(797, 'EREĞLİ', 67),
(798, 'ALAPLI', 67),
(799, 'GÖKÇEBEY', 67),
(800, 'ÇANAKKALE MERKEZ', 17),
(801, 'AYVACIK', 17),
(802, 'BAYRAMİÇ', 17),
(803, 'BİGA', 17),
(804, 'BOZCAADA', 17),
(805, 'ÇAN', 17),
(806, 'ECEABAT', 17),
(807, 'EZİNE', 17),
(808, 'LAPSEKİ', 17),
(809, 'YENİCE', 17),
(810, 'ÇANKIRI MERKEZ', 18),
(811, 'ÇERKEŞ', 18),
(812, 'ELDİVAN', 18),
(813, 'ILGAZ', 18),
(814, 'KURŞUNLU', 18),
(815, 'ORTA', 18),
(816, 'ŞABANÖZÜ', 18),
(817, 'YAPRAKLI', 18),
(818, 'ATKARACALAR', 18),
(819, 'KIZILIRMAK', 18),
(820, 'BAYRAMÖREN', 18),
(821, 'KORGUN', 18),
(822, 'ALACA', 19),
(823, 'BAYAT', 19),
(824, 'ÇORUM MERKEZ', 19),
(825, 'İKSİPLİ', 19),
(826, 'KARGI', 19),
(827, 'MECİTÖZÜ', 19),
(828, 'ORTAKÖY', 19),
(829, 'OSMANCIK', 19),
(830, 'SUNGURLU', 19),
(831, 'DODURGA', 19),
(832, 'LAÇİN', 19),
(833, 'OĞUZLAR', 19),
(834, 'ADALAR', 34),
(835, 'BAKIRKÖY', 34),
(836, 'BEŞİKTAŞ', 34),
(837, 'BEYKOZ', 34),
(838, 'BEYOĞLU', 34),
(839, 'ÇATALCA', 34),
(840, 'EMİNÖNÜ', 34),
(841, 'EYÜP', 34),
(842, 'FATİH', 34),
(843, 'GAZİOSMANPAŞA', 34),
(844, 'KADIKÖY', 34),
(845, 'KARTAL', 34),
(846, 'SARIYER', 34),
(847, 'SİLİVRİ', 34),
(848, 'ŞİLE', 34),
(849, 'ŞİŞLİ', 34),
(850, 'ÜSKÜDAR', 34),
(851, 'ZEYTİNBURNU', 34),
(852, 'BÜYÜKÇEKMECE', 34),
(853, 'KAĞITHANE', 34),
(854, 'KÜÇÜKÇEKMECE', 34),
(855, 'PENDİK', 34),
(856, 'ÜMRANİYE', 34),
(857, 'BAYRAMPAŞA', 34),
(858, 'AVCILAR', 34),
(859, 'BAĞCILAR', 34),
(860, 'BAHÇELİEVLER', 34),
(861, 'GÜNGÖREN', 34),
(862, 'MALTEPE', 34),
(863, 'SULTANBEYLİ', 34),
(864, 'TUZLA', 34),
(865, 'ESENLER', 34),
(866, 'ALİAĞA', 35),
(867, 'BAYINDIR', 35),
(868, 'BERGAMA', 35),
(869, 'BORNOVA', 35),
(870, 'ÇEŞME', 35),
(871, 'DİKİLİ', 35),
(872, 'FOÇA', 35),
(873, 'KARABURUN', 35),
(874, 'KARŞIYAKA', 35),
(875, 'KEMALPAŞA', 35),
(876, 'KINIK', 35),
(877, 'KİRAZ', 35),
(878, 'MENEMEN', 35),
(879, 'ÖDEMİŞ', 35),
(880, 'SEFERİHİSAR', 35),
(881, 'SELÇUK', 35),
(882, 'TİRE', 35),
(883, 'TORBALI', 35),
(884, 'URLA', 35),
(885, 'BEYDAĞ', 35),
(886, 'BUCA', 35),
(887, 'KONAK', 35),
(888, 'MENDERES', 35),
(889, 'BALÇOVA', 35),
(890, 'ÇİGLİ', 35),
(891, 'GAZİEMİR', 35),
(892, 'NARLIDERE', 35),
(893, 'GÜZELBAHÇE', 35),
(894, 'ŞANLIURFA MERKEZ', 63),
(895, 'AKÇAKALE', 63),
(896, 'BİRECİK', 63),
(897, 'BOZOVA', 63),
(898, 'CEYLANPINAR', 63),
(899, 'HALFETİ', 63),
(900, 'HİLVAN', 63),
(901, 'SİVEREK', 63),
(902, 'SURUÇ', 63),
(903, 'VİRANŞEHİR', 63),
(904, 'HARRAN', 63),
(905, 'BEYTÜŞŞEBAP', 73),
(906, 'ŞIRNAK MERKEZ', 73),
(907, 'CİZRE', 73),
(908, 'İDİL', 73),
(909, 'SİLOPİ', 73),
(910, 'ULUDERE', 73),
(911, 'GÜÇLÜKONAK', 73),
(914, 'ESENYURT', 34),
(912, 'ARNAVUTKÖY', 34);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iller`
--

CREATE TABLE `iller` (
  `il_no` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`il_no`, `isim`) VALUES
(1, 'ADANA'),
(2, 'ADIYAMAN'),
(3, 'AFYON'),
(4, 'AĞRI'),
(5, 'AMASYA'),
(6, 'ANKARA'),
(7, 'ANTALYA'),
(8, 'ARTVİN'),
(9, 'AYDIN'),
(10, 'BALIKESİR'),
(11, 'BİLECİK'),
(12, 'BİNGÖL'),
(13, 'BİTLİS'),
(14, 'BOLU'),
(15, 'BURDUR'),
(16, 'BURSA'),
(17, 'ÇANAKKALE'),
(18, 'ÇANKIRI'),
(19, 'ÇORUM'),
(20, 'DENİZLİ'),
(21, 'DİYARBAKIR'),
(22, 'EDİRNE'),
(23, 'ELAZIĞ'),
(24, 'ERZİNCA'),
(25, 'ERZURUM'),
(26, 'ESKİŞEHİR'),
(27, 'GAZİANTEP'),
(28, 'GİRESU'),
(29, 'GÜMÜŞHANE'),
(30, 'HAKKARİ'),
(31, 'HATAY'),
(32, 'ISPARTA'),
(33, 'MERSİN'),
(34, 'İSTANBUL'),
(35, 'İZMİR'),
(36, 'KARS'),
(37, 'KASTAMONU'),
(38, 'KAYSERİ'),
(39, 'KIRKLARELİ'),
(40, 'KIRŞEHİR'),
(41, 'KOCAELİ'),
(42, 'KONYA'),
(43, 'KÜTAHYA'),
(44, 'MALATYA'),
(45, 'MANİSA'),
(46, 'KAHRAMANMARAŞ'),
(47, 'MARDİ'),
(48, 'MUĞLA'),
(49, 'MUŞ'),
(50, 'NEVŞEHİR'),
(51, 'NİĞDE'),
(52, 'ORDU'),
(53, 'RİZE'),
(54, 'SAKARYA'),
(55, 'SAMSU'),
(56, 'SİİRT'),
(57, 'SİNOP'),
(58, 'SİVAS'),
(59, 'TEKİRDAĞ'),
(60, 'TOKAT'),
(61, 'TRABZON'),
(62, 'TUNCELİ'),
(63, 'ŞANLIURFA'),
(64, 'UŞAK'),
(65, 'VAN'),
(66, 'YOZGAT'),
(67, 'ZONGULDAK'),
(68, 'AKSARAY'),
(69, 'BAYBURT'),
(70, 'KARAMA'),
(71, 'KIRIKKALE'),
(72, 'BATMA'),
(73, 'ŞIRNAK'),
(74, 'BARTI'),
(75, 'ARDAHA'),
(76, 'IĞDIR'),
(77, 'YALOVA'),
(78, 'KARABÜK'),
(79, 'KİLİS'),
(80, 'OSMANİYE'),
(81, 'DÜZCE');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`) VALUES
(3, 'Meyve & Sebze'),
(5, 'Et & Balık & Tavuk'),
(6, 'Temel Gıda');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategorifoto`
--

CREATE TABLE `kategorifoto` (
  `kategorifoto_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `kategorifoto_resimyol` text NOT NULL,
  `kategorifoto_sira` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kategorifoto`
--

INSERT INTO `kategorifoto` (`kategorifoto_id`, `kategori_id`, `kategorifoto_resimyol`, `kategorifoto_sira`) VALUES
(2, 2, 'images/kategoriresimler/31191229092250422800kategori1.png', 0),
(3, 1, 'images/kategoriresimler/22010249972837227443kategori2.png', 0),
(4, 3, 'images/kategoriresimler/20121278592821226287kategori1.png', 0),
(5, 5, 'images/kategoriresimler/23272315072932723979et-nasil-saklanir.jpg', 0),
(6, 4, 'images/kategoriresimler/21683307052707329614gida.jpg', 0),
(8, 6, 'images/kategoriresimler/26995272343027822810kategori7.jpg', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_mail` varchar(255) NOT NULL,
  `kullanici_password` varchar(255) NOT NULL,
  `kullanici_adsoyad` varchar(255) NOT NULL,
  `kullanici_yetki` enum('0','1') NOT NULL,
  `kullanici_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kullanici_il` varchar(255) NOT NULL,
  `kullanici_ilce` varchar(255) NOT NULL,
  `kullanici_adres` varchar(255) NOT NULL,
  `kullanici_tel` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_mail`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_zaman`, `kullanici_il`, `kullanici_ilce`, `kullanici_adres`, `kullanici_tel`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '', '0', '2022-05-31 08:14:10', '', '', '', ''),
(17, 'huseyin@gmail.com', '123456', 'Hüseyin Ünalan', '1', '2022-06-22 17:42:59', '34', '854', 'Sefaköy', '05533829907'),
(18, 'ali@gmail.com', '123456', 'Ali Çelik', '1', '2022-06-23 20:09:36', '34', '856', 'Ümraniye', '0549590335'),
(19, 'ismail@gmail.com', '123456', 'İsmail Yandımkaldım', '1', '2022-06-24 12:28:33', '34', '854', 'sefaköy', '0549590335');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

CREATE TABLE `mesaj` (
  `mesaj_id` int(11) NOT NULL,
  `mesaj_detay` text NOT NULL,
  `mesaj_mail` varchar(255) NOT NULL,
  `mesaj_ad` varchar(255) NOT NULL,
  `mesaj_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`mesaj_id`, `mesaj_detay`, `mesaj_mail`, `mesaj_ad`, `mesaj_zaman`) VALUES
(8, 'Merhaba\r\n', 'huseyin@gmail.com', 'Hüseyin Ünalan', '2022-06-22 20:23:19'),
(9, 'Merhaba\r\n', 'ali@gmail.com', 'Ali Çelik', '2022-06-24 12:27:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `sepet_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_adet` int(3) NOT NULL,
  `sepet_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`sepet_id`, `kullanici_id`, `urun_id`, `urun_adet`, `sepet_zaman`) VALUES
(34, 0, 4, 1, '2022-06-10 05:55:57'),
(43, 0, 3, 1, '2022-06-10 05:55:57'),
(124, 17, 8, 1, '2022-11-07 14:58:25'),
(125, 17, 4, 2, '2022-11-07 15:00:33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sifremiunuttum`
--

CREATE TABLE `sifremiunuttum` (
  `sifremiunuttum_id` int(11) NOT NULL,
  `sifremiunuttum_mail` varchar(255) NOT NULL,
  `sifremiunuttum_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sifremiunuttum`
--

INSERT INTO `sifremiunuttum` (`sifremiunuttum_id`, `sifremiunuttum_mail`, `sifremiunuttum_zaman`) VALUES
(10, 'huseyin@gmail.com', '2022-06-23 20:40:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(11) NOT NULL,
  `siparis_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `kullanici_id` int(11) NOT NULL,
  `siparis_toplam` float(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `siparis_zaman`, `kullanici_id`, `siparis_toplam`) VALUES
(750041, '2022-06-22 20:02:52', 17, 5.50),
(750042, '2022-06-22 20:24:55', 17, 12.00),
(750043, '2022-06-22 20:25:05', 17, 139.00),
(750044, '2022-06-24 12:29:44', 19, 14.00),
(750045, '2022-11-07 14:58:02', 17, 12.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detay`
--

CREATE TABLE `siparis_detay` (
  `siparisdetay_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_adet` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_detay`
--

INSERT INTO `siparis_detay` (`siparisdetay_id`, `siparis_id`, `urun_id`, `urun_fiyat`, `urun_adet`) VALUES
(21, 750019, 4, 12.00, 1),
(22, 750020, 4, 12.00, 1),
(23, 750020, 3, 5.00, 1),
(24, 750020, 7, 125.00, 1),
(25, 750021, 8, 42.00, 1),
(26, 750021, 21, 0.00, 0),
(27, 750022, 6, 139.00, 1),
(28, 750022, 9, 16.00, 1),
(29, 750023, 9, 16.00, 1),
(30, 750024, 8, 42.00, 1),
(31, 750024, 4, 12.00, 1),
(32, 750024, 6, 139.00, 1),
(33, 750024, 5, 14.00, 1),
(34, 750024, 3, 5.00, 1),
(35, 750024, 9, 16.00, 1),
(36, 750025, 8, 42.00, 1),
(37, 750025, 7, 125.00, 1),
(38, 750025, 6, 139.00, 1),
(39, 750026, 6, 139.00, 1),
(40, 750026, 8, 42.00, 1),
(41, 750026, 4, 12.00, 1),
(42, 750026, 4, 12.00, 1),
(43, 750026, 4, 12.00, 1),
(44, 750026, 4, 12.00, 1),
(45, 750026, 5, 14.00, 1),
(46, 750027, 4, 12.00, 1),
(47, 750028, 7, 125.00, 1),
(48, 750029, 4, 12.00, 1),
(49, 750030, 4, 12.00, 1),
(50, 750030, 18, 24.00, 1),
(51, 750030, 6, 139.00, 1),
(52, 750030, 4, 12.00, 1),
(53, 750030, 3, 5.00, 1),
(54, 750030, 5, 14.00, 1),
(55, 750030, 3, 5.00, 1),
(56, 750030, 5, 14.00, 2),
(57, 750031, 3, 5.00, 1),
(58, 750031, 17, 13.00, 1),
(59, 750032, 3, 5.50, 2),
(60, 750032, 12, 191.00, 1),
(61, 750033, 4, 12.00, 4),
(62, 750033, 17, 13.00, 1),
(63, 750034, 4, 12.00, 1),
(64, 750034, 6, 139.00, 1),
(65, 750034, 5, 14.00, 1),
(66, 750035, 15, 19.00, 1),
(67, 750036, 3, 5.50, 4),
(68, 750037, 5, 14.00, 2),
(69, 750037, 17, 13.00, 1),
(70, 750038, 6, 139.00, 1),
(71, 750038, 4, 12.00, 1),
(72, 750038, 18, 24.90, 2),
(73, 750038, 7, 125.00, 1),
(74, 750039, 6, 139.00, 1),
(75, 750040, 18, 24.90, 1),
(76, 750041, 6, 139.00, 1),
(77, 750041, 8, 42.00, 1),
(78, 750041, 4, 12.00, 1),
(79, 750041, 3, 5.50, 1),
(80, 750042, 4, 12.00, 1),
(81, 750043, 6, 139.00, 1),
(82, 750044, 4, 12.00, 1),
(83, 750044, 6, 139.00, 2),
(84, 750044, 5, 14.00, 2),
(85, 750045, 4, 12.00, 1),
(86, 750045, 4, 12.00, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_baslik` varchar(255) NOT NULL,
  `slider_icerik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_baslik`, `slider_icerik`) VALUES
(9, 'Toptan Fiyatına', 'Sebze, Meyve, Bakliyat Her Türlü İhtiyaç BURADA');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliderfoto`
--

CREATE TABLE `sliderfoto` (
  `sliderfoto_id` int(11) NOT NULL,
  `slider_id` int(11) NOT NULL,
  `sliderfoto_resimyol` text NOT NULL,
  `sliderfoto_sira` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sliderfoto`
--

INSERT INTO `sliderfoto` (`sliderfoto_id`, `slider_id`, `sliderfoto_resimyol`, `sliderfoto_sira`) VALUES
(24, 9, 'images/sliderresimler/30138272213126122239banner.jpg', 0),
(25, 9, 'images/sliderresimler/30699255193113328557banner-bg.webp', 0),
(26, 9, 'images/sliderresimler/24086286653166820377banner2.png', 0),
(27, 9, 'images/sliderresimler/28105218372953623590banner1.png', 0),
(28, 9, 'images/sliderresimler/25673270632830225125banner4.png', 0),
(29, 9, 'images/sliderresimler/20547229902374726913banner3.png', 0),
(30, 9, 'images/sliderresimler/21293253362150727533banner5.png', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int(11) NOT NULL,
  `urun_ad` varchar(255) NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_aciklama` text NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_onecikar` enum('0','1') NOT NULL,
  `urun_ilan` enum('0','1') NOT NULL,
  `urun_birim` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `urun_ad`, `urun_fiyat`, `urun_aciklama`, `kategori_id`, `urun_onecikar`, `urun_ilan`, `urun_birim`) VALUES
(3, 'Soğan Kuru Kg', 5.50, '<p>Belirli mevsim aralıklarında ekildikten sonra ge&ccedil;en s&uuml;re zarfında t&uuml;ketilmeye hazır hale gelen soğan kuru d&ouml;kme, mutfakların vazge&ccedil;ilmez malzemelerindendir.&nbsp;İ&ccedil;eriğindeki zengin vitamin ve minerallerle sayısız fayda sağlayan kuru soğan, t&uuml;m sofralarda olduk&ccedil;a sık bir şekilde kullanılıyor. Hem &ccedil;iğ hem de pişmiş bir şekilde kullanılabilen, salata ve yemeklerin vazge&ccedil;ilmezi kuru soğan, t&uuml;keticinin isteği doğrultusunda yemeklerin yanında sade bir şekilde de t&uuml;ketilebiliyor.&nbsp;</p>\r\n', 3, '1', '1', 'Kg'),
(4, 'Patates Taze Kg', 12.00, '<p>Belirli mevsim aralıklarında ekildikten sonra ge&ccedil;en s&uuml;re zarfında t&uuml;ketilmeye hazır hale gelen soğan kuru d&ouml;kme, mutfakların vazge&ccedil;ilmez malzemelerindendir.&nbsp;İ&ccedil;eriğindeki zengin vitamin ve minerallerle sayısız fayda sağlayan kuru soğan, t&uuml;m sofralarda olduk&ccedil;a sık bir şekilde kullanılıyor. Hem &ccedil;iğ hem de pişmiş bir şekilde kullanılabilen, salata ve yemeklerin vazge&ccedil;ilmezi kuru soğan, t&uuml;keticinin isteği doğrultusunda yemeklerin yanında sade bir şekilde de t&uuml;ketilebiliyor.&nbsp;</p>\r\n', 3, '1', '1', 'Kg'),
(5, 'Patlıcan Kemer Kg', 14.00, '<p>Sofraların vazge&ccedil;ilmez lezzetlerinden biri olan patlıcan kemer, en doğal ve taze haliyle satışa sunuluyor.&nbsp;T&uuml;rk mutfağının en &ccedil;ok kullanılan sebzelerinden biri olan patlıcan kemer ile birbirinden lezzetli geleneksel yemekler hazırlamak m&uuml;mk&uuml;n. İmambayıldı, karnıyarık, musakka gibi sevilen yemeklerin ana malzemesi olan sebzenin kızartması ve k&ouml;zlemesi de yaygın olarak t&uuml;ketiliyor.</p>\r\n\r\n<p>G&ouml;zde yaz sebzelerinden biri olan patlıcan kemer, y&uuml;ksek oranda vitamin ve mineral i&ccedil;eriyor. Aynı zamanda d&uuml;ş&uuml;k kalorili ve y&uuml;ksek lifli olması nedeniyle de diyet yemeklerinin aranılan sebzeleri arasında ilk sırayı almayı başarıyor.</p>\r\n', 3, '1', '1', 'Kg'),
(6, 'Dana Kuşbaşı Kg ', 139.00, '<p>Haşlama bu &uuml;r&uuml;n i&ccedil;in tercih edebileceğiniz bir y&ouml;ntemdir.&nbsp;</p>\r\n\r\n<p>Haşlama y&ouml;ntemi etin aromasını ve besin değerini korumaya yardımcı olur.</p>\r\n\r\n<p>Kış aylarında sıklıkla tercih edilen pişirme y&ouml;ntemlerinden biridir.</p>\r\n\r\n<p>Haşlama tekniği yağsız, sporcu ve diyet beslenmelerinde de tercih edilebilir.</p>\r\n\r\n<p>Ayrıca haşladığınız etin suyunu &ccedil;orba olarak da t&uuml;ketebilirsiniz.</p>\r\n\r\n<p>Haşlama yapmanın p&uuml;f noktaları:</p>\r\n\r\n<p>Etin sertleşmemesi i&ccedil;in haşlarken i&ccedil;ine tuz ilave edilmemeli, servis ederken tuz eklenmelidir.</p>\r\n\r\n<p>Etin ve kemiğin kokusunu alması i&ccedil;in haşlarken kereviz, kereviz sapı, defne yaprağı, tane karabiber kullanabilirsiniz.</p>\r\n\r\n<p>Sebze ile haşlama daha lezzetli bir sonu&ccedil; elde etmenizi sağlar. Etiniz haşlamaya başladıktan 20 dakika kadar sonra sebzelerin eklenmesi &ouml;nemlidir.</p>\r\n', 5, '1', '1', 'Kg'),
(7, 'Çipura 300 - 400 G', 125.00, '<p><strong>&Ccedil;ipura 300/ 400 g.</strong>,&nbsp;T&uuml;rkiye&#39;nin Batı ve G&uuml;ney kıyılarında yetişir. Beyaz etli ve lezzetli bir t&uuml;rd&uuml;r.&nbsp;<br />\r\n<br />\r\n&Ccedil;ipura, az kıl&ccedil;ıklı yapısı ve sert eti ile yemesi keyifli balıklardandır. Fırınlayarak ya da ızgarada pişirerek lezzetli sonu&ccedil;lar elde edebilirsiniz.&nbsp;</p>\r\n', 5, '1', '1', 'Kg'),
(8, 'Şenpiliç Roaster Kg', 42.00, '<p><strong>Şenpili&ccedil; Roaster,&nbsp;</strong>birbirinden g&uuml;zel yemekleriniz i&ccedil;in kullanabileceğiniz b&uuml;t&uuml;n bir pili&ccedil;tir.&nbsp;<strong>İri pili&ccedil;lerin</strong>&nbsp;paketlenerek sizlere sunulduğu Şenpili&ccedil; Roaster gramajları pilicin ağırlığına bağlı olarak değişmektedir.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tecr&uuml;beli hanımların mutfaklarında sık&ccedil;a tercih ettiği &uuml;r&uuml;nlerden olan Şenpili&ccedil; Roaster&rsquo;ı b&uuml;t&uuml;n olarak kullanmayı tercih ederek pilicinizin i&ccedil;ini pilav ya da sebzelerle doldurarak enfes bir yemek yapabilir; b&uuml;t&uuml;n pilici par&ccedil;alara ayırıp farklı yerlerinden elde edeceğiniz etleri yemeklerinizde kullanıp artan kemikleri kaynatarak &ccedil;orba ve pilavlarda kullanmak &uuml;zere tavuk suyu elde edebilirsiniz.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 5, '1', '1', 'Kg'),
(9, 'Kuru Fasulye 1000 G', 16.00, '<p>Kaliteli, g&uuml;venilir ve zengin &uuml;r&uuml;n &ccedil;eşitliliğiyle market alışverişlerinin ilk adresi olan Migros, bakliyat &uuml;r&uuml;nleri arasında dermason kuru fasulye &ccedil;eşidine de yer veriyor. Menşei&nbsp;Mezoamerika ve And Dağları b&ouml;lgesine dayanan&nbsp;Migros Dermason Kuru Fasulye, B vitamini a&ccedil;ısından zengin olmasıyla biliniyor.</p>\r\n\r\n<p>Prebiyotik bir besin kaynağı olan;&nbsp;y&uuml;ksek lif, protein, folik asit bakımından zengin Migros Dermason Kuru Fasulye tahılının temizlenme, işlenme ve kalibrasyon işlemi y&uuml;ksek teknolojili tesislerde yapılıyor.</p>\r\n\r\n<p>Fasulyeler pişirilmeden &ouml;nce soğuk suda 10 ya da 12 saat s&uuml;reyle bekletiliyor. Yumuşadıktan sonra d&uuml;d&uuml;kl&uuml; tencerede 15 dakika, normal tencerede 30-40 dakika boyunca haşlanıyor. Pişirirken dermason kuru fasulye yemeğinin k&ouml;p&uuml;rmesini &ouml;nlemek i&ccedil;in tencere i&ccedil;ine bir &ccedil;orba kaşığı sıvı yağ eklenmesi &ouml;neriliyor. Haşlanıp yenmeye hazır hale gelen Migros dermason kuru fasulye sofralarınıza lezzet katıyor.</p>\r\n', 6, '1', '1', 'Kg'),
(11, 'Migros Ayçiçek Yağı 5 L', 154.00, '<p>K&ouml;şeli pet şişe i&ccedil;erisinde satışa sunulan Migros Ay&ccedil;i&ccedil;ek Yağı, doğal rengi ve berrak g&ouml;r&uuml;nt&uuml;s&uuml; ile t&uuml;keticilerin beğenisini kazanıyor. Hafif kızartmalar ve yemekler hazırlarken g&uuml;venle kullanacağınız bir yağ olmayı başarıyor.</p>\r\n\r\n<p>Doğal E vitamini kaynağı olan ay&ccedil;i&ccedil;ek yağını yemeklerinizde de kullanabilirsiniz. Ay&ccedil;i&ccedil;eği bitkisinin &ccedil;ekirdeklerinden presleme y&ouml;ntemiyle elde edilen Migros Ay&ccedil;i&ccedil;ek yağı; a&ccedil;ık sarı rengi, berrak yapısı ve hafif lezzeti ile &ccedil;ok tercih ediliyor. K&ouml;şeli pet şişesinden kolayca d&ouml;k&uuml;l&uuml;yor ve k&ouml;şeli yapısıyla şişenin elden kaymasına da izin vermiyor. Avantajlı fiyat se&ccedil;eneğine sahip olan Migros Ay&ccedil;i&ccedil;ek Yağı, Migros kalitesi ve g&uuml;vencesiyle sunuluyor.</p>\r\n', 6, '1', '1', ''),
(12, 'Komili Sızma Zeytinyağı 2 L', 191.00, '<p><strong>Komili Sızma Zeytinyağı 2 lt.</strong>&nbsp;başta Ayvalık ve k&ouml;rfez b&ouml;lgesi olmak &uuml;zere Ege&rsquo;nin en iyi zeytinlerinden elde edilmiştir. Komili Sızma Zeytinyağı, y&uuml;zde 0.8&rsquo;i aşmayan asit oranıyla damağınızda eşsiz bir lezzet bırakır.&nbsp;</p>\r\n\r\n<p>Zeytinyağının yoğun lezzetini taşıyan Komili Sızma Zeytinyağı&#39;nın yoğun, aromatik tadına daha iyi varabilmek i&ccedil;in &ouml;zellikle başlangı&ccedil;lar, salatalar ve kahvaltılarda afiyetle kullanabilirsiniz.</p>\r\n\r\n<p>Hava ve ısı zeytinyağına zarar verir. Zeytinyağını doğrudan g&uuml;neş ışığı g&ouml;rmeyen serin yerlerde saklamaya &ouml;zen g&ouml;sterin. Zeytinyağı her t&uuml;rl&uuml; kokuyu &ccedil;eker. Bu nedenle yabancı koku olmayan yerlerde ağzı kapalı olarak muhafaza edilmelidir.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 6, '1', '1', 'L'),
(13, 'Yayla Baldo Pirinç 2 Kg ', 54.00, '<p>Mutfakların en &ouml;zel ana yemeklerine eşlik eden pilavların yapımında kullanılan Yayla G&ouml;nen Baldo Pirin&ccedil;, iri taneleriyle &ouml;ne &ccedil;ıkmayı başarıyor. Pişirildikten sonra tane tane olan pirin&ccedil; pilavıyla birlikte servis edeceğiniz yemeklerinizle m&uuml;kemmel bir uyum sağlayan baldo pirin&ccedil;ler, kendinizi bir aş&ccedil;ı gibi hissetmenizi sağlıyor.&nbsp;<br />\r\n<br />\r\nPirin&ccedil; pilavı yapımında sıklıkla kullanılan Yayla G&ouml;nen Baldo Pirin&ccedil;,&nbsp;s&uuml;tla&ccedil; gibi tatlıların yapımında da kullanılarak t&uuml;ketilebiliyor. Besin değeri a&ccedil;ısından olduk&ccedil;a zengin olan pirin&ccedil;ler, en iyi şekilde kapatılan havayla temassız ambalajlarda satışa sunuluyor. Işıksız, nemden uzak ve serin bir ortamda muhafaza edilmesi &ouml;neriliyor.</p>\r\n', 6, '1', '1', 'Kg'),
(14, 'Domates Kg', 9.00, '<p>T&uuml;rk mutfağının olmazsa olmazı olan domates, pişmiş ve &ccedil;iğ olarak kullanılmak &uuml;zere kahvaltıların, salataların,&nbsp;sal&ccedil;aların ve yemeklerin vazge&ccedil;ilmezi bir sebzedir. A ve C vitaminleri başta olmak &uuml;zere i&ccedil;erisinde pek &ccedil;ok vitamin ve mineral bulundurmakta olan domates etli ve sulu bir yapıya sahiptir.</p>\r\n', 3, '1', '1', 'Kg'),
(15, 'Muz Yerli Kg', 19.00, '<p>Muhteşem lezzetiyle g&uuml;n&uuml;n her saatinde keyifle t&uuml;ketilebilen muz yerli, en sevilen meyvelerden biri olarak &ouml;n plana &ccedil;ıkıyor. Besleyiciliğinin yanı sıra olduk&ccedil;a doyurucu bir &ouml;zelliğe sahip olan yerli muzlar, &ccedil;ocuklardan b&uuml;y&uuml;klere kadar t&uuml;m yaş grupları tarafından sevilerek t&uuml;ketiliyor.&nbsp;</p>\r\n', 3, '1', '1', 'Kg'),
(16, 'Elma Kg', 16.00, '<p>Elma Granny Smith, hafif ekşi tadı ve yeşil rengi ile bilinen lezzetli bir elma &ccedil;eşididir. Sulu ve sert yapısı ile &ouml;ne &ccedil;ıkan Granny Smith elma, ferahlatıcı bir tada sahiptir. Taze şekilde yenilebileceği gibi farklı tariflere de eklenebilir. Elma Granny Smith, &ouml;zellikle tatlı &ccedil;eşitlerinde sıklıkla kullanılır.</p>\r\n\r\n<p>Granny Smith elmayı yıkadıktan ve dilimledikten sonra keyifle t&uuml;ketebilirsiniz.&nbsp;&Uuml;r&uuml;n&uuml; rendeleyerek kek benzeri hamur işi tariflerine katabilirsiniz. Granny Smith elmanın ekşimsi tadını seviyorsanız katı meyve sıkacağında suyunu &ccedil;ıkarıp i&ccedil;ebilirsiniz.</p>\r\n', 3, '1', '1', 'Kg'),
(17, 'Portakal Kg', 13.00, '<p>İ&ccedil;erisindeki y&uuml;ksek C vitamini bağışıklık sistemini destekleyerek kış hastalıklarından korunmaya yardımcı olur.</p>\r\n\r\n<p>Yapısı orta sertlikte ve ağır olanların daha fazla suyu olur.&nbsp;</p>\r\n\r\n<p>Portakal, doğal bir C vitamin kaynağı olması nedeniyle en &ccedil;ok tercih edilen&nbsp;kış meyveleri arasında yer alıyor. Tatlı ve bol sulu meyvenin bir&ccedil;ok farklı kullanım şekli mevcut. İ&ccedil; kısmı yenerek ya da suyu sıkılarak&nbsp;t&uuml;ketilirken, kabuk kısmından&nbsp;ise kek ve re&ccedil;el yapımında faydalanılabilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3, '1', '1', 'Kg'),
(18, 'Kiraz Kg', 24.90, '<p><strong>Kiraz kg.</strong>, lezzetli, tatlı ve olduk&ccedil;a faydalı yaz meyvelerinden biri olarak sofralarınıza konuk oluyor.&nbsp;</p>\r\n\r\n<p>Tatlı mı tatlı, &ccedil;ok lezzetli bir meyve arıyorsanız, yazın en sevilen lezzetlerinden biri olan kirazı sepetinize eklemeyi unutmayın. &Uuml;stelik kiraz, tatlı tariflerin s&uuml;slemelerine de &ccedil;ok yakışıyor, kek ve kurabiyelerin i&ccedil; har&ccedil;larına da!&nbsp;</p>\r\n', 3, '1', '1', 'Kg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunfoto`
--

CREATE TABLE `urunfoto` (
  `urunfoto_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urunfoto_resimyol` text NOT NULL,
  `urunfoto_sira` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urunfoto`
--

INSERT INTO `urunfoto` (`urunfoto_id`, `urun_id`, `urunfoto_resimyol`, `urunfoto_sira`) VALUES
(2, 1, 'images/urunresimler/21095223542873126095havuc.png', 0),
(3, 1, 'images/urunresimler/31615202412306130650avakado.png', 0),
(4, 2, 'images/urunresimler/29485229262324927782domates.jpg', 0),
(5, 3, 'images/urunresimler/29381245542486724031sogan.jpg', 0),
(7, 5, 'images/urunresimler/29410209442141030046patlıcan.jpg', 0),
(8, 6, 'images/urunresimler/26213271482352023664kirmiziet.png', 0),
(9, 7, 'images/urunresimler/30429276562464724004cupra-hakkinda-bilgiler.jpg', 0),
(10, 4, 'images/urunresimler/23082200082514326630patates-ne-kadar.jpg', 0),
(11, 8, 'images/urunresimler/25064274842756730613kategori5.jpg', 0),
(12, 9, 'images/urunresimler/28551275203045525749fasulye.jpg', 0),
(13, 11, 'images/urunresimler/20053262792700223241yag.jpg', 0),
(14, 12, 'images/urunresimler/26953228213074027806z.jpg', 0),
(15, 13, 'images/urunresimler/30586274762082625240p.jpg', 0),
(16, 14, 'images/urunresimler/31217286862163527140d.jpg', 0),
(17, 16, 'images/urunresimler/25150255383023229332e.jpg', 0),
(18, 15, 'images/urunresimler/25184206192560325240m.jpg', 0),
(19, 17, 'images/urunresimler/29271200652818528742o.jpg', 0),
(20, 18, 'images/urunresimler/24624259132807527520k.jpg', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hizmetfoto`
--
ALTER TABLE `hizmetfoto`
  ADD PRIMARY KEY (`hizmetfoto_id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmet_id`);

--
-- Tablo için indeksler `ilceler`
--
ALTER TABLE `ilceler`
  ADD KEY `fk_il_no` (`il_no`);

--
-- Tablo için indeksler `iller`
--
ALTER TABLE `iller`
  ADD PRIMARY KEY (`il_no`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kategorifoto`
--
ALTER TABLE `kategorifoto`
  ADD PRIMARY KEY (`kategorifoto_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`sepet_id`);

--
-- Tablo için indeksler `sifremiunuttum`
--
ALTER TABLE `sifremiunuttum`
  ADD PRIMARY KEY (`sifremiunuttum_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `siparis_detay`
--
ALTER TABLE `siparis_detay`
  ADD PRIMARY KEY (`siparisdetay_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `sliderfoto`
--
ALTER TABLE `sliderfoto`
  ADD PRIMARY KEY (`sliderfoto_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `urunfoto`
--
ALTER TABLE `urunfoto`
  ADD PRIMARY KEY (`urunfoto_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hizmetfoto`
--
ALTER TABLE `hizmetfoto`
  MODIFY `hizmetfoto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kategorifoto`
--
ALTER TABLE `kategorifoto`
  MODIFY `kategorifoto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `sepet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- Tablo için AUTO_INCREMENT değeri `sifremiunuttum`
--
ALTER TABLE `sifremiunuttum`
  MODIFY `sifremiunuttum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=750046;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_detay`
--
ALTER TABLE `siparis_detay`
  MODIFY `siparisdetay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `sliderfoto`
--
ALTER TABLE `sliderfoto`
  MODIFY `sliderfoto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `urunfoto`
--
ALTER TABLE `urunfoto`
  MODIFY `urunfoto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `ilceler`
--
ALTER TABLE `ilceler`
  ADD CONSTRAINT `fk_il_no` FOREIGN KEY (`il_no`) REFERENCES `iller` (`il_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
