create database projeto_php;

create table projeto_php.tableLogin(
	id int auto_increment not null primary key,
	email varchar(220) not null,
	password varchar(32) not null
);

insert into projeto_php.tableLogin(email, password) values ('unifael@gmail.com', 'unifael');