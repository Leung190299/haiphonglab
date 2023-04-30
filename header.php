<!DOCTYPE html>
<html class="no-js" <?php
                    language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>

    <!-- nội dung header -->
    <header class="header">
        <div class="header_top">
            <div class="container">
                <div class="header_body">
                    <div class="header_logo">
                        <?php the_custom_logo() ?>
                    </div>
                    <div class="header_menu">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'menu',
                            'menu_class' => 'header_menuBody',
                        ]); ?>
                        <div class="header_search">
                            <button><?php Template_function::getIcon('search') ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container">
                <div class="header_body">
                    <div class="header_boxItem">
                        <button class="header_item">
                            <div class="header_itemIcon">
                                <?php Template_function::getIcon('calendar') ?>
                            </div>
                            <div class="header_itemTitle">ĐẶT LỊCH HẸN</div>
                        </button>
                        <button class="header_item">
                            <div class="header_itemIcon">
                                <?php Template_function::getIcon('page') ?>
                            </div>
                            <div class="header_itemTitle">XEM KẾT QUẢ XÉT NGHIỆM</div>
                        </button>
                        <button class="header_item">
                            <div class="header_itemIcon">
                                <?php Template_function::getIcon('edit') ?>
                            </div>
                            <div class="header_itemTitle">LIÊN HỆ GÓP Ý</div>
                        </button>
                        <button class="header_item">
                            <div class="header_itemIcon">
                                <?php Template_function::getIcon('phone') ?>
                            </div>
                            <div class="header_itemTitle">HOTLINE: 0915 82 1509</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
