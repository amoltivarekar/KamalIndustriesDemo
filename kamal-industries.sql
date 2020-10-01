-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 02:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamal-industries`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_products`
--

CREATE TABLE `all_products` (
  `ID` int(11) NOT NULL,
  `product_category_ID` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `features` varchar(200) NOT NULL,
  `order_quantity` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `computerized` varchar(100) NOT NULL,
  `control_mode` varchar(100) NOT NULL,
  `payment_terms` varchar(500) NOT NULL,
  `delivery_time` varchar(100) NOT NULL,
  `packaging_details` varchar(100) NOT NULL,
  `main_export_market` varchar(200) NOT NULL,
  `main_domestic_market` varchar(200) NOT NULL,
  `FOB_port` varchar(100) NOT NULL,
  `best_selling_product` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_products`
--

INSERT INTO `all_products` (`ID`, `product_category_ID`, `product_name`, `img_path`, `product_code`, `brand_name`, `description`, `features`, `order_quantity`, `type`, `material`, `computerized`, `control_mode`, `payment_terms`, `delivery_time`, `packaging_details`, `main_export_market`, `main_domestic_market`, `FOB_port`, `best_selling_product`) VALUES
(1, 1, 'Capsule Polishing Machine', 'images/oven-tray-drier.jpg', '25', 'KAMAL E INDUSTRIES', 'KEI AUTOMATIC CAPSULE INSPECTION CUM POLISHING MACHINE. The Machine does both inspection and polishing in TWO STAGES. The machine is provided with a SS hopper, a 230 v single phase vibrator fitted below the SS hopper, a SS powder collection tray, Ptfe inspection belt fitted ½ hp motor and provided with tube light for inspection of capsules. The polishing section is provided with a 1 hp motor and has 2 nylon brushes with polishing cloths covered by SS pipe, gearbox for brushing unit drive with variable speed pulley and complete with SS cover. Dust collection unit for collection of powder.', '', '1 Piece', 'Capsule Polisher', 'Stainless Steel', 'No', 'Automatic', 'Cheque', '8-12 Week', '', 'Asia, Australia, North America, South America, Eastern Europe, Western Europe, Middle East, Africa', 'All India', 'Ex-Works', 1),
(2, 1, 'Automatic Capsule Loading Machine', 'images/oven-tray-drier.jpg', 'CM 02', 'KAMAL E INDUSTRIES', 'We are embroiled us in the manufacture, supply and export of Automatic Capsule Loading Machine. Offers high productions with reasonably low finances. They are used to fill capsules of customized sizes. These machines are easy to function and maintain also,  being compact they are space-saving too. Having robust design it functions smoothly for long periods of time. The provided Automatic Capsule Loading Machines are made by using high grade materials like stainless steel, alloy and others with the help of modern technology and sophisticated team.', 'Low investment, Compact, Easy to operate and maintain, Smooth operation', '1 Unit', '', '', '', '', 'Cash Against Delivery (CAD), Cash in Advance (CID), Cheque, Letter of Credit at Sight (Sight L/C), Telegraphic Transfer (T/T)', '6 Week', 'Wooden box packing available.', 'Asia, Australia, Middle East', 'All India', '', 1),
(3, 1, 'Double Cone Blender', 'images/oven-tray-drier.jpg', 'CM 03', 'KAMAL E INDUSTRIES', 'We, Kamal E Industries, are renowned manufacturers, suppliers and exporters of Double Cone Blender (Conical Mixer). The offered range of blenders are made by using optimum quality material like stainless steel, aluminum, alloy and others with the help of innovative techniques. Our assorted range of products go through strict quality checks and adhere to the set industry norms. Satisfying the needs of our esteemed customers by delivering these quality products on time give us adhere pleasure. Our customers can avail these Double Cone Blender (Conical Mixer) at a market leading price.', 'Perfect dimensions, Unmatched performance, Quality assured, Easy operations', '1 Unit', '', '', '', '', 'Cash Against Delivery (CAD), Cash in Advance (CID), Cheque, Letter of Credit at Sight (Sight L/C), Telegraphic Transfer (T/T)', '6 Week', 'Wooden box packing available.', 'Asia, Australia, Middle East', 'All India', '', 0),
(4, 1, 'Octagonal Blender', 'images/oven-tray-drier.jpg', 'OB 04', 'KAMAL E INDUSTRIES', 'Octagonal Blender are manufactured, supplied and exported by us that is octagonal in shape and have a robust construction. Complex structured and sturdy, these are made of the finest grade raw material like stainless steel, alloy and others with the help of innovative technology and sophisticated team. That is procured to our esteemed clients after testing blenders on all physical and chemical attributes. We offer such Octagonal Blender in many Capacities. Deliveries are scheduled such that they reach on time to our clients. The machine Consists of a polygon shaped blender having a diagonal baffle to dispurse the powder having both charging and discharge at one end mounted on a channel stand. Drive is by means of an electric motor & reduction gearbox through a centre shaft .The Octagon is mounted at a angle to ensure thorough mixing. To facilitate easy movement of the Octagon while charging and discharging of the larger units, a special inching arrangement is provided with the unit. Motors used are 3 phase.', 'Low maintenance, Easy for cleaning in place, The power consumption, Smooth operations', '1 Unit', 'Dry Powder Mixer', 'Stainless Steel', '', '', '', '6 Week', 'Wooden box packing available.', 'Asia, Australia, Middle East, Western Europe, Africa, South America, North America, Eastern Europe', 'All India', '', 0),
(5, 1, 'Semi Automatic Disc Type Counting Machine', 'images/oven-tray-drier.jpg', '05', 'KAMAL E INDUSTRIES', 'We have emerged as one of the distinguished manufacturer, exporter and supplier of Semi Automatic Disc Type Counting & Filling Machine. This Semi Automatic Filling Machine is manufactured from high quality components and modern technology under the guidance of skilled professionals keeping in mind market prevailing norms. Owing to high performance, less maintenance, operational fluency, reliable performance, longer service life and cost-effectiveness, this Semi Automatic Disc Type Counting & Filling Machine is highly demanded in the global market for its high efficiency.', 'Sturdy construction, Optimum performance, Durable, Highly efficient', '1 Unit', '', '', '', '', 'Cash Against Delivery (CAD), Cash in Advance (CID), Cheque, Letter of Credit at Sight (Sight L/C), Telegraphic Transfer (T/T)', '6 Week', 'Wooden box packing available.', 'Asia, Australia, Middle East', 'All India', '', 1),
(6, 1, 'Manual Capsule Filling Machine', 'images/oven-tray-drier.jpg', 'CM 01', 'KAMAL E INDUSTRIES', 'Capsule Filling Machine is Manufactured, Supplied and Exported by us to our esteemed patrons. Offered range of machines are made available by us are reckoned for features such as sturdy, heavy designs and easy operations. Our Capsule Filling Machines are proletariat and time saving. Machines offered by us are best suited for medium/small scale industrial units. Higher production at lower cost and amended standards of quality are some of the prime attributes of these machines. Also, the Capsule Filling Machines are delivered by us on time world wide.', 'Innovative operations, Finest quality, Well qualified team, Easy to maintain', '1 Unit', '', '', '', '', 'Cash Against Delivery (CAD), Cash in Advance (CID), Cheque, Letter of Credit at Sight (Sight L/C), Telegraphic Transfer (T/T)', '6 Week', 'Wooden box packing available.', 'Asia, Australia, Middle East', 'All India', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `ID` int(11) NOT NULL,
  `inquiry_description` varchar(500) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`ID`, `inquiry_description`, `email_address`, `mobile_number`, `date_time`) VALUES
(1, 'I like capsule polishing machine.', 'amol@gmail.com', '9090909090', '2020-09-20 20:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `ID` int(11) NOT NULL,
  `product_category_name` varchar(100) NOT NULL,
  `product_img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`ID`, `product_category_name`, `product_img_path`) VALUES
(1, 'Capsule Section Machine', 'images/oven-tray-drier.jpg'),
(2, 'Liquid Section', 'images/oven-tray-drier.jpg'),
(3, 'Ointment Section', 'images/oven-tray-drier.jpg'),
(4, 'Tablet Section', 'images/oven-tray-drier.jpg'),
(5, 'SS Fabricated Items', 'images/oven-tray-drier.jpg'),
(6, 'P P Capping', 'images/oven-tray-drier.jpg'),
(7, 'Capsule Loader', 'images/oven-tray-drier.jpg'),
(8, 'Capsule Filling', 'images/oven-tray-drier.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_products`
--
ALTER TABLE `all_products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `product_category_ID_FK` (`product_category_ID`) USING BTREE;

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_products`
--
ALTER TABLE `all_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_products`
--
ALTER TABLE `all_products`
  ADD CONSTRAINT `product_category_ID_FK` FOREIGN KEY (`product_category_ID`) REFERENCES `product_categories` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
