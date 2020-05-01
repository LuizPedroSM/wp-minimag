<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header>
        <div class="top_header">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
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
    </header>