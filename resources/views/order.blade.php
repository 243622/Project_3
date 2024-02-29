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
        <h2>Top For</h2>
        <div class="pizza-menu">
            <div class="pizza-card">
                <img src="/PizzaFotos/BarbecueChicken.png" alt="Barbecue Chicken Pizza">
                <h2>Barbecue Chicken Pizza</h2>
                <p>Description of Barbecue Chicken Pizza</p>
                <p>Price: $10.99</p>
                <div class="order-section">
                    <label for="quantity1">Quantity:</label>
                    <input type="number" id="quantity1" name="quantity" value="1" min="1">
                    <button onclick="addToCart('Barbecue Chicken', 10.99, 'quantity1')">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="pizza-menu">
            <div class="pizza-card">
                <img src="/Pizzafotos/HawaiiPizza.png" alt="Hawaii Pizza">
                <h2>Hawaii Pizza</h2>
                <p>Description of Hawaii Pizza</p>
                <p>Price: $10.99</p>
                <div class="order-section">
                    <label for="quantity2">Quantity:</label>
                    <input type="number" id="quantity2" name="quantity" value="1" min="1">
                    <button onclick="addToCart('Hawaii Pizza', 10.99, 'quantity2')">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="pizza-menu">
            <div class="pizza-card">
                <img src="/Pizzafotos/SalamiPizza.png" alt="Salami Pizza">
                <h2>Salami Pizza</h2>
                <p>Description of Salami Pizza</p>
                <p>Price: $10.99</p>
                <div class="order-section">
                    <label for="quantity3">Quantity:</label>
                    <input type="number" id="quantity3" name="quantity" value="1" min="1">
                    <button onclick="addToCart('Salami Pizza', 10.99, 'quantity3')">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="pizza-menu">
            <div class="pizza-card">
                <img src="/Pizzafotos/TonijnPizza.png" alt="Tonijn Pizza">
                <h2>Tonijn Pizza</h2>
                <p>Description of Tonijn Pizza</p>
                <p>Price: $10.99</p>
                <div class="order-section">
                    <label for="quantity4">Quantity:</label>
                    <input type="number" id="quantity4" name="quantity" value="1" min="1">
                    <button onclick="addToCart('Tonijn Pizza', 10.99, 'quantity4')">Add to Cart</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
    <div id="shopping-cart">
            <h2>Shopping Cart</h2>
            <p>Total Items: <span id="cart-count">0</span></p>
        </div>
    </footer>

    <script src="resources/js/app.js"></script>
    <script>
        var cartCount = 0;

        function addToCart(pizzaName, price, quantityInputId) {
            var quantity = document.getElementById(quantityInputId).value;
            var totalPrice = quantity * price;
            cartCount += parseInt(quantity); // Update cart count
            updateCartCount(); // Update cart count display
            alert("Added " + quantity + " " + pizzaName + "(s) to cart. Total Price: $" + totalPrice.toFixed(2));
        }

        function updateCartCount() {
            document.getElementById('cart-count').textContent = cartCount;
        }
    </script>
</body>
</html>

</body>
</html>
