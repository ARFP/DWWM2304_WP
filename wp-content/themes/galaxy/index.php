<?php 

get_header();
?>

<section class="post-list">

<?php

if( have_posts() ) : 
    while( have_posts() ) :
        the_post();
        ?>
        <article class="post">
            <header>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2> 
                <!-- ou <h2><?php echo get_the_title(); ?></h2> -->
                <aside>Dans <?php the_category(', ') ?></aside>
                <aside><?php the_date() ?> <?php the_time() ?></aside>
                <aside><?php the_author_link(); ?></aside>
            </header>
            <div>
                <?php the_content(); ?>
            </div>

        </article>
        <?php

       

    endwhile;
endif;
?>
</section>
<?php

get_footer();