
<?php
require 'blog/config.php';
include 'templates/header.php';
?>
    <section class="blog-grid">
    <?php
        #Query to get all the posts in the database table...titles
        $query = "SELECT title FROM posts";
    ?>
    </section>
<?php
include 'templates/footer.php';
?>

