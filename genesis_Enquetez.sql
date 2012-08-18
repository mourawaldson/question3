create database enquetez;
use enquetez;

create table Usuario (
	id int auto_increment primary key,
	nome varchar(100),
	email varchar(100),
	login varchar(60),
	senha varchar(60)
);

insert into usuario(nome, email, login, senha) values('Administrador','admin@localhost.com','root','32166');

create table Situacao (
  id int auto_increment primary key,
  nome varchar(50)
);

create table Enquete (
	id int auto_increment primary key,
  titulo varchar(100),
  pergunta varchar(200),
  dataIniVigencia date,
  dataFimVigencia date,
  idUsuario int,
  idSituacao int
);

create table Resposta (
  id int auto_increment primary key,
  texto text,
  quantidadeRespondida int,
  idEnquete int
);

create table UsuarioLogado(
  idUsuario int,
  dataHora dateTime,
  constraint fk_UsuarioLogado_idUsuario foreign key (idUsuario) references Usuario(id)
);