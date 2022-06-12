CREATE TABLE `colaboradores` 
(
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `idade` int(3) NOT NULL,
  `email` varchar(60) NOT NULL,
  `filial` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `colaboradores` (`id`, `nome`, `idade`, `email`, `filial`) VALUES
(1, 'Lucas Ferreira', '30', 'lucas.ferreira@satc.edu.br', 'Criciúma'),
(2, 'João Carlos', '21', 'genérico@gmail.com', 'Morro da Fumaça'),
(3, 'Zezinho', '56', 'zezin@outlook.com', 'Florianópolis');


ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;