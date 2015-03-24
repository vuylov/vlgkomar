<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Контакты';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="header text-center"><?= Html::encode($this->title) ?></h1>
    <div class="seper"></div>
    <div class="row">
        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Sy4zt0F1nKqi0xT4JnslmGsAba8GgkHi&height=450"></script>
    </div>
    <div class="row three-products">
        <div class="garantee-text">
            <div>Доставка по волгоградской области</div>
            <div>Гарантия 12 месяцев.</div>
        </div>
        <div>Эффективность в течение 3-5 дней 70% гнуса погибает на территории действия. Нарушается популяция ведущая к 100% уничтожению мошки и комаров</div>
        <div class="big-word">Без химии. Безопасно. Эффективно.</div>
    </div>
    <div class="row three-products contact-data">
        <div class="col-md-4">
            <div>ООО "ТД СЕРВИС"</div>
            <div>Телефоны</div>
            <div>8 902 3625794</div>
            <div>8 960 8947002</div>
            <div>8 927 5128743</div>
            <div>8 961 0873243</div>
        </div>
        <div class="col-md-8">
            <div>Телефон офиса 8 (8442) 65 00 85</div>
            <div>Адрес 400080, ул. Командира Рудь дом 1 "А" оф. 415 (рядом с налоговой инспекцией Красноармейского района)</div>
            <div><a href="/">WWW.VOLGAKOMAROV.NET</a></div>
        </div>
    </div>
</div>
