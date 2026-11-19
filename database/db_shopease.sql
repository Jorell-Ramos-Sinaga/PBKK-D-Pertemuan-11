-- Database: db_shopease
-- Aplikasi: ShopEase Online Store (CodeIgniter 4)

CREATE DATABASE IF NOT EXISTS db_shopease;
USE db_shopease;

-- Struktur tabel `users`
CREATE TABLE IF NOT EXISTS users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('customer', 'admin', 'operator') NOT NULL DEFAULT 'customer',
    phone VARCHAR(20) NULL,
    address TEXT NULL,
    created_at DATETIME NULL,
    updated_at DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
