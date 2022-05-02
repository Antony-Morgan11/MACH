-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 06:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `places`
--

-- --------------------------------------------------------

--
-- Table structure for table `idoor`
--

CREATE TABLE `idoor` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `pth` varchar(225) NOT NULL,
  `embed` varchar(10000) NOT NULL,
  `website` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idoor`
--

INSERT INTO `idoor` (`id`, `title`, `pth`, `embed`, `website`) VALUES
(1, 'Il Fornaio San Jose', '20.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6530.906290533247!2d-121.89250668080436!3d37.3308579418074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fccba8f6ba7d3%3A0xb0e4939712ce8fe1!2sIl%20Fornaio%20San%20Jose!5e0!3m2!1sen!2sus!4v1651427911589!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.ilfornaio.com/location/il-fornaio-san-jose/'),
(2, 'Yard House', '21.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d19431.937261936484!2d-121.9589180303446!3d37.32185909189354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x808fcae018ca4a35%3A0x279ae180a6f8a82f!2sYard%20House%2C%20300%20Santana%20Row%20Suite%20101%2C%20San%20Jose%2C%20CA%2095128!3m2!1d37.3228547!2d-121.9475135!5e0!3m2!1sen!2sus!4v1651428126835!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.yardhouse.com/locations/ca/san-jose/san-jose-santana-row/8330?cmpid=br:yh_ag:ie_ch:loc_ca:YHGMB_sn:gmb_gt:san-jose-ca-8330_pl:locurl_rd:1028'),
(3, 'The City Fish', '22.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12689.046153657699!2d-121.89847307119763!3d37.33631643830764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fccbcd1b4cffb%3A0x2509e8dceb4d0ad3!2sThe%20City%20Fish!5e0!3m2!1sen!2sus!4v1651428304002!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://the-city-fish-2.cafe-inspector.com/'),
(4, 'Falafel\'s Drive In', '23.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6531.552928103932!2d-121.9392193993011!3d37.32341879152182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcb5a149ff11b%3A0x989d65b1e391717c!2sFalafel&#39;s%20Drive%20In!5e0!3m2!1sen!2sus!4v1651428430678!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.falafelsdrivein.com/'),
(5, 'HoM Korean Kitchen', '24.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.243080577992!2d-121.89105748469494!3d37.336753479841605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fccbce7827dc3%3A0xb0b75988060ba9ed!2sHoM%20Korean%20Kitchen!5e0!3m2!1sen!2sus!4v1651428586579!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://homkoreankitchen.com/'),
(6, 'A Slice of New York', '25.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.802623273622!2d-121.96119428469532!3d37.323502779844155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcaef535c5d1b%3A0x84b1d6b2d564f5dd!2sA%20Slice%20of%20New%20York!5e0!3m2!1sen!2sus!4v1651428697561!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://asony.com/sanjose/'),
(7, 'Pho Kim Long', '26.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.271969753843!2d-121.88899278469293!3d37.407046079828014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcea4cfca7903%3A0xd9914a00ddc4387!2sPho%20Kim%20Long!5e0!3m2!1sen!2sus!4v1651428833413!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.grubhub.com/restaurant/pho-kim-long-2082-n-capitol-ave-san-jose/2482274'),
(8, 'La Victoria Taqueria', '27.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d11304.527166407162!2d-121.89846763718255!3d37.33620866669392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x808fcca30fe1236b%3A0x7d36d754dc390744!2scheap%20san%20jose%20restaurants!3m2!1d37.3353742!2d-121.8926463!5e0!3m2!1sen!2sus!4v1651429105014!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.lavicsj.com/'),
(9, 'Philz Coffee', '28.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d12689.279290254015!2d-121.89292837669898!3d37.334936367379605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x808fccbbd516f8b7%3A0xa48a49dfd03f76e9!2sPhilz%20Coffee%2C%20118%20Paseo%20de%20San%20Antonio%2C%20San%20Jose%2C%20CA%2095112!3m2!1d37.3336237!2d-121.8848654!5e0!3m2!1sen!2sus!4v1651429421618!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.philzcoffee.com/locations-sf'),
(10, 'OMESCAPE - San Jose', '29.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.173311758318!2d-121.85386628469541!3d37.314722179845795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e32de640bfea5%3A0x6827921379069d5!2sOMESCAPE%20-%20San%20Jose!5e0!3m2!1sen!2sus!4v1651429816785!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://omescape.us/sanjose/'),
(11, 'AMC Eastridge 15\r\n', '30.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13445.769574837414!2d-121.82338026270278!3d37.324058201241186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e32a05b087f43%3A0x4cb830f7f6863a44!2sAMC%20Eastridge%2015!5e0!3m2!1sen!2sus!4v1651430157509!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.amctheatres.com/movie-theatres/san-jose/amc-eastridge-15'),
(12, 'Westfield Valley Fair', '31.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.7647253114874!2d-121.94393868469525!3d37.324400379843915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcb1e50555555%3A0xcb5743551cf8265f!2sWestfield%20Valley%20Fair!5e0!3m2!1sen!2sus!4v1651430277396!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.westfield.com/valleyfair');

-- --------------------------------------------------------

--
-- Table structure for table `indoor`
--

CREATE TABLE `indoor` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `pth` varchar(225) NOT NULL,
  `embed` varchar(10000) NOT NULL,
  `website` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indoor`
--

INSERT INTO `indoor` (`id`, `title`, `pth`, `embed`, `website`) VALUES
(1, 'Il Fornaio San Jose', 'images/20.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6530.906290533247!2d-121.89250668080436!3d37.3308579418074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fccba8f6ba7d3%3A0xb0e4939712ce8fe1!2sIl%20Fornaio%20San%20Jose!5e0!3m2!1sen!2sus!4v1651427911589!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.ilfornaio.com/location/il-fornaio-san-jose/'),
(2, 'Yard House', 'images/21.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d19431.937261936484!2d-121.9589180303446!3d37.32185909189354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x808fcae018ca4a35%3A0x279ae180a6f8a82f!2sYard%20House%2C%20300%20Santana%20Row%20Suite%20101%2C%20San%20Jose%2C%20CA%2095128!3m2!1d37.3228547!2d-121.9475135!5e0!3m2!1sen!2sus!4v1651428126835!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.yardhouse.com/locations/ca/san-jose/san-jose-santana-row/8330?cmpid=br:yh_ag:ie_ch:loc_ca:YHGMB_sn:gmb_gt:san-jose-ca-8330_pl:locurl_rd:1028'),
(3, 'The City Fish', 'images/22.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12689.046153657699!2d-121.89847307119763!3d37.33631643830764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fccbcd1b4cffb%3A0x2509e8dceb4d0ad3!2sThe%20City%20Fish!5e0!3m2!1sen!2sus!4v1651428304002!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://the-city-fish-2.cafe-inspector.com/'),
(4, 'Falafel\'s Drive In', 'images/23.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6531.552928103932!2d-121.9392193993011!3d37.32341879152182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcb5a149ff11b%3A0x989d65b1e391717c!2sFalafel&#39;s%20Drive%20In!5e0!3m2!1sen!2sus!4v1651428430678!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.falafelsdrivein.com/'),
(5, 'HoM Korean Kitchen', 'images/24.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.243080577992!2d-121.89105748469494!3d37.336753479841605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fccbce7827dc3%3A0xb0b75988060ba9ed!2sHoM%20Korean%20Kitchen!5e0!3m2!1sen!2sus!4v1651428586579!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://homkoreankitchen.com/'),
(6, 'A Slice of New York', 'images/25.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.802623273622!2d-121.96119428469532!3d37.323502779844155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcaef535c5d1b%3A0x84b1d6b2d564f5dd!2sA%20Slice%20of%20New%20York!5e0!3m2!1sen!2sus!4v1651428697561!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://asony.com/sanjose/'),
(7, 'Pho Kim Long', 'images/26.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.271969753843!2d-121.88899278469293!3d37.407046079828014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcea4cfca7903%3A0xd9914a00ddc4387!2sPho%20Kim%20Long!5e0!3m2!1sen!2sus!4v1651428833413!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.grubhub.com/restaurant/pho-kim-long-2082-n-capitol-ave-san-jose/2482274'),
(8, 'La Victoria Taqueria', 'images/27.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d11304.527166407162!2d-121.89846763718255!3d37.33620866669392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x808fcca30fe1236b%3A0x7d36d754dc390744!2scheap%20san%20jose%20restaurants!3m2!1d37.3353742!2d-121.8926463!5e0!3m2!1sen!2sus!4v1651429105014!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://www.lavicsj.com/'),
(9, 'Philz Coffee', 'images/28.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d12689.279290254015!2d-121.89292837669898!3d37.334936367379605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x808fccbbd516f8b7%3A0xa48a49dfd03f76e9!2sPhilz%20Coffee%2C%20118%20Paseo%20de%20San%20Antonio%2C%20San%20Jose%2C%20CA%2095112!3m2!1d37.3336237!2d-121.8848654!5e0!3m2!1sen!2sus!4v1651429421618!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.philzcoffee.com/locations-sf'),
(10, 'OMESCAPE - San Jose', 'images/29.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.173311758318!2d-121.85386628469541!3d37.314722179845795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e32de640bfea5%3A0x6827921379069d5!2sOMESCAPE%20-%20San%20Jose!5e0!3m2!1sen!2sus!4v1651429816785!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://omescape.us/sanjose/'),
(11, 'AMC Eastridge 15\r\n', 'images/30.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13445.769574837414!2d-121.82338026270278!3d37.324058201241186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e32a05b087f43%3A0x4cb830f7f6863a44!2sAMC%20Eastridge%2015!5e0!3m2!1sen!2sus!4v1651430157509!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.amctheatres.com/movie-theatres/san-jose/amc-eastridge-15'),
(12, 'Westfield Valley Fair', 'images/31.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.7647253114874!2d-121.94393868469525!3d37.324400379843915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcb1e50555555%3A0xcb5743551cf8265f!2sWestfield%20Valley%20Fair!5e0!3m2!1sen!2sus!4v1651430277396!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.westfield.com/valleyfair');

-- --------------------------------------------------------

--
-- Table structure for table `outdoor`
--

CREATE TABLE `outdoor` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `pth` varchar(225) NOT NULL,
  `embed` varchar(10000) NOT NULL,
  `website` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outdoor`
--

INSERT INTO `outdoor` (`id`, `title`, `pth`, `embed`, `website`) VALUES
(1, 'Nature\'s Outings', 'images/40.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18747.68438630005!2d-121.7571406026792!3d37.303558178664474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e2c47e8700001%3A0x1bc6db34b6350ea8!2sNature&#39;s%20Outings!5e0!3m2!1sen!2sus!4v1651448443177!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://hikewithjonmenard.com/bay_area_nature_outings'),
(2, 'California\'s Great America\r\n', 'images/41.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.6374618683403!2d-121.97734538255615!3d37.39840509999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fc9c6db85b8ab%3A0x72af1434e8036575!2sCalifornia&#39;s%20Great%20America!5e0!3m2!1sen!2sus!4v1651448659958!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.cagreatamerica.com/'),
(3, 'Municipal Rose Garden\r\n', 'images/42.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19289.35358124535!2d-121.93741602472268!3d37.33353694985727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcb146d96926f%3A0xff35e99b970126d6!2sMunicipal%20Rose%20Garden!5e0!3m2!1sen!2sus!4v1651448829164!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.sanjose.org/listings/municipal-rose-garden'),
(4, 'Emma Prusch Farm Park\r\n', 'images/43.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7821.859934744904!2d-121.84813277020147!3d37.34065309591716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcd2567682baf%3A0xb20bdf3738e612f0!2sEmma%20Prusch%20Farm%20Park!5e0!3m2!1sen!2sus!4v1651448920631!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.sanjoseca.gov/Home/Components/FacilityDirectory/FacilityDirectory/2180/'),
(5, 'Almaden Quicksilver County Park', 'images/44.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57074.84812441068!2d-121.88548009962129!3d37.200371754183706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e3089ad278513%3A0xd79952c4e8359a86!2sAlmaden%20Quicksilver%20County%20Park!5e0!3m2!1sen!2sus!4v1651449072768!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://parks.sccgov.org/santa-clara-county-parks/almaden-quicksilver-county-park'),
(6, 'AxeVentures Axe Throwing San Jose', 'images/45.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27678.889772096798!2d-121.92489298058372!3d37.325772413029796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcbc12662e6c1%3A0xe59299f84b8c385a!2sAxeVentures%20Axe%20Throwing%20San%20Jose!5e0!3m2!1sen!2sus!4v1651449249568!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.axeventures-axethrowing.com/locations/axe-throwing-san-jose/'),
(7, 'Lake Cunningham Regional Park', 'images/46.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d55347.53881523833!2d-121.83864111833992!3d37.33966761917069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slake%20cunningham%20regional%20park!5e0!3m2!1sen!2sus!4v1651449362815!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.sanjoseca.gov/Home/Components/FacilityDirectory/FacilityDirectory/2255/2028?npage=7'),
(8, 'Discovery Meadow\r\n', 'images/47.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.6236355336923!2d-121.89452528469506!3d37.32774187984326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fccafbd63e229%3A0x687c892f091603bc!2sDiscovery%20Meadow!5e0!3m2!1sen!2sus!4v1651449466708!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.sanjoseca.gov/Home/Components/FacilityDirectory/FacilityDirectory/2617/1396?npage=3'),
(9, 'Happy Hollow Park & Zoo', 'images/48.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27677.229941943377!2d-121.86823521683833!3d37.33027820787004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e332c1367abdf%3A0x45e46ed9f52f2e85!2sHappy%20Hollow%20Park%20%26%20Zoo!5e0!3m2!1sen!2sus!4v1651449620478!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://happyhollow.org/'),
(10, 'Golfland San Jose', 'images/48.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57031.85276180734!2d-121.89807475850917!3d37.25718809910766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e33d7faf216cf%3A0xb5a23ca7634eaaa9!2sGolfland%20San%20Jose!5e0!3m2!1sen!2sus!4v1651449745611!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.golfland.com/'),
(11, 'Alum Rock Park\r\n', 'images/49.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.737530337419!2d-121.80400068469322!3d37.39603897983018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fccbb2a209af9%3A0xcf6bf590fb0bb32a!2sAlum%20Rock%20Park!5e0!3m2!1sen!2sus!4v1651449943272!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.sanjoseca.gov/Home/Components/FacilityDirectory/FacilityDirectory/2088/2028?utm_campaign=google_maps&utm_medium=organic&utm_source=google'),
(12, 'Kelley Park\r\n', 'images/50.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d46545.11266207596!2d-121.87692778372309!3d37.33265949048848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sKelley%20Park!5e0!3m2!1sen!2sus!4v1651450118257!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.sanjoseca.gov/Home/Components/FacilityDirectory/FacilityDirectory/2245/2028?npage=8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idoor`
--
ALTER TABLE `idoor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indoor`
--
ALTER TABLE `indoor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outdoor`
--
ALTER TABLE `outdoor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `idoor`
--
ALTER TABLE `idoor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `indoor`
--
ALTER TABLE `indoor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `outdoor`
--
ALTER TABLE `outdoor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
