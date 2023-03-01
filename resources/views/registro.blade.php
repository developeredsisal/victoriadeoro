<!DOCTYPE html>
<html lang="es">

<head>
    <x-head />
    <title>Victoria de Oro - Registro</title>
</head>

<body>
    <div class="registro">
        <div class="form-registro">
            <form method="POST" action="{{ route('validar-registro') }}">
                @csrf
                <h2>Formulario de registro</h2>
                <div class="form-group">
                    <label class="label-pass" for="userInput">Nombre completo</label>
                    <input class="form-control" placeholder="Nombres y apellidos" type="text" name="name" id="userInput" autocomplete="disable"
                        required autofocus>
                </div>
                <div class="form-group">
                    <label class="label-pass" for="email">Correo electrónico</label>
                    <input name="email" class="@error('email') is-invalid @enderror form-control" type="email"
                        id="email" required autocomplete="disable" placeholder="nombre@correo.com" value="{{ old('email') }}" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="label-pass" for="passwordInput">Contraseña</label>
                    <input class="form-control" placeholder="Escribe tu contraseña" type="password" name="password" id="passwordInput"
                        autocomplete="disable" required>
                    <span class="invalid-feedback" role="alert">
                        <strong id="password-message"></strong>
                    </span>
                </div>
                <div class="form-group">
                    <label class="label-pass" for="password_confirmation">Confirmar contraseña</label>
                    <input type="password" placeholder="Repite tu contraseña" name="password_confirmation" id="password_confirmation passwordInput"
                        class="@error('password_confirmation') is-invalid @enderror form-control" required>
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-button">
                    <button type="submit" class="btn-register">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const passwordInput = document.querySelector("#passwordInput");
        const passwordMessage = document.querySelector("#password-message");

        passwordInput.addEventListener("input", function() {
            if (passwordInput.value.length < 6) {
                passwordMessage.textContent =
                    "6 caracteres como mínimo";
            } else {
                passwordMessage.textContent = "";
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
