<?php /* plantilla comodin que muestra contenido de paginas, noticias etc, lo que sea necesario */ ?>
<?php get_header(); ?>
<div class="fondo directorio h2"> 
	<div class="container">
		<div class="row">
		<h2><?php the_title(); ?></h2>
		</div>
			</div>
				</div>
    	<div class="col-sm-12">
	       		<div class="publicacion clearfix">
	       			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					  

					    <?php if(has_post_thumbnail(get_the_ID())){ ?> 
					           <div align="center" style="margin-bottom:20px;">
					                <?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
					           </div>
					    <?php } ?>

					    <?php the_content(); ?>
					    <br class="clearfix">
					<?php endwhile; else: ?>
					    <h1>No hay contenido en esta seccion.</h1>
					<?php endif; ?>
	       		</div>  
	   </div> 
<?php get_footer(); ?>