<?php get_header(); ?>
       <h1><?php the_title();?></h1>
        <?php while (have_posts()) : the_post(); ?>
        <article>
            <?php the_post_thumbnail('medium'); ?>
            <a title="Voir l'article" href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
            <?php the_content(); ?>
            <?php the_excerpt(); ?>   
        </article>
        <?php endwhile; ?>
<?php get_footer(); ?>