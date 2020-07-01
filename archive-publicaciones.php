<?php /* plantilla del listado de contrataciones */ ?>
<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-lg-9 col-md-9">
	       <div class="noticias">
	       
	       		<div class="publicacion clearfix">

	       		<h2>Publicaciones</h2>
		       		<?php
		       		$args=$wp_query->query_vars;
	                $args['posts_per_page']=50;
	                $args['post_parent'] = 0;
	                query_posts($args);
	                 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					    <div class="publicacion clearfix">
					        <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
					   
					        
					       
					        <a href="<?php the_permalink(); ?>" class="leermas" style="display:inline;">Ver publicación</a>
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
          