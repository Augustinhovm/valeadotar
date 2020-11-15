-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15-Nov-2020 às 19:20
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

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
  `ani_telefone` varchar(16) NOT NULL,
  PRIMARY KEY (`ani_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`ani_id`, `ani_nome`, `ani_porte`, `ani_genero`, `ani_cidade`, `ani_especie`, `ani_descricao`, `ani_telefone`) VALUES
(1, 'Marley', 'Grande', 'Masculino', 'Aparecida', 'Cachorro', 'Cachorro dócil.', '(12) 99777-4361'),
(2, 'Bidu', 'Pequeno', 'Macho', 'Potim', 'Cachorro', 'BrincalhÃ£o e Companheiro', '(12) 66277-4361'),
(3, 'Carla', 'Medio', 'Femea', 'Pindamonhangaba', 'Gato', 'amigavel', '(12) 3013-5894'),
(4, 'Marta', 'Grande', 'Femea', 'Roseira', 'Cachorro', 'BrincalhÃ£o e Companheiro', '(12) 94361-1662'),
(5, 'Salsicha', 'Pequeno', 'Macho', 'Lorena', 'Cachorro', 'Dorminhoco e companheiro', '(12) 94577-4486'),
(6, 'Chris', 'Pequeno', 'Macho', 'Cachoeira Paulista', 'Gato', 'Calmo, bom para crianÃ§as', '(12) 98817-2454'),
(7, 'Garfield', 'Pequeno', 'Macho', 'GuaratinguetÃ¡', 'Gato', 'Filhote', '(12) 98817-3113'),
(8, 'Floquinho', 'Pequeno', 'Macho', 'Aparecida', 'Cachorro', 'Super DÃ³cil ', '(12) 99512-2741'),
(9, 'Valentina', 'Pequeno', 'Femea', 'GuaratinguetÃ¡', 'Cachorro', 'Quieto, bom para casas pequenas e apartamentos ', '(12) 9953-7512');

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

DROP TABLE IF EXISTS `arquivo`;
CREATE TABLE IF NOT EXISTS `arquivo` (
  `arq_id` int(255) NOT NULL AUTO_INCREMENT,
  `arq_nome` varchar(255) NOT NULL,
  `arq_arquivo` varchar(255) NOT NULL,
  `ani_id` int(11) NOT NULL,
  PRIMARY KEY (`arq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(255) NOT NULL,
  `sobrenome_cliente` varchar(255) NOT NULL,
  `sexo_cliente` varchar(255) NOT NULL,
  `cpf_cliente` varchar(255) NOT NULL,
  `email_cliente` varchar(255) NOT NULL,
  `senha_cliente` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `nivel_cliente` int(255) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `sobrenome_cliente`, `sexo_cliente`, `cpf_cliente`, `email_cliente`, `senha_cliente`, `telefone`, `nivel_cliente`) VALUES
(1, 'Augustinho', 'Souza', 'Masculino', '123.456.789-09', 'augustinho@live.com', '123', '(12)981289183', 1);

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
