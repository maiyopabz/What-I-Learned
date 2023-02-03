#Refining Selections

Notes: learn all about different ways of narrowing our selections or refining our selections, or at least manipulating them in some way to do things like order or sort our results, or only get unique or distinct results to limit the number of results we get. These are different things that we can add on to our queries to change how our selections behave.

```ts
INSERT INTO books
    (title, author_fname, author_lname, released_year, stock_quantity, pages)
    VALUES ('10% Happier', 'Dan', 'Harris', 2014, 29, 256),
           ('fake_book', 'Freida', 'Harris', 2001, 287, 428),
           ('Lincoln In The Bardo', 'George', 'Saunders', 2017, 1000, 367);

```

#DISTINCT

```ts
//distinct clause which we can use to eliminate duplicate results, only getting distinct results in a query

SELECT author_lname FROM books;

SELECT DISTINCT author_lname FROM books;

SELECT author_fname, author_lname FROM books;

SELECT DISTINCT CONCAT(author_fname,' ', author_lname) FROM books;
//we if want to look for a distinct fist and last name

SELECT DISTINCT author_fname, author_lname FROM books;

//note: So that's distinct. We use that a lot.
//Make sure it comes after select before one or more column names.

```

#ORDER BY

```ts
SELECT * FROM books ORDER BY author_lname;

SELECT * FROM books ORDER BY author_lname DESC;

SELECT * FROM books ORDER BY released_year;

//we can also order by multiple columns

SELECT author_lname, released_year, title FROM books ORDER BY author_lname,released_year;

//we can also do sort by desc.
SELECT book_id, author_fname, author_lname, pages
FROM books ORDER BY 2 desc;

//we can also order by columns that aren't necessarily part of the table, but our results are values that we've asked SQL for.

//For example, remember that we can do things like can cat select concat?
//I hope you get the picture there by using an alias.
//I can then reference that name and order by later on.

SELECT CONCAT(author_fname, '', author_lname) AS author FROM books ORDER BY author;

SELECT book_id, author_fname, author_lname, pages
FROM books ORDER BY author_lname, author_fname;


```

#Limit

```ts

//Limit allows us to control the number of results we get back.

//On its own limit, followed by a number, will limit the number of results we get back. I mean, we could just select the first five, let's do author or book ID, I think is


SELECT book_id, title, released_year FROM books ORDER BY released_year LIMIT 5;
//what if I wanted to get the first five books that were released, the earliest five released books?


SELECT title FROM books LIMIT 3;

SELECT title FROM books LIMIT 1;

SELECT title FROM books LIMIT 10;

SELECT * FROM books LIMIT 1;

SELECT title, released_year FROM books
ORDER BY released_year DESC LIMIT 5;

SELECT title, released_year FROM books
ORDER BY released_year DESC LIMIT 1;

SELECT title, released_year FROM books
ORDER BY released_year DESC LIMIT 14;

SELECT title, released_year FROM books
ORDER BY released_year DESC LIMIT 0,5;

SELECT title, released_year FROM books
ORDER BY released_year DESC LIMIT 1,5;
//fancy way

SELECT title, released_year FROM books
ORDER BY released_year DESC LIMIT 0,3;

SELECT title, released_year FROM books
ORDER BY released_year DESC LIMIT 1,3;

SELECT title, released_year FROM books
ORDER BY released_year DESC LIMIT 10,1;

SELECT * FROM tbl LIMIT 95,18446744073709551615;

SELECT title FROM books LIMIT 5;

SELECT title FROM books LIMIT 5, 123219476457;

SELECT title FROM books LIMIT 5, 50;
```

#LIKE

```ts

//But a lot of the time we may want to perform some fuzzier searching where it's not based only on an exact match, and that's where LIKE comes in.

SELECT title, author_fname, author_lname, pages
FROM books
WHERE author_fname LIKE '%da%';

SELECT title, author_fname, author_lname, pages
FROM books
WHERE title LIKE '%:%';

SELECT * FROM books
WHERE author_fname LIKE '____';

SELECT * FROM books
WHERE author_fname LIKE '_a_';
```
