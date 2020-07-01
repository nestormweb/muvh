<?php /* plantilla comodin que muestra contenido de paginas, noticias etc, lo que sea necesario */ ?>
<?php get_header(); ?>
<div class="fondo publicacion h2"> 
	<div class="container"> 
		<div class="row"> 
			<h2> <?php the_title(); ?></a></h2>	
</div>
	</div>
		</div>

		<div class="container"> 
	<div class="row">
    <div class="col-sm-12">
	       <div class="noticias">
	       		<div class="publicacion clearfix">
	       			<?php /* plantilla utilizada para listar una noticia */ ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   
					    <?php the_content(); ?>
					    <br class="clearfix">
					<?php endwhile; else: ?>
					    <h1>No hay contenido en esta seccion.</h1>
					<?php endif; ?>
	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>           
          