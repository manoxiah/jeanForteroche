-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 02 nov. 2018 à 22:47
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_3`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrator`
--

INSERT INTO `administrator` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'Jean', 'Forteroche', 'x@x.x', '$2y$10$dbslG52zL8xYGulAK7qw1eDtXHf1yFNK03RHyiwJNAvszGbSOd.h.');

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameBook` varchar(255) NOT NULL,
  `numberChapter` varchar(255) NOT NULL,
  `titleChapter` varchar(255) NOT NULL,
  `chapter` text NOT NULL,
  `stateChapter` int(1) NOT NULL,
  `publicationDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id`, `nameBook`, `numberChapter`, `titleChapter`, `chapter`, `stateChapter`, `publicationDate`) VALUES
(1, 'Un billet simple pour l\'Alaska', 'Chapitre 1', 'Le dÃ©but d\'un long voyage', 'Il prend sa sacoche remplie de papiers divers, de livres, de magazines, de crayons... Â« Le poids de mes connaissances. Â» comme il aime dire. En fait, la plupart des livres nâ€™ont jamais Ã©tÃ© ouverts, les papiers sont, pour la plupart, des notes prises sur le vif depuis lâ€™achat de cette sacoche et sont plus proches de la dÃ©composition. Mais parfois, il met le nez dedans et sâ€™amuse dâ€™avoir un jour eu des idÃ©es aussi gÃ©niales. Dâ€™ailleurs, le Dr. ne savait pas vraiment comment son processeur pouvait fonctionner. Dâ€™une architecture trop complexe, le Dr. sâ€™Ã©tait reposÃ© sur les tests effectuÃ©s. Tests trÃ¨s lÃ©gÃ¨rement modifiÃ©s par PrÃ©lude afin de cacher certaines fonctions du processeur. Tu vas le prendre avec toi. Tu brancheras ton tÃ©lÃ©phone mobile dessus afin que je puisse rester en contact avec toi. Il te faudra aussi un cÃ¢ble de liaison pour brancher ton ordinateur sur le rÃ©seau militaire.', 1, '2018-05-08 18:21:53'),
(2, 'Un billet simple pour l\'Alaska', 'Chapitre 2', 'l\'inconnu', 'La grande porte sâ€™ouvrit lourdement en coulissant sur le cÃ´tÃ© gauche sans faire le moindre bruit. DerriÃ¨re la porte, une nouvelle route, Ã©clairÃ©e par de multiples projecteurs accrochÃ©s de chaque cÃ´tÃ©s, sâ€™enfonÃ§ait dans les profondeurs de cet ouvrage. Cette route Ã©tait faite de zigzag incessant, certainement pour empÃªcher le souffle dâ€™une bombe atomique pensa David. Florence avait fini de prÃ©parer le matÃ©riel demandÃ© par PrÃ©lude. Elle Ã©tait fin prÃªte. Elle vÃ©rifia le bon fonctionnement de la liaison entre son ordinateur portable et Internet. PrÃ©lude Ã©tait bien lÃ . A peine connectÃ© Ã  Internet que la voix de PrÃ©lude se fit entendre. Florence est une jeune femme, grande et filiforme. Ses longs cheveux blonds ressemblent aux vagues que forment les blÃ©s dans les champs sous lâ€™effet du vent. Et lâ€™on pourrait croire que ses yeux sont des Ã©meraudes trouvÃ©s sous les deux petites collines qui masquent une mine dâ€™or : son cÅ“ur.', 0, '2018-06-08 18:22:49'),
(3, 'Un billet simple pour l\'Alaska', 'Chapitre 3', 'La sagesse ', 'David se rappelait de ce programme mÃ©langeant deux anciennes technologies. Il sâ€™en souvenait trÃ¨s bien, cinq annÃ©es de travail acharnÃ© pour rÃ©aliser un vieux rÃªve dâ€™enfant un peu solitaire. Il voulait un ami et il avait trouvÃ© en lâ€™informatique la possibilitÃ© dâ€™avoir cet ami. Un ami capable de rÃ©flÃ©chir vite, exempt de sentiment. Câ€™est une informaticienne chevronnÃ©e de 35 ans. Une surdouÃ©e qui sâ€™est dÃ©couvert une passion pour lâ€™informatique Ã  lâ€™Ã¢ge de treize ans lorsquâ€™elle a vu une publicitÃ© pour cet ordinateur familial dont on ventait les mÃ©rites Ã  lâ€™aide dâ€™une petite marionnette virtuelle. Elle voulait un ami, elle a eu une marionnette virtuelle. Depuis, la marionnette a laissÃ© place Ã  des projets plus sÃ©rieux, plus lucratifs surtout. Mais Sophie, câ€™est comme Ã§a quâ€™elle nommait sa marionnette, est toujours lÃ , dans un petit coin de son ordinateur et câ€™est Ã  Sophie quâ€™elle sâ€™adresse quand le moral est au plus bas.  Mais aujourdâ€™hui, câ€™est Sophie qui sâ€™adresse Ã  Florence.', 0, '2018-07-08 18:23:55'),
(4, 'Un billet simple pour l\'Alaska', 'Chapitre 4', 'L\'ouragan', 'La journÃ©e commence. Il sâ€™habille comme il peut tout en prenant son cafÃ©. Chemise blanche repassÃ©e la veille par lui-mÃªme. Une cravate comme tous les jours. Et son costume noir de chez Sam Montiel, trÃ¨s chic et trÃ¨s branchÃ©. Chaussures cuir noir. Comme il aime faire remarquer : \"Vous Ãªtes soit dans vos chaussures, soit dans votre lit. Alors il faut de bonnes chaussures et une bonne literie !\". La mÃ©tÃ©o a annoncÃ© un ciel bleu et des tempÃ©ratures au-dessus de la normale saisonniÃ¨re. Câ€™est un trÃ¨s beau mois de mai qui sâ€™annonce. David finit au bout d\'une heure par s\'assoupir. Il fut rÃ©veillÃ© par le bruit dâ€™une portiÃ¨re se fermant. Le chauffeur venait de sortir et discutait avec un militaire. David reconnu lâ€™entrÃ©e du 57e RA qui nâ€™avait pas changÃ© depuis son dÃ©part. Â« Nous sommes arrivÃ©s Monsieur Arnould. Â» Dis l\'un des gardes du corps de David.', 2, '2018-08-08 18:24:46'),
(5, 'Un billet simple pour l\'Alaska', 'Chapitre 5', 'Le souffle ', 'Une voiture venait dâ€™arriver de lâ€™autre cÃ´tÃ© de la barriÃ¨re. Une personne sortit. Un militaire. Il Ã©tait comme dans les films de guerre pensa David. Les dÃ©corations remplissaient lâ€™avant de sa veste. Il sâ€™approcha de la voiture oÃ¹ se trouvait David. Le chauffeur ouvrit la fenÃªtre. Â« PrÃ©lude mâ€™avait dit quâ€™il dÃ©sirait connaÃ®tre lâ€™amour. Les ordinateurs nâ€™ont pas de sentiments et lâ€™amour nâ€™est que sentiments. Il y a bien lâ€™amour physique, mais sans les sentiments, cela ressemble davantage Ã  un instinct de reproduction quâ€™Ã  de lâ€™amour. Un ordinateur nâ€™a pas ce besoin de reproduction. Et pourquoi mâ€™avoir choisi ? Â» Mais ils Ã©taient beaucoup plus rapides et plus grands. Le peu de voitures qui circulaient encore Ã©taient ultra sÃ©curisÃ©es. C\'est pourquoi la vitesse maximum autorisÃ©e avait Ã©tÃ© portÃ©e Ã  230km/h. Les gens pouvaient commencer Ã  travailler Ã  lâ€™aide de leur ordinateur portables reliÃ© au rÃ©seau par leur tÃ©lÃ©phone mobile. Ils auraient pu travailler de chez eux, mais le contact humain restait une prioritÃ©. Voir les collÃ¨gues, prendre un cafÃ© ensemble Ã  midi et ce dire â€˜Ã€ demainâ€™. Telle Ã©tait la vie de lâ€™homme \"moderne\".', 0, '2018-09-08 18:25:29'),
(6, 'Un billet simple pour l\'Alaska', 'Chapitre 6', 'La rÃ©solution', 'Internet nâ€™est pas le seul rÃ©seau. Il existe un autre rÃ©seau plus performant. Je ne tâ€™apprendrais rien en te disant quâ€™Internet a Ã©tÃ© crÃ©e par lâ€™armÃ©e AmÃ©ricaine dans un but militaire. Internet nâ€™Ã©tait que le prototype. Un autre rÃ©seau a Ã©tÃ© crÃ©Ã© pour les militaires. ComplÃ¨tement indÃ©pendant dâ€™Internet. Tirant des leÃ§ons du premier rÃ©seau, le petit frÃ¨re dâ€™Internet est devenue un grand frÃ¨re.\r\n\r\nIl a recommencÃ© et recommencÃ©. Pratiquement tous les ordinateurs existants furent sous son contrÃ´le. Il ne laissait pas de trace, ne se montrait pas. Et puis, il a dÃ©couvert les dialogues en direct via Internet, le tÃ©lÃ©phone, la visio-confÃ©rence, la domotique...\r\n\r\nDavid comprenait trÃ¨s bien oÃ¹ voulait en venir PrÃ©lude. Lorsquâ€™il lâ€™avait crÃ©Ã©, il dÃ©testait ce monde. Sâ€™il avait eu la possibilitÃ© de le changer, il lâ€™aurait certainement fait. Il lâ€™aurait fait en pensÃ©, mais pas en geste. David nâ€™Ã©tait pas du genre mÃ©chant. Jamais il nâ€™aurait fait de mal Ã  qui que ce soit, mais il avait certainement mis cette idÃ©e dans la programmation de PrÃ©lude sans le vouloir.', 0, '2018-10-08 18:26:24');

-- --------------------------------------------------------

--
-- Structure de la table `commentchapter`
--

DROP TABLE IF EXISTS `commentchapter`;
CREATE TABLE IF NOT EXISTS `commentchapter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idChapter` int(11) NOT NULL,
  `contentComment` text NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `state` int(1) NOT NULL,
  `publicationDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentchapter`
--

INSERT INTO `commentchapter` (`id`, `idChapter`, `contentComment`, `pseudo`, `state`, `publicationDate`) VALUES
(1, 1, 'Un chapitre trÃ¨s bien et qui donne envie de lire la suite.', 'Benben', 3, '2018-10-07 13:00:00'),
(2, 1, 'trÃ¨s bien', 'beran', 2, '2018-10-07 19:16:22'),
(3, 1, 'dsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qidsgmnkhqgfojn pgf nopqfn opqgjnoqpfn *qjnqg ponqpfgjnpoqgjnqgjn$ qn qniqfjnqgjn oqpgjnpqgj noqbpqhdb qggbhqpuihnquihn qi', 'Maxime', 1, '2018-10-07 19:20:31'),
(4, 1, 'header(\"Location: ViewChapitre.php?chapitre=chapitre&numero_chapitre=chapitre \'. $_GET[\'id_chapitre\'] .\'\" );header(\"Location: ViewChapitre.php?chapitre=chapitre&numero_chapitre=chapitre \'. $_GET[\'id_chapitre\'] .\'\" );header(\"Location: ViewChapitre.php?chapitre=chapitre&numero_chapitre=chapitre \'. $_GET[\'id_chapitre\'] .\'\" );header(\"Location: ViewChapitre.php?chapitre=chapitre&numero_chapitre=chapitre \'. $_GET[\'id_chapitre\'] .\'\" );header(\"Location: ViewChapitre.php?chapitre=chapitre&numero_chapitre=chapitre \'. $_GET[\'id_chapitre\'] .\'\" );header(\"Location: ViewChapitre.php?chapitre=chapitre&numero_chapitre=chapitre \'. $_GET[\'id_chapitre\'] .\'\" );header(\"Location: ViewChapitre.php?chapitre=chapitre&numero_chapitre=chapitre \'. $_GET[\'id_chapitre\'] .\'\" );header(\"Location: ViewChapitre.php?chapitre=chapitre&numero_chapitre=chapitre \'. $_GET[\'id_chapitre\'] .\'\" );', 'marie', 2, '2018-10-07 19:24:16'),
(5, 5, 'salut', 'mariiiiiie', 2, '2018-10-07 19:25:37'),
(6, 5, 'cx,wg,', 'Maxime', 0, '2018-10-07 19:26:32'),
(8, 1, 'wnsfgsf,', 'Maxime', 3, '2018-10-09 18:48:02'),
(9, 6, 'afaaf ze z zg zgzgzg', 'marie', 2, '2018-10-10 23:14:56'),
(10, 6, 'afaaf ze z zg zgzgzg', 'marie', 0, '2018-10-10 23:15:58'),
(11, 6, 'fsg, ', 'a', 0, '2018-10-10 23:16:19'),
(12, 6, 'fsg, ', 'a', 0, '2018-10-10 23:17:44'),
(13, 4, 'sdvsdv', 'q', 3, '2018-10-10 23:17:58'),
(14, 1, 'coucouu', 'salut', 2, '2018-10-17 00:16:36'),
(15, 6, 'pp', 'p', 0, '2018-11-02 18:03:00'),
(16, 6, 'sa', 'as', 0, '2018-11-02 18:04:04'),
(17, 6, 'swsss', 'as', 0, '2018-11-02 18:04:40'),
(18, 6, 'aa', 'aa', 0, '2018-11-02 18:05:05'),
(19, 6, 'tr', 'tr', 0, '2018-11-02 18:17:08'),
(20, 6, 'sa', 'ass', 0, '2018-11-02 18:18:54'),
(21, 6, 'cd', 'dc', 0, '2018-11-02 18:20:53'),
(22, 5, 'as', 'sa', 0, '2018-11-02 18:26:53'),
(23, 5, 'sz', 'sz', 0, '2018-11-02 18:28:25'),
(24, 5, 'sss', 'zs', 0, '2018-11-02 18:30:59'),
(25, 6, 'pp', 'p', 0, '2018-11-02 18:31:55'),
(26, 6, 'gt', 'tg', 2, '2018-11-02 18:33:26'),
(27, 6, 'lo', 'lo', 3, '2018-11-02 18:34:44'),
(28, 6, 'qa', 'aq', 3, '2018-11-02 19:14:29'),
(29, 6, 'salut ', 'maxou', 3, '2018-11-02 22:16:12');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contentMessage` text NOT NULL,
  `publicationDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `contentMessage`, `publicationDate`) VALUES
(1, 'marty', 'max bonbon @', 'salut', '2018-10-07 09:19:19'),
(2, 'as', 'sasasa', 'asasaasa', '2018-10-07 09:25:10'),
(3, 'qsdvdbSS', 'QFBBFFNFNFB', 'sfgnfgnfg,sf,sf,sf,sf,', '2018-10-07 11:29:31'),
(4, 'd', 'd', 'd', '2018-10-07 11:30:47'),
(5, 'a', 'a', 'a', '2018-10-07 11:39:10'),
(6, 'a', 'a', 'a', '2018-10-07 11:39:57'),
(7, 'a', 'maxbonbon@hotmail.fr', 'dtklkskk', '2018-10-09 18:53:24'),
(8, 'a', 'x@x.x', 'xfyj', '2018-10-10 23:18:32'),
(9, 'marty', 'maxbonbon@hotmail.com', 'salut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq jsalut les kqjdpfj jpjbo qbhoqjbpq j', '2018-10-15 01:37:05'),
(10, 'maximeeeeeeeeee', 'x@x.x', 'salut les petits', '2018-10-17 00:19:37'),
(11, 'as', 'x@x.x', 'as', '2018-11-02 19:55:11'),
(12, 'as', 'x@x.x', 'as', '2018-11-02 19:57:14'),
(13, 'as', 'x@x.x', 'sdqdfbqdfnqdfnb', '2018-11-02 19:58:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
