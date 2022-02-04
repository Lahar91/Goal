-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2022 pada 01.30
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_goal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `goal`
--

CREATE TABLE `goal` (
  `id_goal` int(11) NOT NULL,
  `nama_goal` varchar(255) NOT NULL,
  `status_goal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `goal`
--

INSERT INTO `goal` (`id_goal`, `nama_goal`, `status_goal`) VALUES
(2, 'nama', 'Finish'),
(3, 'nama1', 'Finish'),
(4, 'aws', 'Finish'),
(5, 'Test 2', 'Finish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(11) NOT NULL,
  `id_subgoal` int(11) NOT NULL,
  `nama_plan` varchar(255) NOT NULL,
  `status_plan` varchar(255) NOT NULL,
  `catatan_plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `plan`
--

INSERT INTO `plan` (`id_plan`, `id_subgoal`, `nama_plan`, `status_plan`, `catatan_plan`) VALUES
(2, 3, 'ada', 'Proses', ''),
(3, 3, 'aaa', 'Finish', 'testt'),
(4, 4, 'hai', 'Finish', 'tests'),
(5, 5, 'test1', 'Finish', 'hai hai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subgoal`
--

CREATE TABLE `subgoal` (
  `id_subgoal` int(11) NOT NULL,
  `id_goal` int(11) NOT NULL,
  `nama_subgoal` varchar(255) NOT NULL,
  `status_subgoal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subgoal`
--

INSERT INTO `subgoal` (`id_subgoal`, `id_goal`, `nama_subgoal`, `status_subgoal`) VALUES
(3, 2, 'aa', 'Finish'),
(4, 4, 'tambah', 'Finish'),
(5, 5, 'hai', 'Finish');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `goal`
--
ALTER TABLE `goal`
  ADD PRIMARY KEY (`id_goal`);

--
-- Indeks untuk tabel `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indeks untuk tabel `subgoal`
--
ALTER TABLE `subgoal`
  ADD PRIMARY KEY (`id_subgoal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `goal`
--
ALTER TABLE `goal`
  MODIFY `id_goal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `subgoal`
--
ALTER TABLE `subgoal`
  MODIFY `id_subgoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
