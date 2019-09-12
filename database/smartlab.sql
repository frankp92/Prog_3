-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 12, 2019 alle 13:11
-- Versione del server: 10.1.36-MariaDB
-- Versione PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartlab`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `area_tematica`
--

CREATE TABLE `area_tematica` (
  `IDareatematica` int(11) NOT NULL,
  `Titolo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `area_tematica`
--

INSERT INTO `area_tematica` (`IDareatematica`, `Titolo`) VALUES
(22, 'evento pubblico'),
(23, 'evento privato'),
(24, 'progetto pubblico'),
(25, 'progetto privato'),
(26, 'prova'),
(27, 'prova'),
(28, 'priv'),
(29, 'ciao'),
(30, 'pub'),
(31, 'ppp'),
(32, 't'),
(33, 'r'),
(34, 'r'),
(35, 'e'),
(36, 'fff'),
(37, 'sdf'),
(38, 'dsf'),
(39, 'priv'),
(40, 'pu'),
(41, 're'),
(42, 're'),
(43, 're'),
(44, 'er'),
(45, 'ew'),
(46, 'ew'),
(47, 'qw'),
(48, 'asd'),
(49, 'asd'),
(50, 'asd'),
(51, 'asd'),
(52, 'asd'),
(53, 'asd'),
(54, 'evp'),
(55, 'evp'),
(56, 'asd'),
(57, 'asd'),
(58, 'asd'),
(59, 'sad'),
(60, 'asd'),
(61, ''),
(62, ''),
(63, ''),
(64, ''),
(65, ''),
(66, ''),
(67, ''),
(68, ''),
(69, ''),
(70, ''),
(71, ''),
(72, ''),
(73, 'sdfsd'),
(74, 'sdfsdf'),
(75, 'qqa'),
(76, 'dfgd'),
(77, 'dsvdsv'),
(78, 'dgd'),
(79, ''),
(80, ''),
(81, ''),
(82, ''),
(83, 'asd'),
(84, 'asd'),
(85, 'asd'),
(86, 'asd'),
(87, 'fsdf'),
(88, 'dfsdg'),
(89, 'dssfdg'),
(90, 'asfsdaf'),
(91, 'ergse'),
(92, 'dgvsg'),
(93, 'sdsdv'),
(94, 'sdvsdv'),
(95, 'sfvfs'),
(96, 'fddfbszfb'),
(97, 'fvdz');

-- --------------------------------------------------------

--
-- Struttura della tabella `coordinatore`
--

CREATE TABLE `coordinatore` (
  `IDcoordinatore` int(11) NOT NULL,
  `IDprogetto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `coordinatore`
--

INSERT INTO `coordinatore` (`IDcoordinatore`, `IDprogetto`) VALUES
(23, 24),
(23, 25),
(23, 26),
(23, 27),
(23, 28),
(23, 29),
(23, 30),
(23, 31);

-- --------------------------------------------------------

--
-- Struttura della tabella `docente_strutturato`
--

CREATE TABLE `docente_strutturato` (
  `IDds` int(11) NOT NULL,
  `Profilo` varchar(20) COLLATE utf8_bin NOT NULL,
  `Dipartimento` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `docente_strutturato`
--

INSERT INTO `docente_strutturato` (`IDds`, `Profilo`, `Dipartimento`) VALUES
(23, 'Ricercatore', 'Informatica'),
(37, 'Ordinario', 'dfbdb'),
(46, 'Ricercatore', 'asdasd'),
(48, 'Ricercatore', 'sdfsdfg');

-- --------------------------------------------------------

--
-- Struttura della tabella `documento`
--

CREATE TABLE `documento` (
  `IDdocumento` int(11) NOT NULL,
  `IDutente` int(11) NOT NULL,
  `IDprogetto` int(11) NOT NULL,
  `Titolo` int(11) NOT NULL,
  `Tipo` varchar(20) COLLATE utf8_bin NOT NULL,
  `Ultima_modifica` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE TABLE `evento` (
  `IDevento` int(11) NOT NULL,
  `Titolo` varchar(20) COLLATE utf8_bin NOT NULL,
  `Descrizione` varchar(140) COLLATE utf8_bin NOT NULL,
  `Data` date NOT NULL,
  `Ora` time NOT NULL,
  `Durata` varchar(20) COLLATE utf8_bin NOT NULL,
  `Posti` int(100) NOT NULL,
  `Privacy` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`IDevento`, `Titolo`, `Descrizione`, `Data`, `Ora`, `Durata`, `Posti`, `Privacy`) VALUES
(53, 'Evento 1', 'asdasdasd', '2019-09-11', '11:11:00', '3', 12326, 'Pubblico'),
(54, 'Evento 2', 'asdasd', '2019-09-11', '11:11:00', '3', 7890, 'Pubblico'),
(55, 'Evento 3', 'asdasd', '2019-09-11', '11:11:00', '3', 5678, 'Pubblico'),
(56, 'asdasdasd', 'asdasdsad', '2019-09-11', '11:11:00', '3', 2, 'Pubblico'),
(57, 'dsfsdfdsf', 'dsfdsfdsf', '2019-09-11', '11:11:00', '4', 5, 'Pubblico'),
(58, 'ddgdsg', 'sdfsdfsf', '2019-09-11', '11:11:00', '3', 67, 'Pubblico'),
(59, 'dvdsvv', 'vdsdsvdv', '2019-09-11', '11:11:00', '3', 44, 'Pubblico'),
(60, 'dsfdsf', 'sfsada', '2019-09-11', '22:22:00', '22', 11, 'Pubblico'),
(61, 'ghh', 'rhrhr', '2019-09-11', '11:11:00', '3', 222, 'Pubblico'),
(63, 'ergdfgfd', 'sgdfgsdf', '2019-09-12', '11:11:00', '3', 4, 'Pubblico'),
(64, 'dfbdfbs', 'fdsbfdb', '2019-09-12', '11:11:00', '3', 123456789, 'Pubblico'),
(65, 'Provaaa', 'dsfsadf', '2019-09-12', '11:11:00', '3', 3, 'Pubblico');

-- --------------------------------------------------------

--
-- Struttura della tabella `lavoro`
--

CREATE TABLE `lavoro` (
  `IDlavoratore` int(11) NOT NULL,
  `IDprogetto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `materiale`
--

CREATE TABLE `materiale` (
  `IDmateriale` int(11) NOT NULL,
  `Tipologia` varchar(20) COLLATE utf8_bin NOT NULL,
  `Modello` varchar(20) COLLATE utf8_bin NOT NULL,
  `Marca` varchar(20) COLLATE utf8_bin NOT NULL,
  `Quantità` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `moderatore`
--

CREATE TABLE `moderatore` (
  `IDmoderatore` int(11) NOT NULL,
  `IDevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `moderatore`
--

INSERT INTO `moderatore` (`IDmoderatore`, `IDevento`) VALUES
(23, 53),
(23, 54),
(23, 55),
(23, 56),
(23, 57),
(23, 58),
(23, 59),
(23, 60),
(23, 61),
(23, 63),
(23, 64),
(23, 65);

-- --------------------------------------------------------

--
-- Struttura della tabella `partecipa`
--

CREATE TABLE `partecipa` (
  `IDpartecipante` int(11) NOT NULL,
  `IDevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `personale_non_strutturato`
--

CREATE TABLE `personale_non_strutturato` (
  `IDpns` int(11) NOT NULL,
  `Qualifica` varchar(20) COLLATE utf8_bin NOT NULL,
  `Data_inizio` date NOT NULL,
  `Data_fine` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `personale_non_strutturato`
--

INSERT INTO `personale_non_strutturato` (`IDpns`, `Qualifica`, `Data_inizio`, `Data_fine`) VALUES
(24, 'Dottorando', '2019-08-23', '2019-08-23'),
(30, 'Dottorando', '2019-09-01', '2019-09-01'),
(47, 'Dottorando', '2019-09-11', '0000-00-00'),
(49, 'Dottorando', '2019-09-11', '0000-00-00'),
(50, 'Dottorando', '2019-09-11', '2019-09-11'),
(56, 'Dottorando', '2019-09-11', '2019-09-11');

-- --------------------------------------------------------

--
-- Struttura della tabella `personale_tecnico`
--

CREATE TABLE `personale_tecnico` (
  `IDpt` int(11) NOT NULL,
  `Professione` varchar(20) COLLATE utf8_bin NOT NULL,
  `Specializzazione` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `personale_tecnico`
--

INSERT INTO `personale_tecnico` (`IDpt`, `Professione`, `Specializzazione`) VALUES
(26, 'Tecnico IT', 'Reti'),
(31, 'dfbdbf', 'dfbdfb'),
(32, 'sdfsdf', 'sdfds'),
(33, 'dfvdvfd', 'dfvdfb'),
(34, 'vssvd', 'vdssdv'),
(35, 'sdvs', 'svsv'),
(36, 'sdvsd', 'sdvds'),
(52, 'dsfsdvf', 'sdfdsf');

-- --------------------------------------------------------

--
-- Struttura della tabella `progetto`
--

CREATE TABLE `progetto` (
  `IDprogetto` int(11) NOT NULL,
  `Data_di_creazione` date NOT NULL,
  `Titolo` varchar(20) COLLATE utf8_bin NOT NULL,
  `Descrizione` varchar(140) COLLATE utf8_bin NOT NULL,
  `Tipologia` varchar(20) COLLATE utf8_bin NOT NULL,
  `Durata` int(20) NOT NULL,
  `Posizioni_aperte` int(20) NOT NULL,
  `Privacy` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `progetto`
--

INSERT INTO `progetto` (`IDprogetto`, `Data_di_creazione`, `Titolo`, `Descrizione`, `Tipologia`, `Durata`, `Posizioni_aperte`, `Privacy`) VALUES
(24, '2019-09-05', 'sadasd', 'ssdasd', 'Tesi', 4, 5, 'Pubblico'),
(25, '2019-09-05', 'asdasd', 'asdasd', 'Tesi', 3, 4, 'Privato'),
(26, '2019-09-05', 'asdasd', 'asdasd', 'Tirocinio', 4, 5, 'Pubblico'),
(27, '2019-09-05', 'asdasd', 'asdasd', 'Tirocinio', 4, 5, 'Privato'),
(28, '2019-09-05', 'asdasd', 'asdasd', 'Lavoro', 4, 5, 'Pubblico'),
(29, '2019-09-05', 'asdasd', 'asdasd', 'Lavoro', 4, 5, 'Privato'),
(30, '2019-09-11', 'dsfsdvf', 'undefined', 'Tesi', 4, 333, 'Pubblico'),
(31, '2019-09-11', 'xcdvdsv', 'undefined', 'Tesi', 3, 444, 'Pubblico');

-- --------------------------------------------------------

--
-- Struttura della tabella `relatore_1`
--

CREATE TABLE `relatore_1` (
  `IDrelatore` int(11) NOT NULL,
  `IDevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `relatore_2`
--

CREATE TABLE `relatore_2` (
  `IDrelatore` int(11) NOT NULL,
  `IDevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `studente`
--

CREATE TABLE `studente` (
  `IDs` int(11) NOT NULL,
  `Tipo_di_corso` varchar(20) COLLATE utf8_bin NOT NULL,
  `Corso_di_studio` varchar(20) COLLATE utf8_bin NOT NULL,
  `Anno_corso` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `studente`
--

INSERT INTO `studente` (`IDs`, `Tipo_di_corso`, `Corso_di_studio`, `Anno_corso`) VALUES
(25, 'Triennale', 'Informatica', 3),
(28, 'Triennale', 'asdasdasd', 3),
(29, 'Triennale', 'asdasdasd', 1),
(39, 'Triennale', 'prova', 3),
(40, 'Triennale', 'prova 2', 3),
(41, 'Triennale', '3', 3),
(42, 'Triennale', 'proova', 3),
(43, 'Triennale', 'asdasd', 3),
(44, 'Triennale', 'asdasd', 3),
(45, 'Triennale', 'asdasdasd', 3),
(51, 'Triennale', 'sdfsdf', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `tag_e`
--

CREATE TABLE `tag_e` (
  `IDareatematica` int(11) NOT NULL,
  `IDevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `tag_e`
--

INSERT INTO `tag_e` (`IDareatematica`, `IDevento`) VALUES
(83, 53),
(84, 54),
(85, 55),
(86, 56),
(87, 57),
(88, 58),
(89, 59),
(90, 60),
(91, 61),
(95, 63),
(96, 64),
(97, 65);

-- --------------------------------------------------------

--
-- Struttura della tabella `tag_p`
--

CREATE TABLE `tag_p` (
  `IDareatematica` int(11) NOT NULL,
  `IDprogetto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `tag_p`
--

INSERT INTO `tag_p` (`IDareatematica`, `IDprogetto`) VALUES
(48, 24),
(49, 25),
(50, 26),
(51, 27),
(52, 28),
(53, 29),
(93, 30),
(94, 31);

-- --------------------------------------------------------

--
-- Struttura della tabella `tesi`
--

CREATE TABLE `tesi` (
  `IDrelatore` int(11) NOT NULL,
  `IDtutor` int(11) NOT NULL,
  `IDtesista` int(11) NOT NULL,
  `IDprogetto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `tirocinio`
--

CREATE TABLE `tirocinio` (
  `IDtutor` int(11) NOT NULL,
  `IDtirocinante` int(11) NOT NULL,
  `IDprogetto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `IDutente` int(11) NOT NULL,
  `Nome` varchar(20) COLLATE utf8_bin NOT NULL,
  `Cognome` varchar(20) COLLATE utf8_bin NOT NULL,
  `Indirizzo` varchar(20) COLLATE utf8_bin NOT NULL,
  `Telefono` varchar(20) COLLATE utf8_bin NOT NULL,
  `Email` varchar(20) COLLATE utf8_bin NOT NULL,
  `Titolo_di_studio` varchar(20) COLLATE utf8_bin NOT NULL,
  `Codice_fiscale` varchar(20) COLLATE utf8_bin NOT NULL,
  `Categoria` varchar(20) COLLATE utf8_bin NOT NULL,
  `Password` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`IDutente`, `Nome`, `Cognome`, `Indirizzo`, `Telefono`, `Email`, `Titolo_di_studio`, `Codice_fiscale`, `Categoria`, `Password`) VALUES
(23, 'Primo', 'Professore', 'Via Roma', '96548484', 'primo@professore', 'Laurea', 'pnfncgnvthepsghi', 'professore', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'Docente ', 'non Strutturato', 'Via Roma', '96548484', 'docente@nonstruttura', 'Laurea', 'pncgertsgetdfqua', 'personale_non_strutt', 'e10adc3949ba59abbe56e057f20f883e'),
(25, 'Primo', 'Studente', 'Via Roma', '096585858', 'primo@studente', 'Laurea', 'yhetfgchwpanhlfh', 'studente', 'e10adc3949ba59abbe56e057f20f883e'),
(26, 'Personale', 'Tecnico', 'Via Roma', '096586897', 'personale@tecnico', 'Diploma', 'htysgamsltoghdje', 'personale_tecnico', 'e10adc3949ba59abbe56e057f20f883e'),
(27, 'Utente', 'Esterno', 'Via Roma', '096585698', 'utente@esterno', 'Diploma', 'mlvjfyrutlcieltu', 'utente_esterno', 'e10adc3949ba59abbe56e057f20f883e'),
(28, 'Secondo', 'Studente', 'Via Roma', '45678912', 'secondo@studente', 'asdasdasd', 'sdasd', 'studente', 'e10adc3949ba59abbe56e057f20f883e'),
(29, 'terzo', 'studente', 'Via Roma', '456456456', 'terzo@studente', 'asdasdasd', 'asdasdasd', 'studente', 'e10adc3949ba59abbe56e057f20f883e'),
(30, 'fdgdg', 'dfgdfg', 'dfgdfg', 'dfgdfg', 'a@a', 'fdgfdg', 'fdgfdg', 'personale_non_strutt', 'e10adc3949ba59abbe56e057f20f883e'),
(31, 'fdvdfv', 'dsvfdfv', 'fdvdfv', 'fdvdb', 'a@a', 'dfbdf', 'dfvdv', 'personale_tecnico', 'e10adc3949ba59abbe56e057f20f883e'),
(32, 'dfbfb', 'dfdg', 'dfdg', 'dfbdfb', 'a@b', 'dfsf', 'ffs', '', 'e10adc3949ba59abbe56e057f20f883e'),
(33, 'dbdgfbfdb', 'dbdb', 'dbdb', 'dbdb', 'a@a', 'dfbdfb', 'dfbdbdfbdfb', '', 'aec6500cec2a7aea5d70d829fd8cba9e'),
(34, 'dsvsdv', 'vdssdv', 'sdvsdv', 'sdvsdv', 'a@a', 'sdvsd', 'sdvsdv', 'personale_tecnico', 'fa64277b398c2837bdd610f4129c41a3'),
(35, 'dsgsd', 'dsfsdf', 'dvsdds', 'dsdvsss', 'a@c', 'sdvsdv', 'sdvdsv', 'personale_tecnico', 'e10adc3949ba59abbe56e057f20f883e'),
(36, 'dvsv', 'sdvsd', 'svsdv', 'sdvsdv', 'g@g', 'sdvsd', 'sdvsvdds', 'personale_tecnico', 'e10adc3949ba59abbe56e057f20f883e'),
(37, 'dfbdfbd', 'fdbfdb', 'dfbdfb', 'dfbbf', 'pippo@pippo', 'dfbdfb', 'fbfdb', 'professore', 'e10adc3949ba59abbe56e057f20f883e'),
(38, 'fdvdv', 'dvdf', 'dvfdv', 'dfvdf', 'pippuzzo@pippo', 'dfvdf', 'dfvdf', 'utente_esterno', 'e10adc3949ba59abbe56e057f20f883e'),
(39, 'prova', 'prova', 'prova', 'prova', 'pr@pr', 'prova', 'prova', 'studente', 'c4ca4238a0b923820dcc509a6f75849b'),
(40, 'prova 2', 'prova 2', 'prova 2', 'prova 2', 'pr2@pr2', 'prova 2', 'prova 2', 'studente', 'c4ca4238a0b923820dcc509a6f75849b'),
(41, 'prova 3', 'prova 3', 'prova 3', 'prova 3', 'pr3@pr3', 'prova 3', 'prova 3', 'studente', 'c4ca4238a0b923820dcc509a6f75849b'),
(42, 'proova', 'proova', 'proova', 'proova', 'prr@prr', 'proova', 'proova', 'studente', 'e10adc3949ba59abbe56e057f20f883e'),
(43, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'aasd@asd', 'asdasd', 'asdasd', 'studente', 'c4ca4238a0b923820dcc509a6f75849b'),
(44, 'asdasd', 'asdasd', 'asdsad', 'asdasd', 'asdasd@asd', 'asdasd', 'asdsad', 'studente', '7815696ecbf1c96e6894b779456d330e'),
(45, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'asd@asdasd', 'asdasdasd', 'asdasdasd', 'studente', 'c4ca4238a0b923820dcc509a6f75849b'),
(46, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd@p', 'asdasd', 'asdasd', 'professore', 'c4ca4238a0b923820dcc509a6f75849b'),
(47, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'asdp@sad', 'asdsadasd', 'asdasdasd', 'personale_non_strutt', 'c4ca4238a0b923820dcc509a6f75849b'),
(48, 'sdFsdfsd', 'dsfsdf', 'sdfsfa', 'dfsf', 'rt@rt', 'sdfsdf', 'dsfsdf', 'professore', 'c4ca4238a0b923820dcc509a6f75849b'),
(49, 'dfgdfg', 'sdfsfd', 'sdfsfd', 'dsfsdf', 'ry@ry', 'sdfsdf', 'dsfsdf', 'personale_non_strutt', 'c4ca4238a0b923820dcc509a6f75849b'),
(50, 'dsfsdggsd', 'sdgdsfg', 'sdgsdg', 'dsgdsg', 'ru@ru', 'sdfgdsg', 'sdfgfdg', 'personale_non_strutt', 'c4ca4238a0b923820dcc509a6f75849b'),
(51, 'sdgfsgdv', 'sdgfsa', 'dsfds', 'dsfdsf', 'ri@ri', 'asfsdf', 'dsfdsf', 'studente', 'c4ca4238a0b923820dcc509a6f75849b'),
(52, 'dvsdv', 'sdgfsd', 'dsfsdf', 'dsfds', 'ro@ro', 'fdsvgfdv', 'sdfdsf', 'personale_tecnico', 'e10adc3949ba59abbe56e057f20f883e'),
(53, 'dsfsdsd', 'sdgffdsfg', 'dsfsdv', 'dsfsdf', 'rp@rp', 'dsfds', 'sdfsdf', 'utente_esterno', 'c4ca4238a0b923820dcc509a6f75849b'),
(54, 'dvsds', 'dsvdsv', 'sdvdsv', 'sdvdsv', 'ra@ra', 'sdvdsv', 'dsvsd', 'utente_esterno', 'c4ca4238a0b923820dcc509a6f75849b'),
(55, 'sdvdsvds', 'svsdv', 'sdvds', 'sdvds', 'rs@rs', 'dsvdsv', 'sdvsd', 'utente_esterno', 'c4ca4238a0b923820dcc509a6f75849b'),
(56, 'sdfsdfvc', 'sdfdsvg', 'sdfsdvf', 'dsvfdsv', 'rg@rg', 'sdvdsv', 'dsfvsdv', 'personale_non_strutt', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Struttura della tabella `utilizzo`
--

CREATE TABLE `utilizzo` (
  `IDmateriale` int(11) NOT NULL,
  `IDprogetto` int(11) NOT NULL,
  `Data_inizio` date NOT NULL,
  `Data_fine` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `area_tematica`
--
ALTER TABLE `area_tematica`
  ADD PRIMARY KEY (`IDareatematica`);

--
-- Indici per le tabelle `coordinatore`
--
ALTER TABLE `coordinatore`
  ADD KEY `IDprogetto` (`IDprogetto`),
  ADD KEY `IDcoordinatore` (`IDcoordinatore`);

--
-- Indici per le tabelle `docente_strutturato`
--
ALTER TABLE `docente_strutturato`
  ADD KEY `IDds` (`IDds`);

--
-- Indici per le tabelle `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`IDdocumento`),
  ADD KEY `IDprogetto` (`IDprogetto`),
  ADD KEY `IDutente` (`IDutente`);

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`IDevento`) USING BTREE;

--
-- Indici per le tabelle `lavoro`
--
ALTER TABLE `lavoro`
  ADD KEY `IDprogetto` (`IDprogetto`),
  ADD KEY `IDlavoratore` (`IDlavoratore`);

--
-- Indici per le tabelle `materiale`
--
ALTER TABLE `materiale`
  ADD PRIMARY KEY (`IDmateriale`);

--
-- Indici per le tabelle `moderatore`
--
ALTER TABLE `moderatore`
  ADD KEY `IDevento` (`IDevento`),
  ADD KEY `IDmoderatore` (`IDmoderatore`);

--
-- Indici per le tabelle `partecipa`
--
ALTER TABLE `partecipa`
  ADD KEY `IDevento` (`IDevento`),
  ADD KEY `IDpartecipante` (`IDpartecipante`);

--
-- Indici per le tabelle `personale_non_strutturato`
--
ALTER TABLE `personale_non_strutturato`
  ADD KEY `IDpns` (`IDpns`);

--
-- Indici per le tabelle `personale_tecnico`
--
ALTER TABLE `personale_tecnico`
  ADD KEY `IDpt` (`IDpt`);

--
-- Indici per le tabelle `progetto`
--
ALTER TABLE `progetto`
  ADD PRIMARY KEY (`IDprogetto`);

--
-- Indici per le tabelle `relatore_1`
--
ALTER TABLE `relatore_1`
  ADD KEY `UId` (`IDrelatore`),
  ADD KEY `IDevento` (`IDevento`);

--
-- Indici per le tabelle `relatore_2`
--
ALTER TABLE `relatore_2`
  ADD KEY `UId` (`IDrelatore`),
  ADD KEY `IDevento` (`IDevento`);

--
-- Indici per le tabelle `studente`
--
ALTER TABLE `studente`
  ADD KEY `IDs` (`IDs`);

--
-- Indici per le tabelle `tag_e`
--
ALTER TABLE `tag_e`
  ADD KEY `IDevento` (`IDevento`),
  ADD KEY `IDareatematica` (`IDareatematica`);

--
-- Indici per le tabelle `tag_p`
--
ALTER TABLE `tag_p`
  ADD KEY `IDareatematica` (`IDareatematica`),
  ADD KEY `IDprogetto` (`IDprogetto`);

--
-- Indici per le tabelle `tesi`
--
ALTER TABLE `tesi`
  ADD KEY `IDprogetto` (`IDprogetto`),
  ADD KEY `IDrelatore` (`IDrelatore`),
  ADD KEY `IDtesista` (`IDtesista`),
  ADD KEY `IDtutor` (`IDtutor`);

--
-- Indici per le tabelle `tirocinio`
--
ALTER TABLE `tirocinio`
  ADD KEY `IDtutor` (`IDtutor`),
  ADD KEY `IDtirocinante` (`IDtirocinante`),
  ADD KEY `IDprogetto` (`IDprogetto`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`IDutente`);

--
-- Indici per le tabelle `utilizzo`
--
ALTER TABLE `utilizzo`
  ADD KEY `IDmateriale` (`IDmateriale`),
  ADD KEY `IDprogetto` (`IDprogetto`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `area_tematica`
--
ALTER TABLE `area_tematica`
  MODIFY `IDareatematica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT per la tabella `documento`
--
ALTER TABLE `documento`
  MODIFY `IDdocumento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
  MODIFY `IDevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT per la tabella `materiale`
--
ALTER TABLE `materiale`
  MODIFY `IDmateriale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `progetto`
--
ALTER TABLE `progetto`
  MODIFY `IDprogetto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `IDutente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `coordinatore`
--
ALTER TABLE `coordinatore`
  ADD CONSTRAINT `coordinatore_ibfk_1` FOREIGN KEY (`IDprogetto`) REFERENCES `progetto` (`IDprogetto`),
  ADD CONSTRAINT `coordinatore_ibfk_2` FOREIGN KEY (`IDcoordinatore`) REFERENCES `docente_strutturato` (`IDds`);

--
-- Limiti per la tabella `docente_strutturato`
--
ALTER TABLE `docente_strutturato`
  ADD CONSTRAINT `docente_strutturato_ibfk_1` FOREIGN KEY (`IDds`) REFERENCES `utente` (`IDutente`);

--
-- Limiti per la tabella `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`IDprogetto`) REFERENCES `progetto` (`IDprogetto`),
  ADD CONSTRAINT `documento_ibfk_2` FOREIGN KEY (`IDutente`) REFERENCES `utente` (`IDutente`);

--
-- Limiti per la tabella `lavoro`
--
ALTER TABLE `lavoro`
  ADD CONSTRAINT `lavoro_ibfk_1` FOREIGN KEY (`IDprogetto`) REFERENCES `progetto` (`IDprogetto`),
  ADD CONSTRAINT `lavoro_ibfk_2` FOREIGN KEY (`IDlavoratore`) REFERENCES `utente` (`IDutente`);

--
-- Limiti per la tabella `moderatore`
--
ALTER TABLE `moderatore`
  ADD CONSTRAINT `moderatore_ibfk_1` FOREIGN KEY (`IDevento`) REFERENCES `evento` (`IDevento`),
  ADD CONSTRAINT `moderatore_ibfk_2` FOREIGN KEY (`IDmoderatore`) REFERENCES `docente_strutturato` (`IDds`);

--
-- Limiti per la tabella `partecipa`
--
ALTER TABLE `partecipa`
  ADD CONSTRAINT `partecipa_ibfk_1` FOREIGN KEY (`IDevento`) REFERENCES `evento` (`IDevento`),
  ADD CONSTRAINT `partecipa_ibfk_2` FOREIGN KEY (`IDpartecipante`) REFERENCES `utente` (`IDutente`);

--
-- Limiti per la tabella `personale_non_strutturato`
--
ALTER TABLE `personale_non_strutturato`
  ADD CONSTRAINT `personale_non_strutturato_ibfk_1` FOREIGN KEY (`IDpns`) REFERENCES `utente` (`IDutente`);

--
-- Limiti per la tabella `personale_tecnico`
--
ALTER TABLE `personale_tecnico`
  ADD CONSTRAINT `personale_tecnico_ibfk_1` FOREIGN KEY (`IDpt`) REFERENCES `utente` (`IDutente`);

--
-- Limiti per la tabella `relatore_1`
--
ALTER TABLE `relatore_1`
  ADD CONSTRAINT `relatore_1_ibfk_2` FOREIGN KEY (`IDrelatore`) REFERENCES `docente_strutturato` (`IDds`),
  ADD CONSTRAINT `relatore_1_ibfk_3` FOREIGN KEY (`IDevento`) REFERENCES `evento` (`IDevento`);

--
-- Limiti per la tabella `relatore_2`
--
ALTER TABLE `relatore_2`
  ADD CONSTRAINT `relatore_2_ibfk_2` FOREIGN KEY (`IDrelatore`) REFERENCES `personale_non_strutturato` (`IDpns`),
  ADD CONSTRAINT `relatore_2_ibfk_3` FOREIGN KEY (`IDevento`) REFERENCES `evento` (`IDevento`);

--
-- Limiti per la tabella `studente`
--
ALTER TABLE `studente`
  ADD CONSTRAINT `studente_ibfk_1` FOREIGN KEY (`IDs`) REFERENCES `utente` (`IDutente`);

--
-- Limiti per la tabella `tag_e`
--
ALTER TABLE `tag_e`
  ADD CONSTRAINT `tag_e_ibfk_1` FOREIGN KEY (`IDevento`) REFERENCES `evento` (`IDevento`),
  ADD CONSTRAINT `tag_e_ibfk_2` FOREIGN KEY (`IDareatematica`) REFERENCES `area_tematica` (`IDareatematica`);

--
-- Limiti per la tabella `tag_p`
--
ALTER TABLE `tag_p`
  ADD CONSTRAINT `tag_p_ibfk_1` FOREIGN KEY (`IDareatematica`) REFERENCES `area_tematica` (`IDareatematica`),
  ADD CONSTRAINT `tag_p_ibfk_2` FOREIGN KEY (`IDprogetto`) REFERENCES `progetto` (`IDprogetto`);

--
-- Limiti per la tabella `tesi`
--
ALTER TABLE `tesi`
  ADD CONSTRAINT `tesi_ibfk_1` FOREIGN KEY (`IDprogetto`) REFERENCES `progetto` (`IDprogetto`),
  ADD CONSTRAINT `tesi_ibfk_2` FOREIGN KEY (`IDrelatore`) REFERENCES `docente_strutturato` (`IDds`),
  ADD CONSTRAINT `tesi_ibfk_3` FOREIGN KEY (`IDtesista`) REFERENCES `studente` (`IDs`);

--
-- Limiti per la tabella `tirocinio`
--
ALTER TABLE `tirocinio`
  ADD CONSTRAINT `tirocinio_ibfk_2` FOREIGN KEY (`IDtirocinante`) REFERENCES `studente` (`IDs`),
  ADD CONSTRAINT `tirocinio_ibfk_3` FOREIGN KEY (`IDprogetto`) REFERENCES `progetto` (`IDprogetto`);

--
-- Limiti per la tabella `utilizzo`
--
ALTER TABLE `utilizzo`
  ADD CONSTRAINT `utilizzo_ibfk_3` FOREIGN KEY (`IDmateriale`) REFERENCES `materiale` (`IDmateriale`),
  ADD CONSTRAINT `utilizzo_ibfk_4` FOREIGN KEY (`IDprogetto`) REFERENCES `progetto` (`IDprogetto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
