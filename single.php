<?php
/**
 * Default Single Post Template
 *
 */

get_header(); ?>

<div class="content-wrap single-content" role="main">
<div class="grid-x grid-margin-x py-5">
  <div class="cell small-12 large-8">

    <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( ['group', 'post--single'] ); ?> role="article">
        <header>
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'full' );
                }
            ?>
            <h1 class="mt-4"><?php the_title(); ?></h1>
            <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time>
        </header>

        <?php the_content(); ?>
    </article>

    <?php comments_template( '', true ); ?>

    <?php endwhile; ?>
  </div>
  <div class="cell small-12 large-4">
    <?php get_sidebar(); ?>
  </div>

</div><!-- end content -->

<?php get_footer(); ?>
