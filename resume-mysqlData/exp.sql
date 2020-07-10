-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-07 16:26:44
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
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司',
  `posi` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '職位',
  `job` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '工作內容'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `title`, `posi`, `job`) VALUES
(1, 'PHP資料庫網頁設計班進修', '勞動部泰山職業訓練場 Mar 2020 ~ Aug 2020', '頁排版編輯、資訊網路概論、數位媒體應用、視覺影像設計、資料庫程式設計、網頁動態技術、網頁設計實務等訓練課程，並取得國家網頁設計相關證照。'),
(2, '美商麥斯功率半導體', '產品工程師 2017～2019', '在美商麥斯功率半導體(Maxpowr)公司服務期間，主要擔任晶圓製造商與IC設計公司之間的橋樑。持續在功率半導體元件及製程平台上求精進，發現問題並改善良率。'),
(3, '旺宏電子', '元件開發工程師 2015～2017', '新產品流程規劃，並用Laker繪圖軟體能掌握Layout佈局，在電性量測時也需依據不同製程需求作WAT程式撰寫更甚至Bench量測，歸納其結果去編緝相關技術文件如Design  rule，量測手法及條件等...');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
