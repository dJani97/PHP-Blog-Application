USE blog;
CREATE TABLE post(
    				id INT NOT NULL AUTO_INCREMENT PRIMARY KEY
                   , author varchar(100)
                   , title varchar(100)
                   , teaser varchar(250)
                   , body varchar(500)
                   , posted_on TIMESTAMP
             );
			 
ALTER TABLE `post` CHANGE `author` `author` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NULL DEFAULT NULL, CHANGE `title` `title` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NULL DEFAULT NULL, CHANGE `teaser` `teaser` TEXT CHARACTER SET utf8 COLLATE utf8_hungarian_ci NULL DEFAULT NULL, CHANGE `body` `body` TEXT CHARACTER SET utf8 COLLATE utf8_hungarian_ci NULL DEFAULT NULL;
