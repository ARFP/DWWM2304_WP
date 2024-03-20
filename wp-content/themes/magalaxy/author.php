<?php
get_header();
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
  
<div class="author-profile-card">
    <h2><?php echo $curauth->nickname; ?></h2>
    <div class="author-photo">
    <?php echo get_avatar( $curauth->user_email , '90 '); ?>
    </div>
    <p><strong>URL :</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a><br />
    <strong>Biographie:</strong> <?php echo $curauth->user_description; ?></p>
</div>
  
<h2>Les articles postés par <?php echo $curauth->nickname; ?>:</h2>
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="post full">
<h2>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
<?php the_title(); ?></a>
</h2>
<p class="posted-on"><?php the_time('d M Y'); ?></p>
<?php the_excerpt(); ?>
</article>
<?php endwhile; 
  
// Previous/next page navigation.
the_posts_pagination();
  
else: ?>
<p><?php _e('No posts by this author.'); ?></p>
  
<?php endif; 

get_footer();