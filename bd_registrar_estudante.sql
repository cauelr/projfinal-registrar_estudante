create database if not exists bd_registrar_estudante;
use bd_registrar_estudante;

create table if not exists Estudante(
id_estudante INT primary key not null auto_increment,
nome VARCHAR(45) not null,
cpf CHAR(14) not null,
tel CHAR(11) not null,
idade SMALLINT not null,
curso VARCHAR(45) not null,
email VARCHAR(45) not null
);