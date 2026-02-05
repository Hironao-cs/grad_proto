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
-- テーブルの構造 `userinfo_table`
--

CREATE TABLE `userinfo_table` (
  `id` int(12) NOT NULL,
  `user_type` varchar(64) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `user_pw` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `userinfo_table`
--

INSERT INTO `userinfo_table` (`id`, `user_type`, `name`, `email`, `user_pw`, `created_at`, `updated_at`) VALUES
(1, '卒業生', '山田太郎', 'aaa@example.com', '$2y$10$WelvK7cPQdljRjSoMqtULO4KbOAn9HrbDVgf8TsWolA8ptaL8jpDG', '2026-02-02 21:24:08', '2026-02-02 21:24:08'),
(2, '教員', '細川浩直', 'aaa@example.com', '$2y$10$xA9QqdmLu81u1r8DoTKwxO7B4DfVYMJ.ZHuRFsiBmmFSmo1nfubn.', '2026-02-02 21:24:17', '2026-02-02 21:24:17'),
(3, '教員', '細川浩直', 'aaa@example.com', '$2y$10$DBcUlzE8DYyDf.fzYS.0QOYjlNHhfO3FjScdDC7MpM2S7w3RJg7wm', '2026-02-02 22:20:57', '2026-02-02 22:20:57'),
(4, '教員', '伊達政宗', 'ccc@example.com', '$2y$10$bFLHkofFzu9Xd/H.9yJDxuWlRvXLz8eSfkDQ5HT7S/H6znzTtWVNq', '2026-02-02 22:21:48', '2026-02-02 22:21:48'),
(5, '卒業生', '山田太郎', 'ccc@example.com', '$2y$10$FjTCkFxYxZbCqvcAuWqXcu3OZpJKzE3V9xpu8RcGs2Qgnz78BT2Ci', '2026-02-05 19:46:32', '2026-02-05 19:46:32'),
(6, '卒業生', '山田太郎', 'aaa@example.com', '$2y$10$XYK6L9mc0Iw2XzV7lSyr7u0ioFWfNMK8Za9.7RlcOBjagF/p.grFW', '2026-02-05 19:47:08', '2026-02-05 19:47:08'),
(7, '卒業生', '細川浩直', 'aaa@example.com', '$2y$10$v58h90miI.L320Goy4UseeN75ZkHAvzlfs/yzOi00f6SwjzVRm936', '2026-02-05 20:13:07', '2026-02-05 20:13:07'),
(8, '卒業生', '伊達政宗', 'ccc@example.com', '$2y$10$FAe9lJyRkeyy5ebm0aWh9evTfI44SA7LaUDcAMjvUIPYK3/qDoZ5O', '2026-02-05 20:16:24', '2026-02-05 20:16:24'),
(9, '卒業生', '伊達政宗', 'ccc@example.com', '$2y$10$f1l9WFBnSNW9DdnIm.g4ju08cXxIrwO58R6M//ndEy6lz3cnF5A8y', '2026-02-05 20:16:41', '2026-02-05 20:16:41'),
(10, '卒業生', '徳川家康', 'bbb@example.com', '$2y$10$3YJZuajiBjRZtJyLFn36teYTZ2AYl4/26vHwvGRhSaOHaPMfhNzyG', '2026-02-05 20:17:28', '2026-02-05 20:17:28'),
(11, '卒業生', '山田次郎', 'ddd@example.com', '$2y$10$8LTGQiJFxXI06cIqLDIIHO.92UpKcrHZpMbN8KKKFYbyvqMwWxfBO', '2026-02-05 20:30:10', '2026-02-05 20:30:10');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `userinfo_table`
--
ALTER TABLE `userinfo_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `userinfo_table`
--
ALTER TABLE `userinfo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
