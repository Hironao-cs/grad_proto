-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2026 年 2 月 05 日 12:35
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db_graduationwork`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `alumniinfo_table`
--

CREATE TABLE `alumniinfo_table` (
  `id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `graduation_year` int(4) NOT NULL,
  `status` varchar(128) NOT NULL,
  `organization` varchar(128) NOT NULL,
  `department` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `alumniinfo_table`
--

INSERT INTO `alumniinfo_table` (`id`, `user_id`, `graduation_year`, `status`, `organization`, `department`, `created_at`, `updated_at`) VALUES
(1, 1, 2025, '大学生', '〇〇大学', '経済学部経済学科', '2026-02-05 19:51:21', '2026-02-05 19:51:21'),
(2, 10, 2025, '大学生', '〇〇大学', '経済学部経済学科', '2026-02-05 20:17:42', '2026-02-05 20:17:42'),
(3, 11, 2025, '浪人生', '千代田予備校', '私立難関大コース', '2026-02-05 20:34:08', '2026-02-05 20:34:08');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `alumniinfo_table`
--
ALTER TABLE `alumniinfo_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `alumniinfo_table`
--
ALTER TABLE `alumniinfo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
