<?php /* plantilla comodin que muestra contenido de paginas, noticias etc, lo que sea necesario */ ?>
<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-lg-9 col-md-9">
	       <div class="noticias">
	       		<div class="publicacion clearfix">
	       		<h2>Mapa del Sitio</h2>
	       			

	       			<?php if ( is_active_sidebar( 'mapasitio' ) ) : ?>
					    <ul class="mapasitio" style="list-style:none; padding:0; margin:0">
					        <?php dynamic_sidebar( 'mapasitio' ); ?>
					    </ul>
					<?php endif; ?>


	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>