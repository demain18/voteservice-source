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
-- 테이블 구조 `seoulit_highschool_vote_thisweek`
--

CREATE TABLE `seoulit_highschool_vote_thisweek` (
  `vote_number` int(11) NOT NULL,
  `vote_title` text NOT NULL,
  `vote_description` text NOT NULL,
  `vote_date` text NOT NULL,
  `vote_agree_count` int(11) NOT NULL,
  `vote_select_check` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `seoulit_highschool_vote_thisweek`
--

INSERT INTO `seoulit_highschool_vote_thisweek` (`vote_number`, `vote_title`, `vote_description`, `vote_date`, `vote_agree_count`, `vote_select_check`) VALUES
(1, '채택 청원 테스트', '이 글은 채택청원 테스트 용입니다.', '2018-10-25', 52, 'yes');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `seoulit_highschool_vote_thisweek`
--
ALTER TABLE `seoulit_highschool_vote_thisweek`
  ADD PRIMARY KEY (`vote_number`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `seoulit_highschool_vote_thisweek`
--
ALTER TABLE `seoulit_highschool_vote_thisweek`
  MODIFY `vote_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
