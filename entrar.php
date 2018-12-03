<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livraria volare</title>
        <!-- links pro bootstrap, fontawesome e css próprio -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> 
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <!-- ******* início da div container -->
        <div class="container-fluid nopadding">
            <header>
                <nav>
                    <!--parte de cima-->
                    <div class="topoformatacao">   
                        <a class="text-light" href="#"><i class="fas fa-users"></i>Sobre a Volare</a>&nbsp;&nbsp;
                        <a class="text-light" href="#"> <i class="fas fa-phone-volume"></i>Fale Conosco</a>   
                    </div>
                    <!--meio-->
                    <div class="navbar navbar-expand-lg navbar-light fundoAzulMar">                       

                        <div class="collapse navbar-collapse justify-content-md-center" id="">
                            
                                <img src="img/testelogo.jpg" title="logomarca" alt="logo livraria volare">
                            
                            <!-- CAMPO DE BUSCA parte 1 e 2-->                            
                            <!--o input group serve pra agrupar a parte 1 e 2-->
                            <div class="input-group col-md-5">
                            <!-- parte 1 select-->    
                            <select class="form-control form-control-lg col-md-3 fontequinze">
                                <option>buscar por</option>
                                <option>título</option>
                                <option>autor</option>
                                <option>ano</option>
                            </select> 
                            <!-- parte 2 insert -->    
                            <input class="form-control form-control-lg" type="text" aria-label="Busca">
                            </div>
                            <!-- fim do campo de busca-->
                            <!-- LINKS DA PARTE DO MEIO DA NAVBAR-->
                            <ul class="navbar-nav fontecatorze">
                                <!--FAVCON--><span style="font-size: 3rem;"><i class="fas fa-user-circle"></i></span>
                                <li class="nav-item active">   
                                    <a class="nav-link" href="#">Entre ou<br/>cadastre-se</a>
                                </li>
                                <!--FAVCON--><span style="font-size: 3rem;"><i class="fas fa-shopping-cart"></i></span>
                                <li class="nav-item active">
                                  <a class="nav-link" href="#">Carrinho<br/>de compras</a>
                                </li>
                                <!--FAVCON--><span style="font-size: 3rem;"><i class="far fa-eye"></i></span>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Alto<br/>contraste</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--parte de baixo-->
                    <!-- a classe textoesp é pra definir o espaço entre um link e outro-->
                    <div class="navbar navbar-expand-lg fundoAzul centraliza fontedezoito  col-md-10">
                        <a class="text-light " href="#"><i class="fas fa-bars"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Categorias</a>
                        <a class="text-light textoesp" href="#">Início</a>
                        <a class="text-light textoesp" href="#">Promoções</a>
                        <a class="text-light textoesp" href="#">Lançamentos</a>
                        <a class="text-light textoesp" href="#">Mais vendidos</a>
                        <a class="text-light textoesp" href="#">Sugestões</a>
                    </div>
                </nav><!-- FIM DA NAV ******************************************************* -->
            </header> <!-- ******fim da header******* -->
            <main class="col-md-10 centraliza">
                <!-- COMEÇO DA PRIMEIRA SECTION-->
                <h1 class="fontedezoito textoAzulMar margintop"><i class="fas fa-book blackcolor"></i> Lançamentos</h1>
                <section class="sectionformatacao">
                        <!-- começo dos cards PRIMEIRA LINHA-->
                        <div class="card-deck mb-4 text-center marginleft">
                        <!--coluna 1-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div> <!--fim da coluna 1-->
                        <!--coluna 2 -->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div><!--fim da coluna 2-->    
                        <!--coluna 3-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                         </div><!--fim da coluna 3-->
                         <!--coluna 4-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div> <!--fim da coluna 4-->
                       </div> <!-- fim dos cards primeira linha-->
                       
                       <!-- começo dos cards SEGUNDA LINHA-->
                        <div class="card-deck mb-4 text-center marginleft">
                        <!--coluna 1-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div> <!--fim da coluna 1-->
                        <!--coluna 2 -->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div><!--fim da coluna 2-->    
                        <!--coluna 3-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                         </div><!--fim da coluna 3-->
                         <!--coluna 4-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div> <!--fim da coluna 4-->
                       </div> <!-- fim dos cards segunda linha-->
                </section><!-- FIM DA PRIMEIRA SECTION -->
                <!-- COMEÇO DA SEGUNDA SECTION-->
                <h1 class="fontedezoito textoAzulMar margintop"><i class="fas fa-book blackcolor"></i> Mais vendidos</h1>    
                <section class="sectionformatacao">    
                    <!-- começo dos cards PRIMEIRA LINHA-->
                        <div class="card-deck mb-4 text-center marginleft">
                        <!--coluna 1-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div> <!--fim da coluna 1-->
                        <!--coluna 2 -->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div><!--fim da coluna 2-->    
                        <!--coluna 3-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                         </div><!--fim da coluna 3-->
                         <!--coluna 4-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div> <!--fim da coluna 4-->
                       </div> <!-- fim dos cards primeira linha-->
                       
                       <!-- começo dos cards SEGUNDA LINHA-->
                        <div class="card-deck mb-4 text-center marginleft">
                        <!--coluna 1-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div> <!--fim da coluna 1-->
                        <!--coluna 2 -->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div><!--fim da coluna 2-->    
                        <!--coluna 3-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                         </div><!--fim da coluna 3-->
                         <!--coluna 4-->
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/placeholder1.jpg" alt="Card image cap">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Título</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="fontedezesseis">Nome Sobrenome<h4>
                                <h3>R$ 00,00</h3>
                                <a class="nav-link textoAzulMar fontequinze" href="#">Adicionar ao carrinho</a>
                            </div>
                        </div> <!--fim da coluna 4-->
                       </div> <!-- fim dos cards segunda linha-->
                </section> <!-- FIM DA SEGUNDA SECTION -->
            </main>
            
            <footer class="navbar navbar-expand-lg fundoAzulMar navbar-nav fontecatorze">
                
                <p class="textoespcem">
                    Central de Atendimento:</br>
                    Telefone: (000) 0000-0000</br>
                    E-mail: livrariavolare@mail.com
                </p>
                <p class="textoespcem">
                    Forma de Pagamento:<br/>
                    <img src="img/pagsegurologo.png" title="logomarca" alt="logo livraria volare">
                            
                </p>
                <p class="textoespcem">
                    Siga-nos nas redes:<br/>
                    <span style="font-size: 3rem;"><i class="fab fa-facebook"></i></span>&nbsp;
                    <span style="font-size: 3rem;"><i class="fab fa-instagram"></i></span>
                </p>
                       
                
            </footer>
            
        <!-- ******* fim da div container -->
        </div>
        
        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
