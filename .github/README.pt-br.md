<p align="center">
  <img src="https://i.imgur.com/uxPvDst.png" width="500px"/>
</p>

Blob Player é um reprodutor de vídeo leve baseado em PHP, projetado para contornar restrições de CORS ao embutir vídeos como blobs.

---

## Idiomas da Documentação

[![en](https://img.shields.io/badge/lang-en-red.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.md)  
[![pt-br](https://img.shields.io/badge/lang-pt--br-green.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.pt-br.md)  
[![es](https://img.shields.io/badge/lang-es-yellow.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.es.md)  
[![ru](https://img.shields.io/badge/lang-ru-blue.svg)](https://github.com/MestreTM/Blob_Player/blob/main/.github/README.ru.md)

Inglês | Português | Espanhol | Russo

---

## Funcionalidades
- Contorna as restrições de CORS utilizando objetos blob.
- Embute vídeos dinamicamente usando PHP e JavaScript.
- Utiliza [FluidPlayer](https://github.com/fluid-player/fluid-player) para recursos avançados de reprodução de vídeo, como:
  - Controles personalizáveis.
  - Barra de controle com ocultação automática.
  - Suporte para modo de cinema e autoplay.
  - Opção de download de vídeos.
- Design responsivo para integração perfeita em qualquer dispositivo.

---

## Estrutura do Projeto

### `script.js`
Responsável pela lógica do lado do cliente para carregar e exibir o vídeo em um iframe baseado em blob.

Funcionalidades principais:
- Busca o HTML processado do vídeo de `player.php`.
- Converte a resposta HTML em um objeto blob.
- Cria um iframe para exibir o conteúdo do blob dentro do `video-container`.

### `player.php`
Gera o HTML para o reprodutor de vídeo utilizando o FluidPlayer, embutindo o URL do vídeo de maneira segura.

### `example.php`
Um exemplo básico de como aplicar o reprodutor no seu projeto.

Funcionalidades principais:
- Valida o URL do vídeo fornecido.
- Gera dinamicamente o HTML com a configuração do FluidPlayer.
- Garante uma reprodução responsiva e amigável ao usuário.

---

## Como Funciona
1. **Passagem de URL**:
   - O URL do vídeo é definido em `example.php` e passado para o script JavaScript como um atributo `data-video-link`.
   - Você pode adicionar links ou modificá-los dinamicamente conforme as necessidades do seu projeto.
2. **Geração de Blob**:
   - O `script.js` busca o HTML do reprodutor de `player.php`, cria um objeto blob e exibe-o em um iframe.
3. **Integração com o FluidPlayer**:
   - O `player.php` utiliza o FluidPlayer para funcionalidades avançadas de reprodução e uma interface moderna e responsiva de reprodutor de vídeo.

---

## Requisitos
- PHP 7.4 ou superior.
- Um servidor web como Apache ou Nginx.

---

## Licença
Este projeto é open-source e disponível sob a Licença MIT.
