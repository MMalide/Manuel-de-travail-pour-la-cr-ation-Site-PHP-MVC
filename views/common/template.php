<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description; ?>">
    <title><?= $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>public/CSS/main.css">
    <?php if (!empty($page_css)): ?>
        <?php foreach ($page_css as $fichier_css): ?>
            <link rel="stylesheet" href="<?= URL ?>public/CSS/<?= $fichier_css ?>  ?>">
        <?php endforeach; ?>
    <?php endif ?>

</head>

<body>
    <?php require_once("views/common/header.php") ?>
    <div class="container">
        <?php if (!empty($_SESSION["alert"])): ?>
            <div class="alert <?= $_SESSION['alert']['type']; ?>" role="alert">
                <?= $_SESSION['alert']['message']; ?>
            </div>

        <?php
            unset($_SESSION['alert']);
        endif;
        ?>

        <?= $page_content; ?>
    </div>



    <?php require_once("views/common/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <?php if (!empty($page_javascript)): ?>
        <?php foreach ($page_javascript as $fichier_javascript): ?>
            <script src="<?= URL ?>public/Javascript/<?= $fichier_javascript ?>  ?>"></script>
        <?php endforeach; ?>
    <?php endif ?>
</body>

</html>