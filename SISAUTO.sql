-- phpMyAdmin SQL Dump
-- vesrsion 4.6.6 note book
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 01-Out-2017 às 14:50
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SISAUTO`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ALUNOS`
--

CREATE TABLE `ALUNOS` (
  `id_aluno` int(255) NOT NULL,
  `cdaluno_nome` varchar(24) CHARACTER SET utf8 NOT NULL,
  `cdaluno_rg` int(11) NOT NULL,
  `cdaluno_datadenascimento` date NOT NULL,
  `cdaluno_naturalidade` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cdaluno_estadocivil` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cdaluno_profissao` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `cdaluno_telefoneresidencial` int(22) DEFAULT NULL,
  `cdaluno_telefonecomercial` int(22) DEFAULT NULL,
  `cdaluno_telefonecelular` int(22) NOT NULL,
  `cdaluno_email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cdaluno_cep` int(15) DEFAULT NULL,
  `cdaluno_cidade` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `cdaluno_endereco` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cdaluno_numero` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `cdaluno_bairro` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cdaluno_pontodereferencia` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `aluno_status` int(1) NOT NULL,
  `id_aluno_id_login` int(11) NOT NULL,
  `data_criacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ALUNOS`
--

INSERT INTO `ALUNOS` (`id_aluno`, `cdaluno_nome`, `cdaluno_rg`, `cdaluno_datadenascimento`, `cdaluno_naturalidade`, `cdaluno_estadocivil`, `cdaluno_profissao`, `cdaluno_telefoneresidencial`, `cdaluno_telefonecomercial`, `cdaluno_telefonecelular`, `cdaluno_email`, `cdaluno_cep`, `cdaluno_cidade`, `cdaluno_endereco`, `cdaluno_numero`, `cdaluno_bairro`, `cdaluno_pontodereferencia`, `foto`, `aluno_status`, `id_aluno_id_login`, `data_criacao`) VALUES
(9, '555', 0, '2017-01-03', 'teste2', 'teste2', '4', 4, 4, 4, '4', 4, '4', '4', '4', '4', '4', '', 1, 1, '2017-09-14 00:00:00'),
(10, '1', 1, '0000-00-00', '1', '1', '1', 1, 1, 1, '1', 1, '1', '1', '1', '1', '1', '', 1, 1, '2017-09-14 00:00:00'),
(11, '1', 1, '0000-00-00', '1', '1', '1', 1, 1, 1, '1', 1, '1', '1', '1', '1', '1', '', 1, 1, '2017-09-14 00:00:00'),
(12, '1', 1, '0000-00-00', '1', '1', '1', 1, 1, 111, '1', 1, '1', '1', '1', '1', '1', '', 1, 1, '2017-09-14 00:00:00'),
(13, '4', 4, '0000-00-00', '4', '4', '4', 4, 1, 4, '4', 4, '4', '4', '4', '4', '4', '', 1, 1, '2017-09-14 00:00:00'),
(14, '3', 3, '0000-00-00', '3', '3', '3', 3, 3, 3, '3', 3, '3', '3', '3', '3', '3', '', 1, 1, '2017-09-14 00:00:00'),
(15, '1', 1, '0000-00-00', '1', '1', '1', 1, 1, 1, '1', 1, '1', '1', '1', '1', '1', '', 1, 1, '2017-09-14 00:00:00'),
(16, '5665', 65, '0000-00-00', '6', '56', '5', 65, 65, 56, '65', 56, '65', '56', '65', '56', '56', '', 1, 1, '2017-09-14 00:00:00'),
(17, 'áçáo', 65, '0000-00-00', '6', '56', '5', 65, 65, 56, '65', 56, '65', '56', '65', '56', '56', '', 1, 1, '2017-09-14 00:00:00'),
(18, '\'rodrigo', 65, '0000-00-00', '6', '56', '5', 65, 65, 56, '65', 56, '65', '56', '65', '56', '56', '', 1, 1, '2017-09-14 00:00:00'),
(19, '\"rodrigo', 65, '0000-00-00', '6', '56', '5', 65, 65, 56, '65', 56, '65', '56', '65', '56', '56', '', 1, 1, '2017-09-14 00:00:00'),
(20, '\"rodrigo', 65, '0000-00-00', '6', '56', '5', 65, 65, 56, '65', 56, '65', '56', '65', '56', '56', '', 1, 1, '2017-09-14 00:00:00'),
(21, '65656566', 656, '0000-00-00', '656', '6', '65', 6, 65, 65, '656', 565, '65', '65', '65', '65', '65', '', 1, 1, '2017-09-14 00:00:00'),
(22, '1', 1, '0000-00-00', '1', '1', '', 0, 0, 44, '', 0, '', '', '', '', '', '', 1, 1, '2017-09-14 00:00:00'),
(23, '1', 1, '0000-00-00', '1', '1', '', 0, 0, 77777, '', 0, '', '', '', '', '', '', 1, 1, '2017-09-14 00:00:00'),
(24, '1', 1, '0000-00-00', '1', '1', '', 0, 0, 5555, '', 0, '', '', '', '', '', '', 1, 1, '2017-09-14 00:00:00'),
(25, 'rod', 4, '0000-00-00', '4', '4', '', 4, 4, 4, '4', 4, '', '4', '4', '4', '4', '13e81a780b17fc6db0e016a9f9e1f5de.png', 1, 1, '2017-09-14 00:00:00'),
(26, 'teste', 2, '0000-00-00', '2', '2', '2', 2, 2, 2, '2', 2, '2', '2', '2', '2', '2', '5b6f2d5e9f4fb23e346f854c100e22a4.png', 1, 1, '2017-09-14 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CAIXA`
--

CREATE TABLE `CAIXA` (
  `id_caixa` int(255) NOT NULL,
  `caixa_saldo` decimal(20,2) NOT NULL,
  `data_abertura` datetime NOT NULL,
  `data_fechamento` datetime NOT NULL,
  `id_login_abertura` int(11) NOT NULL,
  `id_login_fechamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CAIXA`
--

INSERT INTO `CAIXA` (`id_caixa`, `caixa_saldo`, `data_abertura`, `data_fechamento`, `id_login_abertura`, `id_login_fechamento`) VALUES
(6, '250.00', '2017-09-29 19:04:20', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `CONTA`
--

CREATE TABLE `CONTA` (
  `id_conta` int(255) NOT NULL,
  `Descricao` char(60) DEFAULT NULL,
  `Operacao` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CONTA`
--

INSERT INTO `CONTA` (`id_conta`, `Descricao`, `Operacao`) VALUES
(1, 'Crédito', 'C'),
(2, 'Débito', 'D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CONTA_A_RECEBER`
--

CREATE TABLE `CONTA_A_RECEBER` (
  `id_conta_a_receber` int(1) DEFAULT NULL,
  `DATA` datetime(1) DEFAULT NULL,
  `DEVEDOR` char(50) DEFAULT NULL,
  `lk_id_aluno` int(255) DEFAULT NULL,
  `TagCliente` int(11) DEFAULT NULL,
  `Valor` decimal(20,2) DEFAULT NULL,
  `Vencimento` datetime DEFAULT NULL,
  `ORIGEM` char(30) DEFAULT NULL,
  `DIVIDA` decimal(20,2) DEFAULT NULL,
  `TotalPago` decimal(20,2) DEFAULT NULL,
  `DataCobra` datetime DEFAULT NULL,
  `TipoCobra` char(20) DEFAULT NULL,
  `PARCELA` char(5) DEFAULT NULL,
  `Obs` text,
  `cobranca_local` char(20) DEFAULT NULL,
  `AVISOS` int(11) DEFAULT NULL,
  `lk_id_fluxo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filiais`
--

CREATE TABLE `filiais` (
  `id_filial` int(22) NOT NULL,
  `nome` varchar(22) NOT NULL,
  `setor` varchar(22) NOT NULL,
  `filial_status` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filiais`
--

INSERT INTO `filiais` (`id_filial`, `nome`, `setor`, `filial_status`) VALUES
(1, 'HOSPITAL INCAR', 'HOSPITALAR', 1),
(2, 'DELFIN IMAGENS', 'IMAGENS', 1),
(3, 'ddd', 'ddd', 1),
(4, 'ddd', 'ddd', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `FLUXO`
--

CREATE TABLE `FLUXO` (
  `id_fluxo` int(255) NOT NULL,
  `data` datetime NOT NULL,
  `lk_id_tipo_venda` int(22) NOT NULL,
  `lk_id_tipo_pagamento` int(22) NOT NULL,
  `lk_id_login` int(22) NOT NULL,
  `lk_id_aluno` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(22) NOT NULL,
  `id_usuario` int(22) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `filial` int(22) NOT NULL,
  `ultimo_acesso` datetime DEFAULT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `id_usuario`, `login`, `senha`, `filial`, `ultimo_acesso`, `nome`) VALUES
(1, 1, 'a', 'a', 1, '2017-09-01 18:50:13', 'Rrodrigo Barbosa'),
(2, 2, 'b', 'b', 2, '2017-09-01 18:46:51', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `SITUACAO`
--

CREATE TABLE `SITUACAO` (
  `id_situacao` int(11) NOT NULL,
  `situacao_nome` varchar(100) NOT NULL,
  `situacao_obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `SITUACAO`
--

INSERT INTO `SITUACAO` (`id_situacao`, `situacao_nome`, `situacao_obs`) VALUES
(1, 'Ativo', 'Cadastro do cliente está aprovado.'),
(2, 'Bloqueado', 'O cliente está bloqueado e não poderá ser feito operações com o mesmo'),
(3, 'Desativado', 'O cliente foi desativado e não poderá mais fazer nem uma operação no sistema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `TIPO_PAGAMENTO`
--

CREATE TABLE `TIPO_PAGAMENTO` (
  `id_tipo_pagamento` int(255) NOT NULL,
  `Recebimento` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `TIPO_PAGAMENTO`
--

INSERT INTO `TIPO_PAGAMENTO` (`id_tipo_pagamento`, `Recebimento`) VALUES
(1, 'DINHEIRO'),
(2, 'CARTÃO'),
(3, 'A PRAZO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `TIPO_VENDA`
--

CREATE TABLE `TIPO_VENDA` (
  `id_tipo_venda` int(255) NOT NULL,
  `Tipo` char(42) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `TIPO_VENDA`
--

INSERT INTO `TIPO_VENDA` (`id_tipo_venda`, `Tipo`) VALUES
(1, 'VENDA A VISTA'),
(2, 'VENDA A PRAZO'),
(3, 'VENDA COM CARTÃO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `VENDAS`
--

CREATE TABLE `VENDAS` (
  `id_vendas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ALUNOS`
--
ALTER TABLE `ALUNOS`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `fk_id_aluno_id_login` (`id_aluno_id_login`),
  ADD KEY `fk_situacao` (`aluno_status`);

--
-- Indexes for table `CAIXA`
--
ALTER TABLE `CAIXA`
  ADD PRIMARY KEY (`id_caixa`);

--
-- Indexes for table `CONTA`
--
ALTER TABLE `CONTA`
  ADD PRIMARY KEY (`id_conta`);

--
-- Indexes for table `filiais`
--
ALTER TABLE `filiais`
  ADD PRIMARY KEY (`id_filial`);

--
-- Indexes for table `FLUXO`
--
ALTER TABLE `FLUXO`
  ADD PRIMARY KEY (`id_fluxo`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `SITUACAO`
--
ALTER TABLE `SITUACAO`
  ADD PRIMARY KEY (`id_situacao`);

--
-- Indexes for table `TIPO_PAGAMENTO`
--
ALTER TABLE `TIPO_PAGAMENTO`
  ADD PRIMARY KEY (`id_tipo_pagamento`),
  ADD UNIQUE KEY `id_pagamento` (`id_tipo_pagamento`),
  ADD UNIQUE KEY `id_pagamento_2` (`id_tipo_pagamento`),
  ADD UNIQUE KEY `id_pagamento_4` (`id_tipo_pagamento`),
  ADD KEY `id_pagamento_3` (`id_tipo_pagamento`),
  ADD KEY `id_pagamento_5` (`id_tipo_pagamento`);

--
-- Indexes for table `TIPO_VENDA`
--
ALTER TABLE `TIPO_VENDA`
  ADD PRIMARY KEY (`id_tipo_venda`);

--
-- Indexes for table `VENDAS`
--
ALTER TABLE `VENDAS`
  ADD PRIMARY KEY (`id_vendas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ALUNOS`
--
ALTER TABLE `ALUNOS`
  MODIFY `id_aluno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `CAIXA`
--
ALTER TABLE `CAIXA`
  MODIFY `id_caixa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `CONTA`
--
ALTER TABLE `CONTA`
  MODIFY `id_conta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `filiais`
--
ALTER TABLE `filiais`
  MODIFY `id_filial` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `FLUXO`
--
ALTER TABLE `FLUXO`
  MODIFY `id_fluxo` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `SITUACAO`
--
ALTER TABLE `SITUACAO`
  MODIFY `id_situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `TIPO_PAGAMENTO`
--
ALTER TABLE `TIPO_PAGAMENTO`
  MODIFY `id_tipo_pagamento` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `TIPO_VENDA`
--
ALTER TABLE `TIPO_VENDA`
  MODIFY `id_tipo_venda` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `VENDAS`
--
ALTER TABLE `VENDAS`
  MODIFY `id_vendas` int(255) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ALUNOS`
--
ALTER TABLE `ALUNOS`
  ADD CONSTRAINT `fk_id_aluno_id_login` FOREIGN KEY (`id_aluno_id_login`) REFERENCES `login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_situacao` FOREIGN KEY (`aluno_status`) REFERENCES `SITUACAO` (`id_situacao`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
