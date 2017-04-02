CREATE TABLE working(
	PName varchar(25) NOT NULL,
	subteamName varchar(25) NOT NULL,
	assignDate DATE,
	CONSTRAINT PRIMARY KEY (PName, subteamName),
	CONSTRAINT FOREIGN KEY (PName) REFERENCES project(projectName),
	CONSTRAINT FOREIGN KEY (subteamName) REFERENCES subteam(teamName)
);