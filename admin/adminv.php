

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="../css/styleadminv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css -->
    
</head>
<body>
    <nav class="sliderbar">
      <header>
        <div class="imagen"></div>
      </header>
      <div class="menu-bar">
        <div class="menu">
          <ul class="menu-links">
            <li class="nav-link">
              <a href="">
                <i class="fa-solid fa-house icon"></i>
                <span class="text nav-text">INICIO</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="">
                <i class="fa-solid fa-beer-mug-empty icon"></i>
                <span class="text nav-text">Inventario</span>
              </a>
            </li><li class="nav-link">
              <a href="adminv.php">
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
      <nav>
        
      </nav>
      <section class="inicio">
        <div class="container-lg">
          <div class="row">
            <article class="col-lg-4 add-prod">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="fa-solid fa-plus"></i>
              </button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content prod">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body form">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Nuevo producto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Agregar Cantidad</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Proveedores</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">tipo</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                              
                                <form action="../php/productos.php" id="N-producto" method="post" enctype="multipart/form-data">
                                  <input type="text" name="Nombre" placeholder="nombre">
                                    <?php
                                      include("../php/conexionbd.php");
                                      $query = "SELECT id , nombre FROM tipo_pr";
                                      $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                              
                                      echo "<select name='cmbumedidads'>";
                                        echo  "<option selected value=0> --Seleccione un tipo-- </option>";
                                        
                                      while($row=mysqli_fetch_array($result))
                                      {
                                                        echo  "<option value=$row[0]> $row[1] </option>";
                                                    }
                                            
                                        echo "</select>";
                                    ?>
                                    <input type="number" name="Cantidad" placeholder="Cantidad">
                                  <?php 
                                      include("../php/conexionbd.php");
                                      $query = "SELECT NID , nombre FROM proveedor";
                                      $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                              
                                      echo "<select name='cmbumedidads1'>";
                                        echo  "<option selected value=0> --Seleccione un proveedor -- </option>";
                                        
                                      while($row=mysqli_fetch_array($result))
                                      {
                                                        echo  "<option value=$row[0]> $row[1] </option>";
                                                    }
                                            
                                        echo "</select>";
                              
                                      echo "</select>";
                                    ?>
                                  <input type="number" name="Precio" placeholder="Precio">
                                  <input type="file" name="imagenp" accept="image/*">
                                  <button type="submit">Guardar Producto</button>
                                </form>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                          <form action="../php/add_p.php" method="post" id="A-producto" >
                          <?php
                                     include"../php/conexionbd.php";
                                     $query = "SELECT id , nombre FROM producto";
                                     $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                             
                                     echo "<select name='productadd'>";
                                     echo "<option selected value='0'>--Seleccione una producto--</option>";
                                     while($row=mysqli_fetch_array($result))
                                     {
                                                       echo  "<option value=$row[0]> $row[1] </option>";
                                                   }
                                           
                                       echo "</select>";
                             
                                     echo "</select>";
                              ?>
                                  
                            <input type="number" name="cantidad_add" id="">
                            <?php
                                     include"../php/conexionbd.php";
                                     $query = "SELECT NID , nombre FROM proveedor";
                                     $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                             
                                     echo "<select name='productaddpro'>";
                                     echo "<option selected value='0'>--Seleccione un proveedor--</option>";
                             
                                     while($row=mysqli_fetch_array($result))
                                      {
                                                        echo  "<option value=$row[0]> $row[1] </option>";
                                                    }
                                            
                                        echo "</select>";
                              
                                      echo "</select>";
                                    ?>
                            <button type="submit">Guardar</button>
                          </form>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                          <form action="../php/proveedor.php" method="post">
                            <input type="nombre" name="N-proveedor" placeholder="Proveedor">
                            <input type="number" name="DNI-proo" placeholder="Numero-proo">
                            <button type="submit">Guardar</button>
                          </form>
                        </div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                          <form action="../php/tipo.php" method="post">
                            <input type="text" name="n_tipo" id="">
                            <button type="submit" id="btn_tipo">Guardar</button>
                          </form>
                        </div>
                      </div>             
                    </div>                    
                  </div>
                </div>
              </div>

            </article>
            <article class="col-lg-8 barra-b">
              <form action="" id="busqueda">
                <input type="text" placeholder="search" name="b">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
            </article>
          </div>
          <div class="row">
            <?php
                                        include("../php/conexionbd.php");
                                        $query = "SELECT id , nombre FROM tipo_pr";
                                        $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                                
                                        echo "<select name='cmbumedidads'>";
                                          echo  "<option selected value=0> --Seleccione un tipo-- </option>";
                                          
                                        while($row=mysqli_fetch_array($result))
                                        {
                                                          echo  "<option value=$row[0]> $row[1] </option>";
                                                      }
                                              
                                          echo "</select>";
              ?>
          </div>
          </div>
        </div>
      </section>
      <div class="productos">
        <div class="container">
          <div class="row">
            <?php
            include('../php/conexionbd.php');
             $con = mysqli_query($link,"SELECT * FROM producto");

             while($row= mysqli_fetch_array($con)){
            ?>
            <article class="card" style="width: 18rem;">
              <img src="<?php echo $row['dir']?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['nombre']?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </article>

            <?php
             }
            ?>
          </div>
        </div>
      </div>
    </main>






  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <Script src="../js/PLAY.JS"></Script>
</body>
</html>
