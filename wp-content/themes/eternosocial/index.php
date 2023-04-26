<?php get_header(); ?>
<main class="contenedor header ">
        <?php
            while( have_posts() ) : the_post();
            the_title('<h1 class="text-center text-primary">','</h1>');
        ?>
        <div class="contenedor listado-grid">
            <?php 
                $seccion_1 = get_field('logo_gracias');
                $logo_image = $seccion_1['sizes']['medium'];
                $logo_alt =  $seccion_1['title'];
                $logo_width = $seccion_1['sizes']['medium-width'];
                $logo_height = $seccion_1['sizes']['medium-height'];
            ?>
            <img class="img_log"
                src="<?php echo  esc_attr($logo_image) ?>" 
                alt="<?php echo $logo_alt; ?>" 
                title="<?php echo $logo_alt; ?>" 
                width="<?php echo $logo_width; ?>" 
                height="<?php echo $logo_height; ?>" />
            <div class="container_header ">
                <?php the_content(); ?>
            </div>  
        </div>
        <?php
            endwhile;
        ?>
    </main>
<?php
    get_footer();
?>