<?php /* plantilla comodin que muestra contenido de paginas, noticias etc, lo que sea necesario */ ?>
<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-lg-9 col-md-9">
	       <div class="noticias">
	       		<div class="publicacion clearfix">
	       			<?php $elid = 0; ?>
	       			<?php include('plantilla_single_simple.php'); ?> 

	       			<?php
		       		$args['post_type']='publicaciones';
	                $args['posts_per_page']=50;
	                $args['post_parent'] = $elid;
	                query_posts($args);
	                 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					    <div class="publicacion clearfix">
					        <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
					   
					        
					       
					        <a href="<?php the_permalink(); ?>" class="caja" style="display:inline;">Ver documento</a>
					        <br class="estirar">
					    </div>
					<?php endwhile; else: ?>
					   
					<?php endif; ?>
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>           
          