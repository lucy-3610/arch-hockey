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

<section id="home-upcoming-games-wrapper"class="wrapper">
	<h2>Up Coming Matches</h2>
  
  <div id="output-home-schedule"></div><!-- #output -->

</section><!-- #home-feature-wrapper -->


<script id="homeSchedule">

  {{#games}}
  	<div class="relationship_container">
    <div class="upcoming-game">
      <div class="session-division left"> {{leagueName}} </div>

	    <div class="match left">
	    	<div class="home_team team">
		    	<div class="team_name">{{homeTeamName}} </div>
	    	</div>
	    	<div class="verses">VS</div>
        <div class="away_team team">
		    	<div class="team_name">{{awayTeamName}} </div>
	    	</div>
			</div>
				
    	<div class="game_day left">
      	<i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;
      	{{gameTime}}
      </div>
    	<div class="rink left">
      	<i class="fa fa-location-arrow" aria-hidden="true"></i> &nbsp;
      	{{location}} 
      </div>
		  <div class="view-full-schedule left">
			  <a href="<?php bloginfo('url'); ?>/schedules">View Full Schedules</a>
			</div>
		</div>
  </div>
  {{/games}}

</script>

<script>
	$.getJSON( "http://wmgahl.dailyrazor.net/AHL/admin/api/schedule/current-week/games", function( data_next_games ) {
		var template = $('#homeSchedule').html();
		var data_next_games = { games: data_next_games.games.slice(0,5) };
		var html = Mustache.to_html(template, data_next_games);
		$('#output-home-schedule').html(html)
	}); 
</script>

