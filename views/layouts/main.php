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
            'brandLabel' => 'ООО "ТД СЕРВИС"',
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
                ['label' => 'Контакты', 'url' => ['site/contact']],
                ['label' => 'Услуги', 'url' => ['site/services']],
                ['label' => 'Заправка', 'url' => ['site/refill']],
            ],
        ]);
        NavBar::end();
        ?>
        <div class="header-phone">
            <div><span class="glyphicon glyphicon-phone-alt"></span> +7(8442) 65-00-85</div>
            <div><span class="glyphicon glyphicon-earphone"></span> +7 902 362 57 94</div>
        </div>
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
                    <div>
                        <!-- Yandex.Metrika informer -->
                        <a href="https://metrika.yandex.ru/stat/?id=29470340&amp;from=informer"
                           target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/29470340/1_0_4EEC60FF_2ECC40FF_0_pageviews"
                                                               style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" onclick="try{Ya.Metrika.informer({i:this,id:29470340,lang:'ru'});return false}catch(e){}"/></a>
                        <!-- /Yandex.Metrika informer -->

                        <!-- Yandex.Metrika counter -->
                        <script type="text/javascript">
                            (function (d, w, c) {
                                (w[c] = w[c] || []).push(function() {
                                    try {
                                        w.yaCounter29470340 = new Ya.Metrika({id:29470340,
                                            clickmap:true,
                                            trackLinks:true,
                                            accurateTrackBounce:true});
                                    } catch(e) { }
                                });

                                var n = d.getElementsByTagName("script")[0],
                                    s = d.createElement("script"),
                                    f = function () { n.parentNode.insertBefore(s, n); };
                                s.type = "text/javascript";
                                s.async = true;
                                s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                                if (w.opera == "[object Opera]") {
                                    d.addEventListener("DOMContentLoaded", f, false);
                                } else { f(); }
                            })(document, window, "yandex_metrika_callbacks");
                        </script>
                        <noscript><div><img src="//mc.yandex.ru/watch/29470340" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                        <!-- /Yandex.Metrika counter -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pull-right">
                        <p>г.Волгоград ул. Командира Рудь, 1"А", офис 415 </p>
                        <p>тел.: +7(8442) 65-00-85, +7 902 362 5794</p>
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
