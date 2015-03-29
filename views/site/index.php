<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\SliderAsset;
use yii\bootstrap\Carousel;
SliderAsset::register($this);

$this->title = 'Системы и ловушки для уничтожения комаров и мошки в Волгограде';
?>
<div class="site-index">
    <div id="slider">
        <?= Carousel::widget([
            'items' => [
                [    'content'   => Html::img('@web/images/slides/slide1.jpg'),
                    'caption'   => '<h2 class="slide-caption">Надоели комары и мошка?</h2><p class="slide-little">Мы знаем как Вам помочь</p>'
                ],
                [
                    'content'   => Html::img('@web/images/slides/slide2.jpg'),
                    'caption'   => '<h2 class="slide-caption">Ловушки для уничтожения комаров и мошки</h2><p class="slide-little">Они для Вас сделают это лете еще прекраснее!</p>'
                ],
                [
                    'content'   => Html::img('@web/images/slides/slide3.jpg'),
                    'caption'   => '<h2 class="slide-caption">Защитите Ваших клиентов от назойливых насекомых</h2><p class="slide-little">Без химии. Безопасно. Эффективно.</p>'
                ]
            ],
            'controls' => [
                '<span class="control-left"></span>',
                '<span class="control-right"></span>',
            ]
        ]);?>
    </div>
    <div class="container headings padding-bottom-10">
        <h1 class="text-center">Система для уничтожения комаров и мошки (Mosquito Killing System) Москито Киллер</h1>
        <div class="seper center-block"></div>
        <p class="text-center">
            Линейка новых систем по уничтожению комаров "Москито Киллер" создана в соответствии с Европейскими требованиями по экологии и стандартами. Имеет сертификат защиты IP-64. Разработана для стран ЕС.
        </p>
        <div class="row">
            <div class="col-md-5 text-center">
                <?= Html::img('@web/images/products/mks1025.png', ['class' => 'responsive', 'width' => '35%']);?>
                <div>MKS 1025</div>
				<?= Html::a('Подробнее', ['category/view', 'id' => 11, 'product' => 7], ['class' => 'btn btn-default']);?>
            </div>
            <div class="col-md-7">
                <h3>ОБЩИЙ ПРНЦИП РАБОТЫ всех систем "MOSQUITO KILLING"</h3>
                <ul class="mosquito-features">
                    <li>Системы привлекают комаров и мошку теплом, углекислым газом (CO<sub>2</sub> - газ, который мы выдыхаем), специальным аттрактантом (не ядовит, имеет легкий запах грибов, кожи и т.д.), УФ-светом специального спектра.</li>
                    <li>Комары и мошка засасываются вентилятором и уничтожаются внутри корпуса.</li>
                    <li>Уничтоженные насекомые выбрасываются в специальный контейнер для последующей утилизации - можно применять на корм рябкам, птицам т.д.</li>
                </ul>
                <div class="mosquito-features bold">Эффективная площадь модификаций для участков: 6, 12, 20, 40 соток.</div>
                <div class="mosquito-features bold">Эффективная площадь модификаций для внутренних площадей: 80м<sup>2</sup>, 100м<sup>2</sup>.</div>
            </div>
        </div>
    </div>
    <div class="row three-products padding-bottom-10">
        <div class="container headings">
            <h2 class="text-center">Наша продукция</h2>
            <div class="seper center-block"></div>
            <p class="text-center">
                *полный перечень продукции представлен в каталоге
            </p>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <?= Html::img('@web/images/products/mt200.png', ['class' => 'img-responsive product-image']);?>
                        </div>
                        <div class="col-md-8">
                            <h4>Система Москито Трап МТ-200</h4>
                            <div>Эффективная площадь 15-25 соток</div>
                            <div><b>Факторы воздействия:</b></div>
                            <ul>
                                <li>пищевой углекислый газ (CO<sub>2</sub>) баллон 10 л</li>
                                <li>аттрактант двойного действия (таблетки, жидкий)</li>
                                <li>тепло корпуса и газа (CO<sub>2</sub>)</li>
                                <li>УФ свет и специальная энергосберегающая лампа</li>
                                <li>автоматическое, циклическое и ручное управление</li>
                            </ul>
                        </div>
                        <div class="pull-right">
                            <?= Html::a('Подробнее', ['category/view', 'id' => 11, 'product' => 10], ['class' => 'btn btn-default']);?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <?= Html::img('@web/images/products/mt100.png', ['class' => 'img-responsive product-image']);?>
                        </div>
                        <div class="col-md-8">
                            <h4>Москито Трап МТ-100</h4>
                            <div>Эффективная площадь 10-15 соток</div>
                            <div><b>Факторы воздействия:</b></div>
                            <ul>
                                <li>пищевой углекислый газ (CO<sub>2</sub>) баллон 2,5 л</li>
                                <li>аттрактант (специальная таблетка на сезон)</li>
                                <li>тепло корпуса и газа (CO<sub>2</sub></li>
                                <li>УФ свет и специальная энергосберегающая лампа</li>
                                <li>ручное управление</li>
                            </ul>
                        </div>
                        <div class="pull-right">
                            <?= Html::a('Подробнее', ['category/view', 'id' => 12, 'product' => 11], ['class' => 'btn btn-default']);?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <?= Html::img('@web/images/products/mt64.png', ['class' => 'img-responsive product-image']);?>
                        </div>
                        <div class="col-md-8">
                            <h4>Москито Трап МТ-64</h4>
                            <div>Эффективная площадь 5-6 соток открытого пространства или 100м<sup>2</sup> внутренних помещений</div>
                            <div><b>Факторы воздействия:</b></div>
                            <ul>
                                <li>пищевой углекислый газ (CO<sub>2</sub>) выделяется покрытием корпуса</li>
                                <li>аттрактант (специальная таблетка на сезон)</li>
                                <li>тепло корпуса и газа (CO<sub>2</sub></li>
                                <li>УФ свет и специальная энергосберегающая лампа</li>
                                <li>ручное управление</li>
                            </ul>
                        </div>
                        <div class="pull-right">
                            <?= Html::a('Подробнее', ['category/view', 'id' => 12, 'product' => 12], ['class' => 'btn btn-default']);?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <?= Html::img('@web/images/products/ln001.png', ['class' => 'img-responsive product-image']);?>
                        </div>
                        <div class="col-md-8">

                                <h4>Москито Трап LN001</h4>
                                <div>Эффективная площадь 80м<sup>2</sup> внутренних помещений</div>
                                <div><b>Факторы воздействия:</b></div>
                                <ul>
                                    <li>пищевой углекислый газ (CO<sub>2</sub>) выделяется покрытием корпуса</li>
                                    <li>аттрактант (специальная таблетка на сезон)</li>
                                    <li>тепло корпуса и газа (CO<sub>2</sub></li>
                                    <li>УФ свет и специальная энергосберегающая лампа</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <?= Html::a('Подробнее', ['category/view', 'id' => 12, 'product' => 13], ['class' => 'btn btn-default']);?>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => 'защита от комаров, отпугиватель комаров, уничтожение насекомых, средство от комаров, система уничтожения комаров, уничтожение комаров на даче, борьба с комарами, уничтожение комаров волгоград, прибор от комаров, комары на участке, лампа от комаров, купить от комаров']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Системы и ловушки для уничтожения комаров, мух, слепней, насекомых в Волгограде']);
?>