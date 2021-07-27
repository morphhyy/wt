## Import MYSQL DATABASE

First, log in to MySQL as root to create new databases:
```sql
mysql -u root -p
```

Then create a new database with the following command. In this example, the new database is called new_database:

```sql
CREATE DATABASE new_database;
```

Then exit the MySQL shell by pressing CTRL+D. From the normal command line, you can import the dump file with the following command:

```sql 
mysql -u username -p new_database < database.sql
```