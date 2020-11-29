
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(25) DEFAULT NULL,
  `corpo` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;


INSERT INTO `blog` VALUES (1,'Novo postsdfsdfsd','blabalbalsdfsdfsdfsd');
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) DEFAULT NULL,
  `senha` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
INSERT INTO `usuario` VALUES (1,'admin','1234');