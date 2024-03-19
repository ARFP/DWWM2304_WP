<?php get_header(); ?>

<h1>front-page.php</h1>

<section class="main-section full">

<?php

if( have_posts() ) : 
    while( have_posts() ) :

        the_post();
?>
        <article class="post full">
            <header>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2> 
                <aside><?php the_author_link(); ?>, le <?=get_the_date() ?> à <?php the_time() ?></aside>
                <aside>Dans <?php the_category(', ') ?></aside>
            </header>
            <div class="post-content">
                <?php the_content(); ?> 
            </div>
        </article>
<?php   
    endwhile;
else :
    echo 'Erreur 404 : Aucun contenu à afficher' ;
endif;
?>
</section>

<section class="main-section full">

<?php

$args = [
    'post_type' => 'post',
];

$query = new WP_Query($args);

if($query->have_posts()) : 
    while($query->have_posts()) : 

        $query->the_post();

        ?>
        <article class="post full">
            <header>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2> 
                <aside><?php the_author_link(); ?>, le <?=get_the_date() ?> à <?php the_time() ?></aside>
                <aside>Dans <?php the_category(', ') ?></aside>
            </header>
            <div class="post-content">
                <?php the_excerpt(); ?> 
            </div>
        </article>
<?php  

    endwhile;
endif;




?>
</section>
<?php get_footer();
