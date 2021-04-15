<div>
    <h2 style="display: inline-block; margin-right: 16px">Articles</h2>
    <a href="/articles/create" style="color: black; text-decoration: none; display: inline-block">
        Создать
    </a>
</div>
<?php foreach ($data as $todo): ?>
<div style="margin-bottom: 16px; background-color: #f5f5f5; padding: 8px">
    <h3 style="margin: 0;">
        <a href="/articles/<?= $todo['id'] ?>" style="color: black; text-decoration: none">
            <?= $todo['title'] ?>
        </a>
    </h3>
    <p style="margin: 0; color: gray"><?= $todo['date'] ?></p>
    <p style="margin: 0;"><?= $todo['content'] ?></p>
</div>
<?php endforeach; ?>
