<?php
/** Template Name: CustomPage */
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php
$args = [
	'post_type' => ['post'],
	'posts_per_page' => 3
];

$posts = query_posts($args);
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $image = get_field( 'image', false );
	$source = ( $image['url'] ); ?>
<?php if ($post->post_type == 'post') : ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="article-title title-page">
                    <h4><?php the_title(); ?></h4>
                </div>
                <div class="article-image"><img src="<?php echo $source; ?>" alt="Image поста"></div>
                <div class="article-info">
                    <div class="post-date"></div>
                </div>
                <div class="article-text">
                    <p>
						<?php the_content(); ?>
                    </p>
                </div>
            </div>
            <div class="sidebar">
		        <?php get_sidebar();?>
            </div>
        </div>
    </div>
	<?php endif; ?>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php
get_footer();
?>
