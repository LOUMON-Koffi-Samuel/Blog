<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/app.js" defer></script>
</head>

<body class=" bg-slate-50">

    <?php require("nav.php"); ?>

    <?= $content ?>

    <?php require("footer.php"); ?>
</body>

</html>