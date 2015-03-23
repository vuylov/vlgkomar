<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $product->name;
?>
<div class="product-view">

    <h1 class="text-center header"><?= Html::encode($this->title) ?></h1>
    <div class="seper"></div>

    <div class="row">
        <div class="col-md-5">
            <?= Html::img('@web/'.$product->thumb, ['class' => 'img-responsive center-block']);?>
        </div>
        <div class="col-md-7 three-products">
            <div>
                <?= $product->detail;?>
            </div>
            <?php $files = $product->getFiles()->all();?>
            <?php if(count($files) > 0):?>
                <div><b>Файлы для загрузки:</b></div>
                <?php foreach($files as $file):?>
                    <div><a href="<?= $file->name;?>"><?= $file->rawname;?></a> </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</div>
<?php if(!Yii::$app->user->isGuest):?>
    <p class="pull-right">
        <?= Html::a('Изменить', ['product/update', 'id' => $product->id], ['class' => 'btn btn-primary']) ?>
    </p>
<?php endif;?>
<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => ($product->keywords)?$product->keywords:$product->name]);
$this->registerMetaTag(['name' => 'description', 'content' => ($product->description)?$product->description: $product->name]);
?>