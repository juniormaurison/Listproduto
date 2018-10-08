# Listproduto

Esse é o README da API de listagem de produtos, teste da AMMO.

#Tecnologias utilizadas

* PHP 
* Bootstrap v3.3.7
* JQuery 
* HTML
* MySQL

#Instalação

* Instale o xampp versão 7.2.10, com sua configuração padrão
* Descarregue todos os arquivos no caminho: 'Disco Local'> xampp > htdocs 
* Instale o SQLyog ou um gerenciador de BD de seu gosto

#Utilização

* O campo de busca de produtos é 'automatico', é necessário digitar no mínimo 3 caracteres e sua busca acontece automaticamente após 3 segundos do ultimo caracter digitado.
* A quantidade de itens por página funciona com onChange


#Estrutura do Banco de Dados

CREATE TABLE `produtogeral` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeproduto` varchar(255) NOT NULL,
  `imgproduto1` varchar(255) NOT NULL,
  `imgproduto2` varchar(255) NOT NULL,
  `imgproduto3` varchar(255) NOT NULL,
  `precoproduto` decimal(10,2) NOT NULL,
  `descricaoproduto` varchar(255) DEFAULT NULL,
  `tipo` int(1) NOT NULL,
  `precodesconto` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

insert  into `produtogeral`(`idproduto`,`nomeproduto`,`imgproduto1`,`imgproduto2`,`imgproduto3`,`precoproduto`,`descricaoproduto`,`tipo`,`precodesconto`) values (1,'Kit cama 210 fios','prod1.jpg','prod2.jpg','prod3.jpg','350.00','Classic',1,'298.00')
