<?php /* plantilla del listado de contrataciones */ ?>
<?php get_header(); ?>
	<div class="fondo publicacion">
		<div class="container">
			<div class="row"> 
			<h2>Agencias Regionales</h2>
</div>
	</div>
		</div>
		
		<div class="container">
			<div class="row">
    			<div class="col-sm-12">
	       <div class="noticias">
	       
	       		<div class="publicacion clearfix">

	       		

	       		<ul>
	       		<?php
	       			$args=$wp_query->query_vars;
	       		    $args['orderby']='date';
	       		    $args['order']='ASC';
	       		    $args['posts_per_page']='50';
	                query_posts($args);
	       		?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					        <li>
					        	<h3><a href="<?php the_permalink(); ?>"  style="text-align:center;"><?php the_title(); ?></a></h3>
					        	<a href="<?php the_permalink(); ?>" class="leermas" style="display:inline;">Ver información</a>
					        </li>
					       
					<?php endwhile; else: ?>
					    <li>No hay contenido en esta seccion.</li>
					<?php endif; ?>

				</ul>

	       		</div>  
	    	</div>
	   </div> 
	</div>
</div>
</div>
<?php get_footer(); ?>           
          