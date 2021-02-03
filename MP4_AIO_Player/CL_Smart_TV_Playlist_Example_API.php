<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ Youtube MP4 Stream Extractor                    │
 │ Version   │ v2.2.3-DEV Multi                                │
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
 │ Created   │ 31 January 2021                                 │
 │ Modified  │ 00:0000:0000                                    │
 └─────────────────────────────────────────────────────────────┘
*/

// NOTE: THIS API CONTAIN THIRD PARTY FUNCTIONS
// HOSTED APIS https://paidcodes.albdroid.al/Youtube_APIS/MP4
// JSON API https://paidcodes.albdroid.al/Youtube_APIS/MP4/get_stream.php

// RULES AL: Ky API Eshte Vetem Per Demostrim, Nese Ju e Keqperdorni Do Te Humbisni Komunikimin Me Serverat Tane
// RULES EN: This API is For Demonstration Only, If You Misuse It You Will Lose Communication With Our Servers

/*
 Output: MP4
 Get Types;
 by Short url => ?url=https://youtu.be/WhVehAdpUS0
 by Standart url => ?url=https://www.youtube.com/watch?v=WhVehAdpUS0
 by Uploader referrer Name => https://www.youtube.com/watch?v=WhVehAdpUS0&ab_channel=OlsionBakiaj
 by Video id => ?url=WhVehAdpUS0
*/

error_reporting(0);
date_default_timezone_set("Europe/Tirane");

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

$API_HOST = "https://paidcodes.albdroid.al/Youtube_APIS/MP4/smart";
header("Location: $API_HOST");
?>
