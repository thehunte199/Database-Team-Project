CREATE TABLE project(
	projectName varchar(25) NOT NULL,
	startDate DATE NOT NULL,
	dueDate DATE NOT NULL,
	completedDate DATE,
	projDesc varchar(255) NOT NULL,
	projPriority int NOT NULL,
	CONSTRAINT PRIMARY KEY (projectName)
);