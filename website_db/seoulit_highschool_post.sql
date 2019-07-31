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
-- 테이블 구조 `seoulit_highschool_post`
--

CREATE TABLE `seoulit_highschool_post` (
  `post_number` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `uploader` text NOT NULL,
  `date` text NOT NULL,
  `agree_count` int(11) NOT NULL,
  `report_count` int(11) NOT NULL,
  `agree_user` text NOT NULL,
  `report_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `seoulit_highschool_post`
--

INSERT INTO `seoulit_highschool_post` (`post_number`, `title`, `description`, `uploader`, `date`, `agree_count`, `report_count`, `agree_user`, `report_user`) VALUES
(1, '안녕하세요, 청원서비스 입니다!', '안녕하세요, 청원서비스 입니다! 잘 작동되면 좋겠어요!', '', '2018-10-19', 1, 1, 'admin, ', 'admin, '),
(13, 'sql인젝션 테스트', 'sql인젝션 테스트용 입니다.', 'admin', '2018-10-28', 1, 1, 'admin, ', 'admin, '),
(19, 'xxs인젝션 테스트', '<script>alert(''xxs인젝션 해킹에 취약합니다!'');</script>', 'admin', '2018-10-28', 1, 1, 'admin, ', 'admin, ');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `seoulit_highschool_post`
--
ALTER TABLE `seoulit_highschool_post`
  ADD PRIMARY KEY (`post_number`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `seoulit_highschool_post`
--
ALTER TABLE `seoulit_highschool_post`
  MODIFY `post_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
