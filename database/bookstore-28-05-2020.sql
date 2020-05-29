USE bookstore;

ALTER TABLE users CHANGE username email VARCHAR(50) NOT NULL UNIQUE;
