<?php
require_once('config.php');

$db = new Database();
$comentariosValoraciones = $db->query("SELECT * FROM comentarios_valoraciones");
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
                                        <th>ID Comentario</th>
                                        <th>ID Cliente</th>
                                        <th>Comentario</th>
                                        <th>Valoración</th>
                                        <th>Acciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($comentariosValoraciones as $comentarioValoracion) {
                                        echo "<tr>";
                                        echo "<td>" . $comentarioValoracion["id_comentario"] . "</td>";
                                        echo "<td>" . $comentarioValoracion["id_usuario"] . "</td>";
                                        echo "<td>" . $comentarioValoracion["comentario"] . "</td>";
                                        echo "<td>" . $comentarioValoracion["valoracion"] . "</td>";
                                        echo "<td><button type='button' class='btn btn-warning btn-modificar' data-id='" . $comentarioValoracion["id_comentario"] . "' data-usuario='" . $comentarioValoracion["id_usuario"] . "' data-comentario='" . $comentarioValoracion["comentario"] . "' data-valoracion='" . $comentarioValoracion["valoracion"] . "'>Modificar</button></td>";
                                        echo "<td><button type='button' class='btn btn-danger' onclick='eliminarComentarioValoracion(" . $comentarioValoracion["id_comentario"] . ")'>Eliminar</button></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modales -->

                <!-- Modal para Agregar Comentario y Valoración -->
                <div class="modal" tabindex="-1" role="dialog" id="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregar Comentario y Valoración</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formAgregarComentarioValoracion">
                                    <div class="mb-3">
                                        <label for="idUsuario" class="form-label">ID de Usuario:</label>
                                        <input type="number" class="form-control" id="idUsuario" name="idUsuario"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="comentario" class="form-label">Comentario:</label>
                                        <textarea class="form-control" id="comentario" name="comentario"
                                            required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="valoracion" class="form-label">Valoración:</label>
                                        <input type="number" class="form-control" id="valoracion" name="valoracion"
                                            required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="agregarComentarioValoracion()">Guardar cambios</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal para Modificar Comentario y Valoración -->
                <div class="modal" tabindex="-1" role="dialog" id="modalModificarComentarioValoracion">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modificar Comentario y Valoración</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formModificarComentarioValoracion">
                                    <input type="hidden" id="idComentarioModificar" name="idComentarioModificar">
                                    <div class="mb-3">
                                        <label for="idUsuarioModificar" class="form-label">ID de Usuario:</label>
                                        <input type="number" class="form-control" id="idUsuarioModificar"
                                            name="idUsuarioModificar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="comentarioModificar" class="form-label">Comentario:</label>
                                        <textarea class="form-control" id="comentarioModificar"
                                            name="comentarioModificar" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="valoracionModificar" class="form-label">Valoración:</label>
                                        <input type="number" class="form-control" id="valoracionModificar"
                                            name="valoracionModificar" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="modificarComentarioValoracion()">Guardar cambios</button>
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
    function eliminarComentarioValoracion(idComentario) {
        // Puedes mostrar un mensaje de confirmación o realizar una solicitud AJAX aquí
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar este comentario y valoración?");

        if (confirmacion) {
            // Realiza la acción de eliminación (puedes redirigir a un script PHP que maneje la eliminación)
            window.location.href = 'eliminar_comval.php?id=' + idComentario;
        }
    }

    function agregarComentarioValoracion() {
        // Obtener los valores del formulario
        var idUsuario = $("#idUsuario").val();
        var comentario = $("#comentario").val();
        var valoracion = $("#valoracion").val();

        // Validar que los campos no estén vacíos (puedes agregar más validaciones según tus necesidades)

        // Enviar los datos al servidor mediante AJAX
        $.ajax({
            type: "POST",
            url: "agregarComVal.php",
            data: {
                idUsuario: idUsuario,
                comentario: comentario,
                valoracion: valoracion
            },
            success: function (response) {
                // Mostrar el toast
                mostrarToast(response);

                // Limpiar los campos del modal
                limpiarCamposModal();

                // Cerrar el modal
                $("#myModal").modal("hide");

                // Puedes redirigir o recargar la página según tus necesidades
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
        $("#idUsuario").val("");
        $("#comentario").val("");
        $("#valoracion").val("");
    }

    $(document).on("click", ".btn-modificar", function () {
        // Obtener los datos del botón
        var idComentario = $(this).data("id");
        var idUsuario = $(this).data("usuario");
        var comentario = $(this).data("comentario");
        var valoracion = $(this).data("valoracion");

        // Poblar el formulario del modal con los datos del comentario y valoración
        $("#idComentarioModificar").val(idComentario);
        $("#idUsuarioModificar").val(idUsuario);
        $("#comentarioModificar").val(comentario);
        $("#valoracionModificar").val(valoracion);

        // Mostrar el modal de Modificar
        $("#modalModificarComentarioValoracion").modal("show");
    });

    function modificarComentarioValoracion() {
        // Obtener los valores del formulario de modificar
        var idComentario = $("#idComentarioModificar").val();
        var idUsuario = $("#idUsuarioModificar").val();
        var comentario = $("#comentarioModificar").val();
        var valoracion = $("#valoracionModificar").val();

        // Validar que los campos no estén vacíos (puedes agregar más validaciones según tus necesidades)

        // Enviar los datos al servidor mediante AJAX
        $.ajax({
            type: "POST",
            url: "modificarComVal.php",
            data: {
                idComentario: idComentario,
                idUsuario: idUsuario,
                comentario: comentario,
                valoracion: valoracion
            },
            success: function (response) {
                // Mostrar el toast
                mostrarToast(response);

                // Cerrar el modal de modificar
                $("#modalModificarComentarioValoracion").modal("hide");

                // Puedes redirigir o recargar la página según tus necesidades
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