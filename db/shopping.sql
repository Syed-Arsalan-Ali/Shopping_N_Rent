-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 10:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `email`, `name`, `description`, `price`, `contact`, `owner`, `type`, `date`, `image`, `post_date`) VALUES
(10, 'admin@gmail.com', 'abc', 'abc', '10 hours 2000 Pkr', 1561651, 'abc', 'abc', '2022-09-15', '1662626420-lays.JPG', '2022-09-08 08:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `accounttitle` varchar(255) NOT NULL,
  `accountno` int(11) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`id`, `email`, `accounttitle`, `accountno`, `bankname`, `customer`) VALUES
(3, 'sarsalanali99@gmail.com', 'jndk', 5661556, 'cdkndlk', 'Seller'),
(4, 'adam@gmail.com', 'Arsalan', 21212131, 'Abc Bank', 'Both'),
(5, 'admin@gmail.com', 'Arsalan', 2147483647, 'MCB Bank', 'Both'),
(6, 'admin@gmail.com', 'Arsalan', 2147483647, 'MCB Bank', 'Both'),
(7, 'adam@gmail.com', 'Arsalan', 2132132132, 'MCB Bank', 'MCB Bank'),
(8, 'adam@gmail.com', 'Arsalan', 2132132132, 'MCB Bank', 'MCB Bank'),
(9, 'adam@gmail.com', 'Arsalan', 2132132132, 'MCB Bank', 'MCB Bank'),
(10, 'adam@gmail.com', 'Arsalan', 2132132132, 'MCB Bank', 'MCB Bank'),
(11, 'admin@gmail.com', '11651', 62651265, 'Al Habib', 'both');

-- --------------------------------------------------------

--
-- Table structure for table `buy_order`
--

CREATE TABLE `buy_order` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy_order`
--

INSERT INTO `buy_order` (`id`, `email`, `name`, `address`, `phone`, `date`, `product_id`) VALUES
(76, 'admin@gmail.com', 'abc', 'Abc Karachi', '1561651', '2022-09-11 17:17:53', 23),
(78, 'admin@gmail.com', 'abc', 'Abc Karachi', '15616513212', '2022-09-11 17:43:49', 23);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `email`, `image`, `contact`, `owner`, `category`, `reason`, `date`) VALUES
(1, '', '', '', '', 'Bikes', '', '2022-07-17 17:16:27'),
(2, '', '', '', '', 'Furniture', '', '2022-07-17 17:16:55'),
(3, '', '', '', '', 'Hardware', '', '2022-07-17 17:17:14'),
(4, '', '', '', '', 'Sports', '', '2022-07-17 17:17:38'),
(5, '', '', '', '', 'Tents', '', '2022-07-17 17:18:06'),
(6, 'admin@gmail.com', '1655571368-tents.jpg', '1561651', 'description', 'Game Rental', 'knjnkj', '2022-06-18 16:56:08'),
(7, 'sarsalanali99@gmail.com', '1655652746-cycle.jpg', '1561651', 'Arsalan Ali', 'Cycle', 'This is the most cheaper mode of transport', '2022-06-19 15:32:26'),
(12, '', '1660238419-hardware.jpg', '1561651', 'abc', 'Camera equipment', 'ijojo', '2022-08-11 17:20:19'),
(16, 'admin@gmail.com', '1660628311-sofa.jpg', '1561651', 'abc', 'Office Equipment Rental', 'abc', '2022-08-16 05:38:31'),
(17, 'admin@gmail.com', '1661841176-sofa.jpg', '1561651', 'abc', 'Camera equipment', 'jjjjk', '2022-08-30 06:32:56'),
(18, 'sarsalanali99@gmail.com', '1662920852-download (4).jpg', '1561651', 'Arsalan', 'Office Equipment Rental', 'Add category of AC as it is a need of workplace', '2022-09-11 18:27:32'),
(19, 'sarsalanali99@gmail.com', '1662920896-download (4).jpg', '1561651', 'Arsalan', 'Office Equipment Rental', 'Add category of AC as it is a need of workplace', '2022-09-11 18:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `against_person` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `complaint`, `date`, `name`, `against_person`) VALUES
(10, 'admin@gmail.com', 'Order not recieve', '2022-09-11', 'Arsalan', 'Ali ');

-- --------------------------------------------------------

--
-- Table structure for table `post_ad`
--

CREATE TABLE `post_ad` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_ad`
--

INSERT INTO `post_ad` (`id`, `image`, `org_name`, `date`) VALUES
(13, '1663660467-kitkat.JPG', 'abc', '2022-09-20 07:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `c_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `email`, `name`, `description`, `price`, `contact`, `owner`, `c_id`, `image`) VALUES
(44, 'admin@gmail.com', 'set of hardware tool', 'a set of daily use tools', '150', '12345625165', 'Arsalan', '3', '1662747736.jpg'),
(51, 'admin@gmail.com', 'Camping Tent', 'Two window, foldable tent with comfy surface and stylish design ', '900', '12345698751', 'Arsalan', '5', '1662746313.jpg'),
(52, 'admin@gmail.com', 'Multi room tent', 'Multi room tents are super practical for families, adding privacy, space and storage to minimise stress', '1500', '63987412154', 'Ali', '5', '1662746477.jpg'),
(55, 'adam@gmail.com', 'Road bike', 'Road bikes are good for fitness riding, commuting, event rides, touring and racing. Most have a drop-bar handlebar (curling down and toward the rear of the bike), which puts the rider in an aerodynamic position.', '250', '51561813514', 'Faraz', '1', '1662747277-download (1).jpg'),
(56, 'abc@gmail.com', 'BMX', 'BMX is arguably the most diverse and inclusive form of cycling out there, encompassing coastal cultures, urban stunt riding, and hard-nosed rural competition', '800', '32184966489', 'Syed', '1', '1662747648-download (2).jpg'),
(57, 'abc@gmail.com', 'Drill machine', 'drill press, also called Drilling Machine, device for producing holes in hard substances. The drill is held in a rotating spindle and is fed into the workpiece, which is usually clamped in a vise resting on a table.', '250', '15465166464', 'Rohan', '3', '1662748018-images.jpg'),
(58, 'abc@gmail.com', 'Tongue-and-groove pliers', 'These adjustable pliers are good for tightening threaded fittings, such as sink drains, and turning handles or valves.', '100', '65189411981', 'Ali', '3', '1662748562-download (3).jpg'),
(59, 'abc@gmail.com', 'two seater sofa', 'Cozy up to love seats with comfort woven into their fabric. Comfortable and intimate, loveseat sofas are a great fit for small apartments and homes', '1000', '21515465456', 'Ahmed', '2', '1662748764-sofa.jpg'),
(60, 'ac@gmail.com', 'Book case', 'Show off your extensive book collection with this beautiful bookshelves and bookcases.', '500', '16156151846', 'Ali', '2', '1662796076-chuttersnap-m3ewYVannII-unsplash.jpg'),
(61, 'abc@gmail.com', 'Dining table', 'Dining table contain six comfy chairs with wide table and a stylish design', '800', '15686445615', 'Arsalan', '2', '1662796286-stephan-coudassot-xstTzTRiJ4k-unsplash.jpg'),
(62, 'abc@gmail.com', 'Ski with pair of sticks', 'arrow strip of semi-rigid material worn underfoot to glide over snow.', '700', '21515448512', 'Ali', '4', '1662796773-images (1).jpg'),
(63, 'abc@gmail.com', 'Baseball bat with ball', 'baseball the bats are tubular, being no more than 7cm in diameter at their thickest point, and no more than 106cm in length. ', '200', '21561654849', 'Ahmed', '4', '1662796994-istockphoto-818317166-170667a.jpg'),
(64, 'admin@gmail.com', 'back packing tents', 'backpacking tents have a double-wall design that includes a main tent body (also known as the canopy) plus an exterior rainfly.', '500', '23121651651', 'Ali', '5', '1662918749-back packing.jpg'),
(65, 'admin@gmail.com', 'golf club	', 'new golf club with rubber grip', '1500', '31516515616', 'Arsalan', '4', '1662918879-golf.jpg'),
(66, 'admin@gmail.com', 'Camp Bag', 'Small in size with light weight', '200', '21321315165', 'Arsalan', '5', '1662920424-back packing.jpg'),
(67, 'admin@gmail.com', 'BMX', 'Narrow wheel with light weight ', '500', '21561561651', 'Arsalan', '1', '1662920481-download (1).jpg'),
(68, 'admin@gmail.com', 'Welding Machine', 'A set of welding machine with rod', '1000', '15615615165', 'Arsalan', '3', '1662920604.jpg'),
(69, 'admin@gmail.com', 'two seater sofa', 'Cofy sofa with two cushions', '1500', '21215165156', 'Arsalan', '2', '1662920670-sofa.jpg'),
(70, 'admin@gmail.com', 'Baseball bat with ball', 'Strong bat with rubber grip', '300', '32156161651', 'Arsalan', '4', '1662920747-istockphoto-818317166-170667a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `email`, `phone`, `city`, `username`) VALUES
(35, 'adam@gmail.com', '0213654', 'Karachi', 'Arsalan');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `password`, `cnic`, `dob`, `category`, `address`) VALUES
(8, 'adam@gmail.com', 'Arsalan2', '2122222222222', '2022-06-10', 'Buyer', 'Abcd Lahore'),
(37, 'admin', 'admin123', '', '', '', ''),
(39, 'ac@gmail.com', 'Arsalan1', '1234568198118', '2022-08-18', '', 'ajnajh');

-- --------------------------------------------------------

--
-- Table structure for table `rent_order`
--

CREATE TABLE `rent_order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `till` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_order`
--

INSERT INTO `rent_order` (`id`, `product_id`, `date`, `till`, `email`, `address`) VALUES
(11, 23, '2022-09-11', '2022-09-13', 'admin@gmail.com', 'Abc Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `c_id`, `email`, `name`, `description`, `price`, `contact`, `owner`, `image`) VALUES
(23, 1, 'abc@gmail.com', 'Split AC', 'A mini-split is an efficient, scalable way to add ', '40000', '12311564654', 'Ali', '1662797844-istockphoto-485795664-170667a.jpg'),
(25, 1, 'admin@gmail.com', 'Washing machine', 'Portable Washing Machine, 11lbs Capacity', '30000', '22151564848', 'Faraz', '1662798571-istockphoto-1310076735-170667a.jpg'),
(26, 2, 'admin@gmail.com', 'Radiator', 'In good condition without any corrision', '10000', '12312156548', 'Ahmed', '1662798907-istockphoto-647724394-170667a.jpg'),
(28, 2, 'ac@gmail.com', 'Front Steering and Suspension', 'Helps improve the ride and handling of the vehicle', '15000', '21315648649', 'Arsalan', '1662800370-download (5).jpg'),
(29, 3, 'admin@gmail.com', 'Drill Machine', 'Drilling Machine, device for producing holes ', '5000', '23121544894', 'Ali', '1662801073-images.jpg'),
(30, 3, 'admin@gmail.com', 'Welding Machine', 'amperage needs and the available power.', '20000', '21215165156', 'Saad', '1662801962-download (6).jpg'),
(31, 4, 'admin@gmail.com', 'Dining Table', 'Dining table contain six comfy chairs ', '20000', '21156484849', 'Arsalan', '1662802730-stephan-coudassot-xstTzTRiJ4k-unsplash.jpg'),
(32, 4, 'admin@gmail.com', 'Book shelf', 'Show off your extensive book collection with this ', '10000', '21568489432', 'Ali ', '1662802826-chuttersnap-m3ewYVannII-unsplash.jpg'),
(34, 5, 'admin@gmail.com', 'Baseball bat with ball', 'baseball the bats are tubular, being no more 7', '5000', '21518645165', 'Arsalan', '1662803022-istockphoto-818317166-170667a.jpg'),
(35, 5, 'adam@gmail.com', 'Golf club', 'new golf club with rubber grip', '3000', '31515615165', 'Saad', '1662804715.jpg'),
(36, 5, 'adam@gmail.com', 'Ski with pair of sticks', 'strip of semi-rigid material worn underfoot ', '10000', '16515616515', 'Arsalan', '1662804781.jpg'),
(42, 1, 'admin@gmail.com', 'Dish washer', 'Durable and energy efficient', '15000', '21231165165', 'Arsalan', '1662919031-istockphoto-1297492974-170667a.jpg'),
(44, 3, 'admin@gmail.com', 'Grinding Machine', 'Old style machine with sharp blades', '2000', '45165156156', 'Arsalan', '1662921388.jpg'),
(45, 4, 'adam@gmail.com', 'Book case', 'Wooden case with 3 shelves', '300', '16516515616', 'Ali', '1662923723.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `customer_id` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `income` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`customer_id`, `gender`, `age`, `income`) VALUES
(3, 'Male', '25', '25'),
(4, 'Female', '21', '23'),
(5, 'Female', '19', '32'),
(6, 'Male', '29', '12'),
(7, 'Male', '29', '12'),
(8, 'Female', '28', '32'),
(9, 'Male', '26', '30'),
(10, 'Female', '24', '19'),
(11, 'Female', '24', '19'),
(12, 'Male', '19', '52'),
(13, '', '32', '32'),
(14, 'Male', '23', '23'),
(15, 'Female', '23', '32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_order`
--
ALTER TABLE `buy_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_ad`
--
ALTER TABLE `post_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_order`
--
ALTER TABLE `rent_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `buy_order`
--
ALTER TABLE `buy_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post_ad`
--
ALTER TABLE `post_ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `rent_order`
--
ALTER TABLE `rent_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
