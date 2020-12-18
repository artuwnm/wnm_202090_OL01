/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(255) NOT NULL COMMENT 'product name',
  `thumb` varchar(255) NOT NULL COMMENT 'the thumbnail',
  `img1` varchar(255) DEFAULT NULL COMMENT 'picture 1',
  `img2` varchar(255) DEFAULT NULL COMMENT 'picture 2',
  `img3` varchar(255) DEFAULT NULL COMMENT 'picture 3',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'product price',
  `content` text NOT NULL COMMENT 'product details',
  `status` tinyint(1) DEFAULT '1' COMMENT 'status 1:normal 2:disable',
  `create_time` datetime NOT NULL COMMENT 'create time',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`thumb`,`img1`,`img2`,`img3`,`price`,`content`,`status`,`create_time`) values (1,'Nike React Infinity Run Flyknit A.I.R','1.0.jpg','1.1.jpg','1.2.jpg','1.3.jpg','120.00','The Nike React Infinity Run Flyknit is designed to help reduce injury and keep you on the run. More foam and improved upper details provide a secure and cushioned feel. Lace up and feel the potential as you hit the road.',1,'2020-05-20 16:42:40'),(2,'Nike React Infinity Run Flyknit','2.0.jpg','2.1.jpg','2.2.jpg','2.3.jpg','160.00','The Nike React Infinity Run Flyknit is designed to help reduce injury and keep you on the run. More foam and improved upper details provide a secure and cushioned feel. Lace up and feel the potential, mile after mile.',1,'2020-05-20 16:42:42'),(3,'Nike Air Zoom Structure 22','3.0.jpg','3.1.jpg','3.2.jpg','3.3.jpg','120.00','Go for the stable and supportive ride in the Nike Air Zoom Structure 22. Engineered mesh, a heel overlay and Dynamic Support throughout the midfoot all work together to help every step feel smooth.',1,'2020-05-20 16:42:43'),(4,'Nike Air Zoom Pegasus 37','4.0.jpg','4.1.jpg','4.2.jpg','4.3.jpg','120.00','Reinvigorate your stride with the Nike Air Zoom Pegasus 37. Delivering the same fit and feel that runners love, the shoe has an all-new forefoot cushioning unit and foam for maximum responsiveness. The result is a durable, lightweight trainer designed for everyday running.',1,'2020-05-20 16:42:45'),(5,'Nike React Vision','5.0.jpg','5.1.jpg','5.2.jpg','5.3.jpg','140.00','The Nike React Vision is a story of surreal comfort. Layered textures, shapes and vivid colors combine in a design influenced by the exaggerated world of our dreams, while React foam and an ultraplush tongue provide surreal comfort. DIMSIX on the tongue tab rises high off the collar to add just a touch of Nike’s own origin story.',1,'2020-05-20 16:42:47'),(6,'Nike Air Max 270','6.0.jpg','6.1.jpg','6.2.jpg','6.3.jpg','150.00','Inspired by 2 icons of Air, the Air Max 180 and Air Max 93, the Nike Air Max 270 goes bigger and bolder. Combining an extra-large heel Air unit yet with a highly breathable upper and a splash of retro summer colors, it offers you a soft ride that feels as good as it looks.',1,'2020-05-20 16:42:48'),(7,'Nike Air Force 1 Sage Low','7.0.jpg','7.1.jpg','7.2.jpg','7.3.jpg','100.00','Taking both height and craft to new levels, the Nike Air Force 1 Sage Low features a platform midsole and a pared-down upper for a bold yet feminine look.',1,'2020-05-20 16:42:50'),(8,'Nike Benassi','8.0.jpg','8.1.jpg','8.2.jpg','8.3.jpg','25.00','The Nike Benassi Women\'s Slide features a lined upper with a bold logo for plush comfort and an athletic look. A foam midsole and outsole provide lightweight impact protection.',1,'2020-05-20 16:42:51');

/*Table structure for table `sp_order` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
