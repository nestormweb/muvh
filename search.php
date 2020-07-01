<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3">
	        <?php get_sidebar(); ?>
	   </div>            
	   <div class="col-lg-9">
	       <div class="noticias">
	       		<div class="publicacion clearfix">
	       		<h2>Resultados de la busqueda: <?php the_search_query(); ?></h2>
	       		<p>
	       			<?php
	       				global $wp_query;
						$total_results = $wp_query->found_posts;
						echo '<address>' . $total_results . ' elementos encontrados </address>' ;
					?>
	       		</p>
	       			<?php include('plantilla_noticias.php'); ?> 
	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>           
          