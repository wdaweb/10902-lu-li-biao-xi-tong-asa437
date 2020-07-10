-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-07 16:27:00
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
-- 資料表結構 `jobc`
--

CREATE TABLE `jobc` (
  `id` int(20) NOT NULL,
  `place` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '希望工作地點',
  `job` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '希望應徵職務',
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '就業狀況',
  `available` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '可上班日'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jobc`
--

INSERT INTO `jobc` (`id`, `place`, `job`, `status`, `available`) VALUES
(1, '台北市、新北市', '前端工程師、後端工程師', '待業中', '隨時');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `jobc`
--
ALTER TABLE `jobc`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jobc`
--
ALTER TABLE `jobc`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
