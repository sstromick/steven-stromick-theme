<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">
    <div class="text-center width-10--large mx-auto my-10">
        <h1>Contact</h1>
        <p>If you would like to discuss a business oppourtunity or just say hello - I would love to hear from you! Please complete the contact form below. I will get back to you as soon as possible.</p>
        <?php echo do_shortcode("[ninja_form id=1]"); ?>
    </div>
</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
