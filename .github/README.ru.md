<p align="center">
  <img src="https://i.imgur.com/uxPvDst.png" width="500px"/>
</p>

Blob Player — это легкий видеоплеер на базе PHP, предназначенный для обхода ограничений CORS путем встраивания видео как блобы.

---

## Языки документации

[![en](https://img.shields.io/badge/lang-en-red.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.md)  
[![pt-br](https://img.shields.io/badge/lang-pt--br-green.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.pt-br.md)  
[![es](https://img.shields.io/badge/lang-es-yellow.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.es.md)  
[![ru](https://img.shields.io/badge/lang-ru-blue.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.ru.md)

Английский | Португальский | Испанский | Русский

---

## Особенности
- Обходит ограничения CORS с использованием объектов блоба.
- Встраивает видео динамически с использованием PHP и JavaScript.
- Использует [FluidPlayer](https://github.com/fluid-player/fluid-player) для улучшенных функций воспроизведения видео, таких как:
  - Настраиваемые элементы управления.
  - Автоматическое скрытие панели управления.
  - Поддержка театрального режима и автозапуска.
  - Опция для скачивания видео.
- Отзывчивый дизайн для легкой интеграции на любом устройстве.

---

## Структура проекта

### `script.js`
Обрабатывает клиентскую логику для загрузки и отображения видео в iframe на базе блоба.

Основные функции:
- Получает обработанный HTML видео из `player.php`.
- Преобразует HTML-ответ в объект блоба.
- Создает iframe для отображения содержимого блоба внутри `video-container`.

### `player.php`
Генерирует HTML для видеоплеера с использованием FluidPlayer, безопасно встраивая URL видео.

### `example.php`
Простой пример того, как применить плеер в вашем проекте.

Основные функции:
- Проверяет предоставленный URL видео.
- Динамически генерирует HTML с настройками FluidPlayer.
- Обеспечивает отзывчивое и удобное воспроизведение.

---

## Как это работает
1. **Передача URL**:
   - URL видео задается в `example.php` и передается в JavaScript как атрибут `data-video-link`.
   - Вы можете добавлять или изменять ссылки динамически в зависимости от потребностей вашего проекта.
2. **Генерация блоба**:
   - `script.js` получает HTML плеера из `player.php`, создает объект блоба и отображает его в iframe.
3. **Интеграция с FluidPlayer**:
   - `player.php` использует FluidPlayer для дополнительных функций воспроизведения и современного, отзывчивого интерфейса видеоплеера.

---

## Требования
- PHP 7.4 или выше.
- Веб-сервер, такой как Apache или Nginx.

---

## Лицензия
Этот проект является open-source и доступен по лицензии MIT.
