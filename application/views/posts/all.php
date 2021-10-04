<?php foreach ($all as $val): ?>
    <h5 class="card-title"><?= $val['post_title']; ?></h5>
    <?= $val['post_content']; ?>
<?php endforeach; ?>

