<?php
namespace app\models;

use yii\base\Model;
use app\helpers\XmlHelper;
use yii\helpers\ArrayHelper;

class AdpProduct extends Model{
    public $id;
    public $categoryId;
    public $price;
    public $hidden;    
    
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'categoryId'=>'categoryId',
            'price'=>'price',
            'hidden'=>'hidden',
        
        ];
    }
    
    public function find(array $params=[]){
        $this->load($params);
        $products=XmlHelper::xmlToArray('products.xml')['item'];  
        $CI=$this;        
        if (strlen($CI->id) > 0) {
            $products=array_filter($products,function ($product) use ($CI) {
                return $product['id']==$CI->id;
            });            
        }        
        if (strlen($CI->hidden) > 0) {
            $products=array_filter($products,function ($product) use ($CI) {
                return $product['hidden']==$CI->hidden;
            });            
        }
        
        if (strlen($CI->price) > 0) {
            $products=array_filter($products,function ($product) use ($CI) {
                return $product['price']==$CI->price;
            });
        }
        if (strlen($CI->categoryId) > 0) {
            $products=array_filter($products,function ($product) use ($CI) {
                return $product['categoryId']==$CI->categoryId;
            });
        }
        return $products;        
    }
    public static function getCategory($value=''){
        $categories=XmlHelper::xmlToArray('categories.xml')['item'];
        $arr=ArrayHelper::map($categories, function ($a){return $a['id'];}, function($a) {return $a['name'];});
        if (strlen($value)>0) {
            return $arr[$value];            
        }
        return $arr;        
    }
}

?>