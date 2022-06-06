<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/logoicono.ico" type="image/x-icon">
    <title>Login de usuario</title>
    <link rel="stylesheet" href="./public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/login.css">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="./public/img/hdlogo.png" id="icon" alt="User Icon" />
                <h1>Help-Desk</h1>
            </div>

            <!-- Login Form -->
            <form id="frmLogin" method="POST" onsubmit="return loginUsuario()">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="username" required>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
                <input type="submit" class="fadeIn fourth" value="Entrar">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#" data-toggle="modal" data-target="#modalContacto">Contactar con el
                    administrador</a>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Si no tiene una credencial llama al: 5547601941
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./public/jquery/jquery-3.6.0.min.js"></script>
    <script src="./public/bootstrap/popper.min.js"></script>
    <script src="./public/bootstrap/bootstrap.min.js"></script>
    <script src="./public/sweetalert2/sweetalert2@11.js"></script>
    <script src="./public/js/usuarios/login.js"></script>
</body>

</html>