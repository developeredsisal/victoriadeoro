<!DOCTYPE html>
<html lang="es">

<head>
    <x-head />
    <title>Victoria de Oro - Restablecer contraseña</title>
</head>

<body>
    <div class="restablecer">
        <div class="form">
            <form method="POST" action="">
                @csrf
                <h2>Restablecimiento de contraseña</h2>
                <input name="email" class="@error('email') is-invalid @enderror" type="email" for="email"
                    id="email" required placeholder="Correo electrónico" autocomplete="email"
                    value="{{ old('email') }}" />

                <button type="submit"><strong>Enviar enlace</strong></button>
                <p class="message"><a href="{{ route('iniciosesion') }}">Volver a inicio</a></p>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <p class="invalido">{{ $message }}</p>
                    </span>
                @enderror
            </form>
        </div>
    </div>
</body>

</html>
