CREATE TABLE states(
    id int(11) PRIMARY key AUTO_INCREMENT,
	state VARCHAR(20) NOT NULL,
    location VARCHAR(20) NOT NULL,
    district varchar(20) NOT NULL,
    cases int(11)
);
INSERT INTO states (state,location,district,cases) VALUES ("Kerela","Palakkayam Thattu- Paithalmala", "KANNUR", "r")
