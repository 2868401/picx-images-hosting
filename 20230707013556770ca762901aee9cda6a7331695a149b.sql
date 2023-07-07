-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: hkmysql5.zzidc.ha.cn:3306
-- Generation Time: 2023-06-20 20:08:11
-- 服务器版本： 5.6.51
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zcapp`
--

-- --------------------------------------------------------

--
-- 表的结构 `zrw`
--

CREATE TABLE `zrw` (
  `rw_id` int(11) NOT NULL,
  `rwmc` text NOT NULL,
  `rwkg` text NOT NULL,
  `xzrw` text NOT NULL,
  `rwpass` text NOT NULL,
  `rwtp1` text NOT NULL,
  `rwtp2` text NOT NULL,
  `rwtp3` text NOT NULL,
  `rwjs1` text NOT NULL,
  `rwjs2` text NOT NULL,
  `rwjs3` text NOT NULL,
  `rwtb` text NOT NULL,
  `rwurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zrw`
--

INSERT INTO `zrw` (`rw_id`, `rwmc`, `rwkg`, `xzrw`, `rwpass`, `rwtp1`, `rwtp2`, `rwtp3`, `rwjs1`, `rwjs2`, `rwjs3`, `rwtb`, `rwurl`) VALUES
(1, '做任务获取密码', 'false', 'false', '超级红包', 'https://y.gtimg.cn/music/photo_new/T053XD0004Y1wU1HmfEf.jpg', 'https://y.gtimg.cn/music/photo_new/T053XD001OPwt41bflCf.jpg', 'https://y.gtimg.cn/music/photo_new/T053XD0040LJQo1cjHqF.jpg', '①打开手机淘宝\n②然后搜索文字\n搜：天降红包99979', '进来界面后，先领取红包\n淘宝买东西可以无门槛抵扣\n\n最高可以领取23888元红包', '大家仔看图！下栏中心标记的位置\n标记展现出来的文字 就是下载密码\n标记展现出来的文字 就是下载密码\n标记展现出来的文字 就是下载密码\n标记展现出来的文字 就是下载密码', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zrw`
--
ALTER TABLE `zrw`
  ADD PRIMARY KEY (`rw_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `zrw`
--
ALTER TABLE `zrw`
  MODIFY `rw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
