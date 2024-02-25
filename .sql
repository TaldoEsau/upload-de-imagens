/*criação do banco*/
create database sislogin;

/*criação da tabela*/
create table usuarios(
    id serial primary key,
    nome varchar(50),
    email varchar(50),
    usuario varchar(20),
    senha varchar(20),
    tipo char(1),
    dataa date  
);

/*inserção dos dados da tabela*/
insert into usuarios(id,nome,email,usuario,senha,tipo,dataa) values (null,'','','','',1,'') /* aqui vcs colocam as informações que bem desejar