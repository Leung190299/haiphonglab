<?php get_header();
$idSevice = false;
$category = '';
$category_detail = get_the_category();
foreach ($category_detail as $cd) {
	if ($cd->slug === 'dich-vu') {
		$idSevice = true;
	}
	$category .= $cd->slug . ',';
};
?>

<div class="main">
	<div class="single_boxTitle">
		<h1 class="single_title"><?= get_the_title() ?></h1>
		<div class="single_date"><?= get_the_date('D/M/Y') ?></div>
	</div>
	<div class="container">
		<div class="single_body">
			<div class="single_social">
				<div class="fb-like" data-share="true" data-show-faces="true">
				</div>
			</div>
			<?php if ($idSevice) : ?>
				<div class="single_boxSevice">
					<div class="single_boxSevice_image">
						<?= get_the_post_thumbnail() ?>
					</div>
					<div class="single_boxSevice_content">
						<div class="single_boxSevice_title">
							<?= get_the_title() ?>
						</div>
						<div class="single_boxSevice_boxContent">
							<div class="single_boxSevice_label">
								Hotline tư vấn
							</div>
							<div class="single_boxSevice_value phone">
								0915 82 1509
							</div>
						</div>
						<div class="single_boxSevice_boxContent">
							<div class="single_boxSevice_label">
								Email hỗ trợ:
							</div>
							<div class="single_boxSevice_value">
								sales.hanhphuclab@gmail.com
							</div>
						</div>
						<div class="single_boxSevice_boxContent">
							<div class="single_boxSevice_label">
								Facebook:
							</div>
							<div class="single_boxSevice_value">
								https://www.facebook.com/xetnghiemhanhphuclab
							</div>
						</div>
					</div>
				</div>
			<?php else : ?>
				<div class="single_contentTitle"><?= get_the_title() ?></div>

			<?php endif ?>
			<div class="single_content">
				<?php the_content()  ?>
			</div>
			<div class="single_comment">
				<div class="fb-comments" data-href="<?= home_url('/') ?>" data-width="100%" data-numposts="5"></div>
			</div>
		</div>
		<div class="single_more">
			<div class="label">CÁC TIN KHÁC</div>
			<div class="single_moreContent <?= $idSevice ? 'single_service' : 'single_post' ?>">

				<?php
				$args = [
					'category_name' => $category,
					'posts_per_page' => 5,
					'page' => get_query_var('page')
				];
				$posts = get_posts($args);

				foreach ($posts as $post) :
					if ($idSevice) :
						get_template_part('template-parts/service');
					else :
						get_template_part('template-parts/postContent');
					endif;
				endforeach;
				?>
			</div>


		</div>
	</div>
</div>
</div>


<?php get_footer(); ?>