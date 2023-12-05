// Representación de productos (puedes usar una API real en lugar de esto)


// Lógica del carrito de compras
const cart = {
    items: [],
    total: 0,
};

// Función para mostrar productos en el menú
function displayMenu(category) {
    const menuSection = document.getElementById("menu");
    menuSection.innerHTML = ""; // Limpiar el contenido existente

    // Filtrar los platillos por categoría
    const filteredItems = (category === "todos") ? menuItems : menuItems.filter(item => item.category === category);

    // Mostrar los platillos en la categoría seleccionada
    filteredItems.forEach(item => {
        const menuItemElement = document.createElement("div");
        menuItemElement.classList.add("menu-item");
        menuItemElement.innerHTML = `
            <img src="${item.image}" alt="${item.name}" class="menu-item-image">
            <h3>${item.name}</h3>
            <p>${item.description}</p>
            <p class="price">$${item.price.toFixed(2)}</p>
            <input type="number" class="quantity-input" value="1" min="1" max="10">
            <button class="add-to-cart" data-name="${item.name}" data-price="${item.price}">Agregar al Carrito</button>
        `;

        menuSection.appendChild(menuItemElement);
    });
}

// Lógica para agregar un producto al carrito
function addToCart(name, price, quantity) {
    cart.items.push({ name, price, quantity });
    updateCart();
}

// Lógica para actualizar el carrito y calcular el total
function updateCart() {
    const cartItems = document.getElementById("cart-items");
    cartItems.innerHTML = ""; // Limpiar el contenido existente

    cart.items.forEach(item => {
        const cartItemElement = document.createElement("li");
        cartItemElement.textContent = `${item.name} x${item.quantity}: $${(item.price * item.quantity).toFixed(2)}`;
        cartItems.appendChild(cartItemElement);
    });

    const cartTotal = document.getElementById("cart-total");
    cart.total = cart.items.reduce((total, item) => total + item.price * item.quantity, 0);
    cartTotal.textContent = `$${cart.total.toFixed(2)}`;
}

// Función para limpiar el carrito y restablecer los filtros
function resetCartAndFilters() {
    cart.items = []; // Vaciar el carrito
    updateCart(); // Actualizar el carrito para mostrarlo vacío
    const allFilterButton = document.querySelector(".filter[data-category='todos']");
    allFilterButton.click(); // Hacer clic en el botón "Todos" para restablecer los filtros
}

// Agregar Event Listener para el botón de realizar pedido
const checkoutButton = document.getElementById("checkout");
checkoutButton.addEventListener("click", () => {
    // Lógica para procesar el pedido (puede ser un formulario o una acción específica)
    alert(`Total de la compra: $${cart.total.toFixed(2)}`);

    // Restablecer el carrito y los filtros después de completar la compra
    resetCartAndFilters();
});

// Event Listeners para los filtros y el carrito
document.addEventListener("DOMContentLoaded", () => {
    // Llamar a la función displayMenu para mostrar todos los productos inicialmente
    displayMenu("todos"); // Mostrar todos los platillos al cargar la página

    // Agregar Event Listeners para los filtros
    const filterButtons = document.querySelectorAll(".filter");
    filterButtons.forEach(button => {
        button.addEventListener("click", () => {
            const category = button.getAttribute("data-category");
            displayMenu(category);
        });
    });

    // Agregar Event Listeners para los botones de agregar al carrito
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    addToCartButtons.forEach(button => {
        button.addEventListener("click", () => {
            const name = button.getAttribute("data-name");
            const price = parseFloat(button.getAttribute("data-price"));
            const quantityInput = button.parentNode.querySelector(".quantity-input");
            const quantity = parseInt(quantityInput.value, 10);

            // Verifica si la cantidad es válida
            if (quantity > 0) {
                // Agrega el producto al carrito con la cantidad seleccionada
                addToCart(name, price, quantity);
            } else {
                alert("La cantidad debe ser al menos 1.");
            }
        });
    });
});
