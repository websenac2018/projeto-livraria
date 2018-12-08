<?php require_once("header.php"); ?>
<script src="js/facebook-sdk.js"></script>
    <div class="container-fluid col-md-8 centraliza margintop">
        <div class="row">
            <div class="col-md-6 centraliza">
                <fieldset><!-- *************início do formulário ********************** -->
                    <legend><h2>Já sou cadastrado</h2></legend>
                        <form class="form-horizontal" action="php/CRUDS/loginUsuario.php" method="POST">
                            <div class="form-group">
                                <label class="control-label col-sm-2 font-weight-bold" for="iEmail">E-mail:</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="txtEmail" id="iEmail" placeholder="Digite o email" maxlength="100" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 font-weight-bold" for="isenha">Senha:</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" id="isenha" name="isenha" placeholder="Digite a senha" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-md-10">
                                    <button type="submit" class="btn COLORE" name="btn-enviar" onclick="return validarSenha()">Entrar</button>
                                </div>
                            </div>
                        </form>
                </fieldset>
            </div>
            <div class="col-md-6 centraliza">
                <h2>Cadastre-se no site</h2>
                <p class="text-justify">Para comprar em nosso site é preciso realizar um cadastro. Através dele você fará parte do Clube de Vantagens Volare, ficando por dentro das novidades. Além de acesssar descontos e promoções EXCLUSIVAS.</p>
              <div class="form-group">
                                <label class="control-label col-sm-2 font-weight-bold" for="iCPF">CPF:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="iCPF" placeholder="Digite o cpf" name="txtCPF" class="form-control cpf" required>
                                <br/>
                                </div>

                <h2>Conectar com sua rede social</h2>
                <div class="form-group">
                                <div class="col-sm-offset-2 col-md-10">
                                    <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                    <p id="mensagem"></p>
                                    <a href="#" onclick="FB.logout();">Logout</a>
                                </div>


            </div>
        </div>
    </div>
</div>
<?php require_once("footer.php"); ?>
