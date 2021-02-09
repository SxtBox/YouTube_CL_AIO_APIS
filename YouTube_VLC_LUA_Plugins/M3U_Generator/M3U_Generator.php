<?php
// ?channel=UCHfi2AdmAeHdRlOIXbf_KZA&max_result=50
require_once "config.php";

$youtube_list_array = array();
if (array_key_exists('channel', $_GET) && array_key_exists('max_result', $_GET)) {
$channel = $_GET['channel'];

$url = "https://www.googleapis.com/youtube/v3/search?channelId=$channel&order=date&part=snippet&type=video&maxResults=". $_GET['max_result'] ."&key=". YOUTUBE_API_KEY;
$youtube_list_array = get_youtube_list($url);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>YouTube M3U Generator</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="icon" href="favicon.ico"/>
<style>
    div#loadmore {
        background: #111;
        width: 75px;
        padding: 15px;
        border-radius: 6px;
        color: #0F0;
		border: 1px dotted lime;
        cursor: pointer;
        text-align: center;
        margin: 0 auto;
    }
</style>

<style>
.button {
    background-color: #000;
    border: none;
    color: lime;
    padding: 10px 27px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button:hover {
    background-color: #000;
    color: lime;
}

input {
width: 275px;
height: 40px;
font-size: 18pt;
color: #0F0;
border: 1px solid #0F0;
border-radius: 4px;
background-color: #000;
}

input[type="checkbox"] { 
width: 28pt; 
height: 28pt;
}

input[type="radio"] { 
width: 28pt; 
height: 28pt;
}

input[type="button"] { 
width: 75pt; 
height: 25pt;
}

body,td,th {
	color: #0F0;
}
body {
	background-color: #000;
	color: #0F0;
}

    /* Start Butonat */
}.LineBigBtn{float:left;width:730px;margin:0 0 2px 0;padding:0px 20px 0px 0px;height:45px;}.button{
	float: left;
	text-align: center;
	cursor: pointer;
	font-family: arial,sans-serif;
	color: #0F0;
	background: black;
	background: -moz-linear-gradient(top,black 0%,black 100%);
	background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,black),color-stop(100%,black));
	background: -webkit-linear-gradient(top,black 0%,black 100%);
	background: -o-linear-gradient(top,black 0%,black 100%);
	background: -ms-linear-gradient(top,black 0%,black 100%);

filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0F0',endColorstr='#0F0',GradientType=0);
background: linear-gradient(top,#000 0%,aqua 100%);
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-moz-box-shadow: 0 1px 3px 0px rgba(0,0,0,0.4);
	-webkit-box-shadow: 0 1px 3px 0px rgba(0,0,0,0.4);
	box-shadow: 0 1px 3px 0px rgba(0,0,0,0.4);
	border: 1px #00FF00 solid;

}.button:hover{
	border: 1px dotted #00FF00;
	background-color: #000;
	color: #0F0;
    /* End Butonat */

}#emri_programit{
	padding:20px 0 10px 0;width:100%;margin:0;font-size:20px;line-height:2px;text-align:center;
}#title_bar{float:left;width:100%;height:100%margin:0;padding:0;padding:0px 0 0px 0;
</style>
<style type="text/css">
body,td,th {
	color: #0F0;
}
body {
	background-color: #000;
}
a:link {
	color: #0FC;
}
a:visited {
	color: #3F6;
}
a:hover {
	color: #09F;
}
a:active {
	color: #009;
}
</style>
</head>

<body>
<form method="get">
<p>
<input type="text" name="channel" placeholder="Enter Channel ID" value="<?php if(array_key_exists('channel', $_GET)) echo $_GET['channel']; ?>" required>
</p>

<p>
<input type="number" name="max_result" placeholder="Max Results" min="1" max="50" value="<?php if(array_key_exists('max_result', $_GET)) echo $_GET['max_result']; ?>" required>
</p>

<p>
<input type="submit" value="Generate"></p>
</form>

<?php
if (!empty($youtube_list_array)) {
echo '<ul class="video-list">'."\n";
echo "#EXTM3U Albdroid TV Streaming #YouTube M3U Generator"."\n</li>";
foreach ($youtube_list_array->items as $item) {
echo "<li>\r#EXTINF:0,". $item->snippet->title ."\n</li>";
echo "<li>https://www.youtube.com/watch?v=" .$item->id->videoId ."\n</li>";
}
echo '</ul>'."\n";
if (isset($youtube_list_array->nextPageToken)) {
echo '<input type="hidden" class="nextpagetoken" value="'. $youtube_list_array->nextPageToken .'" />';
echo '<div id="loadmore">Load More</div>';
}
}
?>

<script>
var httpRequest, nextPageToken;
    document.getElementById("loadmore").addEventListener('click', makeRequest);
    function makeRequest() {
        httpRequest = new XMLHttpRequest();
        nextPageToken = document.querySelector('.nextpagetoken').value;
        if (!httpRequest) {
            alert('Giving up :( Cannot create an XMLHTTP instance');
            return false;
        }

        httpRequest.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                var list = JSON.parse(this.responseText);
                for(var i in list) {
                    if(list[i].title != undefined && list[i].id != undefined) {
                        var newElement = document.createElement('li');
                        newElement.innerHTML = '<li>#EXTINF:0,'+ list[i].title +'\n</li>https://www.youtube.com/watch?v='+ list[i].id +'</li>';
                        document.querySelector('.video-list').appendChild(newElement);
                    }
                }

                if(list[list.length-1].nextPageToken != undefined) {
                    document.querySelector('.nextpagetoken').value = list[list.length-1].nextPageToken;
                } else {
                    var loadmore = document.getElementById("loadmore");
                    loadmore.parentNode.removeChild(loadmore);
                }
            }
        };

        httpRequest.open('GET', 'ajax.php?channel=<?php echo $_GET['channel']; ?>&max_result=<?php echo $_GET['max_result']; ?>&nextPageToken='+nextPageToken, true);
        httpRequest.send();
    }

</script>
</body>
</html>