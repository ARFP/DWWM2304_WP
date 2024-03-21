<?php
get_header();
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
  
<div class="author-profile-card">
    <h2><?=$curauth->nickname; ?></h2>
    <div class="author-photo">
        <?=get_avatar( $curauth->user_email , '90 '); ?>
    </div>
    <p><strong>URL :</strong> 
        <a href="<?=$curauth->user_url; ?>"><?=$curauth->user_url; ?></a>
    </p>
    <p>
        <strong>Biographie:</strong> <?=$curauth->user_description; ?>
    </p>
</div>
  
<h2>Articles postés par <?php echo $curauth->nickname; ?>:</h2>
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="post full">
    <h2>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <p class="posted-on"><?php the_time('d M Y'); ?></p>
    <div class="post-content"><?php the_excerpt(); ?></div>
</article>

<?php endwhile; 
  

  
else: ?>

<p><?php _e("Cet auteur n'a rédigé aucune article."); ?></p>
  
<?php endif; 

get_footer();
