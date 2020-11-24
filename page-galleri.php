<!--  Here we can customize the Subsecription page -->

<?php

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>

    <article class="post page">
    
    <section class="gallery-links">
    <div class="wrapper">
    <h2>Gallery</h2>

        <div class="gallery-container">
            <?php

            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC"
            $stmt = mysqli_stmt_init(SODIUM_{constant});
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL statement failed!";
            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<a href="#">
                    <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"]');"></div>
                    <h3>'.$row["titleGallery"]'</h3>
                    <p>'.$row["desceGallery"]'</p>
                    </a>;'
                }
            }

            echo
            '<a href="#">
            <div></div>
            <h3>This is a title</h3>
            <p>This is a paragraph</p>
            </a>;'
            ?>
        </div>
        <div class="gallery-upload">
        <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="File name...">
        <input type="text" name="filetitle" placeholder="Image title...">
        <input type="text" name="filedescription" placeholder="Image description">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
        </form>
        </div>

    </div>
    </section>

            
  
    </article>
<?php endwhile;
else: 
    echo '<p> No content found </p> ';

endif;

get_footer();
?>