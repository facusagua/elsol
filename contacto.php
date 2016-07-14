<?php
     include "headerXS.php";
?>   
<!-- Start contact section  -->
  <section id="contact">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="title-area">
              <h2 class="title">Tiene alguna consulta?</h2>
              <span class="line"></span>
              <p>Por consultas o sugerencias, puede ponerse en contacto con nosotros. Será un placer ayudarlo.-</p>
            </div>
         </div>
         <div class="col-md-12">
           <div class="cotact-area">
             <div class="row">
               <div class="col-md-4">
                 <div class="contact-area-left">
                   <h4>Información de Contacto</h4>
                   <address class="single-address" style="color:black;">
                     <p>Ex ruta 9 Km 1286.5 - Banda del Río Sali - Tucumán</p>
                     <p>info@expresoelsol.com.ar</p>
                     <p>(0381)-4330 434/403</p>
                   </address> 
                   <div class="footer-right contact-social">
                      <a href="index.html"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>                
                 </div>
               </div>
               <div class="col-md-8">
                 <div class="contact-area-right">
                   <form action="contactook.php" class="comments-form contact-form">
                    <div class="form-group">                        
                      <input type="text" name="nombre" class="form-control" placeholder="Su nombre y apellido">
                    </div>
                    <div class="form-group">                        
                      <input type="email" name="email" class="form-control" placeholder="Su email">
                    </div>
                     <div class="form-group">                        
                      <input type="text" name="tel" class="form-control" placeholder="Su telefono">
                    </div>
                    <div class="form-group">                        
                      <textarea placeholder="Su comentario" name="comentario" rows="3" class="form-control"></textarea>
                    </div>
                    <button class="comment-btn">Enviar comentario</button>
                  </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </section>
  <!-- End contact section  -->

  <!-- Start google map -->
  <section id="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16930.23620437545!2d-65.19262690442207!3d-26.867174121862423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9422596126f98b07%3A0x66d435ca71b376cb!2sEmpalme+Ruta+9!5e0!3m2!1ses-419!2sar!4v1468518580060" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!-- End google map -->
<?php 
  include "foter.php";
?>