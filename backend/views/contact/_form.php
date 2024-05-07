<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Contact $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contact-form row">
<div class="col">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'location')->textarea(['rows' => 6]) ?>

</div>

<div class="col-4">
    
    <?= $form->field($model1, 'telegram')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'instagram')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'facebook')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'youtube')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'linkedin')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'github')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'twitter')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'whatsapp')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1, 'tiktok')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model1,'snapchat')->textInput(['maxlength' => true]) ?>
    
</div>
<div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>
<?php ActiveForm::end(); ?>
</div>
