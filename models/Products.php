<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $categoryId
 * @property int $price
 * @property int $hidden
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoryId'], 'required'],
            [['categoryId', 'price', 'hidden'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoryId' => 'Category ID',
            'price' => 'Price',
            'hidden' => 'Hidden',
        ];
    }
    
    public function getCategory() {
        return $this->hasone(Categories::className(), ['id' => 'categoryId']); 
    }    
    
    public function getCategoryName () {
        return isset($this->category)?$this->category->name:"";
    }
    
}
