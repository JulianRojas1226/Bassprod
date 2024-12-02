

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTAS</title>
    <link rel="stylesheet" href="../css/ventas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css -->
    
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
        <div class="container-lg">
          <div class="row">
            <?php
            include('../php/conexionbd.php');
             $con = mysqli_query($link,"SELECT * FROM mesa");

             while($row= mysqli_fetch_array($con)){
            ?>
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel"><?php echo "mesa ".$row['N°']?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="../php/ventas.php" method="post">
                    <?php
                                        $query = "SELECT codigo , nombre FROM empleado";
                                        $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                                
                                        echo "<select name='cmbumedidads'>";
                                          echo  "<option selected value=0> --Seleccione un tipo-- </option>";
                                          
                                        while($fila=mysqli_fetch_array($result))
                                        {
                                                          echo  "<option value=$fila[0]> $fila[1] </option>";
                                                      }
                                              
                                          echo "</select>";
                      ?>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" type="submit">ingresar orden</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2"><?php echo "mesa ".$row['N°']?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ingreso principal
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><?php echo "mesa ".$row['N°']?></button>
            <?php
             }
            ?>
            
          </div>
          </div>
        </div>
        <div class="container-lg">
            
        </div>
      </section>
    </main>






  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <Script src="../js/mainv.JS"></Script>
</body>
</html>
