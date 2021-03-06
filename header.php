<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header>
        <?php if(get_theme_mod('bm_topmenu_show') == 'yes'):?>
        <div class="top_header">
            <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <div class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar">
                        <?php 
                        if (has_nav_menu('top')) {
                            wp_nav_menu(array(
                                'theme_location' => 'top',
                                'container' => false,
                                'fallback_cb' => false,
                                'menu_class' => 'nav navbar-nav'
                            ));
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <div class="main_header">
            <div class="container">
                <div class="logo">
                    <?php 
                if (has_custom_logo()) {
                    the_custom_logo();
                }
                ?>
                </div>
                <div class="main_nav_border">
                    <div class="main_nav">
                        <?php 
                        if (has_nav_menu('primary')) {
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'fallback_cb' => false,
                                'menu_class' => 'nav navbar-nav'
                            ));
                        }
                        ?>
                        <div class="search_area">
                            <?php 
                            if (get_theme_mod('bm_search_show') == 'yes') {                                
                                get_search_form();
                            }
                            ?>
                        </div>
                    </div>
                    <div class="main_info">
                        <div class="row">
                            <div class="col-sm-8 randompost">
                                <strong><?php echo __('Did you see?', 'minimag');?></strong>
                                <?php 
                                if (function_exists('wpp_get_mostpopular')) {
                                    wpp_get_mostpopular(array(
                                        'limit' => 1,
                                        'wpp_start' => '',
                                        'wpp_end' => '',
                                        'post_html' => '<a href="{url}">{text_title}</a>',
                                        'order_by' => 'views'
                                ));
                                }else{
                                $bm_query = new WP_Query(array(
                                'posts_per_page' => 1,
                                'post_type' => 'post',
                                'orderby' => 'rand'
                                ));
                                if ($bm_query->have_posts()) {
                                while ($bm_query->have_posts()) {
                                $bm_query->the_post();
                                ?>
                                <a href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                                <?php
                                        }
    
                                        wp_reset_postdata();
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-sm-4 socialarea">
                                <div class="socialtxt">
                                    <?php echo __('FOLLOW:', 'minimag');?>
                                </div>
                                <div class="socialicons">
                                    <?php if(get_theme_mod('bm_facebook')):?>
                                    <a href="<?php echo get_theme_mod('bm_facebook')?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png"
                                            alt="facebook">
                                    </a>
                                    <?php endif;?>
                                    <?php if(get_theme_mod('bm_googleplus')):?>
                                    <a href="<?php echo get_theme_mod('bm_googleplus')?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gplus.png"
                                            alt="google">
                                    </a>
                                    <?php endif;?>
                                    <?php if(get_theme_mod('bm_instagram')):?>
                                    <a href="<?php echo get_theme_mod('bm_instagram')?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.png"
                                            alt="instagram">
                                    </a>
                                    <?php endif;?>
                                    <?php if(get_theme_mod('bm_twitter')):?>
                                    <a href="<?php echo get_theme_mod('bm_twitter')?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png"
                                            alt="twitter">
                                    </a>
                                    <?php endif;?>
                                    <?php if(get_theme_mod('bm_youtube')):?>
                                    <a href="<?php echo get_theme_mod('bm_youtube')?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png"
                                            alt="youtube">
                                    </a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(get_header_image()):?>
        <div class=" container custom-header">
            <img src="<?php header_image();?>" alt="header image">
        </div>
        <?php endif;?>
    </header>