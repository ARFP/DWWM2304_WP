<?php 
/*
index.php
C'est le template par défaut qu'utilisera Wordpress si le template spécifique au contexte n'existe pas.
*/

// Inclusion du fichier 'header.php' présent dans le dossier du thème courant
get_header(); ?>

<section class="main-section">
<h1>index.php</h1>

<?php

if( have_posts() ) : // Si du contenu existe pour le contexte actuel (le contexte est défini par l'URL)
    while( have_posts() ) : // Tant qu'il y a du contenu à afficher

        the_post(); // Chargement du contenu à afficher
?>
        <article class="post">
            <header>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2> 
                <aside><?php the_author_link(); ?>, le <?=get_the_date() ?> à <?php the_time() ?></aside>
                <aside>Dans <?php the_category(', ') ?></aside>
            </header>
            <div class="post-content">
                <?php the_excerpt(); ?> 
                <a href="<?php the_permalink() ?>">Lire la suite</a>
            </div>
        </article>
<?php   
    endwhile;
    // Pagination (précédent, suivant).
    the_posts_pagination();
else : // Si aucun contenu à afficher
    echo 'Erreur 404 : Aucun contenu à afficher' ;
endif;
?>
</section>

<?php 
// Inclusion du fichier 'footer.php' présent dans le dossier du thème courant
get_footer();
