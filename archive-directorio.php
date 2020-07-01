<?php /* plantilla del listado de contrataciones */ ?>
<?php get_header(); ?>
<div class="fondo publicacion h2 ">
	<div class="container">
		<div class="row"> 
 			<h2>Autoridades</h2> 
 			</div>
			 	</div>
				 	</div>
	<div class="row">
		<div class="container">
			<div class="col-sm-12">
	       			<div class="publicacion clearfix">

	       		

	       		<ul id="autoridades">
	       		<?php
	       			$args=$wp_query->query_vars;
	       		    $args['orderby']='date';
	       		    $args['order']='ASC';
	       		    $args['posts_per_page']='50';
	                query_posts($args);
	       		?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					        <li>
					        <?php if(has_post_thumbnail(get_the_ID())){ ?> 
					            <a href="<?php the_permalink(); ?>" class="img-thumbnail">
					                <?php echo get_the_post_thumbnail( get_the_ID(), 'directorio_thumb' ); ?>
					            </a>
					        <?php }  else { ?>
					        	<a href="<?php the_permalink(); ?>" class="img-thumbnail">
					               <img src="<?php echo bloginfo('template_url'); ?>/images/sinfoto.jpg" />
					            </a>
					        <?php } ?> 
								<h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a><h3>
								<ul>
									<li><?php the_excerpt(); ?></li>
								</ul>
								<br class="clearfix">
							</li>
					       
					<?php endwhile; else: ?>
					    <li>No hay contenido en esta seccion.</li>
					<?php endif; ?>

				</ul>

	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>           
          