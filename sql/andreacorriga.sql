-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 28, 2018 alle 16:41
-- Versione del server: 10.1.31-MariaDB
-- Versione PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andreacorriga`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `graduate` varchar(32) NOT NULL,
  `school` varchar(64) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `vote` int(11) NOT NULL,
  `vote_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `education`
--

INSERT INTO `education` (`id`, `graduate`, `school`, `duration`, `description`, `vote`, `vote_max`) VALUES
(1, 'High School Graduation', 'Technical Institute Michele Giua', '2007 - 2012', 'Design of computer systems, project management, business organization, development of web applications in PHP with MySQL database and web application development with Code Igniter Framework.', 83, 100),
(2, 'Bachelor Degree', 'University of Cagliari', '2013 - 2016', 'Focused on: Programming languages, Operating System, Algorithms and Data Structures, Computer Networks, Microprocessor Architecture, Object Oriented Programming, Database, Software Engineering.', 109, 110),
(3, 'Master\'s Degree', 'University of Cagliari', '2016 - 2018', 'Focused on: Image Analysis Processing, Cisco Certifications, Computer Vision, Big Data (Spark), Data Mining, Decision Science.', 100, 110);

-- --------------------------------------------------------

--
-- Struttura della tabella `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(512) NOT NULL,
  `string_date` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `publications`
--

INSERT INTO `publications` (`id`, `title`, `description`, `link`, `string_date`) VALUES
(1, 'Leveraging Cognitive Computing for Gender and Emotion Detection', 'Leveraging Cognitive Computing for Gender and Emotion Detection. Andrea Corriga, Simone Cusimano, Francesca Malloci, Lodovica Marchesi, and Diego Reforgiato Recupero. Proceedings of 4th Workshop on Sentic Computing, Sentiment Analysis, Opinion Mining, and Emotion Detection (EMSASW 2018). Co-located with the 15th Extended Semantic Web Conference 2018 (ESWC 2018). CEUR Proceedings pp. 47-56', 'http://ceur-ws.org/Vol-2111/', 'Heraklion, Greece, June 4, 2018.');

-- --------------------------------------------------------

--
-- Struttura della tabella `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
(1, 'Html5'),
(2, 'Css3'),
(3, 'Sass'),
(4, 'Less'),
(5, 'Git'),
(6, 'Php'),
(7, 'C'),
(8, 'C++'),
(9, 'Java'),
(10, 'Python'),
(11, 'Javascript'),
(12, 'CodeIgniter');

-- --------------------------------------------------------

--
-- Struttura della tabella `work_experiences`
--

CREATE TABLE `work_experiences` (
  `id` int(11) NOT NULL,
  `job_name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `role` varchar(64) NOT NULL,
  `location` varchar(64) NOT NULL,
  `duration` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `work_experiences`
--

INSERT INTO `work_experiences` (`id`, `job_name`, `description`, `role`, `location`, `duration`) VALUES
(1, 'Microsoft Student Partner', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 'Evangelist', 'Cagliari', 'From July 2015 to July 2018'),
(2, 'Internship at CICT', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 'Software Developer', 'Cagiari', 'From March to June 2016'),
(3, 'Freelancer & Webmaster', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 'Founder & Lead Developer', 'Cagliari', 'From 2011 to Today');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
