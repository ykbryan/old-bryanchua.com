<?php get_header(); ?>
	
<?php get_sidebar(); ?>
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="article-header">
				    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                	<div class="date">
                        <span class="day"><?php the_time('d') ?></span>
                        <span class="month"><?php the_time('M') ?></span>
                        <span class="year"><?php the_time('Y') ?></span>
                    </div>
                </div>
                
                <div class="article-author">Posted by <a href="mailto:<?php echo the_author_meta('user_email') ?>"><strong><?php echo get_the_author(); ?></strong></a></div>
                    
				<div class="article-body">
					<?php the_content(); ?>
                	<p>
                    	<?php edit_post_link('Edit this entry','','.'); ?>
                    </p>
                </div>
				<div class="article-footer">
				  	<div class="posted-in">
                       <h3>Filed under </h3><?php the_category(', ') ?>
                   </div>
               </div>
			</article>
            
		<h1 style="margin-bottom:10px">COMMENTS</h1>
    
        <?php comments_template(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>