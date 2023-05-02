<?php get_header(); ?>


<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif; ?>

<aside class="profile-card">
<header>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
<?php echo get_avatar( get_the_author_meta('ID'), 60); ?></a>
<h1><?php the_author(); ?></h1>
<h2><?php $aid = get_the_author_meta('ID');
echo get_user_role($aid);
?>
</h2> 
</header>

 
<div class="profile-bio">

<p><?php echo $curauth->user_description; ?></p>
</div>
<ul class="profile-social-links">
	  
<li>
<a href="https://facebook.com/<?php the_author_meta('facebook'); ?>">
<img src="https://cdn.worldvectorlogo.com/logos/facebook-2.svg">
</a>
</li>

<li>
<a href="https://twitter.com/<?php the_author_meta('twitter'); ?>">
<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
</a>
</li>
	
<li>
<a href="https://plus.google.com/<?php the_author_meta('googleplus'); ?>">
<img src="https://cdn.worldvectorlogo.com/logos/google-plus-2.svg">
</a>
</li>
	  
<li>
<a href="http://codecanyon.net/user/<?php the_author_meta('codecanyon'); ?>">
<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
</a>
</li>

<li>
<a href="https://codepen.io/<?php the_author_meta('codepen'); ?>">
<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
</a>
</li>
</ul>

</aside>

<div class="home-section">
<div class="left-col">
<h2 class="subsections-heading">Posted By <?php the_author(); ?></h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">
<aside>
<div class="thm">
<a href="<?php the_permalink(); ?>">
<?php
// Recent post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'large' );
}
else {
	echo '<img width="300" height="140" src="' . get_bloginfo( 'template_url' ) . '/images/noimage.png" class="thm" alt="No image" />';
} ?>
</a>
</div>
<div class="content-title">
<div class="text-left">
<h3 class="article-headline"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
</div>
</div>
<div class="content-footer">
<?php echo get_avatar( get_the_author_meta('ID'), 60, $args['avatar_size'], '', '', array('class' => 'user-small-img') );?>
<span style="font-size: 16px;color: #fff;">
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
<font color="#7800C4"><?php the_author(); ?></font>
</a>
</span>

<span class="pull-right">
<font color="#7ABD13">
<i class="ion-eye"></i></font> <font color="#007E24"><?php echo getPostViews(get_the_ID()); ?>
</font>
<font color="#3F3F3F">
<a href="<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="left" title="Comments">
<font color="#7ABD13"><i class="fa fa-comments" ></i> <?php comments_number( '0', '1', '% ' ); ?></font></a>
</font>
</span>
                    
</div>
</aside>
</div>
<?php endwhile; else: ?>
<p><?php _e('No posts by this author.'); ?></p>
<?php endif; ?>  
</div>
</div>

<div class="home-section">
<?php pagination_nav(); ?>
</div>

<?php get_footer();?>