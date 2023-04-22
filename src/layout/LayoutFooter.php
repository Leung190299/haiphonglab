<?php

namespace HPlab\layout;

class LayoutFooter
{

	public function buildLayout($item, $type)
	{

		switch ($type) {
			case 'layout2':
				$pages = $item['pages'];
			?>
				<div class="footer_item">
					<div class="footer_itemTitle"><?= $item['labelLayout2'] ?></div>
					<ul class="footer_list">
						<?php
						foreach ($pages as $page) :
						?>
							<li>
								<a href="<?= get_permalink($page)  ?>">
									<?= get_the_title($page) ?>
								</a>
							</li>
						<?php
						endforeach;
						?>
					</ul>
				</div>
			<?php
				break;
			case 'layout3':
			?>
				<div class="footer_item">
					<div class="footer_itemTitle"><?= $item['labelLayout3'] ?></div>
						<div class="footer_codeFrom">
							<?= do_shortcode($item['codeForm']) ?>
						</div>
				</div>
			<?php
				break;

			default:
				$links = $item['groupLink'];
			?>
				<div class="footer_item">
					<div class="footer_itemTitle"><?= $item['labelLayout1'] ?></div>
					<ul class="footer_list">
						<?php
						foreach ($links as $link) :
						?>
							<li>
								<a href="<?= $link['link'] ?>">
									<?= $link['title'] ?>
								</a>
							</li>
						<?php
						endforeach;
						?>
					</ul>
				</div>
<?php
				break;
		}
	}
};

?>