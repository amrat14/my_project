CREATE TABLE users (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(150),
email VARCHAR(150),
password VARCHAR(150),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;