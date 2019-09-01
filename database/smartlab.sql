-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ago 23, 2019 alle 20:47
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
(25, 'progetto privato');

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
(23, 6),
(23, 7);

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
(23, 'Ricercatore', 'Informatica');

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
(16, 'Evento pubblico', 'prova evento pubblico', '2019-08-23', '03:03:00', '6', 10, 'Pubblico'),
(17, 'evento privato', 'prova evento privato', '2019-08-23', '05:05:00', '8', 15, 'Privato');

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
(23, 16),
(23, 17);

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
(24, 'Dottorando', '2019-08-23', '2019-08-23');

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
(26, 'Tecnico IT', 'Reti');

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
(6, '2019-08-23', 'progetto pubblico', 'prova progetto pubblico', 'Tesi', 4, 3, 'Pubblico'),
(7, '2019-08-23', 'progetto privato', 'prova progetto privato', 'Tesi', 6, 4, 'Privato');

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
(25, 'Triennale', 'Informatica', 3);

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
(22, 16),
(23, 17);

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
(24, 6),
(25, 7);

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
(27, 'Utente', 'Esterno', 'Via Roma', '096585698', 'utente@esterno', 'Diploma', 'mlvjfyrutlcieltu', 'utente_esterno', 'e10adc3949ba59abbe56e057f20f883e');

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
  MODIFY `IDareatematica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT per la tabella `documento`
--
ALTER TABLE `documento`
  MODIFY `IDdocumento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
  MODIFY `IDevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT per la tabella `materiale`
--
ALTER TABLE `materiale`
  MODIFY `IDmateriale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `progetto`
--
ALTER TABLE `progetto`
  MODIFY `IDprogetto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `IDutente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
