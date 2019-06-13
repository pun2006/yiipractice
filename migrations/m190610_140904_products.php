<?php

use yii\db\Migration;
// use yii\db\Schema;

/**
 * Class m190610_140904_products
 */
class m190610_140904_products extends Migration
{
   
    public function up()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'categoryId' => $this->integer(),
            'price' =>$this->integer(),
            'hidden' => $this->integer(),
        ]);
        $this->insert('products', ['categoryId'=>'1','price'=>'100','hidden'=>'1']);
        $this->insert('products', ['categoryId'=>'2','price'=>'200','hidden'=>'1']);
        $this->insert('products', ['categoryId'=>'1','price'=>'300','hidden'=>'0']);
        $this->insert('products', ['categoryId'=>'3','price'=>'400','hidden'=>'0']);
        $this->insert('products', ['categoryId'=>'1','price'=>'500','hidden'=>'0']);
        $this->insert('products', ['categoryId'=>'3','price'=>'600','hidden'=>'1']);
        $this->insert('products', ['categoryId'=>'1','price'=>'700','hidden'=>'1']);
        
    }

    public function down()
    {
        $this->dropTable('products');
    }
   
}
