#Crud Introduction

- > C-REATE

```ts
INSERT INTO cats(name, age)
VALUES ('Taco', 14);

//Create the new cats table:
CREATE TABLE cats (
    cat_id INT AUTO_INCREMENT,
    name VARCHAR(100),
    breed VARCHAR(100),
    age INT,
    PRIMARY KEY (cat_id)
);
//Insert some cats:
INSERT INTO cats(name, breed, age)
VALUES ('Ringo', 'Tabby', 4),
       ('Cindy', 'Maine Coon', 10),
       ('Dumbledore', 'Maine Coon', 11),
       ('Egg', 'Persian', 4),
       ('Misty', 'Tabby', 13),
       ('George Michael', 'Ragdoll', 9),
       ('Jackson', 'Sphynx', 7);
```

- > R-EAD

```ts
//The SELECT clause:

SELECT * FROM cats;
// the * mean all
// we dont always need all we can also just grab just the `name`, `age` etc,
//we can also combine them by saying
SELECT name, age FROM cats;
// we will only grab those specific select
```

```ts
//The WHERE clause:
//We can use `WHERE` to narrow things down.

//Example:
SELECT * FROM cats WHERE age = 5;
SELECT name, age FROM cats WHERE age=4;
SELECT * FROM cats WHERE name="Egg";

```

- > U-PDATE

```ts
// How do we alter existing data?
// We use the update query



//for example:

UPDATE cats SET breed='Shorthair'
WHERE breed='Tabby';
//another way
UPDATE cats SET age=14
WHERE name='Misty;'
//another way
UPDATE employees SET current_status ="TERMANATED", last_name="fired";
//if you dont put the WHERE more than likely it will change everyhing from the current_status column and last_name.

//Rule of thumb
//So to prevent any unexpected updates, I recommend that we select whatever we are trying to update.
//for example:
SELECT * FROM cats WHERE name='Misty';

```

- > D-ELETE

```ts
//how to delete  rows from a table?

//for example:
DELETE FROM cats WHERE name='Egg';
// usually we need to use the WHERE clause to narrow it down because if we dont we might end up deleting every row from a table and we dont want that.

//Rule of thumb Just like UPDATE
//to prevent any unexpected DELETION, I recommend that we select whatever we are trying to DELETE.
//for example:
SELECT * FROM cats WHERE name='Misty';

```
