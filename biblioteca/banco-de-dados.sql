CREATE TABLE atendente (
  id_atendente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  biblioteca_id_biblioteca INTEGER UNSIGNED NOT NULL,
  nome_atendente VARCHAR(255) NULL,
  cpf_atendente VARCHAR(14) NULL,
  PRIMARY KEY(id_atendente),
  INDEX atendente_FKIndex1(biblioteca_id_biblioteca)
);

CREATE TABLE biblioteca (
  id_biblioteca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_biblioteca VARCHAR(255) NULL,
  end_biblioteca VARCHAR(255) NULL,
  PRIMARY KEY(id_biblioteca)
);

CREATE TABLE categoria (
  id_categoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(20) NULL,
  PRIMARY KEY(id_categoria)
);

CREATE TABLE emprestimo (
  usuario_id_usuario INTEGER UNSIGNED NOT NULL,
  livro_id_livro INTEGER UNSIGNED NOT NULL,
  atendente_id_atendente INTEGER UNSIGNED NOT NULL,
  data_emprestimo DATE NULL,
  devolucao_emprestimo DATE NULL,
  PRIMARY KEY(usuario_id_usuario, livro_id_livro),
  INDEX usuario_has_livro_FKIndex1(usuario_id_usuario),
  INDEX usuario_has_livro_FKIndex2(livro_id_livro),
  INDEX emprestimo_FKIndex3(atendente_id_atendente)
);

CREATE TABLE livro (
  id_livro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoria_id_categoria INTEGER UNSIGNED NOT NULL,
  titulo_livro VARCHAR(255) NULL,
  autor_livro VARCHAR(255) NULL,
  editora_livro VARCHAR(45) NULL,
  edicao_livro CHAR(3) NULL,
  localidade_livro VARCHAR(45) NULL,
  ano_livro YEAR NULL,
  PRIMARY KEY(id_livro),
  INDEX livro_FKIndex1(categoria_id_categoria)
);

CREATE TABLE usuario (
  id_usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_usuario VARCHAR(255) NULL,
  cpf_usuario VARCHAR(14) NULL,
  end_usuario VARCHAR(255) NULL,
  email_usuario VARCHAR(255) NULL,
  fone_usuario VARCHAR(20) NULL,
  dt_nasc_usuario DATE NULL,
  genero_usuario CHAR(1) NULL,
  PRIMARY KEY(id_usuario)
);


