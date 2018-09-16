<?php
?>
<?php if ( is_active_sidebar('tag') ): ?>
<!--//--><?php //dynamic_sidebar('tag');?>

            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__title">Теги</div>
                <div class="sidebar-item__content">
                    <ul class="tags-list">
	                    <?php $the_tags = get_tags();?>
                        <?php foreach ( $the_tags as $tag) : ?>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link"> <?php echo $name =$tag->name?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

<?php endif; ?>

<?php if ( is_active_sidebar('category') ): ?>


<!--	    --><?php //dynamic_sidebar('category');?>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Категории</div>
            <div class="sidebar-item__content">
                <ul class="category-list">
	                <?php  $categories =  get_categories();?>
	                <?php foreach ( $categories as $cat) : ?>
                        <li class="category-list__item"><a href="#" class="category-list__item__link"> <?php echo $name = $cat->cat_name?></a></li>
	                <?php endforeach; ?>
                </ul>
            </div>
        </div>


<?php endif; ?>

<?php if ( is_active_sidebar('calendar') ): ?>


		<?php dynamic_sidebar('calendar');?>


<?php endif; ?>
