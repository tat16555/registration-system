CREATE TABLE images (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    file_name varchar(255) NOT NULL,
    uploaded_on datetime NOT NULL,
    status enum('1', '0') NOT NULL DEFAULT '1'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;