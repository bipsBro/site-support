<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sample */

$this->title = 'Create Sample';
$this->params['breadcrumbs'][] = ['label' => 'Samples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sample-create">
	<div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title"><?= Html::encode($this->title) ?></h4>
        </div>
        <div class="card-content">
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
		</div>
	</div>
</div>
