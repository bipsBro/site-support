<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sample */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Samples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sample-view">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h2 class="title">
                <?= Html::encode($this->title) ?>
                <span class="pull-right clearfix">
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </span>
                    
            </h2>
        </div>
        <div class="card-content">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name:ntext',
                    'title:ntext',
                    'status',
                ],
            ]) ?>
        </div>
    </div>
</div>
