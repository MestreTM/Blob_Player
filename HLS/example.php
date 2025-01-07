<?php
// example.php

// Video URL (can be passed dynamically or as needed)
$videoLink = "https://bitdash-a.akamaihd.net/content/sintel/hls/playlist.m3u8"; // Replace with your actual link
// $videoLink = "https://www.w3schools.com/html/mov_bbb.mp4"; // To test with MP4
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed Video Player with hls.js</title>
    <!-- Include hls.js library -->
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #000;
        }
        .video-container {
            position: relative;
            width: 80%;
            max-width: 800px;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            margin-top: 20px;
        }
        #video-id {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain; 
            background-color: #000;
        }
    </style>
</head>
<body>
    <h1 style="color: #fff;">Embed Video Player with hls.js</h1>

    <div class="video-container">
        <video id="video-id" controls></video>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('video-id');
            var videoSrc = "<?php echo htmlspecialchars($videoLink, ENT_QUOTES, 'UTF-8'); ?>";

            // Function to initialize hls.js
            function initializePlayer() {
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
            }

            // Detect if the URL is HLS (.m3u8)
            var isHLS = /.+\.m3u8$/i.test(videoSrc);

            if (isHLS) {
                initializePlayer();
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
