CREATE DATABASE termproj;

USE termproj;

CREATE TABLE assignments 
(
    id int primary key auto_increment, 
    topic varchar(255), 
    student varchar(255) 
);


INSERT INTO assignments (student, topic) VALUES ('Taylor','Azure DevOps');
INSERT INTO assignments (student, topic) VALUES ('Peyton','Docker');
INSERT INTO assignments (student, topic) VALUES ('Troy','Kubernetes');
INSERT INTO assignments (student, topic) VALUES ('Alex','Android');
INSERT INTO assignments (student, topic) VALUES ('Jacob','Ruby on Rails');
INSERT INTO assignments (student, topic) VALUES ('Justin','AWS Lambda');
INSERT INTO assignments (student, topic) VALUES ('John','Amazon EC2');
INSERT INTO assignments (student, topic) VALUES ('Austin','Heroku');
INSERT INTO assignments (student, topic) VALUES ('Adam','Deep Learning');
INSERT INTO assignments (student, topic) VALUES ('Koby','Big Data and Data Analytics');
