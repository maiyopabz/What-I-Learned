#String Functions Overview

- > https://dev.mysql.com/doc/refman/8.0/en/string-functions.html

#Concat

```ts
SELECT CONCAT('pi', 'ckle');

SELECT CONCAT(author_fname,' ', author_lname) AS author_name FROM books;
//If we want to have space we can use  ' '
//we can also use Alias (AS)

SELECT CONCAT_WS('-',title, author_fname, author_lname) FROM books;
//CONTACT WITH SEPARATORS
// WE PROVIDE THAT FIRST SEPARATOR '-'
```

#Substring

```ts

SELECT SUBSTRING('Hello World', 1, 4);
///output would be Hell

SELECT SUBSTRING('Hello World', 7);
//If we dont get a second number it will auto start at that position and grab everyhting along with it until it ends.
///output would be world

SELECT SUBSTRING('Hello World', -3);
//this would be counting backward

SELECT SUBSTRING(title, 1, 10) AS 'short title' FROM books;

SELECT SUBSTR(title, 1, 10) AS 'short title' FROM books;
```
