CREATE TABLE `cadastro` (
  `name` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `observacao` text NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(10) DEFAULT NULL,
  `provincia` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cep` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `raca` varchar(45) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `data_evento` int(11) NOT NULL,
  `endereço_evento` varchar(45) NOT NULL,
  `complemento_animal` varchar(10) DEFAULT NULL,
  `provincia_animalnew_table` varchar(20) NOT NULL,
  `cidade_animal` varchar(45) NOT NULL,
  `estado_animal` varchar(45) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `telefone_animal` int(11) NOT NULL,
  PRIMARY KEY (`name`)
)