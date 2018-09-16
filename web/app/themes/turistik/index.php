<?php
get_header();
?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">Последние новости и акции из мира туризма</h1>
            <div class="posts-list">
                <!-- post-mini-->
	            <?php
	            $args = [
		            'post_type' => ['shares', 'post'],
		            'posts_per_page' => 10
	            ];
	          
	            $posts = query_posts($args);
	            ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php $image = get_field( 'imageprewiev', false );
					$source = ( $image['url'] ); ?>
                    <div class="post-wrap">
                        <div class="post-thumbnail"><img src="<?php echo $source; ?>"  alt="Image поста"
                                                         class="post-thumbnail__image"></div>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date"></div>
                            </div>
                            <div class="post-content__post-text">
                                <div class="post-title">
									<?php the_title(); ?>
                                </div>
                                <p>
									<?php the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="post-content__post-control"><a href="<?php the_permalink(); ?>"
                                                                       class="btn-read-post">Читать далее >></a></div>
                        </div>
                    </div>
                    <!-- post-mini_end-->
				<?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
