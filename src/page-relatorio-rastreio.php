<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../src/assets/css/style.css">
        <title>Rastreio de pedido</title>
    </head>
    <body>
        <div class="grid">
            <div>
                <?php include './componentes/menu.php';?>
            </div>
            <div>
                <?php include './componentes/faixa.php';?>
                <div class="pt-5 pl-4 pr-4 container">
                    <section> 
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <h2>Rastreio de pedido</h2>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Digite aqui" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button" id="button-addon2">Pesquisar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <address>
                                    <p>Fulano de tal Siqueira da Silva</p>
                                    <p>CEP: 0000-000</p>
                                    <p>Rua: Fulano de tal, 000</p>
                                    <p>Vila Pinheiro - São Paulo - SP </p>
                                    </address>
                                    
                                </div>
                                <div class="col-md-7">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.6991184585313!2d-46.4937574855444!3d-23.50734456548365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6169dfc402ed%3A0x58a00b304779f7f3!2sCol%C3%A9gio%20Carlos%20Drummond%20de%20Andrade%20-%20Ponte%20Rasa!5e0!3m2!1spt-BR!2sbr!4v1621646372656!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" class="w-100"></iframe>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    
                                        <th scope="col">Data</th>
                                        <th scope="col">Hora</th>
                                        <th scope="col">Evento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    
                                        <td>17/03/2021</td>
                                        <td>10h30</td>
                                        <td>Separação no estoque</td>
                                    </tr>
                                    <tr>
                                        
                                        <td>17/03/2021</td>
                                        <td>13h40</td>
                                        <td>Produto em transito</td>
                                    </tr>
                                    <tr>
                                        
                                        <td>17/03/2021</td>
                                        <td>16h36</td>
                                        <td>Produto entregue</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>