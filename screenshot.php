<?php
$a = $_POST['url'];
$url = "https://api.apiflash.com/v1/urltoimage?access_key=c2b0969708484176814e87896cc231f6&full_page=true&url=$a";
if (!empty($a)) {
header("location: $url");
} else {
    header("location:https://rasi-tech.herokuapp.com/");
}
