-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Waktu pembuatan: 24 Nov 2024 pada 16.46
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: pemweb-db
--

-- --------------------------------------------------------

--
-- Struktur dari tabel products
--

CREATE TABLE products (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  price int(11) NOT NULL,
  image varchar(255) NOT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel products
--

INSERT INTO products (id, name, price, image, created_at, updated_at) VALUES
(39, 'sabun', 5000, '/upload/WhatsApp Image 2023-11-02 at 19.44.03.jpeg', '2023-11-02 13:30:25', NULL),
(40, 'detergen', 6000, '/upload/1698932052-WhatsApp Image 2023-11-02 at 19.44.03.jpeg', '2023-11-02 13:34:12', NULL),
(44, 'Teh Sosro', 4500, 'upload/1732461831-52185898f5e7b5cd01fc5b3fa647c36d-Desktop Wallpaper.png', '2024-11-24 15:23:51', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel users
--

CREATE TABLE users (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  role enum('admin','user') NOT NULL DEFAULT 'user',
  password varchar(255) NOT NULL,
  photo varchar(255) DEFAULT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel users
--

INSERT INTO users (id, name, email, role, password, photo, created_at, updated_at) VALUES
(5, 'Yusuf Eka Wicaksana', 'ekayusuf.wicaksana@gmail.com', 'user', '$2y$10$rLNoxFGQoNddoiWy/ebYdOkjhU0ff14xHdXPc2yJIi2APAWvQ.Cra', NULL, '2023-10-26 13:45:09', NULL),
(8, 'Haerul Yuda Aditiya', 'if23.haeruladitiya@mhs.ubpkarawang.ac.id', 'user', '$2y$10$yBtwIE2br7WGgdJZVkp2O.oSMtJbJgIj7sHVYrkqXiFalpJMrKrf6', NULL, '2024-11-24 07:26:40', NULL),
(10, 'Admin', 'admin@admin.com', 'admin', '$2y$10$EyXFIu6pwfZg0wxM9zev2.uM0h9WnSCkrnTMRHP7pTas70/mkbq5W', NULL, '2024-11-24 14:13:51', '2024-11-24 14:13:51'),
(13, 'Teh Sosro', '', 'user', '$2y$10$1Zp8v5SpsoS2p1ynA0nG1OOn63D3hQc1FWgtfLpKuO5kp9AtPCRK6', NULL, '2024-11-24 09:13:34', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel products
--
ALTER TABLE products
  ADD PRIMARY KEY (id);

--
-- Indeks untuk tabel users
--
ALTER TABLE users
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY email (email);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel products
--
ALTER TABLE products
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel users
--
ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
