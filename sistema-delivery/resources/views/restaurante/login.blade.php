<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Search Food - Delivery">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Search Food - Delivery</title>

        <!--Icon-->
        <link rel="shortcut icon" href="{{asset('img/icon/SF.ico')}}" type="image/x-icon">

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--cdn Bootstrap JS files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--CSS files-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!--Fa Icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        body{background:url('{{asset('img/bg/bg-login-1.jpg')}}')no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body>
        <div class="cover-container d-flex w-100 flex-column">
            <header>
                <nav style="background-color: #d02911;" class="navbar navbar-expand-lg navbar-light">
                    <a style="font-family: 'Copse', serif;font-size: 30px" class="navbar-brand masthead-brand text-white" href="{{url('/')}}">
                        <img height="50" src="{{asset('img/logo/Logo_Search_Food_Branca.png')}}" alt="Sua Logo">
                        <span>Search Food</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div style="font-weight: bold;font-family: 'Open Sans', sans-serif;" id="menu" class="nav nav-masthead">
                            <a class="nav-item nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="{{url('/sobre')}}">Sobre</a>
                            <a class="nav-item nav-link" href="{{url('/contato')}}">Contato</a>
                            <a class="nav-item nav-link" href="{{url('/login')}}">Entrar ou Cadastrar</a>
                            <div onmouseover="$('.dropdown-menu').css({'display':'block'})" onmouseout="$('.dropdown-menu').css({'display':'none'})" class="dropdown ml-3">
                                <span style="cursor: pointer" class="nav-item nav-link active">
                                    Donos de Restaurante
                                </span>
                                <div style="display: none" class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('/restaurante/cadastro')}}">Cadastrar Restaurante</a>
                                    <a class="dropdown-item" href="{{url('/restaurante/login')}}">Acessar Painel</a>
                                </div> 
                            </div>                          
                        </div>
                    </div>
                </nav>
            </header>
            
            <div class="h-100">
                <div style="float: right" class="col-4 bg-light p-0 h-100">
                    <div class="p-5">
                        <h2 class="text-center">Assece o Painel Administrativo</h2>
                        <form class="mt-5" action="" method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input class="form-control" type="email" name="senha" id="senha" placeholder="Senha">
                            </div>
                            <div class="form-group text-center">
                                <a class="text-danger" href="#">
                                    <i class="fa fa-lock"></i>
                                    Recuperar minha Senha
                                </a>
                            </div>
                            <button type="submit" class="btn btn-block btn-lg btn-primary">
                                Entrar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
    </body>
</html>