<?php
/*
Thunder Bolt 2 - Template Parts - Home
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Home page Upcoming Games
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<section id="home-upcoming-games-wrapper" class="wrapper p-4">
    <h2 class="color-white text-center py-3">Upcoming Matches</h2>
    <div id="output-home-schedule"></div><!-- #output -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="d-flex justify-content-center my-3 mx-auto btn-primary bg-tertiary-hover" href="/schedules">View Full Schedules</a>
            </div>
        </div>
    </div>

</section><!-- #home-feature-wrapper -->

<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
<script id="homeSchedule">

{{#games}}
    <div class="container">
        <div class="row flex-column flex-lg-row color-white text-center py-2">
            <div class="upcoming-game col-lg-3 d-flex justify-content-center align-items-center">
                <div class="session-division"> {{leagueName}} </div>
            </div>
            <div class="match col-lg-3 d-flex justify-content-center align-items-center">
                <div class="home_team team">
                    <div class="team_name">{{homeTeamName}} VS {{awayTeamName}}</div>
                </div>
            </div>

            <div class="game_day col-lg-3 d-flex justify-content-center align-items-center">
                <i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;
                {{gameTime}}
            </div>
            <div class="rink col-lg-3 d-flex justify-content-center align-items-center">
                <i class="fa fa-location-arrow" aria-hidden="true"></i> &nbsp;
                {{location}}
            </div>
        </div>
    </div>
{{/games}}

</script>

<script>
    $.getJSON("http://www.ahl-manager.com/AHL/admin/api/schedule/current-season/games/days/21", function(data_next_games) {
        var template = $('#homeSchedule').html();
        var data_next_games = {
            games: data_next_games.games.slice(0, 10)
        };
        var html = Mustache.to_html(template, data_next_games);
        $('#output-home-schedule').html(html)
    });
</script>