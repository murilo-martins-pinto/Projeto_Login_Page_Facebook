<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Facebook - entre ou cadastre-se</title>
</head>
<body>
<header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div>
            <form action="" class="form-login">
                <div class="form-element">
                    <p>Email ou telefone</p>
                    <input type="email" name="email" id="">
                </div>
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password" name="email" id="">
                </div>
                <div class="form-element">
                    <input type="submit" value="Entrar" name="acao">
                </div>
                <div class="center">
                    <a href="#">Esqueceu a conta?</a>
                </div>

                <div class="clear"></div>
            </form>
            <div class="clear"></div>
        </div>
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
            <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
                <img src="img1.png" />
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <h3>É gratuito e sempre será.</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="Celular ou email" type="email">
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Nova senha" type="password">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de nascimento</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <!--Aplicar depois o PHP-->
                            <option value="1">Jan</option>
                            <option value="2">Fev</option>
                            <option value="3">Mar</option>
                            <option value="4">Abr</option>
                            <option value="5">Mai</option>
                            <option value="6">Jun</option>
                            <option value="7">Jul</option>
                            <option value="8">Ago</option>
                            <option value="9">Set</option>
                            <option value="10">Out</option>
                            <option value="11">Nov</option>
                            <option value="12">Dez</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                        <?php
                                for($i = 1951; $i <= 2023; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="idade">
                            <p><a style="color: #365899" href="#">Por que preciso informar<br> minha data de nascimento?</a></p>
                        </div>
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100"> 
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div><!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div><!--input-radio-->
                        <div class="clear"></div>
                        <div class="termos">
                            <p>Ao clicar em Cadastrar-se, você concorda com nossos <a href="#">Termos</a>,<br><a href="#">Política de Dados</a> e <a href="#">Política de Cookies</a>. Você pode receber<br>notificações por SMS e pode cancelar isso quando quiser.</p>
                        </div>
                    </div>

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastre-se">
                        <div class="mensagem">
                            <h2><a href="#">Criar uma Página</a> para uma celebridade, banda ou empresa.</h2>
                        </div>
                    </div><!--w100-->
                    
                    <div class="clear"></div>
                </form><!--criar-conta-->

            </div><!--abrir-conta-->

            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (Brasil)</a>
            <a href="#">English (US)</a>
            <a href="#">Español</a>
            <a href="#">Français (France)</a>
            <a href="#">Italiano</a>
            <a href="#">Deutsch</a>
            <a href="#">العربية</a>
            <a href="#">हिन्दी</a>
            <a href="#">中文(简体)</a>
            <a href="#">日本語</a>
            <a href="#"><input type="submit" name="acao" value="  +  "></a>
        </div><!--center-->

        <div style="border: 0; padding-top: 10px;" class="center">
            <a href="#">Cadastre-se</a>
            <a href="#">Entrar</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Celular</a>
            <a href="#">Encontrar amigos</a>
            <a href="#">Pessoas</a>
            <a href="#">Páginas</a>
            <a href="#">Locais</a>
            <a href="#">Jogos</a>
            <a href="#">Locais</a>
            <a href="#">Marketplace</a>
            <a href="#">Vídeos</a>
            <a href="#">Grupos</a>
            <a href="#">Receitas</a>
            <a href="#">Esportes</a>
            <a href="#">Look</a>
            <a href="#">Moments</a>
            <a href="#">Instagram</a>
            <a href="#">Local</a>
            <a href="#">Sobre</a>
            <a href="#">Criar anúncio</a>
            <a href="#">Criar Página</a>
            <a href="#">Desenvolvedores</a>
            <a href="#">Carreiras</a>
            <a href="#">Privacidade</a>
            <a href="#">Cookies</a>
            <a href="#">Opções de anúncio</a>
            <a href="#">Termos</a>
            <a href="#">Ajuda</a>
        </div><!--center-->
    </section><!--linguas-->

</body>
</html>