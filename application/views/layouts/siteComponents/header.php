<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">MyBlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
        <?php if (!isset($_SESSION['account']['id'])) {
            echo "<a class=\"nav-link\" href=\"/account/login\">Авторизация</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/account/register\">Регистрация</a>
                ";
        }
        elseif (isset($_SESSION['account']['id'])) {
            if(isset($_SESSION['account']['avatar'])) {echo "<a class=\"nav-link\" href=\"/account/profile\">".$_SESSION['account']['surname'].' '.$_SESSION['account']['username']."</a>
                </li>
                <li>
                    <img class=\"avatar\"  src=\"/public/avatars/".$_SESSION['account']['avatar']."\" width=\"40\" height=\"40\" alt=\"Аватар\" >
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/account/logout\">Выход</a>
                ";} else {echo "<a class=\"nav-link\" href=\"/account/profile\">".$_SESSION['account']['surname'].' '.$_SESSION['account']['username']."</a>
                </li>
                <li>
                    <img class=\"avatar\"  src=\"/public/avatars/default.jpg\" width=\"40\" height=\"40\" alt=\"Аватар\" >
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/account/logout\">Выход</a>
                ";};
        }?>
                </li>
            </ul>
        </div>

    </div>
</nav>
<div class="gradient-top"></div>

