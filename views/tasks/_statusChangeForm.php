<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<div class="status-change-form">
<?php

$form = ActiveForm::begin([
    'method' => 'post',
    'action' => Url::to([
        'tasks/status',
        'id' => $model->id
    ])
]);
?>	
	<h4>Приоритет</h4>
	<div class="form-group">		
		<?= Html::submitButton('В работе', ['class' => 'btn btn-primary', 'name' => 'do']) ?>
        <?= Html::submitButton('Выполнено', ['class' => 'btn btn-success', 'name' => 'success']) ?>
        <?= Html::submitButton('Ошибка', ['class' => 'btn btn-danger', 'name' => 'failed']) ?>
        <?= Html::submitButton('Приостановить', ['class' => 'btn btn-warning', 'name' => 'pause']) ?>
        <?= Html::submitButton('Открыть', ['class' => 'btn btn-secondary', 'name' => 'open']) ?>
        <?= Html::submitButton('Закрыть', ['class' => 'btn btn-success', 'name' => 'close']) ?>
        <?= Html::submitButton('Отменить', ['class' => 'btn btn-danger', 'name' => 'cancel']) ?>
    </div>
    

   

<?php ActiveForm::end(); ?>
</div>
