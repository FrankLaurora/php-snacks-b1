<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->

<?php 
$matches = [
    [
        "home" => "Los Angeles Lakers",
        "visiting" => "Brooklyn Nets",
        "homeScore" => "97",
        "visitingScore" => "123",
    ],
    [
        "home" => "Cleveland Cavaliers",
        "visiting" => "Chicago Bulls",
        "homeScore" => "101",
        "visitingScore" => "102",
    ],
    [
        "home" => "Miami Heat",
        "visiting" => "Charlotte Hornets",
        "homeScore" => "104",
        "visitingScore" => "103",
    ],
    [
        "home" => "Utah Jazz",
        "visiting" => "New Orleans Pelicans",
        "homeScore" => "127",
        "visitingScore" => "96",
    ],
];

for($i = 0; $i < count($matches); $i++) {
    echo $matches[$i]["home"] . ' - ' . $matches[$i]["visiting"] . ' | ' . $matches[$i]["homeScore"] . ' - ' . $matches[$i]["visitingScore"] . '<br>';
};
?>