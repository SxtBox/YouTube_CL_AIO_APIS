<?php
// ajax.php?channel=UCHfi2AdmAeHdRlOIXbf_KZA&max_result=50
error_reporting(0);

require_once "config.php";

$url = "https://www.googleapis.com/youtube/v3/search?channelId=". $_GET['channel'] ."&order=date&part=snippet&type=video&maxResults=". $_GET['max_result'] ."&pageToken=". $_GET['nextPageToken'] ."&key=". YOUTUBE_API_KEY;

$youtube_list_array = get_youtube_list($url);

$array_list_result = array();
if (!empty($youtube_list_array)) {
    foreach ($youtube_list_array->items as $item) {
        array_push($array_list_result, ['title' => $item->snippet->title, 'id' => $item->id->videoId]);
    }
    if (isset($youtube_list_array->nextPageToken)) {
        array_push($array_list_result,['nextPageToken' => $youtube_list_array->nextPageToken]);
    }
}

echo json_encode($array_list_result);