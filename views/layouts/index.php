<?php
use yii\widgets\Breadcrumbs;?>
<?php $this->beginContent('@app/views/layouts/main.php');?>
    <div class="content-margin">
        <div class="stack-line">
            <div class="container text-center">
                Система для уничтожения комаров и мошки (Mosquito Killing System) Москито Киллер
            </div>
        </div>
        <div class="stack-line light-green">
            <div class="container text-center">
                Линейка новых систем по уничятожениб комаров "Москито Киллер" создана в соответствии с Европейскими требованиями по экологии и стандартами. Имеет сертификат защиты IP-64. Разработана для стран ЕС.
            </div>
        </div>
        <div class="wrap">
            <?= $content ?>
        </div>
        <div class="stack-line light-green">
            <div class="container text-center">
                Ловушка для уничтожения комаров и мошки
            </div>
        </div>
    </div>
<?php $this->endContent();?>