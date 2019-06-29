<?php
namespace app\helpers;
use yii\helpers\ArrayHelper;
use Yii;


class XmlHelper {
    public static function xmlToArray(string $file){
        $var=Yii::getAlias('@app'.'/var/');
        $b=simplexml_load_string(file_get_contents($var.$file));
        $b=json_encode($b);
        $c=json_decode($b,true);
        return $c;
    }
}
?>