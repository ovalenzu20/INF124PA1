
use MotherEarth;

DROP TABLE IF EXISTS `flowers`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` varchar(100) NOT NULL,
  `flower` varchar(100) NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  `description` varchar(100),
  `price` int(100),
  PRIMARY KEY (`id`)
);

INSERT INTO flowers VALUES    
    ('carnation',2005,'Gérard Pirès', 34),
    ('','fmn',2004,'Woody Allen'),
    ('f0003','jasmine',2002,'Woody Allen'),
    ('f0004','lotus',2004,'Woody Allen'),
    ('f0005','peony',2002,'Woody Allen'),
    ('f0006','Rose',2004,'Woody Allen'),
    ('f0007','Tulips',2002,'Woody Allen'),
    ('f0008','Violet',2002,'Woody Allen'),
    ('f0009','Wind Flower',2002,'Woody Allen'),
    ('f0010','Hibiscus',2002,'Woody Allen');

DROP TABLE IF EXISTS `flowers`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` varchar(100) NOT NULL,
  `flower` varchar(100) NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  `description` varchar(100),
  `price` int(100),
  PRIMARY KEY (`id`)
);