<!-- TESTIMONIALS SECTION -->
<section id="kudos">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>What people are saying about Brad</h2>


                <?php $loop = new WP_Query(array('post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>
                <?php while($loop->have_posts()) : $loop->the_post(); ?>

                  <div class="row testimonial">
                    <div class="col-sm-4">
                      <?php
                      if (has_post_thumbnail()){
                        the_post_thumbnail();
                      }

                      ?>
                    </div><!-- col-sm-4 -->
                    <div class="col-sm-8">
                      <blockquote>
                        <?php the_content(); ?>
                      <cite>&mdash; <?php the_title(); ?></cite>
                      </blockquote>
                    </div><!-- col-sm-8 -->
                  </div><!-- row -->

                <?php endwhile; wp_reset_query(); ?>

        <!-- TESTIMONIALS -->

      </div><!-- col-sm-8 -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- kudos -->
