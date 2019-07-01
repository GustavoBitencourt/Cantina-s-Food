-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 30-Jun-2019 às 19:27
-- Versão do servidor: 5.7.23
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cantina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendente`
--

CREATE TABLE `atendente` (
  `cd_func` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` decimal(15,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cd_cliente` int(10) NOT NULL,
  `id` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cd_cliente`, `id`, `nome`, `email`, `senha`, `imagem`) VALUES
(12, '201811160131', 'Gustavo Bitencourt', 'gubten@hotmail.com', '202cb962ac59075b964b07152d234b70', 'cr7.jpeg'),
(13, '247981274817', 'Cegonha Frita', 'cegonha_abu@frita.com', 'fb1640bdb5fe667b4392f03fea3539c9', 'fraj.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `cd_pedido` int(11) NOT NULL,
  `valor_total` decimal(5,2) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`cd_pedido`, `valor_total`, `data`) VALUES
(1, '9.00', '2019-06-18'),
(2, '8.00', '2019-06-18'),
(3, '4.00', '2019-06-18'),
(4, '13.00', '2019-06-18'),
(5, '13.00', '2019-06-18'),
(6, '9.00', '2019-06-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cd_produto` int(10) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `nomeDoProduto` varchar(255) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cd_produto`, `valor`, `nomeDoProduto`, `imagem`, `descricao`, `quantidade`, `categoria`) VALUES
(12, '9.00', 'Cachorro Quente', 'Hot-Dog.png', 'Cachorro quente feito no capricho', 0, 'salgados'),
(13, '4.75', 'Torrada', 'torrada.jpg', 'Torrada feita no capricho', 0, 'salgados'),
(16, '3.70', 'Coca-Cola Lata', 'coca-600x540.png', 'Latinha de coca ', 0, 'bebidas'),
(22, '1.90', 'Café Passado', '24702--ingredient_detail_ingredient-2.png', 'Quentinho', NULL, 'cafe'),
(23, '2.50', 'Café Máquina', 'cafe-expresso-com-leite.png', 'Bom', NULL, 'cafe'),
(24, '3.50', 'Capuccino', '126.png', 'Muito Nice', NULL, 'cafe'),
(25, '2.50', 'Pão de Queijo', 'comum-ok.png', 'Pão de queijo caro mas bom', NULL, 'salgados'),
(26, '3.25', 'Coxinha', '3ae7db686b2478f361c7ca183b6d8cbcbcd5373c.png', 'Ótimo sabor', NULL, 'salgados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recuperar`
--

CREATE TABLE `recuperar` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rash` varchar(200) NOT NULL,
  `status` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cd_cliente` int(10) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` decimal(15,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cd_cliente`, `cpf`, `nome`, `email`, `senha`, `telefone`) VALUES
(2, 123, 'das', 'das@das', 'b3ddbc502e307665f346cbd6e52cc10d', '123'),
(5, 123456, 'Traitus', 'traitus@123', '202cb962ac59075b964b07152d234b70', '5522244'),
(6, 12344, 'Gustavo Cegonheiro', 'auau@a.com', '202cb962ac59075b964b07152d234b70', '1241543'),
(7, 1234, 'Gustavo', 'gubten@hotmail.com', '202cb962ac59075b964b07152d234b70', '1234'),
(8, 29194196, 'teste', 'teste@teste', '202cb962ac59075b964b07152d234b70', '191481'),
(9, 4984984, 'geasugye', 'gsage@dbasj', '65ded5353c5ee48d0b7d48c591b8f430', '4848'),
(10, 432432, 'hdas', 'sdaj@sajdia.com', 'b4c4c230baa0614148b97003e4d15510', '42342423'),
(11, 124656321, 'Gustavo Testando o Software', 'gustavotestandoosoftware@hotmail.com', '202cb962ac59075b964b07152d234b70', '335329134932'),
(12, 433652, 'sdfgçf', 'samdkasm@sad.com', '7b5c502497d65510df26a9fc7a487d10', '5542466'),
(13, 4234432, 'Samuel Wilson', 'wilsondameia@cegonhamail.com', '202cb962ac59075b964b07152d234b70', '423545'),
(14, 230948232, 'Samuson', 'samuson@wilson.com', 'a5d33345e33ba8c25f65cb82e6c8e954', '53991357290');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendente`
--
ALTER TABLE `atendente`
  ADD PRIMARY KEY (`cd_func`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cd_cliente`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`cd_pedido`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cd_produto`);

--
-- Indexes for table `recuperar`
--
ALTER TABLE `recuperar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cd_cliente`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atendente`
--
ALTER TABLE `atendente`
  MODIFY `cd_func` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cd_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `cd_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cd_produto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `recuperar`
--
ALTER TABLE `recuperar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cd_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
