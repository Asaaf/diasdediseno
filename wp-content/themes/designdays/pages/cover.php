<div class="section">
    <div class="cover">
        <div class="cover-header">
            <div class="mobile-menu" id="mobile-menu">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-magenta.png" alt="Logotipo días de diseño" class="img-logo">
                </div>
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
        <div class="video">
            <!--
                QUITAR COMENTARIO SI SE DESEA APLICAR UN FILTRO AMARILLO SOBRE EL VIDEO QUE
                APARECE EN EL COVER
            -->
            <!--
                <div class="background-filter"></div>
            -->
            <?php
            $post = get_post(102);
            echo $post->post_content;
            //var_dump($post->post_content);
            ?>
        </div>
        <div class="about-designdays">
            <span>SOBRE EL EVENTO</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow-cover.png" alt="Sobre el evento">
        </div>
    </div>
</div>
<script>
    let bars = true;
    var navbar = $('.menu');
    var logo = $('.logo');
    var children = $('.children');
    var sticky = navbar.offset().top;
    window.onscroll = function() {
        stickyNav();
    };

    $('.menu ul').addClass('menu-list');
    $('#bars').click(() => {
        if (bars) {
            $('#bar1').addClass('close');
            $('#bar2').addClass('close');
            $('#bar3').addClass('close');
            $('#mobile-menu').addClass('open');
            $('.menu ul').addClass('show');
            $('.menu').addClass('mobile');
            bars = false;
        } else {
            $('#bar1').removeClass('close');
            $('#bar2').removeClass('close');
            $('#bar3').removeClass('close');
            $('#mobile-menu').removeClass('open');
            $('.menu ul').removeClass('show');
            $('.menu').removeClass('mobile');
            bars = true;
        }
    });

    function stickyNav() {
        if (window.pageYOffset >= sticky) {
            navbar.addClass("sticky");
            logo.addClass("sticky");
            children.addClass("sticky");
        } else {
            navbar.removeClass("sticky");
            logo.removeClass("sticky");
            children.removeClass("sticky");
        }
    }
</script>