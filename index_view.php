<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ユーザー一覧</title>
    </head>
    <body>
        <!--ビューファイル-->
        <h1>ユーザー一覧</h1>
        <a href="create.php">新規ユーザー作成</a>
        
        <?php if(count($users) > 0): ?>
        <p>ユーザーは<?= count($users) ?>人</p>
        <?php foreach($users as $user): ?>
        <ul>
            <li><?= $user->name ?></li>
            <li><?= $user->age ?>歳</li>
        </ul>
        <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>