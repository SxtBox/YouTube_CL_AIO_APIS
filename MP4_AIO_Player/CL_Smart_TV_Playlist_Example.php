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

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}

$ROOT_URL_MAIN = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . "/";
$Smart_TV_Builder = $ROOT_URL_MAIN . "api.php" . "?url=";
$type = "&type="."xtream";
$multi_smart_tv_list = [
// JUST ADD ID's or LINKS AND TITLES HERE AND UPLOAD AS DIRECT LINK FROM YOUR SERVER IN SMART TV OR VLC
// [URL OR ID]   [TITLE]
["R_BuxMwkrUs", "Gjiko ft. Skerdi - Si Bugatti"],
["nSmabhousH4", "Blerina Balili ft. Ergys Hyka & Kleandro Harrunaj - Dasma jone"],
["WhVehAdpUS0", "HardBass 2012 (Live Registration)"],
["t4-Xz_Lt2p4", "Silva Gunbardhi ft. Mandi ft. Dafi - Te ka lali shpirt"],
["wjvSYDlgurI", "Blerina Balili ft. Ergys Hyka & Kleandro Harrunaj - Kolazh Dasme"],
["JWYdkcJPIhg", "Blerina Balili & Kleandro Harrunaj - Do shijoj rinin"],
["NJ8cGjzdAKo", "Ilia Basho - Po te pres me pranveren"],
];

header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
echo "#EXTM3U Albdroid TV Streaming #YouTube Streaming API (2.2.3-DEV Multi) THIS IS EXAMPLE PLAYLIST"."\n";
foreach($multi_smart_tv_list as list($stream_url, $stream_title)) {

	echo "\r#EXTINF:0,". $stream_title."\n";
	echo $Smart_TV_Builder.$stream_url.$type ."\n";
}
?>
