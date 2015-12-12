CREATE TABLE user (
    id          INT PRIMARY KEY AUTO_INCREMENT,
    username    VARCHAR(15),
    password    VARCHAR(255),
    email       VARCHAR(25),
    about       VARCHAR(255)
) ENGINE=InnoDB 
  CHARACTER SET=utf8;


CREATE TABLE pweet (
    id           INT PRIMARY KEY AUTO_INCREMENT,
    user_id      INT,
    content      VARCHAR(140),
    insert_date  TIMESTAMP
) ENGINE=InnoDB 
  CHARACTER SET=utf8;

CREATE TABLE follows (
    id              INT PRIMARY KEY AUTO_INCREMENT,
    source_user     INT,
    target_user     INT
) ENGINE=InnoDB 
  CHARACTER SET=utf8;
