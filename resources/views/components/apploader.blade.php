<div id="barra-carga"></div>

<style>
#barra-carga {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px;
  background-color: #E40425;
}
</style>

<script>
  var barraCarga = document.getElementById("barra-carga");

  window.onload = function() {
    barraCarga.style.display = "none";
  };

  var progreso = 0;

  function actualizarBarraCarga() {
    progreso = progreso + 1;

    if (progreso > 100) {
      clearInterval(intervalo);
      return;
    }

    barraCarga.style.width = progreso + "%";
  }

  var intervalo = setInterval(actualizarBarraCarga, 10);
</script>

