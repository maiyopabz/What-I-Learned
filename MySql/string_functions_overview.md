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
