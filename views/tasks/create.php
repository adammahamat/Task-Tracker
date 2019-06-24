<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tasks */

$this->title = 'Содать задачи';
$this->params['breadcrumbs'][] = ['label' => 'Задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasks-create">На тесте

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'workers'=> $workers,
    ]) ?>

</div>
