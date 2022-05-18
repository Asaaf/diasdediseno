<?php
/*
$the_query = new WP_Query(array(
    'category_name' => 'Programación',
    'posts_per_page' => 5
));

if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        var_dump($the_query);
    }
}
*/

$events = tribe_get_events([
    'posts_per_page' => 5
]);

?>
<div class="section">
    <div class="programming-container">
        <h1 class="programming-title">PROGRAMACIÓN</h1>
        <div class="arrow-container">
            <div class="left-arrow" id="left"></div>
            <div class="right-arrow" id="right"></div>
        </div>
        <div class="events-container">

            <div class="right-arrow-background"></div>
            <div class="all-events-container" style="width: calc(262px * <?php echo sizeof($events) ?>);" id="events">
                <?php
                setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
                for ($i = 0; $i < sizeof($events); $i++) {
                ?>

                    <div class="event-card-container">
                        <div class="event-card-date">
                            <div class="event-date-month"><?php echo iconv('ISO-8859-2', 'UTF-8', strftime("%B", strtotime($events[$i]->event_date))) ?></div>
                            <div class="event-date-day"><?php echo iconv('ISO-8859-2', 'UTF-8', strftime("%d", strtotime($events[$i]->event_date))) ?></div>
                            <div class="event-date-day-name"><?php echo iconv('ISO-8859-2', 'UTF-8', strftime("%A", strtotime($events[$i]->event_date))) ?></div>
                        </div>
                        <div class="event-description-container">
                            <div class="author">
                                <?php
                                $organizer = tribe_get_organizer($events[$i]->ID);
                                echo $organizer;
                                ?>
                            </div>
                            <div class="description">
                                <?php
                                echo substr($events[$i]->post_title, 0, 132);
                                if (strlen($events[$i]->post_title) > 132) {
                                    echo "...";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="event-hour">
                            <?php echo iconv('ISO-8859-2', 'UTF-8', strftime("%R", strtotime($events[$i]->event_date))) ?>
                        </div>
                        <div class="event-background">
                            <?php
                            if (has_post_thumbnail($events[$i]->ID)) {
                                echo get_the_post_thumbnail($events[$i]->ID);
                            } else {
                            ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-events.png" alt="">
                            <?php
                            }
                            ?>
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
    $("#right").click(function() {
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

    $("#left").click(function() {
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