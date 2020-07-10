-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-07 16:26:08
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
-- 資料表結構 `autob`
--

CREATE TABLE `autob` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `autob`
--

INSERT INTO `autob` (`id`, `title`, `text`) VALUES
(1, '1', '我，劉邦鍊，畢業於逢甲大學材料工程與科學系。有將近十年的工作經驗。這十年來大都在新竹科學園區擔任半導體工程師。在其中一份元件工程師工作有包含電性量測的程式撰寫。也開始對程式及軟體工程感到興趣盎然。自此開始一段自我學習的過程，像是在C語言，Excel-VBA巨集。也多次使用VBA來讓自己的工作更多的自動化。2019年被公司諮遣。也決心要轉換職場，而對於PHP資料庫網頁設計課程感到非常的興奮，未來也期許自已在程式設計師&資料庫程式設計等領域上有所發揮。 過去工作經歷中，寫程式讓我不斷思考如何讓機器順利運作，數據更加自動化並分享在同工的同事。也因此，希望自己的程式是帶給人有豐富性和幫助性。透過自己的程式來與人作互動。思考更多人的需求。客戶需求、老闆需求、同事和朋友需求等。協調與滿足眾人需要也是在工作上的挑戰。在職場上雖是工作，但更多是為人服侍，也持續學習如何對人有負擔。 期許自已運用網頁的知識技能。也透過網頁來與人有更多的互動。並將專業所學應用實務並貢獻於社會。  ');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `autob`
--
ALTER TABLE `autob`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `autob`
--
ALTER TABLE `autob`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
