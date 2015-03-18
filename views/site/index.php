<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\SliderAsset;
use yii\bootstrap\Carousel;
SliderAsset::register($this);

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div id="slider">
        <?= Carousel::widget([
            'items' => [
                [    'content'   => Html::img('@web/images/slides/mosquitoes.jpg'),
                    'caption'   => '<h2>Caption</h2><p>Знакомы летающие ребята?</p>'
                ],
                [
                    'content'   => Html::img('@web/images/slides/slide2.jpg'),
                    'caption'   => '<h2>Caption2</h2>'
                ]
            ],
            'controls' => [
                '<span class="control-left"></span>',
                '<span class="control-right"></span>',
            ]
        ]);?>
    </div>
    <div class="container headings">
        <h1 class="text-center">Система для уничтожения комаров и мошки (Mosquito Killing System) Москито Киллер</h1>
        <div class="seper center-block"></div>
        <p class="text-center">
            Линейка новых систем по уничятожениб комаров "Москито Киллер" создана в соответствии с Европейскими требованиями по экологии и стандартами. Имеет сертификат защиты IP-64. Разработана для стран ЕС.
        </p>
    </div>
    <div class="row three-products">
        <div class="container headings">
            <h2 class="text-center">Наши системы</h2>
            <div class="seper center-block"></div>
            <p class="text-center">
                *полный перечень продукции представлен в каталоге
            </p>
            <div class="col-md-4">
                123
            </div>
            <div class="col-md-4">
                123
            </div>
            <div class="col-md-4">
                123
            </div>
        </div>
    </div>
</div>