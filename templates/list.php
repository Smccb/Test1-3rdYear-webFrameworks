<!doctype html>
<html lang=en>
<head>
    <title>
        bookshop all books list page
    </title>
</head>
<body>
<h1>
    list of all books
</h1>

<h2>
    (in our database)
</h2>


<?php
foreach ($lists as $listData):
?>
<div>
    <?= $listData ?>
</div>
<?php
endforeach;
?>


<a href="/?action=about">About page</a>
<br>
<a href="/?action=list">List all books</a>
<footer>
    <a href="/?action=list">Links</a>
</footer>
</body>
</html>

<?php ?>
