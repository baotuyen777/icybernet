DROP TABLE abc;

CREATE TABLE `abc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO abc VALUES("1","davi");
INSERT INTO abc VALUES("2","beckham");


