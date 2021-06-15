<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Login</h1>
        <!-- <?php var_dump($menu) ?> -->

        <ul>
            <?php foreach($menu as $item): ?>
                <li><a href="<?= $item['url'] ?>"><?=$item['title'] ?></a></li>
            <?php endforeach; ?>

        </ul>
    </body>
</html>