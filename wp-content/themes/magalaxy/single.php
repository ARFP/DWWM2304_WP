<?php get_header(); ?>

<section class="main-section">

<h1>single.php <?php the_category(', ', '', $post->ID ); ?></h1>

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
            <footer>
                <h2>Auteur</h2>
                <div id="author-info">
                    <div id="author-avatar" style="display: flex;">
                    <?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?>
                    <h3><a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('nickname'); ?></a></h3>
                    </div>
                    <div id="author-description">
                    
                    <?php the_author_meta('description'); ?>
                    </div>
                </div>
            </footer>
        </article>
<?php   
    endwhile;
else :
    echo 'Erreur 404 : Aucun contenu à afficher' ;
endif;
?>
</section>

<?php get_footer();
