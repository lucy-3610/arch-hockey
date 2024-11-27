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

$league_id = get_field('league_id');

?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php include (TEMPLATEPATH . '/template-parts/standings/header-single-standings.php'); ?>

		<div id="content-wrapper" class="wrapper">
			<div id="content-container" class="container">
				<div id="content-single" class="content-area column ten offset-three">
					
					<div id="output"></div>					
								
				</div><!-- #content-single -->
			</div><!-- #content-container -->
		</div><!-- #content-wrapper -->

</article><!-- #post-## -->

<?php get_footer(); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
<script id="leagueStatisticsList">
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


<script>
	$.getJSON( "http://wmgahl.dailyrazor.net/AHL/admin/api/statistics/league/<?php echo $league_id;?>/teams", function( data ) {
		var template = $('#leagueStatisticsList').html();
		var html = Mustache.to_html(template, data);
		$('#output').html(html)
	}); 
</script>

