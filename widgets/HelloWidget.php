<?php
namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;


class HelloWidget extends Widget
{
    public $message;
    public $model;
    public $attribute;
    
    
    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }
    
    public function run()
    {
        return Html::encode($this->message);
    }
}