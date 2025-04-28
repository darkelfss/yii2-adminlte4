<?php

use darkelfss\adminlte4\assets\AdminLte4Asset;
use yii\helpers\Html;

AdminLte4Asset::register($this);
?>

<?php
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php
    $this->head() ?>
</head>
<body class="hold-transition sidebar-mini">
<?php
$this->beginBody() ?>

<div class="wrapper">
    <?= $this->render('header') ?>
    <?= $this->render('sidebar') ?>

    <div class="content-wrapper">
        <section class="content">
            <?= $content ?>
        </section>
    </div>

    <?= $this->render('footer') ?>
</div>

<?php
$this->endBody() ?>
</body>
</html>
<?php
$this->endPage() ?>
