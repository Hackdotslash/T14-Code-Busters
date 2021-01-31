CREATE TABLE booked(
    bookId int(11) PRIMARY key AUTO_INCREMENT,
	username VARCHAR(20) NOT NULL,
    states VARCHAR(20) NOT NULL,
    vehChoose INT(5) NOT NULL,
    hotelChoose INT(5) NOT NULL,
    totolDays INT(5) NOT NULL,
    totlaFare INT(5) NOT NULL,
    payId VARCHAR(50) NOT NULL
);