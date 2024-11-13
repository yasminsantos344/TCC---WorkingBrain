/* Criação e uso do Banco de Dados */
create database DB_WorkingBrain;

drop database DB_WorkingBrain;

use DB_WorkingBrain;

/* Criação das tabelas*/
create table TB_ADM(
ID_ADM int auto_increment primary key,
Nome_ADM varchar (60),
Nascimento_ADM date,
Email_ADM varchar (40) unique,
Senha_ADM varchar (20),
Celular_ADM varchar (15),
Status_ADM char (1)
);

select * from TB_ADM;

create table TB_Aluno(
Matricula_Aluno int auto_increment primary key,
Hora_Matricula_Aluno datetime,
Nome_Aluno varchar (60),
Data_Nascimento_Aluno date,
CPF_Aluno varchar (20),
Email_Aluno varchar (40),
Senha_Aluno varchar (200),
Celular_Aluno varchar (15),
CEP_Aluno varchar (9),
Endereco_Aluno varchar (30),
Bairro_Aluno varchar (20),
Cidade_Aluno varchar (20),
UF_Aluno char (2),
Endereco_Numero_Aluno varchar (6),
Endereco_Complemento_Aluno varchar (20));

select * from TB_Aluno;

create table TB_Professor(
ID_Professor int auto_increment primary key,
Nome_Professor varchar (60),
Data_Nascimento_Professor date,
CPF_Professor varchar (20),
Email_Professor varchar (40),
Senha_Professor varchar (20),
Celular_Professor varchar (15),
CEP_Professor varchar (9),
Endereco_Professor varchar (30),
Bairro_Professor varchar (20),
Cidade_Professor varchar (20),
UF_Professor char (2),
Endereco_Numero_Professor varchar (6),
Endereco_Complemento_Professor varchar (20),
Data_Cadastro datetime);

select * from TB_Professor;

create table TB_Solicitar(
Nome_Professor varchar (60),
Data_Nascimento_Professor date,
CPF_Professor varchar (20),
Email_Professor varchar (40),
Senha_Professor varchar (20),
Celular_Professor varchar (15),
CEP_Professor varchar (9),
Endereco_Professor varchar (30),
Bairro_Professor varchar (20),
Cidade_Professor varchar (20),
UF_Professor char (2),
Endereco_Numero_Professor varchar (6),
Endereco_Complemento_Professor varchar (20),
Data_Solicitacao datetime);

select * from TB_Solicitar;

create table TB_Cronograma(
ID_Cronograma int auto_increment primary key,
Objetivo_Cronograma varchar (20),
Dias_Cronograma varchar (10),
Nivel_Cronograma varchar (20)
);

select * from TB_Cronograma;

create table TB_Materia(
ID_Materia int primary key auto_increment,
Nome_Materia varchar (30));

select * from TB_Materia;

create table TB_SolicitarAula(
ID_Solicitacao int primary key auto_increment,
Link_Aula varchar (500),
Assunto_Aula varchar (60),
ID_Materia int foreign key );

select * from TB_SolicitarAula;

create table TB_Aula(
ID_Aula int primary key auto_increment,
Link_Aula varchar (500),
Assunto_Aula varchar (60));

select * from TB_Aula;

create table TB_Diretriz(
ID_Diretriz int auto_increment primary key,
Diretriz text);

select * from TB_Diretriz;



