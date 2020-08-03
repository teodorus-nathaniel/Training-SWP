CREATE TABLE `User` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(100) NOT NULL,
    `password` VARCHAR(255) NOT NULL
);

CREATE TABLE `Post` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `content` VARCHAR(255) NOT NULL,
    `user_id` INT NOT NULL REFERENCES User(id),
    `timestamp` VARCHAR(100) NOT NULL
);

INSERT INTO `User` (`username`, `password`) VALUES ('admin', 'admin');