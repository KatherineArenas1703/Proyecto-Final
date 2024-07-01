<html lang='en'>
  <head>
    <meta charset='utf-8' />

    <link href="lib/main.css" rel="stylesheet" />
    <link href="lib/main.min.css" rel="stylesheet" />

    <script src="lib/main.js"></script>
    <script src="lib/main.min.js"></script>

    <script>

      document.addEventListener("DOMContentLoaded", function() {
        var calendarEl = document.getElementById("calendar");

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ "dayGrid" ]
        });

        calendar.render();
      });

    </script>
  </head>
  <body>

    <div id="calendar"></div>

  </body>
</html>
