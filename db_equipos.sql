/*
	================================
	Este archivo define la tabla e inserta algunos datos
	================================
*/

CREATE TABLE equipos(
	id bigint identity(1,1) primary key,
    abrebacion varchar(50) NOT NULL,
	nombreEquipo varchar(50) NOT NULL,
    nombreSimplificado varchar(50) NOT NULL,
    localizacion varchar(50) NOT NULL
);

insert into equipos
(nombreEquipo, abrebacion, nombreSimplificado, localizacion)
values
('Atlanta Hawks', 'ATL', 'Hawks', 'Atlanta'),
('Boston Celtics', 'BOS', 'Celtics', 'Boston'),
('Brooklyn Nets', 'BKN', 'Nets', 'Brooklyn'),
('Charlotte Hornets', 'CHA', 'Hornets', 'Charlotte'),
('Chicago Bulls', 'CHI', 'Bulls', 'Chicago'),
('Cleveland Cavaliers', 'CLE', 'Cleveland', 'Cavaliers'),
('Dallas Mavericks', 'DAL', 'Mavericks', 'Dallas'),
('Denver Nuggets', 'DEN', 'Nuggets', 'Denver'),
('Detroit Pistons', 'DET', 'Pistons', 'Detroit'),
('Golden State Warriors', 'GSW', 'Warriors', 'San Francisco'),
('Houston Rockets', 'HOU', 'Rockets', 'Houston'),
('Indiana Pacers', 'IND', 'Pacers', 'Indiana'),
('Los Angeles Clippers', 'LAC', 'Clippers', 'Los Angeles'),
('Los Angeles Lakers', 'LAL', 'Lakers', 'Los Angeles'),
('Memphis Grizzlies', 'MEM', 'Grizzlies', 'Memphis'),
('Miami Heat', 'MIA', 'Heat', 'Miami'),
('Milwaukee Bucks', 'MIL', 'Bucks', 'Milwaukee'),
('Minnesota Timberwolves', 'MIN', 'Timberwolves', 'Minnesota'),
('New Orleans Pelicans', 'NOP', 'Pelicans', 'New Orleans'),
('New York Knicks', 'NYK', 'Knicks', 'New York'),
('Oklahoma City Thunder', 'OKC', 'Thunder', 'Oklahoma City'),
('Orlando Magic', 'ORL', 'Magic', 'Orlando'),
('Philadelphia Seventysixers', 'PHI', 'sixers', 'Philadelphia'),
('Phoenix Suns', 'PHX', 'Suns', 'Phoenix'),
('Portland Trail Blazers', 'POR', 'Blazers', 'Portland'),
('Sacramento Kings', 'SAC', 'Kings', 'Sacramento'),
('San Antonio Spurs', 'SAS', 'Spurs', 'San Antonio'),
('Toronto Raptors', 'TOR', 'Raptors', 'Toronto'),
('Utah Jazz', 'UTA', 'Jazz', 'Utah'),
('Washington Wizards', 'WAS', 'Wizards', 'Washington');