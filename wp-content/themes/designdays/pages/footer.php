<div class="section">
    <div class="footer-container">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-lg-8-24 pure-u-sm-24-24">
                <?php include 'contact-form.php' ?>
            </div>
            <div class="interest-links pure-u-1 pure-u-lg-8-24 pure-u-sm-24-24">
                <?php include 'links.php' ?>
            </div>
            <div class="footer-logo pure-u-1 pure-u-lg-8-24 pure-u-sm-24-24">
                <div class="logotipo">
                    <div class="logotipo-dias">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-amarillo.png" alt="logotipo-consultorio">
                    </div>
                </div>
            </div>
        </div>
        <div class="partners">
            <div class="ucaldas">
                <a href="https://www.ucaldas.edu.co/portal/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/ucaldas.png" alt="Logotipo Universidad de Caldas">
                </a>
            </div>
            <div class="artes-humanidades">
                <a href="https://artesyhumanidades.ucaldas.edu.co" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/facultad.png" alt="Logotipo Facultad de Artes y Humanidades">
                </a>
            </div>
            <div class="department-dvisual">
                <a href="https://artesyhumanidades.ucaldas.edu.co/diseno-visual/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/departamento.png" alt="Logotipo Departamento de Diseño Visual">
                </a>
            </div>
            <div class="program-dvisual">
                <a href="https://artesyhumanidades.ucaldas.edu.co/diseno-visual/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/programa.png" alt="Logotipo Programa de Diseño Visual">
                </a>
            </div>
            <div class="consultorio">
                <a href="https://www.ucaldas.edu.co/portal/vicerrectoria-de-proyeccion-universitaria/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/consultorio.png" alt="Logotipo Consultorio de Diseño Visual">
                </a>
            </div>
        </div>
        <div class="background-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer.png" alt="imagen-fondo-footer">
        </div>
    </div>
</div>

<script>
    if (!$('.screen-reader-response p').is(':empty')) {
        $('.screen-reader-response').addClass('show');
    }
</script>