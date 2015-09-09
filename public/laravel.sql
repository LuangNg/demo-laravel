--
-- Table `city_cn`
--
DROP TABLE IF EXISTS `city_cn`;
CREATE TABLE IF NOT EXISTS `city_cn` (
  `city_code` varchar(6) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  `prov_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `city_cn` (`city_code`, `city_name`, `prov_code`) VALUES
('321200', '镇江市', '320000'),
('321300', '扬州市', '320000');

-- --------------------------------------------------------

--
-- 表的结构 `commodity`
--

DROP TABLE IF EXISTS `commodity`;
CREATE TABLE IF NOT EXISTS `commodity` (
  `com_id` varchar(66) NOT NULL,
  `com_name` varchar(30) NOT NULL,
  `com_price` int(10) DEFAULT '0',
  `memo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `district_cn`
--

DROP TABLE IF EXISTS `district_cn`;
CREATE TABLE IF NOT EXISTS `district_cn` (
  `district_code` varchar(6) NOT NULL,
  `district_name` varchar(20) NOT NULL,
  `city_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `province_cn`
--

DROP TABLE IF EXISTS `province_cn`;
CREATE TABLE IF NOT EXISTS `province_cn` (
  `prov_code` varchar(6) NOT NULL,
  `prov_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `province_cn`
--

INSERT INTO `province_cn` (`prov_code`, `prov_name`) VALUES
('110000', '北京市'),
('120000', '天津市'),
('130000', '河北省'),
('140000', '山西省'),
('150000', '内蒙古自治区'),
('210000', '辽宁省'),
('220000', '吉林省'),
('230000', '黑龙江省'),
('310000', '上海市'),
('320000', '江苏省'),
('330000', '浙江省');

-- --------------------------------------------------------

--
-- 表的结构 `road_cn`
--

DROP TABLE IF EXISTS `road_cn`;
CREATE TABLE IF NOT EXISTS `road_cn` (
  `road_code` varchar(6) NOT NULL,
  `road_name` varchar(20) NOT NULL,
  `district_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `city_cn`
--
ALTER TABLE `city_cn`
 ADD PRIMARY KEY (`city_code`);

--
-- Indexes for table `commodity`
--
ALTER TABLE `commodity`
 ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `district_cn`
--
ALTER TABLE `district_cn`
 ADD PRIMARY KEY (`district_code`);

--
-- Indexes for table `province_cn`
--
ALTER TABLE `province_cn`
 ADD PRIMARY KEY (`prov_code`);

--
-- Indexes for table `road_cn`
--
ALTER TABLE `road_cn`
 ADD PRIMARY KEY (`road_code`);

--
-- Indexes for table `users`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS  `account` (
  `ac_id` varchar(66) NOT NULL COMMENT 'account id',
  `username` varchar(30) NOT NULL COMMENT 'user name',
  `nickname` varchar(50) NUll COMMENT 'front-end page will show this name if it exists',
  `password` varchar(66) NOT NULL COMMENT 'password',
  `mobile_phone` varchar(20) NULL COMMENT 'users\' cellphone',
  `email` varchar(60) NOT NULL COMMENT 'email',
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '0:not actived, 1:actived, 3:locked, 4:canceled',
  `created_time` bigint(12) NOT NULL COMMENT 'date & time account created display in unix timestamp',
  `role_type` int(2) NOT NULL DEFAULT '0' COMMENT 'account role type',
  `last_signin_time` bigint(12) NOT NULL COMMENT 'last sign in date time display in unix timestamp',
  `last_signin_ip` varchar(16) NOT NULL COMMENT 'last sign in ip address',
  `remark` varchar(200) NULL DEFAULT '',
  PRIMARY KEY(`ac_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(30) NOT NULL DEFAULT '' COMMENT 'id card num',
  `realname` varchar(50) NOT NULL COMMENT 'user''s realname',
  `gender` int(1) NOT NULL DEFAULT '0' COMMENT '1:male, 0; female',
  `age` int(2) NOT NULL DEFAULT '18' COMMENT 'age',
  `birth` bigint(15) DEFAULT NULL COMMENT 'birthday',
  `id_card` varchar(20) NUll COMMENT 'id card number',
  `addr` varchar(30) DEFAULT NULL COMMENT 'address',
  `education` varchar(10) DEFAULT NULL COMMENT 'education',
  `graduate_school` varchar(10) DEFAULT NULL COMMENT 'advanced graduate degree',
  `nationality` varchar(8) DEFAULT NULL COMMENT 'nationality(get it by reg ip)',
  `prov_code` varchar(8) DEFAULT NULL COMMENT 'province belong to(get prov by reg ip)',
  `city_code` varchar(8) DEFAULT NULL COMMENT 'city code(get city code by reg ip)',
  `post_code` varchar(10) DEFAULT NULL COMMENT 'post code num',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




