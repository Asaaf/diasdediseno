<div class="section">
    <div class="programming-container">
        <h1 class="programming-title">PROGRAMACIÓN</h1>
        <div class="arrow-container">
            <div class="left-arrow" id="left"></div>
            <div class="right-arrow" id="right"></div>
        </div>
        <div class="events-container">

            <div class="right-arrow-background"></div>
            <div class="all-events-container" id="events">
                <?php
                for ($i = 0; $i < 10; $i++) {
                ?>

                    <div class="event-card-container">
                        <div class="event-card-date">
                            <div class="event-date-month">SEPTIEMBRE</div>
                            <div class="event-date-day">25</div>
                            <div class="event-date-day-name">MIÉRCOLES</div>
                        </div>
                        <div class="event-description-container">
                            <div class="author">PH. D. FELIPE CESAR LONDOÑO LÓPEZ</div>
                            <div class="description">
                                "Diseño en postpandemia" ¿Qué hacen hoy las ciudades para retomar a la normalidad y qué papel cumple el diseño en este proceso?
                            </div>
                        </div>
                        <div class="event-hour">09:00 AM</div>
                        <div class="event-background">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-events.png" alt="">
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script>
    let i = 0;
    let pos = 250;
    $("#left").click(function() {
        console.log("left: " + pos);
        if (i <= 10) {
            pos = pos - 250;
            $("#events").css({
                "margin-left": pos + "px",
                "transition": "all 0.3s linear"
            });
            i++;
        }
    });

    $("#right").click(function() {
        console.log("right: " + pos);
        if (i >= 0) {
            pos = pos + 250;
            $("#events").css({
                "margin-left": pos + "px",
                "transition": "all 0.3s linear"
            });
            i--;
        }
    });
</script>