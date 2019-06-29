<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Categories;
use pun2006\yiinicedit\NiceditWidget;


$this->title = 'yuieditor';
$this->params['breadcrumbs'][] = $this->title;
$category = Categories::findOne([
    "id" => '1'
]);
?> 
<?=  NiceditWidget::widget(['content' => "some content",'local'=>true,]); ?>

 
 
<?php
$form = ActiveForm::begin([
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => [
            'class' => 'col-lg-1 control-label'
        ]
    ]
]);
?>
        
<?= $form->field($category, 'name')->widget(NiceditWidget::classname(),['local'=>true,'editorOptions'=>['buttonList'=>['bold','italic','underline','left','center']]]) ?>


<?php ActiveForm::end(); ?>

<code><?= __FILE__ ?></code>
</div>



