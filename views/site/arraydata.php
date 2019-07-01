<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Products;
use app\models\AdpProduct;

$this->title = 'gridview arrayDataProvider';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-gridview">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>
		GridView реализован средствами ArrayDataProvider.  
	</p>
	<p>
    

 
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'beforeRow' =>function ($model, $key, $index, $grid)
        {
        },
            
        'columns' => [
            [
                'attribute'=>'id',  

            ],
            [
                'attribute'=>'categoryId',
                'filter' =>AdpProduct::getCategory(),
                'value'=>function($value) {
                    return AdpProduct::getCategory($value['categoryId']);                
                }
            ],                
            [
                'attribute' => 'price'
                
            ],
            [
                'attribute' => 'hidden',
                'filter'=>['0'=>'false','1'=>'true'],
                'value'=>function ($model) {
                return $model['hidden'] ? 'true':'false';
                }
            ],            
                
        ],

        
    ]);
    ?>

    
	</p>

	<code><?= __FILE__ ?></code>
</div>
 