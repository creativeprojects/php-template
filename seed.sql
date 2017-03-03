
CREATE TABLE `user` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `email` varchar(50) NOT NULL,
    `name` varchar(100) DEFAULT NULL,
    PRIMARY KEY(`id`)
) AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `email`, `name`) VALUES (1, 'admin@example.com', 'Admin');
