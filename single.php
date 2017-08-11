<?php get_header() ?>
	<div class="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post-main">
				<h1><?php the_title(); ?><span>(<?php the_time('d.m.Y'); ?>)</span></h1>
				<div class="post">
				<?php the_post_thumbnail('full','class=imgstyle') ?>	
					<?php the_content(); ?>
<p><?php the_tags(); ?></p>
				</div>
			</div>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>



			
		</div>
		
		<?php get_sidebar() ?>
	</div>
	<?php get_footer() ?>
