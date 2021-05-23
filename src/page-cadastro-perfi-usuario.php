<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/assets/css/style.css">
    <title>Cadastro</title>
  </head>
  <body>
  <div class="grid">
        <div>
            <?php include './componentes/menu.php';?>
        </div>
        <div>
            <?php include './componentes/faixa.php';?>
            <div class="pt-5 pl-4 pr-4 container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Cadastro Perfil Usuário</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ModalLongoExemplo"> Novo </button>
                        </div>
                        <div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="TituloModalLongoExemplo">Novo Usuário</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="usuario">Usuário</label>
                                            <input type="text" class="form-control" id="usuario" name="usuario">
                                        </div>
                                        <div class="form-group">
                                            <label for="tipo-usuario">Tipo</label>
                                            <select id="tipo-usuario" class="form-control" name="tipo-usuario">
                                                <option>Administrador</option>
                                                <option>Atendente</option>
                                                <option>Gerente</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="senha">Senha</label>
                                            <input type="password" class="form-control" id="senha" name="senha">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark mr-2">Cancelar</button>
                                    <button type="button" class="btn btn-dark">Cadastrar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Senha</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Adimin</td>
                                <td>Marcos</td>
                                <td>**********<button class="btn btn-dark float-right">Visualizar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Atendente</td>
                                <td>Isabela</td>
                                <td>*********<button class="btn btn-dark float-right">Visualizar</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>