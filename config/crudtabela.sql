
--
-- Banco de dados: `crudtabela`
--
   CREATE DATABASE crudtabela; 
-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--



CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `sobrenome` varchar(220) NOT NULL,
  `data` date NOT NULL,
  `foto` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;