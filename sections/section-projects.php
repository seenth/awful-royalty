<?php
include('variables.php');

?>

<?php if( have_rows('projects') ): ?>
  <section class="section section--projects<?php echo isset($classes) ? $classes : ''; ?>">
    <div class="layout layout--<?php echo $layout; ?><?php echo $bracket; ?>">
        <?php while ( have_rows('projects') ) : the_row(); ?>
            <?php
              $post_object = get_sub_field('projects_post');
              if( $post_object ) :
              $post = $post_object;
              setup_postdata($post);
              ?>
              <div class="projects" id="p-<?php echo get_row_index(projects); ?>"style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
                <a href="<?php the_permalink(); ?>" class="project-link">
                  <div class="project-title" id="pt-<?php echo get_row_index(projects); ?>">
                    <p class="title"><?php the_title(); ?></p>
                    <p class="tag"><?php
                      $posttags = get_the_tags();
                      $count=0;
                      if ($posttags) {
                        foreach($posttags as $tag) {
                          $count++;
                          if (1 == $count) {
                            echo $tag->name;
                          }
                        }
                      }
                      ?></p>
                  </div>
                </a>
              </div>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
  <?php endif; ?>
</section>
