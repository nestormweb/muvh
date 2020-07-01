<?php
/* plantilla de la pagina de inicio */
get_header(); ?>
<div class="cortina">
    <?php include('homeslider.php'); ?>

</div>
<div class="container hidden-xs hidden-sm">
    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                       
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="contentsidebar">
                                    <div class="buscador">
                                        <h3>Buscar en el sitio</h3>
                                        <form  role="search" action="<?php echo bloginfo('url'); ?>"
                                            method="get" id="searchform">
                                            <input type="text" name="s" id="textareab"
                                                value="<?php the_search_query(); ?>" class="textareab">
                                                <input name="submit" type="submit" value="buscar" class="btn btn-default botonb-block-submit">
                                        </form>
                                    </div>
                                    <h5>PRINCIPALES SECCIONES</h5>

                                    <?php wp_nav_menu(array(
                   'theme_location' =>'listados',
                   'menu_id'=>'sd-menu',

               )); ?>
                                </div>
                            </div>
                            <div class="col-sm-7">

                                <?php include('plantilla_noticias.php'); ?>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3"> <?php get_sidebar(); ?>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>