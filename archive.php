<?php get_header(); ?>
<?php $obj = get_queried_object(); ?>
<main id="primary" class="site-main ">
    <div class="archiveBanner">
        <?php $banner = get_field('bannerCategory', $obj);
        Template_function::getImageId($banner);
        ?>
    </div>
    <div class="archiveBody">
        <h1 class="archive_title"><?= $obj->name ?></h1>
        <div class="container">

            <div class="<?= $obj->slug == "video" ? "archive_video" : "archive_content"  ?> ">

                <?php

                if (have_posts()) : ?>
                    <div class="post">
                        <?php
                        while (have_posts()) :
                            the_post();
                            if ($obj->slug === "video") {
                                get_template_part("template-parts/content",'video');
                            } else {
                                get_template_part("template-parts/content");
                            }


                        ?>
                        <?php endwhile; ?>
                    </div>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <?php get_template_part('template-parts/content/none'); ?>
                <?php endif; ?>

                <?php $obj->slug !== "video" ? get_sidebar() : null ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>