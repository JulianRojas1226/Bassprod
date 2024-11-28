<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    
</head>
<body class="bodylogin">
    <MAin class="mainlogin">
        <div class="TODO">
            <div class="CAJA_TRASERA">
                <div class="caja_trasera_is">
                    <h1>¡Bienvenido!</h1>
                    <p>Inicia sesión para acceder a todas las funcionalidades de nuestra plataforma. Ingresa tus credenciales de forma segura y comienza a disfrutar de una experiencia eficiente y personalizada.</p>
                    <button id="btn_iniciarsesion">Inicio sesion</button>
                </div>
                <div class="caja_trasera_reg">
                    <h1>¡Bienvenido!</h1>
                    <p>Inicia sesión para acceder a todas las funcionalidades de nuestra plataforma. Ingresa tus credenciales de forma segura y comienza a disfrutar de una experiencia eficiente y personalizada.</p>
                </div>
            </div>
            <div class="contenedor_is_r">       
                <form action="php/iniciarSesion.php" method="post" class="inicio_sesion">
                    <H2>INICIAR SESION</H2>
                    <hr>
                    <?php
                        if (isset($_GET['error'])) {
                        ?>
                        <p class="error">
                            <?php
                            echo $_GET['error']
                            ?>
                        </p>
                    <?php
                        }  
                    ?>
                    <hr>
                    <i class="fas fa-user"></i>
                    <input type="text" name="Usuario" placeholder="Usuario">
                    <i class="fas fa-lock"></i>
                    <input type="number" name="Codigo" placeholder="Codigo">
                    <button type="submit" >Iniciar</button>
                </form>
                <!-- <form action="" method="post" class="REGISTRO">
                    <H2>REGISTRARSE</H2> 
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="empresa" placeholder="Empresa">
                    <input type="text" name="correo" placeholder="Correo">
                    <input type="number" name="numero_admin" placeholder="Numero_admin">
                    <button>Registrarse</button>
                </form> -->
            </div>
        </div>
    </MAin>
    <script src="js/PLAY.JS"></script>
</body>
</html>