<?php $this->layout('auth/template', ['title' => 'Login | Garrafeira']) ?>

<div class="container" style="width: 200; padding: 10%;">


    <div class="card" style="padding: 10%;">

        <div class="text-center">
            <h3>Login</h3>
        </div>

        <ul>
            <li><a href="/">Ir à home</a></li>
        </ul>

        <form action="" method="post">
            <div>
                <input type="text" name="txt_usuario" id="txt_usuario" placeholder="Utilizador">
            </div>
            <div>
                <input type="password" name="txt_senha" id="txt_senha" placeholder="Sua palavra-passe">
            </div>
            <div>
                <button class="btn" type="submit">Entrar</button>
            </div>

            <ul>
                <li>
                    Esqueceu sua conta?
                    <a href="badges.html">Recuperar</a>
                </li>
            </ul>

        </form>
    </div>
</div>