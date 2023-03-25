-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2018 at 09:01 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scourses_blog`
--
CREATE DATABASE IF NOT EXISTS `scourses_blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `scourses_blog`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin') NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'studio', 'admin', '$2y$10$2dRRQErX2jnbf/Ct/C8TKu3GJ7hF4B/SAMlgBsAz6VMFVmUELsZ4.', 'superadmin', '2018-12-31 20:50:40', '2018-10-21 13:17:32', '2018-10-14 17:14:18'),
(3, 'appzstory', 'appzstory', 'appzstory', '$2y$10$2dRRQErX2jnbf/Ct/C8TKu3GJ7hF4B/SAMlgBsAz6VMFVmUELsZ4.', 'admin', '2018-12-18 17:43:46', '2018-10-14 17:34:04', '2018-10-14 17:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` enum('true','false') NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `updated_at`, `created_at`) VALUES
(1, 'HTML คืออะไร แก้ไข 1.4', 'ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ tag ในการกำหนดการแสดงผล แก้ไข 1.4', '<h2><strong>HTML คืออะไร</strong></h2>\r\n\r\n<p><strong>HTML5</strong>&nbsp;คือ ภาษามาร์กอัป ที่ใช้สำหรับเขียน website &nbsp;ซึ่ง&nbsp;HTML5&nbsp;นี้เป็นภาษาที่ถูกพัฒนาต่อมาจากภาษา HTML และพัฒนาขึ้นมาโดย WHATWG (The Web Hypertext Application Technology Working Group) โดยได้มีการปรับเพิ่ม Feature หลายๆอย่างเข้ามาเพื่อให้ผู้พัฒนาสามารถใช้งานได้ง่ายมากยิ่งขึ้น</p>\r\n\r\n<h2>ข้อดีของ HTML5</h2>\r\n\r\n<p>แก้ไขโดยการเพิ่มรูปตรงนี้</p>\r\n\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./assets/images/upload/source/photo-1543260987-e9801362143f.jpg\" style=\"height:900px; width:1350px\" /></p>\r\n\r\n<p>ลบรูปตรงนี้</p>\r\n\r\n<ol>\r\n	<li>เว็บไซต์ที่สร้างจากภาษา&nbsp;<strong>HTML5&nbsp;</strong>สามารถแสดงผลได้กับทุก web browser&nbsp;</li>\r\n	<li><strong>HTML5&nbsp;</strong>จะช่วยลดการใช้พวกปลั๊กอินพิเศษอย่างพวก Adobe Flash, Microsoft Silverlight, Apache Pivot สนับสนุน วิดีโอ และ องค์ประกอบเสียง รวมทั้ง สื่อมัลติมีเดียต่างๆมากขึ้น โดยไม่ต้องใช้ Flash</li>\r\n	<li>มีการจัดการข้อผิดพลาดที่ดีขึ้น</li>\r\n	<li>สคริปต์ใหม่ ที่จะมาแทนที่สคริปต์เดิม (เขียนโค้ดสั้นลง)</li>\r\n	<li><strong>HTML5&nbsp;</strong>มีความเป็นอิสระสูง (คล้ายๆ XML )</li>\r\n	<li><strong>HTML5&nbsp;</strong>ทำงานควบคู่กับ CSS3 ได้ดี ช่วยให้สามารถเพิ่มลูกเล่นต่างๆบนเว็บไซต์ได้สวยงามมากยิ่งขึ้น (CSS คือส่วนแสดงผล ที่นักออกแบบสามารถกำหนดสีสัน ตำแหน่ง ลักษณะเวลานำเมาส์ไปแหย่แล้วมีกระต่ายโผล่ออกมาจากโพรง หรือจับก้อนวัตถุในหน้าเว็บฯ ให้ชิดซ้ายชิดขวา ส่วน CSS3 คือเวอร์ชั่นที่ 3 ของ CSS )</li>\r\n</ol>\r\n\r\n<h2>Features ใหม่ๆ ของ HTML5</h2>\r\n\r\n<ol>\r\n	<li>Semantic Markup : การเพิ่ม Element ที่ อ่านง่ายมากขึ้น และช่วยให้ เราทำ SEO ได้มีประสิทธิภาพมากยิ่งขึ้น</li>\r\n	<li>Form Enhancements : เพิ่มความสามารถของ Form ต่างๆ ไม่ว่าจะเป็น Input type, Attribute หรือ แม้แต่ Element</li>\r\n	<li>Audio / Video: รองรับการอ่านไฟล์เสียง และ วีดีโอ โดยไม่จำเป็นต้องใช้ Embed Code ของ Third Party</li>\r\n	<li>Canvas : ใช้ในการวาดรูป โดยจำเป็นต้องใช้ Javascriptช่วย</li>\r\n	<li>ContentEditable : สามารถแก้ไข Content ได้โดยตรงผ่านทางหน้าเว็บ</li>\r\n	<li>Drag and Drop : ลากวางObject ได้ เพื่อเพิ่มการ ตอบสนองระหว่างระบบกับผู้ใช้</li>\r\n	<li>Persistent Data Storage : มีการจัดการที่ดีขึ้น โดยเก็บข้อมูลลงบนเครื่องของผู้ใช้&nbsp;</li>\r\n</ol>\r\n', '15440279906973.jpg', 'all,html', 'true', '2018-12-15 02:13:58', '2018-05-19 00:00:00'),
(2, 'CSS คืออะไร', 'css คือการจัดตกแต่งเว็บไซต์ให้สวยงาม', '<p>CSS คืออะไร ? มีประโยชน์อย่างไรบ้าง การจัดทำเว็บไซต์ที่มีประสิทธิภาพต้องมีการวางแผนและการออกแบบระบบที่ดี โดยในยุคแรก ๆ จะใช้ภาษา HTML ในการจัดทำระบบการแสดงผลทางด้านโครงสร้างและข้อมูลของเว็บ แต่ปัจจุบันมีการพัฒนามาจนถึง HTML5 และยังมีการพัฒนาภาษาที่ใช้เพื่อกำหนดรูปแบบการแสดงผลทางหน้าเว็บไซต์ที่หลากหลายและมีความยืดหยุ่น เช่น สีอักษร สีพิ้นหลัง ขนาดตัวอักษร จัดการเลย์เอ้าท์ ให้สวยงามและอื่นๆ ซึ่งนั้นก็คือ CSS หรือ Style Sheets และในความหมายของทางโปรแกรมเมอร์นั้น คือ โครงสร้างการแสดงผลของหน้าตาเว็บไซต์ CSS คืออะไร CSS ย่อมาจาก Cascading Style Sheet มักเรียกโดยย่อว่า &quot;สไตล์ชีต&quot; คือภาษาที่ใช้เป็นส่วนของการจัดรูปแบบการแสดงผลเอกสาร HTML โดยที่ CSS กำหนดกฏเกณฑ์ในการระบุรูปแบบ (หรือ &quot;Style&quot;) ของเนื้อหาในเอกสาร อันได้แก่ สีของข้อความ สีพื้นหลัง ประเภทตัวอักษร และการจัดวางข้อความ ซึ่งการกำหนดรูปแบบ หรือ Style นี้ใช้หลักการของการแยกเนื้อหาเอกสาร HTML ออกจากคำสั่งที่ใช้ในการจัดรูปแบบการแสดงผล กำหนดให้รูปแบบของการแสดงผลเอกสาร ไม่ขึ้นอยู่กับเนื้อหาของเอกสาร เพื่อให้ง่ายต่อการจัดรูปแบบการแสดงผลลัพธ์ของเอกสาร HTML โดยเฉพาะในกรณีที่มีการเปลี่ยนแปลงเนื้อหาเอกสารบ่อยครั้ง หรือต้องการควบคุมให้รูปแบบการแสดงผลเอกสาร HTML มีลักษณะของความสม่ำเสมอทั่วกันทุกหน้าเอกสารภายในเว็บไซต์เดียวกัน โดยกฏเกณฑ์ในการกำหนดรูปแบบ (Style) เอกสาร HTML ถูกเพิ่มเข้ามาครั้งแรกใน HTML 4.0 เมื่อปีพ.ศ. 2539 ในรูปแบบของ CSS level 1 Recommendations ที่กำหนดโดย องค์กร World Wide Web Consortium หรือ W3C</p>\r\n', 'css3.jpg', 'all,', 'true', '2018-12-07 18:32:01', '2018-05-19 00:00:00'),
(3, 'javascript คืออะไร', 'javascript คือภาษาคอมพิวเตอร์สำหรับการเขียนโปรแกรมบนระบบอินเทอร์เน็ต', '<p>JavaScript คือ ภาษาคอมพิวเตอร์สำหรับการเขียนโปรแกรมบนระบบอินเทอร์เน็ต ที่กำลังได้รับความนิยมอย่างสูง Java JavaScript เป็น ภาษาสคริปต์เชิงวัตถุ (ที่เรียกกันว่า &quot;สคริปต์&quot; (script) ซึ่งในการสร้างและพัฒนาเว็บไซต์ (ใช่ร่วมกับ HTML) เพื่อให้เว็บไซต์ของเราดูมีการเคลื่อนไหว สามารถตอบสนองผู้ใช้งานได้มากขึ้น ซึ่งมีวิธีการทำงานในลักษณะ &quot;แปลความและดำเนินงานไปทีละคำสั่ง&quot; (interpret) หรือเรียกว่า อ็อบเจ็กโอเรียลเต็ด (Object Oriented Programming) ที่มีเป้าหมายในการ ออกแบบและพัฒนาโปรแกรมในระบบอินเทอร์เน็ต สำหรับผู้เขียนด้วยภาษา HTML สามารถทำงานข้ามแพลตฟอร์มได้ โดยทำงานร่วมกับ ภาษา HTML และภาษา Java ได้ทั้งทางฝั่งไคลเอนต์ (Client) และ ทางฝั่งเซิร์ฟเวอร์ (Server)</p>\r\n', 'javascript.jpg', 'all,javascript', 'true', '2018-12-14 16:16:39', '2018-05-25 00:00:00'),
(4, 'PHP คืออะไร', 'PHP คือภาษาคอมพิวเตอร์จำพวก scripting language', '<h1>PHP คืออะไร</h1>\r\n\r\n<p>PHP คือภาษาคอมพิวเตอร์จำพวก scripting language ภาษาจำพวกนี้คำสั่งต่างๆจะเก็บอยู่ในไฟล์ที่เรียกว่า script และเวลาใช้งานต้องอาศัยตัวแปรชุดคำสั่ง ตัวอย่างของภาษาสคริปก็เช่น&nbsp;JavaScript&nbsp;, Perl เป็นต้น ลักษณะของ PHP ที่แตกต่างจากภาษาสคริปต์แบบอื่นๆ คือ PHP ได้รับการพัฒนาและออกแบบมา เพื่อใช้งานในการสร้างเอกสารแบบ&nbsp;HTML&nbsp;โดยสามารถสอดแทรกหรือแก้ไขเนื้อหาได้โดยอัตโนมัติ ดังนั้นจึงกล่าวว่า PHP เป็นภาษาที่เรียกว่า server-side หรือ HTML-embedded scripting language นั้นคือในทุกๆ ครั้งก่อนที่เครื่องคอมพิวเตอร์ซึ่งให้บริการเป็น&nbsp;Web server&nbsp;จะส่งหน้าเว็บเพจที่เขียนด้วย PHP ให้เรา มันจะทำการประมวลผลตามคำสั่งที่มีอยู่ให้เสร็จเสียก่อน แล้วจึงค่อยส่งผลลัพธ์ที่ได้ให้เรา ผลลัพธ์ที่ได้นั้นก็คือเว็บเพจที่เราเห็นนั่นเอง&nbsp;&nbsp;ถือได้ว่า PHP เป็นเครื่องมือที่สำคัญชนิดหนึ่งที่ช่วยให้เราสามารถสร้าง Dynamic Web pages (เว็บเพจที่มีการโต้ตอบกับผู้ใช้) ได้อย่างมีประสิทธิภาพและมีลูกเล่นมากขึ้น&nbsp;</p>\r\n\r\n<p>ลักษณะเด่นของ PHP</p>\r\n\r\n<ol>\r\n	<li>ใช้ได้ฟรี</li>\r\n	<li>PHP เป็นโปร แกรมวิ่งข้าง Sever ดังนั้นขีดความสามารถไม่จำกัด&nbsp;</li>\r\n	<li>Conlatfun นั่นคือPHP วิ่งบนเครื่อง UNIX,Linux,Windows ได้หมด</li>\r\n	<li>เรียนรู้ง่าย เนืองจาก PHP ฝั่งเข้าไปใน HTML และใช้โครงสร้างและไวยากรณ์ภาษาง่ายๆ</li>\r\n	<li>เร็วและมีประสิทธิภาพ โดยเฉพาะเมือใช้กับ Apach Xerve เพราะไม่ต้องใช้โปรแกรมจากภายนอก</li>\r\n	<li>ใช้ร่วมกับ XML ได้ทันที</li>\r\n	<li>ใช้กับระบบแฟ้มข้อมูลได้</li>\r\n	<li>ใช้กับข้อมูลตัวอักษรได้อย่างมีประสิทธิภาพ</li>\r\n	<li>ใช้กับโครงสร้างข้อมูล แบบ Scalar,Array,Associative array</li>\r\n	<li>ใช้กับการประมวลผลภาพได้</li>\r\n</ol>\r\n', 'php.jpg', 'all,php', 'true', '2018-10-18 00:00:00', '2018-10-18 00:00:00'),
(8, 'เขียนติดกันนะครับโดยไม่เว้นวรรคเลยเขียนติดกันนะครับโดยไม่เว้นวรรคเลยเขียนติดกันนะครับโดยไม่เว้นวรรคเลยเขียนติดกันนะครับโดยไม่เว้นวรรคเลยเขียนติดกันนะครับโดยไม่เว้นวรรคเลย', 'ทดลองเพิ่มบทความเขียนติดกันนะครับโดยไม่เว้นวรรคเลยดูซิว่ามันจะแบ่งบรรทัดยังไงเขียนติดกันนะครับโดยไม่เว้นวรรคเลยดูซิว่ามันจะแบ่งบรรทัดยังไงเขียนติดกันนะครับโดยไม่เว้นวรรคเลยดูซิว่ามันจะแบ่งบรรทัดยังไงเขียนติดกันนะครับโดยไม่เว้นวรรคเลยดูซิว่ามันจะแบ่งบรรทัด', '<p>This is my textarea to be Create Contents.</p>\r\n\r\n<p>ทดลองเพิ่มบทความ heem1</p>\r\n\r\n<p>ใส่รูปตรงนี้</p>\r\n\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./assets/images/upload/source/new%20sticker-02.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./assets/images/upload/source/school-1200_600px.jpg\" style=\"width:100%\" /></p>\r\n', '15446199488348.jpg', 'all,css,javascript', 'true', '2018-12-17 11:33:33', '2018-12-14 15:00:26'),
(9, 'รูปลูกสาว', 'น้องฟาเรีย', '<p>วันในความส่งจำ</p>\r\n', '15446227597433.jpg', 'all,javascript', 'true', '2018-12-14 19:00:17', '2018-12-14 15:47:17'),
(11, 'test001', 'test0010', '<p>test001</p>\r\n', '15446343951257.jpg', 'all,html,css,php,mysql', 'true', '2018-12-14 19:01:14', '2018-12-14 19:01:14'),
(12, 'ทดลองสร้างบทความเพิ่มวันเสาร์ 1', 'อธิบาย ทดลองสร้างบทความเพิ่มวันเสาร์ 1', '<p><strong>This is my textarea to be Create Contents. ตัวหนานะ</strong></p>\r\n\r\n<p>ทดลองสร้างบทความเพิ่มวันเสาร์ 1</p>\r\n\r\n<p>ใส่รูปตรงนี้</p>\r\n\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./assets/images/upload/source/school-1200_600px.jpg\" style=\"height:1260px; width:2400px\" /></p>\r\n', '15446799180666.jpg', 'all,', 'true', '2018-12-15 07:40:37', '2018-12-15 07:40:01'),
(13, 'test', 'test', '<p style=\"text-align:center\"><span style=\"color:#3498db\"><span style=\"font-size:48px\"><strong>blog test</strong></span></span></p>\r\n', '15446920992834.jpg', 'all,javascript,php', 'true', '2018-12-15 11:03:03', '2018-12-15 11:03:03'),
(14, 'Subject', 'Sub title', '<p><img alt=\"\" class=\"img-fluid\" src=\"./assets/images/upload/source/newfd/1947256ufii8i50re8kuu0.jpg\" />This is my textarea to be Create Contents.</p>\r\n', '15447135792308.png', 'all,', 'true', '2018-12-15 17:02:44', '2018-12-15 17:01:06'),
(15, 'topza', 'test', '<p>This is my textarea to be Create Contents.</p>\r\n', '15447307476659.png', 'all,html,css,javascript,php,mysql', 'true', '2018-12-15 21:47:16', '2018-12-15 21:47:16'),
(16, '“What is User Acceptance Test” “มาทำความรู้จัก กับ User Acceptance Test กันเถอะ”', 'SIT > UAT > Regresstion > Sanity', '<p>หลังจากที่ทิ้งท้ายกันไว้คราวก่อน ก็ถึงเวลาแล้วที่จะมารู้จักความหมายของ User Acceptance Test รวมถึงประเด็นสำคัญที่น่าสนใจอะไรบ้าง</p>\r\n\r\n<p><strong>What is &ldquo;User Acceptance Test&rdquo;</strong></p>\r\n\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./assets/images/upload/source/stock-photo-user-acceptance-test-uat-process-diagram-concept-on-white-background-490599709.jpg\" style=\"height:294px; width:400px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>จากประสบการณ์การทำงานของผู้เขียนโดยตรงในงาน UAT ผู้เขียนจึงได้กลั่นกรองและขอนำเสนอความหมายของ UAT ว่าเป็นอย่างนี้ค่ะ</p>\r\n\r\n<p><strong>&ldquo;User Acceptance Test&rdquo;</strong>&nbsp;เป็นกระบวนการทดสอบระบบขั้นตอนสุดท้ายเพื่อให้แน่ใจว่า ระบบที่พัฒนาพร้อมที่จะใช้งานได้จริง ตรงตามกระบวนการทาง ธุรกิจ (Business Process) และความต้องการของผู้ใช้งานที่ได้กำหนดไว้ (Software Requirements) โดยผลลัพธ์การทดสอบจะต้องเป็นไปตามเงื่อนไขความสมบูรณ์ของระบบที่ควรจะเป็นและสามารถยอมรับได้(Acceptance Criteria) ซึ่งได้ร่วมกันกำหนดขึ้นระหว่างผู้ใช้งานระบบกับทีมงานพัฒนาระบบรวมถึงส่วนงานอื่นๆ ที่เกี่ยวข้อง</p>\r\n\r\n<p>การทดสอบระบบในขั้นตอนนี้มีจุดที่สำคัญซึ่งแตกต่างจากการทดสอบขั้นตอนอื่นคือ ผู้ใช้งานระบบจริงจะต้องเข้ามามีส่วนร่วมในกระบวนการทดสอบโดยเริ่มตั้งแต่ กำหนดกรณีทดสอบ(Test Case/Scenario) ร่วมทดสอบระบบ(Executes Test) จนถึง การประเมินและสรุปผลการทดสอบ(UAT Result and Evaluation) และตัดสินใจว่าระบบดังกล่าวจะสามารถนำไปใช้งานจริงได้หรือไม่ ถ้าได้ก็จะมีการลงนามอนุมัติจากผู้ใช้งานเป็นลายลักษณ์อักษร(UAT Sign Off) เพื่อนำระบบไปใช้งานจริง แต่ถ้าไม่ได้ ระบบจะถูกนำไปปรับปรุงแก้ไข แล้วจะกลับเข้าสู่กระบวนการ UAT อีกครั้ง จนกระทั่งเป็นที่ยอมรับของทุกฝ่ายว่าสามารถนำระบบใช้งานจริงได้</p>\r\n\r\n<p>โดยที่สภาพแวดล้อมในการทำ UAT (UAT/Test Environment) จะต้องเป็นสภาพแวดล้อมที่เหมือนหรือใกล้เคียงมากที่สุด กับสภาพแวดของการใช้งานจริง (Hardware/Software/Data on Production Environment) เพื่อให้การทดสอบใกล้เคียงกับการทำงานจริงมากที่สุดและได้ผลผลการทดสอบที่น่าเชื่อถือ</p>\r\n\r\n<p>ผู้เขียนจะขอขยายความและพูดถึงรายละเอียดในส่วนต่างๆ ที่กล่าวมา ในตอนต่อๆ ไปนะค๊า&nbsp;:flirty:</p>\r\n\r\n<p><strong><em>&ldquo;A journey of a thousand miles begins with a single step&rdquo;</em></strong></p>\r\n\r\n<p><strong><em>A good start is half of the success</em></strong></p>\r\n\r\n<p><strong><em>LeeFong&hellip;</em></strong></p>\r\n', '15449735956681.jpg', 'all,', 'true', '2018-12-18 17:18:35', '2018-12-18 17:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `status` enum('true','false') NOT NULL DEFAULT 'false',
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `detail`, `status`, `created_at`) VALUES
(1, 'appzstory', '099999999', 'test@test', 'สวัสดีครับ ผมสนใจคอร์สเรียน', 'true', '2018-06-01'),
(4, 'test', '0555555555', 'test@test', 'test', 'true', '2018-06-05'),
(5, 'appzstory studio', '032333522', 'admin@admin.com', 'สวัสดีครับ สนใจคอร์สเรียนเขียนเว็บไซต์', 'true', '2018-06-05'),
(6, 'edfefef', '59789898', 'efef@dfsef', 'sfefsefsef', 'true', '2018-06-05'),
(7, 'wefwef', '454654654', '4f68e46f@sdfsf', 'sdfsdf', 'true', '2018-06-05'),
(8, 'sdfsdf', '54654654', '46546@sdfsdf4564', 'sdfsdfsdfsdf', 'true', '2018-06-05'),
(9, 'eeee', '54654654', '54654@sdfsdf', 'sdfsddddd', 'true', '2018-06-05'),
(10, 'appzstory', '06666666', '06@admin', 'สนใจคอร์สเรียน', 'true', '2018-06-05'),
(11, 'fgdfgd', 'fgdfgdfg', 'dfgdg@sefrsdfsdf', 'sdfsdfsdf', 'true', '2018-06-05'),
(12, 'efwef', '08680745081', 'efwe@dsfsdf', 'sdfsdf', 'true', '2018-06-24'),
(13, 'sdf', 'sdf', 'sdf@sdfsdf', 'sdfsdf', 'true', '2018-08-01'),
(14, 'eeeeeeeeee', '086806506', 'sdfsdf@sdfsdf', 'sdfsefwegwgweg', 'true', '2018-08-01'),
(15, 'sdf', '564564654', 'sdfsdf@sdfsdf', 'sdf', 'true', '2018-08-01'),
(16, 'efwefwef', '546654654', 'sdfsdf@sdf546sdf', 'sdfwefgwef', 'true', '2018-08-01'),
(17, 'sdfsdf', '54654', 'sdfsdf564@sdfsdf', 'sdfwsewfgweg', 'true', '2018-08-01'),
(18, 'appzstory', '08680000000', 'appz@gmail.com', 'ข้อความมาแล้ววววว', 'true', '2018-08-01'),
(19, 'sdf', '05650606', 'sdfsdf@sdfsdf', 'sdfsdfewgw', 'true', '2018-08-01'),
(20, 'fefef', '065506', 'fsdf@sdfsdf', 'sfewgweg', 'true', '2018-08-01'),
(21, 'ewfwe', 'fefwe', 'fwef@sdf', 'sdfswef', 'true', '2018-08-01'),
(22, 'พระครูพิศาลกิจจานุรักษ์', '0854935999', 'kanta227@gmail.com', 'ทดสอบส่งข้อความ เจริญพร', 'true', '2018-08-01'),
(23, 'dsf', '04650465', 'sdfsdf@sedfsdf', 'sdfsdf', 'true', '2018-08-24'),
(24, 'test', '1232312321', 'testad@asdsads', 'asdsadwdasd', 'true', '2018-08-24'),
(25, 'chaiyapote nuntapreecha', '853609391', 'chaiyapoteza@gmail.com', 'daD', 'true', '2018-09-26'),
(26, 'ddd', '06565060', '065@sdfrsf.sdfsf', 'sdfsdfsdfdfgfg', 'true', '2018-12-09'),
(27, 'appzstory', '055-555555555', '555@dfsdfsdf.sdfdsf', 'สนใจสมัครคอร์สเรียน', 'true', '2018-12-09'),
(28, 'appzstory', '999-999999', 'App@pp.com', 'สนใจคอร์สเรียนเขียนเว็บไซต์', 'true', '2018-12-10'),
(29, 'กก', 'กกกกก', 'dsfsdf@sdfsdf', 'sdfsdfsdf', 'true', '2018-12-14'),
(30, 'dolroheem panwang', '869604184', 'dolroheem@hotmail.com', 'ทดสอบส่งข้อความ sClass1 \r\n14 ธันวาคม 2561', 'true', '2018-12-14'),
(31, 'test', '099999999', 'test@test.com', 'test', 'true', '2018-12-14'),
(32, 'เจ๊ะฮาลิต  ปะดุกา', '085-7868384', 'App.ghehalid@gmail.com', 'ทดลองระบบ', 'true', '2018-12-14'),
(33, 'a', '022222', '123aa@gmail.com', 'test system', 'true', '2018-12-14'),
(34, 'chaiyapote', '0853609391', 'chaiyapoteza@gmail.com', 'rr', 'true', '2018-12-14'),
(35, 'Thanapong สมใจ', '085690000', 'test@test.test', 'Hello สวัสดี', 'true', '2018-12-14'),
(36, 'lock2015', '0900418065', 'edpbp2018@gmail.com', 'ssssss', 'true', '2018-12-14'),
(37, 'hghgh', '96589098', 'hghfghgf@edfdf.com', 'efrewfwef', 'true', '2018-12-14'),
(38, 'sarawut kedtarwon', '0985865881', 'sarawut@cpru.ac.th', 'สวัสดีครับ ทดสอบครับ\r\n', 'true', '2018-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlogs`
--

INSERT INTO `userlogs` (`id`, `ip`, `device`, `os`, `browser`, `page`, `created_at`) VALUES
(6, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 11:29:53'),
(7, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 11:29:58'),
(8, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 11:30:01'),
(9, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 11:30:04'),
(10, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 11:30:06'),
(12, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:27:13'),
(13, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:27:16'),
(14, '127.0.0.1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 17:27:18'),
(15, '127.0.0.1', 'iPhone', 'iPhone', 'orthers browser', 'index', '2018-12-31 17:27:19'),
(16, '127.0.0.1', 'Android Phone', 'Android', 'Chrome', 'contact', '2018-12-31 17:27:20'),
(17, '::1', 'Android Phone', 'Android', 'Chrome', 'blog', '2018-12-31 17:28:29'),
(18, '::1', 'Android Phone', 'Android', 'Chrome', 'blog', '2018-12-31 17:28:32'),
(19, '::1', 'Android Phone', 'Android', 'Chrome', 'blog', '2018-12-31 17:28:33'),
(20, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:28:35'),
(21, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:28:35'),
(22, '::1', 'Android Phone', 'Android', 'Chrome', 'blog', '2018-12-31 17:28:36'),
(23, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:28:37'),
(24, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 17:28:45'),
(25, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 17:28:48'),
(26, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:29:03'),
(27, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:44:52'),
(28, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:44:56'),
(29, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 17:45:03'),
(30, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 17:45:08'),
(31, '::1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 17:45:14'),
(32, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:34:53'),
(33, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:34:56'),
(34, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:34:58'),
(35, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:35:00'),
(36, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:35:00'),
(37, '::1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:35:20'),
(38, '::1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:35:27'),
(39, '::1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:35:29'),
(40, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:41:51'),
(41, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:41:54'),
(42, '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:41:55'),
(43, '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:41:56'),
(44, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:41:56'),
(45, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:41:58'),
(46, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:42:00'),
(47, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:42:01'),
(48, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:42:04'),
(49, '::1', 'Computer', 'Windows 10', 'Chrome', 'blog-detail', '2018-12-31 20:42:07'),
(50, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:50:51'),
(51, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:50:53'),
(52, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:51:06'),
(53, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:51:07'),
(54, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:51:08'),
(55, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:51:09'),
(56, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:51:10'),
(57, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:51:10'),
(58, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:51:16'),
(59, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:52:10'),
(60, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'blog', '2018-12-31 20:52:18'),
(61, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'about', '2018-12-31 20:52:25'),
(62, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:52:25'),
(63, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 20:52:26'),
(64, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'contact', '2018-12-31 20:52:30'),
(65, '110.169.168.161', 'Computer', 'Windows 10', 'Chrome', 'index', '2018-12-31 21:00:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
