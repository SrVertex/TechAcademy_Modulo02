<h1 class="text-center">Login</h1>
<div class="loginPC">
    <div class="bannerLogin">
        <img src="img/loginPhotoPC.png" class="imgLoginPC" alt="">
        <img src="img/loginPhotoPC2.png" class="imgLoginPC2" alt="">
        <img src="img/loginPhotoMobile.png" class="imgLoginMobile" alt="">
        <div class="formLogin">
            <h3 class="text-center">Efetue seu Login</h3>
            <div>
                <form class="" id="form" action="home">
                    <div class="mb-3">
                        <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control required" id="exampleDropdownFormEmail1 email" placeholder="email@exemplo.com" required oninput="emailValidate()">
                        <span class="span-required" style="display: none; color: red;">Email Invalido</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleDropdownFormPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control required" id="exampleDropdownFormPassword1 password" placeholder="Digite sua senha" required oninput="mainPasswordValidate()">
                        <span class="span-required" style="display: none; color: red;">A senha deve ter 8 digitos</span>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck" required>
                            <label class="form-check-label" for="dropdownCheck">
                                Lembrar-me
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-light">Login</button>
                </form>
                <div class="dropdown-divider mb-3"></div>
                <a class="textLinks" href="cadastro">É novo por aqui? Cadastre-se</a>
                <a class="textLinks" href="resetPassword">Esqueceu sua senha?</a>
            </div>
        </div>
    </div>
</div>

<script src="js/scriptLogin.js"></script>
<div class="spacing"></div>