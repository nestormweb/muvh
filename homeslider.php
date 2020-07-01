<div id="main ">
  <div class="container hidden-xs hidden-sm">
    <div class="col-sm-12">
      <div class="row">

        <div class="col-sm-4">
          <?php if ( is_active_sidebar( 'banner' ) ) : ?>
          <ul class="banner" style="list-style:none; padding:0; margin:10px; position: relative;
    width: 300px;">
            <?php dynamic_sidebar( 'banner' ); ?>
          </ul>
          <?php endif; ?>

        </div>
        <div class="col-sm-8">
          <div class="bloque2">
            <div class="container">
              <div class="row grid">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                
                <div class="col-sm-3 col-xs-12 grid-item">
                  <div>
                    <h3>
                      <div class="cards"> 
                      <?php echo get_the_post_thumbnail( get_the_ID(), 'slider_thumb' ); ?>

                      <a href="<?php the_permalink();?>"
                        title="<?php the_title(); ?>"><span><?php the_title(); ?></span></a>
                    </h3>
                    
                    <div>
                    </div>
                  </div>
                  <div class="clearfix visible-lg"></div>
                </div>
                <?php endwhile;?>
                <?php endif; ?>
              </div>
            </div>

          </div>
          <!-- @end site__wrapper -->
        </div>
      </div>
    </div>



  </div>
</div>
</div>

</div>
</div>

</div>
</div>
</div>

</div>