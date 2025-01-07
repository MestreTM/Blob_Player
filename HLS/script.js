function loadVideoPlayer() {
    var videoContainer = document.getElementById('video-container');
    
    if (!videoContainer) {
        console.error('Element #video-container not found.');
        return;
    }

    var videoLink = videoContainer.getAttribute('data-video-link');

    if (!videoLink) {
        console.error('Attribute data-video-link is not defined.');
        return;
    }

    fetch('player.php?link=' + encodeURIComponent(videoLink))
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to load player.php: ' + response.statusText);
            }
            return response.text();
        })
        .then(html => {
            var blob = new Blob([html], { type: 'text/html' });
            var blobUrl = URL.createObjectURL(blob);
            var iframe = document.createElement('iframe');
            iframe.src = blobUrl;
            iframe.width = '100%';
            iframe.height = '500px';
            iframe.frameBorder = '0';
            iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
            iframe.allowFullscreen = true;
            videoContainer.appendChild(iframe);
        })
        .catch(error => {
            console.error('Error loading the player:', error);
        });
}

window.addEventListener('DOMContentLoaded', loadVideoPlayer);
