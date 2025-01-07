<?php
if (isset($_GET['link']) && filter_var($_GET['link'], FILTER_VALIDATE_URL)) {
    $videoLink = $_GET['link'];
} else {
    echo "Error: Video URL not provided or invalid.";
    exit;
}

// Detect if the provided link is an HLS stream (.m3u8)
$isHLS = preg_match('/\.m3u8$/i', parse_url($videoLink, PHP_URL_PATH));

// Define the appropriate MIME type
$videoType = $isHLS ? 'application/x-mpegURL' : 'video/mp4';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Player</title>
    <!-- Include hls.js library -->
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
        }
        .video-container {
            position: relative;
            width: 80%;
            height: 60%;
            background-color: #000;
        }
        #video-id {
            width: 100%;
            height: 100%;
            object-fit: contain; 
            background-color: #000;
        }
    </style>
</head>
<body>
    <!-- Container for the video -->
    <div class="video-container">
        <video id="video-id" controls></video>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('video-id');
            var videoSrc = "<?php echo htmlspecialchars($videoLink, ENT_QUOTES, 'UTF-8'); ?>";

            if (<?php echo $isHLS ? 'true' : 'false'; ?>) {
                if (Hls.isSupported()) {
                    var hls = new Hls({
                        // Optional hls.js configurations
                        maxBufferLength: 30,
                        startLevel: 4,
                        // Add more configurations as needed
                    });
                    hls.loadSource(videoSrc);
                    hls.attachMedia(video);
                    hls.on(Hls.Events.MANIFEST_PARSED, function() {
                        video.play();
                    });
                    hls.on(Hls.Events.ERROR, function(event, data) {
                        if (data.fatal) {
                            switch(data.type) {
                                case Hls.ErrorTypes.NETWORK_ERROR:
                                    console.error("Network error: ", data);
                                    hls.destroy();
                                    break;
                                case Hls.ErrorTypes.MEDIA_ERROR:
                                    console.error("Media error: ", data);
                                    hls.recoverMediaError();
                                    break;
                                default:
                                    hls.destroy();
                                    break;
                            }
                        }
                    });
                } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                    // For browsers with native HLS support (like Safari)
                    video.src = videoSrc;
                    video.addEventListener('loadedmetadata', function() {
                        video.play();
                    });
                } else {
                    console.error("HLS is not supported in this browser.");
                }
            } else {
                // For standard videos (MP4)
                video.src = videoSrc;
                video.addEventListener('loadedmetadata', function() {
                    video.play();
                });
            }
        });
    </script>
</body>
</html>
