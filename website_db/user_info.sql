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
-- 테이블 구조 `user_info`
--

CREATE TABLE `user_info` (
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
-- 테이블의 덤프 데이터 `user_info`
--

INSERT INTO `user_info` (`user_number`, `school`, `user_name`, `user_id`, `user_pw`, `user_type`, `condition_now`, `ip_now`) VALUES
(12, 'seoulit_highschool', '총괄 어드민', 'admin', 'admin', 'teacher', 'online', '116.32.131.49'),
(14, 'seoulit_highschool', '김명준', 'glm777', 'k71010101', 'student', 'online', '118.221.204.106'),
(18, 'seoulit_highschool', '천세진', 'helloworld', '1234', 'teacher', 'offline', '106.102.1.44'),
(25, 'seoulit_highschool', '정병남', 'jasonjung', 'wpdltms99!!', 'teacher', 'offline', '116.32.131.49'),
(30, 'seoulit_highschool', '이종철', '3i223l23k', '1234', 'teacher', 'online', '116.32.131.49');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_number`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
