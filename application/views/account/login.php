<form action ="/account/login" method="post">
    <p class = "login"> Авторизация </p>
    <div class="form-group">
        <input type="text" name="login" class="form-control" placeholder="Логин">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Пароль">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="check1">
        <label for="check1" class="form-check-label">Запомнить меня</label>
    </div>
    <button type="submit" class="btn btn-primary">Войти</button>
</form>