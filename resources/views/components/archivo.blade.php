<div class="file-upload-form">
    <h2>Subir recursos</h2>
    <p>Archivo comprimido en formato .zip y una imagen</p>
    <form method="POST" action="{{ route('registrar-recurso') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nombre" class="form-control" id="file-name-input" placeholder="Nombre del archivo"
            required>
        <label for="image-upload-input" class="file-upload">
            <p>Arrastra y suelta tu imagen</p>
            <span class="image-upload-name"></span>
        </label>
        <input type="file" name="imagen" accept=".jpg, .jpeg, .png, .svg" id="image-upload-input" class="file-upload-input"
            required>
        <label for="file-upload-input" class="file-upload">
            <p>Arrastra y suelta tu archivo</p>
            <span class="file-upload-name"></span>
        </label>
        <input type="file" name="archivo" accept=".zip" id="file-upload-input" class="file-upload-input" required>


        <select id="category-select" name="category" class="form-select" required>
            <option value="">Seleccionar una categoría</option>
            <option value="1">Fonema</option>
            <option value="2">Ortografía</option>
            <option value="3">Lectura</option>
            <option value="4">Actividad</option>
        </select>

        <div class="btn-upload text-center">
            <button type="submit">Subir archivo</button>
        </div>
    </form>
</div>

<script>
    const imageUploadInput = document.getElementById('image-upload-input');
    imageUploadInput.addEventListener('change', function() {
        const fileName = this.value.split("\\").pop();
        this.parentNode.querySelector(".image-upload-name").innerHTML = fileName;
    });
    const fileUploadInput = document.getElementById('file-upload-input');
    fileUploadInput.addEventListener('change', function() {
        const fileName = this.value.split("\\").pop();
        this.parentNode.querySelector(".file-upload-name").innerHTML = fileName;
    });
</script>