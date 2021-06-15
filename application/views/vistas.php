<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><?= $titulo ?></h1>
        <h2><?php echo $titulo ?></h2>

        <ul>
            <?php foreach($lista as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>