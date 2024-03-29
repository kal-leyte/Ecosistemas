<?php $nombrePagina = 'Ecosistemas de México'; ?>
<?php
include 'includes/header.php';
?>

<!-- barra de navegacion -->
<?php
include 'includes/navegacion.php';
?>

<!-- fin de barra de navegacion -->

<!-- inicio header -->
<div class="bgimagen-textura">
  <div class="container animated wow zoomIn mt-5">
    <div class="titulo-bgimagen my-5">
      <h1>Bienvenidos</h1>
      <p>Bienvenidos a esta pagina en la que se tiene contenido de los principales ecosistemas de México como lo es su flora, fauna, ubicacion, imagenes de cada ecosistema, etc. Ademas de contar con informacion sobre asociaciones que protegen el ambiente.</p>
    </div>
  </div>
</div>
<!-- fin header -->

<!-- CONTENIDO PRINCIPAL -->

<div class="container grandes-ecosistemas">
  <div class="">
    <h2 class="animated wow zoomIn">Descarga aquí, las fichas tecnicas de los 10 ecosistemas de México</h2>
    <!-- inicio grid -->

    <div class="row">
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient2 c descargas">
          <h3><a href="fichas-tecnicas/arrecifes.pdf" download="Arrecifes de coral" style="color: #FFFFFF">Arrecifes de coral</a></h3>
        </div>
      </div>
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient2 c descargas">
          <h3><a href="fichas-tecnicas/bosque-algas.pdf" download="Bosques de algas gigantes">Bosques de algas gigantes</a></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient3 c descargas">
          <h3><a href="fichas-tecnicas/manglares.pdf" download="Manglares">manglares</a></h3>
        </div>
      </div>
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient4 c descargas">
          <h3><a href="fichas-tecnicas/pastizales.pdf" download="Pastizales">pastizales</a></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient5 c descargas">
          <h3><a href="fichas-tecnicas/selva-seca.pdf" download="Selva seca">Selva seca</a></h3>
        </div>
      </div>
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient6 c descargas">
          <h3><a href="fichas-tecnicas/selva-humeda.pdf" download="Selva Humeda" style="color: #FFFFFF">Selva humeda</a></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient7 c descargas">
          <h3><a href="fichas-tecnicas/bosque-templado.pdf" download="Bosque templado">Bosques templados</a></h3>
        </div>
      </div>
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient8 c descargas">
          <h3><a href="fichas-tecnicas/bosque-nublado.pdf" download="Bosques nublados">Bosques nublados</a></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient9 c descargas">
          <h3><a href="fichas-tecnicas/lagunas-costeras.pdf" download="Lagunas costeras">Lagunas costeras</a></h3>
        </div>
      </div>
      <div class="col-md-6  mt-4">
        <div class="roundshadow gradient10 c descargas">
          <h3><a href="fichas-tecnicas/matorrales.pdf" download="Matorrales">matorrales</a></h3>
        </div>
      </div>
    </div>
    <!-- fin grid -->
  </div>
</div>
<!-- FIN DEL CONTENIDO PRINCIPAL -->

<!-- inicio de asociaciones protectoras -->
<?php
include 'includes/asociaciones.php';
?>
<!-- fin de asociaciones protectoras -->

<!-- INICIO GRAFICA -->
<div class="container graficarespo animated wow bounceIn slow" data-wow-delay="900ms">
  <div class="graficaG pt-3 mt-3 pb-3">
    <h2>Variación de flora, fauna y Temperatura por ecosistema</h2>
  </div>
  <!-- GRAFICA de ecosistemas -->

  <script>
    $(document).ready(function() {
      new Chart(document.getElementById("graficaGeneral"), {
        type: 'line',
        data: {
          labels: ["Arrecifes de coral", "Bosque templado", "Bosque de algas", "Bosque nublado", "Lagunas costeras", "Manglares", "Matorrales", "Pastizales", "Selva húmeda", "Selva seca"],
          datasets: [{
            data: [60, 70, 40, 25, 14, 67, 33, 20, 50, 60],
            label: "Flora",
            borderColor: "#02E301",
            fill: false,
            backgroundColor: "#02E301",
            lineTension: 0,
            pointRadius: 5
          }, {
            data: [28, 20, 30, 14, 18, 71, 24, 15, 37, 30],
            label: "Fauna",
            borderColor: "#2d2d2d",
            fill: false,
            backgroundColor: "#2d2d2d",
            lineTension: 0,
            pointRadius: 5
          }, {
            data: [30, 12, 20, 23, 50, 34, 26, 20, 17, 30],
            label: "Temperatura",
            borderColor: "#ff8000",
            fill: false,
            backgroundColor: "#ff8000",
            lineTension: 0,
            pointRadius: 5
          }, ]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            position: "top",
            text: 'Variación de clima, flora y fauna por ecosistema',
            fontSize: 15,
          },

          scales: {
            yAxes: [{
              ticks: {
                max: 100,
                min: 0,
                stepSize: 5
              }
            }]
          },
        }
      });

    });
  </script>

  <div class="mb-4">
    <canvas id="graficaGeneral"></canvas>
  </div>
</div>
<!-- FIN GRAFICA -->

<!-- inicio footer -->
<?php
include 'includes/footer.php';
?>
<!-- fin footer -->

<!-- archivos js -->
<?php
include 'includes/scripts.php';
?>
<!-- fin archivos js -->
</body>

</html>