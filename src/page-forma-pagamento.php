<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                            <div class="form-group col-md-3">
                                <label for="nome-banco">Nome</label>
                                <input type="text" class="form-control" id="nome-banco" name="nome-banco">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="conta-bancaria">Conta Bancaria</label>
                                <input type="text" class="form-control" id="conta-bancaria" name="conta-bancaria">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="dispo-em">Disponivel em</label>
                                <input type="text" class="form-control" id="dispo-em" name="dispo-em">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="conf-altomatica">Confirmação Automática</label>
                                <input type="text" class="form-control" id="conf-altomatica" name="conf-altomatica">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="n-parcelas">N° de parcelas</label>
                                <input type="text" class="form-control" id="n-parcelas" name="n-parcelas">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="invertario-parcela">Intervalo de Parcelas</label>
                                <input type="text" class="form-control" id="invertario-parcela" name="invertario-parcela">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="primeira-parcela">1 ° Parecela</label>
                                <input type="text" class="form-control" id="primeira-parcela" name="primeira-parcela">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="pdv">Diponível de PDV</label>
                                <input type="text" class="form-control" id="pdv" name="pdv">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="modalidade">Modalidade</label>
                                <input type="text" class="form-control" id="modalidade" name="modalidade">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="taxa-banco">Taxa do Banco</label>
                                <input type="tel" class="form-control" id="taxa-banco" name="taxa-banco">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="taxa-operadora">Taxa Operadora</label>
                                <input type="text" class="form-control" id="taxa-operadora" name="taxa-operadora">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="jurus-multa">Jurus de Multa</label>
                                <input type="text" class="form-control" id="jurus-multa" name="jurus-multa">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="jurus-moura">Jurus de Moura</label>
                                <input type="text" class="form-control" id="jurus-moura" name="jurus-moura">
                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label for="gerar-boleto">Gerar Boleto</label>
                                    <select id="gerar-boleto" class="form-control" name="gerar boleto">
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>
                            </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>