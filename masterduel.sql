-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: masterduel
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card` (
  `IDCardCode` varchar(8) NOT NULL,
  `Img` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Type` varchar(75) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Banlist` varchar(20) NOT NULL,
  `Extra` varchar(10) NOT NULL,
  PRIMARY KEY (`IDCardCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card`
--

LOCK TABLES `card` WRITE;
/*!40000 ALTER TABLE `card` DISABLE KEYS */;
INSERT INTO `card` VALUES ('00000001','slifer_the_sky_dragon','Slifer, The Sky Dragon','Monster','Divine-Beast / Effect','Requires 3 Tributes to Normal Summon (cannot be Normal Set). This card\'s Normal Summon cannot be negated. When Normal Summoned, cards and effects cannot be activated. Once per turn, during the End Phase, if this card was Special Summoned: Send it to the GY. Gains 1000 ATK/DEF for each card in your hand. If a monster(s) is Normal or Special Summoned to your opponent\'s field in Attack Position: That monster(s) loses 2000 ATK, then if its ATK has been reduced to 0 as a result, destroy it.','Unlimited','effect'),('01546123','cyber_end_dragon','Cyber End Dragon','Monster','Machine / Fusion / Effect','\"Cyber Dragon\" + \"Cyber Dragon\" + \"Cyber Dragon\"\nA Fusion Summon of this card can only be done with the above Fusion Materials. If this card attacks a Defense Position monster, inflict piercing battle damage.','Unlimited','fusion'),('05318639','mystical_space_typhoon','Mystical Space Typhoon','Spell','Quick-Play','Target 1 Spell/Trap on the field; destroy that target.','Unlimited','spell'),('14898066','vorse_raider','Vorse Raider','Monster','Beast-Warrior / Normal','This wicked Beast-Warrior does every horrid thing imaginable, and loves it! His axe bears the marks of his countless victims.','Unlimited','normal'),('15259703','toon_world','Toon World','Spell','Continuous','Activate this card by paying 1000 LP.','Unlimited','spell'),('18161786','mystic_plasma_zone','Mystic Plasma Zone','Spell','Field','Increase the ATK of all DARK monsters by 500 points and decreases their DEF by 400 points.','Unlimited','spell'),('20073910','amaterasu','Amaterasu','Monster','Fairy / Spirit / Effect','Cannot be Normal or Special Summoned. During either player\'s turn, when your opponent activates a card or effect that targets this face-down monster: You can change this card to face-up Defense Position; draw 1 card. If this card is flipped face-up: Banish all other cards on the field. Once per turn, during the End Phase, if this card was flipped face-up this turn: Return it to the hand.','Unlimited','effect'),('21496848','evigishki_tetrogre','Evigishki Tetrogre','Monster','Aqua / Ritual / Effect','You can Ritual Summon this card with any \"Gishki\" Ritual Spell Card. Once per turn: You can declare 1 card type (Monster, Spell, or Trap); your opponent can discard 1 card to negate this card\'s effect, otherwise both players send 1 card of the declared type from their Main Deck to the Graveyard.','Unlimited','ritual'),('23776077','hazy_flame_basiltrice','Hazy Flame Basiltrice','Monster','Pyro / Xyz / Effect','2 or more (max. 5) Level 6 FIRE monsters\nOnce per turn: You can detach 1 Xyz Material from this card to target 1 monster your opponent controls or is in their Graveyard; banish that target. This card gains effects based on the number of Xyz Materials attached to it.\n3 or more: This card gains 200 ATK and DEF for each Xyz Material attached to it.\n4 or more: This card cannot be targeted by your opponent\'s card effects.\n5: This card cannot be destroyed by card effects.','Unlimited','xyz'),('26932788','javelin_beetle','Javelin Beetle','Monster','Insect / Ritual','This card can only be Ritual Summoned with the Ritual Spell Card, \"Javelin Beetle Pact\".','Unlimited','ritual'),('29669359','number_61_volcasaurus','Number 61: Volcasaurus','Monster','Dinosaur / Xyz / Effect','2 Level 5 monsters\nOnce per turn: You can detach 1 Xyz Material from this card, then target 1 face-up monster your opponent controls; destroy that opponent\'s monster, and if you do, inflict damage to your opponent equal to the destroyed monster\'s original ATK. This card cannot attack your opponent directly during the turn you activate this effect.','Unlimited','xyz'),('30208479','magician_of_black_chaos','Magician Of Black Chaos','Monster','Spellcaster / Ritual','You can Ritual Summon this card with \"Black Magic Ritual\".\n','Unlimited','ritual'),('31829185','dark_necrofear','Dark Necrofear','Monster','Fiend / Effect','Cannot be Normal Summoned/Set. Must first be Special Summoned (from your hand) by banishing 3 Fiend monsters from your GY. During the End Phase, if this card is in your GY because it was destroyed in your Monster Zone by an opponent\'s card and sent there this turn: Target 1 face-up monster your opponent controls; equip this card to that target. While this card is equipped to a monster by this effect, take control of that monster.','Unlimited','effect'),('33198837','naturia_beast','Naturia Beast','Monster','Beast / Synchro / Effect','1 EARTH Tuner + 1+ non-Tuner EARTH monsters\nWhen a Spell Card is activated (Quick Effect): You can send the top 2 cards of your Deck to the GY; negate the activation, and if you do, destroy it. This card must be face-up on the field to activate and to resolve this effect.','Unlimited','synchro'),('37038993','puralis_the_purple_pyrotile','Puralis, The Purple Pyrotile','Monster','Reptile / Synchro / Tuner / Effect','When this card is sent from the field to the Graveyard: All monsters your opponent currently controls lose 500 ATK.','Unlimited','synchro'),('41420027','solemn_judgment','Solemn Judgment','Trap','Counter','When a monster(s) would be Summoned, OR a Spell/Trap Card is activated: Pay half your LP; negate the Summon or activation, and if you do, destroy that card.','Unlimited','trap'),('44095762','mirror_force','Mirror Force','Trap','Normal','When an opponent\'s monster declares an attack: Destroy all your opponent\'s Attack Position monsters.','Unlimited','trap'),('46052429','advanced_ritual_art','Advanced Ritual Art','Spell','Ritual','This card is used to Ritual Summon any 1 Ritual Monster. You must also send Normal Monsters from your Deck to the GY whose total Levels equal the Level of that Ritual Monster.','Unlimited','spell'),('47611119','gem_knight_lady_lapis_lazuli','Gem-Knight Lady Lapis Lazuli','Monster','Rock / Fusion / Effect','Must first be Fusion Summoned with the above Fusion Materials. You can only Special Summon \"Gem-Knight Lady Lapis Lazuli(s)\" once per turn. Once per turn: You can send 1 \"Gem-Knight\" monster from your Main Deck or Extra Deck to the Graveyard, and if you do, inflict 500 damage to your opponent for each Special Summoned monster on the field.','Unlimited','effect'),('54620698','gem_knight_tourmaline','Gem-Knight Tourmaline','Monster','Thunder / Normal','He channels mystic energies and changes them into fighting strength through the power of Tourmaline. Many admire his way of life.','Unlimited','normal'),('54757758','mudragon_of_the_swamp','Mudragon Of The Swamp','Monster','Wyrm / Fusion / Effect','Your opponent cannot target this card, or monsters on the field with the same Attribute as this card, with card effects. Once per turn (Quick Effect): You can declare 1 Attribute; this card becomes that Attribute until the end of this turn.','Unlimited','fusion'),('58569561','aromage_rosemary','Aromage Rosemary','Monster','Plant / Effect','While your LP are higher than your opponent\'s, if a Plant monster you control attacks, your opponent cannot activate monster effects until the end of the Damage Step. Once per turn, if you gain LP: Target 1 face-up monster on the field; change its battle position.','Unlimited','effect'),('61127349','big_bang_shot','Big Bang Shot','Spell','Equip','The equipped monster gains 400 ATK. If the equipped monster attacks a Defense Position monster, inflict piercing battle damage to your opponent. When this card leaves the field, banish the equipped monster.','Unlimited','spel'),('63533837','cyberse_quantum_dragon','Cyberse Quantum Dragon','Monster','Cyberse / Synchro / Effect','1 Tuner + 1+ non-Tuner monsters\nWhile you control a Link Monster, monsters your opponent controls cannot target monsters you control for attacks, except this one, also your opponent cannot target monsters you control with card effects, except this one. Once per turn, at the start of the Damage Step, if this card battles an opponent\'s monster: You can return that opponent\'s monster to the hand, also, this card can make a second attack in a row.','Unlimited','synchro'),('83764718','monster_reborn','Monster Reborn','Spell','Normal','Target 1 monster in either GY; Special Summon it.','Limited','spell'),('84766279','daigusto_gulldos','Daigusto Gulldos','Monster','Psychic / Synchro / Effect','1 Tuner + 1 or more non-Tuner \"Gusto\" monsters\nOnce per turn: You can shuffle 2 \"Gusto\" monsters from your Graveyard into the Main Deck to target 1 face-up monster your opponent controls; destroy that target.','Unlimited','synchro'),('85802526','cure_mermaid','Cure Mermaid','Monster','Fish / Effect','As long as this card remains face-up on your side of the field, increase your Life Points by 800 points during each of your Standby Phases.','Unlimited','effect'),('86164529','aqua_dragon','Aqua Dragon','Monster','Sea Serpent / Fusion','\"Fairy Dragon\" + \"Amazon of the Seas\" + \"Zone Eater\"','Unlimited','fusion'),('86221741','raidraptor_ultimate_falcon','Raidraptor Ultimate Falcon','Monster','Winged Beast / Xyz / Effect','3 Level 10 Winged Beast-Type monsters\nUnaffected by other cards\' effects. You can detach 1 Xyz Material from this card; for the rest of this turn, all monsters your opponent controls will lose 1000 ATK, also your opponent\'s cards and effects cannot be activated. If this card has a \"Raidraptor\" monster as Xyz Material, it gains this effect.\nOnce per turn, during the End Phase: You can make all monsters your opponent controls lose 1000 ATK. If your opponent controls no face-up monsters, inflict 1000 damage to your opponent.','Unlimited','xyz'),('89631139','blue_eyes_white_dragon','Blue-Eyes White Dragon','Monster','Dragon / Normal','This legendary dragon is a powerful engine of destruction. Virtually invincible, very few have faced this awesome creature and lived to tell the tale.','Unlimited','normal'),('89943723','elemental_hero_neos','Elemental HERO Neos','Monster','Warrior / Normal','A new Elemental HERO has arrived from Neo-Space! When he initiates a Contact Fusion with a Neo-Spacian his unknown powers are unleashed.','Unlimited','normal'),('97077563','call_of_the_haunted','Call Of The Haunted','Trap','Continuous','Activate this card by targeting 1 monster in your GY; Special Summon that target in Attack Position. When this card leaves the field, destroy that monster. When that monster is destroyed, destroy this card.','Unlimited','trap'),('99721536','dokurorider','Dokurorider','Monster','Zombie / Ritual','You can Ritual Summon this card with \"Revival of Dokurorider\".','Unlimited','ritual');
/*!40000 ALTER TABLE `card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cardmonster`
--

DROP TABLE IF EXISTS `cardmonster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cardmonster` (
  `IDCardCode` varchar(8) NOT NULL,
  `Attribute` varchar(10) NOT NULL,
  `Level` varchar(2) NOT NULL,
  `ATK` varchar(4) NOT NULL,
  `DEF` varchar(4) NOT NULL,
  PRIMARY KEY (`IDCardCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cardmonster`
--

LOCK TABLES `cardmonster` WRITE;
/*!40000 ALTER TABLE `cardmonster` DISABLE KEYS */;
INSERT INTO `cardmonster` VALUES ('00000001','DIVINE','10','?','?'),('01546123','LIGHT','10','4000','2800'),('14898066','DARK','4','1900','1200'),('20073910','LIGHT','9','3000','3000'),('21496848','WATER','6','2600','2100'),('23776077','FIRE','6','2500','1800'),('26932788','EARTH','8','2450','2550'),('29669359','FIRE','5','2500','1000'),('30208479','DARK','8','2800','2600'),('31829185','DARK','8','2200','2800'),('33198837','EARTH','5','2200','1700'),('37038993','FIRE','2','800','1400'),('47611119','EARTH','5','2400','1000'),('54620698','EARTH','4','1600','1800'),('54757758','WATER','4','1900','1600'),('58569561','WATER','4','1800','700'),('63533837','DARK','7','2500','2000'),('84766279','WIND','5','2200','800'),('85802526','WATER','4','1500','800'),('86164529','WATER','6','2250','1900'),('86221741','DARK','10','3500','2000'),('89631139','LIGHT','8','3000','2500'),('89943723','LIGHT','7','2500','2000'),('99721536','DARK','6','1900','1850');
/*!40000 ALTER TABLE `cardmonster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cardproduct`
--

DROP TABLE IF EXISTS `cardproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cardproduct` (
  `IDCardCode` varchar(8) NOT NULL,
  `IDProductCode` varchar(8) NOT NULL,
  `CardRarity` varchar(25) NOT NULL,
  `CardIndPrice` varchar(10) NOT NULL,
  PRIMARY KEY (`IDCardCode`,`IDProductCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cardproduct`
--

LOCK TABLES `cardproduct` WRITE;
/*!40000 ALTER TABLE `cardproduct` DISABLE KEYS */;
INSERT INTO `cardproduct` VALUES ('00000001','BP03GOED','SECRET RARE','49.99'),('01546123','BP01BRED','SUPER RARE','10.99'),('05318639','BP03GOED','SUPER RARE','11.99'),('14898066','BP01BRED','RARE','0.99'),('15259703','BP03GOED','RARE','0.99'),('18161786','BP03GOED','RARE','0.99'),('20073910','BP02SIED','SUPER RARE','10.99'),('21496848','BP01BRED','SUPER RARE','11.99'),('23776077','BP02SIED','SECRET RARE','29.99'),('26932788','BP02SIED','RARE','0.99'),('29669359','BP02SIED','ULTRA RARE','16.99'),('30208479','BP01BRED','SECRET RARE','29.99'),('31829185','BP01BRED','ULTRA RARE','16.99'),('33198837','BP01BRED','ULTRA RARE','15.99'),('37038993','BP01BRED','RARE','0.99'),('41420027','BP03GOED','SUPER RARE','10.99'),('44095762','BP03GOED','SECRET RARE','39.99'),('46052429','BP03GOED','RARE','0.99'),('47611119','BP02SIED','SUPER RARE','11.99'),('54620698','BP02SIED','RARE','0.99'),('54757758','BP02SIED','RARE','0.99'),('58569561','BP02SIED','ULTRA RARE','16.99'),('61127349','BP03GOED','RARE','0.99'),('63533837','BP03GOED','SUPER RARE','12.99'),('83764718','BP03GOED','ULTRA RARE','19.99'),('84766279','BP02SIED','SUPER RARE','12.99'),('85802526','BP01BRED','RARE','0.99'),('86164529','BP01BRED','RARE','0.99'),('86221741','BP01BRED','SUPER RARE','12.99'),('89631139','BP02SIED','SECRET RARE','39.99'),('89943723','BP01BRED','SECRET RARE','28.99'),('97077563','BP03GOED','ULTRA RARE','18.99'),('99721536','BP02SIED','RARE','0.99');
/*!40000 ALTER TABLE `cardproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `IDProductCode` varchar(8) NOT NULL,
  `Img` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ReleaseDate` varchar(50) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Description` varchar(250) NOT NULL,
  PRIMARY KEY (`IDProductCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES ('BP01BRED','bronze_edition','Booster Pack: Bronze Edition','January 01, 2021','$79.99','The Bronze Edition set contains 100 new cards:\n8 Secret Rares\n12 Ultra Rares\n15 Super Rares\n25 Rares\n40 Commons\n\n* 30 packs per box'),('BP02SIED','silver_edition','Booster Pack: Silver Edition','February 01, 2021','$89.99','The Silver Edition set contains 70 new cards:\n5 Secret Rares\n8 Ultra Rares\n12 Super Rares\n20 Rares\n25 Commons\n\n* 25 packs per box'),('BP03GOED','gold_edition','Booster Pack: Gold Edition','March 01, 2021','$99.99','The Silver Edition set contains 50 new cards:\n1 Ghost Rare\n1 Secret Rare\n3 Ultra Rares\n10 Super Rares\n15 Rares\n20 Commons\n\n* 20 packs per box');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `IDUser` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(75) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-16 19:51:47
