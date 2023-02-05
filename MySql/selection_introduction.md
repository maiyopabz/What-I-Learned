#Aggregate Functions # Count Basic

```ts

SELECT COUNT(*) FROM books;
//Select the number rows from books

SELECT COUNT(author_lname) FROM books;
//It's counting every time that a value is present in an author f name in that column. So all of our author f names are there. I don't think we have any null, but if I were to insert one into books, insert into books is anything required.


SELECT COUNT(DISTINCT author_lname) FROM books;
//How many distinct or unique author first names.

```
