<?php
require_once('config.php');

$db = new Database();
$pedidos = $db->query("SELECT pedidos.id_pedido, pedidos.id_usuario, usuarios.nombre_completo AS nombre_usuario, pedidos.fecha_pedido, pedidos.estado
FROM pedidos
JOIN usuarios ON pedidos.id_usuario = usuarios.id_usuario;
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
                                        <th>ID Pedido</th>
                                        <th>ID Usuario</th>
                                        <th>Nombre del Usuario</th>
                                        <th>Fecha del Pedido</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pedidos as $pedido) {
                                        echo "<tr>";
                                        echo "<td>" . $pedido["id_pedido"] . "</td>";
                                        echo "<td>" . $pedido["id_usuario"] . "</td>";
                                        echo "<td>" . $pedido["nombre_usuario"] . "</td>";
                                        echo "<td>" . $pedido["fecha_pedido"] . "</td>";
                                        echo "<td>" . $pedido["estado"] . "</td>";
                                        echo "<td><button type='button' class='btn btn-warning btn-modificar-pedido' data-id='" . $pedido["id_pedido"] . "' data-id-usuario='" . $pedido["id_usuario"] . "' data-fecha='" . $pedido["fecha_pedido"] . "' data-estado='" . $pedido["estado"] . "'>Modificar</button></td>";
                                        echo "<td><button type='button' class='btn btn-danger' onclick='eliminarPedido(" . $pedido["id_pedido"] . ")'>Eliminar</button></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
                <!-- Modales -->

                <!-- Modal para Agregar Pedido -->
                <div class="modal" tabindex="-1" role="dialog" id="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregar Pedido</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formAgregarPedido">
                                    <div class="mb-3">
                                        <label for="idUsuario" class="form-label">ID del Usuario:</label>
                                        <input type="text" class="form-control" id="idUsuario" name="idUsuario"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fechaPedido" class="form-label">Fecha del Pedido:</label>
                                        <input type="date" class="form-control" id="fechaPedido" name="fechaPedido"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="estadoPedido" class="form-label">Estado del Pedido:</label>
                                        <select class="form-control" id="estadoPedido" name="estadoPedido" required>
                                            <option value="en_proceso">En Proceso</option>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="cancelada">Cancelada</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" onclick="agregarPedido()">Guardar
                                    cambios</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal para Modificar Pedido -->
                <div class="modal" tabindex="-1" role="dialog" id="modalModificarPedido">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modificar Pedido</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formModificarPedido">
                                    <input type="hidden" id="idPedidoModificar" name="idPedidoModificar">
                                    <div class="mb-3">
                                        <label for="idUsuarioModificar" class="form-label">ID del Usuario:</label>
                                        <input type="text" class="form-control" id="idUsuarioModificar"
                                            name="idUsuarioModificar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fechaPedidoModificar" class="form-label">Fecha del Pedido:</label>
                                        <input type="date" class="form-control" id="fechaPedidoModificar"
                                            name="fechaPedidoModificar" required>
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
                                <button type="button" class="btn btn-primary" onclick="modificarPedido()">Guardar
                                    cambios</button>
                            </div>
                        </div>
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
    function eliminarPedido(idPedido) {
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar este pedido?");

        if (confirmacion) {
            window.location.href = 'eliminar_pedido.php?id=' + idPedido;
        }
    }

    function agregarPedido() {
        var idUsuario = $("#idUsuario").val();
        var fechaPedido = $("#fechaPedido").val();
        var estadoPedido = $("#estadoPedido").val();

        $.ajax({
            type: "POST",
            url: "agregarPedido.php",
            data: {
                idUsuario: idUsuario,
                fechaPedido: fechaPedido,
                estadoPedido: estadoPedido
            },
            success: function (response) {
                mostrarToast(response);
                limpiarCamposModal();
                $("#myModal").modal("hide");
                // Puedes redirigir o recargar la página según tus necesidades
                // window.location.reload();
            },
            error: function (error) {
                console.error(error);
            }
        });
    }

    $(document).on("click", ".btn-modificar-pedido", function () {
        var idPedido = $(this).data("id");
        var idUsuario = $(this).data("id-usuario");
        var fechaPedido = $(this).data("fecha");
        var estadoPedido = $(this).data("estado");

        $("#idPedidoModificar").val(idPedido);
        $("#idUsuarioModificar").val(idUsuario);
        $("#fechaPedidoModificar").val(fechaPedido);
        $("#estadoPedidoModificar").val(estadoPedido);

        $("#modalModificarPedido").modal("show");
    });

    function modificarPedido() {
        var idPedido = $("#idPedidoModificar").val();
        var idUsuario = $("#idUsuarioModificar").val();
        var fechaPedido = $("#fechaPedidoModificar").val();
        var estadoPedido = $("#estadoPedidoModificar").val();

        $.ajax({
            type: "POST",
            url: "modificarPedido.php",
            data: {
                idPedido: idPedido,
                idUsuario: idUsuario,
                fechaPedido: fechaPedido,
                estadoPedido: estadoPedido
            },
            success: function (response) {
                mostrarToast(response);
                $("#modalModificarPedido").modal("hide");
                // Puedes redirigir o recargar la página según tus necesidades
                // window.location.reload();
            },
            error: function (error) {
                console.error(error);
            }
        });
    }

    function mostrarToast(message) {
        $("#liveToast .toast-body").text(message);
        var toast = new bootstrap.Toast(document.getElementById('liveToast'));
        toast.show();
    }

    function limpiarCamposModal() {
        $("#idUsuario").val("");
        $("#fechaPedido").val("");
        $("#estadoPedido").val("");
    }

</script>

</html>
<?php
$db->closeConnection();
?>