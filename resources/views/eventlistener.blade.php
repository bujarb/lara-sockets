<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Event Listener</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
  <div id="app">
    <p>This is the event listener and when the event is fired off, this page will listen to the status update, and fire the event.</p>
  </div>

  <script src="js/app.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    Echo.channel('chanelDemo').listen('eventTrigger', (e) => {
      console.log(e);

      alert("Event was triggered");
    });
  })
  </script>

  </body>
</html>
