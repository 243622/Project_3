import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

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
        <p>${item.name} - Quantity: ${item.quantity} - Price: $${item.price.toFixed(2)} - Total: $${item.totalPrice.toFixed(2)}</p>
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
