# Mysql Query

## Login
```sql
mysql -u root -p
```

## Select
```sql
SELECT first_name from table_name;
```

## Show Databases

```sql
SHOW database_name;
```

## Create Database

```sql
CREATE DATABASE database_name;
```

## Delete Database

```sql
DROP DATABASE database_name;
```

## Select Database

```sql
USE database_name;
```

## Create Table

```sql
CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
   first_name VARCHAR(100) NOT NULL,
   last_name VARCHAR(100) NOT NULL,
   email VARCHAR(50) NOT NULL,
   password VARCHAR(20) NOT NULL,
   date DATETIME
   );
```

## Delete / Drop Table

```sql
DROP TABLE tablename;
```
## Show Tables

```sql
SHOW TABLES;
```

## Insert Row

```sql
INSERT INTO users (first_name, last_name, email, password, date) values ('anything', 'anything', 'any@gmail.com', '123', now());
```

## Delete Row

```sql
DELETE FROM users WHERE name = 'anything';
```

## Update Row

```sql
UPDATE users SET email = 'notanything@gmail.com' WHERE id = 1;

```

## Add New Column

```sql
ALTER TABLE users ADD location VARCHAR(20);
```

## Modify Column

```sql
ALTER TABLE users MODIFY COLUMN age INT(3);
```

## Like (Searching)

```sql
SELECT * FROM users WHERE dept LIKE 'a%';
SELECT * FROM users WHERE dept LIKE 'an%';
SELECT * FROM users WHERE dept LIKE '%y';
SELECT * FROM users WHERE dept LIKE '%ef%';
```

## Not Like

```sql
SELECT * FROM users WHERE dept NOT LIKE 'any%';
```
