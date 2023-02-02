#Create Table/ Insert Exercise

```ts
//Define an Employees table, with the following fields:

// - > id - number (automatically increments) and primary key
// - > last_name - text, mandatory
// - > first_name - text, mandatory
// - > middle_name - text, not mandatory
// - > age - number mandatory
// - > current_status - text, mandatory, defaults to `employed`
```

```ts
//Defining employees table

CREATE TABLE employees (
    id INT AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    middle_name VARCHAR(255),
    age INT NOT NULL,
    current_status VARCHAR(255) NOT NULL DEFAULT 'employed',
    PRIMARY KEY(id)
);

//Another way of defining the primary key: (## This is what i prefered!)

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    middle_name VARCHAR(255),
    age INT NOT NULL,
    current_status VARCHAR(255) NOT NULL DEFAULT 'employed'
);

// DESC employees
//thisshows the table and would show everyhing all the diffrent columns and their types.

//A test INSERT:

INSERT INTO employees(first_name, last_name, age) VALUES
('Dora', 'Smith', 58);
```
