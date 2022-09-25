-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 02:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arpahk`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `city` text NOT NULL,
  `image` text NOT NULL,
  `category_id` int(50) NOT NULL,
  `created_at` date NOT NULL,
  `views` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `used` int(11) NOT NULL,
  `delivery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `title`, `description`, `city`, `image`, `category_id`, `created_at`, `views`, `price`, `confirmed`, `used`, `delivery`) VALUES
(8, 1, 'asd', 'adsasd', '16', '1663975676acce.PNG', 1, '2022-09-23', 55, 5, 1, 0, 1),
(9, 1, 'اعلان تجريبي', 'شي', '13', '1663978908acce.PNG', 2, '2022-09-24', 2, 8, 1, 0, 1),
(10, 1, 'اعلان تجريبي 2', 'اعلان تجريبي', '15', '1663979013acce.PNG', 1, '2022-09-24', 18, 4, 1, 1, 0),
(11, 1, 'اعلان تجريبي 3', 'اعلان تجريبي', '2', '1663979053dsadaw.PNG', 1, '2022-09-24', 0, 8, 1, 0, 1),
(12, 1, 'testtt', 'testtt', '1', '1663979089acce.PNG', 1, '2022-09-24', 0, 8, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ads_category`
--

CREATE TABLE `ads_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads_category`
--

INSERT INTO `ads_category` (`id`, `name`) VALUES
(1, 'عقارات'),
(2, 'سيارات'),
(3, 'اجهزة كهربائية');

-- --------------------------------------------------------

--
-- Table structure for table `ads_images`
--

CREATE TABLE `ads_images` (
  `id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `ad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads_images`
--

INSERT INTO `ads_images` (`id`, `image1`, `image2`, `image3`, `ad_id`) VALUES
(3, '1663975676asdqeq.PNG', '1663975676das.PNG', '1663975676dsada.PNG', 8),
(4, '1663978908asdqeq.PNG', '1663978908das.PNG', '1663978908dsadaw.PNG', 9),
(5, '1663979013asdqeq.PNG', '1663979013dsadaw.PNG', '1663979013das.PNG', 10),
(6, '1663979053acce.PNG', '1663979053das.PNG', '1663979053eqe.PNG', 11),
(7, '1663979089das.PNG', '1663979089asdasd.PNG', '1663979089eqe.PNG', 12);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `value`) VALUES
(1, 'القاهرة', 1),
(2, 'الجيزة', 2),
(3, 'الأسكندرية', 3),
(4, 'الدقهلية', 4),
(5, 'الشرقية', 5),
(6, 'المنوفية', 6),
(7, 'القليوبية', 7),
(8, 'البحيرة', 8),
(9, 'الغربية', 9),
(10, 'بور سعيد', 10),
(11, 'دمياط', 11),
(12, 'الإسماعلية', 12),
(13, 'السويس', 13),
(14, 'كفر الشيخ', 14),
(15, 'الفيوم', 15),
(16, 'بني سويف', 16),
(17, 'مطروح', 17),
(18, 'شمال سيناء', 18),
(19, 'جنوب سيناء', 19),
(20, 'المنيا', 20),
(21, 'أسيوط', 21),
(22, 'سوهاج', 22),
(23, 'قنا', 23),
(24, 'البحر الأحمر', 24),
(25, 'الأقصر', 25),
(26, 'أسوان', 26),
(27, 'الواحات', 27),
(28, 'الوادي الجديد', 28);

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finished` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`id`, `title`, `description`, `price`, `time`, `finished`, `created_at`, `updated_at`) VALUES
(1, 'مسابقة 1', 'وصف', '50.00', 'يومين', 0, '2022-09-15 12:43:43', '2022-09-15 12:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `competition_messages`
--

CREATE TABLE `competition_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_enName` varchar(100) NOT NULL DEFAULT '',
  `country_arName` varchar(100) NOT NULL DEFAULT '',
  `country_enNationality` varchar(100) NOT NULL DEFAULT '',
  `country_arNationality` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_code`, `country_enName`, `country_arName`, `country_enNationality`, `country_arNationality`) VALUES
('AF', 'Afghanistan', 'أفغانستان', 'Afghan', 'أفغانستاني'),
('AL', 'Albania', 'ألبانيا', 'Albanian', 'ألباني'),
('AX', 'Aland Islands', 'جزر آلاند', 'Aland Islander', 'آلاندي'),
('DZ', 'Algeria', 'الجزائر', 'Algerian', 'جزائري'),
('AS', 'American Samoa', 'ساموا-الأمريكي', 'American Samoan', 'أمريكي سامواني'),
('AD', 'Andorra', 'أندورا', 'Andorran', 'أندوري'),
('AO', 'Angola', 'أنغولا', 'Angolan', 'أنقولي'),
('AI', 'Anguilla', 'أنغويلا', 'Anguillan', 'أنغويلي'),
('AQ', 'Antarctica', 'أنتاركتيكا', 'Antarctican', 'أنتاركتيكي'),
('AG', 'Antigua and Barbuda', 'أنتيغوا وبربودا', 'Antiguan', 'بربودي'),
('AR', 'Argentina', 'الأرجنتين', 'Argentinian', 'أرجنتيني'),
('AM', 'Armenia', 'أرمينيا', 'Armenian', 'أرميني'),
('AW', 'Aruba', 'أروبه', 'Aruban', 'أوروبهيني'),
('AU', 'Australia', 'أستراليا', 'Australian', 'أسترالي'),
('AT', 'Austria', 'النمسا', 'Austrian', 'نمساوي'),
('AZ', 'Azerbaijan', 'أذربيجان', 'Azerbaijani', 'أذربيجاني'),
('BS', 'Bahamas', 'الباهاماس', 'Bahamian', 'باهاميسي'),
('BH', 'Bahrain', 'البحرين', 'Bahraini', 'بحريني'),
('BD', 'Bangladesh', 'بنغلاديش', 'Bangladeshi', 'بنغلاديشي'),
('BB', 'Barbados', 'بربادوس', 'Barbadian', 'بربادوسي'),
('BY', 'Belarus', 'روسيا البيضاء', 'Belarusian', 'روسي'),
('BE', 'Belgium', 'بلجيكا', 'Belgian', 'بلجيكي'),
('BZ', 'Belize', 'بيليز', 'Belizean', 'بيليزي'),
('BJ', 'Benin', 'بنين', 'Beninese', 'بنيني'),
('BL', 'Saint Barthelemy', 'سان بارتيلمي', 'Saint Barthelmian', 'سان بارتيلمي'),
('BM', 'Bermuda', 'جزر برمودا', 'Bermudan', 'برمودي'),
('BT', 'Bhutan', 'بوتان', 'Bhutanese', 'بوتاني'),
('BO', 'Bolivia', 'بوليفيا', 'Bolivian', 'بوليفي'),
('BA', 'Bosnia and Herzegovina', 'البوسنة و الهرسك', 'Bosnian / Herzegovinian', 'بوسني/هرسكي'),
('BW', 'Botswana', 'بوتسوانا', 'Botswanan', 'بوتسواني'),
('BV', 'Bouvet Island', 'جزيرة بوفيه', 'Bouvetian', 'بوفيهي'),
('BR', 'Brazil', 'البرازيل', 'Brazilian', 'برازيلي'),
('IO', 'British Indian Ocean Territory', 'إقليم المحيط الهندي البريطاني', 'British Indian Ocean Territory', 'إقليم المحيط الهندي البريطاني'),
('BN', 'Brunei Darussalam', 'بروني', 'Bruneian', 'بروني'),
('BG', 'Bulgaria', 'بلغاريا', 'Bulgarian', 'بلغاري'),
('BF', 'Burkina Faso', 'بوركينا فاسو', 'Burkinabe', 'بوركيني'),
('BI', 'Burundi', 'بوروندي', 'Burundian', 'بورونيدي'),
('KH', 'Cambodia', 'كمبوديا', 'Cambodian', 'كمبودي'),
('CM', 'Cameroon', 'كاميرون', 'Cameroonian', 'كاميروني'),
('CA', 'Canada', 'كندا', 'Canadian', 'كندي'),
('CV', 'Cape Verde', 'الرأس الأخضر', 'Cape Verdean', 'الرأس الأخضر'),
('KY', 'Cayman Islands', 'جزر كايمان', 'Caymanian', 'كايماني'),
('CF', 'Central African Republic', 'جمهورية أفريقيا الوسطى', 'Central African', 'أفريقي'),
('TD', 'Chad', 'تشاد', 'Chadian', 'تشادي'),
('CL', 'Chile', 'شيلي', 'Chilean', 'شيلي'),
('CN', 'China', 'الصين', 'Chinese', 'صيني'),
('CX', 'Christmas Island', 'جزيرة عيد الميلاد', 'Christmas Islander', 'جزيرة عيد الميلاد'),
('CC', 'Cocos (Keeling) Islands', 'جزر كوكوس', 'Cocos Islander', 'جزر كوكوس'),
('CO', 'Colombia', 'كولومبيا', 'Colombian', 'كولومبي'),
('KM', 'Comoros', 'جزر القمر', 'Comorian', 'جزر القمر'),
('CG', 'Congo', 'الكونغو', 'Congolese', 'كونغي'),
('CK', 'Cook Islands', 'جزر كوك', 'Cook Islander', 'جزر كوك'),
('CR', 'Costa Rica', 'كوستاريكا', 'Costa Rican', 'كوستاريكي'),
('HR', 'Croatia', 'كرواتيا', 'Croatian', 'كوراتي'),
('CU', 'Cuba', 'كوبا', 'Cuban', 'كوبي'),
('CY', 'Cyprus', 'قبرص', 'Cypriot', 'قبرصي'),
('CW', 'Curaçao', 'كوراساو', 'Curacian', 'كوراساوي'),
('CZ', 'Czech Republic', 'الجمهورية التشيكية', 'Czech', 'تشيكي'),
('DK', 'Denmark', 'الدانمارك', 'Danish', 'دنماركي'),
('DJ', 'Djibouti', 'جيبوتي', 'Djiboutian', 'جيبوتي'),
('DM', 'Dominica', 'دومينيكا', 'Dominican', 'دومينيكي'),
('DO', 'Dominican Republic', 'الجمهورية الدومينيكية', 'Dominican', 'دومينيكي'),
('EC', 'Ecuador', 'إكوادور', 'Ecuadorian', 'إكوادوري'),
('EG', 'Egypt', 'مصر', 'Egyptian', 'مصري'),
('SV', 'El Salvador', 'إلسلفادور', 'Salvadoran', 'سلفادوري'),
('GQ', 'Equatorial Guinea', 'غينيا الاستوائي', 'Equatorial Guinean', 'غيني'),
('ER', 'Eritrea', 'إريتريا', 'Eritrean', 'إريتيري'),
('EE', 'Estonia', 'استونيا', 'Estonian', 'استوني'),
('ET', 'Ethiopia', 'أثيوبيا', 'Ethiopian', 'أثيوبي'),
('FK', 'Falkland Islands (Malvinas)', 'جزر فوكلاند', 'Falkland Islander', 'فوكلاندي'),
('FO', 'Faroe Islands', 'جزر فارو', 'Faroese', 'جزر فارو'),
('FJ', 'Fiji', 'فيجي', 'Fijian', 'فيجي'),
('FI', 'Finland', 'فنلندا', 'Finnish', 'فنلندي'),
('FR', 'France', 'فرنسا', 'French', 'فرنسي'),
('GF', 'French Guiana', 'غويانا الفرنسية', 'French Guianese', 'غويانا الفرنسية'),
('PF', 'French Polynesia', 'بولينيزيا الفرنسية', 'French Polynesian', 'بولينيزيي'),
('TF', 'French Southern and Antarctic Lands', 'أراض فرنسية جنوبية وأنتارتيكية', 'French', 'أراض فرنسية جنوبية وأنتارتيكية'),
('GA', 'Gabon', 'الغابون', 'Gabonese', 'غابوني'),
('GM', 'Gambia', 'غامبيا', 'Gambian', 'غامبي'),
('GE', 'Georgia', 'جيورجيا', 'Georgian', 'جيورجي'),
('DE', 'Germany', 'ألمانيا', 'German', 'ألماني'),
('GH', 'Ghana', 'غانا', 'Ghanaian', 'غاني'),
('GI', 'Gibraltar', 'جبل طارق', 'Gibraltar', 'جبل طارق'),
('GG', 'Guernsey', 'غيرنزي', 'Guernsian', 'غيرنزي'),
('GR', 'Greece', 'اليونان', 'Greek', 'يوناني'),
('GL', 'Greenland', 'جرينلاند', 'Greenlandic', 'جرينلاندي'),
('GD', 'Grenada', 'غرينادا', 'Grenadian', 'غرينادي'),
('GP', 'Guadeloupe', 'جزر جوادلوب', 'Guadeloupe', 'جزر جوادلوب'),
('GU', 'Guam', 'جوام', 'Guamanian', 'جوامي'),
('GT', 'Guatemala', 'غواتيمال', 'Guatemalan', 'غواتيمالي'),
('GN', 'Guinea', 'غينيا', 'Guinean', 'غيني'),
('GW', 'Guinea-Bissau', 'غينيا-بيساو', 'Guinea-Bissauan', 'غيني'),
('GY', 'Guyana', 'غيانا', 'Guyanese', 'غياني'),
('HT', 'Haiti', 'هايتي', 'Haitian', 'هايتي'),
('HM', 'Heard and Mc Donald Islands', 'جزيرة هيرد وجزر ماكدونالد', 'Heard and Mc Donald Islanders', 'جزيرة هيرد وجزر ماكدونالد'),
('HN', 'Honduras', 'هندوراس', 'Honduran', 'هندوراسي'),
('HK', 'Hong Kong', 'هونغ كونغ', 'Hongkongese', 'هونغ كونغي'),
('HU', 'Hungary', 'المجر', 'Hungarian', 'مجري'),
('IS', 'Iceland', 'آيسلندا', 'Icelandic', 'آيسلندي'),
('IN', 'India', 'الهند', 'Indian', 'هندي'),
('IM', 'Isle of Man', 'جزيرة مان', 'Manx', 'ماني'),
('ID', 'Indonesia', 'أندونيسيا', 'Indonesian', 'أندونيسيي'),
('IR', 'Iran', 'إيران', 'Iranian', 'إيراني'),
('IQ', 'Iraq', 'العراق', 'Iraqi', 'عراقي'),
('IE', 'Ireland', 'إيرلندا', 'Irish', 'إيرلندي'),
('IL', 'Israel', 'إسرائيل', 'Israeli', 'إسرائيلي'),
('IT', 'Italy', 'إيطاليا', 'Italian', 'إيطالي'),
('CI', 'Ivory Coast', 'ساحل العاج', 'Ivory Coastian', 'ساحل العاج'),
('JE', 'Jersey', 'جيرزي', 'Jersian', 'جيرزي'),
('JM', 'Jamaica', 'جمايكا', 'Jamaican', 'جمايكي'),
('JP', 'Japan', 'اليابان', 'Japanese', 'ياباني'),
('JO', 'Jordan', 'الأردن', 'Jordanian', 'أردني'),
('KZ', 'Kazakhstan', 'كازاخستان', 'Kazakh', 'كازاخستاني'),
('KE', 'Kenya', 'كينيا', 'Kenyan', 'كيني'),
('KI', 'Kiribati', 'كيريباتي', 'I-Kiribati', 'كيريباتي'),
('KP', 'Korea(North Korea)', 'كوريا الشمالية', 'North Korean', 'كوري'),
('KR', 'Korea(South Korea)', 'كوريا الجنوبية', 'South Korean', 'كوري'),
('XK', 'Kosovo', 'كوسوفو', 'Kosovar', 'كوسيفي'),
('KW', 'Kuwait', 'الكويت', 'Kuwaiti', 'كويتي'),
('KG', 'Kyrgyzstan', 'قيرغيزستان', 'Kyrgyzstani', 'قيرغيزستاني'),
('LA', 'Lao PDR', 'لاوس', 'Laotian', 'لاوسي'),
('LV', 'Latvia', 'لاتفيا', 'Latvian', 'لاتيفي'),
('LB', 'Lebanon', 'لبنان', 'Lebanese', 'لبناني'),
('LS', 'Lesotho', 'ليسوتو', 'Basotho', 'ليوسيتي'),
('LR', 'Liberia', 'ليبيريا', 'Liberian', 'ليبيري'),
('LY', 'Libya', 'ليبيا', 'Libyan', 'ليبي'),
('LI', 'Liechtenstein', 'ليختنشتين', 'Liechtenstein', 'ليختنشتيني'),
('LT', 'Lithuania', 'لتوانيا', 'Lithuanian', 'لتوانيي'),
('LU', 'Luxembourg', 'لوكسمبورغ', 'Luxembourger', 'لوكسمبورغي'),
('LK', 'Sri Lanka', 'سريلانكا', 'Sri Lankian', 'سريلانكي'),
('MO', 'Macau', 'ماكاو', 'Macanese', 'ماكاوي'),
('MK', 'Macedonia', 'مقدونيا', 'Macedonian', 'مقدوني'),
('MG', 'Madagascar', 'مدغشقر', 'Malagasy', 'مدغشقري'),
('MW', 'Malawi', 'مالاوي', 'Malawian', 'مالاوي'),
('MY', 'Malaysia', 'ماليزيا', 'Malaysian', 'ماليزي'),
('MV', 'Maldives', 'المالديف', 'Maldivian', 'مالديفي'),
('ML', 'Mali', 'مالي', 'Malian', 'مالي'),
('MT', 'Malta', 'مالطا', 'Maltese', 'مالطي'),
('MH', 'Marshall Islands', 'جزر مارشال', 'Marshallese', 'مارشالي'),
('MQ', 'Martinique', 'مارتينيك', 'Martiniquais', 'مارتينيكي'),
('MR', 'Mauritania', 'موريتانيا', 'Mauritanian', 'موريتانيي'),
('MU', 'Mauritius', 'موريشيوس', 'Mauritian', 'موريشيوسي'),
('YT', 'Mayotte', 'مايوت', 'Mahoran', 'مايوتي'),
('MX', 'Mexico', 'المكسيك', 'Mexican', 'مكسيكي'),
('FM', 'Micronesia', 'مايكرونيزيا', 'Micronesian', 'مايكرونيزيي'),
('MD', 'Moldova', 'مولدافيا', 'Moldovan', 'مولديفي'),
('MC', 'Monaco', 'موناكو', 'Monacan', 'مونيكي'),
('MN', 'Mongolia', 'منغوليا', 'Mongolian', 'منغولي'),
('ME', 'Montenegro', 'الجبل الأسود', 'Montenegrin', 'الجبل الأسود'),
('MS', 'Montserrat', 'مونتسيرات', 'Montserratian', 'مونتسيراتي'),
('MA', 'Morocco', 'المغرب', 'Moroccan', 'مغربي'),
('MZ', 'Mozambique', 'موزمبيق', 'Mozambican', 'موزمبيقي'),
('MM', 'Myanmar', 'ميانمار', 'Myanmarian', 'ميانماري'),
('NA', 'Namibia', 'ناميبيا', 'Namibian', 'ناميبي'),
('NR', 'Nauru', 'نورو', 'Nauruan', 'نوري'),
('NP', 'Nepal', 'نيبال', 'Nepalese', 'نيبالي'),
('NL', 'Netherlands', 'هولندا', 'Dutch', 'هولندي'),
('AN', 'Netherlands Antilles', 'جزر الأنتيل الهولندي', 'Dutch Antilier', 'هولندي'),
('NC', 'New Caledonia', 'كاليدونيا الجديدة', 'New Caledonian', 'كاليدوني'),
('NZ', 'New Zealand', 'نيوزيلندا', 'New Zealander', 'نيوزيلندي'),
('NI', 'Nicaragua', 'نيكاراجوا', 'Nicaraguan', 'نيكاراجوي'),
('NE', 'Niger', 'النيجر', 'Nigerien', 'نيجيري'),
('NG', 'Nigeria', 'نيجيريا', 'Nigerian', 'نيجيري'),
('NU', 'Niue', 'ني', 'Niuean', 'ني'),
('NF', 'Norfolk Island', 'جزيرة نورفولك', 'Norfolk Islander', 'نورفوليكي'),
('MP', 'Northern Mariana Islands', 'جزر ماريانا الشمالية', 'Northern Marianan', 'ماريني'),
('NO', 'Norway', 'النرويج', 'Norwegian', 'نرويجي'),
('OM', 'Oman', 'عمان', 'Omani', 'عماني'),
('PK', 'Pakistan', 'باكستان', 'Pakistani', 'باكستاني'),
('PW', 'Palau', 'بالاو', 'Palauan', 'بالاوي'),
('PS', 'Palestine', 'فلسطين', 'Palestinian', 'فلسطيني'),
('PA', 'Panama', 'بنما', 'Panamanian', 'بنمي'),
('PG', 'Papua New Guinea', 'بابوا غينيا الجديدة', 'Papua New Guinean', 'بابوي'),
('PY', 'Paraguay', 'باراغواي', 'Paraguayan', 'بارغاوي'),
('PE', 'Peru', 'بيرو', 'Peruvian', 'بيري'),
('PH', 'Philippines', 'الفليبين', 'Filipino', 'فلبيني'),
('PN', 'Pitcairn', 'بيتكيرن', 'Pitcairn Islander', 'بيتكيرني'),
('PL', 'Poland', 'بولندا', 'Polish', 'بولندي'),
('PT', 'Portugal', 'البرتغال', 'Portuguese', 'برتغالي'),
('PR', 'Puerto Rico', 'بورتو ريكو', 'Puerto Rican', 'بورتي'),
('QA', 'Qatar', 'قطر', 'Qatari', 'قطري'),
('RE', 'Reunion Island', 'ريونيون', 'Reunionese', 'ريونيوني'),
('RO', 'Romania', 'رومانيا', 'Romanian', 'روماني'),
('RU', 'Russian', 'روسيا', 'Russian', 'روسي'),
('RW', 'Rwanda', 'رواندا', 'Rwandan', 'رواندا'),
('KN', 'Saint Kitts and Nevis', 'سانت كيتس ونيفس,', 'Kittitian/Nevisian', 'سانت كيتس ونيفس'),
('MF', 'Saint Martin (French part)', 'ساينت مارتن فرنسي', 'St. Martian(French)', 'ساينت مارتني فرنسي'),
('SX', 'Sint Maarten (Dutch part)', 'ساينت مارتن هولندي', 'St. Martian(Dutch)', 'ساينت مارتني هولندي'),
('LC', 'Saint Pierre and Miquelon', 'سان بيير وميكلون', 'St. Pierre and Miquelon', 'سان بيير وميكلوني'),
('VC', 'Saint Vincent and the Grenadines', 'سانت فنسنت وجزر غرينادين', 'Saint Vincent and the Grenadines', 'سانت فنسنت وجزر غرينادين'),
('WS', 'Samoa', 'ساموا', 'Samoan', 'ساموي'),
('SM', 'San Marino', 'سان مارينو', 'Sammarinese', 'ماريني'),
('ST', 'Sao Tome and Principe', 'ساو تومي وبرينسيبي', 'Sao Tomean', 'ساو تومي وبرينسيبي'),
('SA', 'Saudi Arabia', 'المملكة العربية السعودية', 'Saudi Arabian', 'سعودي'),
('SN', 'Senegal', 'السنغال', 'Senegalese', 'سنغالي'),
('RS', 'Serbia', 'صربيا', 'Serbian', 'صربي'),
('SC', 'Seychelles', 'سيشيل', 'Seychellois', 'سيشيلي'),
('SL', 'Sierra Leone', 'سيراليون', 'Sierra Leonean', 'سيراليوني'),
('SG', 'Singapore', 'سنغافورة', 'Singaporean', 'سنغافوري'),
('SK', 'Slovakia', 'سلوفاكيا', 'Slovak', 'سولفاكي'),
('SI', 'Slovenia', 'سلوفينيا', 'Slovenian', 'سولفيني'),
('SB', 'Solomon Islands', 'جزر سليمان', 'Solomon Island', 'جزر سليمان'),
('SO', 'Somalia', 'الصومال', 'Somali', 'صومالي'),
('ZA', 'South Africa', 'جنوب أفريقيا', 'South African', 'أفريقي'),
('GS', 'South Georgia and the South Sandwich', 'المنطقة القطبية الجنوبية', 'South Georgia and the South Sandwich', 'لمنطقة القطبية الجنوبية'),
('SS', 'South Sudan', 'السودان الجنوبي', 'South Sudanese', 'سوادني جنوبي'),
('ES', 'Spain', 'إسبانيا', 'Spanish', 'إسباني'),
('SH', 'Saint Helena', 'سانت هيلانة', 'St. Helenian', 'هيلاني'),
('SD', 'Sudan', 'السودان', 'Sudanese', 'سوداني'),
('SR', 'Suriname', 'سورينام', 'Surinamese', 'سورينامي'),
('SJ', 'Svalbard and Jan Mayen', 'سفالبارد ويان ماين', 'Svalbardian/Jan Mayenian', 'سفالبارد ويان ماين'),
('SZ', 'Swaziland', 'سوازيلند', 'Swazi', 'سوازيلندي'),
('SE', 'Sweden', 'السويد', 'Swedish', 'سويدي'),
('CH', 'Switzerland', 'سويسرا', 'Swiss', 'سويسري'),
('SY', 'Syria', 'سوريا', 'Syrian', 'سوري'),
('TW', 'Taiwan', 'تايوان', 'Taiwanese', 'تايواني'),
('TJ', 'Tajikistan', 'طاجيكستان', 'Tajikistani', 'طاجيكستاني'),
('TZ', 'Tanzania', 'تنزانيا', 'Tanzanian', 'تنزانيي'),
('TH', 'Thailand', 'تايلندا', 'Thai', 'تايلندي'),
('TL', 'Timor-Leste', 'تيمور الشرقية', 'Timor-Lestian', 'تيموري'),
('TG', 'Togo', 'توغو', 'Togolese', 'توغي'),
('TK', 'Tokelau', 'توكيلاو', 'Tokelaian', 'توكيلاوي'),
('TO', 'Tonga', 'تونغا', 'Tongan', 'تونغي'),
('TT', 'Trinidad and Tobago', 'ترينيداد وتوباغو', 'Trinidadian/Tobagonian', 'ترينيداد وتوباغو'),
('TN', 'Tunisia', 'تونس', 'Tunisian', 'تونسي'),
('TR', 'Turkey', 'تركيا', 'Turkish', 'تركي'),
('TM', 'Turkmenistan', 'تركمانستان', 'Turkmen', 'تركمانستاني'),
('TC', 'Turks and Caicos Islands', 'جزر توركس وكايكوس', 'Turks and Caicos Islands', 'جزر توركس وكايكوس'),
('TV', 'Tuvalu', 'توفالو', 'Tuvaluan', 'توفالي'),
('UG', 'Uganda', 'أوغندا', 'Ugandan', 'أوغندي'),
('UA', 'Ukraine', 'أوكرانيا', 'Ukrainian', 'أوكراني'),
('AE', 'United Arab Emirates', 'الإمارات العربية المتحدة', 'Emirati', 'إماراتي'),
('GB', 'United Kingdom', 'المملكة المتحدة', 'British', 'بريطاني'),
('US', 'United States', 'الولايات المتحدة', 'American', 'أمريكي'),
('UM', 'US Minor Outlying Islands', 'قائمة الولايات والمناطق الأمريكية', 'US Minor Outlying Islander', 'أمريكي'),
('UY', 'Uruguay', 'أورغواي', 'Uruguayan', 'أورغواي'),
('UZ', 'Uzbekistan', 'أوزباكستان', 'Uzbek', 'أوزباكستاني'),
('VU', 'Vanuatu', 'فانواتو', 'Vanuatuan', 'فانواتي'),
('VE', 'Venezuela', 'فنزويلا', 'Venezuelan', 'فنزويلي'),
('VN', 'Vietnam', 'فيتنام', 'Vietnamese', 'فيتنامي'),
('VI', 'Virgin Islands (U.S.)', 'الجزر العذراء الأمريكي', 'American Virgin Islander', 'أمريكي'),
('VA', 'Vatican City', 'فنزويلا', 'Vatican', 'فاتيكاني'),
('WF', 'Wallis and Futuna Islands', 'والس وفوتونا', 'Wallisian/Futunan', 'فوتوني'),
('EH', 'Western Sahara', 'الصحراء الغربية', 'Sahrawian', 'صحراوي'),
('YE', 'Yemen', 'اليمن', 'Yemeni', 'يمني'),
('ZM', 'Zambia', 'زامبيا', 'Zambian', 'زامبياني'),
('ZW', 'Zimbabwe', 'زمبابوي', 'Zimbabwean', 'زمبابوي');

-- --------------------------------------------------------

--
-- Table structure for table `draws`
--

CREATE TABLE `draws` (
  `draw_id` bigint(20) NOT NULL,
  `draw_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `draw_way` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `draw_amount` decimal(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `title`, `price`, `user_id`, `confirmed`, `created_at`, `updated_at`) VALUES
(1, '202209182042Capture.PNG', 'a', 6.00, 1, 2, '2022-09-18 18:42:36', '2022-09-20 15:29:50'),
(2, '202209182218eqe.PNG', 'test', 1.00, 1, 1, '2022-09-18 20:18:35', '2022-09-20 15:26:12'),
(3, '202209182218screencapture-127-0-0-1-8000-trading-2022-09-18-13_04_35 (1).png', 'test2', 0.00, 1, 1, '2022-09-18 20:18:56', '2022-09-21 20:51:29'),
(4, '202209182219screencapture-127-0-0-1-8000-new-order-2022-09-18-17_19_21.png', 'test3', 100.00, 1, 1, '2022-09-18 20:19:18', '2022-09-21 20:51:28'),
(6, '202209201803asdasd.PNG', 'test', 6.00, 1, 1, '2022-09-20 16:03:50', '2022-09-21 20:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_price` decimal(8,2) NOT NULL,
  `link_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`link_id`, `link_name`, `link_url`, `link_price`, `link_type`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '60.00', 'youtube', '2022-09-19 07:51:05', '2022-09-19 07:51:05'),
(2, 'مشاهدة فيديو', 'https://www.youtube.com/watch?v=wt-REOpdXCg', '10.00', 'youtube', '2022-09-21 08:26:39', '2022-09-21 08:26:39'),
(3, 'عمل لايك لصفحة', 'https://www.facebook.com/walealsham', '10.00', 'facebook', '2022-09-21 08:35:05', '2022-09-21 08:35:05'),
(4, 'مشاهدة فيديو', 'https://www.tiktok.com/@joomosa/video/7144710630849711366?is_copy_url=1&is_from_webapp=v1', '10.00', 'tiktok', '2022-09-21 08:57:14', '2022-09-21 08:57:14'),
(5, 'مشاهدة فيديو', 'https://www.youtube.com/watch?v=wt-REOpdXCg', '0.10', 'youtube', '2022-09-21 09:05:52', '2022-09-21 09:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `metals`
--

CREATE TABLE `metals` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `buy_price` text NOT NULL,
  `sell_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metals`
--

INSERT INTO `metals` (`id`, `name`, `buy_price`, `sell_price`) VALUES
(1, 'ذهب', '12', '15'),
(2, 'فضه', '20', '21'),
(3, 'الالمونيوم', '11', '15');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_08_20_191010_create_draws_table', 1),
(5, '2022_08_20_191021_create_roles_table', 1),
(6, '2022_08_20_210709_create_links_table', 1),
(7, '2022_08_24_140013_create_share_us_table', 1),
(8, '2022_08_27_001754_create_competitions_table', 1),
(9, '2022_08_27_095223_create_competition_messages_table', 1),
(10, '2022_08_28_203853_create_images_table', 1),
(11, '2022_09_15_112740_create_services_table', 1),
(12, '2022_09_15_112827_create_service_types_table', 1),
(13, '2022_09_15_112851_create_service_categories_table', 1),
(14, '2022_09_15_113054_create_user_services_table', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `net_price` decimal(8,2) NOT NULL,
  `commission` decimal(8,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_type_id`, `name`, `description`, `url`, `quantity`, `net_price`, `commission`, `currency`, `created_at`, `updated_at`) VALUES
(2, 5, 'زيادة عدد المتابعين', 'زيادة عدد المتابعين', 'https://www.tiktok.com/en/', 1000, '50.00', '10.00', 'EGP', '2022-09-16 10:56:04', '2022-09-16 11:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`category_id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'سوشيال ميديا', '2022-09-15 12:54:39', '2022-09-15 12:54:39'),
(6, 'social', '2022-09-16 09:04:48', '2022-09-16 09:04:48'),
(8, 'معادن', '2022-09-19 11:06:59', '2022-09-19 11:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `home_page` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`id`, `category_id`, `type`, `status`, `home_page`, `created_at`, `updated_at`) VALUES
(4, 5, 'فيسبوك', 1, 0, '2022-09-15 16:15:18', '2022-09-15 16:15:18'),
(5, 5, 'يوتيوب', 1, 0, '2022-09-15 16:36:00', '2022-09-15 16:36:00'),
(6, 5, 'facebook', 1, 0, '2022-09-17 19:47:34', '2022-09-17 19:47:34'),
(7, 8, 'ذهب', 0, 0, '2022-09-19 11:08:07', '2022-09-19 11:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `share_us`
--

CREATE TABLE `share_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guest_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `quantity` text NOT NULL,
  `commission` text NOT NULL,
  `currency` text NOT NULL,
  `metal_type` int(50) NOT NULL,
  `trade_type` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`id`, `description`, `link`, `quantity`, `commission`, `currency`, `metal_type`, `trade_type`, `status`, `user_id`) VALUES
(2, 'عملية بيع ذهب', 'https://www.facebook.com/', '50 جرام', '10', 'EGP', 1, 1, 2, 2),
(3, 'عملية بيع فضه', 'https://www.facebook.com/', '1000 جرام', '10', 'EGP', 1, 1, 1, 2),
(5, 'عملية بيع ذهب', 'https://www.facebook.com/', '50 جرام', '10', 'EGP', 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` decimal(8,2) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_phone`, `email`, `email_verified_at`, `password`, `role_id`, `gender`, `city`, `country`, `facebook_link`, `balance`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'karim', '01115161360', 'karimohamed2002@gmail.com', '2022-09-15 12:14:42', '$2y$10$DG17sOtwjo1wZS9tO4/1fut7LlpIVp2xSo7CmZs5GAAQCcM4jjSv2', 1, 'Male', NULL, 'أذربيجان', NULL, NULL, NULL, '2022-09-15 12:13:59', '2022-09-15 12:14:42'),
(2, 'Mahmoud Samy', 'samy', 'sami.sam22xx@gmail.com', '2022-09-15 12:14:42', '$2y$10$lFBNaanw.Mpl6KFz5D1bxOkayP5pgbsYSoZU2xQpujJP1tIo7g.kq', 2, 'Male', NULL, 'أندورا', NULL, NULL, NULL, '2022-09-19 20:13:54', '2022-09-19 20:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_money` double(8,2) NOT NULL,
  `remain_money` double(8,2) NOT NULL DEFAULT 0.00,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `user_id`, `service_id`, `attachment`, `paid_money`, `remain_money`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '80', 50.00, 0.00, 'Accepted', '2022-09-16 12:06:43', '2022-09-16 20:21:04'),
(2, 1, 2, '900', 50.00, 0.00, 'Accepted', '2022-09-16 12:07:34', '2022-09-16 20:20:56'),
(3, 1, 2, '50', 50.00, 0.00, 'Declined', '2022-09-16 12:32:01', '2022-09-16 20:23:41'),
(4, 1, 2, '50', 50.00, 0.00, 'pending', '2022-09-18 12:57:34', '2022-09-18 12:57:34'),
(5, 1, 2, '111', 50.00, 0.00, 'pending', '2022-09-18 12:59:52', '2022-09-18 12:59:52'),
(6, 1, 2, '60', 50.00, 0.00, 'pending', '2022-09-18 13:40:27', '2022-09-18 13:40:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_category`
--
ALTER TABLE `ads_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_images`
--
ALTER TABLE `ads_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competition_messages`
--
ALTER TABLE `competition_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_code`);

--
-- Indexes for table `draws`
--
ALTER TABLE `draws`
  ADD PRIMARY KEY (`draw_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `metals`
--
ALTER TABLE `metals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_us`
--
ALTER TABLE `share_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ads_category`
--
ALTER TABLE `ads_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ads_images`
--
ALTER TABLE `ads_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `competition_messages`
--
ALTER TABLE `competition_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `draws`
--
ALTER TABLE `draws`
  MODIFY `draw_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `metals`
--
ALTER TABLE `metals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `share_us`
--
ALTER TABLE `share_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
