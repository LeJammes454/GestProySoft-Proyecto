<?php
require_once('config.php');

$db = new Database();
$reservas = $db->query("SELECT reservas.id_reserva, usuarios.nombre_completo, reservas.fecha_reserva, reservas.hora_reserva, reservas.sillas, reservas.estado
FROM reservas
JOIN usuarios ON reservas.id_usuario = usuarios.id_usuario;
");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - RM</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">MS-Dashboard</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Menu dropdown user -->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Cerrar Sesion</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interfaces</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseTables" aria-expanded="false"
                            aria-controls="pagesCollapseTables">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tablas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseTables" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="tablesBebidas.php">Bebidas</a>
                                <a class="nav-link" href="tablesPlatillos.php">Platillos</a>
                                <a class="nav-link" href="tablesPedidos.php">Pedidos</a>
                                <a class="nav-link" href="tablesUsuarios.php">Usuarios</a>
                                <a class="nav-link" href="tablesReservas.php">Reservas</a>
                                <a class="nav-link" href="tablesComVal.php">Reseñas y Comentarios</a>
                                <a class="nav-link" href="tablesHistorialpedidos.php">Historial pedidos</a>

                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tabla</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            DataTables is a third party plugin that is used to generate the demo table below. For more
                            information about DataTables, please visit the
                            official DataTables documentation.
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#myModal">
                                Agregar
                            </button>
                        </div>


                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID Reserva</th>
                                        <th>Nombre Cliente</th>
                                        <th>Fecha Reserva</th>
                                        <th>Hora Reserva</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($reservas as $reserva) {
                                        echo "<tr>";
                                        echo "<td>" . $reserva["id_reserva"] . "</td>";
                                        echo "<td>" . $reserva["nombre_completo"] . "</td>";
                                        echo "<td>" . $reserva["fecha_reserva"] . "</td>";
                                        echo "<td>" . $reserva["hora_reserva"] . "</td>";
                                        echo "<td>" . $reserva["estado"] . "</td>";
                                        echo "<td><button type='button' class='btn btn-warning btn-modificar' data-id='" . $reserva["id_reserva"] . "' data-nombre='" . $reserva["nombre_completo"] . "' data-fecha='" . $reserva["fecha_reserva"] . "' data-hora='" . $reserva["hora_reserva"] . "' data-estado='" . $reserva["estado"] . "'>Modificar</button></td>";

                                        // Botón Eliminar con función JavaScript
                                        echo "<td><button type='button' class='btn btn-danger' onclick='eliminarReserva(" . $reserva["id_reserva"] . ")'>Eliminar</button></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- Modales -->

                <!-- Modal para Agregar Reserva -->
                <div class="modal" tabindex="-1" role="dialog" id="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregar Reserva</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formAgregarReserva">
                                    <div class="mb-3">
                                        <label for="nombreCliente" class="form-label">Nombre del Cliente:</label>
                                        <input type="text" class="form-control" id="nombreCliente" name="nombreCliente"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fechaReserva" class="form-label">Fecha de Reserva:</label>
                                        <input type="date" class="form-control" id="fechaReserva" name="fechaReserva"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="horaReserva" class="form-label">Hora de Reserva:</label>
                                        <input type="time" class="form-control" id="horaReserva" name="horaReserva"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sillasReserva" class="form-label">Número de Sillas:</label>
                                        <input type="number" class="form-control" id="sillasReserva"
                                            name="sillasReserva" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="estadoPedidoModificar" class="form-label">Estado del Pedido:</label>
                                        <select class="form-control" id="estadoPedidoModificar"
                                            name="estadoPedidoModificar" required>
                                            <option value="en_proceso">En Proceso</option>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="cancelada">Cancelada</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" onclick="agregarReserva()">Guardar
                                    cambios</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal para Modificar Reserva -->
                <div class="modal" tabindex="-1" role="dialog" id="modalModificarReserva">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modificar Reserva</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formModificarReserva">
                                    <input type="hidden" id="idReservaModificar" name="idReservaModificar">
                                    <div class="mb-3">
                                        <label for="nombreClienteModificar" class="form-label">Nombre del
                                            Cliente:</label>
                                        <input type="text" class="form-control" id="nombreClienteModificar"
                                            name="nombreClienteModificar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fechaReservaModificar" class="form-label">Fecha de Reserva:</label>
                                        <input type="date" class="form-control" id="fechaReservaModificar"
                                            name="fechaReservaModificar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="horaReservaModificar" class="form-label">Hora de Reserva:</label>
                                        <input type="time" class="form-control" id="horaReservaModificar"
                                            name="horaReservaModificar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sillasReservaModificar" class="form-label">Número de Sillas:</label>
                                        <input type="number" class="form-control" id="sillasReservaModificar"
                                            name="sillasReservaModificar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="estadoPedidoModificar" class="form-label">Estado del Pedido:</label>
                                        <select class="form-control" id="estadoPedidoModificar"
                                            name="estadoPedidoModificar" required>
                                            <option value="en_proceso">En Proceso</option>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="cancelada">Cancelada</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" onclick="modificarReserva()">Guardar
                                    cambios</button>
                            </div>
                        </div>



            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Itsur &hearts; JLeon</div>

                    </div>
                </div>
            </footer>
            <!-- Toast -->
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <!-- Puedes personalizar la cabecera del toast según tus necesidades -->
                        <strong class="me-auto">Mensaje</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        <!-- El contenido del mensaje del toast se actualizará dinámicamente desde JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>
<script>
    function eliminarReserva(idReserva) {
        // Puedes mostrar un mensaje de confirmación o realizar una solicitud AJAX aquí
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar esta reserva?");

        if (confirmacion) {
            // Realiza la acción de eliminación (puedes redirigir a un script PHP que maneje la eliminación)
            window.location.href = 'eliminar_reserva.php?id=' + idReserva;
        }
    }

    function agregarReserva() {
        // Obtener los valores del formulario
        var nombreCliente = $("#nombreCliente").val();
        var fechaReserva = $("#fechaReserva").val();
        var horaReserva = $("#horaReserva").val();
        var sillasReserva = $("#sillasReserva").val();

        // Validar que los campos no estén vacíos (puedes agregar más validaciones según tus necesidades)

        // Enviar los datos al servidor mediante AJAX
        $.ajax({
            type: "POST",
            url: "agregarReserva.php",
            data: {
                nombreCliente: nombreCliente,
                fechaReserva: fechaReserva,
                horaReserva: horaReserva,
                sillasReserva: sillasReserva
            },
            success: function (response) {
                // Mostrar el toast
                mostrarToast(response);

                // Limpiar los campos del modal
                limpiarCamposModal();

                // Cerrar el modal
                $("#myModal").modal("hide");

                // Recargar la página o actualizar la tabla de reservas
                location.reload();
            },
            error: function (error) {
                console.error(error);
            }
        });
    }

    function mostrarToast(message) {
        // Actualizar el contenido del toast con el mensaje recibido
        $("#liveToast .toast-body").text(message);

        // Mostrar el toast
        var toast = new bootstrap.Toast(document.getElementById('liveToast'));
        toast.show();
    }

    function limpiarCamposModal() {
        // Limpiar los campos del formulario
        $("#nombreCliente").val("");
        $("#fechaReserva").val("");
        $("#horaReserva").val("");
        $("#sillasReserva").val("");
        $("#estadoReservaModificar").val(estadoReserva);
    }

    $(document).on("click", ".btn-modificar", function () {
        // Obtener los datos del botón
        var idReserva = $(this).data("id");
        var nombreCliente = $(this).data("nombre");
        var fechaReserva = $(this).data("fecha");
        var horaReserva = $(this).data("hora");
        var sillasReserva = $(this).data("sillas");

        // Poblar el formulario del modal con los datos de la reserva
        $("#idReservaModificar").val(idReserva);
        $("#nombreClienteModificar").val(nombreCliente);
        $("#fechaReservaModificar").val(fechaReserva);
        $("#horaReservaModificar").val(horaReserva);
        $("#sillasReservaModificar").val(sillasReserva);
        $("#estadoReservaModificar").val(estadoReserva);

        // Mostrar el modal de Modificar
        $("#modalModificarReserva").modal("show");
    });

    function modificarReserva() {
        // Obtener los valores del formulario de modificar
        var idReserva = $("#idReservaModificar").val();
        var nombreCliente = $("#nombreClienteModificar").val();
        var fechaReserva = $("#fechaReservaModificar").val();
        var horaReserva = $("#horaReservaModificar").val();
        var sillasReserva = $("#sillasReservaModificar").val();
        var sillasReserva = $("#estadoReservaModificar").val();

        // Validar que los campos no estén vacíos (puedes agregar más validaciones según tus necesidades)

        // Enviar los datos al servidor mediante AJAX
        $.ajax({
            type: "POST",
            url: "modificarReserva.php",
            data: {
                idReserva: idReserva,
                nombreCliente: nombreCliente,
                fechaReserva: fechaReserva,
                horaReserva: horaReserva,
                sillasReserva: sillasReserva
            },
            success: function (response) {
                // Mostrar el toast
                mostrarToast(response);

                // Cerrar el modal de modificar
                $("#modalModificarReserva").modal("hide");

                // Recargar la página o actualizar la tabla de reservas
                location.reload();
            },
            error: function (error) {
                console.error(error);
            }
        });
    }
</script>

</html>
<?php
$db->closeConnection();
?>