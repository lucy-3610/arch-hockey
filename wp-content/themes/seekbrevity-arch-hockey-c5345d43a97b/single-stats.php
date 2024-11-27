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

$stat_type = get_field('stat_type');
$season_id = get_field('season_id');
$league_id = get_field('league_id');
?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php include (TEMPLATEPATH . '/template-parts/stats/header-single-stats.php'); ?>
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


<?php if ($stat_type === 'Players') { ?>
	<script id="leagueStatisticsList">
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
		$.getJSON( "http://wmgahl.dailyrazor.net/AHL/admin/api/statistics/league/<?php echo $league_id; ?>/players", function( data ) {
			var template = $('#leagueStatisticsList').html();
			var html = Mustache.to_html(template, data);
			$('#output').html(html)
		}); 
	</script>
		
<?php } if ($stat_type === 'Goalies') { ?>

	<script id="leagueStatisticsList">
		{{#leagueStatistics}}
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
		{{/leagueStatistics}}
	</script>
	
	<script>
		$.getJSON( "http://wmgahl.dailyrazor.net/AHL/admin/api/statistics/season/<?php echo $season_id; ?>/goalies", function( data ) {
			var template = $('#leagueStatisticsList').html();
			var html = Mustache.to_html(template, data);
			$('#output').html(html)
		}); 
	</script>
	

<?php } ?> 		
