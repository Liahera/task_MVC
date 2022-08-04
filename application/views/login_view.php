
<main class="form-signin w-25 m-auto">
    <div class="container">
        <form class="form-signin" method="post">
            <h2 class="form-signin-heading">Please sign in</h2><br>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
</main>

<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>
