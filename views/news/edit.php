<div>
    <h2 style="display: inline-block; margin-right: 16px">Edit article</h2>
    <a href="/articles/<?= $data['payload']['id'] ?>" style="color: black; text-decoration: none; display: inline-block">
        Back
    </a>
</div>
<form action="" method="post" style="background-color: #f5f5f5">
    <div style="padding: 8px">
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="<?= $data['payload']['title'] ?>"><br>
        <?= $data['errors']['title'] ? "<span style='color: red'>{$data['errors']['title']}</span>": '' ?>
    </div>
    <div style="padding: 8px">
        <label for="date">Date</label><br>
        <input type="date" id="date" name="date" value="<?= $data['payload']['date'] ?>"><br>
        <?= $data['errors']['date'] ? "<span style='color: red'>{$data['errors']['date']}</span>": '' ?>
    </div>
    <div style="padding: 8px">
        <label for="content">Content</label><br>
        <textarea id="content" name="content"><?= $data['payload']['content'] ?></textarea><br>
        <?= $data['errors']['content'] ? "<span style='color: red'>{$data['errors']['content']}</span>": '' ?>
    </div>
    <div style="padding: 8px">
        <input type="submit" id="submit" name="submit" value="Edit">
    </div>
</form>