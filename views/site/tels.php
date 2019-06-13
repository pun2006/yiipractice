<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Phones;

$this->title = 'Tels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-tels">
    <h1><?= Html::encode($this->title) ?></h1>
    <h3>Конфигурация маски из конфигурации приложения</h3>     
    
    <?php
    $formatter=Yii::$app->get('phoneformatter');
    $phones=Phones::find()->all();
    foreach ($phones as $phone) {        
        echo '<p>'.$formatter->asPhone($phone['phone']).'</p>';        
    }
    ?>
    
    <h3>Конфигурация маски чз свойство</h3>
    <?php 
    $formatter=Yii::$app->get('phoneformatter');
    $formatter->prefix="+99";
    $formatter->mask="P_000-000-0000";
    foreach ($phones as $phone) {
        echo '<p>'.$formatter->asPhone($phone['phone']).'</p>';
    }
    
    ?>
	</p>

    <code><?= (__FILE__) ?></code>
</div>
