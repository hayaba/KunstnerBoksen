<!--  Here we can customize the Subsecription page -->

<?php

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>

        <div class="gallery-upload">
        <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="File name...">
        <input type="text" name="filetitle" placeholder="Image title...">
        <input type="text" name="filedescription" placeholder="Image description">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
        </form>
        </div>  
  

    <?php the_content(); ?>

    </article>
    <?php endwhile;
else: 
    echo '<p> No content found </p> ';

endif;

get_footer();
?>