<?php
?>
<?php if ( is_active_sidebar('tag') ): ?>
<?php dynamic_sidebar('tag');?>
	<div id="tag" class="tag-list">
        <div class="sidebar">
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
	</div>

<?php endif; ?>

<?php if ( is_active_sidebar('category') ): ?>
    <div id="category" class="category-list">

	    <?php dynamic_sidebar('category');?>
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
    </div>

<?php endif; ?>

<?php if ( is_active_sidebar('calendar') ): ?>
    <div id="calendar" class="calendar-list">

		<?php dynamic_sidebar('calendar');?>

    </div>

<?php endif; ?>
