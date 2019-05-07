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

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `productID` varchar(100) NOT NULL,
  `firstName` varchar(100),
  `lastName` varchar(400),
  `address` varchar(100),
  `address2` varchar(100),
  `city` varchar(100),
  `state` varchar(100),
  `zip` varchar(100),
  `creditCardNumber` varchar(100),
  `shippingType` varchar(100),
  `phoneNumber` varchar(100),

  PRIMARY KEY (`productID`)
);

INSERT INTO flowers VALUES    
    ('Tulips', 15, 'Bright Pink Tulips Grown in California; 10 in a bundle.', 'Tulips are very popular around the world and are known for their beautiful hues. They can be found in a variety of sizes and colors.'),
    ('Carnation', 25, 'Available in Pink and Blue; 10 in a bundle.', 'Carnations are beautiful flowers and they change their color in 24 hours. Each color signifies a different meaning. Order some red carnations for your true love.' ),
    ('ForgetMeNot', 30, 'Beautiful bouquet of wild Forget Me Not flowers.', 'Forget me nots bloom in the early summer. These flowers have a blueish purplish hue. They are also the Armenian Genocide Remembrance flower.'),
    ('Lotus', 20, 'Rare Pink Lotus', ' This is a very common flower found in India. These come in two colors, pink and white.' ),
    ('Jasmine', 25, 'White Jasmines available in a bundle of 5.', 'Jasmine shrubs reach heights of 10 - 15 feet. The jasmine leaves are evergreen. Jasmines are beautiful white and yellow flowers.'),
    ('Peony', 30, 'Pink Peonies; 4 available in a bundle', 'Peonies are very beautiful and known for their cluster of peddles. This flower has the wow factor and makes a great gift! Sold in a set of 4 for $30' ),
    ('Rose', 27,'Classic and beautiful. Perfect for any occasion; 8 in a bundle.', 'The classic flower! An amazing gift to your love ones. Classy and beautiful. Sold in a bundle of 8 for $27' ),
    ('Hibiscus', 26, 'Known for their large and colorful properties - this flower is also used for tea. 5 in a bundle', 'Hibiscus is a very popular flower known for its medicinal effects! Sold in a bundle of 5 - $26'),
    ('Windflower', 16, 'Available in purple and white; 20 in a bundle.', ' These poppy-like flowers are very common and look great in groups! They compliment a set of other flowers. They can be found in a variety of sizes and colors. Sold in a set of 20 for $16'),
    ('Violet', 12, 'Available in violet; 12 in a bundle.', ' This classic flower is perfect for those who love the color purple. Sold in a set of 12 for $12' );





INSERT INTO flowersImages VALUES    
    ('Tulips', 1, 'https://www.laso.cz/data/images/3e33ebe52695d46a7124dbebae942cc35c861ad98b4ea.jpg', 'header'),
    ('Tulips', 2, 'https://images-na.ssl-images-amazon.com/images/I/51yuvk-69aL.jpg', 'sub' ),
    ('Tulips', 3, 'https://s3.eu-west-2.amazonaws.com/jparkers/1000/1017640_5.jpg', 'sub'),
    ('Tulips', 4, 'https://i.pinimg.com/originals/6b/39/0d/6b390d57be652b24f4d35021bb810a0d.jpg', 'sub'),
    ('Carnation', 5, 'https://world-crops.com/wp-content/uploads/Cut-flowers-Carnation.jpg', 'header'),
    ('Carnation', 6, 'https://nongmoseedsource.com/wp-content/uploads/2017/04/carnation-cancan-scarlet-flower.jpg', 'sub'),
    ('Carnation', 7, 'https://mobileimages.lowes.com/product/converted/028289/028289142280.jpg', 'sub'),
    ('Carnation', 8, 'https://s2.bukalapak.com/img/7767588521/w-1000/Benih_Bibit_Biji_Bunga_Carnation_RedWhite.jpg', 'sub'),
    ('ForgetMeNot', 9, 'https://pbs.twimg.com/media/DnnRYS5W4AESDM2.jpg', 'header'),
    ('ForgetMeNot', 10, 'https://steemitimages.com/DQmQtim8qLAtK3eJtaDswFjs7xysccRDtAfkUwutLA6F3Fs/Myosotis_arvensis_ois.JPG', 'sub'),
    ('ForgetMeNot', 11, 'http://silviomessina.pw/images/how-to-grow-and-care-for-a-forget-me-not-plant-myosotis__aHR0cHM6Ly93b3JsZG9mZmxvd2VyaW5ncGxhbnRzLmNvbS93cC1jb250ZW50L3VwbG9hZHMvMjAxNi8wNS9Gb3JnZXQtTWUtTm90LVBsYW50czIuanBn.jpg', 'sub'),
    ('ForgetMeNot', 12, 'https://pbs.twimg.com/media/DoHvbJTXsAAS6Gw.jpg', 'sub'),
    ('Lotus', 13, 'http://www.reportingday.com/wp-content/uploads/2018/06/Lotus-Pictures.jpg', 'header'),
    ('Lotus', 14, 'https://www.bollyfit.com/images/testimonials/lotus.jpg', 'sub'),
    ('Lotus', 15, 'https://i3.wp.com/www.washingtonpost.com/resizer/xRgdBsXND7eM9NklzSSaQkveVEA=/1484x0/arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/VK6HCQOPHY5MTCFTWHFF3ALVK4.jpg', 'sub'),
    ('Lotus', 16, 'https://cdn.theculturetrip.com/wp-content/uploads/2018/05/7797626182_ebc7a92052_k-1024x683.jpg', 'sub'),
    ('Jasmine', 17, 'https://pinimg.icu/ipi/0x0/6fb21/if-you-think-that-your-animal-is-ill-or-may-Ee6d8e7f6ae3719f746ae1d6ae3e50960.jpg', 'header'),
    ('Jasmine', 18, 'https://sitejerk.com/images/jasmine-12.jpg', 'sub'),
    ('Jasmine', 19, 'https://www.studiofmp.com/wp-content/uploads/2018/6/jasmine-flower-history-and-jasmine-flower-medicinal-uses.jpg', 'sub'),
    ('Jasmine', 20, 'https://i.pinimg.com/originals/06/4c/24/064c246663773112906f02fe03a7174b.jpg', 'sub'),
    ('Peony', 21, 'https://3.bp.blogspot.com/-4li_dqm1SRA/XL8f79iOboI/AAAAAAAABzI/7AujpdnNJekiYTQ0ef8KbsuV-hPAETYpwCKgBGAs/s1600/DETA-510-1.jpg', 'header'),
    ('Peony', 22, 'http://stonemuseum.org/wp-content/uploads/2018/05/double-peony-sarah-bernhardt-tulips-plants.jpg', 'sub'),
    ('Peony', 23, 'https://www.shopmyexchange.com/products/images/xlarge/1609765_ZL3G.jpg', 'sub'),
    ('Peony', 24, 'https://i.pinimg.com/originals/6d/59/70/6d59703577134d8081e5f449d6198877.jpg', 'sub'),
    ('Rose', 25, 'https://cdn-images-1.medium.com/max/1200/1*NPl8IDrkOHaILlhr7lLI5Q@2x.jpeg', 'header'), 
    ('Rose', 26, 'https://new.springintheair.com/wp-content/uploads/2016/11/red-roses-50-set.jpg', 'sub'), 
    ('Rose', 27, 'http://i.epochtimes.com/assets/uploads/2017/12/rose-2885586_1920.jpg', 'sub'), 
    ('Rose', 28, 'https://res.cloudinary.com/bloomnation/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto/v1486629233/vendor/4082/catalog/product/b/e/be_still_my_heart_-_dozen_red_roses_8_1_12.jpg', 'sub'), 
    ('Hibiscus', 29, 'https://www.radomszczanska.pl/NOWE_ZDJECIA/Hibiscus.jpg', 'header'),
    ('Hibiscus', 30, 'http://5b0988e595225.cdn.sohucs.com/images/20190226/6148fb833779483cbbdd4559fe2c2b2c.jpeg', 'sub'),
    ('Hibiscus', 31, 'https://www.thehealthsite.com/wp-content/uploads/2015/10/hibiscus-for-fever.jpg', 'sub'),
    ('Hibiscus', 32, 'https://i.pinimg.com/originals/d2/5d/81/d25d81dd117d291f4a8c8d20abe4c59e.jpg', 'sub'),
    ('Windflower', 33, 'http://www.wildflowersofireland.net/image_uploads/flowers/Wood-Anemone-1-09.jpg', 'header'),
    ('Windflower', 34, 'https://d.wattpad.com/story_parts/21/images/156d3b18345b096d662220387304.jpg', 'sub'),
    ('Windflower', 35, 'https://s3.amazonaws.com/images.avonbulbs.co.uk/usercontent/img/col-12/2431.jpg', 'sub'),
    ('Windflower', 36, 'http://4.bp.blogspot.com/-c91fY0-yKCo/UKQWMufoVpI/AAAAAAAAB-U/CgOZrcG-ggo/s320/Wind%20Flower-.jpg', 'sub'),
    ('Violet', 37, 'https://i.pinimg.com/originals/d5/33/67/d5336784b97d21ca09da555cf3c7adae.jpg', 'header'), 
    ('Violet', 38, 'https://img.over-blog-kiwi.com/2/55/24/43/20180405/ob_3ce84f_b-1-q-0-p-0-7.jpg', 'sub'), 
    ('Violet', 39, 'https://jooinn.com/images/violet-flower-5.jpg', 'sub'), 
    ('Violet', 40, 'https://cdn.pixabay.com/photo/2017/08/08/12/16/flower-2611254_960_720.jpg', 'sub');



    



