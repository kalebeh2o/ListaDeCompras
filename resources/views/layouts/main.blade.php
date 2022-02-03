<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="icon" type="image/png" href="assets/images/favicon.ico"/>
        <script src="https://kit.fontawesome.com/0d8fc5be45.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <style>
        body {
            background-color:aliceblue;
        }
        </style>

    </head>
    <body >
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-gradient">
                <div class="container">
                <a class="navbar-brand h1 mb-0 " href="/"> 
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Carrinho de Compras
                </a>
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown dropleft">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="navbardrop" href="#">
                        Redes Sociais criador
                    </a>
                    <div class="dropdown-menu ">
                        <a class="dropdown-item" href="https://github.com/kalebeh2o">
                            <i class="fa fa-github-alt" aria-hidden="true"></i>
                            Github
                        </a>
                        <a class="dropdown-item" href="https://www.instagram.com/kalebefraga/">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            Instagram
                        </a>
                    </div>
                    </li>

                </ul>
                </div>
                </div>
            </nav>
            </header>
        <main>
            <div class="container-fluid">
                <div class="row">
 
                    @yield('content')
                </div>
            </div>
        </main>    

    </body>

</html>