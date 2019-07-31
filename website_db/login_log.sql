-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 18-11-01 20:06
-- 서버 버전: 5.5.59-log
-- PHP 버전: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `voteservice_godohosting_com`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `login_log`
--

CREATE TABLE `login_log` (
  `log_count` int(11) NOT NULL,
  `id` text NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `register_whether` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='유저들의 접속 로그를 기록합니다.';

--
-- 테이블의 덤프 데이터 `login_log`
--

INSERT INTO `login_log` (`log_count`, `id`, `name`, `type`, `register_whether`, `time`) VALUES
(1, 'admin', '총괄 어드민', 'teacher', '', '2018-10-29 19:24:26'),
(2, 'admin', '총괄 어드민', 'teacher', '', '2018-10-30 19:53:25'),
(3, 'helloworld', '천세진', 'teacher', '', '2018-10-30 19:53:55'),
(4, 'admin', '총괄 어드민', 'teacher', '', '2018-10-30 20:03:39'),
(5, 'aalssi20931', '오영택', 'teacher', '', '2018-10-30 20:05:45'),
(6, 'iwwl390', '장기민', 'teacher', 'ture', '2018-10-30 20:06:56'),
(7, 'iwwl390', '장기민', 'teacher', '', '2018-10-30 20:07:16'),
(8, 'admin', '총괄 어드민', 'teacher', '', '2018-10-30 21:03:57'),
(9, 'admin', '총괄 어드민', 'teacher', '', '2018-10-30 21:06:43'),
(10, 'admin', '총괄 어드민', 'teacher', '', '2018-10-30 21:07:59'),
(11, 'admin', '총괄 어드민', 'teacher', '', '2018-10-30 21:25:19'),
(12, 'admin', '총괄 어드민', 'teacher', '', '2018-10-30 21:29:11'),
(13, 'admin', '총괄 어드민', 'teacher', '', '2018-10-30 21:37:44'),
(14, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 00:01:18'),
(15, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 00:21:03'),
(16, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 20:22:56'),
(17, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 22:10:29'),
(18, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 22:13:07'),
(19, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 22:22:35'),
(20, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 22:26:55'),
(21, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 22:27:30'),
(22, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 23:06:20'),
(23, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 23:36:24'),
(24, 'admin', '총괄 어드민', 'teacher', '', '2018-10-31 23:37:10'),
(25, 'glm777', '김명준', 'student', '', '2018-11-01 12:25:14'),
(26, 'admin', '총괄 어드민', 'teacher', '', '2018-11-01 13:15:37'),
(27, 'helloworld', '천세진', 'teacher', '', '2018-11-01 14:08:54'),
(28, 'helloworld', '천세진', 'teacher', '', '2018-11-01 14:13:16'),
(29, 'admin', '총괄 어드민', 'teacher', '', '2018-11-01 14:24:39'),
(30, 'admin', '총괄 어드민', 'teacher', '', '2018-11-01 14:42:29'),
(31, 'kk33l290', '천세진', 'teacher', 'true', '2018-11-01 14:56:32'),
(32, 'admin', '총괄 어드민', 'teacher', '', '2018-11-01 18:16:26'),
(33, 'admin', '총괄 어드민', 'teacher', '', '2018-11-01 18:17:32'),
(34, 'jasonjung', '정병남', 'teacher', '', '2018-11-01 18:17:53'),
(35, '3i223l23k', '이종철', 'teacher', 'true', '2018-11-01 18:26:25'),
(36, 'admin', '총괄 어드민', 'teacher', '', '2018-11-01 18:26:48');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `login_log`
--
ALTER TABLE `login_log`
  ADD KEY `log_count` (`log_count`),
  ADD KEY `log_count_2` (`log_count`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `login_log`
--
ALTER TABLE `login_log`
  MODIFY `log_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
