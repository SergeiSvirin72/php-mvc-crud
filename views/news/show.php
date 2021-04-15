<div>
    <h2 style="display: inline-block; margin-right: 16px"><?= $data['title'] ?></h2>
    <a href="/articles" style="color: black; text-decoration: none; display: inline-block; margin-right: 16px">
        Back
    </a>
    <a href="/articles/<?= $data['id'] ?>/edit" style="color: black; text-decoration: none; display: inline-block; margin-right: 16px">
        Edit
    </a>
    <form action="/articles/<?= $data['id'] ?>/delete" method="post" style="display: inline-block; margin-right: 16px">
        <input type="submit" name="submit" value="Delete">
    </form>
</div>
<div style="margin-bottom: 16px; background-color: #f5f5f5; padding: 8px">
    <p style="margin: 0; color: gray"><?= $data['date'] ?></p>
    <p style="margin: 0;"><?= $data['content'] ?></p>
</div>