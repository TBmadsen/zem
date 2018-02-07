<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="vue.js"></script>
  </head>
  <body>
    <h1 id="app">
      {{msg}}
    </h1>
    <script>
      var app = new Vue({
        el: '#app',
        data: {
          msg: "Vue virker"
        }
      })
    </script>
  </body>
</html>
