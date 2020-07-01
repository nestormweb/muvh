<?php /* plantilla utilizada para listar las noticias */ ?>
<div class="container"> 
<div class="col-sm-12">
<h5>Últimas noticias publicadas</h5>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="publicestirar clearfix">
        <?php if(has_post_thumbnail(get_the_ID())){ ?><h2> <a href="<?php the_permalink(); ?>"> 
            <a href="<?php the_permalink(); ?>" class="">
                <?php echo get_the_post_thumbnail( get_the_ID(), 'bloqecitos_thumb foto_portada_item' ); ?>
                <?php the_title(); ?></a></h2>
            </a>
        <?php } ?> 
            
        <?php include('info.php'); ?>
       <div class="descripcion"> <?php the_excerpt(); ?></div>
        <br class="clearfix">
    </div>
<?php endwhile; else: ?>
    <h1>No hay contenido en esta seccion.</h1>
<?php endif; ?>

<br>

<style>
    .btn-radius {
    border-radius: 30px;
}
.btn-primary {
    background-color: #001c54;
}


.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
    </style>
<p style="text-align: center;"><a class="btn btn-primary  btn-radius" href="https://www.sen.gov.py/index.php/noticias">ver más</a></p></div>
</div>
