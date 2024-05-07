<?php

use common\models\Contact;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Image $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'videoFile')->fileInput() ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'what')->dropDownList([
        'friends' => 'friends',
        'family' => 'family',
        'nature' => 'nature',
        'technique' => 'technique',
    ], ['prompt' => 'About what', 'class' => 'form-select mb-3', 'options' => ['other' => ['selected' => true]]])->label(); ?>


    <?php
    $contacts = Contact::find()->select(['id', 'firstname', 'lastname'])->all();

    // İsim ve soyisim değerlerini birleştirerek yeni bir dizi oluşturuyoruz
    $contactList = ArrayHelper::map($contacts, 'id', function($model) {
        return $model->firstname . ' ' . $model->lastname;
    });
    
    // Drop-down listesi oluşturuyoruz
    echo $form->field($model, 'contactid')->dropDownList($contactList, ['prompt' => 'Select Contact', 'class' => 'form-select mb-3', 'options' => ['0' => ['selected' => true]]]);

    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
