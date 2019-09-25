create database estacionamento;
use estacionamento;

create table statusVaga(
idStatus int not null auto_increment primary key,
situacao varchar(40),
bolsituacao int
);