-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 03 Août 2016 à 13:51
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `myonlinebooks`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` varchar(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `file_url` varchar(100) NOT NULL,
  `category_id` varchar(32) NOT NULL,
  `author` varchar(100) NOT NULL,
  `release_date` date DEFAULT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `uploader_mail` varchar(100) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `book`
--

INSERT INTO `book` (`id`, `name`, `description`, `image_url`, `file_url`, `category_id`, `author`, `release_date`, `approved`, `uploader_mail`, `updated_at`) VALUES
('67f5953407e3cdfcfa624084fd829259', 'Le Grand Meaulnes', 'Ã€ la fin du XIXe siÃ¨cle, par un froid dimanche de novembre, un garÃ§on de quinze ans, FranÃ§ois Seurel, qui habite auprÃ¨s de ses parents instituteurs une longue maison rouge - l''Ã©cole du village -, attend la venue d''Augustin que sa mÃ¨re a dÃ©cidÃ© de mettre ici en pension pour qu''il suive le cours supÃ©rieur : l''arrivÃ©e du grand Meaulnes Ã  Sainte-Agathe va bouleverser l''enfance finissante de FranÃ§ois...', '587.jpg', 'feedbooks_book_587.pdf', '92846c1eabd136914eadb8b13127adc0', 'Alain-Fournier', '1913-01-01', 1, NULL, '2016-08-02 14:09:20'),
('6e71970d069195f96db141de941ba17f', 'Candide, ou l''Optimisme', 'Candide, ou lâ€™Optimisme est un conte philosophique de Voltaire paru Ã  GenÃ¨ve en janvier 1759. Il a Ã©tÃ© rÃ©Ã©ditÃ© vingt fois du vivant de lâ€™auteur (plus de cinquante aujourdâ€™hui) ce qui en fait un des plus grands succÃ¨s littÃ©raires franÃ§ais. Anonyme en 1759, Candide est attribuÃ© Ã  un certain Â« Monsieur le Docteur Ralph Â» en 1761, Ã  la suite du remaniement du texte par Voltaire.', '3072.jpg', 'feedbooks_book_3072.pdf', '9e9dec0febd3af372601090f819b21a3', 'Voltaire', '1759-01-01', 1, NULL, '2016-08-02 14:09:17'),
('5f59d18bc52b54a2fd0d2e50a1edd995', 'L''Aiguille creuse', 'ArsÃ¨ne Lupin serait-il mort ? Isidore Beautrelet, jeune Ã©tudiant en rhÃ©torique et dÃ©tective amateur gÃ©nial, n''en croit pas un traÃ®tre mot. Il se lance Ã  la recherche du cÃ©lÃ¨bre gentleman cambrioleur.', '1485.jpg', 'feedbooks_book_1485.pdf', '2bd7b6b4bb23759f90f473d01c6e2cc0', 'Maurice Leblanc', '1909-01-01', 1, NULL, '2016-08-02 14:09:19'),
('e4425c9b252b9450b3e54cbcbf702ca7', 'Le Rouge et le Noir', 'Au rouge des armes, Julien Sorel prÃ©fÃ¨rera le noir des ordres. Au cours de son ascension sociale, deux femmes se singularisent, comme pour figurer les deux penchants de son caractÃ¨re : Madame de RÃªnal - le rÃªve, l''aspiration Ã  un bonheur pur et simple - et Mathilde de La Mole - l''Ã©nergie, l''action brillante et fÃ©brile.', '220.jpg', 'feedbooks_book_220.pdf', '92846c1eabd136914eadb8b13127adc0', 'Stendhal', '1830-01-01', 1, NULL, '2016-08-02 14:09:22'),
('981940eee899b18be7e7e610ccf5bc28', 'Alcools', 'De la belle poÃ©sie, rÃ©volutionnaire et moderne, accessible Ã  ceux qui croient ne pas aimer la poÃ©sie...', '5652.jpg', 'feedbooks_book_5652.pdf', '92846c1eabd136914eadb8b13127adc0', 'Guillaume Apollinaire', '1913-01-01', 1, NULL, '2016-08-02 14:17:13'),
('89d3ce4f604c6a4988b987aa1a74e5b7', 'Les Diaboliques', 'Les Diaboliques est un recueil de six nouvelles de Jules Barbey d''Aurevilly, paru en novembre 1874 Ã  Paris chez l''Ã©diteur Dentu.\r\n\r\nLe projet de ce recueil de nouvelles devait s''intituler Ã  l''origine Ricochets de conversation. Il fallut cependant prÃ¨s de vingt-cinq ans Ã  Barbey pour le voir paraÃ®tre puisqu''il y travaillait dÃ©jÃ  en 1850 lorsqu''il fit paraÃ®tre Le dessous de cartes d''une partie de whist dans le journal La Mode dans un feuilleton en trois parties, La Revue des Deux Mondes l''ayant refusÃ©. Barbey revint en Normandie Ã  la faveur des Ã©vÃ©nements de la Commune et l''acheva en 1873.', '1342.jpg', 'feedbooks_book_1342.pdf', '76e65cc28e437bcf96e8c8a8a3c20fc4', 'Jules AmÃ©dÃ©e Barbey d''Aurevilly', '1874-01-01', 1, NULL, '2016-08-02 14:09:23'),
('370ed5671ca1389287ad30eb182eba61', '20000 lieues sous les mers', 'Tout commence en 1866: la peur rÃ¨gne sur les ocÃ©ans. Plusieurs navires prÃ©tendent avoir rencontrÃ© un monstre effrayant. Et quand certains rentrent gravement avariÃ©s aprÃ¨s avoir heurtÃ© la crÃ©ature, la rumeur devient certitude. L''Abraham Lincoln, frÃ©gate amÃ©ricaine, se met en chasse pour dÃ©barrasser les mers de ce terrible danger. Elle emporte notamment le professeur Aronnax, fameux ichthyologue du MusÃ©um de Paris, son domestique, le dÃ©vouÃ© Conseil, et le Canadien Ned Land, Â«roi des harponneursÂ». AprÃ¨s six mois de recherches infructueuses, le 5 novembre 1867, on repÃ¨re ce que l''on croit Ãªtre un Â«narwal gigantesqueÂ».', '1495.jpg', 'feedbooks_book_1495.pdf', '56cde251a830efe5a765abf2268c84f6', 'Jules Verne', '1871-01-01', 1, NULL, '2016-08-02 14:48:11'),
('7d89b3f2b758390220b563c63c52310e', 'Le Monde perdu', 'Quand le jeune journaliste Malone demande Ã  son rÃ©dacteur en chef qu''un grand reportage lui soit confiÃ©, il se voit conviÃ© le soin d''interviewer le cÃ©lÃ¨bre, l''irascible, le mÃ©galomane professeur Challenger. Celui-ci de retour d''une expÃ©dition en AmÃ©rique du Sud prÃ©tend y avoir trouvÃ© des animaux extraordinaires, mais il est la risÃ©e du monde scientifique. Lors d''une houleuse confÃ©rence scientifique Ã  laquelle participe le professeur Challenger, une mission est dÃ©cidÃ©e pour vÃ©rifier ses dires. L''Ã©quipe sera composÃ©e du Pr Summerlee, rival de Challenger, de Lord John Roxton, grand aventurier, et du jeune Malone... ', '5132.jpg', 'feedbooks_book_5132.pdf', '56cde251a830efe5a765abf2268c84f6', 'Arthur Conan Doyle', '1912-01-01', 1, NULL, '2016-08-02 14:09:21'),
('f171519bd19ccaa60d4eef7ff2e76488', 'Madame Bovary', 'Charles Bovary, aprÃ¨s avoir suivi ses Ã©tudes dans un lycÃ©e de province, s''Ã©tablit comme officier de santÃ© et se marie Ã  une riche veuve. Ã€ la mort de celle-ci, Charles Ã©pouse une jeune femme, Emma Rouault, Ã©levÃ©e dans un couvent, vivant Ã  la ferme avec son pÃ¨re (un riche fermier, patient du jeune mÃ©decin). Emma se laisse sÃ©duire par Charles et se marie avec lui. FascinÃ©e par ses lectures romantiques, elle rÃªve dâ€™une nouvelle vie, en compagnie de son nouveau mari.', '386.jpg', 'feedbooks_book_386.pdf', '92846c1eabd136914eadb8b13127adc0', 'Gustave Flaubert', '1857-01-01', 1, NULL, '2016-08-02 14:09:25'),
('c6c660bdab307f579239863dc2cd9a99', 'Le Portrait de Dorian Gray', 'Dorian Gray est un jeune homme d''une trÃ¨s grande beautÃ©. Son ami artiste peintre Basil Hallward est obsÃ©dÃ© par cette derniÃ¨re et en tire toute son inspiration. Sa fascination pour le jeune homme le mÃ¨ne Ã  faire son portrait, qui se rÃ©vÃ¨le Ãªtre la plus belle Å“uvre qu''il ait jamais peinte, et qu''il ne souhaite pas exposer : Â« J''y ai mis trop de moi-mÃªme Â».', '1410.jpg', 'feedbooks_book_1410.pdf', '92846c1eabd136914eadb8b13127adc0', ' Oscar Wilde', '1891-01-01', 1, NULL, '2016-08-02 14:05:36'),
('72948fd9991735715eff1c32f5dfb0f3', 'Double Assassinat dans la rue Morgue', 'Double assassinat dans la rue Morgue (The Murders in the Rue Morgue dans l''Ã©dition originale) est une nouvelle d''Edgar Allan Poe, parue en avril 1841 dans le Graham''s Magazine, traduite en franÃ§ais d''abord par Isabelle Meunier puis, en 1856, par Charles Baudelaire dans le recueil Histoires extraordinaires. C''est la premiÃ¨re apparition du dÃ©tective inventÃ© par Poe, le Chevalier Dupin qui doit faire face Ã  une histoire de meurtre incomprÃ©hensible pour la police.', '493.jpg', 'feedbooks_book_493.pdf', '2bd7b6b4bb23759f90f473d01c6e2cc0', 'Edgar Allan Poe', '1841-01-01', 1, NULL, '2016-08-02 14:09:18');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` varchar(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `short_url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `short_url`) VALUES
('56cde251a830efe5a765abf2268c84f6', 'Science Fiction', 'La science-fiction est un genre narratif, principalement un genre littÃ©raire et un genre cinÃ©matographique. Il est structurÃ© par des hypothÃ¨ses sur ce que pourrait Ãªtre le futur ou ce qu''aurait pu Ãªtre le prÃ©sent voire le passÃ© (planÃ¨tes Ã©loignÃ©es, mondes parallÃ¨les, uchronie...), en partant des connaissances actuelles (scientifiques, technologiques, ethnologiques...). Elle se distingue du fantastique qui inclut une dimension inexplicable et de la fantasy qui fait souvent intervenir la magie.', 'sf'),
('a5ac3e38db1b54c4bc019f6b4b8f11fe', 'Fantasy', 'La fantasy fait partie des littÃ©ratures de l''imaginaire. Dans la fantasy comme dans le merveilleux, le surnaturel est gÃ©nÃ©ralement acceptÃ©, voire utilisÃ© pour dÃ©finir les rÃ¨gles d''un monde imaginaire, et n''est pas nÃ©cessairement objet de doute ou de peur. Cela distingue la fantasy du fantastique oÃ¹ le surnaturel fait intrusion dans les rÃ¨gles du monde habituel, et de l''horreur oÃ¹ il suscite peur et angoisse. Par extension, Ã  partir du genre littÃ©raire, on parle aussi de fantasy Ã  propos d''illustrations, de bandes dessinÃ©es, de films, de jeux, etc.', 'fantasy'),
('cdd35cca0bf31f00582cdfbb55053512', 'Aventure', 'CentrÃ© sur l''intÃ©rÃªt dramatique, le suspense, parfois au dÃ©triment de la vraisemblance, le roman d''aventure inclut des personnages nombreux mais simplifiÃ©s et des rÃ©fÃ©rences fonctionnelles Ã  une rÃ©alitÃ© aussi bien historique que gÃ©ographique souvent exotique, ce qui le distingue aussi bien du roman d''analyse psychologique que du roman d''analyse sociale ou sociologique qui visent une plus grande complexitÃ©. Il est Ã©galement sous-tendu par une morale plutÃ´t schÃ©matique qui divisent les hommes en bons et mÃ©chants, le hÃ©ros (gÃ©nÃ©ralement vainqueur) dÃ©fendant le camp du bien, d''oÃ¹ la place qu''on lui a fait dans la littÃ©rature pour la jeunesse.', 'aventure'),
('92846c1eabd136914eadb8b13127adc0', 'Roman', 'Le roman, d''abord Ã©crit en vers qui jouent sur des assonances au XIIe siÃ¨cle avant sa mise en prose au dÃ©but du XIIIe siÃ¨cle, se dÃ©finit aussi par sa destination Ã  la lecture individuelle, Ã  la diffÃ©rence du conte ou de l''Ã©popÃ©e qui relÃ¨vent Ã  l''origine de la transmission orale. Le ressort fondamental du roman est alors la curiositÃ© du lecteur pour les personnages et pour les pÃ©ripÃ©ties, Ã  quoi s''ajoutera plus tard l''intÃ©rÃªt pour un art d''Ã©crire. Au fil des derniers siÃ¨cles, le roman est devenu le genre littÃ©raire dominant avec une multiplicitÃ© de sous-genres qui soulignent son caractÃ¨re polymorphe (Ã  maintes formes).', 'roman'),
('9e9dec0febd3af372601090f819b21a3', 'Conte', 'Il vise Ã  distraire ou Ã  Ã©difier, il porte en lui une force Ã©motionnelle ou philosophique puissante. Depuis la Renaissance, les contes font l''objet de rÃ©Ã©critures, donnant naissance au fil des siÃ¨cles Ã  un genre Ã©crit Ã  part entiÃ¨re. Cependant, il est distinct du roman, de la nouvelle et du rÃ©cit d''aventures par l''acceptation de l''invraisemblance.', 'conte'),
('2bd7b6b4bb23759f90f473d01c6e2cc0', 'Policier', 'Le drame y est fondÃ© sur l''attention d''un fait ou, plus prÃ©cisÃ©ment, d''une intrigue, et sur une recherche mÃ©thodique faite de preuves, le plus souvent par une enquÃªte policiÃ¨re ou encore une enquÃªte de dÃ©tective privÃ©. L''abrÃ©viation policier (pour roman policier) est Ã©galement utilisÃ©e. Le genre policier comporte six invariants : le crime ou dÃ©lit, le mobile, le coupable, la victime, le mode opÃ©ratoire et l''enquÃªte. Le roman policier recouvre beaucoup de types de romans, notamment le roman noir et le roman Ã  suspense ou thriller. ', 'policier'),
('76e65cc28e437bcf96e8c8a8a3c20fc4', 'Nouvelles', 'Une nouvelle est un rÃ©cit habituellement court. Apparu Ã  la fin du Moyen Ã‚ge, ce genre littÃ©raire Ã©tait alors proche du roman et d''inspiration rÃ©aliste1, se distinguant peu du conte. Ã€ partir du XIXe siÃ¨cle, les auteurs ont progressivement dÃ©veloppÃ© d''autres possibilitÃ©s du genre, en s''appuyant sur la concentration de l''histoire pour renforcer l''effet de celle-ci sur le lecteur, par exemple par un dÃ©nouement surprenant. Les thÃ¨mes se sont Ã©galement Ã©largis : la nouvelle est devenue une forme privilÃ©giÃ©e de la littÃ©rature fantastique, policiÃ¨re, et de science-fiction.', 'nouvelles');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(32) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
