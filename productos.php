<?php
error_reporting(E_ERROR);
include "headerXS.php";
include "connect.php";
$sqlProductos = "SELECT * FROM productos";
$query = mysql_query($sqlProductos) or die(mysql_error());
$producto = mysql_fetch_assoc($query);
?>
  <!-- Start Pricing table -->
<input type="hidden" id="sectionName" value="Productos">
  <section id="our-team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <a href="cotizacion.php">
          <div class="title-area">
            <h2 class="title"><img src="assets/images/flechaLeftl.png" height="40px"> <b>COTIZACION EXPRESS</b> <img src="assets/images/flechaRight.png" height="40px"></h2>
                </div></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing table -->

  <!-- Start portfolio -->
  <section id="portfolio">
    <div class="portfolio-area">  
       <!-- Portfolio container -->
        <div class="row" style="border: 7px solid #314384;">
        <div class="col-md-3">
            <div class="portfolio-menu">
         <ul>
           <div class="col-md-12" ><li class="filter" data-filter=".hierros">Hierros</li></div>
           <div class="col-md-12" ><li class="filter" data-filter=".clavos">Clavos y Alambres</li></div>
           <div class="col-md-12" ><li class="filter" data-filter=".development">Mallas</li></div>
           <div class="col-md-12" ><li class="filter" data-filter=".photography">Perfiles C</li></div>
           <div class="col-md-12" ><li class="filter" data-filter=".design">Cemento y Pegamento</li></div>
           <div class="col-md-12" ><li class="filter" data-filter=".photography">Ladrillos Huecos</li></div>
           <div class="col-md-12" ><li class="filter" data-filter=".sphotography">Chapas Revestidas</li></div>
           <div class="col-md-12" ><li class="filter" data-filter=".sphotography">Aislantes</li></div>
           <div class="col-md-12" ><li class="filter" data-filter=".sphotography">Autoperforantes</li></div>
         </ul>
       </div>  
        </div>
        <div class="col-md-9"/>    
       <div id="mixit-container" class="portfolio-container" style="background-color:white;">
        <?php do{  ?> 
        <div class="single-portfolio mix <?php echo $producto['clase']; ?> productoBtn">
           <div class="single-item">
             <img src="assets/images/productos/<?php echo $producto['imagen']; ?>" alt="img">
             <div class="single-item-content">               
                <i class="fa fa-plus-circle"></i>
                <div class="portfolio-title">
                  <input type="hidden" id="descripcionProd" value="<?php echo $producto['descripcion']; ?>">
                  <input type="hidden" id="codigoProd" value="<?php echo $producto['codigo']; ?>">
                  <h4 style="margin-left:30px;margin-right:30px;"><?php echo $producto['descripcion']; ?></h4>
                  <span id="productoBtn">Agregar</span>
                </div>
             </div>
           </div>
         </div>
        <?php }while($producto = mysql_fetch_assoc($query)) ?>
        <div id='detalleProd' class='row' style="display:none;margin-top:50px;">
            <div class='col-md-4' style="background-color: trasnparent;">
                <img src='assets/images/hierros.png' height="300px">
            </div>
            <div class='col-md-8 pull-left'>
                <div class='title-area' style='background-color: gold;'>
                    <h3 id="titProd" style='color: black;'></h3><p style='color: black;'></p>
                </div>
                <p style="height: 100px;margin-top: 50px;padding: 30px 10px 50px 30px;color: black;">Descripcion del Producto</p>
            <div class='col-md-8'>
              <form action="addCart.php" method="post">  
                <div class="col-md-6 pull-left">   
                        <input id="codProd" type="hidden" name="codProd">
                        <input id="rubProd" type="hidden" name="rubProd">
                        <input id="nomProd" name="nomProd" type="hidden">
                        <input id="cantProd" type="number" class="form-control" name="cantProd" placeholder="Cantidad" required>
                </div>
                <div class="col-md-6">
                    <div class='form-group'><button id="addCart" class='comment-btn'>Agregar</button></div>
                </div>
                </form>  
             </div>
            </div>
        </div>
       </div>        
       </div>
    </div>
  </section>      

  <?php 
  include "foter.php";
?>