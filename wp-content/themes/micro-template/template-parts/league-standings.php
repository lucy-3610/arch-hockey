<?php
/*
Thunder Bolt 2 - Template Parts - Home
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Home page Standings
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<section id="home-current-standings-wrapper" class="wrapper">
    <h2>Current Standings</h2>
    <div class="home-current_standings">
        <div id="output-home-standings">
            <?php
            $standings_url = "http://wmgahl.dailyrazor.net/AHL/admin/api/statistics/current-season/teams";
            $standings_data = json_decode(file_get_contents($standings_url), true);

            // Limit to first 3 leagues
            $league_statistics = array_slice($standings_data['leagueStatistics'], 0, 3);

            foreach ($league_statistics as $league) {
                echo "<h4>" . htmlspecialchars($league['leagueName']) . "</h4>";
                echo "<table class='standings-table league-table'>";
                echo "<tr>
                    <th class='team-rank stat'></th>
                    <th class='team descript'>Team</th>
                    <th class='team-games-played stat'>GP</th>
                    <th class='team-points stat'>P</th>
                    <th class='team-wins stat'>W</th>
                    <th class='team-losses stat'>L</th>
                    <th class='team-overtime-losses stat'>OTL</th>
                    <th class='team-goals stat'>GF</th>
                    <th class='team-goals-against stat'>GA</th>
                </tr>";

                foreach ($league['teamStatistics'] as $team) {
                    echo "<tr>
                        <td class='team-rank stat'>" . htmlspecialchars($team['rank']) . "</td>
                        <td class='team descript'>" . htmlspecialchars($team['teamName']) . "</td>
                        <td class='team-games-played stat'>" . htmlspecialchars($team['GP']) . "</td>
                        <td class='team-points stat'>" . htmlspecialchars($team['Pts']) . "</td>
                        <td class='team-wins stat'>" . htmlspecialchars($team['W']) . "</td>
                        <td class='team-losses stat'>" . htmlspecialchars($team['L']) . "</td>
                        <td class='team-overtime-losses stat'>" . htmlspecialchars($team['OTL']) . "</td>
                        <td class='team-goals stat'>" . htmlspecialchars($team['GF']) . "</td>
                        <td class='team-goals-against stat'>" . htmlspecialchars($team['GA']) . "</td>
                    </tr>";
                }
                echo "</table>";
            }
            ?>
        </div>
    </div>
</section>