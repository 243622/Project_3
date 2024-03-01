<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Pizza</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    @vite(['resources/css/app.css','resources/css/custom.css', 'resources/js/app.js'])
</head>

<body>
<header><img src="PizzaFotos/_09253db4-5f28-4da4-b255-46c05fda052b-removebg-preview.png" alt="StonksFoto" width="100" style="
    position: absolute;
">
    <nav style="
    display: flex;
    flex-direction: row;
    width: 100%;
    flex-wrap: wrap;
    align-content: center;
    align-items: center;
    justify-content: center;
">
        
        <ul>
            <li><a href="/">Homepage</a></li>
            <li><a href="order">Order</a></li>
            <li class="cart-icon-container">
                <span class="material-symbols-outlined">shopping_basket</span>
                <div class="cart-count">0</div>
            </li>
        </ul>
    </nav>
</header>
    <main>
        <h1>Available Pizzas</h1>
        <h2>Top Four</h2>
        <div class="pizza-menu">
            <div class="pizza-card">
                <img src="/PizzaFotos/BarbecueChicken.png" alt="Barbecue Chicken Pizza">
                <h2>Barbecue Chicken Pizza</h2>
                <p>Chicken, barbecue sauce, onions, cheese</p>
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
                <p>Ham, pineapple, cheese, tomato sauce</p>
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
                <p>Salami, cheese, mushrooms, olives, tomato sauce</p>
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
                <p>Tuna, onions, olives, cheese, tomato sauce</p>
                <p>Price: $10.99</p>
                <div class="order-section">
                    <label for="quantity4">Quantity:</label>
                    <input type="number" id="quantity4" name="quantity" value="1" min="1">
                    <button onclick="addToCart('Tonijn Pizza', 10.99, 'quantity4')">Add to Cart</button>
                </div>
            </div>
        </div>
        <div id="modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Ingredients</h2>
        <p id="ingredients"></p>
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

    <!-- Shopping cart side panel -->
    <div id="side-panel">
        <h2>Your Cart</h2>
        <div id="cart-items"></div>
        <button class="cart-button" onclick="toggleSidePanel()">Close</button>
    </div>
</footer>

<script>
    var cart = []; // Array to store cart items
    var cartCount = 0; // Variable to store the count of items in the cart

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
        cartCount++; // Increment cart count
        updateCartCountDisplay(); // Update cart count display
        // Display alert with pizza name, wishlist, and total price
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
                <p>Name: ${item.name}</p>
                <p>Quantity: ${item.quantity}</p>
                <p>Price: $${item.price.toFixed(2)}</p>
                <p>Total: $${item.totalPrice.toFixed(2)}</p>
                <p>Wishlist: ${item.wishlist}</p>
                <button class="cart-button" onclick="removeFromCart(${index})">Remove</button>
                <button class="cart-button" onclick="changeQuantity(${index}, -1)">-</button>
                <button class="cart-button" onclick="changeQuantity(${index}, 1)">+</button>
            `;
            cartItemsDiv.appendChild(itemDiv);
        });
        document.getElementById('total-price').textContent = totalPrice.toFixed(2);
    }

    // Function to update cart count display
    function updateCartCountDisplay() {
        var cartCountElement = document.querySelector('.cart-count');
        cartCountElement.textContent = cartCount;
    }

    // Function to remove an item from the cart
    function removeFromCart(index) {
        cart.splice(index, 1); // Remove item from cart
        updateCartDisplay(); // Update cart display
        cartCount--; // Decrement cart count
        updateCartCountDisplay(); // Update cart count display
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
