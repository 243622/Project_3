<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Tab navigation -->
                    <div class="flex mb-4">
                        <button class="tab-btn active" onclick="openTab('openOrders')">Orders</button>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                     <div class="p-6 text-gray-900 dark:text-gray-100">
                     <h3 class="font-semibold text-lg">Shopping Cart:</h3>
                          <div id="cart-items" class="cart-items">
                <!-- Cart items will be displayed here -->
            </div>
            <div class="total-price-label">Total Price: <span id="total-price"></span></div>
            <button onclick="redirectToCheckout()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" style="background-color:#d63b1d;">
                Proceed to Checkout
            </button>
        </div>
    </div>
</x-app-layout>

<script>
    // JavaScript function to redirect to checkout page
    function redirectToCheckout() {
        // Assuming checkout.blade.php is in the same directory
        window.location.href = 'checkout';
    }

    // Function to add an item to the cart
    function addToCart(name, price, quantityInputId) {
        var quantity = parseInt(document.getElementById(quantityInputId).value);

        // Create an item object
        var item = {
            name: name,
            price: price,
            quantity: quantity
        };

        // Add item to the cart
        cart.push(item);
        updateCartDisplay(); // Update cart display
    }

    // Function to update cart count display
    function updateCartCountDisplay(totalItems) {
        var cartCountElement = document.querySelector('.cart-count');
        cartCountElement.textContent = totalItems; // Display total items in cart
    }

    // Function to update cart display
    function updateCartDisplay() {
        var cartItemsDiv = document.getElementById('cart-items');
        cartItemsDiv.innerHTML = ''; // Clear previous items
        var totalItems = 0;
        var totalPrice = 0;
        cart.forEach(function(item) {
            totalItems += item.quantity;
            totalPrice += item.quantity * item.price;
            var itemDiv = document.createElement('div');
            itemDiv.classList.add('cart-item');
            itemDiv.innerHTML = `
                <p>Name: ${item.name}</p>
                <p>Quantity: ${item.quantity}</p>
                <p>Price: $${item.price.toFixed(2)}</p>
            `;
            cartItemsDiv.appendChild(itemDiv);
        });
        document.getElementById('total-price').textContent = totalPrice.toFixed(2);
        updateCartCountDisplay(totalItems); // Update cart count display with total items
    }
</script>
