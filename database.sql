DROP DATABASE IF EXISTS MotherEarth;
CREATE DATABASE MotherEarth;
USE MotherEarth;

DROP TABLE IF EXISTS `flowers`;
CREATE TABLE IF NOT EXISTS `flowers` (
  `flowerName` varchar(100) NOT NULL,
  `price` integer  NOT NULL,
  `description` varchar(400),
  `extendedDescription` varchar(400),
  PRIMARY KEY (`flowerName`)
);


DROP TABLE IF EXISTS `flowersImages`;
CREATE TABLE IF NOT EXISTS `flowersImages` (
  `flowerName` varchar(100) NOT NULL,
  `imageID` integer  NOT NULL,
  `url` varchar(400),
  `type` varchar(100),
  PRIMARY KEY (`imageID`)
);






INSERT INTO flowers VALUES    
    ('Tulips', 15, 'Bright Pink Tulips Grown in California; 10 in a bundle.', 'Tulips are very popular around the world and are known for their beautiful hues. They can be found in a variety of sizes and colors.'),
    ('Carnation', 25, 'Available in Pink and Blue; 10 in a bundle.', 'Carnations are beautiful flowers and they change their color in 24 hours. Each color signifies a different meaning. Order some red carnations for your true love.' ),
    ('Forget Me Not', 30, 'Beautiful bouquet of wild Forget Me Not flowers.', 'Forget me nots bloom in the early summer. These flowers have a blueish purplish hue. They are also the Armenian Genocide Remembrance flower.'),
    ('Lotus', 20, 'Rare Pink Lotus', ' This is a very common flower found in India. These come in two colors, pink and white.' ),
    ('Jasmine', 25, 'White Jasmines available in a bundle of 5.', 'Jasmine shrubs reach heights of 10 - 15 feet. The jasmine leaves are evergreen. Jasmines are beautiful white and yellow flowers.'),
    ('Peony', 30, 'Pink Peonies; 4 available in a bundle', 'Peonies are very beautiful and known for their cluster of peddles. This flower has the wow factor and makes a great gift! Sold in a set of 4 for $30' ),
    ('Rose', 27,'Classic and beautiful. Perfect for any occasion; 8 in a bundle.', 'The classic flower! An amazing gift to your love ones. Classy and beautiful. Sold in a bundle of 8 for $27' ),
    ('Hibiscus', 26, 'Known for their large and colorful properties - this flower is also used for tea. 5 in a bundle', 'Hibiscus is a very popular flower known for its medicinal effects! Sold in a bundle of 5 - $26'),
    ('Windflower', 16, 'Available in purple and white; 20 in a bundle.', ' These poppy-like flowers are very common and look great in groups! They compliment a set of other flowers. They can be found in a variety of sizes and colors. Sold in a set of 20 for $16'),
    ('Violet', 12, 'Available in violet; 12 in a bundle.', ' This classic flower is perfect for those who love the color purple. Sold in a set of 12 for $12' );