<!doctype html5>
<html lang="en">
    <head>
        <title>Dra.Arenas</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>

            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>    
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>

            

            </script>

            <!--href al archivo CSS-->
            <link rel="stylesheet" type="text/css" href="css/agenda.css">
            <link href="Fullcalendar/main.js" rel="stylesheet">
            <link href="Fullcalendar/main.css" rel="stylesheet">
            <script src="Fullcalendar/main.js"></script>
           
        
    </head>

    <body>
        <header>


            <br>
            <br>
            
            <div id="calendar"></div>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
              var calendarEl = document.getElementById('calendar');
              var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
              });
              calendar.render();
            });




        
        </header>
        <main></main>
        <footer>
            <div class="container-fluid">
              <div class="row p-5 bg-light">
                <div class="col-xs-12 col-md-6 col-lg-3">
                  <p class="h3">Katherine Arenas</p>
                  <p> Tu mejor solucion</p>
                  <a class="h6" href="quienes_somos.html">Leer mas</a>
                </div>    
                <div class="col-xs-12 col-md-6 col-lg-3">
                  
                </div>     
                <div class="col-xs-12 col-md-6 col-lg-3">
                  <p class="h3">Explore</p>
                  <div class="mb-2">
                    <a  class="h6" href="index.html">Sobre mi</a>
                  </div>
                  <div class="mb-2">
                    <a  class="h6" href="pagina.html">Metodología</a>
                  </div>
                  <div class="mb-2">
                    <a  class="h6" href="quienes_somos.html">Testimonios</a>
                  </div>
                </div>     
                <div class="col-xs-12 col-md-6 col-lg-3">
                  <p class="h3">Siguenos</p>
                  <div class="mb-2">
                    <a><img src="img/instagram.png" class="icono" href="index.html"></a>  
                  </div>
                  <div class="mb-2">
                    <a><img src="img/tik-tok.png" class="icono" href="index.html"></a> 
                  </div>
                  <div class="mb-2">
                    <a><img src="img/facebook.png" class="icono" href="index.html"></a> 
                  </div>
                  
                </div>
                  
              </div>
            </div>

        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
