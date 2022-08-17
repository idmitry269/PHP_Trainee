<form action="/account/profile" method="post" enctype="multipart/form-data">
    <div class="control-group form-group">
        <div class="controls">
            <label>Логин:</label>
            <input type="text" class="form-control" value="<?php echo $_SESSION['account']['login'];?>" disabled>
            <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['account']['email'];?>">
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label for="newpass" >Новый пароль для входа:</label>
            <input type="password" class="form-control" name="password" id="newpass">
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label for="username" >Имя пользователя:</label>
            <input type="text" class="form-control" id="username" value="<?php echo $_SESSION['account']['username'];?>">
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label for="usersurname" >Фамилия пользователя:</label>
            <input type="text" class="form-control" id="usersurname" value="<?php echo $_SESSION['account']['surname'];?>">
        </div>
    </div>
    <div class="control-group form-group">
        <label for="avatar" class="form-label">Загрузить аватар</label>
        <input type="file" name="avatar" class="form-control" id="avatar">
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
