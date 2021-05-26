<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
            <div class="container">
                <h2 class="mt-3 mb-3">Forma de Pagamento</h2>
                <div class="row">
                    <div class="col-md-7">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="cartao-tab" data-toggle="pill" href="#cartao" role="tab" aria-controls="cartao" aria-selected="true">Cartão</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="boleto-tab" data-toggle="pill" href="#boleto" role="tab" aria-controls="boleto" aria-selected="false">Boleto</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="cartao" role="tabpanel" aria-labelledby="cartao-tab">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="N° cartao">N° cartao</label>
                                        <input type="text" class="form-control" id="N° cartao" name="N° cartao">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nome-cartao">Nome impresso no cartão</label>
                                        <input type="text" class="form-control" id="nome-cartao" name="nome-cartao">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="data-validade"> Data validade</label>
                                        <input type="text" class="form-control" id="data-validade" name="data-validade">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cvv">CVV</label>
                                        <input type="text" class="form-control" id="cvv" name="cvv" >
                                    </div>
                                </div>
                                <div class="form-group col-md-14">
                                    <label for="Nome impresso no cartao">Nome impresso no cartao</label>
                                    <input type="password" class="form-control" id="Nome impresso no cartao" name="Nome impresso no cartao">
                                </div>
                                <div class="d-flex justify-content-end mt-5">
                                    <button type="submit" class="btn btn-dark">Fazer Pedido</button>
                                </div>
                            </form> 
                            </div>
                            <div class="tab-pane fade" id="boleto" role="tabpanel" aria-labelledby="boleto-tab">
                                <form action="" method="get">
                                    <div class="forrm-gruop">
                                        <label for="nome-boleto">Nome Completo</label>
                                        <input class="form-control" type="text" name="nome-boleto">
                                    </div>
                                    <div class="form-gruop">
                                        <label for="parcelas">Parcelas</label>
                                        <select id="parcelas" class="custom-select" name="">
                                            <option>1x R$100,00</option>
                                            <option>2x R$50,00</option>
                                            <option>3x R$33,33</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-end mt-5">
                                        <button type="submit" class="btn btn-dark">Fazer Pedido</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-fluid" src="https://th.bing.com/th/id/R9278a9d24e94310763e7c4b0331876f7?rik=rvs8N0fsTEEQ5g&pid=ImgRaw" alt="Imagem de capa do card">
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <p>Nome de produto</p>
                                        <p>R$ 160,00</p>
                                        
                                    </div>
                                    <divclass="col-md-6">
                                        <p>Subtotal:  R$ 160,00</p>
                                        <p>Custo do frete: R$ 30,00</p>
                                        <p>Total:  R$ 190,00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </section>
        <footer>
            <div class="bg-dark mt-5">
                <span class="text-center text-white pt-2 pb-2 d-block">Copyright © 2021 - Todos os direitos reservados</span>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>