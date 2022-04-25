<div class="container">
    <div class="row">
        <div class="col-lg-8 mb-4">
            <form action="/account/profile" method="post" enctype="multipart/form-data">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Логин:</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['account']['login']; ?>" disabled>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>E-mail:</label>
                        <input type="text" class="form-control"  value="<?php echo $_SESSION['account']['email']; ?>" name="email">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Новый пароль для входа:</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Имя пользователя:</label>
                        <input type="text" class="form-control"  value="<?php echo $_SESSION['account']['username']; ?>" name="username">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Фамилия пользователя:</label>
                        <input type="text" class="form-control"  value="<?php echo $_SESSION['account']['surname']; ?>" name="surname">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Загрузить аватар</label>
                    <input class="form-control" type="file" name="avatar">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
</div>