<?php

define('YOUTUBE_API_KEY', 'API_KEY_HERE');

function get_youtube_list($api_url = '') {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $array_list_result = json_decode($response);
    if (isset($array_list_result->items)) {
    return $array_list_result;
    } elseif (isset($array_list_result->error)) {
    echo "?channel=CHANNEL ID&max_result=50";
    }
}