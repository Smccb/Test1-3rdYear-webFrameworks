<!doctype html>
<html lang=en>
<head>
    <title>

    </title>
</head>
<body>
<h2>
    id: <?= $listData->getId() ?>
</h2>
<div>
    title = <?= $listData->getTitle() ?>
    <strong>
        <?= $listData->getTitle() ?>
    </strong>

    num pages = <?= $listData->getNumPages() ?>
</div>
<img src= <?= $listData->getImage() ?>>
</body>
</html>
