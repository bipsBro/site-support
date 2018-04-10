<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Samples';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sample-index">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title"><?= Html::encode($this->title) ?></h4>
            <p class="category">
                <?= Html::a('Create Sample', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
        </div>
        <div class="card-content">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'name:ntext',
                    'title:ntext',
                    'status',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
