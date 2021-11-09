<?php
    if(isset($_POST['register'])){
        \models\userModel::register($_POST['name'],$_POST['password'],$_POST['city'],$_POST['state']);
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
                <input type="text" name="city" placeholder="Sua cidade..." class="w100 marginDownSmall" autocomplete="off" required />
                <select name="state" class="w100 marginDownSmall">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BH">Bahia</option>
                    <option value="CE">Ceará</option>
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
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                <button name="register" class="w30 center marginTopSmall" type="submit"><span>Register</span></button>
            </form>
            <div class="textRight">
                <p>Already have an account? <a href="<?php echo BASE; ?>login">Logue!</a></p>
            </div>
        </div>
    </div>
</section>
