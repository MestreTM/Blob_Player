<p align="center">
  <img src="https://i.imgur.com/uxPvDst.png" width="500px"/>
</p>

Blob Player is a lightweight PHP-based video player designed to bypass CORS restrictions by embedding videos as blobs.

**-> Maybe it is not compatible with HLS. test before opening an isue!**

---

## Documentation languages

[![en](https://img.shields.io/badge/lang-en-red.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.md) 
[![pt-br](https://img.shields.io/badge/lang-pt--br-green.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.pt-br.md) 
[![es](https://img.shields.io/badge/lang-es-yellow.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.es.md) 
[![ru](https://img.shields.io/badge/lang-ru-blue.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.ru.md) 

English | Português | Español | Русский

---

## Features
- Bypasses CORS restrictions using blob objects.
- Embeds videos dynamically using PHP and JavaScript.
- Leverages [FluidPlayer](https://github.com/fluid-player/fluid-player) for enhanced video playback features, such as:
  - Customizable controls.
  - Auto-hide control bar.
  - Support for theater mode and autoplay.
  - Option to download videos.
- Responsive design for seamless integration on any device.

---

## Project Structure

### `script.js`
Handles the client-side logic to load and display the video in a blob-based iframe.

Key functionalities:
- Fetches the processed video HTML from `player.php`.
- Converts the HTML response into a blob object.
- Creates an iframe to display the blob content within the `video-container`.

### `player.php`
Generates the HTML for the video player using FluidPlayer, embedding the video URL securely.

### `example.php`
A basic example of how to apply the player in your project.

Key functionalities:
- Validates the provided video URL.
- Dynamically generates HTML with the FluidPlayer configuration.
- Ensures responsive and user-friendly playback.

---

## How It Works
1. **URL Passing**:
   - The video URL is defined in `example.php` and passed to the JavaScript script as a `data-video-link` attribute.
   - You can add links or modify them dynamically according to your project's demands.
2. **Blob Generation**:
   - `script.js` fetches the player HTML from `player.php`, creates a blob object, and displays it in an iframe.
3. **FluidPlayer Integration**:
   - `player.php` utilizes FluidPlayer for enhanced playback functionality and a modern, responsive video player interface.

---

## Requirements
- PHP 7.4 or higher.
- A web server like Apache or Nginx.

---

## License
This project is open-source and available under the MIT License.
