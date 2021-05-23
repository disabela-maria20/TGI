<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/assets/css/style.css">
</head>

<body>
    <header>
        <div class=" bg-dark">
            <div class="container">
                <p class="text-white text-right">
                    <a href="login.php" class="text-white">Entre</a> ou <a href="cadastro.php" class="text-white">Cadastre-se</a>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="pt-3 pb-3">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="font-weight-bold">Logo</h2>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button" id="">Pesquisar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Categoria 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categoria 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categoria 3</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <img class="d-block w-100" src="../src/assets/img/slide2.jpg" alt="Primeiro Slide" style="height: 300px;">
    </section>
    <section>
        <div class="container">
            <div class="mt-5 mb-5">
                <div class="row">
                    <div class="col-md-5">
                        <img src="../src/assets/img/produto.png" alt="" class="img-fluid d-block m-auto">
                        <div>
                            <img src="../src/assets/img/produto.png" alt="" width="70">
                            <img src="../src/assets/img/produto.png" alt="" width="70">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h2>Nome do produto </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                            voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>
                        <p>Preço de <span class="font-weight-bold">R$ 99,00</span> de <span class="font-weight-bold">R$
                                69,00</span></p>
                        <a href="./pagamento.php" class="btn btn-dark">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h1 class="text-center pt-5 pb-5">Produto</h1>
            <div class="grid-produto">
                <div class="produto-item">
                    <img src="../src/assets/img/produto.png" alt="Produto teste" class="img-fluid">
                    <div class="text-center">
                        <h5>Nome do produto</h5>
                        <p>R$ 900,00</p>
                    </div>
                </div>
                <div class="produto-item">
                    <img src="../src/assets/img/produto.png" alt="Produto teste" class="img-fluid">
                    <div class="text-center">
                        <h5>Nome do produto</h5>
                        <p>R$ 900,00</p>
                    </div>
                </div>
                <div class="produto-item">
                    <img src="../src/assets/img/produto.png" alt="Produto teste" class="img-fluid">
                    <div class="text-center">
                        <h5>Nome do produto</h5>
                        <p>R$ 900,00</p>
                    </div>
                </div>
                <div class="produto-item">
                    <img src="../src/assets/img/produto.png" alt="Produto teste" class="img-fluid">
                    <div class="text-center">
                        <h5>Nome do produto</h5>
                        <p>R$ 900,00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="bg-dark mt-5">
            <span class="text-center text-white pt-2 pb-2 d-block">Copyright © 2021 - Todos os direitosreservados</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>