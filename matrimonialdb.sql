-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2019 at 11:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrimonialdb`
--
CREATE DATABASE IF NOT EXISTS `matrimonialdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `matrimonialdb`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_user` (
  `admin_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_name` varchar(100) NOT NULL,
  `admin_user_pwd` varchar(100) NOT NULL,
  `admin_user_email` varchar(100) NOT NULL,
  `admin_user_phone` varchar(100) NOT NULL,
  `admin_user_mobile` varchar(100) NOT NULL,
  `admin_user_doj` date NOT NULL,
  `admin_user_last_login` datetime NOT NULL,
  PRIMARY KEY (`admin_user_id`),
  KEY `admin_user_id` (`admin_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`admin_user_id`, `admin_user_name`, `admin_user_pwd`, `admin_user_email`, `admin_user_phone`, `admin_user_mobile`, `admin_user_doj`, `admin_user_last_login`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '', '9909437540', '2017-12-20', '2017-12-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_ads`
--

CREATE TABLE IF NOT EXISTS `tbl_banner_ads` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_place` enum('Top','Bottom','Left','Right','Center') NOT NULL,
  `banner_href` longtext NOT NULL,
  `banner_start_date` date NOT NULL,
  `banner_end_date` date NOT NULL,
  `banner_image` longtext NOT NULL,
  `banner_amount` int(11) NOT NULL,
  `banner_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`banner_id`),
  KEY `banner_id` (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_caste`
--

CREATE TABLE IF NOT EXISTS `tbl_caste` (
  `caste_id` int(11) NOT NULL AUTO_INCREMENT,
  `caste_name` varchar(100) NOT NULL,
  `caste_sort_order` int(11) NOT NULL,
  `caste_status` enum('Active','In-Active') NOT NULL,
  `religion_id` int(11) NOT NULL,
  PRIMARY KEY (`caste_id`),
  KEY `caste_id` (`caste_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Surat', 1),
(2, 'Ahmedabad', 1),
(3, 'Pune', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

CREATE TABLE IF NOT EXISTS `tbl_cms` (
  `cms_about_us` longtext NOT NULL,
  `cms_contact_us` longtext NOT NULL,
  `cms_help` longtext NOT NULL,
  `cms_faq` longtext NOT NULL,
  `cms_bank_details` longtext NOT NULL,
  `cms_privacy_policy` longtext NOT NULL,
  `cms_terms_condition` longtext NOT NULL,
  `cms_disclaimer` longtext NOT NULL,
  `cms_refund_cancellation` longtext NOT NULL,
  `cms_deliver_policy` longtext NOT NULL,
  `cms_success_stories` longtext NOT NULL,
  `cms_newsticker` longtext NOT NULL,
  `cms_wedding_resources` longtext NOT NULL,
  `cms_copyright` longtext NOT NULL,
  `cms_trade_mark` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `country_std_code` varchar(100) NOT NULL,
  PRIMARY KEY (`country_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`, `country_code`, `country_std_code`) VALUES
(1, 'INDIA', '', ''),
(2, 'AMERICA', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `event_description` longtext NOT NULL,
  `event_date` date NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_image` longtext NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback_name` varchar(100) NOT NULL,
  `feedback_company_name` varchar(100) NOT NULL,
  `feedback_email` varchar(100) NOT NULL,
  `feedback_mobile_no` varchar(100) NOT NULL,
  `feedback_address` longtext NOT NULL,
  `feedback_message` longtext NOT NULL,
  `feedback_date` date NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `feedback_id` (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hobby`
--

CREATE TABLE IF NOT EXISTS `tbl_hobby` (
  `hobby_id` int(11) NOT NULL AUTO_INCREMENT,
  `hobby_name` varchar(100) NOT NULL,
  PRIMARY KEY (`hobby_id`),
  KEY `hobby_id` (`hobby_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interest`
--

CREATE TABLE IF NOT EXISTS `tbl_interest` (
  `interest_id` int(11) NOT NULL AUTO_INCREMENT,
  `interest_name` varchar(100) NOT NULL,
  PRIMARY KEY (`interest_id`),
  KEY `interest_id` (`interest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(100) NOT NULL,
  `member_father_name` varchar(100) NOT NULL,
  `member_gender` enum('Male','Female') NOT NULL,
  `member_address` longtext NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `member_other_city` varchar(100) NOT NULL,
  `member_postal_code` varchar(100) NOT NULL,
  `member_phone` varchar(100) NOT NULL,
  `member_mobile_no` varchar(100) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_password` varchar(100) NOT NULL,
  `member_gol` varchar(100) NOT NULL,
  `member_dob` date NOT NULL,
  `member_birth_place` varchar(100) NOT NULL,
  `member_birth_time` varchar(100) NOT NULL,
  `member_belive_horoscope` enum('Yes','No') NOT NULL,
  `member_shani_mangal` enum('Yes','No') NOT NULL,
  `member_shani_mangal_desc` varchar(100) NOT NULL,
  `member_education` varchar(100) NOT NULL,
  `member_occupation` varchar(100) NOT NULL,
  `member_other_occupation` varchar(100) NOT NULL,
  `member_monthly_income` varchar(100) NOT NULL,
  `member_job_desc` longtext NOT NULL,
  `member_height` varchar(100) NOT NULL,
  `member_weight` varchar(100) NOT NULL,
  `member_body_type` enum('Athletic','Average','Slim','Fat') NOT NULL,
  `member_spectacles` enum('Yes','No') NOT NULL,
  `member_spectables_no` varchar(100) NOT NULL,
  `member_physical_disable` enum('Yes','No') NOT NULL,
  `member_physical_disable_desc` longtext NOT NULL,
  `member_parents_alive` enum('Yes','No') NOT NULL,
  `member_father_occupation` varchar(100) NOT NULL,
  `member_brother` int(11) NOT NULL,
  `member_sister` int(11) NOT NULL,
  `member_married_brother` int(11) NOT NULL,
  `member_married_sister` int(11) NOT NULL,
  `member_marital_status` enum('Yes','No') NOT NULL,
  `member_children_girl` int(11) NOT NULL,
  `member_children_boy` int(11) NOT NULL,
  `member_residence_status` enum('Own','Rent','Not Applicable') NOT NULL,
  `member_nri_candidates_applicable` enum('Yes','No') NOT NULL,
  `member_expectation` longtext NOT NULL,
  `member_photo1` longtext NOT NULL,
  `member_photo2` longtext NOT NULL,
  `member_photo3` longtext NOT NULL,
  `member_photo4` longtext NOT NULL,
  `member_photo5` longtext NOT NULL,
  `member_doj` date NOT NULL,
  `member_profile_status` enum('Private','Public') NOT NULL,
  `member_status` enum('Active','In-Active','Blocked') NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_hobbies`
--

CREATE TABLE IF NOT EXISTS `tbl_member_hobbies` (
  `member_hobby_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `hobby_id` int(11) NOT NULL,
  PRIMARY KEY (`member_hobby_id`),
  KEY `member_hobby_id` (`member_hobby_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_interest`
--

CREATE TABLE IF NOT EXISTS `tbl_member_interest` (
  `member_id` int(11) NOT NULL,
  `interest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_old`
--

CREATE TABLE IF NOT EXISTS `tbl_member_old` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(100) NOT NULL,
  `member_gender` enum('Male','Female') NOT NULL,
  `member_matrimonial_id` varchar(100) NOT NULL,
  `member_address` longtext NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `member_phone` varchar(100) NOT NULL,
  `member_mobile` varchar(100) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_password` varchar(100) NOT NULL,
  `member_total_views` int(11) NOT NULL,
  `member_status` enum('Active','In-Active','New','Paid','Banned','Lapsed') NOT NULL,
  `member_is_featured` enum('Yes','No') NOT NULL,
  `member_dob` date NOT NULL,
  `member_maritial_status` enum('Single','Widowed','Divorced','Separated') NOT NULL,
  `member_no_of_children` int(11) NOT NULL,
  `member_children_live_with` enum('Living With Me','Not Living With Me') NOT NULL,
  `member_reference_by` enum('Advertisements','Friends','Search Engines','Others') NOT NULL,
  `member_birth_place` varchar(100) NOT NULL,
  `member_resident_status` enum('owned','on rent') NOT NULL,
  `member_created_by` enum('self','parents','guardian','son','daughter','brother','sister','friend','Relative','Member of Marriage Bureau') NOT NULL,
  `education_id` int(11) NOT NULL,
  `member_education_details` longtext NOT NULL,
  `member_employed_in` enum('Business','Defence','Government','Not Employed','Private','Public Sector','Others') NOT NULL,
  `occupation_id` int(11) NOT NULL,
  `member_occupation_details` longtext NOT NULL,
  `member_annual_income` longtext NOT NULL,
  `religion_id` int(11) NOT NULL,
  `caste_id` int(11) NOT NULL,
  `member_subcaste` varchar(100) NOT NULL,
  `mother_tongue_id` int(11) NOT NULL,
  `star_id` int(11) NOT NULL,
  `moon_sign_id` int(11) NOT NULL,
  `member_horoscope_match` longtext NOT NULL,
  `member_manglik` enum('Yes','No') NOT NULL,
  `member_gothra` varchar(100) NOT NULL,
  `member_height` varchar(100) NOT NULL,
  `member_blood_group` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `member_complexion` enum('Fair','Brown','Black') NOT NULL,
  `member_smoke` enum('Yes','No') NOT NULL,
  `member_weight` varchar(100) NOT NULL,
  `member_body_type` enum('Over-Weight','Fit','Thin') NOT NULL,
  `member_diet` enum('Veg','Non-Veg','Eggetarian') NOT NULL,
  `member_drink` enum('Yes','No') NOT NULL,
  `member_family_details` longtext NOT NULL,
  `member_family_values` enum('Traditional','Orthodox','Liberal','Moderate') NOT NULL,
  `member_family_status` enum('Rich','Upper Middle Class','High Class','Middle Class','Do not Want to tell at this time') NOT NULL,
  `member_mother_name` varchar(100) NOT NULL,
  `member_father_name` varchar(100) NOT NULL,
  `member_no_of_brothers` int(11) NOT NULL,
  `member_no_of_elder_brothers` int(11) NOT NULL,
  `member_no_of_younger_brothers` int(11) NOT NULL,
  `member_no_of_sisters` int(11) NOT NULL,
  `member_no_of_elder_sisters` int(11) NOT NULL,
  `member_no_of_younger_sisters` int(11) NOT NULL,
  `member_no_of_married_brothers` int(11) NOT NULL,
  `member_no_of_married_sisters` int(11) NOT NULL,
  `member_family_type` enum('Seperate Family','Joint Family') NOT NULL,
  `member_family_origin` varchar(100) NOT NULL,
  `member_father_occupation` varchar(100) NOT NULL,
  `member_mother_occupation` varchar(100) NOT NULL,
  `member_looking_for` enum('None','Never Married','Widowed','Divorced','Seperated') NOT NULL,
  `member_partner_age_from` int(11) NOT NULL,
  `member_partner_age_to` int(11) NOT NULL,
  `member_partner_expectation` longtext NOT NULL,
  `member_partner_country` int(11) NOT NULL,
  `member_partner_height_from` varchar(100) NOT NULL,
  `member_partner_height_to` varchar(100) NOT NULL,
  `member_partner_complexion` enum('Does Not Matter','Very Fair','Fair','Wheatish','Wheatish Medium','Wheatish Brown','Dark') NOT NULL,
  `member_partner_education` enum('Does Not Matter','Bachelors','Masters','Doctorate','Diploma','Professional Degrees','Medicine','Trade School','High School - 10th','Higher Secondary - 12th','Less Than High Schol') NOT NULL,
  `member_partner_reiligion` int(11) NOT NULL,
  `member_partner_caste` int(11) NOT NULL,
  `member_partner_resident_status` enum('Does Not Matter','Citizen','Permanant Resident','Student Visa','Temperory Visa','Work Permit') NOT NULL,
  `member_description` longtext NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_photo`
--

CREATE TABLE IF NOT EXISTS `tbl_member_photo` (
  `member_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `member_photo1` longtext NOT NULL,
  `member_photo1_status` enum('Approve','Decline') NOT NULL,
  `member_photo2` longtext NOT NULL,
  `member_photo2_status` enum('Approve','Decline') NOT NULL,
  `member_photo3` longtext NOT NULL,
  `member_photo3_status` enum('Approve','Decline') NOT NULL,
  `member_scanned_horroscope` longtext NOT NULL,
  PRIMARY KEY (`member_photo_id`),
  KEY `member_photo_id` (`member_photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_plan`
--

CREATE TABLE IF NOT EXISTS `tbl_member_plan` (
  `member_plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `member_plan_start_date` date NOT NULL,
  `member_plan_end_date` date NOT NULL,
  `member_plan_views` int(11) NOT NULL,
  `member_plan_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`member_plan_id`),
  KEY `member_plan_id` (`member_plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mother_tongue`
--

CREATE TABLE IF NOT EXISTS `tbl_mother_tongue` (
  `mother_tongue_id` int(11) NOT NULL AUTO_INCREMENT,
  `mother_tongue_name` varchar(100) NOT NULL,
  PRIMARY KEY (`mother_tongue_id`),
  KEY `mother_tongue_id` (`mother_tongue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE IF NOT EXISTS `tbl_photo` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_title` longtext NOT NULL,
  `photo_file` longtext NOT NULL,
  `photo_album_id` int(11) NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `photo_id` (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo_album`
--

CREATE TABLE IF NOT EXISTS `tbl_photo_album` (
  `photo_album_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_album_name` varchar(100) NOT NULL,
  `photo_album_description` longtext NOT NULL,
  PRIMARY KEY (`photo_album_id`),
  KEY `photo_album_id` (`photo_album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plan`
--

CREATE TABLE IF NOT EXISTS `tbl_plan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_name` varchar(100) NOT NULL,
  `plan_profile_views` int(11) NOT NULL,
  `plan_days_validity` int(11) NOT NULL,
  `plan_amount` int(11) NOT NULL,
  `plan_description` longtext NOT NULL,
  `plan_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`plan_id`),
  KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_religion`
--

CREATE TABLE IF NOT EXISTS `tbl_religion` (
  `religion_id` int(11) NOT NULL AUTO_INCREMENT,
  `religion_name` varchar(100) NOT NULL,
  `religion_sort_order` int(11) NOT NULL,
  `religion_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`religion_id`),
  KEY `religion_id` (`religion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_religion`
--

INSERT INTO `tbl_religion` (`religion_id`, `religion_name`, `religion_sort_order`, `religion_status`) VALUES
(1, 'Hindus', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `settings_website_title` longtext NOT NULL,
  `settings_meta_keywords` longtext NOT NULL,
  `settings_meta_desc` longtext NOT NULL,
  `settings_website_name` varchar(100) NOT NULL,
  `settings_logo` longtext NOT NULL,
  `settings_currency_code` varchar(100) NOT NULL,
  `settings_currency_symbol` varchar(100) NOT NULL,
  `settings_address` longtext NOT NULL,
  `settings_phone` varchar(100) NOT NULL,
  `settings_fax` varchar(100) NOT NULL,
  `settings_contact_email` varchar(100) NOT NULL,
  `settings_map_address` varchar(100) NOT NULL,
  `settings_toll_free` varchar(100) NOT NULL,
  `settings_small_logo` longtext NOT NULL,
  `settings_footer_logo` longtext NOT NULL,
  `settings_favicon` longtext NOT NULL,
  `facebook_url` longtext NOT NULL,
  `google_plus_url` longtext NOT NULL,
  `twitter_url` longtext NOT NULL,
  `pinterest_url` longtext NOT NULL,
  `instagram_url` longtext NOT NULL,
  `settings_show_badges` int(1) NOT NULL,
  `settings_single_min_qty` int(11) NOT NULL,
  `settings_total_min_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`settings_website_title`, `settings_meta_keywords`, `settings_meta_desc`, `settings_website_name`, `settings_logo`, `settings_currency_code`, `settings_currency_symbol`, `settings_address`, `settings_phone`, `settings_fax`, `settings_contact_email`, `settings_map_address`, `settings_toll_free`, `settings_small_logo`, `settings_footer_logo`, `settings_favicon`, `facebook_url`, `google_plus_url`, `twitter_url`, `pinterest_url`, `instagram_url`, `settings_show_badges`, `settings_single_min_qty`, `settings_total_min_qty`) VALUES
('Darji Samaj Matrimonial', 'Darji Samaj Matrimonial', 'Darji Samaj Matrimonial', 'Darji Samaj Matrimonial', 'VqjXB_09xqv_58340118_gaj_logo_100.png', 'Rs.', '', '1st Floor, Shop No. 1084, Vankar Textile Market,\r\nRing Road, Surat, Gujarat, 395002', '82389 23571', '0', 'hiralsaree1@gmail.com', '', '', 'laumr_kx4F5_48811127_', 'laumr_kx4F5_48811127_', 'laumr_kx4F5_48811127_', 'http://www.facebook.com', 'http://www.google.com', 'http://www.twitter.com', 'http://www.pinterest.com', 'http://www.instagram.com', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings_old`
--

CREATE TABLE IF NOT EXISTS `tbl_settings_old` (
  `settings_meta_title` longtext NOT NULL,
  `settings_meta_description` longtext NOT NULL,
  `settings_meta_tag_keywords` longtext NOT NULL,
  `settings_business_name` varchar(100) NOT NULL,
  `settings_owner_name` varchar(100) NOT NULL,
  `settings_address` longtext NOT NULL,
  `settings_geo_code` varchar(100) NOT NULL,
  `settings_geo_code_label` varchar(100) NOT NULL,
  `settings_email` varchar(100) NOT NULL,
  `settings_telephone` varchar(100) NOT NULL,
  `settings_mobile` varchar(100) NOT NULL,
  `settings_fax` varchar(100) NOT NULL,
  `settings_opening_times` longtext NOT NULL,
  `settings_comment` longtext NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `settings_logo` longtext NOT NULL,
  `settings_favicon` longtext NOT NULL,
  `settings_smtp_host` varchar(100) NOT NULL,
  `settings_smtp_username` varchar(100) NOT NULL,
  `settings_smtp_password` varchar(100) NOT NULL,
  `settings_smtp_port` varchar(100) NOT NULL,
  `settings_smtp_timeout` varchar(100) NOT NULL,
  `settings_google_analytics` longtext NOT NULL,
  `settings_currency_code` varchar(100) NOT NULL,
  `settings_currency_symbol` varchar(100) NOT NULL,
  `settings_toll_free_number` varchar(100) NOT NULL,
  `settings_small_logo` longtext NOT NULL,
  `settings_footer_logo` longtext NOT NULL,
  `settings_facebook_url` longtext NOT NULL,
  `settings_google_url` longtext NOT NULL,
  `settings_twitter_url` longtext NOT NULL,
  `settings_linkedin_url` longtext NOT NULL,
  `settings_instagram_url` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings_old`
--

INSERT INTO `tbl_settings_old` (`settings_meta_title`, `settings_meta_description`, `settings_meta_tag_keywords`, `settings_business_name`, `settings_owner_name`, `settings_address`, `settings_geo_code`, `settings_geo_code_label`, `settings_email`, `settings_telephone`, `settings_mobile`, `settings_fax`, `settings_opening_times`, `settings_comment`, `country_id`, `state_id`, `city_id`, `settings_logo`, `settings_favicon`, `settings_smtp_host`, `settings_smtp_username`, `settings_smtp_password`, `settings_smtp_port`, `settings_smtp_timeout`, `settings_google_analytics`, `settings_currency_code`, `settings_currency_symbol`, `settings_toll_free_number`, `settings_small_logo`, `settings_footer_logo`, `settings_facebook_url`, `settings_google_url`, `settings_twitter_url`, `settings_linkedin_url`, `settings_instagram_url`) VALUES
('sample', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_title` longtext NOT NULL,
  `slider_image` longtext NOT NULL,
  `slider_href` longtext NOT NULL,
  `slider_order` int(11) NOT NULL,
  `slider_content` longtext NOT NULL,
  `slider_content_position` varchar(100) NOT NULL,
  `slider_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`slider_id`),
  KEY `slider_id` (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_title`, `slider_image`, `slider_href`, `slider_order`, `slider_content`, `slider_content_position`, `slider_status`) VALUES
(1, 'new slider', 'VcMlB_7eq0P_70548950_BANNER-2.jpg', 'http://www.google.com', 1, '', '', 'Active'),
(2, 'new slider check', 'BOZzd_eaFxB_88612946_kota-silk-sarees.jpg', 'http://www.google.com', 1, 'helo', '10', 'Active'),
(3, 'New', 'wFLgE_NqBze_54989563_Wedding-Sarees-Online.jpg', '', 0, '', '', 'Active'),
(4, 'Wedding Sarees', 'pauCy_2JvL7_80500916_weddingsaree.jpg', '', 0, '', '', 'In-Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_provider`
--

CREATE TABLE IF NOT EXISTS `tbl_sms_provider` (
  `sms_provider_id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_provider_name` varchar(100) NOT NULL,
  `sms_provider_url` longtext NOT NULL,
  `sms_provider_user` varchar(100) NOT NULL,
  `sms_provider_password` varchar(100) NOT NULL,
  `sms_provider_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`sms_provider_id`),
  KEY `sms_provider_id` (`sms_provider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(100) NOT NULL,
  `staff_username` varchar(100) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_password` varchar(100) NOT NULL,
  `staff_about` longtext NOT NULL,
  `staff_status` enum('Active','In-Active') NOT NULL,
  `staff_doj` date NOT NULL,
  `staff_last_login_date` datetime NOT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`state_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'GUJARAT', 1),
(2, 'MAHARASHTRA', 1),
(3, 'PUNJAB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE IF NOT EXISTS `tbl_subscribe` (
  `subscribe_id` int(11) NOT NULL AUTO_INCREMENT,
  `subscribe_name` varchar(100) NOT NULL,
  `subscribe_email` varchar(100) NOT NULL,
  `subscribe_phone` varchar(100) NOT NULL,
  `subscribe_status` enum('Subscribe','Unsubscribe') NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`subscribe_id`),
  KEY `subscribe_id` (`subscribe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe_email`
--

CREATE TABLE IF NOT EXISTS `tbl_subscribe_email` (
  `subscribe_email_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`subscribe_email_id`),
  KEY `subscribe_email_id` (`subscribe_email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe_email_campaign`
--

CREATE TABLE IF NOT EXISTS `tbl_subscribe_email_campaign` (
  `campaign_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_subject` longtext NOT NULL,
  `campaign_message` longtext NOT NULL,
  `campaign_status` enum('Active','In-Active') NOT NULL,
  `campaign_date_time` datetime NOT NULL,
  PRIMARY KEY (`campaign_id`),
  KEY `campaign_id` (`campaign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_success_story`
--

CREATE TABLE IF NOT EXISTS `tbl_success_story` (
  `success_story_id` int(11) NOT NULL AUTO_INCREMENT,
  `success_story_bride_name` varchar(100) NOT NULL,
  `success_story_bride_matri_id` varchar(100) NOT NULL,
  `success_story_groom_name` varchar(100) NOT NULL,
  `success_story_groom_matri_id` varchar(100) NOT NULL,
  `success_story_wedding_date` date NOT NULL,
  `success_story_mobile_number` varchar(100) NOT NULL,
  `success_story_contact_address` longtext NOT NULL,
  `success_story_comments` longtext NOT NULL,
  `success_story_wedding_photo` longtext NOT NULL,
  `success_story_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`success_story_id`),
  KEY `success_story_id` (`success_story_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_title` longtext NOT NULL,
  `video_youtube_url` longtext NOT NULL,
  `video_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`video_id`),
  KEY `video_id` (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
