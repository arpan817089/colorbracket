-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 08:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `recipe_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `items`, `amount`, `unit`, `recipe_id`) VALUES
(301, 'rice', '500', 'gm', 201),
(302, 'ghee', '100', 'gm', 201),
(303, 'cashew', '5-6', 'piece', 201),
(304, 'pasta', '250', 'gm', 202),
(305, 'creme', '25', 'ml', 202),
(306, 'wheat floor', '200', 'gm', 203);

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(100) NOT NULL,
  `step` varchar(500) NOT NULL,
  `recipe_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `step`, `recipe_id`) VALUES
(401, 'Wash rice and soak it in water for 15-20 minutes. Drain and keep aside until needed.\nHeat ghee and oil together in a pressure cooker (2-liter capacity, stainless steel cooker) on low flame. Add bay leaf, cinnamon, clove, and sauté for 30 seconds. Add onion and sauté until it turns light brown or for approx. 2 minutes.', 201),
(402, '1. Use a large pot\r\n2. Load up the pot with lots of water\r\n3. Salt the water\r\n4. Bring the water to a full, rolling boil\r\n5. Stir to keep the pasta from sticking\r\n6. Test the pasta two minutes before it’s “ready”\r\n7. Save a scoop of pasta water\r\n8. Drain, toss with sauce, and serve hot\r\n', 202),
(403, 'Take it away from heat and transfer to a plate. Spread butter as per your liking. Follow the same process for remaining dough balls. Serve it with curd and pickle or with paneer do pyaza.', 203);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `creator_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `desc`, `image_url`, `creator_id`) VALUES
(201, 'Pulao', 'This special recipe is my mom’s and is my go-to recipe when making veg pulao. The dish is also vegetarian and is great on its own or paired with raita (an Indian yogurt dish), pickle and roasted papad (a crisp thin Indian snack).\n\n', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/pulao-veg-pulao.jpg', 102),
(202, 'Pasta', 'these saucy, creamy and spicy pasta are generally prepared with penne pasta variant but can be experimented with any type of pasta variant.', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2019/05/masala-pasta-500x500.jpg', 101),
(203, 'Paratha', 'In a large mixing bowl add 2 cups of whole wheat flour, 1 teaspoon of oil or ghee, ½ teaspoon of salt.Add ½ cup water in portions as you go on mixing and kneading the dough. Keep in mind not to add all of the water at once.', 'https://indianvegrecipe.com/wp-content/uploads/2019/10/paratha-recipe.jpg', 103);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_id`, `password`) VALUES
(101, 'Mr.A', 'mra', '123'),
(102, 'Mrs.B', 'mrsb', 'xyz'),
(103, 'Ms.C', 'msc', 'a@1'),
(113, 'Arpan', 'mrd', '1234'),
(114, 'Anima', '12345', '234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
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
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
