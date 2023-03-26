<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cadastro Atualizado</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    GoalKepper Search 
                </a>
            </div>
        </nav>
        <main class="py-4">
          <h1>Cadastro Atualizado Com Sucesso!</h1>
          <br>  
          <a href="/" class="btn" id="btn-menu">Sair</a>
          <style>
            body {
              font-family: Arial, sans-serif;
              font-size: 16px;
              text-align: center;
              background-color: #f2f2f2;
            }
            h1 {
              color: #000000;
              margin-top: 50px;
            }
            p {
              margin-top: 30px;
              margin-bottom: 50px;
            }
            .btn {
              display: inline-block;
              padding: 10px 20px;
              border-radius: 5px;
              text-decoration: none;
              color: #000000;
              font-weight: bold;
              background-color: #7695b4;
              transition: background-color 0.3s ease;
            }
            .btn:hover {
              background-color: #7695b4;
            }
          </style>     
        </main>
    </div>
</body>
</html>
