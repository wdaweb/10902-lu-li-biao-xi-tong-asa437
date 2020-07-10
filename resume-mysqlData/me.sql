-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-08 17:03:15
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
-- 資料表結構 `me`
--

CREATE TABLE `me` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `me`
--

INSERT INTO `me` (`id`, `title`, `text`, `name`, `mail`, `phone`, `interest`) VALUES
(1, '1', '     我叫劉邦鍊。曾任職於新竹科學園區半導體開發工程師,工作接觸了程式撰寫。也開啟對程式語文興趣。 自此開始一段學習的過程。2019結束半導體工作，決心要轉換職場，開始在職訓局進修學習PHP資料庫網頁設計 。  ', '劉邦鍊 / Asa Liu', 'klk437@yahoo.com.tw', '0918821738', '看書、寫程式');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `me`
--
ALTER TABLE `me`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `me`
--
ALTER TABLE `me`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
