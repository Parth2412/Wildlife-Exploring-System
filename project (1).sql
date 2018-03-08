-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 07:41 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Blog_ID` int(11) NOT NULL,
  `Blog_Date` date NOT NULL,
  `Blog_Title` varchar(250) NOT NULL,
  `Blog_Desc` text NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Blog_ID`, `Blog_Date`, `Blog_Title`, `Blog_Desc`, `Photographer_Register_ID`) VALUES
(1, '2009-06-16', ' LAKE PRESPA, MACEDONIA III', 'The mountains of GaliÄica National Park dominate the west side of Macro Prespa Lake. Clouds hang ominously over the ridge feeding the oak-cloaked east slope with rain. Mountain pastures are at their best as we drive through the clouds. A cold front followed us to Stenje bringing with it rain and storms. Snow still clings to steep crevices along the mountain pass.Days are spent on the mountain above Stenje, a small rural village hugging the north west corner of macro Prespa Lake, taking pictures of butterflies including Checkered skippers, beautiful Fritillaries, Marbled whites and Blues, all amongst the wildflowers â€“ purple carnations, yellow and white yarrows,  and with each step the scent of herbs â€“ heaven! An unusual neuropteran â€“ an owl-fly, Ascalaphus libelluloides, with spectacular black and yellow markings, hawks for flies above my head. Later I manage a shot when it comes down to rest on grass - weird, primitive and a close relative of mayflies. Moths and giant crickets, reveal themselves later, all to the chorus of cuckoos.', 1),
(2, '2003-06-04', 'Female Leatherback Turtle Crawls From The Sea To Nest', ' Leatherback turtles are the oldest, deepest-diving and widest-ranging of all sea turtles, with a lineage that dates back over 100 million years. We can only imagine all that this species has seen and experienced throughout the millennia and yet today they are endangered and face a very uncertain future from human threats such as the harvesting of their eggs and entanglement in fishing gear. One of the most active leatherback nesting beaches in the world is on the Caribbean island of Trinidad, where they crawl from the sea at night and perform an ancient nesting ritual that often lasts nearly two hours.  Nesting turtles are easily disturbed by light, so the best conditions are those beaches that are in complete darkness. Rather than use a bright, white flash on my camera, I decided to time my work to coincide with a nearly full moon and use ambient moonlight to illuminate the scene. At about 2am on this particular night, a massive turtle emerged from the surf, laboring slowly up the beach. I moved into position and made a picture, using a slow shutter speed to allow the light from the moon to illuminate the turtle on the dimly lit beach. The result is a ghostly image of a magnificent, vanishing species.', 2),
(3, '2003-08-23', 'Save Tigers Life', 'Despite millions of dollars spent on tiger conservation over the last four decades, tiger numbers continue to plummet. Less than 3,200 tigers remain in the wild, down from 100,000 a century ago; during that time, three of the nine tiger subspecies went extinct (the Bali, Caspian and Java tiger). The remaining six are endangered, but the South China tiger has not been spotted since 1983 and the Sumatran tiger hangs on the brink.   Tigers now live in small, isolated pockets. Skyrocketing human populations in Asia have eliminated 93 percent of tigerâ€™s historic range during the 20th century, with human settlements, roads, industry and agriculture encroaching on tiger territory, sparking growing human-wildlife conflict. When tigers wander into villages, take down livestockâ€”or kill people, they often end up dead, shot or poisoned. Hunting has depleted tiger prey, often forcing the cats to go after livestock to survive.  Poachers also target tigers: In the early 1990s, the demand for tiger parts for use in traditional Chinese medicine grew exponentially, fueling an illicit, multimillion dollar trade run by international arms and drug dealers. Skins are also prized, fetching up to $20,000 on the black market. Last year in Sumatra, a beloved tiger was poached out of the zoo. The situation has grown so dire that Thailand, India, and other nations have dispatched armed commandos to protect tiger reserves.  I shot this story in three countries, Thailand, Indonesia (Sumatra) and India, trying to document the beauty of the tiger, the serious threats they face, and heroic efforts to protect them. ', 3),
(4, '2010-04-07', ' Pool of hippos', 'It was the end of the dry season, and David was lying belly-down at the edge of Long Pool in Mana Pools National Park, Zimbabwe. Hippopotamuses were arguing with each other as they vied forspace â€“ â€˜hurling water aboutâ€™, says David, â€˜and giving warning yawns to each other and to me.â€™ As he watched through his lens, the evening light illuminated the scene, and one glowing hippo rose slowly from the water. â€˜I felt increasingly vulnerable,â€™ says David, â€˜weighed down by a 500mm lens, conscious that lions or elephants could be approaching from behind to drink and aware that crocodiles were in the lake.â€™ But though the hippo glared at him, David was outside its personal space, and the huge animal gradually sank back under the water.', 4),
(5, '2002-05-09', 'Antikythera Greece', 'I have spent the past two days in my hide near a small water pond to try to get some images of the Eleonoraâ€™s falcons drinking and bathing. I built my first hide using stones: quite a hard job! (to be honest, I just â€œrenewedâ€ an old birdsâ€™ observatory). But it has worked much better than my usual tent hide! Too windy here: the tent hide was shaking and scared the birds. With the sun starting to be too hot also for the falcons (the temperature well over 30Â°C, and Iâ€™m already well cooked!), the birds started visiting the water source regularly.I have been lucky: I saw up to six falcons at the same time at the pond. But, they are quite shy, so I have to really pay attention when Iâ€™m moving the lenses  any quick movement and all falcons will fly away.', 5),
(6, '2003-05-08', ' Clash of white-tailed eagles', 'At number seven and winner of animal behavior in the birds category is a fight between two white-tailed eagles on a Polish winter. The fight was about a dead mouse on a rail track. Given the deplorable condition, finding food is quite hard and a fight had to ensue as to who was fit to consume the animal.', 6),
(7, '2011-06-08', 'Meerkats', 'The huge diversity of antelope and small mammals provides food for top predators such as Lion, Cheetah, Leopard, Spotted and Brown Hyaenas and Black-backed Jackals.  We were very fortunate to encounter the regions majestic Black-maned Lions on several occasions. If solitude is what you seek then try camping at the remote campground of Polenstswa, just a stoneâ€™s throw across the border in Botswana. It was near here that we spotted fresh Lion prints in the soft sand. We followed the tracks to a small dune where 3 magnificent, male, black maned Lions were resting in the long grass.', 7),
(8, '2007-06-22', 'Nature Beauty', 'â€œThe fragile state of our ecosystems is a continuous thread throughout my work. It is in natureâ€™s beauty and complexity that I find my inspiration. My photographs show the vast scale of transformation our world is under from man-made stresses. To capture this, I have found it is often best to work from the air, which more easily allows for the juxtaposition of nature with the destruction wrought by unsustainable development. Aerial photography gives a unique perspective emphasizing that the Earth and its resources are finite. By taking viewers to remote locations where man and nature are at odds, I hope to instill a deeper appreciation for the precarious balance we are imposing on the planet.â€', 8),
(9, '2009-01-21', 'Killed Raino', 'While recently driving home after three weeks mentoring rangers in the Zululand bushveld, I watched the rare oversized full moon rising over the Cape Fold Mountains. The horrific extent of the poaching war came across the radio with the announcement that over 150 rhino had been poached in the KwaZulu Natal province during the year â€“ a huge increase from previous years and unlikely to stop escalating. At the same time, figures were also given as to the human cost in lives of poachers killed. This makes me weep with both frustration and sadness, as I firmly believe that most people, including those in critical decision-making positions, still have no concept of the dangers that this poaching war actually brings.', 9),
(10, '2008-10-19', 'The National Geographic trip', 'The National Geographic store is truly a wondrous place. Arranged over three floors, it has all the stuff you need for going on an adventure. It even has a walk-in fridge, with a heat detecting camera for testing out that parka. Forget Alicante, next year Iâ€™m going to the upper reaches of the Amazonâ€¦  The main attraction of the evening, however, was Andy Rouse. It was his work on display, and his presentation. He didnâ€™t have a stage, but he might as well have, starting off with a â€˜good eveningâ€™, followed by â€˜I canâ€™t hear you - good evening!  Once he was sure we were all awake, he followed up with a couple of amusing asides. Violet and shrinking are not words to describe Andy. However, the tone had been set for what was to be a very entertaining talk.  As the producer of any reality show will tell you, there must be a back story. For the next 30 minutes or so, Andy told us the tale behind the â€˜Vanishing worldsâ€™. There were no tears, just a fascinating insight into the trials and tribulations of getting those inspiring shots.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `Blog_Comment_ID` int(11) NOT NULL,
  `Blog_Comment_Date` date NOT NULL,
  `Blog_Comment_Desc` text NOT NULL,
  `User_Register_ID` int(11) NOT NULL,
  `Blog_ID` int(11) NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`Blog_Comment_ID`, `Blog_Comment_Date`, `Blog_Comment_Desc`, `User_Register_ID`, `Blog_ID`, `Photographer_Register_ID`) VALUES
(1, '2012-10-26', ' Nice blog and outstanding pictures! Congratulations! Wanted to ask you how is the free ebook â€œThe 4 angles of successâ€ received after subscription? Via e-mail or should we access a particular link? Best wishes and good light!', 1, 1, 1),
(2, '2012-09-20', ' It has just thinking about your blogs . Will be for sure this evening reading.  This blog are awesome for after reading your best thoughts,', 4, 1, 1),
(3, '2007-08-21', ' i can only imagine all that this species has seen and experienced throughout the millennia and yet today they are endangered , really want to see them.', 5, 2, 2),
(4, '2014-03-25', 'please save the tigers', 8, 3, 3),
(6, '2012-08-21', 'What an awesome job!?', 10, 4, 4),
(7, '2011-01-01', 'This makes me weep with both frustration and sadness, as I firmly believe that most people, including those in critical decision-making positions', 2, 9, 9),
(8, '2013-09-27', 'The National Geographic store is truly a wondrous place in my mind. I need for going on an adventure, like you', 7, 10, 10),
(9, '2008-09-29', 'Animal behavior in the birds category is a fight between two eagles,are so bad. We cant imagine it.. Really a nice blog.', 3, 6, 6),
(10, '2013-02-25', ' small mammals i love them , they are so cute and great blog.', 6, 7, 7),
(11, '2015-05-21', 'After your Amazon trip please upload your blog on website, i am looking after it as my reference.', 2, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_ID` int(11) NOT NULL,
  `City_Name` varchar(250) NOT NULL,
  `State_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_ID`, `City_Name`, `State_ID`) VALUES
(1, 'Trupati', 1),
(2, 'Vijayawada', 1),
(3, 'Kadapa', 1),
(4, 'tezu', 2),
(5, 'Jairampur', 1),
(6, 'Roing', 2),
(8, 'Jorhat', 3),
(9, 'Patna', 4),
(10, 'Motihari', 4),
(11, 'Raipur', 6),
(12, 'Bhilai', 6),
(13, 'Panaji', 9),
(14, 'Margao', 9),
(15, 'Ahmedabad', 10),
(16, 'Vadodara', 10),
(17, 'Surat', 1),
(18, 'Gurgaun', 11),
(19, 'Ambala', 11),
(20, 'Shimla', 12),
(21, 'Dharamsala', 12),
(22, 'Jammu', 13),
(23, 'Ramban', 13),
(24, 'Ranchi', 14),
(25, 'Jamshedpur', 14),
(26, 'Bangaluru', 15),
(27, 'Hubli', 15),
(28, 'Kochi', 16),
(29, 'Mumbai', 17),
(30, 'Amritsar', 18),
(31, 'Jaipur', 19),
(32, 'Bareilly', 20),
(33, 'Hobart', 21),
(34, 'Geelong', 22),
(35, 'Perth', 23),
(37, 'whyalla', 24),
(38, 'Cairns', 25),
(39, 'Bahlolpur', 26),
(40, 'Comilla', 27),
(41, 'Shahpur', 28),
(42, 'Bogra', 29),
(43, 'Toranto', 30),
(44, 'Kelowna', 31),
(45, 'Calgary', 32),
(46, 'abnub', 36),
(47, 'Abu Hammad', 37),
(48, 'Abu Tig', 38),
(49, 'ArsenRe', 39),
(50, 'Piana', 40),
(51, ' Annecy', 41),
(52, 'Vejle', 42),
(53, 'Herning', 43),
(54, 'Silkeborg', 44),
(55, 'Kowloon', 45),
(56, 'Tsuen Wan', 46),
(57, 'Tokyo', 47),
(58, 'Osaka', 48),
(59, 'Nagoya', 49),
(60, 'Kitui', 50),
(61, 'Eldorat', 51),
(62, 'Riga', 52),
(63, 'Moron', 53),
(64, 'Hovd', 54),
(65, 'Kaesong', 55),
(66, 'Rason', 56),
(67, 'seeb', 58),
(68, 'Sohar', 59),
(69, 'Ibri', 60),
(70, 'Cebu', 61),
(71, 'Pasay', 62),
(72, 'Davao', 63),
(73, 'Alton', 64),
(74, 'Atlanta', 65),
(75, 'Hill Country', 66),
(76, 'Baaya', 67),
(77, 'Abu Dhalouf', 68),
(78, 'Fuwayrit', 69),
(79, 'Kazan', 70),
(80, 'Sochi', 71),
(81, 'Abakan', 72),
(82, 'Tampines', 73),
(83, 'Novena', 74),
(84, 'Paya Lebar', 75),
(85, 'Chiayi', 76),
(86, 'Hsinchu', 77),
(87, 'Yilan City', 78),
(88, 'London', 79),
(89, 'Ayr', 80),
(90, 'Bangor', 81),
(91, 'Aden', 82),
(92, 'Dhamar', 83),
(93, 'Mutare', 84),
(94, 'Gweru', 85),
(95, 'Harare', 86),
(96, 'Olinda', 87),
(97, 'Salvador', 88),
(98, 'Porto Alegre', 89),
(99, 'Resistencia', 90),
(100, 'Salta', 91),
(101, 'Quilmes', 92),
(102, 'Catania', 93),
(103, 'Forli', 94),
(104, 'Bari', 95),
(105, 'Nanjing', 96),
(106, 'Wuhan', 97),
(107, 'Xiamen', 98),
(108, 'Ipoh', 99),
(109, 'Klang', 100),
(110, 'Taiping', 101),
(111, 'Colonel Hill', 102),
(112, 'Port Nelson', 103),
(113, 'Congo Town', 104);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `Country_ID` int(11) NOT NULL,
  `Country_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Country_ID`, `Country_Name`) VALUES
(1, 'India'),
(2, 'australia'),
(3, 'Bangladesh'),
(4, 'Canada'),
(5, 'Denmark'),
(6, 'Egypt'),
(7, 'France'),
(8, 'Germany'),
(9, 'Honkong'),
(10, 'Japan'),
(11, 'Kenya'),
(12, 'Latvia'),
(13, 'Mongolia'),
(14, 'North Korea'),
(15, 'Oman'),
(16, 'phillippines'),
(17, 'United States of America'),
(18, 'qutar'),
(19, 'Russia'),
(20, 'Singapore'),
(21, 'Taiwan'),
(22, 'United kingdom'),
(23, 'Yeman'),
(24, 'Zimbawe'),
(25, 'Brazil'),
(26, 'Argentina'),
(27, 'Italy'),
(28, 'China'),
(29, 'Malaysia'),
(30, 'Bahamas');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_ID` int(11) NOT NULL,
  `Event_Title` varchar(250) NOT NULL,
  `Event_Desc` text NOT NULL,
  `Event_First_Registration_Date` date NOT NULL,
  `Event_Last_Registration_Date` date NOT NULL,
  `Event_Voting_Date` date NOT NULL,
  `Event_End_Voting_Date` date NOT NULL,
  `Event_Result_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_ID`, `Event_Title`, `Event_Desc`, `Event_First_Registration_Date`, `Event_Last_Registration_Date`, `Event_Voting_Date`, `Event_End_Voting_Date`, `Event_Result_Date`) VALUES
(1, 'Black and White', 'We are Team BAWE (Black and White Events). Our passions are photography, social media and contemporary design. Hiring a photo booth in Ireland has never been easier whether itâ€™s a wedding, corporate party, product launch, award ceremony or private party, let us take care of the entertainment. Let your silly side out in our deluxe photo booths. At Team BAWE, our ethos is our commitment to quality and service every step of the way. We can offer you an experience like no other. Hire a photo booth with us today to capture all your cherished memories.', '2017-01-13', '2017-01-20', '2017-01-21', '2017-01-23', '2017-01-25'),
(2, 'Nature', 'We are Team Nature. Our passions are photography, social media and contemporary design. Hiring a photo booth in Ireland has never been easier whether itâ€™s a wedding, corporate party, product launch, award ceremony or private party, let us take care of the entertainment. Let your silly side out in our deluxe photo booths. At Team BAWE, our ethos is our commitment to quality and service every step of the way. We can offer you an experience like no other. Hire a photo booth with us today to capture all your cherished memories.', '2017-02-02', '2017-02-09', '2017-02-10', '2017-02-12', '2017-02-14'),
(3, 'Wildlife', 'Meet masters of photography in this season of events celebrating the competition. Pick up practical tips and creative and technical know-how from the very best in their field in a range of masterclasses, workshops and debates.', '2017-03-25', '2017-04-02', '2017-04-03', '2017-04-05', '2017-04-05'),
(4, 'Flying Objects', 'Give your annual report that polished yet vibrant touch. Individual or group portraits; people or products; factories or service providers; outdoors or in. At Zoom Event Photography we will convey your companyâ€™s ethos visually, with quality, professional photographs', '2017-04-10', '2017-04-17', '2017-04-18', '2017-04-20', '2017-04-20'),
(5, 'May Mania', 'Each May, all seventeen of our Conservation Partners gather in San Francisco for the Wildlife Conservation Expo, where they share their experiences of saving wildlife around the world to a captive audience. They are joined by guest speaker conservationists, more than 40 organizations committed to animal conservation or welfare, and over 1,000 wildlife supporters for a day of learning and celebration', '2017-05-01', '2017-05-07', '2017-05-08', '2017-05-10', '2017-05-12'),
(6, 'Leapord', 'Throughout the year the Cape Leopard Trust will be hosting or participating in events where we highlight the research and conservation work we are undertaking. Functions include presentations, field trips, fund raisers and guided tours.', '2017-06-22', '2017-06-29', '2017-06-30', '2017-07-02', '2017-07-04'),
(7, 'Deep Water', 'The Amur leopard is solitary. Nimble-footed and strong, it carries and hides unfinished kills so that they are not taken by other predators. It has been reported that some males stay with females after mating, and may even help with rearing the young. Several males sometimes follow and fight over a female. They live for 10-15 years, and in captivity up to 20 years. The Amur leopard is also known as the Far East leopard, the Manchurian leopard or the Korean leopard.', '2017-07-10', '2017-07-17', '2017-07-18', '2017-07-20', '2017-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `event_like`
--

CREATE TABLE `event_like` (
  `Like_ID` int(11) NOT NULL,
  `Event_Regitsraiton_ID` int(11) NOT NULL,
  `User_Register_ID` int(11) NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_like`
--

INSERT INTO `event_like` (`Like_ID`, `Event_Regitsraiton_ID`, `User_Register_ID`, `Photographer_Register_ID`) VALUES
(1, 1, 3, 1),
(2, 5, 2, 10),
(3, 4, 6, 6),
(4, 2, 5, 10),
(5, 2, 7, 10),
(6, 12, 8, 5),
(7, 5, 1, 8),
(8, 5, 4, 8),
(9, 9, 10, 7),
(10, 9, 3, 7),
(11, 6, 9, 2),
(12, 10, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `Event_Registration_ID` int(11) NOT NULL,
  `Event_ID` int(11) NOT NULL,
  `Registraiton_Date` date NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL,
  `Photo_URL` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_registration`
--

INSERT INTO `event_registration` (`Event_Registration_ID`, `Event_ID`, `Registraiton_Date`, `Photographer_Register_ID`, `Photo_URL`) VALUES
(1, 3, '2016-03-28', 2, '1484569790-1484311783-buck.jpg'),
(2, 3, '2017-03-30', 10, '1484569927-99e5a981a61aa170a3115819d029f108.jpg'),
(3, 3, '2017-04-01', 7, '1484570032-1484414737-wild-bear-having-bath-in-lake-watching-his-feet-t2.jpg'),
(4, 4, '2017-02-04', 6, '1484570203-472702233.jpg'),
(5, 4, '2017-02-05', 8, '1484570264-1484412995-eagle_by_michaelrumiz-d5hgpcy.jpg'),
(6, 4, '2017-02-06', 2, '1484570439-1484408857-114c6e0abe5e282a40da4913829806f8.jpg'),
(7, 1, '2017-01-15', 1, '1484570626-1484301572-Ã‚Â©_Lance-van-de-Vyver_Wildlife_Photographer_of_the_year__Black_and_White_Finalist_.jpeg'),
(8, 1, '2017-01-18', 5, '1484570683-1484413788-M5WnObw.jpg'),
(9, 1, '2017-01-17', 7, '1484571108-1484409069-1484287246-images.jpg'),
(10, 7, '2017-07-12', 1, '1484571644-1484301313-a6ca6ae7-16b9-41f5-961e-8f2b6052ee24-2060x1373.jpeg'),
(11, 7, '2017-07-15', 10, '1484571761-6-crocodile-wildlife-photography-by-piccaya.preview.jpg'),
(12, 6, '2017-06-25', 5, '1484571911-1484424168-male_amur_leopard_wildlife_heritage_uk-wide.jpg'),
(13, 6, '2017-06-24', 8, '1484572071-1484413287-KWrsLG2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `Feedback_Date` date NOT NULL,
  `Feedback_Desc` text NOT NULL,
  `User_Register_ID` int(11) NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Feedback_Date`, `Feedback_Desc`, `User_Register_ID`, `Photographer_Register_ID`) VALUES
(1, '2015-03-06', 'Being very inexperienced at photography, this course in only two days, taught us basic principles that is practical, easy to understand and apply. We now have confidence to attempt more interesting shots and our excitement about using our equipment and getting that â€˜perfect shotâ€™ has grown immensely.', 9, 8),
(2, '2013-01-15', 'G These valuable ideas will be easier for some people to apply than others, depending on their personality. The key is to remember the foundations yo have so nicely laid out, like not blaming, showing you care, and how to learn from what happened', 7, 5),
(3, '2012-03-29', 'Then have people adapt the words to fit their style so they sound sincere and believable. The person providing the feedback may need a few slow, deep breaths before the interaction to manage their own emotions.', 10, 4),
(4, '2013-09-10', '	 Ella S. of Australia Jan 15, 2017 I really love the layout and design of the overall app, as well as the new features. However, there should be another feature, similar to Facebook, that can restrict individual followers from seeing certain photos - Instead of having to block them or restricting.', 8, 6),
(5, '2011-04-09', 'I love wildPhy, itâ€™s my favorite social media app, but I donâ€™t like the way the home feed is now, I liked it in chronological order, now I feel like Iâ€™m only seeing 10% of the people I follow. I absolutely prefer the old home feed way.', 1, 2),
(6, '2013-05-07', 'I like your photos which which was literally amazing view you really do a great work in photography.', 2, 1),
(7, '2015-02-01', 'Itâ€™s good but mine wonâ€™t let me get back in it at all so Iâ€™m starting to change my mind about your photos and blogs and read your blogs and see about tour photos.', 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Message_ID` int(11) NOT NULL,
  `Message_Desc` varchar(250) NOT NULL,
  `Message_Date` date NOT NULL,
  `User_Register_ID` int(11) NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Message_ID`, `Message_Desc`, `Message_Date`, `User_Register_ID`, `Photographer_Register_ID`) VALUES
(1, 'I was in South Africa working on a story about the rhino poaching crisis and one particular rhino named Thandi that had survived a brutal attack by poachers.', '2014-04-11', 1, 1),
(2, 'My fall may have been but the picture was no accident. It wonâ€™t be everyoneâ€™s cup of tea, I know that, but I was working hard to capture their movement in a still photograph. ', '2015-02-15', 2, 3),
(3, 'The photograph is an artistic take on two blesbok antelope stampeding across the plains of South Africaâ€™s Kariega Game Reserve. The shot was entered in the competitionâ€™s Natureâ€™s Studio categor', '2014-08-23', 6, 8),
(4, 'The photograph was selected as a finalist in the competition alongside ten more of my pictures. While it would have been nice to have had more success after having so many make the final, itâ€™s a pleasure and privilege to be involved in this special', '2014-10-30', 3, 5),
(5, 'Before I came to my senses and picked up a camera I used to row internationally (yes, thatâ€™s rightâ€¦I used to think that getting up before dawn and training twice a day most of the year was fun).', '2016-01-01', 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `Photo_ID` int(11) NOT NULL,
  `Photo_Title` varchar(250) NOT NULL,
  `Photo_Desc` text NOT NULL,
  `Photo_URL` varchar(250) NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL,
  `Photo_Upload_dateandtime` datetime NOT NULL,
  `Spam_Count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`Photo_ID`, `Photo_Title`, `Photo_Desc`, `Photo_URL`, `Photographer_Register_ID`, `Photo_Upload_dateandtime`, `Spam_Count`) VALUES
(1, 'snake', 'sand_viper_snake', '1484311514-sand_viper_snake.jpg', 1, '0000-00-00 00:00:00', 1),
(2, 'buck', 'The barasingha, also called swamp deer, is a deer species distributed in the Indian subcontinent. Populations in northern and central India are fragmented, and two isolated populations occur in southwestern Nepal.', '1484311783-buck.jpg', 1, '0000-00-00 00:00:00', 0),
(3, 'Tiger roar', 'The tiger is the largest cat species, most recognisable for their pattern of dark vertical stripes on reddish-orange fur with a lighter underside. The species is classified in the genus Panthera with the lion, leopard, jaguar and snow leopard', '1484312246-unnamed--a624324c6b.jpg', 1, '0000-00-00 00:00:00', 0),
(4, 'Girraffe', 'The giraffe is a genus of African even-toed ungulate mammals, the tallest living terrestrial animals and the largest ruminants. The genus consists of eleven species including Giraffa camelopardalis, the type species', '1484312386-5-wildlife-photography-etosha-by-piccaya.preview.jpg', 1, '0000-00-00 00:00:00', 2),
(5, 'Chameleon', 'Chameleons or chamaeleons are a distinctive and highly specialized clade of Old World lizards with 202 species described as of June 2015. These species come in a range of colors, and many species have the ability to change colors', '1484312768-10-wildlife-photography-by-piccaya.preview.jpg', 1, '0000-00-00 00:00:00', 0),
(6, 'Green viper', 'Trimeresurus stejnegeri is a species of venomous pit viper endemic to Asia. Three subspecies are currently recognized, including the nominate subspecies described here', '1484313115-ce6ed1a46a639e0020da128629e3ba18ea1018df.jpg', 2, '0000-00-00 00:00:00', 0),
(7, 'Aferican elephant', 'African elephants are elephants of the genus Loxodonta, from Greek Î»Î¿Î¾ÏŒÏ‚ + á½€Î´Î¿ÏÏ‚. The genus consists of two extant species: the African bush elephant, L. africana, and the smaller African forest elephant, L. cyclotis.', '1484313252-2-africa-elephant-wildlife-photography-by-piccaya.preview.jpg', 2, '0000-00-00 00:00:00', 0),
(8, 'Bear', 'Bears are placental mammals of the family Ursidae. Bears are classified as caniforms, or doglike carnivorans, with the pinnipeds as their closest living relatives', '1484313311-6E3A2704-e1450383705326.jpg', 2, '0000-00-00 00:00:00', 0),
(9, 'Parot', 'Parrots, also known as psittacines /ËˆsÉªtÉ™saÉªnz/, are birds of the roughly 393 species in 92 genera that make up the order Psittaciformes, found in most tropical and subtropical regions', '1484313429-15-bird-photography-by-piccaya.preview.jpg', 2, '0000-00-00 00:00:00', 1),
(10, 'raino', 'Rhinoceroses are large, herbivorous mammals identified by their characteristic horned snouts. The word "rhinoceros" comes from the Greek "rhino" (nose) and "ceros" (horn). There are five species and 11 subspecies of rhino; some have two horns, while others have one.', '1484313586-19_rhino.jpg', 2, '0000-00-00 00:00:00', 1),
(11, 'Deer', 'Deer are the ruminant mammals forming the family Cervidae. The two main groups are the Cervinae, including the muntjac, the fallow deer and the chital, and the Capreolinae, including the elk, reindeer, the Western roe deer, and the Eurasian elk', '1484313687-animals-wallpaper-hd-1080p-download-wallpaper-desktop-wallpaper.jpg', 3, '0000-00-00 00:00:00', 0),
(12, 'Bird', 'Birds, also known as avian dinosaurs, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a lightweight but strong skeleton.', '1484313746-1676b78248991f775c2d2dd0e521c97c.jpg', 3, '0000-00-00 00:00:00', 0),
(13, 'Panda', 'The giant panda, also known as panda bear or simply panda, is a bear native to south central China. It is easily recognized by the large, distinctive black patches around its eyes, over the ears, and across its round body.', '1484313815-national-geographic-animal-wallpaper-1080p.jpg', 3, '0000-00-00 00:00:00', 0),
(14, 'Galapagos Tortoise', 'The GalÃ¡pagos tortoise complex or GalÃ¡pagos giant tortoise complex are the largest living species of tortoise. Modern GalÃ¡pagos tortoises can weigh up to 417 kg.', '1484407764-7-galapagos-ecuador-wildlife-photography-by-piccaya.preview.jpg', 1, '0000-00-00 00:00:00', 0),
(15, 'Pullets', 'The chicken is a type of domesticated fowl, a subspecies of the red junglefowl. It is one of the most common and widespread domestic animals, with a population of more than 19 billion as of 2011', '1484408597-11b6cc10f2282b7cd95d9bafbe7d6ada.jpg', 1, '0000-00-00 00:00:00', 0),
(16, 'Fighting birds', 'Birds, also known as avian dinosaurs, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a lightweight but strong skeleton.', '1484408857-114c6e0abe5e282a40da4913829806f8.jpg', 1, '0000-00-00 00:00:00', 0),
(17, 'Butterfly', 'Butterflies are insects in the clade Rhopalocera from the order Lepidoptera, which also includes moths. Adult butterflies have large, often brightly coloured wings, and conspicuous, fluttering flight.', '1484408959-butterfly-611167_960_720.jpg', 1, '0000-00-00 00:00:00', 0),
(18, 'Gorilla', 'Gorillas are ground-dwelling, predominantly herbivorous apes that inhabit the forests of central Africa. The eponymous genus Gorilla is divided into two species: the eastern gorillas and the western gorillas, and either four or five subspecies', '1484409069-1484287246-images.jpg', 1, '0000-00-00 00:00:00', 0),
(19, 'Honeybird', 'Honeybirds are birds in the genus Prodotiscus of the honeyguide family. They are confined to sub-Saharan Africa. They are all drab coloured birds, with grey or grey-green upperparts, and grey to whitish-grey underparts', '1484409182-12-honey-bird-photography-by-piccaya.preview.jpg', 2, '0000-00-00 00:00:00', 0),
(20, ' Green Chameleon', 'Chameleons or chamaeleons are a distinctive and highly specialized clade of Old World lizards with 202 species described as of June 2015. These species come in a range of colors, and many species have the ability to change colors', '1484409460-13-wildlife-photography-by-piccaya.preview.jpg', 2, '0000-00-00 00:00:00', 1),
(21, 'Shark', 'Sharks are a group of fish characterized by a cartilaginous skeleton, five to seven gill slits on the sides of the head, and pectoral fins that are not fused to the head.', '1484409557-1484300148-a6ca6ae7-16b9-41f5-961e-8f2b6052ee24-2060x1373.jpeg', 2, '0000-00-00 00:00:00', 0),
(22, 'Raccon', 'The raccoon, sometimes spelled racoon, also known as the common raccoon, North American raccoon, northern raccoon and colloquially as coon, is a medium-sized mammal native to North America.', '1484409730-cute_raccoon_baby_wildlife_animals.jpg', 2, '0000-00-00 00:00:00', 0),
(23, 'Zebra', 'Zebras are several species of African equids united by their distinctive black and white striped coats. Their stripes come in different patterns, unique to each individual. They are generally social animals that live in small harems to large herds', '1484409811-download.jpg', 2, '0000-00-00 00:00:00', 0),
(24, 'Dragon Fly', ' dragonfly is an insect belonging to the order Odonata, infraorder Anisoptera. Adult dragonflies are characterized by large multifaceted eyes, two pairs of strong transparent wings, sometimes with coloured patches and an elongated body.', '1484412329-DRAGON FLY FLOWER.jpg', 3, '0000-00-00 00:00:00', 0),
(25, 'Bird', 'Birds, also known as avian dinosaurs, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a lightweight but strong skeleton', '1484412485-5032cd2fd05edee3045f219ba5bd8c9b.jpg', 3, '0000-00-00 00:00:00', 0),
(26, 'Deer', 'Deer are the ruminant mammals forming the family Cervidae. The two main groups are the Cervinae, including the muntjac, the fallow deer and the chital, and the Capreolinae, including the elk, reindeer, the Western roe deer, and the Eurasian elk', '1484412666-BVAZYLG.jpg', 3, '0000-00-00 00:00:00', 1),
(27, 'Fly', 'True flies are insects of the order Diptera, the name being derived from the Greek di = two, and ptera = wings', '1484412883-fly-459327_960_720.jpg', 3, '0000-00-00 00:00:00', 0),
(28, 'Eagle', 'Eagle is a common name for many large birds of prey of the family Accipitridae; it belongs to several groups of genera that are not necessarily closely related to each other. Most of the 60 species of eagles are from Eurasia and Africa.', '1484412995-eagle_by_michaelrumiz-d5hgpcy.jpg', 3, '0000-00-00 00:00:00', 0),
(29, 'Frog', 'A frog is any member of a diverse and largely carnivorous group of short-bodied, tailless amphibians composing the order Anura.', '1484413087-frog-1519009__340.jpg', 3, '0000-00-00 00:00:00', 0),
(30, 'Leopard', 'The leopard /ËˆlÉ›pÉ™rd/ is one of the five "big cats" in the genus Panthera. It is a member of the family Felidae with a wide range in sub-Saharan Africa and parts of Asia.', '1484413287-KWrsLG2.jpg', 4, '0000-00-00 00:00:00', 0),
(31, ' FlyingEagle', 'Eagle is a common name for many large birds of prey of the family Accipitridae; it belongs to several groups of genera that are not necessarily closely related to each other. Most of the 60 species of eagles are from Eurasia and Africa', '1484413472-kuIBxkm.jpg', 4, '0000-00-00 00:00:00', 2),
(32, 'Panther', 'Panther (legendary creature), a mythical creature resembling a large black cat', '1484413788-M5WnObw.jpg', 4, '0000-00-00 00:00:00', 0),
(33, 'Monkey', 'Monkeys are haplorhine primates, a group generally possessing tails and consisting of about 260 known living species. There are two distinct lineages of monkeys: New World Monkeys and catarrhines.', '1484413887-maxresdefault (3).jpg', 4, '0000-00-00 00:00:00', 0),
(34, 'Lion', 'The lion is one of the big cats in the genus Panthera and a member of the family Felidae. The commonly used term African lion collectively denotes the several subspecies in Africa', '1484414051-pixweb401.jpg', 4, '0000-00-00 00:00:00', 0),
(35, 'tiger in Black and White', 'The tiger is the largest cat species, most recognisable for their pattern of dark vertical stripes on reddish-orange fur with a lighter underside. The species is classified in the genus Panthera with the lion, leopard, jaguar and snow leopard.', '1484414167-lion-black-and-white-wallpapers-android.jpg', 4, '0000-00-00 00:00:00', 0),
(36, 'Wolf', 'The gray wolf or grey wolf, also known as the timber wolf or western wolf, is a canine native to the wilderness and remote areas of Eurasia and North America.', '1484414285-wolf-photography.jpg', 4, '0000-00-00 00:00:00', 0),
(37, 'Eagle Catching something', 'Eagle is a common name for many large birds of prey of the family Accipitridae; it belongs to several groups of genera that are not necessarily closely related to each other. Most of the 60 species of eagles are from Eurasia and Africa.', '1484414462-maxresdefault (4).jpg', 4, '0000-00-00 00:00:00', 1),
(38, 'Wild Bear', 'The brown bear (Ursus arctos) is a large bear with the widest distribution of any living ursid. ..... The brown bear is the largest wild animal on the Iberian Peninsula, although one of the smallest of the brown bears, weigh between 92 and 180 kg ..', '1484414737-wild-bear-having-bath-in-lake-watching-his-feet-t2.jpg', 4, '0000-00-00 00:00:00', 0),
(39, 'Fly', 'True flies are insects of the order Diptera, the name being derived from the Greek di = two, and ptera = wings.', '1484420998-DSCN6601-L.jpg', 5, '0000-00-00 00:00:00', 0),
(40, 'Baby Bear', 'Bears are placental mammals of the family Ursidae. Bears are classified as caniforms, or doglike carnivorans, with the pinnipeds as their closest living relatives', '1484421139-shutterstock_114956821.jpg', 5, '0000-00-00 00:00:00', 0),
(41, 'African elephant', 'African elephants are elephants of the genus Loxodonta, from Greek Î»Î¿Î¾ÏŒÏ‚ + á½€Î´Î¿ÏÏ‚. The genus consists of two extant species: the African bush elephant, L. africana, and the smaller African forest elephant, L. cyclotis.', '1484421379-1484287086-3-africa-elephant-wildlife-photography-by-piccaya.preview.jpg', 5, '0000-00-00 00:00:00', 1),
(42, 'Parot', 'Parrots, also known as psittacines /ËˆsÉªtÉ™saÉªnz/, are birds of the roughly 393 species in 92 genera that make up the order Psittaciformes, found in most tropical and subtropical regions', '1484421462-3cffdccdc2ea12b81f771d8e6df4c82f.jpg', 5, '0000-00-00 00:00:00', 0),
(43, 'Water Deer ', 'The two main groups are the Cervinae, including the muntjac, the fallow deer and the chital, and the Capreolinae, including the elk, reindeer (caribou), the Western roe deer, and the Eurasian elk (moose). Female reindeer, and male deer of all species (except the Chinese water deer), grow and shed new antlers each yea', '1484421602-1484287207-deer-1161509_960_720.jpg', 5, '0000-00-00 00:00:00', 0),
(44, 'Ducks', 'Ducks is the common name for a large number of species in the waterfowl family Anatidae, which also includes swans and geese', '1484422035-14-wildlife-photography-by-piccaya.preview.jpg', 6, '0000-00-00 00:00:00', 0),
(45, 'Duck', 'Duck is the common name for a large number of species in the waterfowl family Anatidae, which also includes swans and geese', '1484422917-maxresdefault (5).jpg', 5, '0000-00-00 00:00:00', 0),
(46, 'Frog', 'A frog is any member of a diverse and largely carnivorous group of short-bodied, tailless amphibians composing the order Anura.', '1484424034-wildlife_8.jpg', 5, '0000-00-00 00:00:00', 0),
(47, 'leopard in focusing', 'The leopard /ËˆlÉ›pÉ™rd/ is one of the five "big cats" in the genus Panthera. It is a member of the family Felidae with a wide range in sub-Saharan Africa and parts of Asia', '1484424168-male_amur_leopard_wildlife_heritage_uk-wide.jpg', 5, '0000-00-00 00:00:00', 0),
(48, 'Tiger', 'The tiger is the largest cat species, most recognisable for their pattern of dark vertical stripes on reddish-orange fur with a lighter underside', '1484424313-71137267cba8ce5de12fe7af83b48bc5.jpg', 5, '0000-00-00 00:00:00', 0),
(49, 'Crocodile', 'Crocodiles or true crocodiles are large aquatic reptiles that live throughout the tropics in Africa, Asia, the Americas and Australia. Crocodylinae, all of whose members are considered true crocodiles, is classified as a biological subfamily.', '1484424495-6-crocodile-wildlife-photography-by-piccaya.preview.jpg', 6, '0000-00-00 00:00:00', 0),
(50, 'Ostrich', 'The ostrich or common ostrich is either one or two species of large flightless birds native to Africa, the only living member of the genus Struthio, which is in the ratite family. In 2014, the Somali ostrich was recognized as a distinct specie', '1484424619-bird-961263_960_720.jpg', 6, '0000-00-00 00:00:00', 0),
(51, 'Butterfly', 'Butterflies are insects in the clade Rhopalocera from the order Lepidoptera, which also includes moths. Adult butterflies have large, often brightly coloured wings, and conspicuous, fluttering flight.', '1484424686-Purple-Butterfly-hd-wallpapaer.jpg', 6, '0000-00-00 00:00:00', 0),
(52, 'Bird Fighting Crocodile', 'Bird are fighting with Crocodiles or true that  crocodiles are large aquatic reptiles that live throughout the tropics in Africa, Asia, the Americas and Australia. Crocodylinae, all of whose members are considered true crocodiles, is classified as a biological subfamily.', '1484424877-wild-life-photography-24.jpg', 6, '0000-00-00 00:00:00', 1),
(53, 'Aferican Giraffe with his baby giraffe', ' Giraffe is a genus of African even-toed ungulate mammals, the tallest living terrestrial animals and the largest ruminants. The genus consists of eleven species including Giraffa camelopardalis, the type species.', '1484425076-African_Giraffe_with_His_Baby_in_Jungle_HD_Wallpaper.jpg', 6, '0000-00-00 00:00:00', 0),
(54, 'Baby Panda', ' Giant panda, also known as panda bear or simply panda, is a bear native to south central China. It is easily recognized by the large, distinctive black patches around its eyes, over the ears, and across its round body.', '1484425544-3dba292ee696c50f69f76ecaedbb8e41.jpg', 6, '0000-00-00 00:00:00', 0),
(55, 'Owl Bird', 'Owls are birds from the order Strigiformes, which includes about 200 species of mostly solitary and nocturnal birds of prey typified by an upright stance, a large, broad head, binocular vision', '1484425640-owl_bird_predator_eyes_feathers_66601_1920x1080.jpg', 6, '0000-00-00 00:00:00', 1),
(56, 'Squirrels', 'Squirrels are members of the family Sciuridae, a family that includes small or medium-size rodents. The squirrel family includes tree squirrels, ground squirrels, chipmunks, marmots, flying squirrels, and prairie dogs amongst other rodents.', '1484425706-other46.jpg', 6, '0000-00-00 00:00:00', 0),
(57, 'Lion and Baby Lion', ' Lion is one of the big cats in the genus Panthera and a member of the family Felidae. The commonly used term African lion collectively denotes the several subspecies in Africa', '1484425894-Lovely-wild-animals-sweet-kiss-from-baby-lion_1920x1080.jpg', 7, '0000-00-00 00:00:00', 0),
(58, ' beauty Butterfly', ' A Butterflies are insects in the clade Rhopalocera from the order Lepidoptera, which also includes moths. Adult butterflies have large, often brightly coloured wings, and conspicuous, fluttering flight.', '1484425996-butterfly-wallpaper-19-1024x576.jpg', 7, '0000-00-00 00:00:00', 0),
(59, 'Running Lion', 'A lion is one of the big cats in the genus Panthera and a member of the family Felidae. The commonly used term African lion collectively denotes the several subspecies in Africa', '1484426079-maxresdefault.jpg', 7, '0000-00-00 00:00:00', 0),
(60, 'Pigeons', 'Pigeons and doves constitute the bird family Columbidae, which includes about 310 species. Pigeons and doves are stout-bodied birds with short necks', '1484426346-dove-862558_960_720.jpg', 7, '0000-00-00 00:00:00', 1),
(61, 'Viper Snake with Fly', 'The Viperidae are a family of venomous snakes found in most parts of the world, excluding Antarctica, Australia, New Zealand, Madagascar, Hawaii, various other isolated islands, and north of the Arctic Circle.', '1484426690-national-geographic-traveler-photo-contest-2013-20.jpg', 7, '0000-00-00 00:00:00', 0),
(62, 'Rabbit', 'Rabbits are small mammals in the family Leporidae of the order Lagomorpha, found in several parts of the world.', '1484427084-enhanced-mid-25866-1449588074-24.jpg', 7, '0000-00-00 00:00:00', 1),
(63, ' Baby Duck', ' the Baby Duck is the common name for a large number of species in the waterfowl family Anatidae, which also includes swans and geese.', '1484427289-duck-1978053_960_720.jpg', 7, '0000-00-00 00:00:00', 0),
(64, ' Focusing Leopard', 'A  leopard /ËˆlÉ›pÉ™rd/ is one of the five "big cats" in the genus Panthera. It is a member of the family Felidae with a wide range in sub-Saharan Africa and parts of Asia', '1484427414-cheetah-stroll.jpg', 7, '0000-00-00 00:00:00', 0),
(65, 'Yellow Bird', 'Yellow Birds, also known as avian dinosaurs, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a lightweight but strong skeleton.', '1484427561-4513234-wildlife-wallpapers.jpg', 7, '0000-00-00 00:00:00', 0),
(66, 'Tiger in Front of Camera', 'A tiger is the largest cat species, most recognisable for their pattern of dark vertical stripes on reddish-orange fur with a lighter underside', '1484463243-02212_thestare_1920x1080.jpg', 8, '0000-00-00 00:00:00', 0),
(67, 'Reptile Snake', 'Snakes are elongated, legless, carnivorous reptiles of the suborder Serpentes that can be distinguished from legless lizards by their lack of eyelids and external ears', '1484463806-Neo-tropical-Rattlesnake.jpg', 8, '0000-00-00 00:00:00', 0),
(68, 'Pretty Peacock', 'Peacock  include two Asiatic bird species and one African species of birds in the genera Pavo and Afropavo of the Phasianidae family, the pheasants and their allies', '1484463949-pexels-photo-129464.jpeg', 8, '0000-00-00 00:00:00', 1),
(69, 'WildLife Birds', ' A Birds, also known as avian dinosaurs, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a lightweight but strong skeleton.', '1484464064-48864a53a9932d4fb7296991301417ab.jpg', 8, '0000-00-00 00:00:00', 0),
(70, 'Australian Deer', 'A Deer are the ruminant mammals forming the family Cervidae. The two main groups are the Cervinae, including the muntjac, the fallow deer and the chital, and the Capreolinae, including the elk, reindeer, the Western roe deer, and the Eurasian elk', '1484464249-1-deer-wildlife-photography-by-piccaya.preview.jpg', 8, '0000-00-00 00:00:00', 0),
(71, 'Baby Lion With lioness', 'A female lion is called a lioness. Lions are the only members of the cat family to show a difference in appearance between the male and the female. Lionesses have a short coat of stiff, tan hair and lack the mane that characterizes male lions', '1484464512-lioness_cub.jpg', 8, '0000-00-00 00:00:00', 0),
(72, 'Brown Bear', 'A Bear are placental mammals of the family Ursidae. Bears are classified as caniforms, or doglike carnivorans, with the pinnipeds as their closest living relatives', '1484464630-Photo_Hakan_Vargas_Brown_Bear_3.jpg', 8, '0000-00-00 00:00:00', 0),
(73, 'Bigstock Owl', ' TheOwls are birds from the order Strigiformes, which includes about 200 species of mostly solitary and nocturnal birds of prey typified by an upright stance, a large, broad head, binocular vision', '1484464928-bigstock-Barn-Owl-Standing-On-The-Moss-50797358-1024x682.jpg', 8, '0000-00-00 00:00:00', 0),
(74, 'Mexican Gray Wolf', 'The Mexican wolf, also known as the lobo, is a subspecies of gray wolf once native to southeastern Arizona, southern New Mexico, western Texas and northern Mexico.', '1484465036-Mexican-Gray-Wolf-NYWCC.jpg', 8, '0000-00-00 00:00:00', 0),
(75, 'North Deer', ' North Deer are the ruminant mammals forming the family Cervidae. The two main groups are the Cervinae, including the muntjac, the fallow deer and the chital, and the Capreolinae, including the elk, reindeer, the Western roe deer, and the Eurasian elk', '1484465149-yaet04ezfc5e8afgqa7n.jpeg', 8, '0000-00-00 00:00:00', 0),
(76, 'Golden Eagle', 'The golden eagle is one of the best-known birds of prey in the Northern Hemisphere. It is the most widely distributed species of eagle. Like all eagles, it belongs to the family Accipitridae', '1484465381-4977375465_f865324a53_o.jpg', 9, '0000-00-00 00:00:00', 0),
(77, 'Indian Monkey', 'A Monkeys are haplorhine primates, a group generally possessing tails and consisting of about 260 known living species. There are two distinct lineages of monkeys: New World Monkeys and catarrhines.', '1484465669-makake-1786954__340.jpg', 9, '0000-00-00 00:00:00', 0),
(78, 'Asian Elephant', 'The Asian or Asiatic elephant is the only living species of the genus Elephas and is distributed in Southeast Asia from India in the west to Borneo in the east', '1484465969-Asian_Elephant_Elephas_maximus.jpg', 9, '0000-00-00 00:00:00', 0),
(79, 'Spider', 'Spiders (order Araneae) are air-breathing arthropods that have eight legs and chelicerae with fangs that inject venom. They are the largest order of arachnids ...', '1484466044-bug-spider-web-photography-abstract-nature-wild-animals-close-up-wildlife-insects-macro-wilderness-wallpaper-ipad.jpg', 9, '0000-00-00 00:00:00', 0),
(80, 'HoneyBee', 'A honey bee is any bee member of the genus Apis, primarily distinguished by the production and storage of honey and the construction of perennial, colonial nests from wax.', '1484466525-animal-macro-wallpaper-4.jpg', 9, '0000-00-00 00:00:00', 1),
(81, 'Beautiful White Umbrella Cockatoo Bird', 'The white cockatoo, also known as the umbrella cockatoo, is a medium-sized all-white cockatoo endemic to tropical rainforest on islands of Indonesia. When surprised, it extends a large and striking head crest, which has a semicircular shape', '1484466757-Beautiful-White-Umbrella-Cockatoo-Bird.jpg', 9, '0000-00-00 00:00:00', 0),
(82, 'Red Faced Warbler', 'The red-faced warbler is a species of New World warbler. Mature red-faced warblers are small birds, 14 cm long. They are light gray on top with a white rump and a white underside.', '1484466831-red-faced-warbler-2.jpg', 9, '0000-00-00 00:00:00', 0),
(83, ' White  American Duck  ', 'The American Pekin duck, Pekin duck, or Long Island duck is a breed of domestic duck used ... Over time, the ducks slowly increased in size and grew white feathers. By the Five Dynasties,', '1484466979-2866315.jpg', 9, '0000-00-00 00:00:00', 0),
(84, 'Vissza kell hozni ', 'The large blue is a species of butterfly in the Lycaenidae family. The species was first defined in 1758 and first discovered in Britain in 1795', '1484467120-large_blue_butterfly.jpg', 9, '0000-00-00 00:00:00', 0),
(85, 'Red Ant', 'Ants are eusocial insects of the family Formicidae and, along with the related wasps and bees, belong to the order Hymenoptera.', '1484467212-00018bcc.jpeg', 10, '0000-00-00 00:00:00', 0),
(86, 'Fox', 'The red fox, largest of the true foxes, has the greatest geographic range of all members of the Carnivora family, being present across the entire Northern Hemisphere from the Arctic Circle to North Africa, North America and Eurasia.', '1484467302-coyote-931142_960_720.jpg', 10, '0000-00-00 00:00:00', 0),
(87, 'weasel-riding-woodpecker', 'The woodpeckers are part of the Picidae family, a group of near-passerine birds that also consist of piculets, wrynecks, and sapsuckers', '1484467543-weasel-riding-woodpecker-wildlife-photography-martin-le-may-1.jpg', 10, '0000-00-00 00:00:00', 0),
(88, 'Rat Eat', 'Rats are various medium-sized, long-tailed rodents of the superfamily Muroidea. "True rats" are members of the genus Rattus, the most important of which to humans are the black rat, Rattus rattus, and the brown rat, Rattus norvegicus.', '1484467681-b18d74b096aff9efaa5359ac6af5043d.jpg', 10, '0000-00-00 00:00:00', 0),
(89, 'Baby Gorilla', 'A Gorillas are ground-dwelling, predominantly herbivorous apes that inhabit the forests of central Africa. The eponymous genus Gorilla is divided into two species: the eastern gorillas and the western gorillas, and either four or five subspecies', '1484467825-conservation_encyclopaedia_254.jpg', 10, '0000-00-00 00:00:00', 0),
(90, 'Frog Eye', 'Frog is any member of a diverse and largely carnivorous group of short-bodied, tailless amphibians composing the order Anura.', '1484468052-toad.jpg', 10, '0000-00-00 00:00:00', 0),
(91, 'Greater Roadrunner', 'The greater roadrunner is a long-legged bird in the cuckoo family, Cuculidae, from Southwestern United States and Mexico. The Latin name means "Californian earth-cuckoo".', '1484468193-5370_linstead_roadrunner_thumb.jpg', 10, '0000-00-00 00:00:00', 0),
(92, 'Yellow Butterfly', ' Yellow Butterflies are insects in the clade Rhopalocera from the order Lepidoptera, which also includes moths. Adult butterflies have large, often brightly coloured wings, and conspicuous, fluttering flight.', '1484468320-472702233.jpg', 10, '0000-00-00 00:00:00', 0),
(93, 'Fantastic Peacock', 'Peacock include two Asiatic bird species and one African species of birds in the genera Pavo and Afropavo of the Phasianidae family, the pheasants and their allies, ', '1484468657-birds-of-a-feather.jpg', 10, '0000-00-00 00:00:00', 1),
(94, 'The stare of death', ' Saroo must learn to survive alone in Kolkata, before ultimately being adopted by an Australian couple. Twenty five years later, armed with only a handful of memories', '1484468743-8.jpg', 10, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photographer_register`
--

CREATE TABLE `photographer_register` (
  `Photographer_Register_ID` int(11) NOT NULL,
  `Photographer_Fname` varchar(250) NOT NULL,
  `Photographer_Lname` varchar(250) NOT NULL,
  `Photographer_Gender` varchar(10) NOT NULL,
  `Photographer_Birthdate` date NOT NULL,
  `Photographer_City` varchar(250) NOT NULL,
  `Photographer_Email` varchar(250) NOT NULL,
  `Photographer_Pswd` varchar(20) NOT NULL,
  `Photographer_Mobile` varchar(13) NOT NULL,
  `Photographer_Picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer_register`
--

INSERT INTO `photographer_register` (`Photographer_Register_ID`, `Photographer_Fname`, `Photographer_Lname`, `Photographer_Gender`, `Photographer_Birthdate`, `Photographer_City`, `Photographer_Email`, `Photographer_Pswd`, `Photographer_Mobile`, `Photographer_Picture`) VALUES
(1, 'David', 'Maitland', 'Male', '1983-02-20', 'Sydney', 'david@davidmaitland.com', 'David20', '441842828412', '1484305459-David Maitland.jpg'),
(2, 'Brian ', 'Skerry', 'Male', '1962-08-11', ' Milford', 'SkerryBrian@gmail.com', 'Brian11', '5082783737', '1484305937-brian-skerry.jpg'),
(3, 'Steve', 'Winter', 'Male', '1978-09-10', 'New Jersey', 'stevewinter@gmail.com', 'Steve10', '2028577351', '1484306385-Steve Winter.jpeg'),
(4, 'Cyril', 'Ruoso', 'Male', '1976-12-01', 'Valencia', 'contact@ruoso-grundmann.com', 'Cyril01', '4439813582', '1484307227-5-0_CyrilRuoso-Camera.jpg'),
(5, 'Stefano ', 'Unterthiner', 'Male', '1986-08-29', 'Rome', 'info@stefanounterthiner.com', 'Stefano29', '3476951159', '1484307535-Stefano Unterthiner.jpg'),
(6, 'Antoni', 'Kasprzak', 'Male', '1989-02-03', 'Golina', 'Kasprzak0314@gmail.com', 'Kasprzak', '3128943714', '1484308157-antoni-kasprzak (1).jpg'),
(7, 'Dave', 'Watts', 'Male', '1985-01-01', 'Perth', 'wattsdave@gmail.com', 'Dave01', '1287452397', '1484308436-dave-watts.png'),
(8, 'Daniel', 'Beltra', 'Male', '1981-08-28', 'Washington', 'DanielBeltra@gmail.com', 'Daniel28', '1337652398', '1484308733-04-daniel-beltra.jpg'),
(9, 'Peter ', 'Chadwick', 'Male', '1991-02-05', ' England', 'chadwickpeter02@gmail.com', 'Chadwick05', '2287456132', '1484308952-peter-chadwick1.jpg'),
(10, 'Andy', 'Rouse', 'Male', '1986-05-30', 'London', 'rouse30@gmail.com', 'Andy30', '0223145973', '1484309101-andy-rouse-madagascar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photo_comment`
--

CREATE TABLE `photo_comment` (
  `Photo_Comment_ID` int(11) NOT NULL,
  `Photo_Comment_Date` date NOT NULL,
  `Photo_Comment_Desc` varchar(250) NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL,
  `Photo_ID` int(11) NOT NULL,
  `User_Register_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_comment`
--

INSERT INTO `photo_comment` (`Photo_Comment_ID`, `Photo_Comment_Date`, `Photo_Comment_Desc`, `Photographer_Register_ID`, `Photo_ID`, `User_Register_ID`) VALUES
(1, '2011-08-06', ' I have been a wildlife photographer for almost seven years now, and a professional for the last few of them. Over time I have picked up some really valuable techniques and tips, specific to wildlife photography, gained from either experience or lear', 1, 1, 1),
(2, '2012-09-23', 'Watch an animalâ€™s behavioural traits and try to pick up on clues it gives as to its next movement. With practise, youâ€™ll often be able to predict where an animal will move to next, or what it will do.', 3, 13, 2),
(3, '2011-05-06', 'If you take a burst of photos of it moving through the area, aperture priority mode will adjust the settings and ensure your images are correctly exposed. I', 4, 32, 3),
(4, '2013-07-22', 'wildlife photography is all about time and patience"... that, and a fair chunk of luck, when you have been waiting for hours, and the subject suddenly decides to cooperate', 9, 79, 1),
(5, '2015-01-06', 'What a fantastic shot of that squirrel. But you know,  I am thinking, that though the bokeh is beautiful, it would have been nice to see something of the "jungle" behind the animal to give it a bit more context. but that just me.', 6, 56, 4),
(6, '2013-05-10', ' I started with program mode and then moved to aperture priority. I have been shooting this for years and use ISO and Exposure compensation. has a made a lot of difference to my image making skills.', 8, 67, 8),
(7, '2016-11-30', 'Nice Photos... and wild Photography is not a easy thing because there many difficulties to find your subject and then focus on subject and shoot it from the place which can be uncomfortable and after all that, sometimes it difficult to get a good sho', 7, 64, 7);

-- --------------------------------------------------------

--
-- Table structure for table `photo_like`
--

CREATE TABLE `photo_like` (
  `Photo_Like_ID` int(11) NOT NULL,
  `Photo_ID` int(11) NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `User_Register_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_like`
--

INSERT INTO `photo_like` (`Photo_Like_ID`, `Photo_ID`, `Photographer_Register_ID`, `likes`, `User_Register_ID`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 1, 2),
(3, 2, 1, 1, 4),
(4, 2, 1, 1, 5),
(5, 2, 1, 1, 6),
(6, 3, 1, 1, 8),
(7, 11, 3, 1, 9),
(8, 11, 3, 1, 1),
(9, 32, 4, 1, 5),
(10, 38, 4, 1, 9),
(11, 48, 5, 1, 10),
(12, 51, 6, 1, 7),
(13, 51, 6, 1, 10),
(14, 40, 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_ID` int(11) NOT NULL,
  `State_Name` varchar(250) NOT NULL,
  `Country_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_ID`, `State_Name`, `Country_ID`) VALUES
(1, 'Andhra Pradesh', 1),
(2, 'Arunachal Pradesh', 1),
(3, 'Assam', 1),
(4, 'Bihar', 1),
(5, 'Chandigarh', 1),
(6, 'Chhattisgarh', 1),
(7, '	Daman and Diu', 1),
(8, 'Delhi', 1),
(9, '	Goa', 1),
(10, '	Gujarat', 1),
(11, 'Haryana', 1),
(12, '	Himachal Pradesh', 1),
(13, '	Jammu and Kashmir', 1),
(14, 'Jharkhand', 1),
(15, 'Karnataka', 1),
(16, 'Kerala', 1),
(17, 'Maharashtra', 1),
(18, 'Punjab', 1),
(19, 'Rajasthan', 1),
(20, 'Uttar Pradesh', 1),
(21, 'Tasmania', 2),
(22, 'Victoria', 2),
(23, 'Western Australia', 2),
(24, 'South Australia', 2),
(25, 'Queensland', 2),
(26, 'Dhaka', 3),
(27, 'Chittagong', 3),
(28, 'Khulna', 3),
(29, 'Rajshahi', 3),
(30, 'Ontario', 4),
(31, 'British Columbia', 4),
(32, 'Alberta', 4),
(33, 'Copenhagen', 5),
(34, 'Aarhus', 5),
(35, 'Odense', 5),
(36, 'Cairo', 6),
(37, 'Alexandria', 6),
(38, 'Giza', 6),
(39, 'Paris', 7),
(40, 'Marseille', 7),
(41, 'Lyon', 7),
(42, 'Berlin', 8),
(43, '	Hamburg', 8),
(44, 'Bavaria', 8),
(45, 'Victoria', 9),
(46, 'Kowloon including New Kowloon', 9),
(47, 'Aomor', 10),
(48, 'Matsue', 10),
(49, 'Chiba', 10),
(50, 'Nairobi', 11),
(51, 'Daugavpils', 12),
(52, 'Jekabpils', 12),
(53, 'Southern Mongolia', 13),
(54, 'Khamag Mongol Khanate', 13),
(55, '	South Pyongan', 14),
(56, 'North Hamgyong', 14),
(57, '	South Hwanghae', 14),
(58, 'Ad Dakhiliyah', 15),
(59, 'Al Buraim', 15),
(60, 'Ash Sharqiyah North', 15),
(61, 'Quezon City,', 16),
(62, 'Palayan', 16),
(63, 'Manila', 16),
(64, 'Virginia', 17),
(65, 'Indiana', 17),
(66, 'Texas', 17),
(67, 'Doha', 18),
(68, 'Abu az Zuluf', 18),
(69, 'Abu Thaylah', 18),
(70, '	Moscow', 19),
(71, '	Saint Petersburg', 19),
(72, '	Novosibirsk', 19),
(73, 'Alexandra', 20),
(74, 'Aljunied', 20),
(75, 'Bishan', 20),
(76, 'New Taipei', 21),
(77, 'Taichung', 1),
(78, 'Taipei', 21),
(79, 'England', 22),
(80, 'Scotland', 22),
(81, 'Wales', 22),
(82, 'Sana', 23),
(83, '	Al Hudaydah', 23),
(84, '	Bulawayo Province', 24),
(85, '	Manicaland', 24),
(86, '	Mashonaland Central', 24),
(87, '	Mato Grosso', 25),
(88, '	Bahia', 25),
(89, '	Minas Gerais', 25),
(90, 'Buenos Aires', 26),
(91, 'Mendoza', 26),
(92, 'La Plata', 26),
(93, 'Rome', 27),
(94, 'Milan', 27),
(95, 'Naples', 27),
(96, 'Shanghai', 28),
(97, 'Tianjin', 28),
(98, 'Macau', 28),
(99, 'Selangor', 29),
(100, 'Johor', 29),
(101, 'Sarawak', 29),
(102, 'Nassau', 30),
(103, 'FreePort', 30),
(104, 'West End', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `User_Register_ID` int(11) NOT NULL,
  `User_Fname` varchar(250) NOT NULL,
  `User_Lname` varchar(250) NOT NULL,
  `User_Gender` varchar(10) NOT NULL,
  `User_Birthdate` date NOT NULL,
  `User_City` varchar(250) NOT NULL,
  `User_Email` varchar(250) NOT NULL,
  `User_Pswd` varchar(20) NOT NULL,
  `User_Mobile` varchar(13) NOT NULL,
  `User_Picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`User_Register_ID`, `User_Fname`, `User_Lname`, `User_Gender`, `User_Birthdate`, `User_City`, `User_Email`, `User_Pswd`, `User_Mobile`, `User_Picture`) VALUES
(1, 'Rishabh', 'Shrotriya', 'Male', '1995-01-01', 'Bareilly', 'rishabhshrotriya01@gmail.com', 'Rishabh01', '7043668554', '1484309410-user-4.jpg'),
(2, 'Parth', 'Kolaliya', 'Male', '1997-03-24', 'Ahmedabad', 'kolaliya@gmail.com', 'Parth254', '8488868889', '1484309558-user-19.jpg'),
(3, 'Deep', 'Mehta', 'Male', '1994-11-30', 'Una', 'mehtadeep@gmail.com', 'Deep30', '9428894088', '1484309679-user-13.jpg'),
(4, 'Tammana', 'Nankani', 'Female', '1998-02-01', 'Vadodara', 'tammana01@gmail.com', 'Tammana01', '9428111978', '1484309829-user-2.jpg'),
(5, 'Jeel', 'Gosaliya', 'Female', '1989-08-21', 'Pune', 'jeel@gmail.com', 'Jeel21', '9821387543', '1484309923-user-3.jpg'),
(6, 'Payal', 'Rawad', 'Female', '2003-11-24', 'Palam', 'payalrawat24@gmail.com', 'Payal24', '7041423513', '1484310164-user-17.jpg'),
(7, 'Harsh', 'Gupta', 'Male', '1991-05-12', 'Mumbai', 'harsh1205@gmail.com', 'Harsh12', '8866775956', '1484310278-user-8.jpg'),
(8, 'Prasham', 'Shah', 'Male', '1995-03-25', 'Surat', 'shahprasham@gmail.com', 'Prasham25', '9429761238', '1484310354-user-12.jpg'),
(9, 'Chintan', 'Jayani', 'Male', '1992-04-23', 'Kanpur', 'chintanjayani@gmail.com', 'Chintan23', '8943871235', '1484310549-user-13.jpg'),
(10, 'Mehul', 'Jadav', 'Male', '1997-10-11', 'Ahmedabad', 'mehul@gmail.com', 'Mehul11', '9845871235', '1484310636-user-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `Video_ID` int(11) NOT NULL,
  `Video_Title` varchar(250) NOT NULL,
  `Video_Desc` text NOT NULL,
  `Video_URL` varchar(250) NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL,
  `Video_Upload_Dateandtime` datetime NOT NULL,
  `Spam_Count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Video_ID`, `Video_Title`, `Video_Desc`, `Video_URL`, `Photographer_Register_ID`, `Video_Upload_Dateandtime`, `Spam_Count`) VALUES
(1, 'Little Owl', 'Little Owl Pulling up worms', '1484591108-Little Owl pulling up worms.mp4', 1, '2010-05-10 00:00:00', 0),
(2, 'Tortoises', 'Tortoises at De hoop nature', '1484591501-Tortoises at De Hoop Nature Reserve.3gp', 3, '2011-03-25 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video_comment`
--

CREATE TABLE `video_comment` (
  `Video_Comment_ID` int(11) NOT NULL,
  `Video_Comment_Date` date NOT NULL,
  `Video_Desc` text NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL,
  `Video_ID` int(11) NOT NULL,
  `User_Register_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_like`
--

CREATE TABLE `video_like` (
  `Video_Like_ID` int(11) NOT NULL,
  `Video_ID` int(11) NOT NULL,
  `User_Register_ID` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `Photographer_Register_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Blog_ID`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`Blog_Comment_ID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_ID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`Country_ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `event_like`
--
ALTER TABLE `event_like`
  ADD PRIMARY KEY (`Like_ID`);

--
-- Indexes for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD PRIMARY KEY (`Event_Registration_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Message_ID`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`Photo_ID`);

--
-- Indexes for table `photographer_register`
--
ALTER TABLE `photographer_register`
  ADD PRIMARY KEY (`Photographer_Register_ID`);

--
-- Indexes for table `photo_comment`
--
ALTER TABLE `photo_comment`
  ADD PRIMARY KEY (`Photo_Comment_ID`);

--
-- Indexes for table `photo_like`
--
ALTER TABLE `photo_like`
  ADD PRIMARY KEY (`Photo_Like_ID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_ID`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`User_Register_ID`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`Video_ID`);

--
-- Indexes for table `video_comment`
--
ALTER TABLE `video_comment`
  ADD PRIMARY KEY (`Video_Comment_ID`);

--
-- Indexes for table `video_like`
--
ALTER TABLE `video_like`
  ADD PRIMARY KEY (`Video_Like_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Blog_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `Blog_Comment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `City_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `Country_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `event_like`
--
ALTER TABLE `event_like`
  MODIFY `Like_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `Event_Registration_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `Message_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `Photo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `photographer_register`
--
ALTER TABLE `photographer_register`
  MODIFY `Photographer_Register_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `photo_comment`
--
ALTER TABLE `photo_comment`
  MODIFY `Photo_Comment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `photo_like`
--
ALTER TABLE `photo_like`
  MODIFY `Photo_Like_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `State_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `User_Register_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `Video_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video_comment`
--
ALTER TABLE `video_comment`
  MODIFY `Video_Comment_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video_like`
--
ALTER TABLE `video_like`
  MODIFY `Video_Like_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
