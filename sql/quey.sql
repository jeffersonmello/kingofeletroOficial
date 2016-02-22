use pristons_king;

create table musicas_home (
	guid integer not null auto_increment,
	titulo varchar(50),
	texto varchar(50),
	downloadlink varchar(100),
	nomearquivo varchar(100),
	musicalink varchar(500),
	primary key (guid)
);

create table usuario (
	guid integer not null auto_increment,
	usuario varchar(100) not null,
	senha varchar(100) not null,
	nivel TINYINT( 3 ) NOT NULL ,
	PRIMARY KEY (guid)
);

create table musicas_playlist (
	guid int not null auto_increment,
	arte_album varchar(255),
	titulo varchar(255),
	artista varchar(255),
	album varchar(255),
	linkplay varchar(255),
	linkdownload varchar(255),
	gostei int,
	ngostei int,
	primary key (guid)
);

create table radio (
	guid int not null auto_increment,
	embed varchar(255) not null,
	primary key (guid)
);
