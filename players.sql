-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 09 2020 р., 21:26
-- Версія сервера: 10.4.17-MariaDB
-- Версія PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `players`
--

-- --------------------------------------------------------

--
-- Структура таблиці `main`
--

CREATE TABLE `main` (
  `id` varchar(100) COLLATE utf8_bin NOT NULL,
  `dpi` int(11) NOT NULL,
  `hz` int(11) NOT NULL,
  `edpi` int(11) NOT NULL,
  `img` varchar(1024) COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `sensitivity` double NOT NULL,
  `zoom` double NOT NULL,
  `mouseaccel` int(11) NOT NULL,
  `windowssens` int(11) NOT NULL,
  `rawinput` int(11) NOT NULL,
  `crosshair` text COLLATE utf8_bin NOT NULL,
  `viewmodel` text COLLATE utf8_bin NOT NULL,
  `cl_bob` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп даних таблиці `main`
--

INSERT INTO `main` (`id`, `dpi`, `hz`, `edpi`, `img`, `name`, `sensitivity`, `zoom`, `mouseaccel`, `windowssens`, `rawinput`, `crosshair`, `viewmodel`, `cl_bob`) VALUES
('0', 1, 2, 3, 'https://i.ytimg.com/an_webp/v3wRcPBBDdY/mqdefault_6s.webp?du=3000&sqp=CJzYw_4F&rs=AOn4CLCvAnu8TsGUZblRW_Pl16vcfYwd9g', 'Virgo', 0, 0, 0, 0, 0, '', '', ''),
('0', 1, 2, 3, 'https://i.ytimg.com/an_webp/v3wRcPBBDdY/mqdefault_6s.webp?du=3000&sqp=CJzYw_4F&rs=AOn4CLCvAnu8TsGUZblRW_Pl16vcfYwd9g', 'Virgo', 0, 0, 0, 0, 0, '', '', ''),
('0', 1, 2, 3, 'https://i.ytimg.com/an_webp/v3wRcPBBDdY/mqdefault_6s.webp?du=3000&sqp=CJzYw_4F&rs=AOn4CLCvAnu8TsGUZblRW_Pl16vcfYwd9g', 'Virgo', 0, 0, 0, 0, 0, '', '', ''),
('0', 1, 2, 3, 'https://i.ytimg.com/an_webp/v3wRcPBBDdY/mqdefault_6s.webp?du=3000&sqp=CJzYw_4F&rs=AOn4CLCvAnu8TsGUZblRW_Pl16vcfYwd9g', 'Virgo', 0, 0, 0, 0, 0, '', '', ''),
('0', 1, 2, 3, 'https://i.ytimg.com/an_webp/v3wRcPBBDdY/mqdefault_6s.webp?du=3000&sqp=CJzYw_4F&rs=AOn4CLCvAnu8TsGUZblRW_Pl16vcfYwd9g', 'Virgo', 0, 0, 0, 0, 0, '', '', ''),
('0', 1, 2, 3, 'https://i.ytimg.com/an_webp/v3wRcPBBDdY/mqdefault_6s.webp?du=3000&sqp=CJzYw_4F&rs=AOn4CLCvAnu8TsGUZblRW_Pl16vcfYwd9g', 'Virgo', 0, 0, 0, 0, 0, '', '', ''),

('1', 1000, 1000, 680, 'https://hewwodarkness.github.io/playerssettings/img/2.png', 'Virgo', 1.16, 0.881332, 0, 5, 1, '  \r\n                cl_crosshair_drawoutline \"1\"\r\n                cl_crosshair_dynamic_maxdist_splitratio \"0.35\"\r\n                cl_crosshair_dynamic_splitalpha_innermod \"1\"\r\n                cl_crosshair_dynamic_splitalpha_outermod \"0.5\"\r\n                cl_crosshair_dynamic_splitdist \"7\"\r\n                cl_crosshair_outlinethickness \"1\"\r\n                cl_crosshair_sniper_show_normal_inaccuracy \"0\"\r\n                cl_crosshair_sniper_width \"1\"\r\n                cl_crosshair_t \"0\"\r\n                cl_crosshairalpha \"255\"\r\n                cl_crosshaircolor \"5\"\r\n                cl_crosshaircolor_b \"255\"\r\n                cl_crosshaircolor_g \"0\"\r\n                cl_crosshaircolor_r \"255\"\r\n                cl_crosshairdot \"0\"\r\n                cl_crosshairgap \"-1.000000\"\r\n                cl_crosshairgap_useweaponvalue \"0\"\r\n                cl_crosshairscale \"500\"\r\n                cl_crosshairsize \"2.000000\"\r\n                cl_crosshairstyle \"5\"\r\n                cl_crosshairthickness \"0.500000\"\r\n                cl_crosshairusealpha \"1\"\r\n                cl_fixedcrosshairgap \"-2\"\r\n            ', '  \r\n                    viewmodel_fov 68; \r\n                    viewmodel_offset_x 2.5; \r\n                    viewmodel_offset_y 0; \r\n                    viewmodel_offset_z -1.5; \r\n                    viewmodel_presetpos 3; \r\n                    cl_viewmodel_shift_left_amt 1.5; \r\n                    cl_viewmodel_shift_right_amt 0.75; \r\n                    viewmodel_recoil 0; \r\n                    cl_righthand 1;\r\n                ', '  \r\n                    cl_bob_lower_amt 21; \r\n                    cl_bobamt_lat 0.1; \r\n                    cl_bobamt_vert 0.1; \r\n                    cl_bobcycle 0.98;\r\n                '),
('5fd12f215521c', 22, 33, 44, '', '', 0, 0, 0, 0, 0, '', '', ''),
('5fd1305493a6c', 0, 0, 0, '', '', 0, 0, 0, 0, 0, '', '', '');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `main`
--
ALTER TABLE `main`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
