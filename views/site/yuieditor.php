<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\BaseInflector;
use app\widgets\HelloWidget;
use yii\bootstrap\ActiveForm; 
use app\widgets\Alert;
use kartik\time\TimePicker;
use app\models\Phones;


$this->title = 'yuieditor';
$this->params['breadcrumbs'][] = $this->title;
?>



<?php
    echo html::jsFile("http://js.nicedit.com/nicEdit-latest.js");
    echo html::textarea("editor",'asfasdf',["id"=>"editor"]);
    echo html::script("
bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
");
    
 ?>
 
 
 
 
  <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]);
  
  ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->widget(yii\widgets\MaskedInput::classname(),['mask'=>'9999-9999']) ?>
        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->widget(app\widgets\HelloWidget::classname(),[]) ?>
        
        
        

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
    
    <?php 
    echo '<label class="control-label">Birth Time</label>';
	echo TimePicker::widget([
    'name' => 'birth_time',
    'options' => [
        'readonly' => true,
    ],
]);
	$phone=Phones::findOne(["id"=>'1']);
	
	// With a model and without ActiveForm
	echo '<label class="control-label">End Time</label>';
    echo TimePicker::widget(['model' => $phone, 'attribute' => 'id']);
    echo '<label class="control-label">Begin Time</label>';
    echo TimePicker::widget(['name' => 'begin_time']);
    
?>
    <code><?= __FILE__ ?></code>
</div>
