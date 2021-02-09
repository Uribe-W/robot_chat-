CREATE DATABASE robotchat;

USE robotchat;

CREATE TABLE `entradas` (
  `id` int(11) NOT NULL,
  `pregunta` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



CREATE TABLE `salidas` (
  `id` int(11) NOT NULL,
  `respuesta` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `salidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pregunta` (`id_pregunta`);

