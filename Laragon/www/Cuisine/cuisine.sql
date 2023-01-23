-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2023 at 08:02 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuisine`
--

-- --------------------------------------------------------

--
-- Table structure for table `recettes`
--

CREATE TABLE `recettes` (
  `id` int NOT NULL,
  `image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ingredients` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `etapes` varchar(1407) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recettes`
--

INSERT INTO `recettes` (`id`, `image`, `nom`, `ingredients`, `etapes`) VALUES
(13, 'bento.png', 'Bentô de Satsuki', '-120 g de riz,\r\n-2 éperlans shishamo surgelés,\r\n-Huile d’olive,\r\n-100 g de filet de poisson type dorade,\r\n-0,5 ml de saké,\r\n-2 cuillères à soupe de sucre,\r\n-1 cuillère à café de sel,\r\n-2 gouttes de colorant rouge,\r\n-2 jujubes secs,\r\n-30 fèves edamame,\r\n', '-Dans une casserole d’eau, faites cuire le riz.,\r\n\r\n-Pendant ce temps, préparez les shishamo en les décongelant, puis en les mettant à poêler à feu moyen., \r\n\r\n-Ajoutez de l’huile et faites cuire pendant 5 min.,\r\n\r\n-Retournez le poisson et faites cuire à nouveau pendant 5 min.,\r\n\r\n-Placez-le ensuite sur un papier essuie-tout pour éponger l’huile.,\r\n\r\n-Dans une autre casserole, faites bouillir de l’eau., \r\n\r\n-Plongez-y la dorade. Lorsqu’elle devient un peu friable, égouttez-la et mettez-la dans une assiette.,\r\n( Si le filet de dorade est congelé, décongelez-le simplement.),\r\n\r\n-Dans une poêle à feu moyen, disposez la dorade, puis versez le saké, le sucre et le sel., \r\n\r\n-Émiettez bien cette dernière., \r\n\r\n-Remuez jusqu’à ce que tout le liquide se soit évaporé.,\r\n\r\n-Ajoutez le colorant rouge et un peu d’eau pour obtenir la nuance désirée, et passez le tout à feu doux.,\r\n\r\n-Mélangez.,\r\n\r\n-Dans les bentô, versez le riz cuit au fond, puis mettez un shishamo et un jujube par bentô, et étalez les miettes de dorade dans un petit rectangle.,\r\n\r\n-Placez les fèves edamame dans le rectangle opposé.,'),
(14, 'oeuf.png', 'œufs au bacon de Calcifer', '-2 tranches de bacon,\r\n-4 œufs,\r\n-2/3 Oignon,\r\n-2/3 Pain au levain,\r\n-2/3 cuillère à café de thym,\r\n-2/3 cuillère à café de sel,\r\n-2/3 cuillère à soupe de vinaigre de vin rouge,', '-Faites chauffer la poêle à feu doux et faites frire le bacon jusqu\'à ce qu\'il soit bien doré.,\r\n\r\n-Déplacez le bacon dans un coin de la poêle et faites frire 6 œufs à feu doux également.,\r\n\r\n-Servez lorsque les œufs sont cuits à votre goût.,\r\n\r\nÉtapes facultatives :,\r\n\r\n-Hachez et émincez l\'oignon.,\r\n\r\n-Faites chauffer la poêle à feu moyen et faites frire les oignons émincés jusqu\'à ce qu\'ils soient translucides. Ajoutez quelques tranches de tomates.,\r\n\r\n-Assaisonnez avec le thym, le sel et le vinaigre de vin rouge et faites frire pendant 1 minute.,\r\n\r\n-Servez avec les œufs, le bacon, les tomates et le pain au levain.,'),
(15, 'ramen.png', 'Ramen au jambon de Ponyo', '-1 sachet de nouilles instantanées de bonne qualité (ramen déshydratées avec les sachets qui contiennent le bouillon en poudre, et l\'huile de sésame),\r\n-1 tranche de jambon bien épaisse,\r\n-1 œuf dur coupé en deux,\r\n-1 morceau de poireau émincé ou de l\'oignon de printemps,', '-Couper la tranche de jambon en deux, ainsi que l\'œuf dur.,\r\n\r\n-Faire bouillir une petite casserole d\'eau (quantités d\'eau indiquée sur le sachet.),\r\n\r\n-Ajouter les nouilles ainsi que les sachets de bouillon instantané et d\'huile de sésame.,\r\n\r\n-Cuire jusqu\'à ce que les nouilles soient al dente.,\r\n\r\n-Verser dans le bol et décorer avec la garniture:,\r\n-La moitié d\'œuf dur, l\'oignon de printemps émincé et la tranche de jambon.,'),
(16, 'tourte.png', 'Tourte aux harengs de Kiki', '- 1 kabocha ou 1 potimarron\r\n- 2 oignons\r\n- sauce béchamel \r\n- 3 ou 4 harengs ou des sardines, maquereau, morue en fait tous poisson blancs \r\n- pâte à tarte pour le fond et le dessus \r\n- quelques olives noires \r\n- un jaune d\'œuf  \r\n-1/4 de L de lait \r\n- 20 gr de beurre \r\n- 2 cuillères à soupe de farine \r\n- sel et poivre', 'Préchauffez le four à 200°C.\r\n\r\n-Lavez et retirez les graines du potimarron.\r\n\r\n-Coupez le en morceaux moyens. \r\n\r\n-Cuisez le à la  cocotte minutes 12 minutes après le début du chuchotement de la soupape.\r\n\r\n-Pendant le temps de cuisson, épluchez et coupez les oignons en petits morceaux.\r\n\r\n-Faites les revenir avec un peu d\'huile d\'olives jusqu\'à ce qu\'ils deviennent transparents.\r\n-Une fois les ingrédients cuit mixer les ensembles avec un peu de beurre et un peu de crème fraiche.\r\n\r\n-Dans un grand récipient faites fondre le beurre au micro-ondes pendant 1 min.\r\n-Ajoutez la farine au beurre en remuant bien.\r\n\r\n-Portez à ébullition le lait, laissez le bouillir quelques instants.\r\n-Versez le lait sur le mélange beurre/farine.\r\n\r\n-Remuez bien. \r\n\r\n-Assaisonnez. \r\n\r\n-Remettez le tout au micro-ondes pendant 1 min.\r\n\r\n-Dans un plat à gratin mettez la pâte pour faire le font de la tourte. \r\n\r\n-Étalez la purée et ajoutez les poissons.\r\n\r\n-Recouvrez le tout de sauce béchamel. \r\n\r\n-Refermez le tout de pâte à tarte. Elle doit être un peu plus grand que le plat car elle risque de rétrécir.\r\n-Faites des bandes de pâtes et un poisson avec la pâte à tarte. \r\n\r\n-Pour finir la décoration ajoutez les olives noires. \r\n\r\n-Ajoutez du jaune d’œuf au pinceau sur la pâte.\r\n\r\nFaites cuire 20min à 200°C.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
