<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shop Home</title>
   <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    background-color: #444;
}

nav ul li {
    margin: 0 1rem;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

.container {
    padding: 2rem;
    text-align: center;
}

.product-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.product {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin: 1rem;
    padding: 1rem;
    width: 200px;
}

.product img {
    max-width: 100%;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
    position: fixed;
    width: 100%;
    bottom: 0;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

form label {
    margin: 0.5rem 0;
}

form input[type="text"], form input[type="password"], form input[type="number"] {
    padding: 0.5rem;
    margin: 0.5rem 0;
    width: 80%;
    max-width: 300px;
}

form input[type="submit"] {
    padding: 0.5rem 2rem;
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}
</style>
</head>
<body>
    <header>
        <h1>Shop Home</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>Welcome to Our Shop</h2>
        <p><a href="products.php">Browse Products</a></p>
    </div>
    <footer>
        <p>&copy; 2024 Shop</p>
    </footer>
</body>
</html>