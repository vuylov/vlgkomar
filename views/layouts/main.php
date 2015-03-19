<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <header>
        <?php
        NavBar::begin([
            'brandLabel' => 'My Company',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-fixed-top green',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Главная', 'url' => ['site/index']],
                ['label' => 'Каталог', 'url' => ['category/index']],
                ['label' => 'Заправка', 'url' => ['site/about']],
                ['label' => 'Контакты', 'url' => ['site/contact']]
            ],
        ]);
        NavBar::end();
        ?>
    </header>
    <div class="margin-top">
        <?= $content ?>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="pull-left">&copy; ООО «ТД СЕРВИC» <?= date('Y') ?></p>
                    <div class="clearfix"></div>
                    <p class="copyrights">Все права защищены и охраняются законом. Использование материалов сайта разрешено только с письменного разрешения ООО «ТД СЕРВИC». Информация, размещенная на сайте, не является публичной офертой. За дополнительной информацией обращайтесь по указанным телефонам</p>
                </div>
                <div class="col-md-4">
                    <div class="pull-right">
                        <p>г.Волгоград ул. Командира Рудь, 1"А", офис 415 </p>
                        <p>тел.: +7(8442) 65-00-85, +79023625794</p>
                        <p><?= Html::a('www.volgakomarov.net', ['site/index']);?></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
