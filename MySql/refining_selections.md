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
