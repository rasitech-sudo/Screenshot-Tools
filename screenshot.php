<?php
$a = $_POST['url'];
$url = "https://api.apiflash.com/v1/urltoimage?access_key=c2b0969708484176814e87896cc231f6&full_page=true&url=$a";
if (!empty($a)) {
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($url));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($url).';base64,'.$imageData;

// Echo out a sample image
    header('Content-Type: image/jpeg');
    echo $src;
} else {
    header("location:https://rasi-tech.herokuapp.com/");
}
