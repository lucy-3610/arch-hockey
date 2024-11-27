<?php
/*
Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The template for displaying all single posts.
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$season_id = get_field('season_id');
$league_id = get_field('league_id');
?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php include (TEMPLATEPATH . '/template-parts/schedules/header-single-schedules.php'); ?>
		<div id="content-wrapper" class="wrapper">
			<div id="content-container" class="container">
				<div id="content-single" class="content-area column twelve offset-two">
					
					<div id="output"></div>
													
				</div><!-- #content-single -->
			</div><!-- #content-container -->
		</div><!-- #content-wrapper -->

</article><!-- #post-## -->

<?php get_footer(); ?>


<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>

<script id="leagueStatisticsList">
	<table class="schedule-table league-table">
		<tr>
      <th class="homeTeamName">Home</th>
      <th class="timeLocation">Time & Location</th>
      <th class="homeTeamName">Away</th>
    </tr>
    {{#games}}
    	<tr>
	    	<td class="homeTeamName">{{homeTeamName}} : {{homeTeamScore}}</td>
	    	<td class="timeLocation">{{gameTime}} <br> {{location}}</td>
	    	<td class="awayTeamName">{{awayTeamScore}} : {{awayTeamName}}</td>
	    </tr>
    {{/games}}
	</table>
</script>

<script>
	$.getJSON( "http://wmgahl.dailyrazor.net/AHL/admin/api/schedule/season/<?php echo $season_id; ?>/league/<?php echo $league_id; ?>/games", function( data ) {
		var template = $('#leagueStatisticsList').html();
		var html = Mustache.to_html(template, data);
		$('#output').html(html)
	}); 
</script>