<?php
// Video URL (can be passed dynamically or as needed)
$videoLink = "https://example.com/my_video.mp4"; // Change to real link 
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vídeo em Iframe</title>
</head>
<body>
    <h1>Blob Embed Video</h1>

    <div id="video-container" data-video-link="<?php echo htmlspecialchars($videoLink, ENT_QUOTES, 'UTF-8'); ?>">
        <!-- The iframe will be inserted here -->
    </div>

    <!-- Includes the external script after defining the data attribute -->
    <script src="script.js"></script>
</body>
</html>
