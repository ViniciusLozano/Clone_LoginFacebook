<!DOCTYPE html>
<html>
    <head>
        <title>Login Facebook</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximun-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <header>
            <div class="center">
                <div class="logo">
                    <h1>facebook</h1>
                </div><!--logo-->
                <form method="post" class="form-login">
                    <div class="form-element">
                        <p>E-mail ou telefone:</p>
                        <input type="email">
                    </div><!--form-element-->

                    <div class="form-element">
                            <p>Senha:</p>
                            <input type="password">
                        </div><!--form-element-->

                    <div class="form-element">
                            <input type="submit" name="acao" value="Enviar">
                        </div><!--form-element-->
                </form><!--form-login-->
                <div class="clear"></div>
            </div><!--center-->
        </header>

        <section class="main">
            <div class="center">
                <div class="img-pessoas">
                <h2>O Facebook ajuda você a se conectar e <br>
                    compartilhar com as pessoas que fazem parte <br>
                    da sua vida.</h2>
                    <img src="img-1.png">
                </div><!--img-pessoas-->

                <div class="abrir-conta">
                    <h2>Abra sua conta</h2>
                    <h3>É gratuito e sempre sera</h3>

                    <form class="criar-conta">
                        <div class="w-50">
                            <input placeholder="Nome" type="text">
                        </div><!--w-50-->

                        <div class="w-50">
                            <input placeholder="Sobrenome" type="text">
                         </div><!--w-50-->

                        <div class="w-100">
                            <input placeholder="Celular ou email" type="email">
                        </div><!--w-100-->

                        <div class="w-100">
                                <input placeholder="Nova senha" type="password">
                            </div><!--w-100-->

                        <div class="w-100">
                            <h2>Data de Nascimento: </h2>
                            <select name="nascimento-dia" class="nascimento">
                                <?php
                                    for($i = 1; $i <= 31; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

                                <?php } ?>
                            </select>

                            <select name="nascimento-mes" class="nascimento">
                                <option value="0">Janeiro</option>
                                <option value="1">Fevereiro</option>
                                <option value="2">Março</option>
                                <option value="3">Abril</option>
                                <option value="4">Maio</option>
                                <option value="5">Junho</option>
                                <option value="6">Julho</option>
                                <option value="7">Agosto</option>
                                <option value="8">Setembro</option>
                                <option value="9">Outubro</option>
                                <option value="10">Novembro</option>
                                <option value="11">Dezembro</option>
                            </select>

                            <select name="nascimento-ano" class="nascimento">
                                <?php
                                    for($i = 1940; $i <= 2020; $i++){
                                ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>

                            <a href="#">Por que preciso informar minha data de nascimento? </a>

                            <div class="clear"></div>

                        </div><!--w100-->

                        <div class="w-100">
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="masculino">
                                <h2>Masculino</h2>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="feminino">
                                <h2>Feminino</h2>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="politica">
                            <h4>Ao clicar em Abrir conta, você concorda com nossos <br>
                                termos e que leu nossa Política de Dados, incluindo nosso Uso <br>
                                de Coockies. Você pode receber notificações por SMS <br>
                                do Facebook e pode cancelar o recebimento a qualquer momento.
                            </h4>
                        </div>

                        <div class="w-100">
                            <input type="submit" name="acao" value="Cadastre-se">
                        </div>

                        <div class="clear"></div>
                    </form><!--criar conta-->

                </div><!--abrir conta-->

            <div class="clear"></div>

        </div><!--center-->

    </section>


    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (Br)</a>
            <a href="#">Ingles (US)</a>
            <a href="#">Español</a>
            <a href="#">Italiano</a>
            <a href="#">Deutsche</a>
            <a href="#">عربى</a>
            <a href="#">普通話</a>
            <a href="#">Français</a>
        </div><!--center-->

        <div style="border:0;padding-top:10px;" class="center">
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
            <a href="#">lorem ipsum</a>
        </div><!--center-->

    </section><!--lingua-->

</body>
</html>