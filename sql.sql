CREATE DATABASE speltips;

USE speltips;

CREATE TABLE speltips_alla(

    speltips_alla_id int(8) PRIMARY KEY AUTO_INCREMENT,
    speltips_alla_img_name varchar(100),
    speltips_alla_publicerare varchar(500),
    speltips_alla_spel varchar(100),
    speltips_alla_titel varchar(100),
    speltips_alla_text text

);

CREATE TABLE speltips_csgo(

    speltips_csgo_id int(8) PRIMARY KEY AUTO_INCREMENT,
    speltips_csgo_img_name varchar(100),
    speltips_csgo_publicerare varchar(500),
    speltips_csgo_spel varchar(100),
    speltips_csgo_titel varchar(100),
    speltips_csgo_text text
    
);

CREATE TABLE speltips_wow(

    speltips_wow_id int(8) PRIMARY KEY AUTO_INCREMENT,
    speltips_wow_img_name varchar(100),
    speltips_wow_publicerare varchar(500),
    speltips_wow_spel varchar(100),
    speltips_wow_titel varchar(100),
    speltips_wow_text text
    
);

CREATE TABLE speltips_lol(

    speltips_lol_id int(8) PRIMARY KEY AUTO_INCREMENT,
    speltips_lol_img_name varchar(100),
    speltips_lol_publicerare varchar(500),
    speltips_lol_spel varchar(100),
    speltips_lol_titel varchar(100),
    speltips_lol_text text
    
);