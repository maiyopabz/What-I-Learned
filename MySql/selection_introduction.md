#Aggregate Functions

# Count Basic

```ts

SELECT COUNT(*) FROM books;
//Select the number rows from books

SELECT COUNT(author_lname) FROM books;
//It's counting every time that a value is present in an author f name in that column. So all of our author f names are there. I don't think we have any null, but if I were to insert one into books, insert into books is anything required.


SELECT COUNT(DISTINCT author_lname) FROM books;
//How many distinct or unique author first names.

```

#Group By

```ts

// grouped by summarizes or aggregates identical data into single rows.


SELECT author_lname, COUNT(*)
FROM books
GROUP BY author_lname;
//Were are selecting the group by author_lname and counting it by Group and not all rows.

SELECT
    author_lname, COUNT(*) AS books_written
FROM
    books
GROUP BY author_lname
ORDER BY books_written DESC;

```

#MIN and MAX Basics

```ts
SELECT MIN(released_year) FROM books;

SELECT MAX(pages) FROM books;
//Finding the maximum pages of books.

SELECT MIN(author_lname) FROM books;
//This will find the lowest of the alphabet

SELECT MIN(author_lname), MAX(author_lname) FROM books;
// And now we're finding the lowest or the earliest alphabetically and the latest alphabetically.

```

    What if i want the title of the longest book?

#Subquries
