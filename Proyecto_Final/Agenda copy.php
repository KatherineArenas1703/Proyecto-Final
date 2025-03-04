<html lang='en'>
  <head>
    <meta charset='utf-8' />

    <link href='core/main.css' rel='stylesheet' />
    <link href='daygrid/main.css' rel='stylesheet' />

    <script src='core/main.js'></script>
    <script src='daygrid/main.js'></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid' ]
        });

        calendar.render();
      });

    </script>
  </head>
  <body>

    <div id="calendar"></div>

  </body>
</html>
