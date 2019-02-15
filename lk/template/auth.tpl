<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/styles/Styles.css">
        <script src="template/js/jquery-2.1.0.min.js"></script>
        <script src="template/js/main.js"></script>
        <script src="template/js/ajax.js"></script>
        <title>Cabinet</title>
    </head>
    <body>
    <div class="container">
        <div class="all"></div>
        <div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 block">
            <h1 class="center">Logo</h1>
            <div class="auth">
                <form method="POST" id="authForm">
                    <div class="form-group">
                        <label for="email">Логин</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="pass">Пароль</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button class="btn btn-block btn-success">Вход</button>            
                </form>
                <button class="btn btn-block btn-success btn-reg" onClick="openBlock('.reg', '.auth')">Регистрация</button>
            </div>
            <div class="reg">
                <h3 class="center">Регистрация</h3>
                <form method="POST" id="regForm">
                    <div class="form-group">
                        <label for="email">Логин</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="pass">Пароль</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="pass">Пароль</label>
                        <input type="password" class="form-control" name="password2" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="Email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <button class="btn btn-block btn-success">Регистрация</button>
                </form>
                <button class="btn btn-block btn-success btn-reg" onClick="openBlock('.auth', '.reg')">Отмена</button>
            </div>
        </div>
    </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>