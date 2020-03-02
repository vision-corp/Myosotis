-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2020 at 12:06 PM
-- Server version: 5.7.25
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `myosotis`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text,
  `image` text,
  `sousTitre` varchar(255) NOT NULL,
  `datePublication` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `image`, `sousTitre`, `datePublication`) VALUES
(7, 'florian', '<p>sdvdsvsdvdsvd</p>', '', 'test imagfe', 'Le 14-02-2020 à 15:18'),
(9, 'ffr', '<p>content</p>', 'dfbfdb', 'ffr', 'Le 14-02-2020 à 10:37'),
(18, 'test', '<p>sdvsdvdvsdvdv</p>', '', 'lijulbkjblkj', 'Le 14-02-2020 à 15:14');

-- --------------------------------------------------------

--
-- Table structure for table `parametres`
--

CREATE TABLE `parametres` (
  `param` varchar(255) NOT NULL,
  `valeur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parametres`
--

INSERT INTO `parametres` (`param`, `valeur`) VALUES
('adresse', '5 Lotissement le Sud'),
('conditions_formContact', '<p style=\"text-align: center;\"><em><span style=\"font-size: 36pt; background-color: #004d08;\"><strong><span style=\"color: #e03e2d; font-family: \'comic sans ms\', sans-serif;\">conditions du formulaire de contactttrrr</span></strong></span></em></p>'),
('cp', '12120'),
('email', 'margalejo.tom@gmail.com'),
('mentionsLegales', '<p style=\"text-align: center;\"><span style=\"font-size: 24pt;\"><strong><span style=\"color: #ba372a;\"><em>egdflgj flgkjd flgkfdg</em></span></strong></span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Denique Antiochensis ordinis vertices sub uno elogio iussit occidi ideo efferatus, quod ei celebrari vilitatem intempestivam urgenti, cum inpenderet inopia, gravius rationabili responderunt; et perissent ad unum ni comes orientis tunc Honoratus fixa constantia restitisset.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Quare hoc quidem praeceptum, cuiuscumque est, ad tollendam amicitiam valet; illud potius praecipiendum fuit, ut eam diligentiam adhiberemus in amicitiis comparandis, ut ne quando amare inciperemus eum, quem aliquando odisse possemus. Quin etiam si minus felices in diligendo fuissemus, ferendum id Scipio potius quam inimicitiarum tempus cogitandum putabat.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Soleo saepe ante oculos ponere, idque libenter crebris usurpare sermonibus, omnis nostrorum imperatorum, omnis exterarum gentium potentissimorumque populorum, omnis clarissimorum regum res gestas, cum tuis nec contentionum magnitudine nec numero proeliorum nec varietate regionum nec celeritate conficiendi nec dissimilitudine bellorum posse conferri; nec vero disiunctissimas terras citius passibus cuiusquam potuisse peragrari, quam tuis non dicam cursibus, sed victoriis lustratae sunt.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Et eodem impetu Domitianum praecipitem per scalas itidem funibus constrinxerunt, eosque coniunctos per ampla spatia civitatis acri raptavere discursu. iamque artuum et membrorum divulsa conpage superscandentes corpora mortuorum ad ultimam truncata deformitatem velut exsaturati mox abiecerunt in flumen.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Hoc inmaturo interitu ipse quoque sui pertaesus excessit e vita aetatis nono anno atque vicensimo cum quadriennio imperasset. natus apud Tuscos in Massa Veternensi, patre Constantio Constantini fratre imperatoris, matreque Galla sorore Rufini et Cerealis, quos trabeae consulares nobilitarunt et praefecturae.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis ut conscius ductus est aliique congregati sunt ex diversis civitatibus multi, qui atrocium criminum ponderibus urgebantur.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Vbi curarum abiectis ponderibus aliis tamquam nodum et codicem difficillimum Caesarem convellere nisu valido cogitabat, eique deliberanti cum proximis clandestinis conloquiis et nocturnis qua vi, quibusve commentis id fieret, antequam effundendis rebus pertinacius incumberet confidentia, acciri mollioribus scriptis per simulationem tractatus publici nimis urgentis eundem placuerat Gallum, ut auxilio destitutus sine ullo interiret obstaculo.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Sed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Quam ob rem cave Catoni anteponas ne istum quidem ipsum, quem Apollo, ut ais, sapientissimum iudicavit; huius enim facta, illius dicta laudantur. De me autem, ut iam cum utroque vestrum loquar, sic habetote.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Cum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci admodum familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto, Attice, et eo magis, quod P. Sulpicio utebare multum, cum is tribunus plebis capitali odio a Q. Pompeio, qui tum erat consul, dissideret, quocum coniunctissime et amantissime vixerat, quanta esset hominum vel admiratio vel querella.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Proinde concepta rabie saeviore, quam desperatio incendebat et fames, amplificatis viribus ardore incohibili in excidium urbium matris Seleuciae efferebantur, quam comes tuebatur Castricius tresque legiones bellicis sudoribus induratae.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Metuentes igitur idem latrones Lycaoniam magna parte campestrem cum se inpares nostris fore congressione stataria documentis frequentibus scirent, tramitibus deviis petivere Pamphyliam diu quidem intactam sed timore populationum et caedium, milite per omnia diffuso propinqua, magnis undique praesidiis conmunitam.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi plus praemii de figmentis aereis sensu carentibus adepturi, quam ex conscientia honeste recteque factorum, easque auro curant inbracteari, quod Acilio Glabrioni delatum est primo, cum consiliis armisque regem superasset Antiochum. quam autem sit pulchrum exigua haec spernentem et minima ad ascensus verae gloriae tendere longos et arduos, ut memorat vates Ascraeus, Censorius Cato monstravit. qui interrogatus quam ob rem inter multos... statuam non haberet malo inquit ambigere bonos quam ob rem id non meruerim, quam quod est gravius cur inpetraverim mussitare.</span></p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff; text-align: justify;\"><span style=\"font-size: 14pt;\">Per hoc minui studium suum existimans Paulus, ut erat in conplicandis negotiis artifex dirus, unde ei Catenae inditum est cognomentum, vicarium ipsum eos quibus praeerat adhuc defensantem ad sortem periculorum communium traxit. et instabat ut eum quoque cum tribunis et aliis pluribus ad comitatum imperatoris vinctum perduceret: quo percitus ille exitio urgente abrupto ferro eundem adoritur Paulum. et quia languente dextera, letaliter ferire non potuit, iam districtum mucronem in proprium latus inpegit. hocque deformi genere mortis excessit e vita iustissimus rector ausus miserabiles casus levare multorum.</span></p>'),
('pays', 'France'),
('s1_image', 'S1 Imagettt'),
('s1_sousTitre', 'S1 Sous titrettt'),
('s1_titre', 'jhjhg'),
('s2_image', 'S2 Imagettt'),
('s2_sousTitre', 'S2 sous titrettt'),
('s2_titre', 'S2 Titrettt'),
('s3_image', 'S3 Imagettt'),
('s3_sousTitre', 'olbulbiu'),
('s3_titre', 'S3 titrettt'),
('telephone', '0648407686'),
('ville', 'dbbfbbdbdffb');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `contenu` text NOT NULL,
  `pos` int(11) NOT NULL,
  `page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `identifiant`, `titre`, `sous_titre`, `image`, `contenu`, `pos`, `page`) VALUES
(1, 'Section 1', 'Section 1', 'Sous titre', '/images/photoCorps1.JPG', 'contenu opidponponpo . spdo po ipo ibpoid sbpdxoif pofi bpsdofinps oinspof bspof bijspod fbipof bpo df', 2, 'accueil'),
(2, 'Section 2', 'Section 2', 'Sousou titre section 2', '/images/photoCorps1.JPG', 'du texte du texte', 1, 'accueil'),
(3, 'k', 'oiuoiu', 'oiuoiu', 'oiuoiu', 'oioiu', 876, 'pp'),
(4, 'pop', 'o', 'pokpokp', 'pokpok', 'pokpok', 0, 'accueil'),
(5, 'aucun', 'ss', 'sous', 'img', 'Content', 1, 'accueil');

-- --------------------------------------------------------

--
-- Table structure for table `telechargements`
--

CREATE TABLE `telechargements` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telechargements`
--

INSERT INTO `telechargements` (`id`, `titre`, `lien`) VALUES
(1, 'd', 'http://www.google.ddd'),
(7, 'Foufounes electriques', 'http://www.foufouneselectriques.fr'),
(8, 'tel 2', 'http://www.iut-rodez.fr'),
(9, 'sefsef', 'sefsefsef'),
(11, 'fgbff', 'fgbfgbg'),
(12, 'sdvdvdvd', 'bgfbfgbfgbgf'),
(13, 'sdcsdc', 'mfglbgbdb'),
(14, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `pseudo`, `email`, `password`, `admin`) VALUES
(32, 'admin', 'admin', 'admin', 'tom.margalejo@iut-rodez.com', 'azerty', 1),
(34, 'Tom', 'Margalejo', 'tom', 'margalejo.tom@gmail.com', 'azerty', 0),
(36, 'Jean-Charles', 'Luans', 'JCL', 'jc.luans@gmail.com', '$2y$10$tpxZrKRq0pRKIUZhLigWiOB/hiwPTa5edNppyTm51Rl8SSyzPxBpO', 0),
(37, 'Nicolas', 'Couffin', 'nico', 'dfgfg@dfgd.fr', 'azerty123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parametres`
--
ALTER TABLE `parametres`
  ADD PRIMARY KEY (`param`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telechargements`
--
ALTER TABLE `telechargements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `telechargements`
--
ALTER TABLE `telechargements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;