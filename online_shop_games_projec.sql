-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql106.byethost6.com
-- Generation Time: 15 يناير 2024 الساعة 16:55
-- إصدار الخادم: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b6_35501927_online_shop_games_project`
--

-- --------------------------------------------------------

--
-- بنية الجدول `ad`
--

CREATE TABLE `ad` (
  `ad_ID` int(11) NOT NULL,
  `ad_content` varchar(2500) NOT NULL,
  `ad_Published` char(1) NOT NULL,
  `ad_Added` timestamp NOT NULL DEFAULT current_timestamp(),
  `FK_Admin_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `ad`
--

INSERT INTO `ad` (`ad_ID`, `ad_content`, `ad_Published`, `ad_Added`, `FK_Admin_ID`) VALUES
(10, '<div class=\' alert alert-dark alert-dismissible fade show\' role=\'alert\'>\r\n<strong>Secure Tour Digital Life:</strong> Use coupon code SECURE15 for 15% off on any <a href=\'#\' class=\'alert-link\'>antivirus software</a>. \r\n<button type=\'button\' class=\'btn-close\' data-bs-dismiss=\'alert\' aria-label=\'Close\'></button>\r\n</div>', '1', '2023-11-16 20:16:14', 1),
(11, '<div class=\' alert alert-dark alert-dismissible fade show\' role=\'alert\'>\r\n<strong>30%</strong> discount with code \'KSA\'\r\n<button type=\'button\' class=\'btn-close\' data-bs-dismiss=\'alert\' aria-label=\'Close\'></button>\r\n</div>', '1', '2023-11-16 20:16:23', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `admin_list`
--

CREATE TABLE `admin_list` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Email` varchar(255) NOT NULL,
  `Admin_Phone` varchar(255) NOT NULL,
  `Admin_FName` varchar(255) NOT NULL,
  `Admin_LName` varchar(255) NOT NULL,
  `Admin_PSW` varchar(255) NOT NULL,
  `Admin_Type` char(2) NOT NULL,
  `Verify_Token` varchar(255) DEFAULT NULL,
  `Admin_Photo` varchar(255) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `admin_list`
--

INSERT INTO `admin_list` (`Admin_ID`, `Admin_Email`, `Admin_Phone`, `Admin_FName`, `Admin_LName`, `Admin_PSW`, `Admin_Type`, `Verify_Token`, `Admin_Photo`, `Created_at`) VALUES
(1, 'Abdullah@SY.Admin.sa', '0555555555', 'Abdullah', 'AL-Tayyar', '$2y$10$s9iZv72CZQonnJDAc9sFZudrCp2UVJVjGs9LZKynuOurLBYm9lG5i', 'SY', NULL, 'Personal0.png6595175562.png', '2023-11-27 20:30:29'),
(6, 'M@DB.Admin.com', '0123456789', 'Mohammedb', 'AL', '$2y$10$dH/xI9R83do8zwQqSKt4d.phGQl0RJSL2hurDbZMgDPa9d8dZBxym', 'DB', NULL, 'Personal5.png1649579431.png', '0000-00-00 00:00:00'),
(8, 'saad_admin@egoostore.sa', '0123456789', 'Saad', 'AL Shaflot', '$2y$10$QMPBPu1JXGOmN6H7D91W/.n6/lSBAESDvi/m8NsA/QgfRnFDTaJa2', 'SY', NULL, '', '0000-00-00 00:00:00'),
(9, 'abdullah_admin@egoostore.sa', '0123456789', 'Abdullah', 'AL-Ghamdi', '$2y$10$tuN3oPcw/fzWxXF9RLw32ebrp5YuYGiTQtAfBP2Ca8tmSwR1HzxE.', 'SY', NULL, '', '0000-00-00 00:00:00'),
(11, 'nawaf_admin@egoostore.sa', '0123456789', 'Nawaf ', 'AL-Awda', '$2y$10$Pc/qzS1Be0XG.Nju2tcBZ.ebNVGN1wONTFHLWUyDNaucZclTHOEGm', 'SY', NULL, '', '0000-00-00 00:00:00'),
(12, 'ibrahim_admin@egoostore.sa', '0123456789', 'Ibrahim', 'AL-Jabri', '$2y$10$ie0UIVGQhyM12whhZWNxLu4eCp9dJ3sB/Suda1WGu2ZQEsvlGPMk2', 'SY', NULL, '', '0000-00-00 00:00:00'),
(17, 'visitor@SY.Admin.sa', '0123456789', 'Visitor', 'V', '$2y$10$Xbp6akunwgHEFMG4gTT1ouNuxx8dzc1x64NDIvgP2sflhxApjJwN2', 'SY', NULL, 'Saudi.png2520642399.png', '2023-11-28 19:04:52'),
(18, 'visitor@SY.Egoostore.sa', '0555555555', 'visitor', 'system admin', '$2y$10$HyAurzNNIfIzQMHoUC1ZRO9tFID9rDBye3F.X1HwWjy6KsAYU2fNq', 'SY', NULL, '', '2024-01-15 21:36:02'),
(19, 'visitor@DB.Egoostore.sa', '0555555555', 'visitor', 'DB admin', '$2y$10$3H.cZIClFrAYKVDvQORv9u0VF4kxPdkU1NQRY0l2u2DxjFfwwiaei', 'DB', NULL, '', '2024-01-15 21:38:42');

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `Cate_ID` int(11) NOT NULL,
  `Cate_Name` varchar(255) NOT NULL,
  `FK_Admin_ID` int(11) NOT NULL,
  `Cate_Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`Cate_ID`, `Cate_Name`, `FK_Admin_ID`, `Cate_Date`) VALUES
(3, 'antivirus', 1, '2023-10-10 09:10:03'),
(33, 'Microsoft Office', 1, '2023-10-17 19:11:21'),
(34, 'Playstation Key', 1, '2023-10-17 19:23:46'),
(50, 'google play card', 9, '2023-11-28 18:05:57'),
(51, 'xbox', 9, '2023-11-28 19:21:04'),
(52, 'Microsoft Word', 9, '2023-11-28 19:33:15'),
(53, 'Apple ', 17, '2023-11-28 19:40:05');

-- --------------------------------------------------------

--
-- بنية الجدول `customer`
--

CREATE TABLE `customer` (
  `Cust_ID` int(11) NOT NULL,
  `Cust_Email` varchar(255) NOT NULL,
  `Cust_Phone` int(11) DEFAULT NULL,
  `Cust_FName` varchar(45) NOT NULL,
  `Cust_LName` varchar(45) NOT NULL,
  `Cust_PSW` varchar(255) NOT NULL,
  `Cust_Register` date NOT NULL,
  `Cust_BirthDate` date NOT NULL,
  `Cust_Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `customer`
--

INSERT INTO `customer` (`Cust_ID`, `Cust_Email`, `Cust_Phone`, `Cust_FName`, `Cust_LName`, `Cust_PSW`, `Cust_Register`, `Cust_BirthDate`, `Cust_Img`) VALUES
(1, 'Abdullah@Admin.com', NULL, 'Abdullah', 'AL', '$2y$10$I70JuJtcvJ5pEUVRM0qhHO3Qp4brcXYBf0locgtnXRj1QNiy5WB8G', '2023-11-15', '2023-11-01', 'Abdullah@Admin.comPersonal0.png2197944595.png'),
(19, 'a@gmail.com', NULL, 'a', '', '$2y$10$SgYcCdK6QuaAC6YKfpCQV.0Ce6pKKsjmhlp2MD3GwlQBsmPjotmIm', '2023-11-28', '2023-11-28', 'a@gmail.comâ€â€Ù„Ù‚Ø·Ø© Ø§Ù„Ø´Ø§Ø´Ø© (26).png5123346802.png'),
(20, 'test1@gmail.com', NULL, 'test1', '', '$2y$10$3qXhBuQvp2HTD.ranhoiC.uhIFfrDakv69MnlyRu81bdkb91aTyt2', '2023-11-28', '2023-11-21', 'test1@gmail.comPersonal5.png6498492535.png'),
(21, 'aaljb24@gmail.com', NULL, 'Nl', 'j', '$2y$10$ZcU3.2qucFQzhmbwv63fzO4nyZsnN5iG9cFf72JbjbCIZm7ru6G9u', '2023-11-29', '2003-12-29', 'aaljb24@gmail.comIMG_3243.jpeg9017622633.jpeg'),
(22, 'anwaf2466@gmail.com', NULL, 'Nawaf', 'Aloudah', '$2y$10$ElefmLxM6Ac0YJrYR/Yp.uM0QqW52jcPZx9rP1dGV1t5IT2mN/PXO', '2023-11-29', '1999-11-29', 'anwaf2466@gmail.comE7080954-848E-45FC-B830-36399A5713A9.jpeg8723493370.jpeg'),
(23, 'info@darikumshop-fcs.com', NULL, 'osama', 'faisal', '$2y$10$ItQW71RqomcsYOahH91r7e7vPnNIS7PZcUK7/lDunAYwGtW0hnmZa', '2023-11-29', '2002-05-31', 'info@darikumshop-fcs.comØ§Ù„Ø´Ø¹Ø§Ø±00.jpg3566315101.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `feedback`
--

CREATE TABLE `feedback` (
  `Fee_ID` int(11) NOT NULL,
  `FK_Cust_ID` int(11) NOT NULL,
  `FK_Prod_ID` int(11) NOT NULL,
  `Fee_Rating` int(11) NOT NULL,
  `Fee_Commit` varchar(255) NOT NULL,
  `Fee_Verfy` int(11) DEFAULT NULL,
  `Posted_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `feedback`
--

INSERT INTO `feedback` (`Fee_ID`, `FK_Cust_ID`, `FK_Prod_ID`, `Fee_Rating`, `Fee_Commit`, `Fee_Verfy`, `Posted_on`) VALUES
(1, 1, 4, 5, 'Good Product', NULL, '2023-11-15 05:12:46'),
(41, 1, 4, 2, 'Good\r\n', NULL, '2023-11-28 17:05:58'),
(46, 21, 1, 5, 'Ø¬ÙŠØ¯', NULL, '2023-11-29 09:33:07'),
(47, 21, 5, 5, 'Ø¬ÙŠØ¯', NULL, '2023-11-29 09:33:40'),
(48, 22, 3, 5, 'This product is so much good also this website ðŸ‘ðŸ¼ðŸ‘ðŸ¼', NULL, '2023-11-29 09:36:57'),
(49, 22, 1, 5, 'ðŸ‘ðŸ¼Ù…ÙÙŠØ¯ Ø¬Ø¯Ø§ ', NULL, '2023-11-29 09:39:28'),
(50, 22, 4, 5, 'ðŸ‘ðŸ¼ðŸ‘ðŸ¼', NULL, '2023-11-29 09:40:22'),
(51, 22, 5, 4, 'Good product ðŸ‘ðŸ¼', NULL, '2023-11-29 09:41:19'),
(52, 19, 1, 5, 'Excellent delivery time\r\n', NULL, '2023-11-29 11:13:57'),
(53, 19, 20, 4, 'Fast customer service', NULL, '2023-11-29 11:14:43'),
(54, 19, 5, 2, 'high price', NULL, '2023-11-29 11:15:43'),
(55, 23, 3, 5, 'Ø®Ø¯Ù…Ø© Ø³Ø±ÙŠØ¹Ø© ', NULL, '2023-11-29 11:15:49'),
(56, 19, 18, 5, 'Best price on the market', NULL, '2023-11-29 11:16:27'),
(57, 23, 1, 5, 'ØªØ¹Ø§Ù…Ù„ Ø§Ù„Ù…ØªØ¬Ø± Ø¬Ù…ÙŠÙ„ ÙˆØ®Ø¯Ù…Ø§Øª Ù…Ù…ØªØ§Ø²Ø© ', NULL, '2023-11-29 11:16:38'),
(58, 23, 19, 5, 'Ù…ÙÙŠØ¯ Ø¬Ø¯Ø§ ', NULL, '2023-11-29 11:17:25'),
(59, 19, 19, 5, 'excellent service. I want diversification', NULL, '2023-11-29 11:19:20'),
(60, 19, 4, 1, 'old model', NULL, '2023-11-29 11:21:29'),
(61, 1, 4, 3, 'test', NULL, '2023-12-05 05:39:11');

-- --------------------------------------------------------

--
-- بنية الجدول `log_admin`
--

CREATE TABLE `log_admin` (
  `FK_Admin_ID` int(11) NOT NULL,
  `Log_Date` date NOT NULL,
  `Log_Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `product`
--

CREATE TABLE `product` (
  `Prod_ID` int(11) NOT NULL,
  `FK_Cate_ID` int(11) NOT NULL,
  `Prod_Name` varchar(100) NOT NULL,
  `Prod_Published` char(1) NOT NULL,
  `Prod_Long_Desc` mediumtext NOT NULL,
  `Prod_Steps` varchar(1000) DEFAULT NULL,
  `Prod_Short_Desc` mediumtext NOT NULL,
  `Prod_Below_Desc` varchar(255) DEFAULT NULL,
  `Prod_Price` double(10,2) NOT NULL,
  `Prod_Stock_Status` int(11) NOT NULL,
  `Prod_Warranty` int(11) NOT NULL,
  `Prod_Img` varchar(255) NOT NULL,
  `Prod_Img1` varchar(255) NOT NULL,
  `FK_Admin_ID` int(11) NOT NULL,
  `Prod_Date_Added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `product`
--

INSERT INTO `product` (`Prod_ID`, `FK_Cate_ID`, `Prod_Name`, `Prod_Published`, `Prod_Long_Desc`, `Prod_Steps`, `Prod_Short_Desc`, `Prod_Below_Desc`, `Prod_Price`, `Prod_Stock_Status`, `Prod_Warranty`, `Prod_Img`, `Prod_Img1`, `FK_Admin_ID`, `Prod_Date_Added`) VALUES
(1, 3, '          Apple store', '1', '<p>Do you want to enjoy all the exclusive apps and survives on Apple store? You need to charge your Apple store? Well, now you can and easily with Apple store gift cards. We offer you today Apple Gift Card 75 SAR - KSA prepaid gift cards to recharge your Apple store account and enjoy unlimited survives and apps. From Music and movies to premium subscription in apps. Saudian account, American or British. You name it, order your card, pay in safe methods and get your card code for unlimited use.</p>\r\n', 'Enter your Apple Store account information, Enter to redeem the gift card or code, Insert the card you obtained, Click on â€œRecoveryâ€', '          Apple store gift cards come with deferent packages to suit all the various uses and needs\r\nSo what are you waiting for?', '', 75.00, 77, 24, 'ce67f-itunes-new.png3573938074.png', 'Applestore.png', 9, '2023-10-12 03:53:03'),
(3, 34, '        Playstation store', '1', '<p dir=\"RTL\" style=\"text-align:left\">PlayStation keys, often referred to as game keys or activation keys, are digital codes that provide access to and unlock video games and other digital content on PlayStation consoles, such as the PlayStation 4 (PS4), PlayStation 5 (PS5), and the PlayStation Network (PSN). These keys have become a popular and convenient way for gamers to purchase and redeem games and additional content, enhancing their gaming experience. Here&#39;s an in-depth look at PlayStation keys and how they work:</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;Digital Distribution: PlayStation keys represent a significant shift in the gaming industry towards digital distribution. Instead of purchasing physical copies of games at retail stores, gamers can now buy digital keys online from various authorized sellers and platforms.</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;Access to a Vast Library: PlayStation keys can be used to access a vast and diverse library of games, expansions, downloadable content (DLC), in-game items, and even virtual currency. This digital marketplace allows players to explore a wide range of titles and expand their gaming experience.</p>\r\n', 'Sign in to PlayStation Network on PS3 PS4 PS5 PSP or PC using Media Go, Go to PlayStation Store and select the Redeem Codes icon at the top of the page, Enter the PlayStation Card code and the funds will be added to your wallet immediately,', '        PlayStation Store gift cards, commonly known as PSN cards, are digital or physical prepaid cards that offer a convenient way to add funds to your PlayStation Network (PSN) account. Here\'s a brief', '<p dir=\"RTL\" style=\"text-align:left\">PlayStation keys, often referred to as game keys or activation keys, are digital codes that provide access to and unlock video games and other digital content on PlayStation consoles, such as the PlayStation 4 (PS4), P', 30.00, 99, 24, 'Playstation Key 30$.png5421731275.png', '', 17, '2023-10-24 18:27:16'),
(4, 3, '  Microsoft Excle', '1', '<p dir=\"RTL\" style=\"text-align:left\">Microsoft Excel is a highly versatile and widely employed spreadsheet software application that forms an integral part of the Microsoft Office suite. It offers an expansive array of features designed to help users manage, analyze, and present data in an organized and meaningful manner. Here is a more detailed description of Microsoft Excel:</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">Spreadsheet Creation: At its core, Excel provides a grid-based platform where users can create and manipulate spreadsheets. These spreadsheets consist of rows and columns, forming cells that can contain text, numbers, formulas, or functions.</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n', 'Log in to your account or create a new account. Enter the 25-character coupon code, Click on Next, Congratulations! Your subscription will be activated immediately and the full amount will be credited to your account associated with Microsoft,', '  Excel is a powerful and widely-used spreadsheet software by Microsoft. It allows users to create, manage, and analyze data in a grid format. Excel is known for its versatility, with features for mathematical calculations, data visualization, and complex data analysis. It\'s an essential tool for businesses, students, and professionals for tasks like budgeting, data tracking, and creating charts and graphs.\r\n\r\n', '', 85.00, 299, 24, 'Excle.png964441744.png', '', 9, '2023-10-24 18:28:52'),
(5, 3, '  Microsoft Outlook', '1', '<p dir=\"RTL\" style=\"text-align:left\">Microsoft Outlook is a comprehensive and versatile personal information management software developed by Microsoft. It is primarily recognized for its email management capabilities, but it offers a wide range of features that extend far beyond just email. Here is a detailed description of Microsoft Outlook:</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;Email Management: Outlook excels as an email client, providing a user-friendly and organized interface for sending, receiving, and managing emails. Users can create, organize, and categorize emails, making it easy to stay on top of their inbox.</p>\r\n', 'Log in to your account or create a new account. Enter the 25-character coupon code, Click on Next, Congratulations! Your subscription will be activated immediately and the full amount will be credited to your account associated with Microsoft,', ' Outlook is a widely-used email and personal information management application developed by Microsoft. It allows users to send and receive emails,\r\n manage calendars,\r\n schedule appointments, \r\nand organize tasks and contacts,\r\n all within a single interface. Outlook is known for its user-friendly design,\r\n robust email organization features,\r\n and seamless integration with other Microsoft Office applications,\r\n making it a valuable tool for efficient communication and time management', '<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">In summary, Microsoft Outlook is an all-in-one solution for email, calendar, contacts, and task management. It streamlines communication, enhances productivity, and of', 99.00, 299, 24, 'Outlook.png9629377176.png', '', 17, '2023-10-24 18:30:05'),
(18, 3, ' google play ', '0', '<p>&nbsp;applications and the Premium subscription. Google Play cards at different prices Competitive, multi-way packages are easy to use, so that your card arrives in record time for these simple purposes. If you want to buy TV application programs, exclusive subscriptions, music and game programs, dating</p>\r\n', 'Go to the Google Play Store and click on the side menu button, Enter payment methods, Click on Use Code,  Enter the card code that you obtained, Click on Collect Value', ' Whether you are a fan of gaming applications, dating applications, or work applications, etc., today you can balance the unlimited powers of these applications only through Google Play cards of 75 Saudi riyals to charge your Google Play account and enjoy all the fulfillment offered by theÂ ', '<p>&nbsp;programs, and get all the privileges, then paying Google Play cards with us is the solution. For all categories, and the lack of votes to enjoy the entertainment content and get the best that you can reach.Google Play cards, just one step away fr', 75.00, 0, 24, '32d01-.png5248866478.png', '', 1, '2023-11-28 18:19:23'),
(19, 3, ' Xbox gift card ', '1', '<p dir=\"rtl\"><strong>Xbox keys, also known as game keys or activation keys, are digital codes that have transformed the way gamers acquire and enjoy video games and additional digital content on Xbox consoles, including the Xbox One and Xbox Series X/S. These keys offer a more streamlined, convenient, and versatile approach to accessing and enjoying gaming experiences. Here&#39;s a detailed look at Xbox keys and how they work:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"rtl\"><strong>&nbsp;Digital Revolution: Xbox keys are a significant component of the digital transformation in the gaming industry. They&#39;ve become the preferred method of acquiring games and downloadable content, particularly with the advent of high-speed internet and the convenience of digital downloads.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"rtl\"><strong>&nbsp;Broad Range of Content: Xbox keys grant access to an extensive and diverse library of content, including full games, expansion packs, in-game items, and virtual currency. Gamers have the opportunity to explore a vast catalog of titles that cater to a wide variety of tastes and preferences.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"rtl\"><strong>&nbsp;Instant Gratification: The process of obtaining and redeeming Xbox keys is remarkably straightforward. Players can purchase keys from authorized sellers or online platforms, and upon redemption, they gain immediate access to the content, allowing them to jump into their gaming adventure without any delays.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"rtl\"><strong>&nbsp;Versatility: Xbox keys are not solely restricted to games; they can also unlock a plethora of in-game content and virtual currency. This versatility enables gamers to customize and enhance their gaming experience by gaining access to additional levels, characters, weapons, or cosmetic items</strong></p>\r\n', 'Charge a card using your Xbox One Xbox Series, Sign in to your Xbox console (make sure you\'re signed in with the Microsoft account you want to trade the code with), From the home screen, select and open Store. (If the Store app doesn\'t appear, go to My games & apps, select Apps and select the Store app from there, From Store, move the cursor left or press the display button to open the side menu, then choose Trade, Enter the code you obtained, then follow the instructions,', ' Xbox keys, often referred to as game keys or activation keys, are digital codes that provide access to and unlock video games and additional digital content on Xbox consoles, including Xbox One and Xbox Series X/S. These keys are a convenient and speedy way for gamers to purchase and redeem games and other content, enhancing their gaming experience. Xbox keys are typically purchased from authorized sellers and can be redeemed instantly, granting players access to their chosen game or content. They\'ve become an integral part of the digital distribution model, allowing gamers to explore a wide range of titles and downloadable content without the need for physical discs', '<p><strong>In summary, Xbox keys have become an integral part of the digital gaming landscape, offering&nbsp;a hassle-free, efficient,</strong></p>\r\n', 50.00, 55, 24, 'Xbox.png5319823192.png', '', 9, '2023-11-28 19:29:39'),
(20, 3, '  Microsoft Word', '1', '<p><strong>Microsoft Word is a comprehensive word processing software application created by Microsoft, and it has long been a cornerstone of document creation and editing for both personal and professional purposes. This software provides a plethora of features and tools that cater to a wide range of user needs, making it a versatile and essential tool for text-based document management.</strong></p>\r\n', 'Log in to your account or create a new account, Enter the 25-character coupon code, Click Next, Congratulations! Your subscription will be activated immediately and the full amount will be credited to your account associated with Microsoft,', '  Microsoft Word is a popular word processing software developed by Microsoft. It enables users to create, edit, format, and print text-based documents', '<p><strong>Microsoft Word is a widely used word processing software developed by Microsoft. It is part of the Microsoft Office suite and is designed for creating, editing</strong></p>\r\n', 30.00, 65, 24, 'Word.png4950900994.png,IMG_0064.jpeg3887291770.jpeg', '', 9, '2023-11-28 19:40:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`ad_ID`),
  ADD KEY `FK_Admin_ID_1` (`FK_Admin_ID`);

--
-- Indexes for table `admin_list`
--
ALTER TABLE `admin_list`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Cate_ID`),
  ADD KEY `FK_Admin_ID_add_by` (`FK_Admin_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Fee_ID`),
  ADD KEY `FK_Cust_ID` (`FK_Cust_ID`),
  ADD KEY `FK_Prod_ID` (`FK_Prod_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Prod_ID`),
  ADD KEY `FK_cate_ID` (`FK_Cate_ID`),
  ADD KEY `FK_Admin_ID` (`FK_Admin_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `ad_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_list`
--
ALTER TABLE `admin_list`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Cate_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Fee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Prod_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `ad`
--
ALTER TABLE `ad`
  ADD CONSTRAINT `FK_Admin_ID_1` FOREIGN KEY (`FK_Admin_ID`) REFERENCES `admin_list` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_Admin_ID_add_by` FOREIGN KEY (`FK_Admin_ID`) REFERENCES `admin_list` (`Admin_ID`);

--
-- القيود للجدول `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FK_Cust_ID` FOREIGN KEY (`FK_Cust_ID`) REFERENCES `customer` (`Cust_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Prod_ID` FOREIGN KEY (`FK_Prod_ID`) REFERENCES `product` (`Prod_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Admin_ID` FOREIGN KEY (`FK_Admin_ID`) REFERENCES `admin_list` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_cate_ID` FOREIGN KEY (`FK_Cate_ID`) REFERENCES `categories` (`Cate_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
