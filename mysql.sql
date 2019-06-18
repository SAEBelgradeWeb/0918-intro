INSERT INTO users (name, email, password, remember_token) VALUES ('Vladimir', 'v.lelicanin+1@sae.edu', '123', '1234');
INSERT INTO users SET
  `name`="John",
  `password`="123",
  `email`="bla@balc.com";

SELECT * FROM users;
SELECT name, password FROM users;
SELECT name, password FROM users ORDER BY name;
SELECT name, email, password FROM users ORDER BY email DESC;

SELECT * FROM users LIMIT 3;
SELECT * FROM users LIMIT 3, 3;

SELECT * FROM users WHERE name="Admin";
SELECT * FROM users WHERE id > 5;
SELECT * FROM users WHERE id > 5 AND id <= 7;
SELECT * FROM users WHERE (id = 5 OR id = 1) AND name = "Admin";

UPDATE users SET name = "Vlada" WHERE id = 2;
UPDATE users
  SET
  name = "Vlada",
  email = "v.lelicanin@sae.edu1"
  WHERE name="Vladimir";

DELETE FROM users WHERE name="Vlada";


/* AGGREGATES */
SELECT AVG(price) FROM products;
SELECT MAX(price), name FROM products; /* THERE IS ALSO MIN */
SELECT COUNT(price) FROM products WHERE price > 20;

SELECT COUNT(id), category FROM products GROUP BY category;
SELECT COUNT(id), category FROM products GROUP BY category;
SELECT SUM(price), category FROM products GROUP BY category;
SELECT AVG(price) AS 'Average Price', category AS 'Tool Type' FROM products GROUP BY category; /* ALIAS */

