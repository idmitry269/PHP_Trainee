<form action ="/account/register" method="post">
    <p class = "register"> Регистрация </p>
    <div class="form-group">
        <input type="text" name="login" class="form-control" placeholder="Логин">
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Электронный адрес">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Пароль">
    </div>
    <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Имя">
    </div>
    <div class="form-group">
        <input type="text" name="surname" class="form-control" placeholder="Фамилия">
    </div>
    <div class="form-group">
        <label for="avatar" class="form-label">Загрузить аватар</label>
        <input type="file" name="avatar" class="form-control" id="avatar">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="check1">
        <label for="check1" class="form-check-label">С <a href="#">пользовательским соглашением</a> ознакомлен.</label>
    </div>
    <button type="submit" class="btn btn-primary">Регистрация</button>
</form>
