<?php ?>
<?php get_header(); ?>
<div class="fondo titulo h2">
<div class="container">
	<div class="row">
	<div class="col-sm-12">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">

					<h2><?php the_title(); ?></h2>

				</div>

				<div class="col-sm-4">
					<?php 
			if(is_single()){
				include('infonoticias.php');
			}
		?>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="publicacion clearfix">
				<?php include('plantilla_single.php'); ?>

			</div>
		</div>
	</div>

	<?php get_footer(); ?>