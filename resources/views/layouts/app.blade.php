<!doctype html>
<html lang="en">
<head>
  <title>DEMO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- bootstrap css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>

<!-- navbar -->
    <nav class="navbar navbar-dark navbar-fixed-top" style="background: rgba(153, 0, 0, 1)">
      <div class="col-md-8">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/product">Productos</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/product">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cart"><img src="img/carrrin.png" style="height: 30px;"> {{Cart::count()}}</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /navbar -->
    