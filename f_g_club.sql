-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2024 at 09:19 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f_g_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `caption`, `description`, `image`) VALUES
(1, 'Gaming Lounge', 'Relaxing seating area for gamers', 'https://www.sportstravelmagazine.com/wp-content/uploads/2021/12/P1179802_AN-Select_edit-scaled.jpg'),
(2, 'Gaming Tournaments', 'Competitive tournaments for gamers', 'https://picsum.photos/350/250/?image=235'),
(3, 'Community Gatherings', 'Vibrant gatherings of gaming enthusiasts', 'https://picsum.photos/350/250/?image=238'),
(4, 'Epic Events', 'Exciting events with multiplayer battles', 'https://picsum.photos/350/250/?image=239'),
(5, 'Setup Showcase', 'State-of-the-art gaming setups on display', 'https://picsum.photos/350/250/?image=242'),
(6, 'Immersive Atmosphere', 'Futuristic decor for an immersive gaming experience', 'https://picsum.photos/350/250/?image=243'),
(7, 'Variety of Consoles', 'Diverse selection of gaming consoles available', 'https://picsum.photos/350/250/?image=245'),
(8, 'Top Gaming Gear', 'High-quality gaming gear for enthusiasts', 'https://picsum.photos/350/250/?image=247'),
(9, 'Networking Opportunities', 'Networking with fellow gamers and professionals', 'https://picsum.photos/350/250/?image=248');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `release_date` int NOT NULL,
  `genre` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `release_date`, `genre`, `description`, `image`) VALUES
(1, 'EA SPORTS FC 24', 2022, 'Sports', 'Experience the thrill of football with EA SPORTS FC 24. Build your dream team, compete in tournaments, and dominate the pitch!', 'images/fc24.jpg'),
(2, 'NBA 2K24', 2022, 'Sports', 'Dribble, shoot, and dunk your way to victory in NBA 2K24. Featuring stunning graphics, realistic gameplay, and immersive modes.', 'images/nba2k24.webp'),
(3, 'Metro: Last Light', 2013, 'Action', 'Venture into the dark and dangerous world of Metro: Last Light. Survive mutant creatures, explore underground tunnels, and unravel a gripping story.', 'images/metrolastlight.jpg'),
(4, 'Minecraft', 2009, 'Adventure', 'Enter a world of endless possibilities in Minecraft. Build, explore, and survive in a blocky universe filled with adventure and creativity.', 'images/minecraft.jpeg'),
(5, 'PlayerUnknown\'s Battlegrounds (PUBG)', 2017, 'Action', 'Parachute onto an island, scavenge for weapons, and survive to be the last one standing in PUBG. It\'s a battle royale like no other.', 'images/pubg.avif'),
(6, 'Assassin\'s Creed IV: Black Flag', 2013, 'Action-Adventure', 'Set sail on a pirate adventure in Assassin\'s Creed IV: Black Flag. Explore the Caribbean, plunder ships, and uncover hidden treasures.', 'images/ac4.jpg'),
(7, 'Red Dead Redemption 2', 2018, 'Action-Adventure', 'Immerse yourself in the expansive open-world of Red Dead Redemption 2. Ride horses, rob trains, and experience the dying days of the Wild West.', 'images/rdr2.jpg'),
(8, 'Resident Evil 7: Biohazard', 2017, 'Horror', 'Step into the terrifying world of Resident Evil 7: Biohazard. Survive a deranged family and uncover the mysteries of the Baker estate.', 'images/re7.jpg'),
(9, 'Assassin\'s Creed: Valhalla', 2020, 'Action-Adventure', 'Embark on a Viking adventure in Assassin\'s Creed: Valhalla. Raid villages, build settlements, and carve out your legend in medieval England.', 'images/acv.jpg'),
(10, 'Valheim', 2021, 'Survival', 'Explore the mystical world of Valheim. Craft weapons, build homes, and battle mythical creatures in this Norse-inspired survival game.', 'images/valheim.png');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `title`, `date`, `time`, `description`) VALUES
(1, 'PUBG Tournament', '2024-03-26', '15:00:00', 'Join us for an exhilarating PUBG tournament where the best players will battle it out for glory and fantastic prizes!'),
(2, 'FC 24 Championship', '2024-04-02', '16:30:00', 'Compete in the ultimate FC 24 Championship and prove your skills on the virtual pitch. Win matches, climb the leaderboard, and claim victory!'),
(3, 'NBA 2K24 Showdown', '2024-04-09', '18:00:00', 'Prepare for an intense NBA 2K24 showdown! Take on opponents in thrilling basketball matches, showcase your dribbling, shooting, and dunking skills, and emerge as the champion!'),
(4, 'Metro: Last Light Survival Challenge', '2024-04-16', '20:00:00', 'Embark on a thrilling Metro: Last Light Survival Challenge! Navigate through post-apocalyptic landscapes, scavenge for resources, and confront dangerous enemies. Only the bravest and most resourceful will survive!'),
(5, 'Minecraft Build Competition', '2024-04-10', '14:00:00', 'Unleash your creativity in our Minecraft Build Competition! Construct impressive structures and showcase your building prowess to win amazing prizes!'),
(6, 'FC 24 Community Cup', '2024-02-20', '14:00:00', 'Join us for the FC 24 Community Cup, where players from the local community gather to compete in friendly matches and showcase their skills on the virtual pitch.'),
(7, 'NBA 2K24 Retro Tournament', '2024-02-10', '16:30:00', 'Step back in time with the NBA 2K24 Retro Tournament! Relive the glory days of basketball gaming as players compete in vintage matchups using classic teams and historic arenas.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `password`, `tel`) VALUES
(1, 'SmirTa', 'samirTaouss@gmail.com', '6faf3ec06b360e5170c507d5b51ebbee', '0706746127'),
(2, 'SalahJb', 'salah8jab@gmail.com', '123salah', '0706746127'),
(3, 'sdfghj', 'sdfgh@gmail.com', '164ced40da0a61fa08cfed0412dc587f', '2345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
