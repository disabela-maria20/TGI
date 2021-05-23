<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- Meta tags Obrigatórias -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="../src/assets/css/style.css">
      <title>Cadastro Produto</title>
   </head>
   <body>
      <div class="grid">
         <div>
            <?php include './componentes/menu.php';?>
         </div>
         <div>
            <?php include './componentes/faixa.php';?>
            <section class="pt-5 pl-4 pr-4 container">
               <h2>Cadastro Produto</h2>
               <form>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="sku">SKU</label>
                            <input type="text" class="form-control" id="sku" name="sku">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control" id="marca" name="marca">
                        </div>
                        <div class="form-group col-md-5">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select id="categoria" class="form-control" name="categoria" >
                                    <option value="categoria 1">Categoria - 1</option>
                                    <option value="categoria 2">Categoria - 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="PrecoDe">Preço de</label>
                            <input type="number" class="form-control" id="PrecoDe" name="PrecoDe">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="PrecoPor">Preço por</label>
                            <input type="text" class="form-control" id="PrecoPor" name="PrecoPor">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Largura">Largura</label>
                            <input type="text" class="form-control" id="Largura" name="Largura">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="comprimento">Altura</label>
                            <input type="text" class="form-control" id="comprimento" name="comprimento">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="comprimento">Comprimento</label>
                            <input type="text" class="form-control" id="comprimento" name="comprimento">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="quantidade">Quantidade</label>
                            <input type="number" class="form-control" id="quantidade" name="quantidade">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="EnviarPara">Enviar pata</label>
                            <input type="text" class="form-control" id="EnviarPara" name="EnviarPara">
                        </div>
                    </div>
                    <div class="card">
                        <div class="p-5 d-flex justify-content-center">
                            <button type="submit" class="btn btn-dark">Arraste uma imagem</button>    
                        </div>
                    </div>
                    <div class=" d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-outline-dark mr-2">Cancelar</button>
                        <button type="submit" class="btn btn-dark">Cadastrar</button>
                    </div>
               </form>
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