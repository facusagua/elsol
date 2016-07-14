<?php
error_reporting(E_ERROR);
  include "headerXS.php";
 include "connect.php";
$sqlProductos = "SELECT * FROM productos";
$query = mysql_query($sqlProductos) or die(mysql_error());
$producto = mysql_fetch_assoc($query);
?>
  <!-- Start Pricing table -->
  
  <!-- End Pricing table -->

  <!-- Start portfolio -->
<input type="hidden" id="sectionName" value="COTIZACION">
  <section id="portfolio">
    <div class="portfolio-area">  
       <!-- Portfolio container -->
        
        <div class="row">
        <div class="container" style="background-color: #314384;">
        <div class="col-md-12">
          <div class="title-area">
            <h2 style="color: white; margin-top:20px;">COTIZACION</h2>
            <p style="color: white;">Por favor complete todos los datos e indique los productos que desea le coticemos. Le responderemos a la brevedad.-
          </div>
        </div>
        <row>    
        <div class="col-md-12">
            <h4 style="text-align: left;color: yellow;">                        SELECCION DE PRODUCTOS</h4>
        </div>
        </row>
            <form action="addCartExpress.php" method="post">
            <row>    
        <div class="col-md-4">
            <h4 style="text-align: right;">Articulo :</h4>
        </div>
        <div class="col-md-4">
            <div class="form-group">                        
                <select id="selectProd" class="form-control" name="codProd" placeholder="Articulo" required>
                    <option value="">Seleccione Producto</option>
                    <?php do{  ?>
                        <option id="optProd" value="<?php echo $producto['codigo']; ?>"><?php echo $producto['descripcion']; ?></option>
                    <?php }while($producto = mysql_fetch_assoc($query)) ?>
                </select>
                    </div>
       </div>
             <div class="col-md-2">
            <div class="form-group">                        
                     <input type="number" name="cantProd" class="form-control" placeholder="Cantidad" required> 
                    </div>
       </div>
                <div class="col-md-2">
            <div class="form-group">                        
                     <button class="comment-btn">Agregar</button>
                    </div>
       </div> 
        </row>
        </form>
          <row>    
        <div class="col-md-4"><h4 style="text-align: right;">Listado de Articulos:</h4></div>
        <div class="col-md-8">
           <table class="table table-default" >
                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Codigo</th>
                                                <th style="width: 50%">Descripcion</th>
                                                <th style="width: 20%">Cantidad</th>
                                                <th style="width: 20%">OPCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: black;">
                                        <?php  $carrito = new Carrito();
                                                $carro = $carrito->get_content();
                                           foreach($carro as $producto){?>    
                                            <tr style="color:black;"> 
                                                <td style="color:gold;">
                                                    <?php echo $producto["id"]; ?>
                                                </td>
                                                <td style="color:gold;">
                                                    <?php echo $producto["nombre"]; ?>
                                                </td> 
                                                <td style="color:gold;">
                                                    <?php echo $producto["cantidad"]; ?>
                                                </td>
                                                <td style="color:gold;">
                                                    <a href="delItemCart.php?id=<?php echo $producto["unique_id"]; ?>"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>  
                                        </tbody>
                                    </table>
       </div>
        </row>  
        <hr>
        <row>    
        <div class="col-md-12">
            <h4 style="text-align: left;color: yellow;">                        DATOS DEL CLIENTE</h4>
        </div>
        </row>    
            <form action="sendPres.php" method="post">
        <row>    
        <div class="col-md-6">
            <input id="ident" type="hidden" name="save" value="SI">
            <h4 style="text-align: right;">Si es Cliente solo ingrese CUIT sin guiones :</h4>
        </div>
        <div class="col-md-6">
            <div class="form-group">                        
                      <input id="cuit" type="text" name="cuit" class="form-control" placeholder="CUIT" required>
                    </div>
       </div>
        </row>
           <row>    
        <div class="col-md-4">
            <h4 style="text-align: right;">Nombre y Apellido :</h4>
        </div>
        <div class="col-md-8">
            <div class="form-group">                        
                      <input id="nom" type="text" name="nomyap" class="form-control" placeholder="Nombre y Apellido" required>
                    </div>
       </div>
        </row>
            <row>    
        <div class="col-md-4">
            <h4 style="text-align: right;">Empresa :</h4>
        </div>
        <div class="col-md-8">
            <div class="form-group">                        
                      <input id="emp" type="text" name="empresa" class="form-control" placeholder="Empresa">
                    </div>
       </div>
        </row>
            <row>    
        <div class="col-md-4">
            <h4 style="text-align: right;">Localidad :</h4>
        </div>
        <div class="col-md-8">
            <div class="form-group">                        
                      <input id="loc" type="text" name="localidad" class="form-control" placeholder="Localidad">
                    </div>
       </div>
        </row>
            <row>    
        <div class="col-md-4">
            <h4 style="text-align: right;">Teléfono :</h4>
        </div>
        <div class="col-md-8">
            <div class="form-group">                        
                      <input id="tel" type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
                    </div>
       </div>
        </row>
            <row>    
        <div class="col-md-4">
            <h4 style="text-align: right;">Email :</h4>
        </div>
        <div class="col-md-8">
            <div class="form-group">                        
                      <input id="email" type="text" name="email" class="form-control" placeholder="Email">
                    </div>
       </div>
        </row>
        <row>    
        <div class="col-md-4">
            <h4 style="text-align: right;"></h4>
        </div>
        <div class="col-md-8">
            <div class="form-group">                        
                      <button class="comment-btn">Enviar</button>
                    </div>
       </div>
        </row>         
        </form>    
       </div>
    </div>    
  </section>      
      
  <?php 
  include "foter.php";
?>