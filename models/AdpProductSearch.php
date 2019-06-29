<?php
namespace app\models;

use yii\data\ArrayDataProvider;
use Yii;

/**
 * Модель поиска продуктов
 * @author bvv
 *
 */
class AdpProductSearch extends AdpProduct{
    
    public function rules()
    {
        // только поля определенные в rules() будут доступны для поиска
        return [
            [['id','hidden','categoryId','price',], 'integer'],            
            
        ];
    }
    public function search ($params) {
        $allModels=$this->find($params);
        $dataProvider=new ArrayDataProvider(
            [
                'key'=>'id',
                'allModels'=>$allModels,
                'modelClass'=>AdpProduct::class,
                'sort' => [
                    'attributes' => ['id','categoryId','hidden','price'],
                ],
                
            ]);
        
        if (($this->load($params) && $this->validate())) {
            $allModels=$this->find($params);
        }
        return $dataProvider;
    }
    
}
?>