CREATE TABLE users (
  uname varchar(10),
  fromcity varchar(80) not null,
  tocity varchar(80) not null,
  PRIMARY KEY (uname)
);

INSERT INTO users VALUES ('admin', 'Auckland, Wellington', 'GMT: Dublin, Edinburgh, Lisbon, London');
INSERT INTO users VALUES ('user', 'Alaska', 'Hawaii');
