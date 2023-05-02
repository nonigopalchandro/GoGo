<?php get_header();?>

<?php include '/css/singlecss.php';?>

<section class="page-wrapper">
<div id="main-wrapper" class="clearfix">
<div id="content" class="center-frame">
<div id="content-container" class="reversed">
<div class="right-col content-mask">
<div class="masked-content at-20 article-id-175348" data-article-id="175348">
<div class="article-box article-root" itemscope itemtype="http://schema.org/Article">
<article class="article-container clearfix centered-article-content" itemprop="articleBody">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<header class="article-headline ">
<h1 itemprop="name headline">
<span class="series-tab"><span class="series"><?php the_category( ' › ' ) ?></span></span><span class="hide">:</span>
<a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); echo $count; ?></a>
</h1>
<figure class="cover-image">
<?php
// Feature post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
}
else {
	echo '<img width="100%" height="100%" src="/wp-content/themes/HowTrick_PC_V2.0/images/noimage.png" alt="No image" />';
} ?>
</figure>
</header>

<section>
<div class="imaged">
<p><?php the_content(); ?>
<?php setPostViews(get_the_ID()); ?>
<?php if (get_the_tags()) :?>
<p>Tag: <?php the_tags('',' ',' '); ?></p>
<?php endif;?>
</div>
<?php endwhile; ?>
<?php endif; ?>

</section>
</article>

<aside class="profile-card">
<header>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
<?php echo get_avatar( get_the_author_meta('ID'), 60); ?></a>
<h1>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
<font color="white">
<?php the_author(); ?>
</font>
</a>
</h1>
<h2><?php $aid = get_the_author_meta('ID');
echo get_user_role($aid);
?>
</h2> 
</header>

 
<div class="profile-bio">

<p><?php echo get_the_author_meta('description'); ?></p>
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
	
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<footer class="clearfix mgb"></footer>


<?php comments_template( '', true ); ?>
<?php get_template_part( 'includes/post-related' ); ?>

	
<?php get_footer();?>