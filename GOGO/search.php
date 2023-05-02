<?php
get_header();
global $wp_query;
?>


<div class="home-section">
<div class="left-col">
<h2 class="subsections-heading"><?php echo $wp_query->found_posts; ?>
<?php _e( ' Results For', 'locale' ); ?> "<?php the_search_query(); ?>"</h2>

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
<?php endif; ?>    
</div>
</div>

<div class="home-section">
<?php pagination_nav(); ?>
</div>

<?php get_footer(); ?>