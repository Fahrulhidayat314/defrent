<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use PhpParser\Node\Stmt\Echo_;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column bg-dark-subtle h-100">
<?php $this->beginBody() ?>

<header id="header">
        
   
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo '<img src="assets/defrent2.png" alt="Header Image" class="header-image" width="80px" >';
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            // echo '<span class="badge text-bg-info">Info</span>';
            ['label' => 'Home', 'url' => ['/site/index']],
           // ['label' => 'About', 'url' => ['/site/about']],
           // ['label' => 'Administrator', 'url' => ['/administrator']],
            //['label' => 'User', 'url' => ['/user']],
            ['label' => 'Cars Type', 'url' => ['/jenismobil']],
            ['label' => 'Rental Rules', 'url' => ['/aturan']],
            ['label' => 'Rent!!', 'url' => ['/penyewaan/create']],
            ['label' => 'Cars', 'url' => ['/mobil']],
            ['label' => 'Feedback', 'url' => ['/tbl-feedback/create']],
            ['label' => 'Payment', 'url' => ['/pembayaran/create']],
            // tbl-pelanggaran || pembayaran
           // ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);

    NavBar::end();
    ?>
</header>
    
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

</main>

<footer id="footer" class="mt-auto py-3 bg-body-secondary">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; DefRent <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end">Contact </div>
        </div>
    </div>
</footer>

<!-- <?php $this->endBody() ?> -->
</body>
</html>
<?php $this->endPage() ?>

<style>
    .nav-link{
        color: #F49D1A;
    }
    .nav-link:hover{
        color: #DC3535;
    }
    .nav-link:active{
        color: #DC3535;
    }
    /* .nav-link: */
</style>
