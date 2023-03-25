<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Propósito</title>

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
            <div style="text-align:center;">
                <h1>Propósito</h1>
                <br>
                <h2> 
                  <p>Esse projeto teve seu inicio diante de uma necessidade de desenvolvimento de <br>
                      elaborar um projeto aplicado para o curso de Análise e Desenvolvimento de sistemas da Faculdade QI <br>
                      onde deviamos aplicar o conhecimento adquirido no decorrer do curso.
                  </p> 
                  <p> Pensei em alguma necessidade que tinha no meu cotidiano, algum problema que pudesse ser solucionado <br>
                      ao menos parcialmente por uma aplicação Web. Então me lembrei na dificuldade que eu e meu grupo de amigos <br>
                      que jogam futebol semanalmente temos em encontrar goleiros disponiveis. 
                  </p>
                  <p> Diante disso decidi desenvolver essa pequena aplicação Web onde Goleiros possam se cadastar  <br>
                      e serem requisitados para jogos, podendo até receber por isso. É uma aplicação simples mas com um potencial <br>
                      interessante de continuidade. Hoje ela foi modelada no padrão MVC(Model-View-Controller).
                  </p>
                  <p> Através dessa aplicação será possível que pessoas desconhecidas se tornem próximas, interajam e ainda possam gerar uma renda extra <br>
                      como é o caso do goleiro que opta por cobrar um valor para jogar.
                  </p>
                </h2>
            </div>
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
