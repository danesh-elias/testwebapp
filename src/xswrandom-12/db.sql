
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `csoctrain`
--
CREATE DATABASE IF NOT EXISTS `csoctrain` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `csoctrain`;

-- --------------------------------------------------------


--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(33) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `description`) VALUES
(1, 'rambo', '1aa225e7e387c8ac922a9cf88e3b2c7a', 'Rambo', 'Live for nothing, or die for something');
