// Representación de productos (puedes usar una API real en lugar de esto)
const menuItems = [
    {
        name: "Enchiladas Mineras",
        category: "entradas",
        description: "Estas enchiladas llevan tortillas rellenas de carne deshebrada de res o pollo, que se bañan en una salsa de chile guajillo y chile ancho. Se suelen decorar con cebolla picada, lechuga, crema y queso fresco",
        price: 40,
        image: "../images/platillosimg/EnchiladasMineras.jpg"
    },
    {
        name: "Chiles en nogada",
        category: "entradas",
        description: "Este platillo es una combinación de sabores dulces y salados. Los chiles poblanos se rellenan con una mezcla de carne de res y cerdo, frutas como pera y manzana, nueces y piñones. Se bañan con una salsa de nuez y se decoran con granada y perejil, lo que le da los colores de la bandera mexicana.",
        price: 35,
        image: "../images/platillosimg/Chiles en nogada.jpg"
    },
    {
        name: "Gorditas de nata",
        category: "entradas",
        description: "Las gorditas son tortillas de masa de maíz rellenas de nata (una crema espesa), y se pueden servir con salsa, queso, o guarniciones como chicharrón prensado.",
        price: 50,
        image: "../images/platillosimg/Gorditas de nata.jpg"
    },
    {
        name: "Entomatadas guanajuatenses",
        category: "entradas",
        description: "Consisten en una tortilla bañada en salsa de tomate, preparada con sal, ajo, cebolla, orégano y chile, aunque las proporciones de estos ingredientes varían enormemente dependiendo del plato del chef. Las tortillas van dobladas en dos, como si fueran un taco, pueden ser sin relleno o bien, rellenas de pollo, res, queso, o frijoles.",
        price: 28,
        image: "../images/platillosimg/Entomatadas guanajuatenses.jpg"
    },
    {
        name: "Sopes de chorizo",
        category: "entradas",
        description: "Los sopes son pequeñas tortillas gruesas con los bordes doblados hacia arriba para crear un pequeño borde. Se suelen cubrir con chorizo (salchicha mexicana), frijoles refritos, lechuga, crema, queso, y salsa.",
        price: 18,
        image: "../images/platillosimg/Sopes de chorizo.jpg"
    },
    {
        name: "Uchepos",
        category: "entradas",
        description: "Consiste en un tamal elaborado con maíz tierno (elote) molido, al cual se le agrega un poco de sal. Tiene un sabor dulce (debido a que el elote es muy tierno) y su consistencia es suave.",
        price: 15,
        image: "../images/platillosimg/Uchepos.jpg"
    },
    {
        name: "Chalupas guanajuatenses",
        category: "entradas",
        description: "son una tortilla, salsa (verde o roja), carne (de res, pollo o cerdo) y le pones lo que le quieras agregar(crema, queso, cebolla o cilantro).",
        price: 30,
        image: "../images/platillosimg/Chalupas guanajuatenses.jpg"
    },
    {
        name: "Cazuelitas de queso fundido",
        category: "entradas",
        description: "Consiste en un plato hondo, generalmente de barro, conocidas como cazuelitas, donde se sirve queso derretido con trozos de chorizo, tomates, cebollas y chiles poblanos.",
        price: 20,
        image: "../images/platillosimg/Cazuelitas de queso fundido.jpg"
    },
//platillo principal
    {
        name: "Guacamayas",
        category: "principal",
        description: "se conforma por un bolillo que lleva duro (chicharrón), limón y la tradicional salsa pico de gallo.",
        price: 50,
        image: "../images/platillosimg/Guacamayas.jpg"
    },
    {
        name: "Enchiladas placeras",
        category: "principal",
        description: "Tortillas pasadas por una salsa que contiene chile guajillo, chile ancho, ajo y cebolla; las enchiladas se fríen en manteca de cerdo y se rellenan o espolvorean con queso añejo",
        price:30,
        image: "../images/platillosimg/Enchiladas placeras.jpg"
    },
    {
        name: "Pacholas",
        category: "principal",
        description: "se producen con carne de res molida, chiles anchos cocidos y molidos, canela, clavo, orégano, pan y leche; se acompañan con frijoles o puré de papas",
        price: 22,
        image: "../images/platillosimg/Pacholas.jpg"
    },
    {
        name: "Birria estilo Guanajuato",
        category: "principal",
        description: "es un plato a base de carne de carnero originalmente (aunque también se prepara con carne de borrego ), adobado con una preparación a base de algunos tipos de chiles, condimentos y sal.",
        price: 200,
        image: "../images/platillosimg/Birria estilo Guanajuato.jpg"
    },
    {
        name: "Mole guanajuatense",
        category: "principal",
        description: "La combinación de chiles, semillas, especias y chocolate resultan en un mole levemente picoso, con toques dulces y muy aromático",
        price: 36,
        image: "../images/platillosimg/Mole guanajuatense.jpg"
    },
    {
        name: "Capirotada",
        category: "principal",
        description: "Consiste en pan tostado, o añejado hasta que se deshidrata (en el caso de Jalisco de birote salado), cortado en rodajas que son puestas a cocer junto con trozos de plátano, pasas, nueces, guayaba y cacahuates, cubierto con jarabe de piloncillo y queso de mesa rallado. Este platillo se consume principalmente durante la época de la Cuaresma.",
        price: 20,
        image: "../images/platillosimg/Capirotada.jpg"
    },
    {
        name: "Cecina",
        category: "principal",
        description: "se elabora de la pierna de la res, mejor conocida como pulpa negra o cañada, en su proceso de preparación se filetea la pieza muy delgada, se voltea y se va extendiendo la carne, puede alcanzar de 10 a 12 metros de largo, después se sala la carne de ambos lados y se tiende en una cama de tablas para exponerla",
        price: 40,
        image: "../images/platillosimg/Cecina.jpg"
    },
//Acompañamientos
    {
        name: "Arroz a la jardinera",
        category: "acompañamientos",
        description: "los ingredientes de este plato suelen incluir una variedad de vegetales frescos y coloridos que asemejan a un jardín en flor",
        price: 20,
        image: "../images/platillosimg/Arroz a la jardinera.jpg"
    },
    {
        name: "Frijoles charros",
        category: "acompañamientos",
        description: "Frijoles caldosos preparados con cebolla, chile picado, jitomate, tocino y cilantro; aunque son muy sustanciosos para comerse como plato fuerte, por lo general sirven de guarnición o para acompañar carnes asadas, arracheras y tacos al pastor.",
        price: 35,
        image: "../images/platillosimg/Frijoles charros.jpg"
    },
    {
        name: "Nopales en salsa de jitomate",
        category: "acompañamientos",
        description: "",
        price: 30,
        image: "../images/platillosimg/Nopales en salsa de jitomate.jpg"
    },
    {
        name: "Papas en salsa de chile rojo",
        category: "acompañamientos",
        description: "",
        price: 35,
        image: "../images/platillosimg/Papas en salsa de chile rojo.jpg"
    },
//postres
    {
        name: "Ate de membrillo",
        category: "postres",
        description: "",
        price: 22,
        image: "../images/platillosimg/ate.jpg"
    },
    {
        name: "Cajeta de Celaya",
        category: "postres",
        description: "",
        price: 30,
        image: "../images/platillosimg/cajeta.jpg"
    },
    {
        name: "Alfajores de Celaya",
        category: "postres",
        description: "Descripción de la entrada 2",
        price: 20,
        image: "../images/platillosimg/alfajores.jpg"
    },
    {
        name: "Charamuscas (dulces de azúcar)",
        category: "postres",
        description: "",
        price: 15,
        image: "../images/platillosimg/charamuscas.jpg"
    },
    {
        name: "Cocadas guanajuatenses",
        category: "postres",
        description: "",
        price: 15,
        image: "../images/platillosimg/cocadas.jpg"
    },
    //Bebida
    {
        name: "Horchata",
        category: "bebidas",
        description: "",
        price: 20,
        image: "../images/platillosimg/horchata.jpg"
    },
    {
        name: "Agua de Jamaica",
        category: "bebidas",
        description: "Descripción de la entrada 2",
        price: 20,
        image: "../images/platillosimg/jamaica.jpg"
    },
    {
        name: "Tamarindo",
        category: "bebidas",
        description: "Descripción de la entrada 2",
        price: 20,
        image: "../images/platillosimg/tamarindo.jpg"
    },
    {
        name: "Margaritas",
        category: "bebidas",
        description: "Descripción de la entrada 2",
        price: 50,
        image: "../images/platillosimg/margaritas.jpg"
    },
    {
        name: "Micheladas",
        category: "bebidas",
        description: "Michelada preparada con la cerveza de su elección",
        price: 80,
        image: "../images/platillosimg/micheladas.jpg"
    },
    {
        name: "Tequila y Mezcal",
        category: "bebidas",
        description: "",
        price: 50,
        image: "../images/platillosimg/tequilaymezcal.jpg"
    },
    {
        name: "Pulque",
        category: "bebidas",
        description: "",
        price: 40,
        image: "../images/platillosimg/pulque.jpg"
    },
    {
        name: "Ponche de Frutas",
        category: "bebidas",
        description: "Descripción de la entrada 2",
        price: 20,
        image: "../images/platillosimg/ponche.jpg"
    },
    {
        name: "Aguas Frescas",
        category: "bebidas",
        description: "Descripción de la entrada 2",
        price: 20,
        image: "../images/platillosimg/aguasfrescas.jpg"
    },
    {
        name: "Café de Olla",
        category: "bebidas",
        description: "Descripción de la entrada 2",
        price: 15,
        image: "../images/platillosimg/cafe.jpg"
    },
    // Agrega la URL de la imagen para cada platillo
];


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

// Función para limpiar el carrito y redirigir a la página de confirmación
function checkoutAndRedirect() {
    // Guarda la información del carrito en el almacenamiento local
    localStorage.setItem("cartItems", JSON.stringify(cart.items));
    localStorage.setItem("cartTotal", cart.total.toFixed(2)); // Convierte a cadena y redondea el total a 2 decimales

    // Redirige a la página de confirmación
    window.location.href = "../pages/pedido.html";
}


// Agregar Event Listener para el botón de realizar pedido
const checkoutButton = document.getElementById("checkout");
checkoutButton.addEventListener("click", () => {
    // Lógica para procesar el pedido (puede ser un formulario o una acción específica)
    alert(`Total de la compra: $${cart.total.toFixed(2)}`);

    // Realiza el checkout y redirige a la página de confirmación
    checkoutAndRedirect();
});


});
