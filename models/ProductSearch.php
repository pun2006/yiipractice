<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class ProductSearch extends Products {
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['categoryId','price', 'hidden'], 'safe'],
        ];
    }
    
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
    
    public function search($params)
    {
        $query = Products::find();
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
             'pageSize' => 5,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_ASC,

                ]
            ],
        ]);
        
        // загружаем данные формы поиска и производим валидацию
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        
        // изменяем запрос добавляя в него фильтрацию
        $query->andFilterWhere(['id' => $this->id]);
        $query->andFilterWhere(['categoryId'=>$this->categoryId]);
        $query->andFilterWhere(['price'=> $this->price]);
        $query->andFilterWhere(['hidden'=> $this->hidden]);

        
        return $dataProvider;
    }
}