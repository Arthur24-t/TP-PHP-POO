
CREATE TABLE `billet` (
  `Id_bil` INTEGER(15) NOT NULL,
  `Date_bil` date NOT NULL,
  `Titre_bil` VARCHAR(15) NOT NULL,
  `contenu` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`Id_bil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

Billet (Id_bil, Date_bil,Titre_bil,contenu) ;
Commentaire (Id_com, date_com, auteur_com, mail_auteur, commentaire, Id_bil).

CREATE TABLE `commentaire` (
  `Id_com` INTEGER(15) NOT NULL,
  `date_com` date NOT NULL,
  `auteur_com` VARCHAR(20) NOT NULL,
  `mail_auteur` VARCHAR(20) NOT NULL,
  `commentaire` VARCHAR(50) NOT NULL,
  `Id_bil` INTEGER(15) NOT NULL,
  PRIMARY KEY (`Id_com`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE Modo(
 `Id_modo` INTEGER(15) NOT NULL,
  `mdp_modo` VARCHAR(15) NOT NULL,
  `nom_modo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`Id_modo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;