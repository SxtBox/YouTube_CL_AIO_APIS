<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ Youtube HLS Stream Extractor                    │
 │ Version   │ v2.2.2-DEV Multi                                │
 │ Provider  │ https://www.youtube.com                         │
 │ Support   │ M3U8/VLC/KODI/SMART TV/XTream Codes/Web Players │
 │ Licence   │ MIT                                             │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 25 December 2020                                │
 │ Modified  │ 00:0000:0000                                    │
 └─────────────────────────────────────────────────────────────┘
*/

// NOTE THIS IS MY OLD YT CODE BUT IS REFACTORED WITH NEW FUNCTIONS
// HOSTED APIS https://paidcodes.albdroid.al/Youtube_APIS/Native/

// RULES AL: Ky API Eshte Vetem Per Demostrim, Nese Ju e Keqperdorni Do Te Humbisni Komunikimin Me Serverat Tane
// RULES EN: This API is For Demonstration Only, If You Misuse It You Will Lose Communication With Our Servers

error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

$API_HOST = "https://paidcodes.albdroid.al/Youtube_APIS/Native/";
$PHP_FILE =  "M3U.php?id=";
$YT_ID =  "v3jpVUOi9XU";

$API_CALL = $API_HOST. $PHP_FILE . $YT_ID;

$DATA = file_get_contents($API_CALL);
$GET_URL = file_get_contents($API_CALL.$_SERVER['QUERY_STRING']);

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

echo $DATA;
?>