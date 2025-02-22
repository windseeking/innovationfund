CREATE DATABASE IF NOT EXISTS innovationfund
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE innovationfund;

SET foreign_key_checks = 0;

CREATE TABLE IF NOT EXISTS `users`
(`id`         int UNSIGNED                        NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `email`      char(255)                           NOT NULL UNIQUE KEY,
 `name`       char(255)                           NOT NULL,
 `password`   char(64)                            NOT NULL,
 `lastname`   char(64)                            NOT NULL,
 `username`   char(64)                            NOT NULL UNIQUE KEY,
 `is_admin`   int       DEFAULT 0,
 `created_at` timestamp DEFAULT current_timestamp NOT NULL
);

CREATE TABLE IF NOT EXISTS `innovations_ru`
(`id`                   int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`                 char(255)        NOT NULL,
 `short_description`    varchar(1000)    NOT NULL,
 `author`               char(255) DEFAULT NULL,
 `main_image_path`      char(255) DEFAULT NULL,
 `market_types`         char(255) DEFAULT NULL,
 `current_stage`        char(255) DEFAULT NULL,
 `money_needed`         char(255) DEFAULT NULL,
 `description`          text             NOT NULL,
 `road_map`             text             NOT NULL,
 `market_and_appliance` text             NOT NULL,
 `competitive_ability`  text             NOT NULL,
 `poll_link_url`        char(255) DEFAULT NULL,
 `presentation_link`    char(255) DEFAULT NULL,
 `partnership`          text             NOT NULL,
 `image_1_path`         char(255) DEFAULT NULL,
 `image_2_path`         char(255) DEFAULT NULL,
 `image_3_path`         char(255) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `innovations_en`
(`id`                   int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`                 char(255)        NOT NULL,
 `short_description`    varchar(1000)    NOT NULL,
 `author`               char(255) DEFAULT NULL,
 `main_image_path`      char(255) DEFAULT NULL,
 `market_types`         char(255) DEFAULT NULL,
 `current_stage`        char(255) DEFAULT NULL,
 `money_needed`         char(255) DEFAULT NULL,
 `description`          text             NOT NULL,
 `road_map`             text             NOT NULL,
 `market_and_appliance` text             NOT NULL,
 `competitive_ability`  text             NOT NULL,
 `poll_link_url`        char(255) DEFAULT NULL,
 `presentation_link`    char(255) DEFAULT NULL,
 `partnership`          text             NOT NULL,
 `image_1_path`         char(255) DEFAULT NULL,
 `image_2_path`         char(255) DEFAULT NULL,
 `image_3_path`         char(255) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `innovations_uk`
(`id`                   int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`                 char(255)        NOT NULL,
 `short_description`    varchar(1000)    NOT NULL,
 `author`               char(255) DEFAULT NULL,
 `main_image_path`      char(255) DEFAULT NULL,
 `market_types`         char(255) DEFAULT NULL,
 `current_stage`        char(255) DEFAULT NULL,
 `money_needed`         char(255) DEFAULT NULL,
 `description`          text             NOT NULL,
 `road_map`             text             NOT NULL,
 `market_and_appliance` text             NOT NULL,
 `competitive_ability`  text             NOT NULL,
 `poll_link_url`        char(255) DEFAULT NULL,
 `presentation_link`    char(255) DEFAULT NULL,
 `partnership`          text             NOT NULL,
 `image_1_path`         char(255) DEFAULT NULL,
 `image_2_path`         char(255) DEFAULT NULL,
 `image_3_path`         char(255) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `partners_ru`
(`id`          int UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`        char(255)     NOT NULL UNIQUE KEY,
 `description` varchar(1000) NOT NULL,
 `image_path`  char(255)    DEFAULT NULL,
 `link`        char(255)    DEFAULT NULL,
 `created_by`  int UNSIGNED DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `partners_en`
(`id`          int UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`        char(255)     NOT NULL UNIQUE KEY,
 `description` varchar(1000) NOT NULL,
 `image_path`  char(255)    DEFAULT NULL,
 `link`        char(255)    DEFAULT NULL,
 `created_by`  int UNSIGNED DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `partners_uk`
(`id`          int UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`        char(255)     NOT NULL UNIQUE KEY,
 `description` varchar(1000) NOT NULL,
 `image_path`  char(255)    DEFAULT NULL,
 `link`        char(255)    DEFAULT NULL,
 `created_by`  int UNSIGNED DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `projects_ru`
(`id`          int UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`        char(255)     NOT NULL UNIQUE KEY,
 `description` varchar(1000) NOT NULL,
 `image_path`  char(255) DEFAULT NULL,
 `link_1_url`  char(255) DEFAULT NULL,
 `link_1_text` char(255) DEFAULT NULL,
 `link_2_url`  char(255) DEFAULT NULL,
 `link_2_text` char(255) DEFAULT NULL,
 `website`     char(255) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `projects_en`
(`id`          int UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`        char(255)     NOT NULL UNIQUE KEY,
 `description` varchar(1000) NOT NULL,
 `image_path`  char(255) DEFAULT NULL,
 `link_1_url`  char(255) DEFAULT NULL,
 `link_1_text` char(255) DEFAULT NULL,
 `link_2_url`  char(255) DEFAULT NULL,
 `link_2_text` char(255) DEFAULT NULL,
 `website`     char(255) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `projects_uk`
(`id`          int UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`        char(255)     NOT NULL UNIQUE KEY,
 `description` varchar(1000) NOT NULL,
 `image_path`  char(255) DEFAULT NULL,
 `link_1_url`  char(255) DEFAULT NULL,
 `link_1_text` char(255) DEFAULT NULL,
 `link_2_url`  char(255) DEFAULT NULL,
 `link_2_text` char(255) DEFAULT NULL,
 `website`     char(255) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `news`
(`id`         int UNSIGNED                           NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `news_link`  int UNSIGNED DEFAULT NULL,
 `title`      char(255)                              NOT NULL UNIQUE KEY,
 `text`       text(60000)                            NOT NULL,
 `cat`        char(255)                              NOT NULL,
 `image_path` char(255)    DEFAULT NULL,
 `partner_id` int UNSIGNED DEFAULT NULL,
 `created_by` int UNSIGNED DEFAULT NULL,
 `created_at` timestamp    DEFAULT current_timestamp NOT NULL,
 KEY news_title (title),
 KEY news_partner_id_fk (partner_id),
 KEY news_user_id_fk (created_by),
 CONSTRAINT news_partner_id_fk FOREIGN KEY (partner_id) REFERENCES partners (id),
 CONSTRAINT news_user_id_fk FOREIGN KEY (created_by) REFERENCES users (id)
);

CREATE TABLE IF NOT EXISTS `innovations`
(`id`            int UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `name`          char(255)     NOT NULL UNIQUE KEY,
 `description`   varchar(1000) NOT NULL,
 `author`        char(255) DEFAULT NULL,
 `image_path`    char(255) DEFAULT NULL,
 `market_types`  char(255) DEFAULT NULL,
 `current_stage` char(255) DEFAULT NULL,
 `money_needed`  char(255) DEFAULT NULL,
 `road_map`      text(60000)   NOT NULL,
 `market`        text(60000)   NOT NULL,
 `analogues`     text(60000)   NOT NULL,
 `appliance`     text(60000)   NOT NULL,
 `link_url`      char(255) DEFAULT NULL
);

CREATE FULLTEXT INDEX partners_ft_search ON partners (name, description);
CREATE FULLTEXT INDEX news_ft_search ON news (title, text);

CREATE FULLTEXT INDEX innovations_en_search ON innovations_en(name, short_description);
CREATE FULLTEXT INDEX innovations_ru_search ON innovations_ru(name, short_description);
CREATE FULLTEXT INDEX innovations_uk_search ON innovations_uk(name, short_description);