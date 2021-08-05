<?php
$a = $_POST['url'];
$url = "https://api.apiflash.com/v1/urltoimage?access_key=c2b0969708484176814e87896cc231f6&full_page=true&url=$a";
if (!empty($a)) {
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}


$img = '/' . random_string(50) . '.png';
file_put_contents($img, file_get_contents($url));
header("location: $img");
} else {
    header("location:https://rasi-tech.herokuapp.com/");
}
