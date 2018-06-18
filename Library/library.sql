DROP SCHEMA IF EXISTS biblioteca;
CREATE SCHEMA biblioteca;

DROP TABLE IF EXISTS  biblioteca.book;
CREATE TABLE IF NOT EXISTS  biblioteca.book  (
   Isbn  int(13) unsigned NOT NULL,
   Title  varchar(150) NOT NULL,
   Units  int(3) unsigned NOT NULL,
  PRIMARY KEY ( Isbn )
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS  biblioteca.lending;
CREATE TABLE IF NOT EXISTS  biblioteca.lending  (
   IdLibrary  int(3) unsigned NOT NULL,
   Dni  varchar(9) NOT NULL,
   Isbn  int(13) unsigned NOT NULL,
   DateInit  datetime NOT NULL,
   DateEnd  datetime NOT NULL,
  PRIMARY KEY ( IdLibrary , Dni , Isbn , DateInit )
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS  biblioteca.user;
CREATE TABLE IF NOT EXISTS  biblioteca.user  (
   Dni  varchar(9) NOT NULL,
   Pass  varchar(45) NOT NULL,
   Email  varchar(45) NOT NULL,
   Name  varchar(45) NOT NULL,
   Rank  varchar(45) NOT NULL,
  PRIMARY KEY ( Dni )
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS  biblioteca.library;
CREATE TABLE IF NOT EXISTS  biblioteca.library  (
   IdLibrary  int(3) unsigned NOT NULL DEFAULT '0',
   Name  varchar(50) NOT NULL,
  PRIMARY KEY ( IdLibrary )
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS  biblioteca.reservation;
CREATE TABLE IF NOT EXISTS  biblioteca.reservation  (
   IdLibrary  int(3) unsigned NOT NULL,
   Dni  varchar(9) NOT NULL,
   Isbn  int(13) unsigned NOT NULL,
   Date  datetime NOT NULL,
  PRIMARY KEY ( IdLibrary , Dni , Isbn , Date )
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
