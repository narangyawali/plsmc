# for database setup 


```sql
 CREATE DATABASE student_db;

USE student_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    roll_number INT NOT NULL , 
    address VARCHAR(255)
);

```