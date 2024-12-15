-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 09:46 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geshiaro`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_interval_treatments`
--

CREATE TABLE `age_interval_treatments` (
  `id` int(10) UNSIGNED NOT NULL,
  `Drug_id` int(11) NOT NULL,
  `I_id` int(11) NOT NULL,
  `treatment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `age_interval_treatments`
--

INSERT INTO `age_interval_treatments` (`id`, `Drug_id`, `I_id`, `treatment`, `Year`) VALUES
(1, 1, 1, '32', '2020-01-01'),
(2, 2, 1, '0', '2020-01-01'),
(3, 1, 2, '57', '2020-01-01'),
(4, 2, 2, '38', '2020-01-01'),
(5, 1, 3, '63', '2020-01-01'),
(6, 2, 3, '62', '2020-01-01'),
(7, 1, 4, '57', '2020-01-01'),
(8, 2, 4, '56', '2020-01-01'),
(9, 1, 5, '68', '2020-01-01'),
(10, 2, 5, '67', '2020-01-01'),
(11, 1, 6, '65', '2020-01-01'),
(12, 2, 6, '65', '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `age_sses`
--

CREATE TABLE `age_sses` (
  `id` int(10) UNSIGNED NOT NULL,
  `Age_id` int(11) NOT NULL,
  `age_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `age_sses`
--

INSERT INTO `age_sses` (`id`, `Age_id`, `age_group`) VALUES
(1, 1, '1-4'),
(2, 2, '5-14'),
(3, 3, '15-21'),
(4, 4, '22-35'),
(5, 5, '35+');

-- --------------------------------------------------------

--
-- Table structure for table `community_level_hhs`
--

CREATE TABLE `community_level_hhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Access_to_basic_drinking_water` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Safe_water_storage_handling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Access_to_basic_sanitation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Access_to_basic_handwashing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exposure_to_surface_water` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `community_level_hhs`
--

INSERT INTO `community_level_hhs` (`id`, `Woreda_id`, `Access_to_basic_drinking_water`, `Safe_water_storage_handling`, `Access_to_basic_sanitation`, `Access_to_basic_handwashing`, `Exposure_to_surface_water`) VALUES
(2, 7, '30.20%', '48%', '0.00%', '0%', '86.70%'),
(3, 6, '35.00%', '60.50%', '0.80%', '2.60%', '49.60%'),
(4, 1, '30.40%', '58%', '0.10%', '0.60%', '82.20%'),
(5, 3, '28.70%', '41.50%', '0.20%', '0.70%', '65.10%'),
(6, 5, '27.80%', '49.70%', '0.00%', '0.20%', '68.30%'),
(7, 4, '30.70%', '48.60%', '0.10%', '0.20%', '56.80%');

-- --------------------------------------------------------

--
-- Table structure for table `diarrhoeas`
--

CREATE TABLE `diarrhoeas` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `wh_water` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wh_soapwater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `use_latrine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `covering_food` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_water` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prayer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trad_healer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clean_food` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diarrhoeas`
--

INSERT INTO `diarrhoeas` (`id`, `Woreda_id`, `wh_water`, `wh_soapwater`, `use_latrine`, `covering_food`, `store_water`, `prayer`, `trad_healer`, `clean_food`) VALUES
(2, 6, '86.1', '69.7', '25.4', '29.2', '12', '14.7', '11.9', '14.7'),
(3, 7, '75.9', '81.4', '24.8', '31.5', '68.6', '12.2', '9.4', '6.8'),
(5, 1, '82.8', '59.2', '30.6', '25.2', '13.3', '8.1', '11.9', '6.7'),
(6, 3, '81.8', '60.6', '34.8', '26.7', '15.2', '10', '12.8', '14.3'),
(7, 5, '89.2', '61', '36.9', '28', '14.6', '10.2', '13.5', '8.1'),
(8, 4, '5.5', '56.1', '35.7', '24.5', '16.1', '9.4', '9.2', '12.8');

-- --------------------------------------------------------

--
-- Table structure for table `distribution_hh_mtks`
--

CREATE TABLE `distribution_hh_mtks` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `aqua_tablets` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_chlorine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strain_cloth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_filter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solar_disinfection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stand_settle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distribution_hh_mtks`
--

INSERT INTO `distribution_hh_mtks` (`id`, `Woreda_id`, `Kebele_id`, `aqua_tablets`, `boil`, `add_chlorine`, `strain_cloth`, `water_filter`, `solar_disinfection`, `stand_settle`) VALUES
(2, 6, 58, '54', '16', '28', '2', '0', '0', '0'),
(3, 6, 59, '0', '45.5', '45.5', '3.03', '0', '0', '0'),
(4, 6, 60, '0', '0', '18.18', '0', '42.42', '3.03', '0'),
(5, 6, 61, '72.5', '22.5', '2.5', '0', '0', '0', '0'),
(6, 6, 62, '0', '0', '69.23', '0', '0', '0', '0'),
(7, 6, 63, '42.86', '31.43', '25.71', '0', '0', '0', '0'),
(8, 6, 64, '1.27', '44.3', '48.1', '6.33', '0', '0', '0'),
(9, 6, 65, '0', '0', '40', '0', '36', '0', '0'),
(10, 7, 66, '0', '0', '94', '6', '0', '0', '0'),
(11, 7, 67, '0', '81.36', '10.17', '8.47', '0', '0', '0'),
(12, 7, 68, '16.67', '50', '0', '16.67', '0', '0', '0'),
(13, 7, 69, '1.96', '0', '88.2', '11.8', '0', '0', '0'),
(14, 7, 70, '0', '0', '45?(--)', '6?(--)', '0', '0', '0'),
(15, 7, 71, '50', '36.7', '0', '3.33', '0', '0', '10'),
(16, 7, 72, '0', '8.33', '70.8', '0', '8.33', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `distribution_sexandagecols`
--

CREATE TABLE `distribution_sexandagecols` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `indiv_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age_id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `distribution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distribution_sexandagecols`
--

INSERT INTO `distribution_sexandagecols` (`id`, `Kebele_id`, `indiv_n`, `Age_id`, `S_id`, `distribution`) VALUES
(2, 26, '40', 1, 1, '1'),
(3, 4, '34.2', 1, 1, '1'),
(4, 20, '49.1', 1, 1, '5'),
(5, 8, '37.3', 1, 1, '3'),
(6, 26, '40', 1, 2, '2'),
(7, 4, '34.2', 1, 2, '1'),
(8, 20, '49.1', 1, 2, '4'),
(9, 8, '37.3', 1, 2, '2'),
(10, 26, '40', 2, 1, '15'),
(11, 4, '34.2', 2, 1, '14'),
(12, 20, '49.1', 2, 1, '15'),
(13, 8, '37.3', 2, 1, '19'),
(14, 26, '40', 2, 2, '19'),
(15, 4, '34.2', 2, 2, '17'),
(16, 20, '49.1', 2, 2, '12'),
(17, 8, '37.3', 2, 2, '16'),
(18, 26, '40', 3, 1, '2'),
(19, 4, '34.2', 3, 1, '1'),
(20, 20, '49.1', 3, 1, '3'),
(21, 8, '37.3', 3, 1, '5'),
(22, 26, '40', 3, 2, '5'),
(23, 4, '34.2', 3, 2, '7'),
(24, 20, '49.1', 3, 2, '6'),
(25, 8, '37.3', 3, 2, '6'),
(26, 26, '40', 4, 1, '6'),
(27, 4, '34.2', 4, 1, '9'),
(28, 20, '49.1', 4, 1, '5'),
(29, 8, '37.3', 4, 1, '6'),
(30, 26, '40', 4, 2, '19'),
(31, 4, '34.2', 4, 2, '22'),
(32, 20, '49.1', 4, 2, '7'),
(33, 8, '37.3', 4, 2, '27'),
(34, 26, '40', 5, 1, '15'),
(35, 4, '34.2', 5, 1, '7'),
(36, 20, '49.1', 5, 1, '13'),
(37, 8, '37.3', 5, 1, '7'),
(38, 26, '40', 5, 2, '14'),
(39, 4, '34.2', 5, 2, '15'),
(40, 20, '49.1', 5, 2, '13'),
(41, 8, '37.3', 5, 2, '17');

-- --------------------------------------------------------

--
-- Table structure for table `distribution_ss_demographics`
--

CREATE TABLE `distribution_ss_demographics` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `Age_id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `n_ind_per_male` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distribution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distribution_ss_sexandages`
--

CREATE TABLE `distribution_ss_sexandages` (
  `id` int(10) UNSIGNED NOT NULL,
  `S_id` int(11) NOT NULL,
  `Age_id` int(11) NOT NULL,
  `distribution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distribution_ss_sexandages`
--

INSERT INTO `distribution_ss_sexandages` (`id`, `S_id`, `Age_id`, `distribution`) VALUES
(2, 1, 1, '372'),
(3, 1, 2, '543'),
(4, 1, 3, '305'),
(5, 1, 4, '347'),
(6, 1, 5, '369'),
(7, 2, 1, '367'),
(8, 2, 2, '426'),
(9, 2, 3, '349'),
(10, 2, 4, '478'),
(11, 2, 5, '370');

-- --------------------------------------------------------

--
-- Table structure for table `distribution_ss_years`
--

CREATE TABLE `distribution_ss_years` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `no_indiv_enrolled_in_1year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_indiv_enrolled_in_2year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `followed_upover_year_1_and_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_individual_without_lab_forms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distribution_ss_years`
--

INSERT INTO `distribution_ss_years` (`id`, `Kebele_id`, `no_indiv_enrolled_in_1year`, `no_indiv_enrolled_in_2year`, `followed_upover_year_1_and_2`, `n_individual_without_lab_forms`) VALUES
(2, 26, '133', '142', '100', '2'),
(3, 4, '151', '137', '96', '2'),
(4, 20, '147', '170', '86', '3'),
(5, 8, '144', '176', '120', '12');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Drug_id` int(11) NOT NULL,
  `Drug_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `Drug_id`, `Drug_name`) VALUES
(1, 1, 'albendazole'),
(2, 2, 'praziquantel');

-- --------------------------------------------------------

--
-- Table structure for table `hh_hygieneknowledges`
--

CREATE TABLE `hh_hygieneknowledges` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `clean_hand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stops_germs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smell_nice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `practice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngogov_tolds` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessible_soap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `easy_soap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hh_hygieneknowledges`
--

INSERT INTO `hh_hygieneknowledges` (`id`, `Woreda_id`, `clean_hand`, `stops_germs`, `smell_nice`, `practice`, `ngogov_tolds`, `accessible_soap`, `easy_soap`) VALUES
(2, 6, '92.5', '61.7', '14', '2', '32.3', '3.7', '1.4'),
(3, 7, '86.6', '77.2', '14.6', '3.4', '17.3', '1', '0.3'),
(5, 1, '90.6', '52.3', '24.4', '8.1', '18.1', '2.6', '1'),
(6, 3, '90', '54.8', '29.5', '9.6', '19.6', '6.6', '3.5'),
(7, 5, '93.2', '54.8', '28.4', '10.6', '20.7', '2', '0.8'),
(8, 4, '88.4', '55.8', '28.3', '14.5', '21', '7.1', '3.8');

-- --------------------------------------------------------

--
-- Table structure for table `hh_sampleds`
--

CREATE TABLE `hh_sampleds` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sampled_hh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consented_hh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_hh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hh_sampleds`
--

INSERT INTO `hh_sampleds` (`id`, `Woreda_id`, `Kebele_id`, `sampled_hh`, `consented_hh`, `expected_hh`) VALUES
(2, 6, '58', '173', '140', '45'),
(3, 6, '59', '65', '65', '75'),
(4, 6, '60', '188', '187', '45'),
(5, 6, '61', '158', '125', '60'),
(6, 6, '62', '91', '91', '60'),
(7, 6, '63', '131', '108', '60'),
(8, 6, '64', '164', '164', '45'),
(9, 6, '65', '162', '162', '60'),
(10, 7, '66', '199', '189', '60'),
(11, 7, '67', '169', '169', '60'),
(12, 7, '68', '169', '169', '75'),
(13, 7, '69', '206', '193', '60'),
(14, 7, '70', '115', '115', '45'),
(15, 7, '71', '114', '114', '60'),
(16, 7, '72', '131', '124', '45'),
(17, 0, '', '', '', ''),
(18, 0, '', '', '', ''),
(19, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `indicators`
--

CREATE TABLE `indicators` (
  `id` int(10) UNSIGNED NOT NULL,
  `indicator_id` int(11) NOT NULL,
  `indicator_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indicator_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indicator_definition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indicators`
--

INSERT INTO `indicators` (`id`, `indicator_id`, `indicator_code`, `indicator_name`, `indicator_definition`) VALUES
(2, 1, 'FMOH', 'Verified percentage of population treated with PZQ at each round at the kebele level', 'Defined as all individual treatment records based on individuals verified by biometrics and/or unique study ID card. Excludes all those not eligible for treatment as per WHO guidelines'),
(3, 2, 'FMOH', 'Verified percentage of population treated with ALB at each round at the kebele level', 'Defined as all individual treatment records based on individuals verified by biometrics and/or unique study ID card. Excludes all those not eligible for treatment as per WHO guidelines'),
(4, 3, 'WVE', '% of households (HH) with access to a BASIC drinking water', 'Reliability: Year-round daily access to an improved water source** Quantity: Min 25 litres/person/day, Accessibility: within 30 minutes round trip of the household, including queuing time, Quality: Water must be free from contamination at both point of co'),
(5, 4, 'WVE', '% of HHs with safe water storage and handling ', 'Safe water storage means that the water is stored in a container that protects the water from re-contamination.'),
(6, 5, 'WVE/FMoH', '% of HHs with access to functioning BASIC sanitation. ', 'Reliability: Year-round access to improved sanitation facilities***. '),
(7, 6, 'WVE', '% of households that have functional BASIChandwashing facilities', 'Reliability: Year-round access. \nQuantity: Not shared with other households \nAccessibility: Within 3m of the latrine.\nQuality: Each handwashing facility must have water and soap.\n'),
(8, 7, 'FMoH', '% of kebeles declared ODF', 'Every household must have a latrine with handwashing (water and soap) facilities. \nAll household members report using the latrine at all times. \nInstitutional latrines (community schools, health care centre, roadside) are in place, hygienic and offer priv'),
(9, 8, 'WVE', '% of HH where no member is exposed to surface water sources', 'Exposure includes drinking, cooking, bathing, and clothes washing in open surface water sources\nSurface water source is defined as a river, stream, lake, or unprotected spring\n'),
(10, 9, 'WVE', '% of HH with children who do not bathe, swim and play in surface water sources', 'Exposure includes drinking, cooking, bathing, and clothes washing in open surface water sources\nSurface water source is defined as a river, stream, lake, or unprotected spring\n'),
(11, 10, 'WVE', '% of schools with access to a BASIC drinking water source on premises', 'Reliability: Year-round daily access to an improved water source**\nQuantity: At least one functioning tap for 100 students\nAccessibility: On the school premises.\nQuality: Water must be free from contamination, compliant with WHO/National Water Quality gui'),
(12, 11, 'WVE', '% of schools with access to BASIC sanitation facilities on premises', 'Reliability: Year-round access on premises to improved sanitation facilities*** \nQuantity: Gender segregated. One latrine for 100 girls and 125 boys. \nAccessibility: On the school premises, accessible for people with disabilities & at least one latrinewit'),
(13, 12, 'WVE', '% of Healthcare Facilities with access to a BASIC drinking water source on premises', 'Reliability: Year-round daily access on premises to an improved water source**\nQuantity: Min 10 litre/person/day\nAccessibility: On the healthcare facility premises, delivery room and OPD\nQuality: Water must be free from contamination, compliant with WHO/N'),
(14, 13, 'WVE', '% of healthcare facilities with access to BASIC sanitation facilities on premises', 'Reliability: Year-round access to improved sanitation facilities***. \nAccessibility: On the healthcare facility premises. Accessible for people with disabilities and Gender segregated.\nQuality: Each latrine block must have hand washing facilities & soap ('),
(15, 14, 'WVE', '% kebeles with active WaSH Business Centres', 'WaSH business centre must be present and active in each kebele, defined by knowledge of business centres through interviews with different members of community'),
(16, 15, 'WVE', '% of schools where NTD-WaSH related behaviour change promotion activities held (with IEC materials)', ''),
(17, 16, 'FMOH', '% of schools with active*** WaSH clubs (with IEC materials)', 'Schools with WaSH promotion activities present\n% of SAC who have basic knowledge of hygiene practices [by relevant NTD specific indicators]\n'),
(18, 17, 'WVE', '% of HEW trained on WaSH ', 'Schools with WaSH clubs who had a club in the last month\n% of SAC who participate in the WaSH clubs\n% of SAC who have basic knowledge of hygiene practices [by relevant NTD specific indicators]\n'),
(19, 18, 'WVE', '% of community who have basic knowledge of hygiene practices [broken down by relevant NTD specific indicators]', 'HEW who report attending training\nHEW with WaSH promotion materials\n% of HEW who have basic knowledge of hygiene practices [by relevant NTD specific indicators]\n');

-- --------------------------------------------------------

--
-- Table structure for table `infection_category_age_sexes`
--

CREATE TABLE `infection_category_age_sexes` (
  `id` int(10) UNSIGNED NOT NULL,
  `S_id` int(11) NOT NULL,
  `I_id` int(11) NOT NULL,
  `Age_id` int(11) NOT NULL,
  `light` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heavy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Woreda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intensities`
--

CREATE TABLE `intensities` (
  `id` int(10) UNSIGNED NOT NULL,
  `I_id` int(11) NOT NULL,
  `intensity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intensities`
--

INSERT INTO `intensities` (`id`, `I_id`, `intensity`) VALUES
(1, 1, 'S.mansoni'),
(2, 2, 'Hookworm'),
(3, 3, 'Trichuris'),
(4, 4, 'Ascaris');

-- --------------------------------------------------------

--
-- Table structure for table `intervals`
--

CREATE TABLE `intervals` (
  `id` int(10) UNSIGNED NOT NULL,
  `I_id` int(11) NOT NULL,
  `age_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intervals`
--

INSERT INTO `intervals` (`id`, `I_id`, `age_group`) VALUES
(1, 1, '1'),
(2, 2, '2-4'),
(3, 3, '5-14'),
(4, 4, '15-20'),
(5, 5, '21-35'),
(6, 6, '36-100');

-- --------------------------------------------------------

--
-- Table structure for table `kebeles`
--

CREATE TABLE `kebeles` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `kebele_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebele_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Woreda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kebeles`
--

INSERT INTO `kebeles` (`id`, `Kebele_id`, `kebele_name`, `kebele_code`, `Woreda_id`) VALUES
(1, 1, 'Chambo Hembecho', '1', 1),
(2, 2, 'Matala Hembecho', '1', 1),
(3, 3, 'Shuye Homba', '1', 1),
(4, 4, 'Giddo Homba', '4', 1),
(5, 5, 'Hembecho Mazegja', '1', 1),
(6, 6, 'Woybo Woga', '1', 1),
(7, 7, 'Doge Woybo', '1', 1),
(8, 8, 'Korke Doge', '8', 1),
(9, 9, 'Afama Mino', '1', 1),
(10, 10, 'Basa Gofara', '1', 1),
(11, 11, 'Dache Gofara', '1', 1),
(12, 12, 'Gara Goda', '1', 1),
(13, 13, 'Admancho Arfita', '1', 1),
(14, 14, 'Tiyo Hembecho', '1', 1),
(15, 15, 'Genet Achura', '1', 1),
(16, 16, 'Wormmuma', '1', 1),
(17, 17, 'Achura Mazegaja', '1', 1),
(18, 18, 'Dangara Salata', '1', 1),
(19, 19, 'Dangara Madalcho', '1', 1),
(20, 20, 'Hajo Salata', '20', 1),
(21, 21, 'Dola', '1', 1),
(22, 22, 'Yukara (Ukara)', '1', 1),
(23, 23, 'Gurumo Koysha (Kebele & Mazegaja)', '1', 1),
(24, 24, 'Afama Bancha', '1', 1),
(25, 25, 'Afama Adila', '1', 1),
(26, 26, 'Afama Garo', '27', 1),
(27, 27, 'Sore Homba', '1', 1),
(28, 28, 'Dubbo', '1', 1),
(29, 29, 'Legama', '1', 1),
(30, 30, 'Tadisa', '1', 1),
(31, 31, 'Takiso Goddo', '1', 1),
(33, 57, 'Bodity Korke', '1', 1),
(34, 32, 'Fara Wache', '1', 1),
(35, 33, 'Ajora', '1', 1),
(36, 34, 'Gido Matala', '1', 1),
(37, 35, 'Bombe 01', '1', 1),
(38, 36, 'Tabba', '1', 1),
(39, 37, 'Wegera', '1', 1),
(40, 38, 'Shasha Gale', '1', 1),
(41, 39, 'Bugie Village', '1', 1),
(42, 40, 'Gola', '1', 1),
(43, 41, 'Lera', '1', 1),
(44, 42, 'Doge Hanchucho', '1', 1),
(45, 43, 'Ambe Girara', '1', 1),
(46, 44, 'Girara Mazegaja', '1', 1),
(47, 45, 'Bilate Chericho', '1', 1),
(48, 46, 'Abela Zegire', '1', 1),
(49, 47, 'Abala Logena', '1', 1),
(50, 48, 'Ela Kebele', '1', 1),
(51, 49, 'Sera Tawureta', '1', 1),
(52, 50, 'KindoMadina', '1', 1),
(53, 51, 'Mogisa', '1', 1),
(54, 52, 'Offa Chewukare', '1', 1),
(55, 53, 'Yakima', '1', 1),
(56, 54, 'Zamo', '1', 1),
(57, 55, 'WajaShoya', '1', 1),
(58, 56, 'GiloBishare', '1', 1),
(60, 58, 'Golo Shanto', '58', 6),
(61, 59, 'Galcha Suke', '59', 6),
(62, 60, 'Pulassa Bakala', '60', 6),
(63, 61, 'ZamineWulisho', '61', 6),
(64, 62, 'Olola', '62', 6),
(65, 63, 'Waribira Suke', '63', 6),
(66, 64, 'Wasedo', '64', 6),
(67, 65, 'Busha (DP)', '65', 6),
(68, 66, 'Demba Zamine', '66', 7),
(69, 67, 'Dogie Shakiso', '67', 7),
(70, 68, 'Dogie Hanchicho', '68', 7),
(71, 69, 'Sunkale', '69', 7),
(72, 70, 'Sore Mashdo', '70', 7),
(73, 71, 'Bololla', '71', 7),
(74, 72, 'Zamine Nare', '72', 7);

-- --------------------------------------------------------

--
-- Table structure for table `mean_sthand_sm_woredas`
--

CREATE TABLE `mean_sthand_sm_woredas` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `no_individual_sample` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `I_id` int(11) NOT NULL,
  `no_individual_infected` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mean_sthand_sm_woredas`
--

INSERT INTO `mean_sthand_sm_woredas` (`id`, `Woreda_id`, `no_individual_sample`, `I_id`, `no_individual_infected`, `mean`) VALUES
(2, 13, '149', 1, '0.67', '0.36 (4.42)'),
(3, 1, '594', 1, '2.02', '0.31 (2.76)'),
(4, 3, '534', 1, '0.19', '0.01 (0.30'),
(5, 6, '300', 1, '0.33', '0.16 (2.77)'),
(6, 7, '152', 1, '0', '0 (0.00)'),
(7, 5, '313', 1, '11.5', '6.70 (21.76)'),
(8, 14, '150', 1, '0', '0 90.00)'),
(9, 4, '625', 1, '2.24', '0.73 (5.65)'),
(10, 10, '448', 1, '0.45', '0.08 (1.20)'),
(11, 12, '302', 1, '0', '0 (0.00)'),
(12, 11, '308', 1, '8.77', '1.68(7.10) '),
(13, 13, '149', 2, '5.37', '6.68 (36.78)'),
(14, 1, '594', 2, '16.16', '14.61 (74.10)'),
(15, 3, '534', 2, '4.68', '1.80 (9.15)'),
(16, 6, '300', 2, '2', '0.74 (6.44)'),
(17, 7, '152', 2, '9.21', '18.5316 (97.05)'),
(18, 5, '313', 2, '5.43', '8.30 (40.74)'),
(19, 14, '150', 2, '2', '20.16 (172.30)'),
(20, 4, '625', 2, '19.04', '33.75 (164.27)'),
(21, 10, '448', 2, '17.41', '28.03 (210.41)'),
(22, 12, '302', 2, '34.11', '110.36 (611.08)'),
(23, 11, '308', 2, '4.55', '2.18 (28.20)'),
(24, 13, '149', 3, '3.36', '50.42 (352.97)'),
(25, 1, '594', 3, '2.02', '0.95 (11.28)'),
(26, 3, '534', 3, '6.55', '39.76 (342.93)'),
(27, 6, '300', 3, '7.67', '6.92 (50.31)'),
(28, 7, '152', 3, '7.24', '34.70 (279.09)'),
(29, 5, '313', 3, '0.96', '0.25 (2.60)'),
(30, 14, '150', 3, '2.67', '66 (568.95)'),
(31, 4, '625', 3, '1.6', '18.60 (214.91)'),
(32, 10, '448', 3, '1.56', '14.32 (203.64)'),
(33, 12, '302', 3, '1.66', '0.44 (3.67)'),
(34, 11, '308', 3, '0.65', '1.79 (30.44)'),
(35, 13, '149', 4, '16.11', '194.70 (1063.32)'),
(36, 1, '594', 4, '10.27', '90.63 (560.50)'),
(37, 3, '534', 4, '22.28', '329.36 (1228.71)'),
(38, 6, '300', 4, '23.33', '619.18 (1686.09)'),
(39, 7, '152', 4, '34.21', '817.62 (2386.01)'),
(40, 5, '313', 4, '3.51', '26.45 (261.82)'),
(41, 14, '150', 4, '24.67', '99.80 (563.60)'),
(42, 4, '625', 4, '1.44', '46.69 (469.50)'),
(43, 10, '448', 4, '18.53', '402.12 (1137.60)'),
(44, 12, '302', 4, '11.59', '205.07 (1274.42)'),
(45, 11, '308', 4, '0.65', '15.60?????? (273.50)');

-- --------------------------------------------------------

--
-- Table structure for table `methods`
--

CREATE TABLE `methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `Method_id` int(11) NOT NULL,
  `Method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `methods`
--

INSERT INTO `methods` (`id`, `Method_id`, `Method`) VALUES
(1, 1, 'Biometric'),
(2, 2, 'Study ID card'),
(3, 3, 'Name search'),
(4, 4, 'New Registration'),
(5, 5, 'Registration Refusal');

-- --------------------------------------------------------

--
-- Table structure for table `method_data_captures`
--

CREATE TABLE `method_data_captures` (
  `id` int(10) UNSIGNED NOT NULL,
  `Method_id` int(11) NOT NULL,
  `n_forms_rec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_ALB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_of_ALB_elible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_PZQ_treatment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Per_PZQ_eligible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `method_data_captures`
--

INSERT INTO `method_data_captures` (`id`, `Method_id`, `n_forms_rec`, `no_of_ALB`, `per_of_ALB_elible`, `num_PZQ_treatment`, `Per_PZQ_eligible`) VALUES
(1, 1, '18173', '17116', '10.9', '17116', '11.2'),
(2, 2, '65429', '62327', '37.9', '57512', '37.2'),
(3, 3, '10037', '9509', '5.8', '9010', '5.9'),
(4, 4, '13096', '12839', '7.8', '11858', '7.7'),
(5, 5, '2917', '1163', '0.7', '1093', '0.7');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_10_31_162633_scaffoldinterfaces', 1),
(4, '2020_08_06_094517_create_permission_tables', 1),
(5, '2020_08_06_020045_drugs', 2),
(6, '2020_08_06_020252_intervals', 2),
(7, '2020_08_06_020501_age_interval_treatments', 2),
(8, '2020_08_06_020549_methods', 2),
(9, '2020_08_06_020918_treatment_cumulatives', 2),
(10, '2020_08_06_021217_method_data_captures', 2),
(11, '2020_08_06_021526_treatment_coverages', 2),
(12, '2020_08_06_021701_kebeles', 2),
(13, '2020_08_06_021938_treatment_coverage_kebeles', 2),
(14, '2020_08_06_022113_pzq_coverage_kebeles', 2),
(25, '2020_08_06_023520_sexes', 3),
(26, '2020_08_06_024125_age_sses', 3),
(27, '2020_08_06_024214_intensities', 3),
(28, '2020_08_06_024421_prevalence_infections', 3),
(29, '2020_08_06_024631_prevalence_intestinal_parasites', 3),
(30, '2020_08_06_025208_distribution_ss_years', 3),
(31, '2020_08_06_025350_distribution_ss_demographics', 3),
(32, '2020_08_06_025602_prevalence_sma_and_sths', 3),
(33, '2020_08_06_025939_prevalence_schistosomiases', 3),
(34, '2020_08_06_030152_prevalence_sth_infections', 3),
(35, '2020_08_06_030254_woredas', 3),
(36, '2020_08_06_030531_prevalence_intensities', 3),
(37, '2020_08_06_030814_treatment_infections', 3),
(38, '2020_08_06_031204_infection_category_age_sexes', 3),
(39, '2020_08_06_031340_mean_no_eggs_sth_and_mansoni_woredas', 3),
(40, '2020_08_07_033205_prevalence_intensity_ips', 4),
(41, '2020_08_07_034229_community_level_hhs', 5),
(42, '2020_08_07_034556_proportion_hh_basicdws', 5),
(43, '2020_08_07_034911_proportion_hh_basicswshes', 5),
(44, '2020_08_07_035144_proportion_hh_basicsanitations', 5),
(45, '2020_08_07_035723_proportion_hh_basichwfacilities', 5),
(46, '2020_08_07_035944_proportion_hh_defections', 5),
(47, '2020_08_07_061006_treatment_coverage_biometrics', 6),
(48, '2020_08_07_073322_distribution_ss_sexandages', 7),
(49, '2020_08_08_081551_proprotion_poc_ccas', 8),
(50, '2020_08_08_081713_proportion_haemastixes', 8),
(51, '2020_08_08_081808_proportion_schistosoma_hs', 8),
(52, '2020_08_08_082721_distribution_sexandagecols', 9),
(53, '2020_08_08_085506_prevalence_inf_schists', 10),
(54, '2020_08_08_095512_mean_sthand_sm_woredas', 11),
(55, '2020_08_08_101629_prevalence_sthandsm_woredas', 12),
(56, '2020_08_08_060607_proportion_hh_sws', 13),
(57, '2020_08_09_010607_proportion_schoolbdws', 14),
(58, '2020_08_09_011017_proportion_sbsanitations', 14),
(59, '2020_08_09_011208_proportion_hc_bdws', 14),
(60, '2020_08_09_011444_proportion_hc_bsanitations', 14),
(61, '2020_08_09_011755_hh_hygieneknowledges', 14),
(62, '2020_08_09_012009_diarrhoeas', 14),
(63, '2020_08_09_012159_proportion_hh_bdws', 14),
(64, '2020_08_09_020804_proportion_hh_swshes', 14),
(65, '2020_08_09_021026_proportion_hh_bsanitations', 14),
(66, '2020_08_09_021329_proportion_hh_odfs', 14),
(67, '2020_08_09_021519_proportion_hh_notsws', 14),
(68, '2020_08_09_021642_indicators', 14),
(69, '2020_08_09_021903_wash_indicators', 14),
(70, '2020_08_09_021958_pay_drinkingwaters', 14),
(71, '2020_08_09_022040_treat_drinkingwaters', 14),
(72, '2020_08_09_022158_hh_sampleds', 14),
(73, '2020_08_09_022324_proportion_hh_dwsks', 14),
(74, '2020_08_09_022445_proportion_hh_pdws', 14),
(75, '2020_08_09_022631_proportion_hh_tdws', 14),
(76, '2020_08_09_022831_proportion_hh_bhwfs', 14),
(77, '2020_08_09_024009_proportion_hh_tks', 15),
(78, '2020_08_09_024257_proportion_hh_feaces', 15),
(79, '2020_08_09_024520_distribution_hh_mtks', 15),
(80, '2020_08_09_024713_proportion_hh_wdwks', 15),
(81, '2020_08_09_024957_proportion_hh_wcs', 15);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay_drinkingwaters`
--

CREATE TABLE `pay_drinkingwaters` (
  `id` int(10) UNSIGNED NOT NULL,
  `pay_id` int(11) NOT NULL,
  `pay_drinkingwater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_drinkingwaters`
--

INSERT INTO `pay_drinkingwaters` (`id`, `pay_id`, `pay_drinkingwater`) VALUES
(1, 1, 'yes'),
(2, 2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prevalence_infections`
--

CREATE TABLE `prevalence_infections` (
  `id` int(10) UNSIGNED NOT NULL,
  `I_id` int(11) NOT NULL,
  `Total_indiv_infected` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Arithmetic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Light_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Heavy_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Moderate_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prevalence_infections`
--

INSERT INTO `prevalence_infections` (`id`, `I_id`, `Total_indiv_infected`, `Arithmetic`, `Light_n`, `Heavy_n`, `Moderate_n`) VALUES
(2, 1, '117', '0.88', '82', '8', '27'),
(3, 2, '483', '22.4', '479', '1', '3'),
(4, 3, '117', '16.9', '94', '23', '0'),
(5, 4, '503', '224', '467', '36', '0');

-- --------------------------------------------------------

--
-- Table structure for table `prevalence_inf_schists`
--

CREATE TABLE `prevalence_inf_schists` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `year_1katoz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_2katoz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_1_poc_trneg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_2_poc_trneg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_1_poc_trpos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_2_poc_trpos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haematuriayear1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haematuriayear2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prevalence_inf_schists`
--

INSERT INTO `prevalence_inf_schists` (`id`, `Kebele_id`, `year_1katoz`, `year_2katoz`, `year_1_poc_trneg`, `year_2_poc_trneg`, `year_1_poc_trpos`, `year_2_poc_trpos`, `haematuriayear1`, `haematuriayear2`) VALUES
(2, 26, '0', '1.06', '1.05', '3.19', '2.11', '3.19', '2.11', '8.51'),
(3, 4, '0', '5.1', '3.09', '27.55', '3.09', '39.8', '4.12', '14.29'),
(4, 20, '0', '1.06', '1.05', '3.19', '2.11', '3.19', '2.11', '8.51'),
(5, 8, '0', '3.7', '3.36', '2.78', '15.97', '10.19', '0', '9.26');

-- --------------------------------------------------------

--
-- Table structure for table `prevalence_intensities`
--

CREATE TABLE `prevalence_intensities` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `Year_1_ascaris_mean_epg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_2_ascaris_mean_epg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_1_mansoni_mean_epg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_2_mansoni_mean_epg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_1_trichuris_mean_epg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_2_trichuris_mean_epg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_1_hookworm_mean_epg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_2_hookworm_mean_epg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prevalence_intensities`
--

INSERT INTO `prevalence_intensities` (`id`, `Kebele_id`, `Year_1_ascaris_mean_epg`, `Year_2_ascaris_mean_epg`, `Year_1_mansoni_mean_epg`, `Year_2_mansoni_mean_epg`, `Year_1_trichuris_mean_epg`, `Year_2_trichuris_mean_epg`, `Year_1_hookworm_mean_epg`, `Year_2_hookworm_mean_epg`) VALUES
(2, 26, '816.5', '1605.9', '37.2', '24.2', '11.4', '21', '0.1', '0.1'),
(3, 4, '55', '284.2', '2.4', '39.8', '0.5', '2.8', '0', '2.5'),
(4, 20, '14.9', '623.4', '0.2', '101.6', '6.1', '23.9', '0', '0.3'),
(5, 8, '1193.6', '1233.6', '27.8', '58.3', '0.8', '36.6', '0', '1.8');

-- --------------------------------------------------------

--
-- Table structure for table `prevalence_intensity_ips`
--

CREATE TABLE `prevalence_intensity_ips` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `I_id` int(11) NOT NULL,
  `no_indiv_exam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_individual_infected` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Arithmetic_mean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prevalence_intensity_ips`
--

INSERT INTO `prevalence_intensity_ips` (`id`, `Kebele_id`, `I_id`, `no_indiv_exam`, `no_individual_infected`, `Arithmetic_mean`) VALUES
(2, 57, 1, '149', '0.67', '0.36'),
(3, 32, 1, '146', '0.68', '0.33'),
(4, 33, 1, '149', '6.71', '0.89'),
(5, 34, 1, '153', '0', '0'),
(6, 35, 1, '146', '0.68', '0.04'),
(7, 36, 1, '133', '0', '0'),
(8, 37, 1, '145', '0', '0'),
(9, 38, 1, '142', '0.7', '0.04'),
(10, 39, 1, '114', '0', '0'),
(11, 40, 1, '150', '0', '0'),
(12, 41, 1, '150', '0.67', '0.32'),
(13, 42, 1, '152', '0', '0'),
(14, 43, 1, '151', '3.97', '1.51'),
(15, 44, 1, '162', '18.52', '11.52'),
(16, 45, 1, '150', '0', '0'),
(17, 46, 1, '150', '0.67', '0.36'),
(18, 47, 1, '148', '0', '0'),
(19, 48, 1, '151', '6.62', '2.54'),
(20, 49, 1, '176', '1.7', '0.1'),
(21, 50, 1, '148', '1.35', '0.24'),
(22, 51, 1, '151', '0', '0'),
(23, 52, 1, '149', '0', '0'),
(24, 53, 1, '152', '0', '0'),
(25, 54, 1, '150', '0', '0'),
(26, 55, 1, '157', '2.55', '0.61'),
(27, 56, 1, '151', '15.23', '2.78'),
(28, 57, 2, '149', '5.37', '6.65'),
(29, 32, 2, '146', '14.38', '20.55'),
(30, 33, 2, '149', '19.46', '14.62'),
(31, 34, 2, '153', '11.11', '14.43'),
(32, 35, 2, '146', '19.86', '8.84'),
(33, 36, 2, '133', '10.53', '4.11'),
(34, 37, 2, '145', '0.69', '0.12'),
(35, 38, 2, '142', '4.23', '1.39'),
(36, 39, 2, '114', '3.51', '1.74'),
(37, 40, 2, '150', '2', '0.44'),
(38, 41, 2, '150', '2', '1.04'),
(39, 42, 2, '152', '9.21', '18.51'),
(40, 43, 2, '151', '11.26', '17.21'),
(41, 44, 2, '162', '0', '0 .00'),
(42, 45, 2, '150', '2', '20.16'),
(43, 46, 2, '150', '33.33', '84.12'),
(44, 47, 2, '148', '13.51', '15.32'),
(45, 48, 2, '151', '17.22', '19.99'),
(46, 49, 2, '176', '13.07', '18.14'),
(47, 50, 2, '148', '13.51', '5.43'),
(48, 51, 2, '151', '38.41', '77.84'),
(49, 52, 2, '149', '0', '0'),
(50, 53, 2, '152', '47.37', '193.93'),
(51, 54, 2, '150', '20.67', '25.68'),
(52, 55, 2, '157', '5.73', '3.82'),
(53, 56, 2, '151', '3.31', '0.48'),
(54, 57, 3, '149', '3.36', '50.42'),
(55, 32, 3, '146', '2.05', '2.59'),
(56, 33, 3, '149', '0.67', '0.32'),
(57, 34, 3, '153', '0.65', '0.35'),
(58, 35, 3, '146', '4.79', '0.58'),
(59, 36, 3, '133', '6.02', '5.73'),
(60, 37, 3, '145', '4.83', '42.91'),
(61, 38, 3, '142', '10.56', '50.32'),
(62, 39, 3, '114', '4.39', '62.32'),
(63, 40, 3, '150', '2', '7.04'),
(64, 41, 3, '150', '13.33', '6.8'),
(65, 42, 3, '152', '7.24', '34.7'),
(66, 43, 3, '151', '0.66', '0.12'),
(67, 44, 3, '162', '1.23', '0.37'),
(68, 45, 3, '150', '2.67', '66'),
(69, 46, 3, '150', '0', '0'),
(70, 47, 3, '148', '4.05', '49.14'),
(71, 48, 3, '151', '1.32', '28.57'),
(72, 49, 3, '176', '1.14', '0.21'),
(73, 50, 3, '148', '0.68', '8.15'),
(74, 51, 3, '151', '2.65', '0.56'),
(75, 52, 3, '149', '1.34', '34.39'),
(76, 53, 3, '152', '1.97', '0.59'),
(77, 54, 3, '150', '1.33', '0.28'),
(78, 55, 3, '157', '0.64', '0.12'),
(79, 56, 3, '151', '0.66', '3.54'),
(80, 57, 4, '149', '16.11', '194'),
(81, 32, 4, '146', '3.42', '99.5'),
(82, 33, 4, '149', '20.81', '108'),
(83, 34, 4, '153', '13.07', '130.9'),
(84, 35, 4, '146', '3.42', '21.8'),
(85, 36, 4, '133', '1.88', '309.7'),
(86, 37, 4, '145', '28.97', '209.96'),
(87, 38, 4, '142', '1.62', '405.08'),
(88, 39, 4, '114', '25.44', '409.84'),
(89, 40, 4, '150', '14.76', '302.88'),
(90, 41, 4, '150', '32', '935.48'),
(91, 42, 4, '152', '34.21', '817.62'),
(92, 43, 4, '151', '7.28', '54.83'),
(93, 44, 4, '162', '0', '0'),
(94, 45, 4, '150', '24.67', '99.8'),
(95, 46, 4, '150', '0', '0'),
(96, 47, 4, '148', '5 (3.38)', '162.6'),
(97, 48, 4, '151', '2.65', '33.89'),
(98, 49, 4, '176', '0', '0'),
(99, 50, 4, '148', '4.05', '34.14'),
(100, 51, 4, '151', '3.31', '32.46'),
(101, 52, 4, '149', '48.32', '1142.26'),
(102, 53, 4, '152', '3.95', '82.93'),
(103, 54, 4, '150', '19.33', '328.84'),
(104, 55, 4, '157', '0.64', '0.04'),
(105, 56, 4, '151', '0.66', '1.79');

-- --------------------------------------------------------

--
-- Table structure for table `prevalence_intestinal_parasites`
--

CREATE TABLE `prevalence_intestinal_parasites` (
  `id` int(10) UNSIGNED NOT NULL,
  `Age_id` int(11) NOT NULL,
  `I_id` int(11) NOT NULL,
  `no_indiv_exam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_indiv_infected` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Arithmetic_mean_intensity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prevalence_intestinal_parasites`
--

INSERT INTO `prevalence_intestinal_parasites` (`id`, `Age_id`, `I_id`, `no_indiv_exam`, `no_indiv_infected`, `Arithmetic_mean_intensity`) VALUES
(2, 1, 1, '721', '8', '0.64'),
(3, 2, 1, '927', '38', '1.45'),
(4, 3, 1, '637', '24', '1.22'),
(5, 4, 1, '800', '14', '0.53'),
(6, 5, 1, '732', '10', '0.5'),
(7, 1, 2, '721', '80', '11.1'),
(8, 2, 2, '927', '77', '7.99'),
(9, 3, 2, '637', '94', '27.4'),
(10, 4, 2, '800', '120', '21.1'),
(11, 5, 2, '732', '109', '50.4'),
(12, 1, 3, '721', '18', '8.48'),
(13, 2, 3, '927', '36', '22.8'),
(14, 3, 3, '637', '17', '30.7'),
(15, 4, 3, '800', '22', '5.79'),
(16, 5, 3, '732', '21', '18.3'),
(17, 1, 4, '721', '108', '288.5'),
(18, 2, 4, '927', '131', '252.9'),
(19, 3, 4, '637', '80', '245.1'),
(20, 4, 4, '800', '95', '177.2'),
(21, 5, 4, '732', '77', '144.3');

-- --------------------------------------------------------

--
-- Table structure for table `prevalence_schistosomiases`
--

CREATE TABLE `prevalence_schistosomiases` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `Year_1_kato_karz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year_2_kato_karz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_1_POC_tr_ve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_2_POC_tr_ve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_1_POC_tr+ve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_2_POC_tr+ve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Heamaturie_year_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Heamaturie_year_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prevalence_sma_and_sths`
--

CREATE TABLE `prevalence_sma_and_sths` (
  `id` int(10) UNSIGNED NOT NULL,
  `I_id` int(11) NOT NULL,
  `Total_no_ind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Arithmetic_mean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `light_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heavy_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Moderate_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prevalence_sma_and_sths`
--

INSERT INTO `prevalence_sma_and_sths` (`id`, `I_id`, `Total_no_ind`, `Arithmetic_mean`, `light_n`, `heavy_n`, `Moderate_n`) VALUES
(2, 1, '2.9', '1.2', '2.6', '0.3', '0'),
(3, 2, '17.5', '21.4', '17.5', '0', '0'),
(4, 3, '10.4', '56.8', '9.4', '1', '0'),
(5, 4, '23.8', '921.6', '18.8', '4.7', '0.3');

-- --------------------------------------------------------

--
-- Table structure for table `prevalence_sthandsm_woredas`
--

CREATE TABLE `prevalence_sthandsm_woredas` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Age_id` int(11) NOT NULL,
  `I_id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prevalence_sthandsm_woredas`
--

INSERT INTO `prevalence_sthandsm_woredas` (`id`, `Woreda_id`, `Age_id`, `I_id`, `S_id`, `Description`, `value`) VALUES
(42, 13, 1, 1, 1, 'Moderate', '0'),
(43, 13, 2, 1, 1, 'Moderate', '0'),
(44, 13, 3, 1, 1, 'Moderate', '0'),
(45, 13, 4, 1, 1, 'Moderate', '0'),
(46, 13, 5, 1, 1, 'Moderate', '0'),
(47, 13, 1, 1, 2, 'Moderate', '0'),
(48, 13, 2, 1, 2, 'Moderate', '0'),
(49, 13, 3, 1, 2, 'Moderate', '0'),
(50, 13, 4, 1, 2, 'Moderate', '0'),
(51, 13, 5, 1, 2, 'Moderate', '0'),
(52, 13, 1, 2, 1, 'Moderate', '0'),
(53, 13, 2, 2, 1, 'Moderate', '0'),
(54, 13, 3, 2, 1, 'Moderate', '0'),
(55, 13, 4, 2, 1, 'Moderate', '0'),
(56, 13, 5, 2, 1, 'Moderate', '0'),
(57, 13, 1, 2, 2, 'Moderate', '0'),
(58, 13, 2, 2, 2, 'Moderate', '0'),
(59, 13, 3, 2, 2, 'Moderate', '0'),
(60, 13, 4, 2, 2, 'Moderate', '0'),
(61, 13, 5, 2, 2, 'Moderate', '0'),
(62, 13, 1, 3, 1, 'Moderate', '14.29'),
(63, 13, 2, 3, 1, 'Moderate', '0'),
(64, 13, 3, 3, 1, 'Moderate', '0'),
(65, 13, 4, 3, 1, 'Moderate', '0'),
(66, 13, 5, 3, 1, 'Moderate', '0'),
(67, 13, 1, 3, 2, 'Moderate', '0'),
(68, 13, 2, 3, 2, 'Moderate', '0'),
(69, 13, 3, 3, 2, 'Moderate', '6.67'),
(70, 13, 4, 3, 2, 'Moderate', '0'),
(71, 13, 5, 3, 2, 'Moderate', '0'),
(72, 13, 1, 4, 1, 'Moderate', '0'),
(73, 13, 2, 4, 1, 'Moderate', '0'),
(74, 13, 3, 4, 1, 'Moderate', '0'),
(75, 13, 4, 4, 1, 'Moderate', '0'),
(76, 13, 5, 4, 1, 'Moderate', '0'),
(77, 13, 1, 4, 2, 'Moderate', '0'),
(78, 13, 2, 4, 2, 'Moderate', '0'),
(79, 13, 3, 4, 2, 'Moderate', '6.67'),
(80, 13, 4, 4, 2, 'Moderate', '6.67'),
(81, 13, 5, 4, 2, 'Moderate', '0'),
(162, 1, 1, 1, 1, 'Moderate', '0'),
(163, 1, 2, 1, 1, 'Moderate', '0'),
(164, 1, 3, 1, 1, 'Moderate', '0'),
(165, 1, 4, 1, 1, 'Moderate', '0'),
(166, 1, 5, 1, 1, 'Moderate', '0'),
(167, 1, 1, 1, 2, 'Moderate', '0'),
(168, 1, 2, 1, 2, 'Moderate', '1.43'),
(169, 1, 3, 1, 2, 'Moderate', '0'),
(170, 1, 4, 1, 2, 'Moderate', '1.23'),
(171, 1, 5, 1, 2, 'Moderate', '0'),
(172, 1, 1, 2, 1, 'Moderate', '0'),
(173, 1, 2, 2, 1, 'Moderate', '0'),
(174, 1, 3, 2, 1, 'Moderate', '0'),
(175, 1, 4, 2, 1, 'Moderate', '0'),
(176, 1, 5, 2, 1, 'Moderate', '0'),
(177, 1, 1, 2, 2, 'Moderate', '0'),
(178, 1, 2, 2, 2, 'Moderate', '0'),
(179, 1, 3, 2, 2, 'Moderate', '0'),
(180, 1, 4, 2, 2, 'Moderate', '0'),
(181, 1, 5, 2, 2, 'Moderate', '0'),
(182, 1, 1, 3, 1, 'Moderate', '0'),
(183, 1, 2, 3, 1, 'Moderate', '0'),
(184, 1, 3, 3, 1, 'Moderate', '0'),
(185, 1, 4, 3, 1, 'Moderate', '0'),
(186, 1, 5, 3, 1, 'Moderate', '0'),
(187, 1, 1, 3, 2, 'Moderate', '0'),
(188, 1, 2, 3, 2, 'Moderate', '0'),
(189, 1, 3, 3, 2, 'Moderate', '0'),
(190, 1, 4, 3, 2, 'Moderate', '0'),
(191, 1, 5, 3, 2, 'Moderate', '0'),
(192, 1, 1, 4, 1, 'Moderate', '0'),
(193, 1, 2, 4, 1, 'Moderate', '0'),
(194, 1, 3, 4, 1, 'Moderate', '0'),
(195, 1, 4, 4, 1, 'Moderate', '0'),
(196, 1, 5, 4, 1, 'Moderate', '0'),
(197, 1, 1, 4, 2, 'Moderate', '0'),
(198, 1, 2, 4, 2, 'Moderate', '1.43'),
(199, 1, 3, 4, 2, 'Moderate', '0'),
(200, 1, 4, 4, 2, 'Moderate', '0'),
(201, 1, 5, 4, 2, 'Moderate', '0'),
(282, 3, 1, 1, 1, 'Moderate', '0'),
(283, 3, 2, 1, 1, 'Moderate', '0'),
(284, 3, 3, 1, 1, 'Moderate', '0'),
(285, 3, 4, 1, 1, 'Moderate', '0'),
(286, 3, 5, 1, 1, 'Moderate', '0'),
(287, 3, 1, 1, 2, 'Moderate', '2.44'),
(288, 3, 2, 1, 2, 'Moderate', '0'),
(289, 3, 3, 1, 2, 'Moderate', '0'),
(290, 3, 4, 1, 2, 'Moderate', '0'),
(291, 3, 5, 1, 2, 'Moderate', '0'),
(292, 3, 1, 2, 1, 'Moderate', '0'),
(293, 3, 2, 2, 1, 'Moderate', '0'),
(294, 3, 3, 2, 1, 'Moderate', '0'),
(295, 3, 4, 2, 1, 'Moderate', '0'),
(296, 3, 5, 2, 1, 'Moderate', '0'),
(297, 3, 1, 2, 2, 'Moderate', '0'),
(298, 3, 2, 2, 2, 'Moderate', '0'),
(299, 3, 3, 2, 2, 'Moderate', '0'),
(300, 3, 4, 2, 2, 'Moderate', '0'),
(301, 3, 5, 2, 2, 'Moderate', '0'),
(302, 3, 1, 3, 1, 'Moderate', '0'),
(303, 3, 2, 3, 1, 'Moderate', '2.2'),
(304, 3, 3, 3, 1, 'Moderate', '3.7'),
(305, 3, 4, 3, 1, 'Moderate', '2.94'),
(306, 3, 5, 3, 1, 'Moderate', '2.13'),
(307, 3, 1, 3, 2, 'Moderate', '2.44'),
(308, 3, 2, 3, 2, 'Moderate', '0'),
(309, 3, 3, 3, 2, 'Moderate', '3.23'),
(310, 3, 4, 3, 2, 'Moderate', '0'),
(311, 3, 5, 3, 2, 'Moderate', '0'),
(312, 3, 1, 4, 1, 'Moderate', '2.08'),
(313, 3, 2, 4, 1, 'Moderate', '0'),
(314, 3, 3, 4, 1, 'Moderate', '3.7'),
(315, 3, 4, 4, 1, 'Moderate', '0'),
(316, 3, 5, 4, 1, 'Moderate', '0'),
(317, 3, 1, 4, 2, 'Moderate', '4.88'),
(318, 3, 2, 4, 2, 'Moderate', '1.67'),
(319, 3, 3, 4, 2, 'Moderate', '0'),
(320, 3, 4, 4, 2, 'Moderate', '1.45'),
(321, 3, 5, 4, 2, 'Moderate', '0'),
(402, 6, 1, 1, 1, 'Moderate', '0'),
(403, 6, 2, 1, 1, 'Moderate', '6.25'),
(404, 6, 3, 1, 1, 'Moderate', '0'),
(405, 6, 4, 1, 1, 'Moderate', '0'),
(406, 6, 5, 1, 1, 'Moderate', '0'),
(407, 6, 1, 1, 2, 'Moderate', '0'),
(408, 6, 2, 1, 2, 'Moderate', '3.33'),
(409, 6, 3, 1, 2, 'Moderate', '0'),
(410, 6, 4, 1, 2, 'Moderate', '0'),
(411, 6, 5, 1, 2, 'Moderate', '3.33'),
(412, 6, 1, 2, 1, 'Moderate', '0'),
(413, 6, 2, 2, 1, 'Moderate', '0'),
(414, 6, 3, 2, 1, 'Moderate', '0'),
(415, 6, 4, 2, 1, 'Moderate', '0'),
(416, 6, 5, 2, 1, 'Moderate', '0'),
(417, 6, 1, 2, 2, 'Moderate', '0'),
(418, 6, 2, 2, 2, 'Moderate', '0'),
(419, 6, 3, 2, 2, 'Moderate', '0'),
(420, 6, 4, 2, 2, 'Moderate', '0'),
(421, 6, 5, 2, 2, 'Moderate', '0'),
(422, 6, 1, 3, 1, 'Moderate', '0'),
(423, 6, 2, 3, 1, 'Moderate', '0'),
(424, 6, 3, 3, 1, 'Moderate', '0'),
(425, 6, 4, 3, 1, 'Moderate', '0'),
(426, 6, 5, 3, 1, 'Moderate', '0'),
(427, 6, 1, 3, 2, 'Moderate', '0'),
(428, 6, 2, 3, 2, 'Moderate', '0'),
(429, 6, 3, 3, 2, 'Moderate', '0'),
(430, 6, 4, 3, 2, 'Moderate', '0'),
(431, 6, 5, 3, 2, 'Moderate', '0'),
(432, 6, 1, 4, 1, 'Moderate', '6.25'),
(433, 6, 2, 4, 1, 'Moderate', '3.13'),
(434, 6, 3, 4, 1, 'Moderate', '7.41'),
(435, 6, 4, 4, 1, 'Moderate', '0'),
(436, 6, 5, 4, 1, 'Moderate', '0'),
(437, 6, 1, 4, 2, 'Moderate', '0'),
(438, 6, 2, 4, 2, 'Moderate', '6.66'),
(439, 6, 3, 4, 2, 'Moderate', '6.45'),
(440, 6, 4, 4, 2, 'Moderate', '3.23'),
(441, 6, 5, 4, 2, 'Moderate', '3.33'),
(522, 7, 1, 1, 1, 'Moderate', '0'),
(523, 7, 2, 1, 1, 'Moderate', '0'),
(524, 7, 3, 1, 1, 'Moderate', '0'),
(525, 7, 4, 1, 1, 'Moderate', '7.69'),
(526, 7, 5, 1, 1, 'Moderate', '0'),
(527, 7, 1, 1, 2, 'Moderate', '0'),
(528, 7, 2, 1, 2, 'Moderate', '0'),
(529, 7, 3, 1, 2, 'Moderate', '0'),
(530, 7, 4, 1, 2, 'Moderate', '0'),
(531, 7, 5, 1, 2, 'Moderate', '0'),
(532, 7, 1, 2, 1, 'Moderate', '0'),
(533, 7, 2, 2, 1, 'Moderate', '0'),
(534, 7, 3, 2, 1, 'Moderate', '0'),
(535, 7, 4, 2, 1, 'Moderate', '0'),
(536, 7, 5, 2, 1, 'Moderate', '0'),
(537, 7, 1, 2, 2, 'Moderate', '0'),
(538, 7, 2, 2, 2, 'Moderate', '0'),
(539, 7, 3, 2, 2, 'Moderate', '0'),
(540, 7, 4, 2, 2, 'Moderate', '0'),
(541, 7, 5, 2, 2, 'Moderate', '0'),
(542, 7, 1, 3, 1, 'Moderate', '0'),
(543, 7, 2, 3, 1, 'Moderate', '0'),
(544, 7, 3, 3, 1, 'Moderate', '7.69'),
(545, 7, 4, 3, 1, 'Moderate', '0'),
(546, 7, 5, 3, 1, 'Moderate', '0'),
(547, 7, 1, 3, 2, 'Moderate', '0'),
(548, 7, 2, 3, 2, 'Moderate', '0'),
(549, 7, 3, 3, 2, 'Moderate', '7.14'),
(550, 7, 4, 3, 2, 'Moderate', '0'),
(551, 7, 5, 3, 2, 'Moderate', '0'),
(552, 7, 1, 4, 1, 'Moderate', '5.56'),
(553, 7, 2, 4, 1, 'Moderate', '5.56'),
(554, 7, 3, 4, 1, 'Moderate', '0'),
(555, 7, 4, 4, 1, 'Moderate', '0'),
(556, 7, 5, 4, 1, 'Moderate', '0'),
(557, 7, 1, 4, 2, 'Moderate', '0'),
(558, 7, 2, 4, 2, 'Moderate', '5.56'),
(559, 7, 3, 4, 2, 'Moderate', '7.14'),
(560, 7, 4, 4, 2, 'Moderate', '6.25'),
(561, 7, 5, 4, 2, 'Moderate', '7.69'),
(642, 5, 1, 1, 1, 'Moderate', '0'),
(643, 5, 2, 1, 1, 'Moderate', '0'),
(644, 5, 3, 1, 1, 'Moderate', '0'),
(645, 5, 4, 1, 1, 'Moderate', '0'),
(646, 5, 5, 1, 1, 'Moderate', '0'),
(647, 5, 1, 1, 2, 'Moderate', '0'),
(648, 5, 2, 1, 2, 'Moderate', '0'),
(649, 5, 3, 1, 2, 'Moderate', '0'),
(650, 5, 4, 1, 2, 'Moderate', '0'),
(651, 5, 5, 1, 2, 'Moderate', '0'),
(652, 5, 1, 2, 1, 'Moderate', '0'),
(653, 5, 2, 2, 1, 'Moderate', '0'),
(654, 5, 3, 2, 1, 'Moderate', '0'),
(655, 5, 4, 2, 1, 'Moderate', '0'),
(656, 5, 5, 2, 1, 'Moderate', '0'),
(657, 5, 1, 2, 2, 'Moderate', '0'),
(658, 5, 2, 2, 2, 'Moderate', '0'),
(659, 5, 3, 2, 2, 'Moderate', '0'),
(660, 5, 4, 2, 2, 'Moderate', '0'),
(661, 5, 5, 2, 2, 'Moderate', '0'),
(662, 5, 1, 3, 1, 'Moderate', '0'),
(663, 5, 2, 3, 1, 'Moderate', '0'),
(664, 5, 3, 3, 1, 'Moderate', '0'),
(665, 5, 4, 3, 1, 'Moderate', '0'),
(666, 5, 5, 3, 1, 'Moderate', '0'),
(667, 5, 1, 3, 2, 'Moderate', '0'),
(668, 5, 2, 3, 2, 'Moderate', '0'),
(669, 5, 3, 3, 2, 'Moderate', '0'),
(670, 5, 4, 3, 2, 'Moderate', '0'),
(671, 5, 5, 3, 2, 'Moderate', '0'),
(672, 5, 1, 4, 1, 'Moderate', '0'),
(673, 5, 2, 4, 1, 'Moderate', '0'),
(674, 5, 3, 4, 1, 'Moderate', '0'),
(675, 5, 4, 4, 1, 'Moderate', '0'),
(676, 5, 5, 4, 1, 'Moderate', '0'),
(677, 5, 1, 4, 2, 'Moderate', '0'),
(678, 5, 2, 4, 2, 'Moderate', '0'),
(679, 5, 3, 4, 2, 'Moderate', '0'),
(680, 5, 4, 4, 2, 'Moderate', '0'),
(681, 5, 5, 4, 2, 'Moderate', '0'),
(762, 8, 1, 1, 1, 'Moderate', '0'),
(763, 8, 2, 1, 1, 'Moderate', '0'),
(764, 8, 3, 1, 1, 'Moderate', '0'),
(765, 8, 4, 1, 1, 'Moderate', '0'),
(766, 8, 5, 1, 1, 'Moderate', '0'),
(767, 8, 1, 1, 2, 'Moderate', '0'),
(768, 8, 2, 1, 2, 'Moderate', '0'),
(769, 8, 3, 1, 2, 'Moderate', '0'),
(770, 8, 4, 1, 2, 'Moderate', '0'),
(771, 8, 5, 1, 2, 'Moderate', '0'),
(772, 8, 1, 2, 1, 'Moderate', '0'),
(773, 8, 2, 2, 1, 'Moderate', '0'),
(774, 8, 3, 2, 1, 'Moderate', '0'),
(775, 8, 4, 2, 1, 'Moderate', '0'),
(776, 8, 5, 2, 1, 'Moderate', '0'),
(777, 8, 1, 2, 2, 'Moderate', '0'),
(778, 8, 2, 2, 2, 'Moderate', '0'),
(779, 8, 3, 2, 2, 'Moderate', '0'),
(780, 8, 4, 2, 2, 'Moderate', '0'),
(781, 8, 5, 2, 2, 'Moderate', '0'),
(782, 8, 1, 3, 1, 'Moderate', '0'),
(783, 8, 2, 3, 1, 'Moderate', '0'),
(784, 8, 3, 3, 1, 'Moderate', '0'),
(785, 8, 4, 3, 1, 'Moderate', '0'),
(786, 8, 5, 3, 1, 'Moderate', '0'),
(787, 8, 1, 3, 2, 'Moderate', '0'),
(788, 8, 2, 3, 2, 'Moderate', '12.5'),
(789, 8, 3, 3, 2, 'Moderate', '0'),
(790, 8, 4, 3, 2, 'Moderate', '0'),
(791, 8, 5, 3, 2, 'Moderate', '0'),
(792, 8, 1, 4, 1, 'Moderate', '0'),
(793, 8, 2, 4, 1, 'Moderate', '0'),
(794, 8, 3, 4, 1, 'Moderate', '0'),
(795, 8, 4, 4, 1, 'Moderate', '0'),
(796, 8, 5, 4, 1, 'Moderate', '0'),
(797, 8, 1, 4, 2, 'Moderate', '0'),
(798, 8, 2, 4, 2, 'Moderate', '0'),
(799, 8, 3, 4, 2, 'Moderate', '0'),
(800, 8, 4, 4, 2, 'Moderate', '0'),
(801, 8, 5, 4, 2, 'Moderate', '0'),
(882, 4, 1, 1, 1, 'Moderate', '0'),
(883, 4, 2, 1, 1, 'Moderate', '0'),
(884, 4, 3, 1, 1, 'Moderate', '0'),
(885, 4, 4, 1, 1, 'Moderate', '0'),
(886, 4, 5, 1, 1, 'Moderate', '0'),
(887, 4, 1, 1, 2, 'Moderate', '0'),
(888, 4, 2, 1, 2, 'Moderate', '0'),
(889, 4, 3, 1, 2, 'Moderate', '0'),
(890, 4, 4, 1, 2, 'Moderate', '0'),
(891, 4, 5, 1, 2, 'Moderate', '0'),
(892, 4, 1, 2, 1, 'Moderate', '0'),
(893, 4, 2, 2, 1, 'Moderate', '0'),
(894, 4, 3, 2, 1, 'Moderate', '0'),
(895, 4, 4, 2, 1, 'Moderate', '0'),
(896, 4, 5, 2, 1, 'Moderate', '0'),
(897, 4, 1, 2, 2, 'Moderate', '0'),
(898, 4, 2, 2, 2, 'Moderate', '0'),
(899, 4, 3, 2, 2, 'Moderate', '1.75'),
(900, 4, 4, 2, 2, 'Moderate', '0'),
(901, 4, 5, 2, 2, 'Moderate', '0'),
(902, 4, 1, 3, 1, 'Moderate', '0'),
(903, 4, 2, 3, 1, 'Moderate', '2.47'),
(904, 4, 3, 3, 1, 'Moderate', '1.82'),
(905, 4, 4, 3, 1, 'Moderate', '0'),
(906, 4, 5, 3, 1, 'Moderate', '0'),
(907, 4, 1, 3, 2, 'Moderate', '0'),
(908, 4, 2, 3, 2, 'Moderate', '0'),
(909, 4, 3, 3, 2, 'Moderate', '0'),
(910, 4, 4, 3, 2, 'Moderate', '1.6'),
(911, 4, 5, 3, 2, 'Moderate', '3.45'),
(912, 4, 1, 4, 1, 'Moderate', '0'),
(913, 4, 2, 4, 1, 'Moderate', '0'),
(914, 4, 3, 4, 1, 'Moderate', '0'),
(915, 4, 4, 4, 1, 'Moderate', '0'),
(916, 4, 5, 4, 1, 'Moderate', '0'),
(917, 4, 1, 4, 2, 'Moderate', '0'),
(918, 4, 2, 4, 2, 'Moderate', '0'),
(919, 4, 3, 4, 2, 'Moderate', '0'),
(920, 4, 4, 4, 2, 'Moderate', '0'),
(921, 4, 5, 4, 2, 'Moderate', '0'),
(1002, 10, 1, 1, 1, 'Moderate', '0'),
(1003, 10, 2, 1, 1, 'Moderate', '0'),
(1004, 10, 3, 1, 1, 'Moderate', '0'),
(1005, 10, 4, 1, 1, 'Moderate', '0'),
(1006, 10, 5, 1, 1, 'Moderate', '0'),
(1007, 10, 1, 1, 2, 'Moderate', '0'),
(1008, 10, 2, 1, 2, 'Moderate', '0'),
(1009, 10, 3, 1, 2, 'Moderate', '0'),
(1010, 10, 4, 1, 2, 'Moderate', '0'),
(1011, 10, 5, 1, 2, 'Moderate', '0'),
(1012, 10, 1, 2, 1, 'Moderate', '0'),
(1013, 10, 2, 2, 1, 'Moderate', '0'),
(1014, 10, 3, 2, 1, 'Moderate', '0'),
(1015, 10, 4, 2, 1, 'Moderate', '0'),
(1016, 10, 5, 2, 1, 'Moderate', '0'),
(1017, 10, 1, 2, 2, 'Moderate', '0'),
(1018, 10, 2, 2, 2, 'Moderate', '0'),
(1019, 10, 3, 2, 2, 'Moderate', '0'),
(1020, 10, 4, 2, 2, 'Moderate', '0'),
(1021, 10, 5, 2, 2, 'Moderate', '0'),
(1022, 10, 1, 3, 1, 'Moderate', '2.17'),
(1023, 10, 2, 3, 1, 'Moderate', '1.75'),
(1024, 10, 3, 3, 1, 'Moderate', '0'),
(1025, 10, 4, 3, 1, 'Moderate', '0'),
(1026, 10, 5, 3, 1, 'Moderate', '0'),
(1027, 10, 1, 3, 2, 'Moderate', '0'),
(1028, 10, 2, 3, 2, 'Moderate', '0'),
(1029, 10, 3, 3, 2, 'Moderate', '0'),
(1030, 10, 4, 3, 2, 'Moderate', '0'),
(1031, 10, 5, 3, 2, 'Moderate', '2.17'),
(1032, 10, 1, 4, 1, 'Moderate', '0'),
(1033, 10, 2, 4, 1, 'Moderate', '3.51'),
(1034, 10, 3, 4, 1, 'Moderate', '0'),
(1035, 10, 4, 4, 1, 'Moderate', '2.94'),
(1036, 10, 5, 4, 1, 'Moderate', '0'),
(1037, 10, 1, 4, 2, 'Moderate', '0'),
(1038, 10, 2, 4, 2, 'Moderate', '0'),
(1039, 10, 3, 4, 2, 'Moderate', '1.96'),
(1040, 10, 4, 4, 2, 'Moderate', '2.04'),
(1041, 10, 5, 4, 2, 'Moderate', '0'),
(1122, 12, 1, 1, 1, 'Moderate', '0'),
(1123, 12, 2, 1, 1, 'Moderate', '0'),
(1124, 12, 3, 1, 1, 'Moderate', '0'),
(1125, 12, 4, 1, 1, 'Moderate', '0'),
(1126, 12, 5, 1, 1, 'Moderate', '0'),
(1127, 12, 1, 1, 2, 'Moderate', '0'),
(1128, 12, 2, 1, 2, 'Moderate', '0'),
(1129, 12, 3, 1, 2, 'Moderate', '0'),
(1130, 12, 4, 1, 2, 'Moderate', '0'),
(1131, 12, 5, 1, 2, 'Moderate', '0'),
(1132, 12, 1, 2, 1, 'Moderate', '0'),
(1133, 12, 2, 2, 1, 'Moderate', '0'),
(1134, 12, 3, 2, 1, 'Moderate', '0'),
(1135, 12, 4, 2, 1, 'Moderate', '0'),
(1136, 12, 5, 2, 1, 'Moderate', '0'),
(1137, 12, 1, 2, 2, 'Moderate', '0'),
(1138, 12, 2, 2, 2, 'Moderate', '0'),
(1139, 12, 3, 2, 2, 'Moderate', '0'),
(1140, 12, 4, 2, 2, 'Moderate', '0'),
(1141, 12, 5, 2, 2, 'Moderate', '0'),
(1142, 12, 1, 3, 1, 'Moderate', '0'),
(1143, 12, 2, 3, 1, 'Moderate', '0'),
(1144, 12, 3, 3, 1, 'Moderate', '0'),
(1145, 12, 4, 3, 1, 'Moderate', '0'),
(1146, 12, 5, 3, 1, 'Moderate', '0'),
(1147, 12, 1, 3, 2, 'Moderate', '0'),
(1148, 12, 2, 3, 2, 'Moderate', '0'),
(1149, 12, 3, 3, 2, 'Moderate', '0'),
(1150, 12, 4, 3, 2, 'Moderate', '0'),
(1151, 12, 5, 3, 2, 'Moderate', '0'),
(1152, 12, 1, 4, 1, 'Moderate', '3.33'),
(1153, 12, 2, 4, 1, 'Moderate', '0'),
(1154, 12, 3, 4, 1, 'Moderate', '3.45'),
(1155, 12, 4, 4, 1, 'Moderate', '0'),
(1156, 12, 5, 4, 1, 'Moderate', '0'),
(1157, 12, 1, 4, 2, 'Moderate', '0'),
(1158, 12, 2, 4, 2, 'Moderate', '3.23'),
(1159, 12, 3, 4, 2, 'Moderate', '0'),
(1160, 12, 4, 4, 2, 'Moderate', '0'),
(1161, 12, 5, 4, 2, 'Moderate', '0'),
(1242, 11, 1, 1, 1, 'Moderate', '0'),
(1243, 11, 2, 1, 1, 'Moderate', '0'),
(1244, 11, 3, 1, 1, 'Moderate', '0'),
(1245, 11, 4, 1, 1, 'Moderate', '0'),
(1246, 11, 5, 1, 1, 'Moderate', '0'),
(1247, 11, 1, 1, 2, 'Moderate', '0'),
(1248, 11, 2, 1, 2, 'Moderate', '0'),
(1249, 11, 3, 1, 2, 'Moderate', '0'),
(1250, 11, 4, 1, 2, 'Moderate', '0'),
(1251, 11, 5, 1, 2, 'Moderate', '0'),
(1252, 11, 1, 2, 1, 'Moderate', '0'),
(1253, 11, 2, 2, 1, 'Moderate', '0'),
(1254, 11, 3, 2, 1, 'Moderate', '0'),
(1255, 11, 4, 2, 1, 'Moderate', '0'),
(1256, 11, 5, 2, 1, 'Moderate', '0'),
(1257, 11, 1, 2, 2, 'Moderate', '0'),
(1258, 11, 2, 2, 2, 'Moderate', '0'),
(1259, 11, 3, 2, 2, 'Moderate', '0'),
(1260, 11, 4, 2, 2, 'Moderate', '0'),
(1261, 11, 5, 2, 2, 'Moderate', '0'),
(1262, 11, 1, 3, 1, 'Moderate', '0'),
(1263, 11, 2, 3, 1, 'Moderate', '0'),
(1264, 11, 3, 3, 1, 'Moderate', '0'),
(1265, 11, 4, 3, 1, 'Moderate', '0'),
(1266, 11, 5, 3, 1, 'Moderate', '0'),
(1267, 11, 1, 3, 2, 'Moderate', '0'),
(1268, 11, 2, 3, 2, 'Moderate', '0'),
(1269, 11, 3, 3, 2, 'Moderate', '0'),
(1270, 11, 4, 3, 2, 'Moderate', '0'),
(1271, 11, 5, 3, 2, 'Moderate', '0'),
(1272, 11, 1, 4, 1, 'Moderate', '0'),
(1273, 11, 2, 4, 1, 'Moderate', '0'),
(1274, 11, 3, 4, 1, 'Moderate', '0'),
(1275, 11, 4, 4, 1, 'Moderate', '0'),
(1276, 11, 5, 4, 1, 'Moderate', '0'),
(1277, 11, 1, 4, 2, 'Moderate', '0'),
(1278, 11, 2, 4, 2, 'Moderate', '0'),
(1279, 11, 3, 4, 2, 'Moderate', '0'),
(1280, 11, 4, 4, 2, 'Moderate', '0'),
(1281, 11, 5, 4, 2, 'Moderate', '0');

-- --------------------------------------------------------

--
-- Table structure for table `prevalence_sth_infections`
--

CREATE TABLE `prevalence_sth_infections` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `any_sth_year_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `any_sth_year_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ascaris_year_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ascaris_year_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trichuris_year_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trichuris_year_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hookworm_year_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hookworm_year_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prevalence_sth_infections`
--

INSERT INTO `prevalence_sth_infections` (`id`, `Kebele_id`, `any_sth_year_1`, `any_sth_year_2`, `Ascaris_year_1`, `Ascaris_year_2`, `Trichuris_year_1`, `Trichuris_year_2`, `hookworm_year_1`, `hookworm_year_2`) VALUES
(2, 26, '67.44', '43.37', '50', '31.33', '15.12', '9.64', '26.74', '18.07'),
(3, 4, '26', '26.53', '25', '19.39', '8', '1.02', '1', '8.16'),
(4, 20, '12.5', '30.85', '8.33', '13.83', '1.04', '10.64', '3.12', '12.77'),
(5, 8, '42.5', '57.41', '41.67', '30.56', '17.5', '19.44', '2.5', '29.63');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_haemastixes`
--

CREATE TABLE `proportion_haemastixes` (
  `id` int(10) UNSIGNED NOT NULL,
  `none` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trace_non_haemolysed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trace_haemolysed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `positive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_positive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `three_positive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_haemastixes`
--

INSERT INTO `proportion_haemastixes` (`id`, `none`, `trace_non_haemolysed`, `trace_haemolysed`, `positive`, `two_positive`, `three_positive`) VALUES
(1, '95.8', '0.8', '0.5', '1.0', '0.9', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hc_bdws`
--

CREATE TABLE `proportion_hc_bdws` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `nhealthfacility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onpremises` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentlyavailable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basicwateraccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hc_bdws`
--

INSERT INTO `proportion_hc_bdws` (`id`, `Woreda_id`, `nhealthfacility`, `water_source`, `onpremises`, `currentlyavailable`, `basicwateraccess`) VALUES
(2, 6, '9', '33.3', '77.8', '22.2', '11.1'),
(3, 7, '6', '66.7', '16.7', '40', '20'),
(5, 1, '19', '31.6', '21.1', '26.3', '0'),
(6, 3, '40', '60', '15', '30', '10'),
(7, 5, '27', '59.3', '25.9', '25.9', '14.8'),
(8, 4, '13', '76.9', '23.1', '38.5', '15.4');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hc_bsanitations`
--

CREATE TABLE `proportion_hc_bsanitations` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `nhealthfacility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Improved_latrine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currently_functionable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hw_facilpresent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sw_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basicsanitation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hc_bsanitations`
--

INSERT INTO `proportion_hc_bsanitations` (`id`, `Woreda_id`, `nhealthfacility`, `Improved_latrine`, `currently_functionable`, `hw_facilpresent`, `sw_available`, `basicsanitation`) VALUES
(2, 6, '9', '55.6', '55.6', '0', '12.5', '0'),
(3, 7, '6', '66.7', '100', '0', '16.7', '0'),
(5, 1, '19', '36.8', '57.9', '26.3', '15.8', '5.3'),
(6, 3, '40', '45', '82.5', '20', '7.5', '7.5'),
(7, 5, '27', '33.3', '85.2', '29.6', '18.5', '3.7'),
(8, 4, '13', '46.2', '53.8', '23.1', '30.8', '15.4');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_basicdws`
--

CREATE TABLE `proportion_hh_basicdws` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `improved_drinking_water_source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_round_daily_access` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `journey_time_to_collect_water_is_less_than_30min` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morethan_25_litres_water_collected_per_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_with_access_to_basic_water` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_basicdws`
--

INSERT INTO `proportion_hh_basicdws` (`id`, `Woreda_id`, `Kebele_id`, `improved_drinking_water_source`, `year_round_daily_access`, `journey_time_to_collect_water_is_less_than_30min`, `morethan_25_litres_water_collected_per_person`, `hh_with_access_to_basic_water`) VALUES
(2, 6, 58, '99.3', '60.7', '42.9', '0', '32.9'),
(3, 6, 59, '100', '58.5', '96.9', '0', '58.5'),
(4, 6, 60, '70.6', '25.7', '51.9', '0', '16'),
(5, 6, 61, '100', '51.2', '54.4', '0', '24.8'),
(6, 6, 62, '91.2', '49.5', '70', '0', '33'),
(7, 6, 63, '100', '50', '78.7', '1.9', '28.7'),
(8, 6, 64, '100', '63.4', '86.6', '0', '53'),
(9, 6, 65, '100', '53.1', '75.3', '0', '44.4'),
(10, 7, 66, '78.3', '43.4', '73.5', '0', '33.3'),
(11, 7, 67, '56.2', '51.5', '79.3', '0', '20.7'),
(12, 7, 68, '50.3', '48.5', '80.4', '0', '21.9'),
(13, 7, 69, '99', '32.1', '59.1', '0', '25.9'),
(14, 7, 70, '87.8', '47', '77.4', '0', '36.5'),
(15, 7, 71, '93.9', '53.5', '94.7', '2.6', '49.1'),
(16, 7, 72, '98.4', '39.5', '62.9', '0', '33.1');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_basichwfacilities`
--

CREATE TABLE `proportion_hh_basichwfacilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `hwfacility_3m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wateravailable_interview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soap/detergent_available_interview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_access_basic_hw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_basichwfacilities`
--

INSERT INTO `proportion_hh_basichwfacilities` (`id`, `Woreda_id`, `Kebele_id`, `hwfacility_3m`, `wateravailable_interview`, `soap/detergent_available_interview`, `hh_access_basic_hw`) VALUES
(2, 6, 58, '24 (17.0)', '0', '0', '0'),
(3, 6, 59, '33 (50.8)', '0', '0', '0'),
(4, 6, 60, '98 (52.4)', '4 (80.0)', '4 (70.0)', '4 (2.1)'),
(5, 6, 61, '20 (16.0)', '1 (100.0)', '1 (100.0)', '1 (0.9)'),
(6, 6, 62, '41 (45.1)', '15 (100.0)', '15 (100.0)', '15 (17.4)'),
(7, 6, 63, '17 (15.7)', '0', '0', '0'),
(8, 6, 64, '74 (45.1)', '1 (100.0)', '1 (100.0)', '1 (0.7)'),
(9, 6, 65, '76 (46.9)', '5 (100.0)', '5 (100.0)', '5 (3.3)'),
(10, 7, 66, '33 (17.5)', '0', '0', '0'),
(11, 7, 67, '105 (62.1)', '0', '0', '0'),
(12, 7, 68, '9 (5.3)', '0', '0', '0'),
(13, 7, 69, '26 (13.5)', '0', '0', '0'),
(14, 7, 70, '10 (8.7)', '0', '0', '0'),
(15, 7, 71, '27 (23.7)', '0', '0', '0'),
(16, 7, 72, '41 (33.1)', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_basicsanitations`
--

CREATE TABLE `proportion_hh_basicsanitations` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `Improved_latrine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latrine_notshared` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latrine_onpremises` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latrine_mustbecleaned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hwashing_3m_soapandwater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basicsanitation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_basicsanitations`
--

INSERT INTO `proportion_hh_basicsanitations` (`id`, `Woreda_id`, `Kebele_id`, `Improved_latrine`, `latrine_notshared`, `latrine_onpremises`, `latrine_mustbecleaned`, `hwashing_3m_soapandwater`, `basicsanitation`) VALUES
(2, 6, 58, '36.4', '98.5', '99.2', '56.9', '0', '0'),
(3, 6, 59, '32.3', '98.4', '100', '11.3', '0', '0'),
(4, 6, 60, '76.5', '97.9', '100', '48.9', '2.1', '0'),
(5, 6, 61, '28.8', '98.3', '100', '47.4', '0.9', '0'),
(6, 6, 62, '67', '95.3', '100', '58.1', '17.4', '8.8'),
(7, 6, 63, '20.4', '96.3', '100', '63.6', '0', '0'),
(8, 6, 64, '32.9', '99.4', '100', '7.5', '0.7', '0'),
(9, 6, 65, '69.1', '98', '98.7', '41.9', '3.3', '0'),
(10, 7, 66, '2.6', '97.7', '98.8', '60.8', '0', '0'),
(11, 7, 67, '50.3', '98.2', '98.8', '4.9', '0', '0'),
(12, 7, 68, '3', '87.5', '100', '50.3', '0', '0'),
(13, 7, 69, '1', '97.8', '100', '58.2', '0', '0'),
(14, 7, 70, '3.5', '95.6', '100', '65.8', '0', '0'),
(15, 7, 71, '4.4', '93', '100', '57.9', '0', '0'),
(16, 7, 72, '4', '97.4', '99.1', '52.6', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_basicswshes`
--

CREATE TABLE `proportion_hh_basicswshes` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `HH_storingwater_protective_container` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_storage_container_covered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_collected_safely` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_container_cleaned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `container_cleaned_frequently` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_accesstobasicwaterstorage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_basicswshes`
--

INSERT INTO `proportion_hh_basicswshes` (`id`, `Woreda_id`, `Kebele_id`, `HH_storingwater_protective_container`, `water_storage_container_covered`, `water_collected_safely`, `water_container_cleaned`, `container_cleaned_frequently`, `hh_accesstobasicwaterstorage`) VALUES
(2, 6, 58, '140 (100.0)', '122 (87.1)', '140 (100.0)', '105 (75.0)', '133 (95.0)', '74 (52.9)'),
(3, 6, 59, '65 (100.0)', '65 (100.0)', '64 (98.5)', '37 (56.9)', '65 (100.0)', '37 (56.9)'),
(4, 6, 60, '187 (100.0)', '182 (97.3)', '187 (100.0)', '154 (82.4)', '187 (100.0)', '149 (79.7)'),
(5, 6, 61, '125 (100.0)', '112 (89.6)', '125 (100.0)', '100 (80.0)', '124 (99.2)', '61 (48.8)'),
(6, 6, 62, '91 (100.0)', '87 (95.6)', '91 (100.0)', '61 (67.0)', '91 (100.0)', '59 (64.8)'),
(7, 6, 63, '108 (100.0)', '95 (88.0)', '106 (98.1)', '87 (80.6)', '108 (100.0)', '55 (50.9)'),
(8, 6, 64, '163 (100.0)', '159 (97.0)', '161 (98.2)', '98 (59.8)', '164 (100.0)', '91 (55.5)'),
(9, 6, 65, '162 (100.0)', '150 (92.6)', '162 (100.0)', '115 (71.0)', '162 (100.0)', '104 (64.2)'),
(10, 7, 66, '189 (100.0)', '179 (94.7)', '189 (100.0)', '131 (69.3)', '189 (100.0)', '106 (56.1)'),
(11, 7, 67, '169 (100.0)', '163 (96.4)', '169 (100.0)', '42 (24.9)', '169 (100.0)', '39 (23.1)'),
(12, 7, 68, '169 (100.0)', '128 (75.7)', '165 (97.6)', '110 (65.1)', '169 (100.0)', '75 (44.4)'),
(13, 7, 69, '193 (100.0)', '186 (96.4)', '193 (100.0)', '132 (68.4)', '192 (99.5)', '114 (59.1)'),
(14, 7, 70, '115 (100.0)', '99 (86.1)', '113 (98.3)', '66 (57.4)', '115 (100.0)', '53 (46.1)'),
(15, 7, 71, '114 (100.0)', '88 (77.2)', '110 (96.5)', '69 (60.5)', '114 (100.0)', '47 (41.2)'),
(16, 7, 72, '124 (100.0)', '118 (95.2)', '124 (100.0)', '87 (70.2)', '124 (100.0)', '81 (65.3)');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_bdws`
--

CREATE TABLE `proportion_hh_bdws` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `improved_watersource` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_roundaccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `25literspersonperday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `journeyless30min` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_access_basic_hw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_bdws`
--

INSERT INTO `proportion_hh_bdws` (`id`, `Woreda_id`, `improved_watersource`, `year_roundaccess`, `25literspersonperday`, `journeyless30min`, `hh_access_basic_hw`) VALUES
(2, 1, '64.2', '87.7', '1.6', '54', '30.4'),
(3, 3, '71.7', '83.3', '1.9', '42.4', '28.7'),
(4, 5, '70.7', '94.3', '7', '37.4', '27.8'),
(5, 4, '81.7', '86.6', '3.5', '41.6', '30.7');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_bhwfs`
--

CREATE TABLE `proportion_hh_bhwfs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `hw_fac3m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wavailable_interview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soap_interview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_hw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_bhwfs`
--

INSERT INTO `proportion_hh_bhwfs` (`id`, `Woreda_id`, `hw_fac3m`, `wavailable_interview`, `soap_interview`, `basic_hw`) VALUES
(2, 1, '17.2', '70.9', '15.7', '0.6'),
(3, 3, '14', '57.4', '12.2', '0.7'),
(4, 5, '14.6', '78.2', '13.3', '0.2'),
(5, 4, '9', '35.9', '8.6', '0.2');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_bsanitations`
--

CREATE TABLE `proportion_hh_bsanitations` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `improved_latrine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latrine_cleaned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latrine_notshared` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compound_premises` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hw_facility3m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basicsanitation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_bsanitations`
--

INSERT INTO `proportion_hh_bsanitations` (`id`, `Woreda_id`, `improved_latrine`, `latrine_cleaned`, `latrine_notshared`, `compound_premises`, `hw_facility3m`, `basicsanitation`) VALUES
(2, 1, '13.6', '41', '90', '92', '0.6', '0.1'),
(3, 3, '14.6', '49.5', '93.6', '96.4', '0.8', '0.2'),
(4, 5, '11.2', '46.7', '92.8', '91.7', '0.2', '0'),
(5, 4, '11.5', '45.8', '91.5', '98.5', '0.3', '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_defections`
--

CREATE TABLE `proportion_hh_defections` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `hh_latrine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_hw_facilites` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_member_notuselatrine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `improper_disposalchildfaeces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_meet_odfcriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_defections`
--

INSERT INTO `proportion_hh_defections` (`id`, `Woreda_id`, `Kebele_id`, `hh_latrine`, `hh_hw_facilites`, `hh_member_notuselatrine`, `improper_disposalchildfaeces`, `hh_meet_odfcriteria`) VALUES
(2, 6, 58, '93.6', '17.9', '92.1', '79.5', '17.1'),
(3, 6, 59, '98.5', '53.8', '98.5', '93.8', '53.8'),
(4, 6, 60, '100', '53.5', '95.7', '98.8', '48.7'),
(5, 6, 61, '92.8', '16.8', '85.6', '80.5', '16'),
(6, 6, 62, '94.5', '49.5', '91.2', '93.3', '42.9'),
(7, 6, 63, '100', '31.5', '91.7', '100', '30.6'),
(8, 6, 64, '95.1', '53.7', '94.5', '83.2', '53.7'),
(9, 6, 65, '93.2', '50', '93.2', '91.7', '47.5'),
(10, 7, 66, '91', '25.4', '87.3', '87.2', '24.3'),
(11, 7, 67, '97', '68', '95.3', '100', '66.9'),
(12, 7, 68, '94.7', '8.9', '92.3', '85.1', '8.9'),
(13, 7, 69, '94.8', '20.2', '92.2', '79.5', '17.6'),
(14, 7, 70, '98.3', '14.8', '95.7', '90.5', '14.8'),
(15, 7, 71, '100', '27.2', '100', '93.6', '27.2'),
(16, 7, 72, '93.5', '51.6', '91.1', '93', '48.4');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_dwsks`
--

CREATE TABLE `proportion_hh_dwsks` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `seasonal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `financial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_dwsks`
--

INSERT INTO `proportion_hh_dwsks` (`id`, `Woreda_id`, `Kebele_id`, `seasonal`, `technical`, `access`, `financial`) VALUES
(2, 6, 58, '12.86', '25', '0', '5'),
(3, 6, 59, '29.23', '12.31', '0', '0'),
(4, 6, 60, '61.5', '4.28', '5.35', '2.14'),
(5, 6, 61, '20.8', '35.2', '22.4', '4'),
(6, 6, 62, '40.66', '1.1', '7.69', '1.1'),
(7, 6, 63, '38.89', '9.26', '12.96', '1.85'),
(8, 6, 64, '25', '10.98', '0.61', '0.61'),
(9, 6, 65, '41.36', '3.09', '1.85', '0.62'),
(10, 7, 66, '44.97', '42.33', '23.28', '4.76'),
(11, 7, 67, '32.54', '13.61', '7.69', '0'),
(12, 7, 68, '4.14', '2.37', '47.93', '18.34'),
(13, 7, 69, '50.78', '40.93', '15.03', '2.59'),
(14, 7, 70, '0.87', '26.96', '45.22', '7.83'),
(15, 7, 71, '22.81', '7.9', '17.54', '1.75'),
(16, 7, 72, '31.45', '82.26', '25', '0.81'),
(17, 0, 0, '', '', '', ''),
(18, 0, 0, '', '', '', ''),
(19, 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_feaces`
--

CREATE TABLE `proportion_hh_feaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `fileaccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_feaces`
--

INSERT INTO `proportion_hh_feaces` (`id`, `Woreda_id`, `Kebele_id`, `fileaccess`, `value`) VALUES
(2, 6, 58, 'yes', '46.9'),
(3, 6, 59, 'yes', '88.7'),
(4, 6, 60, 'yes', '51.1'),
(5, 6, 61, 'yes', '62.9'),
(6, 6, 62, 'yes', '41.9'),
(7, 6, 63, 'yes', '52.3'),
(8, 6, 64, 'yes', '91.1'),
(9, 6, 65, 'yes', '58.1'),
(10, 6, 58, 'no', '53.1'),
(11, 6, 59, 'no', '11.3'),
(12, 6, 60, 'no', '48.9'),
(13, 6, 61, 'no', '37.1'),
(14, 6, 62, 'no', '58.1'),
(15, 6, 63, 'no', '47.7'),
(16, 6, 64, 'no', '8.9'),
(17, 6, 65, 'no', '41.9'),
(18, 7, 66, 'yes', '49.7'),
(19, 7, 67, 'yes', '95.1'),
(20, 7, 68, 'yes', '57.2'),
(21, 7, 69, 'yes', '49.5'),
(22, 7, 70, 'yes', '42.3'),
(23, 7, 71, 'yes', '52.6'),
(24, 7, 72, 'yes', '50.9'),
(25, 7, 66, 'no', '50.3'),
(26, 7, 67, 'no', '4.9'),
(27, 7, 68, 'no', '42.8'),
(28, 7, 69, 'no', '50.5'),
(29, 7, 70, 'no', '57.7'),
(30, 7, 71, 'no', '47.4'),
(31, 7, 72, 'no', '49.1');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_notsws`
--

CREATE TABLE `proportion_hh_notsws` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `e_drinkingwater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_cooking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_bathing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_washingclothes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_surfacewater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_notsws`
--

INSERT INTO `proportion_hh_notsws` (`id`, `Woreda_id`, `e_drinkingwater`, `e_cooking`, `e_bathing`, `e_washingclothes`, `e_surfacewater`) VALUES
(2, 1, '15.1', '44', '72.3', '75.6', '82.2'),
(3, 3, '12.3', '18.1', '55.5', '58.8', '65.1'),
(4, 5, '8.4', '16.7', '60.9', '63.7', '68.3'),
(5, 4, '9.1', '11.3', '51.3', '53.4', '56.8');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_odfs`
--

CREATE TABLE `proportion_hh_odfs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `hh_latrine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_hwfacilities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_members` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childfaeces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odfcriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_odfs`
--

INSERT INTO `proportion_hh_odfs` (`id`, `Woreda_id`, `hh_latrine`, `hh_hwfacilities`, `hh_members`, `childfaeces`, `odfcriteria`) VALUES
(2, 1, '89.2', '20.7', '87.2', '78.5', '17.8'),
(3, 3, '89.7', '14.9', '87.8', '80.8', '12.6'),
(4, 5, '92.1', '17.5', '91.6', '82.4', '16.2'),
(5, 4, '75.3', '9.2', '74.8', '70.2', '8.1');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_pdws`
--

CREATE TABLE `proportion_hh_pdws` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `pay_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_sws`
--

CREATE TABLE `proportion_hh_sws` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `Exposure_dw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exposure_hw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exposure_bath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exposure_wc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exposure_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_sws`
--

INSERT INTO `proportion_hh_sws` (`id`, `Woreda_id`, `Kebele_id`, `Exposure_dw`, `Exposure_hw`, `Exposure_bath`, `Exposure_wc`, `Exposure_sw`) VALUES
(2, 6, 58, '0', '0', '28.6', '28.6', '28.6'),
(3, 6, 59, '0', '0', '66.2', '66.2', '69.2'),
(4, 6, 60, '24.1', '40.6', '49.7', '55.1', '63.6'),
(5, 6, 61, '0', '15.2', '48', '51.2', '56'),
(6, 6, 62, '1.1', '1.1', '30.8', '34.1', '36.3'),
(7, 6, 63, '0', '3.7', '27.8', '28.7', '32.4'),
(8, 6, 64, '0', '1.2', '68.3', '68.3', '75'),
(9, 6, 65, '0', '1.2', '27.2', '27.2', '32.1'),
(10, 7, 66, '3.2', '13.8', '49.2', '60.8', '66.1'),
(11, 7, 67, '1.2', '11.2', '95.9', '95.3', '98.8'),
(12, 7, 68, '6.5', '28.4', '89.3', '90.5', '95.3'),
(13, 7, 69, '0', '38.9', '70.5', '72', '78.2'),
(14, 7, 70, '0.9', '47', '92.2', '89.6', '98.3'),
(15, 7, 71, '2.6', '36', '78.9', '77.2', '81.6'),
(16, 7, 72, '0', '4.8', '90.3', '94.4', '96.8');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_swshes`
--

CREATE TABLE `proportion_hh_swshes` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `hh_storingwater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ws_covered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_collectedsafely` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ws_cleaned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `container_cleaned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hh_with_access_to_basic_water` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_swshes`
--

INSERT INTO `proportion_hh_swshes` (`id`, `Woreda_id`, `hh_storingwater`, `ws_covered`, `w_collectedsafely`, `ws_cleaned`, `container_cleaned`, `hh_with_access_to_basic_water`) VALUES
(2, 1, '100', '73.9', '94.4', '82.1', '99', '58'),
(3, 3, '100', '65.5', '95', '64.3', '97.4', '41.5'),
(4, 5, '100', '66.7', '93.8', '76.2', '97.5', '49.7'),
(5, 4, '100', '67.9', '96', '70', '98.6', '48.6');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_tdws`
--

CREATE TABLE `proportion_hh_tdws` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `treat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_tks`
--

CREATE TABLE `proportion_hh_tks` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `feaces_observed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_tks`
--

INSERT INTO `proportion_hh_tks` (`id`, `Woreda_id`, `Kebele_id`, `feaces_observed`, `value`) VALUES
(33, 6, 58, 'observed', '43.1'),
(34, 6, 59, 'observed', '88.7'),
(35, 6, 60, 'observed', '51.1'),
(36, 6, 61, 'observed', '52.6'),
(37, 6, 62, 'observed', '41.9'),
(38, 6, 63, 'observed', '36.4'),
(39, 6, 64, 'observed', '92.5'),
(40, 6, 65, 'observed', '58.1'),
(41, 6, 58, 'Not observed', '56.9'),
(42, 6, 59, 'Not observed', '11.3'),
(43, 6, 60, 'Not observed', '48.9'),
(44, 6, 61, 'Not observed', '47.4'),
(45, 6, 62, 'Not observed', '58.1'),
(46, 6, 63, 'Not observed', '63.6'),
(47, 6, 64, 'Not observed', '7.5'),
(48, 6, 65, 'Not observed', '41.9'),
(49, 7, 66, 'observed', '39.3'),
(50, 7, 67, 'observed', '95.1'),
(51, 7, 68, 'observed', '49.7'),
(52, 7, 69, 'observed', '41.8'),
(53, 7, 70, 'observed', '34.2'),
(54, 7, 71, 'observed', '42.1'),
(55, 7, 72, 'observed', '47.4'),
(56, 7, 66, 'Not observed', '60.8'),
(57, 7, 67, 'Not observed', '4.9'),
(58, 7, 68, 'Not observed', '50.3'),
(59, 7, 69, 'Not observed', '58.2'),
(60, 7, 70, 'Not observed', '65.8'),
(61, 7, 71, 'Not observed', '57.9'),
(62, 7, 72, 'Not observed', '52.6');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_wcs`
--

CREATE TABLE `proportion_hh_wcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `water_clean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clean_sw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clean_gravel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_clean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_wcs`
--

INSERT INTO `proportion_hh_wcs` (`id`, `Woreda_id`, `Kebele_id`, `water_clean`, `clean_sw`, `clean_gravel`, `not_clean`) VALUES
(2, 6, 58, '45.71', '29.29', '20', '5'),
(3, 6, 59, '32.31', '24.62', '43.08', '0'),
(4, 6, 60, '75.94', '6.42', '17.65', '0'),
(5, 6, 61, '56.8', '23.2', '19.2', '0.8'),
(6, 6, 62, '61.54', '5.5', '32.96', '0'),
(7, 6, 63, '58.34', '22.22', '19.44', '0'),
(8, 6, 64, '29.27', '30.49', '40.24', '0'),
(9, 6, 65, '68.62', '2.47', '29.01', '0'),
(10, 7, 66, '62.43', '6.88', '30.69', '0'),
(11, 7, 67, '8.88', '15.98', '75.14', '0'),
(12, 7, 68, '30.77', '34.32', '34.91', '0'),
(13, 7, 69, '62.69', '5.7', '31.09', '0.52'),
(14, 7, 70, '24.35', '33.04', '42.61', '0'),
(15, 7, 71, '23.68', '36.84', '39.48', '0'),
(16, 7, 72, '61.29', '8.87', '29.84', '0');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_hh_wdwks`
--

CREATE TABLE `proportion_hh_wdwks` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `tilt_pour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `using_bottle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `using_tap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_scooper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scooper_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drinking_container` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_hh_wdwks`
--

INSERT INTO `proportion_hh_wdwks` (`id`, `Woreda_id`, `Kebele_id`, `tilt_pour`, `using_bottle`, `using_tap`, `water_scooper`, `scooper_available`, `drinking_container`) VALUES
(2, 6, 58, '37.9', '0', '0.7', '32.9', '28.6', '0'),
(3, 6, 59, '61.5', '24.6', '0', '13.8', '0', '0'),
(4, 6, 60, '76.5', '0', '0', '23.5', '0', '0'),
(5, 6, 61, '34.4', '0', '0', '19.2', '46.4', '0'),
(6, 6, 62, '72.5', '0', '0', '27.5', '0', '0'),
(7, 6, 63, '37', '0.9', '0', '14.8', '46.3', '0.9'),
(8, 6, 64, '56.7', '26.8', '0', '15.2', '1.2', '0'),
(9, 6, 65, '75.3', '0', '0', '24.7', '0', '0'),
(10, 7, 66, '44.4', '0', '0', '32.8', '22.8', '0'),
(11, 7, 67, '52.1', '37.3', '0.6', '10.1', '0', '0'),
(12, 7, 68, '78.1', '0', '0', '7.1', '14.8', '0'),
(13, 7, 69, '54.4', '0', '0', '31.1', '14.5', '0'),
(14, 7, 70, '77.4', '0', '0', '5.2', '16.5', '0.9'),
(15, 7, 71, '72.8', '0', '0', '17.5', '9.6', '0'),
(16, 7, 72, '60.5', '0', '0', '29', '10.5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_sbsanitations`
--

CREATE TABLE `proportion_sbsanitations` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `nschools` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Improved_latrine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separate_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_meetingtarget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menstrual_hygiene` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hw_soapwater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latrine_cleans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basicsanitation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_sbsanitations`
--

INSERT INTO `proportion_sbsanitations` (`id`, `Woreda_id`, `nschools`, `Improved_latrine`, `separate_gender`, `no_meetingtarget`, `menstrual_hygiene`, `hw_soapwater`, `latrine_cleans`, `basicsanitation`) VALUES
(2, 6, '9', '55.6', '88.9', '75', '33.3', '11.1', '77.8', '0'),
(3, 7, '8', '50', '100', '75', '12.5', '12.5', '50', '0'),
(5, 1, '0', '19.4', '87.1', '9.7', '43.3', '6.5', '32.3', '3.2'),
(6, 3, '0', '50', '76.5', '26.5', '35.3', '2.9', '23.5', '0'),
(7, 5, '0', '45.8', '95.8', '41.7', '37.5', '0', '41.7', '0'),
(8, 4, '0', '28.6', '78.6', '14.3', '50', '0', '21.4', '0');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_schistosoma_hs`
--

CREATE TABLE `proportion_schistosoma_hs` (
  `id` int(10) UNSIGNED NOT NULL,
  `s_haemotobium_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `five` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_schistosoma_hs`
--

INSERT INTO `proportion_schistosoma_hs` (`id`, `s_haemotobium_count`, `zero`, `five`) VALUES
(1, 'Number of urine samples', '8.7', '1.3');

-- --------------------------------------------------------

--
-- Table structure for table `proportion_schoolbdws`
--

CREATE TABLE `proportion_schoolbdws` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `nschools` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `improved_watersource` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_timesurvey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basicwateraccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proportion_schoolbdws`
--

INSERT INTO `proportion_schoolbdws` (`id`, `Woreda_id`, `nschools`, `improved_watersource`, `water_timesurvey`, `basicwateraccess`) VALUES
(3, 6, '9', '33.3', '33.3', '22.22'),
(4, 7, '8', '50', '12.5', '12.5'),
(6, 1, '31', '9.7', '38.7', '6.5'),
(7, 3, '34', '11.8', '17.6', '5.9'),
(8, 5, '24', '16.7', '20.8', '8.3'),
(9, 4, '14', '50', '42.9', '35.7');

-- --------------------------------------------------------

--
-- Table structure for table `proprotion_poc_ccas`
--

CREATE TABLE `proprotion_poc_ccas` (
  `id` int(10) UNSIGNED NOT NULL,
  `negative` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `positive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_positive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `three_positive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proprotion_poc_ccas`
--

INSERT INTO `proprotion_poc_ccas` (`id`, `negative`, `trace`, `positive`, `two_positive`, `three_positive`) VALUES
(1, '78.1', '7.6', '6.2', '4.9', '3.2');

-- --------------------------------------------------------

--
-- Table structure for table `pzq_coverage_kebeles`
--

CREATE TABLE `pzq_coverage_kebeles` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `treatment_eligible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_eligible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_acceptance_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pzq_coverage_kebeles`
--

INSERT INTO `pzq_coverage_kebeles` (`id`, `Kebele_id`, `treatment_eligible`, `no_eligible`, `coverage`, `drug_acceptance_rate`) VALUES
(2, 1, '7031', '3445', '49', '96.8'),
(3, 2, '4028', '3267', '81.1', '95'),
(4, 3, '6122', '3826', '62.5', '98.7'),
(5, 4, '4925', '2783', '56.5', '95.8'),
(6, 5, '4534', '3356', '74', '97.7'),
(7, 6, '3675', '3239', '88.1', '95.2'),
(8, 7, '2491', '1662', '66.7', '87.8'),
(9, 8, '6351', '3577', '56.3', '98.9'),
(10, 9, '6931', '4727', '68.2', '93.5'),
(11, 10, '4671', '3799', '81.3', '87.5'),
(12, 11, '4685', '3663', '78.2', '98.5'),
(13, 12, '6944', '4054', '58.4', '99.2'),
(14, 13, '6318', '3360', '53.2', '96.1'),
(15, 14, '4708', '3090', '65.6', '99.5'),
(16, 15, '3505', '2082', '59.4', '95.4'),
(17, 16, '4821', '2756', '57.2', '96.3'),
(18, 17, '4466', '2606', '58.4', '99'),
(19, 18, '5083', '3149', '62', '96'),
(20, 19, '5023', '3181', '63.3', '98.1'),
(21, 20, '3325', '2431', '73.1', '93.6'),
(22, 21, '5100', '3150', '61.8', '96.9'),
(23, 22, '5060', '2265', '44.8', '93.1'),
(24, 23, '7491', '3351', '44.7', '95.9'),
(25, 24, '6053', '3710', '61.3', '95.8'),
(26, 25, '3854', '2616', '67.9', '93.4'),
(27, 26, '5874', '4218', '71.8', '99.4'),
(28, 27, '4739', '2802', '59.1', '97.9'),
(29, 28, '2422', '1841', '76', '95.3'),
(30, 29, '5529', '3804', '68.8', '95.6'),
(31, 30, '3681', '2553', '69.4', '91.6'),
(32, 31, '4009', '2225', '55.5', '97.1');

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id` int(10) UNSIGNED NOT NULL,
  `scaffoldinterface_id` int(10) UNSIGNED NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `having` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scaffoldinterfaces`
--

CREATE TABLE `scaffoldinterfaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tablename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scaffoldinterfaces`
--

INSERT INTO `scaffoldinterfaces` (`id`, `package`, `migration`, `model`, `controller`, `views`, `tablename`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_020045_drugs.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Drug.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/DrugController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/drug', 'drugs', '2020-08-06 11:00:45', '2020-08-06 11:00:45'),
(2, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_020252_intervals.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Interval.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/IntervalController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/interval', 'intervals', '2020-08-06 11:02:52', '2020-08-06 11:02:52'),
(3, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_020501_age_interval_treatments.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Age_interval_treatment.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Age_interval_treatmentController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/age_interval_treatment', 'age_interval_treatments', '2020-08-06 11:05:02', '2020-08-06 11:05:02'),
(4, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_020549_methods.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Method.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/MethodController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/method', 'methods', '2020-08-06 11:05:50', '2020-08-06 11:05:50'),
(5, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_020918_treatment_cumulatives.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Treatment_cumulative.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Treatment_cumulativeController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/treatment_cumulative', 'treatment_cumulatives', '2020-08-06 11:09:18', '2020-08-06 11:09:18'),
(6, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_021217_method_data_captures.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Method_data_capture.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Method_data_captureController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/method_data_capture', 'method_data_captures', '2020-08-06 11:12:18', '2020-08-06 11:12:18'),
(7, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_021526_treatment_coverages.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Treatment_coverage.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Treatment_coverageController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/treatment_coverage', 'treatment_coverages', '2020-08-06 11:15:27', '2020-08-06 11:15:27'),
(8, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_021701_kebeles.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Kebele.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/KebeleController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/kebele', 'kebeles', '2020-08-06 11:17:01', '2020-08-06 11:17:01'),
(9, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_021938_treatment_coverage_kebeles.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Treatment_coverage_kebele.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Treatment_coverage_kebeleController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/treatment_coverage_kebele', 'treatment_coverage_kebeles', '2020-08-06 11:19:39', '2020-08-06 11:19:39'),
(10, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_022113_pzq_coverage_kebeles.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Pzq_coverage_kebele.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Pzq_coverage_kebeleController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/pzq_coverage_kebele', 'pzq_coverage_kebeles', '2020-08-06 11:21:13', '2020-08-06 11:21:13'),
(11, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_023520_sexes.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Sex.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/SexController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/sex', 'sexes', '2020-08-06 11:35:21', '2020-08-06 11:35:21'),
(12, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_024125_age_sses.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Age_ss.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Age_ssController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/age_ss', 'age_sses', '2020-08-06 11:41:26', '2020-08-06 11:41:26'),
(13, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_024214_intensities.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Intensity.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/IntensityController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/intensity', 'intensities', '2020-08-06 11:42:15', '2020-08-06 11:42:15'),
(14, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_024421_prevalence_infections.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_infection.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_infectionController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_infection', 'prevalence_infections', '2020-08-06 11:44:21', '2020-08-06 11:44:21'),
(15, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_024631_prevalence_intestinal_parasites.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_intestinal_parasite.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_intestinal_parasiteController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_intestinal_parasite', 'prevalence_intestinal_parasites', '2020-08-06 11:46:31', '2020-08-06 11:46:31'),
(16, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_024957_proportion_n_poc_ccas.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_n_poc_cca.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_n_poc_ccaController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_n_poc_cca', 'proportion_n_poc_ccas', '2020-08-06 11:49:58', '2020-08-06 11:49:58'),
(17, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_025208_distribution_ss_years.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Distribution_ss_year.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Distribution_ss_yearController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/distribution_ss_year', 'distribution_ss_years', '2020-08-06 11:52:08', '2020-08-06 11:52:08'),
(18, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_025350_distribution_ss_demographics.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Distribution_ss_demographic.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Distribution_ss_demographicController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/distribution_ss_demographic', 'distribution_ss_demographics', '2020-08-06 11:53:50', '2020-08-06 11:53:50'),
(19, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_025602_prevalence_sma_and_sths.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_sma_and_sth.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_sma_and_sthController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_sma_and_sth', 'prevalence_sma_and_sths', '2020-08-06 11:56:03', '2020-08-06 11:56:03'),
(20, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_025939_prevalence_schistosomiases.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_schistosomiasi.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_schistosomiasiController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_schistosomiasi', 'prevalence_schistosomiases', '2020-08-06 11:59:39', '2020-08-06 11:59:39'),
(21, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_030152_prevalence_sth_infections.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_sth_infection.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_sth_infectionController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_sth_infection', 'prevalence_sth_infections', '2020-08-06 12:01:53', '2020-08-06 12:01:53'),
(22, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_030254_woredas.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Woreda.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/WoredaController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/woreda', 'woredas', '2020-08-06 12:02:54', '2020-08-06 12:02:54'),
(23, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_030531_prevalence_intensities.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_intensity.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_intensityController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_intensity', 'prevalence_intensities', '2020-08-06 12:05:32', '2020-08-06 12:05:32'),
(24, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_030814_treatment_infections.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Treatment_infection.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Treatment_infectionController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/treatment_infection', 'treatment_infections', '2020-08-06 12:08:14', '2020-08-06 12:08:14'),
(25, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_030955_prevalence_intensity_intestinal_parasite_kebeles.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_intensity_intestinal_parasite_kebele.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_intensity_intestinal_parasite_kebeleController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_intensity_intestinal_parasite_kebele', 'prevalence_intensity_intestinal_parasite_kebeles', '2020-08-06 12:09:56', '2020-08-06 12:09:56'),
(26, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_031204_infection_category_age_sexes.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Infection_category_age_sex.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Infection_category_age_sexController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/infection_category_age_sex', 'infection_category_age_sexes', '2020-08-06 12:12:04', '2020-08-06 12:12:04'),
(27, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_06_031340_mean_no_eggs_sth_and_mansoni_woredas.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Mean_no_eggs_sth_and_mansoni_woreda.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Mean_no_eggs_sth_and_mansoni_woredaController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/mean_no_eggs_sth_and_mansoni_woreda', 'mean_no_eggs_sth_and_mansoni_woredas', '2020-08-06 12:13:41', '2020-08-06 12:13:41'),
(28, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_07_033205_prevalence_intensity_ips.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_intensity_ip.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_intensity_ipController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_intensity_ip', 'prevalence_intensity_ips', '2020-08-07 00:32:05', '2020-08-07 00:32:05'),
(29, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_07_034229_community_level_hhs.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Community_level_hh.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Community_level_hhController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/community_level_hh', 'community_level_hhs', '2020-08-07 00:42:29', '2020-08-07 00:42:29'),
(30, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_07_034556_proportion_hh_basicdws.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_basicdw.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_basicdwController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_basicdw', 'proportion_hh_basicdws', '2020-08-07 00:45:57', '2020-08-07 00:45:57'),
(31, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_07_034911_proportion_hh_basicswshes.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_basicswsh.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_basicswshController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_basicswsh', 'proportion_hh_basicswshes', '2020-08-07 00:49:11', '2020-08-07 00:49:11'),
(32, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_07_035144_proportion_hh_basicsanitations.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_basicsanitation.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_basicsanitationController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_basicsanitation', 'proportion_hh_basicsanitations', '2020-08-07 00:51:44', '2020-08-07 00:51:44'),
(33, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_07_035723_proportion_hh_basichwfacilities.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_basichwfacility.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_basichwfacilityController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_basichwfacility', 'proportion_hh_basichwfacilities', '2020-08-07 00:57:23', '2020-08-07 00:57:23'),
(34, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_07_035944_proportion_hh_defections.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_defection.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_defectionController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_defection', 'proportion_hh_defections', '2020-08-07 00:59:45', '2020-08-07 00:59:45'),
(35, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_07_061006_treatment_coverage_biometrics.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Treatment_coverage_biometric.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Treatment_coverage_biometricController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/treatment_coverage_biometric', 'treatment_coverage_biometrics', '2020-08-07 03:10:06', '2020-08-07 03:10:06'),
(36, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_07_073322_distribution_ss_sexandages.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Distribution_ss_sexandage.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Distribution_ss_sexandageController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/distribution_ss_sexandage', 'distribution_ss_sexandages', '2020-08-07 04:33:23', '2020-08-07 04:33:23'),
(37, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_08_081551_proprotion_poc_ccas.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proprotion_poc_cca.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proprotion_poc_ccaController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proprotion_poc_cca', 'proprotion_poc_ccas', '2020-08-08 05:15:52', '2020-08-08 05:15:52'),
(38, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_08_081713_proportion_haemastixes.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_haemastix.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_haemastixController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_haemastix', 'proportion_haemastixes', '2020-08-08 05:17:13', '2020-08-08 05:17:13'),
(39, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_08_081808_proportion_schistosoma_hs.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_schistosoma_h.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_schistosoma_hController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_schistosoma_h', 'proportion_schistosoma_hs', '2020-08-08 05:18:08', '2020-08-08 05:18:08'),
(40, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_08_082721_distribution_sexandagecols.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Distribution_sexandagecol.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Distribution_sexandagecolController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/distribution_sexandagecol', 'distribution_sexandagecols', '2020-08-08 05:27:21', '2020-08-08 05:27:21'),
(41, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_08_085506_prevalence_inf_schists.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_inf_schist.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_inf_schistController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_inf_schist', 'prevalence_inf_schists', '2020-08-08 05:55:07', '2020-08-08 05:55:07'),
(42, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_08_095512_mean_sthand_sm_woredas.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Mean_sthand_sm_woreda.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Mean_sthand_sm_woredaController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/mean_sthand_sm_woreda', 'mean_sthand_sm_woredas', '2020-08-08 06:55:13', '2020-08-08 06:55:13'),
(43, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_08_101629_prevalence_sthandsm_woredas.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Prevalence_sthandsm_woreda.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Prevalence_sthandsm_woredaController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/prevalence_sthandsm_woreda', 'prevalence_sthandsm_woredas', '2020-08-08 07:16:30', '2020-08-08 07:16:30'),
(44, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_08_060607_proportion_hh_sws.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_sw.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_swController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_sw', 'proportion_hh_sws', '2020-08-08 15:06:08', '2020-08-08 15:06:08'),
(45, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_010607_proportion_schoolbdws.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_schoolbdw.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_schoolbdwController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_schoolbdw', 'proportion_schoolbdws', '2020-08-09 10:06:08', '2020-08-09 10:06:08'),
(46, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_011017_proportion_sbsanitations.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_sbsanitation.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_sbsanitationController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_sbsanitation', 'proportion_sbsanitations', '2020-08-09 10:10:17', '2020-08-09 10:10:17'),
(47, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_011208_proportion_hc_bdws.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hc_bdw.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hc_bdwController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hc_bdw', 'proportion_hc_bdws', '2020-08-09 10:12:09', '2020-08-09 10:12:09'),
(48, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_011444_proportion_hc_bsanitations.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hc_bsanitation.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hc_bsanitationController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hc_bsanitation', 'proportion_hc_bsanitations', '2020-08-09 10:14:45', '2020-08-09 10:14:45'),
(49, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_011755_hh_hygieneknowledges.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Hh_hygieneknowledge.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Hh_hygieneknowledgeController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/hh_hygieneknowledge', 'hh_hygieneknowledges', '2020-08-09 10:17:56', '2020-08-09 10:17:56'),
(50, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_012009_diarrhoeas.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Diarrhoea.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/DiarrhoeaController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/diarrhoea', 'diarrhoeas', '2020-08-09 10:20:10', '2020-08-09 10:20:10'),
(51, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_012159_proportion_hh_bdws.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_bdw.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_bdwController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_bdw', 'proportion_hh_bdws', '2020-08-09 10:22:00', '2020-08-09 10:22:00'),
(52, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_020804_proportion_hh_swshes.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_swsh.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_swshController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_swsh', 'proportion_hh_swshes', '2020-08-09 11:08:04', '2020-08-09 11:08:04'),
(53, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_021026_proportion_hh_bsanitations.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_bsanitation.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_bsanitationController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_bsanitation', 'proportion_hh_bsanitations', '2020-08-09 11:10:26', '2020-08-09 11:10:26'),
(54, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_021329_proportion_hh_odfs.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_odf.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_odfController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_odf', 'proportion_hh_odfs', '2020-08-09 11:13:30', '2020-08-09 11:13:30'),
(55, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_021519_proportion_hh_notsws.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_notsw.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_notswController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_notsw', 'proportion_hh_notsws', '2020-08-09 11:15:19', '2020-08-09 11:15:19'),
(56, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_021642_indicators.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Indicator.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/IndicatorController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/indicator', 'indicators', '2020-08-09 11:16:42', '2020-08-09 11:16:42'),
(57, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_021903_wash_indicators.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Wash_indicator.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Wash_indicatorController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/wash_indicator', 'wash_indicators', '2020-08-09 11:19:04', '2020-08-09 11:19:04'),
(58, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_021958_pay_drinkingwaters.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Pay_drinkingwater.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Pay_drinkingwaterController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/pay_drinkingwater', 'pay_drinkingwaters', '2020-08-09 11:19:58', '2020-08-09 11:19:58'),
(59, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_022040_treat_drinkingwaters.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Treat_drinkingwater.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Treat_drinkingwaterController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/treat_drinkingwater', 'treat_drinkingwaters', '2020-08-09 11:20:41', '2020-08-09 11:20:41'),
(60, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_022158_hh_sampleds.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Hh_sampled.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Hh_sampledController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/hh_sampled', 'hh_sampleds', '2020-08-09 11:21:58', '2020-08-09 11:21:58'),
(61, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_022324_proportion_hh_dwsks.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_dwsk.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_dwskController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_dwsk', 'proportion_hh_dwsks', '2020-08-09 11:23:25', '2020-08-09 11:23:25'),
(62, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_022445_proportion_hh_pdws.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_pdw.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_pdwController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_pdw', 'proportion_hh_pdws', '2020-08-09 11:24:45', '2020-08-09 11:24:45'),
(63, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_022631_proportion_hh_tdws.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_tdw.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_tdwController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_tdw', 'proportion_hh_tdws', '2020-08-09 11:26:31', '2020-08-09 11:26:31'),
(64, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_022831_proportion_hh_bhwfs.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_bhwf.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_bhwfController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_bhwf', 'proportion_hh_bhwfs', '2020-08-09 11:28:32', '2020-08-09 11:28:32'),
(65, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_024009_proportion_hh_tks.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_tk.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_tkController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_tk', 'proportion_hh_tks', '2020-08-09 11:40:09', '2020-08-09 11:40:09'),
(66, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_024257_proportion_hh_feaces.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_feace.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_feaceController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_feace', 'proportion_hh_feaces', '2020-08-09 11:42:58', '2020-08-09 11:42:58'),
(67, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_024520_distribution_hh_mtks.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Distribution_hh_mtk.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Distribution_hh_mtkController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/distribution_hh_mtk', 'distribution_hh_mtks', '2020-08-09 11:45:21', '2020-08-09 11:45:21'),
(68, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_024713_proportion_hh_wdwks.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_wdwk.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_wdwkController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_wdwk', 'proportion_hh_wdwks', '2020-08-09 11:47:14', '2020-08-09 11:47:14'),
(69, 'Laravel', 'C:\\xampp\\htdocs\\geshiaro\\database/migrations/2020_08_09_024957_proportion_hh_wcs.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Proportion_hh_wc.php', 'C:\\xampp\\htdocs\\geshiaro\\app/Http/Controllers/Proportion_hh_wcController.php', 'C:\\xampp\\htdocs\\geshiaro\\resources/views/proportion_hh_wc', 'proportion_hh_wcs', '2020-08-09 11:49:58', '2020-08-09 11:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `sexes`
--

CREATE TABLE `sexes` (
  `id` int(10) UNSIGNED NOT NULL,
  `S_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sexes`
--

INSERT INTO `sexes` (`id`, `S_id`, `value`) VALUES
(1, 1, 'male'),
(2, 2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `ss_woreda_preval1`
--

CREATE TABLE `ss_woreda_preval1` (
  `id` int(20) NOT NULL,
  `Woreda_id` int(20) NOT NULL,
  `no_kebele` int(20) NOT NULL,
  `Any_sth` int(20) NOT NULL,
  `Hookworm` int(20) NOT NULL,
  `Ascaris` int(20) NOT NULL,
  `Trichuris` int(20) NOT NULL,
  `haematuria` int(20) NOT NULL,
  `poc` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ss_woreda_preval1`
--

INSERT INTO `ss_woreda_preval1` (`id`, `Woreda_id`, `no_kebele`, `Any_sth`, `Hookworm`, `Ascaris`, `Trichuris`, `haematuria`, `poc`) VALUES
(2, 2, 14, 17, 9, 10, 2, 1, 42),
(3, 11, 3, 13, 6, 9, 6, 1, 10),
(4, 15, 1, 7, 3, 4, 0, 1, 46),
(5, 13, 4, 11, 8, 7, 7, 9, 26),
(6, 1, 5, 15, 3, 12, 2, 1, 30),
(7, 3, 10, 29, 15, 21, 0, 1, 27),
(8, 6, 8, 14, 2, 11, 1, 5, 14),
(9, 7, 3, 52, 24, 33, 9, 0, 3),
(10, 5, 10, 14, 9, 11, 1, 0, 21),
(11, 8, 16, 4, 3, 2, 0, 3, 7),
(12, 9, 21, 5, 3, 3, 0, 3, 19),
(13, 10, 8, 14, 8, 5, 2, 1, 26),
(14, 16, 4, 9, 8, 1, 0, 3, 32),
(15, 12, 3, 3, 1, 3, 1, 14, 23),
(16, 11, 18, 5, 2, 3, 0, 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_coverages`
--

CREATE TABLE `treatment_coverages` (
  `id` int(10) UNSIGNED NOT NULL,
  `Method_id` int(11) NOT NULL,
  `N_GUID_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `No_of_ALB_treat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Per_ALB_eligible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Per_PZQ_eligible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `treatment_coverage_biometrics`
--

CREATE TABLE `treatment_coverage_biometrics` (
  `id` int(10) UNSIGNED NOT NULL,
  `Method_id` int(11) NOT NULL,
  `nforms_recieved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NGUID_registered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_ALB_treatment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_ALB_eligible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pzq_treatments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_pzq_eligible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_coverage_biometrics`
--

INSERT INTO `treatment_coverage_biometrics` (`id`, `Method_id`, `nforms_recieved`, `NGUID_registered`, `per_ALB_treatment`, `per_ALB_eligible`, `no_pzq_treatments`, `per_pzq_eligible`) VALUES
(2, 1, '18,173', 'NA', '17,946', '10.9', '17,116', '11.2'),
(3, 2, '65,429', '7,903', '7,809', '4.7', '7,312', '4.8'),
(4, 3, '10,037', '1,820', '1,807', '1.1', '1,720', '1.1'),
(5, 4, '13,096', '5,930', '5,883', '3.6', '5,487', '3.6'),
(6, 5, '2,917', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_coverage_kebeles`
--

CREATE TABLE `treatment_coverage_kebeles` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kebele_id` int(11) NOT NULL,
  `Treatment_eligible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_eligible_individ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_acceptance_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_coverage_kebeles`
--

INSERT INTO `treatment_coverage_kebeles` (`id`, `Kebele_id`, `Treatment_eligible`, `no_of_eligible_individ`, `coverage`, `drug_acceptance_rate`) VALUES
(2, 1, '7545', '3712', '49.2', '98.6'),
(3, 2, '4324', '3534', '81.7', '95.9'),
(4, 3, '6636', '4134', '62.3', '99.8'),
(5, 4, '5311', '2992', '56.3', '97.3'),
(6, 5, '4868', '3616', '74.3', '98.9'),
(7, 6, '3932', '3544', '90.1', '98'),
(8, 7, '2650', '1901', '71.7', '94.2'),
(9, 8, '6767', '3732', '55.1', '98'),
(10, 9, '7407', '5108', '69', '94.6'),
(11, 10, '4989', '4000', '80.2', '88.2'),
(12, 11, '5028', '3867', '76.9', '99.3'),
(13, 12, '7407', '4284', '57.8', '99.4'),
(14, 13, '6738', '3530', '52.4', '95.7'),
(15, 14, '5021', '3250', '64.7', '99.3'),
(16, 15, '3783', '2325', '61.5', '98.8'),
(17, 16, '5179', '3003', '58', '99.2'),
(18, 17, '4793', '2718', '56.7', '99.1'),
(19, 18, '5443', '3395', '62.4', '97.4'),
(20, 19, '5396', '3387', '62.8', '98.5'),
(21, 20, '3555', '2592', '72.9', '94.4'),
(22, 21, '5559', '3474', '62.5', '98.1'),
(23, 22, '5474', '2566', '46.9', '97.3'),
(24, 23, '8129', '3601', '44.3', '97'),
(25, 24, '6459', '4066', '63', '98.1'),
(26, 25, '4148', '2901', '69.9', '97.1'),
(27, 26, '6271', '4432', '70.7', '98.7'),
(28, 27, '5047', '2907', '57.6', '98.1'),
(29, 28, '2606', '1986', '76.2', '95.3'),
(30, 29, '5889', '4185', '71.1', '99.3'),
(31, 30, '3919', '2672', '68.2', '92'),
(32, 31, '4267', '2369', '55.5', '98.7');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_cov_year`
--

CREATE TABLE `treatment_cov_year` (
  `id` int(20) NOT NULL,
  `Kebele_id` varchar(20) NOT NULL,
  `ALB_coverage` varchar(20) NOT NULL,
  `ALB_acceptance` varchar(20) NOT NULL,
  `PZQ_coverage` varchar(20) NOT NULL,
  `PZQ_acceptance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_cov_year`
--

INSERT INTO `treatment_cov_year` (`id`, `Kebele_id`, `ALB_coverage`, `ALB_acceptance`, `PZQ_coverage`, `PZQ_acceptance`) VALUES
(2, '17', '67', '99.7', '71', '99.5'),
(3, '9', '75', '90.3', '75', '90'),
(4, '13', '100', '95.5', '105', '97.6'),
(5, '25', '79', '89.2', '83', '92.5'),
(6, '24', '75', '88.7', '77', '91.8'),
(7, '26', '86', '91', '88', '92.2'),
(8, '10', '83', '99.1', '87', '98.9'),
(9, '1', '99', '97.3', '97', '95.7'),
(10, '11', '87', '98.9', '91', '99.3'),
(11, '19', '58', '98.7', '58', '97.7'),
(12, '18', '58', '92.2', '60', '91.1'),
(13, '7', '74', '93.1', '72', '90.2'),
(14, '21', '101', '97.8', '104', '98.2'),
(15, '28', '63', '87.3', '65', '89.3'),
(16, '12', '68', '99.2', '71', '99.2'),
(17, '15', '81', '96.8', '84', '97.7'),
(18, '4', '59', '94.4', '62', '96.2'),
(19, '23', '101', '96.3', '107', '96.9'),
(20, '20', '59', '70.3', '61', '71.2'),
(21, '5', '74', '99.6', '75', '98.5'),
(22, '8', '61', '89.1', '64', '91.9'),
(23, '29', '66', '97.9', '68', '97.5'),
(24, '2', '66', '99.5', '69', '99.4'),
(25, '3', '58', '99.1', '59', '97.2'),
(26, '27', '73', '95.5', '76', '96.4'),
(27, '30', '73', '96.6', '76', '97.8'),
(28, '31', '91', '81.6', '95', '83.6'),
(29, '14', '77', '95.9', '80', '97.2'),
(30, '16', '73', '97.5', '76', '97'),
(31, '6', '62', '97.7', '62', '94.9'),
(32, '22', '61', '93.1', '63', '93.7');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_cumulatives`
--

CREATE TABLE `treatment_cumulatives` (
  `id` int(10) UNSIGNED NOT NULL,
  `Drug_id` int(11) NOT NULL,
  `Treatment_eligible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_individual_treated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_acceptance_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_cumulatives`
--

INSERT INTO `treatment_cumulatives` (`id`, `Drug_id`, `Treatment_eligible`, `num_individual_treated`, `coverage`, `drug_acceptance_rate`) VALUES
(1, 1, '164540', '103783', '63.1', '97.2'),
(2, 2, '153449', '96588', '62.9', '95.9');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_infections`
--

CREATE TABLE `treatment_infections` (
  `id` int(10) UNSIGNED NOT NULL,
  `infection_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grouping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_missing_treatment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_missing_treatment_percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_decline_ALB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_decline_ALB_Percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_accept_ALB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_accept_ALB_percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_infections`
--

INSERT INTO `treatment_infections` (`id`, `infection_type`, `grouping_name`, `n_missing_treatment`, `n_missing_treatment_percentage`, `n_decline_ALB`, `n_decline_ALB_Percentage`, `n_accept_ALB`, `n_accept_ALB_percentage`) VALUES
(2, 'Ascaris ', 'neg-neg', '44', '20.6', '23', '10.7', '147', '68.7'),
(3, 'Ascaris ', 'neg-pos', '13', '28.3', '4', '8.7', '29', '63'),
(4, 'Ascaris ', 'pos-neg', '22', '30.6', '4', '5.6', '46', '63.9'),
(5, 'Ascaris ', 'pos-pos', '16', '41', '4', '10.2', '19', '48.7'),
(6, 'Trichuris ', 'neg-neg', '81', '26.6', '27', '8.9', '197', '64.6'),
(7, 'Trichuris ', 'neg-pos', '4', '13.3', '5', '16.7', '21', '70'),
(8, 'Trichuris ', 'pos-neg', '7', '26.9', '2', '7.7', '17', '65.4'),
(9, 'Trichuris ', 'pos-pos', '3', '30', '1', '10', '6', '60'),
(10, 'Hookworm ', 'neg-neg', '75', '26.3', '27', '9.5', '183', '64.2'),
(11, 'Hookworm ', 'neg-pos', '13', '22.4', '7', '12.1', '38', '65.5'),
(12, 'Hookworm ', 'pos-neg', '6', '27.3', '1', '4.5', '15', '68.2'),
(13, 'Hookworm ', 'pos-pos', '1', '16.7', '0', '0', '5', '83.3');

-- --------------------------------------------------------

--
-- Table structure for table `treat_drinkingwaters`
--

CREATE TABLE `treat_drinkingwaters` (
  `id` int(10) UNSIGNED NOT NULL,
  `Treat_id` int(11) NOT NULL,
  `treat_drinkingwater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treat_drinkingwaters`
--

INSERT INTO `treat_drinkingwaters` (`id`, `Treat_id`, `treat_drinkingwater`) VALUES
(1, 1, 'yes'),
(2, 2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gelan', 'galeabdi12@gmail.com', NULL, '$2y$10$QO04QRt1o2T37061Su3SheYY1NY1/t5vpIQTeG1C4HdJFLvRzpETG', NULL, '2020-08-06 07:25:33', '2020-08-06 07:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `wash_indicators`
--

CREATE TABLE `wash_indicators` (
  `id` int(10) UNSIGNED NOT NULL,
  `indicator_id` int(11) NOT NULL,
  `indicator_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baseline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `woredas`
--

CREATE TABLE `woredas` (
  `id` int(10) UNSIGNED NOT NULL,
  `Woreda_id` int(11) NOT NULL,
  `Woreda_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `woredas`
--

INSERT INTO `woredas` (`id`, `Woreda_id`, `Woreda_name`, `Region_id`) VALUES
(1, 1, 'Bolosso Bombe', 11),
(2, 2, 'Bolosso Sore', 11),
(3, 3, 'Damot Gale', 11),
(4, 4, 'Abela Abaya', 11),
(5, 5, 'Damot Woyide', 11),
(6, 6, 'Damot Pulasa', 11),
(7, 7, 'Damot Sore', 11),
(8, 8, 'Duguna Fango', 11),
(9, 9, 'Humbo', 11),
(10, 10, 'Kindo Didaye', 11),
(11, 11, 'Sodo Zuria', 11),
(12, 12, 'Offa', 11),
(13, 13, 'Bodity', 11),
(14, 14, 'DigunaFango', 11),
(15, 15, 'Areka town', 11),
(16, 16, 'Kindo koysha', 11);

-- --------------------------------------------------------

--
-- Table structure for table `year1_treatment_age`
--

CREATE TABLE `year1_treatment_age` (
  `id` int(20) NOT NULL,
  `Kebele_id` varchar(20) NOT NULL,
  `i_id` varchar(20) NOT NULL,
  `value_ALB` varchar(20) NOT NULL,
  `value_PZQ` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year1_treatment_age`
--

INSERT INTO `year1_treatment_age` (`id`, `Kebele_id`, `i_id`, `value_ALB`, `value_PZQ`) VALUES
(2, '17', '1', '13', '12'),
(3, '9', '1', '52', '13'),
(4, '13', '1', '52', '48'),
(5, '25', '1', '20', '10'),
(6, '24', '1', '21', '9'),
(7, '26', '1', '65', '26'),
(8, '10', '1', '29', '28'),
(9, '1', '1', '61', '25'),
(10, '11', '1', '35', '21'),
(11, '19', '1', '53', '41'),
(12, '18', '1', '5', '1'),
(13, '7', '1', '31', '11'),
(14, '21', '1', '49', '24'),
(15, '28', '1', '17', '10'),
(16, '12', '1', '36', '36'),
(17, '15', '1', '10', '8'),
(18, '4', '1', '21', '15'),
(19, '23', '1', '15', '12'),
(20, '20', '1', '8', '1'),
(21, '5', '1', '17', '9'),
(22, '8', '1', '12', '11'),
(23, '29', '1', '32', '22'),
(24, '2', '1', '34', '29'),
(25, '3', '1', '71', '59'),
(26, '27', '1', '26', '12'),
(27, '30', '1', '29', '12'),
(28, '31', '1', '14', '9'),
(29, '14', '1', '19', '18'),
(30, '16', '1', '11', '8'),
(31, '6', '1', '5', '4'),
(32, '22', '1', '13', '2'),
(33, '17', '2', '96', '90'),
(34, '9', '2', '252', '105'),
(35, '13', '2', '176', '160'),
(36, '25', '2', '56', '39'),
(37, '24', '2', '150', '45'),
(38, '26', '2', '173', '117'),
(39, '10', '2', '172', '154'),
(40, '1', '2', '283', '140'),
(41, '11', '2', '167', '135'),
(42, '19', '2', '221', '125'),
(43, '18', '2', '88', '35'),
(44, '7', '2', '112', '31'),
(45, '21', '2', '228', '213'),
(46, '28', '2', '73', '52'),
(47, '12', '2', '205', '183'),
(48, '15', '2', '113', '86'),
(49, '4', '2', '97', '92'),
(50, '23', '2', '164', '105'),
(51, '20', '2', '78', '30'),
(52, '5', '2', '112', '55'),
(53, '8', '2', '61', '50'),
(54, '29', '2', '125', '96'),
(55, '2', '2', '85', '74'),
(56, '3', '2', '192', '148'),
(57, '27', '2', '125', '41'),
(58, '30', '2', '67', '61'),
(59, '31', '2', '63', '39'),
(60, '14', '2', '95', '74'),
(61, '16', '2', '84', '23'),
(62, '6', '2', '106', '30'),
(63, '22', '2', '130', '18'),
(64, '17', '3', '845', '844'),
(65, '9', '3', '1923', '1860'),
(66, '13', '3', '1628', '1627'),
(67, '25', '3', '1068', '1056'),
(68, '24', '3', '1889', '1841'),
(69, '26', '3', '1585', '1576'),
(70, '10', '3', '1537', '1528'),
(71, '1', '3', '1448', '1419'),
(72, '11', '3', '1537', '1537'),
(73, '19', '3', '965', '965'),
(74, '18', '3', '1185', '1132'),
(75, '7', '3', '752', '713'),
(76, '21', '3', '1149', '1147'),
(77, '28', '3', '511', '505'),
(78, '12', '3', '1490', '1492'),
(79, '15', '3', '790', '783'),
(80, '4', '3', '897', '893'),
(81, '23', '3', '1547', '1528'),
(82, '20', '3', '800', '781'),
(83, '5', '3', '1248', '1239'),
(84, '8', '3', '1482', '1470'),
(85, '29', '3', '1033', '1011'),
(86, '2', '3', '1243', '1240'),
(87, '3', '3', '1254', '1215'),
(88, '27', '3', '1367', '1366'),
(89, '30', '3', '870', '869'),
(90, '31', '3', '1344', '1336'),
(91, '14', '3', '1205', '1201'),
(92, '16', '3', '1272', '1258'),
(93, '6', '3', '804', '782'),
(94, '22', '3', '1294', '1252'),
(95, '17', '4', '476', '476'),
(96, '9', '4', '630', '627'),
(97, '13', '4', '1124', '1124'),
(98, '25', '4', '488', '487'),
(99, '24', '4', '861', '860'),
(100, '26', '4', '595', '593'),
(101, '10', '4', '1047', '1046'),
(102, '1', '4', '631', '630'),
(103, '11', '4', '743', '741'),
(104, '19', '4', '410', '409'),
(105, '18', '4', '327', '326'),
(106, '7', '4', '302', '298'),
(107, '21', '4', '550', '549'),
(108, '28', '4', '254', '249'),
(109, '12', '4', '881', '881'),
(110, '15', '4', '393', '393'),
(111, '4', '4', '419', '419'),
(112, '23', '4', '728', '729'),
(113, '20', '4', '259', '259'),
(114, '5', '4', '611', '611'),
(115, '8', '4', '612', '610'),
(116, '29', '4', '393', '393'),
(117, '2', '4', '507', '505'),
(118, '3', '4', '491', '491'),
(119, '27', '4', '500', '500'),
(120, '30', '4', '473', '472'),
(121, '31', '4', '426', '421'),
(122, '14', '4', '595', '595'),
(123, '16', '4', '575', '575'),
(124, '6', '4', '373', '373'),
(125, '22', '4', '489', '488'),
(126, '17', '5', '552', '548'),
(127, '9', '5', '1160', '1149'),
(128, '13', '5', '2306', '2303'),
(129, '25', '5', '725', '725'),
(130, '24', '5', '1305', '1301'),
(131, '26', '5', '1060', '1052'),
(132, '10', '5', '1603', '1598'),
(133, '1', '5', '1036', '1030'),
(134, '11', '5', '1298', '1297'),
(135, '19', '5', '657', '656'),
(136, '18', '5', '719', '719'),
(137, '7', '5', '475', '470'),
(138, '21', '5', '1010', '1000'),
(139, '28', '5', '393', '392'),
(140, '12', '5', '1399', '1399'),
(141, '15', '5', '622', '619'),
(142, '4', '5', '852', '851'),
(143, '23', '5', '2043', '2044'),
(144, '20', '5', '543', '543'),
(145, '5', '5', '953', '953'),
(146, '8', '5', '1030', '1029'),
(147, '29', '5', '834', '835'),
(148, '2', '5', '769', '770'),
(149, '3', '5', '651', '646'),
(150, '27', '5', '1247', '1246'),
(151, '30', '5', '669', '668'),
(152, '31', '5', '798', '796'),
(153, '14', '5', '734', '732'),
(154, '16', '5', '988', '984'),
(155, '6', '5', '465', '462'),
(156, '22', '5', '881', '880'),
(157, '17', '6', '378', '378'),
(158, '9', '6', '1022', '1018'),
(159, '13', '6', '1371', '1370'),
(160, '25', '6', '558', '558'),
(161, '24', '6', '1034', '1034'),
(162, '26', '6', '740', '739'),
(163, '10', '6', '904', '904'),
(164, '1', '6', '672', '666'),
(165, '11', '6', '827', '828'),
(166, '19', '6', '485', '485'),
(167, '18', '6', '555', '555'),
(168, '7', '6', '369', '369'),
(169, '21', '6', '522', '520'),
(170, '28', '6', '237', '234'),
(171, '12', '6', '826', '827'),
(172, '15', '6', '336', '336'),
(173, '4', '6', '577', '577'),
(174, '23', '6', '1082', '1084'),
(175, '20', '6', '465', '465'),
(176, '5', '6', '568', '568'),
(177, '8', '6', '829', '829'),
(178, '29', '6', '572', '573'),
(179, '2', '6', '468', '467'),
(180, '3', '6', '531', '530'),
(181, '27', '6', '589', '588'),
(182, '30', '6', '432', '432'),
(183, '31', '6', '533', '531'),
(184, '14', '6', '691', '690'),
(185, '16', '6', '651', '647'),
(186, '6', '6', '401', '401'),
(187, '22', '6', '538', '538');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_interval_treatments`
--
ALTER TABLE `age_interval_treatments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `age_sses`
--
ALTER TABLE `age_sses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_level_hhs`
--
ALTER TABLE `community_level_hhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diarrhoeas`
--
ALTER TABLE `diarrhoeas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distribution_hh_mtks`
--
ALTER TABLE `distribution_hh_mtks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distribution_sexandagecols`
--
ALTER TABLE `distribution_sexandagecols`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distribution_ss_demographics`
--
ALTER TABLE `distribution_ss_demographics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distribution_ss_sexandages`
--
ALTER TABLE `distribution_ss_sexandages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distribution_ss_years`
--
ALTER TABLE `distribution_ss_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hh_hygieneknowledges`
--
ALTER TABLE `hh_hygieneknowledges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hh_sampleds`
--
ALTER TABLE `hh_sampleds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indicators`
--
ALTER TABLE `indicators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infection_category_age_sexes`
--
ALTER TABLE `infection_category_age_sexes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intensities`
--
ALTER TABLE `intensities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intervals`
--
ALTER TABLE `intervals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebeles`
--
ALTER TABLE `kebeles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mean_sthand_sm_woredas`
--
ALTER TABLE `mean_sthand_sm_woredas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `methods`
--
ALTER TABLE `methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `method_data_captures`
--
ALTER TABLE `method_data_captures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pay_drinkingwaters`
--
ALTER TABLE `pay_drinkingwaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevalence_infections`
--
ALTER TABLE `prevalence_infections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevalence_inf_schists`
--
ALTER TABLE `prevalence_inf_schists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevalence_intensities`
--
ALTER TABLE `prevalence_intensities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevalence_intensity_ips`
--
ALTER TABLE `prevalence_intensity_ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevalence_intestinal_parasites`
--
ALTER TABLE `prevalence_intestinal_parasites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevalence_schistosomiases`
--
ALTER TABLE `prevalence_schistosomiases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevalence_sma_and_sths`
--
ALTER TABLE `prevalence_sma_and_sths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevalence_sthandsm_woredas`
--
ALTER TABLE `prevalence_sthandsm_woredas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevalence_sth_infections`
--
ALTER TABLE `prevalence_sth_infections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_haemastixes`
--
ALTER TABLE `proportion_haemastixes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hc_bdws`
--
ALTER TABLE `proportion_hc_bdws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hc_bsanitations`
--
ALTER TABLE `proportion_hc_bsanitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_basicdws`
--
ALTER TABLE `proportion_hh_basicdws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_basichwfacilities`
--
ALTER TABLE `proportion_hh_basichwfacilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_basicsanitations`
--
ALTER TABLE `proportion_hh_basicsanitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_basicswshes`
--
ALTER TABLE `proportion_hh_basicswshes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_bdws`
--
ALTER TABLE `proportion_hh_bdws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_bhwfs`
--
ALTER TABLE `proportion_hh_bhwfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_bsanitations`
--
ALTER TABLE `proportion_hh_bsanitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_defections`
--
ALTER TABLE `proportion_hh_defections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_dwsks`
--
ALTER TABLE `proportion_hh_dwsks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_feaces`
--
ALTER TABLE `proportion_hh_feaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_notsws`
--
ALTER TABLE `proportion_hh_notsws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_odfs`
--
ALTER TABLE `proportion_hh_odfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_pdws`
--
ALTER TABLE `proportion_hh_pdws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_sws`
--
ALTER TABLE `proportion_hh_sws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_swshes`
--
ALTER TABLE `proportion_hh_swshes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_tdws`
--
ALTER TABLE `proportion_hh_tdws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_tks`
--
ALTER TABLE `proportion_hh_tks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_wcs`
--
ALTER TABLE `proportion_hh_wcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_hh_wdwks`
--
ALTER TABLE `proportion_hh_wdwks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_sbsanitations`
--
ALTER TABLE `proportion_sbsanitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_schistosoma_hs`
--
ALTER TABLE `proportion_schistosoma_hs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proportion_schoolbdws`
--
ALTER TABLE `proportion_schoolbdws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proprotion_poc_ccas`
--
ALTER TABLE `proprotion_poc_ccas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pzq_coverage_kebeles`
--
ALTER TABLE `pzq_coverage_kebeles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relations_scaffoldinterface_id_foreign` (`scaffoldinterface_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sexes`
--
ALTER TABLE `sexes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_woreda_preval1`
--
ALTER TABLE `ss_woreda_preval1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_coverages`
--
ALTER TABLE `treatment_coverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_coverage_biometrics`
--
ALTER TABLE `treatment_coverage_biometrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_coverage_kebeles`
--
ALTER TABLE `treatment_coverage_kebeles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_cov_year`
--
ALTER TABLE `treatment_cov_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_cumulatives`
--
ALTER TABLE `treatment_cumulatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_infections`
--
ALTER TABLE `treatment_infections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treat_drinkingwaters`
--
ALTER TABLE `treat_drinkingwaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wash_indicators`
--
ALTER TABLE `wash_indicators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `woredas`
--
ALTER TABLE `woredas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year1_treatment_age`
--
ALTER TABLE `year1_treatment_age`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_interval_treatments`
--
ALTER TABLE `age_interval_treatments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `age_sses`
--
ALTER TABLE `age_sses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `community_level_hhs`
--
ALTER TABLE `community_level_hhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `diarrhoeas`
--
ALTER TABLE `diarrhoeas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `distribution_hh_mtks`
--
ALTER TABLE `distribution_hh_mtks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `distribution_sexandagecols`
--
ALTER TABLE `distribution_sexandagecols`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `distribution_ss_demographics`
--
ALTER TABLE `distribution_ss_demographics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distribution_ss_sexandages`
--
ALTER TABLE `distribution_ss_sexandages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `distribution_ss_years`
--
ALTER TABLE `distribution_ss_years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hh_hygieneknowledges`
--
ALTER TABLE `hh_hygieneknowledges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hh_sampleds`
--
ALTER TABLE `hh_sampleds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `indicators`
--
ALTER TABLE `indicators`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `infection_category_age_sexes`
--
ALTER TABLE `infection_category_age_sexes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intensities`
--
ALTER TABLE `intensities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `intervals`
--
ALTER TABLE `intervals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kebeles`
--
ALTER TABLE `kebeles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `mean_sthand_sm_woredas`
--
ALTER TABLE `mean_sthand_sm_woredas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `methods`
--
ALTER TABLE `methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `method_data_captures`
--
ALTER TABLE `method_data_captures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `pay_drinkingwaters`
--
ALTER TABLE `pay_drinkingwaters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prevalence_infections`
--
ALTER TABLE `prevalence_infections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prevalence_inf_schists`
--
ALTER TABLE `prevalence_inf_schists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prevalence_intensities`
--
ALTER TABLE `prevalence_intensities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prevalence_intensity_ips`
--
ALTER TABLE `prevalence_intensity_ips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `prevalence_intestinal_parasites`
--
ALTER TABLE `prevalence_intestinal_parasites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `prevalence_schistosomiases`
--
ALTER TABLE `prevalence_schistosomiases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prevalence_sma_and_sths`
--
ALTER TABLE `prevalence_sma_and_sths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prevalence_sthandsm_woredas`
--
ALTER TABLE `prevalence_sthandsm_woredas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1322;

--
-- AUTO_INCREMENT for table `prevalence_sth_infections`
--
ALTER TABLE `prevalence_sth_infections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proportion_haemastixes`
--
ALTER TABLE `proportion_haemastixes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proportion_hc_bdws`
--
ALTER TABLE `proportion_hc_bdws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proportion_hc_bsanitations`
--
ALTER TABLE `proportion_hc_bsanitations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proportion_hh_basicdws`
--
ALTER TABLE `proportion_hh_basicdws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proportion_hh_basichwfacilities`
--
ALTER TABLE `proportion_hh_basichwfacilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proportion_hh_basicsanitations`
--
ALTER TABLE `proportion_hh_basicsanitations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proportion_hh_basicswshes`
--
ALTER TABLE `proportion_hh_basicswshes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proportion_hh_bdws`
--
ALTER TABLE `proportion_hh_bdws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proportion_hh_bhwfs`
--
ALTER TABLE `proportion_hh_bhwfs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proportion_hh_bsanitations`
--
ALTER TABLE `proportion_hh_bsanitations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proportion_hh_defections`
--
ALTER TABLE `proportion_hh_defections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proportion_hh_dwsks`
--
ALTER TABLE `proportion_hh_dwsks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `proportion_hh_feaces`
--
ALTER TABLE `proportion_hh_feaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `proportion_hh_notsws`
--
ALTER TABLE `proportion_hh_notsws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proportion_hh_odfs`
--
ALTER TABLE `proportion_hh_odfs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proportion_hh_pdws`
--
ALTER TABLE `proportion_hh_pdws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proportion_hh_sws`
--
ALTER TABLE `proportion_hh_sws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proportion_hh_swshes`
--
ALTER TABLE `proportion_hh_swshes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proportion_hh_tdws`
--
ALTER TABLE `proportion_hh_tdws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proportion_hh_tks`
--
ALTER TABLE `proportion_hh_tks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `proportion_hh_wcs`
--
ALTER TABLE `proportion_hh_wcs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proportion_hh_wdwks`
--
ALTER TABLE `proportion_hh_wdwks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proportion_sbsanitations`
--
ALTER TABLE `proportion_sbsanitations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proportion_schistosoma_hs`
--
ALTER TABLE `proportion_schistosoma_hs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proportion_schoolbdws`
--
ALTER TABLE `proportion_schoolbdws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `proprotion_poc_ccas`
--
ALTER TABLE `proprotion_poc_ccas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pzq_coverage_kebeles`
--
ALTER TABLE `pzq_coverage_kebeles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `sexes`
--
ALTER TABLE `sexes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ss_woreda_preval1`
--
ALTER TABLE `ss_woreda_preval1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `treatment_coverages`
--
ALTER TABLE `treatment_coverages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treatment_coverage_biometrics`
--
ALTER TABLE `treatment_coverage_biometrics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treatment_coverage_kebeles`
--
ALTER TABLE `treatment_coverage_kebeles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `treatment_cov_year`
--
ALTER TABLE `treatment_cov_year`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `treatment_cumulatives`
--
ALTER TABLE `treatment_cumulatives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `treatment_infections`
--
ALTER TABLE `treatment_infections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `treat_drinkingwaters`
--
ALTER TABLE `treat_drinkingwaters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wash_indicators`
--
ALTER TABLE `wash_indicators`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `woredas`
--
ALTER TABLE `woredas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `year1_treatment_age`
--
ALTER TABLE `year1_treatment_age`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `relations`
--
ALTER TABLE `relations`
  ADD CONSTRAINT `relations_scaffoldinterface_id_foreign` FOREIGN KEY (`scaffoldinterface_id`) REFERENCES `scaffoldinterfaces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
