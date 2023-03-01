<!DOCTYPE html>
<html lang="es">

<head>
    <x-head />
    <title>Victoria de Oro - Inicio de sesión</title>
</head>

<style>
    body {
        background-image: linear-gradient(to right top, #fdbf00, #fbb20c, #f8a416, #f4981e, #ef8b24, #ed8023, #ea7423, #e76824, #e75922, #e64721, #e53022, #e40425);
    }
</style>

<body>
    <div class="login">
        <div class="form">
            <form method="POST" action="{{ route('inicia-sesion') }}">
                @csrf
                <h2>Inicio de sesión</h2>
                <div class="form-group row">
                    <label for="email">{{ __('Correo electrónico') }}</label>

                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="nombre@correo.com">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="label-pass" for="password">{{ __('Contraseña') }}</label>

                    <div>
                        <div class="password-input-container">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Escribe tu contraseña">
                            <img id="eye-icon" src="{{ asset('images/cerrado.svg') }}"
                                onclick="togglePasswordVisibility()" />
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit"><strong>Ingresar</strong></button>
                <p class="message"><a href="{{ route('restablecer') }}">¿Olvidaste la contraseña?</a></p>
            </form>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var eyeIcon = document.getElementById("eye-icon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.src = "{{ asset('images/abierto.svg') }}";
            } else {
                passwordInput.type = "password";
                eyeIcon.src = "{{ asset('images/cerrado.svg') }}";
            }
        }
    </script>
</body>

</html>
