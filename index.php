<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Screenshot Tools - Rasi Tech</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="cover">
  <form method="post" action="/screenshot.php">
    <div class="tb">
      <div class="td"><input type="text" id="url" name="url" placeholder="https://www.google.com" required></div>
      <div class="td" id="s-cover">
        <button type="submit">
          <div id="s-circle"></div>
          <span></span>
        </button>
      </div>
    </div>
  </form>
</div>
<?php
$a = $_POST['url'];
$url = "https://api.apiflash.com/v1/urltoimage?access_key=c2b0969708484176814e87896cc231f6&full_page=true&url=$a";
if (!empty($a)) {
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($url));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($url).';base64,'.$imageData;

// Echo out a sample image
echo '<img src="' . $src . '">';
} else {
    header("location:https://rasi-tech.herokuapp.com/");
}
?>
<!-- <a href="https://www.youtube.com/channel/UC7hSS_eujjZOEQrjsda76gA/videos" target="_blank" id="ytd-url">My YouTube Channel</a> -->
<!-- partial -->
  
</body>
</html>
