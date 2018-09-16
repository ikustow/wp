<?php
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $image = get_field( 'image', false );
	$source = ( $image['url'] ); ?>

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
                <div class="article-pagination">
					<?php $prev_post = get_previous_post(); ?>
					<?php if ( ! empty( $prev_post ) ) {
						$prewiev = get_field('imageprewiev', $prev_post);
						$imageprewiev = $prewiev['url']?>
					     <div class="article-pagination__block pagination-prev-left"><a
                                    href="<?php echo get_permalink( $prev_post ); ?>" class="article-pagination__link">Предыдущая
                                статья<i class="icon icon-angle-double-left"></i></a>
                            <div class="wrap-pagination-preview pagination-prev-left">
                                <div class="preview-article__img"><img src="<?php echo $imageprewiev; ?>" class="preview-article__image">
                                </div>
                                <div class="preview-article__content">
                                    <div class="preview-article__info"><a
                                                href="<?php echo get_permalink( $prev_post ); ?>"
                                                class="post-date"><?php echo $prev_post->post_date; ?> </a></div>
                                    <div class="preview-article__text"><?php echo $prev_post->post_title; ?></div>
                                </div>
                            </div>
                        </div>
						<?php
					}else { ?>
                        <div class="article-pagination__block pagination-prev-left" >Спасибо, что выбрали наш блог!<i
                            ></i>
                            <div class="wrap-pagination-preview pagination-prev-left">
                            </div>
                        </div>
						<?php
					}
					?>
					<?php $next_post = get_next_post(); ?>
					<?php if ( ! empty( $next_post ) ) {
					 $prewiev = get_field('imageprewiev', $next_post);
						$imageprewiev = $prewiev['url']?>
					                       <div class="article-pagination__block pagination-prev-right"><a
                                    href="<?php echo get_permalink( $next_post ); ?>" class="article-pagination__link">Следующая
                                статья<i class="icon icon-angle-double-right"></i></a>
                            <div class="wrap-pagination-preview pagination-prev-right">
                                <div class="preview-article__img"><img src="<?php echo $imageprewiev; ?>" class="preview-article__image">
                                </div>
                                <div class="preview-article__content">
                                    <div class="preview-article__info"><a
                                                href="<?php echo get_permalink( $next_post ); ?>"
                                                class="post-date"><?php echo $next_post->post_date; ?> </a></div>
                                    <div class="preview-article__text"><?php echo $next_post->post_title; ?></div>
                                </div>
                            </div>
                        </div>
						<?php
					} else { ?>
                        <div class="article-pagination__block pagination-prev-right" >Новые статьи будут уже скоро!<i
                                    ></i>
                            <div class="wrap-pagination-preview pagination-prev-right">
                            </div>
                        </div>
						<?php
					}
					?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php
get_footer();
?>
