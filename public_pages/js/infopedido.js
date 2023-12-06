document.addEventListener("DOMContentLoaded", () => {
    const orderDetails = document.getElementById("order-details");
    const orderTotal = document.getElementById("order-total");

    // Recupera la información del pedido del almacenamiento local (puedes usar cookies o localStorage)
    const cartItems = JSON.parse(localStorage.getItem("cartItems"));
    const total = parseFloat(localStorage.getItem("cartTotal"));

    if (cartItems && total) {
        // Muestra los detalles del pedido en la tabla
        cartItems.forEach(item => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${item.name}</td>
                <td>${item.quantity}</td>
                <td>$${item.price.toFixed(2)}</td>
                <td>$${(item.price * item.quantity).toFixed(2)}</td>
            `;
            orderDetails.appendChild(row);
        });

        // Muestra el total del pedido
        orderTotal.textContent = `$${total.toFixed(2)}`;
    } else {
        // En caso de que no haya información del pedido, muestra un mensaje o redirige al inicio
        window.location.href = "../public_pages/pages/menu.html"; // Puedes redirigir a la página principal u otra página según tu preferencia
    }
});
