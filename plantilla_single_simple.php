<?php /* plantilla utilizada para listar una noticia */ ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $elid = get_the_ID(); ?>
    <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>	
    <?php the_content(); ?>
    <br class="clearfix">
<?php endwhile; else: ?>
    <h1>No hay contenido en esta seccion.</h1>
<?php endif; ?>
