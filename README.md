# KitsKingdom - Football Kits Store

KitsKingdom is a simple football shirts store built with HTML, CSS, JavaScript and PHP.  
The project presents a small e-commerce experience where users can browse football kits, add products to a cart and submit an order through a PHP/MySQL payment form.

## Features

- home page with team selection;
- product pages for FC Barcelona, Liverpool FC, AC Milan and Manchester United;
- home, away and third kits for each team;
- cart management using browser `localStorage`;
- quantity and total price calculation;
- currency switch between EUR and MAD;
- payment/order form using PHP;
- MySQL table for saving orders;
- simple French/Arabic language switch on the home page.

## Project Structure

```text
index.php          Home page and team selector
Barcelona.html     FC Barcelona kits page
Liverpool.html     Liverpool kits page
milan.html         AC Milan kits page
manunited.html     Manchester United kits page
panier.html        Cart page
paiement.php       Payment/order form with MySQL insertion
commande.html      Order form page
*.css              Stylesheets for each page
*.jpg              Product and homepage images
database.sql       Database and table creation script
```

## Technologies

```text
HTML | CSS | JavaScript | PHP | MySQL
```

## How It Works

1. The user opens `index.php`.
2. The user selects a team from the dropdown menu.
3. The selected team page displays available kits.
4. When the user clicks `Commander`, the product is added to the cart using `localStorage`.
5. `panier.html` displays the cart, quantities and total amount.
6. `paiement.php` collects customer information and saves the order in MySQL.

## Requirements

- PHP local server, for example XAMPP, WAMP or Laragon;
- MySQL or MariaDB;
- web browser.

## Database Setup

1. Start Apache and MySQL.
2. Open phpMyAdmin.
3. Import `database.sql`.

Or run the SQL manually:

```sql
CREATE DATABASE IF NOT EXISTS kitskingdom;
USE kitskingdom;

CREATE TABLE IF NOT EXISTS commandes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(120) NOT NULL,
  adresse TEXT NOT NULL,
  telephone VARCHAR(30) NOT NULL,
  produits TEXT NOT NULL,
  total DECIMAL(10, 2) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Run Locally

With XAMPP or WAMP:

1. Copy the project folder into `htdocs` or `www`.
2. Start Apache and MySQL.
3. Open:

```text
http://localhost/Football_kits_store/index.php
```

With PHP built-in server:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000/index.php
```

## MySQL Configuration

The payment page currently connects with:

```php
new mysqli("localhost", "root", "", "kitskingdom");
```

If your local MySQL user or password is different, update this line in `paiement.php`.

## Notes

This is an educational project focused on basic e-commerce page structure, cart logic and PHP/MySQL form submission. It does not include real online payment processing.

