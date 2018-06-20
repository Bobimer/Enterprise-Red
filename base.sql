-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 20, 2018 at 09:20 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `greenings`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `event_name` varchar(40) NOT NULL,
  `event_date` datetime NOT NULL,
  `event_place` varchar(100) NOT NULL,
  `event_theme` enum('Ramassage simple','Ballade','Ludique','Sport','Autres') NOT NULL,
  `event_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `id_user`, `event_name`, `event_date`, `event_place`, `event_theme`, `event_desc`) VALUES
(1, 3, 'MUSCU ECOLO', '2018-06-09 14:00:00', 'Cergy', 'Sport', 'Venez faire le parcours sportif de Cergy avec moi. On va devenir des beaux gosses écolo !!! hahahaha'),
(2, 1, 'COUP DE BALAI SUR LA PLAGE', '2018-06-01 09:00:00', 'Plage de Larmor', 'Ramassage simple', 'Préparons les plages pour nos vacanciers'),
(3, 4, 'ON THE RUN', '2018-04-10 16:00:00', 'Stade de France', 'Autres', 'Come clean the place while I do my show with my great husband Jay-Z'),
(4, 3, 'LOVE THE NATURE', '2018-02-14 08:00:00', 'Rambouillet', 'Ramassage simple', 'Crie ton love à la nature.\r\nRamassage simple de déchets dans la forêt de Rambouillet');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id_link` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_login` varchar(40) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_login`, `user_email`, `user_pwd`) VALUES
(1, 'lealablg', 'blg78@gmail.com', 'prout'),
(3, 'toto3000', 'toto3000@hotmail.fr', 'toto'),
(4, 'Beyonce', 'queen-b@gmail.com', 'blueivy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id_link`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `link`
--
ALTER TABLE `link`
  ADD CONSTRAINT `link_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `link_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;
