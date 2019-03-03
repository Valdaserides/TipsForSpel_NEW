CREATE DATABASE speltips;

USE speltips;

CREATE TABLE speltips_alla(

    speltips_alla_id int(8) PRIMARY KEY AUTO_INCREMENT,
    speltips_alla_img_name varchar(100),
    speltips_alla_publicerare varchar(500),
    speltips_alla_spel varchar(100),
    speltips_alla_titel varchar(100),
    speltips_alla_text text,
    speltips_alla_confirmed int(2)

);
