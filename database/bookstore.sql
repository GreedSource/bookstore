CREATE DATABASE IF NOT EXISTS bookstore;

USE bookstore;

CREATE TABLE IF NOT EXISTS book(
	id INT AUTO_INCREMENT,
	title VARCHAR(50) NOT NULL,
	author VARCHAR(50),
	description TEXT NOT NULL,
	img TEXT NOT NULL,
	active TINYINT NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS book_rating(
	id INT AUTO_INCREMENT,
	rating INT NOT NULL,
	book_id INT NOT NULL,
	active TINYINT NOT NULL,
	PRIMARY KEY (id)
);

ALTER TABLE book_rating
ADD CONSTRAINT fk_book_id FOREIGN KEY (book_id) REFERENCES book(id);

ALTER TABLE book
ALTER active SET DEFAULT 1;

ALTER TABLE book
ALTER img SET DEFAULT 'default.jpg';

ALTER TABLE book_rating
ALTER active SET DEFAULT 1;
