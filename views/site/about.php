<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\bootstrap\Collapse;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>    

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
<?php 
echo Collapse::widget([
    'items' => [
        // equivalent to the above
        [
            'label' => 'Collapsible Group Item #1',
            'content' => 'Anim pariatur cliche...',
            // open its content by default
            'contentOptions' => ['class' => 'in']
        ],
        // another group item
        [
            'label' => 'Collapsible Group Item #1',
            'content' => 'Anim pariatur cliche...',
            
        ],
        // if you want to swap out .panel-body with .list-group, you may use the following
        [
            'label' => 'Collapsible Group Item #1',
            'content' => [
                'Anim pariatur cliche...',
                'Anim pariatur cliche...'
            ],
            
            'footer' => 'Footer' // the footer label in list-group
        ],
    ]
]);
 ?>

    <code><?= __FILE__ ?></code>
</div>
