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

// RULES AL: Ky API Eshte i C'Aktivizuar Per Publikun
// RULES EN: This API is Disabled For Public Access

error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

$API_HOST = "https://paidcodes.albdroid.al/Youtube_APIS/Native/";
$PHP_FILE =  "Xtream.php?id=";
$YT_ID =  "v3jpVUOi9XU";

$API_CALL = $API_HOST. $PHP_FILE . $YT_ID;
header("Location: $API_CALL");
?>