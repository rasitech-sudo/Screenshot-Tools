<?php
$a = $_POST['url'];
$url = "https://api.apiflash.com/v1/urltoimage?access_key=c2b0969708484176814e87896cc231f6&full_page=true&url=$a";
if (!empty($a)) {
    header('Content-type: image/jpeg');
$image = file_get_contents($url);
echo $image;
} else {?>
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
  <form method="post" action="/">
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

<!-- <a href="https://www.youtube.com/channel/UC7hSS_eujjZOEQrjsda76gA/videos" target="_blank" id="ytd-url">My YouTube Channel</a> -->
<!-- partial -->
  
</body>
</html>
<?php }?>
