<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Contact $model */

$this->title = 'Update Contact: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model1' => $connect,
    ]) ?>

</div>
