<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
    <script type="text/javascript" src="vue.js"></script>
  </head>
  <body>

    <h1 id="app">
      {{headline}}
    </h1>
    <script>
      var app = new Vue({
        el: '#app',
        data: {
          headline: "overskirft"
        }
      })
    </script>
  </body>
</html>
