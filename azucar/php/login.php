<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azúcar y Almendra</title>
    <link rel="icon" href="../image/logo.png" type="image/x-icon">
    
    <!-- Fuente de Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Archivos CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">

</head>
<body>
    <section class="menuuu">
        <nav class="menu">       
            <a href="index.html"><img src="../image/logo.png" alt="Logo de la empresa" class="logo_menu"></a>
            <ul>
                <li><a href="../index.html">Productos</a></li>
                <li><a href="../conocenos.html">Conócenos</a></li>
                <li><a href="../ubicacion.html">Ubicación</a></li>
            </ul>
    
            <!-- Redes sociales dentro del menú -->
            <div class="social-media">
                <ul>
                    <li><a href="https://www.instagram.com/_azucarycanela_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/share/g/18kFMkZ667/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://x.com/ElGloboOficial" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </nav>
    </section>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!-- Formulario de Login y registro -->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="php/registro.php" method="POST" class="formulario__register">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <!-- Register -->
                <form action="php/registro.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electrónico" name="email">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Archivo JavaScript -->
    <script src="../js/login.js"></script>
</body>
</html>
