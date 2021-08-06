<?php
$a = $_POST['url'];
$url = "https://api.apiflash.com/v1/urltoimage?access_key=c2b0969708484176814e87896cc231f6&full_page=true&url=$a";
if (!empty($a)) {
    header('Content-type: image/jpeg');
$image = file_get_contents($url);
echo $image;
} else {
    header("location:https://rasi-tech.herokuapp.com/");
}
