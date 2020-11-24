-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Nov-2020 às 00:59
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
  `ani_nome` varchar(50) NOT NULL,
  `ani_porte` varchar(20) NOT NULL,
  `ani_genero` varchar(10) NOT NULL,
  `ani_cidade` varchar(30) NOT NULL,
  `ani_especie` varchar(20) NOT NULL,
  `ani_descricao` varchar(150) NOT NULL,
  `ani_telefone` varchar(16) NOT NULL,
  `ani_doador` varchar(50) NOT NULL,
  `ani_email` varchar(50) NOT NULL,
  PRIMARY KEY (`ani_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`ani_id`, `ani_nome`, `ani_porte`, `ani_genero`, `ani_cidade`, `ani_especie`, `ani_descricao`, `ani_telefone`, `ani_doador`, `ani_email`) VALUES
(1, 'Marley', 'Grande', 'Masculino', 'Aparecida', 'Cachorro', 'Cachorro dócil.', '(12) 99777-4361', '', ''),
(2, 'Bidu', 'Pequeno', 'Macho', 'Potim', 'Cachorro', 'BrincalhÃ£o e Companheiro', '(12) 66277-4361', '', ''),
(3, 'Carla', 'Medio', 'Femea', 'Pindamonhangaba', 'Gato', 'amigavel', '(12) 3013-5894', '', ''),
(4, 'Marta', 'Grande', 'Femea', 'Roseira', 'Cachorro', 'BrincalhÃ£o e Companheiro', '(12) 94361-1662', '', ''),
(5, 'Salsicha', 'Pequeno', 'Macho', 'Lorena', 'Cachorro', 'Dorminhoco e companheiro', '(12) 94577-4486', '', ''),
(6, 'Chris', 'Pequeno', 'Macho', 'Cachoeira Paulista', 'Gato', 'Calmo, bom para crianÃ§as', '(12) 98817-2454', '', ''),
(7, 'Garfield', 'Pequeno', 'Macho', 'GuaratinguetÃ¡', 'Gato', 'Filhote', '(12) 98817-3113', '', ''),
(8, 'Floquinho', 'Pequeno', 'Macho', 'Aparecida', 'Cachorro', 'Super DÃ³cil ', '(12) 99512-2741', '', ''),
(9, 'Valentina', 'Pequeno', 'Femea', 'GuaratinguetÃ¡', 'Cachorro', 'Quieto, bom para casas pequenas e apartamentos ', '(12) 9953-7512', '', ''),
(10, 'teste', 'Pequeno', 'Macho', 'Aparecida', 'Cachorro', 'testando 123', '4161564641215', '', ''),
(11, 'douglinha', 'Grande', 'Macho', 'Aparecida', 'Cachorro', 'lindooo', '996259946', '', ''),
(12, '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', ''),
(18, 'Agustinho Carrara', 'Medio', 'Femea', 'Aparecida', 'Gato', 'Lindo tesÃ£o bonito e gostosÃ£o', '12996342606', 'Augustinho', 'augustotdc.991@gmail.com');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cidade`, `email`, `senha`, `telefone`, `endereco`) VALUES
(1, 'dan', 'potim', 'dan@gmail.com', '123', '123546547796', 'rua da minha casa'),
(2, 'Augusto Cesar', 'aparecida', 'augustotdc.991@gmail.com', 'augusto123', '12996342606', 'rua sebastiÃ£o dos santo 255'),
(3, 'Gesio de Almeida', 'aparecida', 'augustotdc.991@gmail.com', 'augusto123', '12996342606', 'rua sebastiÃ£o dos santo 255');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
