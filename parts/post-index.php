<article <?php post_class( 'group' ); ?> role="article">
    <div class="grid-x grid-margin-x pb-2">
        <div class="cell small-12 medium-3 large-4 my-auto">
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'full' );
                }
            ?>
        </div>
        <div class="cell small-12 medium-9 large-8">
            <h2><a class="post__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </div>
    </div>
</article>
