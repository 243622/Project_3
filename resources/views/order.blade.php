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
        <h2>Top Four</h2>
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
            <p>Total Price: $<span id="total-price">0.00</span></p> <!-- Display total price here -->
            <button class="cart-button" onclick="toggleSidePanel()">View Cart</button>
        </div>
    </footer>

    <script src="resources/js/app.js"></script>
    <script>
        var cart = []; // Array to store cart items

        // Function to toggle the side panel
        function toggleSidePanel() {
            var sidePanel = document.getElementById('side-panel');
            sidePanel.classList.toggle('open');
        }

        // Function to add an item to the cart
        function addToCart(pizzaName, price, quantityInputId) {
            var quantity = document.getElementById(quantityInputId).value;
            var pizzaPrice = quantity * price;
            var wishlist = prompt("Enter your wishlist (e.g., no onions, no meat):");
            var cartItem = {
                name: pizzaName,
                price: price,
                quantity: parseInt(quantity),
                totalPrice: pizzaPrice,
                wishlist: wishlist
            };
            cart.push(cartItem); // Add item to cart
            updateCartDisplay(); // Update cart display
            alert("Added " + quantity + " " + pizzaName + "(s) to cart.\nWishlist: " + wishlist + "\nTotal Price: $" + pizzaPrice.toFixed(2));
        }

        // Function to update cart display
        function updateCartDisplay() {
            var cartItemsDiv = document.getElementById('cart-items');
            cartItemsDiv.innerHTML = ''; // Clear previous items
            var totalItems = 0;
            var totalPrice = 0;
            cart.forEach(function(item, index) {
                totalItems += item.quantity;
                totalPrice += item.totalPrice;
                var itemDiv = document.createElement('div');
                itemDiv.classList.add('cart-item');
                itemDiv.innerHTML = `
                    <p>${item.name} - Quantity: ${item.quantity} - Price: $${item.totalPrice.toFixed(2)}</p>
                    <button class="cart-button" onclick="removeFromCart(${index})">Remove</button>
                    <button class="cart-button" onclick="changeQuantity(${index}, -1)">-</button>
                    <button class="cart-button" onclick="changeQuantity(${index}, 1)">+</button>
                `;
                cartItemsDiv.appendChild(itemDiv);
            });
            document.getElementById('cart-count').textContent = totalItems;
            document.getElementById('total-price').textContent = totalPrice.toFixed(2);
        }

        // Function to remove an item from the cart
        function removeFromCart(index) {
            cart.splice(index, 1); // Remove item from cart
            updateCartDisplay(); // Update cart display
        }

        // Function to change the quantity of an item in the cart
        function changeQuantity(index, change) {
            if (cart[index]) {
                cart[index].quantity += change;
                if (cart[index].quantity < 1) {
                    cart[index].quantity = 1;
                }
                cart[index].totalPrice = cart[index].quantity * cart[index].price;
                updateCartDisplay(); // Update cart display
            }
        }
    </script>
</body>
</html>

</body>
</html>
