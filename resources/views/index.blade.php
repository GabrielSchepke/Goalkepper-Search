@extends('layout.app', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Criar Conta de Goleiro</h5>
                    <p class="card=text">
                        Aqui você se cadastra como Goleiro informando alguns dados  
                        disponibilidade para convite a jogos.
                    </p>
                    <a href="/register" class="btn btn-primary">Criar Cadastro</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <p class="card=text">
                        Já possui Cadastro? Faça seu login e atualize ou visualize suas informações!
                    </p>
                    <br>
                    <br>
                    <a href="/login" class="btn btn-primary">Login</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Encontre seu Goleiro</h5>
                    <p class="card=text">
                        Veja a lista de goleiros disponíveis para o seu jogo de futebol!
                    </p>
                    <br>
                    <br>
                    <a href="/categorias" class="btn btn-primary">Encontre seu Goleiro</a>
                </div>
            </div>
            <style>
            h5{
            color: white; 
            }
            p{
            color: white;
            }
            </style>         
        </div>
    </div>
</div>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
       <h3>Goalkepper Search</h3>
        <h4>&copy; 2023</h4>
      </div>
      <div class="col-6 col-md">
        <h5>Sobre Nós</h5>
        <ul class="list-unstyled text-small">
            <a href="/proposito">Propósito</a><br>
            <a href="https://www.linkedin.com/in/gschepke/">Idealizador</a><br>
            <a href="https://github.com/GabrielSchepke/Goalkepper-Search.git">GitHub</a><br>
        </ul>
      </div>
      <style>
        h3{
            color: white;
            margin-left: 375px;
        }
        h4{
            color: white;
            margin-left: 370px;
        }
        h5{
            color: white; 
        }
        a{
            color: white; 

        }
    </style>
    </div>
  </footer>

@endsection