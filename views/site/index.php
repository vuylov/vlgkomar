<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\SliderAsset;
use yii\bootstrap\Carousel;
SliderAsset::register($this);

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="fill bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3 alpha-white">
                    <h3>ОБЩИЙ ПРИНЦИП работы всех систем "MOSQUITO KILLING"</h3>
                    <ul class="product-features">
                        <li>Системы привлекают комаров и мошку теплом, углекислым газом (CO2 - газ, который мы выдыхаем), специальным аттрактантом (не ядовит, имеет легкий запах грибов, кожи и т.д.), УФ-светом специального спектра.</li>
                        <li>Комары и мошка засасываются вентилятором и уничтожаются внутри корпуса/</li>
                        <li>Уничтоженные насекомые выбрасываются в специальный контейнер для последующей утилизации - можно применять на корм рыбкам, птицам и т.д.</li>
                    </ul>
                    <p>Эффективная площадт модификаций для участков: 6, 12, 20, 40 соток</p>
                    <p>Эффективная площадь модификаций для внутренних площадей: 80 м2, 100 м2</p>
                </div>
                <div class="col-md-9" style="position: relative">
                    <div class="mks1025">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>