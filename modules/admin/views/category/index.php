<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\entities\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var GridView yii\grid\GridView */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                    'attribute' => 'thumb',
                    'value' => function($model){
                        return Html::img(\yii\helpers\Url::to(\app\entities\Category::getImg($model->id,'category')));
                    },
                    'format' => 'raw',
            ],
            'title',
            'parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
