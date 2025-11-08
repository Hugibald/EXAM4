-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2025 at 05:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be26_exam4_verenamader_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be26_exam4_verenamader_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be26_exam4_verenamader_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `ISBN` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `type` enum('Book','CD','DVD') DEFAULT NULL,
  `author_first_name` varchar(20) NOT NULL,
  `author_last_name` varchar(30) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(100) NOT NULL,
  `publish_date` date NOT NULL,
  `availability` enum('available','reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`ISBN`, `title`, `image`, `description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `availability`) VALUES
('0-307-26543-9', 'The Road', 'https://images.thalia.media/-/BF2000-2000/366dd3d403c444589564e7eb64f086df/the-road-taschenbuch-cormac-mccarthy-englisch.jpeg', 'A father and his son walk alone through burned America. Nothing moves in the ravaged landscape save the ash on the wind. It is cold enough to crack stones, and when the snow falls it is gray. The sky is dark. Their destination is the coast, although they don´t know what, if anything, awaits them there. They have nothing; just a pistol to defend themselves against the lawless bands that stalk the road, the clothes they are wearing, a cart of scavenged food—and each other.', 'Book', 'Cormac', 'McCarthy', 'Vintage International', 'New York, NY, USA', '2007-05-01', 'available'),
('019-6-58-801032-3', 'Random Access Memories', 'https://muzikercdn.com/uploads/products/14614/1461478/main_5103d2a8.JPG', 'Innovative from the very beginning: With their first album Homework in 1997, Daft Punk gave the house genre a fresh boost, experimenting with distorted samples and punk spirit. To this day, the debut album has sold over 2.5 million copies and, with songs like Around the World, laid the foundation for the house movement.\r\nWith One More Time, the first single from the album Discovery was released in 2000. The hit stormed into the Top Ten worldwide and became the duo’s greatest commercial success.\r\nTheir most recent success came alongside Kanye West with their collaboration on the song Stronger.', 'CD', 'Draft', 'Punk', 'Columbia Records', 'New York, NY, USA', '2023-05-12', 'available'),
('060-2-51-714211-4', 'Back to Black', 'https://images.thalia.media/-/BF2000-2000/3ad258335fa54fd9a2ca47e9172eaf52/back-to-black-cd-amy-winehouse.jpeg', 'Back to Black is the acclaimed album by Amy Winehouse, celebrated for its distinctive blend of soul, jazz, and R&B. The singer´s powerful voice captivates listeners, conveying profound emotions. The production stands out with a classic yet modern sound, making the album a timeless masterpiece. A must-listen for all fans of impactful music.', 'CD', 'Amy', 'Winehouse', 'Island Records', 'London, UK', '2006-11-01', 'reserved'),
('063-4-90-405202-7', '21', 'https://images.thalia.media/00/-/660564153f944354a77eae615e91a2fb/21-cd-adele.jpeg', 'Adele delivers with 21 a more than worthy successor to her successful debut 19. Adele herself describes it as a dark, bluesy gospel disco tune, and it´s already getting heavy airplay on radio stations everywhere.\r\nDespite her young age, Adele can already look back on an impressive career. At 19, she became the first artist ever to receive the BRITs Critics´ Choice Award. Her Mercury-nominated debut album 19 went straight to No. 1 on the UK Albums Chart, was certified double platinum, and sold more than 2 million copies worldwide. Her debut single Chasing Pavements was also a huge hit, reaching No. 2 in the UK and achieving success around the globe.\r\nIn 2009, at just 20 years old, Adele won two Grammys: Best New Artist and Best Female Pop Vocal Performance. Adele truly had an incredible start — but watch out: Chapter 2 is only just beginning!', 'CD', 'Adele', 'Adkins', 'XL Recordings / Columbia Records', 'London, UK / New York, NY, USA', '2011-01-21', 'available'),
('088-6-97-871809-9', 'The King´s Speech', 'https://images.thalia.media/-/BF2000-2000/9e660ea07d1845e2ae43f0532cb324cb/the-king-s-speech-die-rede-des-koenigs-dvd-colin-firth.jpeg', 'Colin Firth shines in The King´s Speech as the stammering English King George VI, father of Queen Elizabeth. As the son of the British king, it is his duty to speak publicly—but for the shy young man, who has struggled with severe stammering since childhood, every public appearance becomes a torment. With the help of his devoted wife Elizabeth and the eccentric speech therapist Lionel Logue, who gradually becomes a trusted friend, he strives to overcome his weakness. Yet an unexpected revelation threatens to undo all his efforts…', 'DVD', 'Tom', 'Hooper', 'Momentum Pictures', 'London, UK', '2011-09-02', 'available'),
('505-1-89-002506-7', 'Inception', 'https://images.thalia.media/-/BF2000-2000/938d2e34f91a46258918c1b38b835453/inception-dvd-leonardo-dicaprio.jpeg', 'Cobb is the leader of a technologically advanced team of thieves who have discovered a way to plant and manipulate ideas in people´s minds by entering their dreams. Their mission is to persuade the up-and-coming manager Fischer to break up his future company. Cobb isn´t entirely selfless, however, as he is being blackmailed by the mysterious Saito. When Cobb´s wife urges him to leave the problems of the real world behind and stay with her in a dream, he is forced to make a choice.', 'DVD', 'Christopher', 'Nolan', 'Warner Bros. Pictures', 'Burbank, CA, USA', '2010-12-03', 'reserved'),
('978-0-06-231500-7', 'The Alchemist', 'https://images.thalia.media/-/BF2000-2000/a2d8079e53d24044b3153ef8d4a31e47/the-alchemist-taschenbuch-paulo-coelho-englisch.jpeg', 'A magical fable about learning to listen to your heart, read the omens strewn along life´s path and, above, all follow your dreams.\r\n\r\nThis is the magical story of Santiago, an Andalusian shepherd boy who dreams of travelling the world in search of a worldly treasure as fabulous as any ever found. From his home in Spain he journeys to the markets of Tangiers, and from there into the Egyptian desert, where a fateful encounter with the alchemist awaits him.', 'Book', 'Paulo', 'Coelho', 'HarperOne', 'New York, NY, USA', '2014-04-15', 'available'),
('978-0-09-957033-2', 'The Sense of an Ending', 'https://images.thalia.media/-/BF2000-2000/09a90da1cd204a47b21f30f5704f9f9e/the-sense-of-an-ending-taschenbuch-julian-barnes-englisch.jpeg', 'How reliable is memory? How unchangeable is one´s own past?\r\nTony Webster must learn that events long gone—things he believed he would never have to question again—can suddenly appear in an entirely new light. When Adrian Finn joins Tony Webster´s class, the two boys quickly become friends. Even after their school days, they stay in touch—until their friendship comes to an abrupt end.\r\nForty years later, Tony has gone through a marriage, an amicable divorce, and a career. He feels at peace with himself. But then a letter from a lawyer, connected to an inheritance, suddenly casts doubt on the supposedly solid facts of his own life story. The more Tony learns, the more uncertain his memories become—and the more unpredictable the consequences for his future.', 'Book', 'Julian', 'Barnes', 'Vintage International', 'New York, NY, USA', '2012-03-01', 'reserved'),
('978-0-14-104302-9', 'Outliers: The Story of Success', 'https://images.thalia.media/-/BF2000-2000/0963f91e855c49fb90b43f03653d6ca7/outliers-taschenbuch-malcolm-gladwell-englisch.jpeg', 'In this provocative and inspiring book, Malcolm Gladwell looks at everyone from rock stars to professional athletes, software billionaires to scientific geniuses, to show that the story of success is far more surprising, and far more fascinating, than we could ever have imagined.\r\nHe reveals that it´s as much about where we´re from and what we do, as who we are - and that no one, not even a genius, ever makes it alone.\r\nOutliers will change the way you think about your own life story, and about what makes us all unique.', 'Book', 'Malcolm', 'Gladwell', 'Penguin Books', 'London, UK', '2009-06-04', 'available'),
('978-0-76-790818-4 ', 'A Short History of Nearly Everything', 'https://images.thalia.media/-/BF2000-2000/5ebf6a4bef944a34bcd16758a11b6451/a-short-history-of-nearly-everything-2-0-taschenbuch-bill-bryson-englisch.jpeg', 'Bill Bryson describes himself as a reluctant traveller, but even when he stays safely at home he can´t contain his curiosity about the world around him. A Short History of Nearly Everything is his quest to understand everything that has happened from the Big Bang to the rise of civilisation - how we got from there, being nothing at all, to here, being us. The ultimate eye-opening journey through time and space, revealing the world in a way most of us have never seen it before.', 'Book', 'Bill', 'Bryson', 'Broadway Books', 'New York, NY, USA', '2003-01-01', 'available'),
('978-1-85326-158-9', 'The Little Prince', 'https://images.thalia.media/-/BF2000-2000/10a4c2b6b906434c87f8a61300c1b125/the-little-prince-taschenbuch-antoine-de-saint-exupery-englisch.jpeg', 'The Little Prince is a classic tale of equal appeal to children and adults. On one level it is the story of an airman´s discovery, in the desert, of a small boy from another planet - the Little Prince of the title - and his stories of intergalactic travel, while on the other hand it is a thought-provoking allegory of the human condition', 'Book', 'Antoine', 'de Saint-Exupéry', 'Reynal & Hitchcock', 'New York City, NY, USA', '1943-04-06', 'reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
