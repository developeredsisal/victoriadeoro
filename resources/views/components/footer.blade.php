<div class="row footer">
    <div class="col-md-3 columnas">
        <div class="logo">
            <img src="{{ asset('images/edisal.svg') }}" alt="" />
        </div>
        <div class="text">
            Síguenos en nuestras redes sociales.
        </div>
        <ul class="redes">
            <li>
                <a href="https://www.facebook.com/profile.php?id=100064770456126" target="_blank"
                    class="fa-brands fa-facebook"></a>

            </li>
            <li>
                <a href="https://wa.me/50373084135" target="_blank" class="fa-brands fa-whatsapp"></a>

            </li>
            <li>
                <a href="https://www.instagram.com/edisal.sv/?hl=es" target="_blank" class="fa-brands fa-instagram"></a>

            </li>
            <li>
                <a href="https://editorialedisal.com/" target="_blank" class="fa-solid fa-globe"></a>
            </li>
        </ul>
    </div>
    <div class="col-md-3 columnas">
        <h5 class="title">Materiales</h5>
        <ul class="nav-list">
            <li><a href="#">Libros de parvularia</a></li>
            <li><a href="#">Educación areas basicas</a></li>
            <li><a href="#">Computación</a></li>
            <li><a href="#">Libros de lectura</a></li>
            <li><a href="#">Ingles</a></li>
        </ul>
    </div>
    <div class="col-md-3 columnas">
        <h5 class="title">Nuestras plataformas</h5>
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="">
                    <li><a href="https://conecta2edisal.com/" target="_blank"> Conecta2</a></li>
                    <li><a href="https://portaledisalonline.com/edisal/usuario/login" target="_blank">Portal Edisal
                            Online</a></li>
                    <li><a href="https://manitastrabajando.com/public/edisal/usuario/login" target="_blank">Manitas
                            Trabajando</a></li>
                </ul>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-12">
                <ul class="">
                    <li><a href="https://timonel.mikinderedisal.com/edisal/usuario/login" target="_blank">Timonel</a>
                    </li>
                    <li><a href="https://pizarra.portaledisalonline.com/ama/usuario/login" target="_blank">Pizarra
                            Virtual</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3 columnas">
        <h5 class="title">Contáctanos</h5>
        <ul class="list-style-one style-two">
            <li>
                <span class="fa-solid fa-phone icon"></span>Llámanos: +503 2260 7525
            </li>
            <li>
                <span class="fa-solid fa-map icon"></span>7 calle Poniente, entre 75 y 77 Avenida Norte #3921, Colonia
                Escalón San Salvador CP, 1101
            </li>
        </ul>
    </div>
    <div class="copyright">
        <p>
            Copyright &copy; <span id="year"></span><a href="https:www.editorialedisal.com" target="_blank"> Grupo
                Editorial Edisal.</a>
            Todos los derechos reservados
        </p>
    </div>
</div>

<script>
    const year = document.getElementById("year");
    year.textContent = new Date().getFullYear();
</script>
