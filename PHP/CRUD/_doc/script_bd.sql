create database N8_MiniProjeto;
use n8_miniprojeto;

create table Usuario
(
	id_Usuario int not null auto_increment primary key,
	nome_Usuario varchar(50) not null ,
	nascimento_Usuario datetime not null ,
	cadastro_Usuario timestamp not null ,
	usuario_Usuario varchar(50) not null  unique,
	senha_Usuario varchar(50) not null ,
	img_Usuario longblob not null,
	obs_Usuario varchar(255) null,
	status_Usuario varchar(30) not null
)

select * from usuario