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

			<div class="publicacion clearfix">
				<?php include('plantilla_single.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>