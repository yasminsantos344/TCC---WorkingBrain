create database DB_WorkingBrain;

use DB_WorkingBrain;

create table TB_ADM(
ID_ADM int (6) auto_increment primary key,
Nome_ADM varchar (60) not null,
Email_ADM varchar (40) not null unique,
Senha_ADM varchar (20) not null,
Celular_ADM varchar (15) not null,
Status_ADM char (1) not null
);

select * from TB_ADM;

create table TB_Aluno(
Matricula_Aluno int auto_increment primary key,
Hora_Matricula_Aluno datetime,
Nome_Aluno varchar (60) not null,
Data_Nascimento_Aluno date not null,
CPF_Aluno int unique not null,
Email_Aluno varchar (40) not null,
Senha_Aluno varchar (20) not null,
Celular_Aluno varchar (15) not null,
CEP_Aluno varchar (9) not null,
Endereco_Numero_Aluno varchar (6) not null,
Endereco_Complemento_Aluno varchar (20));

select * from TB_Aluno;

create table TB_Professor(
ID_Professor int auto_increment primary key,
Nome_Professor varchar (60) not null,
Data_Nascimento_Professor date not null,
CPF_Professor int unique not null,
Email_Professor varchar (40) not null,
Senha_Professor varchar (20) not null,
Celular_Professor varchar (15) not null,
CEP_Professor varchar (9) not null,
Endereco_Numero_Professor varchar (6) not null,
Endereco_Complemento_Professor varchar (20));

select * from TB_Professor;