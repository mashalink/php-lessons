-- 1. Удаляем базу, если она есть (чистый старт)
DROP DATABASE IF EXISTS lionDB;

-- 2. Создаём базу заново
CREATE DATABASE lionDB
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

-- 3. Переключаемся в неё
USE lionDB;

-- 4. Создаём таблицу users
CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 5. Добавляем трёх пользователей (пароли пустые, дальше PHP)
INSERT INTO users (name, password) VALUES
('Maria', ''),
('Leon', ''),
('Lion', '');
-- 6. Готово!