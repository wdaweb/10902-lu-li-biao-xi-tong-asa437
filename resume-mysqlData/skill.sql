-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-07 16:27:09
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
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `img`, `text`, `sh`) VALUES
(1, 'html.jpg', 'html.jpg', 1),
(2, 'css.jpg', 'css.jpg', 1),
(3, 'js.jpg', 'js.js', 1),
(4, 'jq.jpg', 'jq.jpg', 1),
(5, 'bs.jpg', 'bs.jpg', 1),
(6, 'php.jpg', 'php.jpg', 1),
(7, 'mysql.jpg', 'mysql.jpg', 1),
(8, 'ps.jpg', 'ps.jpg', 1),
(9, 'ai.jpg', 'ai.jpg', 1),
(10, 'LicenseC.jpg', 'LicenseC.jpg', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
