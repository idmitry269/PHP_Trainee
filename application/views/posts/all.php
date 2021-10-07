<?php foreach ($posts as $val): ?>
    <h5 class="card-title"><?= $val['title']; ?></h5>
    <?= $val['content']; ?>
<?php endforeach; ?>

