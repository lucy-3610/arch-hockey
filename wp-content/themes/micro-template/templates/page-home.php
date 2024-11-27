<?php

/*
    Template Name: Home Page Template
*/

get_header(); ?>

<section class="splash">
    <div class="hero-slider">
        <div><img src="/wp-content/uploads/2018/09/27545584_2446995665525685_3665367027745732862_n.jpg" alt=""></div>
        <div><img src="/wp-content/uploads/2018/09/40624290_2630712717153978_5930805302642343936_n.jpg" alt=""></div>
        <div><img src="/wp-content/uploads/2018/09/30730068_2497250487166869_7042846467787523665_n.jpg" alt=""></div>
        <div><img src="/wp-content/uploads/2018/09/33678090_2524586497766601_6019851931877376_n.jpg" alt=""></div>
        <div><img src="/wp-content/uploads/2018/09/36539174_2558407994384451_1112458652070969344_n.jpg" alt=""></div>
    </div>
    <?php
    get_template_part('template-parts/upcoming-games');
    // include(TEMPLATEPATH . '/template-parts/upcoming-games.php'); 
    ?>
    <!-- <div class="container">
        <div class="row">
            <?php $url = 'https://www.ahl-manager.com/AHL/admin/location-list'; // Replace with your API URL

            $response = wp_remote_get($url);

            if (is_wp_error($response)) {
                $error_message = $response->get_error_message();
                echo "Something went wrong: $error_message";
            } else {
                $body = wp_remote_retrieve_body($response);

                $data = json_decode($body, true); // Assuming the API returns JSON
                echo $data;
                print_r($data); // Process the data as needed
            } ?>
        </div>
    </div> -->
</section>

<section class="body">


    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <p>Hello Hockey Players,</p>

                <p>Winter/Spring session is starting up, so get those skates sharpened and sticks taped. It’s time to compete for the Arch Cup!</p>

                <p>Arch Hockey is a friendly, fun, and competitive hockey league in the metro St. Louis area. $220 gets you 9-10 games of ice hockey overseen by our team of trained officials.</p>

                <p>We offer skate sharpening at the rink for $8. Please see Joe Robichaud in the score keepers booth and he’ll get you set up.</p>

                <h5>Interested in joining Arch Hockey?</h5>
                <p>Please fill out the evaluation form found in our menu or you can access it <a href="/player-evaluation">here</a>. You can also go <a href="/registration">here</a> to find the registration/liability form.
                </p>
                <div class="d-flex flex-column flex-xl-row my-3 mx-auto">
                    <a class="btn-primary bg-tertiary-hover mr-2 mb-3 mb-xl-0" href="/player-evaluation">Player Evaluation Form</a>
                    <a class="btn-primary bg-tertiary-hover" href="/registration">Registration Form</a>
                </div>

                <h6>League Jersey:</h6>

                <p>If you happen to have a league jersey from a previous season with Arch Hockey; please notify either Tom or Bob – We will make arrangements to come and collect. Thanks for your help!</p>
            </div>
            <div class="col-lg-6">
                <?php
                get_template_part('template-parts/home-standings');
                // include(TEMPLATEPATH . '/template-parts/upcoming-games.php'); 
                ?>
            </div>
        </div>
        <div class="row pt-5 pb-4">
            <div class="col">
                <h2 class="mt-5">Recent Champions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="recent-champions">
                    <div class="slide bg-tertiary-light">
                        <img src="https://archhockey.com/wp-content/uploads/2023/05/IMG_20230416_182445119_1-1200x800.jpg" alt="">
                        <div class="px-3">
                            <h6>STL Knights</h6>
                            <p><em><a href="/champion-session/winter-2022/">Winter 2022</a> &bull; <a href="/champion-division/middle-division/">Middle Division</a></em></p>
                        </div>
                    </div>
                    <div class="slide bg-tertiary-light">
                        <img src="https://archhockey.com/wp-content/uploads/2023/05/IMG_20230416_171308188_1-1200x800.jpg" alt="">
                        <div class="px-3">
                            <h6>Cigar Box</h6>
                            <p><em><a href="/champion-session/winter-2022/">Winter 2022</a> &bull; <a href="/champion-division/lower-division/">Lower Division</a></em></p>
                        </div>
                    </div>
                    <div class="slide bg-tertiary-light">
                        <img src="https://archhockey.com/wp-content/uploads/2023/01/PurpleDucks-1200x800.jpeg" alt="">
                        <div class="px-3">
                            <h6>Purple Ducks</h6>
                            <p><em><a href="/champion-session/fall-2022/">Fall 2022</a> &bull; <a href="/champion-division/lower-division/">Lower Division</a></em></p>
                        </div>
                    </div>
                    <div class="slide bg-tertiary-light">
                        <img src="https://archhockey.com/wp-content/uploads/2023/01/OldCrows.jpeg" alt="">
                        <div class="px-3">
                            <h6>Crows</h6>
                            <p><em><a href="/champion-session/fall-2022/">Fall 2022</a> &bull; <a href="/champion-division/lower-division/">Lower Division</a></em></p>
                        </div>
                    </div>
                    <div class="slide bg-tertiary-light">
                        <img src="https://archhockey.com/wp-content/uploads/2023/01/Wolves-1200x800.jpeg" alt="">
                        <div class="px-3">
                            <h6>Wolves</h6>
                            <p><em><a href="/champion-session/fall-2022/">Fall 2022</a> &bull; <a href="/champion-division/lower-division/">Lower Division</a></em></p>
                        </div>
                    </div>
                    <div class="slide bg-tertiary-light">
                        <img src="https://archhockey.com/wp-content/uploads/2023/01/Ferda-1200x800.jpg" alt="">
                        <div class="px-3">
                            <h6>Ferda</h6>
                            <p><em><a href="/champion-session/fall-2022/">Fall 2022</a> &bull; <a href="/champion-division/lower-division/">Lower Division</a></em></p>
                        </div>
                    </div>
                    <div class="slide bg-tertiary-light">
                        <img src="https://archhockey.com/wp-content/uploads/2022/01/A32D0E41-1240-47C1-820E-0ACD27AD1659-1200x800.jpeg" alt="">
                        <div class="px-3">
                            <h6>St. Louis Mooseheads</h6>
                            <p><em><a href="/champion-session/fall-2021/">Fall 2021</a> &bull; <a href="/champion-division/lower-division/">Lower Division</a></em></p>
                        </div>
                    </div>
                    <div class="slide bg-tertiary-light">
                        <img src="https://archhockey.com/wp-content/uploads/2022/01/BD28057A-81B2-4C6F-8D8F-0D207185924E.jpeg" alt="">
                        <div class="px-3">
                            <h6>Arch ReJets</h6>
                            <p><em><a href="/champion-session/fall-2021/">Fall 2021</a> &bull; <a href="/champion-division/lower-division/">Lower Division</a></em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>