-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Gera��o: Abr 28, 2010 as 04:00 PM
-- Vers�o do Servidor: 5.0.51
-- Vers�o do PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `banco_contato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(10) NOT NULL auto_increment,
  `nome` varchar(100) default NULL,
  `email` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `tabela1` (`id`, `nome`, `email`, `cidade`, `mensagem`) VALUES
(1, 'Rom�rio Freitas', 'romairoaf1989@gmail.com', 'Fortaleza', 'Conexao com MySQL');

CREATE TABLE IF NOT EXISTS `` (

);

CREATE TABLE IF NOT EXISTS `` (

);

CREATE TABLE IF NOT EXISTS `` (

);

CREATE TABLE IF NOT EXISTS `` (

);