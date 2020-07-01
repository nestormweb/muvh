<?php /* plantilla del listado de contrataciones */ ?>
<?php get_header(); ?>
<div class="fondo publicacion h2">
	<div class="container"> 
		<div class="row">  
		<h2>Contrataciones</h2>
</div>
	</div>
		</div>
		<div class="container"> 
			<div class="row">
    <div class="col-sm-12">
	       <div class="noticias">
	       
	       		<div class="publicacion clearfix">

	       		
		       		
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					    <div class="publicacion clearfix">
					        <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
					   
					        
					        <?php the_excerpt(); ?>
					        <a href="<?php the_permalink(); ?>" class="leermas" style="text-align:center;">Ver Detalles</a>
					        <br class="clearfix">
					    </div>
					<?php endwhile; else: ?>
					    <h1>No hay contenido en esta seccion.</h1>
					<?php endif; ?>

		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>           
          