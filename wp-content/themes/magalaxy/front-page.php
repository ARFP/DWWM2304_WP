<?php get_header(); ?>

<section class="main-section full home">
    <h1>Bienvenue</h1>

<?php

if( have_posts() ) : 
    while( have_posts() ) :

        the_post();
?>
        <article class="post full">
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
    <h1>Derniers articles publiés</h1>
<?php

$args = [
    'post_type' => 'post',
];

$query = new WP_Query($args);

if($query->have_posts()) : 
    while($query->have_posts()) : 

        $query->the_post();

        ?>
        <article class="post">
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
