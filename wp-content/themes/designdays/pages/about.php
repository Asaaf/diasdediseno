<div class="section" id="about">
    <div class="about" id="about">
        <div class="content pure-g">
            <div class="pure-u-1 pure-u-lg-12-24">
                <div class="about-container-section">
                    <div class="about-container">
                        <div class="title-container">
                            <div class="rack">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rack.png" alt="" class="src">
                            </div>
                            <div class="about-title">
                                <?php
                                $post = get_post(41);
                                echo $post->post_title;
                                ?>
                            </div>
                        </div>
                        <div class="content-about">
                            <?php
                            echo $post->post_content;
                            //var_dump($post);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pure-u-1 pure-u-lg-12-24">
                <div class="about-image">
                    <?php
                    if (has_post_thumbnail($post->ID)) {
                        echo get_the_post_thumbnail($post->ID);
                    } else {
                    ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="Imagen acerca de días de diseño">
                    <?php
                    }
                    ?>
                </div>
                <div class="circle-rack">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle-rack.png">
                </div>
            </div>
        </div>
    </div>
</div>