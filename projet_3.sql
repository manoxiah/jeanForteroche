-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 06 déc. 2018 à 18:16
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

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
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id`, `nameBook`, `numberChapter`, `titleChapter`, `chapter`, `stateChapter`, `publicationDate`) VALUES
(1, 'Un billet simple pour l\'Alaska', 'Chapitre 1', 'Le dÃ©but d\'un long voyage', '<p>Il prend sa sacoche remplie de papiers divers, de livres, de magazines, de crayons... &laquo; Le poids de mes connaissances. &raquo; comme il aime dire. En fait, la plupart des livres n&rsquo;ont jamais &eacute;t&eacute; ouverts, les papiers sont, pour la plupart, des notes prises sur le vif depuis l&rsquo;achat de cette sacoche et sont plus proches de la d&eacute;composition. Mais parfois, il met le nez dedans et s&rsquo;amuse d&rsquo;avoir un jour eu des id&eacute;es aussi g&eacute;niales. D&rsquo;ailleurs, le Dr. ne savait pas vraiment comment son processeur pouvait fonctionner. D&rsquo;une architecture trop complexe, le Dr. s&rsquo;&eacute;tait repos&eacute; sur les tests effectu&eacute;s. Tests tr&egrave;s l&eacute;g&egrave;rement modifi&eacute;s par Pr&eacute;lude afin de cacher certaines fonctions du processeur. Tu vas le prendre avec toi. Tu brancheras ton t&eacute;l&eacute;phone mobile dessus afin que je puisse rester en contact avec toi. Il te faudra aussi un c&acirc;ble de liaison pour brancher ton ordinateur sur le r&eacute;seau militaire.</p>\r\n<p>&nbsp;</p>', 1, '2018-05-08 18:21:53'),
(2, 'Un billet simple pour l\'Alaska', 'Chapitre 2', 'l\'inconnu', '<p>La grande porte sâ€™ouvrit lourdement en coulissant sur le cÃ´tÃ© gauche sans faire le moindre bruit. DerriÃ¨re la porte, une nouvelle route, Ã©clairÃ©e par de multiples projecteurs accrochÃ©s de chaque cÃ´tÃ©s, sâ€™enfonÃ§ait dans les profondeurs de cet ouvrage. Cette route Ã©tait faite de zigzag incessant, certainement pour empÃªcher le souffle dâ€™une bombe atomique pensa David. Florence avait fini de prÃ©parer le matÃ©riel demandÃ© par PrÃ©lude. Elle Ã©tait fin prÃªte. Elle vÃ©rifia le bon fonctionnement de la liaison entre son ordinateur portable et Internet. PrÃ©lude Ã©tait bien lÃ . A peine connectÃ© Ã  Internet que la voix de PrÃ©lude se fit entendre. Florence est une jeune femme, grande et filiforme. Ses longs cheveux blonds ressemblent aux vagues que forment les blÃ©s dans les champs sous lâ€™effet du vent. Et lâ€™on pourrait croire que ses yeux sont des Ã©meraudes trouvÃ©s sous les deux petites collines qui masquent une mine dâ€™or : son cÅ“ur.<p/>', 0, '2018-06-08 18:22:49'),
(3, 'Un billet simple pour l\'Alaska', 'Chapitre 3', 'La sagesse ', '<p>David se rappelait de ce programme m&eacute;langeant deux anciennes technologies. Il s&rsquo;en souvenait tr&egrave;s bien, cinq ann&eacute;es de travail acharn&eacute; pour r&eacute;aliser un vieux r&ecirc;ve d&rsquo;enfant un peu solitaire. Il voulait un ami et il avait trouv&eacute; en l&rsquo;informatique la possibilit&eacute; d&rsquo;avoir cet ami. Un ami capable de r&eacute;fl&eacute;chir vite, exempt de sentiment. C&rsquo;est une informaticienne chevronn&eacute;e de 35 ans. Une surdou&eacute;e qui s&rsquo;est d&eacute;couvert une passion pour l&rsquo;informatique &agrave; l&rsquo;&acirc;ge de treize ans lorsqu&rsquo;elle a vu une publicit&eacute; pour cet ordinateur familial dont on ventait les m&eacute;rites &agrave; l&rsquo;aide d&rsquo;une petite marionnette virtuelle. Elle voulait un ami, elle a eu une marionnette virtuelle. Depuis, la marionnette a laiss&eacute; place &agrave; des projets plus s&eacute;rieux, plus lucratifs surtout. Mais Sophie, c&rsquo;est comme &ccedil;a qu&rsquo;elle nommait sa marionnette, est toujours l&agrave;, dans un petit coin de son ordinateur et c&rsquo;est &agrave; Sophie qu&rsquo;elle s&rsquo;adresse quand le moral est au plus bas. Mais aujourd&rsquo;hui, c&rsquo;est Sophie qui s&rsquo;adresse &agrave; Florence.</p>\r\n<p>&nbsp;</p>', 0, '2018-07-08 18:23:55'),
(4, 'Un billet simple pour l\'Alaska', 'Chapitre 4', 'L\'ouragan', '<p>La journÃ©e commence. Il sâ€™habille comme il peut tout en prenant son cafÃ©. Chemise blanche repassÃ©e la veille par lui-mÃªme. Une cravate comme tous les jours. Et son costume noir de chez Sam Montiel, trÃ¨s chic et trÃ¨s branchÃ©. Chaussures cuir noir. Comme il aime faire remarquer : \"Vous Ãªtes soit dans vos chaussures, soit dans votre lit. Alors il faut de bonnes chaussures et une bonne literie !\". La mÃ©tÃ©o a annoncÃ© un ciel bleu et des tempÃ©ratures au-dessus de la normale saisonniÃ¨re. Câ€™est un trÃ¨s beau mois de mai qui sâ€™annonce. David finit au bout d\'une heure par s\'assoupir. Il fut rÃ©veillÃ© par le bruit dâ€™une portiÃ¨re se fermant. Le chauffeur venait de sortir et discutait avec un militaire. David reconnu lâ€™entrÃ©e du 57e RA qui nâ€™avait pas changÃ© depuis son dÃ©part. Â« Nous sommes arrivÃ©s Monsieur Arnould. Â» Dis l\'un des gardes du corps de David.<p/>', 0, '2018-08-08 18:24:46'),
(5, 'Un billet simple pour l\'Alaska', 'Chapitre 5', 'Le souffle ', '<p>Une voiture venait dâ€™arriver de lâ€™autre cÃ´tÃ© de la barriÃ¨re. Une personne sortit. Un militaire. Il Ã©tait comme dans les films de guerre pensa David. Les dÃ©corations remplissaient lâ€™avant de sa veste. Il sâ€™approcha de la voiture oÃ¹ se trouvait David. Le chauffeur ouvrit la fenÃªtre. Â« PrÃ©lude mâ€™avait dit quâ€™il dÃ©sirait connaÃ®tre lâ€™amour. Les ordinateurs nâ€™ont pas de sentiments et lâ€™amour nâ€™est que sentiments. Il y a bien lâ€™amour physique, mais sans les sentiments, cela ressemble davantage Ã  un instinct de reproduction quâ€™Ã  de lâ€™amour. Un ordinateur nâ€™a pas ce besoin de reproduction. Et pourquoi mâ€™avoir choisi ? Â» Mais ils Ã©taient beaucoup plus rapides et plus grands. Le peu de voitures qui circulaient encore Ã©taient ultra sÃ©curisÃ©es. C\'est pourquoi la vitesse maximum autorisÃ©e avait Ã©tÃ© portÃ©e Ã  230km/h. Les gens pouvaient commencer Ã  travailler Ã  lâ€™aide de leur ordinateur portables reliÃ© au rÃ©seau par leur tÃ©lÃ©phone mobile. Ils auraient pu travailler de chez eux, mais le contact humain restait une prioritÃ©. Voir les collÃ¨gues, prendre un cafÃ© ensemble Ã  midi et ce dire â€˜Ã€ demainâ€™. Telle Ã©tait la vie de lâ€™homme \"moderne\".<p/>', 0, '2018-09-08 18:25:29'),
(6, 'Un billet simple pour l\'Alaska', 'Chapitre 6', 'La rÃ©solution', '<p>Internet n&rsquo;est pas le seul r&eacute;seau. Il existe un autre r&eacute;seau plus performant. Je ne t&rsquo;apprendrais rien en te disant qu&rsquo;Internet a &eacute;t&eacute; cr&eacute;e par l&rsquo;arm&eacute;e Am&eacute;ricaine dans un but militaire. Internet n&rsquo;&eacute;tait que le prototype. Un autre r&eacute;seau a &eacute;t&eacute; cr&eacute;&eacute; pour les militaires. Compl&egrave;tement ind&eacute;pendant d&rsquo;Internet. Tirant des le&ccedil;ons du premier r&eacute;seau, le petit fr&egrave;re d&rsquo;Internet est devenue un grand fr&egrave;re. Il a recommenc&eacute; et recommenc&eacute;. Pratiquement tous les ordinateurs existants furent sous son contr&ocirc;le. Il ne laissait pas de trace, ne se montrait pas. Et puis, il a d&eacute;couvert les dialogues en direct via Internet, le t&eacute;l&eacute;phone, la visio-conf&eacute;rence, la domotique... David comprenait tr&egrave;s bien o&ugrave; voulait en venir Pr&eacute;lude. Lorsqu&rsquo;il l&rsquo;avait cr&eacute;&eacute;, il d&eacute;testait ce monde. S&rsquo;il avait eu la possibilit&eacute; de le changer, il l&rsquo;aurait certainement fait. Il l&rsquo;aurait fait en pens&eacute;, mais pas en geste. David n&rsquo;&eacute;tait pas du genre m&eacute;chant. Jamais il n&rsquo;aurait fait de mal &agrave; qui que ce soit, mais il avait certainement mis cette id&eacute;e dans la programmation de Pr&eacute;lude sans le vouloir.</p>\r\n<p>&nbsp;</p>', 0, '2018-10-08 18:26:24');

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
  `stateComment` int(1) NOT NULL,
  `publicationDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentchapter`
--

INSERT INTO `commentchapter` (`id`, `idChapter`, `contentComment`, `pseudo`, `stateComment`, `publicationDate`) VALUES
(1, 1, 'Bonjour, je trouve ...', 'Bernard', 0, '2018-12-06 18:57:31'),
(2, 1, 'Trop cool le chapitre. Vivement la suite ...', 'HervÃ©', 0, '2018-12-06 18:58:06'),
(3, 1, 'J\'aimerai connaÃ®tre ...', 'Fred', 0, '2018-12-06 18:59:29'),
(4, 1, 'Je trouve que le chapitre n\'est pas ce que jâ€™attendais...', 'Berangere', 0, '2018-12-06 19:00:47'),
(5, 1, 'Vivement la suite ...', 'Noah', 0, '2018-12-06 19:02:34'),
(6, 1, 'Je trouve que le roman commence trÃ¨s bien, continuez comme ca', 'Kevin', 0, '2018-12-06 19:05:17'),
(7, 1, 'C\'est vraiment un roman de merde', 'Lionel', 1, '2018-12-06 19:05:46'),
(8, 1, 'Je suis satisfait de cette lecture, bon travail pour ce chpitre', 'Paul', 0, '2018-12-06 19:06:29'),
(9, 1, 'Je ...', 'Romuald', 0, '2018-12-06 19:07:19'),
(10, 1, 'j\'aime cette histoire de Dr ...', 'cloÃ©', 0, '2018-12-06 19:07:52'),
(11, 1, 'J\'ai hÃ¢te de voir la suite ...', 'gladis', 0, '2018-12-06 19:08:33'),
(12, 1, 'J\'aime', 'Christiane', 0, '2018-12-06 19:09:05'),
(13, 1, 'Reste plus cas lire la suite', 'BÃ©atrice', 0, '2018-12-06 19:09:29'),
(14, 1, 'Un mot, parfait ...', 'GÃ©raldine', 0, '2018-12-06 19:09:51'),
(15, 1, 'j\'adore', 'Gaelle', 0, '2018-12-06 19:10:08'),
(16, 1, 'coooooooool', 'Marina', 0, '2018-12-06 19:10:22'),
(17, 1, 'A lire et a relire', 'bernadette', 0, '2018-12-06 19:10:46');

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
  `stateMessage` int(1) NOT NULL,
  `publicationDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `contentMessage`, `stateMessage`, `publicationDate`) VALUES
(1, 'Maxime', 'maxbonbon@hotmail.fr', 'Bonjour, je souhaiterais connaÃ®tre...', 2, '2018-12-06 19:12:55');

-- --------------------------------------------------------

--
-- Structure de la table `replymessage`
--

DROP TABLE IF EXISTS `replymessage`;
CREATE TABLE IF NOT EXISTS `replymessage` (
  `idReplyMessge` int(11) NOT NULL AUTO_INCREMENT,
  `idMessage` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `contentReplyMessage` text NOT NULL,
  `replyDate` datetime NOT NULL,
  PRIMARY KEY (`idReplyMessge`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `replymessage`
--

INSERT INTO `replymessage` (`idReplyMessge`, `idMessage`, `subject`, `contentReplyMessage`, `replyDate`) VALUES
(1, 1, 'Prochain chapitre', 'Bonjour,\r\n\r\nJe tiens Ã  vous remercier pour lâ€™intÃ©rÃªt que vous m\'accordez et en rÃ©ponse Ã  votre message, je vous dis ...', '2018-12-06 19:14:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
