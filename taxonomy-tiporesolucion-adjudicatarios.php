<?php /* plantilla del listado de resoluciones */ ?>
<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3">
	        <?php get_sidebar(); ?>
	   </div>            
	   <div class="col-lg-9">
	       <div class="noticias">
	       
	       		<div class="publicacion clearfix">
<h2>Listado Resoluciones Adjudicatarios</h2>
	       			<?php
		       		$args=$wp_query->query_vars;
	                $args['posts_per_page']=10;
	                query_posts($args);
					 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					    <div class="publicacion clearfix">
					        <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
					        <?php echo get_the_excerpt(); ?> - 
					        <a href="<?php the_permalink(); ?>" class="leermas" style="display:inline;">Ver documento</a>
					        <br class="clearfix">
					    </div>
					<?php endwhile; else: ?>
					    <h1>No hay contenido en esta seccion.</h1>
					<?php endif; ?><br>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></br>
	
	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>           
          