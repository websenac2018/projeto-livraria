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
                <fieldset><!-- *************início do formulário ********************** -->
                    <legend><h1>Cadastro</h1></legend>
                    <form action="php/registro.php" method="POST">
                        <div class="form-group"> <h4>Dados pessoais</h4>
                            <label for="iNome">Nome</label>
                            <input type="text" id="iNome" name="txtNome" class="form-control" required>
                            <br/>
                            <label for="iSobrenome">Sobrenome</label>
                            <input type="text" id="iSobrenome" name="txtSobrenome" class="form-control" required>
                            <br/>
                            <label for="iTelefone">Telefone</label>
                            <input type="text" id="i" name="txt" class="form-control phone" required>
                            <br/>
                            <label for="iEmail">E-mail</label>
                            <input type="email" id="iEmail" name="txtEmail" class="form-control" required>
                            <br/>
                            <label for="isenha">Senha</label>
                            <input type="password" class="form-control" id="isenha" name="isenha" required>
                            <br/>
                            <label for="iCPF">CPF</label>
                            <input type="text" id="iCPF" name="txtCPF" class="form-control cpf" required>
                            <br/>
                            <label for="iDataNasc">Data de nascimento</label>
                            <input type="text" id="iDataNasc" name="txtDataNasc" class="form-control date" required>
                            <br/>
                            <label for="sGenero">Sexo</label>
                            <select class="form-control" id="sGenero" name="txtGenero" required>
                                <option value="2">Feminino</option>
                                <option value="1">Masculino</option>
                            </select>
                            
                        </div>
                        <br/>
                        <div class="form-group"><h4>Endereço (cobrança)</h4><br/>
                            <label for="iCEP">CEP</label>
                            <input type="text" id="iCEP" name="txtCEP" class="form-control cep" required>
                            <br/>
                            <label for="iEndCobr">Endereço</label>
                            <input type="text" id="iEndCobr" name="txtEndCobr" class="form-control" required maxlength="255">
                            <br/>
                            <label for="iNum">Número</label>
                            <input type="text"  id="iNum" name="txtNum" class="form-control" required maxlength="10">
                            <br/>
                            <label for="iComplemento">Complemento</label>
                            <input type="text"  id="iComplemento" name="txtComplemento" class="form-control" required maxlength="15">
                            <br/>
                            <label for="iBairro">Bairro</label>
                            <input type="text"  id="iBairro" name="txtBairro" class="form-control" required maxlength="50">
                            <br/>
                            <label for="iCidade">Cidade</label>
                            <input type="text"  id="iCidade" name="txtCidade" class="form-control" required maxlength="50">
                            <br/>
                            <label for="sEstado">Estado</label>
                            <select id="sEstado" name="txtEstado" class="form-control">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                            <br/>
                            
           
                        </div>
                        <div>
                            <button type="submit" class="btn btn-light" name="btn-enviar">Criar sua conta</button>
                        </div>
                    </form>
                </fieldset><!--********fim do formulário*************-->
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
        <script src="js/jquery.mask.js"></script>
        <script src="js/mask.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('.date').mask('00/00/0000');
                $('.time').mask('00:00:00');
                $('.date_time').mask('00/00/0000 00:00:00');
                $('.cep').mask('00000-000');
                //$('.phone').mask('0000-0000');
                $('.phone_with_ddd').mask('(00) 0000-0000');
                $('.phone_us').mask('(000) 000-0000');
                $('.mixed').mask('AAA 000-S0S');
                $('.cpf').mask('000.000.000-00', {reverse: true});
                $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
                $('.money').mask('000.000.000.000.000,00', {reverse: true});
                $('.money2').mask("#.##0,00", {reverse: true});
                $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                    translation: {
                        'Z': {
                            pattern: /[0-9]/, optional: true
                        }
                    }
                });
                $('.ip_address').mask('099.099.099.099');
                $('.percent').mask('##0,00%', {reverse: true});
                $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
                $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
                $('.fallback').mask("00r00r0000", {
                    translation: {
                        'r': {
                            pattern: /[\/]/,
                            fallback: '/'
                        },
                        placeholder: "__/__/____"
                    }
                });
                $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
            });
        </script>
    </body>
</html>