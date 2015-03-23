<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = $category->name;
//$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

    <h1 class="text-center header"><?= Html::encode($this->title) ?></h1>
    <div class="seper"></div>

    <?php if(count($products) > 0):?>
        <ul class="product-categories">
            <?php foreach($products as $product):?>
                <li>
                    <a href="<?=Url::to(['category/view', 'id' => $category->id, 'product' => $product->id]); ?>">
                        <?= Html::img('@web/'.$product->thumb, ['style' => 'float:left', 'height' => '190px']);?>
                        <div class="category-description">
                            <h4><?= $product->name;?></h4>
                            <div class="seper center-block"></div>
                            <?php if($product->detail):?>
                                <div class="category-description-detail">
                                    <?= $product->preview;?>
                                </div>
                            <?php endif;?>
                        </div>

                    </a>
                </li>
            <?php endforeach;?>
        </ul>
        <div class="clearfix"></div>
    <?php else: ?>
        <div>Категория не заполнена</div>
    <?php endif;?>

    <div class="grey-with-padding">
        <?= $category->detail;?>
    </div>

    <?php if(!Yii::$app->user->isGuest):?>
        <p>
            <?= Html::a('Изменить категорию', ['update', 'id' => $category->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Удалить категорию', ['delete', 'id' => $category->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Удаление категории приведет к удалению всех относящихся к ней продуктов?',
                    'method' => 'post',
                ],
            ]) ?>
            <?= Html::a('Добавить продукт в категорию', ['product/create'], ['class' => 'btn btn-primary']) ?>
        </p>
    <?php endif;?>
</div>
