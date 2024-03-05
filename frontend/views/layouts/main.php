<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        .navbar {
            width: 100px; /* Set the width of the navbar */
            height: 100vh; /* Make the navbar full height of the viewport */
            position: fixed; /* Fixed position so it stays in place */
            top: 0; /* Align to the top of the viewport */
            left: 0; /* Align to the left of the viewport */
            padding-top: 60px; /* Add some padding to push content below the navbar */
            overflow-y: auto; /* Add scroll bar if content overflows */
        }
        .main-content {
            margin-left: 100px; /* Set margin to accommodate the width of the navbar */
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <!-- Your header content here -->
</header>

<nav class="navbar navbar-dark bg-dark">
    <?= Nav::widget([
        'options' => ['class' => 'navbar-nav flex-column'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            // Add more items as needed
        ],
    ]); ?>
</nav>

<main role="main" class="flex-shrink-0 main-content">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
