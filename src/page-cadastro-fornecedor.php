<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/assets/css/style.css">
    <title>Cadastro Fonecedor</title>
  </head>
  <body>
  <div class="grid">
        <div>
            <?php include './componentes/menu.php';?>
        </div>
        <div>
            <?php include './componentes/faixa.php';?>
            <section>
                <div class="pt-5 pl-4 pr-4 container">
                    <h2>Cadastro Fonecedor</h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="codigo">Codigo</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" class="form-control" id="cnpj" name="cnpj">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="uf">UF</label>
                                <input type="text" class="form-control" id="uf" name="uf">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="NomeFantasia">Nome Fantasia</label>
                                <input type="text" class="form-control" id="NomeFantasia" name="NomeFantasia">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="RazaoSocial">Razão Social</label>
                                <input type="text" class="form-control" id="RazaoSocial" name="RazaoSocial">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="pais">País</label>
                                <input type="text" class="form-control" id="pais" name="pais">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telefone">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="site">Site</label>
                                <input type="text" class="form-control" id="site" name="site">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="constato">Constato</label>
                                <input type="text" class="form-control" id="constato" name="constato">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="observacao">Observação</label>
                                <input type="text" class="form-control" id="observacao" name="observacao">
                            </div>
                            <button type="submit" class="btn btn-dark col-md-1" style="height: 38px; margin-top: 32px;">+</button>
                        </div>
                        <div class="d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-outline-dark mr-2">Cancelar</button>
                            <button type="submit" class="btn btn-dark">Cadastrar</button>
                        </div>
                        
                    </form>
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