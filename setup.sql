CREATE TABLE Student {
	name VARCHAR(50),
	bio VARCHAR(500),
	sex VARCHAR(6),
	field VARCHAR(20),
	email VARCHAR(50),
	PRIMARY KEY (name, email)
}
CREATE TABLE Mentor {
	name VARCHAR(50),
	bio VARCHAR(500),
	sex VARCHAR(6),
	field VARCHAR(20),
	email VARCHAR(50),
	PRIMARY KEY (name, email)
}