<form action ="/account/login" method="post">
    <p class = "login"> Авторизация </p>
    <div class="form-group">
        <input type="text" name="login" class="form-control" id="login"  placeholder="Логин">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label label class="form-check-label" for="exampleCheck1"">Запомнить меня</label>
    </div>
    <button type="submit" class="btn btn-primary" name="enter">Войти</button>
</form>