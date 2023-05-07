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
                        <button id="btnMenu" class="btnMenu">
                            <span></span>
                        </button>
                        <button id="btnClose" class="btnClose">

                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container">
                <div class="header_body">
                    <div class="header_boxItem">
                        <button class="header_item" data-modal="formTest">
                            <div class="header_itemIcon">
                                <?php Template_function::getIcon('calendar') ?>
                            </div>
                            <div class="header_itemTitle">ĐẶT LỊCH HẸN</div>
                        </button>
                        <button class="header_item" data-modal="formgetTest">
                            <div class="header_itemIcon">
                                <?php Template_function::getIcon('page') ?>
                            </div>
                            <div class="header_itemTitle">XEM KẾT QUẢ XÉT NGHIỆM</div>
                        </button>
                        <button class="header_item" data-modal="contact">
                            <div class="header_itemIcon">
                                <?php Template_function::getIcon('edit') ?>
                            </div>
                            <div class="header_itemTitle">LIÊN HỆ GÓP Ý</div>
                        </button>
                        <button class="header_item" data-modal="mess">
                            <div class="header_itemIcon">
                                <?php Template_function::getIcon('phone') ?>
                            </div>
                            <div class="header_itemTitle">HOTLINE: 0915 82 1509</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal">
            <div class="modal_body">
                <div id="formTest" class="modal_content">
                    <?php get_template_part('template-parts/formSetTest'); ?>
                </div>
                <div id="formgetTest" class="modal_content">
                    <?php get_template_part('template-parts/formTest'); ?>
                </div>
                <div id="contact" class="modal_content">
                    <?php get_template_part('template-parts/contact'); ?>
                </div>
                <div id="phoneContact" class="modal_content">
                    <?php get_template_part('template-parts/formSetTest'); ?>
                </div>
                <div id="map" class="modal_content">
                    <?= get_field('map', 'option') ?>
                </div>
                <div id="mess" class="modal_content">
                    <div class="mess">
                        <div class="mess_title">Thông báo </div>
                        <div class="mess_des"></div>
                        <button class="btn" id="btnClone">Đóng</button>
                    </div>
                </div>
                <div id="result" class="modal_content">
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </header>