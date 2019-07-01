<?php

use yii\db\Migration;
// use yii\db\Schema;

/**
 * Class m190610_140146_categories
 */
class m190610_140146_categories extends Migration
{
    
    public function up()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),            
        ]);
        $this->insert('categories', ['name'=>'Dell']);
        $this->insert('categories', ['name'=>'Asus']);
        $this->insert('categories', ['name'=>'HP']);
        $this->insert('categories', ['name'=>'Acer']);

    }

    public function down()
    {
        $this->dropTable('categories');
    }
    
}
