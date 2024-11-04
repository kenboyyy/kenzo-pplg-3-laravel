<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3-xl font-bold text-lime-400 bg-lime-200 px-0 flex justify-center">
    Hello world! {{ $name }} 
  </h1>
  <p>
    I live in {{ $address }}, and my email is {{ $email }}


  <p>
</body>
</html>