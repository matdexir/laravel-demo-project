<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css')}}" rel="stylesheet">

  <title>Kat.js, the all-in-one framework you need</title>
</head>

<body>
  <nav class="navbar">
    <a class="navbar-brand" href="#">
      <img src="/assets/kat-light.png" width="30" height="30" id="logo">
      Kat.js
    </a>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="m-5 p-3">
          <h1>The all-in-one framework for web5.0</h1>
          <div class="mt-5">
            <button type="button" class="btn btn-primary btn-lg" style="border-radius: 23px;">Learn more</button>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-5">
          <img src="/assets/kat-light.png" width="300" height="300" style="border-radius: 20%; box-shadow: -20px 10px 30px #20FC8F;">
        </div>
      </div>
    </div>
  </div>
</body>

</html>
