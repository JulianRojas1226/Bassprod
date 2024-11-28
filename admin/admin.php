<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../css/styleadmin.css">
    <!-- icocos -->
    
</head>
<body>
    <nav class="sliderbar">
      <header>
        <div class="imagen">
          <img src="../img/logo.png" alt="" srcset="">
        </div>
      </header>
      <div class="menu-bar">
        <div class="menu">
          <ul class="menu-links">
            <li class="nav-link">
              <a href="admin.php">
                <i class="fa-solid fa-house icon"></i>
                <span class="text nav-text">INICIO</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="adminv.php">
                <i class="fa-solid fa-beer-mug-empty icon"></i>
                <span class="text nav-text">Inventario</span>
              </a>
            </li><li class="nav-link">
              <a href="">
                <i class="fa-regular fa-calendar icon"></i>
                <span class="text nav-text">RESERVA</span>
              </a>
            </li><li class="nav-link">
              <a href="">
                <i class="fa-solid fa-cart-shopping icon"></i>
                <span class="text nav-text">VENTAS</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="">
                <i class="fa-solid fa-person icon"></i>
                <span class="text nav-text">GESTION EMPLEADOS</span>
              </a>
            </li>                         
          </ul>
        </div>
      </div>
    </nav>
    <main class="main">
      <section class="inicio">
        <div class="container-lg graficos">
          <div class="row">
            <div class="col-6">
              <p>grafica 1</p>
            </div>
            <div class="col-6">
              <p>grafica 2</p>
            </div>
          </div>
        </div>
        <div class="container-lg">
            <p>productos agotados</p>
            <div class="carrusel">

              <div class="carta">
                <img src="../img/Poker.jpg" alt="">
                  <div class="info">
                    <P>Nombre</P>
                    <p>stock</p>
                    <p>Categoria</p>
                  </div>
              </div>
              
              <div class="carta">
                <img src="../img/Poker.jpg" alt="">
                  <div class="info">
                    <P>Nombre</P>
                    <p>stock</p>
                    <p>Categoria</p>
                  </div>
              </div>
              
            
            </div>
        </div>
      </section>
    </main>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>