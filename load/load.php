<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(window).on('load', function () {
        // Esconde o spinner apenas depois que a página é completamente carregada
        $('#preloader').fadeOut('slow');
      });
    </script>
    <style>
      .loading {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .loading__circle {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-color: #FF2D00;
        margin: 0 10px;
        animation: loading 2s ease-in-out infinite;
      }
      .loading__circle:nth-child(2) {
        animation-delay: 0.2s;
      }
      .loading__circle:nth-child(3) {
        animation-delay: 0.4s;
      }
      @keyframes loading {
        0% {
          transform: scale(0);
          opacity: 0.5;
        }
        50% {
          transform: scale(1);
          opacity: 1;
        }
        100% {
          transform: scale(0);
          opacity: 0.5;
        }
      }
      #preloader {
        position: fixed;
        left: 0;
        top: 0;
        z-index: 99999;
        width: 100%;
        height: 100%;
        overflow: visible;
 right: 0;
  bottom: 0;
  margin: auto;
  width: 100px;
  height: 100px;
  display: flex;
  justify-content: center;
  align-items: center;
}
      }
    </style>
  </head>
  <body>
    <div id="preloader">
      <div class="loading">
        <div class="loading__circle"></div>
        <div class="loading__circle"></div>
        <div class="loading__circle"></div>
      </div>
    </div>
  </body>
</html>


