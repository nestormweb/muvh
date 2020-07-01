<?php /* plantilla utilizada para listar una noticia */ ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( 'post' == get_post_type() ) { ?>
            <?php } ?>

            
            <div class="col-sm-8">
                <div class="publicacion clearfix">

                    <?php the_content(); ?>

                    <?php if(has_post_thumbnail(get_the_ID())){ ?>
                    <div align="center" style="margin:15px;" class="img-responsive" />
                    <?php echo get_the_post_thumbnail( get_the_ID()); ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <br class="clearfix">
        <?php endwhile; else: ?>
        <h1>No hay contenido en esta seccion.</h1>
        <?php endif; ?>

        <div class="col-sm-3 col-sm-offset-1">
            <?php if ( is_active_sidebar( 'categ' ) ) : ?>
            <ul class="contentsidebar" style="list-style:none; padding:0; margin:10px; position: relative;
    width: 300px;">
                <?php dynamic_sidebar( 'categ' ); ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>