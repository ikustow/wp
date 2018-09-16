<?php get_header(); ?>
<?php
$s=get_search_query();
$args = array(
	's' =>$s
);
// The Query

$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	_e("<h2 class='article-info'>Результаты поиска: ".get_query_var('s')."</h2>");
	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>
         <div class="main-content">
            <div class="content-wrapper">
                <div class="content">
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
                </div>
            </div>
            </div>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
		<?php
	}
}else{
	?>
    <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
    <div class="alert alert-info">
        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
    </div>
<?php } ?>
<?php get_footer(); ?>