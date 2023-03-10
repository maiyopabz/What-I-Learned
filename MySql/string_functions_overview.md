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

#Combining String Functions

```ts
SELECT CONCAT
    (
        SUBSTRING(title, 1, 10),
        '...'
    ) AS 'short title'
FROM books;

//another example

SELECT
    CONCAT(
       SUBSTR(author_fname, 1, 1),
       '.',
       SUBSTR(author_lname, 1, 1),
       '.',
    ) AS author_initials
    FROM
    books;

```

- > https://codebeautify.org/sqlformatter (SQL FORMATTER)

#Replace

```ts
//We have to provide three different string arguments.
// first is content, second would be part you want to replace, third is the content you want to insert.
//case sensitive

SELECT REPLACE('Hello World', 'Hell', '%$#@');

SELECT REPLACE('Hello World', 'l', '7');

SELECT REPLACE('Hello World', 'o', '0');

SELECT REPLACE('HellO World', 'o', '*');

SELECT
  REPLACE('cheese bread coffee milk', ' ', ' and ');

SELECT REPLACE(title, 'e ', '3') FROM books;

SELECT REPLACE(title, ' ', '-') FROM books;

//note also check and  the

SELECT REPLACE(tittle, ' ', '-') FROM books;
```

#Reverse

```ts

SELECT REVERSE('Hello World');

SELECT REVERSE('meow meow');

SELECT REVERSE(author_fname) FROM books;

SELECT CONCAT('woof', REVERSE('woof'));

SELECT CONCAT(author_fname, REVERSE(author_fname)) FROM books;

```

#CHAR_LENGHT

```ts
SELECT CHAR_LENGTH('Hello World');

SELECT CHAR_LENGTH(title) as length, title FROM books;

SELECT author_lname, CHAR_LENGTH(author_lname) AS 'length' FROM books;

SELECT CONCAT(author_lname, ' is ', CHAR_LENGTH(author_lname), ' characters long') FROM books;
```

#UPPER() and LOWER()

```ts
//Change A String's Case
//this help us change casing of a string to upper and lower case

SELECT UPPER('Hello World');

SELECT LOWER('Hello World');

SELECT UPPER(title) FROM books;

SELECT CONCAT('MY FAVORITE BOOK IS ', UPPER(title)) FROM books;

SELECT CONCAT('MY FAVORITE BOOK IS ', LOWER(title)) FROM books;
```

#Other String functions

```ts
SELECT INSERT('Hello Bobby', 6, 0, 'There');

SELECT LEFT('omghahalol!', 3);

SELECT RIGHT('omghahalol!', 4);

SELECT REPEAT('ha', 4);

SELECT TRIM('  pickle  ');
```
