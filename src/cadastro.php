<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="../src/assets/css/style.css">
   </head>
   <body>
      <section>
         <div class="container">
         <h3 class="font-weight-bold pt-5 pb-5">logo</h3>
         <div class="form-cadastro form-page">
            <div class="form-slide">
               <div class="etapa">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="bg-secondary cadastro pt-4 pb-4">
                           <h1 class="text-light">LOGO</h1>
                           <a href="./login.php" class="btn btn-outline-light">Já tenho Cadastro</a>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <h2 class="p-3">Cadastro</h2>
                        <form action="../app/cadastro/cadastro.controller.php" class="form p-3" method="post" id="formCadastro">
                           <div class="form-row">
                              <div class="form-group col-md-7">
                                 <label for="nome">Nome</label>
                                 <input type="text" class="form-control" id="nome" name="nome">
                              </div>
                              <div class="form-group col-md-5">
                                 <label for="DataNasc">Data de Nasc</label>
                                 <input type="date" class="form-control" id="dataNasc" name="dataNasc">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="cpf">CPF</label>
                                 <input type="text" class="form-control" id="cpf" name="cpf">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="rg">RG</label>
                                 <input type="text" class="form-control" id="rg" name="rg">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="tel">TEL</label>
                                 <input type="tel" class="form-control" id="tel" name="tel">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="sexo">Sexo</label>
                                 <select id="sexo" class="form-control" name="sexo">
                                    <option selected>Escolha...</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="email">E-mail</label>
                              <input type="email" class="form-control" id="email" name="email">
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="senha">Senha</label>
                                 <input type="password" class="form-control" id="senha" name="senha">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="ConfirmarSenha">Confirmar Senha</label>
                                 <input type="password" class="form-control" id="confirmSenha" name="confirmSenha">
                              </div>
                           </div>
                           <div class="d-flex justify-content-end">
                              <button type="submit" class="btn btn-dark" id="avancar">Proximo</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="etapa">
                  <div class="row h-100">
                     <div class="col-md-4">
                        <div class="bg-secondary cadastro pt-4 pb-4">
                           <h1 class="text-light">LOGO</h1>
                           <a href="./login.php" class="btn btn-outline-light">Já tenho Cadastro</a>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <h2 class="p-3">Endereço</h2>
                        <form class="form p-3" action="" method="post" id="formEndereco">
                           <div class="form-row">
                              <div class="form-group col-md-4">
                                 <label for="cep">CEP</label>
                                 <input type="text" class="form-control" id="cep" name="cep">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-10">
                                 <label for="endereco">Endereço</label>
                                 <input type="text" class="form-control" id="endereco" name="endereco" disabled>
                              </div>
                              <div class="form-group col-md-2">
                                 <label for="numero">N°</label>
                                 <input type="text" class="form-control" id="numero" name="numero">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-5">
                                 <label for="bairro">Bairro</label>
                                 <input type="text" class="form-control" id="bairro" name="bairro" disabled>
                              </div>
                              <div class="form-group col-md-5">
                                 <label for="cidade">Cidade</label>
                                 <input type="text" class="form-control" id="cidade" name="cidade" disabled>
                              </div>
                              <div class="form-group col-md-2">
                                 <label for="uf">UF</label>
                                 <input type="text" class="form-control" id="uf" name="uf" disabled>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="complemento">Complemento</label>
                              <input type="text" class="form-control" id="complemento">
                           </div>
                           <div class="d-flex justify-content-end mt-5">
                              <button type="button" class="btn btn-outline-dark mr-1"  id="voltar">Voltar</button>
                              <button type="submit" class="btn btn-dark">Proximo</button> 
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer>
         <div class="container">
            <p class="text-right pb-3 pt-3">Politicas - Entregas - Contato</p>
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
      <script src="./assets/js/main.js"></script>
      <script src="./assets/js/ajax.js"></script>
   </body>
</html>