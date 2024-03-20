<?php get_header(); ?>

<section class="main-section">

<h1>page.php</h1>

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

<?php get_footer();
