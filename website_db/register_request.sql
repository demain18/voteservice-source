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
-- 테이블 구조 `register_request`
--

CREATE TABLE `register_request` (
  `user_number` int(11) NOT NULL,
  `school` text NOT NULL,
  `user_name` text NOT NULL,
  `user_id` text NOT NULL,
  `user_pw` text NOT NULL,
  `user_type` text NOT NULL,
  `condition_now` text NOT NULL,
  `ip_now` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `register_request`
--

INSERT INTO `register_request` (`user_number`, `school`, `user_name`, `user_id`, `user_pw`, `user_type`, `condition_now`, `ip_now`) VALUES
(1, 'seoulit_highschool', '천세진', 'kk33l290', '1234', 'teacher', 'request_waiting', '106.102.1.44'),
(2, 'seoulit_highschool', '이종철', '3i223l23k', '1234', 'teacher', 'request_waiting', '116.32.131.49');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `register_request`
--
ALTER TABLE `register_request`
  ADD PRIMARY KEY (`user_number`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `register_request`
--
ALTER TABLE `register_request`
  MODIFY `user_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
