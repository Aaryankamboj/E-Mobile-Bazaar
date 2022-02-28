SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(10) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_prev_price` varchar(10) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------

-- Dumping data for table `product`
INSERT INTO `product` (`item_id`,`item_brand`,`item_name`,`item_price`,`item_image`,`item_prev_price`,`item_register`) VALUES
(1,'Oppo','A-74 5G','16,990','../assets/product_images/1.png','18,990','2022-02-28 11:08:57'), -- NOW()
(2,'Samsung','Samsung Galaxy M-11','11,999','../assets/product_images/2.png','13,999','2022-02-28 11:08:57'),
(3,'Samsung','Samsung Galaxy A-51 ','20,099','../assets/product_images/3.png','22,099','2022-02-28 11:08:57'),
(4,'Samsung','Samsung Galaxy A-52 ','26,249','../assets/product_images/4.png','28,249','2022-02-28 11:08:57'),
(5,'Samsung','Samsung Galaxy M-12 ','13,499','../assets/product_images/5.png',',15,499','2022-02-28 11:08:57'),
(6,'Samsung','Samsung Galaxy F-42 5G ','20,999','../assets/product_images/6.png','22,999','2022-02-28 11:08:57'),
(7,'Samsung','Samsung Galaxy M-32 5G','20,999','../assets/product_images/7.png','22,999','2022-02-28 11:08:57'),
(8,'Samsung','Samsung Galaxy S-21 FE','54,999','../assets/product_images/8.png','56,999','2022-02-28 11:08:57'),
(9,'Samsung','Samsung Galaxy S-21 5G','99,985','../assets/product_images/9.png','102,985','2022-02-28 11:08:57'),
(10,'Samsung','Samsung Galaxy S7','17,999','../assets/product_images/34.png','19,999','2022-02-28 11:08:57'),
(11,'Samsung','Samsung Galaxy M-21','12,999','../assets/product_images/10.png','14,999','2022-02-28 11:08:57'),
(12,'Samsung','Samsung Galaxy A22 5G','19,999','../assets/product_images/11.png','21,999','2022-02-28 11:08:57'),
(13,'Samsung','Samsung Galaxy S7 Edge','26,999','../assets/product_images/43.png','28,999','2022-02-28 11:08:57'),
(14,'Samsung','Samsung Galaxy S6','23,999','../assets/product_images/11.png','25,999','2022-02-28 11:08:57'),
(15,'Apple','Apple iPhone X 64GB','64,999','../assets/product_images/44.png','66,999','2022-02-28 11:08:57'),
(16,'Apple','Apple iPhone 12 64GB','53,999','../assets/product_images/12.png','55,999','2022-02-28 11:08:57'),
(17,'Apple','iPhone12-Mini 64GB','48,999','../assets/product_images/13.png','50,999','2022-02-28 11:08:57'),
(18,'Apple','iPhone13-ProMax 128GB','1,29,099','../assets/product_images/15.png','1,31,099','2022-02-28 11:08:57'),
(19,'Apple','Apple iPhone11 64GB','49,999','../assets/product_images/16.png','51,999','2022-02-28 11:08:57'),
(20,'Apple','Apple iPhone11 128GB','54,900','../assets/product_images/17.png','56,900','2022-02-28 11:08:57'),
(21,'Apple','Apple iPhone12 128GB','62,999','../assets/product_images/.png','64,999','2022-02-28 11:08:57'),
(22,'Apple','Apple iPhone XR-128GB','42,999','../assets/product_images/19.png','44,999','2022-02-28 11:08:57'),
(23,'Apple','Apple iPhone XR-64GB','34,999','../assets/product_images/20.png','36,999','2022-02-28 11:08:57'),
(24,'Apple','Apple iPhone X-128GB ','79,999','../assets/product_images/44.png','81,999','2022-02-28 11:08:57'),
(25,'Redmi','Mi-9 Activ 4GB','9,999','../assets/product_images/21.png','11,999','2022-02-28 11:08:57'),
(26,'Redmi','Mi 9A 2GB','7,499 ','../assets/product_images/22.png','9,499','2022-02-28 11:08:57'),
(27,'Redmi','Mi Note-11','13,199','../assets/product_images/23.png','15,199','2022-02-28 11:08:57'),
(28,'Redmi','Mi 10-Prime 6GBRAM','14,199','../assets/product_images/24.png','16,199','2022-02-28 11:08:57'),
(29,'Redmi','Redmi Note 11T 5G','16,199','../assets/product_images/25.png','18,199','2022-02-28 11:08:57'),
(30,'Redmi','Redmi Note-10S 8GBRAM','17,499','../assets/product_images/26.png','19,499','2022-02-28 11:08:57'),
(31,'Redmi','Xiaomi-11i 5G 6GBRAM','26,896','../assets/product_images/27.png','28,896','2022-02-28 11:08:57'),
(32,'Redmi','Xiaomi-11i LiteNE 5G','28,999','../assets/product_images/28.png','30,999','2022-02-28 11:08:57'),
(33,'Redmi','Xiamo Note-8','19,999','../assets/product_images/35.png','21,999','2022-02-28 11:08:57'),
(34,'Redmi','Xiamo Note-7 8GB','17,999','../assets/product_images/37.png','19,999','2022-02-28 11:08:57'),
(35,'Redmi','Xiamo Note-7 X','18,399','../assets/product_images/38.png','20,399','2022-02-28 11:08:57'),
(36,'Redmi','Mi Note-9 Narzo 30','20,399','../assets/product_images/39.png','22,399','2022-02-28 11:08:57'),
(37,'Oppo','Oppo A-15S 4GB','13,990','../assets/product_images/29.png','15,990','2022-02-28 11:08:57'),
(38,'Oppo','Oppo A-31 6GB','12,990','../assets/product_images/30.png','14,990','2022-02-28 11:08:57'),
(39,'Oppo','Oppo A-31 8GB','14,990','../assets/product_images/31.png','16,990','2022-02-28 11:08:57'),
(40,'Oppo','Oppo A-12 Black 3GB','9,720','../assets/product_images/32.png','11,720','2022-02-28 11:08:57'),
(41,'Oppo','Oppo F-19 Pro 128GB','21,990','../assets/product_images/33.png','23,990','2022-02-28 11:08:57')
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'E-Mobile', 'Bazaar', '2022-02-28 13:07:17'),
(2, 'Aaryan', 'Kamboj', '2022-02-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

