<div class="container">
    <div class="row">
        <div class="col-lg-8 mb-4">
            <form action ="/account/register" method="post">
                <p class = "register"> Регистрация </p>
                <div class="form-group">
                    <input type="text" name="login" class="form-control" id="login"  placeholder="Логин">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Электронный адрес">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Имя">
                </div>
                <div class="form-group">
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Фамилия">
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Загрузить аватар</label>
                    <input class="form-control" type="file" name="avatar">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">

                    <label class="form-check-label">С <a href="#">пользовательским соглашением</a> ознакомлен.</label>
                </div>
                <button type="submit" class="btn btn-primary">Регистрация</button>
            </form>
        </div>
    </div>
</div>