<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use yii\helpers\ArrayHelper;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype'   => 'multipart/form-data'
        ]
    ]); ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name'), [
        'prompt'    => 'Выберите категорию'
    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'detail')->widget(Widget::className(),[
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'clips',
                'fullscreen'
            ]
        ]
    ]) ?>

    <?= $form->field($model, 'preview')->widget(Widget::className(),[
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'clips',
                'fullscreen'
            ]
        ]
    ]) ?>

    <?= $form->field($model, 'radius')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'thumbnail')->fileInput()?>

    <?= $form->field($model, 'files[]')->fileInput(['multiple' => true])?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group pull-right">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
