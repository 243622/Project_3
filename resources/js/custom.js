
function redirectToCheckout() {
    // Assuming checkout.blade.php is in the same directory
    window.location.href = 'checkout';
}
    // Function to add a pizza to the cart and open customization modal
function addToCart(name, price, quantityInputId) {
    var quantity = parseInt(document.getElementById(quantityInputId).value);
    
    // Create a pizza object with default values
    var pizza = {
        name: name,
        price: price,
        quantity: quantity,
        totalPrice: price * quantity,
        size: "Medium", // Default size
        wishlist: "No" // Default wishlist status
    };
    
    // Show modal for pizza customization
    showModal(pizza);
}

   var cart = []; // Array to store cart items

// Function to toggle the side panel
function toggleSidePanel() {
    var sidePanel = document.getElementById('side-panel');
    sidePanel.classList.toggle('open');
}

// Function to show modal for pizza customization
function showModal(pizza) {
    var modal = document.getElementById('modal');
    modal.style.display = "block";

    // Populate modal with pizza details
    document.getElementById('pizza-name').textContent = pizza.name;
    document.getElementById('pizza-price').textContent = "$" + pizza.price.toFixed(2);

    // Event listener for modal close button
    var closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    // Event listener for add to cart button in modal
    var addToCartBtn = document.getElementById('add-to-cart-modal');
    addToCartBtn.onclick = function() {
        // Update pizza details based on user input in modal
        pizza.size = document.getElementById('pizza-size').value; // Get selected size from <select> element
        pizza.wishlist = document.getElementById('special-instructions').value; // Get value from textarea

        // Add customized pizza to cart
        cart.push(pizza);
        updateCartDisplay(); // Update cart display
        modal.style.display = "none"; // Close modal
    }
}
// Function to update cart count display
function updateCartCountDisplay(totalItems) {
    var cartCountElement = document.querySelector('.cart-count');
    cartCountElement.textContent = totalItems; // Display total items in cart
}

// Function to retrieve cart data from localStorage
function getCartFromLocalStorage() {
    var cartData = localStorage.getItem('cart');
    return cartData ? JSON.parse(cartData) : [];
}

// Function to save cart data to localStorage
function saveCartToLocalStorage(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Initialize cart from localStorage when the page loads
document.addEventListener('DOMContentLoaded', function() {
    cart = getCartFromLocalStorage();
    updateCartDisplay(); // Update cart display with items from localStorage
});

// Function to update cart display and save cart to localStorage
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
    updateCartCountDisplay(totalItems); // Update cart count display with total items

    saveCartToLocalStorage(cart);
}

function removeFromCart(index) {
    cart.splice(index, 1); // Remove item from cart
    updateCartDisplay(); // Update cart display

    saveCartToLocalStorage(cart);
}

// Function to change the quantity of an item in the cart and update localStorage
function changeQuantity(index, change) {
    if (cart[index]) {
        cart[index].quantity += change;
        if (cart[index].quantity < 1) {
            cart[index].quantity = 1;
        }
        cart[index].totalPrice = cart[index].quantity * cart[index].price;
        updateCartDisplay(); // Update cart display
    }
    saveCartToLocalStorage(cart);
}
