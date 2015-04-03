<?php
use yii\helpers\Html;
$this->title = 'Услуги компании ООО "ТД СЕРВИС"';
?>
<div class="site-contact">
<h1 class="header text-center"><?= Html::encode($this->title) ?></h1>
<div class="seper"></div>
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th>Наименование услуги</th><th>Цена (руб.)</th>
            </tr>
            <tr>
                <td>Доставка товара в черте города Волгограда</td>
                <td>500</td>
            </tr>
            <tr>
                <td>Доставка товара за пределы города</td>
                <td>500 + 10 рублей за каждый километр</td>
            </tr>
            <tr>
                <td>Монтаж и установка для продуктов серии MKS</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>Монтаж и установка для продуктов серии MT</td>
                <td>300</td>
            </tr>
            <tr>
                <td>Оформление документов на транспортные услуги</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <blockquote>
            <div>Для осуществления доставки необходимо предоставить точный адрес места назначения</div>
            <div>При доставке нужно обязательно проверить в присутствии экспедитора внешний вид товара и комплектность поставки.</div>
        </blockquote>
    </div>
</div>
<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => 'доставка средств защиты от комаров, монтаж средств защиты от комаров, монтаж систем MKS']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Услуги по доставке, монтаже систем защиты от комаров, мошки, мух и слепней']);
?>