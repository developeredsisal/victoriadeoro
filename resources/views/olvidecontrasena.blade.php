<!DOCTYPE html>
<html lang="es">

<head>
    @component('components.head')
    @endcomponent
    <title>Victoria de Oro - Olvide la contraseña</title>
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Restablecimiento de contraseña</h3>
                        <p>Para restablecer tu contraseña, ingresa la dirección de correo electrónico que usas para iniciar sesión</p>
                        <form>
                            <input class="form-control" type="email" name="username" placeholder="Correo electrónico" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn btn-forget">Enviar enlace de reinicio</button>
                            </div>
                        </form>
                        <div class="form-button">
                            <a href="{{route('iniciosesion')}}">Regresar a inicio</a>
                        </div>
                    </div>
                    <div class="form-sent">
                        <div class="website-logo-inside">
                            <a href="">
                                <div class="logo">
                                    <img class="logo-size" src="" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Enlace de contraseña enviado</h3>
                        <p>Por favor revise su bandeja de entrada: iofrm@iofrmtemplate.io</p>
                        <div class="form-button">
                            <a href="{{route('iniciosesion')}}">Regresar a inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.footer')
    @endcomponent
</body>
</html>