<?php
/*
Template Name: Restaurant Front-Page
Template Post Type : post
*/
?>
<?php get_header(); ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
<div class="container"> 
    <h2 class="page-subtitle white">
    <?php the_field("banner_top_subtitle")?>
    </h2>
    <h1 class="page-title white">
    <span class="title-enjoy"> ENJOY </span> <br>
    <?php the_field("banner_top_title")?>
    </h1>
    <div class="menu-link text-normal white">
    <a href="<?php the_field("menu_link") ?>">--- Check our menu</a>
    </div>
    <?php if (get_field('banner_top_img')): ?>
    <img class="banner-top-img" src="<?php the_field('banner_top_img'); ?>"  />
    <?php endif; ?>
    <img class="hachures-top" src="http://localhost/becode/boulets/wp-content/uploads/2020/08/hachures-blanches-1536x58.png"  />


    <div class="icone-flex">
        <div class="trio">
            <img class="icone" src="<?php the_field('icone_gauche'); ?>"/>
            <p class="icone-title"><?php the_field('titre_gauche'); ?></p>
            <p class="icone-texte"><?php the_field('texte_gauche'); ?></p>
        </div>

        <div class="trio">
            <img class="icone" src="<?php the_field('icone_milieu'); ?>"/>
            <p class="icone-title"><?php the_field('titre_milieu'); ?></p>
            <p class="icone-texte"><?php the_field('texte_milieu'); ?></p>
        </div>

        <div class="trio">
            <img class="icone" src="<?php the_field('icone_droite'); ?>"/>
            <p class="icone-title"><?php the_field('titre_droite'); ?></p>
            <p class="icone-texte"><?php the_field('texte_droite'); ?></p>
        </div>
    </div>
 <br><br><br><br><br><br><br><br><br><br><br>
    <div class="intro-left">
        <div>
            <p class="intro-left-title"><?php the_field('intro_left_title'); ?></p>
        </div>
            <div class="our-story">
                <p>
                OUR STORY
                </p>
            </div>
        <div>
            <p class="intro-left-sub"><?php the_field('intro_left_sub'); ?></p>
        </div>
    </div>
    <div class="intro-right">
        <div>
        
        </div>
    </div>


    
</div>


<?php get_footer(); ?> 