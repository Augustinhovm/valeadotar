-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Nov-2020 às 00:02
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `valeadotar_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

DROP TABLE IF EXISTS `animais`;
CREATE TABLE IF NOT EXISTS `animais` (
  `ani_id` int(255) NOT NULL AUTO_INCREMENT,
  `ani_nome` varchar(255) NOT NULL,
  `ani_porte` varchar(255) NOT NULL,
  `ani_genero` varchar(255) NOT NULL,
  `ani_cidade` varchar(255) NOT NULL,
  `ani_especie` varchar(255) NOT NULL,
  `ani_descricao` varchar(255) NOT NULL,
  `ani_telefone` int(16) NOT NULL,
  PRIMARY KEY (`ani_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`ani_id`, `ani_nome`, `ani_porte`, `ani_genero`, `ani_cidade`, `ani_especie`, `ani_descricao`, `ani_telefone`) VALUES
(5, 'EWQWHFEJGJ', 'Pequeno', 'Macho', 'Aparecida', 'Gato', 'Lindo tesÃ£o bonito e gostosÃ£o', 1231231),
(6, 'Agustinho Carrara', 'Pequeno', 'Femea', 'Cachoeira Paulista', 'Cachorro', 'Lindo tesÃ£o bonito e gostosÃ£o', 9090),
(7, 'Agustinho Carrara taxi', 'Medio', 'Macho', 'Aparecida', 'Cachorro', 'Lindo tesÃ£o bonito e gostosÃ£o', 1232121432),
(8, 'douglinha', 'Medio', 'Macho', 'Cachoeira Paulista', 'Cachorro', 'chama', 40028922),
(9, 'Agustinho Carrara', 'Medio', 'Femea', 'Cachoeira Paulista', 'Gato', '12', 392109301),
(10, 'claudete', 'Medio', 'Macho', 'Cachoeira Paulista', 'Cachorro', 'comilao', 19191919),
(12, 'rengar', 'Medio', 'Macho', 'Cachoeira Paulista', 'Gato', 'chama', 909090),
(13, 'criminoso na programÃ§Ã£o', 'Grande', 'Macho', 'Aparecida', 'Cachorro', 'burro burro', 1232121331),
(14, 'xesquedele', 'Grande', 'Macho', 'Cachoeira Paulista', 'Cachorro', 'chama', 45464712);

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

DROP TABLE IF EXISTS `arquivo`;
CREATE TABLE IF NOT EXISTS `arquivo` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo` varchar(40) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `arquivo`
--

INSERT INTO `arquivo` (`codigo`, `arquivo`, `data`) VALUES
(10, '5.jpg', '2020-11-16 00:29:49'),
(11, '0.jpg', '2020-11-16 13:57:03'),
(12, '0.jpg', '2020-11-16 13:58:16'),
(13, '0.jpg', '2020-11-16 14:00:20'),
(14, '6.jpg', '2020-11-16 14:01:34'),
(15, '7.jpg', '2020-11-16 14:02:35'),
(16, '0jfif', '2020-11-16 14:07:13'),
(17, '8jfif', '2020-11-16 14:08:13'),
(18, '9.jpg', '2020-11-16 14:15:20'),
(19, '0jfif', '2020-11-16 16:02:29'),
(20, '10.jpg', '2020-11-16 16:04:11'),
(35, '0.jpg', '2020-11-16 17:58:43'),
(36, '12.jpg', '2020-11-16 18:02:18'),
(37, '13.jpg', '2020-11-16 18:03:15'),
(38, '14.jpg', '2020-11-16 18:12:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `telefone` varchar(40) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cidade`, `email`, `senha`, `telefone`, `endereco`) VALUES
(1, 'augusto cesar Ribeiro', 'Aparecida', 'augustotdc.991@gmail.com', 'augusto123', '12996342606', 'Rua SebastiÃ£o dos Santos'),
(2, 'alexandre', 'Aparecida', 'alexandre@gmail.com', '12345678', '12996342606', 'Rua SebastiÃ£o dos Santos'),
(3, 'augusto cesar Ribeiro', 'Aparecida', 'augustotdc@gmail.com', 'augusto123', '12996259946', 'Rua SebastiÃ£o dos Grandes'),
(4, 'sor claudio', 'aparecida', 'sorclaudio@gmail.com', 'augusto123', '31059266', 'rua do coteca ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
