<?php
get_header();
?>
<div class="main-content">
	<div class="content-wrapper">
		<div class="content">
			<div class="article-title title-page">
				<h4><?php the_title(); ?></h4>
			</div>
		<div class="article-info">
				<div class="post-date"></div>
			</div>
			<div class="article-text">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>

