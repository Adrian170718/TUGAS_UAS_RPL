/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - db_resto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_resto` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_resto`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`) values 
(7,'admin','21232f297a57a5a743894a0e4a801fc3');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `kode_menu` varchar(12) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `status` enum('tersedia','tidak tersedia') DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `menu` */

insert  into `menu`(`id_menu`,`kode_menu`,`nama`,`harga`,`gambar`,`kategori`,`status`) values 
(0,'MN51','Nasi Putih Biasa',4000,'nasi-putih-biasa.png','Makanan','tersedia'),
(1,'MN01','Bebek Cabe Ijo',40000,'bebek-goreng-ijo.png','Makanan','tersedia'),
(2,'MN02','Kerang Asam manis',50000,'kerang-asam-manis.png','Makanan','tersedia'),
(3,'MN03','Gurame Saus Tauco',25000,'gurame-saus-tauco.png','Makanan','tersedia'),
(4,'MN04','Gurame Asam Manis',30000,'gurame-asam-manis.png','Makanan','tersedia'),
(5,'MN05','Dendeng Balado',35000,'dendeng-balado.png','Makanan','tersedia'),
(6,'MN06','Bebek Goreng Kelapa',35000,'bebek-goreng-kelapa.png','Makanan','tersedia'),
(7,'MN07','Balado Kerang Pedas',45000,'balado-kerang-pedas.png','Makanan','tersedia'),
(8,'MN08','Ayam Bakar Madu',25000,'ayam-bakar-madu.png','Makanan','tersedia'),
(9,'MN09','Nasi Goreng Sosis',15000,'nasi-goreng-sosis.png','Makanan','tersedia'),
(10,'MN10','Udang Tepung Gendut',20000,'udang-tepung.png','Fast Food','tersedia'),
(11,'MN11','Macaroni Asam Pedas',25000,'macaroni-asam-pedas.png','Fast Food','tersedia'),
(12,'MN12','Spaghetti Saus Ikan',25000,'spaghetti-saus-ikan.png','Fast Food','tersedia'),
(13,'MN13','Ayam Goreng Tepung',10000,'ayam-goreng-tepung.png','Fast Food','tersedia'),
(14,'MN14','Chicken Wings',30000,'chicken-wings.png','Fast Food','tersedia'),
(15,'MN15','Roti Jalo Kuah Kari',35000,'roti-jalo.png','Fast Food','tersedia'),
(16,'MN16','Burger Egg Cheese',16000,'egg-cheese-burger.png','Fast Food','tersedia'),
(17,'MN17','Roll Sushi Tuna',30000,'roll-sushi-tuna.png','Fast Food','tersedia'),
(18,'MN18','Mie Setan',20000,'mie-setan.png','Fast Food','tersedia'),
(19,'MN19','Molen Kacang Hijau',5000,'molen-kacang-hijau.png','Snack','tersedia'),
(20,'MN20','Kue Cubit',10000,'kue-cubit.png','Snack','tersedia'),
(21,'MN21','Otak2 Udang Keju',15000,'otak-udang-keju.png','Snack','tersedia'),
(22,'MN22','Donat Kentang',15000,'donat-kentang.png','Snack','tersedia'),
(23,'MN23','Siomay Bandung',30000,'siomay-bandung.png','Snack','tersedia'),
(24,'MN24','Rolade Tahu',20000,'rolade-tahu.png','Snack','tersedia'),
(25,'MN25','Onion Ring',10000,'onion-ring.png','Snack','tersedia'),
(26,'MN26','Puding Lumut',10000,'puding-lumut.png','Dessert','tersedia'),
(27,'MN27','Oreo Cheese Cake',25000,'oreo-cheese-cake.png','Dessert','tersedia'),
(28,'MN28','Strawberry Cheese Cake',25000,'strawberry-cheese-cake.png','Dessert','tersedia'),
(29,'MN29','Cake Ubi Ungu',20000,'cake-ubi-ungu.png','Dessert','tersedia'),
(30,'MN30','Black Forest',25000,'black-forest.png','Dessert','tersedia'),
(31,'MN31','Wafer Coklat Puding',20000,'wafer-coklat-puding.png','Dessert','tersedia'),
(32,'MN32','Es Krim Kacang Merah',28000,'es-krim-kacang-merah.png','Dessert','tersedia'),
(33,'MN33','Ketan lapis Srikaya',20000,'ketan-lapis-srikaya.png','Dessert','tersedia'),
(34,'MN34','Pandan Roll Kismis',20000,'pandan-roll-kismis.png','Dessert','tersedia'),
(35,'MN35','Caramel Frappuccino',8000,'caramel-fc.png','Minuman','tersedia'),
(36,'MN36','Susu Caramel Kopo',8000,'susu-karamel-kopo.png','Minuman','tersedia'),
(37,'MN37','Ice Caramel Macchiato',8000,'caramel-mc.png','Minuman','tersedia'),
(38,'MN38','Capuccino Float',8000,'capuccino-float.png','Minuman','tersedia'),
(39,'MN39','Jus Pisang',5000,'jus-pisang.png','Minuman','tersedia'),
(40,'MN40','Jus Nangka',5000,'jus-nangka.png','Minuman','tersedia'),
(41,'MN41','Jus Mangga',5000,'jus-mangga.png','Minuman','tersedia'),
(42,'MN42','Jus Alpukat',5000,'jus-alpukat.png','Minuman','tersedia'),
(43,'MN43','Jus Melon',5000,'jus-melon.png','Minuman','tersedia'),
(44,'MN44','Jus Sirsak',5000,'jus-sirsak.png','Minuman','tersedia'),
(45,'MN45','Jus Wortel',5000,'jus-wortel.png','Minuman','tersedia'),
(46,'MN46','Es Kacang Ijo',12000,'es-kacang-ijo.png','Minuman','tersedia'),
(47,'MN47','Rainbow Juice',12000,'rainbow-juice.png','Minuman','tersedia'),
(48,'MN48','Strawberry Ice Tea',12000,'strawberry-iced.png','Minuman','tersedia'),
(49,'MN49','Smoothie Mangga',12000,'smoothie-mangga.png','Minuman','tersedia'),
(50,'MN50','Es Kopyor',8000,'es-kopyor.png','Minuman','tersedia'),
(52,'MN52','Es Teh Manis',3000,'es-teh-manis.png','Minuman','tersedia');

/*Table structure for table `pesanan` */

DROP TABLE IF EXISTS `pesanan`;

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pesanan` varchar(12) NOT NULL,
  `kode_menu` varchar(12) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `pesanan` */

insert  into `pesanan`(`id_pesanan`,`kode_pesanan`,`kode_menu`,`qty`) values 
(46,'62ac602fbe40','MN52',5),
(49,'658fd1b1cab3','MN52',1),
(50,'658fd1b1cab3','MN51',1),
(51,'658fd3177ada','MN52',1),
(52,'658fd3177ada','MN51',1);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pesanan` varchar(12) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`kode_pesanan`,`nama_pelanggan`,`waktu`) values 
(22,'62ac602fbe40','saq','2022-06-17 18:06:24'),
(24,'658fd1b1cab3','cth','2023-12-30 15:15:45'),
(25,'658fd3177ada','erere','2023-12-30 15:21:45');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`) values 
(1,'rendi12','69c796f5bbd1339f3ba3e18ce54fcc63');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
