-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 14 2019 г., 11:55
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`email`, `password`) VALUES
('mnegal@outlook.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(400) NOT NULL,
  `subheading` varchar(400) NOT NULL,
  `image` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `heading`, `subheading`, `image`, `description`, `category`, `event_date`) VALUES
(9, 'Catching the Invisible', 'This image by the Event Horizon Telescope project shows the event horizon of the supermassive black hole at the heart of the M87 galaxy.', 'assets/news_pictures/bleck_hole.jpg', 'You\'re looking at the brand-new, first-ever close-up picture of a black hole. This image of the black hole M87 at the center of the Virgo A galaxy is the result of an international, 2-year-long effort to zoom in on the singularity. It reveals, for the first time, the contours of a black hole\'s event horizon, the point beyond which no light or matter escapes.\r\n\r\nM87 is 53 million light-years away, deep in the center of a distant galaxy, surrounded by clouds of dust and gas and other matter, so no visible light telescope could see the black hole through all that gunk. It\'s not the nearest black hole or even the nearest supermassive black hole. But it\'s so huge (as wide as our entire solar system, and 6.5 billion times the mass of the sun) that it\'s one of the two biggest-appearing in Earth\'s sky. (The other is Sagittarius A* at the center of the Milky Way.) To make this image, astronomers networked radio telescopes all over the world to magnify M87 to unprecedented resolution. They called the combined network the Event Horizon Telescope.\r\n\r\nThat name is appropriate because this image isn\'t the black hole itself. Black holes emit no radiation, or at least nowhere near enough to be detected using existing telescopes. But at their edges, just before the singularity\'s gravity becomes too intense for even light to escape, black holes accelerate matter to extreme speeds. That matter, just before falling past the horizon, rubs against itself at high speed, generating energy and glowing. The radio waves that the Event Horizon Telescope detected were part of that process. [9 Facts About Black Holes That Will Blow Your Mind]\r\n\r\n&quot;This image forms a clear link now between supermassive black holes and bright galaxies,&quot; said Sheperd Doeleman, a Harvard astrophysicist and director of the Event Horizon Telescope at a National Science Foundation press conference.\r\n\r\nIt confirms that large galaxies like Virgo A (and the Milky Way) are held together by supermassive black holes, Doeleman said.', 'space', '2019-04-12'),
(10, 'Ice Ages occur when tropical islands and continents collide', 'Collisions in tropics expose rocks that take up carbon dioxide, cooling normally balmy Earth', 'assets/news_pictures/climate.jpg', 'Earth\'s steady state is warm and balmy, but half a dozen times over the past billion years, the planet developed ice caps and glaciers. Researchers have now amassed evidence that these cold snaps occurred when tectonic activity propelled continents headlong into volcanic island arcs in the tropics, uplifting ophiolites that rapidly absorbed carbon dioxide, cooling Earth. Once collisions stopped, CO2 again built up from volcanic eruptions and a runaway greenhouse effect warmed the planet.', 'EARTH &amp; CLIMATE', '2019-04-11'),
(11, 'NASA\'s landmark Twins Study reveals the resilience of the human body in space', 'Newly published research reveals some interesting, surprising and reassuring data about how one human body adapted to -- and recovered from -- the extreme environment of space.', 'assets/news_pictures/nasa_twins.jpg', 'The Twins Study provides the first integrated biomolecular view into how the human body responds to the spaceflight environment, and serves as a genomic stepping stone to better understand how to maintain crew health during human expeditions to the Moon and Mars.\r\n\r\nRetired NASA astronauts Scott Kelly and his identical twin brother Mark, participated in the investigation, conducted by NASA\'s Human Research Program. Mark provided a baseline for observation on Earth, and Scott provided a comparable test case during the 340 days he spent in space aboard the International Space Station for Expeditions 43, 44, 45 and 46. Scott Kelly became the first American astronaut to spend nearly a year in space.\r\n\r\n&quot;The Twins Study has been an important step toward understanding epigenetics and gene expression in human spaceflight,&quot; said J.D. Polk, chief Health and Medical Officer at NASA Headquarters. &quot;Thanks to the twin brothers and a cadre of investigators who worked tirelessly together, the valuable data gathered from the Twins Study has helped inform the need for personalized medicine and its role in keeping astronauts healthy during deep space exploration, as NASA goes forward to the Moon and journeys onward to Mars.&quot;\r\n\r\nKey results from the NASA Twins Study include findings related to gene expression changes, immune system response, and telomere dynamics. Other changes noted in the integrated paper include broken chromosomes rearranging themselves in chromosomal inversions, and a change in cognitive function. Many of the findings are consistent with data collected in previous studies, and other research in progress.\r\n\r\nThe telomeres in Scott\'s white blood cells, which are biomarkers of aging at the end of chromosomes, were unexpectedly longer in space then shorter after his return to Earth with average telomere length returning to normal six months later. In contrast, his brother\'s telomeres remained stable throughout the entire period. Because telomeres are important for cellular genomic stability, additional studies on telomere dynamics are planned for future one-year missions to see whether results are repeatable for long-duration missions.\r\n\r\nA second key finding is that Scott\'s immune system responded appropriately in space. For example, the flu vaccine administered in space worked exactly as it does on Earth. A fully functioning immune system during long-duration space missions is critical to protecting astronaut health from opportunistic microbes in the spacecraft environment.\r\n\r\nA third significant finding is the variability in gene expression, which reflects how a body reacts to its environment and will help inform how gene expression is related to health risks associated with spaceflight. While in space, researchers observed changes in the expression of Scott\'s genes, with the majority returning to normal after six months on Earth. However, a small percentage of genes related to the immune system and DNA repair did not return to baseline after his return to Earth. Further, the results identified key genes to target for use in monitoring the health of future astronauts and potentially developing personalized countermeasures.', 'Human body &amp; health', '2019-04-10'),
(12, 'Scientists drill into white graphene to create artificial atoms', 'By drilling holes into a thin two-dimensional sheet of hexagonal boron nitride with a gallium-focused ion beam, scientists have created artificial atoms that generate single photons, which work in air and room temperature.', 'assets/news_pictures/artificial_atom.jpg', 'The artificial atoms -- which work in air and at room temperature -- may be a big step in efforts to develop all-optical quantum computing, said UO physicist Benjamín J. Alemán, principal investigator of a study published in the journal Nano Letters.\r\n\r\n&quot;Our work provides a source of single photons that could act as carriers of quantum information or as qubits. We\'ve patterned these sources, creating as many as we want, where we want,&quot; said Alemán, a member of the UO\'s Material Science Institute and Center for Optical, Molecular, and Quantum Science. &quot;We\'d like to pattern these single photon emitters into circuits or networks on a microchip so they can talk to each other, or to other existing qubits, like solid-state spins or superconducting circuit qubits.&quot;\r\n\r\nArtificial atoms were discovered three years ago in flakes of 2D hexagonal boron nitride, a single insulating layer of alternating boron and nitrogen atoms in a lattice that is also known as white graphene. Alemán is among numerous researchers who are using that discovery to produce and use photons as sources of single photons and qubits in quantum photonic circuits.\r\n\r\nTraditional approaches for using atoms in quantum research have focused on capturing atoms or ions, and manipulating their spin with lasers so they exhibit quantum superposition, or the ability to be in a simultaneous combination of &quot;off&quot; and &quot;on&quot; states. But such work has required working in a vacuum in extremely cold temperatures with sophisticated equipment.\r\n\r\nMotivated by the observation that artificial atoms are frequently found near an edge, Alemán\'s team, supported by the National Science Foundation, first created edges in the white graphene by drilling circles 500 nanometers wide and four nanometers deep.', 'Technology', '2019-04-11'),
(13, 'Video games can change your brain', 'Scientists have collected and summarized studies looking at how video games can shape our brains and behavior. Research to date suggests that playing video games can change the brain regions responsible for attention and visuospatial skills and make them more efficient. The researchers also looked at studies exploring brain regions associated with the reward system, and how these are related to vi', 'assets/news_pictures/hearthstone.jpg', 'Do you play video games? If so, you aren\'t alone. Video games are becoming more common and are increasingly enjoyed by adults. The average age of gamers has been increasing, and was estimated to be 35 in 2016. Changing technology also means that more people are exposed to video games. Many committed gamers play on desktop computers or consoles, but a new breed of casual gamers has emerged, who play on smartphones and tablets at spare moments throughout the day, like their morning commute. So, we know that video games are an increasingly common form of entertainment, but do they have any effect on our brains and behavior?\r\n\r\nOver the years, the media have made various sensationalist claims about video games and their effect on our health and happiness. &quot;Games have sometimes been praised or demonized, often without real data backing up those claims. Moreover, gaming is a popular activity, so everyone seems to have strong opinions on the topic,&quot; says Marc Palaus, first author on the review, recently published in Frontiers in Human Neuroscience.\r\n\r\nPalaus and his colleagues wanted to see if any trends had emerged from the research to date concerning how video games affect the structure and activity of our brains. They collected the results from 116 scientific studies, 22 of which looked at structural changes in the brain and 100 of which looked at changes in brain functionality and/or behavior.\r\n\r\nThe studies show that playing video games can change how our brains perform, and even their structure. For example, playing video games affects our attention, and some studies found that gamers show improvements in several types of attention, such as sustained attention or selective attention. The brain regions involved in attention are also more efficient in gamers and require less activation to sustain attention on demanding tasks.\r\n\r\nThere is also evidence that video games can increase the size and efficiency of brain regions related to visuospatial skills. For example, the right hippocampus was enlarged in both long-term gamers and volunteers following a video game training program.\r\n\r\nVideo games can also be addictive, and this kind of addiction is called &quot;Internet gaming disorder.&quot; Researchers have found functional and structural changes in the neural reward system in gaming addicts, in part by exposing them to gaming cues that cause cravings and monitoring their neural responses. These neural changes are basically the same as those seen in other addictive disorders.\r\n\r\nSo, what do all these brain changes mean? &quot;We focused on how the brain reacts to video game exposure, but these effects do not always translate to real-life changes,&quot; says Palaus. As video games are still quite new, the research into their effects is still in its infancy. For example, we are still working out what aspects of games affect which brain regions and how. &quot;It\'s likely that video games have both positive (on attention, visual and motor skills) and negative aspects (risk of addiction), and it is essential we embrace this complexity,&quot; explains Palaus.', 'COMPUTERS &amp; MATH', '2019-04-15'),
(14, 'Robots created with 3D printers could be caring for those in golden years', 'Researchers have developed a new design method to create soft robots that may help in caregiving for elderly family members.', 'assets/news_pictures/gotcha.jpg', 'This trend comes with an increasing demand for caregivers capable of providing 24-hour care, not only at hospitals or nursing homes, but also at private homes and apartments.\r\n\r\nAlready, caregiving robots are programmed to ask questions a nurse would ask and can monitor patients for falls. These robotic assistants are expected to become increasingly marketable and reach 450,000 by 2045 because of the expected caregiver shortage in the United States.\r\n\r\n&quot;Unfortunately, the external hard structure of current caregiving robots prevents them from a safe human-robot interaction, limiting their assistance to mere social interaction and not physical interaction,&quot; said Ramses Martinez, an assistant professor in the School of Industrial Engineering and in the Weldon School of Biomedical Engineering in Purdue\'s College of Engineering. &quot;After all, would you leave babies or physically or cognitively impaired old people in the hands of a robot?&quot;\r\n\r\nRecent advances in material science have enabled the fabrication of robots with deformable bodies or the ability to reshape when touched, but the complex design, fabrication, and control of soft robots currently hinders the commercialization of this technology and its use for at-home applications.\r\n\r\nMartinez and other Purdue University researchers have developed a new design method that shows promise in enabling the efficient design and fabrication of soft robots using a 3D printer. The technology is published in the April 8 edition of Advanced Functional Materials. A video showing the technology is available at https://www.youtube.com/watch?v=nDpzuLbtzDM.\r\n\r\nThe design process involves three steps. First, a user makes a computer-aided design file with the shape of the robot. The user then paints the CAD file to show which directions the different joints of the soft robot will move. A fast computer algorithm takes a few seconds to convert the CAD model into a 3D architected soft machine (ASM) that can be printed using any conventional 3D printer.\r\n\r\nThe architected soft machines move like humans, except instead of muscles they rely on miniaturized motors that pull from nylon lines tied to the ends of their limbs. They can be squeezed and stretched to more than 900 percent of their original length. A video is available at https://www.youtube.com/watch?v=V0L0lP0g4tg.\r\n\r\n&quot;ASMs can perform complex motions such as gripping or crawling with ease, and this work constitutes a step forward toward the development of autonomous and lightweight soft robots,&quot; Martinez said. &quot;The capability of ASMs to change their body configuration and gait to adapt to a wide variety of environments has the potential to not only improve caregiving but also disaster-response robotics.&quot;\r\n\r\nA video is available at https://www.youtube.com/watch?v=q9M4q9OQhQE and more videos can be found on the research team\'s YouTube channel.\r\n\r\nThe technology is patented through the Purdue Office of Technology Commercialization. The researchers are looking for partners to test and commercialize their technology.', 'COMPUTERS &amp; MATH', '2019-04-08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
