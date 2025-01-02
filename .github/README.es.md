<p align="center">
  <img src="https://i.imgur.com/uxPvDst.png" width="500px"/>
</p>

Blob Player es un reproductor de video ligero basado en PHP, diseñado para eludir restricciones de CORS mediante la incrustación de videos como blobs.

---

## Idiomas de la Documentación

[![en](https://img.shields.io/badge/lang-en-red.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.md)  
[![pt-br](https://img.shields.io/badge/lang-pt--br-green.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.pt-br.md)  
[![es](https://img.shields.io/badge/lang-es-yellow.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.es.md)  
[![ru](https://img.shields.io/badge/lang-ru-blue.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.ru.md)

Inglés | Portugués | Español | Ruso

---

## Características
- Elude las restricciones de CORS utilizando objetos blob.
- Incrusta videos dinámicamente usando PHP y JavaScript.
- Utiliza [FluidPlayer](https://github.com/fluid-player/fluid-player) para funciones avanzadas de reproducción de video, como:
  - Controles personalizables.
  - Barra de control con ocultación automática.
  - Soporte para modo teatro y autoplay.
  - Opción para descargar videos.
- Diseño responsivo para una integración perfecta en cualquier dispositivo.

---

## Estructura del Proyecto

### `script.js`
Maneja la lógica del lado del cliente para cargar y mostrar el video en un iframe basado en blobs.

Funcionalidades clave:
- Obtiene el HTML del video procesado desde `player.php`.
- Convierte la respuesta HTML en un objeto blob.
- Crea un iframe para mostrar el contenido blob dentro del `video-container`.

### `player.php`
Genera el HTML para el reproductor de video utilizando FluidPlayer, incrustando la URL del video de manera segura.

### `example.php`
Un ejemplo básico de cómo aplicar el reproductor en tu proyecto.

Funcionalidades clave:
- Valida la URL del video proporcionada.
- Genera dinámicamente el HTML con la configuración de FluidPlayer.
- Asegura una reproducción responsiva y amigable para el usuario.

---

## Cómo Funciona
1. **Paso de URL**:
   - La URL del video se define en `example.php` y se pasa al script de JavaScript como un atributo `data-video-link`.
   - Puedes agregar enlaces o modificarlos dinámicamente según las necesidades de tu proyecto.
2. **Generación de Blob**:
   - `script.js` obtiene el HTML del reproductor desde `player.php`, crea un objeto blob y lo muestra en un iframe.
3. **Integración con FluidPlayer**:
   - `player.php` utiliza FluidPlayer para características avanzadas de reproducción y una interfaz moderna y responsiva de reproductor de video.

---

## Requisitos
- PHP 7.4 o superior.
- Un servidor web como Apache o Nginx.

---

## Licencia
Este proyecto es open-source y está disponible bajo la Licencia MIT.
