<?php
    if(isset($_POST['login'])){
        \controllers\userController::login($_POST['name'],$_POST['password']);
    }
?>
<section class="accessContainer itemsFlex alignCenter justCenter">
    <div class="wrap w90">
        <div class="logo textCenter marginDownSmall">
            <h1>RaissaDev</h1>
        </div>
        <div class="box">
            <form method="post" class="itemsFlex justCenter flexWrap marginDownDefault">
                <input type="text" name="name" placeholder="Seu nome..." required class="w100 marginDownSmall" autocomplete="off" />
                <input type="password" name="password" placeholder="Sua senha..." class="w100 marginDownSmall" autocomplete="off" required />
                <button name="login" class="w30 center marginTopSmall" type="submit"><span>Login</span></button>
            </form>
            <div class="textRight">
                <p>Don't have an account? <a href="<?php echo BASE; ?>register">Create!</a></p>
            </div>
        </div>
    </div>
</section>