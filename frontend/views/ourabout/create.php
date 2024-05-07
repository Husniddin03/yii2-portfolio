<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Ourabout $model */

$this->title = 'Create Ourabout';
$this->params['breadcrumbs'][] = ['label' => 'Ourabouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ourabout-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
