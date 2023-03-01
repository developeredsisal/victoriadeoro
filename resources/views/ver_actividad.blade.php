<!DOCTYPE html>
<html lang="es">

<head>
    <x-head />
    <title>Victoria de Oro - Ver actividad</title>
    <style>
    .iframe-container {
      position: relative;
      width: 100%;
      height: 0;
      padding-bottom: 46%;
    }
    
    .iframe-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    @media (max-width: 426px) {
      .iframe-container {
        padding-bottom: 100%;
      }
    }
    @media (min-width: 767px) and (max-width: 1025px) {
      .iframe-container {
        padding-bottom: 60%;
      }
    }
    </style>
</head>

<body>
    <x-navbar />
    <section class="contenedor">
        <x-appbar />

        <div class="contenido">
            <div class="overview">
                <div class="title">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3-2.25L13 13V4h5v16z" fill="white"/></svg>
                </i>
                    <span class="text">{{ $libro[0]->nombre }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="iframe-container">
                <iframe src="{{ URL::to('/') . '/libros/' . $libro[0]->id . '/' . $libro[0]->archivo }}" frameborder="0" allowfullscreen></iframe>
            </div>
    </section>
    <x-foot />
</body>

</html>
