 <div class="container">
     <?php if(!(is_home())){ ?>
     <div class="row hidden-lg hidden-md hidden-print">
         <div class="col-lg-12">
             <a href="<?php echo bloginfo('url'); ?>" class="btn btn-default">Volver al Inicio</a>
         </div>
     </div>

     <?php } ?>
 </div>
 </div>

 <footer id="footertheme">
     <section>
         <div class="container">
             <div class="row">
                 <div class="col-sm-4">
                     <div class="ccm-custom-style-container ccm-custom-style-footerinfo-640">
                         <img src="https://www.sen.gov.py/application/files/cache/thumbnails/cd8a89049bf46b5ded1f4bdc325d4d64.jpg"
                             alt="" width="200" height="200" class="ccm-image-block img-responsive bID-640">
                     </div>
                 </div>
                 <div class="col-sm-4">


                     <h3 style="margin-top: 39px;">Informaciones</h3>

                     <p><strong>Dirección</strong>: Independencia Nacional &nbsp;e/Manuel Dominguez. - Asunción -
                         Paraguay.&nbsp;</p>

                     <p><strong>Teléfono</strong>:&nbsp;<a href="tel:+595212179000">(+595 21) 4</a>13-3000</p>

                     <p>&nbsp;</p>

                 </div>
                 <div class="col-sm-4">


                     <div class="footerextra">

                         <div id="socialmedia" class="link">
                             <ul class="list-inline">
                                 <li>
                                     <a target="_blank"
                                         href="https://es-la.facebook.com/SecretariadeEmergenciaNacionalParaguay/"
                                         aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"
                                             title="Facebook"></i></a>
                                 </li>
                                 <li>
                                     <a target="_blank" href="https://twitter.com/senparaguay" aria-label="Twitter"><i
                                             class="fa fa-twitter" aria-hidden="true" title="Twitter"></i></a>
                                 </li>
                                 <li>
                                     <a target="_blank" href="https://www.instagram.com/senparaguay"
                                         aria-label="Instagram"><i class="fa fa-instagram" aria-hidden="true"
                                             title="Instagram"></i></a>
                                 </li>
                             </ul>
                         </div>

                     </div>


                     <div class="footerreporte">
                         <p><a class="btn btn-default btn-sm"
                                 href="https://www.sen.gov.py/index.php/contacto/reporte-o-sugerencias"
                                 style="padding:5px 10px;">Reportar un fallo o sugerir mejoras</a></p>

                     </div>
                 </div>
             </div>
         </div>
     </section>
 </footer>
 </div>


 <div class="fmuvh">
     <footer id="footer-muvh">
         <div class="container">
             <div class="row text-center">
                 <div class="col-sm-12">
                     <p style="font-size:11px;"><a href="https://www.paraguay.gov.py/guia-estandar" target="_blank"
                             style="border-bottom:0">Basado en la Guía estándar para sitios web del Gobierno</a></p>
                     <span style="vertical-align:middle">
                         <a href="https://www.muvh.gov.py" style="border-bottom:0"><img
                                 src="<?php echo get_template_directory_uri(); ?>/images/tics.jpeg" height="30"
                                 style="height:30px !important; width:auto !important;" alt="Marca producto/MUVH"></a>
                     </span>
                 </div>
             </div>
         </div>
     </footer>
 </div>

 <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
 <script>
 $(window).load(function() {
 $('.grid').masonry({
 // optiones
 itemSelector: '.grid-item',
 singleMode: true
 });
 });
</script>
 <script src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
 <script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
 </body>

 </html>