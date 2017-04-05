CREATE TABLE project(
	projectName varchar(25) NOT NULL,
	assignDate DATE NOT NULL,
	startDate DATE NOT NULL,
	dueDate DATE NOT NULL,
	completedDate DATE,
	projDesc varchar(255) NOT NULL,
	leaderID char(9),
	subteamName varchar(25) NOT NULL,
	CONSTRAINT PRIMARY KEY (projectName),
	projPriority int(10) NOT NULL CHECK (projPriority <= 10),
	CONSTRAINT FOREIGN KEY (subteamName) REFERENCES subteam(teamName),
	CONSTRAINT FOREIGN KEY (leaderID) REFERENCES member(bannerID)
);