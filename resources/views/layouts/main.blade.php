<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" 
                integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" 
                crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
              <img src="/img/logo_inema.PNG" alt="Logo Inema">
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="/new_client" class="nav-link">Add Clientes </a>
              </li>
              <li class="nav-item">
                <a href="/list_clients" class="nav-link">Listar Clientes</a>
              </li>
              <li class="nav-item">
                <a href="/new_product" class="nav-link">Add Produtos</a>
              </li>
              <li class="nav-item">
                <a href="/list_products" class="nav-link">Listar Produtos</a>
              </li>
              
              <li class="nav-item">
                <a href="/new_order" class="nav-link">Add Pedidos</a>
              </li>
              <li class="nav-item">
                <a href="/list_orders" class="nav-link">Listar Pedidos</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <main>
        <div class="container-fluid">
          <div class="row">
            @if(session('msg'))
              <p class="msg">{{ session('msg') }}</p>
            @endif
            @if(session('msg-danger'))
              <p class="msg-danger">{{ session('msg-danger') }}</p>
            @endif
            @yield('content')
          </div>
        </div>
      </main>
      <footer>
        <p>Desafio Backend Inema &copy; 2023</p>
      </footer>
      <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>