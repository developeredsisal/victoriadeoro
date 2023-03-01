<!DOCTYPE html>
<html lang="es">

<head>
    <x-head />
    <title>Victoria de Oro - Actividades</title>
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
                    <span class="text">Actividades</span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="data-title actividad">#</th>
                        <th scope="col" class="data-title actividad">Nombre de Actividad</th>
                        <th scope="col" class="data-title actividad">Categoria</th>
                        <th scope="col" class="data-title actividad">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $c = 1; ?>
                    @foreach ($libros as $l)
                        <tr>
                            <td class="data-list actividad">{{ $c++ }}</td>
                            <td class="data-list actividad">{{ $l->nombre }}</td>
                            <td class="data-list actividad">{{ $l->categoria }}</td>
                            <td class="data-list actividad"><a href="{{ url('envedar/' . $l->id) }}" target="_blank"><i
                                        class="material-symbols-rounded">
                                        visibility
                                    </i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <section class="contenedor-footer">
        <x-footer />
    </section>
    <x-foot />
</body>

</html>
