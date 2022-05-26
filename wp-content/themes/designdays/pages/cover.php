<div class="section">
    <div class="cover">
        <?php include 'menu.php' ?>
        <div class="video" id="video">
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
            <span>
                <a href="#about">
                    SOBRE EL EVENTO
                </a>
            </span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow-cover.png" alt="Sobre el evento">
        </div>
    </div>
    <div class="background-color">
        <div class="loader show" id="loader">
            <div data-glitch-id="1" class="glitched"></div>
            <div data-glitch-id="2" class="glitched2"></div>
        </div>
    </div>
</div>