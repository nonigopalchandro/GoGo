<?php wp_head(); ?>

<?php get_template_part('headcss'); ?>


<div class="fixed-top">
<header class="topbar">
<div class="container">
<div class="row">

<div class="col-sm-12">
<ul class="social-network">
<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
</ul>
</div>
</div>
</div>
</header>
	
<nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
<div class="container">
<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-transform: uppercase;">GOGO</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<div class="nav-link"><b>Categories</b>
<span class="sr-only">(current)</span>
</div>
</li>
<?php $args = array(
  'orderby' => 'name',
  'parent' => 0
  );
  $categories = get_categories();
	foreach($categories as $category) {
   echo '<li class="nav-item"> <a class="nav-link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
}?>
</ul>
</div>
</div>
</nav>
</div>

<?php get_search_form();?>