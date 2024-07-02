-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 05-Set-2014 às 11:56
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sunsquare`
--
CREATE DATABASE IF NOT EXISTS `sunsquare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sunsquare`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE IF NOT EXISTS `atividade` (
  `nome_ativ` varchar(35) NOT NULL,
  `id_ativ` int(4) NOT NULL AUTO_INCREMENT,
  `descricao_ativ` varchar(125) NOT NULL,
  `responsavel_ativ` varchar(35) NOT NULL,
  `hora_inicial_ativ` varchar(5) NOT NULL,
  `hora_final_ativ` varchar(5) NOT NULL,
  `sala_ativ` varchar(30) NOT NULL,
  `estado_ativ` varchar(7) NOT NULL,
  PRIMARY KEY (`id_ativ`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`nome_ativ`, `id_ativ`, `descricao_ativ`, `responsavel_ativ`, `hora_inicial_ativ`, `hora_final_ativ`, `sala_ativ`, `estado_ativ`) VALUES
('Aula de Alfabetização', 14, 'Aula para alfabetização dos detentos', 'Francisco Cruz', '09:00', '11:00', '36', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade_detento`
--

CREATE TABLE IF NOT EXISTS `atividade_detento` (
  `id_ativ` int(4) NOT NULL,
  `id_det` int(4) NOT NULL,
  KEY `id_ativ_fk` (`id_ativ`),
  KEY `id_det_fk` (`id_det`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atividade_detento`
--

INSERT INTO `atividade_detento` (`id_ativ`, `id_det`) VALUES
(14, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bloco`
--

CREATE TABLE IF NOT EXISTS `bloco` (
  `id_bloco` int(4) NOT NULL AUTO_INCREMENT,
  `nome_bloco` varchar(4) NOT NULL,
  PRIMARY KEY (`id_bloco`),
  UNIQUE KEY `nome_bloco` (`nome_bloco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `bloco`
--

INSERT INTO `bloco` (`id_bloco`, `nome_bloco`) VALUES
(3, '3B'),
(4, '3C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `calendariov`
--

CREATE TABLE IF NOT EXISTS `calendariov` (
  `id_calv` int(4) NOT NULL AUTO_INCREMENT,
  `data_calv` varchar(10) NOT NULL,
  `horario_calv` varchar(5) NOT NULL,
  `penit_calv` varchar(35) NOT NULL,
  `id_vis` varchar(20) DEFAULT NULL,
  `id_det` int(4) DEFAULT NULL,
  `acomp_vis` varchar(35) DEFAULT NULL,
  `acomp2_vis` varchar(50) DEFAULT NULL,
  `acomp3_vis` varchar(50) DEFAULT NULL,
  `acomp_rg` varchar(12) DEFAULT NULL,
  `acomp2_rg` varchar(12) DEFAULT NULL,
  `acomp3_rg` varchar(12) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_calv`),
  KEY `id_vis_fk` (`id_vis`),
  KEY `id_det_fk` (`id_det`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=324 ;

--
-- Extraindo dados da tabela `calendariov`
--

INSERT INTO `calendariov` (`id_calv`, `data_calv`, `horario_calv`, `penit_calv`, `id_vis`, `id_det`, `acomp_vis`, `acomp2_vis`, `acomp3_vis`, `acomp_rg`, `acomp2_rg`, `acomp3_rg`, `status`) VALUES
(320, '06/09/2014', '6:00', 'Penitenciária de Tremembé I', '1', 1, '', '', '', '', '', '', 3),
(321, '06/09/2014', '6:00', 'Penitenciária de Tremembé I', '1', 5, '', '', '', '', '', '', 1),
(322, '06/09/2014', '6:00', 'Penitenciária de Tremembé I', '1', 2, '', '', '', '', '', '', 3),
(323, '06/09/2014', '6:00', 'Penitenciária de Tremembé I', '1', 3, '', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cela`
--

CREATE TABLE IF NOT EXISTS `cela` (
  `id_cela` int(4) NOT NULL AUTO_INCREMENT,
  `num_cela` varchar(4) NOT NULL,
  `id_bloco` int(11) NOT NULL,
  `capacidade_cela` int(2) NOT NULL,
  `estado_cela` varchar(7) NOT NULL,
  PRIMARY KEY (`id_cela`),
  KEY `id_bloco` (`id_bloco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `cela`
--

INSERT INTO `cela` (`id_cela`, `num_cela`, `id_bloco`, `capacidade_cela`, `estado_cela`) VALUES
(9, '11', 4, 3, 'Ativo'),
(10, '15', 3, 10, 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE IF NOT EXISTS `conteudo` (
  `id_conteudo` int(4) NOT NULL AUTO_INCREMENT,
  `paragrafo_conteudo` varchar(255) NOT NULL,
  `id_imagem` int(4) DEFAULT NULL,
  `id_titulo` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_conteudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id_conteudo`, `paragrafo_conteudo`, `id_imagem`, `id_titulo`) VALUES
(1, '', 0, 0),
(2, '<li id="resultados">Setores empresariais</li><li id="resultados">Suprir necessidades</li>', 0, 0),
(3, '<li id="resultados">Suprir áreas</li><li id="resultados">Deficiências no gerenciamento</li>', 0, 0),
(4, '<li id="resultados">Respeito</li><li id="resultados">Honestidade</li><li id="resultados">Segurança</li><li id="resultados">Eficiência</li>', 0, 0),
(5, '<li id="resultados">Segurança das informações</li><li id="resultados">Modernização</li><li id="resultados">Praticidade</li>', 0, 0),
(6, '<li id="resultados">Gerenciar dados</li><li id="resultados">Sistema penitenciário</li>', 0, 0),
(7, '<li id="resultados">Organizar informações</li><li id="resultados">Modernizar sistema</li><li id="resultados">Facilitar o trabalho</li>', 0, 0),
(8, '<li id="resultados">Funcionário</li><li id="resultados">Administrador</li>', 0, 0),
(9, '<li id="resultados">C Sharp</li> <li id="resultados"> Php e Java Script web</li><li id="resultados">MySQL banco de dados</li>', 0, 0),
(10, '<li id="resultados">Casos de Uso</li><li id="resultados">Atores</li><li id="resultados">Relacionamentos</li>', 0, 0),
(11, '<li id="resultados">Classes</li> <li id="resultados">Atributos</li><li id="resultados">Metodos</li>', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `detento`
--

CREATE TABLE IF NOT EXISTS `detento` (
  `nome_det` varchar(35) NOT NULL,
  `cpf_det` char(14) NOT NULL,
  `rg_det` varchar(15) NOT NULL,
  `sexo_det` varchar(9) NOT NULL,
  `id_det` int(4) NOT NULL AUTO_INCREMENT,
  `rua_det` varchar(35) NOT NULL,
  `bairro_det` varchar(35) NOT NULL,
  `numero_det` varchar(8) NOT NULL,
  `cep_det` char(9) NOT NULL,
  `uf_det` char(2) NOT NULL,
  `pena_det` varchar(30) NOT NULL,
  `entrada_det` char(10) NOT NULL,
  `saida_det` char(10) NOT NULL,
  `auxilio_det` varchar(3) NOT NULL,
  `autoridade_det` varchar(35) NOT NULL,
  `antecedentes_det` varchar(250) DEFAULT NULL,
  `cidade_det` varchar(35) NOT NULL,
  `dt_nasc_det` char(10) NOT NULL,
  `acusação_det` varchar(50) NOT NULL,
  `telefone_det` varchar(13) NOT NULL,
  `id_pen` int(4) NOT NULL,
  `complemento_det` varchar(50) DEFAULT NULL,
  `pai_det` varchar(35) NOT NULL,
  `mae_det` varchar(35) NOT NULL,
  `cela_det` varchar(4) NOT NULL,
  `bloco_det` varchar(4) NOT NULL,
  `det_estado` varchar(7) NOT NULL,
  `id_cela` int(11) NOT NULL,
  `id_vis` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_det`),
  UNIQUE KEY `cpf_det` (`cpf_det`),
  KEY `id_det` (`id_det`),
  KEY `rua_det` (`rua_det`),
  KEY `id_pen` (`id_pen`),
  KEY `id_cela` (`id_cela`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `detento`
--

INSERT INTO `detento` (`nome_det`, `cpf_det`, `rg_det`, `sexo_det`, `id_det`, `rua_det`, `bairro_det`, `numero_det`, `cep_det`, `uf_det`, `pena_det`, `entrada_det`, `saida_det`, `auxilio_det`, `autoridade_det`, `antecedentes_det`, `cidade_det`, `dt_nasc_det`, `acusação_det`, `telefone_det`, `id_pen`, `complemento_det`, `pai_det`, `mae_det`, `cela_det`, `bloco_det`, `det_estado`, `id_cela`, `id_vis`) VALUES
('Pablo Henrique', '46687883844', '52812268X', 'Masculino', 1, 'Rua José Manoel Costa', 'Vila Medeiros', '76', '02220-220', 'SP', '29 Anos e 0 meses', '25/12/1993', '30/12/2022', 'Sim', 'Rick Grimmes', '', 'São Paulo', '25/12/1990', 'Homicidio', '(11)2201-1405', 1, '', '', 'Rafaela de Albuquerque', '11', '3C', 'Ativo', 9, 1),
('Ricardo Souza', '40134651839', '370287241', 'Masculino', 2, 'dos Mártires Armênios', 'Barro Branco (Zona Norte)', '23', '02345-000', 'SP', '15 Anos e 0 meses', '12/11/2005', '12/11/2020', 'Não', 'Roberto Silva', '', 'São Paulo', '11/12/1987', 'Roubo', '(11)2343-2432', 1, '', 'Joao Souza', 'Rosana Souza', '15', '3B', 'Ativo', 10, 1),
('Andre Gomes', '83157878107', '418757896', 'Masculino', 3, 'José Manoel Costa', 'Vila Medeiros', '23', '02220-220', 'SP', '23 Anos e 0 meses', '11/12/2007', '11/12/2030', 'Sim', 'Roberto Silva', 'Roubo', 'São Paulo', '25/11/1986', 'Homicidio', '(11)2543-4576', 1, '', 'Eduardo Gomes', 'Maria Gomes', '15', '3B', 'Ativo', 10, 1),
('Pedro Nascimento', '11979215243', '418757896', 'Masculino', 4, 'Nossa Senhora do Loreto', 'Vila Medeiros', '23', '02219-000', 'SP', '23 Anos e 0 meses', '11/12/2007', '11/12/2030', 'Sim', 'Roberto Silva', 'Roubo', 'São Paulo', '25/11/1986', 'Homicidio', '(11)2543-4576', 1, '', 'Eduardo Gomes', 'Maria Gomes', '15', '3B', 'Inativo', 10, NULL),
('Joaquim de souza', '67045468555', '403289440', 'Masculino', 5, 'Rua José Manoel Costa', 'Vila Medeiros', '76', '02220-220', 'SE', '29 Anos e 0 meses', '25/12/1993', '30/12/2022', 'Sim', 'Rick Grimmes', '', 'SP', '25/12/1990', 'Homicidio', '(11)2201-1405', 1, '', 'João Batista Rocha', 'Rafaela de Albuquerque', '15', '3B', 'Ativo', 10, 1),
('Selma Oliveira', '77485338811', '2977269', 'Masculino', 6, 'Rua José Manoel Costa', 'Vila Medeiros', '76', '02220-220', 'SE', '29 Anos e 0 meses', '25/12/1993', '30/12/2022', 'Sim', 'Rick Grimmes', '', 'SP', '25/12/1990', 'Homicidio', '(11)2201-1405', 1, '', '', 'Rafaela de Albuquerque', '', '', 'Inativo', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `nome_fun` varchar(35) NOT NULL,
  `id_fun` int(4) NOT NULL AUTO_INCREMENT,
  `rg_fun` varchar(13) NOT NULL,
  `cep_fun` char(9) NOT NULL,
  `cpf_fun` varchar(14) NOT NULL,
  `sexo_fun` varchar(9) NOT NULL,
  `numero_fun` varchar(8) NOT NULL,
  `bairro_fun` varchar(35) NOT NULL,
  `rua_fun` varchar(35) NOT NULL,
  `uf_fun` char(2) NOT NULL,
  `cidade_fun` varchar(35) NOT NULL,
  `login_fun` varchar(25) NOT NULL,
  `senha_fun` varchar(25) NOT NULL,
  `entrada_fun` varchar(5) NOT NULL,
  `saida_fun` varchar(5) NOT NULL,
  `email_fun` varchar(35) NOT NULL,
  `telefone_fun` varchar(13) NOT NULL,
  `dt_nasc_fun` varchar(10) NOT NULL,
  `complemento_fun` varchar(50) DEFAULT NULL,
  `id_pen` int(4) NOT NULL,
  `tipo_de_acesso` varchar(15) NOT NULL,
  `estado_fun` varchar(7) NOT NULL,
  PRIMARY KEY (`id_fun`),
  UNIQUE KEY `login_fun` (`login_fun`),
  UNIQUE KEY `cpf_fun` (`cpf_fun`),
  UNIQUE KEY `id_fun` (`id_fun`),
  KEY `id_pen` (`id_pen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`nome_fun`, `id_fun`, `rg_fun`, `cep_fun`, `cpf_fun`, `sexo_fun`, `numero_fun`, `bairro_fun`, `rua_fun`, `uf_fun`, `cidade_fun`, `login_fun`, `senha_fun`, `entrada_fun`, `saida_fun`, `email_fun`, `telefone_fun`, `dt_nasc_fun`, `complemento_fun`, `id_pen`, `tipo_de_acesso`, `estado_fun`) VALUES
('Pedro do Flamingo', 13, '52812268x', '02220-050', '466,878,838-44', 'Masculino', '70', 'Vila Medeiros', 'Calciolândia', 'SP', 'São Paulo', '', '', '24:00', '10:00', 'pablo_albuquerque2014@hotmail.com', '(11)2201-1405', '02/12/1986', '', 1, 'Selecione', 'Ativo'),
('Peter Parker', 17, '52812268x', '02220-060', '456,373,138-22', 'Masculino', '90', 'Vila Medeiros', 'Elenice', 'SP', 'São Paulo', 'pedro', 'pedro', '24:00', '08:15', 'pablo_albuquerque2014@hotmail.com', '(10)2201-1405', '29/02/1992', '', 1, 'Funcionario', 'Ativo'),
('Pablo', 19, '52812268x', '02220-250', '177,767,193-07', 'Masculino', '76', 'Vila Medeiros', 'João Alberto Alves', 'SP', 'São Paulo', 'pablo', 'pablo', '12:30', '20:30', 'pablo_albuquerque2010@hotmail.com', '(11)2201-1405', '25/12/1995', '', 1, 'Administrador', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `id_imagem` int(4) NOT NULL AUTO_INCREMENT,
  `imagem1` varchar(65) NOT NULL,
  PRIMARY KEY (`id_imagem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id_imagem`, `imagem1`) VALUES
(2, '<img src="images/visao.jpg" width="100%" height="100%"/>'),
(3, '<img src="images/missao.jpg" width="100%" height="100%"/>'),
(4, '<img src="images/valores.png" width="100%" height="100%"/>'),
(5, '<img src="images/sistema.jpg" width="100%" height="100%"/>'),
(6, '<img src="images/objetivo.png" width="100%" height="100%"/>'),
(7, '<img src="images/justificativa.png" width="100%" height="100%"/>'),
(8, '<img src="images/usuarios.png" width="100%" height="100%"/>'),
(9, '<img src="images/especificacoes.png" width="100%" height="100%"/>'),
(10, '<img src="images/casodeuso.png" width="100%" height="100%"/>'),
(11, '<img src="images/classes.png" width="100%" height="100%"/>'),
(12, '<img src="images/conclusao.jpg" width="100%" height="100%"/>'),
(100, '<img id="Imagem" src="images/logot.png" id="foto"/>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `penitenciaria`
--

CREATE TABLE IF NOT EXISTS `penitenciaria` (
  `nome_pen` varchar(50) NOT NULL,
  `id_pen` int(4) NOT NULL AUTO_INCREMENT,
  `rua_pen` varchar(35) NOT NULL,
  `bairro_pen` varchar(30) NOT NULL,
  `cep_pen` char(9) NOT NULL,
  `numero_pen` varchar(8) NOT NULL,
  `uf_pen` char(2) NOT NULL,
  `cidade_pen` varchar(35) NOT NULL,
  `cnpj_pen` char(18) NOT NULL,
  `complemento_pen` varchar(50) DEFAULT NULL,
  `tel_pen` varchar(10) NOT NULL,
  `email_pen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `penitenciaria`
--

INSERT INTO `penitenciaria` (`nome_pen`, `id_pen`, `rua_pen`, `bairro_pen`, `cep_pen`, `numero_pen`, `uf_pen`, `cidade_pen`, `cnpj_pen`, `complemento_pen`, `tel_pen`, `email_pen`) VALUES
('Penitenciária de Tremembé I', 1, 'Default', 'Default', 'Default00', 'Default', '00', 'Default', '111111111111111', 'Default', 'Default', 'Default'),
('Tremembé II', 2, 'Rodovia Amador Bueno da Veiga', 'Bairro do Una', '12120-000', '138', 'SP', 'São Paulo', '275.641.873-01', NULL, '(12)360221', 'pjacstp2tremembe@sap.sp.gov.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `titulo`
--

CREATE TABLE IF NOT EXISTS `titulo` (
  `id_titulo` int(4) NOT NULL AUTO_INCREMENT,
  `descricao_titulo` varchar(60) NOT NULL,
  `id_conteudo` int(4) NOT NULL,
  PRIMARY KEY (`id_titulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Extraindo dados da tabela `titulo`
--

INSERT INTO `titulo` (`id_titulo`, `descricao_titulo`, `id_conteudo`) VALUES
(1, '<li id="titulo1">Tártaro</li>', 0),
(2, '<li id="titulo">Visão</li>', 0),
(3, '<li id="titulo">Missão</li>', 0),
(4, '<li id="titulo">Valores</li>', 0),
(5, '<li id="titulo">SunSquare</li>', 0),
(6, '<li id="titulo">Objetivo</li>', 0),
(7, '<li id="titulo">Justificativa</li>', 0),
(8, '<li id="titulo">Usuários</li>', 0),
(9, '<li id="titulo">Especificações</li>', 0),
(10, '<li id="titulo">Diagramas de Casos de Uso</li>', 0),
(11, '<li id="titulo">Diagrama de Classes</li>', 0),
(12, '<li id="titulo1">Conclusão</li>', 0),
(100, '<li id="texto">Sun Square</li>', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitas`
--

CREATE TABLE IF NOT EXISTS `visitas` (
  `nome_vis` varchar(35) NOT NULL,
  `cep_vis` varchar(9) NOT NULL,
  `rua_vis` varchar(35) NOT NULL,
  `bairro_vis` varchar(35) NOT NULL,
  `numero_vis` varchar(8) NOT NULL,
  `telefone_vis` varchar(14) NOT NULL,
  `cidade_vis` varchar(35) NOT NULL,
  `email_vis` varchar(35) NOT NULL,
  `senha_vis` varchar(100) NOT NULL,
  `dt_nasc_vis` varchar(10) NOT NULL,
  `uf_vis` varchar(2) NOT NULL,
  `rg_vis` varchar(11) NOT NULL,
  `sexo_vis` varchar(9) NOT NULL,
  `complemento_vis` varchar(50) NOT NULL,
  `id_vis` int(4) NOT NULL AUTO_INCREMENT,
  `cpf_vis` varchar(11) NOT NULL,
  `nivel_vis` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_vis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `visitas`
--

INSERT INTO `visitas` (`nome_vis`, `cep_vis`, `rua_vis`, `bairro_vis`, `numero_vis`, `telefone_vis`, `cidade_vis`, `email_vis`, `senha_vis`, `dt_nasc_vis`, `uf_vis`, `rg_vis`, `sexo_vis`, `complemento_vis`, `id_vis`, `cpf_vis`, `nivel_vis`) VALUES
('Nicolas Yudji', '02368-000', 'Rua dos Tratores', 'Cachoeira', '14123', '(11)9631-0956', 'São Paulo', 'nicolas.yudji@hotmail.com', 'jeca', '16/08/1996', 'SP', '509051522', 'Masculino', 'Casa', 1, '57667544344', 1),
('Rodrigo Silva', '02215-001', 'Rua Maria Candida', 'Santana', '123', '(11)2994-9654', 'Sao paulo', 'rodrigo@sap.com.br', 'jeca', '05/05/1992', 'SP', '201426520', 'Masculino', 'Casa', 3, '01647135494', 2),
('Yudji', '02334-510', 'Av Maria Malha', 'Bairros dos Maracujas', '54', '(11)2225-4111', 'Sao Paulo', 'yudji@sap.com.br', 'jeca', '16/08/1996', 'SP', '50905152', 'Masculino', 'Casa1', 4, '42643518632', 1),
('Aline', '32280-240', 'Rio Paracatu', 'Riacho das Pedras', '2525', '(22)9944-4555', 'Contagem', 'aline@sap.com', 'jeca', '16/08/1992', 'MG', '50915114', 'Feminino', 'Casa1', 5, '28743527647', 1),
('Rogerio Alves', '02224-000', 'Antenor Navarro', 'Jardim Brasil', '12', '(11)2584-9506', 'São Paulo', 'Rogerio@visita.com', 'jeca', '23/12/1976', 'SP', '418757896', 'Masculino', '', 7, '28743527647', 1),
('Nicolas Yudji', '02368-000', 'Rua dos Tratores', 'Cachoeira', '14123', '(11)9631-0956', 'São Paulo', 'visita1@sap.com.br', 'jeca', '16/08/1996', 'SP', '509051522', 'Masculino', 'Casa', 8, '94281621326', 2),
('Mauricio Ricardo da Silva', '02154-000', 'Rua dos morangos', 'madalena', '145', '(11)2295-4454', 'são paulo', 'mauricio@sap.com.br', '123456', '11/11/1992', 'SP', '12.121.212-', 'Masculino', 'casa1', 9, '13232123321', 2);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atividade_detento`
--
ALTER TABLE `atividade_detento`
  ADD CONSTRAINT `id_ativ_fk` FOREIGN KEY (`id_ativ`) REFERENCES `atividade` (`id_ativ`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_det_fk` FOREIGN KEY (`id_det`) REFERENCES `detento` (`id_det`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
