use pristons_king;

create table musicas_home (
	guid integer not null auto_increment,
	titulo varchar(200),
	texto varchar(200),
	downloadlink varchar(100),
	nomearquivo varchar(100),
	embed varchar(500),
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
