<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- Meta tags Obrigatórias -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="../src/assets/css/style.css">
      <title>Relatório de vendas</title>
   </head>
   <body>
      <div class="grid">
         <div>
            <?php include './componentes/menu.php';?>
         </div>
         <div>
            <?php include './componentes/faixa.php';?>
            <div class="container">
              <div class="row pt-5">
                <div class="col-md-8">
                  <h2 class="">Relatório de vendas</h2>
                </div>
                <div class="col-md-4">
                  <form>
                     <div class="form-row">
                        <div class="form-group mr-2">
                           <label for="data">Data</label>
                           <input type="date" class="form-control" id="data" name="data">
                        </div>
                        <div class="form-group">
                           <label for="plataforma">Plataforma</label>
                           <select class="form-control" id="plataforma" name="plataforma">
                              <option>Escolha...</option>
                              <option value="1">Site</option>
                              <option value="2">Mercado Livre</option>
                           </select>
                        </div>
                     </div>
                  </form>
                </div>
              </div>
              <div class="table-responsive table-responsive-xl table-responsive-md">
                <table class="table">
                    <thead>
                      <tr>
                          <th scope="col">N° do Recibo</th>
                          <th scope="col">Data Venda</th>
                          <th scope="col">Plataforma</th>
                          <th scope="col">Status do Pedido</th>
                          <th scope="col">Preço Total</th>
                          <th scope="col">Taxa de Serviço</th>
                          <th scope="col">Desconto</th>
                          <th scope="col">Imposto</th>
                          <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <th scope="row">01</th>
                          <td>05/04/2020</td>
                          <td>Mercado Livre</td>
                          <td>Concluído</td>
                          <td>R$ 20,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 10,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 10,00</td>
                      </tr>
                      <tr>
                          <th scope="row">02</th>
                          <td>05/04/2020</td>
                          <td>Site</td>
                          <td>Concluído</td>
                          <td>R$ 55,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 5,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 50,00</td>
                      </tr>
                      <tr>
                          <th scope="row">03</th>
                          <td>05/04/2020</td>
                          <td>Site</td>
                          <td>Concluído</td>
                          <td>R$ 99,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 99,00</td>
                      </tr>
                      <tr>
                          <th scope="row">04</th>
                          <td>05/04/2020</td>
                          <td>Site</td>
                          <td>Concluído</td>
                          <td>R$ 10,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 10,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 0,00</td>
                      </tr>
                      <tr>
                          <th scope="row">05</th>
                          <td>05/04/2020</td>
                          <td>Site</td>
                          <td>Concluído</td>
                          <td>R$ 60,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 10,00</td>
                          <td>R$ 0,00</td>
                          <td>R$ 60,00</td>
                      </tr>
                    </tbody>
                </table>
              </div>
              <button class="btn btn-dark float-right">Exportar</button>
            </div>
         </div>
      </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
</html>