-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 04:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `full_img` varchar(255) NOT NULL,
  `gifs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `full_img`, `gifs`) VALUES
(2, 'upload/fd6d8f7f89.jpg', ''),
(3, 'upload/8dfe3b7e31.jpg', ''),
(4, '', 'upload/b7365263ff.gif');

-- --------------------------------------------------------

--
-- Table structure for table `bannar`
--

CREATE TABLE `bannar` (
  `id` int(11) NOT NULL,
  `bannar_image` varchar(255) NOT NULL,
  `bannar_header` varchar(255) NOT NULL,
  `bannar_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bannar`
--

INSERT INTO `bannar` (`id`, `bannar_image`, `bannar_header`, `bannar_title`) VALUES
(1, 'upload/463a48c823.webp', '', ''),
(2, 'upload/2d3435162d.webp', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pakage_name` varchar(255) DEFAULT NULL,
  `appoinment_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `customer_name`, `customer_email`, `phone_number`, `address`, `pakage_name`, `appoinment_time`, `status`) VALUES
(1, 'Sakib', 'Sakibbd39@gmail.com', '4837382923455', '', 'combo pakage', '2023-11-29 13:22:42', 1),
(16, 'Sakib', 'Sakibbd39@gmail.com', '4837382923455', 'rodrigo', 'combo pakage', '2024-12-21 03:20:00', 0),
(17, 'Sakib', 'Sakibbd39@gmail.com', '4837382923455', 'rodrigo', 'combo pakage', '2023-11-29 13:18:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `carbrand`
--

CREATE TABLE `carbrand` (
  `id` int(11) NOT NULL,
  `brandname` varchar(255) DEFAULT NULL,
  `brandimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carbrand`
--

INSERT INTO `carbrand` (`id`, `brandname`, `brandimage`) VALUES
(28, 'BMW', 'upload/b255b8c30f.png'),
(29, 'Bugatti', 'upload/3e49f5bd4a.png'),
(30, 'Ford', 'upload/4646a9ff8c.png'),
(31, 'Lamborghini', 'upload/1d7e5b4856.png'),
(32, 'Porsche', 'upload/8c4f2f6b8a.png'),
(33, 'Tesla', 'upload/6be6bcfb34.png'),
(34, 'Subaru', 'upload/765f1f0b6b.png'),
(35, 'Audi', 'upload/5499a3b95c.png'),
(36, 'LandRover', 'upload/b3817e5a8b.png'),
(37, 'Mazda', 'upload/7e75756952.png'),
(38, 'Honda', 'upload/48ccaa1e4f.png'),
(39, 'Mercedes-Benz', 'upload/b1bf12c0c8.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `street_location` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `helpline_num` varchar(255) NOT NULL,
  `phone_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `street_location`, `city`, `division`, `helpline_num`, `phone_num`, `email`) VALUES
(1, '32/B Road,Dhanmondi', 'Dhaka', 'Dhaka', '0211021502012', '1214154121211205', 'mishudey@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `orders_id` int(11) DEFAULT NULL,
  `servicepackage_id` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `orders_id`, `servicepackage_id`, `phone`, `address`, `city`, `nid`) VALUES
(1, 'Sakib', 'Sakibbd39@gmail.com', '12345678', NULL, NULL, '4837382923455', 'rodrigo', 'comilla', '433434355');

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `employe_img` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `whtsapp_link` varchar(255) NOT NULL,
  `employe_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id`, `employe_img`, `fb_link`, `twitter_link`, `whtsapp_link`, `employe_name`, `phone_number`) VALUES
(4, 'upload/dc4777f79a.jpg', 'https://www.facebook.com/', 'https://twitter.com/i/flow/login', 'https://web.whatsapp.com/', 'Nabid', '6565767676'),
(5, 'upload/17a82c39ae.jpg', 'https://www.facebook.com/', 'https://twitter.com/i/flow/login', 'https://web.whatsapp.com/', 'Nabid', '565656565'),
(6, 'upload/e727d920c6.jpg', 'https://www.facebook.com/', 'https://twitter.com/i/flow/login', 'https://web.whatsapp.com/', 'Nabid', '65656566');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(3, 'upload/dbc086a023.jpg'),
(4, 'upload/15c7bb7022.jpg'),
(5, 'upload/795858f551.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone`, `messages`) VALUES
(2, 'Milton', 'mishudey@gmail.com', '01445487981', 'dff'),
(3, 'Milton', 'mishudey@gmail.com', '01445487981', 'gfggd'),
(4, 'Milton', 'mishudey@gmail.com', '01445487981', 'fdfd'),
(5, 'Milton', 'mishudey@gmail.com', '01445487981', 'fdf'),
(6, 'Milton', 'mishudey@gmail.com', '01445487981', 'fdfd'),
(7, 'Milton', 'mishudey@gmail.com', '01445487981', 'fdf fdf'),
(8, 'dfdf', 'mishuday307@gmail.com', '54544564656', 'fdf  fdfdfdf'),
(9, 'fdf', 'mishuday307@gmail.com', '3434343535', 'dfdf fdfdf'),
(10, 'ffgg', 'mishuday307@gmail.com', '4343434343', 'sdsdd'),
(11, 'ffgg', 'mishuday307@gmail.com', '3434343443', 'ff fdffdf'),
(12, 'dff', 'mishuday307@gmail.com', '434343434343', 'fdfdf fdfdf dfdfdf dfdfd dfdfd ffdfdfdf'),
(13, 'vfdffdfdf', 'mishu909@gmail.com', '43443', 'ffdffev effe'),
(14, 'vfdffdfdf', 'mishu909@gmail.com', '3343443343', 'fdf dfdfd dfdfd dfdfdf'),
(15, 'rrere', 'mishu909@gmail.com', '333343', 'dfdf dfdfdf'),
(16, 'eewewe', 'mishu909@gmail.com', '43344344', 'dff fdff dffdf dfdf'),
(17, 'hghgh', 'mishudey@gmail.com', '01445487981', 'hgh hghgh hgh  ghgh ghgh ghgh ghghg ghghg ghghghghg ghghghghghgh g hghghg ghghghg ghghgh hghghghghgh'),
(18, 'Milton', 'mishudey@gmail.com', '43434554545', 'gfgf gfg f fggfgg fgfggfg fggggfgfg gggfg ggfgfg fgfgf fgfg fgfgfg fgg fgf gfg fgfgf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `servicepackage_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `sellcar_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `phone_num` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `service_id`, `servicepackage_id`, `product_id`, `sellcar_id`, `customer_id`, `customer_name`, `product_img`, `product_name`, `product_price`, `phone_num`, `city`, `address`) VALUES
(3, NULL, NULL, NULL, NULL, NULL, 'Sakib', '0', 'yohooi', '235', '4837382923455', 'comilla', 'rodrigo'),
(11, NULL, NULL, NULL, NULL, NULL, 'Sakib', '0', 'yohooi', '235', '4837382923455', 'comilla', 'rodrigo'),
(15, NULL, NULL, 30, NULL, NULL, 'Sakib', '0', 'yohooi', '235', '4837382923455', 'comilla', 'rodrigo'),
(20, NULL, NULL, 27, NULL, NULL, 'Sakib', '0', 'Sicleoi', '3400', '4837382923455', 'comilla', 'rodrigo'),
(21, NULL, NULL, 27, NULL, NULL, 'Sakib', '0', 'Sicleoi', '3400', '4837382923455', 'comilla', 'rodrigo'),
(22, NULL, NULL, 27, NULL, NULL, 'Sakib', '0', 'Sicleoi', '3400', '4837382923455', 'comilla', 'rodrigo'),
(25, NULL, NULL, 26, NULL, NULL, 'Sakib', '0', 'nikel', '20', '4837382923455', 'comilla', 'rodrigo'),
(26, NULL, NULL, 27, NULL, NULL, 'Sakib', '0', 'Sicleoi', '3400', '4837382923455', 'comilla', 'rodrigo');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `owner_position` varchar(255) NOT NULL,
  `owner_about` varchar(255) NOT NULL,
  `owner_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `first_name`, `last_name`, `owner_position`, `owner_about`, `owner_photo`) VALUES
(2, 'Stephen S.', 'Hendrick', 'The Car Repair Appointment Founder', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue dui.  Nam liber tempor ', 'upload/f0deccb60c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `servicesub_id` int(11) DEFAULT NULL,
  `product_brand_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `previous_price` varchar(255) DEFAULT NULL,
  `current_price` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `discount` varchar(255) NOT NULL,
  `srvic_product_brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `service_id`, `servicesub_id`, `product_brand_id`, `product_name`, `previous_price`, `current_price`, `product_image`, `discount`, `srvic_product_brand`) VALUES
(23, NULL, NULL, 13, 'Calvino tiro', '3400', '2300', 'upload/58b44c8132.webp', '34', ''),
(24, NULL, NULL, 11, 'Ae195', '1250', '200', 'upload/1440e4e244.webp', '45', ''),
(25, NULL, NULL, 13, 'paddle', '1250', '54545', 'upload/3bdead1708.webp', '45', ''),
(26, NULL, NULL, 11, 'nikel', '300', '20', 'upload/3d925de426.webp', '30', ''),
(27, NULL, NULL, 14, 'Sicleoi', '340', '3400', 'upload/102ce3c97c.webp', '20', ''),
(29, NULL, NULL, 10, 'Ae195', '456', '3456', 'upload/49d6fd7543.webp', '34', ''),
(30, NULL, NULL, 13, 'yohooi', '234', '235', 'upload/a19618c5b6.webp', '34', '');

-- --------------------------------------------------------

--
-- Table structure for table `productbrand`
--

CREATE TABLE `productbrand` (
  `id` int(11) NOT NULL,
  `productbrand_name` varchar(255) NOT NULL,
  `product_brand_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productbrand`
--

INSERT INTO `productbrand` (`id`, `productbrand_name`, `product_brand_img`) VALUES
(10, 'Bmw', 'upload/71e25031a5.png'),
(11, 'Porsche', 'upload/5eaf72b36c.png'),
(12, 'Ford', 'upload/a549aa88c6.png'),
(13, 'Bugatti', 'upload/ea19840129.png'),
(14, 'Tesla', 'upload/c26ef32e27.png'),
(15, 'Subaru', 'upload/7929f6bebd.png'),
(16, 'Lamborghini', 'upload/cdf9d4671f.png');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `rent_headline` varchar(255) NOT NULL,
  `rent_msg` varchar(255) NOT NULL,
  `rent_contact` varchar(255) NOT NULL,
  `rent_first_image` varchar(255) NOT NULL,
  `rent_second_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `rent_headline`, `rent_msg`, `rent_contact`, `rent_first_image`, `rent_second_img`) VALUES
(3, 'dfffdffdf', 'd', 'fdf', 'upload/ec12d4cdb7.webp', 'upload/ec12d4cdb7.webp'),
(4, 'dfrrgr', 'dfdfrgge', '545564654554', 'upload/ba0c723232.webp', 'upload/ba0c723232.jpg'),
(5, 'dftrtrt', 'dfdftrtrt', '5455646566', 'upload/27d7376dd7.webp', 'upload/27d7376dd7.webp'),
(6, 'ggh', 'hghg', '465656', 'upload/4b997f43b9.webp', 'upload/4b997f43b9.webp'),
(7, 'trt', 'trt', '545564654554', 'upload/4369b50fd4.jpg', 'upload/4369b50fd4.webp'),
(8, 'df', 'dfdf', '545564654554', 'upload/afab121d5a.jpg', 'upload/afab121d5a.webp'),
(9, 'dfdfdfd', 'dfdf', '545564654554', 'upload/c602da607a.webp', 'upload/c602da607a.webp'),
(10, 'dffdsff', 'dfdf', '545564654554', 'upload/71c16d3de0.webp', 'upload/71c16d3de0.webp'),
(15, '', '', '', 'upload/d810927d47.webp', 'upload/d810927d47.webp'),
(16, '', '', '', 'upload/0be06585b9.webp', 'upload/0be06585b9.webp');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) DEFAULT NULL,
  `review_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review_msg`) VALUES
(0, 'hello'),
(NULL, 'gfgfgggfg');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `day_name` varchar(255) NOT NULL,
  `open_time` time NOT NULL,
  `colse_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `day_name`, `open_time`, `colse_time`) VALUES
(3, 'Friday', '07:06:00', '20:57:00'),
(4, 'Saturday', '09:11:00', '22:01:00'),
(5, 'Sunday', '09:12:00', '22:12:00'),
(6, 'Monday', '01:12:00', '23:13:00'),
(7, 'Thursday', '09:13:00', '14:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `sellcar`
--

CREATE TABLE `sellcar` (
  `id` int(11) NOT NULL,
  `carbrand_id` int(11) DEFAULT NULL,
  `carmodel` varchar(255) DEFAULT NULL,
  `carimage` varchar(255) DEFAULT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `phonenum` varchar(255) DEFAULT NULL,
  `manufac_company` varchar(255) DEFAULT NULL,
  `stockserial` varchar(255) DEFAULT NULL,
  `mileage` varchar(255) DEFAULT NULL,
  `enginename` varchar(255) DEFAULT NULL,
  `carprice` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellcar`
--

INSERT INTO `sellcar` (`id`, `carbrand_id`, `carmodel`, `carimage`, `car_type`, `location`, `phonenum`, `manufac_company`, `stockserial`, `mileage`, `enginename`, `carprice`) VALUES
(31, 28, 'BMW_X6-M-Competition-2023_main', 'upload/cfa45e7b65.jpg', 'Suv', 'Rampura,Dhaka', '545454554', 'OVI motors', '34343', '3434', 'Gasoline', '4000001'),
(32, 28, 'BMW X5 M Competition 2023 - Present', 'upload/321991f90c.jpg', 'Suv 7', 'Cittagong', '5454545', 'Nadil motors', '45445', '10000', ' Gasoline', '10000000'),
(33, 28, 'BMW X6 2023 - Present', 'upload/bdabd94806.jpg', ' SUV (Sports Utility Vehicle)', 'Rajshahi', '343434', 'Rabbi motors .Ltd', '334', '34353', 'Hybrid', '120090'),
(34, 28, 'BMW M3 CS 2023 - Present', 'upload/965c4f4816.jpg', '7 seat Sedan', 'Banglabazar,Dhaka', '43435454', 'Carcare Ltd', '43434', '1000', 'Gasoline', '1200000'),
(37, 39, '2024 Mercedes-Benz CLE-Class', 'upload/1055f0a272.jpg', '5 seat Sedan', 'Rampura,Dhaka', '5454545', 'Nadil motors', '454545', '100043', 'Diesel', '2344400'),
(38, 39, '2023 Mercedes-Benz S-Class', 'upload/570d3d8660.jpg', '5 seat Sedan', 'Banglabazar,Dhaka', '43545456', 'OVI motors', '343545', '120000', 'Hybrid', '120087'),
(39, 39, '2023 Mercedes-Benz EQE SUV', 'upload/feff6afa0c.jpg', 'Suv 7', 'Khulna', '5454545', 'Nir Motors', '545454', '3000', ' Gasoline', '120000'),
(40, 39, '2025 Mercedes-Benz EQG', 'upload/4767b786a6.jpg', 'Suv 7', 'Salgariya,Pabna', '3444', 'Nir Motors', '434242', '100023', 'Hybrid', '1233000'),
(41, 39, '2024 Mercedes-Benz eSprinter', 'upload/681eda56f7.jpg', 'Suv 9', 'Dhannmodi,Dhaka', '3434123435', 'Rabbi motors .Ltd', '57676', '4509', 'Petrol', '800000'),
(42, 39, '2023 Mercedes-Benz GLC-Class', 'upload/0b3f6cf686.jpg', 'Suv 7', 'Rampura,Dhaka', '45465466', 'Nir Motors', '345900', '1000', 'Diesel', '40000'),
(43, 30, '2023 Ford Bronco Raptor', 'upload/4dad105eb0.jpg', 'Suv 7', 'Cittagong', '46565', 'Carcare Ltd', '656653', '34353', 'Petrol ', '650000'),
(44, 30, '2024 Ford Bronco Sport', 'upload/2008f89397.jpg', 'Suv 7', 'Rampura,Dhaka', '554545456', 'Rabbi motors .Ltd', '4343453', '3434', ' Gasoline', '300000'),
(45, 30, '2023 Ford Explorer', 'upload/179becf8ca.jpg', '5 seat Sedan', 'Rajshahi', '454656', 'OVI motors', '67099', '4500', 'Hybrid', '10000000'),
(46, 30, '2023 Ford F-150 Raptor', 'upload/a97fb79fa1.jpg', '5 seat Sedan', 'Rampura,Dhaka', '78790', 'Nir Motors', '565768', '100043', 'Gasoline', '4589');

-- --------------------------------------------------------

--
-- Table structure for table `servicecat`
--

CREATE TABLE `servicecat` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicecat`
--

INSERT INTO `servicecat` (`id`, `service_name`) VALUES
(3, 'Car paint'),
(5, 'Car wash'),
(6, 'Car repair');

-- --------------------------------------------------------

--
-- Table structure for table `servicepackage`
--

CREATE TABLE `servicepackage` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `pakage_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `first_facilities` varchar(255) DEFAULT NULL,
  `second_facilities` varchar(255) DEFAULT NULL,
  `third_facilities` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicepackage`
--

INSERT INTO `servicepackage` (`id`, `service_id`, `pakage_name`, `price`, `first_facilities`, `second_facilities`, `third_facilities`) VALUES
(1, 3, 'combo pakage', '456', 'jdhsdj jbsd', 'hdjsd sddsd', 'nsdj ddsdd'),
(2, 6, 'hejkhf3 kjewhfriu', '300', 'dkjhfuerdkjfhewrufh', 'achdshow', 'hduhuf'),
(3, 6, 'hejkhf3 kjewhfriu', '300', 'dkjhfuerdkjfhewrufh', 'achdshow', 'hduhuf');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `sponsor_image` varchar(255) NOT NULL,
  `sponsor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `sponsor_image`, `sponsor_name`) VALUES
(1, 'upload/7b4108d7a2.webp', 'infinity'),
(2, 'upload/3d0682eaf6.webp', 'infinity');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `status`, `code`) VALUES
(1, 'fdfd', 'fdfdf', 'mishudey@gmail.com', '12345678', 'user', '343474783'),
(3, 'Milton', 'Dey', 'deymilton85@gmail.com', '12345678', 'admin', '2051134180'),
(5, 'Milton', 'deyyo', 'mishuday307@gmail.com', '12345678', 'user', '570073557');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannar`
--
ALTER TABLE `bannar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carbrand`
--
ALTER TABLE `carbrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `servicepackage_id` (`servicepackage_id`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `sellcar_id` (`sellcar_id`),
  ADD KEY `servicepackage_id` (`servicepackage_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `product_brand_id` (`product_brand_id`);

--
-- Indexes for table `productbrand`
--
ALTER TABLE `productbrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellcar`
--
ALTER TABLE `sellcar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carbrand_id` (`carbrand_id`);

--
-- Indexes for table `servicecat`
--
ALTER TABLE `servicecat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicepackage`
--
ALTER TABLE `servicepackage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bannar`
--
ALTER TABLE `bannar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `carbrand`
--
ALTER TABLE `carbrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `productbrand`
--
ALTER TABLE `productbrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sellcar`
--
ALTER TABLE `sellcar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `servicecat`
--
ALTER TABLE `servicecat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `servicepackage`
--
ALTER TABLE `servicepackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `customers_ibfk_2` FOREIGN KEY (`servicepackage_id`) REFERENCES `servicepackage` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `servicecat` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`sellcar_id`) REFERENCES `sellcar` (`id`),
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`servicepackage_id`) REFERENCES `servicepackage` (`id`);

--
-- Constraints for table `sellcar`
--
ALTER TABLE `sellcar`
  ADD CONSTRAINT `sellcar_ibfk_1` FOREIGN KEY (`carbrand_id`) REFERENCES `carbrand` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
