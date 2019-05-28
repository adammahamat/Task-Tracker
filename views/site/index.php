<?php 
use app\components\myTasks\myTasks;
use app\components\tasksCreatedByMe\tasksCreatedByMe;
use app\modules\admin\models\Users;
/* @var $this yii\web\View */
$this->title = Yii::$app->name;

?>

<div class="site-index">
<?= TasksCreatedByMe::widget(); ?>
</div>
