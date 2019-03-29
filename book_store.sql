-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 11:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `slug`, `about`, `image`, `created_at`, `updated_at`) VALUES
(16, 'Marcel Proust', 'marcel-proust', 'is list is generated from 119 \"best of\" book lists from a variety of great sources', 'marcel-proust-2019-03-19-5c90b44a56acc.png', '2019-03-19 03:20:10', '2019-03-19 03:20:10'),
(17, 'Miguel de Cervantes', 'miguel-de-cervantes', 'Miguel de CervantesMiguel de CervantesMiguel de CervantesMiguel de Cervantes', 'miguel-de-cervantes-2019-03-19-5c90b4b37fce0.png', '2019-03-19 03:21:55', '2019-03-19 03:21:55'),
(18, 'James Joyce', 'james-joyce', 'James JoyceJames JoyceJames JoyceJames JoyceJames JoyceJames JoyceJames JoyceJames JoyceJames JoyceJames JoyceJames JoyceJames Joyce', 'james-joyce-2019-03-19-5c90b4ccd0270.jpg', '2019-03-19 03:22:22', '2019-03-19 03:22:22'),
(19, 'F. Scott Fitzgerald', 'f-scott-fitzgerald', 'F. Scott FitzgeraldF. Scott FitzgeraldF. Scott FitzgeraldF. Scott FitzgeraldF. Scott Fitzgerald', 'f-scott-fitzgerald-2019-03-19-5c90b4e4114e6.JPG', '2019-03-19 03:22:45', '2019-03-19 03:22:45'),
(20, 'Herman Melville', 'herman-melville', 'Herman MelvilleHerman MelvilleHerman MelvilleHerman Melville', 'herman-melville-2019-03-19-5c90b5062da3f.png', '2019-03-19 03:23:18', '2019-03-19 03:23:18'),
(21, 'William Shakespeare', 'william-shakespeare', 'William ShakespeareWilliam ShakespeareWilliam ShakespeareWilliam Shakespeare', 'william-shakespeare-2019-03-19-5c90b526a1226.png', '2019-03-19 03:23:50', '2019-03-19 03:23:50'),
(22, 'Shuvo Sarker', 'shuvo-sarker', 'ssssssssss', 'shuvo-sarker-2019-03-21-5c93e0739bc5a.JPG', '2019-03-21 13:05:26', '2019-03-21 13:05:26'),
(26, 'আরিফ আজাদ', '', 'আরিফ আজাদ। জন্মেছেন চট্টগ্রাম। সোশ্যাল মিডিয়া অ্যাক্টিভিস্ট। লিখেন বিশ্বাসের কথা। বিচূর্ণ করেন অবিশ্বাসের আয়না। অমর একুশে গ্রন্থমেলা ২০১৭ -এ তার প্রথম গ্রন্থ ‘প্যারাডক্সিক্যাল সাজিদ)', '-2019-03-23-5c964a9682f73.png', '2019-03-23 09:02:47', '2019-03-23 09:02:47'),
(27, 'আয়মান সাদিক', '', 'জন্ম ২ সেপ্টেম্বর ১৯৯২ সালে । আয়মান সাদিক হচ্ছেন একজন বাংলাদেশী শিক্ষা উদ্যোক্তা এবং ইন্টারনেট ব্যক্তিত্ব। তিনি ২০১৫ সালে www.10minuteschool.com প্রতিষ্ঠা করেছেন। এটা এমন এক প্রতিষ্ঠান; যা অনলাইনে শিক্ষা বিষয়ক বিভিন্ন তথ্য এবং সহযোগীতা বিনামুল্যে দিয়ে থাকে। এই প্রতিষ্ঠান শ্রোতাদের (যারা এখান থেকে শিক্ষা গ্রহণ করে) জন্য দুই সহস্রাধিক ভিডিও তৈরী করেছে। এই প্রতিষ্ঠান মুলত ইংরেজি, গণিত এবং বিজ্ঞানের নানা বিষয় যা একাডেমিক সিলেবাসের আওতাভুক্ত এবং বিভিন্ন বিষয়ের উপর দক্ষতা কিভাবে বাড়ানো যায়; তা নিয়ে ভিডিও তৈরী করে। আয়মান সাদিক কুমিল্লার মুসলিম পরিবারের সন্তান। তাঁর পিতা ব্রিগেডিয়ার জেনারেল তায়েব বাংলাদেশ ইউনিভার্সিটি অব প্রফেশনালস-এর প্রধান আর্থিক কর্মকর্তা এবং তাঁর মাতা শারমিন আক্তার একজন গৃহিণী। আয়মান চট্টগ্রামের ক্যান্টনমেন্ট স্কুল এণ্ড কলেজে অধ্যয়ন করেছেন। তিনি উচ্চমাধ্যমিকে অধ্যয়ন করেছেন আদমজী ক্যান্টনমেন্ট পাবলিক স্কুল এণ্ড কলেজে। আয়মান ঢাকা বিশ্ববিদ্যালয়ের ব্যবসায় প্রশাসন থেকে বিবিএ (ব্যচেলর অব বিজনেস এডমিনিস্ট্রেশন) তে স্নাতক সম্পন্ন করেন। আয়মান শিক্ষা এবং প্রযুক্তির ক্ষেত্রে কাজ করেন। \"তাঁর www.10minuteschool.com\" হচ্ছে এমন একটি অনলাইন স্কুল যেখানে এসএসসি, এইচএসসি এবং বিভিন্ন পাবলিক বিশ্ববিদ্যালয়, মেডিক্যাল কলেজ ও ইঞ্জিনিয়ারিং ইন্সটিটিউটে ভর্তি পরীক্ষার জন্য কিভাবে পড়তে হবে, তার উপর ভিডিও লেকচার শ্রোতাদের জন্য তৈরী করা হয়।', '-2019-03-23-5c96887257d85.jpg', '2019-03-23 13:26:44', '2019-03-23 13:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `author_id` int(10) UNSIGNED DEFAULT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` int(11) DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  `edition` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `author_id`, `menu_id`, `name`, `slug`, `image`, `isbn`, `publisher`, `publication_date`, `page`, `edition`, `language`, `description`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(3, 9, 16, NULL, 'Marcel Proust', 'marcel-proust', 'marcel-proust-2019-03-19-5c90b741264de.jpg', '22222222222222', 'suvo', 1996, 222, '1', NULL, 'Swann\'s Way, the first part of A la recherche de temps perdu, Marcel Proust\'s seven-part cycle, was published in 1913. In it, Proust introduces the themes that run through the entire work. The narr..', 2222, 22, '2019-03-19 03:32:49', '2019-03-19 03:32:49'),
(4, 9, 17, NULL, 'Don Quixote', 'don-quixote', 'don-quixote-2019-03-19-5c90b7a19b163.jpg', '3333333333', 'fokir', 1997, 333, '3', NULL, 'Alonso Quixano, a retired country gentleman in his fifties, lives in an unnamed section of La Mancha with his niece and a housekeeper. He has become obsessed with books of chivalry,', 333, 3, '2019-03-19 03:34:25', '2019-03-19 03:34:25'),
(5, 10, 17, NULL, 'Ulysses', 'ulysses', 'ulysses-2019-03-19-5c90b7e673465.jpg', '3333333333', 'dddddddddddd', 1998, 222, '3', NULL, 'Ulysses chronicles the passage of Leopold Bloom through Dublin during an ordinary day, June 16, 1904. The title parallels and alludes to Odysseus (Latinised into Ulysses), the hero of Homer\'s Odyss.', 345, 33, '2019-03-19 03:35:34', '2019-03-19 03:35:34'),
(6, 12, 19, NULL, 'The Great Gatsby', 'the-great-gatsby', 'the-great-gatsby-2019-03-19-5c90b8205e200.jpg', '555555555555', 'kkkkkkkkkkk', 1998, 333, '5', NULL, 'The novel chronicles an era that Fitzgerald himself dubbed the \"Jazz Age\". Following the shock and chaos of World War I, American society enjoyed unprecedented levels of prosperity during the', 555, 55, '2019-03-19 03:36:32', '2019-03-19 03:36:32'),
(7, 15, 21, NULL, 'Moby Dick', 'moby-dick', 'moby-dick-2019-03-19-5c90b861801b0.jpg', '4444444442', 'olium', 1986, 666, '6', NULL, 'First published in 1851, Melville\'s masterpiece is, in Elizabeth Hardwick\'s words, \"the greatest novel in American literature.\" The saga of Captain Ahab and his monomaniacal pursuit of the white wh...', 444, 44, '2019-03-19 03:37:37', '2019-03-19 03:37:37'),
(8, 19, 20, NULL, 'Hamlet', 'hamlet', 'hamlet-2019-03-19-5c90b8a9548b3.jpg', '3333333', 'suvo', 2013, 222, '2', NULL, 'The Tragedy of Hamlet, Prince of Denmark, or more simply Hamlet, is a tragedy by William Shakespeare, believed to have been written between 1599 and 1601.', 3333, 33, '2019-03-19 03:38:49', '2019-03-19 03:38:49'),
(9, 16, 19, NULL, 'The Odyssey', 'the-odyssey', 'the-odyssey-2019-03-19-5c90b9e1bec34.jpg', '555555', 'homer', 1998, 444, '6', 'Bangla', 'The Odyssey is one of two major ancient Greek epic poems attributed to Homer. It is, in part, a sequel to the Iliad, the other work traditionally ascribed to Homer. The poem is fundamental to the m...', 555, 5, '2019-03-19 03:44:02', '2019-03-19 03:44:02'),
(10, 18, 20, 4, 'One Hundred Years of Solitude', 'one-hundred-years-of-solitude', 'one-hundred-years-of-solitude-2019-03-19-5c90ba6a712fc.jpg', '555555', 'ggggggg', 3456, 555, '2', 'english', 'One of the 20th century\'s enduring works, One Hundred Years of Solitude is a widely beloved and acclaimed novel known throughout the world, and the ultimate achievement in a Nobel Prize–winning car...', 555, 5, '2019-03-19 03:46:18', '2019-03-21 12:58:07'),
(11, 13, 20, 1, 'The Divine Comedy', 'the-divine-comedy', 'the-divine-comedy-2019-03-19-5c90baa7d3bf2.jpg', '44444444', 'rrrrrrr', 1994, 44, '1', 'hindi', 'Belonging in the immortal company of the great works of literature, Dante Alighieri\'s poetic masterpiece, The Divine Comedy, is a moving human drama, an unforgettable visionary journey through the ...', 455, 44, '2019-03-19 03:47:20', '2019-03-21 12:50:35'),
(12, 14, 18, NULL, 'e-book', 'e-book', 'e-book-2019-03-23-5c95c5eb617c9.jpg', '7777777777777', 'suvo', 1996, 88, '8', 'english', 'Model - Dell Inspiron 15-3573, Processor - Intel PQC Silver N5000, Processor Clock Speed - 1.10-2.70GHz, CPU Cache - 4MB, Display Size - 15.6\", Display Type - HD LED Display, Display Resolution - 1366 x 768, RAM - 4GB, RAM Type - DDR4, Storage - 500GB HDD, Graphics Chipset - Intel UHD Graphics 605, Graphics Memory - Shared, Networking - WiFi, Bluetooth, Card Reader, WebCam, Display Port - HDMI, Audio Port - Combo, USB Port - 2 x USB3.1 Gen 1, 1 x USB2.0, Battery - 4 Cell, Operating System - Free Dos, Weight - 2.21Kg, Color - Fog Grey, Part No - TURIS15GLK19053105P, Country of Origin - USA, Made in/ Assemble - China, Warranty - 2 Year (1 year for Batter and Adapter)', 123, 7, '2019-03-22 23:36:44', '2019-03-22 23:36:44'),
(13, 25, 26, NULL, 'প্যারাডক্সিক্যাল সাজিদ (হার্ডকভার)', 'প্যারাডক্সিক্যাল-সাজিদ-(হার্ডকভার)', '-2019-03-23-5c964bb3d1c75.jpg', '333333333333', NULL, 1996, 33, '1', 'Bangla', 'বিশ্বাসের কথা কতটা শক্ত করে বলা যায়? বিশ্বাসী প্রানের সুর কতটা অনুপম হতে পারে? বিশ্বাসকে যুক্তির দাঁড়িপাল্লায় মাপা কি খুব সহজ? অবিশ্বাসীকে কতটা মায়াভিরা স্পর্শে বিশ্বাসের শীতল পরশ দেয়া যায়? যুক্তিই মুক্তি নাকি বিশ্বাসের যুক্তিতে মুক্তি? এসবের উত্তর মিলতে পারে। \r\n\r\n\'প্যারাডক্সিক্যাল সাজিদ\' বইয়ের সূচিপত্র\r\n\r\n* একজন অবিশ্বাসীর বিশ্বাস / ১১ \r\n* ‘তাকাদির বনাম স্বাধীন ইচ্ছা’- ভ্ৰষ্টা কি এখানে বিতর্কিত? / ১৭ \r\n* স্ৰষ্টা খারাপ কাজের দায় নেন না কেন? / ২৬ \r\n* শূন্যস্থান থেকে স্রষ্টার দূরত্ব / ৩২\r\n* তাদের অন্তরে আল্লাহ মোহর মেরে দেন। সত্যিই কি তাই? / ৪০ \r\n* মুশরিকদের যেখানেই পাও, হত্যা করো / ৪৭ \r\n* স্রষ্টাকে কে সৃষ্টি করলো? / ৫৩\r\n* একটি সাম্প্রদায়িক আয়াত এবং... / ৬১\r\n* কোরআন কি সূর্যকে পানির নিচে ডুবে যাওয়ার কথা বলে? / ৬৬ \r\n* মুসলমানদের কোরবানি ঈদ এবং একজন মাতব্বরের অযাচিত মাতব্বরি / ৭৩ \r\n* কোরআন কি মুহাম্মদ (সাঃ) এর বানানো গ্ৰন্থ? / ৮২ \r\n* রিলেটিভিটির গল্প / ৯১ \r\n* A Letter to David-Jessus wasn\'t myth and he exited... / ৯৯ \r\n* কোরআন, আকাশ, ছাদ এবং একজন ব্যক্তির মিথ্যাচার / ১০৯ \r\n* আয়েশা (রাঃ) ও মুহাম্মদ (সাঃ) এর বিয়ে এবং কথিত নাপ্তিকদের কানাঘুষা / ১১৫ \r\n* কোরআন কি মুহাম্মদ (সাঃ) এর নিজের কথা? / ১২৪ \r\n* স্ৰষ্টা যদি দয়ালুই হবেন তাহলে জাহান্নাম কেন? / ১৩০ \r\n* কোরআন মতে পৃথিবী কি সমতল না গোলাকার? / ১৩৬ \r\n* একটি ডিএনএ\'র জবানবন্দী / ১৪৫ \r\n* কোরআনে বিজ্ঞান- কাকতালীয় না বাস্তবতা? / ১৫৫ \r\n* স্রষ্টা কি এমন কিছু বানাতে পারবে, যেটা স্রষ্টা নিজেই তুলতে পারবে না? / ১৬২ \r\n* ভেল্কিভাজির সাতকাহন / ১৭০ \r\n\r\n\'প্যারাডক্সিক্যাল সাজিদ\' বইয়ের প্ৰকাশকের কথা\r\n\r\nসভ্যতার শুরু থেকেই সত্য ও মিথ্যার ধারাবাহিক লড়াই। মানবতার সমাধান ইসলাম বরাবরই জাহেলিয়াতের ধারক-বাহকদের অপপ্রচার ও বিদ্বেষ মোকাবেলা করে আসছে। আধুনিক সভ্যতার এই সময়ে দাঁড়িয়েও সেই ধারা অব্যাহত আছে। স্যোসাল মিডিয়ার ক্রমবর্ধমান পরিসরকে সন্দেহের বীজ বোপন করছে। সন্দেহ থেকে সংশয়, সংশয় থেকে অবিশ্বাস। এভাবে এক অবিশ্বাসী প্রজন্মের গোঁড়াপত্তন হচ্ছে কিবোর্ডে। বিশ্বাসীদের সুশৃংখল চিন্তার দুনিয়ায়। কিছু কিছু তরুন-যুবা দিকভ্রান্তও হচ্ছে। রক্তক্ষরণ হচ্ছে মুসলিম মিল্লাতে। অবিশ্বাসীদের আপাত চমকপ্ৰদ প্রশ্ন ও চ্যালেঞ্জের মোকাবেলায় হিমশিম অবস্থা। জাহেলিয়াতের চ্যালেঞ্জ যেখানে, সেখানেই বিশ্বাসী প্ৰাণের যৌক্তিক লড়াই। এমনই এক বিশ্বাসী তরুন আরিফ আজাদ। অনলাইন দুনিয়ায় অবিশ্বাসীদের উখিত প্রশ্নের সাবলীল উত্তর দিয়ে অজস্র মানুষের প্রিয়ভাজন হয়েছেন। একজন তরুন এত চমৎকার ও যৌক্তিক ভাষায় ইসলামবিরোধীদের জবাব দিতে পারেন, ভাবতেই আশাবাদী মন জানান দেয়— আগামীর দিন শুধু সম্ভাবনার। “প্যারাডক্সিক্যাল সাজিদ বইটিতে গল্প ও সাহিত্যরস দিয়ে অবিশ্বাসীদের নানান প্রশ্নের জবাব দেয়া হয়েছে। বাংলা সাহিত্যের বাস্তব দুনিয়ায়ও থাকা উচিত। নাস্তিক্যবাদ ও ইসলামদ্রোহীদের অপপ্রচারের জবাবে অনেকেই লিখছেন, বলছেন। এই বইটি সেসব জবাবের ভিত্তিকে আরো মজবুত করবে। আমার বিশ্বাস বইটি তরুণ প্রজন্মের মনোজগতে এক তুমুল আলোড়ন তুলবে। আশা করি। বইটি পড়ে অবিশ্বাসীরাও নিমেহিভাবে ইসলাম নিয়ে চিন্তা করবেন। গাডিয়ান পাবলিকেশন্স এই অসাধারন বইটি প্রকাশ করতে পেরে অত্যন্ত আনন্দিত। স্যোসাল মিডিয়ায় লেখাগুলোকে পাণ্ডুলিপি আকারে পাঠকদের হাতে তুলে দেয়ার কাজটা অনেক চ্যালেঞ্জের। বইটিকে যথাসম্ভব সুন্দর ও নিখুত করতে আন্তরিকতা ও পরিশ্রমের কোন ত্রুটি ছিল না। সম্মানিত পাঠকবৃন্দ আমাদের যোগ্যতা ও সীমাবদ্ধতা বিবেচনায় নিয়ে ত্রুটি-বিচূতি ক্ষমাসুন্দর দৃষ্টিতে দেখবেন বলে বিশ্বাস করছি। লেখকের স্বকীয়তা এবং ভাষার বৈচিত্র বিবেচনায় প্রয়োজনে ইংরেজী শব্দও উল্লেখ করা হয়েছে।', 333, 3, '2019-03-23 09:07:32', '2019-03-23 11:48:27'),
(14, 8, 16, NULL, 'স্মার্ট ইংলিশ স্মার্ট ওয়ে টু লার্ন ইংলিশ (পেপারব্যাক)', 'স্মার্ট-ইংলিশ-স্মার্ট-ওয়ে-টু-লার্ন-ইংলিশ-(পেপারব্যাক)', '-2019-03-23-5c96677550c6e.jpg', '34657869080', 'rokomari', 2017, 200, '1', 'Bangla', 'ইংরেজি শেখার অনন্য বই- Smart English\r\n\r\n✪ ৫০০ দৈনন্দিন ইংরেজি ডায়ালগ\r\n✪ ইংরেজি বাক্য তৈরির ৭০টি গুরুত্বপূর্ণ রুল (Structure)\r\n✪ বিষয়ভিত্তিক ভোকাবুলারি (শব্দের অর্থ)\r\n✪ ইংরেজি বাক্যের কমন মিসটেক ও গ্রামাটিক্যাল রুল অনুযায়ী সংশোধন\r\n✪ ইংরেজি বড় বাক্য তৈরির টেকনিক/ফ্রিহ্যান্ড রাইটিং\r\n✪ কোন পরিবেশে ইংরেজিতে কি বলবেন \r\n(ধন্যবাদ, বিদায়, অভিনন্দন, উৎসাহ, মতামত ইত্যাদি)\r\n✪ বিষয়ভিত্তিক ইংরেজি কনভার্সেশন\r\n✪ গুরুত্বপূর্ণ Linking word/Connectors\r\n✪ Wh question\r\n✪ আরো অনেক গুরুত্বপূর্ণ বিষয়', 500, 70, '2019-03-23 11:05:58', '2019-03-23 11:05:58'),
(15, 10, 17, NULL, 'স্মার্ট-ইংলিশ', 'ahahaha-ahahaha-ajaja', '-2019-03-23-5c966ab3b1000.png', '11', '222', 2017, 122, '2', 'Bangla', 'afreresfse', 1111, 22, '2019-03-23 11:19:48', '2019-03-23 11:19:48'),
(16, 9, 17, NULL, 'Shuvo Sarker', 'বাংলাদেশ-ব্যাংকের-রিজার্ভের-অর্থ-চুরির-ঘটনায়-ফিলিপাইনের', 'shuvo-sarker-2019-03-23-5c966bdd7ab81.jpg', '335775768', 'rokomari', 2017, 23232, 'sddsd', 'Bangla', 'sdvdvdsd', 354, 44, '2019-03-23 11:24:45', '2019-03-23 11:24:45'),
(17, 11, 19, NULL, 'প্যারাময় লাইফের প্যারাসিটামল', 'প্যারাময়-লাইফের-প্যারাসিটামল', '-2019-03-23-5c966eae5acc2.jpg', '44332324342', 'rokomari', 2017, 1111, '8', 'Bangla', '<p><strong>বইটি কাদের জন্য? </strong></p>\r\n<p>জ্বর-সর্দি-কাশি হলে ট্যাবলেট খুঁজো। ডাক্তারের কাছে ছুটো। অথচ লাইফে একটা পর একটা প্যারা এসে ফিউচার ত্যাড়া করে চলে যাচ্ছে। অন্যরা হাসি মুখে বাম্বু দিচ্ছে। একটু ঘাটতির জন্য লক্ষ্যগুলো হারিয়ে যাচ্ছে। এমন যাদের অবস্থা তাদের বাড়তি চাপ না নিয়ে সিচুয়েশনগুলো উতরে যাওয়ার জন্য এই বই। এই বইতে কী আছে? আমাদের লাইফের প্যারাগুলো হচ্ছে- ফিউচারে কী হবো সেটা বুঝতে না পারার প্যারা, নিজের চাইতেও কম কোয়ালিটির পোলাপান থেকে পিছিয়ে পরার প্যারা, অপরিচিতদের সাথে কথা বলতে না পারার প্যারা। এমনকি আজীবন সিঙ্গেল থেকে যাওয়ার প্যারাও আছে। তা ছাড়া পড়া মনে না থাকা, পড়তে ইচ্ছে না করা, কিংবা পরীক্ষা চলে আসার টেনশন শুরু হলে তো প্যারা ভাইয়ারা ট্রাক ভাড়া করে নিজ দায়িত্বেই চলে আসে। আর এতো এতো প্যারার বস প্যারা হচ্ছে- সবই বুঝি, কীভাবে করতে হবে সেটাও জানি। তারপরেও শেষ পর্যন্ত কিছুই করতে না পারার প্যারা। এই রকম প্রায় ২৫টা প্যারা নিরাময় করার ইফেক্টিভ টেকনিক নিয়েই এই বই- প্যারাময় লাইফের প্যারাসিটামল। কেন এই বইটি পড়া দরকার? কারণ একটা সময় পরে আমাদের লাইফে স্যারদের ঝাড়ি, আম্মুর বেডঝাড়ুর বাড়ি, বাবার চোখ রাঙ্গানি থাকে না বলেই আমাদের কলেজ-ভার্সিটির লাইফগুলো হয়ে উঠে দড়ি ছাড়া গরু, রাস্তা ছাড়া গাড়ি, আর চিনি ছাড়া শরবতের মতো। সেই শরবতকে আরো তিক্ত করে ইয়াম্মি করলার জুস বানিয়ে ফেলে চারপাশের দুস্টু প্যারাগুলো। বইটি সম্পর্কে চমক হাসান যা বললেন আমাদের আমাদের তরুণ প্রজন্মের একটা বড় অংশ জীবনের একটা পর্যায়ে এসে হতাশ হয়ে পড়ে। কী করা উচিত, কীভাবে করা উচিত সেটা নিয়ে তারা বিভ্রান্ত অবস্থায় থাকে। হতাশা থেকে জন্ম নেয় অনীহা, অনীহা থেকে থেকে ব্যর্থতা, আর ব্যর্থতা থেকে আবার হতাশা- এই ব্যর্থতার দুষ্ট চক্রে আবর্তিত মানুষগুলোর বৃত্তকে ভাঙার জন্য নিরলস চেষ্টা করে চলেছেন ঝংকার মাহবুব। তার প্যারাময় লাইফের প্যারাসিটামল এমন আরেকটি প্রয়াস। পুরো বইটিতে যেন লেখক কথা তার খুব কাছের কোনো ছোট ভাই বা বোনকে। বইয়ে পাঠকের প্রতি সম্বোধনটাই বেশ চমকপ্রদ। ভাষা একেবারেই কথ্য ভাষায়। দারুণ সব টুলস রয়েছে বইটিতে- যেগুলো নিজেকে যাচাই করার জন্য দারুণ সহায়ক হবে। এটেনশন চুরি হয়ে যাচ্ছে কিনা সেই মিটার, সারাদিন কীভাবে কাটানো উচিত তার ঘণ্টাওয়ারি নকশা, জীবন , জীবনের যাচাইয়ে সূর্য আর মেঘের হিসাব, জীবনটা গঠনমূলক কাজে ব্যয় হচ্ছে নাকি হারিয়ে যাচ্ছে তার হিসেব- এগুলো পাঠকের সঙ্গে বইটিকে আরও গভীরভাবে যুক্ত করে। চমক হাসান</p>', 111, 10, '2019-03-23 11:26:53', '2019-03-23 13:09:50'),
(18, 26, 27, NULL, 'ভাল্লাগে না', 'ভাল্লাগে-না', '-2019-03-23-5c968bda9b3d0.jpg', '222222', 'অন্তিক মাহমুদ', 1996, 222, '2', 'Bangla', '<p style=\"text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bolder; display: block; margin-top: 10px; color: #555555; font-family: siyamrupali, sans-serif; font-size: 15.4px; text-align: justify; word-spacing: 4px; background-color: #ffffff;\">&lsquo;ভাল্লাগে না&rsquo; বইয়ের ফ্ল্যাপের কথা:</span><span style=\"color: #555555; font-family: siyamrupali, sans-serif; font-size: 15.4px; text-align: justify; word-spacing: 4px; background-color: #ffffff;\">বাংলাদেশের সবচেয়ে বড় অনলাইন স্কুল, 10 Minute School-এর প্রতিষ্ঠাতা আয়মান সাদিক। 10 Minute School-এ প্রতিদিন আড়াই লাখেরও বেশি শিক্ষার্থী বিনা মূল্যে পড়াশানো করছে। তিনি বাংলাদেশের শিক্ষাব্যবস্থায় অভূতপূর্ব অবদান রাখার জন্য ইতিমধ্যেই রানি দ্বিতীয় এলিজাবেথের কাছ থেকে পেয়েছেন Queen\'s Young Leader পুরস্কার। এ ছাড়া ২০১৮ সালে তিনি বিশ্বের স্বনামধন্য ফোর্বস ম্যাগাজিনের 30 Under 30 লিস্টে অন্তর্ভুক্ত হয়েছেন। তার প্রথম বই &lsquo;নেভার স্টপ</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', 222, 22, '2019-03-23 13:41:15', '2019-03-23 13:43:31'),
(19, 26, 26, NULL, 'ঠাকুরমার ঝুলি', 'ঠাকুরমার-ঝুলি', '-2019-03-24-5c971b7c96573.jpg', '333333333', 'অন্তিক মাহমুদ', 2002, 44, '1', 'বাংলা', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 15px; font-size: 20.02px; color: #555555; font-family: siyamrupali, sans-serif; text-align: justify; word-spacing: 4px; background-color: #ffffff;\"><strong><a style=\"box-sizing: border-box; color: #333333; text-decoration-line: none; background-color: transparent; transition: all 0.6s ease 0s; outline: none;\" href=\"https://www.rokomari.com/author/930\">রবীন্দ্রনাথ ঠাকুর</a></strong></p>\r\n<div class=\"author-description-wrapper\" style=\"box-sizing: border-box; position: relative; color: #555555; font-family: siyamrupali, sans-serif; font-size: 15.4px; text-align: justify; word-spacing: 4px; background-color: #ffffff;\">\r\n<div id=\"js--author-description\" class=\"author-description\" style=\"box-sizing: border-box; font-size: 16.94px; line-height: 23.716px; overflow: hidden; transition: all 600ms cubic-bezier(0.785, 0.135, 0.15, 0.86) 0s;\">রবীন্দ্রনাথ ঠাকুর (৭ই মে, <sup>১৮৬১</sup> - ৭ই আগস্ট, ১৯৪১) (২৫ বৈশাখ, ১২৬৮ - ২২ শ্রাবণ, ১৩৪৮ বঙ্গাব্দ) ছিলেন অগ্রণী বাঙালি কবি, ঔপন্যাসিক, সংগীতস্রষ্টা, নাট্যকার, চিত্রকর, ছোটগল্পকার, প্রাবন্ধিক, অভিনেতা, কণ্ঠশিল্পী ও দার্শনিক। তাঁকে বাংলা ভাষার সর্বশ্রেষ্ঠ সাহিত্যিক মনে করা হয়। রবীন্দ্রনাথকে গুরুদেব, কবিগুরু ও বিশ্বকবি অভিধায় ভূষিত করা হয়। রবীন্দ্রনাথের ৫২টি কাব্যগ্রন্থ, ৩৮টি নাটক, ১৩টি উপন্যাস ও ৩৬টি প্রবন্ধ ও অন্যান্য গদ্যসংকলন তাঁর জীবদ্দশায় বা মৃত্যুর অব্যবহিত পরে প্রকাশিত হয়। তাঁর সর্বমোট ৯৫টি ছোটগল্প ও ১৯১৫টি গান যথাক্রমে গল্পগুচ্ছ ও গীতবিতান সংকলনের অন্তর্ভুক্ত হয়েছে। রবীন্দ্রনাথের যাবতীয় প্রকাশিত ও গ্রন্থাকারে অপ্রকাশিত রচনা ৩২ খণ্ডে রবীন্দ্র রচনাবলী নামে প্রকাশিত হয়েছে। রবীন্দ্রনাথের যাবতীয় পত্রসাহিত্য উনিশ খণ্ডে চিঠিপত্র ও চারটি পৃথক গ্রন্থে প্রকাশিত। এছাড়া তিনি প্রায় দুই হাজার ছবি এঁকেছিলেন। রবীন্দ্রনাথের রচনা বিশ্বের বিভিন্ন ভাষায় অনূদিত হয়েছে। ১৯১৩ সালে গীতাঞ্জলি কাব্যগ্রন্থের ইংরেজি অনুবাদের জন্য তিনি সাহিত্যে নোবেল পুরস্কার লাভ করেন।</div>\r\n</div>', 222, 3, '2019-03-23 23:54:06', '2019-03-23 23:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `book_footers`
--

CREATE TABLE `book_footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_footers`
--

INSERT INTO `book_footers` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(5, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid formss', '2019-03-23-5c962a9e6f314.png', '2019-03-23 06:46:23', '2019-03-23 06:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `book_images`
--

CREATE TABLE `book_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `menu_id`, `slug`, `created_at`, `updated_at`) VALUES
(8, 'Arts & Music', 0, 'Arts & Music', '2019-03-19 03:06:54', '2019-03-19 03:06:54'),
(9, 'Biographies', 0, 'Biographies', '2019-03-19 03:07:34', '2019-03-19 03:07:34'),
(10, 'Business', 0, 'Business', '2019-03-19 03:07:51', '2019-03-19 03:07:51'),
(11, 'Kids', 4, 'Kids', '2019-03-19 03:07:58', '2019-03-21 11:54:17'),
(12, 'Computers & Tech', 2, 'Computers & Tech', '2019-03-19 03:08:27', '2019-03-21 11:54:08'),
(13, 'Cooking', 1, 'Cooking', '2019-03-19 03:08:37', '2019-03-21 11:53:57'),
(14, 'Hobbies & Crafts', 1, 'Hobbies & Crafts', '2019-03-19 03:08:47', '2019-03-21 11:53:43'),
(15, 'Edu & Reference', 4, 'Edu & Reference', '2019-03-19 03:08:57', '2019-03-21 11:53:32'),
(16, 'History', 2, 'History', '2019-03-19 03:09:08', '2019-03-21 11:53:20'),
(17, 'Health & Fitness', 1, 'Health & Fitness', '2019-03-19 03:09:17', '2019-03-21 11:53:09'),
(18, 'Home & Garden', 4, 'Home & Garden', '2019-03-19 03:09:27', '2019-03-21 11:52:59'),
(19, 'Horror', 1, 'Horror', '2019-03-19 03:09:38', '2019-03-21 11:52:12'),
(24, 'Laravel', 2, 'Laravel', '2019-03-21 03:28:33', '2019-03-21 12:48:30'),
(25, 'ইসলামি', 1, 'ইসলামি', '2019-03-23 09:04:49', '2019-03-23 09:04:49'),
(26, 'আত্ম-উন্নয়ন ও মেডিটেশন', 2, 'আত্ম-উন্নয়ন ও মেডিটেশন', '2019-03-23 13:25:02', '2019-03-23 13:25:02'),
(27, 'A', NULL, 'A', '2019-03-23 23:14:28', '2019-03-23 23:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `last_name`, `email`, `Phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Shuvo', 'Sarker', 'shuvosarker772@gmail.com', '01622007650', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica,', '2019-03-18 04:44:51', '2019-03-18 04:44:51'),
(3, 'Joyonto', 'Kumar', 'shuvosarker472@gmail.com', '01622007650', 'dddddddddddddddd', '2019-03-18 22:45:53', '2019-03-18 22:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `l_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_description` text COLLATE utf8mb4_unicode_ci,
  `r_description` text COLLATE utf8mb4_unicode_ci,
  `r_address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_phone` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_web` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `l_title`, `r_title`, `l_description`, `r_description`, `r_address`, `r_phone`, `r_email`, `r_web`, `created_at`, `updated_at`) VALUES
(3, 'GET IN TOUCH :-', 'GET OFFICE INFO :-', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat', 'Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas', '666 5th Ave New York, NY, United', '716-298-1822', 'shuvosarker472@gmail.com', 'blog.com', '2019-03-18 06:28:25', '2019-03-18 06:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ইলেক্ট্রনিক্স', '2019-03-20 12:59:59', '2019-03-23 15:05:16'),
(2, 'বিজ্ঞানবাক্স', '2019-03-20 13:00:11', '2019-03-23 15:04:37'),
(4, 'শায়েস্তা খাঁ অফার', '2019-03-20 22:18:24', '2019-03-23 15:03:29'),
(5, 'হুমায়ূন আহমেদ', '2019-03-23 15:05:44', '2019-03-23 15:05:44'),
(6, 'মুহম্মদ জাফর ইকবাল', '2019-03-23 15:06:39', '2019-03-23 15:06:39'),
(7, 'বিভূতিভূষণ বন্দ্যোপাধ্যায়', '2019-03-23 15:07:06', '2019-03-23 15:07:06'),
(8, 'সেবা প্রকাশনী', '2019-03-23 15:19:03', '2019-03-23 15:19:03'),
(9, 'প্রথমা প্রকাশন', '2019-03-23 15:19:35', '2019-03-23 15:19:35'),
(10, 'দি ইউনিভার্সিটি', '2019-03-23 15:20:18', '2019-03-23 15:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_09_094105_create_categories_table', 1),
(5, '2019_03_10_052608_create_authors_table', 2),
(11, '2019_03_11_095203_create_sliders_table', 5),
(13, '2019_03_16_071837_create_new_book_headers_table', 7),
(14, '2019_03_16_094553_create_book_footers_table', 8),
(16, '2019_03_18_055837_create_orders_table', 9),
(17, '2019_03_18_094821_create_contacts_table', 10),
(18, '2019_03_18_112620_create_contact_infos_table', 11),
(19, '2019_03_10_102506_create_book_images_table', 12),
(20, '2019_03_10_051734_create_books_table', 13),
(22, '2019_03_16_110619_create_menus_table', 14),
(24, '2019_03_20_191429_create_submenus_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `new_book_headers`
--

CREATE TABLE `new_book_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_book_headers`
--

INSERT INTO `new_book_headers` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'NEW BOOKS', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form', '2019-03-16 03:36:57', '2019-03-16 03:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_des` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_des`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', '2019-03-18 00:31:41', '2019-03-18 00:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shuvosarker472@gmail.com', '$2y$10$Xn67/TtTJVs6DavWHEn6ae9tVU78LqwLP/74a.VoUwERtMGBG9sXa', '2019-03-22 23:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `slug`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(6, 'Buy Favorite Book', '-2019-03-13-5c88c116bbdcf.jpg', '', 'more..', 'https://www.lipsum.com/', '2019-03-12 12:15:25', '2019-03-13 02:36:39'),
(7, 'Buy Favorite Book', '-2019-03-13-5c88c0c383dcf.jpg', '', 'more..', 'https://www.lipsum.com/', '2019-03-12 12:16:35', '2019-03-14 06:26:55'),
(8, 'What is Lorem Ipsum book ?', 'what-is-lorem-ipsum-2019-03-18-5c8f4195ce47f.jpg', '', 'Buy Book', NULL, '2019-03-18 00:58:31', '2019-03-18 01:04:05'),
(9, NULL, '-2019-03-23-5c968e6442d14.gif', '', NULL, NULL, '2019-03-23 13:52:07', '2019-03-23 13:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) UNSIGNED DEFAULT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `menu_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 1, 9, '2019-03-20 13:41:52', '2019-03-20 13:41:52'),
(3, 1, 11, '2019-03-20 13:57:32', '2019-03-20 13:57:32'),
(4, 2, 9, '2019-03-20 13:58:39', '2019-03-20 13:58:39'),
(5, 2, 11, '2019-03-20 13:59:25', '2019-03-20 13:59:25'),
(6, 2, 15, '2019-03-20 13:59:34', '2019-03-20 13:59:34'),
(7, 1, 10, '2019-03-20 13:59:41', '2019-03-20 13:59:41'),
(8, 3, 16, '2019-03-20 13:59:50', '2019-03-20 13:59:50'),
(9, 1, 19, '2019-03-20 13:59:55', '2019-03-20 13:59:55'),
(10, 3, 18, '2019-03-20 14:00:03', '2019-03-20 14:00:03'),
(11, 2, 12, '2019-03-20 22:18:58', '2019-03-20 22:18:58'),
(12, 4, 10, '2019-03-20 22:19:28', '2019-03-20 22:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joyonto Kumar', 'shuvosarker472@gmail.com', NULL, '$2y$10$cTZy4JeA92efHiI.KzFMAeYzxdS5YPwUGO6MOsr.D7gePgI3OIO3y', '1TZfdDNj1UgeeumGZQmkwxxVS6Ir3cEd5e14slJvs27qZ0ejxlRcRmO6PDfw', '2019-03-15 22:57:02', '2019-03-23 00:00:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_footers`
--
ALTER TABLE `book_footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_images`
--
ALTER TABLE `book_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_book_headers`
--
ALTER TABLE `new_book_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `book_footers`
--
ALTER TABLE `book_footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_images`
--
ALTER TABLE `book_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `new_book_headers`
--
ALTER TABLE `new_book_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
