-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2025 at 06:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(18, 'Smart Phone'),
(19, 'Laptop'),
(20, 'Accessory'),
(21, 'Security Camera'),
(22, 'Printer'),
(23, 'Keyboard'),
(24, 'Gaming Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `phone`, `total_price`, `created_at`) VALUES
(22, 'Boun Hongly', '0965429290', '817.00', '2025-08-08 15:28:37'),
(23, 'Lee-tong', '09832342', '459.00', '2025-08-08 15:29:40'),
(24, 'Rewwe', '023423442', '529.00', '2025-08-08 15:30:00'),
(25, 'Thida', '8888888', '178.00', '2025-08-08 15:30:20'),
(26, 'Jonh Lee', '0234234', '978.00', '2025-08-08 15:30:41'),
(27, 'Lwwoo', '024568431', '558.00', '2025-08-08 15:31:32'),
(28, 'Lpowtroo', '0234234966', '39.00', '2025-08-08 15:31:56'),
(29, 'Lee-tong KH', '0234234967', '89.00', '2025-08-08 15:32:19'),
(30, 'Neathoel', '023423475', '783.00', '2025-08-08 15:56:22'),
(31, 'Lopto', '8888888', '389.00', '2025-08-08 15:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `subtotal`) VALUES
(31, 22, 82, 1, '389.00'),
(32, 22, 142, 1, '99.00'),
(33, 22, 80, 1, '329.00'),
(34, 23, 93, 1, '459.00'),
(35, 24, 163, 1, '529.00'),
(36, 25, 156, 2, '178.00'),
(37, 26, 88, 2, '978.00'),
(38, 27, 84, 2, '558.00'),
(39, 28, 123, 1, '39.00'),
(40, 29, 127, 1, '89.00'),
(41, 30, 81, 1, '415.00'),
(42, 30, 137, 1, '39.00'),
(43, 30, 80, 1, '329.00'),
(44, 31, 82, 1, '389.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `category_id`) VALUES
(79, 'Oppo f11 pro ultra', '1000.00', 'Good and camera and for play game. The batter is strong. ', 'p17.webp', 18),
(80, 'Samsung Galaxy A55', '329.00', 'Smooth performance with AMOLED display.', 'p1.webp', 18),
(81, 'Xiaomi Poco X6 Pro', '415.00', 'Great for gaming with high refresh rate.', 'p2.webp', 18),
(82, 'Realme Narzo 70', '389.00', 'Affordable and stylish with solid battery.', 'p3.webp', 18),
(83, 'Vivo Y200 Pro', '499.00', 'Elegant design and decent camera.', 'p4.webp', 18),
(84, 'Oppo Reno 11F', '279.00', 'Fast charging and vibrant screen.', 'p5.webp', 18),
(85, 'Infinix Note 40', '359.00', 'Budget-friendly with good performance.', 'p6.webp', 18),
(86, 'Motorola G84', '439.00', 'Clean UI and reliable battery.', 'p7.webp', 18),
(87, 'Tecno Camon 20 Premier', '319.00', 'Sharp camera and smooth multitasking.', 'p8.webp', 18),
(88, 'iPhone SE 2025', '489.00', 'Compact and powerful with iOS features.', 'p9.webp', 18),
(89, 'OnePlus Nord CE 4', '399.00', 'Balanced specs and OxygenOS experience.', 'p10.webp', 18),
(90, 'Google Pixel 7a', '349.00', 'AI-powered camera and clean Android.', 'p11.webp', 18),
(91, 'Samsung M14 5G', '429.00', 'Long battery life and 5G support.', 'p12.webp', 18),
(92, 'Xiaomi Redmi 13C', '379.00', 'Affordable with decent performance.', 'p13.webp', 18),
(93, 'Realme C67', '459.00', 'Good display and fast charging.', 'p14.webp', 18),
(94, 'Vivo V30 Lite', '499.00', 'Stylish and optimized for selfies.', 'p15.webp', 18),
(95, 'Oppo A98', '289.00', 'Smooth UI and elegant design.', 'p16.webp', 18),
(96, 'Infinix Zero 30', '419.00', 'Great camera and gaming performance.', 'p17.webp', 18),
(97, 'Dell XPS 13 Plus', '1299.00', 'Ultra-slim design with powerful performance and OLED display.', 'c1.png', 19),
(98, 'Apple MacBook Air M3', '1399.00', 'Lightweight and fast with excellent battery life.', 'c2.png', 19),
(99, 'HP Spectre x360', '1199.00', 'Convertible laptop with touch screen and sleek build.', 'c3.png', 19),
(100, 'Lenovo ThinkPad X1 Carbon', '1499.00', 'Business-class durability with top-tier specs.', 'c4.png', 19),
(101, 'Asus ROG Zephyrus G14', '1599.00', 'High-performance gaming laptop with compact design.', 'c5.png', 19),
(102, 'MSI Prestige 14 Evo', '1099.00', 'Stylish and efficient for creators and professionals.', 'c6.png', 19),
(103, 'Acer Swift Edge 16', '999.00', 'Lightweight laptop with large OLED display.', 'c7.png', 19),
(104, 'Microsoft Surface Laptop 6', '1299.00', 'Elegant design with smooth Windows experience.', 'c8.png', 19),
(105, 'Gigabyte Aero 16 OLED', '1799.00', 'Creator-focused laptop with stunning visuals.', 'c9.png', 19),
(106, 'Huawei MateBook X Pro', '1199.00', 'Premium build with sharp display and fast performance.', 'c10.png', 19),
(107, 'Dell Inspiron 16 Plus', '1099.00', 'Large screen and powerful internals for productivity.', 'c11.png', 19),
(108, 'Apple MacBook Pro M3', '1899.00', 'Top-tier performance for professionals and creatives.', 'c12.png', 19),
(109, 'HP Envy 15', '999.00', 'Balanced specs with sleek aluminum chassis.', 'c13.png', 19),
(110, 'Lenovo Yoga Slim 7i', '1149.00', 'Slim and stylish with long battery life.', 'c14.png', 19),
(111, 'Asus ZenBook 14 OLED', '1249.00', 'Vivid OLED display and ultra-portable design.', 'c15.png', 19),
(112, 'MSI Stealth 16 Studio', '1799.00', 'Powerful GPU and quiet cooling for creators.', 'c16.png', 19),
(113, 'Acer Nitro 5', '899.00', 'Gaming-ready with solid performance and cooling.', 'c17.png', 19),
(114, 'Microsoft Surface Pro 10', '1399.00', '2-in-1 flexibility with premium build.', 'c18.png', 19),
(115, 'Gigabyte G5 KF', '999.00', 'Affordable gaming laptop with RTX graphics.', 'c19.png', 19),
(116, 'Huawei MateBook D16', '949.00', 'Big screen and smooth multitasking experience.', 'c20.png', 19),
(117, 'Logitech MX Master 3S Mouse', '99.00', 'Ergonomic wireless mouse with precision tracking.', 'a1.png', 20),
(118, 'Anker PowerCore 20000', '59.00', 'High-capacity power bank with fast charging.', 'a2.png', 20),
(119, 'Samsung T7 Portable SSD 1TB', '129.00', 'Compact and fast external storage.', 'a3.png', 20),
(120, 'Apple AirPods Pro 2', '249.00', 'Noise-canceling earbuds with spatial audio.', 'a4.png', 20),
(121, 'Razer BlackWidow V4 Keyboard', '179.00', 'Mechanical keyboard with RGB lighting.', 'a5.png', 20),
(122, 'Sony WH-CH720N Headphones', '149.00', 'Wireless headphones with noise cancellation.', 'a6.png', 20),
(123, 'Ugreen USB-C Hub 6-in-1', '39.00', 'Expand your laptop ports with HDMI and USB.', 'a7.png', 20),
(124, 'JBL Flip 6 Bluetooth Speaker', '119.00', 'Portable speaker with deep bass and waterproof design.', 'a8.png', 20),
(125, 'Sandisk Ultra microSD 128GB', '25.00', 'Reliable storage for phones and cameras.', 'a9.png', 20),
(126, 'Baseus Magnetic Car Mount', '19.00', 'Secure phone holder for car dashboards.', 'a10.png', 20),
(127, 'TP-Link AX1800 WiFi Router', '89.00', 'Fast and stable internet for home use.', 'a11.png', 20),
(128, 'Belkin 3-in-1 Wireless Charger', '139.00', 'Charge iPhone, AirPods, and Apple Watch together.', 'a12.png', 20),
(129, 'Corsair HS65 Gaming Headset', '79.00', 'Comfortable headset with surround sound.', 'a13.png', 20),
(130, 'Xiaomi Mi Smart Band 8', '49.00', 'Fitness tracker with heart rate and sleep monitor.', 'a14.png', 20),
(131, 'HyperX Cloud II Headset', '99.00', 'Pro-grade audio for gaming and streaming.', 'a15.png', 20),
(132, 'Amazon Echo Dot 5th Gen', '59.00', 'Smart speaker with Alexa voice assistant.', 'a16.png', 20),
(133, 'Targus Laptop Cooling Pad', '29.00', 'Keeps your laptop cool during heavy use.', 'a17.png', 20),
(134, 'Dell USB-C Mobile Adapter', '69.00', 'Multiport adapter for travel and presentations.', 'a18.png', 20),
(135, 'Lenovo 65W USB-C Charger', '39.00', 'Fast charging for laptops and tablets.', 'a19.png', 20),
(136, 'Spigen Rugged Armor Phone Case', '19.00', 'Durable protection for your smartphone.', 'a20.png', 20),
(137, 'TP-Link Tapo C200', '39.00', 'Pan/Tilt indoor camera with night vision and motion detection.', 'sc1.png', 21),
(138, 'EZVIZ C6N Smart Cam', '49.00', '360° coverage with smart tracking and two-way audio.', 'sc2.png', 21),
(139, 'Reolink Argus 3 Pro', '109.00', 'Wireless outdoor camera with solar charging and 2K resolution.', 'sc3.png', 21),
(140, 'Hikvision DS-2CE16D0T', '89.00', 'Bullet camera with HD video and weatherproof design.', 'sc4.png', 21),
(141, 'Imou Ranger 2', '59.00', 'Smart indoor cam with cloud storage and privacy mode.', 'sc5.png', 21),
(142, 'Dahua IPC-HFW1230S', '99.00', 'IP camera with infrared night vision and remote access.', 'sc6.png', 21),
(143, 'Arlo Pro 4 Spotlight', '199.00', 'Wire-free camera with spotlight and color night vision.', 'sc7.png', 21),
(144, 'Xiaomi Mi Home Security Cam 360', '45.00', 'Full-room coverage with AI motion alerts.', 'sc8.png', 21),
(145, 'Blink Outdoor 3rd Gen', '129.00', 'Battery-powered outdoor cam with HD video and app control.', 'sc9.png', 21),
(146, 'Google Nest Cam Indoor', '149.00', 'Smart alerts and seamless integration with Google Home.', 'sc10.png', 21),
(147, 'Canon PIXMA G3020', '179.00', 'Wireless all-in-one printer with refillable ink tanks and high page yield.', 'pr1.png', 22),
(148, 'HP LaserJet Pro MFP M428fdw', '329.00', 'Monochrome laser printer with fast printing and duplex scanning.', 'pr2.png', 22),
(149, 'Epson EcoTank L3250', '199.00', 'Cartridge-free printer with Wi-Fi and mobile printing support.', 'pr3.png', 22),
(150, 'Brother HL-L2320D', '129.00', 'Compact laser printer with automatic duplex printing.', 'pr4.png', 22),
(151, 'Samsung Xpress M2020W', '99.00', 'Wireless laser printer with easy mobile printing and fast output.', 'pr5.png', 22),
(152, 'Ricoh SP 210SU', '89.00', 'Multifunction printer with scanning and copying features.', 'pr6.png', 22),
(153, 'Logitech K380 Multi-Device', '49.00', 'Compact Bluetooth keyboard for Windows, macOS, Android, and iOS.', 'k1.png', 23),
(154, 'Razer BlackWidow V3', '129.00', 'Mechanical gaming keyboard with RGB lighting and tactile switches.', 'k2.png', 23),
(155, 'Corsair K95 RGB Platinum XT', '199.00', 'Premium mechanical keyboard with macro keys and dynamic lighting.', 'k3.png', 23),
(156, 'Microsoft Sculpt Ergonomic Keyboard', '89.00', 'Split keyboard design for natural wrist posture and comfort.', 'k4.png', 23),
(157, 'Keychron K6 Wireless', '79.00', 'Hot-swappable mechanical keyboard with Bluetooth and USB-C.', 'k5.png', 23),
(158, 'SteelSeries Apex 3', '59.00', 'Water-resistant gaming keyboard with quiet switches and RGB zones.', 'k6.png', 23),
(159, 'Logitech MX Keys', '99.00', 'Smart illumination keyboard with premium typing experience.', 'k7.png', 23),
(160, 'ASUS ROG Swift PG279QM', '699.00', '27\" QHD monitor with 240Hz refresh rate and NVIDIA G-SYNC.', 'm1.png', 24),
(161, 'LG UltraGear 27GP950-B', '749.00', '4K UHD gaming monitor with 144Hz and DisplayHDR 600.', 'm2.png', 24),
(162, 'Samsung Odyssey G7', '599.00', '32\" curved QHD monitor with 240Hz and 1ms response time.', 'm3.png', 24),
(163, 'Acer Predator XB273U', '529.00', 'IPS panel with 170Hz refresh rate and vivid colors.', 'm4.png', 24),
(164, 'MSI Optix MAG274QRF-QD', '479.00', 'Quantum Dot display with 165Hz and wide color gamut.', 'm5.png', 24),
(165, 'Gigabyte M32Q', '429.00', '32\" QHD monitor with 165Hz and ergonomic stand.', 'm6.png', 24),
(166, 'ViewSonic XG2431', '399.00', '24\" gaming monitor with 240Hz and blur reduction tech.', 'm7.png', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
