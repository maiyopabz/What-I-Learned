#Introducing Primary Keys

- > Primary Keys are basically a `Unique Identifier`

```ts
//note when we define a table we can add on the primary key constraint

CREATE TABLE unique_cats (
    cat_id INT NOT NULL PRIMARY KEY,
    name VARCHAR(100),
    age INT
);

```

- > DESC unique_cats; to check the table
- > The key shows would be `PRI`for primary

If we call an insert for example:

```ts
INSERT INTO unique_cats(cat_id, name, age)
    VALUES (1, 'bing', 2);

//this should work great
// but If we recall that line and change the string to bongo and leave everything the same.
// this should give you an error saying its duplicate entry. since primary keys are unique.
//If we do a SELECT * FROM unique_cats; we wont see that second insert.
//we have to change it to a unique VALUES

INSERT INTO unique_cats(cat_id, name, age)
    VALUES (1, 'bongo', 2);

```
