<div class="navigation">
    <ul class="nav flex-column nowrap">
        <?php if (isset($_SESSION['account']['id'])) {
        echo "<li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/user/profile\">Ваш профиль</a>
        </li>";
        }
        ?>
        <li class="nav-item">
            <a class="nav-link" href="/posts/all">Все посты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Новости</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Юмор</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Истории</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Путешествия</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Музыка</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Видео</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Игры</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Гифки</a>
        </li>
    </ul>
</div>