<?php

/**
 * The template for displaying all single content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

$season_id = get_field('season_id');
$league_id = get_field('league_id');
$stat_type = get_field('stat_type');

get_header();

$post_id = get_the_ID(); // Get the current post ID, you can also pass the post ID directly if needed

// if ($post_id) {
//     $post = get_post($post_id);
//     if ($post) {
//         $post_slug = basename(get_permalink($post->ID));
//         echo $post_slug;
//     }
// }
?>


<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mt-5">
                        <?php the_title(); ?>
                    </h2>
                    <div class="accordion py-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Standings
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- <?php if ($post_id) {
    $post = get_post($post_id);
    if ($post) {
        echo $post_id;
    }
}?> -->
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                        <!-- <?php get_template_part('template-parts/stats/header-single-stats.php'); ?> -->

                                        <div id="content-wrapper" class="wrapper">
                                            <!-- <div id="content-container" class="container"> -->
                                            <div id="content-single" class="content-area column ten offset-three">

                                                <div id="standings-output"></div>

                                            </div><!-- #content-single -->
                                            <!-- </div>#content-container -->
                                        </div><!-- #content-wrapper -->
                                    </article><!-- #post-## -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Schedule
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                        <?php 
// include(TEMPLATEPATH . '/template-parts/schedules/header-single-schedules.php');
// get_template_part('template-parts/schedules/header-single-schedules.php'); ?>
                                        <div id="content-wrapper" class="wrapper">
                                            <!-- <div id="content-container" class="container"> -->
                                            <div id="content-single" class="content-area column twelve offset-two">

                                                <div id="schedule-output"></div>

                                            </div><!-- #content-single -->
                                            <!-- </div>#content-container -->
                                        </div><!-- #content-wrapper -->

                                    </article><!-- #post-## -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Player Stats
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div id="content-wrapper" class="wrapper">
                                        <!-- <div id="content-container" class="container"> -->
                                        <div id="content-single" class="content-area column twelve offset-two">

                                            <div id="stats-output"></div>

                                        </div><!-- #content-single -->
                                        <!-- </div>#content-container -->
                                    </div><!-- #content-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>

<script id="standingsTable">
		<table class="standings-table league-table">
			<tr>
        <th class="team-rank stat"></th>
	      <th class="team descript">Team</th>
	      <th class="team-games-played stat">GP</th>
	      <th class="team-points stat">P</th>
	      <th class="team-wins stat">W</th>
	      <th class="team-losses stat">L</th>
	      <th class="team-overtime-losses stat">OTL</th>
	      <th class="team-goals stat">GF</th>
	      <th class="team-goals-against stat">GA</th>
	    </tr>
	    {{#teamStatistics}}
	    	<tr>
		      <td class="team-rank stat">{{rank}}</td>
		      <td class="team descript">{{teamName}}</td>
		      <td class="team-games-played stat">{{GP}}</td>
		      <td class="team-points stat">{{Pts}}</td>
		      <td class="team-wins stat">{{W}}</td>
		      <td class="team-losses stat">{{L}}</td>
		      <td class="team-overtime-losses stat">{{OTL}}</td>
		      <td class="team-goals stat">{{GF}}</td>
		      <td class="team-goals-against stat">{{GA}}</td>
		    </tr>
	    {{/teamStatistics}}
		</table>
</script>

<?php if ($stat_type === 'Players') { ?>
<script id="leagueStatisticsList" class="here">
		<table class="player-table league-table">
			<tr>
				<th class="rank stat"></th>
	      <th class="name descript">Name</th>
	      <th class="team descript">Team</th>
	      <th class="num stat">Num</th>
	      <th class="games-played stat">GP</th>
	      <th class="goals stat">G</th>
	      <th class="assists stat">A</th>
	      <th class="points stat">Pts</th>
	      <th class="power-play-goals stat">PPG</th>
	      <th class="short-hand-goals stat">SHG</th>
	      <th class="game-winning-goals stat">GWG</th>
	      <th class="pentalties stat">PIM</th>
	    </tr>
	    {{#playerStatistics}}
	    	<tr>
		    	<td class="rank stat">{{rank}}</td>
		      <td class="name descript">{{playerName}}</td>
		      <td class="team descript">{{teamName}}</td>
		      <td class="num stat">{{jerseyNumber}}</td>
		      <td class="games-played stat">{{GP}}</td>
		      <td class="goals stat">{{G}}</td>
		      <td class="assists stat">{{A}}</td>
		      <td class="points stat">{{Pts}}</td>
		      <td class="power-play-goals stat">{{PPG}}</td>
		      <td class="short-hand-goals stat">{{SHG}}</td>
		      <td class="game-winning-goals stat">{{GWG}}</td>
		      <td class="pentalties stat">{{PIM}}</td>
		    </tr>
	    {{/playerStatistics}}
		</table>
</script>

<script>
    // $.getJSON( "http://wmgahl.dailyrazor.net/AHL/admin/api/statistics/league/<?php echo $league_id; ?>/players", function( data ) {
    // 	var template = $('#leagueStatisticsList').html();
    // 	var html = Mustache.to_html(template, data);
    // 	$('#stats-output').html(html)
    // });
    // $.getJSON( "http://wmgahl.dailyrazor.net/AHL/admin/api/statistics/league/127/players", function( data ) {
    // 	var template = $('#leagueStatisticsList').html();
    // 	var html = Mustache.to_html(template, data);
    // 	$('#stats-output').html(html)
    // }); 
</script>

<?php } if ($stat_type === 'Goalies') { ?>

<script id="leagueStatisticsList" class="kitchen">
    { { #leagueStatistics } }
			<h2>{{leagueName}}</h2>
			<table class="goalie-table league-table">
				<tr>
					<th class="rank stat"></th>
		      <th class="name descript">Name</th>
		      <th class="team descript">Team</th>
		      <th class="games-played stat">GP</th>
		      <th class="wins stat">W</th>
		      <th class="losses stat">L</th>
		      <th class="overtime stat">OT</th>
		      <th class="shots stat">SA</th>
		      <th class="saves stat">SV</th>
		      <th class="save-percentage stat">SV%</th>
		      <th class="goals-against stat">GA</th>
		      <th class="goalsagainst-average stat">GAA</th>
		      <th class="shut-outs stat">SO</th>
		    </tr>
		    {{#goalieStatistics}}
		    	<tr>
			    	<td class="rank stat">{{rank}}</td>
			      <td class="name descript">{{goalieName}}</td>
			      <td class="team descript">{{teamName}}</td>
			      <td class="games-played stat">{{GP}}</td>
			      <td class="wins stat">{{W}}</td>
			      <td class="losses stat">{{L}}</td>
			      <td class="overtime stat">{{OT}}</td>
			      <td class="shots stat">{{SA}}</td>
			      <td class="saves stat">{{SV}}</td>
			      <td class="save-percentage stat">{{SV%}}</td>
			      <td class="goals-against stat">{{GA}}</td>
			      <td class="goalsagainst-average stat">{{GAA}}</td>
			      <td class="shut-outs stat">{{SO}}</td>
			    </tr>
		    {{/goalieStatistics}}
			</table>
    { {/leagueStatistics } }
</script>

<script>
    // $.getJSON( "http://wmgahl.dailyrazor.net/AHL/admin/api/statistics/season/<?php echo $season_id; ?>/goalies", function( data ) {
    // 	var template = $('#leagueStatisticsList').html();
    // 	var html = Mustache.to_html(template, data);
    // 	$('#stats-output').html(html)
    // }); 

    $.getJSON("http://www.ahl-manager.com/AHL/admin/api/statistics/league/44/teams", function (data) {
        var template = $('#leagueStatisticsList').html();
        var html = Mustache.to_html(template, data);
        $('#stats-output').html(html)
    });

</script>


<?php } ?>

<script id="scheduleTable" class="table">
    <table class="schedule-table league-table">
        <tr>
            <th class="homeTeamName">Home</th>
            <th class="timeLocation">Time & Location</th>
            <th class="homeTeamName">Away</th>
        </tr>
        {{ #games}}
        <tr>
            <td class="homeTeamName">{{ homeTeamName }} : {{ homeTeamScore }}</td>
            <td class="timeLocation">{{ gameTime }} <br> {{ location }}</td>
            <td class="awayTeamName">{{ awayTeamScore }} : {{ awayTeamName }}</td>
        </tr>
        {{/ games}}
    </table>
</script>

//
<script>
    // 	// $.getJSON( "http://wmgahl.dailyrazor.net/AHL/admin/api/schedule/season/<?php echo $season_id; ?>/league/<?php echo $league_id; ?>/games", function( data ) {
    // 	// 	var template = $('#leagueStatisticsList').html();
    // 	// 	var html = Mustache.to_html(template, data);
    // 	// 	$('#output').html(html)
    // 	// }); 
    // 	var season_id = acfData.season_id;
    // 	var league_id = acfData.league_id;
    //     $.getJSON( "http://www.ahl-manager.com/AHL/admin/api/schedule/season/" + season_id + "/league/" + league_id + "/games", function( data ) {
    // 	// $.getJSON( "http://www.ahl-manager.com/AHL/admin/api/schedule/season/44/league/127/games", function( data ) {
    // 		var template = $('#leagueStatisticsList').html();
    // 		var html = Mustache.to_html(template, data);
    // 		$('#schedule-output').html(html)
    // 	}); 

    // 
    // <script src="../../../js/custom.js"></script>
<script src="/wp-content/themes/micro-template/assets/js/custom.js"></script>