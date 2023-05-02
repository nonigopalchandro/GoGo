<?php get_header();?> 

<?php
		if ( isset( $_GET['postcomment'] ) ) :
			if ( have_posts() ) : while ( have_posts() ): the_post();
				comments_template( '/postcomment.php' );
			endwhile; endif;

		else :
	?>
<div class="home-section">
<div class="left-col">
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
<h2 class="subsections-heading"><?php the_title(); ?></h2>
<div class="article-list article-list-mode1">

<div id="content-container" class="reversed">
<div class="right-col content-mask">
<div class="masked-content at-20 article-id-175348" data-article-id="175348">
<div class="article-box article-root" itemscope itemtype="http://schema.org/Article">
<article class="article-container clearfix centered-article-content" itemprop="articleBody">
<p><?php the_content(); ?></p>
<?php endwhile; ?>
<?php endif;?>
<?php endif; ?>
</article>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="clearfix mgb"></footer>
	
<?php get_footer();?>