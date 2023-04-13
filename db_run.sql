CREATE TABLE `authors` (
    `id_author` int auto_increment,
    `name` varchar(200),
    `surname` varchar(200),
    primary key (id_author) 
);

INSERT INTO `authors` (`name`, `surname`) VALUES
('Fernando', 'Gamboa'),
('Carlos', 'Ruiz Zafón'),
('Stephen', 'King'),
('J.K.', 'Rowling'),
('Agatha','Christie');

CREATE TABLE `books` (
    `id_book` int auto_increment,
    `id_author` int,
    `title` varchar(200),
    `category` varchar(100),
    `publish_date` date,
    `rate` int,
    primary key (id_book),
    foreign key (id_author) references authors(id_author)
);

INSERT INTO `books` (`id_author`, `title`, `category`, `publish_date`, `rate`) VALUES
(1, 'La Última Cripta', 'Aventura', '2007-06-01', 5),
(2, 'La Sombra del Viento', 'Misterio', '2001-04-01', 5),
(3, 'El Resplandor', 'Terror', '1977-01-28', 4),
(3, 'Carrie', 'Terror', '1974-04-05', 3),
(4, 'Harry Potter y las reliquias de la Muerte', 'Fantasía', '2007-07-21', 5),
(5, 'Diez negritos', 'Novela negra', '1939-11-06', 3),
(1, 'Guinea', 'Aventura', '2008-10-21', 5),
(4, 'Harry Potter y la Piedra Filosofal', 'Fantasía', '1997-06-26', 4);