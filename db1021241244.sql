-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db1021241244`
--

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `author` varchar(10) NOT NULL DEFAULT '',
  `subject` tinytext NOT NULL,
  `content` mediumtext NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`id`, `author`, `subject`, `content`, `date`) VALUES
(38, 'May', '海底總動員2', '這次將以健忘的多莉為主軸，故事發生在尼莫返家後的六個月，一向什麼都記不起來的她突然受到記憶的衝擊，想起自己過往，所以多莉決定啟程尋找自己的家人，憑著僅存的記憶找到回家的路。', '2016-08-17 02:16:10'),
(37, '小東', '名偵探柯南', '名偵探柯南是日本漫畫家青山剛昌的著名推理漫畫作品及所有相關之出版物、電影等，劇中描述高中生偵探工藤新一因遭到灌藥導致身體縮小後，試圖調查黑暗組織與破獲各案件的故事。', '2016-08-17 02:15:37'),
(36, '阿寶', '臥虎藏龍開啟武俠電影新紀元', '國際知名導演李安的作品 \"臥虎藏龍\" 是第一部好萊塢投資的中國武俠電影，在台甫一推出便創下票房佳績。', '2016-08-17 02:14:45'),
(35, 'Marie', '秋天的童話', '秋天的童話是一個美麗純樸的少女、一個期待真愛的富家子弟、一個真心相待的青梅竹馬交織而成的美麗秋天童話，播出時間為 8 月 31 日起星期一到五晚間 10:00。', '2016-08-17 02:14:16'),
(34, 'Jerry', '天搖地動', '\"天搖地動\" 電影描述的是 1991 年 10 月漁船安麗雅號為了增加漁獲量，於是開往弗萊明角，未料當地氣象預告超級颶風葛瑞斯正在接近中，安麗雅號與其它船隻即將面臨前所未有的危機。', '2016-08-17 02:13:10'),
(32, '小倩', 'AKB48姊妹團體', 'AKB48獲得成功後，秋元康以類似模式於日本其它都市與海外成立SKE48、SDN48、NMB48、HKT48、NGT48、JKT48、SNH48等姊妹團體，朝向不同市場發展。', '2016-08-17 02:11:59'),
(33, '小明', '猜猜小叮噹的身高', '您知道小叮噹的身高和體重是一樣的數字嗎? 這是我在電視節目上看到的，答案是129.3喔。', '2016-08-17 02:12:31'),
(31, '小倩', 'AKB48', 'AKB48是日本大型女子偶像團體，成立於2005年12月8日，其團名取自東京的秋葉原，在秋葉原擁有專屬表演劇場，以「可以面對面的偶像」為理念，幾乎每天在劇場進行公演。', '2016-08-17 02:11:33'),
(30, 'Jerry', '冰雪奇緣', '冰雪奇緣是由迪士尼電影公司發行，取材自安徒生童話故事《冰雪女王》，該片連續贏得第71屆金球獎最佳動畫片、第41屆安妮奬最佳動畫電影、第67屆英國電影學院獎最佳動畫電影，以及第86屆奧斯卡金像獎最佳動畫長片和最佳原創歌曲。', '2016-08-17 02:11:03'),
(29, 'Grace', '動物方城市', '動物方城市是迪士尼影業所發行的3D動畫電影，故事的背景設定在一個哺乳動物所居住的大城市，主角兔子女警和街頭行騙高手狐狸合作解開一樁肉食動物失蹤案，並揭發背後的陰謀。', '2016-08-17 02:10:35'),
(28, '小丸子', '六月天演唱會免費聽', '知名的六月天樂團將於 8/31 舉行新歌免費聽演唱會，一張專輯可以換一張票，北中南各限量 1000 張，有沒有人要一起去排隊？', '2016-08-17 02:10:03'),
(39, '123', '整天都是禿頭的新聞', '真的很煩', '2020-01-03 01:11:42'),
(40, 'test', '要記得去投票', '我的票已經買好了', '2020-01-03 01:16:29'),
(49, 'test', '凌雪要改版啦！！', '天啊\r\n我好想玩喔＠＠\r\n可是要期末考了……\r\n', '2020-01-08 21:25:36'),
(44, '33', '有沒有站長不用睡覺的八卦？', '乳提，聽說站長一醒來就coding，連飯都忘了吃是真的嗎', '2020-01-05 20:54:41'),
(53, 'aaa', '新人簽到', 'ＹＡ', '2020-01-08 23:49:20'),
(54, 'aaa', '哈哈', '這裡都是我的帳號\r\n不信我等等換分身留言給你看', '2020-01-09 00:02:29'),
(50, 'test', 'HI', '說\r\n你\r\n好', '2020-01-08 22:48:57');

-- --------------------------------------------------------

--
-- 資料表結構 `reply_message`
--

CREATE TABLE `reply_message` (
  `id` int(11) NOT NULL,
  `author` varchar(10) NOT NULL DEFAULT '',
  `subject` tinytext NOT NULL,
  `content` mediumtext NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reply_id` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `reply_message`
--

INSERT INTO `reply_message` (`id`, `author`, `subject`, `content`, `date`, `reply_id`) VALUES
(10, 'Marie', '一起去排隊', '我要一起去排隊, 時間和地點呢?', '2016-08-17 02:25:56', 28),
(11, '小丸子', '時間和地點', '8/25中午12:00在西門町紅樓門口', '2016-08-17 02:27:55', 28),
(12, 'test', '', '但是我還沒領票', '2020-01-03 01:19:46', 40),
(13, '33', '', '快去領啊', '2020-01-03 01:20:28', 40),
(14, 'test', '', 'RRR沒空', '2020-01-03 03:08:02', 40),
(15, '123', '', 'RRR不要洗版', '2020-01-03 03:09:28', 40),
(16, 'xxx', '', 'RRR期末考好煩', '2020-01-03 03:09:32', 40),
(17, 'xdxd', '', 'RRR不要以為換帳號我不知道是同個人', '2020-01-03 03:09:37', 40),
(19, 'test', '', 'why', '2020-01-04 13:41:31', 40),
(26, 'test', '要記得去投票', '這次總該提交了吧', '2020-01-05 19:33:15', 40),
(40, 'aaa', '新人簽到', 'ＨＩ', '2020-01-09 00:00:47', 53),
(38, 'aaa', 'HI', '天線寶寶4ni？', '2020-01-08 23:49:04', 50),
(39, 'aaa', '凌雪要改版啦！！', '現在放棄\r\n寒假就提早開始ㄌ', '2020-01-08 23:52:22', 49),
(32, 'test', '凌雪要改版啦！！', '快要結束了！', '2020-01-08 22:39:05', 49),
(30, 'yourDad', '有沒有站長不用睡覺的八卦？', '要記得吃飯', '2020-01-06 01:34:43', 44),
(41, 'aaa', '新人簽到', '有人嗎', '2020-01-09 00:00:51', 53),
(42, 'aaa', '新人簽到', '版主去哪ㄌ', '2020-01-09 00:01:00', 53),
(43, 'test', '哈哈', '這裡都是我的帳號\r\n不信我等等換分身留言給你看', '2020-01-09 00:02:51', 54),
(44, 'sdsd', '哈哈', '這裡都是我的帳號\r\n不信我等等換分身留言給你看', '2020-01-09 00:03:14', 54);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `account` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(15) NOT NULL DEFAULT '',
  `name` varchar(10) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `job` varchar(10) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='會員';

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `password`, `name`, `email`, `job`) VALUES
(5, 'test', 'test', 'test', 'e36272123@gmail.com', '唐門'),
(10, 'test123', '123', '123', 'e36272123@gmail.com', 'opt1'),
(7, 'etewe', 'sdsd', '1234', 'e36272123@gmail.com', 'opt8'),
(8, 'xd', 'xd', '5678', 'e36272123@gmail.com', 'opt10'),
(9, 'weqew', 'we', 'we', 'e36272123@gmail.com', 'opt3'),
(11, '123', '123', '1234', 'e36272123@gmail.com', 'opt3'),
(12, '1234', '123', '1234', 'e36272123@gmail.com', 'opt3'),
(13, 'sdsd', 'sdsd', 'sdsd', '', 'opt7'),
(14, 'wewe', 'wewe', 'test', 'e36272123@gmail.com', 'opt1'),
(15, 'wdwdX', '1', '11', 'e36272123@gmail.com', 'opt1'),
(22, 'xxx', 'xxx', 'xxx', 'test', 'opt3'),
(17, 't123', '123', 'test', 'e36272123@gmail.com', 'opt12'),
(18, '121', '111', '11', 'e36272123@gmail.com', 'opt11'),
(19, 'test321', '111', '33', 'e36272123@gmail.com', 'opt13'),
(20, 'xdxd', 'xdxd', 'test', 'e36272123@gmail.com', 'opt6'),
(21, 'xdxdxd', '333', '33', 'test', 'opt6'),
(23, 'xxxx', 'xxx', 'xxx', 'test', 'opt2'),
(24, 'xdd', 'x', 'xxx', 'test', 'opt14'),
(26, 'yourDad', '2583', '拎老杯', 'e36272123@gmail.com', '明教'),
(27, 'ok', 'ok', '歐給', 'test', 'opt1'),
(28, 'add', 'add', 'add', 'e36272123@gmail.com', 'opt1'),
(29, 'plus', 'pp', '加加', 'e36272123@hotmail.com', 'opt1'),
(30, 'lazy', 'lll', 'lazy', 'e36272123@gmail.com', 'opt1'),
(31, 'sb', 'ss', 'test', 'e36272123@gmail.com', 'opt1'),
(32, 'aaa', 'bb', 'ab', 'test', '唐門');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `reply_message`
--
ALTER TABLE `reply_message`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reply_message`
--
ALTER TABLE `reply_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
