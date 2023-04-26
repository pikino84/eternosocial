<?php 
    /* 
    *Template Name: Legales
    */
    get_header(); 
?>
<main class="contenedor header ">
    <?php
        while( have_posts() ) : the_post();
            the_title('<h1 class="text-center text-secondary like_h2">','</h1>');
            the_content();
        endwhile;
    ?>
    </main>
<?php
    get_footer();
?>