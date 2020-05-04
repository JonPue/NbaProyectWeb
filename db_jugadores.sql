/*
	================================
	Este archivo define la tabla e inserta algunos datos
	================================
*/

CREATE TABLE jugadores(
	iid bigint identity(1,1) primary key,
    nombre varchar(50) NOT NULL,
    apellido varchar(50) NOT NULL,
	nombreEquipoo varchar(50) NOT NULL
);

insert into equipos
(nombre, apellido, nombreEquipo)
values
('James', 'Hardem', 'Houston Rockets'),
('Lebron', 'James', 'Los Angeles Lakers'),
('Jasum', 'Tatum', 'Boston Celtics'),
('Kemba', 'Walker', 'Boston Celtics'),
('Marcus', 'Smart', 'Boston Celtics'),
('Damian', 'Lillard', 'Portland Trail Blazers'),
('Sergi', 'Ibaka', 'Toronto Raptors'),
('Paul', 'George', 'Los Angeles Clippers'),
('Chris', 'Paul', 'Oklahoma City Thunder'),
('Donovan', 'Mitchell', 'Utah Jazz'),
('Joel', 'Emmbid', 'Philadelphia Seventysixers'),
('Aroon', 'Goroon', 'Orlando Magic'),
('Giannis', 'Antetokoumpo', 'Milwaukee Bucks'),
('Zion', 'Williamson', 'New Orleans Pelicans'),
('Jimmy', 'Butler', 'Miami Heat'),
('Victor', 'Oladipo', 'Indiana Pacers'),
('Stephen', 'Curry', 'Golden State Warriors'),
('Derrick', 'Rose', 'Detroit Pistons'),
('Nicola', 'Jovic', 'Denver Nuggets'),
('Luka', 'Doncic', 'Dallas Mavericks'),
('Temetrius', 'Ja Morant', 'Memphis Grizzlies'),
('Karl Anthony', 'Tonws', 'Minnesota Timberwolves'),
('Julius', 'Randle', 'New York Knicks'),
('DeAron', 'Fox', 'Sacramento Kings'),
('DeMar', 'DeRozan', 'San Antonio Spurs'),
('Brandley', 'Beal', 'Washington Wizards'),
('Kevin', 'Love', 'Cleveland Cavaliers'),
('Zach', 'Lavine', 'Chicago Bulls'),
('Terry', 'Rozier', 'Charlotte Hornets'),
('Kevin', 'Durant', 'Brooklyn Nets'),
('Trae', 'Young', 'Atlanta Hawks'),
('Ricky', 'Rubio', 'Phoenix Suns');