<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\BaseInflector;

$this->title = 'helpers';
$this->params['breadcrumbs'][] = $this->title;
?>



<?php

    echo html::tag("h2","StringHelper::truncateWords");
    $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";           
    echo Html::tag("p",$string);
    echo html::tag("p",StringHelper::truncateWords($string,12));
    
    echo html::tag("h2","BaseInflector::id2camel");
    echo html::tag('p',"created_at");
    echo html::tag("p",BaseInflector::id2camel("created_at","_"));
    
    echo html::tag("h2","BaseInflector::transliterate");
    echo html::tag("p","купи слона");
    echo html::tag("p",BaseInflector::transliterate("Купи слона"));
    
 ?>

    <code><?= __FILE__ ?></code>
</div>
