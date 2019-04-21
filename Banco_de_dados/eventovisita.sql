-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Abr-2019 às 22:53
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventovisita`
--
CREATE DATABASE IF NOT EXISTS `eventovisita` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `eventovisita`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(51) NOT NULL,
  `previa` text NOT NULL,
  `texto` text NOT NULL,
  `tipo` char(6) NOT NULL DEFAULT 'visita' COMMENT 'Variável que vai definir caso é um evento ou uma Visita Tecnica',
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `previa`, `texto`, `tipo`, `data`) VALUES
(1, '7 setembro de 2014', 'Desfile Cívico 7 setembro de 2014.', '<p class=\"modal-texto\">Os alunos participam do desfile cívico de 7 setembro de 2014.</p>', 'evento', '2014-09-07 09:00:00'),
(2, 'I SETAC 2014', '1ª Semana Tecnológica Acadêmica de Ciência da Computação.', '<p class=\"modal-texto\">1ª Semana Tecnológica Acadêmica de Ciência da Computação.</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações clique <a href=\"http://sh.utfpr.edu.br/setac/\" target=\"_blank\">aqui</a>.</p>', 'evento', '2014-10-05 06:00:00'),
(3, 'ExpoUT 2015', 'Apresentação dos trabalhos dos acadêmicos para a comunidade.  ', '<p class=\"modal-texto\">Apresentação dos trabalhos dos acadêmicos para a comunidade.  </p>', 'evento', '2015-09-10 12:00:00'),
(4, 'II SETAC 2015', '2ª Semana Tecnológica Acadêmica de Ciência da Computação.', '<p class=\"modal-texto\">2ª Semana Tecnológica Acadêmica de Ciência da Computação.</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações clique <a href=\"http://sh.utfpr.edu.br/setac/\" target=\"_blank\">aqui</a>.</p>', 'evento', '2015-10-14 09:00:00'),
(5, 'CACiC', 'Posse do Centro Acadêmico - CACiC', '<p class=\"modal-texto\">11 de Maio de 2016 foi realizada a assembeia com a finalidade de discutir a fundação do centro acadêmico do curso Bacharel em Ciência da Computação.</p>\r\n\r\n<p class=\"modal-texto\">Posse do Centro Acadêmico - CACiC</p>', 'evento', '2015-05-11 08:25:18'),
(6, 'Semana de Calouros 2016/2', 'Atividades da Semana de Calouros do 2º semestre de 2016.', '<p class=\"modal-texto\">Atividades da Semana de Calouros do 2º semestre de 2016.</p>\r\n\r\n<p class=\"modal-texto\">Sem informações adicionais. :( </p>', 'evento', '2016-08-04 09:35:38'),
(7, 'IV SETAC 2017', '4ª Semana Tecnológica Acadêmica de Ciência da Computação.', '<p class=\"modal-texto\">4ª Semana Tecnológica Acadêmica de Ciência da Computação.</p>\r\n\r\n<p class=\"modal-texto\">A abertura do evento ocorreu no dia 25 de setembro de 2017, com palestras e minicursos.</p>\r\n\r\n<p class=\"modal-texto\">Nos dias 26 e 27 de setembro de 2017 com minicursos, maratona de programação, desafio sumô de robô, palestras, posse da nova gestão do CACiC(Centro Acadêmico), seguido por atividades promovidas pelos novos membros e apresentação de trabalhos científicos dos estudantes de Ciência da Computação.</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações clique <a href=\"http://sh.utfpr.edu.br/setac/\" target=\"_blank\">aqui</a>.</p>', 'evento', '2017-09-14 09:00:00'),
(8, 'Latinoware 2017', '14º Congresso Latino-americano de Software Livre e Tecnologias Abertas.', '<p class=\"modal-texto\">14º Congresso Latino-americano de Software Livre e Tecnologias Abertas. Entre os dias 18 e 20 de outubro de 2017 no Parque Tecnológico Itaipu</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações clique <a href=\"https://2017.latinoware.org\" target=\"_blank\">aqui</a>.</p>', 'evento', '2017-10-19 13:26:27'),
(9, 'Maratona de Programação 2017', 'Maratona de Programação realizada pela Sociedade Brasileira de Computação 2017.', '<p class=\"modal-texto\">\r\n<span style=\"font-weight: bold;\">Parabéns Acadêmicos </span>– 6º lugar – Maratona de Programação - Guarapuava Acadêmicos do Curso de Bacharelado em Ciência da Computação da UTFPR, Câmpus Santa Helena ficam em 6º lugar na Maratona de Programação realizada pela Sociedade Brasileira de Computação em Guarapuava, entre as 20 equipes que competiam nesta cidade.\r\n</p>\r\n\r\n<p class=\"modal-texto\">O evento aconteceu no dia 09 de setembro de 2017 na Universidade Estadual do Centro-Oeste, em Guarapuava. Parabéns aos participantes \r\n<span style=\"font-weight: bold;\">Alecsander Johan Pontes de Andrade</span>, <span style=\"font-weight: bold;\">Felipe Carvalho Funck</span> e <span style=\"font-weight: bold;\">Rafael Boniolo</span>.\r\n</p>', 'evento', '2017-09-09 00:00:00'),
(10, 'ExpoUT 2016', 'Apresentação dos trabalhos dos acadêmicos para a comunidade.  ', '<p class=\"modal-texto\">Apresentação dos trabalhos dos acadêmicos para a comunidade.  </p>', 'evento', '2015-09-10 12:40:06'),
(11, 'III SETAC 2016', '3ª Semana Tecnológica Acadêmica de Ciência da Computação.', '<p class=\"modal-texto\">2ª Semana Tecnológica Acadêmica de Ciência da Computação.</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações clique <a href=\"http://sh.utfpr.edu.br/setac/\" target=\"_blank\">aqui</a>.</p>', 'evento', '2016-10-14 09:00:00'),
(12, 'Latinoware 2016', '13ª Conferência Latino-americana de Software Livre.', '<p class=\"modal-texto\">13ª Conferência Latino-americana de Software Livre. Entre os dias 19 e 21 de outubro de 2016 no Parque Tecnológico Itaipu</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações clique <a href=\"http://2016.latinoware.org\" target=\"_blank\">aqui</a>.</p>', 'evento', '2016-10-19 13:26:27'),
(13, 'Semana de Calouros 2017/1', 'Atividades da Semana de Calouros do 1º semestre de 2017.', '<p class=\"modal-texto\">Atividades da Semana de Calouros do 2º semestre de 2016.</p>\r\n\r\n<p class=\"modal-texto\">Fala do Diretor Geral do Câmpus com todos os alunos; Apresentação do Regulamento disciplinar do corpo discente, além de informações a respeito dos alunos com necessidades especiais.</p>', 'evento', '2017-03-16 08:23:38'),
(14, '1° Calourada Solidária 2017', 'Evento com o objetivo de fazer a integração dos alunos veteranos e calouros dos cursos de Ciências da Computação e Ciências Biológicas.', '<p class=\"modal-texto\">Evento organizado pelo projeto Integrando Conhecimento, de coordenação da professora Tatiane Tambarussi Thomaz e o protagonista estudantil Paulo Vitor Duarte de Souza, juntamente com o NUAPE(Núcleo de Acompanhamento Psicopedagógico e Assistência Estudantil) e os Centros acadêmicos dos dois cursos, fazendo a integração dos alunos veteranos e calouros dos cursos de Ciências da Computação e Ciências Biológicas.</p>\r\n\r\n<p class=\"modal-texto\">Com a arrecadação de alimentos para a doação a entidades carentes do município de Santa Helena.</p>\r\n', 'evento', '2017-03-16 13:30:20'),
(15, 'ExpoSH 2017', 'A festa comemora a emancipação do Município.', '<p class=\"modal-texto\">A festa comemora a emancipação do Município e acontece no Balneário Terra das Águas de Santa Helena, no Paraná. </p>\r\n\r\n<p class=\"modal-texto\">Realização nos dias 26, 27 e 28 de maio de 2017.</p>\r\n', 'evento', '2017-05-27 11:12:24'),
(16, 'Semana de Calouros 2017/2', 'Atividades da Semana de Calouros do 2º semestre de 2017.', '<p class=\"modal-texto\">Atividades da Semana de Calouros do 2º semestre de 2016.</p>\r\n\r\n<p class=\"modal-texto\">Apresentação de mimica para os calouros.</p>', 'evento', '2017-08-08 16:23:38'),
(17, 'ARDCD 2017/2', 'Apresentação do Regulamento Disciplinar do Corpo Discente par os calouros do 2º semestre de 2017.', '<p class=\"modal-texto\">Atividades da Semana de Calouros do 2º semestre de 2016.</p>\r\n\r\n<p class=\"modal-texto\">Fala do Diretor Geral do Câmpus com todos os alunos; Apresentação do Regulamento disciplinar do corpo discente, além de informações a respeito dos alunos com necessidades especiais.</p>', 'evento', '2017-08-09 15:23:38'),
(18, '7 setembro de 2017', 'Desfile Cívico 7 setembro de 2017.', '<p class=\"modal-texto\">Os alunos participam do desfile cívico de 7 setembro de 2017.</p>', 'evento', '2017-09-07 09:00:00'),
(22, 'ExpoUT 2017', 'evento tem como objetivo apresentar os trabalhos realizados.  ', '<p class=\"modal-texto\">o Câmpus da UTFPR de Santa Helena elaborou mais uma edição da ExpoUT. O evento tem como objetivo apresentar os trabalhos realizados pelos alunos e servidores do Câmpus a comunidade interna e externa.  </p>\r\n\r\n<p class=\"modal-texto\">Realizado nos dias 08 e 09 de novembro.</p>', 'evento', '2017-11-08 12:00:00'),
(23, 'II Seminário de Boas Práticas Estudantil 2017', '', '<p class=\"modal-texto\">realizado nos dias 13 e 14 de novembro de 2017 no câmpus Pato Branco.</p>\r\n\r\n<p class=\"modal-texto\">Para ter acesso aos anais clique <a href=\"image\\evento\\23\\anais.pdf\" target=\"_blank\">aqui</a>.</p>', 'evento', '2017-11-13 07:00:00'),
(24, '1ª Technovação e 10ª Innovacities 2018', 'Maior evento de inovação tecnológica da região.', '<p class=\"modal-texto\">Maior evento de inovação tecnológica do oeste do Paraná realizado na cidade de Cascavel/PR.</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações clique <a href=\"https://doity.com.br/technovacaoinnovacities\" target=\"_blank\">aqui</a>.</p>', 'evento', '2018-05-19 14:18:40'),
(25, 'ExpoSH 2018', 'A festa comemora a emancipação do Município.', '<p class=\"modal-texto\">A participação do Curso de Bacharelado em Ciência da Computação, câmpus Santa Helena, envolve a exposição de projetos desenvolvidos no curso. </p>\r\n\r\n<p class=\"modal-texto\">Realização nos dias 26, 27 e 28 de maio de 2018.</p>\r\n', 'evento', '2018-05-27 11:12:24'),
(26, 'V SETAC 2018', '5ª Semana Tecnológica Acadêmica de Ciência da Computação.', '<p class=\"modal-texto\">5ª Semana Tecnológica Acadêmica de Ciência da Computação.</p>\r\n\r\n<p class=\"modal-texto\">A abertura do evento ocorreu no dia 27 de agosto de 2017, com palestras e oficinas.</p>\r\n\r\n<p class=\"modal-texto\">Nos dias 28 e 29 com a maratona de programação e apresentação de trabalhos científicos dos estudantes de Ciência da Computação.</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações clique <a href=\"http://sh.utfpr.edu.br/setac/\" target=\"_blank\">aqui</a>.</p>', 'evento', '2018-09-27 09:00:00'),
(27, 'Latinoware 2018', '15º Congresso Latino-americano de Software Livre e Tecnologias Abertas.', '<p class=\"modal-texto\">15º Congresso Latino-americano de Software Livre e Tecnologias Abertas. Entre os dias 17 e 19 de outubro de 2018 | Centro de Convenções de Foz do Iguaçu - CECONFI.</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações clique <a href=\"https://latinoware.org\" target=\"_blank\">aqui</a>.</p>', 'evento', '2018-10-17 13:26:27'),
(28, 'KDM Teleinformática 2016', 'A KDM Informática presta serviços como venda de utensílios para computadores.', '<p class=\"modal-texto\">A KDM Informática presta serviços como venda de utensílios para computadores, roteadores, teclados, cartuxos para impressoras, além de formatação de computadores e todo o suporte necessário para seu computador e rede de internet.</p>\r\n\r\n<p class=\"modal-texto\">\r\n<span stykle=\"font-weight: bold;\">Objetivos da Visita Técnica: </span>Apresentação de um ambiente real de comunicação; Conhecimento do que é necessário para ter um provedor de comunicação em Internet; Verificar e constatar como funciona toda a miscelânea de comunicação de dados em forma distribuída; Conhecer os principais softwares que envolvem gerência, monitoramento e controle da Internet; Conhecer os principais hardwares de mercado utilizado para ser um provedor de Internet.\r\n</p>\r\n\r\n<p class=\"modal-texto\">Esta visita é um complemento dos conteúdos da disciplina de Redes de Computadores 1 (Prof.º Euclides Peres Farias Junior).</p>\r\n\r\n<p class=\"modal-texto\">Realizado em 16 de Junho de 2016</p>\r\n\r\n', 'visita', '2016-06-16 09:00:00'),
(29, 'SWA e DigitalDoc 2016', 'Empresas com foco no desenvolvimento de sistemas, situadas na cidade de Medianeira-PR.', '<p class=\"modal-texto\">Empresas com foco no desenvolvimento de sistemas, situadas na cidade de Medianeira-PR.</p>\r\n\r\n<p class=\"modal-texto\">\r\n<span stykle=\"font-weight: bold;\">Objetivos da Visita Técnica: </span>Permitir que o aluno possa conhecer uma fábrica de software e questionar tecnologias emergentes utilizadas na área. Possibilita o contato com um profissional da área que estará à disposição para esclarecer dúvidas sobre o mercado de software confrontando com o conhecimento apresentado em sala de aula em disciplinas específicas do curso.\r\n</p>\r\n\r\n<p class=\"modal-texto\">A visita técnica é um complemento dos conteúdos das disciplinas de Linguagem de Programação Objeto Orientada, Paradigmas de Linguagens de Programação e Engenharia de Requisitos (Prof.º Giuvane Conti; Prof.º Davi Marcondes Rocha).</p>\r\n\r\n<p class=\"modal-texto\">Realizado em 30 de Setembro de 2016</p>\r\n', 'visita', '2016-09-30 09:00:00'),
(30, 'KDM Teleinformática 2017', 'A KDM Informática presta serviços como venda de utensílios para computadores.', '<p class=\"modal-texto\">A KDM Informática presta serviços como venda de utensílios para computadores, roteadores, teclados, cartuxos para impressoras, além de formatação de computadores e todo o suporte necessário para seu computador e rede de internet.</p>\r\n\r\n<p class=\"modal-texto\">\r\n<span stykle=\"font-weight: bold;\">Objetivos da Visita Técnica: </span>Apresentação de um ambiente real de comunicação; Conhecimento do que é necessário para ter um provedor de comunicação em Internet; Verificar e constatar como funciona toda a miscelânea de comunicação de dados em forma distribuída; Conhecer os principais softwares que envolvem gerência, monitoramento e controle da Internet; Conhecer os principais hardwares de mercado utilizado para ser um provedor de Internet.\r\n</p>\r\n\r\n<p class=\"modal-texto\">Esta visita é um complemento dos conteúdos da disciplina de Redes de Computadores 1 (Prof.º Euclides Peres Farias Junior).</p>\r\n\r\n<p class=\"modal-texto\">Realizado em 11 de Abril de 2017</p>\r\n\r\n', 'visita', '2017-04-11 09:00:00'),
(31, 'Seta Digital e Data Coper 2017', 'Empresas com foco no desenvolvimento de sistemas e empreendedorismo, situadas na cidade de Cascavel-PR.', '<p class=\"modal-texto\">Empresas com foco no desenvolvimento de sistemas e empreendedorismo, situadas na cidade de Cascavel-PR.</p>\r\n\r\n<p class=\"modal-texto\"><span stykle=\"font-weight: bold;\">Objetivos da Visita Técnica: </span> Sem informação.\r\n</p>\r\n\r\n<p class=\"modal-texto\">realizado em 02 de Maio de 2017</p>\r\n', 'visita', '2017-05-02 09:00:00'),
(32, 'Comunidade Quilombola Negra Apepú 2017', 'A comunidade hoje é formada por cinco famílias, cerca de 40 pessoas, que vivem da agricultura de subsistência.', '<p class=\"modal-texto\">A comunidade Quilombola APEPU, nome em referência a um tipo de laranja, abundante na região, está localizada na área rural do município de São Miguel do Iguaçu, ao lado do Parque Nacional. É uma das 86 comunidades quilombolas reconhecida como descendentes de escravos no estado do Paraná. Como remanescentes de quilombo, a comunidade mantém as tradições como cultivo medicina natural, artesanato, folclore e agricultura familiar.</p>\r\n\r\n<p class=\"modal-texto\"> A comunidade hoje é formada por cinco famílias, cerca de 40 pessoas, que vivem da agricultura de subsistência partilhada em pequenas roças de milho, mandioca e horta comunitária (Para mais informações clique <a href=\"http://www.portalturismobrasil.com.br/atracao/6545/Comunidade-Quilombola-APEPU\" target=\"_blank\">aqui</a>).</p>\r\n\r\n<p class=\"modal-texto\"><span stykle=\"font-weight: bold;\">Objetivos da Visita Técnica: </span>Conhecer a Comunidade Quilombola Apepú como complemento da disciplina de História e Cultura Afro-brasileira (Prof.ª Maristela Rosso Walker).</p>\r\n\r\n\r\n<p class=\"modal-texto\">Realizado em 22 de Maio de 2017</p>\r\n', 'visita', '2017-05-22 09:00:00'),
(33, 'Lar Cooperativa Agroindustrial  2017', 'Consolidada como a terceira maior cooperativa do Paraná, a Cooperativa Agroindustrial Lar tem seu Centro Administrativo localizado em Medianeira-PR.', '<p class=\"modal-texto\">Consolidada como a terceira maior cooperativa do Paraná, a Cooperativa Agroindustrial Lar tem seu Centro Administrativo localizado em Medianeira-PR. Com mais de 9 mil associados e 6 mil funcionários, a área de atuação da Lar abrange o Paraná, Santa Catarina, Mato Grosso do Sul e Paraguai.</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações sobre a coperativa clique <a href=\"http://www.lar.ind.br\" target=\"_blank\">aqui</a>.</p>\r\n\r\n<p class=\"modal-texto\">\r\n<span stykle=\"font-weight: bold;\">Objetivos da Visita Técnica: </span>Conhecer a parte administrativa da Lar Cooperativa Agroindustrial como complemento da disciplina de Relações Humanas e Liderança (Prof.ª Maristela Rosso Walker); - Conhecer a infraestrutura da Lar Cooperativa Agroindustrial como complemento das disciplinas de Redes de Computadores 1 e Redes de Computadores 2 (Prof.º Euclides Peres Farias Junior).</p>\r\n\r\n<p class=\"modal-texto\">Realizado em 23 de Maio de 2017</p>', 'visita', '2017-05-23 09:00:00'),
(34, 'Terra Indígena Tekoha Itamarã e Tekoha Añetete 2018', 'Decorrente da comemoração da Semana Cultural Indígena Guarani.', '<p class=\"modal-texto\">Decorrente da comemoração da Semana Cultural Indígena Guarani, a visita á Terra Indígena Tekoha Itamarã e Tekoha Añetete em Diamante do Oeste - PR.</p>\r\n\r\n<p class=\"modal-texto\">\r\n<span stykle=\"font-weight: bold;\">Objetivo Visita Técnica: </span>Sem informação.</p>\r\n\r\n<p class=\"modal-texto\">Realizado em 18 de Abril de 2018</p>', 'visita', '2018-04-18 09:00:00'),
(35, '7 setembro de 2016', 'Desfile Cívico 7 setembro de 2016.', '<p class=\"modal-texto\">Os alunos participam do desfile cívico de 7 setembro de 2016.</p>', 'evento', '2016-09-07 09:00:00'),
(36, 'ExpoUT 2018', 'Apresentação dos trabalhos dos acadêmicos para a comunidade.\r\n\r\n', '<p class=\"modal-texto\">Apresentação dos trabalhos dos acadêmicos para a comunidade.</p>\r\n\r\n<p class=\"modal-texto\">Parabéns a todos que se envolveram, se dedicaram e fizeram com carinho e dedicação oque alguns podem entender como apenas trabalho, mas a olhos vistos, transbordou esmero e capricho em todo tempo! Obrigada comissão organizadora da ExpoUT por acreditar e fazer acontecer e obrigada comissão acadêmica de logística. - <a href=\"#\">By Suzan Kelly Borges Piovesan</a></p>', 'evento', '2018-11-22 12:00:00'),
(37, 'Wealth Systems 2018', 'Vivenciar na prática o cotidiano de uma empresa na área da Tecnologia da Informação.', '<p class=\"modal-texto\">Grande empresa na área de TI implantada em Cascavel a 16 anos, a Wealth Systems.</p>\r\n\r\n<p class=\"modal-texto\">Para mais informações sobre a Wealth Systems clique <a href=\"http://www.wssim.com.br/default.aspx\" target=\"_blank\">aqui</a>.</p>\r\n\r\n<p class=\"modal-texto\">\r\n<span stykle=\"font-weight: bold;\">Objetivos da Visita Técnica: </span>Vivenciar na prática o cotidiano de uma empresa na área da Tecnologia da Informação. (Prof.ª Suzan Kelly Borges Piovesan e Profº Anderson Brilhador).</p>\r\n\r\n<p class=\"modal-texto\">Realizado em 23 de Maio de 2017</p>', 'visita', '2018-10-23 09:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `nome` varchar(10) NOT NULL DEFAULT '',
  `extensao` char(4) NOT NULL DEFAULT 'jpg',
  `descricao` varchar(50) DEFAULT NULL,
  `evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `nome`, `extensao`, `descricao`, `evento`) VALUES
(1, '1', 'jpg', 'Turma em frente da KDM', 28),
(2, '2', 'jpg', 'Turma em frente da KDM', 28),
(3, '1', 'jpg', 'Palestrantes', 33),
(4, '2', 'jpg', 'Palestrante', 33),
(5, '3', 'jpg', 'Turma na Palestra', 33),
(6, '4', 'jpg', 'Palestra', 33),
(7, '5', 'jpg', 'Turma', 33),
(8, '6', 'jpg', 'Turma vendo o Servidor', 33),
(9, '7', 'jpg', 'Turma', 33),
(10, '8', 'jpg', 'Professor e o Servidor', 33),
(11, '1', 'jpg', 'Entrada da Comunidade', 32),
(12, '2', 'jpg', 'Entrada da Comunidade', 32),
(13, '3', 'jpg', 'Orta da Comunidade', 32),
(14, '4', 'jpg', 'Orta da Comunidade', 32),
(15, '5', 'jpg', 'Pate Papo com o pessoal', 32),
(16, '6', 'jpg', 'Pate Papo com o pessoal', 32),
(17, '7', 'jpg', 'Pate Papo com o pessoal', 32),
(18, '1', 'jpg', 'Turma em frente da KDM', 30),
(19, '2', 'jpg', 'Provedor de internet 1', 30),
(20, '3', 'jpg', 'Provedor de internet 2', 30),
(21, '4', 'jpg', 'Provedor de internet 3', 30),
(50, '1', 'jpg', 'Turma em frente da DigitalDoc', 29),
(51, '2', 'jpg', 'Bate pago', 29),
(52, '3', 'jpg', 'Bate pago', 29),
(53, '4', 'jpg', 'Boneco documentação', 29),
(54, '5', 'jpg', 'Bate pago', 29),
(55, '6', 'jpg', 'Turma', 29),
(56, '7', 'jpg', 'Bate Papo com o pessoal', 29),
(57, '1', 'jpg', 'No busão', 34),
(58, '2', 'jpg', 'Chamada', 34),
(59, '1', 'jpg', 'Acadêmicos no Desfile', 1),
(60, '2', 'jpg', 'Acadêmicos no Desfile', 1),
(61, '3', 'jpg', 'Acadêmicos no Desfile', 1),
(62, '4', 'jpg', 'Acadêmicos no Desfile', 1),
(63, '1', 'jpg', NULL, 2),
(64, '2', 'jpg', NULL, 2),
(65, '3', 'jpg', NULL, 2),
(66, '4', 'jpg', NULL, 2),
(67, '5', 'jpg', NULL, 2),
(68, '6', 'jpg', NULL, 2),
(69, '7', 'jpg', NULL, 2),
(70, '8', 'jpg', NULL, 2),
(71, '1', 'jpg', NULL, 3),
(72, '2', 'jpg', NULL, 3),
(73, '3', 'jpg', NULL, 3),
(74, '4', 'jpg', NULL, 3),
(75, '5', 'jpg', NULL, 3),
(76, '6', 'jpg', NULL, 3),
(77, '7', 'jpg', NULL, 3),
(78, '8', 'jpg', NULL, 3),
(79, '9', 'jpg', NULL, 3),
(80, '10', 'jpg', NULL, 3),
(81, '11', 'jpg', NULL, 3),
(82, '12', 'jpg', NULL, 3),
(83, '1', 'jpg', NULL, 4),
(84, '2', 'jpg', NULL, 4),
(85, '3', 'jpg', NULL, 4),
(86, '4', 'jpg', NULL, 4),
(87, '5', 'jpg', NULL, 4),
(88, '6', 'jpg', NULL, 4),
(89, '7', 'jpg', NULL, 4),
(90, '8', 'jpg', NULL, 4),
(91, '1', 'jpg', NULL, 5),
(92, '2', 'png', NULL, 5),
(93, '1', 'jpg', NULL, 7),
(94, '2', 'jpg', NULL, 7),
(95, '3', 'jpg', NULL, 7),
(96, '4', 'jpg', NULL, 7),
(97, '5', 'jpg', NULL, 7),
(98, '6', 'jpg', NULL, 7),
(99, '7', 'jpg', NULL, 7),
(100, '8', 'jpg', NULL, 7),
(101, '9', 'jpg', NULL, 7),
(102, '10', 'jpg', NULL, 7),
(103, '11', 'jpg', NULL, 7),
(104, '12', 'jpg', NULL, 7),
(105, '1', 'jpg', NULL, 8),
(106, '2', 'jpg', NULL, 8),
(107, '3', 'jpg', NULL, 8),
(108, '4', 'jpg', NULL, 8),
(109, '5', 'jpg', NULL, 8),
(110, '6', 'jpg', NULL, 8),
(111, '7', 'jpg', NULL, 8),
(112, '8', 'jpg', NULL, 8),
(113, '9', 'jpg', NULL, 8),
(114, '1', 'jpg', NULL, 9),
(115, '2', 'jpg', NULL, 9),
(116, '1', 'jpg', NULL, 10),
(117, '2', 'jpg', NULL, 10),
(118, '3', 'jpg', NULL, 10),
(119, '4', 'jpg', NULL, 10),
(120, '5', 'jpg', NULL, 10),
(121, '6', 'jpg', NULL, 10),
(122, '7', 'jpg', NULL, 10),
(123, '8', 'jpg', NULL, 10),
(124, '9', 'jpg', NULL, 10),
(125, '10', 'jpg', NULL, 10),
(126, '11', 'jpg', NULL, 10),
(127, '12', 'jpg', NULL, 10),
(128, '1', 'jpg', NULL, 11),
(129, '2', 'jpg', NULL, 11),
(130, '3', 'jpg', NULL, 11),
(131, '4', 'jpg', NULL, 11),
(132, '5', 'jpg', NULL, 11),
(133, '6', 'jpg', NULL, 11),
(134, '7', 'jpg', NULL, 11),
(135, '8', 'jpg', NULL, 11),
(136, '9', 'jpg', NULL, 11),
(137, '10', 'jpg', NULL, 11),
(138, '11', 'jpg', NULL, 11),
(139, '12', 'jpg', NULL, 11),
(140, '1', 'jpg', NULL, 12),
(141, '2', 'jpg', NULL, 12),
(142, '3', 'jpg', NULL, 12),
(143, '1', 'jpg', NULL, 13),
(144, '2', 'jpg', NULL, 13),
(145, '3', 'jpg', NULL, 13),
(146, '4', 'jpg', NULL, 13),
(147, '5', 'jpg', NULL, 13),
(148, '6', 'jpg', NULL, 13),
(149, '7', 'jpg', NULL, 13),
(150, '8', 'jpg', NULL, 13),
(151, '9', 'jpg', NULL, 13),
(152, '10', 'jpg', NULL, 13),
(153, '11', 'jpg', NULL, 13),
(154, '12', 'jpg', NULL, 13),
(155, '1', 'jpg', NULL, 14),
(156, '2', 'jpg', NULL, 14),
(157, '3', 'jpg', NULL, 14),
(158, '4', 'jpg', NULL, 14),
(159, '5', 'jpg', NULL, 14),
(160, '6', 'jpg', NULL, 14),
(161, '7', 'jpg', NULL, 14),
(162, '8', 'jpg', NULL, 14),
(163, '9', 'jpg', NULL, 14),
(164, '10', 'jpg', NULL, 14),
(165, '11', 'jpg', NULL, 14),
(166, '12', 'jpg', NULL, 14),
(167, '13', 'jpg', NULL, 14),
(168, '14', 'jpg', NULL, 14),
(169, '15', 'jpg', NULL, 14),
(170, '16', 'jpg', NULL, 14),
(171, '17', 'jpg', NULL, 14),
(172, '18', 'jpg', NULL, 14),
(173, '19', 'jpg', NULL, 14),
(174, '20', 'jpg', NULL, 14),
(175, '21', 'jpg', NULL, 14),
(176, '22', 'jpg', NULL, 14),
(177, '1', 'jpg', NULL, 15),
(178, '2', 'jpg', NULL, 15),
(179, '3', 'jpg', NULL, 15),
(180, '4', 'jpg', NULL, 15),
(181, '1', 'jpg', NULL, 16),
(182, '2', 'jpg', NULL, 16),
(183, '3', 'jpg', NULL, 16),
(184, '4', 'jpg', NULL, 16),
(185, '5', 'jpg', NULL, 16),
(186, '6', 'jpg', NULL, 16),
(187, '7', 'jpg', NULL, 16),
(188, '8', 'jpg', NULL, 16),
(189, '9', 'jpg', NULL, 16),
(190, '1', 'jpg', NULL, 17),
(191, '2', 'jpg', NULL, 17),
(192, '3', 'jpg', NULL, 17),
(193, '4', 'jpg', NULL, 17),
(194, '5', 'jpg', NULL, 17),
(195, '6', 'jpg', NULL, 17),
(196, '7', 'jpg', NULL, 17),
(197, '8', 'jpg', NULL, 17),
(198, '9', 'jpg', NULL, 17),
(199, '10', 'jpg', NULL, 17),
(200, '11', 'jpg', NULL, 17),
(201, '12', 'jpg', NULL, 17),
(202, '1', 'jpg', NULL, 18),
(203, '2', 'jpg', NULL, 18),
(204, '3', 'jpg', NULL, 18),
(205, '4', 'jpg', NULL, 18),
(206, '1', 'jpg', NULL, 22),
(207, '2', 'jpg', NULL, 22),
(208, '3', 'jpg', NULL, 22),
(209, '4', 'jpg', NULL, 22),
(210, '5', 'jpg', NULL, 22),
(211, '6', 'jpg', NULL, 22),
(212, '7', 'jpg', NULL, 22),
(213, '8', 'jpg', NULL, 22),
(214, '9', 'jpg', NULL, 22),
(215, '10', 'jpg', NULL, 22),
(216, '11', 'jpg', NULL, 22),
(217, '12', 'jpg', NULL, 22),
(218, '1', 'PNG', NULL, 23),
(219, '1', 'jpg', NULL, 24),
(220, '2', 'jpg', NULL, 24),
(221, '3', 'jpg', NULL, 24),
(222, '1', 'jpg', NULL, 25),
(223, '2', 'jpg', NULL, 25),
(224, '3', 'jpg', NULL, 25),
(225, '4', 'jpg', NULL, 25),
(226, '5', 'jpg', NULL, 25),
(227, '6', 'jpg', NULL, 25),
(228, '7', 'jpg', NULL, 25),
(229, '8', 'jpg', NULL, 25),
(230, '9', 'jpg', NULL, 25),
(231, '1', 'jpg', NULL, 26),
(232, '2', 'jpg', NULL, 26),
(233, '3', 'jpg', NULL, 26),
(234, '4', 'jpg', NULL, 26),
(235, '5', 'jpg', NULL, 26),
(236, '6', 'jpg', NULL, 26),
(237, '7', 'jpg', NULL, 26),
(238, '8', 'jpg', NULL, 26),
(239, '9', 'jpg', NULL, 26),
(240, '10', 'jpg', NULL, 26),
(241, '11', 'jpg', NULL, 26),
(242, '12', 'jpg', NULL, 26),
(243, '13', 'jpg', NULL, 26),
(244, '1', 'jpg', NULL, 27),
(245, '2', 'jpg', NULL, 27),
(246, '1', 'jpg', NULL, 35),
(247, '2', 'jpg', NULL, 35),
(248, '3', 'jpg', NULL, 35),
(249, '4', 'jpg', NULL, 35),
(250, '5', 'jpg', NULL, 35),
(251, '1', 'jpg', NULL, 36),
(252, '2', 'jpg', NULL, 36),
(253, '3', 'jpg', NULL, 36),
(254, '4', 'jpg', NULL, 36),
(255, '5', 'jpg', NULL, 36),
(256, '6', 'jpg', NULL, 36),
(257, '7', 'jpg', NULL, 36),
(258, '8', 'jpg', NULL, 36),
(259, '9', 'jpg', NULL, 36),
(260, '10', 'jpg', NULL, 36),
(261, '11', 'jpg', NULL, 36),
(262, '12', 'jpg', NULL, 36),
(263, '13', 'jpg', NULL, 36),
(264, '14', 'jpg', NULL, 36),
(265, '15', 'jpg', NULL, 36),
(266, '16', 'jpg', NULL, 36),
(267, '17', 'jpg', NULL, 36),
(268, '18', 'jpg', NULL, 36),
(269, '1', 'jpg', NULL, 37),
(270, '19', 'jpeg', NULL, 36),
(271, '20', 'jpeg', NULL, 36),
(272, '21', 'jpeg', NULL, 36),
(273, '22', 'jpeg', NULL, 36),
(274, '23', 'jpeg', NULL, 36),
(275, '24', 'jpeg', NULL, 36),
(276, '25', 'jpeg', NULL, 36),
(277, '26', 'jpeg', NULL, 36),
(278, '27', 'jpeg', NULL, 36),
(279, '28', 'jpeg', NULL, 36),
(280, '29', 'jpeg', NULL, 36),
(281, '30', 'jpeg', NULL, 36),
(282, '31', 'jpeg', NULL, 36),
(283, '32', 'jpeg', NULL, 36),
(284, '33', 'jpeg', NULL, 36),
(285, '34', 'mp4', NULL, 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evento` (`evento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`evento`) REFERENCES `eventos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
