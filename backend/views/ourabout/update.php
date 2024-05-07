<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Ourabout $model */

$this->title = 'Update Ourabout: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ourabouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ourabout-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
