<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'gridview';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-gridview">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>
		GridView реализован средствами ActiveDataProvider. База sqlite наполняется миграциями. В модели products установленя связь 
	с таблицей Categories. 
		Настроена фильтрация с учетом зависимостей таблиц. Используется подмена значений в поле hidden на true и false. 
	</p>
	<p>
    

<?php Pjax::begin();?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
//         'formatter' => [
//            'class'=>'app\components\gridNullFormat', 
//         ] ,
        'beforeRow' =>function ($model, $key, $index, $grid)
        {
        },
            
        'columns' => [
            [
                'attribute'=>'id'                
            ],
            'categoryId',
            [
            'attribute' =>'categoryId',
            'filter' => app\models\Categories::getFilterArr(),             
                'value' => function ($model) {
                    return $model->categoryName;                                    
                }
            ],
            [
                'attribute' => 'price'
                
            ],
            [
                'attribute' => 'hidden',
                'filter'=>['0'=>'false','1'=>'true'],
                'value'=>function ($model) {
                return ($model->hidden)?'true':'false';
            }
            ]
        ],

        
    ]);
    ?>
    <?php Pjax::end();?>
    
	</p>

	<code><?= __FILE__ ?></code>
</div>
 