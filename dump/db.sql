CREATE TABLE `user` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `prenom` varchar(60),
  `nom` varchar(60),
  `email` varchar(60),
  `age` text,
  `color` varchar(60),
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`nom`,`prenom`,`email`,`age`,`color`,`password`) VALUES('LEBERT','Nicolas','nicolas@gmail.com', "24", 'rouge', '56sd1g$s$') ;
INSERT INTO `user` (`nom`,`prenom`,`email`,`age`,`color`,`password`) VALUES('XAVIER','Erwan','erwan@gmail.com', "24", 'rouge' ,'$erg$dsfv$ds$$') ;
INSERT INTO `user` (`nom`,`prenom`,`email`,`age`,`color`,`password`) VALUES('COUTROT','Sylvain','sylvain@gmail.com', "24", 'rouge', '$sfcszr$f') ;