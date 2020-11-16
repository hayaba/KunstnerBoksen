<!--  Here we can add elements to add for multiple pages -->

<?php

/* 
Template Name: Special Layout
*/

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>
    <article class="post page">
        <h2><?php the_title(); ?></h2>

        <!-- info-box -->   
        <div class="info-box">
            <h4>Disclamer Title</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</p>
        </div>
        <!-- /info-box -->

        <?php the_content(); ?>
    </article>
<?php endwhile;
else: 
    echo '<p> No content found </p> ';

endif;

get_footer();
?>