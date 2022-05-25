<div class="cover-header">
    <div class="mobile-menu" id="mobile-menu">
        <a href="<?php echo get_home_url(); ?>">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-magenta.png" alt="Logotipo días de diseño" class="img-logo">
            </div>
        </a>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'my-custom-menu',
            'container_class' => 'custom-menu-class'
        ));
        ?>
        <div class="bars" id="bars">
            <div class="bar1" id="bar1"></div>
            <div class="bar2" id="bar2"></div>
            <div class="bar3" id="bar3"></div>
        </div>
    </div>
</div>