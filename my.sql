-- create
CREATE TABLE EMPLOYEE (
  Id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  adress TEXT NOT NULL
);

-- insert
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('Peter', 17, 'Moscow');
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('David', 33,'Ufa');
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('Olga', 30,'Moscow');
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('Pavel', 28,'Minsk');
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('Vasya', 19,'Moscow');
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('Sergey', 32,'Riga');
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('Elena', 20,'Moscow');
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('Andrey', 25,'Ufa');
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('Masha', 35,'Moscow');
INSERT INTO EMPLOYEE (name, age, adress) VALUES ('Anton', 24,'Kursk');

-- fetch 
SELECT name FROM employee WHERE age>=18 AND age<30 AND adress='Moscow'; 