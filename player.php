<?php
if (isset($_GET['link']) && filter_var($_GET['link'], FILTER_VALIDATE_URL)) {
    $videoLink = $_GET['link'];
} else {
    echo "Error: Video URL not provided or invalid.";
    exit;
}
$videoHtml = '
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FluidPlayer lib -->
        <script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>
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
            .fluid-container {
                position: relative;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }
            #video-id {
                width: 100%;
                height: 100%;
                object-fit: contain; 
        </style>
    </head>
    <body>
        <!-- Container for FluidPlayer -->
        <div class="fluid-container">
            <video id="video-id">
                <source src="' . htmlspecialchars($videoLink) . '" type="video/mp4">
                Your browser does not support the video element.
            </video>
        </div>

        <script>
            var myFP = fluidPlayer("video-id", {
                "layoutControls": {
                    "controlBar": {
                        "autoHideTimeout": 3,
                        "animated": true,
                        "autoHide": true
                    },
                    "htmlOnPauseBlock": {
                        "html": null,
                        "height": null,
                        "width": null
                    },
                    "autoPlay": false,
                    "mute": true,
                    "allowTheatre": true,
                    "playPauseAnimation": true,
                    "playbackRateEnabled": false,
                    "allowDownload": true,
                    "playButtonShowing": true,
                    "fillToContainer": true,
                    "primaryColor": "#7552e5",
                    "posterImage": "",
                    "posterImageSize": "cover",
                    "roundedCorners": 10,
                },
                "vastOptions": {
                    "adList": [],
                    "adCTAText": false,
                    "adCTATextPosition": ""
                }
            });
        </script>
    </body>
    </html>';
echo $videoHtml;
?>
