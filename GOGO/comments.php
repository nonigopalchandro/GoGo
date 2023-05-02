<style>

.block_comment ul, .block_comment ol {list-style: none}


.block_comment{border: 1px solid #ddd;}
.block_comment{margin: 4px}

.block_comment h3{font-size: 15px; 
background: #f5f5f5; padding: 5px;  border-bottom: 1px solid #ddd; margin-bottom: 4px;  margin-top: }


.commentlist ul,.commentlist ol {list-style: none}

.commentlist .children {margin-left: 20px}

.comment-body {
  display: block;
  padding-bottom: 10px;
  border-bottom: 1px solid #ddd;
   min-height: 65px;
   position: relative;
   margin-top: 4px;
   
}
.comment-body p{margin-left: 40px;}

.commentlist  .avatar {float: left}

.commentmetadata {
  display: inline;
  float: right;
  position: absolute;
  right: 0;

}
.commentmetadata a{color: #333; font-size: 12px;  vertical-align: top; }
.comment-reply-link  {

}

.reply {min-height: 15px;}

.commentlist .reply a {
    position: absolute;
    bottom: 0px;
    right: 0px;
    background: #E7E7E7;
    padding: 3px 10px;
    font-size: 11px;
	color: #000
}

.commentlist .reply a:hover {
    background: #f5f5f5;
    color: #000;
	text-decoration: none;
}


.says{display: none}

.fn {font-family: sans-serif;
font-style: normal;
font-weight: bold;
margin-left: 7px;
}

.comment-author.vcard {
  margin-left: 5px;
}
.commentmetadata { display:none; } 
.commentlist p{ font-size: 14px; display: block; overflow: hidden; position: relative; padding: 4px;}

#respond > div {
  background: none repeat scroll 0 0 #e7e7e7;
  display: inline-block;
  float: right;
  margin-top: -4px;
  padding: 3px 10px;
  text-align: right;
}
#cancel-comment-reply a { color: #000;}
#cancel-comment-reply a:hover {color: #000; text-decoration: none; background: #f4f4f4}
div.block_comment div#respond h3{
 margin-top: 0px;

}

div#respond form#commentform{
padding: 5px;
}
div.block_comment textarea#comment{ max-width: 90%}
 
div.block_comment form#commentform p {padding: 4px}

textarea{height: 150px; width: 90%}
	
	.comment-author vcard{
		width:60px;
		height:60px;
	}
</style>
<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>

<p class="nocomments">Password protected.</p>
<?php
		return;
	}
?>

<div class="block_comment">
<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
<h3 id="comments"><?php comments_number('0 Comments', '1 Comment', '% Comments');?> “<?php the_title(); ?>”</h3>

<div class="navigation">
<div class="alignleft"></div>
<div class="alignright"></div>
</div>

<div class="navigation">
<div class="previous">
<?php previous_comments_link() ?>
</div>
<div class="next"> 
<?php next_comments_link() ?>
</div>
</div>

<ol class="commentlist">
<?php wp_list_comments('avatar_size=32'); ?>
</ol>

<div class="navigation">
<div class="previous">
<?php previous_comments_link() ?>
</div>
<div class="previous">
<?php next_comments_link() ?>
</div>
</div>

<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p>comment closed</p>
<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<div class="navigation">
<div class="alignleft"></div>
<div class="alignright"></div>
</div>

<div id="respond">

<h3>Leave a Reply</h3>

<div class="cancel-comment-reply"><small>
<?php cancel_comment_reply_link(); ?>
</small></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php print 'You must be'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php print 'Logged in'; ?></a> <?php print 'to post comment'; ?>.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
      <p>
<?php print 'Logged in as'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php print 'Log out'; ?> »</a>
</p>
<?php else : ?>
   <p>
        <input class="author" type="text" value="Enter your name..." onclick="this.value='';" name="author" id="author" size="22" tabindex="1"/><label for="author"><small><?php if ($req) echo "(Required)"; ?></small></label>
      </p>
      <p>
        <input class="email" type="text" value="Enter your email..." onclick="this.value='';" name="email" id="email" size="22" tabindex="2"/><label for="email"><small>(Will not be published)<?php if ($req) echo " (Required)"; ?></small></label>
      </p>
      <p>
        <input class="url" type="text" value="Enter your website..." onclick="this.value='';" name="url" id="url" size="22" tabindex="3"/><label for="email"><small>(Optional)</small></label>
      </p>
      <?php endif; ?>
      <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
      <p>
        <textarea name="comment" id="comment" tabindex="4"></textarea>
      </p>
      <p>
        <input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
        <?php comment_id_fields(); ?>
      </p>
      <?php do_action('comment_form', $post->ID); ?>
    </form>

    <?php endif; // If registration required and not logged in ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>