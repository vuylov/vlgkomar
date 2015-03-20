<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\VarDumper;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Каталог';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <?php foreach($categories as $category):?>
        <div class="stack-line">
            <?= $category->name;?>
        </div>
    <?php endforeach;?>


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
