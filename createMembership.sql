CREATE TABLE membership(
	bannerID char(9) NOT NULL,
	subteamName varchar(25) NOT NULL,
	joinDate DATE,
	CONSTRAINT PRIMARY KEY (bannerID, subteamName),
	CONSTRAINT FOREIGN KEY (bannerID) REFERENCES member(bannerID),
	CONSTRAINT FOREIGN KEY (subteamName) REFERENCES subteam(teamName)
);