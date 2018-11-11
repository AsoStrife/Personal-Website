-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Nov 11, 2018 alle 16:45
-- Versione del server: 5.6.41
-- Versione PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lzaslddj_andreacorriga`
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
  `vote` int(11) DEFAULT NULL,
  `vote_max` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `education`
--

INSERT INTO `education` (`id`, `graduate`, `school`, `duration`, `description`, `vote`, `vote_max`) VALUES
(1, 'High School Graduation', 'Technical Institute Michele Giua', '2007 - 2012', 'Design of computer systems, project management, business organization, development of web applications in PHP with MySQL database and web application development with Code Igniter Framework.', 83, 100),
(2, 'Bachelor Degree', 'University of Cagliari', '2013 - 2016', 'Focused on: Programming languages, Operating System, Algorithms and Data Structures, Computer Networks, Microprocessor Architecture, Object Oriented Programming, Database, Software Engineering.', 109, 110),
(3, 'Master\'s Degree', 'University of Cagliari', '2016 - 2018', 'Focused on: Image Analysis Processing, Cisco Certifications, Computer Vision, Big Data (Spark), Data Mining, Decision Science.', 110, 110),
(4, 'Cisco CCNA 1', 'University of Cagliari', 'October 20, 2016', 'CCNA Routing and Switching: Introduction to Networks. ', NULL, 0),
(5, 'Cisco CCNA 2', 'University of Cagliari', 'November 15, 2016', 'CCNA Routing and Switching: Routing and Switching Essentials', NULL, 0),
(6, 'PhD Student', 'University of Cagliari', '2018 - Now', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `url` varchar(256) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `projects`
--

INSERT INTO `projects` (`id`, `name`, `url`, `description`) VALUES
(1, 'UnicApp', 'https://github.com/UnicApp', '<p> <strong>UnicApp</strong> is a full open-source project that contains a set of multi-platform apps to allow the students of University Of Cagliari to check their profile. UnicApp is available for Android, iOS, Windows, Mac Os, Linux, Google Chrome and Telegram Bot. Check the co-founder website <a href=\"https://cedoor.org\" title=\"Omar Desogus, a curious, stubborn and meticulous programmer\" target=\"_blank\"><strong>Omar Desogus</strong></a>. </p> '),
(2, 'Leveraging Cognitive Computation Text Extraction Tools to Detect Emotions from Facial Expressions', 'https://github.com/AsoStrife/Leveraging-Cognitive-Computation-Text-ExtractionTools-to-Detect-Emotions-from-Facial-Expressions', '<p>This project is a multi-label classification system that can detect whether a given image contains a face expression. If it does, it is classified according to six possible emotions: sadness, anger, surprise, happiness, disgust, fear.</p>'),
(3, 'Face Recognition Project', 'https://github.com/AsoStrife/Computer-Vision-Project', '<p>The goal of this project was to develop a Face Recognition application using a Local Binary Pattern approach and, using the same approach, a real time Face Recognition application.</p>');

-- --------------------------------------------------------

--
-- Struttura della tabella `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(512) NOT NULL,
  `string_date` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `publications`
--

INSERT INTO `publications` (`id`, `title`, `description`, `url`, `string_date`) VALUES
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
  `society` varchar(32) DEFAULT NULL,
  `job_name` varchar(64) NOT NULL,
  `location` varchar(64) NOT NULL,
  `role` varchar(64) NOT NULL,
  `duration` varchar(64) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `work_experiences`
--

INSERT INTO `work_experiences` (`id`, `society`, `job_name`, `location`, `role`, `duration`, `description`) VALUES
(1, 'Microsoft Italy', 'Microsoft Student Partner', 'Cagliari', 'Evangelist', 'From July 2015 to July 2018', '<p>Microsoft Evangelist for three years, two of them as team leader, about:  </p>\r\n<ul>\r\n	<li>Microsoft Azure </li>\r\n	<li>Microsoft Universal Windows Platform Apps </li>\r\n	<li>Windows Phone </li>\r\n	<li>Windows 10 Technologies </li>\r\n</ul>\r\n\r\n<p>Presenter at several University conferences, talking about different technologies offered by Microsoft for the developers. <br>\r\nPresenter at the following University conferences: </p>\r\n\r\n<ul>\r\n	<li>Academic Opening Meeting (October 10, 2015) </li>\r\n	<li>Global Azure Bootcamp (April 23, 2015) </li>\r\n	<li>Microsoft Azure for DreamSpark Academic Tour (April 2, 2016) </li>\r\n	<li>GameDev Tour (December 17, 2016) </li>\r\n</ul>'),
(2, 'CICT', 'Internship', 'Cagiari', 'Software Developer', 'From March to June 2016', 'It was compulsory internship to obtain Bachelor’s Degree. Has done a real-time application to control the various vehicles in the company area. This project was presented to the discussion of the thesis with title: <i>An application for Logistic Platform Container Management</i>. '),
(3, 'Freelancer', 'Selft-Empoyment', 'Cagliari', 'Software Developer', 'From 2011 to Today', 'Worked on static and dynamic websites to meet the needs of different customers. For more details check the portfolio available on <a href=\"https://github.com/AsoStrife\" target=\"_blank\"> GitHub </a>'),
(4, 'Animal New Tech SR', 'Self-Employment ', 'Cagliari', 'Software Developer', 'Summer 2016', 'Developer of a Web Application to control the production of wheat, milk and other food products of the companies provided by Animal New Tech SRL Animal New Tech SRL is a Spin-off of University of Sassari.'),
(5, 'University of Cagliari', 'Self-Employment ', 'Cagliari', 'Software Developer', 'October 2016 to July 2018', '<p>Winner of the public announcement Laore <i>Prot. n. 51295 del 09/03/2017</i> having as object: “Analisi e studio di un modello di piattaforma multiutenza/multidevice finalizzata alla creazione di un sistema predittivo, con funzioni di decision support system, per la gestione di areali attraverso l’impiego di algoritmi predittivi e di analisi dinamica di dati, anche massivi, di tipo multidimensionale. Tale attività sarà finalizzata all’analisi e alla ricerca scientifica su modelli algoritmici applicabili alla realizzazione di una piattaforma dedicata per la fornitura di sistemi di supporto alle decisioni specifiche per le imprese agricole, nell’ambito del progetto: “Progetto di ricerca su applicazioni predittive in ambito agricolo e ambientale in raccordo con l\'Agenzia LAORE Sardegna””. </p>\r\n\r\n<p> <a href=\"https://goo.gl/ci4huy\" target=\"_blank\"> Public Announcement </a> </p>');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `projects`
--
ALTER TABLE `projects`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `projects`
--
ALTER TABLE `projects`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
