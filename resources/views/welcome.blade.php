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
  <div class="container-lg">
    <div class="row">
      <div class="col-md-6">
        <div class="m-5 p-3">
          <h1>The all-in-one framework for web5.0</h1>
          <div class="mt-5">
            <button type="button" class="btn btn-primary btn-lg" style="border-radius: 23px;">Learn more</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 justify-content-center">
        <div class="p-5">
          <img src="/assets/kat-light.png" width="300" height="300" style="border-radius: 20%; box-shadow: -20px 10px 30px #20FC8F;">
        </div>
      </div>
    </div>
    <div class="m-5 p-5">
      <div class="row text-center">
        <p style="font-size: 2em; font-weight: 700;"><span style="color: #fff">Kat.js</span> is here to make your development struggles easier to manage.</p>
      </div>
      <div class="row text-center">
        <p style="font-size: 1em; font-weight: 400;">
          We provide you with an intuitive API that is based on our love of cats.
          We came up with a system based on meow requests instead of HTTP or QUIC.
          A meow request is typically going to parallelize the process under a 10000 threads for making each and every requests,
          hence allowing for a performance 100x faster than current HTTP
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="p-5">
          <img src="/assets/kat-light.png" width="300" height="300" style="border-radius: 20%; box-shadow: -20px 10px 30px #20FC8F;">
        </div>
      </div>
      <div class="col-md-6">
        <h1 style="font-weight:700;">Blazingly Fast</h1>
        <p>
          Our true goal is to make languages like Rust and Go totally obsolete
          and declare the true superiority of Javascript over those second rate languages.
        </p>
      </div>
    </div>
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
  </div>
</body>

</html>
