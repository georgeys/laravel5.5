-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-05-20 11:31:31
-- 服务器版本： 10.4.10-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `xuexi`
--

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` char(10) NOT NULL,
  `age` int(10) NOT NULL,
  `edu` varchar(10) NOT NULL,
  `salary` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `city` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `avatar`, `name`, `sex`, `age`, `edu`, `salary`, `bonus`, `city`) VALUES
(5, '', '袁帅', '男', 18, '大专', 10000, 200, '西安'),
(6, '', '流失阿凯', '男', 25, '无', 6555, 855, '香江'),
(7, '', 'laowang', '男', 24, '大专', 2580, 200, '上海'),
(8, '', '老王', '男', 25, '研究生', 5222, 3000, '上海'),
(9, '', '李伟业', '男', 25, '大专', 5000, 200, '西安'),
(10, '', '许嵩', '男', 25, '无', 5222, 2000, '南京'),
(11, '', '萨达', '男', 24, '大专', 2580, 200, '西安'),
(12, '', '谢伟', '男', 26, '无', 2500, 1000, '上海'),
(13, '', '赵四', '女', 36, '大专', 5820, 200, '西安'),
(14, '', '刘穗月', '女', 25, '无', 6555, 855, '香江'),
(15, '', '高文博', '男', 25, '本科', 2580, 200, '上海'),
(16, '', '陈说', '男', 25, '研究生', 5222, 3000, '上海'),
(17, '', '袁帅', '男', 18, '本科', 12000, 5000, '西安'),
(20, '', '张三', '男', 15, '大专', 5200, 1210, '西安'),
(21, '', '流凯', '男', 26, '大专', 6000, 1000, '上海'),
(22, '', '流凯1', '男', 26, '大专', 6000, 1000, '上海'),
(23, '', '流凯', '男', 26, '大专', 6000, 1000, '上海'),
(24, '', '流凯', '男', 26, '大专', 6000, 1000, '上海'),
(26, '', '张三', '男', 25, '大专', 6511, 111, '西安'),
(28, '', '阿航三', '男', 48, '本科', 5000, 500, '南京'),
(29, '', '里三', '女', 18, '本科', 8000, 550, '南京'),
(30, '', '牛散', '男', 25, '本科', 8000, 550, 'beijing'),
(31, '', '是散', '男', 55, '本科', 8000, 550, '西安'),
(32, '', '袁帅', '男', 18, '本科', 10000, 550, '西安'),
(33, '', '蘸酸奶', '男', 198, '本科', 1000, 500, '南京'),
(34, '', '大熊', '男', 19, '本科', 1000, 500, '倍京'),
(38, '', '袁帅', '男', 18, '大', 5000, 500, '西安'),
(39, '', '大熊', '男', 19, '本科', 1000, 500, '倍京');

--
-- 转储表的索引
--

--
-- 表的索引 `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
