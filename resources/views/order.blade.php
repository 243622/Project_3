<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Pizza</title>
    @vite(['resources/css/app.css','resources/css/custom.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <ul>
            <li><a href="/">Homepage</a></li>
            <li><a href="order">Order</a></li>
                <li><a href="checkout">Checkout</a></li> 
            </ul>
        </nav>
        <img src="PizzaFotos/_09253db4-5f28-4da4-b255-46c05fda052b-removebg-preview.png" alt="StonksFoto" width="100" >
    </header>
    <main>
        <h1>Available Pizzas</h1>
        <div class="pizza-menu">
            <div class="pizza-card">
                <img src="/Pizzafotos/BarbequeChickenPizza.png" alt="Pizza 1">
                <h2>Pizza 1</h2>
                <p>Description of Pizza 1</p>
                <p>Price: $10.99</p>
                <div class="order-section">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <button onclick="addToCart(quantity, 10.99)">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="pizza-menu">
            <div class="pizza-card">
                <img src="/Pizzafotos/HawaiiPizza.png" alt="Pizza 1">
                <h2>Pizza 1</h2>
                <p>Description of Pizza 1</p>
                <p>Price: $10.99</p>
                <div class="order-section">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <button onclick="addToCart(quantity, 10.99)">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="pizza-menu">
            <div class="pizza-card">
                <img src="/Pizzafotos/SalamiPizza.png" alt="Pizza 1">
                <h2>Pizza 1</h2>
                <p>Description of Pizza 1</p>
                <p>Price: $10.99</p>
                <div class="order-section">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <button onclick="addToCart(quantity, 10.99)">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="pizza-menu">
            <div class="pizza-card">
                <img src="/Pizzafotos/TonijnPizza.png" alt="Pizza 1">
                <h2>Pizza 1</h2>
                <p>Description of Pizza 1</p>
                <p>Price: $10.99</p>
                <div class="order-section">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <button onclick="addToCart(quantity, 10.99)">Add to Cart</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>

    <script src="resources/js/app.js"></script>
    <script>
        function addToCart(pizzaName, price) {
            var quantity = document.getElementById('quantity').value;
            var totalPrice = quantity * price;
            alert("Added " + quantity + " " + pizzaName + "(s) to cart. Total Price: $" + totalPrice.toFixed(2));
        }
    </script>
</body>
</html>
