-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2018 at 08:42 PM
-- Server version: 5.6.35
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `small_content` varchar(250) DEFAULT NULL,
  `detailed_content` text,
  `customer_support` varchar(250) DEFAULT NULL,
  `customer_support_detail` varchar(250) DEFAULT NULL,
  `customer_support_no` varchar(250) DEFAULT NULL,
  `caption_1` varchar(250) DEFAULT NULL,
  `caption_1_detail` varchar(250) DEFAULT NULL,
  `caption_2` varchar(250) DEFAULT NULL,
  `caption_2_detail` varchar(250) DEFAULT NULL,
  `caption_3` varchar(250) DEFAULT NULL,
  `caption_3_detail` varchar(250) DEFAULT NULL,
  `caption_4` varchar(250) DEFAULT NULL,
  `caption_4_detail` varchar(250) DEFAULT NULL,
  `caption_5` varchar(250) DEFAULT NULL,
  `caption_5_detail` varchar(250) DEFAULT NULL,
  `caption_6` varchar(250) DEFAULT NULL,
  `caption_6_detail` varchar(250) DEFAULT NULL,
  `about_image` varchar(250) DEFAULT NULL,
  `about_image_alt` varchar(250) DEFAULT NULL,
  `working_time` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `small_content`, `detailed_content`, `customer_support`, `customer_support_detail`, `customer_support_no`, `caption_1`, `caption_1_detail`, `caption_2`, `caption_2_detail`, `caption_3`, `caption_3_detail`, `caption_4`, `caption_4_detail`, `caption_5`, `caption_5_detail`, `caption_6`, `caption_6_detail`, `about_image`, `about_image_alt`, `working_time`) VALUES
(1, 'Welcome to NEW BHARATH TYRES. New Bharath Tyres offers a complete range of Tyres, Alloy-wheels and modern tyre services.', 'NewBharath Tyres, the pioneers in tyre retailing with over 60 years of excellence has been accredited the No.1 dealer by world’s leading tyre manufacturers.\r\n\r\nNewBharath Tyres, the tyre retailer with a chain of outlets all over Kerala facilitates to cater the World-Class products and services all under one roof. Best products, latest machinery, sound management, financial stability, experienced and technically qualified workforce and quality control practice is the specialty of NewBharath Tyres. From world’s best Tyres to Alloy wheels and latest wheel alignment and balancing technology and specialized services like alloy wheel fitment, nitrogen-air, NewBharath Tyres offers you unmatchable international service. NewBharath Tyres takes maximum effort and is successful in bringing the lastest service technologies before any other, in town. NewBharath Tyres has been capable in bringing new standards and trends in tyre-retailing in India for the customers with truly world class services and facilities which is not available anywhere in India. NewBharath Tyres, through an unwavering commitment and dedication won the trust and confidence of a legion of loyal customers of over 2 million and still counting.', '24/7 FREE CUSTOMER SUPPORT.', 'New Bharath Pitstop is your ONE STOP solution bringing best car services.', '800PITSTOP (7487867)', '100% TRANSPARENCY', 'We ensure that you get a well detailed break-up of each minor repair work', 'GENUINE SPARE PARTS', 'We useuthorized genuine spare parts & accessories to ensure that your', 'TRUSTED & QUALITY SERVICE', 'You can avail our free pickup & drop so that you can just sit & relax', 'FRIENDLY & HELPFULL TEAM', 'We are a friendly & helpful professional group of people in autocare.', 'FREE PICKUP & DROP', 'You can avail our free pickup & drop so that you can just sit & relax.', 'ZERO UPSELLING', 'You can see servicing cost upfront our Service Calculator. Only additional.', '', 'About NBT', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_history`
--

CREATE TABLE IF NOT EXISTS `about_history` (
  `id` int(11) NOT NULL,
  `year` varchar(250) DEFAULT NULL,
  `event` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `image` varchar(250) DEFAULT NULL,
  `image_alt_tag` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_posts`
--

CREATE TABLE IF NOT EXISTS `admin_posts` (
  `id` int(11) NOT NULL,
  `post_name` varchar(280) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `cms_contents` int(11) DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` datetime DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_posts`
--

INSERT INTO `admin_posts` (`id`, `post_name`, `admin`, `cms_contents`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Super Admin', 1, 1, 1, 1, 13, '2017-03-09 00:00:00', '2017-03-28 10:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `employee_code` varchar(280) DEFAULT NULL,
  `user_name` varchar(280) DEFAULT NULL,
  `password` varchar(280) DEFAULT NULL,
  `name` varchar(280) DEFAULT NULL,
  `email` varchar(280) DEFAULT NULL,
  `phone_number` varchar(280) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` datetime DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `post_id`, `employee_code`, `user_name`, `password`, `name`, `email`, `phone_number`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 1, '005', 'testing', '$2y$13$exuFl1k5EZGEyEkDjNPsqOhAtgIHP/t1ot6NPtJA5weKW4ffwhryu', 'Apachia', 'test@gmail.com', '9876543210', 1, 10, 1, '2017-03-16 00:00:00', '2017-12-31 04:40:16'),
(3, 1, '335', 'surumi', '$2y$13$ZnTscgSd60nVbEbX2BPl7uqQMShljzqJ.0/s3qts1P.Eq.WA6drhS', 'surumi', 'surumi@gmail.com', '965685444', 1, 1, NULL, '2017-06-13 00:00:00', '2017-06-13 05:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `alloy_wheels`
--

CREATE TABLE IF NOT EXISTS `alloy_wheels` (
  `id` int(11) NOT NULL,
  `brand` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `spec_1` varchar(250) DEFAULT NULL,
  `spec_1_value` varchar(250) DEFAULT NULL,
  `spec_2` varchar(250) DEFAULT NULL,
  `spec_2_value` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `alt_tag` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` int(11) DEFAULT NULL,
  `DOU` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alloy_wheels`
--

INSERT INTO `alloy_wheels` (`id`, `brand`, `type`, `spec_1`, `spec_1_value`, `spec_2`, `spec_2_value`, `image`, `alt_tag`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 8, NULL, 'Size', '165/60R141', 'Type', ' Good Performance', 'jpg', 'alloy wheel', 1, NULL, 1, NULL, NULL),
(2, 9, NULL, 'Size', '165/60R142', 'Type', 'Good Performance', 'jpg', 'alloy wheels2', 1, 1, NULL, 2018, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `batteries`
--

CREATE TABLE IF NOT EXISTS `batteries` (
  `id` int(11) NOT NULL,
  `content` text,
  `specifications` text,
  `image` varchar(250) DEFAULT NULL,
  `image_alt_tag` varchar(250) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batteries`
--

INSERT INTO `batteries` (`id`, `content`, `specifications`, `image`, `image_alt_tag`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Type:Maintenance-free Type,Rated Voltage:12V,Charging Voltage:	16V,Working Voltage:	12V,Charging Type:Constant Voltage,Wet Shelf Life:2~3Year\r\n', 'jpg', 'batteries', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1=tyre,2=alloy,3=batteries',
  `title` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `home_page` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `type`, `title`, `image`, `home_page`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 1, 'bridgestone', 'png', 1, 1, 1, 1, '2018-06-12', NULL),
(2, 1, 'apollo', 'png', 1, 1, 1, 1, '2018-06-12', NULL),
(3, 1, 'Michellin', 'png', 1, 1, 1, NULL, '2018-06-14', NULL),
(4, 1, 'Continental', 'png', 1, 1, 1, NULL, '2018-06-14', NULL),
(5, 1, 'BFGoodrich', 'png', 1, 1, 1, NULL, '2018-06-14', NULL),
(6, 1, 'maxxis', 'png', 1, 1, 1, NULL, '2018-06-14', NULL),
(7, 1, 'Firestone', 'png', 1, 1, 1, NULL, '2018-06-14', NULL),
(8, 2, 'test', 'jpg', 0, 1, 1, NULL, '2018-06-14', NULL),
(9, 2, 'test2', 'jpg', 0, 1, 1, NULL, '2018-06-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brochures`
--

CREATE TABLE IF NOT EXISTS `brochures` (
  `id` int(11) NOT NULL,
  `brochure` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brochures`
--

INSERT INTO `brochures` (`id`, `brochure`, `name`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(2, 'pdf', NULL, 1, 1, NULL, '2018-06-14', NULL),
(3, 'pdf', '2.pdf', 1, 1, NULL, '2018-06-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_meta_tags`
--

CREATE TABLE IF NOT EXISTS `cms_meta_tags` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_description` longtext,
  `meta_keyword` longtext,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `page_title` varchar(200) DEFAULT NULL,
  `page_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_meta_tags`
--

INSERT INTO `cms_meta_tags` (`id`, `meta_title`, `meta_description`, `meta_keyword`, `CB`, `UB`, `DOC`, `DOU`, `page_title`, `page_url`) VALUES
(1, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-12 09:42:01', 'Home', ''),
(2, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-12 09:42:01', 'About', ''),
(3, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-14 20:35:58', 'Tyres', ''),
(4, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-14 20:36:21', 'Tyres Detail', ''),
(5, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-14 20:36:32', 'Alloy Wheels', ''),
(6, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-14 20:36:48', 'Batteries', ''),
(7, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-12 09:42:01', 'Contact', ''),
(8, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-14 20:37:07', 'Services', ''),
(9, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-14 20:37:22', 'Privilege', ''),
(10, 'New Bharath Pitstop', '', '', NULL, NULL, NULL, '2018-06-14 20:37:33', 'Offers', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_address`
--

CREATE TABLE IF NOT EXISTS `contact_address` (
  `id` int(11) NOT NULL,
  `phone1` varchar(20) DEFAULT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `map` varchar(250) DEFAULT NULL,
  `get_in_touch` text,
  `map_link` varchar(250) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `google_plus` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_address`
--

INSERT INTO `contact_address` (`id`, `phone1`, `phone2`, `email`, `address`, `map`, `get_in_touch`, `map_link`, `facebook`, `twitter`, `google_plus`, `instagram`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, '042630606', '00919 20 7627 575', 'dubai@newbharathtyres.com', 'P.O BOX 186887 DUBAI, UAEy', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.80587322747!2d55.383802315011245!3d25.277114983859093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c374c83da3d%3A0x95fef0a91c98e7f5!2sNew+Bharath+PITSTOP+(New+Bharath', 'There are many variations off passages of available, but the majority have suffered alterations in some form, by injected humour look events slightly seds do eiusmod tempor incididunt ut labore.', 'https://www.google.co.in/maps/place/New+Bharath+PITSTOP+(New+Bharath+Tyres)/@25.277115,55.385991,15z/data=!4m5!3m4!1s0x0:0x95fef0a91c98e7f5!8m2!3d25.277115!4d55.385991', 'https://facebook.com', 'https://twitter.com', 'https://plus.google.com', 'https://www.instagram.com', 1, NULL, 1, NULL, '2018-06-14 06:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text,
  `date` date DEFAULT NULL,
  `website_url` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `portfolio` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `message`, `date`, `website_url`, `last_name`, `company_name`, `country`, `portfolio`) VALUES
(1, 'fgdfg', 'ads@rtrt.llll', '55757', 'ghgjghjhgj', '2018-06-06', NULL, 'fdgfd', 'bbbbbbbbbbb', 'cvxc', 2),
(2, 'fgdfg', 'ads@rtrt.llll', '55757', 'ghgjghjhgj', '2018-06-06', NULL, 'fdgfd', 'bbbbbbbbbbb', 'cvxc', 2),
(3, 'Sabitha Varghese', 'sabitha@azryah.com', '9645419602', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem', '2018-06-06', 'azryah.com', NULL, NULL, NULL, NULL),
(5, 'Andreya Shibu', 'ann@gmail.com', '9567795504', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit ', '2018-06-06', NULL, NULL, NULL, NULL, NULL),
(6, 'qqqqq', 'qqq@ee.gg', '2323', 'zxxzx', '2018-06-14', 'wqwq', NULL, NULL, NULL, NULL),
(7, 'qqqqq', 'qqq@ee.gg', '2323', 'zxxzx', '2018-06-14', 'wqwq', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password_tokens`
--

CREATE TABLE IF NOT EXISTS `forgot_password_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_page_other`
--

CREATE TABLE IF NOT EXISTS `home_page_other` (
  `id` int(11) NOT NULL,
  `banner_label` varchar(250) DEFAULT NULL,
  `welcome_note` varchar(250) DEFAULT NULL,
  `small_content` varchar(250) DEFAULT NULL,
  `detail_content` varchar(250) DEFAULT NULL,
  `caption_1` varchar(250) DEFAULT NULL,
  `caption_1_detail` varchar(250) DEFAULT NULL,
  `caption_2` varchar(250) DEFAULT NULL,
  `caption_2_detail` varchar(250) DEFAULT NULL,
  `caption_3` varchar(250) DEFAULT NULL,
  `caption_3_detail` varchar(250) DEFAULT NULL,
  `footer_content` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_page_other`
--

INSERT INTO `home_page_other` (`id`, `banner_label`, `welcome_note`, `small_content`, `detail_content`, `caption_1`, `caption_1_detail`, `caption_2`, `caption_2_detail`, `caption_3`, `caption_3_detail`, `footer_content`) VALUES
(1, 'Get First Class Services For Your Vechcle', 'Welcome to New Bharath Tyres', 'Welcome to NEW BHARATH TYRES. New Bharath Tyres offers a complete range of Tyres, Alloy-wheels and modern tyre services.', 'The Best quality products and 100% customer satisfaction at unbeatable price . NewBharath Tyres, the pioneers in tyre retailing with over 60 years of excellence has been accredited the No.1 dealer by world’s leading tyre manufacturers.', '100% Transparency', 'We ensure that you get a well detailed break-up of each minor repair work', 'Genuine Spare Parts', 'We useuthorized genuine spare parts & accessories to ensure that your', 'Trusted & Quality Service', 'You can avail our free pickup & drop so that you can just sit & relax', 'Welcome to NEW BHARATH TYRES. New Bharath Tyres offers a complete range of Tyres, Alloy-wheels and modern tyre services. The Best quality products and 100% customer satisfaction at unbeatable price .NewBharath Tyres, the pioneers in tyre retailing with over 60 years of excellence has been accredited the No.1 dealer by world’s leading tyre manufacturers. ');

-- --------------------------------------------------------

--
-- Table structure for table `home_privilege`
--

CREATE TABLE IF NOT EXISTS `home_privilege` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL,
  `privilege_1` varchar(250) DEFAULT NULL,
  `privilege_2` varchar(250) DEFAULT NULL,
  `privilege_3` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `alt_tag` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_privilege`
--

INSERT INTO `home_privilege` (`id`, `title`, `content`, `privilege_1`, `privilege_2`, `privilege_3`, `image`, `alt_tag`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'RIDE ON YOUR PRIVILEGES', 'Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Mar 7, 2018 - Terms and Conditions are a set of rules and guidelines that a user must agre', 'SILVER SELECT PRIVILEGES', 'GOLD SELECT PRIVILEGES', 'PLATINUM SELECT PRIVILEGES', 'jpg', 'RIDE ON YOUR PRIVILEGES', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `off` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `alt_tag` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `off`, `image`, `alt_tag`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(2, 'off', 50, 'jpg', 'offer1', 1, 1, 1, '2018-06-12', NULL),
(3, 'Wheel Alignment', 50, 'jpg', 'Offer 1', 1, 1, NULL, '2018-06-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_products`
--

CREATE TABLE IF NOT EXISTS `our_products` (
  `id` int(11) NOT NULL,
  `title_1` varchar(250) DEFAULT NULL,
  `image_1` varchar(250) DEFAULT NULL,
  `description_1` varchar(250) DEFAULT NULL,
  `title_2` varchar(250) DEFAULT NULL,
  `image_2` varchar(250) DEFAULT NULL,
  `description_2` varchar(250) DEFAULT NULL,
  `title_3` varchar(250) DEFAULT NULL,
  `image_3` varchar(250) DEFAULT NULL,
  `description_3` varchar(250) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_products`
--

INSERT INTO `our_products` (`id`, `title_1`, `image_1`, `description_1`, `title_2`, `image_2`, `description_2`, `title_3`, `image_3`, `description_3`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'TYRES', 'jpg', 'We should point out that maintaining your vehiclewith an occasional visual inspectionfluid level.', 'ALLOY WHEELS', 'jpg', 'We should point out that maintaining your vehiclewith an occasional visual inspectionfluid level.  READ MORE ALLOY WHEE', 'BATTERIES', 'jpg', 'We should point out that maintaining your vehiclewith an occasional visual inspectionfluid level.  READ MORE ALLOY WHEE', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE IF NOT EXISTS `our_services` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `specifications` text,
  `image` varchar(250) DEFAULT NULL,
  `image_alt` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `title`, `content`, `specifications`, `image`, `image_alt`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'WHEEL ALIGNMENT', 'Wheel Alignment, sometimes referred to as breaking or tracking, is part of standard automobile maintenance that consists of adjusting the angles of the wheels so that they are set to the car maker''s specification. The purpose of these adjustments is to reduce tyre wear, and to ensure that vehicle travel is straight and true (without "pulling" to one side). Alignment angles can also be altered beyond the maker''s specifications to obtain a specific handling characteristic. Motorsport and off-road applications may call for angles to be adjusted well beyond "normal" for a variety of reasons.', 'Wheel Installation,Wheel Allignment,Wheel Refinishing,Wheel Straightning,Wheel Balancing,Wheel Changing,Punchure Repair,Wheel Air Filling', 'jpg', 'WHEEL ALIGNMENT', 1, 1, NULL, '2018-06-14', NULL),
(2, 'WHEEL BALANCING', 'Every time a wheel is first mounted onto the axle with a new tyre, it has to be balanced. The goal is to make sure the weight is even around the axle. Wheel balance is checked on a wheel balancing machine that can sense as little as 1/4 ounce difference in weight around the wheel. Why worry about 1/4 ounce on a wheel that weighs many pounds? That tiny amount of weight is traveling very fast around the axle: hundreds of times a minute. It creates enough momentum to cause serious vibration. And when you multiply by 4 wheels, the wobble really adds up. Unbalanced tyres put uneven pressure on the treads.', 'Wheel Installation,Wheel Allignment,Wheel Balancing,Wheel Changing', 'jpg', 'WHEEL BALANCING', 1, 1, NULL, '2018-06-14', NULL),
(3, 'TYRE FITMENT', 'Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.', 'Wheel Installation,Wheel Straightning,Wheel Balancing,Wheel Air Filling', 'jpg', 'TYRE FITMENT', 1, 1, NULL, '2018-06-14', NULL),
(4, 'WHEEL CARE', 'Rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure', 'Wheel Installation,Wheel Straightning,Wheel Balancing,Wheel Air Filling', 'jpg', 'WHEEL CARE', 1, 1, NULL, '2018-06-14', NULL),
(5, 'NITROGEN AIR', 'Consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure Rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works', 'Wheel Installation,Wheel Allignment,Wheel Balancing,Wheel Changing', 'jpg', 'NITROGEN AIR', 1, 1, NULL, '2018-06-14', NULL),
(6, 'AIR CONDITIONING', 'Consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure Rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works', 'Wheel Installation,Wheel Allignment,Wheel Balancing,Wheel Changing', 'jpg', 'AIR CONDITIONING', 1, 1, NULL, '2018-06-14', NULL),
(7, 'BRAKES', 'Consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure Rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works', 'Wheel Installation,Wheel Allignment,Wheel Balancing,Wheel Changing', 'jpg', 'BRAKES', 1, 1, NULL, '2018-06-14', NULL),
(8, 'WINDOW TINTING', 'Consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure Rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works', 'Wheel Installation,Wheel Allignment,Wheel Balancing,Wheel Changing', 'jpg', 'WINDOW TINTING', 1, 1, NULL, '2018-06-14', NULL),
(9, 'CAR DETAILING', 'Consequencees that are uts extremelly painf pleasure ra sedssue pleasure rationally seds that encounter consequences are ut painfull.Know how to pursue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works consequencees that are uts extremelly painfull pleasure Rationally sedssue pleasure rationally seds that encounter consequences are ut painfull nor again is theounter works', 'Wheel Installation,Wheel Allignment,Wheel Balancing,Wheel Changing', 'jpg', 'CAR DETAILING', 1, 1, NULL, '2018-06-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE IF NOT EXISTS `privileges` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `image` varchar(250) DEFAULT NULL,
  `image_alt` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id`, `title`, `content`, `image`, `image_alt`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'SILVER SELECT PRIVILEGES', '<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n</ul>\r\n', 'jpg', 'SILVER SELECT PRIVILEGES', 1, 1, 1, '2018-06-13', NULL),
(2, 'Gold Select Privileges', '<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n</ul>\r\n', 'jpg', 'Gold Privilege', 1, 1, NULL, '2018-06-14', NULL),
(3, 'Platinum Select Privileges', '<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</li>\r\n</ul>\r\n', 'jpg', 'Platinum Select Privileges', 1, 1, NULL, '2018-06-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `canonical_name` varchar(250) DEFAULT NULL,
  `content` text,
  `gallery_iamge` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `canonical_name`, `content`, `gallery_iamge`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'WHEEL ALIGNMENT', 'wheel-alignment', '<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</span></p>\r\n\r\n<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</span></p>\r\n', 'Array', 1, 1, 1, '2018-06-14', NULL),
(2, 'Wheel Balancing', 'wheel-balancing', '<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</span></p>\r\n\r\n<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</span></p>\r\n', 'Array', 1, 1, NULL, '2018-06-14', NULL),
(3, 'Tyre Fitment', 'tyre-fitment', '<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</span></p>\r\n\r\n<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</span></p>\r\n', 'Array', 1, 1, NULL, '2018-06-14', NULL),
(4, 'Wheel Care', 'wheel-care', '<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</span></p>\r\n\r\n<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</span></p>\r\n', 'Array', 1, 1, NULL, '2018-06-14', NULL),
(5, 'Nitrogen Air', 'nitrogen-air', '<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</span></p>\r\n\r\n<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</span></p>\r\n', 'Array', 1, 1, NULL, '2018-06-14', NULL),
(6, 'Air Conditioning', 'air-conditioning', '<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</span></p>\r\n\r\n<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</span></p>\r\n', 'Array', 1, 1, NULL, '2018-06-14', NULL),
(7, 'Brakes', 'brakes', '<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</span></p>\r\n\r\n<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</span></p>\r\n', 'Array', 1, 1, NULL, '2018-06-14', NULL),
(8, 'Window Tinting', 'window-tinting', '<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</span></p>\r\n\r\n<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</span></p>\r\n', 'Array', 1, 1, NULL, '2018-06-14', NULL),
(9, 'Car Detailing', 'car-detailing', '<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</span></p>\r\n\r\n<p><span style="color:rgb(121, 121, 121); font-family:open sans,sans-serif; font-size:14px">Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.</span></p>\r\n', 'Array', 1, 1, NULL, '2018-06-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `title_1` varchar(250) DEFAULT NULL,
  `title_2` varchar(250) DEFAULT NULL,
  `title_3` varchar(250) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `alt_tag` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title_1`, `title_2`, `title_3`, `image`, `title`, `sub_title`, `alt_tag`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Tyres', 'New Bharath Tyres', 'The trusted experts will to keep you safe on the road, It is a long established fact that a reader will be distracted by the AuotoCare.', 'jpg', NULL, NULL, 'New Bharath Pitstop', 1, 1, 1, '2018-06-12', '2018-06-12 09:49:09'),
(2, 'Alloy Wheels', 'New Bharath Tyres', 'The trusted experts will to keep you safe on the road, It is a long established fact  that a reader will be distracted by the AuotoCare.', 'jpg', NULL, NULL, 'New Bharath Pitstop', 1, 1, 1, '2018-06-12', '2018-06-12 09:50:08'),
(3, 'Batteries', 'New Bharath Tyres', 'The trusted experts will to keep you safe on the road, It is a long established fact that a reader will be distracted by the AuotoCare.', 'jpg', NULL, NULL, 'New Bharath Pitstop', 1, 1, 1, '2018-06-12', '2018-06-12 09:50:51'),
(4, 'Wheel Alignment', 'New Bharath Tyres', 'The trusted experts will to keep you safe on the road, It is a long established fact that a reader will be distracted by the AuotoCare.', 'jpg', NULL, NULL, 'New Bharath Pitstop', 1, 1, 1, '2018-06-12', '2018-06-12 09:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'sabitha@azryah.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_condition`
--

CREATE TABLE IF NOT EXISTS `terms_and_condition` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms_and_condition`
--

INSERT INTO `terms_and_condition` (`id`, `title`, `content`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'TERMS AND CONDITIONS', '<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Mar 7, 2018 - Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app</p>\r\n\r\n<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Mar 7, 2018 - Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app</p>\r\n\r\n<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Mar 7, 2018 - Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app</p>\r\n\r\n<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Mar 7, 2018 - Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app</p>\r\n\r\n<p>Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Business Standard Mar 7, 2018 - Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app</p>\r\n', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1' COMMENT '1= Home page,2=Digital marketing',
  `marketing` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `content` text,
  `image` varchar(250) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `type`, `marketing`, `name`, `content`, `image`, `rating`, `link`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 1, NULL, 'SWAAN RICHARD', '<div class="item active" style="box-sizing: border-box; position: relative; transition: transform 0.6s ease-in-out; backface-visibility: hidden; perspective: 1000px; left: 0px; transform: translate3d(0px, 0px, 0px); color: rgb(121, 121, 121); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;">\r\n<div class="single-item" style="box-sizing: border-box;">\r\n<div class="content" style="box-sizing: border-box; display: table-cell; vertical-align: top; padding-left: 30px;">\r\n<p><span style="color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="button" style="box-sizing: border-box; left: 30px; margin-bottom: 23px; position: relative; top: 23px; color: rgb(121, 121, 121); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;">&nbsp;</div>\r\n', 'jpg', 4, 'Co Founder, BMW', 1, 1, '2018-06-12', NULL),
(2, 1, NULL, 'Sabitha Vargheese', '<p><span style="color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></p>\r\n', 'jpg', 3, 'Developer', 1, NULL, '2018-06-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tyres`
--

CREATE TABLE IF NOT EXISTS `tyres` (
  `id` int(11) NOT NULL,
  `brand` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `spec_1` varchar(250) DEFAULT NULL,
  `spec_1_value` varchar(250) DEFAULT NULL,
  `spec_2` varchar(250) DEFAULT NULL,
  `spec_2_value` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `alt_tag` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` int(11) DEFAULT NULL,
  `DOU` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tyres`
--

INSERT INTO `tyres` (`id`, `brand`, `type`, `spec_1`, `spec_1_value`, `spec_2`, `spec_2_value`, `image`, `alt_tag`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 1, 1, 'Size', '165/60R14', 'Type', 'Good Performance', 'jpg', 'Tyre1', 1, 1, NULL, 2018, NULL),
(2, 1, 1, 'Size', '165/60R14', 'Type', 'Good Performance', 'jpg', 'Tyre2', 1, 1, NULL, 2018, NULL),
(3, 1, 1, 'Size', '165/60R14', 'Type', 'Good Performance', 'jpg', 'Tyre3', 1, 1, NULL, 2018, NULL),
(4, 1, 0, 'Size', '165/60R14', 'Type', 'Good Performance', 'jpg', 'Tyre4', 1, 1, NULL, 2018, NULL),
(5, 1, 0, 'Size', '165/60R14', 'Type', 'Good Performance', 'jpg', 'Tyre5', 1, 1, NULL, 2018, NULL),
(6, 1, 0, 'Size', '165/60R14', 'Type', 'Good Performance', 'jpg', 'Tyre6', 1, 1, NULL, 2018, NULL),
(7, 1, 0, 'Size', '165/60R14', 'Type', 'Good Performance', 'jpg', 'Tyre7', 1, 1, NULL, 2018, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_history`
--
ALTER TABLE `about_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_posts`
--
ALTER TABLE `admin_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `fk-admin_users-post_id` (`post_id`);

--
-- Indexes for table `alloy_wheels`
--
ALTER TABLE `alloy_wheels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batteries`
--
ALTER TABLE `batteries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochures`
--
ALTER TABLE `brochures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_meta_tags`
--
ALTER TABLE `cms_meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_address`
--
ALTER TABLE `contact_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_other`
--
ALTER TABLE `home_page_other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_privilege`
--
ALTER TABLE `home_privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_products`
--
ALTER TABLE `our_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_condition`
--
ALTER TABLE `terms_and_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tyres`
--
ALTER TABLE `tyres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_history`
--
ALTER TABLE `about_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_posts`
--
ALTER TABLE `admin_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `alloy_wheels`
--
ALTER TABLE `alloy_wheels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `batteries`
--
ALTER TABLE `batteries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `brochures`
--
ALTER TABLE `brochures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cms_meta_tags`
--
ALTER TABLE `cms_meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `contact_address`
--
ALTER TABLE `contact_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `home_page_other`
--
ALTER TABLE `home_page_other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_privilege`
--
ALTER TABLE `home_privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `our_products`
--
ALTER TABLE `our_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `terms_and_condition`
--
ALTER TABLE `terms_and_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tyres`
--
ALTER TABLE `tyres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
