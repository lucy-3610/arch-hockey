<section id="home-current-standings-wrapper" class="wrapper">
    <h2 class="mb-3">Current Standings</h2>
    <div class="home-current_standings">
        <div id="output-home-standings"></div>
    </div>

    <div id="home-output-standings"></div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
    <script id="leagueStatisticsList">
    {{#leagueStatistics}}
        <h4 class="mb-2">{{leagueName}}</h4>
        <table class="standings-table league-table">
            <thead class="bg-theme-secondary color-white">
                <th class="team-rank stat"></th>
                <th class="team descript">Team</th>
                <th class="team-games-played stat">GP</th>
                <th class="team-points stat">P</th>
                <th class="team-wins stat">W</th>
                <th class="team-losses stat">L</th>
                <th class="team-overtime-losses stat">OTL</th>
                <th class="team-goals stat">GF</th>
                <th class="team-goals-against stat">GA</th>
            </thead>
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
    {{/leagueStatistics}}
    </script>

    <script>
        $.getJSON("http://www.ahl-manager.com/AHL/admin/api/statistics/current-season/teams", function(data_home_standings) {
            var template = $('#leagueStatisticsList').html();
            var data_home_standings = {
                leagueStatistics: data_home_standings.leagueStatistics.slice(0, 3)
            };
            var html = Mustache.to_html(template, data_home_standings);
            $('#output-home-standings').html(html)
        });
    </script>
</section>