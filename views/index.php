<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Inicio Munayart</title>
</head>
<body>

    <div class="container" id="container">
        <!-- Formulario de Registro -->
        <div class="form-container sign-up">
            <form action="../php/register.php" method="POST">
                <h1>Crear Cuenta</h1>
                <div class="social-icons">
                    <a href="your-google-auth-url" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="your-facebook-auth-url" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="your-github-auth-url" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="your-linkedin-auth-url" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>o utiliza tu correo electrónico para registrarte</span>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido" placeholder="Apellido" required>
                <input type="date" name="fechaNac" placeholder="Fecha de Nacimiento" required>
                <input type="tel" name="celular" placeholder="Número de Celular" required>
                <input type="text" name="user" placeholder="Usuario" required>
                <input type="email" name="email" placeholder="Correo Electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <label for="rol">Rol:</label>
                <select name="rol" required>
                    <option value="cliente">Cliente</option>
                    <option value="artesano">Artesano</option>
                    <option value="delivery">Delivery</option>
                </select><br>
                <button type="submit">Registrarse</button>
            </form>
        </div>

        <!-- Formulario de Inicio de Sesión -->
        <div class="form-container sign-in">
            <form action="../php/login.php" method="POST">
                <h1>Iniciar Sesión</h1>
                <div class="social-icons">
                    <a href="your-google-auth-url" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="your-facebook-auth-url" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="your-github-auth-url" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="your-linkedin-auth-url" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>o utiliza tu correo electrónico y contraseña</span>
                <input type="text" name="user" placeholder="Usuario" required>
                <input type="email" name="email" placeholder="Correo Electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <label for="rol">Rol:</label>
                <select name="rol" required>
                    <option value="cliente">Cliente</option>
                    <option value="artesano">Artesano</option>
                    <option value="delivery">Delivery</option>
                </select><br>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>

        <!-- Contenedor de Toggle -->
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Bienvenido de nuevo!</h1>
                    <p>Ingresa tus datos personales para acceder a todas las funciones del sitio</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>¡Hola!</h1>
                    <p>Regístrate con tus datos personales para acceder a todas las funciones del sitio</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>
