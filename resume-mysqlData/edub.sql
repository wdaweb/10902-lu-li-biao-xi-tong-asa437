-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-07 16:26:37
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume2020`
--

-- --------------------------------------------------------

--
-- 資料表結構 `edub`
--

CREATE TABLE `edub` (
  `id` int(10) UNSIGNED NOT NULL,
  `sch` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content3` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `edub`
--

INSERT INTO `edub` (`id`, `sch`, `major`, `content1`, `content2`, `content3`) VALUES
(1, '逢甲大學 / 碩士 / 2008～2010', '科系:材料科學與工程學系', '碩士論文:成長一維氧化釩奈米結構在電性與感測性質之研究', '發表論文:2011 室溫型一維二氧化釩奈米線之光致相變特性研究', '發表論文:2010 低溫型二氧化釩奈米柱之合成與酒精氣體感測分析'),
(2, '逢甲大學 / 學士 / 2004～2008', '科系:材料科學與工程學系', '', '', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `edub`
--
ALTER TABLE `edub`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `edub`
--
ALTER TABLE `edub`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
