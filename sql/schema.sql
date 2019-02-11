CREATE DATABASE IF NOT EXISTS innovationfund
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE innovationfund;

set foreign_key_checks = 0;

CREATE TABLE IF NOT EXISTS `users`
(
  `id` int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` char(255) NOT NULL UNIQUE KEY,
  `name` char(255) NOT NULL,
  `password` char(64) NOT NULL,
  `lastname` char(64) NOT NULL,
  `username` char(64) NOT NULL UNIQUE KEY,
  `is_admin` int DEFAULT 0,
  `created_at` timestamp default current_timestamp NOT NULL
);

CREATE TABLE IF NOT EXISTS `partners`
(
  `id` int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` char(255) NOT NULL UNIQUE KEY,
  `description` varchar(1000) NOT NULL,
  `image_path` char(255) DEFAULT NULL,
  `link` char(255) DEFAULT NULL,
  `created_by` int unsigned DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `projects`
(
  `id` int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` char(255) NOT NULL UNIQUE KEY,
  `description` varchar(1000) NOT NULL,
  `image_path` char(255) DEFAULT NULL,
  `link` char(255) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `news`
(
  `id` int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` char(255) NOT NULL UNIQUE KEY,
  `text` char(255) NOT NULL,
  `cat` char(255) NOT NULL,
  `image_path` char(255) DEFAULT NULL,
  `partner_id` int unsigned DEFAULT NULL,
  `created_by` int unsigned DEFAULT NULL,
  `created_at` timestamp default current_timestamp NOT NULL,
  KEY news_title (title),
  KEY news_partner_id_fk (partner_id),
  KEY news_user_id_fk (created_by),
  CONSTRAINT news_partner_id_fk FOREIGN KEY (partner_id) REFERENCES partners (id),
  CONSTRAINT news_user_id_fk FOREIGN KEY (created_by) REFERENCES users (id)
);

CREATE FULLTEXT INDEX partners_ft_search ON partners(name, description);
CREATE FULLTEXT INDEX news_ft_search ON news(title, text);