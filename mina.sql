DROP TABLE IF EXISTS PATIENTS;

CREATE TABLE PATIENTS(
	ptId varchar(20) PRIMARY KEY,
	ptName varchar(50) NOT NULL,
	ptAge int(10),
	docId varchar(10) FOREIGN KEY,
	dat varchar(20) NOT NULL
);

DROP TABLE IF EXISTS DOCTORS;

CREATE TABLE DOCTORS(
	docId varchar(10) PRIMARY KEY,
	docName varchar(50) NOT NULL
);
