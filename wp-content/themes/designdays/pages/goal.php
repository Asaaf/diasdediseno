<div class="goal-container pure-g">
    <div class="pure-u-1 pure-u-lg-9-24">
        <div class="logo-section">
            <div class="goal-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-magenta.png" alt="">
            </div>
        </div>
    </div>
    <div class="pure-u-1 pure-u-lg-15-24">
        <div class="goal-container-second-section">
            <div class="goal-center">
                <div class="goal-title">
                    <div class="triangle-rack">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-rack.png" alt="">
                    </div>
                    <div class="goal-title">
                        <?php
                        $post = get_post(43);
                        echo $post->post_title;
                        ?>
                    </div>
                </div>
                <div class="goal-description">
                    <?php
                    echo $post->post_content;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>