<?php
$obj = get_queried_object();
$args = [
	'category_name' => $obj->slug,
	'posts_per_page' => 5,
	'page' => get_query_var('page')
];
$posts = get_posts($args)
?>
<div class="sidebar">
	<div>

		<div class="sidebar_title"> TIN XEM NHIỀU</div>
		<div class="sidebar_content">
			<?php
			foreach ($posts as $post) :
			?>
				<a href="<?= get_permalink() ?>" class="sidebar_item">
					<div class="sidebar_itemImage">
						<?= get_the_post_thumbnail() ?>
					</div>
					<div class="sidebar_itemTitle">
						<?= get_the_title() ?>
					</div>
				</a>
			<?php
			endforeach;
			?>
		</div>
	</div>
</div>