CREATE TABLE users (
      	id int (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname varchar (255) NOT NULL,
        lastname varchar(255) NOT NULL,
        username varchar(255) NOT NULL,
        address varchar(255) NOT NULL,
        phone int(255) DEFAULT NULL,
        email varchar(255) NOT NULL,
        password varchar(255) NOT NULL,
        urole varchar(255) NOT NULL,
        created_at timestamp NOT NULL DEFAULT current_timestamp()
    )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;