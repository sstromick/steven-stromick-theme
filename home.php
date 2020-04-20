<?php
/**
 * Default Blog Template
 *
 */

get_header(); ?>

<div class="content-wrap index-content" role="main">
    <div class="bio bio--small">
        <h4>Hi, I’m Steve</h4>
        <p>I’m a Full Stack Web Developer who shares programming tips with the community.</p>
        <ul class="bio__stack">
            <li class="bio__stack-item">#JavaScript</li>
            <li class="bio__stack-item">#HTML</li>
            <li class="bio__stack-item">#CSS</li>
            <li class="bio__stack-item">#PHP</li>
            <li class="bio__stack-item">#Laravel</li>
            <li class="bio__stack-item">#Vue</li>
        </ul>
    </div>
<div class="grid-x grid-margin-x py-5">
  <div class="cell small-12 large-8">
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
    <div class="bio">
        <h4>Hi, I’m Steve</h4>
        <p>I’m a Full Stack Web Developer who shares programming tips with the community.</p>
        <ul class="bio__stack">
            <li class="bio__stack-item">#JavaScript</li>
            <li class="bio__stack-item">#HTML</li>
            <li class="bio__stack-item">#CSS</li>
            <li class="bio__stack-item">#PHP</li>
            <li class="bio__stack-item">#Laravel</li>
            <li class="bio__stack-item">#Vue</li>
        </ul>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>


</div><!-- end content -->


<?php get_footer(); ?>
