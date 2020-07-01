<?php /* plantilla utilizada para mostrar fecha y categoria de las noticias */ ?>
<style> 
.info { 
	font-size: 14px;
    margin-top: 20px;
    text-align: right;
}
</style>
<div class="info">
<span class="glyphicon glyphicon-time"></span>
    <span class="fecha"><?php the_time('j \d\e\ F \d\e\ Y \|\ '); ?></span>
    <?php
		$categories = get_the_category();
		$separator = ' ';
		$output = '';
		if($categories){
			foreach($categories as $category) {
				$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
			}
		echo trim($output, $separator);
		}
		?>
</div>