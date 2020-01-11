-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- হোষ্ট: 127.0.0.1
-- তৈরী করতে ব্যবহৃত সময়: ডিসে 30, 2019 at 06:46 PM
-- সার্ভার সংস্করন: 10.4.6-MariaDB
-- পিএইছপির সংস্করন: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- ডাটাবেইজ: `naeem_blog`
--

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `phone`, `skills`, `image`) VALUES
(1, 'naeem', 'hasan', 'naeem222', 'naeemhasan@gmail.com', '1234', '01779204049', 'php,frontend', 'admin.jpg');

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `comments`
--

CREATE TABLE `comments` (
  `id` int(111) NOT NULL,
  `comment_post_id` int(111) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_date` varchar(255) NOT NULL,
  `comment_hit` int(111) NOT NULL,
  `comment_share` int(111) NOT NULL,
  `comment_replies` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `comments`
--

INSERT INTO `comments` (`id`, `comment_post_id`, `comment_content`, `comment_date`, `comment_hit`, `comment_share`, `comment_replies`) VALUES
(1, 1, 'hellow how are you', '12-05-2019', 5, 4, 3),
(2, 1, 'asha kori onek valo acho', '04-04-2019', 5, 2, 1),
(3, 2, 'ki obostha', '05-06-2019', 7, 8, 1);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` int(11) NOT NULL,
  `reply_comment_id` int(11) NOT NULL,
  `reply_content` varchar(255) NOT NULL,
  `reply_date` varchar(255) NOT NULL,
  `reply_hit` int(11) NOT NULL,
  `reply_share` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_comment_count` int(111) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_category` varchar(255) NOT NULL,
  `post_tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_content`, `post_image`, `post_date`, `post_comment_count`, `post_author`, `post_category`, `post_tags`) VALUES
(1, 'IDs, phone numbers of over 267m Facebook users ‘exposed’', 'Facebook on Thursday said it is investigating a report that a database containing names and phone numbers of more than 267 million users was exposed online.\r\n\r\nThe database was made available for download last week on an online hacker forum that apparently belonged to a crime group, according to a blog post on the website Comparitech.\r\n\r\n\"We are looking into this issue, but believe this is likely information obtained before changes we made in the past few years to better protect people\'s information,\" a Facebook spokesperson told AFP.\r\n\r\nComparitech said that security researcher Bob Diachenko spotted the database, which was openly accessible and contained Facebook users\' names, user IDs and phone numbers.\r\n\r\nThe discovery was reported and the database was no longer available by Thursday, according to Comparitech.\r\n\r\nRevelation of the exposed data comes as the social network strives to rebuild trust and alleviate concerns over protection of people\'s information.\r\n\r\nUS regulators earlier this month said that British consultancy Cambridge Analytica -- at the center of a massive scandal involving Facebook data hijacking -- deceived the social network\'s users about how it collected and handled their personal information.\r\n\r\nThe Federal Trade Commission said its investigation launched in March 2018 concluded that the now-defunct political consulting firm \"engaged in deceptive practices to harvest personal information from tens of millions of Facebook users for voter profiling and targeting.\"\r\n\r\nThe FTC said the British firm, which worked on Donald Trump\'s 2016 presidential campaign, made \"false and misleading\" claims when it offered Facebook users a \"personality quiz\" -- stating it would not download names or any personally identifiable information.\r\n\r\nThe case created a firestorm over data protection when it was disclosed that Cambridge Analytica was able to create psychological profiles using data from millions of Facebook users.\r\n\r\nFacebook\'s own investigation found that some data from 87 million users in the United States and elsewhere had been compromised by the firm, and claimed the practices violated the social network\'s terms of service.\r\n\r\nFacebook paid a record $5 billion penalty early this year in a settlement with the regulator over mishandling users\' private data. ', 'facebook-user.jpg', '11:45, Dec 20, 2019', 1, 'abdul alim', 'technology', 'facebook,user'),
(2, 'A Triassic Park flourished 250m yrs ago in Brazil', 'Millions of years before the arrival of the mighty Tyrannosaurus rex, another fearsome dinosaur -- the Gnathovorax -- roamed what is now southern Brazil, ripping apart its prey with sharp teeth.\r\n\r\nMeasuring nearly 10 feet (three meters) long, it was the biggest dinosaur of its time, and also the most ferocious -- placing it at the top of the food chain, as T.rex once was.\r\n\r\nBasically, the Gnathovorax cabreirai was the king of Triassic Park, if you will, as the dominant creature of the pre-Jurassic period that began roughly 250 million years ago.\r\n\r\n\"In the Triassic ecosystem, it held a place similar to what lions have today,\" says Rodrigo Temp Muller, a 26-year-old paleontologist at the Federal University of Santa Maria.\r\nThat dino could grow to more than 12 meters, but it was not a distant cousin to the Gnathovorax, which instead belongs to the Herrerasauridae family of dinosaurs of the Triassic period.\r\n\r\nIt appears to be more closely linked to other species whose fossils were found in Brazil and Argentina.\r\n\r\nDuring the Triassic era, the continents were not separated as they are now, and dinosaurs were smaller than those that would follow in the Jurassic and Cretaceous periods.\r\n\r\nThese dinosaurs eventually vanished in a massive flood plain.\r\n\r\n\"We\'ve discovered numerous fossils across the region and there are surely more. The type of sediment that we have here is ideal for preserving fossils,\" Muller said.\r\n\r\n\"The future is promising.\"\r\n\r\nLong-necked giant \r\nAt the Center for Paleontological Research at the Federal University of Santa Maria in Sao Joao do Polesine, the Gnathovorax skeleton is on display in a glass case.\r\n\r\nThe skull is particularly well preserved, and observers can easily see the dinosaur\'s powerful jaw that gives it its name -- Gnathovorax cabreirai means \"ravenous jaws.\"', 'dinasore.jpg', '15:07, Dec 21, 2019', 1, 'sumon ', 'animal', 'dianasore,old'),
(3, 'Canada researcher makes microscopic gingerbread house', 'There was Tiny Tim, and then the Little Drummer Boy -- but they had nothing on the microscropic gingerbread house believed to be the smallest in the world and unveiled Wednesday by a Canadian researcher.\r\n\r\nAbout half the size of one made in France last year, it was cut and etched from silicon, complete with sharply defined bricks and trim, and a Canadian flag for a welcome mat.\r\n\r\nMcMaster University researcher Travis Casagrande said he used a beam of charged gallium ions that acted like a sandblaster.\r\n\r\nImages provided by the Hamilton, Ontario school\'s Canadian Centre for Electron Microscopy showed the house sitting atop a cap on the head of tiny winking snowman made from materials used in lithium-ion battery research.\r\nThe pair of decorations stacked one on top of the other are barely taller than the diameter of a human hair.\r\n\r\n\"While the spirit of the new decorations is festive, the intention of the project,\" said Casagrande, \"is to demonstrate the capabilities of the centre\" and \"stir scientific curiosity among the public.\"\r\n\r\nThe centre\'s suite of 10 electron microscopes and other equipment are used mostly for materials research.\r\n\r\nUnlike a traditional desktop microscope that focuses light through optical lenses, an electron microscope uses an electron beam and electromagnetic lenses, allowing for far greater magnification.', 'gengerbread-home.jpg', '10:45, Dec 19, 2019', 1, 'naeem', 'technology', 'recent,home'),
(4, 'Apple, Google, Amazon eye common voice assistant technology', 'Will Amazon\'s Alexa, Apple\'s Siri and Google Assistant finally get along?\r\n\r\nThe major digital assistants could operate on a common technology standard under a plan announced Wednesday by Amazon, Apple and Google and other industry partners that aims to enable more smart home devices to speak to each other.\r\n\r\nThe goal of the plan would be to allow developers to build new products without paying royalties for connectivity software, and enabling consumers to then choose their preferred voice assistants on the devices.\r\n\r\nThe project \"aims to improve the consumer experience of trying to use smart home products that aren\'t compatible with each other,\" according to a statement by the new working group.\r\n\r\n\"We believe that the protocol has the potential to be widely adopted across home systems and assistants such as Google Assistant, Amazon Alexa, Apple\'s Siri, Google Assistant, and others.\"\r\n\r\nThe new project also includes the Zigbee Alliance, a separate effort to develop a common wireless standard for connected devices that includes manufacturers such as Samsung, retailers such as Ikea and other tech firms, including Texas Instruments and NXP Semiconductors.\r\n\r\n\"The industry working group will take an open-source approach for the development and implementation of a new, unified connectivity protocol,\" the statement said.\r\n\r\n\"The project intends to use contributions from market-tested smart home technologies from Amazon, Apple, Google, Zigbee Alliance, and others.\"\r\n\r\nThe worldwide market for smart home devices is expected to reach nearly 815 million devices this year, up 23 percent from 2018, according to the research firm IDC, and 1.39 billion by 2023.\r\n\r\nHelping developers\r\nThe initiative called \"Project Connected Home over IP\" could promote more smart home products, making it easier for developers of products ranging from smart refrigerators to voice-activated lightbulbs, who are now forced to choose among various standards.\r\n\r\n', 'google.jpg', '10:17, Dec 19, 2019', 1, 'akash', 'technology', 'google,apple,amazon'),
(5, 'Pig-monkey hybrids created in China', 'n a world first, researchers have been able to produce pig-monkey hybrids in a Chinese laboratory, a media report said.\r\n\r\nTwo piglets - having monkey tissues in their hearts, liver and skin - were born in the State Key Laboratory of Stem Cell and Reproductive Biology in Beijing but died within a week, the Mirror reported.\r\n\r\nThe announcement to this effect was made by Tang Hai. The experiment comes in the wake of Spanish scientist Juan Carlos Izpisua Belmonte\'s attempt to create pig-human hybrids two years ago.\r\n\r\nTang and his team injected genetically modified monkey cells into more than 4,000 pig embryos before these were implanted into sows, the New Scientist magazine reported.\r\n\r\nOnly two of the 10 piglets thus born were hybrids - with tissues in the heart, liver, spleen, lung and skin, partly consisting of monkey cells.\r\n\r\nExperts suspected that the failure has to do with the IVF process.\r\n\r\nCritics have now warned that the scientific development will create \"disturbing\" dilemmas over the ethics of human-animal hybrids.\r\n\r\nDoctor Angel Raya, director of the Barcelona Regenerative Medicine Centre, told the Spanish daily El Pais: \"What happens if the stem cells escape and form human neurons in the brain of the animal? Would it have consciousness? And what happens if these stem cells turn into sperm cells?\"\r\n\r\n', 'dna.jpg', '10:14, Dec 11, 2019', 1, 'abir', 'techonology', 'abir,tech,novel'),
(6, 'Apple planning to use Qualcomm ultrasonic fingerprint in new iPhone', 'Apple is reportedly planning to use Qualcomm\'s ultrasonic fingerprint sensor technology in one iPhone model, set to be released in 2020.\r\n\r\nThe iPhone maker was partnering with Taiwanese touchscreen maker GIS to develop an iPhone for 2020 or 2021 that could use the under-display tech, MacRumors reported on Wednesday.\r\n\r\nQualcomm unveiled the new 3D Sonic Max ultrasonic fingerprint reader on Tuesday at its third annual Snapdragon Technology Summit.\r\n\r\nQualcomm supplies ultrasonic fingerprint sensors for Samsung\'s Galaxy S10 and Galaxy Note10 smartphones. But iPhones could use an even more advanced version of the technology by 2020 or 2021 rolls in.\r\n\r\nJP Morgan analyst Samik Chatterjee believes, Apple will release a 5.4-inch iPhone, two 6.1-inch iPhones and one 6.7-inch iPhone with 5G connectivity in 2020.\r\n\r\nChatterjee predicts the company may introduce two high-end models (one 6.1-inch and one 6.7-inch) with support for mmWave, as well as a triple-lens camera and \"world facing\" 3D sensing for improved augmented reality capabilities.\r\n\r\nWhile, two low-end models (6.1-inch, 5.4-inch) will not have mmWave or World facing 3D sensing, and will have a dual-lens camera.\r\n\r\nAs per the report, Apple may use Qualcomm\'s X55 modems in all its 2020 iPhones, which support both mmWave and sub-6GHz spectrum.\r\n\r\nAll four iPhone models will have OLEDs. Apple might be using OLED displays from Samsung that are thinner than the displays currently being used.', 'iphone.jpg', '12:34, Dec 06, 2019', 1, 'mofiz', 'technology', 'tech,apple,iphone');

--
-- স্তুপকৃত টেবলের ইনডেক্স
--

--
-- টেবিলের ইনডেক্সসমুহ `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- টেবিলের ইনডেক্সসমুহ `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- টেবিলের ইনডেক্সসমুহ `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`);

--
-- টেবিলের ইনডেক্সসমুহ `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- স্তুপকৃত টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT)
--

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
