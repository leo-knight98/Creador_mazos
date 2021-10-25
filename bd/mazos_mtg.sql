-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 25, 2021 at 10:57 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mazos_mtg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartas`
--

CREATE TABLE `cartas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `expansion` varchar(255) NOT NULL,
  `rareza` enum('comun','poco comun','rara','mitica') NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `poder` varchar(11) DEFAULT NULL,
  `dureza` varchar(11) DEFAULT NULL,
  `lealtad` varchar(11) DEFAULT NULL,
  `coste` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cartas`
--

INSERT INTO `cartas` (`id`, `nombre`, `color`, `expansion`, `rareza`, `tipo`, `texto`, `poder`, `dureza`, `lealtad`, `coste`, `img`, `img2`) VALUES
(1, 'Carruaje de Esika', 'Verde', 'Kaldheim', 'rara', 'Artefacto legendario - vehículo', 'Cuando el Carruaje de Esika entre al campo de batalla, crea dos fichas de criatura Felino verdes 2/2.<br>\r\nSiempre que el Carruaje de Esika ataque, crea una ficha que es una copia de la ficha objetivo que controlas.<br>\r\nTripular 4.', '4', '4', NULL, '{3} {G}', 'https://static.cardmarket.com/img/8630de72fa3bbf15482ad4609c07ef0c/items/1/KHM/530367.jpg', NULL),
(2, 'Epifania de Alrund', 'Azul', 'Kaldheim', 'rara', 'Conjuro', 'Crea dos fichas de criatura Ave azules 1/1 con la habilidad de volar.<br>Juega un turno adicional después de este. Exilia la Epifanía de Alrund.<br>\r\nProfetizar {4} {U} {U}', NULL, NULL, NULL, '{5} {U} {U}', 'https://static.cardmarket.com/img/a498ca0b7a3be831b6d20f70b271f902/items/1/KHM/529482.jpg', NULL),
(3, 'Lolth, la reina araña', 'Negro', 'Adventures in the Forgotten Realms', 'mitica', 'Planeswalker legendario - Lolth', 'Siempre que una criatura que controlas muera, pon un contador de lealtad sobre Lolth, la Reina Araña.<br>\r\n0: Robas una carta y pierdes 1 vida.<br>\r\n−3: Crea dos ficha de criatura Araña negras 2/1 con las habilidades de amenaza y alcance.<br>\r\n−8: Obtienes un emblema con \"Siempre que un oponente reciba daño de combate de una o más criaturas que controlas, si ese jugador perdió menos de 8 vidas este turno, pierde una cantidad de vidas igual a la diferencia\".', NULL, NULL, '4', '{3} {B} {B}', 'https://static.cardmarket.com/img/7237ea2baae38d0afc980bd78de91ce6/items/1/PAFR/574610.jpg', NULL),
(4, 'Aspirante a luminarca', 'blanco', 'Zendikar Rising', 'rara', 'Criatura - clérigo humano', 'Al comienzo del combate en tu turno, pon un contador +1/+1 sobre la criatura objetivo que controlas.', '1', '1', NULL, '{1} {W}', 'https://static.cardmarket.com/img/bf066a74362aecbc70d68aad537d177e/items/1/ZNR/496083.jpg', NULL),
(5, 'Wrenn y Siete', 'Verde', 'Innistrad: cacería de medianoche', 'mitica', 'Planeswalker legendario - Wrenn', '+1: Muestra las cuatro primeras cartas de tu biblioteca. Pon todas las cartas de tierra mostradas de esta manera en tu mano y el resto en tu cementerio.<br>\r\n0: Pon en el campo de batalla giradas cualquier cantidad de cartas de tierra de tu mano.<br>\r\n−3: Crea una ficha de criatura Pueblo-arbóreo verde con la habilidad de alcance y \"Tanto la fuerza como la resistencia de esta criatura son iguales a la cantidad de tierras que controlas\".<br>\r\n−8: Regresa todas las cartas de permanente de tu cementerio a tu mano. Obtienes un emblema con \"Tu mano no tiene tamaño máximo\".', NULL, NULL, '5', '{3} {G} {G}', 'https://static.cardmarket.com/img/f38f308519857313df75184832a50775/items/1/MID/573812.jpg', NULL),
(6, 'Murciélojo', 'negro', 'Strixhaven: academia de magos', 'poco comun', 'Criatura - murciélago ojo', 'Vuela.<br>\r\nCuando el Murciélojo muera, aprende. (Puedes mostrar una carta de Lección de la cual eres propietario de fuera del juego y ponerla en tu mano o descartar una carta para robar una carta.)', '1', '1', NULL, '{B}', 'https://static.cardmarket.com/img/41a38980c7b79bc828efa47b27ecda8c/items/1/STX/557604.jpg', NULL),
(7, 'Dragón del puente dorado', 'rojo', 'Kaldheim', 'rara', 'Criatura - Dragón', 'Vuela, prisa.<br>\r\nSiempre que el Dragón del puente dorado ataque o sea objetivo de un hechizo, crea una ficha de Tesoro.<br>\r\nLos Tesoros que controlas tienen \" {T} , sacrificar este artefacto: Agrega dos manás de un color cualquiera\".', '4', '4', NULL, '{3} {R} {R}', 'https://static.cardmarket.com/img/a498ca0b7a3be831b6d20f70b271f902/items/1/KHM/529527.jpg', NULL),
(8, 'Vieja Roehuesos', 'Verde', 'Adventures in the Forgotten Realms', 'mitica', 'Criatura legendaria - Dragón', 'Vuela.<br>\r\nSiempre que una criatura que controlas haga daño de combate a un jugador, crea esa misma cantidad de fichas de Tesoro.', '7', '7', NULL, '{5} {G} {G}', 'https://static.cardmarket.com/img/fa88965d7f04265bd5a0fc9fc9671442/items/1/AFR/571440.jpg', NULL),
(9, 'Infierno de los Montes Estrella', 'Rojo', 'Adventures in the Forgotten Realms', 'mitica', 'Criatura legendaria - Dragón', 'Este hechizo no puede ser contrarrestado.<br>\r\nVuela, prisa.<br>\r\n{R} El Infierno de los Montes Estrella obtiene +1/+0 hasta el final del turno. Cuando su fuerza se convierta en 20 de esta manera, hace 20 puntos de daño a cualquier objetivo.', '6', '6', NULL, '{4} {R} {R}', 'https://static.cardmarket.com/img/c1c79c7caf339754c45b8c794219475f/items/1/AFR/571857.jpg', NULL),
(10, 'Orbe de los dragones', 'Rojo', 'Adventures in the Forgotten Realms', 'rara', 'Artefacto', '{1}, {T} Agrega dos manás de cualquier combinación de colores. Usa este maná solo para lanzar hechizos de Dragón o activar habilidades de Dragones.\r\n{R}, {T}, sacrificar el Orbe de los dragones: Mira las siete primeras cartas de tu biblioteca. Puedes mostrar una carta de Dragón de entre ellas y ponerla en tu mano. Pon el resto en el fondo de tu biblioteca en un orden aleatorio.', NULL, NULL, NULL, '{1} {R}', 'https://static.cardmarket.com/img/b4f0d9c5c20cbe4d9ba5d1dbcf56650d/items/1/AFR/571081.jpg', NULL),
(11, 'Amarrado por platalunar', 'Blanco', 'Sombras sobre Innistrad', 'poco comun', 'Encantamiento - Aura', 'Encantar criatura.\r\nLa criatura encantada no puede atacar, bloquear ni transformarse.\r\nSacrificar otro permanente: Anexa Amarrado por platalunar a la criatura objetivo. Activa esta habilidad solo cuando puedas lanzar un conjuro y solo una vez por turno.', NULL, NULL, NULL, '{2} {W}', 'https://static.cardmarket.com/img/fd517c4f60f6861a2a676668b161cb0c/items/1/SOI/289131.jpg', NULL),
(12, 'Parada', 'Azul', 'Odisea', 'poco comun', 'Encantamiento', 'Cuando un jugador juegue un hechizo, sacrifica la Parada. Si lo haces, cada uno de los oponentes de ese jugador roba tres cartas.', NULL, NULL, NULL, '{1} {U}', 'https://static.cardmarket.com/img/c4b1d4ccafc9be4ce1e08239ab25446e/items/1/ODY/2514.jpg', NULL),
(13, 'Crecimiento antinatural', 'Verde', 'Innistrad: cacería de medianoche', 'rara', 'Encantamiento', 'Al comienzo de cada combate, duplica la fuerza y la resistencia de cada criatura que controlas hasta el final del turno.', NULL, NULL, NULL, '{1} {G} {G} {G} {G}', 'https://static.cardmarket.com/img/168179708105ed3565457b82e53a68be/items/1/MID/574795.jpg', NULL),
(14, 'Jadar, llamamuertos de Nephalia', 'Negro', 'Innistrad: cacería de medianoche', 'rara', 'Criatura legendaria - Mago humano', 'Al comienzo de tu paso final, si no controlas ninguna criatura con la habilidad de descomposición, crea una ficha de criatura Zombie negra 2/2 con la habilidad de descomposición.', '1', '1', NULL, '{1} {B}', 'https://static.cardmarket.com/img/f79974b348e22468fc26f492d7922249/items/1/MID/574751.jpg', NULL),
(15, 'Ashiok, inspiración de pesadillas', 'Azul, negro', 'Theros Beyond Death', 'mitica', 'Planeswalker legendario - Ashiok', '+1: Crea una ficha de criatura Pesadilla azul y negra 2/3 con \"Siempre que esta criatura ataque o bloquee, cada oponente exilia las dos primeras cartas de su biblioteca\".<br>\r\n−3: Regresa el permanente objetivo que no sea tierra a la mano de su propietario. Luego, ese jugador exilia una carta de su mano.<br>\r\n−7: Puedes lanzar hasta tres cartas del exilio boca arriba de las que tus oponentes sean propietarios sin pagar sus costes de maná.', NULL, NULL, '5', '{3} {U} {B}', 'https://static.cardmarket.com/img/27fa453b0cf6e7f6a718fe8020030e81/items/1/THB/429006.jpg', NULL),
(16, 'Chandra, acólita de la llama', 'Rojo', 'M20', 'mitica', 'Planeswalker legendario - Chandra', '0: Pon un contador de lealtad sobre cada planeswalker rojo que controlas.<br>\r\n0: Crea dos fichas de criatura Elemental rojas 1/1. Ganan la habilidad de prisa. Sacrifícalas al comienzo del próximo paso final.<br>\r\n−2: Puedes lanzar la carta de instantáneo o de conjuro objetivo con coste de maná convertido de 3 o menos desde tu cementerio. Si esa carta fuera a ir a tu cementerio este turno, en vez de eso, exíliala.', NULL, NULL, '4', '{1} {R} {R}', 'https://static.cardmarket.com/img/6096702d004d263bb0b1700d27de6049/items/1/M20/377184.jpg', NULL),
(17, 'Elspeth Tirel', 'Blanco', 'Cicatrices de Mirrodin', 'mitica', 'Planeswalker - Elspeth', '+2: Ganas 1 vida por cada criatura que controlas.<br>\r\n-2: Pon en el campo de batalla tres fichas de criatura Soldado blancas 1/1.<br>\r\n-5: Destruye todos los otros permanentes excepto\r\ntierras y fichas.<br>', NULL, NULL, '4', '{3} {W} {W}', 'https://static.cardmarket.com/img/ff154768bed63315963735358679db78/items/1/SOM/242518.jpg', NULL),
(18, 'Clase explorador', 'Verde', 'Adventures in the forgotten realms', 'rara', 'Encantamiento - clase', '(Gana un nivel como un conjuro para agregar su habilidad.)<br>\r\nCuando la Clase: explorador entre al campo de batalla, crea una ficha de criatura Lobo verde 2/2.<br>\r\n{1} {G}: Nivel 2<br>\r\n//Level_2//\r\nSiempre que ataques, pon un contador +1/+1 sobre la criatura atacante objetivo.<br>\r\n{3} {G}:Nivel 3<br>\r\n//Level_3//\r\nPuedes mirar la primera carta de tu biblioteca en cualquier momento.<br>\r\nPuedes lanzar hechizos de criatura desde la parte superior de tu biblioteca.', NULL, NULL, NULL, '{1} {G}', 'https://static.cardmarket.com/img/ed6156aed3313fc3339578425d0749f1/items/1/AFR/571520.jpg', NULL),
(19, 'Clase brujo', 'Negro', 'Adventures in the Forgotten Realms', 'poco comun', 'Encantamiento - Clase', 'Gana un nivel como un conjuro para agregar su habilidad.)<br>\r\nAl comienzo de tu paso final, si una criatura murió este turno, cada oponente pierde 1 vida.<br>\r\n{1} {B} : Nivel 2<br>\r\n//Level_2//\r\nCuando esta Clase alcance el nivel 2, mira las tres primeras cartas de tu biblioteca. Pon una de ellas en tu mano y el resto en tu cementerio.<br>\r\n{6} {B} : Nivel 3<br>\r\n//Level_3//\r\nAl comienzo de tu paso final, cada oponente pierde una cantidad de vidas igual a la cantidad de vidas que perdió este turno. (El daño causa pérdida de vidas.)', NULL, NULL, NULL, '{B}', 'https://static.cardmarket.com/img/4e49a97172425cc07bc72db28e398baf/items/1/AFR/571499.jpg', NULL),
(20, 'Magda, la Forajida Descarada', 'Rojo', 'Kaldheim', 'rara', 'Criatura legendaria - Berserker enano', 'Los otros Enanos que controlas obtienen +1/+0.\r\nSiempre que un Enano que controlas se gire, crea una ficha de Tesoro.\r\nSacrificar cinco Tesoros: Busca en tu biblioteca una carta de artefacto o de Dragón, pon esa carta en el campo de batalla y luego baraja tu biblioteca.', '2', '1', NULL, '{1} {R}', 'https://static.cardmarket.com/img/9481b33ebb36f994ea71874f70154b6a/items/1/KHM/527495.jpg', NULL),
(21, 'Centinela de los jasperas', 'Verde', 'Kaldheim', 'comun', 'Criatura - pícaro elfo', 'Alcance.\r\n{T} girar una criatura enderezada que controlas: Agrega un maná de cualquier color.', '1', '2', NULL, '{G}', 'https://static.cardmarket.com/img/fad22b0d2322fa773f9f562e9dbda67f/items/1/KHM/530997.jpg', NULL),
(22, 'Tifón de tiburones', 'Azul', 'Ikoria', 'rara', 'Encantamiento', 'Siempre que lances un hechizo que no sea de criatura, crea una ficha de criatura Tiburón azul X/X con la habilidad de volar, donde X es el coste de maná convertido de ese hechizo.<br>\r\nCiclo {X} {1} {U} . ({X} {1} {U} , descartar esta carta: Roba una carta.)<br>\r\nCuando actives la habilidad de ciclo del Tifón de tiburones, crea una ficha de criatura Tiburón azul X/X con la habilidad de volar.', NULL, NULL, NULL, '{5} {U}', 'https://static.cardmarket.com/img/4dd4b2b7e528dcdda600cd6207161033/items/1/IKO/452003.jpg', NULL),
(23, 'Vorinclex, incursor monstruoso', 'Verde', 'Kaldheim', 'mitica', 'Criatura legendaria - depredador pirexiano', 'Arrolla, prisa.<br>\r\nSi fueras a poner uno o más contadores sobre un permanente o jugador, en vez de eso, pon el doble de esa cantidad de cada uno de esos tipos de contadores sobre ese permanente o jugador.<br>\r\nSi un oponente fuera a poner uno o más contadores sobre un permanente o jugador, en vez de eso, pone la mitad de esa cantidad de cada uno de esos tipos de contadores sobre ese permanente o jugador, redondeando hacia abajo.', '6', '6', NULL, '{4} {G} {G}', 'https://static.cardmarket.com/img/a498ca0b7a3be831b6d20f70b271f902/items/1/KHM/529502.jpg', NULL),
(29, 'Llanuras', 'Blanca', 'Innistrad: cacería de medianoche', 'comun', 'Tierra básica', '{T} añade {W}', NULL, NULL, NULL, '0', 'https://static.cardmarket.com/img/2e9774f58b521bf66c3f68f53b0c5aee/items/1/MID/573814.jpg', NULL),
(30, 'Pantano', 'Negro', 'Innistrad: cacería de medianoche', 'comun', 'Tierra básica', '{T} añade {B}', NULL, NULL, NULL, '0', 'https://static.cardmarket.com/img/a32bd320a904c0063e2b92cccb997b0f/items/1/MID/573818.jpg', NULL),
(31, 'Bosque', 'Verde', 'Innistrad: cacería de medianoche', 'comun', 'Tierra básica', '{T} añade {G}', NULL, NULL, NULL, '0', 'https://static.cardmarket.com/img/8618e6850b6f2c2e014d6ba1652b578d/items/1/MID/573822.jpg', NULL),
(32, 'Isla', 'Azul', 'Innistrad: cacería de medianoche', 'comun', 'Tierra básica', '{T} añade {U}', NULL, NULL, NULL, '0', 'https://static.cardmarket.com/img/a6e907eef8df0e547d04493e6f2aa2ba/items/1/MID/573816.jpg', NULL),
(33, 'Montaña', 'Rojo', 'Innistrad: cacería de medianoche', 'comun', 'Tierra básica', '{T} añade {R}', NULL, NULL, NULL, '0', 'https://static.cardmarket.com/img/f3e8ffdfea0c496986c1491b6aa8116f/items/1/MID/573820.jpg', NULL),
(34, 'Elspeth vence a la muerte', 'Blanco', 'Theros Beyond Death', 'rara', 'Encantamiento - saga', '(En cuanto esta Saga entre y después de tu paso de robar, agrega un contador de sabiduría. Sacrifícala después de III.)<br>\r\nI — Exilia el permanente objetivo con coste de maná convertido de 3 o más que controla un oponente.<br>\r\nII — A tus oponentes les cuesta {2} más lanzar hechizos que no sean de criatura hasta tu próximo turno.<br>\r\nIII — Regresa la carta de criatura o planeswalker objetivo de tu cementerio al campo de batalla. Pon un contador +1/+1 o un contador de lealtad sobre esa carta.', NULL, NULL, NULL, '{3} {W} {W}', 'https://static.cardmarket.com/img/b9dea2af188aafcc110b5b2cb8535709/items/1/THB/431709.jpg', NULL),
(35, 'Pesadilla de Elspeth', 'Negro', 'Theros Beyond Death', 'poco comun', 'Encantamiento - saga', '(En cuanto esta Saga entre y después de tu paso de robar, agrega un contador de sabiduría. Sacrifícala después de III.)<br>\r\nI — Destruye la criatura objetivo con fuerza de 2 o menos que controla un oponente.<br>\r\nII — El oponente objetivo muestra su mano. Tú eliges de ahí una carta que no sea tierra ni criatura. Ese jugador descarta esa carta.<br>\r\nIII — Exilia el cementerio del oponente objetivo.', NULL, NULL, NULL, '{2} {B}', 'https://static.cardmarket.com/img/b9dea2af188aafcc110b5b2cb8535709/items/1/THB/431704.jpg', NULL),
(36, 'Atacar el festival', 'Verde', 'Innistrad: cacería de medianoche', 'rara', 'Conjuro', 'Mira las cinco primeras cartas de tu biblioteca. Puedes poner en el campo de batalla hasta dos cartas de permanente con valor de maná de 5 o menos de entre ellas. Pon el resto en el fondo de tu biblioteca en un orden aleatorio.<br>\r\nRetrospectiva {7} {G} {G} {G}', NULL, NULL, NULL, '{3} {G} {G} {G}', 'https://static.cardmarket.com/img/ee55178b49efa5bc7e0199b12c32cf25/items/1/MID/575079.jpg', NULL),
(37, 'Festival de devastación', 'Negro, rojo', 'Vuelta a Ravnica', 'rara', 'Encantamiento', 'Los jugadores no pueden ganar vidas.\r\nAl comienzo del mantenimiento de cada jugador, ese jugador pierde la mitad de sus vidas, redondeando hacia arriba.', NULL, NULL, NULL, '{4} {B} {R}', 'https://static.cardmarket.com/img/a8ab371b085b4b235dee7b888497a9fe/items/1/RTR/258290.jpg', NULL),
(38, 'Zariel, archiduquesa de Averno', 'Rojo', 'Adventures in the Forgotten Realms', 'mitica', 'Planeswalker legendario - Zariel', '+1: Las criaturas que controlas obtienen +1/+0 y ganan la habilidad de prisa hasta el final del turno.<br>\r\n0: Crea una ficha de criatura Diablo roja 1/1 con \"Cuando esta criatura muera, hace 1 punto de daño a cualquier objetivo\".<br>\r\n−6: Obtienes un emblema con \"Al final de la primera fase de combate en tu turno, endereza la criatura objetivo que controlas. Después de esta fase, hay una fase de combate adicional\".', NULL, NULL, '4', '{2} {R} {R}', 'https://static.cardmarket.com/img/07047bfb9cbccfdc9e62a155b4a33e3f/items/1/AFR/571109.jpg', NULL),
(39, 'Profesora Onyx', 'Negro', 'Strixhaven: academia de magos', 'mitica', 'Planeswalker legendario - Liliana', 'Hechicería — Siempre que lances o copies un hechizo de instantáneo o de conjuro, cada oponente pierde 2 vidas y tú ganas 2 vidas.<br>\r\n+1: Pierdes 1 vida. Mira las tres primeras cartas de tu biblioteca. Pon una de ellas en tu mano y el resto en tu cementerio.<br>\r\n−3: Cada oponente sacrifica una criatura con la mayor fuerza entre las criaturas que controla ese jugador.<br>\r\n−8: Cada oponente puede descartar una carta. Si no lo hace, pierde 3 vidas. Repite este proceso seis veces más.', NULL, NULL, '5', '{4} {B} {B}', 'https://static.cardmarket.com/img/9d3125187541fb6c4189862c2c380344/items/1/STX/554118.jpg', NULL),
(40, 'Regente de Puerta del Oeste', 'Negro', 'Adventures in the Forgotten Realms', 'rara', 'Criatura - vampiro', 'Vuela.<br>\r\nRebatir—Descartar una carta.<br>\r\nSiempre que el Regente de Puerta del Oeste haga daño de combate a un jugador, pon esa misma cantidad de contadores +1/+1 sobre él.', '4', '4', NULL, '{3} {B} {B}', 'https://static.cardmarket.com/img/5091d88297a7b2bff1fdae9d615e3492/items/1/AFR/571853.jpg', NULL),
(41, 'Iteración galvánica', 'Azul, rojo', 'Innistrad: cacería de medianoche', 'rara', 'Instantáneo', 'Cuando lances tu próximo hechizo de instantáneo o de conjuro este turno, copia ese hechizo. Puedes elegir nuevos objetivos para la copia.<br>\r\nRetrospectiva {1} {U} {R}', NULL, NULL, NULL, '{U} {R}', 'https://static.cardmarket.com/img/078a83fd2201ded672aeffacc8f73b23/items/1/MID/574698.jpg', NULL),
(42, 'Liliana del Velo', 'Negro', 'Innistrad', 'mitica', 'Planeswalker - Liliana', '+1: Cada jugador descarta una carta.<br>\r\n-2: El jugador objetivo sacrifica una criatura.<br>\r\n-6: Separa todos los permanentes que controla el jugador objetivo en dos montones. Ese jugador sacrifica todos los permanentes en un montón de su elección.', NULL, NULL, '3', '{1} {B} {B}', 'https://static.cardmarket.com/img/a38d78fbb73dc3b9f753970fd6749445/items/1/ISD/250442.jpg', NULL),
(43, 'Liliana de los Reinos Oscuros', 'Negro', 'M13', 'mitica', 'Planeswalker - Liliana', '+1: Busca en tu biblioteca una carta de pantano, muéstrala y ponla en tu mano. Luego baraja tu biblioteca.<br> -3: La criatura objetivo obtiene +X/+X o -X/-X hasta el final del turno, donde X es el número de pantanos que controlas.<br> -6: Obtienes un emblema con \"Los pantanos que controlas tienen \' {T} Agrega {B} {B} {B} {B} a tu reserva de maná\'\".', NULL, NULL, '3', '{2} {B} {B}', 'https://static.cardmarket.com/img/3f1e8c0280ccada3afa4c8b316c2d64e/items/1/M13/256665.jpg', NULL),
(44, 'Ashiok, Fabricasueños', 'Azul, negro', 'Guerra de la Chispa', 'poco comun', 'Planeswalker legendario - Ashiok', 'Los hechizos y habilidades que controlan tus oponentes no pueden hacer que su controlador busque en su biblioteca.<br>\r\n−1: El jugador objetivo pone las cuatro primeras cartas de su biblioteca en su cementerio. Luego, exilia el cementerio de cada oponente.', NULL, NULL, '5', '{1} {B} / {U} {B} / {U}', 'https://static.cardmarket.com/img/28b4005b9252201f4c6cdcaec4777565/items/1/WAR/372236.jpg', NULL),
(45, 'Ashiok, Urdidor de pesadillas', 'Azul, negro', 'Theros', 'mitica', 'Planeswalker - Ashiok', '+2: Exilia las tres primeras cartas de la biblioteca del oponente objetivo.<br>\r\n-X: Pon en el campo de batalla bajo tu control una carta de criatura con un coste de maná convertido de X exiliada con Ashiok, urdidor de pesadillas. Esa criatura es una Pesadilla además de sus otros tipos.<br>\r\n-10: Exilia todas las cartas de las manos y los cementerios de todos los oponentes.', NULL, NULL, '3', '{1} {U} {B}', 'https://static.cardmarket.com/img/2ab7ca5c761377bedfc21b6e3dc8f3f7/items/1/THS/264082.jpg', NULL),
(46, 'Huevo ardiente // Dragón de Ashmouth', 'Rojo', 'Innistrad: cacería de medianoche', 'rara', 'Criatura - Huevo de dragón // Criatura - Dragón', 'Defensor.<br>\r\nSiempre que lances un conjuro o un instantáneo, pon un número de contadores de ascua en el Huevo Ardiente igual a la cantidad de maná gastada para lanzar este hechizo. Entonces, si el Huevo Ardiente tiene siete o más contadores de ascua en él, remuévelos y transfórmalo.\r\n\r\n//\r\n\r\nVuela.\r\nSiempre que lances un conjuro o un instantáneo, el Dragón de Ashmouth hace 2 de daño a cualquier objetivo.', '0 // 4', '4 // 4', NULL, '{1} {R}', 'https://static.cardmarket.com/img/aba0a934d136cb49bb950fb073103423/items/1/MID/575056.jpg', 'https://static.cardmarket.com/img/9d6a423376256b8c6ac22c6d80bced1c/items/1/MID/575056_back.jpg'),
(47, 'Senda de Cumbrerriscos // Senda de Cumbremadera', 'Rojo // Verde', 'Zendikar Rising', 'rara', 'Tierra', '{T} añade {R} \r\n\r\n// \r\n\r\n {T} añade {G} \r\n\r\n\r\n\r\n', NULL, NULL, NULL, '0 // 0', 'https://static.cardmarket.com/img/cfa80703205d5b319e25d934ee0829e8/items/1/ZNR/494769.jpg', 'https://static.cardmarket.com/img/cfa80703205d5b319e25d934ee0829e8/items/1/ZNR/494769_back.jpg'),
(48, 'Reidane, diosa de los dignos // Valkmira, Escudo de la Protectora', 'Blanco', 'Kaldheim', 'rara', 'Criatura legendaria - Dios // Artefacto legendario', 'Vuela, vigilancia\r\nLas tierras nevadas que tus oponentes controlen entran al campo de batalla giradas.\r\nLos hechizos que no sean de criatura que tus oponentes conjuren con un coste de maná de 4 o más cuestan {2} más de lanzar.\r\n\r\n<br>//<br>\r\n\r\nSi un medio que un oponente controle fuera a dañarte a ti o a un permanente que controles, evita 1 de ese daño. Siempre que tú o un permanente que tú controles sea objetivo de un hechizo o habilidad que un oponente controle, contrarresta ese hechizo o habilidad a no ser que su controlador pague {1}.', '2', '3', NULL, '{2} {W} // {3} {W}', 'https://static.cardmarket.com/img/3f3c3e4951dc9a7c40ee9d93ea8955da/items/1/KHM/532112.jpg', 'https://static.cardmarket.com/img/8f87414f133ade94df1327fea8372a4b/items/1/KHM/532112_back.jpg'),
(49, 'Térgrid, diosa del pavor // Farol de Térgrid', 'Negro', 'Kaldheim', 'rara', 'Criatura legendaria - Dios // Artefacto legendario', '\r\nAmenaza\r\nSiempre que un oponente sacrifique un permanente que no sea ficha o descarte una carta de permanente, puedes poner esa carta desde un cementerio al campo de batalla bajo tu control.\r\n\r\n//\r\n\r\n {T} : El jugador objetivo pierde 3 vidas a no ser que sacrifiquen un permanente que no sea tierra o descarten una carta.\r\n{3} {B} : Endereza el Farol de Térgrid', '4', '5', NULL, '{3} {B} {B} // {3} {B}', 'https://static.cardmarket.com/img/98722e4f2515d17915fa9fb42097771d/items/1/KHM/530582.jpg', 'https://static.cardmarket.com/img/98722e4f2515d17915fa9fb42097771d/items/1/KHM/530582_back.jpg'),
(50, 'Arcángel Avacyn // Avacyn, la Purificadora', 'Blanco // Rojo', 'Sombras sobre Innistrad', 'mitica', 'Criatura legendaria - Ángel', 'Destello.\r\nVuela, vigilancia.\r\nCuando el Arcángel Avacyn entre al campo de batalla, las criaturas que controlas ganan la habilidad de indestructible hasta el final del turno.\r\nCuando una criatura que controles que no sea Ángel muera, transforma al Arcángel Avacyn al principio del próximo mantenimiento.\r\n\r\n<br>//<br>\r\n\r\nVuela.\r\nCuando esta criatura se transforme en Avacyn, la Purificadora, hace 3 puntos de daño a cada una de las demás criaturas y a cada oponente.', '4//6', '4//5', NULL, '{3} {W} {W}', 'https://static.cardmarket.com/img/c042414cad14986185403d4e883fb4cc/items/1/SOI/288641.jpg', 'https://static.cardmarket.com/img/c042414cad14986185403d4e883fb4cc/items/1/SOI/288641_back.jpg'),
(51, 'Puesto de molienda', 'Incoloro', 'Quinto amanecer', 'poco comun', 'Artefacto', '{T}, sacrificar un artefacto: El jugador objetivo pone las primeras tres cartas de la parte superior de su biblioteca en su cementerio.\r\nSiempre que un artefacto entre en juego, puedes enderezar el Puesto de molienda.', NULL, NULL, NULL, '{2}', 'https://static.cardmarket.com/img/90e3a6144160a9a316312928ca01c208/items/1/5DN/498.jpg', NULL),
(52, 'Susurrador de la fatalidad', 'Negro', 'Gremios de Rávnica', 'rara', 'Criatura - Pesadilla demonio', 'Vuela, arrolla.\r\nPagar 2 vidas: Escruta 2. (Mira las dos primeras cartas de tu biblioteca, luego pon cualquier cantidad de ellas en tu cementerio y el resto en la parte superior de tu biblioteca en cualquier orden.)', '6', '6', NULL, '{3} {B} {B}', 'https://static.cardmarket.com/img/8ba0f5098ee2a2889f7275d633092294/items/1/GRN/364112.jpg', NULL),
(53, 'Arlinn Kord // Arlinn, Abrazada por la Luna', 'Rojo, verde', 'Sombras sobre Innistrad', 'mitica', 'Planeswalker - Arlinn', '+1: Hasta el final del turno, hasta una criatura objetivo obtiene +2/+2 y gana las habilidades de vigilancia y prisa.<br>\r\n0: Pon en el campo de batalla una ficha de criatura Lobo verde 2/2. Transforma a Arlinn Kord.\r\n\r\n//\r\n\r\n+1: Las criaturas que controlas obtienen +1/+1 y ganan la habilidad de arrollar hasta el final del turno.<br>\r\n-1: Arlinn, Abrazada por la Luna hace 3 puntos de daño a la criatura o jugador objetivo. Transforma a Arlinn, Abrazada por la Luna.<br>\r\n-6: Obtienes un emblema con \"Las criaturas que controlas tienen prisa y \'{T}: Esta criatura hace una cantidad de daño igual a su fuerza a la criatura o jugador objetivo\'\".', NULL, NULL, '3', '{2} {R} {G}', 'https://static.cardmarket.com/img/c042414cad14986185403d4e883fb4cc/items/1/SOI/288952.jpg', 'https://static.cardmarket.com/img/c042414cad14986185403d4e883fb4cc/items/1/SOI/288952_back.jpg'),
(54, 'Arlinn, la Voz de la Manada', 'Verde', 'La guerra de la Chispa', 'poco comun', 'Planeswalker legendario - Arlinn', 'Cada criatura que controlas que sea un Lobo o un Licántropo entra al campo de batalla con un contador +1/+1 adicional sobre ella.\r\n−2: Crea una ficha de criatura Lobo verde 2/2.', NULL, NULL, '7', '{4} {G} {G}', 'https://static.cardmarket.com/img/988b9bdf1d5bce76c81e35cf48a38836/items/1/WAR/371826.jpg', NULL),
(55, 'Clase: bardo', 'Verde, rojo', 'Adventures in the Forgotten Realms', 'rara', 'Encantamiento - clase', '(Gana un nivel como un conjuro para agregar su habilidad.)\r\nLas criaturas legendarias que controlas entran al campo de batalla con un contador +1/+1 adicional sobre ellas.<br>\r\n {R} {G} Nivel 2<br>\r\n//Level_2//\r\nTe cuesta {R} {G} menos lanzar los hechizos legendarios. Este efecto reduce solo la cantidad de maná de color que pagas.<br>\r\n{3} {R} {G} Nivel 3<br>\r\n//Level_3//\r\nSiempre que lances un hechizo legendario, exilia las dos primeras cartas de tu biblioteca. Puedes jugarlas este turno.', NULL, NULL, NULL, '{R} {G}', 'https://static.cardmarket.com/img/6cb187961eb5f83006547ee4ad2fcc86/items/1/AFR/571500.jpg', NULL),
(56, 'Clase: monje', 'Blanco, azul', 'Adventures in the Forgotten Realms', 'rara', 'Encantamiento - clase', '(Gana un nivel como un conjuro para agregar su habilidad.)<br>\r\nTe cuesta {1} menos lanzar el segundo hechizo que lances cada turno.<br>\r\n {W} {U} : Nivel 2<br>\r\n//Level_2//\r\nCuando esta Clase alcance el nivel 2, regresa hasta un permanente objetivo que no sea tierra a la mano de su propietario.<br>\r\n{1} {W} {U} : Nivel 3<br>\r\n//Level_3//\r\nAl comienzo de tu mantenimiento, exilia la primera carta de tu biblioteca. Mientras permanezca exiliada, tiene \"Puedes lanzar esta carta desde el exilio mientras hayas lanzado otro hechizo este turno\".', NULL, NULL, NULL, '{W} {U}', 'https://static.cardmarket.com/img/61ab4c6d30148308b2e31500a9785fe8/items/1/AFR/571539.jpg', NULL),
(57, 'Clase: paladín', 'Blanco', 'Adventures in the Forgotten Realms', 'rara', 'Encantamiento - clase', '(Gana un nivel como un conjuro para agregar su habilidad.)<br>\r\nA tus oponentes les cuesta {1} más lanzar hechizos durante tu turno.<br>\r\n{2} {W} : Nivel 2<br>\r\n//Level_2//\r\nLas criaturas que controlas obtienen +1/+1.<br>\r\n{4} {W} : Nivel 3<br>\r\n//Level_3//\r\nSiempre que ataques, hasta el final del turno, la criatura atacante objetivo obtiene +1/+1 por cada otra criatura atacante y gana la habilidad de dañar dos veces.', NULL, NULL, NULL, '{W}', 'https://static.cardmarket.com/img/9e94641eee13f8dc125dceb969098153/items/1/AFR/571538.jpg', NULL),
(58, 'Clase: guerrero', 'Rojo, blanco', 'Adventures in the Forgotten Realms', 'rara', 'Encantamiento - clase', '(Gana un nivel como un conjuro para agregar su habilidad.)<br>\r\nCuando la Clase: guerrero entre al campo de batalla, busca en tu biblioteca una carta de Equipo, muéstrala, ponla en tu mano y luego baraja.<br>\r\n{1} {R} {W} : Nivel 2<br>\r\n//Level_2//\r\nTe cuesta {2} menos activar las habilidades de equipar.<br>\r\n{3} {R} {W} : Nivel 3<br>\r\n//Level_3//\r\nSiempre que una criatura que controlas ataque, hasta una criatura objetivo la bloquea este combate si puede.', NULL, NULL, NULL, '{R} {W}', 'https://static.cardmarket.com/img/a1cf932fe9865c8538d408d8ad71a2d0/items/1/AFR/571518.jpg', NULL),
(59, 'Centinela de los Jasperas', 'Verde', 'Kaldheim', 'comun', 'Criatura - pícaro elfo', 'Alcance.<br>\r\n {T} , girar una criatura enderezada que controlas: Agrega un maná de cualquier color.', '1', '2', NULL, '{W}', 'https://static.cardmarket.com/img/fad22b0d2322fa773f9f562e9dbda67f/items/1/KHM/530997.jpg', NULL),
(60, 'Considerar', 'Azul', '', 'comun', 'Instantáneo', 'Mira la primera carta de tu biblioteca. Puedes poner esa carta en tu cementerio.<br>\r\nRoba una carta.', NULL, NULL, NULL, '{U}', 'https://static.cardmarket.com/img/a7e0a558d6757455f1cf0eba053fb135/items/1/MID/573807.jpg', NULL),
(61, 'Catapulta de muerte', 'Rojo', 'Transmigración', 'rara', 'Encantamiento', '{R} , Sacrifice a Zombie: Deadapult deals 2 damage to target creature or player.', NULL, NULL, NULL, '{2} {R}', 'https://static.cardmarket.com/img/b7270f8912502cea84c9a5ac0baa44fc/items/1/PLS/3314.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mazos_cartas`
--

CREATE TABLE `mazos_cartas` (
  `id_mazo` int(11) NOT NULL,
  `id_carta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mazos_cartas`
--

INSERT INTO `mazos_cartas` (`id_mazo`, `id_carta`, `cantidad`) VALUES
(3, 7, 1),
(7, 14, 2),
(8, 23, 2),
(8, 53, 2),
(11, 2, 2),
(11, 41, 4),
(12, 49, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mazos_usuario`
--

CREATE TABLE `mazos_usuario` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mazos_usuario`
--

INSERT INTO `mazos_usuario` (`id`, `usuario_id`, `nombre`) VALUES
(3, 2, 'Rakdos vampiros'),
(7, 2, 'Dimir zombies'),
(8, 2, 'Gruul midrange'),
(10, 2, 'Monowhite aggro'),
(11, 3, 'Izzet Epifania'),
(12, 2, 'Monoblack Descartes'),
(13, 2, 'Monogreen stompy');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `pass`, `correo`, `pais`) VALUES
(1, 'Leo', 'Leo_knight', 'leo.manach98@gmail.com', 'ESP'),
(2, 'a', 'a', 'a', 'a'),
(3, 'e', 'e', 'e', 'e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mazos_cartas`
--
ALTER TABLE `mazos_cartas`
  ADD PRIMARY KEY (`id_mazo`,`id_carta`),
  ADD KEY `id_carta` (`id_carta`);

--
-- Indexes for table `mazos_usuario`
--
ALTER TABLE `mazos_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `mazos_usuario`
--
ALTER TABLE `mazos_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mazos_cartas`
--
ALTER TABLE `mazos_cartas`
  ADD CONSTRAINT `mazos_cartas_ibfk_1` FOREIGN KEY (`id_mazo`) REFERENCES `mazos_usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mazos_cartas_ibfk_2` FOREIGN KEY (`id_carta`) REFERENCES `cartas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mazos_usuario`
--
ALTER TABLE `mazos_usuario`
  ADD CONSTRAINT `mazos_usuario_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
