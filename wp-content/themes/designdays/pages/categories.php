<div class="section">
    <div class="categories-container pure-g">
        <div class="pure-u-1 pure-u-lg-24-24">
            <h1 class="category-main-title">CATEGORÍAS</h1>
        </div>
        <div class="pure-u-1 pure-u-lg-6-24">
            <div class="category" id="lets-talk">
                <div class="category-title-container">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rack.png" alt="">
                    </div>
                    <h2 class="category-title">
                        <?php
                        $post = get_post(47);
                        echo $post->post_title;
                        ?>
                    </h2>
                </div>
                <div class="description">
                    <?php
                    echo $post->post_content;
                    ?>
                </div>
            </div>
        </div>
        <div class="pure-u-1 pure-u-lg-6-24">
            <div class="category" id="seven-by-seven">
                <div class="category-title-container">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-rack.png" alt="">
                    </div>
                    <h2 class="category-title">
                        <?php
                        $post = get_post(51);
                        echo $post->post_title;
                        ?>
                    </h2>
                </div>
                <div class="description">
                    <?php
                    echo $post->post_content;
                    ?>
                </div>
            </div>
        </div>
        <div class="pure-u-1 pure-u-lg-6-24">
            <div class="category" id="open-door">
                <div class="category-title-container">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle-rack.png" alt=""></div>
                    <h2 class="category-title">
                        <?php
                        $post = get_post(55);
                        echo $post->post_title;
                        ?>
                    </h2>
                </div>
                <div class="description">
                    <?php
                    echo $post->post_content;
                    ?>
                </div>
            </div>
        </div>
        <div class="pure-u-1 pure-u-lg-6-24">
            <div class="category" id="bazaar">
                <div class="category-title-container">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamond-rack.png" alt=""></div>
                    <h2 class="category-title">
                        <?php
                        $post = get_post(57);
                        echo $post->post_title;
                        ?>
                    </h2>
                </div>
                <div class="description">
                    <?php
                    echo $post->post_content;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>