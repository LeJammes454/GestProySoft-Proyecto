<?php
require_once('config.php');

$db = new Database();
$usuarios = $db->query("SELECT * FROM usuarios");
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
                                        <th>ID Usuario</th>
                                        <th>Nombre Completo</th>
                                        <th>Correo</th>
                                        <th>Contraseña</th>
                                        <th>Rol</th>
                                        <th>Edad</th>
                                        <th>Acciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($usuarios as $usuario) {
                                        echo "<tr>";
                                        echo "<td>" . $usuario["id_usuario"] . "</td>";
                                        echo "<td>" . $usuario["nombre_completo"] . "</td>";
                                        echo "<td>" . $usuario["correo"] . "</td>";
                                        echo "<td>" . $usuario["contrasena"] . "</td>";

                                        // Mostrar el valor del rol de manera más legible
                                        echo "<td>";
                                        switch ($usuario["rol"]) {
                                            case 'admin':
                                                echo "Administrador";
                                                break;
                                            case 'usuario':
                                                echo "Usuario";
                                                break;
                                            case 'cliente':
                                                echo "Cliente";
                                                break;
                                            default:
                                                echo "Desconocido";
                                                break;
                                        }
                                        echo "</td>";

                                        echo "<td>" . $usuario["edad"] . "</td>";
                                        echo "<td><button type='button' class='btn btn-warning btn-modificar-usuario' data-id='" . $usuario["id_usuario"] . "' data-nombre='" . $usuario["nombre_completo"] . "' data-correo='" . $usuario["correo"] . "' data-contrasena='" . $usuario["contrasena"] . "' data-rol='" . $usuario["rol"] . "' data-edad='" . $usuario["edad"] . "'>Modificar</button></td>";
                                        echo "<td><button type='button' class='btn btn-danger' onclick='eliminarUsuario(" . $usuario["id_usuario"] . ")'>Eliminar</button></td>";

                                        echo "</tr>";
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modales -->
                <div class="modal" tabindex="-1" role="dialog" id="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregar Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formAgregarUsuario">
                                    <div class="mb-3">
                                        <label for="nombreUsuario" class="form-label">Nombre Completo:</label>
                                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="correoUsuario" class="form-label">Correo:</label>
                                        <input type="email" class="form-control" id="correoUsuario" name="correoUsuario"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contrasenaUsuario" class="form-label">Contraseña:</label>
                                        <input type="password" class="form-control" id="contrasenaUsuario"
                                            name="contrasenaUsuario" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rolUsuario" class="form-label">Rol del Usuario:</label>
                                        <select class="form-select" id="rolUsuario" name="rolUsuario" required>
                                            <option value="admin">Administrador</option>
                                            <option value="usuario">Usuario</option>
                                            <option value="cliente">Cliente</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefonoUsuario" class="form-label">Teléfono:</label>
                                        <input type="tel" class="form-control" id="telefonoUsuario"
                                            name="telefonoUsuario">
                                    </div>
                                    <div class="mb-3">
                                        <label for="direccionUsuario" class="form-label">Dirección:</label>
                                        <input type="text" class="form-control" id="direccionUsuario"
                                            name="direccionUsuario">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edadUsuario" class="form-label">Edad:</label>
                                        <input type="number" class="form-control" id="edadUsuario" name="edadUsuario">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" onclick="agregarUsuario()">Guardar
                                    cambios</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal" tabindex="-1" role="dialog" id="modalModificarUsuario">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modificar Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formModificarUsuario">
                                    <input type="hidden" id="idUsuarioModificar" name="idUsuarioModificar">
                                    <div class="mb-3">
                                        <label for="nombreUsuarioModificar" class="form-label">Nombre Completo:</label>
                                        <input type="text" class="form-control" id="nombreUsuarioModificar"
                                            name="nombreUsuarioModificar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="correoUsuarioModificar" class="form-label">Correo:</label>
                                        <input type="email" class="form-control" id="correoUsuarioModificar"
                                            name="correoUsuarioModificar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contrasenaUsuarioModificar" class="form-label">Contraseña:</label>
                                        <input type="password" class="form-control" id="contrasenaUsuarioModificar"
                                            name="contrasenaUsuarioModificar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rolUsuarioModificar" class="form-label">Rol del Usuario:</label>
                                        <select class="form-select" id="rolUsuarioModificar" name="rolUsuarioModificar"
                                            required>
                                            <option value="admin">Administrador</option>
                                            <option value="usuario">Usuario</option>
                                            <option value="cliente">Cliente</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefonoUsuarioModificar" class="form-label">Teléfono:</label>
                                        <input type="tel" class="form-control" id="telefonoUsuarioModificar"
                                            name="telefonoUsuarioModificar">
                                    </div>
                                    <div class="mb-3">
                                        <label for="direccionUsuarioModificar" class="form-label">Dirección:</label>
                                        <input type="text" class="form-control" id="direccionUsuarioModificar"
                                            name="direccionUsuarioModificar">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edadUsuarioModificar" class="form-label">Edad:</label>
                                        <input type="number" class="form-control" id="edadUsuarioModificar"
                                            name="edadUsuarioModificar">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" onclick="modificarUsuario()">Guardar
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

    function mostrarToast(message) {
        // Actualizar el contenido del toast con el mensaje recibido
        $("#liveToast .toast-body").text(message);

        // Mostrar el toast
        var toast = new bootstrap.Toast(document.getElementById('liveToast'));
        toast.show();
    }



    function limpiarCamposModal() {
        // Limpiar los campos del formulario
        $("#nombreUsuario").val("");
        $("#correoUsuario").val("");
        $("#contrasenaUsuario").val("");
        $("#rolUsuario").val("");
        $("#telefonoUsuario").val("");
        $("#direccionUsuario").val("");
        $("#edadUsuario").val("");
    }
    function eliminarUsuario(idUsuario) {
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar este usuario?");

        if (confirmacion) {
            window.location.href = 'eliminar_usuario.php?id=' + idUsuario;
        }
    }

    function agregarUsuario() {
        var nombreUsuario = $("#nombreUsuario").val();
        var correoUsuario = $("#correoUsuario").val();
        var contrasenaUsuario = $("#contrasenaUsuario").val();
        var rolUsuario = $("#rolUsuario").val();
        var telefonoUsuario = $("#telefonoUsuario").val();
        var direccionUsuario = $("#direccionUsuario").val();
        var edadUsuario = $("#edadUsuario").val();

        // Validar que los campos no estén vacíos (puedes agregar más validaciones según tus necesidades)

        $.ajax({
            type: "POST",
            url: "agregarUsuario.php",
            data: {
                nombreUsuario: nombreUsuario,
                correoUsuario: correoUsuario,
                contrasenaUsuario: contrasenaUsuario,
                rolUsuario: rolUsuario,
                telefonoUsuario: telefonoUsuario,
                direccionUsuario: direccionUsuario,
                edadUsuario: edadUsuario
            },
            success: function (response) {
                mostrarToast(response);
                limpiarCamposModal();
                $("#myModal").modal("hide");
                header("Location: tablesUsuarios.php");
            },
            error: function (error) {
                console.error(error);
            }
        });
    }

    $(document).on("click", ".btn-modificar-usuario", function () {
        var idUsuario = $(this).data("id");
        var nombreUsuario = $(this).data("nombre");
        var correoUsuario = $(this).data("correo");
        var contrasenaUsuario = $(this).data("contrasena");
        var rolUsuario = $(this).data("rol");
        var telefonoUsuario = $(this).data("telefono");
        var direccionUsuario = $(this).data("direccion");
        var edadUsuario = $(this).data("edad");

        $("#idUsuarioModificar").val(idUsuario);
        $("#nombreUsuarioModificar").val(nombreUsuario);
        $("#correoUsuarioModificar").val(correoUsuario);
        $("#contrasenaUsuarioModificar").val(contrasenaUsuario);
        $("#rolUsuarioModificar").val(rolUsuario);
        $("#telefonoUsuarioModificar").val(telefonoUsuario);
        $("#direccionUsuarioModificar").val(direccionUsuario);
        $("#edadUsuarioModificar").val(edadUsuario);

        $("#modalModificarUsuario").modal("show");
    });

    function modificarUsuario() {
        var idUsuario = $("#idUsuarioModificar").val();
        var nombreUsuario = $("#nombreUsuarioModificar").val();
        var correoUsuario = $("#correoUsuarioModificar").val();
        var contrasenaUsuario = $("#contrasenaUsuarioModificar").val();
        var rolUsuario = $("#rolUsuarioModificar").val();
        var telefonoUsuario = $("#telefonoUsuarioModificar").val();
        var direccionUsuario = $("#direccionUsuarioModificar").val();
        var edadUsuario = $("#edadUsuarioModificar").val();

        // Validar que los campos no estén vacíos (puedes agregar más validaciones según tus necesidades)

        $.ajax({
            type: "POST",
            url: "modificarUsuario.php",
            data: {
                idUsuario: idUsuario,
                nombreUsuario: nombreUsuario,
                correoUsuario: correoUsuario,
                contrasenaUsuario: contrasenaUsuario,
                rolUsuario: rolUsuario,
                telefonoUsuario: telefonoUsuario,
                direccionUsuario: direccionUsuario,
                edadUsuario: edadUsuario
            },
            success: function (response) {
                mostrarToast(response);
                $("#modalModificarUsuario").modal("hide");
                reload();
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