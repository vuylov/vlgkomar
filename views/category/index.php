<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\helpers\VarDumper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Каталог';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">
    <h1 class="text-center header"><?= Html::encode($this->title) ?></h1>
    <div class="seper"></div>
    <?php if(count($categories) > 0):?>
        <ul class="product-categories">
            <?php foreach($categories as $category):?>
                <li>
                    <a href="<?=Url::to(['category/view', 'id' => $category->id]); ?>">
                        <div style="float: left"><?= Html::img($category->thumb, ['class' => 'img-responsive']);?></div>
                        <div class="category-description">
                            <h4><?= $category->name;?></h4>
                            <div class="seper center-block"></div>
                            <?php if($category->preview):?>
                                <div class="category-description-detail">
                                    <?= $category->preview;?>
                                </div>
                            <?php endif;?>
                        </div>

                    </a>
                </li>
            <?php endforeach;?>
        </ul>
        <div class="clearfix"></div>
    <?php endif;?>

    <?php if(!Yii::$app->user->isGuest):?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'name',
                'detail:ntext',
                'thumb:ntext',
                'keywords:ntext',
                // 'description:ntext',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    <?php endif;?>
</div>
