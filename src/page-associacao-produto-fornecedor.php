<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../src/assets/css/style.css">
        <title>Associacao Produto Fonecedor</title>
    </head>
    <body>
        <div class="grid">
            <div>
                <?php include './componentes/menu.php';?>
            </div>
            <div>
              <?php include './componentes/faixa.php';?>
                <section class="pt-5 pl-4 pr-4 container">
                    <h2>Associação Produto - Fornecedor</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <form class="form">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button" id="button-addon2">Pesquisar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="sku">SKU</label>
                                        <input type="text" class="form-control" id="sku" name="sku">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cod">Cod</label>
                                        <input type="text" class="form-control" id="cod" name="cod">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fornecedor">Fornecedor</label>
                                    <select class="form-control" id="fornecedor2" name="fornecedor">
                                        <option>Escolha...</option>
                                        <option value="1">Fornecedor1</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <img src="./assets/img/produto.png" alt="Produto" class="img-fluid">
                            <label for="imagem" class="d-block text-center">Nome do Produto</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-5">
                        <button type="button" class="btn btn-outline-dark mr-2">Cancelar</button>
                        <button type="button" class="btn btn-dark">Finalizar</button>
                    </div>
                </section>
             </div>
        </div>
        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>