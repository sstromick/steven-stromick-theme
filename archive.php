<?php
/**
 * Default Archives Template
 *
 */

get_header(); ?>

<div class="content-wrap archive-content" role="main">
<div class="grid-x grid-margin-x py-5 px-2">
  <div class="cell small-12 large-8">

    <header>
        <h1 class="mb-3"><?php single_cat_title( __( 'Posts for ', 'h5bs' ) ); ?></h1>
    </header>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'parts/post', 'index' );
        endwhile;

        get_template_part( 'parts/post', 'nav' );
    endif;
    ?>
  </div>
  <div class="cell small-12 large-4">
    <?php get_sidebar(); ?>
  </div>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
