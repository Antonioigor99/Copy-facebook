<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!--Meta Tags-->
    <!--css-->
    <link rel="stylesheet" href="css/style.css">
    <!--css-->
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!--fonts-->
    <title>Nato community</title>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Nato Community</h2>
            </div><!--logo-->
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone</p>
                    <input type="email">
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password">
                </div><!--form-element-->
                <div class="form-element">
                    <input type="submit">
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div><!--div criada para limpar o float-->
        </div><!--center-->
    </header>
    <main>
        <div class="center">
            <div class="img-world">
                <img src="conecnted.png" alt="">
            </div><!--img-peoples-->

            <div class="conteiner-create-accont">
                <h2>Abra sua conta</h2>
                <h3>Conecte-se com novas pessoas e desbrave o mundo!</h3>
                <form class="create-account">
                    <div class="w50">
                        <input type="text" placeholder="Nome">
                    </div><!--w50-->

                    <div class="w50">
                        <input type="text" placeholder="Sobrenome">
                    </div><!--w50-->

                    <div class="w100">
                        <input type="email" placeholder="E-mail">
                    </div><!--w100-->

                    <div class="w100">
                        <input type="password" placeholder="Senha">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de nascimento</h2>
                        <select class="birth" name="day-birth">
                            <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php }?>
                        </select><!--day-of birth-->

                        <select class="birth" name="month-birth">
                            <option value="0">junho</option>
                        </select><!--day-of birth-->

                        <select class="birth" name="year-birth">
                        <?php
                                for($i = 1960; $i <= 2030; $i++){
                            ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php }?>
                        </select><!--day-of birth-->
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div><!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div><!--input-radio-->
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" value="Cadastrar">
                    </div>
                    <div class="clear"></div>
                </form><!--create-account-->
            </div><!--conteiner-create-accont-->
            <div class="clear"></div>
        </div><!--center-->
    </main>
    <section class="languages">
        <div class="center">
            <a class="selected-language" href="#">Portugues (BR)</a>                        
            <a href="#">Portugues (BR)</a>                        
            <a href="#">Portugues (BR)</a>                        
            <a href="#">Portugues (BR)</a>                        
            <a href="#">Portugues (BR)</a>                        
            <a href="#">Portugues (BR)</a>                        
            <a href="#">Portugues (BR)</a>                        
        </div><!--center-->
        <div class="center" style="border: 0; padding-top:20px;">
            <div class="other-languages">
                <a href="#">Africâner</a>
                <a href="#">Alemão</a>
                <a href="#">Amárico</a>
                <a href="#">Amárico</a>
                <a href="#">Bielorrusso</a>
                <a href="#">Birmanês</a>
                <a href="#">Birmanês</a>
                <a href="#">Ilocano</a>
                <a href="#">Iorubá</a>
                <a href="#">Irlandês</a>
                <a href="#">Italiano</a>
                <a href="#">Concani</a>
                <a href="#">Laosiano</a>
                <a href="#">Letão</a>
                <a href="#">Latim</a>
                <a href="#">Polonês</a>
                <a href="#">Norueguês</a>
                <a href="#">Guzerate</a>
                <a href="#">Holandês</a>
                <a href="#">Finlandês</a>
            </div><!--other-languages-->
        </div><!--center-->
    </section><!--languages-->
</body>

</html>