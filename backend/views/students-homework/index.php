<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentsHomeworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students Homeworks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-homework-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Students Homework', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'students_id',
            'homework_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
