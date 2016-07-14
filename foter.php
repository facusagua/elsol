<!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-2">
          <div class="footer-left">
            <img src="assets/images/logoBlancoG.png">
          </div>
        </div>
          <div class="col-md-7 col-sm-7">
            <nav class="navbar navbar-default" role="navigation" style="background-color:black;border-color:black;padding: 35px 0px 0px 60px;">   
          <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-left main-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="nosotros.php">Contacto</a></li>
            <li class="opene"><a style="color:gold;font-size:17px;" href="cotizacion.php">COTIZACION</a></li>
          </ul>                     
        </div>
              </nav>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="footer-left">
              <div class="row" style="margin-bottom:5px;"><i class="fa fa-envelope"></i> <a href="mailto:info@expresoelsol.com.ar" style="color:gold;"><em>info@expresoelsol.com.ar</em></a></div>
            <div class="row" style="margin-bottom:5px;"><i class="fa fa-phone-square"></i> <em>(0381)-4330 434/403</em></div>
            <div class="row"><i class="fa fa-map-marker"></i> <em> Ex ruta 9 Km 1286.5 - Banda del Río Sali - Tucumán</em></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="assets/js/jquery-1.11.1.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 <script type="text/javascript">
     $(document).ready(function(){
    var section = $("#sectionName").val();     
    $("#top-menu li").removeClass("active");
    $("#top-menu li a").each(function (index){
        if($(this).html() == section){
            if(section == 'COTIZACION'){
            $(this).css("color","white");
            $(this).parent().addClass("coti");    
            }
            else{
            $(this).css("color","gold");
            $(this).parent().addClass("active");
        }
            }
    });

 $("#cotiza").hover(function(){
     debugger;
     $(this).css("color","white");
 });
 $(".blog-news-img").mouseenter(function(){
    console.log($(this).children('div').css('background-color','#314384')); 
 });
$(".blog-news-img").mouseleave(function(){
    console.log($(this).children('div').css('background-color','#FFCC00')); 
 });          
 $(".productoBtn").click(function(){
     
    $(".single-portfolio").css("display", 'none');
    $("#detalleProd").css("display", 'inline');
    var desc =  $(this).find("#descripcionProd").val();
    var cod = $(this).find("#codigoProd").val();
    $("#nomProd").val(desc);
    $("#codProd").val(cod);
    $("#titProd").html(desc);   
 });
        
    $(".filter").click(function(){
     debugger;
        //$("#detalleProd").remove();
    $("#detalleProd").css("display", 'none');    
    $(".single-portfolio").css("display",'inline'); 
   });
    
    $("#selectProd").change(function(){
        console.log($(this));
    });
         
    $("#cuit").focusout(function(){
        $("#nom").val("");
        $("#emp").val("");
        $("#loc").val("");
        $("#tel").val("");
        $("#email").val("");  
        var cuit = 'cuit='+$(this).val();
		var url = "revisaCliente.php";
		$.ajax({
           type: "POST",
           url: url,
           data: cuit,
           dataType: "html",
           error: function(){
            alert("error petición ajax");
           },
           success: function(data)
           {
            var json = $.parseJSON(data);
            $(json).each(function(i,val){
            $("#nom").val(val.nomyap);
            $("#emp").val(val.empresa);
            $("#loc").val(val.localidad);
            $("#tel").val(val.tel);
            $("#email").val(val.email);    
            });
        }
    });     
});
}); 
         
</script>      
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  
  </body>
</html>