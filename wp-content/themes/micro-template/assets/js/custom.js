var season_id = acfData.season_id;
var league_id = acfData.league_id;
$.getJSON( "http://www.ahl-manager.com/AHL/admin/api/schedule/season/" + season_id + "/league/" + league_id + "/games", function( data ) {
// $.getJSON( "http://www.ahl-manager.com/AHL/admin/api/schedule/season/44/league/127/games", function( data ) {
    var template = $('#scheduleTable').html();
    var html = Mustache.to_html(template, data);
    $('#schedule-output').html(html)
}); 

console.log("http://www.ahl-manager.com/AHL/admin/api/statistics/league/" + season_id + "/players");
$.getJSON( "https://www.ahl-manager.com/AHL/admin/api/statistics/league/" + season_id + "/players", function( data ) {
    var template = $('#leagueStatisticsList').html();
    var html = Mustache.to_html(template, data);
    $('#stats-output').html(html)
}); 

console.log("http://www.ahl-manager.com/AHL/admin/api/statistics/league/" + season_id + "/teams");
$.getJSON( "http://www.ahl-manager.com/AHL/admin/api/statistics/league/" + season_id + "/teams", function( data ) {
    var template = $('#standingsTable').html();
    var html = Mustache.to_html(template, data);
    $('#standings-output').html(html)
}); 