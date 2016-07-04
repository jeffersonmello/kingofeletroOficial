use pristons_king;

create table musicas_home (
	guid integer not null auto_increment,
	titulo varchar(200),
	texto varchar(500),
	downloadlink varchar(800),
	nomearquivo varchar(100),
	embed varchar(500),
	curtir integer default 0,
	ncurtir integer default 0,
	primary key (guid)
);

create table usuario (
	guid integer not null auto_increment,
	nome varchar(500) not null,
	usuario varchar(100) not null,
	senha varchar(100) not null,
	tipo int not null,
	job varchar(200) not null,
	nivel TINYINT( 3 ) NOT NULL ,
	PRIMARY KEY (guid)
);

create table radio (
	guid int not null auto_increment,
	ativo varchar(30),
	embed varchar(500) not null,
	primary key (guid)
);

CREATE TABLE IF NOT EXISTS `downloads` (
  `guid` int(11) NOT NULL AUTO_INCREMENT,
  `eguid` bigint(20) DEFAULT NULL,
  `musica` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `downloadlink` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `countclicks` int(11) DEFAULT NULL,
  PRIMARY KEY (`guid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;


CREATE TABLE `songs` (
  `song_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) NOT NULL,
  `artist` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


/* TABELA NOVA PRINCIPAL ONDE VAI ARMAZENAR TODOS OS DADOS DAS MUSICAS E DIRETOS */
create table sistem_musics(
	guid int not null auto_increment,
	eguid int not null,
	numero int not null,
	duration varchar(255) not null,
	directory varchar(750) not null,
	artista varchar(500),
	titulo varchar(500),
	share int,
	primary key (guid)
);

create table sistem_user(
	guid int not null auto_increment,
	eguid int not null,
	usuario varchar(500) not null,
	senha varchar(500) not null,
	nome varchar(500),
	primary key (guid)
);

create table sistem_listsongs (
	guid int not null auto_increment,
	eguid int not null,
	guid_playlist int not null,
	guid_music int not null,
	primary key (guid),
	foreign key (guid_music) references sistem_musics (guid),
	foreign key (guid_playlist) references sistem_playlist
);

create table sistem_playlist (
	guid int not null auto_increment,
	eguid int not null,
	nomeplaylist varchar(500) not null,
	guiduser int not null,
	primary key (guid),
	foreign key (guiduser) references sistem_user (guid)
);

create table visit(
	guid int not null auto_increment,
	cont bigint default 0,
	primary key (guid)
);
