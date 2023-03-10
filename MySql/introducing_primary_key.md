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

```ts
//Here's another way to specifying Primary Keys
  //One way of specifying a PRIMARY KEY

CREATE TABLE unique_cats (
	cat_id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL
);


//Another option:


CREATE TABLE unique_cats2 (
	cat_id INT,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    PRIMARY KEY (cat_id)
);

```

#The final thing and most useful thing is setting up auto increment on your primary key fields.

```ts

//Auto-increment

CREATE TABLE unique_cats3 (
    cat_id INT AUTO_INCREMENT,
    name VARCHAR(100),
    age INT,
    PRIMARY KEY (cat_id)
);

//or

CREATE TABLE unique_cats3 (
    cat_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,

);

```
