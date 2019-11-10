<?php

use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sliders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sliders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_ru')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'language' => 'ru',
        ]),
    ]) ?>
    <?= $form->field($model, 'description_uz')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'language' => 'ru',
        ]),
    ]) ?>
    <?= $form->field($model, 'description_en')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'language' => 'ru',
        ]),
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
